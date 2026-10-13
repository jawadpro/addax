<?php
/**
 * Title: Our work (filterable projects)
 * Slug: addax/projects
 * Categories: addax, portfolio
 * Keywords: portfolio, projects, work, gallery
 * Viewport Width: 1400
 * Description: Heading and a filterable grid of your Projects. Needs Addax Core.
 *
 * @package Addax
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Our work"},"anchor":"work","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<section id="work" class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"addax-reveal","style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide addax-reveal"><!-- wp:heading {"className":"is-style-addax-underline"} -->
<h2 class="wp-block-heading is-style-addax-underline"><?php esc_html_e( 'Our work', 'addax' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-addax-subheading"} -->
<p class="is-style-addax-subheading"><?php esc_html_e( 'Work that makes us proud', 'addax' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:addax/projects {"count":8,"columns":4,"align":"wide"} /--></section>
<!-- /wp:group -->
