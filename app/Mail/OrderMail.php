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
protected $attachmentspath;
protected $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $files, $order)
    {
        // dd($request);
        $this->data = $request->all();
        $this->attachmentspath = $files;
        $this->order = $order;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email= $this->markdown('email.order')->subject('Order Confirmation')->with(["data" =>$this->data, "order"=>$this->order]);
        foreach ($this->attachmentspath as $filePath) {
            $email->attachFromStorage('/public/' . $filePath);
        }
        return $email;
    }
}
