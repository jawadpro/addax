<?php
/**
 * Title: Business header with top bar
 * Slug: addax/header-business
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Top bar with contact details and social icons, logo with three info items, and a full-width menu bar.
 *
 * @package Addax
 */

$addax_info = array(
	array( __( 'Call us', 'addax' ), '+1 (555) 010-2030', 'phone' ),
	array( __( 'Email us', 'addax' ), 'hello@example.com', 'email' ),
	array( __( 'Visit us', 'addax' ), __( '120 Market Street, NY', 'addax' ), 'address' ),
);
?>
<!-- wp:group {"className":"addax-topbar","style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"navy","textColor":"base","fontSize":"x-small","layout":{"type":"constrained"}} -->
<div class="wp-block-group addax-topbar has-base-color has-navy-background-color has-text-color has-background has-link-color has-x-small-font-size" style="padding-top:0.5rem;padding-bottom:0.5rem"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>+1 (555) 010-2030</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>hello@example.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-logo {"width":150,"shouldSyncIcon":false,"className":"addax-logo"} /-->

<!-- wp:group {"className":"addax-header-info","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group addax-header-info"><?php foreach ( $addax_info as $addax_item ) : ?><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"contrast","fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
<p class="has-contrast-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html( $addax_item[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html( $addax_item[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"addax-menubar","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group addax-menubar has-base-color has-primary-background-color has-text-color has-background has-link-color"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0.85rem","bottom":"0.85rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:0.85rem;padding-bottom:0.85rem"><!-- wp:navigation {"overlayBackgroundColor":"navy","overlayTextColor":"base","className":"addax-nav","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} /-->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Type here to search","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"className":"addax-header-search"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
