<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class ProfileSave extends FormRequest
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
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->user()->id],
            'password' => ['confirmed', Password::defaults(), 'nullable'],
            'password_confirmation' => 'min:5|max:32|nullable',
            // 'username' => 'required|unique:users,username,' . auth()->user()->id,
            // 'phone' => 'required|unique:users,phone,' . auth()->user()->id,
            // 'transaction_PIN' => ['numeric', 'confirmed', 'regex:/^\d{5}$/', 'max:4', 'nullable'],
            // 'transaction_PIN_confirmation' => ['numeric', 'regex:/^\d{5}$/', 'max:4', 'nullable'],
        ];
    }
}
