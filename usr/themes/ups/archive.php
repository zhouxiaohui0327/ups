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

                        <?php elseif($this->_pageRow['slug'] == "product"||$this->_pageRow['slug']=="XDC"||$this->_pageRow['slug']=="EPS"||$this->_pageRow['slug']=="UPS"||$this->_pageRow['slug']=="JFKT"||$this->_pageRow['slug']=="FDJ"||$this->_pageRow['slug']=="JFGC"||$this->_pageRow['slug']=="GNB"||$this->_pageRow['slug']=="SYSX"||$this->_pageRow['slug']=="DLS"||$this->_pageRow['slug']=="HZ"||$this->_pageRow['slug']=="FF"||$this->_pageRow['slug']=="SLT"||$this->_pageRow['slug']=="GJ"
                            ||$this->_pageRow['slug']=="TG"||$this->_pageRow['slug']=="YD"||$this->_pageRow['slug']=="XK"||$this->_pageRow['slug']=="SLT-UPS"||$this->_pageRow['slug']=="AMS-UPS"||$this->_pageRow['slug']=="FNKS"||$this->_pageRow['slug']=="STUIZ"||$this->_pageRow['slug']=="KLMT"||$this->_pageRow['slug']=="AMS"||$this->_pageRow['slug']=="mdbt"||$this->_pageRow['slug']=="bc"||$this->_pageRow['slug']=="KMS"||$this->_pageRow['slug']=="lglang"):?>
                            <li class="sec_list">
                                <a class="sec_list_title" href="/index.php/category/XDC/">蓄电池</a>
                                <ul class="list-unstyled">
                                    <li><a href="/index.php/category/SLT/">索朗特</a></li>
                                    <li><a href="/index.php/category/HZ/">海志</a></li>
                                    <li><a href="/index.php/category/GNB/">GNB</a></li>
                                    <li><a href="/index.php/category/SYSX/">沈阳松下</a></li>
                                    <li><a href="/index.php/category/DLS/">大力神</a></li>
                                    <li><a href="/index.php/category/FF/">非凡</a></li>
                                </ul>
                            </li>
                            <li class="sec_list">
                                <a class="sec_list_title" href="/index.php/category/EPS/">EPS紧急电源</a>
                                <ul class="list-unstyled">
                                    <li><a href="/index.php/category/GJ/">冠军</a></li>
                                </ul>
                            </li>
                            <li class="sec_list">
                                <a class="sec_list_title" href="/index.php/category/UPS/">UPS不间断电源</a>
                                <ul class="list-unstyled">
                                    <li><a href="/index.php/category/SLT-UPS/">索朗特UPS</a></li>
                                    <li><a href="/index.php/category/AMS-UPS/">艾默生UPS</a></li>
                                    <li><a href="/index.php/category/lglang/">罗格朗UPS</a></li>
                                    <li><a href="/index.php/category/TG/">泰高UPS</a></li>
                                    <li><a href="/index.php/category/YD/">伊顿</a></li>
                                    <li><a href="/index.php/category/XK/">先控</a></li>
                                </ul>
                            </li>
                          <li class="sec_list">
                                <a class="sec_list_title" href="/index.php/category/JFKT/">机房精密空调</a>
                                <ul class="list-unstyled">
                                    <li><a href="/index.php/category/KLMT/">克莱门特</a></li>
                                    <li><a href="/index.php/category/AMS/">艾默生</a></li>
                                    <li><a href="/index.php/category/FNKS/">菲尼克斯</a></li>
                                    <li><a href="/index.php/category/STUIZ/">STUIZ</a></li>
                                </ul>
                            </li>
                            <li class="sec_list">
                                <a class="sec_list_title" href="/index.php/category/FDJ/">发电机</a>
                                <ul class="list-unstyled">
                                    <li><a href="/index.php/category/mdbt/">闽东本田</a></li>
                                    <li><a href="/index.php/category/bc/">奔驰</a></li>
                                    <li><a href="/index.php/category/KMS/">康明斯</a></li>
                                </ul>
                            </li>

                            <li class="sec_list">
                                <a class="sec_list_title" href="/index.php/category/JFGC/">机房工程</a>
<!--                                <ul class="list-unstyled">-->
<!--                                    <li><a href="/index.php/category/CITEC/">CITEC精密空调</a></li>-->
<!--                                </ul>-->
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
                <?php include"company_info.php" ;?>
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

	<?php $this->need('footer.php'); ?>
