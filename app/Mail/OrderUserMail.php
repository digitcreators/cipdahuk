<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class OrderUserMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    protected $attachmentsPath;
    protected $user;
    protected $invoice;
    protected $order;

   public function __construct($request, $files, $user, $invoice, $flag, $password, $order)
{
    $this->data = $request->all();

    // push all needed values into $data
    $this->data['flag']     = $flag;
    $this->data['password'] = $password;
    $this->data['order']    = $order;
    $this->data['invoice']  = $invoice;
    $this->data['user']     = $user;

    $this->attachmentsPath  = $files;
}

public function build()
{
    $email = $this->markdown('email.order')
        ->subject('Order Confirmation')
        ->with([
            "data" => $this->data,  
        ]);

    foreach ($this->attachmentsPath as $filePath) {
            $email->attachFromStorage('/public/'. $filePath);
        }

    return $email;
}

}
