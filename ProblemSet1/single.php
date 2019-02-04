<?php /* Template Name: myblog */ ;?>

<?php get_header(); ?>
<!--
==================================================
    Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>穿搭以及女性成长</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="http://dev-shirley.pantheonsite.io/">
                                <i class="ion-ios-home"></i>
                                主页
                            </a>
                        </li>
                        <li class="active">我的文章</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>


<!--=======================================
=            Blog Left sidebar            =
========================================-->

<section id="blog-full-width">
<div class="container">
<div class="row">
    <div class="col-md-4">
        <div class="sidebar">

                <div class="author widget">
                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/author/author-bg.jpg">
                    <div class="author-body text-center">
                        <div class="author-img">
                            <img src="<?php bloginfo('template_url'); ?>/images/author/author.jpg">
                        </div>
                        <div class="author-bio">
                            <h3>Shirley</h3>
                            <p>我们不应该成为被驯服的，被给予身份的人。<br>你想要成为谁，想要穿成什么样子，<br>这永远都是你的终极自由。</p>
                        </div>
                    </div>
                </div>
     <?php if(is_active_sidebar('sidebar')):?>
  <?php dynamic_sidebar('sidebar');?>
<?php endif;?>


            </div>
        </div>


        <div class="col-md-8">
             <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
<?php if (have_posts()) :
   					while (have_posts()) :
      					the_post(); ?>

<div class="blog-content">

	<div class="blog-post-image">
<img class="img-responsive"<?php if ( has_post_thumbnail() ) {
the_post_thumbnail();
}?>
	</div>
<h3><?php the_title(); ?></h3>
<p class="entry-meta"><?php the_time("F d, Y"); ?>, by <?php the_author();?></p>
<?php the_content(); ?>
<hr>
<?php comments_template();?>

</div>

<?php endwhile;?>
	<?php endif ;?>
			</article>
	</div>
</div>
</div>
</section>

<!--====  End of Blog Left sidebar  ====-->

<?php get_footer(); ?>
