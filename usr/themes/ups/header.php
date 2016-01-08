<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('%s'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="http://cdn.staticfile.org/normalize/2.1.3/normalize.min.css">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('pogo-slider.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('index.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('archive.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('post.css'); ?>">
    <script src="<?php $this->options->themeUrl('jquery-2.1.4.js');?>"></script>
    <script src="<?php $this->options->themeUrl('jquery.pogo-slider.min.js');?>"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?php $this->options->themeUrl('functions.js');?>"></script>

    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->


<header class="container">
    <div class="head_wrap">
        <div class="pull-right"></div>
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="logo">
            <a href="<?php $this->options->siteUrl(); ?>"><img src="<?php $this->options->themeUrl(); ?>images/logo.png" alt=""/></a>
            <p class="pull-right hidden-xs hidden-md" style="line-height: 90px">客服热线：<span style="color: #26508b">0571</span></p>
        </div>
        <div id="bs-navbar" class="nav1 collapse navbar-collapse col-xs-12">
            <ul class="nav_bar nav navbar-nav ">
                <li class="title_box"><a class="title"  href="<?php $this->options->siteUrl(); ?>"><?php echo('网站首页'); ?></a></li>
                <li class="title_box">
                    <a class="title" href="/index.php/intro.html"><?php _e('公司简介'); ?></a>
                    <ul class="inner_list list-unstyled">
                        <li><a href="/index.php/intro.html">公司介绍</a></li>
                        <li><a href="/index.php/honor.html">公司荣誉</a></li>
                        <li><a href="/index.php/culture.html">企业文化</a></li>
                        <li><a href="/index.php/condition.html">公司环境</a></li>
                    </ul>
                </li>
                <li class="title_box">
                    <a class="title" href="/index.php/category/product/"><?php _e('产品展示'); ?></a>
                    <ul class="inner_list list-unstyled">
                        <li><a href="/index.php/category/xdc/">蓄电池</a></li>
                        <li><a href="/index.php/category/EPS/">EPS应急电源</a></li>
                        <li><a href="/index.php/category/xcp/">新产品PEAK POWER</a></li>
                        <li><a href="/index.php/category/UPS/">UPS不间断电源</a></li>
                        <li><a href="/index.php/category/pk/">佩科UPS</a></li>
                        <li><a href="/index.php/category/jf/">机房精密空调</a></li>
                        <li><a href="/index.php/category/fdj/">发电机</a></li>
                        <li><a href="/index.php/category/lgl/">罗格朗UPS</a></li>
                        <li><a href="/index.php/category/pkxdc/">佩科蓄电池</a></li>
                        <li><a href="/index.php/category/CITEC/">CITEC精密空调</a></li>
                    </ul>
                </li>
                <li class="title_box">
                    <a class="title" href="/index.php/category/news/"><?php _e('新闻动态'); ?></a>
                    <ul class="inner_list list-unstyled">
                        <li><a href="/index.php/category/company/">公司新闻</a></li>
                        <li><a href="/index.php/category/trade/">行业新闻</a></li>
                    </ul>
                </li>
                <li class="title_box"><a class="title" href="/index.php/category/case/"><?php _e('成功案列'); ?></a></li>
<!--                --><?php //$this->widget('Widget_Contents_Page_List')->to($pages); ?>
<!--                --><?php //while($pages->next()): ?>
<!--                    <li class="title_box"><a class="title"  href="--><?php //$pages->permalink(); ?><!--" title="--><?php //$pages->title(); ?><!--">--><?php //$pages->title(); ?><!--</a></li>-->
<!--                --><?php //endwhile; ?>
                <li class="title_box"><a class="title" href="/index.php/recruit.html"><?php _e('诚聘英才'); ?></a></li>
                <li class="title_box"><a class="title" href="/index.php/server.html"><?php _e('维修服务'); ?></a></li>

                <li class="title_box"><a class="title" href="/index.php/contact.html"><?php _e('联系我们'); ?></a></li>
            </ul>
        </div>
    </div>
    <div class="dowebok hidden-xs">         <!--大图轮播-->
        <div class="pogoSlider" id="dowebok" style="height: 390px">
            <div class="pogoSlider-slide" style="background:url(<?php $this->options->themeUrl(); ?>images/lunbo1.jpg)50% 0 repeat-x;"></div>
            <div class="pogoSlider-slide" style="background:url(<?php $this->options->themeUrl(); ?>images/lunbo2.jpg)50% 0 repeat-x;"></div>
            <div class="pogoSlider-slide" style="background:url(<?php $this->options->themeUrl(); ?>images//lunbo3.jpg)50% 0 repeat-x;"></div>
        </div>
    </div>
</header>





<!--<header id="header" class="clearfix">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="site-name col-mb-12 col-9">-->
<!--                <a id="logo" href="--><?php //$this->options->siteUrl(); ?><!--">-->
<!--                    --><?php //if ($this->options->logoUrl): ?>
<!--                    <img src="--><?php //$this->options->logoUrl() ?><!--" alt="--><?php //$this->options->title() ?><!--" />-->
<!--                    --><?php //endif; ?>
<!--                    --><?php //$this->options->title() ?>
<!--                </a>-->
<!--        	    <p class="description">--><?php //$this->options->description() ?><!--</p>-->
<!--            </div>-->
<!--            <div class="site-search col-3 kit-hidden-tb">-->
<!--                <form id="search" method="post" action="./" role="search">-->
<!--                    <label for="s" class="sr-only">--><?php //_e('搜索关键字'); ?><!--</label>-->
<!--                    <input type="text" name="s" class="text" placeholder="--><?php //_e('输入关键字搜索'); ?><!--" />-->
<!--                    <button type="submit" class="submit">--><?php //_e('搜索'); ?><!--</button>-->
<!--                </form>-->
<!--            </div>-->
<!--            <div class="col-mb-12">-->
<!--                <nav id="nav-menu" class="clearfix" role="navigation">-->
<!--                    <a--><?php //if($this->is('index')): ?><!-- class="current"--><?php //endif; ?><!-- href="--><?php //$this->options->siteUrl(); ?><!--">--><?php //_e('首页'); ?><!--</a>-->
<!--                    --><?php //$this->widget('Widget_Contents_Page_List')->to($pages); ?>
<!--                    --><?php //while($pages->next()): ?>
<!--                    <a--><?php //if($this->is('page', $pages->slug)): ?><!-- class="current"--><?php //endif; ?><!-- href="--><?php //$pages->permalink(); ?><!--" title="--><?php //$pages->title(); ?><!--">--><?php //$pages->title(); ?><!--</a>-->
<!--                    --><?php //endwhile; ?>
<!--                </nav>-->
<!--            </div>-->
<!--        </div>
<!--    </div>-->
<!--</header>-->


<!--<div id="body">-->
<!--    <div class="container">-->
<!--        <div class="row">-->

    
    
