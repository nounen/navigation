<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class LinkRequest extends FormRequest
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
        $rules['name'][] = 'required';

        $rules['sort'][] = 'required';
        $rules['sort'][] = 'numeric';

        $rules['url'][]  = 'required';
        $rules['url'][]  = 'url';

        return $rules;
    }

    public function attributes()
    {
        return [
            'sort' => '排序',
            'name' => '名称',
            'url'  => '链接',
        ];
    }
}
