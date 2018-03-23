<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

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
    public function rules(Request $request)
    {
        $rules['name'][] = 'required';
        $rules['sort'][] = 'required';
        $rules['sort'][] = 'numeric';

        // 更新时不包含自己
        if (isUpdateMethod($request->getMethod()) && $request->id) {
//            $rules['name'][] = Rule::unique('category')->ignore($request->id);
        } else {
//            $rules['name'][] = 'unique:tag';
        }

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
