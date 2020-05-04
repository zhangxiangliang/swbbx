<?php

namespace App\Http\Requests;

class ReplyRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'content' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'content.min' => '内容必须至少六个字符',
        ];
    }
}
