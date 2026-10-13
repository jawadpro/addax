<?php
/**
 * Title: Skills (donut charts)
 * Slug: addax/skills
 * Categories: addax
 * Keywords: skills, progress, donut, chart, expertise
 * Viewport Width: 1400
 * Description: Four animated donut charts over a large "Skills" watermark. Needs Addax Core.
 *
 * @package Addax
 */

$addax_skills = array(
	array( 'code', 'PHP', 80 ),
	array( 'brush', 'CSS3', 90 ),
	array( 'layout', 'HTML5', 95 ),
	array( 'color', __( 'Illustration', 'addax' ), 100 ),
);
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Skills"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<section class="wp-block-group has-base-2-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"className":"is-style-addax-watermark"} -->
<p class="is-style-addax-watermark"><?php esc_html_e( 'Skills', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"wide","className":"addax-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"11rem"}} -->
<div class="wp-block-group alignwide addax-reveal-stagger"><?php foreach ( $addax_skills as $addax_skill ) : ?><!-- wp:addax/progress <?php echo wp_json_encode( array( 'variant' => 'donut', 'icon' => $addax_skill[0], 'label' => $addax_skill[1], 'value' => $addax_skill[2], 'barColor' => '#00c4e3' ), JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP ); ?> /-->

<?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
