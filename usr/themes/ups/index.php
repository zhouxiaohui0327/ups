<?php
/**
 * 这是 Typecho 0.9 系统的一套默认皮肤
 * 
 * @package Typecho Replica Theme 
 * @author amos
 * @version 1.2
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<div class="content_wrap container w-1000">
    <div class="row">
        <div class="content_box col-md-5" >
            <div class="border_box">
                <div class="list_nav">
                    <ul class="list-inline list-styled">
                        <li class="hover"><a style="color:#333" href="/index.php/category/company/">公司新闻</a></li>
                        <li><a href="/index.php/category/trade/">行业新闻</a></li>
                    </ul>
                </div>
                <div class="newsWrap">
                    <div class="company" style="display:block">
                        <div class="list_content">
                            <?php $this->widget('Widget_Archive@indexcompany', 'pageSize=8&type=category', 'mid=8')->to($categoryPosts); ?>
                            <?php while($categoryPosts->next()): ?>
                                <div class="news_box row">
                                    <div class="news col-md-8 col-xs-8">
                                        <ul><li><a href="<?php $categoryPosts->permalink(); ?>"><?php echo $categoryPosts->title; ?></a></li></ul>
                                    </div>
                                    <div class="time col-md-4">
                                        <p><?php $this->date('m-d'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="Industry" style="display: none">
                        <div class="list_content">
                            <?php $this->widget('Widget_Archive@indexindustry', 'pageSize=8&type=category', 'mid=7')->to($categoryPosts); ?>
                            <?php while($categoryPosts->next()): ?>
                                <div class="news_box row">
                                    <div class="news col-md-8 col-xs-8">
                                        <ul><li><a href="<?php $categoryPosts->permalink(); ?>"><?php echo $categoryPosts->title; ?></a></li></ul>
                                    </div>
                                    <div class="time col-md-4">
                                        <p><?php $this->date('m-d'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_box col-md-7" style="padding-left: 0" >
            <div class="border_box">
                <div class="list_nav">
                    <ul class="list-inline list-styled">
                        <li class="hover"><a style="color: black" href="/index.php/intro.html">公司简介</a></li>
                    </ul>
                </div>
                <div class="list_content">
                    <div class="company_pic col-xs-12 clearfix">
                        <?php $this->widget('Widget_Contents_Page_List', 'slug=intro')->to($pages); ?>
                        <?php while($pages->next()): ?>
                        <?php if($pages->slug =="intro"):?>
                        <img class=" pull-left " src="<?php $this->options->themeUrl(); ?>images/contact_us.jpg" alt=""/>
                        <div class="introduce"><?php echo $pages->excerpt(165,"..."); ?></div>
                        <?php endif;?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_box col-md-5 col-xs-12">
            <div class="border_box">
                <div class="list_nav">
                    <ul class="list-inline list-styled">
                        <li class="hover"><a style="color: black" href="/index.php/contact.html">联系我们</a></li>
                    </ul>
                </div>
                <div class="list_content">
                    <img style="width:100%;margin-bottom: 5px" src="<?php $this->options->themeUrl(); ?>images/lxwm.jpg" alt=""/>
                    <p>地 址：杭州市西湖区振华路196号裕华大厦B座1712室</p>
                    <p>电 话：0571-85358995</p>
                    <p>传 真：0571-88305660</p>
                </div>
            </div>
        </div>
        <div class="content_box col-md-7 hidden-xs" style="padding-left: 0">
            <div class="border_box">
                <div class="list_nav">
                    <ul class="list-inline list-unstyled">
                        <li class="hover"><a style="color: black" href="">成功案例</a></li>
                    </ul>
                </div>
                <div class="list_content">
                    <div class="carousel">
                        <ul class="list-unstyled"  style="left: -507px;height: 170px;">
                            <?php $this->widget('Widget_Archive@index123', 'pageSize=6&type=category', 'mid=5')->to($categoryPosts); ?>
                            <?php while($categoryPosts->next()): ?>
                                <li>
                                    <a class="carousel_img" href="<?php $categoryPosts->permalink(); ?>"><img src="<?php echo thumbnail($categoryPosts->content); ?>" alt=""/></a>
                                    <a class="carousel_text" href="<?php $categoryPosts->permalink(); ?>"><?php $categoryPosts->title(); ?></a>
                                </li>
                            <?php endwhile;?>
                            <?php $this->widget('Widget_Archive@index123', 'pageSize=6&type=category', 'mid=5')->to($categoryPosts); ?>
                            <?php while($categoryPosts->next()): ?>
                                <li>
                                    <a class="carousel_img" href="<?php $categoryPosts->permalink(); ?>"><img src="<?php echo thumbnail($categoryPosts->content); ?>" alt=""/></a>
                                    <a class="carousel_text" href="<?php $categoryPosts->permalink(); ?>"><?php $categoryPosts->title(); ?></a>
                                </li>
                            <?php endwhile;?>
                        </ul>

                    </div>
                    <a href="javascript:clickedPrev()" class="prev"></a>
                    <a href="javascript:clickedNext()" class="next"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    for (var i = 0;i<15;i++){
        var hh = $(".list_content .carousel ul a").height();
        var ww = $(".list_content .carousel ul a").width();
        var h = $(".list_content .carousel ul li").eq(i).children("a").children("img").height();
        var w = $(".list_content .carousel ul li").eq(i).children("a").children("img").width();
        if(Number(h)>Number(w)){
            $(".list_content .carousel ul li").eq(i).children("a").children("img").css({height:hh+"px"},{width:"auto"});
        }else{
            $(".list_content .carousel ul li").eq(i).children("a").children("img").css({width:ww+"px"},{height:"auto"});
            var hhhh = $(".list_content .carousel ul a").height();
            var hhh = $(".list_content .carousel ul li").eq(1).children("a").children("img").height();
            var x = -5;
            $(".list_content .carousel ul li").eq(i).children("a").children("img").css({marginTop:x+"px"})
        }
    }
</script>
<script>
    var y = $(".list_content .carousel ul li").length;
    $(".carousel ul").css({width:169*y+"px"});
</script>
<script>
    //点击next按钮
    function clickedNext(){
        var x=$(".carousel ul").css("left");
        x = x.substring(0, x.indexOf('px'));
        if(x=="-1521"){
            $(".carousel ul").css({left:0}).animate({left:-507},500)
        }else{
            $(".carousel ul").animate({left:x-"507"},500)
        }
    }
    //点击prev按钮
    function clickedPrev(){
        var x=$(".carousel ul").css("left");
        x = x.substring(0, x.indexOf('px'));
        if(x==0){
            $(".carousel ul").css({left:-1521}).animate({left:-1014},500);
        }else{
            $(".carousel ul").animate({left:-(-x-507)},500)
        }
    }
    $(document).ready(function(){
        var n = setInterval("clickedNext()", 2500);
        $(".carousel ul , .next , .prev").hover(function(){clearInterval(n)}, function(){n = setInterval("clickedNext()", 4000);});
    });
</script>

<?php $this->need('footer.php'); ?>
