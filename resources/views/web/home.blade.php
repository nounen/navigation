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

<body class="bgwhite" id="content" style="width: 1920px;">
<!--toppageheadwrap-begin-->
<div class="toppageheadwrap">
    <div class="toplogowrap clearfix">
        <div class="tpmain">
            <h1 class="toplogo">
                <a href="/">
                    <img src="./images/logo.png">
                </a>
            </h1>

            {{-- 节日倒计时 start --}}
            <div style="padding-top: 14px; padding-left: 1117px; color: #ffffff;">
                <script type="text/javascript">
                //获取当前系统时间
                var now=new Date();

                //获取节日时间
                var date1=new Date('2018/11/1');
                var date2=new Date('2018/11/22');
                var date3=new Date('2018/11/23');
                var date4=new Date('2018/12/25');

                //当前日期距初始日期的毫秒数
                var s0=now.getTime();

                //节日距初始日期的毫秒数
                var s1=date1.getTime();
                var s2=date2.getTime();
                var s3=date3.getTime();
                var s4=date4.getTime();

                //到节日还有多少毫秒数
                t1=s1-s0;
                t2=s2-s0;
                t3=s3-s0;
                t4=s4-s0;

                //到节日还有多少天
                var riqi1=Math.ceil(t1/(1000*60*60*24));
                var riqi2=Math.ceil(t2/(1000*60*60*24));
                var riqi3=Math.ceil(t3/(1000*60*60*24));
                var riqi4=Math.ceil(t4/(1000*60*60*24));

                document.write('距离 <span style="color:#ff9800;" title="2018-11-1"> 万圣节 </span>还有 <span>'+riqi1+'</span> 天&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;');
                document.write('距离 <span style="color:#ff9800;" title="2018-11-22"> 感恩节 </span>还有 <span>'+riqi2+'</span> 天&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <br>');
                document.write('距离 <span style="color:#ff9800;" title="2018-12-25"> 圣诞节 </span>还有 <span>'+riqi4+'</span> 天&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;');
                document.write('距离 <span style="color:#ff9800;" title="2018-11-23"> 黑色星期五 </span>还有 <span>'+riqi3+'</span> 天');
                </script>
            </div>
            {{-- 节日倒计时 end --}}
        </div>
    </div>

    <!--toolnavbar-begin-->
    <div style="overflow: hidden;" class="topnav-showwrap" id="navbar">
        <div class="topnav-layout">
            <div class="topnav-menu line">
                <div class="topnav-content container">
                    <div class="topnav-centbox">
                        <div class="topnav-menuitem topnav-menuitemthree">
                            <a class="menu-title" href="{{ $platform->id }}">{{ $platform->name }}</a>
                        </div>

                        <div class="topnav-menuitem topnav-menuitemthree">
                            <a class="menu-title" href="{{ $b2c->id }}">{{ $b2c->name }}</a>
                        </div>

                        <div class="topnav-menuitem topnav-menuitemthree">
                            <a class="menu-title" href="{{ $amazon->id }}">{{ $amazon->name }}</a>
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
<div class="wrapper topindexcentwrap pt20">
    {{--<div class="topsearch">--}}
        {{--<input type="text" lang="请输入搜索内容" id="txtkeyword" onblur="blurkey()" onfocus="fucuskey()" class="rtxt" value="请输入搜索内容"/>--}}
        {{--<input id="btnsearch" type="button" onclick="javascript:searchkey();" class="rbtn" />--}}
    {{--</div>--}}

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
        autoplay: {
            delay: 3000,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    </script>
    {{-- 幻灯片 end --}}


    {{-- 搜索引擎 start: https://blog.csdn.net/u014175572/article/details/49358637 --}}
    <div id="search" class="pt20">
        <table>
            <tr>
                <td>
                    <ul>
                        <li style="display:block;"><img src="./images/search_baidu.png" style="width: 90px;"/></li>
                        <li style="display:none;"><img src="./images/search_google.png" style="width: 90px;"/></li>
                    </ul>
                </td>
                <td id="from_box" style="padding-left:10px;">
                    <form id="from_baidu" class="topsearch" style="display:block" action="https://www.baidu.com/baidu" target="_blank" method="get">
                        <input name="" type="hidden" value="baidu" />
                        <input class="rbtn" type="text" name="word" />
                        {{--<input class="button" type="submit" value="百度一下" onMouseOver="this.style.opacity='1'" onMouseOut="this.style.opacity='0.7'" />--}}
                    </form>
                    <form id="from_google" class="topsearch" style="display:none" action="https://www.google.com/search" target="_blank" method="get">
                        <input class="rbtn" type="text" name="q" />
                        {{--<input class="button" type="submit" value="google搜索" onMouseOver="this.style.opacity='1'" onMouseOut="this.style.opacity='0.7'" />--}}
                    </form>
                </td>
            </tr>
        </table>
    </div>

    <script>
        var search = document.getElementById("search");
        var formbox = document.getElementById('from_box');
        var forms = formbox.getElementsByTagName("form");
        var ul = search.getElementsByTagName("ul")[0];
        var li = ul.getElementsByTagName("li");
        var length = li.length;

        li[0].onclick = function() {
            for (var i = 1; i < length; i++) {
                li[i].style.display = "block";
            }
        }

        var n = 0; //第一个显示表单的位置
        for (var i = 1; i < length; i++) {
            li[i].onclick = function(a) {
                return function() {
                    //交换显示的html内容
                    var temp = li[0].innerHTML;
                    li[0].innerHTML = this.innerHTML;
                    this.innerHTML = temp;
                    for (var j = 1; j < length; j++) {
                        li[j].style.display =
                            "none";
                    }
                    //交换表单的显示
                    //                      alert(li[0].innerHTML.substring(37,7));
                    //                      alert(li[0].innerHTML.indexOf('baidu'));
                    hidden_from(); //隐藏表单
                    if (li[0].innerHTML.indexOf('baidu') > 0) {
                        document.getElementById('from_baidu').style.display = 'block';
                    } else if (li[0].innerHTML.indexOf('google') > 0) {
                        document.getElementById('from_google').style.display = 'block';
                    }
                    //                      alert(this.innerHTML);
                    //                      forms[n].style.display = "none";
                    //                      forms[a].style.display = "block";
                    //                      n = a;
                }
            }(i);

            li[i].onmouseover = function() {
                this.style.border =
                    "#7fb80e 1px solid";
                this.style.background =
                    "#f2eada";
            };

            li[i].onmouseout = function() {
                this.style.border = "0px";
                this.style.background = "inherit";
            };
        }

        //隐藏搜索框表单的函数
        function hidden_from() {
            for (var j = 0; j < forms.length; j++) {
                forms[j].style.display = "none";
            }
        }
    </script>
    {{-- 搜索引擎 end --}}

    <div class="mainlist02 clearfix">
        @foreach($categories as $category)
            {{-- 分类大于4 且分类下面有链接 --}}
            @if($category->id > 4 && count($category->links))
            <div class="mlistwrap w300 mr40 pt20">
                <div class="lscent300">
                    <h4 class="lscehead">
                        <span class="h4tit">
                            {{--<i></i> --}}
                            <b>{{ $category->name }}</b>
                        </span>
                        
                        <img src="./images/{{$category->name}}.png" style="border:1px solid #e6e5eb; width: 255px;">
                    </h4>
                    <ul>
                        {{--<li class="lsctit i7">
                            <span class="nos">排名</span>
                            <span class="tname">网站</span>
                            <span class="tscore">&nbsp;</span>
                        </li>--}}

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
<div class="tpfooterwrap pt10">
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