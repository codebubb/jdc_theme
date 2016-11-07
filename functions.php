<?php
/* Register styles */
function register_styles(){
  wp_register_style('main', get_stylesheet_directory_uri() . '/css/main.css');
  wp_register_style('main_font','https://fonts.googleapis.com/css?family=Roboto');
  wp_enqueue_style('main');
  wp_enqueue_style('main_font');
}


add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 320, 240 );
// add_image_size( 'featured-image', 320, 240);
add_action( 'wp_enqueue_scripts', 'register_styles' );
?>
