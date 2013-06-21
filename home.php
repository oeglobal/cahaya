<?php get_header() ?>
	<div class="row collapse white">
		<div class="small-12 columns ">
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
	</div>
	<div class="row collapse white">
		<div class="small-12 small-centered columns">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bg-ribbon-home.gif" />
		</div>
	</div>
	<div class="row blue-bottom">
	<?php get_template_part('logos'); ?>
	</div>
	
<?php get_footer() ?>