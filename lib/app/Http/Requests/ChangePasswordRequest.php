<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'oldpass'=>'required',
            'newpass'=>'required|min:6|different:oldpass',
            'renewpass'=>'required|same:newpass',
            'captcha' => 'required|captcha'
        ];
    }
    public function messages()
    {
        return [
            'oldpass.required'=>'Mật khẩu cũ không được bỏ trống',
            'newpass.required'=>'Vui lòng nhập mật khẩu mới',
            'newpass.min'=>'Mật khẩu mới ít nhất 6 kí tự',
            'newpass.different'=>'Mật khẩu mới không được trùng với mật khẩu cũ',
            'renewpass.required'=>'Vui lòng xác nhận lại mật khẩu mới',
            'renewpass.same'=>'Xác thực mật khẩu không đúng',
            'captcha.required'=>'Vui lòng nhập mã xác thực',
            'captcha.captcha'=>'Captcha không đúng',
        ];
    }
}
