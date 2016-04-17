<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );
// Additional Functions
// =============================================================================

//Load the theme CSS
function theme_styles() {
   
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css');
     
}
add_action( 'wp_enqueue_scripts', 'theme_styles');

// Additional Functions
// =============================================================================
function theme_js() {
    
    global $wp_scripts;
    
    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
    wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.js', '', '', false );
    
    
    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
    $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );
    
    wp_enqueue_script(
		'angularjs',
		get_stylesheet_directory_uri() . '/js/shared/angular.min.js');
    
    wp_enqueue_script(
		'angularjs-route',
		get_stylesheet_directory_uri() . '/js/shared/angular-route.min.js');
    
    wp_localize_script(
		'theme_js',
		'myLocalized',
		array(
			'partials' => trailingslashit( get_stylesheet_directory_uri() ) . 'partials/'
			)
	);
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

