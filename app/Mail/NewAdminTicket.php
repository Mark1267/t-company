<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewAdminTicket extends Mailable
{
    use Queueable, SerializesModels;

    public $client;
    public $request;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $client)
    {
        $this->request = $request;
        $this->client = $client;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.admin.ticket.new')->subject($this->request->subject);
    }
}
