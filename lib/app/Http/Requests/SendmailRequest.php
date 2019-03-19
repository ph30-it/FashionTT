<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendmailRequest extends FormRequest
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
            'accept'=>'required',
            'email'=>'required|email',
            
        ];
    }
    public function messages()
    {
        return [ 
            'accept.required'=>'Bạn cần đồng ý với điều khoảng',
            'email.required'=>'Bạn chưa nhập email',
            'email.email'=>'Email không hợp lệ',
           
        ];
    }
}
