<style>
.slideshow .slide img {height:auto !important;}
</style>

<!-- Start of mymeedia_widget_ocwc -->
<link rel="stylesheet" type="text/css" href="http://mymeedia.com/public/stylesheets/stream/mymeedia_ocwc.css" />
<link rel="stylesheet" type="text/css" href="http://mymeedia.com/public/stylesheets/stream/jquery.share.css" />
<div id="mymeedia_widget_ocwc">	
	<div id="mymeedia_widget_header" class="small-12 columns mymeedia_widget_header_border">
		<div class="row">
			<div id="mymeedia-stage-link" class="small-6 columns">
				<p><a href="//conference.ocwconsortium.org/2014/social/">View all conference posts</a>
				</p>
			</div>
			<div id="mymeedia-brand" class="small-6 columns"><a href="http://mymeedia.com/" target="_blank"><img src="http://mymeedia.com/public/images/icon_mymeedia_white_hor_42.png"></a></div>
		</div>
	</div>
	<div id="mainrow">
		<div id="col_main" class="mymeedia_widget_main mymeedia_widget_main_border">
			<div id="stage"> 
				<div id="content" >	
					<div class="block">
						<script type="text/javascript" src="http://mymeedia.com/public/javascripts/jsCombined_IN2_80_compiled.js"></script>
						<div class="octoNode" octorepository="onmeedia_ocwc" octoobject="item" rendermodel="widget"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="mymeedia_widget_footer" class="small-12 columns mymeedia_widget_footer_border">
		<div id="top" class="small-12 columns"></div>
	</div>
</div>
<script type="text/javascript">
	//Makes the mymeedia widget more responsive to width changes 
	//NOTE: depends on the actual page html the widget is embedded into. 
	function adjust_mymedia_widget_height() {
		$('#col_main').outerHeight($('.home-social').children(':first-child').outerHeight()-$('#mymeedia_widget_header').outerHeight()-$('#mymeedia_widget_footer').outerHeight()-20)
	}
	$(document).ready(function() { adjust_mymedia_widget_height(); });
	$(window).resize(function() { adjust_mymedia_widget_height(); });
</script>
<script type="text/javascript" src="http://mymeedia.com/dev/public/javascripts/mymeedia_embed_ocwc_widget.js"></script>
<!-- End of mymeedia_widget_ocwc -->
