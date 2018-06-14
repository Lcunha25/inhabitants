<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
function product_post_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'inhabitent' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'inhabitent' ),
		'menu_name'             => __( 'Products', 'inhabitent' ),
		'name_admin_bar'        => __( 'Post', 'inhabitent' ),
		'archives'              => __( 'Products Archives', 'inhabitent' ),
		'attributes'            => __( 'Products Attributes', 'inhabitent' ),
		'parent_item_colon'     => __( 'Parent Item:', 'inhabitent' ),
		'all_items'             => __( 'All Items', 'inhabitent' ),
		'add_new_item'          => __( 'Add New Item', 'inhabitent' ),
		'add_new'               => __( 'Add New', 'inhabitent' ),
		'new_item'              => __( 'New Item', 'inhabitent' ),
		'edit_item'             => __( 'Edit Item', 'inhabitent' ),
		'update_item'           => __( 'Update Item', 'inhabitent' ),
		'view_item'             => __( 'View Item', 'inhabitent' ),
		'view_items'            => __( 'View Items', 'inhabitent' ),
		'search_items'          => __( 'Search Item', 'inhabitent' ),
		'not_found'             => __( 'Not found', 'inhabitent' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'inhabitent' ),
		'featured_image'        => __( 'Featured Image', 'inhabitent' ),
		'set_featured_image'    => __( 'Set featured image', 'inhabitent' ),
		'remove_featured_image' => __( 'Remove featured image', 'inhabitent' ),
		'use_featured_image'    => __( 'Use as featured image', 'inhabitent' ),
		'insert_into_item'      => __( 'Insert into item', 'inhabitent' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'inhabitent' ),
		'items_list'            => __( 'Products list', 'inhabitent' ),
		'items_list_navigation' => __( 'Products list navigation', 'inhabitent' ),
		'filter_items_list'     => __( 'Filter items list', 'inhabitent' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'inhabitent' ),
		'description'           => __( 'This is a custom post type for our products', 'inhabitent' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'product_post_type', 0 );

function adventures_post_type() {

	$labels = array(
		'name'                  => _x( 'Adventures', 'Post Type General Name', 'inhabitent' ),
		'singular_name'         => _x( 'Adventures', 'Post Type Singular Name', 'inhabitent' ),
		'menu_name'             => __( 'Adventures', 'inhabitent' ),
		'name_admin_bar'        => __( 'Post', 'inhabitent' ),
		'archives'              => __( 'Adventures Archives', 'inhabitent' ),
		'attributes'            => __( 'Adventures Attributes', 'inhabitent' ),
		'parent_item_colon'     => __( 'Parent Item:', 'inhabitent' ),
		'all_items'             => __( 'All Items', 'inhabitent' ),
		'add_new_item'          => __( 'Add New Item', 'inhabitent' ),
		'add_new'               => __( 'Add New', 'inhabitent' ),
		'new_item'              => __( 'New Item', 'inhabitent' ),
		'edit_item'             => __( 'Edit Item', 'inhabitent' ),
		'update_item'           => __( 'Update Item', 'inhabitent' ),
		'view_item'             => __( 'View Item', 'inhabitent' ),
		'view_items'            => __( 'View Items', 'inhabitent' ),
		'search_items'          => __( 'Search Item', 'inhabitent' ),
		'not_found'             => __( 'Not found', 'inhabitent' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'inhabitent' ),
		'featured_image'        => __( 'Featured Image', 'inhabitent' ),
		'set_featured_image'    => __( 'Set featured image', 'inhabitent' ),
		'remove_featured_image' => __( 'Remove featured image', 'inhabitent' ),
		'use_featured_image'    => __( 'Use as featured image', 'inhabitent' ),
		'insert_into_item'      => __( 'Insert into item', 'inhabitent' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'inhabitent' ),
		'items_list'            => __( 'Adventures list', 'inhabitent' ),
		'items_list_navigation' => __( 'Adventures list navigation', 'inhabitent' ),
		'filter_items_list'     => __( 'Filter items list', 'inhabitent' ),
	);
	$args = array(
		'label'                 => __( 'Adventures', 'inhabitent' ),
		'description'           => __( 'This is a custom post type for our Adventures', 'inhabitent' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Adventures', $args );

}
add_action( 'init', 'adventures_post_type', 0 );