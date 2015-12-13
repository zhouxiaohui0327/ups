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
                    <p>地 址：杭州市西湖区古墩路656号紫金港商务大厦615</p>
                    <p>电 话：0571-89731191 0571-89731192</p>
                    <p>传 真：0571-89731190</p>
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
        <!--        <div class="content_box col-md-12">-->
        <!--            <div class="border_box">-->
        <!--                <div class="list_nav">-->
        <!--                    <ul class="list-inline list-styled">-->
        <!--                        <li><a href="">产品展示</a></li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--                <div class="product_wrap row">-->
        <!--                    <div class="left_nav pull-left">-->
        <!--                        <ul class="product list-unstyled">-->
        <!--                            <li class="cur">蓄电池</li>-->
        <!--                            <li class="cur">EPS应急电源</li>-->
        <!--                            <li class="cur">新产品PEAK POWER</li>-->
        <!--                            <li class="cur">UPS不间断电源</li>-->
        <!--                            <li class="cur">佩科UPS</li>-->
        <!--                            <li class="cur">机房精密空调</li>-->
        <!--                            <li class="cur">发电机</li>-->
        <!--                            <li class="cur">罗格朗UPS</li>-->
        <!--                            <li class="cur">佩科蓄电池</li>-->
        <!--                            <li class="cur">CITEC精密空调</li>-->
        <!--                        </ul>-->
        <!--                    </div>-->
        <!--                    <div class="right_content pull-left">-->
        <!--                        <div class="product_img clearfix" style="display: block">-->
        <!--                            <div class="product_one pull-left">-->
        <!--                                <a href=""><img src="./images/1234.jpg" alt=""/></a>-->
        <!--                                <p><a href="">text</p></a>-->
        <!--                            </div>-->
        <!--                            <div class="product_one pull-left">-->
        <!--                                <a href=""><img src="./images/1234.jpg" alt=""/></a>-->
        <!--                                <p><a href="">text</p></a>-->
        <!--                            </div>-->
        <!--                            <div class="product_one pull-left">-->
        <!--                                <a href=""><img src="./images/1234.jpg" alt=""/></a>-->
        <!--                                <p><a href="">text</p></a>-->
        <!--                            </div>-->
        <!--                            <div class="product_one pull-left">-->
        <!--                                <a href=""><img src="./images/1234.jpg" alt=""/></a>-->
        <!--                                <p><a href="">text</p></a>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="product_img clearfix" style="display: none">-->
        <!--                            <div class="product_one pull-left">-->
        <!--                                <a href=""><img src="./images/1234.jpg" alt=""/></a>-->
        <!--                                <p><a href="">text</p></a>-->
        <!--                            </div>-->
        <!--                            <div class="product_one pull-left">-->
        <!--                                <a href=""><img src="./images/2345.jpg" alt=""/></a>-->
        <!--                                <p><a href="">text</p></a>-->
        <!--                            </div>-->
        <!--                            <div class="product_one pull-left">-->
        <!--                                <a href=""><img src="./images/1234.jpg" alt=""/></a>-->
        <!--                                <p><a href="">text</p></a>-->
        <!--                            </div>-->
        <!--                            <div class="product_one pull-left">-->
        <!--                                <a href=""><img src="./images/1234.jpg" alt=""/></a>-->
        <!--                                <p><a href="">text</p></a>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="product_img clearfix" style="display: none">-->
        <!--                            <div class="product_one pull-left">-->
        <!--                                <a href=""><img src="./images/1234.jpg" alt=""/></a>-->
        <!--                                <p><a href="">text</p></a>-->
        <!--                            </div>-->
        <!--                            <div class="product_one pull-left">-->
        <!--                                <a href=""><img src="./images/2345.jpg" alt=""/></a>-->
        <!--                                <p><a href="">text</p></a>-->
        <!--                            </div>-->
        <!--                            <div class="product_one pull-left">-->
        <!--                                <a href=""><img src="./images/3456.jpg" alt=""/></a>-->
        <!--                                <p><a href="">text</p></a>-->
        <!--                            </div>-->
        <!--                            <div class="product_one pull-left">-->
        <!--                                <a href=""><img src="./images/1234.jpg" alt=""/></a>-->
        <!--                                <p><a href="">text</p></a>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
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

<!--<div class="col-mb-12 col-8" id="main" role="main">-->
<!--	--><?php //while($this->next()): ?>
<!--        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">-->
<!--			<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="--><?php //$this->permalink() ?><!--">--><?php //$this->title() ?><!--</a></h2>-->
<!--			<ul class="post-meta">-->
<!--				<li itemprop="author" itemscope itemtype="http://schema.org/Person">--><?php //_e('作者: '); ?><!--<a itemprop="name" href="--><?php //$this->author->permalink(); ?><!--" rel="author">--><?php //$this->author(); ?><!--</a></li>-->
<!--				<li>--><?php //_e('时间: '); ?><!--<time datetime="--><?php //$this->date('c'); ?><!--" itemprop="datePublished">--><?php //$this->date('F j, Y'); ?><!--</time></li>-->
<!--				<li>--><?php //_e('分类: '); ?><!----><?php //$this->category(','); ?><!--</li>-->
<!--				<li itemprop="interactionCount"><a itemprop="discussionUrl" href="--><?php //$this->permalink() ?><!--#comments">--><?php //$this->commentsNum('评论', '1 条评论', '%d 条评论'); ?><!--</a></li>-->
<!--			</ul>-->
<!--            <div class="post-content" itemprop="articleBody">-->
<!--    			--><?php //$this->content('- 阅读剩余部分 -'); ?>
<!--            </div>-->
<!--        </article>-->
<!--	--><?php //endwhile; ?>
<!---->
<!--    --><?php //$this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
<!--</div>-->

<?php //$this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
