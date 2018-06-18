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
			<section class="single-left-page">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php the_post_navigation(); ?>
					<br>
					<?php 		
						echo "<div class='single-adventure-button-wrapper'>
						<button type='button' class='single-adventure-button'><i class='fab fa-facebook-f'></i> Like</button>
						<button type='button' class='single-adventure-button'><i class='fab fa-twitter'></i> Tweet</button>
						<button type='button' class='single-adventure-button'><i class='fab fa-pinterest'></i> Pin</button>
						</div>";
					?>

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
					<p><i class="fas fa-phone"></i> <a href="tel:778-456-7891">778-456-7891</a></p>
					<p><i class="fa fa-envelope"></i> <a href="mailto:info@inhabitents.com">info@inhabitents.com</a></p>
					<p><i class="fa fa-map-marker"></i> 1490 W Broadway, Vancouver, BC V6H 1H5<p>
				</div>
				<div class="operations">
					<?php include('sidebar.php'); ?>
				</div>
				<div class="archives">
					<h1>archives</h1>
					<ul><?php wp_get_archives(); ?></ul>
				</div>
			</section>
	</div>
	</div>
	</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
