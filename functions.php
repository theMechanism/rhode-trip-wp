<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Rhode Trip' );
define( 'CHILD_THEME_URL', 'http://www.themechanism.com/' );
define( 'CHILD_THEME_VERSION', '0.1' );

//* Remove default stylesheets
remove_action( 'genesis_meta', 'genesis_load_stylesheet' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'rhode_trip_enqueue' );
function rhode_trip_enqueue() {
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'rhode-trip-styles', get_stylesheet_directory_uri() . '/assets/stylesheets/style.css', array(), CHILD_THEME_VERSION );
}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add Accessibility support
add_theme_support( 'genesis-accessibility', array( 'headings', 'drop-down-menu',  'search-form', 'skip-links', 'rems' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );
