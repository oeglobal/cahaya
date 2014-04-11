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

						<!-- Start of mymeedia_ocwc_embed -->
						<div id="mymeedia_ocwc_embed">
							<link rel="stylesheet" type="text/css" href="http://mymeedia.com/public/stylesheets/stream/mymeedia_ocwc.css" />
							<link rel="stylesheet" type="text/css" href="http://mymeedia.com/public/stylesheets/stream/jquery.share.css" />
							<div id="top" class="small-12 columns pull-right"></div>
							<div id="mainrow">
								<div id="focus" class="mybrand hamburger"></div>
								<div id="hamburger_hint" class="hidden">
									<small>&#8606; click to show/hide focus </small> 
									 </div>
								<div id="col_facets" class="small-3 columns" style="display:none">
									<div id="facets"></div>
								</div>
								<div id="col_main" class="small-12 columns">
									<div id="stage"> 
										<div id="content" >	
											<div class="block">
												<script type="text/javascript" src="http://mymeedia.com/public/javascripts/jsCombined_IN2_80_compiled.js"></script>
												<div class="octoNode" octorepository="onmeedia_ocwc" octoobject="item" rendermodel="stream"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="infoabout" style="clear:both; font-size:12px;">
					        	<hr style="color: #E4E4E4;" />
						        <div>
							        <p style="text-align:center">
							        	Built with <a href="http://mymeedia.com/">mymeedia</a> | <a href="https://mymeedia.com/stages/signup" target="_blank">Sign-up for a free trial</a>
							        </p>
						    	</div>
							</div>
							<script type="text/javascript" src="http://mymeedia.com/public/javascripts/mymeedia_embed_ocwc.js"></script>
						</div>
						<!-- End of mymeedia_ocwc_embed -->
					
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