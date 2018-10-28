<?php

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
