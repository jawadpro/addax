<?php
/**
 * Title: About with image
 * Slug: addax/about-split
 * Categories: addax, about
 * Keywords: about, story, split, image, checklist
 * Viewport Width: 1400
 * Description: Rounded image beside a badge, heading, story, checklist and button.
 *
 * @package Addax
 */
?>
<!-- wp:group {"tagName":"section","align":"full","metadata":{"name":"About"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"addax-reveal","style":{"border":{"radius":"24px"}}} -->
<figure class="wp-block-image size-full has-custom-border addax-reveal"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/about.jpg' ) ); ?>" alt="" style="border-radius:24px;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"className":"is-style-addax-badge"} -->
<p class="is-style-addax-badge"><?php esc_html_e( 'About us', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'A small studio with a big focus on outcomes', 'addax' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-addax-subheading"} -->
<p class="is-style-addax-subheading"><?php esc_html_e( 'Plenty of agencies share the same what and how. Our partners work with us for our why: we connect people with what matters most, the experience.', 'addax' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-addax-check"} -->
<ul class="wp-block-list is-style-addax-check"><!-- wp:list-item -->
<li><?php esc_html_e( 'Senior people on every project, no hand-offs', 'addax' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Fixed scopes and honest timelines', 'addax' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Accessible, fast and easy to edit', 'addax' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-addax-arrow"} -->
<div class="wp-block-button is-style-addax-arrow"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'More about us', 'addax' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
