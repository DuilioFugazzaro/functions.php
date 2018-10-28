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

/* Register Sidebars
-------------------------------------------------------- */

if(! function_exists('hs_sidebars') ) {

  function hs_sidebars(){
    register_sidebar(array(
      'name' => esc_html__('Primary','hs'),
      'id' => 'primary',
      'description' => esc_html__('Main Sidebar','hs'),
      'before_title' => '<h3>' ,
      'after_title' => '</h3>',
      'before_widget' => '<div class="widget  %2$s clearfix">',
      'after_widget' => '</div>',

      )
    );
  }

}

add_action('widgets_init','hs_sidebars');

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



// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Slides', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Slide', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Slides', 'text_domain' ),
		'name_admin_bar'        => __( 'Slides', 'text_domain' ),
		'archives'              => __( 'Slides Archives', 'text_domain' ),
		'attributes'            => __( 'Slides Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Slides:', 'text_domain' ),
		'all_items'             => __( 'All Slides', 'text_domain' ),
		'add_new_item'          => __( 'Add New Slides', 'text_domain' ),
		'add_new'               => __( 'Add New Slide', 'text_domain' ),
		'new_item'              => __( 'New Slide', 'text_domain' ),
		'edit_item'             => __( 'Edit Slides', 'text_domain' ),
		'update_item'           => __( 'Update Slide', 'text_domain' ),
		'view_item'             => __( 'View Slide', 'text_domain' ),
		'view_items'            => __( 'View Slides', 'text_domain' ),
		'search_items'          => __( 'Search Slides', 'text_domain' ),
		'not_found'             => __( 'Slides Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Slides Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Slide', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Slides', 'text_domain' ),
		'items_list'            => __( 'Slides list', 'text_domain' ),
		'items_list_navigation' => __( 'Slides list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Slides list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Slide', 'text_domain' ),
		'description'           => __( 'Custom Post Type for Carousel', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'slide', $args );

}
add_action( 'init', 'custom_post_type', 0 );









 ?>
