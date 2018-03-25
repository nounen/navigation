// JavaScript Document

$(document).ready(function () {
    //ToolTop
    menuHover($("#menu li>a"), $("#menu li p"), 200);

    //navbar
    $("#navbar").hover(function () {
        $("#toolnav").addClass("toolnavbar-hover");
    }, function () {
        $("#toolnav").removeClass("toolnavbar-hover");
    });
    //navbar

    //navbar
    $(".topnav-menuitem").hover(function () {
        var index = $(this).index();
        $("#navbar").addClass("topnav-showWrap-show");
        $(".menu-title").eq(index).addClass("current");
        $("#navbar").css("overflow", "visible");
    }, function () {
        var index = $(this).index();
        $("#navbar").removeClass("topnav-showWrap-show");
        $(".menu-title").eq(index).removeClass("current");
        $("#navbar").css("overflow", "hidden");
    });

    var action = getQueryString("action");
    action = action == null ? "mysite" : action;
    $(".tusernavbar > li").removeClass("tnactive");
    $("#" + action).addClass("tnactive");
    $(".toolchoese").each(function () {
        _select({
            select: $(this).find("div.searchoese"),
            options: $(this).find("ul.searchoese-show"),
            option: $(this).find("ul.searchoese-show li a"),
            t: "slide", //效果（可选参数）
            parents: $(".toolchoese") //多个select时，传入父级（可选参数）
        });
    });

    //toppage-begin
    $(".allclass .ac-btn").click(function () {
        if (!$(".menushow").hasClass("hide")) {
            $(".menushow").addClass("hide");
        } else {
            $(".menushow").removeClass("hide");
        }
    })

    $(".menushow a").click(function () {
        $(".menushow").addClass("hide");
    })

    $(".tmain01-head a").hover(function () {
        var index = $(this).index();
        $(".tmain01-head a").removeClass("tma01-headcurt");
        $(this).addClass("tma01-headcurt");
        $("div.tmain01show").addClass("hide");
        $("div.tmain01show").eq(index).removeClass("hide");
    });

    $(".headtag a").hover(function () {
        var index = $(this).index();
        $(".headtag a").removeClass("tagcurt");
        $(this).addClass("tagcurt");
        $(".topmaintag-show").addClass("hide");
        $(".topmaintag-show").eq(index).removeClass("hide");
    });

    $(".tmain05-head a").hover(function () {
        var index = $(this).index();
        $(".tmain05-head a").removeClass("tmain05-headcurt");
        $(this).addClass("tmain05-headcurt");
        $(".tmain05-Cent-show").addClass("hide");
        $(".tmain05-Cent-show").eq(index).removeClass("hide");
    });

    //toppage-end
    $('.navList li, .editshare li').hover(function () {
        var listTwo = $(this).children().hasClass('two');
        if (listTwo == true) {
            $(this).toggleClass('hover');
        };
    });

    //toplist-begin
    menuHover($('a.downmenu'), $('.downmenushow'), 200, function (_this) {
        $('a.downmenu').text($(_this).text());
        $('.downmenushow').hide();
    });
    //toplist-end

    var trime;
    $(".conttit .pcop").hover(function () {
        var propHtml = $(this).parent().find(".hfcss").html();
        $(".conttpop").html(propHtml);
        clearTimeout(trime);
        var oe = $(this).offset();
        $(".conttpop").stop().animate({ top: oe.top + 10, left: oe.left + 300 }, 200, function () {
            $(this).show();
        });
    }, function () {
        trime = setTimeout(function () { $(".conttpop").hide() }, 200);
    });

    $(".conttpop").hover(function () {
        clearTimeout(trime);
        $(this).show();
    }, function () {
        trime = setTimeout(function () { $(".conttpop").hide() }, 200);
    });
});

function menuHover(menuObj, menuitem, timer, fn) {
    var hoverTimer, outTimer;
    menuObj.hover(function () {
        var _this = $(this);
        clearTimeout(outTimer);
        hoverTimer = setTimeout(function () {
            menuitem.hide();
            _this.nextAll().show();
        }, timer);
    }, function () {
        var _this = $(this);
        clearTimeout(hoverTimer);
        outTimer = setTimeout(function () {
            _this.nextAll('.downmenushow').hide();
        }, timer);
    });
    menuitem.hover(function () {
        var _this = $(this);
        clearTimeout(outTimer);
        hoverTimer = setTimeout(function () {
            _this.show();
        }, timer);
    }, function () {
        var _this = $(this);
        clearTimeout(hoverTimer);
        outTimer = setTimeout(function () {
            _this.hide();
        }, timer);
    });
    if (fn) {
        menuitem.children().click(function () {
            fn(this);
        });
    }
};

