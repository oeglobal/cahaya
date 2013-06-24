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
	    return $instance;
	}

	function form( $instance ) {
		//
	}
}



class FeaturedPageWidget extends WP_Widget {

	function FeaturedPageWidget() {
		parent::__construct( false, 'Featured Page Widget' );
	}

	function widget( $args, $instance ) {
		$query = new WP_Query( array(
			'page_id' => $instance['page']
		));

		while ( $query->have_posts() ) {
			$query->the_post();
			echo '<div class="small-3 columns">';

			if ($instance['thumbnail'] === 'on') {
				?>
				<div class="ico-thumbnail">
					<a href="<? the_permalink(); ?>"><?php the_post_thumbnail('home-small') ?></a>
				</div>
				<?php
				echo '<h4><a href="'.get_permalink().'">'.get_the_title().'</a></h4>';
				the_excerpt();
			} else {
				?>
				<div class="ico-blue-ribbon small-12 columns">
					<i class="<?php echo $instance['icon']; ?>"></i>
				</div>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<?php the_excerpt(); ?>
				<?php
			}
			echo '</div>';
		}
	}

	function update( $new_instance, $old_instance) {
		$instance = $old_instance;
	    $instance['page'] = $new_instance['page'];
	    $instance['icon'] = $new_instance['icon'];
	    $instance['thumbnail'] = $new_instance['thumbnail'];

	    return $instance;
	}

	function form( $instance ) {
		if ( isset( $instance[ 'page' ] ) ) { $page = $instance[ 'page' ]; } else { $page = '2'; }
		if ( isset( $instance[ 'icon' ] ) ) { $icon = $instance[ 'icon' ]; } else { $icon = 'icon-file'; }
		// if ( !isset( $instance[ 'thumbnail' ] ) ) { $instance[ 'thumbnail' ] = 0; } 

		?>
		<p>
			<label for="<?php echo $this->get_field_name( 'page' ); ?>"><?php _e( 'Page ID:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'page' ); ?>" name="<?php echo $this->get_field_name( 'page' ); ?>" type="text" value="<?php echo esc_attr( $page ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_name( 'icon' ); ?>"><?php _e( 'Fontawsome Icon:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'icon' ); ?>" name="<?php echo $this->get_field_name( 'icon' ); ?>" type="text" value="<?php echo esc_attr( $icon ); ?>" />
		</p>
		<p>
			<input class="checkbox" type="checkbox" id="<?php echo $this->get_field_id( 'thumbnail' ); ?>" name="<?php echo $this->get_field_name( 'thumbnail' ); ?>" <?php checked(isset($instance['thumbnail']) ? 1 : 0); ?> /> 
			<label for="<?php echo $this->get_field_id( 'thumbnail' ); ?>"> <?php _e( 'Show Thumbnail' ); ?></label>
		</p>

		<?php
	}
}


function cahaya_register_widgets() {
	register_widget( 'CountdownWidget' );
	register_widget( 'FeaturedPageWidget' );
}
add_action( 'widgets_init', 'cahaya_register_widgets' );


?>