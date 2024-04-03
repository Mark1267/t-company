<?php

namespace App\Listeners\Transaction;

use App\Models\Feed;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\Transaction\WithdrawalSuccess;
use App\Mail\Transactions\Withdrawal\Success;

class WithdrawalSuccessListener
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
    public function handle(WithdrawalSuccess $event)
    {
        Feed::create([
            'type' => 'success',
            'message' => 'Withdrawal Request Accepted Successful'
        ]);
        toastr()->success('Withdrawal Accepted');
        Mail::to($event->transaction->user->email, $event->transaction->user->full_name)->send(new Success($event->transaction));
    }
}
