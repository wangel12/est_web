<?php
/*
Plugin Name: Features List Widget
Plugin URI: http://mydomain.com
Description: This plugin lets the user to add features dynamically via widget section and change the content of the features list
Author: Wangel Tamang
Version: 1.0
Author URI: http://wangeltmg.com
*/

add_action('widgets_init',function(){
	register_widget('Feature_Widget');//class name of the widget
});


class Feature_Widget extends WP_Widget{
	
		public function __construct(){
			$widget_id = "est_feature_widget";
			$widget_name = '[est] - feature widget';
			$widget_desc = array("description" => "My first widget");

			parent::__construct($widget_id,$widget_name,$widget_desc);
		}

		public function widget($args,$instance){
			echo $args['before_widget'];
			if ( ! empty( $instance['title'] ) ) {
				echo $args['before_title'] ."<h5>". apply_filters( 'widget_title', $instance['title'] )."</h5>". $args['after_title'];
				echo "<div class='title-divider'></div>";
				echo $args['before_title']."<p>". apply_filters( 'widget_title', $instance['feature'] )."</p>". $args['after_title'];
			}
			//echo __( 'Hello, World!', 'text_domain' );
			echo $args['after_widget'];
		}

		public function form($instance){
			$title = ! empty( $instance['title'] ) ? sanitize_text_field( $instance['title'] ) : __( '', 'est' );
			$feature = ! empty( $instance['feature'] ) ? sanitize_text_field( $instance['feature'] ) : __( '', 'est' );
			 ?>
			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'est' ); ?></label>
            	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
            </p>
            <p>
				 <label for="<?php echo $this->get_field_id( 'feature' ); ?>"><?php _e('Feature:', 'est') ?></label>
	             <input class="widefat" id="<?php echo $this->get_field_id( 'feature' ); ?>" name="<?php echo $this->get_field_name( 'feature' ); ?>" type="text" value="<?php echo esc_attr( $feature ); ?>">
            </p>

		<?php }

		public function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
			$instance['feature'] = ( ! empty( $new_instance['feature'] ) ) ? strip_tags( $new_instance['feature'] ) : '';
			return $instance;
		}


}

?>