<?php
/**
 * Title: Contact details
 * Slug: addax/contact
 * Categories: addax, contact
 * Keywords: contact, address, phone, email
 * Viewport Width: 1400
 * Description: Heading, contact details and a call to action.
 *
 * @package Addax
 */

$addax_items = array(
	array( __( 'Call us', 'addax' ), '+1 (555) 010-2030' ),
	array( __( 'Email', 'addax' ), 'hello@example.com' ),
	array( __( 'Visit', 'addax' ), __( '120 Market Street, New York, NY', 'addax' ) ),
	array( __( 'Hours', 'addax' ), __( 'Mon–Fri, 9am–6pm', 'addax' ) ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","metadata":{"name":"Contact"},"anchor":"contact","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section id="contact" class="wp-block-group alignfull is-style-addax-glow" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:paragraph {"className":"is-style-addax-badge"} -->
<p class="is-style-addax-badge"><?php esc_html_e( 'Contact', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Let’s talk', 'addax' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-addax-subheading"} -->
<p class="is-style-addax-subheading"><?php esc_html_e( 'Tell us about your project. We reply within one working day.', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-addax-arrow"} -->
<div class="wp-block-button is-style-addax-arrow"><a class="wp-block-button__link wp-element-button" href="mailto:hello@example.com"><?php esc_html_e( 'Start a project', 'addax' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
<div class="wp-block-group"><?php foreach ( $addax_items as $addax_item ) : ?><!-- wp:group {"className":"is-style-addax-card","style":{"spacing":{"blockGap":"0.25rem","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-addax-card" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"className":"is-style-addax-eyebrow"} -->
<p class="is-style-addax-eyebrow"><?php echo esc_html( $addax_item[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast","fontSize":"large"} -->
<p class="has-contrast-color has-text-color has-large-font-size"><?php echo esc_html( $addax_item[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
