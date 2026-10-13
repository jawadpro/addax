<?php
/**
 * Title: Call to action banner
 * Slug: addax/cta
 * Categories: addax, call-to-action
 * Keywords: cta, banner, offer, quote
 * Viewport Width: 1400
 * Description: Purple banner with geometric shapes, an offer and a button.
 *
 * @package Addax
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Call to action"},"className":"addax-cta","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"accent","textColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group addax-cta has-base-color has-accent-background-color has-text-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","className":"addax-reveal","textColor":"base","style":{"typography":{"fontWeight":"300"}}} -->
<h2 class="wp-block-heading has-text-align-center addax-reveal has-base-color has-text-color" style="font-weight:300"><?php esc_html_e( 'Get 20% off your first project.', 'addax' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"addax-reveal","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons addax-reveal"><!-- wp:button {"className":"is-style-addax-light"} -->
<div class="wp-block-button is-style-addax-light"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Get a free quote now', 'addax' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
