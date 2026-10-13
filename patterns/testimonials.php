<?php
/**
 * Title: Testimonials
 * Slug: addax/testimonials
 * Categories: addax, testimonials
 * Keywords: testimonials, reviews, quotes, clients
 * Viewport Width: 1400
 * Description: Three client reviews in cards with star ratings and avatars.
 *
 * @package Addax
 */

$addax_quotes = array(
	array( __( 'Addax rebuilt our site in six weeks and our enquiries doubled within a quarter. They shipped exactly what they promised.', 'addax' ), 'Olivia Grant', __( 'CEO, Northwind', 'addax' ), 'team-5.jpg' ),
	array( __( 'The team felt like an extension of ours. Clear communication, thoughtful design and code we can actually maintain.', 'addax' ), 'Marcus Lee', __( 'Product lead, Fieldstone', 'addax' ), 'team-1.jpg' ),
	array( __( 'From brand workshop to launch day, every step was organised and fun. We still get compliments on the new identity.', 'addax' ), 'Priya Nair', __( 'Founder, Bloom & Co', 'addax' ), 'team-2.jpg' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","metadata":{"name":"Testimonials"},"className":"is-style-addax-glow","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull is-style-addax-glow" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"className":"addax-reveal","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group addax-reveal"><!-- wp:paragraph {"align":"center","className":"is-style-addax-badge"} -->
<p class="has-text-align-center is-style-addax-badge"><?php esc_html_e( 'Testimonials', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Loved by the teams we work with', 'addax' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"addax-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<div class="wp-block-group alignwide addax-reveal-stagger"><?php foreach ( $addax_quotes as $addax_quote ) : ?><!-- wp:group {"className":"is-style-addax-card addax-quote-card addax-stretch","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-addax-card addax-quote-card addax-stretch" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"className":"addax-stars"} -->
<p class="addax-stars">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo esc_html( $addax_quote[0] ); ?></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem","margin":{"top":"auto"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:auto"><!-- wp:image {"width":"44px","sizeSlug":"full","linkDestination":"none","className":"addax-avatar"} -->
<figure class="wp-block-image size-full is-resized addax-avatar"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $addax_quote[3] ) ); ?>" alt="" style="width:44px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"contrast","fontSize":"small"} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="font-weight:600"><?php echo esc_html( $addax_quote[1] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html( $addax_quote[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
