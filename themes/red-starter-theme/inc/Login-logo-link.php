<?php
// Changing the logo
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/grumpy-cat.jpeg);
		height:65px;
		width:160px;
		background-size: 160px 65px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Changing the url
function my_login_logo_url() {
    return 'https://www.youtube.com/watch?v=INscMGmhmX4';
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

?>