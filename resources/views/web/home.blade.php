<!doctype html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>{{ $setting->title }}</title>
    <meta name="keywords" content="{{ $setting->keywords }}"/>
    <meta name="description" content="{{ $setting->description }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/base.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/common.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/swiper.mini.css') }}">
    <script src="{{ asset('web/js/jquery.min.js') }}" type="text/jscript" language="javascript"></script>
    <script src="{{ asset('web/js/jqpaginator.min.js') }}" type="text/jscript" language="javascript"></script>
    <script src="{{ asset('web/js/swiper.min.js') }}" type="text/jscript" language="javascript"></script>
    <script src="{{ asset('web/js/public.js') }}" type="text/jscript" language="javascript"></script>
</head>

<body class="bgwhite" id="content">
<!--toppageheadwrap-begin-->
<div class="toppageheadwrap">
    <div class="toplogowrap clearfix">
        <div class="tpmain">
            <h1 class="toplogo">
                <a href="/">
                    <img src="./images/logo.png">
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
    {{-- 幻灯片 start --}}
    <div class="swiper-container" style="margin: 0; width: 1447px;">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="./images/swiper_01.png">
            </div>

            <div class="swiper-slide">
                <img src="./images/swiper_02.png">
            </div>

            <div class="swiper-slide">
                <img src="./images/swiper_03.png">
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <script>
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    </script>
    {{-- 幻灯片 end --}}

    <div class="mainlist02 clearfix pt10">
        @foreach($categories as $category)
            {{-- 分类大于4 且分类下面有链接 --}}
            @if($category->id > 4 && count($category->links))
            <div class="mlistwrap w300 mr40">
                <div class="lscent300">
                    <h4 class="lscehead">
                        <span class="h4tit">
                            {{--<i></i> --}}
                            <b>{{ $category->name }}</b>
                        </span>
                        
                        <img src="./images/group.png" style="border:1px solid #e6e5eb; width: 255px;">
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
                            style="text-align: center; margin-top: 12px !important;">
                            <a target="_blank" href=""></a>
                        </li>

                        {{-- 分页处理 --}}
                        <script>
                            $("#category_{{ $category->id }}").jqPaginator({
                                totalPages: {{ ceil(count($category->links) / $per_page) }},
                                visiblePages: 1,
                                currentPage: 1, // 之前点击的页码, 用户辅助影藏
                                lastPage: 1,
                                prev: '<span class="prev"><a href="javascript:void(0);">上一页<\/a>&nbsp;&nbsp;<\/span> ',
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
            <p>
                <a href="guanyuwomen.html" target="_blank"><b>关于我们</b></a> &nbsp;&nbsp;

                <a href="jiaruwomen.html" target="_blank"><b>加入我们</b></a> &nbsp;&nbsp;

                <a href="lianxiwomen.html" target="_blank"><b>联系我们</b></a> &nbsp;&nbsp;

                <a href="guanggaohezuo.html" target="_blank"><b>广告合作</b></a> &nbsp;&nbsp;

                <a href="tougao.html" target="_blank"><b>投稿</b></a> &nbsp;&nbsp;

                <a href="guanchayuanjihua.html" target="_blank"><b>观察员计划</b></a> &nbsp;&nbsp;

                <a href="yijianfankui.html" target="_blank"><b>意见反馈</b></a> &nbsp;&nbsp;

                <a href="hezuohuoban.html" target="_blank"><b>合作伙伴</b></a> &nbsp;&nbsp;

                <a href="yinsiquanxieyi.html" target="_blank"><b>隐私权协议</b></a> &nbsp;&nbsp;

                    <img src="./images/erweima.png">

            </p>
            <section>©2013 KJ800 跨境吧 粤ICP备 16073542 号</section>
        </div>
    </div>
</div>
<!--tpfooterwrap-end-->
</body>

</html>