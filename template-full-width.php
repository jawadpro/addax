<?php
/*
 * Template Name: Full Width Page 
*/

get_header();

      // Start the loop.
      while ( have_posts() ) : the_post();

        // Include the page content template.
        the_content();
        //get_template_part( 'views/content', 'page' );

        // End of the loop.
      endwhile;

get_footer(); ?>
