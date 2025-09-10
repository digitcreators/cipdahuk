<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\InvoiceCollection;
use App\Http\Resources\Api\InvoiceResource;
use App\Http\Resources\Api\OrderCollection;
use App\Models\Invoice;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Mail\PaymentPaidMail;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;

class InvoiceApiController extends Controller
{

    public function index(Request $request)
    {
        $invoices = null;

        if( $request->query('status') ){
            $status = Status::where('slug', '=', $request->query('status') )->firstOrFail();
            $invoices = Invoice::where(['status_id' => $status->id])->with('order', 'user', 'status')->orderBy('created_at')->get();
        } else {
            $invoices = Invoice::with('order', 'user', 'status')->orderBy('created_at')->get();
        }

        return InvoiceResource::collection($invoices)
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    public function show(Invoice $invoice)
    {
        $invoice->load('user', 'status', 'order', );

        return (new InvoiceResource($invoice))
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    public function update(Request $request, Invoice $invoice)
    {
        $invoice->load('user', 'order', 'status');

        $invoice->update($request->all());

        if($invoice->status_id==5){
            Mail::to($invoice->user->email)->send(new PaymentPaidMail($invoice));
            Mail::to(env('MAIL_FROM_ADDRESS',config('mail.from.address')))->send(new PaymentPaidMail($invoice));
        }

        return (new InvoiceResource($invoice))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

}

