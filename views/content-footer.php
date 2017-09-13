<?php
/*
* Addax Footer Content
*/

global $addax_theme_options;
$copyright = ( isset( $addax_theme_options['footer-copyright-text'] ) ) ? $addax_theme_options['footer-copyright-text'] : 'Addax , 2016 All Rights Reserved';
?>
<footer id="addax-footer">

      <div class="container">

          <?php if( isset( $addax_theme_options['footer-widget-sec'] ) && $addax_theme_options['footer-widget-sec'] == true ) { ?>

          <div class="row">

            <?php if( $addax_theme_options['footer-widgets-layout'] == 2 ) { ?>
              <div class="col-md-6"><?php dynamic_sidebar( 'addax_footer_one' ); ?></div>
              <div class="col-md-6"><?php dynamic_sidebar( 'addax_footer_two' ); ?></div>
            <?php } ?>

            <?php if( $addax_theme_options['footer-widgets-layout'] == 3 ) { ?>
              <div class="col-md-4"><?php dynamic_sidebar( 'addax_footer_one' ); ?></div>
              <div class="col-md-4"><?php dynamic_sidebar( 'addax_footer_two' ); ?></div>
              <div class="col-md-4"><?php dynamic_sidebar( 'addax_footer_three' ); ?></div>
            <?php } ?>

            <?php if( $addax_theme_options['footer-widgets-layout'] == 4 ) { ?>
              <div class="col-md-3"><?php dynamic_sidebar( 'addax_footer_one' ); ?></div>
              <div class="col-md-3"><?php dynamic_sidebar( 'addax_footer_two' ); ?></div>
              <div class="col-md-3"><?php dynamic_sidebar( 'addax_footer_three' ); ?></div>
              <div class="col-md-3"><?php dynamic_sidebar( 'addax_footer_four' ); ?></div>
            <?php } ?>

          </div>

          <?php } ?>

          </div>

          <?php if( isset( $addax_theme_options['footer-social-sec'] ) && $addax_theme_options['footer-social-sec'] == true ) { ?>
          <div class="row">


            <div class="col-sm-12">


                <div class="addax-footer-social style1">

                    <?php addax_social_icons(); ?>

                  </div>


              </div>


          </div>

          <?php } ?>



          <div class="row">


            <div class="col-sm-12">

                <div class="footer-credits">
                    <h4><?php echo _e( $copyright, 'addax' ); ?></h4>
                  </div>

              </div>


          </div>

      </div>

  </footer>
