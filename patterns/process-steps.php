<?php
/**
 * Title: Process steps
 * Slug: addax/process-steps
 * Categories: addax, features
 * Keywords: process, steps, how we work
 * Viewport Width: 1400
 * Description: "How we work" in four numbered steps.
 *
 * @package Addax
 */

$addax_steps = array(
	array( __( 'Discover', 'addax' ), __( 'Workshops, interviews and a close look at your numbers show us where the real opportunities are.', 'addax' ) ),
	array( __( 'Design', 'addax' ), __( 'Wireframes become clickable prototypes, tested with real users before production starts.', 'addax' ) ),
	array( __( 'Develop', 'addax' ), __( 'Clean, documented code on a stack your team can own, with performance built in.', 'addax' ) ),
	array( __( 'Launch', 'addax' ), __( 'A calm launch, then steady improvements guided by analytics and feedback.', 'addax' ) ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","metadata":{"name":"Process"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","className":"addax-reveal"} -->
<h2 class="wp-block-heading has-text-align-center addax-reveal"><?php esc_html_e( 'How we work', 'addax' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","className":"addax-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
<div class="wp-block-group alignwide addax-reveal-stagger"><?php foreach ( $addax_steps as $addax_i => $addax_step ) : ?><!-- wp:group {"className":"is-style-addax-card","style":{"spacing":{"blockGap":"0.75rem","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-addax-card" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"className":"addax-step-number"} -->
<p class="addax-step-number"><?php echo esc_html( sprintf( '%02d', $addax_i + 1 ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $addax_step[0] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $addax_step[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
