<?php

namespace App\Listeners\Ticket;

use App\Models\Feed;
use App\Models\User;
use App\Models\Contact;
use App\Mail\NewAdminTicket;
use App\Events\Ticket\ReplyEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReplyListener
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
    public function handle(ReplyEvent $event)
    {
        $ticket = Contact::where('id', $event->reply->user_contact_id);
        $mark_as_read = $ticket->update(['read' => 1]);
        $ticket = $ticket->first();
        $user = User::where('id', $ticket->users_id)->first();
        Mail::to($user->email, $user->full_name)->send(new NewAdminTicket($request = $event->reply, $client = $user));

        Feed::create([
            'message' => 'Repied to user',
            'type' => 'success'
        ]);
        toastr()->success('Reply Sent');
    }
}
