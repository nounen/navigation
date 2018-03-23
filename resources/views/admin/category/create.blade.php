@extends('admin.layouts.app')

@section('content')
<div class="box box-primary">
    <form role="form" class="form-horizontal" enctype="multipart/form-data"
          method="POST" action="{{ $base_url }}/{{ $id }}/store" >

        {{ csrf_field() }}

        <div class="box-body">
            <div class="form-group">
                <label for="sort" class="col-sm-2">排序</label>
                <div class="col-sm-10">
                    <input id="sort" name="sort" type="number"
                           value="{{ $sort }}" class="form-control" placeholder="排序">
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="col-sm-2">名称</label>
                <div class="col-sm-10">
                    <input id="name" name="name" type="text"
                           value="" class="form-control" placeholder="名称">
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