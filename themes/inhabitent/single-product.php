<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header();
$price = CFS()->get( 'price' );
$excerpt = CFS()->get( 'excerpt' );
$image = CFS()->get( 'image' );
echo "<p class=\"product-price\">{$price}</p>";
echo "<p class=\"product-excerpt\">{$excerpt}</p>";
echo "<p class=\"product-image\">{$image}</p>";
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>
            <?php echo CFS()->get( 'Price' ); ?>
			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
