<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<section id="primary" class="search-content-area">
		<main id="main" class="search-site-main" role="main">
			<section class="single-right-page">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'search' ); ?>

					<?php endwhile; ?>

					<?php red_starter_numbered_pagination(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
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
					<div class="archives">
						<h1>archives</h1>
						<ul><?php wp_get_archives(); ?></ul>
					</div>
				</section>
			</main><!-- #main -->
		</section><!-- #primary -->

<?php get_footer(); ?>
