<?php
/**
 * Title: Services (modern cards)
 * Slug: addax/services-modern
 * Categories: addax, features
 * Keywords: services, features, cards, icons
 * Viewport Width: 1400
 * Description: Dark section with framed service cards and icons. Needs Addax Core.
 *
 * @package Addax
 */

$addax_services = array(
	array( 'desktop', __( 'Websites', 'addax' ), __( 'Responsive sites that load fast and convert well.', 'addax' ) ),
	array( 'mobile', __( 'Mobile apps', 'addax' ), __( 'Native-feeling apps for iOS and Android.', 'addax' ) ),
	array( 'chart-bar', __( 'Analytics', 'addax' ), __( 'Dashboards that turn data into decisions.', 'addax' ) ),
	array( 'megaphone', __( 'Marketing', 'addax' ), __( 'Campaigns that reach the right people.', 'addax' ) ),
	array( 'shield', __( 'Security', 'addax' ), __( 'Hardened hosting, backups and monitoring.', 'addax' ) ),
	array( 'lifesaver', __( 'Support', 'addax' ), __( 'Real people, quick answers, any time.', 'addax' ) ),
);
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Services (modern)"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|50"},"elements":{"heading":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"ink","textColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group has-base-color has-ink-background-color has-text-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"className":"addax-reveal","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group addax-reveal"><!-- wp:paragraph {"align":"center","className":"is-style-addax-eyebrow"} -->
<p class="has-text-align-center is-style-addax-eyebrow"><?php esc_html_e( 'What we do', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Everything you need to grow online', 'addax' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"addax-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group alignwide addax-reveal-stagger"><?php foreach ( $addax_services as $addax_service ) : ?><!-- wp:addax/info-box <?php echo wp_json_encode( array( 'variant' => 'modern', 'icon' => $addax_service[0], 'title' => $addax_service[1], 'text' => $addax_service[2], 'style' => array( 'elements' => array( 'link' => array( 'color' => array( 'text' => 'var:preset|color|base' ) ) ) ) ), JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP ); ?> /-->

<?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
