<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->data['base_url'] = url('admin/category');

        // 添加链接按钮： 默认无
        $this->data['add_link'] = false;

        // 子分类按钮： 默认有 （与添加链接按钮相反）
        $this->data['sub_category'] = ! $this->data['add_link'];
    }

    /**
     * 列表页面
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($id = 0)
    {
        $item = Category::find($id);

        $this->data['title'] = $item->name;

        $this->data['id'] = $id;

        $this->data['add_link'] = $this->isLevelEqualRootMaxLevel($id);

        $this->data['sub_category'] = ! $this->data['add_link'];

        $this->data['list'] = Category
                                ::where('parent_id', $id)
                                ->orderBy('sort')
                                ->paginate();

        return view('admin.category.index', $this->data);
    }

    /**
     * 当前分类 level 是否等于 根级分类的 max_level：
     *      如果等于则：      不能创建子分类，能创建链接；
     *      如果不等于则：     能创建子分类，不能创建链接；
     *
     * @param $id
     * @return bool
     */
    protected function isLevelEqualRootMaxLevel($id)
    {
        $result = false;

        // 当前分类
        $item = Category::find($id);

        if ($item) {
            // 根级分类
            $rootItem = Category::find($item->root_id);

            if ($rootItem) {
                $result = ($item->level + 1) == $rootItem->max_level; // 当前 level + 1
            }
        }

        return $result;
    }

    /**
     * 更新页面
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $this->data['title'] = '分类详情';

        $this->data['item'] = Category::find($id);

        return view('admin.category.edit', $this->data);
    }

    /**
     * 更新数据
     *
     * @param CategoryRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(CategoryRequest $request, $id)
    {
        $input = $request->only([
            'sort',
            'name',
        ]);

        $item = Category::find($id);

        $item->update($input);

        $url = "{$this->data['base_url']}/{$item->parent_id}/list";

        return redirect($url);
    }

    /**
     * 创建页面
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($id = 0)
    {
        $item = Category::find($id);

        $this->data['title'] = $item->name;

        $this->data['id'] = $id;

        $this->data['sort'] = 1;

        // 同级别排序的最大值基础上 + 1
        $item = Category
                    ::where('parent_id', $id)
                    ->orderBy('sort', 'DESC')
                    ->first();

        if ($item) {
            $this->data['sort'] = $item->sort + 1;
        }

        return view('admin.category.create', $this->data);
    }

    /**
     * 创建数据
     *
     * @param CategoryRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CategoryRequest $request, $id)
    {
        $input = $request->only([
            'sort',
            'name',
        ]);

        // 创建
        $item = Category::create($input);

        // 父级
        $parentItem = Category::find($id);

        if ($parentItem) {
            $item->parent_id = $parentItem->id;
            $item->root_id   = $parentItem->root_id;
            $item->level     = $parentItem->level + 1;
        } else {
            // 没有父级的 root_id 等于本身
            $item->root_id = $item->id;
        }

        $item->save();

        $url = "{$this->data['base_url']}/{$id}/list";

        return redirect($url);
    }
}
