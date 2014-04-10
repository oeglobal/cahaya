<?php
/*
	Template name: Research Track
*/
?>
<?php get_header() ?>
	<div class="row white blue-bottom">
		<div class="small-12 columns">
			<div class="row post">
				<div class="small-4 columns inside-left">
					<?php dynamic_sidebar('left-sidebar'); ?>
				</div>
				<div class="small-8 columns content track-listing">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<h1><?php the_title(); ?></h1>
							<div><?php the_content(); ?></div>

							<?php get_template_part('partials/track', 'research'); ?>
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