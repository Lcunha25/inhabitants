<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="error-content-area">
		<main id="main" class="error-site-main" role="main">

			<section class="single-right-page">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( 'Oops! That page can&rsquo;t be found.' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php echo esc_html( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( red_starter_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php echo esc_html( 'Most Used Categories' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

					<?php
						$archive_content = '<p>' . sprintf( esc_html( 'Try looking in the monthly archives. %1$s' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
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
	</div><!-- #primary -->

<?php get_footer(); ?>
