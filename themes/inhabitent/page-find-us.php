<?php
/**
* Template Name: find-us
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
<body class="site-content">
    <div id="content" class="find-us-content">
    <section class="main-find-us-page">
        <div class="find-us-left-wrapper">
        <div class="google-maps">
            <h1>FIND US</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10414.754406019307!2d-123.1381278!3d49.2633479!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7edde857c28340ba!2sRED+Academy!5e0!3m2!1sen!2sca!4v1526935351821" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div>
            <h1>WE TAKE CAMPING VERY SERIOUSLY.</h1>
            <p>Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal axes, we’ve got your covered. Please contact us below with any questions comments or suggestions.</p>
            <h1>SEND US EMAIL!</h1>
            <div role="form" class="wpcf7" id="wpcf7-f61-p9-o1" lang="en-US" dir="ltr">
            <div class="screen-reader-response"></div>
            <form action="/find-us/#wpcf7-f61-p9-o1" method="post" class="wpcf7-form" novalidate="novalidate">
            <div style="display: none;">
            <input type="hidden" name="_wpcf7" value="61" />
            <input type="hidden" name="_wpcf7_version" value="4.7" />
            <input type="hidden" name="_wpcf7_locale" value="en_US" />
            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f61-p9-o1" />
            <input type="hidden" name="_wpnonce" value="a66b2b52a8" />
            </div>
            <p class="name"><label>Name <span class="required">*</span></label><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </p>
            <p class="email"><label>Email <span class="required">*</span></label><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </p>
            <p class="subject"><label>Subject <span class="required">*</span></label><span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </p>
            <p class="message"><label>Message <span class="required">*</span></label><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea></span> </p>
            <p><input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit" /></p>
            <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
        </div>
        </div>
        <div class="find-us-right-wrapper">
				<div class="">
                    <h1>CONTACT INFO</h1>
                    <p><i class="fas fa-phone"></i> 778-456-7891</p>
					<p><i class="fa fa-envelope"></i> info@inhabitents.com</p>
                    <p><i class="fa fa-map-marker"></i> 1490 W Broadway, Vancouver, BC V6H 1H5<p>
				</div>
				<div class="operations">
					<?php get_sidebar(); ?>
				</div>
			</div>
        </div>
    </section>
            </div>
    <?php get_footer(); ?>
</body>
</html>