<?php 
// function used on "page-about.php" page.

    function displayPost ($cat, $postPP){
        $query = "cat=$cat&posts_per_page=$postPP";

        $newsPosts = new WP_Query($query);
			 if ( $newsPosts->have_posts() ) : 

				 if ( $newsPosts->is_home() && ! $newsPosts->is_front_page() ) : 
					echo '<header>';
					echo	'<h1 class="page-title screen-reader-text"> single_post_title(); </h1>';
					echo '</header>';
				 endif; 

				 /* Start the Loop */ 
				 while ( $newsPosts->have_posts() ) : $newsPosts->the_post(); 

					echo "<h2>" . "<a>" . get_the_title() . "</a>" . "</h2>";
					echo "<p>" . the_content( 'template-parts' ) . "</p>";

				 endwhile; 

				 the_posts_navigation(); 

			 else : 

				 get_template_part( 'template-parts/content', 'none' ); 

			 endif; 
    }
?>

<?php 
// function used in "front-page.php" for Inhabitent journal
    function journal ($cat, $postPP){
        $query = "cat=$cat&posts_per_page=$postPP";

		$newsPosts = new WP_Query($query);
			 if ( $newsPosts->have_posts() ) : 

				 if ( $newsPosts->is_home() && ! $newsPosts->is_front_page() ) : 
					echo '<header>';
					echo	'<h1 class="page-title screen-reader-text"> single_post_title(); </h1>';
					echo '</header>';
				 endif; 

				 /* Start the Loop */ 
				 while ( $newsPosts->have_posts() ) : $newsPosts->the_post(); 

					echo "<li id='post-" . get_the_ID() . "'>";
					echo "<div class='li-journal-wapper'>";
					echo get_the_post_thumbnail();
					echo "<div class='warpping-text-journal'>";
					echo "<span>" . get_the_date() . "</span>";
					echo "<h2>" . "<a>". get_the_title() . "</a>" . "</h2>";
					echo "<a class='journal-button' href=" . get_permalink() . ">Read Entry</a>";
					echo "</div>";
					echo "</div>";
					echo "</li>";

				 endwhile; 

				 the_posts_navigation(); 

			 else : 

				 get_template_part( 'template-parts/content', 'none' ); 

             endif; 
    }
?>

<?php 
// function used in "front-page.php" Latest Adventures
    function latestAdv ($cat, $postPP){
        $query = "cat=$cat&posts_per_page=$postPP";

		$newsPosts = new WP_Query($query);
			 if ( $newsPosts->have_posts() ) : 

				 if ( $newsPosts->is_home() && ! $newsPosts->is_front_page() ) : 
					echo '<header>';
					echo	'<h1 class="page-title screen-reader-text"> single_post_title(); </h1>';
					echo '</header>';
				 endif; 

				 /* Start the Loop */ 
				 while ( $newsPosts->have_posts() ) : $newsPosts->the_post(); 

					echo "<li id='post-" . get_the_ID() . "'>";
					echo "<div class='li-adventures-wapper'>";
					echo get_the_post_thumbnail();
					echo "<div class='warpping-text-adventures'>";
					echo "<h2>" . "<a>". get_the_title() . "</a>" . "</h2>";
					echo "<a  class='adventures-button' href=" . get_permalink() . ">Read More</a>";
					echo "</div>";
					echo "</div>";
					echo "</li>";

				 endwhile; 

				 the_posts_navigation(); 

			 else : 

				 get_template_part( 'template-parts/content', 'none' ); 

             endif; 
    }
?>


<?php
// function for "page-shop.php" page. Importing product picture with price and name.
    function productLoop(){
	$args = array(
		'post_type' => 'product',
		'posts_per_page' => -1,
		'orderby'=> 'title',
		'order' => 'ASC',
	);
	$products = new WP_Query( $args );
?>
	<?php if ( $products->have_posts() ) : ?>
		<?php while ( $products->have_posts() ) : $products->the_post(); ?>
		<?php $image = CFS()->get('image'); ?>
		<div class = "entry-post product-post">
			<div class = "entry-thumbnail" style = "background-image: url(<?php echo CFS()->get('image'); ?>) ">
				<a href= <?php the_permalink(); ?>></a>
			</div>
			<div class="entry-info">
				<div class="journal-image-wrapper">
				<?php echo "<a href=" . get_permalink() . "><img src=$image></a>" ?>
				</div>
				<div class="journal-price-wrapper">
				<span><?php echo CFS()->get('price'); ?></span>
				<span><?php the_title(); ?></span>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php else : ?>
	<h2>Nothing found!</h2>
<?php endif; ?>
<?php } ?>


<?php 
// function used in journal page for "journal.php" display loop
    function journalPage($cat, $postPP){
        $query = "cat=$cat&posts_per_page=$postPP";

		$newsPosts = new WP_Query($query);
			 if ( $newsPosts->have_posts() ) : 

				 if ( $newsPosts->is_home() && ! $newsPosts->is_front_page() ) : 
					echo '<header>';
					echo	'<h1 class="page-title screen-reader-text"> single_post_title(); </h1>';
					echo '</header>';
				 endif; 

				 /* Start the Loop */ 
				 while ( $newsPosts->have_posts() ) : $newsPosts->the_post(); 

					get_template_part( 'template-parts/content', 'product' ); 


				 endwhile; 

				 the_posts_navigation(); 

			 else : 

				 get_template_part( 'template-parts/content', 'none' ); 

             endif; 
    }
?>

<?php
// function for "archive.php". Importing product picture with price and name separated by category.
    function productLoopCategory(){
	$args = array(
		'post_type' => 'product',
		'posts_per_page' => -1,
		'orderby'=> 'title',
		'order' => 'ASC',
	);
	$products = new WP_Query( $args );
?>
<?php if ( have_posts() ) : ?>


</header><!-- .page-header -->

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
		<?php $image = CFS()->get('image'); ?>
		<div class = "entry-post product-post">
			<div class = "entry-thumbnail" style = "background-image: url(<?php echo CFS()->get('image'); ?>) ">
			</div>
			<div class="entry-info">
				<div class="journal-image-wrapper">
				<?php echo "<a href=" . get_permalink() . "><img src=$image></a>" ?>
				</div>
				<div class="journal-price-wrapper">
				<span><?php echo CFS()->get('price'); ?></span>
				<span><?php the_title(); ?></span>
				</div>
			</div>
		</div>

<?php endwhile; ?>

<?php the_posts_navigation(); ?>

<?php else : ?>

<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>
<?php } ?>

<?php
// function to change color of logo and writtings depending on page
// function selectHeader(){
// 	$url = $_SERVER["REQUEST_URI"];
// 	if (strpos($url, "about/") === 0) {
// 		return true; 
// 	} else {
// 		return false;
// 	}
// }
// ?>