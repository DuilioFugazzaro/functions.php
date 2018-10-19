<?php

/* Dependeces Bs4 NavWalker
--------------------------------------------------*/

// Include custom navwalker
require_once('assets/bs4navwalker.php');

/* Setup Theme
--------------------------------------------------*/

if(!function_exists('hs_setup_theme')){

  function hs_setup_theme(){

    // Add Support Title
    add_theme_support("title-tag");

    // Enable Featured Image
    add_theme_support( "post-thumbnails" );

    //Create Custom Size Image
    add_image_size('hs_big', 1400, 800, true);
    add_image_size('hs_quad', 600, 600, true);
    add_image_size('hs_single', 800, 500, true);

    //Create Custom Menus
    register_nav_menus(array(
      'header' => esc_html__('Header' , 'hs'),
    ));

}

}

add_action('after_setup_theme', 'hs_setup_theme');

/* Include Javascript Files
--------------------------------------------------*/
if(!function_exists('hs_scripts')){

function hs_scripts(){

wp_enqueue_script('hs-popper-js' , get_template_directory_uri() .'/js/popper.min.js', array('jquery'), null, true);
wp_enqueue_script('hs-bootstrap-js' , get_template_directory_uri() .'/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);
wp_enqueue_script('hs-main-js' , get_template_directory_uri() .'/js/main.js', array('jquery'), null, true);
wp_enqueue_script('hs-wow-js' , get_template_directory_uri() .'/js/wow.min.js', array('jquery'), null, true);
wp_enqueue_script('hs-hs-js' , get_template_directory_uri() .'/js/script.js', array('jquery'), null, true);
wp_enqueue_script('hs-vide-js' , get_template_directory_uri() .'/js/jquery.vide.js', array('jquery'), null, true);
wp_enqueue_script('hs-contdown-js' , get_template_directory_uri() .'/js/jquery.countdown.js', array('jquery'), null, true);
wp_enqueue_script('hs-jQuery-3.3.1-js' , get_template_directory_uri() .'/js/jquery-3.3.1.min.js', array('jquery'), null, true);

 }

}

add_action('wp_enqueue_scripts' , 'hs_scripts');

if(!function_exists('hs_styles')){

  /* Include CSS Files
  --------------------------------------------------*/
function hs_styles(){

  wp_enqueue_style('hs-bootstrap-css' , get_template_directory_uri() .'/bootstrap/css/bootstrap.min.css');
  wp_enqueue_style('hs-animate-css-css' , get_template_directory_uri() .'/css/animate.css');
  wp_enqueue_style('hs-style-css' , get_template_directory_uri() .'/css/style.css');
  wp_enqueue_style('hs-animate-fontawesome-css' , get_template_directory_uri() .'/css/fontawesome-all.css');
  wp_enqueue_style('hs-font', get_template_directory_uri() .'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900');

 }
//
}

add_action('wp_enqueue_scripts' , 'hs_styles');

/***** SHORTCODE *****/

// function PrimoShortcode(){

//   return 'Al momento lo shortcode FUNZIONA';

// }
// add_shortcode( 'primo ', 'PrimoShortcode' );

//[foobar]
function foobar_func( $atts ){
	return "foo and bar";
}
add_shortcode( 'foobar', 'foobar_func' );


/* REDUX FRAMEWORK */

//including Redux Framework option folder
require 'admin-folder/admin/admin-init.php';













 ?>
