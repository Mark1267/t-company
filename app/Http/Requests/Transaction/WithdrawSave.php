<?php

namespace App\Http\Requests\Transaction;

use App\Models\UserWalletList;
use Illuminate\Foundation\Http\FormRequest;

class WithdrawSave extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'amount' => 'required|numeric',
            'currency_id' => 'required|numeric',
            // 'client_address' => 'required|max:255|string'
        ];
    }
}
