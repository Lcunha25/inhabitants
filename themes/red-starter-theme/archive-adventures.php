<?php
/**
*/
?>
<?php get_header(); ?>
<body>
    <div id="content" class="site-content">
    <div id="primary" class="content-area">
    <section class="product-pictures-price">
        <div class="page-shop-shop-stuff">
            <h1>LATEST ADVENTURES</h1>
        </div>
            <ul class="adventures-type-post">
            <?php include 'inc/loop-journal.php'; 
                latestAdv('adventures', '4');?>
            </ul>
    </div>
    </div>
    </section>
    <?php get_footer(); ?>
</body>