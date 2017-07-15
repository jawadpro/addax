<?php
/*
* Addax Footer Content
*/

global $addax_theme_options;

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


          <div class="row">


            <div class="col-sm-12">


                <div class="addax-footer-social style1">

                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>

                  </div>


              </div>


          </div>



          <div class="row">


            <div class="col-sm-12">

                <div class="footer-credits">
                    <h4>Addax , 2016 All Rights Reserved</h4>
                  </div>

              </div>


          </div>

      </div>

  </footer>
