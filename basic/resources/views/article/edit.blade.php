@extends('layout/header')
@section('content')
@endsection
<body>
<script type="text/javascript" src="{{asset("ueditor")}}/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="{{asset("ueditor")}}/ueditor.all.js"></script>
<div class="x-body layui-anim layui-anim-up">
    <form class="layui-form" method="post" action="doEdit" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" value="{{$list->id}}" name="id">
        <div class="layui-form-item">
            <label for="L_email" class="layui-form-label">
                <span class="x-red">*</span>文章标题
            </label>
            <div class="layui-input-inline">
                <input type="text" name="new_name" value="{{$list->new_name}}" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="L_username" class="layui-form-label">
                <span class="x-red">*</span>文章内容
            </label>
            <div class="layui-input-block">
                <textarea name="new_content" id="container" cols=60" rows="30" >{{$list->new_content}}</textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <label for="L_pass" class="layui-form-label">
                <span class="x-red">*</span>文章分类
            </label>
            <div class="layui-input-inline">
                <select name="new_type" id="" value="{{$list->new_type}}>
                    <option ">为分类</option>
                    @foreach($s as $v)
                    <option value="{{$v['id']}}" class="layui-input" @if($v->id == $list->new_type) selected @endif>{{$v->new_type}}</option>
                        @endforeach
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label for="L_username" class="layui-form-label">
                <span class="x-red">*</span>时间
            </label>
            <div class="layui-input-inline">
                <input type="date"  name="start_time" value="{{$list->start_time}}" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="L_repass" class="layui-form-label">
            </label>
            <input type="submit" class="layui-btn" value="修改">
        </div>
    </form>
</div>

<script type="text/javascript">
    var ue = UE.getEditor('container');
</script>

</body>

