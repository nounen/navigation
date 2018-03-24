<?php

namespace App\Http\Controllers\Web;

use App\Models\Category;
use App\Models\Link;
use App\Models\Setting;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    // 潜力平台
    const CATEGORY_PLATFORM_ID = 1;

    // 主流B2C
    const CATEGORY_B2C_ID = 2;

    // 主流B2C
    const CATEGORY_AMAZON_ID = 3;

    // 左侧导航
    const CATEGORY_LEFT_ID = 4;

    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $data = [];

        $data['setting'] = Setting::first();

        $data['lefts'] = $this->getLeftLinks();

        return view('web.home', $data);
    }

    /**
     * 获取左侧导航
     *
     * @return mixed
     */
    protected function getLeftLinks()
    {
        return Link::where('category_id', self::CATEGORY_LEFT_ID)->orderBy('sort')->get();
    }
}
