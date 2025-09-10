<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;

class OrderAdminMail extends Mailable
{
  use Queueable, SerializesModels;
    protected $order;
    protected $attachmentsPath;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order, $files)
    {
        $this->order = $order;

        $this->attachmentsPath = $files;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
   public function build()
{
    $email = $this->markdown('email.order-admin')
        ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME')) 
        ->to('info@cipdassignmenthelpuk.co.uk') 
        ->subject('Order Placement')
        ->with([
            "order" => $this->order,
        ]);

    foreach ($this->attachmentsPath as $filePath) {
        $email->attachFromStorage('/public/' . $filePath);
    }

    return $email;
}


}
