<?php
/*
	Template name: Proceedings
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
			<div class="row post">
				<div class="small-12 columns content">
					<h2>Open Educational Policies papers</h2>

					<?php $custom_query = new WP_Query(array(
												'post_type' => AI1EC_POST_TYPE,
												'tax_query' => array(
															array(
																'taxonomy' => 'events_categories', 
																'field' => 'slug',
																'terms' => 'open-policy'
															)
												),

												'meta_key' =>  'paper_pdf',
												'meta_value' => true,
												'meta_compare' => '=',
											));
						
						print_r($custom_query);
					?>
					<table>

					</table>
					
				</div>
			</div>
			<?php get_template_part('logos'); ?>
		</div>
	</div>
<?php get_footer() ?> 