//SearchWrapHid-Cent
var checkFocus = function (options) {
    var thisCheck = options.obj_input; //当前input
    var msgBox = options.msgBox; //当前提示标签
    checkValue = thisCheck.val();
    var trime = options.trime !== undefined ? options.trime : 200;
    thisCheck.focus(function () {
        msgBox.fadeOut(trime);
    });
    thisCheck.blur(function () {
        if ($(this).val() == "") {
            if (msgBox.hasClass(options.Tip)) {
                msgBox.stop(true, true).fadeIn(trime);
            }
            return false;
        } else {
            msgBox.stop(true, true).fadeOut(trime);
            return true;
        }
    });
    msgBox.click(function () {
        thisCheck.focus();
    });

    function init() {
        if (checkValue !== '' || thisCheck.focus()) {
            msgBox.stop(true, true).fadeOut(trime);
        } else {
            msgBox.stop(true, true).fadeIn(trime);
        }
    }
    init();
};
var clearInput = function (options) {
    var thisCheck = options.obj_input; //当前input
    var msgBox = options.msgBox; //当前提示标签
    checkValue = thisCheck.val();
    var trime = options.trime !== undefined ? options.trime : 100;
    thisCheck.bind("blur keyup", function () {
        if ($(this).val() == "") {
            if (msgBox.hasClass(options.Tip)) {
                msgBox.stop(true, true).fadeOut(trime);
            }
        } else {
            msgBox.stop(true, true).fadeIn(trime);
        }
    });
    msgBox.click(function () {
        thisCheck.focus();
        msgBox.stop(true, true).fadeOut(trime);
        thisCheck.val("");
    });

    function init() {
        if (checkValue !== '') {
            msgBox.stop(true, true).fadeIn(trime);
        } else {
            msgBox.stop(true, true).fadeOut(trime);
        }
    }
    init();
};

var _select = function (settings) {
    settings.select.bind("selectstart", function () { return false; }); //禁用选中IE，其他-moz-user-select:none;

    settings.select.click(function (e) {
        if (settings.parents)
            if (settings.parents.length > 1) settings.parents.find("ul").not(settings.options).hide(); //如果有多个select隐藏非当前的所有相关ul
        e.stopPropagation();
        if (settings.options.is(":visible")) showType(0);
        else showType(1);
    });

    settings.option.click(function () {
        settings.select.text($(this).text());
        settings.select.next().val($(this).attr("val"));
        showType(0);
    });

    $(document).click(function () {
        if (settings.options.is(":visible")) showType(0);
    });

    function showType(flage) {
        switch (settings.t) {
            case "slide":
                if (flage) settings.options.slideDown(50);
                else settings.options.slideUp(50);
                break;
            case "fade":
                if (flage) settings.options.fadeIn(200);
                else settings.options.fadeOut(200);
                break;
            default:
                if (flage) settings.options.show();
                else settings.options.hide();
                break;
        }
    }
};

Array.prototype.unique = function (isStrict) {
    if (this.length < 2) return [this[0]] || [];
    var tempObj = {},
			newArr = [];
    for (var i = 0; i < this.length; i++) {
        var v = this[i];
        var condition = isStrict ? (typeof tempObj[v] != typeof v) : false;
        if ((typeof tempObj[v] == "undefined") || condition) {
            tempObj[v] = v;
            newArr.push(v);
        }
    }
    return newArr;
};

$(function () {
    $(window).on('scroll', function () {
        var st = $(document).scrollTop();
        if (st > 0) {
            if ($('#content').length != 0) {
                var w = $(window).width(), mw = $('#content').width();
                if ((w - mw) / 2 > 70)
                    $('#gotop').css({ 'left': (w - mw) / 2 + mw + 20 });
                else {
                    $('#gotop').css({ 'left': 'auto' });
                }
            }
            $('#gotop').fadeIn(function () {
                $(this).removeClass('hide');
            })
;
        } else {
            $('#gotop').fadeOut(function () {
                $(this).addClass('hide');
            });
        }
    });

    $('#gotop .go').on('click', function () {
        $('html,body').animate({ 'scrollTop': 0 }, 500);
    });

    var Crsky_ContentPlius = new function () { };

    Crsky_ContentPlius = {
        des_div_height: 78,
        isshowall: false,
        Init: function () {
            if ($("#rom_des").height() > this.des_div_height) {
                this.HideAllDes();
                $("#rom_des_showall").show();
            }
            else{
                $("#rom_des_showall").hide();
                }
        },
        ShowAllDes: function () {
            $("#rom_des").height("auto");
            $("#rom_des_showall").html("收起");
            this.isshowall = true;
        },
        HideAllDes: function () {
            $("#rom_des").height(this.des_div_height);
            $("#rom_des_showall").html("显示全部");
            this.isshowall = false;
        }
    };

    $(function () {
        Crsky_ContentPlius.Init();

        $("#rom_des_showall").click(function () {
            if (Crsky_ContentPlius.isshowall) {
                Crsky_ContentPlius.HideAllDes();
            }
            else {
                Crsky_ContentPlius.ShowAllDes();
            }
        });
    });
});

var isSearchPage = false;
function getQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]); return null;
}

$(function () {
    document.onkeydown = function (event) {
        var e = event || window.event || arguments.callee.caller.arguments[0];
        if (e && e.keyCode == 13) {
            SearchKey();
        }
    };

});

