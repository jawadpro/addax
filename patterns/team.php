<?php
/**
 * Title: Team
 * Slug: addax/team
 * Categories: addax, team
 * Keywords: team, people, staff, about
 * Viewport Width: 1400
 * Description: Badge, heading and a grid of team members with rounded portraits.
 *
 * @package Addax
 */

$addax_team = array(
	array( 'Benjamin Hale', __( 'CEO / Co-founder', 'addax' ), 'team-1.jpg' ),
	array( 'Sara Malik', __( 'Creative director', 'addax' ), 'team-2.jpg' ),
	array( 'Daniel Okafor', __( 'Lead developer', 'addax' ), 'team-4.jpg' ),
	array( 'Amira Chen', __( 'UX designer', 'addax' ), 'team-5.jpg' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","metadata":{"name":"Team"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","className":"addax-reveal","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide addax-reveal"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-addax-badge"} -->
<p class="is-style-addax-badge"><?php esc_html_e( 'Our team', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'The people behind the work', 'addax' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-addax-outline"} -->
<div class="wp-block-button is-style-addax-outline"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Join the team', 'addax' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"addax-reveal-stagger","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
<div class="wp-block-group alignwide addax-reveal-stagger"><?php foreach ( $addax_team as $addax_i => $addax_member ) : ?><!-- wp:group {"className":"addax-member","style":{"spacing":{"blockGap":"0.2rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group addax-member"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
<figure class="wp-block-image size-full" style="margin-bottom:var(--wp--preset--spacing--20)"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $addax_member[2] ) ); ?>" alt="<?php echo esc_attr( $addax_member[0] ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $addax_member[0] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html( $addax_member[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
