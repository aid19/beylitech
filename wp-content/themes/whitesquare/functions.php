<?php

// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
	

	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css');
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css');





	// wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', array(), '1.0.0', true );
	// wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
	// wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
	// wp_enqueue_script( 'All Plugins', get_template_directory_uri() . '/js/plugins.js', array(), '1.0.0', true );
	// wp_enqueue_script( 'Active', get_template_directory_uri() . '/js/active.js', array(), '1.0.0', true );



}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
