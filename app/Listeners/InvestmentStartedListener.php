<?php

namespace App\Listeners;

use App\Models\User;
use App\Models\Transaction;
use App\Traits\ReferralTraits;
use Illuminate\Support\Facades\Mail;
use App\Events\InvestmentStartedEvent;
use App\Notifications\InvestmentStart;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\Transactions\Deposit\Success;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\Ref\DepositNotification;
use App\Models\Compound\Transaction as CompoundTransaction;

class InvestmentStartedListener
{
    use ReferralTraits;
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
    public function handle(InvestmentStartedEvent $event)
    {
        if($event->compound){
            $transaction = CompoundTransaction::where('transaction_id', $event->investment->transactions_id)->first();
        }else{
            $transaction = Transaction::where('transaction_id', $event->investment->transactions_id)->first();
        }

        $client = User::where('id', $transaction->users_id)->first();

        $user = User::where('id', $client->ref)->first();
        if($user != null && !$event->type){
            $user->balance += $this->getRefAmount($transaction->amount);
            $user->save();
            $user->notify(new DepositNotification($this->getRefAmount($transaction->amount), $user, $client, $transaction->currency->name));
        }
        Mail::to($transaction->user->email, $transaction->user->full_name)->send(new Success($transaction));
    }
}
