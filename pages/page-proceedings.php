<?php
/*
	Template name: Proceedings
*/
?>
<?php global $paper_category; ?>
<?php get_header() ?>
	<div class="row white blue-bottom">
		<div class="small-12 columns">
			<div class="row post">
				<div class="small-12 columns content">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<h1><?php the_title(); ?></h1>
							<div><?php the_content(); ?></div>

							<h2>Open Educational Policy</h2>
							<?php $paper_category = 'open-policy'; ?>
							<?php get_template_part('partials/proceedings', 'papers_list'); ?>
							
							<h2>Pedagogical Impact</h2>
							<?php $paper_category = 'pedagogical-track'; ?>
							<?php get_template_part('partials/proceedings', 'papers_list'); ?>

							<h2>Research and Technology</h2>
							<?php $paper_category = 'research-and-technology'; ?>
							<?php get_template_part('partials/proceedings', 'papers_list'); ?>
							
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