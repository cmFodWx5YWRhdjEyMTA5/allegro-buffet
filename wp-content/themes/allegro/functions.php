<?php

        // Mostrar barra administrativa do WordPress
if ( current_user_can( 'manage_options' ) ) {
show_admin_bar( true );
}

	/* Menu */
  	function register_my_menus() {
		register_nav_menus(
	    	array(
	      		'header-menu' => __( 'Header Menu' ),
	      		'extra-menu' => __( 'Extra Menu' ),
	      		'social-menu' => __( 'Social Menu' ),
	      		'footer-menu' => __( 'Footer Menu' )
	    	)
	  	);
	}
	add_action( 'init', 'register_my_menus' );

	/* Widgets */
	if (function_exists('register_sidebar')){
		register_sidebar(array(
			'name'			=> 'Sidebar',
			'before_widget'	=> '<div class="widget">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h3>',
			'after_title'	=> '</h3>',
	  ));
	}

	add_theme_support( 'post-thumbnails' );

	register_sidebar( array(
		'name' => 'Footer Sidebar 1',
		'id' => 'footer-sidebar-1',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => 'Footer Sidebar 2',
		'id' => 'footer-sidebar-2',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => 'Footer Sidebar 3',
		'id' => 'footer-sidebar-3',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

?>