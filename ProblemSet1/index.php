<?php get_header(); ?>

<!--
==================================================
Slider Section Start
================================================== -->
<section id="hero-area" >
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="block wow fadeInUp" data-wow-delay=".3s">
                <!-- Slider -->
                <section class="cd-intro">
                    <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                    <span>嗨, 欢迎你来到我的一个网站！它是一个</span><br>
                    <span class="cd-words-wrapper">
                        <b class="is-visible">穿搭分享</b>
                        <b >购物分享</b>
                        <b >个人博客</b>
                    </span>
                    </h1>
                    </section> <!-- cd-intro -->
                    <!-- /.slider -->
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                        TO BE HONEST. I AM A SHOPPING ADDICT. <br>
                        八年以上网购经验，关注上百位微博和Instagram时尚博主，尝试过十几家购物网站和淘宝几十家店铺，<br>
                        我将自己多年积累下来的经验，想法和购买链接直接与你分享，希望能帮助你早日在穿衣方面找到独特的自己。
                    </h2>
                    <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="#works" data-section="#works">查看穿搭</a>
                </div>
            </div>
        </div>
    </div>
</section><!--/#main-slider-->

<!--
==================================================
About Section Start
================================================== -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>关于我</h2>
                    <p>
                        嗨，很高兴认识你，也许我们素未谋面，但你可以通过以下几个关键词迅速地了解我。  </p>
                        <p>
                        半路出家的DEVELOPER<br>
                        在香港中文大学跟随Bernad神学习代码不到三个月，这也许是你见过最拙略的网站设计，但我想用目前仅会的代码来写出这个我一直以来都很想做的穿搭和购物分享的网站。</p>
                        <p>
                        衣服是我的第二重人格<br>
                        YOU ARE WAHT YOU WARE. 我一直赞同这个观点，衣服是人的第二重人格，外在穿衣一同定义你是谁的问题。但找到适合自我内在的风格并不容易，希望我能在这里帮助你COMPLETE YOURSELF。
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <img src="<?php bloginfo('template_url'); ?>/images/about/about.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#about -->


<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">只看穿搭怎么够，要每件都有购买链接才行。</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                不仅有来自世界各地博主的穿搭灵感，他们身上的每件衣服我都会为你找来购买链接。<br> 它们或是原款链接，给资金充足的你；或是平价替代款，给大多数预算有限的你。
            </p>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" >
                        <div class="overlay">
                            <div class="buttons">
                                <a class="fancybox" href="images/portfolio/item-1.jpg">大图</a>
                                <a target="_blank" href="service.html">查看</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="service.html">
                        简约ins风
                    </a>
                    </h4>
                    <p>
                      基本款plus，不仅舒服耐看，还带点高级感
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/portfolio/item-2.jpg" class="img-responsive" alt="this is a title" >
                        <div class="overlay">
                            <div class="buttons">
                                <a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/portfolio/item-2.jpg">大图</a>
                                <a target="_blank" href="American.html">查看</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="American.html">
                        美式休闲款
                    </a>
                    </h4>
                    <p>
                        街拍中最常见就是它，可甜可咸
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/portfolio/item-3.jpg" class="img-responsive" alt="" >
                        <div class="overlay">
                            <div class="buttons">
                                <a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/portfolio/item-3.jpg">大图</a>
                                <a target="_blank" href="French.html">查看</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="French.html">
                        法风穿搭
                    </a>
                    </h4>
                    <p>
                        性感神秘的法国风情谁不爱
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="img-wrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/portfolio/item-4.jpg" class="img-responsive" alt="" >
                        <div class="overlay">
                            <div class="buttons">
                                <a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/portfolio/item-4.jpg">大图</a>
                                <a target="_blank" href="little.html">查看</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="little.html">
                        小个子穿搭
                    </a>
                    </h4>
                    <p>
                        娇小女生特有的穿搭法则
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="img-wrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/portfolio/item-5.jpg" class="img-responsive" alt="" >
                        <div class="overlay">
                            <div class="buttons">
                                <a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/portfolio/item-5.jpg">大图</a>
                                <a target="_blank" href="office.html">查看</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="office.html">
                        轻熟职场OL
                    </a>
                    </h4>
                    <p>
                        Dressing Code：大方得体又不失风格与活力
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="img-wrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/portfolio/item-6.jpg" class="img-responsive" alt="" >
                        <div class="overlay">
                            <div class="buttons">
                                <a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/portfolio/item-6.jpg">大图</a>
                                <a target="_blank" href="mature.html">查看</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="mature.html">
                        轻性感和高级风
                    </a>
                    </h4>
                    <p>
                        25岁左右就可以开始追求材质，高级与性感
                    </p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section> <!-- #works -->
<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="feature">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">我可以为你提供</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                本科在中传广告学院学习广告、公关、市场和新媒体，<br>
                研究生正在香港中文大学学习简单代码以及数据处理，<br>
                生活中喜欢关注各种关注各种博主、研究穿搭，经常网购试错，所以也积累了一些小心得。

            </p>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-flask-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">博主推荐</h4>
                        <p>喜欢的穿搭博主从微博到Instagram，总有一款是适合你的。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-lightbulb-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">穿搭推荐</h4>
                        <p>被朋友们评价为衣品还不错的我为你把关当下最流行的穿搭。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-lightbulb-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">单品推荐</h4>
                        <p>只有穿着率极高的经典款才能在这里被放进我的单品推荐栏。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-americanfootball-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">购买链接</h4>
                        <p>没错，给你最需要的购买链接，既有原版也有淘宝评价替代版。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-keypad-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">购物经验</h4>
                        <p>曾经80%可支配的零用钱都花在了网购上，我用自己真实的经验告诉你如何理性消费。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1800ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-barcode-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">运动护肤</h4>
                        <p>不爱化妆但喜欢追求健康的皮肤和身体状态，从曾经痘痘肌到现在会被夸皮肤好，来和你分享真实的经验。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#feature -->

<?php get_footer(); ?>
