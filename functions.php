<?php


/* Async function */
function add_async_attribute($tag, $handle) {
   // add script handles to the array below
   $scripts_to_async = array('prismjs');

   foreach($scripts_to_async as $async_script) {
      if ($async_script === $handle) {
         return str_replace(' src', ' async src', $tag);
      }
   }
   return $tag;
}

add_filter('script_loader_tag', 'add_async_attribute', 10, 2);


/* Register styles */
function register_styles(){
  wp_register_style('core', get_stylesheet_directory_uri() . '/style.css');
  wp_register_style('main', get_stylesheet_directory_uri() . '/css/main.css');
  wp_register_style('prismcss', get_stylesheet_directory_uri() . '/css/prism.css');
  wp_register_style('main_font','https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700');

  wp_register_script('jquery', 'https://code.jquery.com/jquery-1.12.4.min.js');
  wp_register_script('scrolldepth', get_stylesheet_directory_uri() . '/js/jquery.scrolldepth.min.js');
  wp_register_script('prismjs', get_stylesheet_directory_uri() . '/js/prism.js');

  wp_enqueue_style('core');
  wp_enqueue_style('main');
  wp_enqueue_style('prismcss');
  wp_enqueue_style('main_font');

  wp_enqueue_script('jquery');
  wp_enqueue_script('scrolldepth');
  wp_enqueue_script('prismjs');
}

add_image_size( 'home-page-thumb', 600, 300 );
add_theme_support( 'post-thumbnails' );
// set_post_thumbnail_size( 320, 240 );
// add_image_size( 'featured-image', 320, 240);
add_action( 'wp_enqueue_scripts', 'register_styles' );
?>
