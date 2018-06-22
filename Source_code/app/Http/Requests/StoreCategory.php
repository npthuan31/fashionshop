<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
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
            'name' => 'required',
            'image' => 'required|image|max:5000',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nhập tên loại sản phẩm',
            'image.required' => 'Chọn hình cho loại sản phẩm (Không quá 5MB)',
            'image.image' => 'Hình loại sản phẩm phải là định dạng hình ảnh (JPG,JPEG,PNG,...)',
            'image.max' => 'Hình loại sản phẩm không quá 5MB'
        ];
    }
}
