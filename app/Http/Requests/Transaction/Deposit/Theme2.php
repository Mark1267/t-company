<?php

namespace App\Http\Requests\Transaction\Deposit;

use Illuminate\Foundation\Http\FormRequest;

class Theme2 extends FormRequest
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
            'amount' => ['required', 'numeric'],
            'h_id' => 'required|numeric',
            'type' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'type.*' => 'The Currency you want to Spend from Must be selected',
            'h_id.*' => 'The Plan you want to Spend from Must be selected',
            'amount.*' => 'The Amount must be filled'
        ];
    }
}
