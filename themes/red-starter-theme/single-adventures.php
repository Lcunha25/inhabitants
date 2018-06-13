<?php
/**
 * The template for displaying all single posts.
 * Template Name: Single Adventures
 * 
 * @package RED_Starter_Theme
 */

get_header(); ?>
<body id="primary" class="single-adventures-content-area">
		<main id="main" class="single-adventures-site-main" role="main">
		<?php $image = CFS()->get( 'image' ); 
			$price = CFS()->get( 'price' );
		?>
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php
                    echo "<section class='background-image-main'>";
                    echo "<div class='background-image-main-wrapper'>";
                    echo '<img src="'.esc_url($image).'" rel="lightbox">'; 
                    echo "</div>";
                    echo "</section>";
                    echo "<div class='adventure-text-wrapper'>";
					echo "<h2>" . get_the_title() . "</h2>";
					echo "<p class=\"product-price\">{$price}</p>";
					echo "<p>" . the_content() . "</p>";
					echo "<div class='single-adventure-button-wrapper'>
					<button type='button' class='single-adventure-button'><i class='fab fa-facebook-f'></i> Like</button>
					<button type='button' class='single-adventure-button'><i class='fab fa-twitter'></i> Tweet</button>
					<button type='button' class='single-adventure-button'><i class='fab fa-pinterest'></i> Pin</button>
						</div>";
					echo "</div>";
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>