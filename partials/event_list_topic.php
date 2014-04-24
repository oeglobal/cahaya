<?php
	global $ai1ec_events_helper,
		   $ai1ec_calendar_helper,
		   $filter,
		   $chair,
		   $session_time;
	
	$time = $ai1ec_events_helper->gmt_to_local( Ai1ec_Time_Utility::current_time() - (86400*360) );
	$bits = $ai1ec_events_helper->gmgetdate( $time );

	$start = gmmktime(0,0,0,$bits['mon'],$bits['mday'],$bits['year']);
	$end = gmmktime(0,0,0,$bits['mon'],$bits['mday'],$bits['year']+1);

	$get_events = $ai1ec_calendar_helper->get_events_between($start, $end, $filter, $spanning = false);
	date_default_timezone_set('Europe/Berlin');	
?>

<?php if ( $chair !== null ) : ?>
	<h3><?php echo get_term_by('term_taxonomy_id', $filter['tag_ids'][0], 'events_tags')->name; ?></h3>
<?php else : ?>
	<span class="topic-title">
		<?php echo get_term_by('term_taxonomy_id', $filter['tag_ids'][0], 'events_tags')->name; ?>
	</span>
<?php endif; ?>

<?php if ( $session_time !== null ) : ?>
	<h4><?php echo $session_time; ?></h4>
<?php endif; ?>

<?php if ( $chair !== null ) : ?>
	<h4 class="chair">Chaired by <?php echo $chair; ?></h2>
<?php endif; ?>

<ul>
<?php foreach($get_events as $event) : ?>
	<?php global $post; 
		  setup_postdata($event->post);
	?>
	<li class="event-list-item">
		<?php if ( $session_time !== null ) : ?>
			<?php echo the_field('event_speaker', $event->post->ID); ?><br />
		<?php endif; ?>
		<a href="<?php echo $event->post->guid . $event->instance_id; ?>" target="_blank"><?php echo $event->post->post_title; ?></a>
	</li>
<?php endforeach; ?>
</ul>
<?php wp_reset_postdata(); ?>
