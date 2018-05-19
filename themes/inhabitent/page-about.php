<?php
/**
* Template Name: About
*/
?>
<!DOCTYPE html>
<html>
    <?php get_header(); ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>

<?php
   $args = array( 'post_type' => 'product');
?>

    <?php get_posts($args)?>
    <?php get_footer(); ?>
</body>
</html>