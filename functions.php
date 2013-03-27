<?php
/**
 * WP Seattle functions and definitions
 *
 * @package WP Seattle
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );


/* Load the Hybrid core theme framework. */
require_once( trailingslashit( get_template_directory() ) . 'lib/hybrid.php' );
new Hybrid();


if ( ! function_exists( 'wpseattle_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function wpseattle_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on WP Seattle, use a find and replace
	 * to change 'wpseattle' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'wpseattle', get_template_directory() . '/languages' );
	
	/**
	 * Hybrid Core Setup
	 */
	/* Get action/filter hook prefix. */
		$prefix = hybrid_get_prefix();

		/* Add theme support for core framework features. */
		add_theme_support( 'hybrid-core-menus', array( 'primary' ) );
		add_theme_support( 'hybrid-core-sidebars', array( 'primary' ) );
		add_theme_support( 'hybrid-core-widgets' );
		add_theme_support( 'hybrid-core-shortcodes' );
		add_theme_support( 'hybrid-core-template-hierarchy' );
		add_theme_support( 'hybrid-core-styles', array( 'style' ) );

		/* Add theme support for framework extensions. */
		//add_theme_support( 'theme-layouts', array( '1c', '2c-l', '2c-r' ), array( 'default' => '2c-l' ) );
		add_theme_support( 'post-stylesheets' );
		add_theme_support( 'loop-pagination' );
		add_theme_support( 'get-the-image' );
		add_theme_support( 'breadcrumb-trail' );

		/* Add theme support for WordPress features. */
		add_theme_support( 'automatic-feed-links' );
		add_theme_support('post-formats',array( 'aside', 'audio', 'chat', 'image', 'gallery', 'link', 'quote', 'status', 'video' ));

	}
endif; // wpseattle_setup
add_action( 'after_setup_theme', 'wpseattle_setup' );


/**
 * Enqueue scripts and styles
 */
function wpseattle_scripts() {
	wp_enqueue_script( 'WP Seattle-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'WP Seattle-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'WP Seattle-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'wpseattle_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );
