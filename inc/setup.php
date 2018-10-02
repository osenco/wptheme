<?php
/**
 * @package WPTHEME
 * @subpackage Popular Tags
 * @author Osen Concepts < hi@osen.co.ke >
 * @since 0.1.0
 */

/**
 * Theme set up
 */
if ( ! function_exists( 'osen_setup' ) ) {
	function osen_setup()
	{
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );

		add_theme_support( 'woocommerce' );

		load_theme_textdomain( 'osen', get_template_directory() . '/languages' );

		register_nav_menus(
			array(
				'primary'   => __( 'Primary Menu', 'osen' ),
				'secondary' => __( 'Secondary Menu', 'osen' )
			)
		);
	}
	add_action( 'after_setup_theme', 'osen_setup' );
}

/**
 * Load stylesheets and scripts
 */
function osen_scripts()
{
	wp_enqueue_style( 'other', get_template_directory_uri() . '/assets/css/style.css', false, '1.10.4', 'all' );

	wp_enqueue_style( 'main', get_stylesheet_uri() );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.min.js', array ( 'jquery' ), 1.18, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	    wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'osen_scripts' );

function osen_load_custom_wp_admin_style()
{
	wp_register_style( 'osen_custom_wp_admin_css', get_template_directory_uri() . '/assets/css/admin.css', false, '1.0.0' );
	wp_enqueue_style( 'osen_custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'osen_load_custom_wp_admin_style' );