<?php
/**
 * Title: FAQ (accordion)
 * Slug: addax/faq
 * Categories: addax, text
 * Keywords: faq, questions, accordion, toggle
 * Viewport Width: 1400
 * Description: Two-column FAQ: intro on the left, accordion questions on the right. Uses only core blocks.
 *
 * @package Addax
 */

$addax_faq = array(
	array( __( 'How long does a typical website take?', 'addax' ), __( 'Most marketing sites take six to ten weeks from kickoff to launch. Larger web apps are planned in phases so you see progress every two weeks.', 'addax' ) ),
	array( __( 'Can I edit the site myself afterwards?', 'addax' ), __( 'Yes. We build on the WordPress block editor and hand over a short video guide, so your team can update pages without calling us.', 'addax' ) ),
	array( __( 'Do you work with existing brands?', 'addax' ), __( 'Absolutely. We can work within your current guidelines, refresh them, or start from a blank page.', 'addax' ) ),
	array( __( 'What happens after launch?', 'addax' ), __( 'You can choose a care plan for updates, backups and small improvements, or take it from there yourself.', 'addax' ) ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","metadata":{"name":"FAQ"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:paragraph {"className":"is-style-addax-badge"} -->
<p class="is-style-addax-badge"><?php esc_html_e( 'FAQ', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Questions, answered', 'addax' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Can’t find what you’re looking for? Get in touch and a real person will reply within one working day.', 'addax' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><?php foreach ( $addax_faq as $addax_i => $addax_item ) : ?><!-- wp:details {"className":"is-style-addax-accordion"<?php echo 0 === $addax_i ? ',"showContent":true' : ''; ?>} -->
<details class="wp-block-details is-style-addax-accordion"<?php echo 0 === $addax_i ? ' open' : ''; ?>><summary><?php echo esc_html( $addax_item[0] ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( $addax_item[1] ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<?php endforeach; ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
