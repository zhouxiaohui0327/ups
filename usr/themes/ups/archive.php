<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php $url =$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];?>

<style>
    .prev , .next{
        display: inline-block;
        left: auto;
        position:relative;
        background:none;
        width:auto;
        height:auto;
        top:auto;
        right: auto;
    }
    .page-navigator{
        list-style: none;
        text-align: center;
    }
    .page-navigator li{
        display: inline-block;
        padding:0 10px;
        border: 1px solid gainsboro;
    }
</style>



<div class="btn111">
    <button class="navbar-toggle collapsed" type="button" >
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>
<div class="content_wrap container w-1000">
    <div class="row">
        <div id="d-mask" class="content_box col-xs-6 col-md-3">
            <div class="border_box">
                <div class="list_nav">
                    <p class="title"><a href=""><?php $this->archiveTitle(array(
                                'category'  =>  _t('%s'),
                                'search'    =>  _t('包含关键字 %s 的文章'),
                                'tag'       =>  _t('标签 %s 下的文章'),
                                'author'    =>  _t('%s 发布的文章')
                            ), '', ''); ?></a></p>
                </div>
                <div class="details_content"  style="padding:0;">
                    <ul class="list-unstyled">
                        <?php if($this->_pageRow['slug']=="news"):?>
                            <li><a href="/index.php/category/trade/">行业新闻</a></li>
                            <li><a href="/index.php/category/company/">公司新闻</a></li>
                            <li><a href="/index.php/category/market/">市场动态</a></li>
                        <?php elseif($this->_pageRow['slug']=="trade"):?>
                                <li><a class="hover1" href="/index.php/category/trade/">行业新闻</a></li>
                                <li><a href="/index.php/category/company/">公司新闻</a></li>
                                <li><a href="/index.php/category/market/">市场动态</a></li>
                        <?php elseif($this->_pageRow['slug']=="company"):?>
                            <li><a href="/index.php/category/trade/">行业新闻</a></li>
                            <li><a class="hover1" href="/index.php/category/company/">公司新闻</a></li>
                            <li><a href="/index.php/category/market/">市场动态</a></li>
                        <?php elseif($this->_pageRow['slug']=="market"):?>
                            <li><a href="/index.php/category/trade/">行业新闻</a></li>
                            <li><a href="/index.php/category/company/">公司新闻</a></li>
                            <li><a class="hover1" href="/index.php/category/market/">市场动态</a></li>

                        <?php elseif($this->_pageRow['slug'] == "product"||$this->_pageRow['slug']=="xdc"||$this->_pageRow['slug']=="EPS"||$this->_pageRow['slug']=="EPS"||$this->_pageRow['slug']=="xcp"||$this->_pageRow['slug']=="UPS"||$this->_pageRow['slug']=="jf"||$this->_pageRow['slug']=="fdj"||$this->_pageRow['slug']=="lgl"||$this->_pageRow['slug']=="pkxdc"||$this->_pageRow['slug']=="CITEC"||$this->_pageRow['slug']=="yg"||$this->_pageRow['slug']=="gnb"
                            ||$this->_pageRow['slug']=="sysx"||$this->_pageRow['slug']=="tq"||$this->_pageRow['slug']=="dls"||$this->_pageRow['slug']=="peak"||$this->_pageRow['slug']=="mlrl"||$this->_pageRow['slug']=="xmz"||$this->_pageRow['slug']=="klrd"||$this->_pageRow['slug']=="yd"||$this->_pageRow['slug']=="st"||$this->_pageRow['slug']=="fnks"||$this->_pageRow['slug']=="STUIZ"||$this->_pageRow['slug']=="aex"||$this->_pageRow['slug']=="mdbt"||$this->_pageRow['slug']=="bc"||$this->_pageRow['slug']=="qtbl"):?>
                            <li class="sec_list">
                                <a class="sec_list_title" href="/index.php/category/xdc/">蓄电池</a>
                                <ul class="list-unstyled">
                                    <li><a href="/index.php/category/yg/">阳光</a></li>
                                    <li><a href="/index.php/category/xdc/">蓄电池</a></li>
                                    <li><a href="/index.php/category/gnb/">GNB</a></li>
                                    <li><a href="/index.php/category/sysx/">沈阳松下</a></li>
                                    <li><a href="/index.php/category/tq/">汤浅</a></li>
                                    <li><a href="/index.php/category/dls/">大力神</a></li>
                                    <li><a href="/index.php/category/peak/">PEAK POWER</a></li>
                                </ul>
                            </li>
                            <li class="sec_list">
                                <a class="sec_list_title" href="/index.php/category/EPS/">EPS紧急电源</a>
                                <ul class="list-unstyled">
                                    <li><a href="/index.php/category/EPS/">EPS紧急电源</a></li>
                                </ul>
                            </li>
                            <li class="sec_list">
                                <a class="sec_list_title" href="/index.php/category/xcp/">新产品PEAK POWER</a>
                                <ul class="list-unstyled">
                                    <li><a  href="/index.php/category/xcp/">新产品PEAK POWER</a></li>
                                </ul>
                            </li>
                            <li class="sec_list">
                                <a class="sec_list_title" href="/index.php/category/UPS/">UPS不间断电源</a>
                                <ul class="list-unstyled">
                                    <li><a href="/index.php/category/mlrl/">梅兰日兰</a></li>
                                    <li><a href="/index.php/category/xmz/">西门子</a></li>
                                    <li><a href="/index.php/category/klrd/">克劳瑞德</a></li>
                                    <li><a href="/index.php/category/UPS/">UPS不间断电源</a></li>
                                    <li><a href="/index.php/category/yd/">伊顿</a></li>
                                    <li><a href="/index.php/category/st/">山特</a></li>
                                </ul>
                            </li>
                            <li class="sec_list">
                                <a class="sec_list_title" href="/index.php/category/pk/">佩科UPS</a>
                                <ul class="list-unstyled">
                                    <li><a href="/index.php/category/pk/">佩科UPS</a></li>
                                </ul>
                            </li>
                            <li class="sec_list">
                                <a class="sec_list_title" href="/index.php/category/jf/">机房精密空调</a>
                                <ul class="list-unstyled">
                                    <li><a href="/index.php/category/fnks/">菲尼克斯</a></li>
                                    <li><a href="/index.php/category/STUIZ/">梅兰日兰STUIZ</a></li>
                                    <li><a href="/index.php/category/aex/">阿尔西</a></li>
                                    <li><a href="/index.php/category/jf/">机房精密空调</a></li>
                                </ul>
                            </li>
                            <li class="sec_list">
                                <a class="sec_list_title" href="/index.php/category/fdj/">发电机</a>
                                <ul class="list-unstyled">
                                    <li><a href="/index.php/category/mdbt/">闽东本田</a></li>
                                    <li><a href="/index.php/category/bc/">奔驰</a></li>
                                    <li><a href="/index.php/category/qtbl/">恰特彼勒</a></li>
                                    <li><a href="/index.php/category/fdj/">发电机</a></li>
                                </ul>
                            </li>
                            <li class="sec_list">
                                <a class="sec_list_title" href="/index.php/category/lgl/">罗格朗UPS</a>
                                <ul class="list-unstyled">
                                    <li><a href="/index.php/category/lgl/">罗格朗UPS</a></li>
                                </ul>
                            </li>
                            <li class="sec_list">
                                <a class="sec_list_title" href="/index.php/category/pkxdc/">佩科蓄电池</a>
                                <ul class="list-unstyled">
                                    <li><a href="/index.php/category/pkxdc/">佩科蓄电池</a></li>
                                </ul>
                            </li>
                            <li class="sec_list">
                                <a class="sec_list_title" href="/index.php/category/CITEC/">CITEC精密空调</a>
                                <ul class="list-unstyled">
                                    <li><a href="/index.php/category/CITEC/">CITEC精密空调</a></li>
                                </ul>
                            </li>

                        <?php elseif($this->category == "case"):?>
                            <li><a href="">案列展示</a></li>
                        <?php endif;?>

                    </ul>
                </div>
            </div>
        </div>

        <div class="content_box col-md-9 col-xs-12 pull-right" style="padding-left: 0">
            <div class="border_box">
                <div class="list_nav">

                    <?php if($this->_pageRow['slug']=="product"):?>
                    <p class="title"><span class="here">您的位置：</span><span class="here_nav"><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页');?></a> > <?php echo "产品展示";?></span></p>
                    <?php elseif($this->_pageRow['slug']=="news"):?>
                    <p class="title"><span class="here">您的位置：</span><span class="here_nav"><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页');?></a> > <?php echo "新闻动态";?></span></p>
                     <?php else:?>
                    <p class="title"><span class="here">您的位置：</span><span class="here_nav"><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页');?></a> > <?php echo $this->category(" > ");?></span></p>
                    <?php endif;?>


