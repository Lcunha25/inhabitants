<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<div class="header-pic">
				<?php get_background_image(); ?>
				<div>
				<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div><!-- .site-branding -->
			<div class="nav-bar">
			<a class="logo-nav" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-tent.svg'; ?>" class="logo" alt="inhabitent logo" />
			</a>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				<div class="header-search">
						<a href="#" class="search-toggle" aria-hidden="true">
							<i class="fa fa-search"></i>
						</a>
						<form role="search" method="get" class="search-form" action="http://localhost:8888/inhabitent/">
							<input type="search" class="search-field" placeholder="Type and hit enter..." value="" name="s" title="Search for:">
						</form>
				</div>
			</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->


