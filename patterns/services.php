<?php
/**
 * Title: Services
 * Slug: addax/services
 * Categories: addax, features
 * Keywords: services, features, cards
 * Viewport Width: 1400
 * Description: Badge, heading and six pastel service cards with icons.
 *
 * @package Addax
 */

$addax_services = array(
	array( 'peach', __( 'Web development', 'addax' ), __( 'Fast, accessible websites and web apps, built on solid foundations and easy to grow.', 'addax' ) ),
	array( 'sky', __( 'Cross-browser ready', 'addax' ), __( 'Tested on every modern browser and device, so everyone gets the same great experience.', 'addax' ) ),
	array( 'mint', __( 'Design systems', 'addax' ), __( 'Reusable components and clear guidelines that keep your brand consistent everywhere.', 'addax' ) ),
	array( 'lilac', __( 'Growth analytics', 'addax' ), __( 'Clear dashboards and honest reporting on the numbers that actually move your business.', 'addax' ) ),
	array( 'sky', __( 'Email marketing', 'addax' ), __( 'Campaigns and automations that reach the right people at the right moment.', 'addax' ) ),
	array( 'peach', __( 'Ongoing support', 'addax' ), __( 'Care plans, updates and quick help whenever you need it, long after launch.', 'addax' ) ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","metadata":{"name":"Services"},"anchor":"services","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<section id="services" class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"className":"addax-reveal","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group addax-reveal"><!-- wp:paragraph {"align":"center","className":"is-style-addax-badge"} -->
<p class="has-text-align-center is-style-addax-badge"><?php esc_html_e( 'What we do', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Everything you need to launch and grow', 'addax' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"is-style-addax-subheading"} -->
<p class="has-text-align-center is-style-addax-subheading"><?php esc_html_e( 'One team for strategy, design, build and the long run after launch.', 'addax' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"addax-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<div class="wp-block-group alignwide addax-reveal-stagger"><?php foreach ( $addax_services as $addax_i => $addax_service ) : ?><!-- wp:group {"className":"addax-feature","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"<?php echo esc_attr( $addax_service[0] ); ?>","layout":{"type":"default"}} -->
<div class="wp-block-group addax-feature has-<?php echo esc_attr( $addax_service[0] ); ?>-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none","className":"addax-icon-tile"} -->
<figure class="wp-block-image size-full is-resized addax-icon-tile"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/service-' . ( $addax_i + 1 ) . '.svg' ) ); ?>" alt="" style="width:40px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html( $addax_service[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $addax_service[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