<!--                    --><?php //echo $this->_pageRow['slug'];?>
                </div>
                <div class="details_content">
                    <div class="list_wrap clearfix">
                        <?php if(topcategory($this->category) == "news"):?>
                            <?php if ($this->have()): ?>
                                <?php while($this->next()): ?>
                                    <div class="list_one">
                                        <p class="title"><span><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time></span><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></p>
                                        <div class="content post-content" itemprop="articleBody"><?php $this->excerpt(85,'...'); ?></div>
                                    </div>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <article class="post">
                                    <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
                                </article>
                            <?php endif; ?>

                        <?php elseif(topcategory($this->category)== "product"):?>
                            <?php if ($this->have()): ?>
                                <?php $this->widget('Widget_Archive@index', 'pageSize=9&type=category', 'mid='.$this->_pageRow['mid'])->to($categoryPosts); ?>
                                <?php while($categoryPosts->next()&&$this->next()): ?>
                                    <div class="case_img col-xs-12">
                                        <h4><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h4>
                                        <a href="<?php $categoryPosts->permalink(); ?>"><img class="pull-left" width="130" height="95" src="<?php echo thumbnail($categoryPosts->content); ?>"></a>
                                        <div class="case_text pull-left" >
                                            <?php $this->excerpt(50,'...'); ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php else: ?>
                                    <div class="case_text pull-left" >
                                        <?php _e('没有找到内容'); ?>
                                    </div>
                            <?php endif;?>

                        <?php elseif($this->category == "case"):?>
                            <?php if ($this->have()): ?>
                               <?php $this->widget('Widget_Archive@index', 'pageSize=9&type=category', 'mid=5')->to($categoryPosts); ?>
                               <?php while($categoryPosts->next()&&$this->next()): ?>
                                   <div class="list_img">
                                       <a href="<?php $categoryPosts->permalink(); ?>"><img src="<?php echo thumbnail($categoryPosts->content); ?>"></a>
                                       <div class="list_text" style="text-align: center">
                                           <a style="display:block;width:100%;  white-space: nowrap;text-overflow: ellipsis;overflow: hidden;" itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                                       </div>
                                   </div>
                               <?php endwhile; ?>
                           <?php else: ?>
                                <article class="post">
                                    <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
                                </article>
                           <?php endif;?>
                        <?php endif;?>

                    </div>
                    <div style="width: 100%; margin-top:30px;margin-bottom:20px;">
                        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_box col-md-3 col-xs-12 pull-left">
            <div class="border_box">
                <div class="list_nav">
                    <p class="title"><a href="/index.php/contact.html">联系方式</a></p>
                </div>
                <div class="details_content" style="padding:10px;">
                    <img class="contact_us1" src="<?php $this->options->themeUrl(); ?>images/contact_us1.jpg" alt=""/>
                    <h5>杭州迎易峰科技有限公司</h5>
                    <p>地址：杭州市西湖区古墩路656号紫金港商务大厦615</p>
                    <p>传真：0571-89731190</p>
                    <p>电话：0571-89731191/89731192</p>
                    <p>手 机：18605889880</p>
                    <p>邮 箱：peakpower@peakups.com</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $(".btn111").click(function(){
            var xx = -15;
            var ww =  parseInt($("#d-mask").css("left"));
            if(ww =="-15"){
                $("#d-mask").animate({left:"-215px"})
            }else{
                $("#d-mask").animate({left:xx+"px"})
            }
        })

            })
