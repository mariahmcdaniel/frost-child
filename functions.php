<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parent_style = 'frost'; 

    wp_enqueue_style( $parent_style,
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style( 'child-style',
        get_stylesheet_uri(),
        array( $parent_style ),
        '1.0.0' 
    );
}
