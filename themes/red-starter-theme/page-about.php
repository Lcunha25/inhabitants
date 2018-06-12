<?php
/**
* Template Name: About
*/
?>
    <?php get_header(); ?>
<body>
    <section class="background-image-main"> 
        <div class="background-image-main-wrapper">
            <?php 
            $featured_img_url_2 = CFS()->get('banner'); 
            echo '<img src="'.esc_url($featured_img_url_2).'" rel="lightbox">'; 
            ?>
        </div>
        <div class="title">
            <h1 class="entry-title">About</h1>
        </div>
    </section>
    <div class="entry-content">
        <?php include 'inc/loop-journal.php'; 
        displayPost('11', '2'); ?>
    </div>
    <?php get_footer(); ?>
</body>
</html>