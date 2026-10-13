<?php
/**
 * Title: Testimonials
 * Slug: addax/testimonials
 * Categories: addax, testimonials
 * Keywords: testimonials, reviews, quotes, clients
 * Viewport Width: 1400
 * Description: Rotating client quotes over a fixed background photo. Needs Addax Core.
 *
 * @package Addax
 */

$addax_quotes = array(
	array( __( 'Addax rebuilt our site in six weeks and our enquiries doubled within a quarter. They listened, pushed back when it mattered, and shipped exactly what they promised.', 'addax' ), 'Olivia Grant', __( 'CEO, Northwind', 'addax' ) ),
	array( __( 'The team felt like an extension of ours. Clear communication, thoughtful design and code we can actually maintain.', 'addax' ), 'Marcus Lee', __( 'Product lead, Fieldstone', 'addax' ) ),
	array( __( 'From brand workshop to launch day, every step was organised and fun. We still get compliments on the new identity.', 'addax' ), 'Priya Nair', __( 'Founder, Bloom & Co.', 'addax' ) ),
);
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/testimonial.jpg' ) ); ?>","hasParallax":true,"dimRatio":70,"overlayColor":"navy","isUserOverlayColor":true,"minHeight":480,"isDark":true,"metadata":{"name":"Testimonials"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-parallax" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);min-height:480px"><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_theme_file_uri( 'assets/images/testimonial.jpg' ) ); ?>)"></div><span aria-hidden="true" class="wp-block-cover__background has-navy-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:addax/testimonials {"title":"<?php echo esc_attr( __( 'Testimonials', 'addax' ) ); ?>","align":"wide","textColor":"base"} -->
<?php foreach ( $addax_quotes as $addax_quote ) : ?>
<!-- wp:addax/testimonial <?php echo wp_json_encode( array( 'quote' => $addax_quote[0], 'name' => $addax_quote[1], 'role' => $addax_quote[2] ), JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP ); ?> /-->
<?php endforeach; ?>
<!-- /wp:addax/testimonials --></div></div>
<!-- /wp:cover -->
