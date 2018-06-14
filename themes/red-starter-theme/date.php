<?php
/**
* Template Name: journal
*/
?>
<body>
<?php get_header(); ?>
    <div id="content" class="site-content">
    <div id="primary" class="content-area">
    <section class="page-site-content">
        <div class="page-find-us-left-wrapper">
            <header class="month">
                <p>month: <?php single_month_title(' '); ?> </p>
            </header>
            <ul class="page-blog-post-date">
                <?php include 'inc/loop-journal.php'; 
                journalPage('4', '5');?>
            </ul>
        </div>
        <div class="page-find-us-right-wrapper">
            <div class="">
                <h1>contact info</h1>
                <p><i class="fas fa-phone"></i> 778-456-7891</p>
                <p><i class="fa fa-envelope"></i> info@inhabitents.com</p>
                <p><i class="fa fa-map-marker"></i> 1490 W Broadway, Vancouver, BC V6H 1H5<p>
            </div>
            <div class="operations">
                <?php include('sidebar.php'); ?>
            </div>
            <div class="archives">
                <h1>archives</h1>
                <ul><?php wp_get_archives(); ?></ul>
            </div>
        </div>
    </section>
    </div>
    </div>
    <?php get_footer(); ?>
</body>
</html>