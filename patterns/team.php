<?php
/**
 * Title: Team grid
 * Slug: addax/team
 * Categories: addax, team
 * Keywords: team, people, staff, about
 * Viewport Width: 1400
 * Description: Edge-to-edge grid: a heading tile, six team members and a "join us" tile. Needs Addax Core.
 *
 * @package Addax
 */

$addax_team = array(
	array( 'team1.jpg', 'Benjamin Hale', __( 'CEO / Co-founder', 'addax' ) ),
	array( 'team2.jpg', 'Sara Malik', __( 'Creative director', 'addax' ) ),
	array( 'team3.jpg', 'Daniel Okafor', __( 'Lead developer', 'addax' ) ),
	array( 'team4.jpg', 'Amira Chen', __( 'UX designer', 'addax' ) ),
	array( 'team5.jpg', 'Lucas Romero', __( 'Strategist', 'addax' ) ),
	array( 'team6.jpg', 'Hana Ito', __( 'Project manager', 'addax' ) ),
);
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Team"},"align":"full","className":"addax-team-grid addax-reveal","style":{"spacing":{"margin":{"top":"0"},"blockGap":"0px"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"15rem"}} -->
<section class="wp-block-group alignfull addax-team-grid addax-reveal" style="margin-top:0"><!-- wp:group {"className":"is-style-addax-tile","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|40"}}},"backgroundColor":"charcoal","textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-addax-tile has-base-color has-charcoal-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"className":"is-style-addax-underline","textColor":"base"} -->
<h2 class="wp-block-heading is-style-addax-underline has-base-color has-text-color"><?php esc_html_e( 'Meet our team', 'addax' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<?php foreach ( $addax_team as $addax_member ) : ?><!-- wp:addax/team-member <?php echo wp_json_encode( array( 'mediaUrl' => get_theme_file_uri( 'assets/images/' . $addax_member[0] ), 'name' => $addax_member[1], 'role' => $addax_member[2] ), JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP ); ?> /-->

<?php endforeach; ?><!-- wp:group {"className":"is-style-addax-tile","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-addax-tile has-base-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-large-font-size"><a href="#contact"><?php esc_html_e( 'Become part of us', 'addax' ); ?> →</a></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
