<?php

define( 'BLUESPIER_VERSION', 1.0 );

if ( ! isset( $content_width ) ) $content_width = 900;

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'post-thumbnails' );

//Register Nav Menus
register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'bluespier' ),
	)
);

//Register Sidebars
function bluespier_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar',
		'name' => 'Sidebar',
		'description' => 'Take it on the side...',
		'before_widget' => '<div>',	
		'after_widget' => '</div>',	
		'before_title' => '<h3 class="side-title">',
		'after_title' => '</h3>',
		'empty_title'=> '',
	));

	register_sidebar(array(
    'name' => 'Contact Form',
    'id' => 'contact-form',
    'description' => 'Fill out the contact form',
    'before_widget' => '<div class="contact-form">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
		'empty_title'=> '',
  ));
} 

add_action( 'widgets_init', 'bluespier_register_sidebars' );

//Scripts
function bluespier_scripts()  { 

	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
	
	wp_enqueue_script( 'bluespier-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), BLUESPIER_VERSION, true );
	
	wp_enqueue_script( 'bluespier', get_template_directory_uri() . '/js/theme.min.js', array(), BLUESPIER_VERSION, true );
  
}
add_action( 'wp_enqueue_scripts', 'bluespier_scripts' );
