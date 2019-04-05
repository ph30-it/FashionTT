<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'=>'required|regex:/[^a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]/u',
            'phone'=>'required|numeric|min:11',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required|max:2000'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Bạn chưa nhập tên',
        'name.regex'=>'Tên không hợp lệ',
        'phone.required'=>'Bạn chưa nhập số điện thoại',
        'phone.numeric.min'=>'Số điện thoại không hợp lệ',
        'email.required'=>'Bạn chưa nhập email',
        'email.email'=>'Email không hợp lệ',
        'subject.required'=>'Bạn chưa nhập Subject',
        'message.required'=>'Bạn chưa nhập tin nhắn',
        'message.Max'=>'Tin nhắn không được quá 2000 từ',
        ];
    }
}
