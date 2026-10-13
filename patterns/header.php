<?php
/**
 * Title: Header
 * Slug: addax/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Logo, centred menu, search and a call-to-action button.
 *
 * @package Addax
 */
?>
<!-- wp:group {"tagName":"div","className":"addax-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group addax-header has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-logo {"width":140,"shouldSyncIcon":false,"className":"addax-logo"} /-->

<!-- wp:navigation {"overlayBackgroundColor":"base","overlayTextColor":"contrast","className":"addax-nav","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'addax' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search', 'addax' ); ?>","buttonText":"<?php echo esc_attr__( 'Search', 'addax' ); ?>","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"className":"addax-header-search"} /-->

<!-- wp:buttons {"className":"addax-header-cta"} -->
<div class="wp-block-buttons addax-header-cta"><!-- wp:button {"className":"is-style-addax-arrow"} -->
<div class="wp-block-button is-style-addax-arrow"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get started', 'addax' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
