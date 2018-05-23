<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */
?>
        <?php get_header(); ?>
	<body id="primary" class="content-area">
        <div class="background-image-main"> 
            <div class="background-image-main-wrapper">
                <?php 
                $featured_img_url = get_the_post_thumbnail_url(); 
                echo '<img src="'.esc_url($featured_img_url).'" rel="lightbox">'; 
                ?>
            </div>
            <div class="logo-full">
                <img src="/inhabitent/wp-content/themes/inhabitent/images/logos/inhabitent-logo-full.svg">
            </div>
        </div>
		<main id="main" class="site-main" role="main">
            <section class="sections">
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
            <section class="sections">
                <h1> INHABITENT JOURNAL </h1>
                <ul class="blog-post">
                <?php include 'inc/loop-journal.php'; 
                journal('4', '3');?>
                </ul>
            </section>
            <section class="sections">
                <h1> LATEST ADVENTURES </h1>
                <div class="front-page-adventure-wrapper">
                <ul class="adventures-post">
                <?php latestAdv('5', '4'); ?>
                </ul>
                </div>
            </setion>
		</main><!-- #main -->
	</body><!-- #primary -->
<?php get_footer(); ?>