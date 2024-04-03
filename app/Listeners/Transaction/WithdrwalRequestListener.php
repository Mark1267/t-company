<?php

namespace App\Listeners\Transaction;

use App\Models\User;
use App\Traits\TransactionTraits;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\Transaction\WithdrawalRequest;
use App\Mail\Transactions\Withdrawal\Request;
use App\Notifications\Admin\Transaction\WithdrawalRequest as TransactionWithdrawalRequest;

class WithdrwalRequestListener
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
    public function handle(WithdrawalRequest $event)
    {
        Mail::to($event->transaction->user->email, $event->transaction->user->full_name)->send(new Request($event->transaction));
        // $admin = User::where('email', 'nathankrest49@gmail.com')->first();
        TransactionTraits::notifyAdmins(new TransactionWithdrawalRequest($event->transaction));
        // $admin->notify();
    }
}
