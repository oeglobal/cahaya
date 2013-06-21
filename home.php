<?php get_header() ?>
	<div class="row collapse">
		<div class="small-12 columns content_wrapper_slideshow">
			<div class="row collapse post">
				<div class="small-8 columns">
				<?php
				$query = new WP_Query( array( 'post_type' => 'cahaya_slideshow' )); 

				if ( $query->have_posts() ) {
					echo '<ul data-orbit>';
					while ( $query->have_posts() ) {
						$query->the_post();
						$image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slideshow-image' )[0];

						echo '<li><img src="'.$image_src.'" /></li>';
					}
					echo '</ul>';
				}
				?>
				</div>
				<div class="small-4 columns">
				<?php
					$query = new WP_Query( array('cat' => '1' ));
					while ( $query->have_posts() ) {
						$query->the_post();
						echo '<h3>'.get_the_title().'</h3>';
						the_excerpt();
					}
				?>
				</div>
			</div>
		</div>
		<div class="small-12 columns content_wrapper">
				<?php get_template_part('logos'); ?>
			
		</div>
	</div>
<?php get_footer() ?>