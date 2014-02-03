<?php
/*
	Template name: Full width page
*/
?>
<?php get_header() ?>
	<div class="row white blue-bottom">
		<div class="small-12 columns">
			<div class="row post">
				<div class="small-12 columns content">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<h1><?php the_title(); ?></h1>
							<div><?php the_content(); ?></div>
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