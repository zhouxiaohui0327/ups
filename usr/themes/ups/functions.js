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



//$(document).ready(function(){
//    $(".product li").hover(function(){
//        $(this).addClass("cur");
//        $(this).siblings().removeClass("cur");
//    });
//    $(".product li").eq(0).hover(function(){
//        $(".product_img").eq(0).css({display:"block"});
//        $(".product_img").eq(0).siblings().css({display:"none"});
//    });
//    $(".product li").eq(1).hover(function(){
//        $(".product_img").eq(1).css({display:"block"});
//        $(".product_img").eq(1).siblings().css({display:"none"});
//    });
//    $(".product li").eq(2).hover(function(){
//        $(".product_img").eq(2).css({display:"block"});
//        $(".product_img").eq(2).siblings().css({display:"none"});
//    });
//    $(".product li").eq(3).hover(function(){
//        $(".product_img").eq(3).css({display:"block"});
//        $(".product_img").eq(3).siblings().css({display:"none"});
//    });
//    $(".product li").eq(4).hover(function(){
//        $(".product_img").eq(4).css({display:"block"});
//        $(".product_img").eq(4).siblings().css({display:"none"});
//    });
//    $(".product li").eq(5).hover(function(){
//        $(".product_img").eq(5).css({display:"block"});
//        $(".product_img").eq(5).siblings().css({display:"none"});
//    });
//    $(".product li").eq(6).hover(function(){
//        $(".product_img").eq(6).css({display:"block"});
//        $(".product_img").eq(6).siblings().css({display:"none"});
//    });
//    $(".product li").eq(7).hover(function(){
//        $(".product_img").eq(7).css({display:"block"});
//        $(".product_img").eq(7).siblings().css({display:"none"});
//    });
//    $(".product li").eq(8).hover(function(){
//        $(".product_img").eq(8).css({display:"block"});
//        $(".product_img").eq(8).siblings().css({display:"none"});
//    });
//});
