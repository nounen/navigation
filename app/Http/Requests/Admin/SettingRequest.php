<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class SettingRequest extends FormRequest
{
    /**
     * 判断用户是否有权限做出此请求。
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
    public function rules(Request $request)
    {
        $rules['title'][]       = 'required';
        $rules['keywords'][]    = 'required';
        $rules['description'][] = 'required';

        return $rules;
    }

    public function attributes()
    {
        return [
            'title'       => '标题',
            'keywords'    => '关键词',
            'description' => '描述',
        ];
    }
}
