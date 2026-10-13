<?php
/**
 * Title: Blog sidebar
 * Slug: addax/sidebar
 * Categories: addax
 * Inserter: no
 * Description: Search, recent posts, categories and tags.
 *
 * @package Addax
 */
?>
<!-- wp:group {"className":"addax-sidebar","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group addax-sidebar"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search the blog","buttonText":"Search","buttonUseIcon":true} /-->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"className":"addax-widget-heading"} -->
<h2 class="wp-block-heading addax-widget-heading"><?php esc_html_e( 'Recent posts', 'addax' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":4,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageSizeSlug":"thumbnail","featuredImageAlign":"left","featuredImageSizeWidth":64,"featuredImageSizeHeight":64,"className":"addax-latest-posts"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"className":"addax-widget-heading"} -->
<h2 class="wp-block-heading addax-widget-heading"><?php esc_html_e( 'Categories', 'addax' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:categories {"showPostCounts":true,"className":"addax-categories"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"className":"addax-widget-heading"} -->
<h2 class="wp-block-heading addax-widget-heading"><?php esc_html_e( 'Tags', 'addax' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:tag-cloud {"smallestFontSize":"0.75rem","largestFontSize":"0.75rem","className":"is-style-outline"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
