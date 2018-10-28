<?php

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Slides', 'Post Type General Name', 'hs' ),
		'singular_name'         => _x( 'Slide', 'Post Type Singular Name', 'hs' ),
		'menu_name'             => esc_html__( 'Slides', 'hs' ),
		'name_admin_bar'        => esc_html__( 'Slides', 'hs' ),
		'archives'              => esc_html__( 'Slides Archives', 'hs' ),
		'attributes'            => esc_html__( 'Slides Attributes', 'hs' ),
		'parent_item_colon'     => esc_html__( 'Parent Slides:', 'hs' ),
		'all_items'             => esc_html__( 'All Slides', 'hs' ),
		'add_new_item'          => esc_html__( 'Add New Slides', 'hs' ),
		'add_new'               => esc_html__( 'Add New Slide', 'hs' ),
		'new_item'              => esc_html__( 'New Slide', 'hs' ),
		'edit_item'             => esc_html__( 'Edit Slides', 'hs' ),
		'update_item'           => esc_html__( 'Update Slide', 'hs' ),
		'view_item'             => esc_html__( 'View Slide', 'hs' ),
		'view_items'            => esc_html__( 'View Slides', 'hs' ),
		'search_items'          => esc_html__( 'Search Slides', 'hs' ),
		'not_found'             => esc_html__( 'Slides Not found', 'hs' ),
		'not_found_in_trash'    => esc_html__( 'Slides Not found in Trash', 'hs' ),
		'featured_image'        => esc_html__( 'Featured Image', 'hs' ),
		'set_featured_image'    => esc_html__( 'Set featured image', 'hs' ),
		'remove_featured_image' => esc_html__( 'Remove featured image', 'hs' ),
		'use_featured_image'    => esc_html__( 'Use as featured image', 'hs' ),
		'insert_into_item'      => esc_html__( 'Insert into Slide', 'hs' ),
		'uploaded_to_this_item' => esc_html__( 'Uploaded to this Slides', 'hs' ),
		'items_list'            => esc_html__( 'Slides list', 'hs' ),
		'items_list_navigation' => esc_html__( 'Slides list navigation', 'hs' ),
		'filter_items_list'     => esc_html__( 'Filter Slides list', 'hs' ),
	);
	$args = array(
		'label'                 => esc_html__( 'Slide', 'hs' ),
		'description'           => esc_html__( 'Custom Post Type for Carousel', 'hs' ),
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
