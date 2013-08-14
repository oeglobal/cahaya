<?php get_header() ?>
<?php $sticky = get_option( 'sticky_posts' ); ?>
	<div class="row collapse white">
		<div class="small-12 columns">
			<div class="row collapse slideshow">
				<div class="small-12 columns">
				<?php
				$query = new WP_Query( array( 'post_type' => 'cahaya_slideshow', 'ignore_sticky_posts' => 1 )); 

				if ( $query->have_posts() ) {
					echo '<ul class="rslides">';
					while ( $query->have_posts() ) {
						$query->the_post();
						$image_list = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slideshow-image-large' );

						if (count($image_list) > 0) {
							$image_src = $image_list[0];
						}
						echo '<li class="slide"><img src="'.$image_src.'" /></li>';
					}
					echo '</ul>';
				}
				?>
				</div>
				<?php /*
				<div class="small-8 columns">
				<?php
				$query = new WP_Query( array( 'post_type' => 'cahaya_slideshow', 'ignore_sticky_posts' => 1 )); 

				if ( $query->have_posts() ) {
					echo '<ul class="rslides">';
					while ( $query->have_posts() ) {
						$query->the_post();
						$image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slideshow-image' )[0];

						echo '<li class="slide"><img src="'.$image_src.'" /><div class="overlay"></div></li>';
					}
					echo '</ul>';
				}
				?>
				</div>
				<div class="small-4 columns news">
				<?php
					$query = new WP_Query( array(
						'post__not_in' => $sticky,
						'ignore_sticky_posts' => 1,
						'cat' => '1' 
					));
					while ( $query->have_posts() ) {
						$query->the_post();
						echo '<h4>'.get_the_title().'</h4>';
						the_excerpt();
					}
				?>
				</div>
				*/ ?>
			</div>
		</div>
	</div>
	<div class="row home-social white">		
		<div class="row links">
			<div class="small-5 columns signup">
				<div class="row">
					<div class="small-5 columns heads">
						<h4>SIGN-UP TO OUR</h4>
						<h3>NEWSLETTER</h3>
					</div>
					<div class="small-2 columns env">
						<a href=""><i class="icon-envelope icon-2x"></i></a>
					</div>
					<div class="small-5 columns child-links">
						<a href="http://eepurl.com/FFXL"><i class="icon-chevron-right"></i> <span>SIGN-UP</span></a>
						<a href="http://www.ocwconsortium.org/en/aboutus/pressroom/newsletterarchive"><i class="icon-chevron-right"></i> <span>ARCHIVES</span></a>
					</div>
				</div>
			</div>
			<div class="small-7 columns socials">
				<div class="row">
					<div class="small-4 columns heads">
						<h4>STAY UPDATED</h4>
						<h3>FOLLOW US</h3>
					</div>
					<div class="child-socials">
					<div class="small-3 columns">
						<a href="https://www.facebook.com/OCWConsortium"><i class="icon-facebook-sign icon-2x"></i> <h4>FACEBOOK</h4></a>
					</div>
					<div class="small-3 columns">
						<a href="https://twitter.com/ocwnews"><i class="icon-twitter-sign icon-2x"></i> <h4>TWITTER</h4></a>
					</div>
					<div class="small-3 columns">
						<a href="http://www.youtube.com/user/OCWConsortium"><i class="icon-youtube-sign icon-2x"></i> <h4>YOUTUBE</h4></a>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="small-6 columns">
			<?php
				$args = array(
					'posts_per_page' => 2,
					// 'post__in'  => $sticky,
					'ignore_sticky_posts' => 1
				);
				$query = new WP_Query( $args );
				if ( count($sticky) > 0 ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						?>
						<div class="row">
							<div class="small-12 columns"><h4><?php the_title(); ?></h4></div>
							<div class="small-5 columns image-border">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-featured'); ?></a>
							</div>
							<div class="small-7 columns"><?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="small button">Read more</a>
							</div>
						</div>
						<?php
					}
				}
			?>
		</div>
		<div class="small-6 columns">
				<a class="twitter-timeline"  href="https://twitter.com/search?q=%23ocwcglobal" data-widget-id="251736808315043840">Tweets about "#ocwcglobal"</a>	
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
	</div>
	<div class="row white">
		<?php get_template_part('logos'); ?>
	</div>	
	<div class="row white insights">
		<div class="small-5 columns"><hr /></div>
		<div class="small-2 columns">
			<i class="icon-search"></i> insights
		</div>
		<div class="small-5 columns"><hr /></div>
	</div>

	<div class="row white home-pages-featured">
		<?php dynamic_sidebar('home-pages-thumbnails'); ?>
	</div>
	<div class="row white home-pages-featured thumbnails blue-bottom"></div>
		<?php dynamic_sidebar('home-pages'); ?>
	</div>
	
<?php get_footer() ?>