<?php
/**
* Template Name: find-us
*/
?>
<?php get_header(); ?>
<body>
    <div id="content" class="site-content">
    <div id="primary" class="content-area">
    <section class="main-find-us-page">
        <div class="find-us-left-wrapper">
            <div class="google-maps">
                <h1>FIND US</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10414.754406019307!2d-123.1381278!3d49.2633479!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7edde857c28340ba!2sRED+Academy!5e0!3m2!1sen!2sca!4v1526935351821" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div>
                <h1>WE TAKE CAMPING VERY SERIOUSLY.</h1>
                <p>Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal axes, we’ve got your covered. Please contact us below with any questions comments or suggestions.</p>
                <h1>SEND US YOUR EMAIL!</h1>
                <p>We will make sure to be in touch when we have any news</p>
            <div class="input-line">
                <div class="login-line">
                <input type="text" name="email-input" class="email-input" placeholder="Email Address" />
                    <div class="section-button">
                        <select value="sections" class="section">
                            <option class="one">Shop</option>
                            <option value="option">Do Stuff</option>
                            <option value="option">Eat Stuff</option>
                            <option value="option">Sleep Stuff</option>
                            <option value="option">Wear Stuff</option>
                        </select>
                    </div>
                </div>
                <p class="return-msg-wrong"></p>
        <!-- Sign-up button -->
                <input type="submit" value="Sign-up" class="submit"/>
            </div>
                <span class="return-msg-ok"></span>
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
                <?php include('sidebar.php'); ?>
            </div>
            <div class="archives">
                <h1>archives</h1>
                <ul><?php wp_get_archives(); ?></ul>
            </div>
        </div>
        </div>
    </div>
    </section>
    <?php get_footer(); ?>
</body>