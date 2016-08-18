<?php
class Illdy_Widget_Counter extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct( 
            'feature_one', 
            __( '[Illdy] Counter', 'feature_one' ), 
            array( 'description' => __( 'Add this widget in "Front page - Feature Section".', 'feature_one' ), 
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

function illdy_register_widget_counter () {
    register_widget( 'Illdy_Widget_Counter' );
}
add_action( 'widgets_init', 'illdy_register_widget_counter' );