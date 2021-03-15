<?php
/**
 * Enqueue scripts and styles.
 */
function jhon_me_scripts() {
    wp_enqueue_style( 'font-awesome-style', get_template_directory_uri() . '/assets/css/all.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), _S_VERSION );
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
    wp_enqueue_style( 'aos-style', get_template_directory_uri() . '/assets/css/aos.css', array(), _S_VERSION );
	wp_enqueue_style( 'jhon-me-style', get_stylesheet_uri(), array(), _S_VERSION );
	

	wp_enqueue_script( 'jquery-slim', get_template_directory_uri() .'/assets/js/jquery.slim.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'popper-js', get_template_directory_uri() .'/assets/js/popper.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'aos-js', get_template_directory_uri() . '/assets/js/aos.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'jhon-me-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jhon_me_scripts' );