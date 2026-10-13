<?php
/**
 * Title: Footer with four link columns
 * Slug: addax/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Navy footer with four link columns, social icons and a copyright line.
 *
 * @package Addax
 */

$addax_columns = array(
	__( 'About us', 'addax' ) => array( __( 'Core values', 'addax' ), __( 'Our motive', 'addax' ), __( 'Our vision', 'addax' ), __( 'Our mission', 'addax' ) ),
	__( 'Company', 'addax' )  => array( __( 'Privacy policy', 'addax' ), __( 'Terms & conditions', 'addax' ), __( 'Careers', 'addax' ), __( 'Clients', 'addax' ) ),
	__( 'Services', 'addax' ) => array( __( 'Web development', 'addax' ), __( 'WordPress', 'addax' ), __( 'Graphic design', 'addax' ), __( 'Search engine optimization', 'addax' ) ),
	__( 'Support', 'addax' )  => array( __( 'Tutorials', 'addax' ), __( 'FAQs', 'addax' ), __( 'Help center', 'addax' ), __( 'Contact us', 'addax' ) ),
);
?>
<!-- wp:group {"tagName":"div","className":"addax-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|30"},"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|base"}}}}},"backgroundColor":"navy","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group addax-footer has-base-color has-navy-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><?php foreach ( $addax_columns as $addax_heading => $addax_links ) : ?><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":2,"className":"addax-widget-heading","textColor":"base"} -->
<h2 class="wp-block-heading addax-widget-heading has-base-color has-text-color"><?php echo esc_html( $addax_heading ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-addax-links"} -->
<ul class="wp-block-list is-style-addax-links"><?php foreach ( $addax_links as $addax_link ) : ?><!-- wp:list-item -->
<li><a href="#"><?php echo esc_html( $addax_link ); ?></a></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list --></div>
<!-- /wp:column --><?php endforeach; ?></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","className":"addax-footer-social","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|50"}},"border":{"top":{"color":"#ffffff1a","width":"1px"},"bottom":{"color":"#ffffff1a","width":"1px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group alignwide addax-footer-social" style="border-top-color:#ffffff1a;border-top-width:1px;border-bottom-color:#ffffff1a;border-bottom-width:1px;margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"dribbble"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"addax/options","args":{"key":"copyright"}}}},"align":"center","style":{"typography":{"letterSpacing":"0.08em"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--30);letter-spacing:0.08em">© <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>. <?php esc_html_e( 'All rights reserved.', 'addax' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
