<?php

namespace App\Listeners\Transaction;

use App\Models\User;
use App\Traits\TransactionTraits;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\Transactions\Deposit\Request;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\Transaction\DepositRequest as EventDepositRequest;
use App\Notifications\Admin\Transaction\DepositRequest as TransactionDepositRequest;

class DepositRequest
{
    public $transaction;
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
    public function handle(EventDepositRequest $event)

    {
        Mail::to($event->transaction->user->email, $event->transaction->user->full_name)->send(new Request($event->transaction));
        // $admin = User::where('email', 'nathankrest49@gmail.com')->first();
        // $admin->notify(new TransactionDepositRequest($event->transaction));
        TransactionTraits::notifyAdmins(new TransactionDepositRequest($event->transaction));
    }
}
