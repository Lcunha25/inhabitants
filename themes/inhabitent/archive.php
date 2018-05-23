<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php include 'inc/loop-journal.php'; 
		productLoop();?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
