<?php

require_once(dirname(__FILE__). '/widgets.php');

function cahaya_init() {
	register_cahaya_top_menu();
	register_cahaya_sidebars();
}
add_action( 'init', 'cahaya_init' );

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
}

/* menus */
function register_cahaya_top_menu() {
  register_nav_menu('navigation-menu',__( 'Navigation Menu' ));
}



?>