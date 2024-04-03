<?php

namespace App\Traits;

use App\Models\Plan;
use App\Models\User;
use App\Models\Transaction;

trait ReferralTraits{
    public static function getUserReferrals($user_id){
        $referrals = User::where('ref', $user_id)->get();

        return $referrals;
    }

    public function getRefAmount(int $amount): int{
        // $amount = Transaction::find($id)->amount;
        return ($amount * 0.05);
    }
}