<?php
/**
* Template Name: shop
*/
?>
<?php get_header(); ?>
<body>
    <div id="content" class="site-content">
    <div id="primary" class="content-area">
    <section class="product-pictures-price">
        <div class="page-shop-shop-stuff">
            <h1>SHOP STUFF</h1>
                <div>
                <?php
                    echo "<ul class='product-type-ul'>";
                    $term = 'product_type';
                    $product_types = get_terms($term); 
                    foreach ($product_types as $product) {
                        $url = get_site_url() . '/' . $term.'/'.$product->slug;
                        echo '<li>' . "<a href=$url>" . explode(" ", $product->name)[0] . "</a>" . '<li>';
                    }
                    echo "<ul>";
                ?>
                </div>
        </div>
            <div class="product-type-post">
            <?php include 'inc/loop-journal.php'; 
                productLoop();?>
            </div>
    </div>
    </div>
    </section>
    <?php get_footer(); ?>
</body>