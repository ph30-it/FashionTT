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
            'decription' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Bạn chưa điền tên Product',
            'name.unique'  => 'Tên Product bị trùng',
            'sale.required' =>'Bạn chưa nhập giảm giá',
            'decription.required' =>'Bạn chưa nhập mô tả'
        ];
    }
}
