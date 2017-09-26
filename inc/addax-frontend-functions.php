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

   /* ================ ADDAX SOCIAL ICONS FUNCTION ============== */

  if ( ! function_exists( 'addax_social_icons' ) ) {
      function addax_social_icons()
      {
        global $addax_theme_options;
      ?>

        <div class="social-icons">
          <?php if( !empty( $addax_theme_options['facebook-link'] ) ) : ?><a href="<?php echo $addax_theme_options['facebook-link']; ?>" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a><?php endif; ?>
          <?php if( !empty( $addax_theme_options['twitter-link'] ) ) : ?><a href="<?php echo $addax_theme_options['twitter-link']; ?>" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a><?php endif; ?>
          <?php if( !empty( $addax_theme_options['google-link'] ) ) : ?><a href="<?php echo $addax_theme_options['google-link']; ?>" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google"></i></a><?php endif; ?>
          <?php if( !empty( $addax_theme_options['pinterest-link'] ) ) : ?><a href="<?php echo $addax_theme_options['pinterest-link']; ?>" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a><?php endif; ?>
          <?php if( !empty( $addax_theme_options['linkedin-link'] ) ) : ?><a href="<?php echo $addax_theme_options['linkedin-link']; ?>" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a><?php endif; ?>
          <?php if( !empty( $addax_theme_options['youtube-link'] ) ) : ?><a href="<?php echo $addax_theme_options['youtube-link']; ?>" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a><?php endif; ?>
        </div>
       <?php }
  }



   /* ================ ADDAX SLIDER FUNCTION ============== */

  if ( ! function_exists( 'addax_page_slider' ) ) {
      function addax_page_slider() {
            global $post;
            $slider = get_post_meta( $post->ID , 'page_header_shortcode' ,true );
            $hide_nav = get_post_meta( $post->ID , 'hide_slider_navigation' ,true );
            $hide_down_arrow = get_post_meta( $post->ID , 'hide_slider_scroll_arrow' ,true );

            if( $hide_nav == true )
            {
              $hide_nav = true;
            }
            else {
              $hide_nav = false;
            }

            if( $hide_down_arrow == true )
            {
              $hide_down_arrow = true;
            }
            else {
              $hide_down_arrow = false;
            }

            if( !empty( $slider ) )
            {
              $shortcode = '[addax_slider slider="'.$slider.'" hide_nav="'.$hide_nav.'" hide_scroll_arrow="'.$hide_down_arrow.'"]';
              $shortcode;
              echo do_shortcode($shortcode);
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
          // 'walker' => new Addax_walker_nav_menu(),
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
        global $addax_theme_options;
        $title_bar_visible = get_post_meta( $post_id, 'title_bar_show' , true );
        $title_bar_subheading = get_post_meta( $post_id, 'title_bar_subheading' , true );
        $title_bar_bg_color= get_post_meta( $post_id, 'title_bar_bg_color' , true );
        $title_bar_background = get_post_meta( $post_id, 'title_bar_background' , true );
        $title_bar_bg_image = get_post_meta( $post_id, 'title_bar_bg_image' , true );
        $title_bar_txt_color = get_post_meta( $post_id, 'title_bar_txt_color' , true );
        $title_bar_content_position = get_post_meta( $post_id, 'title_bar_content_position' , true );
        $title_bar_bg_parallax = get_post_meta( $post_id, 'title_bar_bg_parallax' , true );
        $page_title = '';

        // TITLE BAR TEXT
        $page_subtitle = '';
        if( is_home() ):
          $page_title =  get_the_title( get_option('page_for_posts', true) );
        elseif( is_single() ):
          $page_title = $addax_theme_options['single-post-title-text'];
        elseif( is_page() ) :
          $page_title = get_the_title( $post_id );
        elseif( is_category() ) :
          $page_title = single_cat_title('', false);
        elseif( is_archive() && !is_tax() && !is_category() && !is_tag() ) :
          $page_title = get_the_archive_title();
        endif;

        // TITLE BAR BACKGROUND
        $bg = '';
        if( $title_bar_background == 'color' && !empty( $title_bar_bg_color ) )
        {
          $bg = 'background:' . $title_bar_bg_color . ';';
        }
        elseif( $title_bar_background == 'image' && !empty( $title_bar_bg_image ) )
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
        else
        {
            $bg = 'background:#0076FF;';
        }

      // CHECK IF TITLE BAR IS NOT DISABLE AND ITS NOT FRONTPAGE
      if( $title_bar_visible == false && !is_front_page() || is_home() ) { ?>

      <div id="addax-page-title" class="<?php echo $title_bar_content_position; ?>" style="<?php echo $bg; ?>" >
        <div class="container">
          <?php if( !empty( $page_title ) ){ ?>
          <h1 style="color:<?php echo $title_bar_txt_color; ?> !important;" ><?php esc_html_e( $page_title, 'addax' ); ?></h1>
          <?php } ?>

          <?php if( !empty( $title_bar_subheading ) ){ ?>
            <h4 style="color:<?php echo $title_bar_txt_color; ?> !important;"><?php esc_html_e( $title_bar_subheading, 'addax' ); ?></h4>
          <?php } ?>

          <?php addax_breadcrumbs(); ?>
        </div>
      </div>

     <?php
    }
   }
  }

  /* ================ ADDAX PAGINATION ============== */

  function addax_pagination_links()
  {
    global $wp_query;

    $big = 999999999; // need an unlikely integer

    echo paginate_links( array(
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format' => '?paged=%#%',
      'current' => max( 1, get_query_var('paged') ),
      'total' => $wp_query->max_num_pages
    ) );
  }


  /* ================ ADDAX BREADCRUMBS ============== */

  function addax_breadcrumbs() {

      // Settings
      $separator          = '&gt;';
      $breadcrums_id      = 'breadcrumbs';
      $breadcrums_class   = 'breadcrumbs';
      $home_title         = 'Home';

      // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
      $custom_taxonomy    = 'product_cat';

      // Get the query & post information
      global $post,$wp_query;

      // Do not display on the homepage
      if ( !is_front_page() ) {

          // Build the breadcrums
          echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';

          // Home page
          echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
          echo '<li class="separator separator-home"> ' . $separator . ' </li>';

          if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {

              echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . get_the_archive_title() . '</strong></li>';

          } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {

              // If post is a custom post type
              $post_type = get_post_type();

              // If it is a custom post type display name and link
              if($post_type != 'post') {

                  $post_type_object = get_post_type_object($post_type);
                  $post_type_archive = get_post_type_archive_link($post_type);

                  echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                  echo '<li class="separator"> ' . $separator . ' </li>';

              }

              $custom_tax_name = get_queried_object()->name;
              echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';

          } else if ( is_single() ) {

              // If post is a custom post type
              $post_type = get_post_type();

              // If it is a custom post type display name and link
              if($post_type != 'post') {

                  $post_type_object = get_post_type_object($post_type);
                  $post_type_archive = get_post_type_archive_link($post_type);

                  echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                  echo '<li class="separator"> ' . $separator . ' </li>';

              }

              // Get post category info
              $category = get_the_category();

              if(!empty($category)) {

                  // Get last category post is in
                  $catArray = array_values($category);
                  $last_category = end($catArray);

                  // Get parent any categories and create array
                  $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                  $cat_parents = explode(',',$get_cat_parents);

                  // Loop through parent categories and store in variable $cat_display
                  $cat_display = '';
                  foreach($cat_parents as $parents) {
                      $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                      $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
                  }

              }

              // If it's a custom post type within a custom taxonomy
              $taxonomy_exists = taxonomy_exists($custom_taxonomy);
              if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {

                  $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                  $cat_id         = $taxonomy_terms[0]->term_id;
                  $cat_nicename   = $taxonomy_terms[0]->slug;
                  $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                  $cat_name       = $taxonomy_terms[0]->name;

              }

              // Check if the post is in a category
              if(!empty($last_category)) {
                  echo $cat_display;
                  echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

              // Else if post is in a custom taxonomy
              } else if(!empty($cat_id)) {

                  echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                  echo '<li class="separator"> ' . $separator . ' </li>';
                  echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

              } else {

                  echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

              }

          } else if ( is_category() ) {

              // Category page
              echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';

          } else if ( is_home() ) {

            echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title( get_option('page_for_posts', true) ) . '"> ' . get_the_title( get_option('page_for_posts', true) ) . '</strong></li>';

          }else if ( is_page() ) {

              // Standard page
              if( $post->post_parent ){

                  // If child page, get parents
                  $anc = get_post_ancestors( $post->ID );

                  // Get parents in the right order
                  $anc = array_reverse($anc);

                  // Parent page loop
                  if ( !isset( $parents ) ) $parents = null;
                  foreach ( $anc as $ancestor ) {
                      $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                      $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                  }

                  // Display parent pages
                  echo $parents;

                  // Current page
                  echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';

              } else {

                  // Just display current page if not parents
                  echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';

              }

          } else if ( is_tag() ) {

              // Tag page

              // Get tag information
              $term_id        = get_query_var('tag_id');
              $taxonomy       = 'post_tag';
              $args           = 'include=' . $term_id;
              $terms          = get_terms( $taxonomy, $args );
              $get_term_id    = $terms[0]->term_id;
              $get_term_slug  = $terms[0]->slug;
              $get_term_name  = $terms[0]->name;

              // Display the tag name
              echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';

          } elseif ( is_day() ) {

              // Day archive

              // Year link
              echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
              echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

              // Month link
              echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
              echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';

              // Day display
              echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';

          } else if ( is_month() ) {

              // Month Archive

              // Year link
              echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
              echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

              // Month display
              echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';

          } else if ( is_year() ) {

              // Display year archive
              echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';

          } else if ( is_author() ) {

              // Auhor archive

              // Get the author information
              global $author;
              $userdata = get_userdata( $author );

              // Display author name
              echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';

          } else if ( get_query_var('paged') ) {

              // Paginated archives
              echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';

          } else if ( is_search() ) {

              // Search results page
              echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';

          } elseif ( is_404() ) {

              // 404 page
              echo '<li>' . 'Error 404' . '</li>';
          }


          echo '</ul>';

      }

  }


  /* ================ ADDAX EXCERPT SETTING ============== */

  function addax_excerpt_length( $length ) {
      return 20;
  }
  add_filter( 'excerpt_length', 'addax_excerpt_length', 999 );

  function addax_excerpt_more( $more ) {
    return '.....';
  }
  add_filter('excerpt_more', 'addax_excerpt_more');


  /* ================ ADDAX ARCHIVE TITLE ============== */

  add_filter( 'get_the_archive_title', function ($title) {

  if ( is_category() ) {

          $title = single_cat_title( '', false );

      } elseif ( is_tag() ) {

          $title = single_tag_title( '', false );

      } elseif ( is_author() ) {

          $title = get_the_author();

      }

      elseif ( is_date() ) {

          $title = get_the_date();

      }

  return $title;

});

/* ================ ADDAX CUSTOM TAXONOMY TERMS ============== */

  function addax_get_custom_terms($tax) {
  global $wpdb;

  $out = array();

  $a = $wpdb->get_results($wpdb->prepare("SELECT t.name,t.slug,
    t.term_group,x.term_taxonomy_id,x.term_id,x.taxonomy,x.description,x.parent,x.count
    FROM {$wpdb->prefix}term_taxonomy x LEFT JOIN {$wpdb->prefix}terms t ON (t.term_id = x.term_id)
    WHERE x.taxonomy=%s;",$tax));

  foreach ($a as $b) {
   $obj = new stdClass();
   $obj->term_id = $b->term_id;
   $obj->name = $b->name;
   $obj->slug = $b->slug;
   $obj->term_group = $b->term_group;
   $obj->term_taxonomy_id = $b->term_taxonomy_id;
   $obj->taxonomy = $b->taxonomy;
   $obj->description = $b->description;
   $obj->parent = $b->parent;
   $obj->count = $b->count;
   $out[] = $obj;
  }

return $out;
}


?>
