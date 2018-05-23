<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
    <div id="content" class="site-content">
    <div id="primary" class="content-area">
		<main id="main" class="single-site-main" role="main">
			<section class="single-right-page">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>
			</section>
		<section class="page-find-us-right-wrapper">
			<div class="">
				<h1>CONTACT INFO</h1>
				<p><i class="fas fa-phone"></i> 778-456-7891</p>
				<p><i class="fa fa-envelope"></i> info@inhabitents.com</p>
				<p><i class="fa fa-map-marker"></i> 1490 W Broadway, Vancouver, BC V6H 1H5<p>
			</div>
			<div class="operations">
			<?php include('sidebar.php'); ?>
			</div>
		</section>
	</div>
	</div>
	</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
