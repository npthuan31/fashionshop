<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNews extends FormRequest
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
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:5000',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Nhập tên tin tức',
            'category.required' => 'Chọn loại tin tức',
            'content.required' => 'Nhập nội dung tin tức',
            'image.image' => 'Hình tin tức phải là định dạng hình ảnh (JPG,JPEG,PNG,...)',
            'image.max' => 'Hình tin tức không quá 5MB',
        ];
    }
}
