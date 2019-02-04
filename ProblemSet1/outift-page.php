<?php /* Template Name: outfit */ ;?>
<?php get_header(); ?>
<section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>分享我对穿搭、护肤和女性话题的见解</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="http://dev-shirley.pantheonsite.io">
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

				 <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
'post_type' => array('fashion_blogs'),
'post_status' => 'publish',
'order' => 'DESC',
'orderby' => 'date',
'posts_per_page' => 3,
'paged' => $paged,
);

// WP_Query
$eq_query = new WP_Query( $args );
if ($eq_query->have_posts()) : // The Loop
?>
<div class="wp-easy-query">
<div class="wp-easy-query-posts">
<div class="blog-content">
<?php
while ($eq_query->have_posts()): $eq_query->the_post();
?>
	<div class="blog-post-image">
<img class="img-responsive"<?php if ( has_post_thumbnail() ) {
the_post_thumbnail();
}?>
	</div>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<p class="entry-meta"><?php the_time("F d, Y"); ?>, by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a></p>
<?php the_excerpt(); ?>
<a href="<?php the_permalink(); ?>" class="btn btn-dafault btn-details">阅读全文</a>
<?php endwhile; wp_reset_query(); ?>
</div>
</div>
<?php include(EQ_PAGING); ?>
</div>
<?php endif; ?>
			</article>
	</div>
</div>
</div>
</section>

<!--====  End of Blog Left sidebar  ====-->

<?php get_footer(); ?>
