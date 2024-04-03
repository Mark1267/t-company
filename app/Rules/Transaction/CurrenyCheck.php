<?php

namespace App\Rules\Transaction;

use App\Models\Account;
use App\Models\UserWalletList;
use Illuminate\Contracts\Validation\Rule;

class CurrenyCheck implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(public $currency_id)
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $client_address = UserWalletList::where([
            ['user_id', '=', auth()->user()->id],
            ['account_id', '=', $value]
        ])->first();

        if($client_address == null){
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        $name = Account::find($this->currency_id)->name;
        return 'Wallet ID for ' . $name . ' doesn\'t exist, please update your profile.';
    }
}
