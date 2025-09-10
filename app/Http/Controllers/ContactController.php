<?php

namespace App\Http\Controllers;
use App\Models\Countries;
use App\Models\Contact;
use App\Mail\ContactAdminMail;
use App\Mail\ContactUserMail;
use App\Http\Requests\StoreContactRequest;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
        $countries = Countries::all();
        return view('contact-us', compact('countries'));
    }

    public function store(StoreContactRequest $request){
        // dd($request->all());

        // Get the reCAPTCHA response from the request
        $recaptcha = $request->input('g-recaptcha-response');
        // Check if the reCAPTCHA response is null
        if (is_null($recaptcha)) {
            return redirect()->back()->with('error', 'Please complete the reCAPTCHA to proceed.');
        }
        // Verify the reCAPTCHA response with Google's API   
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $params = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $recaptcha,
            'remoteip' => $request->ip()
        ];
        $client = new \GuzzleHttp\Client();
        $response = $client->post($url, ['form_params' => $params]);
        $responseBody = json_decode($response->getBody(), true);
        // Check if the reCAPTCHA verification was successful
        if (!$responseBody['success']) {
            return redirect()->back()->with('error', 'reCAPTCHA verification failed. Please try again.');
        }

        $contact = Contact::create($request->all());

        // Send mail to user
        Mail::to($contact->email)->send(new ContactUserMail($contact));
        // Send mail to admin
        Mail::to(env('MAIL_FROM_ADDRESS', 'info@cipdassignmenthelpuk.co.uk'))->send(new ContactAdminMail($contact));

        return redirect()->back()->with('success', 'Your Query Submitted successfully!');

    }
}
