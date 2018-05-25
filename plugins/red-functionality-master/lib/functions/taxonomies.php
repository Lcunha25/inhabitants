<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
function product_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Product Types', 'Taxonomy General Name', 'inhabitent' ),
		'singular_name'              => _x( 'Product Types', 'Taxonomy Singular Name', 'inhabitent' ),
		'menu_name'                  => __( 'Product Types', 'inhabitent' ),
		'all_items'                  => __( 'All Product Types', 'inhabitent' ),
		'parent_item'                => __( 'Parent Product Type', 'inhabitent' ),
		'parent_item_colon'          => __( 'Parent Product Type', 'inhabitent' ),
		'new_item_name'              => __( 'New Product Name', 'inhabitent' ),
		'add_new_item'               => __( 'Add New Product', 'inhabitent' ),
		'edit_item'                  => __( 'Edit Product Types', 'inhabitent' ),
		'update_item'                => __( 'Update Product Types', 'inhabitent' ),
		'view_item'                  => __( 'View Product Types', 'inhabitent' ),
		'separate_items_with_commas' => __( 'Separate Product Types with commas', 'inhabitent' ),
		'add_or_remove_items'        => __( 'Add or remove products', 'inhabitent' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'inhabitent' ),
		'popular_items'              => __( 'Popular Product Types', 'inhabitent' ),
		'search_items'               => __( 'Search Products', 'inhabitent' ),
		'not_found'                  => __( 'Not Found', 'inhabitent' ),
		'no_terms'                   => __( 'No Products', 'inhabitent' ),
		'items_list'                 => __( 'Produt list', 'inhabitent' ),
		'items_list_navigation'      => __( 'Product list navigation', 'inhabitent' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product_type', array( 'product' ), $args );

}
add_action( 'init', 'product_custom_taxonomy', 0 );