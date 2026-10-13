<?php
/**
 * Title: Contact details with map
 * Slug: addax/contact
 * Categories: addax, contact
 * Keywords: contact, map, address, phone, email
 * Viewport Width: 1400
 * Description: Contact details pulled from Addax Settings beside a map. Needs Addax Core for live values and the map.
 *
 * @package Addax
 */

$addax_items = array(
	array( 'phone', __( 'Call us', 'addax' ), '+1 (555) 010-2030' ),
	array( 'email', __( 'Email', 'addax' ), 'hello@example.com' ),
	array( 'address', __( 'Visit', 'addax' ), __( '120 Market Street, New York, NY', 'addax' ) ),
	array( 'hours', __( 'Hours', 'addax' ), __( 'Mon–Fri, 9am–6pm', 'addax' ) ),
);
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Contact"},"anchor":"contact","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<section id="contact" class="wp-block-group has-base-2-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"className":"is-style-addax-underline"} -->
<h2 class="wp-block-heading is-style-addax-underline"><?php esc_html_e( 'Let’s talk', 'addax' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-addax-subheading"} -->
<p class="is-style-addax-subheading"><?php esc_html_e( 'Tell us about your project. We reply within one working day.', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<?php foreach ( $addax_items as $addax_item ) : ?><!-- wp:group {"style":{"spacing":{"blockGap":"0.1rem","padding":{"left":"1rem"}},"border":{"left":{"color":"var:preset|color|primary","width":"3px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--primary);border-left-width:3px;padding-left:1rem"><!-- wp:paragraph {"className":"is-style-addax-eyebrow"} -->
<p class="is-style-addax-eyebrow"><?php echo esc_html( $addax_item[1] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"addax/options","args":{"key":"<?php echo esc_attr( $addax_item[0] ); ?>"}}}},"textColor":"contrast","fontSize":"large"} -->
<p class="has-contrast-color has-text-color has-large-font-size"><?php echo esc_html( $addax_item[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:addax/map {"address":"Times Square, New York","height":460,"style":{"border":{"radius":"8px"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
