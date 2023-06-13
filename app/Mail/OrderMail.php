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
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $files)
    {
        $this->data = $request->all();
        $this->attachmentspath = $files;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email= $this->markdown('email.order')->subject('Order Confirmation')->with(["data" =>$this->data]);
        foreach ($this->attachmentspath as $filePath) {
            $email->attachFromStorage('/public/' . $filePath);
        }
        return $email;
    }
}
