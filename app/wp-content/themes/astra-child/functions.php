<?php
add_action( 'wp_enqueue_scripts', 'child_styles' );
 
function child_styles() {
 
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array(), null  );
 
}
