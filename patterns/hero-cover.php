<?php
/**
 * Title: Hero (single image)
 * Slug: addax/hero-cover
 * Categories: addax, banner
 * Keywords: hero, cover, banner
 * Viewport Width: 1400
 * Description: Full-height cover with headline and buttons. Uses only core blocks.
 *
 * @package Addax
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/bg.jpg' ) ); ?>","dimRatio":50,"overlayColor":"ink","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","isDark":true,"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:100vh"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bg.jpg' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"base","fontSize":"huge"} -->
<h1 class="wp-block-heading has-text-align-center has-base-color has-text-color has-huge-font-size"><?php echo wp_kses( __( 'Crafting your <mark>digital</mark> experience', 'addax' ), array( 'mark' => array() ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"is-style-addax-subheading","textColor":"base"} -->
<p class="has-text-align-center is-style-addax-subheading has-base-color has-text-color"><?php esc_html_e( 'Your one stop shop for all of your digital needs.', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-addax-arrow"} -->
<div class="wp-block-button is-style-addax-arrow"><a class="wp-block-button__link wp-element-button" href="#services"><?php esc_html_e( 'Explore more', 'addax' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-addax-light"} -->
<div class="wp-block-button is-style-addax-light"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Get in touch', 'addax' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
