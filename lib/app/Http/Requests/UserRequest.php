<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username'=>'required|min:6|max:16|unique:users,username|regex:/[^a-z0-9A-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]/u',
            'password'=>'required|min:6|max:16|',
            'email'=>'required|email|unique:users,email',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'Bạn chưa điền tên đăng nhập',
            'username.min' => 'Username phải từ 6 kí tự trở lên',
            'username.max' => 'Username phải từ 32 kí tự trở xuống',
            'username.unique' => 'Username đã tồn tại',
            'username.regex'=>'Username không hợp lệ',
            'password.required'  => 'Bạn chưa điền tên mật khẩu',
            'password.min' => 'Password phải từ 6 kí tự trở lên',
            'password.max' => 'Password phải từ 32 kí tự trở xuống',
            'email.required' => 'Bạn chưa điền Email',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email này đã được sử dụng',
            'avatar.image' =>'Ảnh không hợp lệ',
            'avatar.mimes' =>'Định dạng ảnh phải là: jpeg,png,jpg',
            'avatar.max' =>'Ảnh không được quá 2MB',
        ];
    }
}
