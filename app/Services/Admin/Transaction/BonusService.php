<?php 
namespace App\Services\Admin\Transaction;

use App\Models\User;

class BonusService{
    public function addBonus(int $user_id, int $amount): bool{
        $user = User::find($user_id);

        $bonus = User::where('id', $user_id)->update([
            'balance' => $user->balance + $amount
        ]);

        return $bonus;
    }
}