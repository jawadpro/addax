<?php
/**
 * Title: How it works
 * Slug: addax/how-it-works
 * Categories: addax, features
 * Keywords: process, steps, how it works, features
 * Viewport Width: 1400
 * Description: Three pastel cards, each with a short explanation and a product-style snapshot.
 *
 * @package Addax
 */

$addax_cards = array(
	array( 'peach', 'ui-1.png', __( 'Plan your project', 'addax' ), __( 'Share your goals and we turn them into a clear plan, budget and timeline.', 'addax' ) ),
	array( 'sky', 'ui-2.png', __( 'Meet your team', 'addax' ), __( 'A small senior team matched to your project, from first sketch to launch.', 'addax' ) ),
	array( 'mint', 'ui-3.png', __( 'Launch with confidence', 'addax' ), __( 'Weekly check-ins, a shared schedule and a calm, well-tested launch day.', 'addax' ) ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","metadata":{"name":"How it works"},"className":"is-style-addax-glow","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull is-style-addax-glow" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"className":"addax-reveal","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group addax-reveal"><!-- wp:paragraph {"align":"center","className":"is-style-addax-badge"} -->
<p class="has-text-align-center is-style-addax-badge"><?php esc_html_e( 'How it works', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'From first call to launch day', 'addax' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"addax-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<div class="wp-block-group alignwide addax-reveal-stagger"><?php foreach ( $addax_cards as $addax_card ) : ?><!-- wp:group {"className":"addax-stretch","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"<?php echo esc_attr( $addax_card[0] ); ?>","layout":{"type":"default"}} -->
<div class="wp-block-group addax-stretch has-<?php echo esc_attr( $addax_card[0] ); ?>-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $addax_card[2] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $addax_card[3] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"addax-snippet","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<figure class="wp-block-image size-full addax-snippet" style="margin-top:var(--wp--preset--spacing--30)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $addax_card[1] ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
