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
	wp_enqueue_script( 'my-custom-script', get_template_directory_uri() .'/build/js/main.min.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'red_starter_test');

// Adds a buttom on each post the page calls:
/**
 * Customize excerpt length and style.
 *
 * @param  string The raw post content.
 * @return string
 */
function inhabitent_wp_trim_excerpt( $text ) {
    $raw_excerpt = $text;
    if ( '' == $text ) {
        // retrieve the post content
        $text = get_the_content('');
        // delete all shortcode tags from the content
        $text = strip_shortcodes( $text );
        $text = apply_filters( 'the_content', $text );
        $text = str_replace( ']]>', ']]&gt;', $text );
        // indicate allowable tags
        $allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
        $text = strip_tags( $text, $allowed_tags );
        // change to desired word count
        $excerpt_word_count = 50;
        $excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count );
        // create a custom "more" link
        $excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() . '" class="read-more black-btn">Read more &rarr;</a></p>'; // modify excerpt ending
        $excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end );
        // add the elipsis and link to the end if the word count is longer than the excerpt
        $words = preg_split( "/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );
        if ( count( $words ) > $excerpt_length ) {
            array_pop( $words );
            $text = implode( ' ', $words );
            $text = $text . $excerpt_more;
        } else {
            $text = implode( ' ', $words );
        }
    }
    return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
}
remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter( 'get_the_excerpt', 'inhabitent_wp_trim_excerpt' );
?>