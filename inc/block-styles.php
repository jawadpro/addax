<?php
/**
 * Block style variations. The CSS for each lives in assets/css/addax.css.
 *
 * These replace the old Addax Heading, Addax Button and Addax Accordion shortcodes.
 *
 * @package Addax
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register block styles.
 */
function addax_register_block_styles() {
	$styles = array(
		'core/button'       => array(
			'addax-outline' => __( 'Outline', 'addax' ),
			'addax-light'   => __( 'Light outline', 'addax' ),
			'addax-arrow'   => __( 'Arrow on hover', 'addax' ),
		),
		'core/heading'      => array(
			'addax-underline' => __( 'Short underline', 'addax' ),
			'addax-line'      => __( 'Trailing line', 'addax' ),
		),
		'core/paragraph'    => array(
			'addax-subheading' => __( 'Subheading', 'addax' ),
			'addax-eyebrow'    => __( 'Eyebrow', 'addax' ),
			'addax-watermark'  => __( 'Watermark', 'addax' ),
		),
		'core/details'      => array(
			'addax-accordion' => __( 'Accordion', 'addax' ),
		),
		'core/group'        => array(
			'addax-card' => __( 'Card', 'addax' ),
			'addax-tile' => __( 'Tile', 'addax' ),
		),
		'core/image'        => array(
			'addax-lift' => __( 'Lifted', 'addax' ),
		),
		'core/list'         => array(
			'addax-links' => __( 'Link list', 'addax' ),
			'addax-check' => __( 'Checklist', 'addax' ),
		),
		'core/post-template' => array(
			'addax-cards' => __( 'Cards', 'addax' ),
		),
	);

	foreach ( $styles as $block => $variations ) {
		foreach ( $variations as $name => $label ) {
			register_block_style(
				$block,
				array(
					'name'  => $name,
					'label' => $label,
				)
			);
		}
	}
}
add_action( 'init', 'addax_register_block_styles' );
