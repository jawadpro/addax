<?php
/**
 * Title: Work showcase
 * Slug: addax/work-gallery
 * Categories: addax, portfolio, gallery
 * Keywords: portfolio, work, gallery, projects
 * Viewport Width: 1400
 * Description: Heading and an edge-to-edge gallery of recent work.
 *
 * @package Addax
 */
?>
<!-- wp:group {"tagName":"section","align":"full","metadata":{"name":"Our work"},"anchor":"work","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<section id="work" class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"addax-reveal","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide addax-reveal"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-addax-badge"} -->
<p class="is-style-addax-badge"><?php esc_html_e( 'Portfolio', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Our work', 'addax' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-addax-subheading"} -->
<p class="is-style-addax-subheading"><?php esc_html_e( 'Work that makes us proud', 'addax' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-addax-outline"} -->
<div class="wp-block-button is-style-addax-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'See all work', 'addax' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:gallery {"columns":4,"imageCrop":true,"linkTo":"none","sizeSlug":"full","align":"wide","className":"addax-work-gallery addax-reveal","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<figure class="wp-block-gallery alignwide has-nested-images columns-4 is-cropped addax-work-gallery addax-reveal"><?php for ( $addax_i = 1; $addax_i <= 8; $addax_i++ ) : ?><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/work-' . $addax_i . '.jpg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php endfor; ?></figure>
<!-- /wp:gallery --></section>
<!-- /wp:group -->
