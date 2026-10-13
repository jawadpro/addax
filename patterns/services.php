<?php
/**
 * Title: Services (info boxes)
 * Slug: addax/services
 * Categories: addax, features
 * Keywords: services, features, info box, icon box
 * Viewport Width: 1400
 * Description: Centred heading and six service boxes with illustrations. Needs Addax Core.
 *
 * @package Addax
 */

$addax_services = array(
	array( __( 'Web development', 'addax' ), __( 'Fast, accessible websites and web apps, built on solid foundations and easy to grow.', 'addax' ) ),
	array( __( 'Cross-browser ready', 'addax' ), __( 'Tested on every modern browser and device, so your audience gets the same great experience.', 'addax' ) ),
	array( __( 'Modular design', 'addax' ), __( 'Design systems and reusable components that keep your brand consistent everywhere.', 'addax' ) ),
	array( __( 'Brand strategy', 'addax' ), __( 'Positioning, naming and identity work that gives your business a clear, confident voice.', 'addax' ) ),
	array( __( 'Digital marketing', 'addax' ), __( 'Search, social and email campaigns measured against the numbers that matter to you.', 'addax' ) ),
	array( __( 'Ongoing support', 'addax' ), __( 'Care plans, updates and quick help whenever you need it, long after launch.', 'addax' ) ),
);
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Services"},"anchor":"services","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<section id="services" class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"className":"addax-reveal","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group addax-reveal"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo wp_kses( __( 'Cross-platform <mark>enterprise</mark> solutions', 'addax' ), array( 'mark' => array() ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"is-style-addax-subheading"} -->
<p class="has-text-align-center is-style-addax-subheading"><?php esc_html_e( 'We automate the tedious parts of your business, so you can focus on the rest.', 'addax' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"addax-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group alignwide addax-reveal-stagger"><?php foreach ( $addax_services as $addax_i => $addax_service ) : ?><!-- wp:addax/info-box <?php echo wp_json_encode( array( 'mediaType' => 'image', 'mediaUrl' => get_theme_file_uri( 'assets/images/service-' . ( $addax_i + 1 ) . '.png' ), 'title' => $addax_service[0], 'text' => $addax_service[1] ), JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP ); ?> /-->

<?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
