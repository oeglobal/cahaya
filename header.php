<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  	<link href='http://fonts.googleapis.com/css?family=Metrophobic|Pathway+Gothic+One' rel='stylesheet' type='text/css'>
  	<link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/javascripts/plugins/qtip/jquery.qtip.css" media="screen, projector, print" rel="stylesheet" type="text/css" />
  	<link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/stylesheets/app.css" media="screen, projector, print" rel="stylesheet" type="text/css" />
  	<link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/stylesheets/style.css" media="screen, projector, print" rel="stylesheet" type="text/css" />
  	<script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/javascripts/plugins/respond.min.js"></script>

  	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="top_login">

	</div>

	<div class="row header">
		<div class="small-6 columns">
			<a href="<?php echo get_site_url(); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" alt="OCWC 2014"/></a>
			<div class="sublogo">
				<span class="sublogo1">Ljubljana, Slovenia</span>
				<span class="sublogo2">23 - 25 April 2014</span>
			</div>
		</div>
		<div class="small-6 columns">
			<div class="tagline">Open Education for a Multicultural World</div>
		</div>
	</div>
	<div class="bshadow">
	<div class="row">
		<div class="small-12 columns topnav">
			<ul>
				<?php wp_nav_menu(array(
					'theme_location' => 'navigation-menu'
				)); ?>
			</ul>
		</div>
	</div>