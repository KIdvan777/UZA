<?php

/**
 * Enqueue scripts and styles.
 */
function uza_scripts() {
    // Register styles
    wp_enqueue_style( 'uza-aileron', get_template_directory_uri() . '/assets/css/fonts/aileron-font-style.css');
    wp_enqueue_style( 'uza-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'uza-animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style( 'uza-classy', get_template_directory_uri() . '/assets/css/default-assets/classy-nav.css');
    wp_enqueue_style( 'uza-owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style( 'uza-magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style( 'uza-magnific', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style( 'uza-styles', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style( 'uza-style', get_stylesheet_uri() );

	wp_enqueue_script( 'uza-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'uza-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'uza_scripts' );
