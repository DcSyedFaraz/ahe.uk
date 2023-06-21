<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;
protected $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        // dd($request);
        $this->data = $data;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email= $this->markdown('email.order')->subject('Order Confirmation')->with(["data" =>$this->data, "order"=>$this->data['order']]);
        foreach ($this->data['files'] as $filePath) {
            $email->attachFromStorage('/public/' . $filePath);
        }
        return $email;
    }
}
