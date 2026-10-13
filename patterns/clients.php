<?php
/**
 * Title: Client logos
 * Slug: addax/clients
 * Categories: addax
 * Keywords: clients, logos, partners, brands
 * Viewport Width: 1400
 * Description: Gradient section with heading, scrolling client logos and a button. Needs Addax Core.
 *
 * @package Addax
 */

$addax_logos = array();
for ( $addax_i = 1; $addax_i <= 6; $addax_i++ ) {
	$addax_logos[] = array(
		'url' => get_theme_file_uri( 'assets/images/client' . $addax_i . '.png' ),
		/* translators: %d: client number */
		'alt' => sprintf( __( 'Client %d', 'addax' ), $addax_i ),
	);
}
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Clients"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|40"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"gradient":"accent-primary","textColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group has-base-color has-accent-primary-gradient-background has-text-color has-background has-link-color" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"className":"addax-reveal","style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group addax-reveal"><!-- wp:heading {"textAlign":"center","textColor":"base","style":{"typography":{"fontWeight":"300"}}} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color" style="font-weight:300"><?php esc_html_e( 'Our clients come first', 'addax' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"is-style-addax-subheading"} -->
<p class="has-text-align-center is-style-addax-subheading"><?php esc_html_e( 'Some great companies that worked with us', 'addax' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:addax/clients <?php echo wp_json_encode( array( 'logos' => $addax_logos, 'grayscale' => false, 'logoHeight' => 72, 'align' => 'wide' ), JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP ); ?> /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-addax-light"} -->
<div class="wp-block-button is-style-addax-light"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Work with us', 'addax' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
