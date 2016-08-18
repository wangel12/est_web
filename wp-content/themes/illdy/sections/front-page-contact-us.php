<?php
/**
 *	The template for displaying the contact us section in front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php


	$contact_bar_facebook_url = get_theme_mod( 'illdy_contact_bar_facebook_url', esc_url( '#' ) );
	$contact_bar_twitter_url = get_theme_mod( 'illdy_contact_bar_twitter_url', esc_url( '#' ) );
	$contact_bar_linkedin_url = get_theme_mod( 'illdy_contact_bar_linkedin_url', esc_url( '#' ) );
	$email = get_theme_mod( 'illdy_email', __( 'contact@site.com', 'illdy' ) );
	$phone = get_theme_mod( 'illdy_phone', __( '(555) 555-5555', 'illdy' ) );
	$address1 = get_theme_mod( 'illdy_address1', __( 'Street 221B Baker Street, ', 'illdy' ) );
	$address2 = get_theme_mod( 'illdy_address2', __( 'London, UK', 'illdy' ) );
	$general_title = get_theme_mod( 'illdy_contact_us_general_title', __( 'Contact us', 'illdy' ) );
	$general_entry = get_theme_mod( 'illdy_contact_us_general_entry', __( 'And we will get in touch as son as possible.', 'illdy' ) );
	$general_contact_form_7 = get_theme_mod( 'illdy_contact_us_general_contact_form_7' );
	$general_address_title = get_theme_mod( 'illdy_contact_us_general_address_title', __( 'Address', 'illdy' ) );
	$customer_support_title = get_theme_mod( 'illdy_contact_us_general_customer_support_title', __( 'Customer Support', 'illdy' ) );




?>
<section id="contact-us" class="front-page-section">
	<?php if( $general_title || $general_entry ): ?>
		<div class="section-header">
			<div class="container">
				<div class="row">
					<?php if( $general_title ): ?>
						<div class="col-sm-12">
							<h3 class="section-title"><?php echo illdy_sanitize_html( $general_title ); ?></h3>
						</div><!--/.col-sm-12-->
					<?php endif; ?>
					<?php if( $general_entry ): ?>
						<div class="col-sm-10 col-sm-offset-1">
						<p><?php echo illdy_sanitize_html( $general_entry ); ?></p>
					</div><!--/.col-sm-10.col-sm-offset-1-->
					<?php endif; ?>
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.section-header-->
	<?php endif; ?>
	<div class="section-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
				<?php if ( dynamic_sidebar('front-page-contact-sidebar') ) : else : endif; ?>
				</div>
			</div>
		</div><!--/.container-->
	</div><!--/.section-content-->
</section><!--/#contact-us.front-page-section-->

<?php ?>