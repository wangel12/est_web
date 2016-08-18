<?php
/**
 *	The template for displaying services section in front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php
if ( current_user_can( 'edit_theme_options' ) ) {
	$services_general_title = get_theme_mod( 'illdy_services_general_title', __( 'Services', 'illdy' ) );
	$services_general_entry = get_theme_mod( 'illdy_services_general_entry', __( 'In order to help you grow your business, our carefully selected experts can advise you in in the following areas:', 'illdy' ) );
}else{
	$services_general_title = get_theme_mod( 'illdy_services_general_title' );
	$services_general_entry = get_theme_mod( 'illdy_services_general_entry' );
}

?>
<?php if ( $services_general_title != '' || $services_general_entry != '' || is_active_sidebar( 'front-page-services-sidebar' ) ) { ?>

<section id="services" class="front-page-section">
	<?php if( $services_general_title || $services_general_entry ): ?>
		<div class="section-header">
			<div class="container">
				<div class="row">
					<?php if( $services_general_title ): ?>
						<div class="col-sm-12">
							<h3><?php echo illdy_sanitize_html( $services_general_title ); ?></h3>
						</div><!--/.col-sm-12-->
					<?php endif; ?>
					<?php if( $services_general_entry ): ?>
						<div class="col-sm-10 col-sm-offset-1">
							<p class="title-paragraph"><?php echo illdy_sanitize_html( $services_general_entry ); ?></p>
						</div><!--/.col-sm-10.col-sm-offset-1-->
					<?php endif; ?>
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.section-header-->
	<?php endif; ?>
	<div class="section-content">
		<div class="container">
			<div class="row">
				<?php if ( dynamic_sidebar('front-page-services-sidebar') ) : else : endif; ?>
				<?php //the_widget( 'widget_feature_one' ); 
				?> 
				<?php
				
					// $the_widget_args = array(
					// 	'before_widget'	=> '<div class="col-sm-4 widget_illdy_service">',
					// 	'after_widget'	=> '</div>',
					// 	'before_title'	=> '<h1>hehe</h1>',
					// 	'after_title'	=> '<div>a</div>'
					// );
					//the_widget( 'Illdy_Widget_Service', 'title='. __( 'Service Records', 'illdy' ) .'&entry='. __( 'Organizations and participants can access service records', 'illdy' ) .'&color=#6a4d8a', $the_widget_args );
					//the_widget( 'Illdy_Widget_Service', 'title='. __( 'Tailored for you', 'illdy' ) .'&entry='. __( 'Each organization has a unique URL and web database', 'illdy' ) .'&color=#6a4d8a', $the_widget_args );
					//the_widget( 'Illdy_Widget_Service', 'title='. __( 'Platform Independent', 'illdy' ) .'&entry='. __( 'Participants can record their community service hours via this app on iPhone or iPad; they can also record them via the web on any web device', 'illdy' ) .'&color=#6a4d8a', $the_widget_args );
					//the_widget( 'Illdy_Widget_Service', 'title='. __( 'Customizable Verification', 'illdy' ) .'&entry='. __( 'Organizations can customize how the community hours are verified (ex: email, phone number)', 'illdy' ) .'&color=#6a4d8a', $the_widget_args );
					//the_widget( 'Illdy_Widget_Service', 'title='. __( 'Push Notifications', 'illdy' ) .'&entry='. __( 'Notifications can be used to inform participants of service opportunities and/or reminders about service deadlines', 'illdy' ) .'&color=#6a4d8a', $the_widget_args );
					//the_widget( 'Illdy_Widget_Service', 'title='. __( 'Customizable Service Types', 'illdy' ) .'&entry='. __( 'Service can be distinguished by category, customized by the organization, for organizations that require specific types of service (ex: direct service, service to youth, service to the poor, service to the sick)', 'illdy' ) .'&color=#6a4d8a', $the_widget_args );
			
				?>
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.section-content-->
</section><!--/#services.front-page-section-->

<?php } ?>