<?php
/**
 * Title: About (split with image)
 * Slug: addax/about-split
 * Categories: addax, about
 * Keywords: about, story, dna, split, image
 * Viewport Width: 1400
 * Description: Full-width two-column section: story and button on grey, a raised photo on the right.
 *
 * @package Addax
 */
?>
<!-- wp:columns {"align":"full","metadata":{"name":"About"},"style":{"spacing":{"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"6vw","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"base-3"} -->
<div class="wp-block-column is-vertically-aligned-center has-base-3-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:6vw"><!-- wp:heading {"className":"is-style-addax-underline addax-reveal"} -->
<h2 class="wp-block-heading is-style-addax-underline addax-reveal"><?php esc_html_e( 'Our DNA', 'addax' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"addax-reveal","fontSize":"large"} -->
<p class="addax-reveal has-large-font-size"><?php esc_html_e( 'Plenty of agencies share the same what and how. Our partners work with us for our why and our who. We are minds and makers with business sense and creative chops, set on connecting people with what matters most: the experience.', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"addax-reveal"} -->
<div class="wp-block-buttons addax-reveal"><!-- wp:button {"className":"is-style-addax-arrow"} -->
<div class="wp-block-button is-style-addax-arrow"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'See what we stand for', 'addax' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/bg5.jpg' ) ); ?>","dimRatio":0,"isUserOverlayColor":true,"minHeight":420,"className":"addax-split-media is-raised","layout":{"type":"constrained"}} -->
<div class="wp-block-cover addax-split-media is-raised" style="min-height:420px"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bg5.jpg' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
