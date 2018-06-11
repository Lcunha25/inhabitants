<?php
/**
* Template Name: journal
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
    <section class="page-site-content">
        <div class="page-find-us-left-wrapper">
            <ul class="page-blog-post">
            <?php include 'inc/loop-journal.php'; 
            journalPage('4', '5');?>
            </ul>
        </div>
    <div class="page-find-us-right-wrapper">
				<div class="">
                    <h1>CONTACT INFO</h1>
                    <p><i class="fas fa-phone"></i> 778-456-7891</p>
					<p><i class="fa fa-envelope"></i> info@inhabitents.com</p>
                    <p><i class="fa fa-map-marker"></i> 1490 W Broadway, Vancouver, BC V6H 1H5<p>
				</div>
				<div class="operations">
                <?php include('sidebar.php'); ?>
				</div>
			</div>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>