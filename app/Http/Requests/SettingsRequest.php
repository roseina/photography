<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(Request $request)
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

        'web_title'=>'regex:/^[(a-zA-Z\s)]+$/u',
        'email'=>'email',
        'phone'=>'regex:^([0-9]{2})\)?([ .-]?)([0-9]{7})$^|max:10',
        ];
    }
    public function messages()
    {
        return[
        'web_title.regex'=>'Please give the proper web title!',
        'email.email'=>'The email format is not correct!',
        'phone.regex'=>'Please give the phone number folowed by 01 !',
        ];
    }
}
