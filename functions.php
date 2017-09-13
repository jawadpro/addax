<?php
/**
* Made with love - Addax v1.0
*/

  /* ================ ADDAX TEMPLATE URL CONSTANT ============== */

  define( 'ADDAX_TEMPLATE_PATH' , get_template_directory() );
  define( 'ADDAX_TEMPLATE_URI' , get_template_directory_uri() );

  /* ================ ADDAX INCLUDE FILES ============== */

   require_once( ADDAX_TEMPLATE_PATH . '/inc/addax-walker-menu.php' );
   require_once( ADDAX_TEMPLATE_PATH . '/inc/addax-frontend-functions.php' );
   require_once( ADDAX_TEMPLATE_PATH . '/inc/addax-custom-style.php' );
   require_once( ADDAX_TEMPLATE_PATH . '/inc/addax-metabox-fields.php' );
   require_once( ADDAX_TEMPLATE_PATH . '/inc/addax-register-sidebars.php' );

  /* ================ ADDAX STYLES & SCRIPTS ============== */

  add_action( 'wp_enqueue_scripts' , 'addax_style_scripts_enqueue' );
  function addax_style_scripts_enqueue()
  {
    // Addax stylsheets
    wp_enqueue_style( 'style-css' , ADDAX_TEMPLATE_URI . '/style.css' );
    wp_enqueue_style( 'addax-style-css' , ADDAX_TEMPLATE_URI . '/assets/css/style.css' );
    wp_enqueue_style( 'addax-bootstrap-css' , ADDAX_TEMPLATE_URI . '/bootstrap/css/bootstrap.css' );
    wp_enqueue_style( 'addax-bootstrap-smart-menu-css' , ADDAX_TEMPLATE_URI . '/bootstrap/css/jquery.smartmenus.bootstrap.css' );
    wp_enqueue_style( 'addax-owl-carousel-css' , ADDAX_TEMPLATE_URI . '/assets/css/owl.carousel.css' );
    wp_enqueue_style( 'addax-animate-css' , ADDAX_TEMPLATE_URI . '/assets/css/animate.css' );
    wp_enqueue_style( 'addax-google-railway-font' , 'https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,700,700i,800,800i' );
    wp_enqueue_style( 'addax-google-roboto-font' , 'https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700' );
    wp_enqueue_style( 'addax-design-ico-css' , ADDAX_TEMPLATE_URI . '/assets/css/design-ico.css' );
    wp_enqueue_style( 'addax-font-awesome' , 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );

    //Addax Scripts
    wp_enqueue_script( 'addax-bootstrap-js' , ADDAX_TEMPLATE_URI . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '' , true  );
    wp_enqueue_script( 'addax-owl-carousel-js' , ADDAX_TEMPLATE_URI . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '' , true  );
    wp_enqueue_script( 'addax-wow-min-js' , ADDAX_TEMPLATE_URI . '/assets/js/wow.min.js', array( 'jquery' ), '' , true  );
    wp_enqueue_script( 'addax-jquery-waypoints-js' , ADDAX_TEMPLATE_URI . '/assets/js/jquery.waypoints.min.js', array( 'jquery' ), '' , true  );
    //wp_enqueue_script( 'addax-map-js' , ADDAX_TEMPLATE_URI . '/assets/js/map.js', array( 'jquery' ), '' , true  );
    //wp_enqueue_script( 'addax-map-api-js' , 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB_FOwS1sfvZkhjueoLFRY0s-j_k1CbKn8', array( 'jquery' ), '' , true  );
    wp_enqueue_script( 'addax-smart-menus-js' , ADDAX_TEMPLATE_URI . '/bootstrap/js/jquery.smartmenus.min.js' , array( 'jquery' ), '' , true  );
    wp_enqueue_script( 'addax-smart-menus-bts-js' , ADDAX_TEMPLATE_URI . '/bootstrap/js/jquery.smartmenus.bootstrap.js' , array( 'jquery' ), '' , true  );
    wp_enqueue_script( 'addax-mixit-up-js' , ADDAX_TEMPLATE_URI . '/assets/js/mixitup.min.js' , array( 'jquery' ), '' , true  );
    wp_enqueue_script( 'addax-macy-js' , ADDAX_TEMPLATE_URI . '/assets/js/macy.js', array( 'jquery' ), '' , true  );
    wp_enqueue_script( 'addax-custom-js' , ADDAX_TEMPLATE_URI . '/assets/js/custom.js', array( 'jquery' ), '' , true  );

    if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') ) {
      wp_enqueue_script( 'comment-reply' );
    }

  }

  //ADMIN ENQUEUE
  add_action( 'admin_enqueue_scripts', 'addax_metabox_styling' );
  function addax_metabox_styling()
  {
    wp_register_style( 'addax-mb-styling', ADDAX_TEMPLATE_URI . '/assets/css/addax-admin.css' );
    wp_enqueue_style( 'addax-mb-styling' );
  }

    /* ================ ADDAX THEME SUPPORTS ============== */

    add_theme_support( 'menu' );
    add_theme_support( 'widgets' );
    add_theme_support( 'post-thumbnails' );

    /* ================ ADDAX MENU LOCATIONS ============== */

    register_nav_menus( array(
  		'main-menu' => esc_html__( 'Main Menu', 'addax' ),
  	) );

    /* ================ ADDAX MENU LOCATIONS ============== */

    add_image_size( 'addax-info-box-img', 180, 180 );
    add_image_size( 'addax-testimonial-img', 60, 60 );
    add_image_size( 'addax-post-thumbnail', 345, 250 );

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
