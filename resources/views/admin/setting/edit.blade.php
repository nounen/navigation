@extends('admin.layouts.app')

@section('content')
<div class="box box-primary">
    <form role="form" class="form-horizontal" enctype="multipart/form-data"
          method="POST" action="{{ $base_url }}/store" >

        {{ csrf_field() }}

        <div class="box-body">
             <div class="form-group">
                <label for="title" class="col-sm-2">标题</label>
                <div class="col-sm-10">
                    <input id="title" name="title"
                           value="{{$item->title}}" class="form-control" placeholder="标题">
                </div>
            </div>

            <div class="form-group">
                <label for="keywords" class="col-sm-2">关键词</label>
                <div class="col-sm-10">
                    <input id="keywords" name="keywords" type="text"
                           value="{{$item->keywords}}" class="form-control" placeholder="关键词">
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="col-sm-2">描述</label>
                <div class="col-sm-10">
                    <textarea name="description" id="description" class="form-control" placeholder="描述">{{ $item->description }}</textarea>
                </div>
            </div>
        </div>

        <div class="box-footer">
            <button type="button" class="btn btn-flat btn-default" onclick="javascript:history.go(-1);">返回</button>

            <button type="submit" class="btn btn-flat btn-primary" id="update_event">提交</button>
        </div>
    </form>
</div>
@endsection

@section('js')
    <script type="application/javascript">
        console.log('edit init,');
    </script>
@endsection