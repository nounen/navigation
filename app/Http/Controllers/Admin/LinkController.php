<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\LinkRequest;
use App\Models\Link;
use App\Models\Category;


class LinkController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->data['base_url'] = url('admin/link');
    }

    /**
     * 列表页面
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($id = 0)
    {
        $category = Category::find($id);

        $links = Link::where('category_id', $id)->orderBy('sort')->get();

        $this->data['id'] = $id;

        $this->data['title'] = "{$category->name} -- 链接管理";

        $this->data['list'] = $links;

        return view('admin.link.index', $this->data);
    }

    /**
     * 更新页面
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($id)
    {
        $category = Category::find($id);

        $this->data['title'] = "{$category->name} -- 创建链接";

        $this->data['id'] = $id;

        $this->data['sort'] = 1;

        // 同级别排序的最大值基础上 + 1
        $link = Link
                ::where('category_id', $id)
                ->orderBy('sort', 'DESC')
                ->first();

        if ($link) {
            $this->data['sort'] = $link->sort + 1;
        }

        return view('admin.link.create', $this->data);
    }

    /**
     * 创建数据
     *
     * @param LinkRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(LinkRequest $request, $id)
    {
        $input = $request->only([
            'sort',
            'name',
            'url',
        ]);

        $input['category_id'] = $id;

        // 创建
        Link::create($input);

        $url = "{$this->data['base_url']}/{$id}/list";

        return redirect($url);
    }

    /**
     * 更新页面
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $this->data['title'] = '链接详情';

        $this->data['item'] = Link::find($id);

        return view('admin.link.edit', $this->data);
    }

    /**
     * 更新数据
     *
     * @param LinkRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(LinkRequest $request, $id)
    {
        $input = $request->only([
            'sort',
            'name',
            'url',
        ]);

        $link = Link::find($id);

        $link->update($input);

        $url = "{$this->data['base_url']}/{$link->category_id}/list";

        return redirect($url);
    }

    /**
     * 删除数据
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($id)
    {
        $link = Link::find($id);

        if ($link) {
            $link->delete();
        }

        $url = "{$this->data['base_url']}/{$link->category_id}/list";

        return redirect($url);
    }
}