<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name'=>'required|unique:categories,name',
            'alias'=>'required',
        ];
        
    }
    public function messages()
    {
        return [
            'name.required' => 'Bạn chưa điền tên đăng nhập',
            'name.unique' => 'Tên đã bị trùng ',
            'alias.required' => 'Bạn chưa điền Alias'
        ];
    }

}