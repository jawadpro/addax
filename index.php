<?php

  get_header();
  global $addax_theme_options;
  $blog_style = ( isset( $addax_theme_options['blog-style-option'] ) ) ? $addax_theme_options['blog-style-option'] : 'addax-blog-full';
?>


  <div id="addax-section">

    <div class="container">

      <div class="row">

        <div class="col-md-8">

          <div id="<?php echo $blog_style; ?>">


          <?php

          if( have_posts() ) :

            while( have_posts() ) : the_post();

                get_template_part( 'views/content' , 'blog' );

            endwhile;

          endif;

          ?>

        </div>

      </div>


    <?php get_sidebar(); ?>

    </div>

  </div>

<?php get_footer(); ?>
