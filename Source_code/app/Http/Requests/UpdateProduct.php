<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProduct extends FormRequest
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
            'category' => 'required',
            'full_description' => 'required',
            'regular_price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'images' => 'nullable',
            'images.*' => 'nullable|image|max:5000',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nhập tên sản phẩm',
            'category.required' => 'Chọn loại sản phẩm',
            'full_description.required' => 'Nhập mô tả đầy đủ',
            'regular_price.required' => 'Nhập giá thường',
            'regular_price.numeric' => 'Nhập giá thường phải là một con số',
            'sale_price.numeric' => 'Nhập giá giảm phải là một con số',
            'images.*.image' => 'Hình sản phẩm phải là định dạng hình ảnh (JPG,JPEG,PNG,...)',
            'images.*.max' => 'Hình sản phẩm không quá 5MB'
        ];
    }
}
