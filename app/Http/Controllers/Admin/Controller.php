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
                'id' => 1,
                'parent_id' => 0,
                'alias' => 'admin.system',
                'name' => '开发案例',
                'icon' => 'fa-terminal',
                'url' => '',
                'sort' => 0,
                'childrens' => [
                    [
                        'id' => 6,
                        'parent_id' => 5,
                        'alias' => 'admin.system.form',
                        'name' => '表单例子',
                        'icon' => 'fa-user',
                        'url' => '/admin/example_form',
                        'sort' => 0,
                    ],
                    [
                        'id' => 7,
                        'parent_id' => 5,
                        'alias' => 'admin.system.role',
                        'name' => '分页案例',
                        'icon' => 'fa-users',
                        'url' => '/admin/example_pagination',
                        'sort' => 0,
                    ]
                ],
            ],
        ];
    }
}
