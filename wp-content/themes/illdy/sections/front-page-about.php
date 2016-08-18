<?php
/**
 *	The template for displaying about section in front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php
if ( current_user_can( 'edit_theme_options' ) ) {
	$general_title = get_theme_mod( 'illdy_about_general_title', __( 'About', 'illdy' ) );
	$general_entry = get_theme_mod( 'illdy_about_general_entry', __( 'It is an amazng one-page theme with great features that offers an incredible experience. It is easy to install, make changes, adapt for your business. A modern design with clean lines and styling for a wide variety of content, exactly how a business design should be. You can add as many images as you want to the main header area and turn them into slider.', 'illdy' ) );
}else{
	$general_title = get_theme_mod( 'illdy_about_general_title' );
	$general_entry = get_theme_mod( 'illdy_about_general_entry' );
}
?>

<?php if ( $general_title != '' || $general_entry != '' || is_active_sidebar( 'front-page-about-sidebar' ) ) { ?>

<section id="about" class="front-page-section" style="<?php if( !$general_title && !$general_entry ): echo 'padding-top: 130px;'; endif; ?>">
	<?php if( $general_title || $general_entry ): ?>
		<div class="section-header">
			<div class="container">
				<br><br>
				<div class="row">
					<div class="col-lg-6">
							<?php if( $general_title ): ?>
					
							<h3><?php echo illdy_sanitize_html( $general_title ); ?></h3>
					
							<?php endif; ?>
							<?php if( $general_entry ): ?>
						
									<p class="about-desc"><?php echo illdy_sanitize_html( $general_entry ); ?></p>
								
							<?php endif; ?>	
					</div>
					<div class="col-lg-5 col-lg-offset-1">
					<?php dynamic_sidebar('front-page-about-sidebar');  ?>
					<!-- <img src="http://127.0.0.1/wordpress/wp-content/uploads/2016/08/front-page-testimonial-3.jpg" class="about-person-image" id="">
					<h5>Joe Bell - co founder</h5>
					<p class="about-person">is simply dummy text of the printing and typesetting industry.</p> -->
				</div><!--/.row-->
				
			</div><!--/.container-->
		</div><!--/.section-header-->
	<?php endif; ?>
</section><!--/#about.front-page-section-->

<?php } ?>