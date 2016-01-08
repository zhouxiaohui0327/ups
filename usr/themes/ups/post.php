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
                    <p class="title"><span class="here">您的位置：</span><span class="here_nav"><?php echo $this->category(" < ");?> < <a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页');?></a></span></p>
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

<?php $this->need('footer.php'); ?>
