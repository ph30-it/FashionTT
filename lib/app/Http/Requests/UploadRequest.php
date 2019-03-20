<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
             'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
    public function messages()
    {
        return [
             'image.required' =>'Bạn chưa chọn Image',
             'image.image' =>'Ảnh không hợp lệ',
             'image.mimes' =>'Định dạng ảnh phải là: jpeg,png,jpg',
             'image.max' =>'Ảnh không được quá 2MB',
        ];
    }
}
