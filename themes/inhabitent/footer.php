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
					<p><i class="fa fa-envelope"></i> info@inhabitents.com</p>
					<p><i class="fas fa-phone"></i> 778-456-7891</p>
					<span>
						<i class="fab fa-facebook"></i>
						<i class="fab fa-twitter-square"></i>
						<i class="fab fa-google-plus-square"></i>
					</span>
				</div>
				<div class="operations">
					<?php get_sidebar(); ?>
				</div>
				<div class="logo-footer">
				</div>
				<!-- span used to place opyright info on middle of page -->
				<span></span>

				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'COPYRIGHT © 2016 Inhabitants' ) ); ?></a>
				</div> <!--.site-info -->
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>
