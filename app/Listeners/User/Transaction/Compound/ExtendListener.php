<?php

namespace App\Listeners\User\Transaction\Compound;

use App\Traits\TransactionTraits;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\User\Transaction\Compound\ExtendMail;
use App\Notifications\Admin\Transaction\DepositRequest as TransactionDepositRequest;

class ExtendListener
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
    public function handle($event)
    {
        Mail::to($event->transaction->user->email, $event->transaction->user->full_name)->send(new ExtendMail($event->transaction));
        TransactionTraits::notifyAdmins(new TransactionDepositRequest($event->transaction));
    }
}
