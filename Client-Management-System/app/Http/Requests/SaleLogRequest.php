<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleLogRequest extends FormRequest
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
            'customer_name' => 'required|min:3|max:30|',
            'address' => 'required|min:3|max:50',
            'phone' => 'required|min:11|max:15',
            'product_id' => 'required',
            'product_name' => 'required|min:3|max:20|',
            'unit_price' => 'required|min:1|max:30|',
            'quantity' => 'required|max:20|'
        ];
    }
}
