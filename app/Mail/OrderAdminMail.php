<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderAdminMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;
    protected $attachmentsPath;
    protected $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $files, $order)
    {
        $this->data = $request->all();
        $this->attachmentsPath = $files;
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->markdown('email.order-admin')->subject('Order Placement ')->with(["data" => $this->data, "order"=>$this->order,]);

        foreach ($this->attachmentsPath as $filePath) {
            $email->attachFromStorage('/public/'. $filePath);
        }

        return $email;
    }
}
