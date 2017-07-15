<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Addax
 * @since Addax 1.0
 */

get_header(); ?>

<div class="container">

  <div class="row">

    <div class="col-md-12">
      <?php
      // Start the loop.
      while ( have_posts() ) : the_post();

        // Include the page content template.
        the_content();
        //get_template_part( 'views/content', 'page' );

        // End of the loop.
      endwhile;
      ?>

    </div>

  </div>

</div>

<?php get_footer(); ?>
