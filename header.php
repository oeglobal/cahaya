<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
	<meta charset="utf-8" />

  	<link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/stylesheets/app.css" media="screen, projector, print" rel="stylesheet" type="text/css" />
  	<link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/stylesheets/style.css" media="screen, projector, print" rel="stylesheet" type="text/css" />
 	<link href='http://fonts.googleapis.com/css?family=Metrophobic|Pathway+Gothic+One' rel='stylesheet' type='text/css'>
  	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="top_login">

	</div>

	<div class="row header">
		<div class="small-6 columns">
			<div class="logo">OCWC Global <span class="logoyear">2013</span></div>
			<div class="sublogo1">Ljubljana, Slovenia</div>
			<div class="sublogo2">23 - 25 April 2014</div>
		</div>
		<div class="small-6 columns">
			<div class="tagline">Exploring the <br />way information is</br>shared</div>
		</div>
	</div>

	<div class="row">
		<div class="small-12 columns topnav">
			<ul>
				<?php wp_nav_menu(array(
					'theme_location' => 'navigation-menu'
				)); ?>
			</ul>
		</div>
	</div>