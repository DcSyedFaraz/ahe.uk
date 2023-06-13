<?php

namespace App\Mail;

use App\Query;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QueryAdminMail extends Mailable
{
    protected $query;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Query $query)
    {
        $this->query= $query;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.query-admin')->with(['query' => $this->query ]);

    }
}
