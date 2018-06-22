<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrder extends FormRequest
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
            'full_name' => 'required',
            'address' => 'required',
            'tel' => 'required|numeric',
            'email' => 'nullable|email',
            'note' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => 'Nhập họ tên của bạn',
            'address.required' => 'Nhập địa chỉ của bạn',
            'tel.required' => 'Nhập số điện thoại của bạn',
            'tel.numeric' => 'Số điện thoại không đúng',
            'email.email' => 'Địa chỉ email không đúng',
        ];
    }
}
