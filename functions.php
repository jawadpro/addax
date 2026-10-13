<?php
/**
 * Addax functions and definitions.
 *
 * @package Addax
 * @since 2.0.0
 */

defined( 'ABSPATH' ) || exit;

define( 'ADDAX_VERSION', '2.0.0' );

require_once get_template_directory() . '/inc/block-styles.php';

/**
 * Theme setup.
 */
function addax_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );

	add_editor_style( 'assets/css/addax.css' );

	add_image_size( 'addax-card', 800, 560, true );
	add_image_size( 'addax-portrait', 480, 640, true );
}
add_action( 'after_setup_theme', 'addax_setup' );

/**
 * Front-end styles and scripts.
 */
function addax_enqueue_assets() {
	$uri  = get_template_directory_uri();
	$path = get_template_directory();

	wp_enqueue_style(
		'addax',
		$uri . '/assets/css/addax.css',
		array(),
		ADDAX_VERSION . '.' . filemtime( $path . '/assets/css/addax.css' )
	);

	wp_enqueue_script(
		'addax',
		$uri . '/assets/js/addax.js',
		array(),
		ADDAX_VERSION . '.' . filemtime( $path . '/assets/js/addax.js' ),
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'addax_enqueue_assets' );

/**
 * Flag JS support early, so reveal animations never hide content for no-JS visitors.
 */
function addax_js_class() {
	wp_print_inline_script_tag( "document.documentElement.classList.add('addax-js');" );
}
add_action( 'wp_head', 'addax_js_class', 0 );

/**
 * Pattern categories.
 */
function addax_pattern_categories() {
	register_block_pattern_category(
		'addax',
		array(
			'label'       => __( 'Addax sections', 'addax' ),
			'description' => __( 'Ready-made sections from the Addax theme.', 'addax' ),
		)
	);
	register_block_pattern_category(
		'addax-pages',
		array(
			'label'       => __( 'Addax pages', 'addax' ),
			'description' => __( 'Full page layouts from the Addax theme.', 'addax' ),
		)
	);
}
add_action( 'init', 'addax_pattern_categories', 9 );

/**
 * Show the site name, styled as a wordmark, when no site logo has been set.
 *
 * Keeps the header useful out of the box without bundling a logo image.
 *
 * @param string $block_content Rendered block.
 * @return string
 */
function addax_site_logo_fallback( $block_content ) {
	if ( '' !== trim( $block_content ) ) {
		return $block_content;
	}

	return sprintf(
		'<p class="wp-block-site-logo addax-wordmark"><a href="%1$s" rel="home">%2$s</a></p>',
		esc_url( home_url( '/' ) ),
		esc_html( get_bloginfo( 'name' ) )
	);
}
add_filter( 'render_block_core/site-logo', 'addax_site_logo_fallback' );

/**
 * Body classes used by the overlay header.
 *
 * @param string[] $classes Body classes.
 * @return string[]
 */
function addax_body_classes( $classes ) {
	if ( is_front_page() || is_page_template( 'page-landing' ) ) {
		$classes[] = 'addax-has-overlay-header';
	}
	return $classes;
}
add_filter( 'body_class', 'addax_body_classes' );
