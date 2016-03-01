<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="content_wrap container w-1000">
    <div class="row">
        <div class="content_box col-md-3">
            <div class="border_box">
                <div class="list_nav">

                    <p class="title"><a href=""> <?php $this->title();?></a></p>

                </div>
                <div class="details_content" style="padding:0px;">
                    <ul class="list-unstyled" style="margin-bottom: 0px;">

                        <?php if($this->slug == "intro"):?>
                            <li><a class="hover1" href="/index.php/intro.html">公司介绍</a></li>
                            <li><a href="/index.php/honor.html">公司荣誉</a></li>
                            <li><a href="/index.php/culture.html">企业文化</a></li>
                            <li><a href="/index.php/condition.html">公司环境</a></li>
                        <?php elseif($this->slug =="honor"):?>
                            <li><a href="/index.php/intro.html">公司介绍</a></li>
                            <li><a class="hover1" href="/index.php/honor.html">公司荣誉</a></li>
                            <li><a href="/index.php/culture.html">企业文化</a></li>
                            <li><a href="/index.php/condition.html">公司环境</a></li>
                        <?php elseif($this->slug =="culture"):?>
                            <li><a href="/index.php/intro.html">公司介绍</a></li>
                            <li><a href="/index.php/honor.html">公司荣誉</a></li>
                            <li><a class="hover1" href="/index.php/culture.html">企业文化</a></li>
                            <li><a href="/index.php/condition.html">公司环境</a></li>
                        <?php elseif($this->slug =="condition"):?>
                            <li><a href="/index.php/intro.html">公司介绍</a></li>
                            <li><a href="/index.php/honor.html">公司荣誉</a></li>
                            <li><a href="/index.php/culture.html">企业文化</a></li>
                            <li><a class="hover1" href="/index.php/condition.html">公司环境</a></li>
                        <?php elseif($this->slug == "server"):?>
                            <li><a class="hover1" href=""><?php $this->title();?></a></li>
                        <?php elseif($this->slug == "recruit"):?>
                            <li><a class="hover1" href=""><?php $this->title();?></a></li>
                        <?php elseif($this->slug == "contact"):?>
                            <li><a href="/index.php/contact.html">联系方式</a></li>
<!--                            <li><a href="">客户留言</a></li>-->
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>


        <div class="content_box col-md-9 col-xs-12 pull-right" style="padding-left: 0" >
            <div class="border_box">
                <div class="list_nav">
                    <p class="title"><span class="here">您的位置：</span><span class="here_nav"><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页');?></a> > <?php $this->title();?></span></p>
                </div>
                <div class="details_content">

                    <div class="post_content">
                        <?php $this->content(); ?>
<!--                        <img src="./images/12345.jpg" alt=""/>-->
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
