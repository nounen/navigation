<?php

namespace App\Http\Controllers\Web;

use App\Models\Category;
use App\Models\Link;
use App\Models\Setting;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home($id = 1)
    {
        $data = [];

        // 链接每一页多少条
        $data['per_page'] = 6;

        $data['setting'] = Setting::first();

        $data['lefts'] = $this->getLeftLinks();

        $platform              = $this->getPlatform();
        $data['platform']      = $platform;
        $data['platform_subs'] = $platform->subs;

        $b2c              = $this->getB2C();
        $data['b2c']      = $b2c;
        $data['b2c_subs'] = $b2c->subs;

        $amazon              = $this->getAmazon();
        $data['amazon']      = $amazon;
        $data['amazon_subs'] = $amazon->subs;

        $data['categories'] = [];
        $data['links']      = [];

        if ($id) {
            $category = Category::find($id);

            $data['categories'] = $category->subs->load('links');
        }

        return view('web.home', $data);
    }

    /**
     * 获取左侧导航
     *
     * @return mixed
     */
    protected function getLeftLinks()
    {
        return Link::where('category_id', Category::TYPE_LEFT_ID)->orderBy('sort')->get();
    }

    /**
     * 获取潜力平台
     *
     * @return mixed
     */
    protected function getPlatform()
    {
        return Category::find(Category::TYPE_PLATFORM_ID);
    }

    /**
     * 获取B2C
     *
     * @return mixed
     */
    protected function getB2C()
    {
        return Category::find(Category::TYPE_B2C_ID);
    }

    /**
     * 获取亚马逊
     *
     * @return mixed
     */
    protected function getAmazon()
    {
        return Category::find(Category::TYPE_AMAZON_ID);
    }
}
