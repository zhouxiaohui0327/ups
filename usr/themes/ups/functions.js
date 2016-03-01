/**
 * Created by Admin on 2015/12/5.
 */
$(function(){
    $('#dowebok').pogoSlider();
});
$(document).ready(function(){
    $(".list_nav ul li").hover(function(){
        $(this).addClass("hover");
        $(this).children("a").css({color:"#333"});
        $(this).siblings().removeClass("hover");
        $(this).siblings().children("a").css({color:"#058dbf"});
    });
    $(".list_nav ul li").eq(0).hover(function(){
        $(".newsWrap").children().eq(0).css({display:"block"});
        $(".newsWrap").children().eq(1).css({display:"none"});
    });
    $(".list_nav ul li").eq(1).hover(function(){
        $(".newsWrap").children().eq(1).css({display:"block"});
        $(".newsWrap").children().eq(0).css({display:"none"});
    })
});


