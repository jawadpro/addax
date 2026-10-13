<?php
/**
 * Title: Stats
 * Slug: addax/stats
 * Categories: addax
 * Keywords: numbers, stats, facts, counters
 * Viewport Width: 1400
 * Description: Four key numbers in white cards.
 *
 * @package Addax
 */

$addax_stats = array(
	array( '52k+', __( 'Hours of focused work', 'addax' ) ),
	array( '147', __( 'Projects launched', 'addax' ) ),
	array( '47', __( 'Countries served', 'addax' ) ),
	array( '98%', __( 'Clients who return', 'addax' ) ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","metadata":{"name":"Stats"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"addax-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
<div class="wp-block-group alignwide addax-reveal-stagger"><?php foreach ( $addax_stats as $addax_stat ) : ?><!-- wp:group {"className":"is-style-addax-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-addax-card" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"className":"addax-stat-number","style":{"typography":{"fontWeight":"800","lineHeight":"1.05","letterSpacing":"-0.04em"}},"fontFamily":"heading","fontSize":"xx-large"} -->
<p class="addax-stat-number has-heading-font-family has-xx-large-font-size" style="font-weight:800;letter-spacing:-0.04em;line-height:1.05"><?php echo esc_html( $addax_stat[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html( $addax_stat[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
