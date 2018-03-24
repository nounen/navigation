<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Route;

/**
 * 控制器基类
 *
 * Class Controller
 * @package App\Http\Controllers\Admin
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // 主要模型
    protected $model;

    // 主要仓库
    protected $repository;

    // 视图渲染数据
    protected $data;

    public function __construct()
    {
        $this->data['menus'] = $this->getMockMenus();
    }

    /**
     * 模板名 = 路由别名
     *
     * @return mixed
     */
    protected function getViewName()
    {
        return Route::currentRouteName();
    }

    /**
     * 后台登录用户
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    protected function adminUser()
    {
        return Auth::user();
    }

    /**
     * 模拟左侧菜单数据
     *
     * @return array
     */
    protected function getMockMenus()
    {
        return [
            [
                'name' => '潜力平台',
                'url' => '/admin/category/1/list',
            ],
            [
                'name' => '主流B2C',
                'url' => '/admin/category/2/list',
            ],
            [
                'name' => '亚马逊',
                'url' => '/admin/category/3/list',
            ],
            [
                'name' => '左侧导航',
                'url' => '/admin/link/4/list',
            ],
            [
                'name' => 'SEO设置',
                'url' => '/admin/setting/edit',
            ],
        ];;
    }
}
