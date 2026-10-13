<?php
/**
 * Title: Hero with floating avatars
 * Slug: addax/hero
 * Categories: addax, banner
 * Keywords: hero, banner, header, landing
 * Viewport Width: 1400
 * Description: Centred headline on a lavender glow, with a badge, two buttons, floating team avatars and a logo strip.
 *
 * @package Addax
 */

$addax_orbit = array( 'team-1.jpg', 'team-2.jpg', 'team-6.jpg', 'team-3.jpg', 'team-4.jpg', 'team-5.jpg', 'gem-1.png', 'gem-2.png' );
$addax_logos = array( 'Northwind', 'Fieldstone', 'Bloom & Co', 'Atlas', 'Lumen' );
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Hero"},"align":"full","className":"addax-hero is-style-addax-glow","style":{"spacing":{"padding":{"top":"calc(var(--wp--preset--spacing--70) + 80px)","bottom":"var:preset|spacing|60"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"820px"}} -->
<section class="wp-block-group alignfull addax-hero is-style-addax-glow" style="margin-top:0;padding-top:calc(var(--wp--preset--spacing--70) + 80px);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"className":"addax-hero__orbit","layout":{"type":"default"}} -->
<div class="wp-block-group addax-hero__orbit"><?php foreach ( $addax_orbit as $addax_file ) : ?><!-- wp:image {"sizeSlug":"full","linkDestination":"none"<?php echo false !== strpos( $addax_file, 'gem' ) ? ',"className":"addax-gem"' : ''; ?>} -->
<figure class="wp-block-image size-full<?php echo false !== strpos( $addax_file, 'gem' ) ? ' addax-gem' : ''; ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $addax_file ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","className":"is-style-addax-badge addax-reveal"} -->
<p class="has-text-align-center is-style-addax-badge addax-reveal"><strong><?php esc_html_e( 'New', 'addax' ); ?></strong> <?php esc_html_e( 'Design, build and grow with one team', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"className":"addax-reveal"} -->
<h1 class="wp-block-heading has-text-align-center addax-reveal"><?php echo wp_kses( __( 'Take your brand to the <mark>next level.</mark>', 'addax' ), array( 'mark' => array() ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"is-style-addax-subheading addax-reveal"} -->
<p class="has-text-align-center is-style-addax-subheading addax-reveal"><?php esc_html_e( 'Strategy, design and development for teams who want a website that works as hard as they do.', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"addax-reveal","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons addax-reveal" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button {"className":"is-style-addax-arrow"} -->
<div class="wp-block-button is-style-addax-arrow"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Start a project', 'addax' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-addax-outline"} -->
<div class="wp-block-button is-style-addax-outline"><a class="wp-block-button__link wp-element-button" href="#work"><?php esc_html_e( 'See our work', 'addax' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"align":"wide","className":"addax-reveal","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide addax-reveal" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","className":"is-style-addax-eyebrow","textColor":"muted"} -->
<p class="has-text-align-center is-style-addax-eyebrow has-muted-color has-text-color"><?php esc_html_e( 'Trusted by 150+ teams who care about impact', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"addax-logo-row","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group addax-logo-row"><?php foreach ( $addax_logos as $addax_i => $addax_logo ) : ?><!-- wp:image {"height":"30px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/logo-' . ( $addax_i + 1 ) . '.png' ) ); ?>" alt="<?php echo esc_attr( $addax_logo ); ?>" style="height:30px"/></figure>
<!-- /wp:image -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
