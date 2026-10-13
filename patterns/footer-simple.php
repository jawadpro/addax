<?php
/**
 * Title: Simple footer
 * Slug: addax/footer-simple
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A compact dark footer with logo, social icons and copyright.
 *
 * @package Addax
 */
?>
<!-- wp:group {"tagName":"div","className":"addax-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"navy","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group addax-footer has-base-color has-navy-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">© <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>. <?php esc_html_e( 'All rights reserved.', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
