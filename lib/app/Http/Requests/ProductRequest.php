<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            //
            'name'=>'required|unique:products,name',
            'price'=>'required',
            'sale'=>'required',
            'description' => 'required|min:100|max:2000',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'ImageProductDetail'=>'required',
            'ImageProductDetail.*'=>'|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Bạn chưa điền tên Product',
            'name.unique'  => 'Tên Product bị trùng',
            'price.required'  => 'Mời nhập giá cho sản phẩm',
            'sale.required' =>'Bạn chưa nhập giảm giá',
            'description.required' =>'Bạn chưa nhập mô tả',
            'description.min' =>'Mô tả ít nhất 100 từ',
            'description.max' =>'Mô tả ít nhất 2000 từ',
            'image.required' =>'Bạn chưa chọn ảnh đại diện',
            'image.image' =>'Ảnh không hợp lệ',
            'image.mimes' =>'Định dạng ảnh phải là: jpeg,png,jpg',
            'image.max' =>'Ảnh không được quá 2MB',
            'ImageProductDetail.required' =>'Bạn chưa chọn ảnh mô tả',
            'ImageProductDetail.*.image' =>'Ảnh mô tả không hợp lệ',
            'ImageProductDetail.*.mimes' =>'Định dạng ảnh mô tả phải là: jpeg,png,jpg',
            'ImageProductDetail.*.max' =>'Ảnh không được quá 2MB',
        ];
    }
}
