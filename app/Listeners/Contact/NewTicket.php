<?php

namespace App\Listeners\Contact;

use Illuminate\Support\Facades\Mail;
use App\Notifications\Contact\NewTicket as NewTicketNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\Contact\NewTicket as NewTicketEvent;

class NewTicket
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(NewTicketEvent $event)
    {
        Mail::to($event->ticket->user->email, $event->ticket->user->full_name)->send(new NewTicketNotification($event->ticket));
    }
}
