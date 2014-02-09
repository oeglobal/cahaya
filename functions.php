<?php

require_once(dirname(__FILE__). '/widgets.php');

add_theme_support( 'post-thumbnails' ); 

function cahaya_init() {
	register_cahaya_top_menu();
	register_cahaya_sidebars();
	register_cahaya_slideshow();

	add_image_size( 'slideshow-image', 770, 412, true);
	add_image_size( 'slideshow-image-large', 1100, 412, true);
	add_image_size( 'home-small', 245, 154, true);
	add_image_size( 'home-featured', 179, 103, true);

}
add_action( 'init', 'cahaya_init' );

function zurb_jquery() {
	// wp_deregister_script('jquery'); 
	// wp_register_script('jquery', get_stylesheet_directory_uri().'/lib/javascripts/vendor/jquery.js' ,'', '1.10.1', true );
	wp_enqueue_script('jquery');
	wp_enqueue_script('responsiveslides', get_stylesheet_directory_uri().'/lib/javascripts/plugins/responsiveslides.min.js', ('jquery'), '', false);
	wp_enqueue_script('scripts', get_stylesheet_directory_uri().'/lib/javascripts/script.js', ('jquery'), '', false);
	wp_enqueue_script('qtip', get_stylesheet_directory_uri().'/lib/javascripts/plugins/qtip/jquery.qtip.min.js', ('jquery'), '', false);
}
add_action( 'wp_enqueue_scripts', 'zurb_jquery');

function register_cahaya_sidebars() {
	register_sidebar( array(
	   'name' => __( 'Left Sidebar'),
	   'id' => 'left-sidebar',
	   'description' => __( 'Left sidebar for inside pages/posts', 'cahaya' ),
	   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	   'after_widget' => "</aside>",
	   'before_title' => '<h3 class="widget-title">',
	   'after_title' => '</h3>',
	) );

	register_sidebar( array(
	   'name' => __( 'Footer'),
	   'id' => 'footer',
	   'description' => __( 'Footer area', 'cahaya' ),
	   'before_widget' => '<div class="small-3 columns"><aside id="%1$s" class="widget %2$s">',
	   'after_widget' => "</aside></div>",
	   'before_title' => '<h3 class="footer-title">',
	   'after_title' => '</h3>',
	) );

	register_sidebar( array(
	   'name' => __( 'Featured Home Pages with Thumbnails'),
	   'id' => 'home-pages-thumbnails',
	   'description' => __( 'Featured pages on home, use with Featured Page Widget', 'cahaya' ),
	   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	   'after_widget' => "</aside>",
	   'before_title' => '<h3 class="widget-title">',
	   'after_title' => '</h3>',
	) );	

	register_sidebar( array(
	   'name' => __( 'Featured Home Pages'),
	   'id' => 'home-pages',
	   'description' => __( 'Featured pages on home, use with Featured Page Widget', 'cahaya' ),
	   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	   'after_widget' => "</aside>",
	   'before_title' => '<h3 class="widget-title">',
	   'after_title' => '</h3>',
	) );	
}

/* menus */
function register_cahaya_top_menu() {
  register_nav_menu('navigation-menu',__( 'Navigation Menu' ));
}

function register_cahaya_slideshow() {
	register_post_type( 'cahaya_slideshow',
		array(
			'labels' => array(
				'name' => __( 'Slideshow' ),
				'singular_name' => __( 'Slideshow' )
			),
		'public' => true,
		'has_archive' => false,
		'supports' => array( 'title', 'thumbnail')
		)
	);
}

function filter_wp_title( $title ) {
	global $page, $paged;

	if ( is_feed() )
		return $title;

	$site_description = get_bloginfo( 'description' );

	$filtered_title = $title . get_bloginfo( 'name' );
	$filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
	$filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : '';

	return $filtered_title;
}
add_filter( 'wp_title', 'filter_wp_title' );

?>