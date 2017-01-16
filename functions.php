<?php
/* Register styles */
function register_styles(){
  wp_register_style('core', get_stylesheet_directory_uri() . '/style.css');
  wp_register_style('main', get_stylesheet_directory_uri() . '/css/main.css');
  wp_register_style('prismcss', get_stylesheet_directory_uri() . '/css/prism.css');
  wp_register_style('main_font','https://fonts.googleapis.com/css?family=Montserrat:400,700');
  wp_register_script('prismjs', get_stylesheet_directory_uri() . '/js/prism.js');

  wp_enqueue_style('core');
  wp_enqueue_style('main');
  wp_enqueue_style('prismcss');
  wp_enqueue_style('main_font');

  wp_enqueue_script('prismjs');
}


add_theme_support( 'post-thumbnails' );
// set_post_thumbnail_size( 320, 240 );
// add_image_size( 'featured-image', 320, 240);
add_action( 'wp_enqueue_scripts', 'register_styles' );
?>
