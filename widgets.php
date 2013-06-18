<?php

class CountdownWidget extends WP_Widget {

	function CountdownWidget() {
		parent::__construct( false, 'Global Countdown Widget' );
	}

	function widget( $args, $instance ) {
			echo '<div class="countdown-inside-widget"><img src="'.get_stylesheet_directory_uri().'/images/bg-ribbon-inner.png" /></div>';
	}

	function update( $new_instance, $old_instance ) {
	    $instance = $old_instance;
	    $instance['title'] = $new_instance['title'];
	    return $instance;
	}

	function form( $instance ) {
		// Output admin widget options form
	}
}

function cahaya_register_widgets() {
	register_widget( 'CountdownWidget' );
}
add_action( 'widgets_init', 'cahaya_register_widgets' );


?>