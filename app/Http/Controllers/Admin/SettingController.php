<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\SettingRequest;
use App\Models\Setting;


class SettingController extends Controller
{
    protected $setting = [
        'title'       => '',
        'keywords'    => '',
        'description' => '',
    ];

    public function __construct()
    {
        parent::__construct();

        $this->data['base_url'] = url('admin/setting');
    }

    /**
     * 更新页面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        $this->data['title'] = 'SEO设置';

        $setting = Setting::first();

        if (is_null($setting)) {
            $setting = (object) $this->setting;
        }

        $this->data['item'] = $setting;

        return view('admin.setting.edit', $this->data);
    }

    public function store(SettingRequest $request)
    {
        $input = $request->only([
            'title',
            'keywords',
            'description',
        ]);

        $setting = Setting::first();

        // 没有创建， 有就更新
        if ($setting) {
            $setting->update($input);
        } else {
            Setting::create($input);
        }

        $url = "{$this->data['base_url']}/edit";

        return redirect($url);
    }
}