</script>
<!--    <div class="col-mb-12 col-8" id="main" role="main">-->
<!--        <h3 class="archive-title">--><?php //$this->archiveTitle(array(
//            'category'  =>  _t('分类 %s 下的文章'),
//            'search'    =>  _t('包含关键字 %s 的文章'),
//            'tag'       =>  _t('标签 %s 下的文章'),
//            'author'    =>  _t('%s 发布的文章')
//        ), '', ''); ?><!--</h3>-->
<!--        --><?php //if ($this->have()): ?>
<!--    	--><?php //while($this->next()): ?>
<!--            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">-->
<!--    			<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="--><?php //$this->permalink() ?><!--">--><?php //$this->title() ?><!--</a></h2>-->
<!--    			<ul class="post-meta">-->
<!--    				<li itemprop="author" itemscope itemtype="http://schema.org/Person">--><?php //_e('作者: '); ?><!--<a itemprop="name" href="--><?php //$this->author->permalink(); ?><!--" rel="author">--><?php //$this->author(); ?><!--</a></li>-->
<!--    				<li>--><?php //_e('时间: '); ?><!--<time datetime="--><?php //$this->date('c'); ?><!--" itemprop="datePublished">--><?php //$this->date('F j, Y'); ?><!--</time></li>-->
<!--    				<li>--><?php //_e('分类: '); ?><!----><?php //$this->category(','); ?><!--</li>-->
<!--                    <li itemprop="interactionCount"><a href="--><?php //$this->permalink() ?><!--#comments">--><?php //$this->commentsNum('评论', '1 条评论', '%d 条评论'); ?><!--</a></li>-->
<!--    			</ul>-->
<!--                <div class="post-content" itemprop="articleBody">-->
<!--        			--><?php //$this->content('- 阅读剩余部分 -'); ?>
<!--                </div>-->
<!--    		</article>-->
<!--    	--><?php //endwhile; ?>
<!--        --><?php //else: ?>
<!--            <article class="post">-->
<!--                <h2 class="post-title">--><?php //_e('没有找到内容'); ?><!--</h2>-->
<!--            </article>-->
<!--        --><?php //endif; ?>
<!---->
<!--        --><?php //$this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
<!---->
<!---->
<!--	--><?php //$this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
