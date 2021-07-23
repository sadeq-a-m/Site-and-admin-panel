<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequesst extends FormRequest
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


            'name' => 'required'    ,
            'email' => 'required'   ,
            'password' => 'required'    ,
            'role' => 'required'    ,


        ];
    }


    public function messages()
    {
        return  [

            'name.required' =>  'نام اجباری است  . '    ,
            'email.required'    =>  'ایمیل اجباری است  .  '    ,
            'password.required' =>  'رمز عبور اجباری است  . '    ,
            'role.required' => 'نقش کاربر را تایین کنید .'
        ];
    }
}
