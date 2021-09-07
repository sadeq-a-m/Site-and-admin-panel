<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EpisodeRequest extends FormRequest
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

            'episode_title' => 'required'   ,
            'episode_video' => 'required'   ,
        ];
    }


    public function messages()
    {
        return [

            'episode_title.required' => 'عنوان قسمت را وارد کنید' ,
            'episode_video.required' => 'ویدیو را انتخاب نکردید' ,

        ]   ;
    }
}
