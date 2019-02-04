<?php

require_once('wp-bootstrap-navwalker.php');

register_nav_menus(array(
    'primary' => __('Primary Menu')
));

add_theme_support('post-thumbnails');
add_theme_support('menus');

function wpb_init_widgets($id){
	register_sidebar(array(
	'name' => 'Sidebar',
	'id'   => 'sidebar',
	'before_widget' => '<div class="categories widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>'
	));
}

add_action('widgets_init','wpb_init_widgets');

?>
