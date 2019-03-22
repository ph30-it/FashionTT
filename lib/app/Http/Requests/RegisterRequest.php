<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
         'username'=>'required|min:6|max:16|unique:users,username',
         'password'=>'required|min:6|max:16|',
         'email'=>'required|email|unique:users,email',
         'captcha' => 'required|captcha'
     ];
 }
 public function messages()
 {
    return [
        'username.required' => 'Bạn chưa điền tên đăng nhập',
        'username.min' => 'Username phải từ 6 kí tự trở lên',
        'username.max' => 'Username phải từ 32 kí tự trở xuống',
        'username.unique' => 'Username đã tồn tại',
        'password.required'  => 'Bạn chưa điền tên mật khẩu',
        'password.min' => 'Password phải từ 6 kí tự trở lên',
        'password.max' => 'Password phải từ 32 kí tự trở xuống',
        'email.required' => 'Bạn chưa điền Email',
        'email.email' => 'Email không đúng định dạng',
        'email.unique' => 'Email này đã được sử dụng',
        'captcha.required'=>'Vui lòng nhập mã xác thực',
        'captcha.captcha'=>'Captcha không đúng',
    ];
}
}
