<?php

   /* ================ ADDAX HEADER FUNCTION ============== */

  if ( ! function_exists( 'addax_header' ) ) {
      function addax_header() {
              get_template_part( 'views/content' , 'header' );
          }
  }


  /* ================ ADDAX FOOTER FUNCTION ============== */

 if ( ! function_exists( 'addax_footer' ) ) {
     function addax_footer() {
             get_template_part( 'views/content' , 'footer' );
         }
 }


  /* ================ ADDAX MAIN MENU ============== */

  if ( ! function_exists( 'addax_main_menu' ) ) {
      function addax_main_menu()
      {
        $locations = get_nav_menu_locations();

          $addax_header_one = array(
            'theme_location' => 'main-menu',
            'container' => '',
            'fallback_cb' => true,
            'items_wrap' => '%3$s',
            'walker' => new Addax_walker_nav_menu(),
          );
          wp_nav_menu( $addax_header_one );

      }
  }



?>
