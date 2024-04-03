<?php

namespace App\Http\Requests\Admin\Settings\Site;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'image' => 'file|mimes:png,jpg,gif,jpeg,webm',
            'name' => 'required|string',
            'facebook' => 'nullable',
            'linkdin' => 'nullable',
            'instagram' => 'nullable',
            'twiter' => 'nullable',
            'google' => 'nullable',
            'rank' => 'required|string'
        ];
    }
}
