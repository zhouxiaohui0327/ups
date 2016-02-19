<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="content_wrap container w-1000">
    <div class="row">
        <div class="content_box col-md-3">
            <div class="border_box">
                <div class="list_nav">
                    <?php if(topcategory($this->category) == "news"):?>
                        <p class="title"><a href="">新闻动态</a></p>
                    <?php elseif(topcategory($this->category) == "product"):?>
                        <p class="title"><a href="">产品展示</a></p>
                    <?php elseif(topcategory($this->category) == "case"):?>
                        <p class="title"><a href="">产品展示</a></p>
                    <?php endif;?>

                </div>
                <div class="details_content " style="padding:0px;">
                    <ul class="list-unstyled">
                        <?php if($this->category == "trade"):?>
                            <li><a class="hover1" href="/index.php/category/trade/">行业新闻</a></li>
                            <li><a href="/index.php/category/company/">公司新闻</a></li>
                            <li><a href="/index.php/category/market/">市场动态</a></li>
                        <?php elseif($this->category == "company"):?>
                            <li><a href="/index.php/category/trade/">行业新闻</a></li>
                            <li><a class="hover1" href="/index.php/category/company/">公司新闻</a></li>
                            <li><a href="/index.php/category/market/">市场动态</a></li>
                        <?php elseif($this->category == "market"):?>
                            <li><a href="/index.php/category/trade/">行业新闻</a></li>
                            <li><a href="/index.php/category/company/">公司新闻</a></li>
                            <li><a class="hover1" href="/index.php/category/market/">市场动态</a></li>
                        <?php elseif(topcategory($this->category) == "product"):?>
                            <li class="sec_list">
                                <a class="sec_list_title" href="/index.php/category/XDC/">蓄电池</a>
                                <ul class="list-unstyled">
                                    <li><a href="/index.php/category/GNB/">GNB</a></li>
                                    <li><a href="/index.php/category/SYSX/">沈阳松下</a></li>
                                    <li><a href="/index.php/category/DLS/">大力神</a></li>
                                    <li><a href="/index.php/category/HZ/">海志</a></li>
                                    <li><a href="/index.php/category/FF/">非凡</a></li>
                                    <li><a href="/index.php/category/SLT/">索朗特</a></li>
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
                                    <li><a href="/index.php/category/TG/">泰高UPS</a></li>
                                    <li><a href="/index.php/category/YD/">伊顿</a></li>
                                    <li><a href="/index.php/category/XK/">先控</a></li>
                                    <li><a href="/index.php/category/SLT-UPS/">索朗特UPS</a></li>
                                    <li><a href="/index.php/category/AMS-UPS/">艾默生UPS</a></li>
                                </ul>
                            </li>
                            <li class="sec_list">
                                <a class="sec_list_title" href="/index.php/category/JFKT/">机房精密空调</a>
                                <ul class="list-unstyled">
                                    <li><a href="/index.php/category/FNKS/">菲尼克斯</a></li>
                                    <li><a href="/index.php/category/STUIZ/">STUIZ</a></li>
                                    <li><a href="/index.php/category/KLMT/">克莱门特</a></li>
                                    <li><a href="/index.php/category/AMS/">艾默生</a></li>
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
                            </li>
                        <?php elseif($this->category =="case"):?>
                            <li><a class="hover1" href="">案列展示</a></li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content_box col-md-9 col-xs-12 pull-right" style="padding-left: 0" >
            <div class="border_box">
                <div class="list_nav">
                    <p class="title"><span class="here">您的位置：</span><span class="here_nav"><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页');?>></a><?php echo $this->category(" > ");?></span></p>
                </div>
                <div class="details_content">
                    <div class="post_head">
                        <h3 class="post_title"><?php $this->title() ?></h3>
                        <p style="text-align: center;color:#26508b">时间：<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-g'); ?></time></p>
                    </div>
                    <div class="post_content">
                        <?php $this->content(); ?>
                    </div>
                    <div style="text-align: center">
                        <p>上一篇: <?php $this->thePrev('%s','没有了'); ?></p>
                        <p>下一篇: <?php $this->theNext('%s','没有了'); ?></p>
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

<?php $this->need('footer.php'); ?>
