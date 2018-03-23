@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box" style="border-top: 1px solid #d2d6de;">
            <div class="box-header" style="padding-top: 5px; padding-bottom: 0px;">
                <p>
                    <a href="{{ $base_url }}/{{ $id }}/create">
                        <button type="button" class="btn btn-sm btn-flat btn-primary">创建</button>
                    </a>
                </p>

                {{--TODO:需要扩展更多搜索--}}
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                    </div>
                </div>
            </div>

            <div class="box-body table-responsive no-padding">
                <table class="table table-hover table-bordered text-center">
                    <tbody>
                    <tr>
                        <th>排序</th>
                        <th>名称</th>
                        <th>操作</th>
                    </tr>

                    @foreach($list as $item)
                    <tr>
                        <td>{{ $item->sort }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            @if($sub_category)
                            <a href="{{ $base_url }}/{{ $item->id }}/list">
                                <button type="button" class="btn btn-flat btn-xs btn-info">子分类</button>
                            </a>
                            @endif

                            @if($add_link)
                            <a href="/link/{{ $item->id }}/list">
                                <button type="button" class="btn btn-flat btn-xs btn-info">链接管理</button>
                            </a>
                            @endif

                            <a href="{{ $base_url }}/{{ $item->id }}/edit">
                                <button type="button" class="btn btn-flat btn-xs btn-warning">修改</button>
                            </a>

                            <button type="button" class="btn btn-flat btn-xs btn-danger" data-toggle="modal" data-target="#delete_modal_{{ $item->id }}">
                                删除
                            </button>

                            @include('admin.common.delete', ['id' => $item->id, 'url' => "{$base_url}/{$item->id}"])
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            {{--TODO: 分页样式应该重写--}}
            <div class="box-footer clearfix" style="padding-top: 0px; padding-bottom: 0px;">
                {{-- 如果没有分页数据就不会显示 --}}
                {{--{{ $list->links() }}--}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script type="application/javascript">
        console.log('index init,');
    </script>
@endsection