<!doctype html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>{{ $setting->title }}</title>
    <meta name="keywords" content="{{ $setting->keywords }}"/>
    <meta name="description" content="{{ $setting->description }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/base.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/common.css') }}">
    <script src="{{ asset('web/js/jquery.min.js') }}" type="text/jscript" language="javascript"></script>
    <script src="{{ asset('web/js/jqpaginator.min.js') }}" type="text/jscript" language="javascript"></script>
    <script src="{{ asset('web/js/public.js') }}" type="text/jscript" language="javascript"></script>
</head>

<body class="bgwhite" id="content">
<!--toppageheadwrap-begin-->
<div class="toppageheadwrap">
    <div class="toplogowrap clearfix">
        <div class="tpmain">
            <h1 class="toplogo">
                <a href="/">
                    <img src="./images/top-logo.png">
                </a>
            </h1>
            <!-- <div class="topsearch">
                <input type="text" lang="请输入搜索内容" id="txtkeyword" onblur="blurkey()" onfocus="fucuskey()" class="rtxt" value="请输入搜索内容"/>
                <input id="btnsearch" type="button" onclick="javascript:searchkey();" class="rbtn" />
            </div> -->
        </div>
    </div>

    <!--toolnavbar-begin-->
    <div style="overflow: hidden;" class="topnav-showwrap" id="navbar">
        <div class="topnav-layout">
            <div class="topnav-menu line">
                <div class="topnav-content container">
                    <div class="topnav-centbox">
                        <div class="topnav-menuitem topnav-menuitemthree">
                            <a class="menu-title" style="cursor: default;">{{ $platform->name }}</a>
                            <div class="menuitemcent leftbor">
                                <ul class="menuitem-sublist">
                                    @foreach($platform_subs as $sub)
                                    <li class="subitem-wp">
                                        <a class="tnmi-subitem" href="{{ $sub->id }}">{{ $sub->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="topnav-menuitem topnav-menuitemthree">
                            <a class="menu-title" style="cursor: default;">{{ $b2c->name }}</a>
                            <div class="menuitemcent leftbor">
                                <ul class="menuitem-sublist">
                                    @foreach($b2c_subs as $sub)
                                    <li class="subitem-wp">
                                        <a class="tnmi-subitem" href="{{ $sub->id }}">{{ $sub->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="topnav-menuitem topnav-menuitemthree">
                            <a class="menu-title" href="{{ $amazon->id }}">{{ $amazon->name }}</a>
                            {{--<div class="menuitemcent leftbor">--}}
                            {{--<ul class="menuitem-sublist">--}}
                            {{--@foreach($amazon_subs as $sub)--}}
                            {{--<li class="subitem-wp">--}}
                            {{--<a class="tnmi-subitem" href="{{ $sub->id }}">{{ $sub->name }}</a>--}}
                            {{--</li>--}}
                            {{--@endforeach--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--toolnavbar-end-->
</div>

@if(count($lefts))
<div class="lift-nav" style="display: block;">
    <ul class="lift">
        @foreach($lefts as $link)
        <li class="">
            <a target="_blank" href="{{ $link->url }}">{{ $link->name }}</a>
        </li>
        @endforeach
    </ul>
</div>
@endif

<div class="gotop hide" id="gotop">
    <a class="cz-weixin" style=" display:none;" href="javascript:;"></a>
    <a class="go" href="javascript:;"></a>
</div>

<style>
.lsmore a {
    width: 50px;
    height: 25px;
    line-height: 25px;
    display: inline;
    border: 1px solid #e6e5eb;
    padding: 2px;
}

.lsmore>.disabled>span, .lsmore>.disabled>span:hover, .lsmore>.disabled>span:focus, .lsmore>.disabled>a, .lsmore>.disabled>a:hover, .lsmore>.disabled>a:focus {
    color: #999;
    background-color: #fff;
    border-color: #ddd;
    cursor: not-allowed;
}
</style>

<!--topindexcentwrap-->
<div class="wrapper topindexcentwrap pt10">
    <div class="mainlist02 pt20 clearfix">

        @foreach($categories as $category)
            {{-- 分类大于4 且分类下面有链接 --}}
            @if($category->id > 4 && count($category->links))
            <div class="mlistwrap w300 mr40">
                <div class="lscent300">
                    <h4 class="lscehead">
                        <span class="h4tit">
                            <i></i>{{ $category->name }}
                        </span>
                    </h4>
                    <ul>
                        <li class="lsctit i7">
                            <span class="nos">排名</span>
                            <span class="tname">网站</span>
                            <span class="tscore">&nbsp;</span>
                        </li>

                        <div id="category_{{ $category->id }}_links">
                            {{-- 分类的链接再分页 --}}
                            @foreach($category->links->chunk($per_page) as $key => $links)
                                {{-- 每组分页 --}}
                                <div id="category_{{ $category->id }}_links_{{ ++$key }}" style="display: none;">
                                    @foreach($links as $link)
                                    <li class="lsclist">
                                        <span class="nos @if($link->sort < 4) bgred @endif">{{ $link->sort }}</span>

                                        <span class="tname">
                                            <a target="_blank" href="{{ $link->url }}">{{ $link->name }}</a>
                                        </span>

                                        <span class="tscore @if($link->sort > 3) gray @else col-red03 @endif">↑ &nbsp;</span>
                                    </li>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>

                        <li class="lsmore" id="category_{{ $category->id }}"
                            style="text-align: center; padding-top: 3px !important;">
                            <a target="_blank" href=""></a>
                        </li>

                        {{-- 分页处理 --}}
                        <script>
                            $("#category_{{ $category->id }}").jqPaginator({
                                totalPages: {{ ceil(count($category->links) / $per_page) }},
                                visiblePages: 1,
                                currentPage: 1, // 之前点击的页码, 用户辅助影藏
                                lastPage: 1,
                                prev: '<span class="prev"><a href="javascript:void(0);">上一页<\/a><\/span>    ',
                                next: '<span class="next"><a href="javascript:void(0);">下一页<\/a><\/span>',
                                onPageChange: function (nowPage, type) {
                                    $("#category_{{ $category->id }}_links_" + nowPage).show();

                                    if (type == 'change') {
                                        $("#category_{{ $category->id }}_links_" + this.lastPage).hide();
                                        this.lastPage = nowPage;
                                    }
                                }
                            });
                        </script>
                    </ul>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>

<!--topindexcentwrap-->
<!--tpfooterwrap-end-->
<div class="tpfooterwrap">
    <div class="tpfooter">
        <div class="tpmain">
            <!-- <p>
                <a href="//www.test.com/aboutus/index.html" target="_blank">关于Xxx</a> -
                <a href="//ww.test.com/aboutus/contact.php?from=news" target="_blank">联系我们</a> -
                <a href="//www.test.com/aboutus/ad.html" target="_blank">广告服务</a> -
                <a href="//www.test.com/aboutus/link.html" target="_blank">友情链接</a> -
                <a href="//www.test.com/aboutus/announce.html" target="_blank">版权声明</a> -
                <a href="//www.test.com/aboutus/join.html" target="_blank">人才招聘</a> -
                <a href="//www.test.com/aboutus/events.html" target="_blank">网站动态</a> -
                <a href="//www.test.com/aboutus/help.html" target="_blank">帮助</a> -
            </p> -->
            <p>©copyright 2002-2018 test.com inc all rights reserved. Xxx 版权所有&nbsp;&nbsp;</p>
        </div>
    </div>
</div>
<!--tpfooterwrap-end-->
</body>

</html>