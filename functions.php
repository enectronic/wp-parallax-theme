<?php
/**
 * Proper way to enqueue scripts and styles
 */
function theme_scripts() {
	wp_enqueue_style( 'Main CSS', get_stylesheet_uri() );
	wp_enqueue_script( 'Main js', get_template_directory_uri() . '/js/min/main-min.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

/**
 * Register a menu for use in the theme
 */
function register_menu() {
	register_nav_menu('header-menu', __( 'Headermeny' ));
}

add_action( 'init', 'register_menu' );
