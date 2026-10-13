<?php
/**
 * Title: Call to action
 * Slug: addax/cta
 * Categories: addax, call-to-action
 * Keywords: cta, banner, offer, contact
 * Viewport Width: 1400
 * Description: A dark rounded banner with a violet glow, headline and two buttons.
 *
 * @package Addax
 */
?>
<!-- wp:group {"tagName":"section","align":"full","metadata":{"name":"Call to action"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"addax-cta-card addax-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"28px"},"elements":{"heading":{"color":{"text":"var:preset|color|base"}}}},"gradient":"navy-ink","textColor":"base","layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group alignwide addax-cta-card addax-reveal has-base-color has-navy-ink-gradient-background has-text-color has-background" style="border-radius:28px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Ready to build something great?', 'addax' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"is-style-addax-subheading","textColor":"base"} -->
<p class="has-text-align-center is-style-addax-subheading has-base-color has-text-color"><?php esc_html_e( 'Get 20% off your first project. Tell us what you need and we will reply within one working day.', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"is-style-addax-arrow","style":{"border":{"color":"var:preset|color|base"}}} -->
<div class="wp-block-button is-style-addax-arrow"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-border-color wp-element-button" href="#contact" style="border-color:var(--wp--preset--color--base)"><?php esc_html_e( 'Get a free quote', 'addax' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-addax-light"} -->
<div class="wp-block-button is-style-addax-light"><a class="wp-block-button__link wp-element-button" href="#work"><?php esc_html_e( 'See our work', 'addax' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
