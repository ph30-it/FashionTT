<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'address'=>'required',
            'country'=>'required',
            'cty'    =>'required',
            'phone'  =>'required|numeric|min:10'
        ];
    }
    public function messages()
    {
       return [
        'address.required'=>'Vui lòng nhập địa chỉ hiện tại của bạn',
        'country.required'=>'Vui lòng nhập quốc gia hiện tại của bạn',
        'cty.required'    =>'Vui lòng nhập thành phố hiện tại của bạn',
        'phone.required'  =>'Vui lòng nhập số điện thoại của bạn',
        'phone.numeric'  =>'Số điện thoại không hợp lệ',
        'phone.min'  =>'Đây không phải là số điện thoại'
    ];   
    }
}
