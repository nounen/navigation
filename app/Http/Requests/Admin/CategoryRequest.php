<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
    public function rules()
    {
        $rules['name'][] = 'required';
        $rules['sort'][] = 'required';
        $rules['sort'][] = 'numeric';
        return $rules;
    }

    public function attributes()
    {
        return [
            'name' => '名称',
            'sort' => '排序',
        ];
    }
}
