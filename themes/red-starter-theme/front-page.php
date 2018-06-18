<?php
/**
 * The main template file.
 *
 * Template Name: Home Page
 *
 * @package RED_Starter_Theme
 */
?>
	<body id="primary" class="fp-content-area">
        <?php get_header(); ?>
        <section class="background-image-main"> 
            <div class="background-image-main-wrapper">
                <?php 
                $featured_img_url = get_the_post_thumbnail_url(); 
                echo '<img src="'.esc_url($featured_img_url).'" rel="lightbox">'; 
                ?>
            </div>
            <div class="logo-full">
                <?php 
                $image = CFS()->get('logo'); 
                echo "<img src=" . esc_url($image) . ">";
                ?>
            </div>
        </section>
        <span class='anchor-point'></span>
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
                        echo "<p class='product-type-button'><a href=$url>$product->name</a></p>";
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
                <ul class="adventures-post">
                <?php latestAdv('adventures', '4'); ?>
                </ul>
                <a href="<?php echo esc_url_raw( get_site_url()) . "/adventures"; ?>"><button class='adventures-journal'>MORE ADVENTURES</button></a>
            </setion>
		</main><!-- #main -->
	</body><!-- #primary -->
<?php get_footer(); ?>