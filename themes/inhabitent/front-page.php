<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */
?>
	<body id="primary" class="content-area">
        <section class="background-image-main"> 
        <?php get_header(); ?>
            <div>
            <?php 
            $featured_img_url = get_the_post_thumbnail_url(); 
            echo '<img src="'.esc_url($featured_img_url).'" rel="lightbox">'; 
            ?>
            <img class="logo-full" src='/images/logos/inhabitent-logo-full.svg'>
            </div>
        </section>
		<main id="main" class="site-main" role="main">
            <section>
                <h1>SHOP STUFF</h1>
                <div class="shop-types">
                <?php
                    $term = 'product_type';
                    $product_types = get_terms($term); 
                    foreach ($product_types as $product) {
                        echo "<div class='product_type_wrapper'>";
                        echo "<div class=$product->slug></div>";
                        echo '<p>' . $product->description . '</p>';
                        $url = $term.'/'.$product->slug;
                        echo "<p><a href=$url>$product->name</a></p>";
                        echo "</div>";
                    } 
                ?>
                </div>
            </section>
            <section>
                <h1> INHABITENT JOURNAL </h1>
                <div class="blog-post">
                <?php include 'inc/loop-journal.php'; 
                displayPost('4', '3');?>
                </div>
            </setion>
            <section>
                <h1> LATEST ADVENTURES </h1>
                <div class="adventures-post">
                <?php displayPost('5', '4'); ?>
                </div>
            </setion>
		</main><!-- #main -->
	</body><!-- #primary -->
<?php get_footer(); ?>