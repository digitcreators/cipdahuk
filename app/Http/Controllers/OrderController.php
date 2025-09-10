<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Invoice;
use App\Models\PaperType;
use App\Models\User;
use App\Models\Deadline;
use App\Models\AcademicLevel;
use App\Models\Countries;
use App\Models\Order;
use App\Models\RefrenceStyle;
use App\Models\Fare;
use App\Models\File;
use App\Http\Requests\StoreOrderRequest;
use App\Models\WebSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderAdminMail;
use App\Mail\OrderUserMail;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Reference\Reference;
use Illuminate\Support\Str;


class OrderController extends Controller
{
    public function create()
    {
        $academic_levels = AcademicLevel::orderBy('id', 'ASC')->get();
        $deadlines = Deadline::orderBy('id', 'ASC')->get();
        $reference_styles = RefrenceStyle::orderBy('id', 'ASC')->get();
        $countries = Countries::orderBy('id', 'ASC')->get();
        $web_setting=WebSetting::first();
        $fares          = Fare::all();
         $order = Order::all();
        dd($order);
        // dd($fares);
        return view('pages.order-now', compact('academic_levels', 'deadlines', 'reference_styles', 'countries','web_setting','fares'));
    }

  public function store(Request $request)
{
    // dd($request->all());
    // Get the reCAPTCHA response from the request
    $recaptcha = $request->input('g-recaptcha-response');

    if (is_null($recaptcha)) {
        return redirect()->back()->with('error', 'Please complete the reCAPTCHA to proceed.');
    }

    // Verify the reCAPTCHA response with Google's API
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $params = [
        'secret'   => config('services.recaptcha.secret'),
        'response' => $recaptcha,
        'remoteip' => $request->ip()
    ];

    $client = new \GuzzleHttp\Client();
    $response = $client->post($url, ['form_params' => $params]);
    $responseBody = json_decode($response->getBody(), true);

    if (!$responseBody['success']) {
        return redirect()->back()->with('error', 'reCAPTCHA verification failed. Please try again.');
    }

    // ✅ Validate request
    $validated = $request->validate([
        'paper_topic'        => 'required|string|max:255',
        'course_name'        => 'nullable|string|max:255',
        'reference_style'    => 'nullable|string|max:50',
        'academic_level'     => 'required|integer',
        'number_of_pages'    => 'required|integer|min:1',
        'deadline'           => 'required|integer',
        'detail'             => 'nullable|string',
        'name'               => 'required|string|max:255',
        'email'              => 'required|email',
        'phone'              => 'required|string|max:20',
        'country'            => 'required|string|max:100',
        'emailAttachments.*' => 'file|max:5120', // 5MB per file
    ]);

    $user     = User::where('email', $validated['email'])->first();
    $password = Str::random(8);
    $flag     = false;
    $files    = [];

    // ✅ File validation (business rules)
    if ($request->hasfile('emailAttachments')) {
        $fileSize = 0;
        $fileQty  = 0;

        foreach ($request->file('emailAttachments') as $file) {
            $fileSize += $file->getSize();
            $fileQty++;
        }

        if ($fileQty > 10) {
            return redirect()->route('order')->with('error', 'You can upload a maximum of 10 files.');
        }

        if ($fileSize > 25000000) { // 25MB
            return redirect()->route('order')->with('error', 'Total file size exceeded 25MB.');
        }
    }

    // ✅ Normalize spacing
    $request->merge(['spacing' => $request->spacing == 2]);

    // ✅ Get fare
    $fare = Fare::where([
        'academic_level_id' => $validated['academic_level'],
        'deadline_id'       => $validated['deadline'],
    ])->first();

    if (!$fare) {
        return redirect()->back()->with('error', 'Price not found for selected academic level & deadline.');
    }

    $request->merge([
        "cost_per_page" => $fare->per_page_price,
        "total_price"   => $fare->per_page_price * $validated['number_of_pages'],
    ]);

    DB::beginTransaction();

    try {
        // ✅ Create new user if not exists
        if (!$user) {
            $flag = true;
            $user = User::create([
                'name'     => $validated['name'],
                'email'    => $validated['email'],
                'phone'    => $validated['phone'],
                'country'  => $validated['country'],
                'password' => Hash::make($password),
            ]);

            $user->roles()->sync(2);

            $request->merge([
                'user_id'   => $user->id,
                'status_id' => 1, // default
            ]);

            session()->flash('userData', [
                'userEmail' => 'Customer Account ' . $user->email . ' created successfully. Check your email for login credentials.',
                'userId'    => $user->id
            ]);
        }

        $request->merge(['user_id' => $user->id]);

       
        $order = Order::create($request->all());

        
        $invoice = Invoice::create([
            "ref_no"   => Str::uuid()->toString(),
            "amount"   => $order->total_price,
            "order_id" => $order->id,
            "user_id"  => $user->id,
            "gateway"  => "stripe",
            "currency" => "GBP",
        ]);

        $files = [];

        if ($request->hasfile('emailAttachments')) {
            foreach ($request->file('emailAttachments') as $file) {
                $fileName = uniqid() . '_' . time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads', $fileName, 'public');
        // dd($filePath, storage_path('app/public/' . $filePath), file_exists(storage_path('app/public/' . $filePath)));
        
        
                $files[] = $filePath; 
        
                File::create([
                    "order_id"  => $order->id,
                    "file_path" => $filePath
                ]);
            }
        }


        // ✅ Prepare data for mails
        $data = [
            'order' => $order,
            'user'  => $user,
            'files' => $files,
        ];

        // ✅ Send mails
        try {
        Mail::to($request->email)->send(new OrderUserMail($request, $files, $user, $invoice, $flag, $password, $order));
        Mail::send(new OrderAdminMail($order, $files));
        } catch (\Exception $e) {
            \Log::error("Mail Error: ".$e->getMessage());
        }


        DB::commit();

        return redirect()->route('invoice', ['reference' => $invoice->ref_no])
                         ->with('success', 'Order placed successfully!');

    } catch (\Exception $e) {
        DB::rollBack();
        \Log::error("Order Store Error: ".$e->getMessage(), ['trace' => $e->getTraceAsString()]);
        return redirect()->route('order')->with('error', 'Something went wrong: ' . $e->getMessage());
    }
}

    public function invoice(Request $request)
    {

        if ($request->query('reference')) {
            $invoice = Invoice::where(['ref_no' => $request->query('reference'), 'status_id' => 4])->with('order')->firstOrFail();
            $order = Order::where(['id' => $invoice->order_id])->firstorFail();

            return view('invoice', compact('invoice', 'order'));
        }
    }
    
     public function order()
    {
        $academic_levels = AcademicLevel::orderBy('id', 'ASC')->get();
        $deadlines = Deadline::orderBy('id', 'ASC')->get();
        $reference_styles = RefrenceStyle::orderBy('id', 'ASC')->get();
        $countries = Countries::orderBy('id', 'ASC')->get();
        $web_setting=WebSetting::first();
        $fares          = Fare::all();
       
        return view('order', compact('academic_levels', 'deadlines', 'reference_styles', 'countries','web_setting','fares'));
    }

}

