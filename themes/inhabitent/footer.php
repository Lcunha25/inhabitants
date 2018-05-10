<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
	</div><!-- #content -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-wrapper">
				<div class="contact">
					<h1><i class="fas fa-envelope"></i> CONTACT INFO</h1>
					<p>info@inhabitents.com</p>
					<p>778-456-7891</p>
					<span>
						<i class="fab fa-facebook"></i>
						<i class="fab fa-twitter-square"></i>
						<i class="fab fa-google-plus-square"></i>
					</span>
				</div>
				<div class="operations">
					<h1>BUSINESS HOURS</h1>
					<p>Monday-Friday: 9am to 5pm</p>
					<p>Saturday: 10am to 2pm</p>
					<p>Sunday: Closed</p>
				</div>
				<div class="logo-footer">
				</div>
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'COPYRIGHT © 2016 Inhabitants' ) ); ?></a>
				</div> <!--.site-info -->
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>
