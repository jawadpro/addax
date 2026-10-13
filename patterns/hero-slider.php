<?php
/**
 * Title: Hero slider
 * Slug: addax/hero-slider
 * Categories: addax, banner
 * Keywords: slider, hero, banner, header
 * Viewport Width: 1400
 * Description: Full-screen cross-fading slider with headline, text and two buttons per slide. Needs Addax Core.
 *
 * @package Addax
 */

$addax_slides = array(
	array(
		'image' => 'bg.jpg',
		'title' => __( 'Crafting your <mark>digital</mark> experience', 'addax' ),
		'text'  => __( 'Your one stop shop for design, development and growth.', 'addax' ),
		'align' => 'center',
	),
	array(
		'image' => 'bg2.jpg',
		'title' => __( 'Ideas that <mark>move</mark> people', 'addax' ),
		'text'  => __( 'Brands, products and campaigns built with care and craft.', 'addax' ),
		'align' => 'center',
	),
);
?>
<!-- wp:addax/hero-slider {"align":"full"} -->
<?php foreach ( $addax_slides as $addax_slide ) : ?>
<!-- wp:addax/hero-slide {"mediaUrl":"<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $addax_slide['image'] ) ); ?>","contentPosition":"<?php echo esc_attr( $addax_slide['align'] ); ?>"} -->
<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge","style":{"typography":{"fontWeight":"400"}}} -->
<h1 class="wp-block-heading has-text-align-center has-huge-font-size" style="font-weight:400"><?php echo wp_kses( $addax_slide['title'], array( 'mark' => array() ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large","style":{"typography":{"fontWeight":"300"}}} -->
<p class="has-text-align-center has-large-font-size" style="font-weight:300"><?php echo esc_html( $addax_slide['text'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-addax-arrow"} -->
<div class="wp-block-button is-style-addax-arrow"><a class="wp-block-button__link wp-element-button" href="#services"><?php esc_html_e( 'Explore more', 'addax' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-addax-light"} -->
<div class="wp-block-button is-style-addax-light"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Get in touch', 'addax' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:addax/hero-slide -->
<?php endforeach; ?>
<!-- /wp:addax/hero-slider -->
