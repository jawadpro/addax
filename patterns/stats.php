<?php
/**
 * Title: Stats counters
 * Slug: addax/stats
 * Categories: addax
 * Keywords: counters, numbers, stats, facts
 * Viewport Width: 1400
 * Description: Dark band with four animated counters. Needs Addax Core.
 *
 * @package Addax
 */

$addax_stats = array(
	array( 52147, __( 'Hours of work', 'addax' ) ),
	array( 122147, __( 'Lines of code', 'addax' ) ),
	array( 47, __( 'Countries', 'addax' ) ),
	array( 147, __( 'Projects', 'addax' ) ),
);
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Stats"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"backgroundColor":"charcoal","textColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group has-base-color has-charcoal-background-color has-text-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"addax-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"12rem"}} -->
<div class="wp-block-group alignwide addax-reveal-stagger"><?php foreach ( $addax_stats as $addax_stat ) : ?><!-- wp:addax/counter <?php echo wp_json_encode( array( 'number' => $addax_stat[0], 'label' => $addax_stat[1] ), JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP ); ?> /-->

<?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
