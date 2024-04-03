<?php

namespace App\Rules\Transaction;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class WithdrawAmountCheck implements Rule
{
    public $client_id;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($client_id)
    {
        $this->client_id = $client_id;
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
        if(auth()->user()->admin){
            $client = User::where('id', $this->client_id)->where('admin', 0)->first();
            $balance = $client->balance;
        }else{
            $balance =  auth()->user()->balance;
        }

        if($value > $balance){
            return false;
        }else{
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The withdrawal amount has exceded your balance.';
    }
}
