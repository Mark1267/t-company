<?php
namespace App\Traits;

use App\Models\Account;

trait AccountTraits {
    public static function getCurrencyAddress($currency_id){
        $currency = Account::where('id', $currency_id)->first();
        return $currency->address;
    }
}