<?php
/**
 *	The template for dispalying the footer.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php


	$display_copyright = get_theme_mod( 'illdy_general_footer_display_copyright', 1 );
	$footer_copyright = get_theme_mod( 'illdy_footer_copyright', __( '&copy; Copyright 2016. All Rights Reserved.', 'illdy' ) );
	$img_footer_logo = get_theme_mod( 'illdy_img_footer_logo', esc_url( get_template_directory_uri() . '/layout/images/footer-logo.png' ) );

?>
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
					<ul class="clearfix">

					</ul>
					</div>
					<div class="col-sm-12">
						<p class="text-center">© 2016 eservicetracker</p>
					</div><!--/.col-sm-3-->
				</div><!--/.row-->
			</div><!--/.container-->
		</footer><!--/#footer-->
		<?php wp_footer(); ?>
	</body>
</html>