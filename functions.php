<?php
add_action( 'wp_enqueue_scripts', 'frost_child_theme_enqueue_styles' );
function frost_child_theme_enqueue_styles() {
	wp_enqueue_style( 'child-style',
		get_stylesheet_uri(),
		array( 'frost' ),
		wp_get_theme()->get( 'Version' ) // This only works if you have Version defined in the style header.
	);
}