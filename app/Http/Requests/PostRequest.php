<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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

            'title' => 'required'    ,
            'image-post' => 'required'  ,
            'description' => 'required'  ,
            'categores' => 'required'   ,

        ];
    }

    public function messages()
    {
        return[

            'title.required' => 'عنوان مقاله را وارد کنید .  '    ,
            'image-post.required' => 'عکس مقاله را وارد کنید . '  ,
            'description.required' => 'توضیحات مقاله را وارد کنید .' ,
            'categores.required' => 'دسته بندی مقاله را تعیین کنید .'


        ];
    }
}
