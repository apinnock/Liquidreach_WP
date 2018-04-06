<?php	

function liquidreach_enquene_styles () {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', false, '1.1', 'all' );
}

add_action( 'wp_enqueue_scripts', 'liquidreach_enquene_styles' );



add_theme_support( 'post-thumbnails' );
