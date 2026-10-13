<?php
/**
 * Title: Process (bullet tabs)
 * Slug: addax/process-tabs
 * Categories: addax, features
 * Keywords: tabs, process, steps, how we work
 * Viewport Width: 1400
 * Description: "How we work" with bullet tabs, each with an image and text. Needs Addax Core.
 *
 * @package Addax
 */

$addax_steps = array(
	array( __( 'Discover', 'addax' ), 'port1.jpg', __( 'We start by listening', 'addax' ), __( 'Workshops, interviews and a close look at your numbers tell us where the real opportunities are.', 'addax' ) ),
	array( __( 'Design', 'addax' ), 'port2.jpg', __( 'Ideas you can click', 'addax' ), __( 'Wireframes become interactive prototypes, tested with real users before a line of production code.', 'addax' ) ),
	array( __( 'Develop', 'addax' ), 'port3.jpg', __( 'Built to last', 'addax' ), __( 'Clean, documented code on a stack your team can own, with performance and accessibility baked in.', 'addax' ) ),
	array( __( 'Launch', 'addax' ), 'port4.jpg', __( 'And beyond', 'addax' ), __( 'A calm launch, then steady improvements guided by analytics and your customers’ feedback.', 'addax' ) ),
);
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Process"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","className":"is-style-addax-underline addax-reveal"} -->
<h2 class="wp-block-heading has-text-align-center is-style-addax-underline addax-reveal"><?php esc_html_e( 'How we work', 'addax' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:addax/tabs {"align":"wide","className":"addax-reveal"} -->
<?php foreach ( $addax_steps as $addax_step ) : ?>
<!-- wp:addax/tab {"title":"<?php echo esc_attr( $addax_step[0] ); ?>"} -->
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","className":"is-style-addax-lift"} -->
<figure class="wp-block-image size-large is-style-addax-lift"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $addax_step[1] ) ); ?>" alt="" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( $addax_step[2] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html( $addax_step[3] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:addax/tab -->
<?php endforeach; ?>
<!-- /wp:addax/tabs --></section>
<!-- /wp:group -->
