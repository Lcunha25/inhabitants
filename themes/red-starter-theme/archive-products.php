<?php
/**
* Template Name: shop
*/
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php get_header(); ?>
    <div id="content" class="site-content">
    <div id="primary" class="content-area">
    <section class="product-pictures-price">
        <div class="page-shop-shop-stuff">
            <h1>SHOP STUFF</h1>
                <div>
                <?php
                    $term = 'product_type';
                    $product_types = get_terms($term); 
                    foreach ($product_types as $product) {
                        echo "<ul class='product-type-ul'>";
                        $url = get_site_url() . '/' . $term.'/'.$product->slug;
                        echo '<li>' . "<a href=$url>" . explode(" ", $product->name)[0] . "</a>" . '<li>';
                        echo "<ul>";
                    } 
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
</html>