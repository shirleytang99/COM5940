<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="author" content="<?php the_author(); ?>">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/plugins/bootstrap/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/plugins/ionicons/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/plugins/animate-css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/plugins/slider/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/plugins/owl-carousel/owl.theme.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/plugins/facncybox/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    </head>

	<body>


        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="http://dev-shirley.pantheonsite.io" >
                            <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-left" role="navigation">
                  <div class="main-menu">
                      <ul class="nav navbar-nav navbar-left">
                        <li>
                    <a href="http://dev-shirley.pantheonsite.io" >Shirely's Shopping Haul</a>
                  </li>
                </ul>
</div>
</nav>
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">

                           <?php
						   wp_nav_menu(array(
							  'menu'              => 'primary',
							  'theme_location'    => 'primary',
							  'depth'             => 2,
							  'container'         => 'div',
							  'container_class'   => 'collapse navbar-collapse',
							  'container_id'      => 'bs-example-navbar-collapse-1',
							  'menu_class'        => 'nav navbar-nav',
							  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							  'walker'            => new wp_bootstrap_navwalker())
						   );?>

                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
