<?php

namespace App\Http\Requests\Admin;

use App\Models\Example;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ExampleRequest extends FormRequest
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
        // 更多规则可以自己添加
        $rules = Example::getRequestRules();

        // 更新时不包含自己
        if (isUpdateMethod($request->getMethod()) && $request->id) {
            $rules['name'][] = Rule::unique('category')->ignore($request->id);
        } else {
            $rules['name'][] = 'unique:tag';
        }

        return $rules;
    }

    public function attributes()
    {
        $attributes = Example::getRequestAttributes();

        // $attributes['more'] = '更多';

        return $attributes;
    }
}
