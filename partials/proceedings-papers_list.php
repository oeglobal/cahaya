<?php global $paper_category; ?>

<?php $custom_query = new WP_Query(array(
							'post_type' => AI1EC_POST_TYPE,
							'tax_query' => array(
										array(
											'taxonomy' => 'events_categories', 
											'field' => 'slug',
											'terms' => $paper_category
										)
							),

							'meta_key' =>  'paper_pdf',
							'meta_value' => false,
							'meta_compare' => '!=',
							'orderby' => 'paper_pdf+0, paper_pdf', // http://matthewturland.com/2008/11/05/natural-ordering-in-mysql/
						));
?>

<table>
<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
	<tr>
		<?php $paper_pdf = get_field('paper_pdf'); ?>
		<td><?php the_field('paper_number'); ?></td>
		<td><a href="<?php echo $paper_pdf['url']; ?>">PDF</a></td>
		<td><?php the_field('event_speaker'); ?></td>
		<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
		
	</tr>
<?php endwhile; ?>
</table>
<?php wp_reset_query(); ?>