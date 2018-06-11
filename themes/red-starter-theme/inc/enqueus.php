<?php

/**
 * Enqueue scripts and styles.
 */
function red_starter_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'red_starter_scripts' );

// fontawesome add to scripts
function red_starter_test() {
	wp_enqueue_style( 'red-starter-fontawesome', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css' );
	wp_enqueue_script( 'my-custom-script', get_template_directory_uri() .'/js/main.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'red_starter_test');
?>