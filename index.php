<?php get_header() ?>
	<div class="row white blue-bottom">
		<div class="small-12 columns">
			<div class="row post">
				<div class="small-4 columns inside-left">
					<?php dynamic_sidebar('left-sidebar'); ?>
				</div>
				<div class="small-8 columns content">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<h1><?php the_title(); ?></h1>
							<div><?php the_content(); ?></div>

							<?php if ( have_rows('videolectures_urls') ) : ?>
								<h2>Watch Video of the Presentation on VideoLectures</h2>

								<?php while ( have_rows('videolectures_urls') ) : the_row(); ?>
									<div class="vln">
										<a href="<?php the_sub_field('url'); ?>" class="overlay">
											<img src="<?php echo get_stylesheet_directory_uri().'/images/play.png'; ?>" class="overlay" />
										</a>
										<img src="<?php the_sub_field('url'); ?>screenshot.jpg" class="screenshot" />
									</div>
									<br />
								<?php endwhile; ?>
							<?php endif; ?>

							<?php if ( get_field('slideshare_url') ) : ?>
								<div>
									<h2>Presentation</h2>
									<?php $html = wp_oembed_get(get_field('slideshare_url')); ?>
									<?php echo $html; ?>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php else : ?>
						<h1>404 Not found</h1>
					<?php endif; ?>
				</div>
				
			</div>
			<?php get_template_part('logos'); ?>
		</div>
	</div>
<?php get_footer() ?> 