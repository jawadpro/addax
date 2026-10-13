<?php
/**
 * Title: Client logos
 * Slug: addax/clients
 * Categories: addax
 * Keywords: clients, logos, partners, brands
 * Viewport Width: 1400
 * Description: A quiet strip of client logos with a short caption.
 *
 * @package Addax
 */

$addax_clients = array( 'Northwind', 'Fieldstone', 'Bloom & Co', 'Atlas', 'Lumen', 'Quarry' );
?>
<!-- wp:group {"tagName":"section","align":"full","metadata":{"name":"Clients"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|30"},"border":{"top":{"color":"var:preset|color|base-3","width":"1px"},"bottom":{"color":"var:preset|color|base-3","width":"1px"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--base-3);border-top-width:1px;border-bottom-color:var(--wp--preset--color--base-3);border-bottom-width:1px;margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","className":"is-style-addax-eyebrow","textColor":"muted"} -->
<p class="has-text-align-center is-style-addax-eyebrow has-muted-color has-text-color"><?php esc_html_e( 'Some great companies that worked with us', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"wide","className":"addax-logo-row addax-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide addax-logo-row addax-reveal-stagger"><?php foreach ( $addax_clients as $addax_i => $addax_client ) : ?><!-- wp:image {"height":"30px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/logo-' . ( $addax_i + 1 ) . '.png' ) ); ?>" alt="<?php echo esc_attr( $addax_client ); ?>" style="height:30px"/></figure>
<!-- /wp:image -->

<?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
