<?php
/**
 * Title: Single project layout
 * Slug: addax/project-single
 * Inserter: no
 * Description: Project image, content, a details card bound to the project fields, and more projects.
 *
 * @package Addax
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:post-featured-image {"align":"wide","style":{"border":{"radius":"8px"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} /-->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-content {"layout":{"type":"default"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"className":"addax-project-facts is-style-addax-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group addax-project-facts is-style-addax-card" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":2,"className":"addax-widget-heading"} -->
<h2 class="wp-block-heading addax-widget-heading"><?php esc_html_e( 'Project details', 'addax' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"addax-fact","style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group addax-fact"><!-- wp:paragraph {"className":"is-style-addax-eyebrow"} -->
<p class="is-style-addax-eyebrow"><?php esc_html_e( 'Client', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"addax_project_client"}}}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"addax-fact","style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group addax-fact"><!-- wp:paragraph {"className":"is-style-addax-eyebrow"} -->
<p class="is-style-addax-eyebrow"><?php esc_html_e( 'Year', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"addax_project_year"}}}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"addax-fact","style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group addax-fact"><!-- wp:paragraph {"className":"is-style-addax-eyebrow"} -->
<p class="is-style-addax-eyebrow"><?php esc_html_e( 'Services', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"addax_project_services"}}}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"addax-fact","style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group addax-fact"><!-- wp:paragraph {"className":"is-style-addax-eyebrow"} -->
<p class="is-style-addax-eyebrow"><?php esc_html_e( 'Category', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"adx-project-category"} /--></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-addax-arrow","metadata":{"bindings":{"url":{"source":"core/post-meta","args":{"key":"addax_project_url"}}}}} -->
<div class="wp-block-button is-style-addax-arrow"><a class="wp-block-button__link wp-element-button" href="#" target="_blank" rel="noreferrer noopener"><?php esc_html_e( 'Visit live site', 'addax' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<section class="wp-block-group has-base-2-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","className":"is-style-addax-underline"} -->
<h2 class="wp-block-heading has-text-align-center is-style-addax-underline"><?php esc_html_e( 'More work', 'addax' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:addax/projects {"count":4,"columns":4,"showFilters":false,"align":"wide"} /--></section>
<!-- /wp:group -->
