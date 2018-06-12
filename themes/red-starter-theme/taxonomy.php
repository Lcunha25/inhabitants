<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="archive-content-area">
		<main id="main" class="archive-site-main" role="main">
		<header class="archive-page-header">

		<h1 class="page-title">	<?php single_cat_title(); ?> </h1>
		<?php	the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
	
	
		</header>
		<section class="archive-product-type-post">
		<?php include 'inc/loop-journal.php'; 
		productLoopCategory();?>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
