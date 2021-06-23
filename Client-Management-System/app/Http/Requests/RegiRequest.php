<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegiRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|alpha|min:3|max:30',
            'email' => 'required|email|min:10|max:50',
            'city' => 'required|min:3|max:20',
            'country' => 'required|min:3|max:20',
            'company_name' => 'required|min:3|max:20',
            'phone' => 'required|alpha_num|min:11|max:15',
            'password' => 'required|alpha_num|min:8|max:20',
            'password' => 'required|min:8|max:20'
        ];
    }
}
