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

   /* ================ ADDAX SLIDER FUNCTION ============== */

  if ( ! function_exists( 'addax_page_slider' ) ) {
      function addax_page_slider() {
            global $post;
            $slider_page_meta = esc_attr( get_post_meta( $post->ID , 'page_header_shortcode' ,true ) );
            if( !empty( $slider_page_meta ) )
            {
              echo do_shortcode($slider_page_meta);
            }
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

  /* ================ ADDAX SEARCH WIDGET CUSTOMIZATION ============== */

    function addax_sidebar_search( $form ) {
      $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
      <div>
      <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search Here" />
      <button><i class="fa fa-search" aria-hidden="true"></i></button>
      </div>
      </form>';

      return $form;
  }

  add_filter( 'get_search_form', 'addax_sidebar_search', 100 );


  /* ================ ADDAX TITLE BAR ============== */

  if ( ! function_exists( 'addax_title_bar' ) ) {
    function addax_title_bar( $post_id )
    {

        $title_bar_visible = get_post_meta( $post_id, 'title_bar_show' , true );
        $title_bar_subheading = get_post_meta( $post_id, 'title_bar_subheading' , true );
        $title_bar_bg_color= get_post_meta( $post_id, 'title_bar_bg_color' , true );
        $title_bar_background = get_post_meta( $post_id, 'title_bar_background' , true );
        $title_bar_bg_image = get_post_meta( $post_id, 'title_bar_bg_image' , true );
        $title_bar_txt_color = get_post_meta( $post_id, 'title_bar_txt_color' , true );
        $title_bar_content_position = get_post_meta( $post_id, 'title_bar_content_position' , true );
        $title_bar_bg_parallax = get_post_meta( $post_id, 'title_bar_bg_parallax' , true );

        // TITLE BAR BACKGROUND
        $bg = '';
        if( $title_bar_background == 'color' && !empty( $title_bar_bg_color ) )
        {
          $bg = 'background:' . $title_bar_bg_color . ';';
        }
        if( $title_bar_background == 'image' && !empty( $title_bar_bg_image ) )
        {
            $title_bg_url = wp_get_attachment_image_src( $title_bar_bg_image , 'full' );
            $bg = 'background-image:url(' . $title_bg_url[0] . ');' ;
            $bg .= 'background-size:cover;';
            $bg .= 'background-repeat:no-repeat;';
            $bg .= 'background-position:center;';

            //CHECKING IF BACKGROUND PARALLAX IS ENABLE
            if( $title_bar_bg_parallax == true )
            {
              $bg .= 'background-attachment:fixed;';
            }
        }
      
      // CHECK IF TITLE BAR IS NOT DISABLE AND ITS NOT FRONTPAGE
      if( $title_bar_visible == false && !is_front_page() ) {
      ?>

      <div id="addax-page-title" class="<?php echo $title_bar_content_position; ?>" style="<?php echo $bg; ?>" >
        <div class="container">
          <h1 style="color:<?php echo $title_bar_txt_color; ?> !important;" ><?php echo get_the_title( $post_id ); ?></h1>

          <?php if( !empty( $title_bar_subheading ) ){ ?>
            <h4 style="color:<?php echo $title_bar_txt_color; ?> !important;"><?php esc_html_e( $title_bar_subheading, 'addax' ); ?></h4>
          <?php } ?>
        </div>
      </div>

     <?php
    }
   }
  }


?>
