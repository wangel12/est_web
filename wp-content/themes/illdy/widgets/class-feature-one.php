<?php
class abc extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        echo "Something is not wowrking";
        parent::__construct( 
            'feature_two', 
            __( 'Feature Counter Two', 'feature_two' ), 
            array( 'description' => __( 'Add this widget in "Front page - Feature Section".', 'feature_two' ), 
                ) );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {

    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {

    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
    }

}

function register_widget () {
    register_widget( 'abc' );
}
add_action( 'widgets_init', 'register_widget' );