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

   /* ================ ADDAX REDUX INTEGRATION ============== */

   if ( class_exists( 'ReduxFrameworkPlugin' ) && file_exists( WP_PLUGIN_DIR .'/addax-core/redux-extensions/addax-config.php' ) ) {
    if( class_exists('addax_core') ){
   		require_once( WP_PLUGIN_DIR .'/addax-core/redux-extensions/addax-config.php' );
   	}
   }


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
    wp_enqueue_script( 'addax-map-api-js' , 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB_FOwS1sfvZkhjueoLFRY0s-j_k1CbKn8', array( 'jquery' ), '' , true  );
    wp_enqueue_script( 'addax-smart-menus-js' , ADDAX_TEMPLATE_URI . '/bootstrap/js/jquery.smartmenus.min.js' , array( 'jquery' ), '' , true  );
    wp_enqueue_script( 'addax-smart-menus-bts-js' , ADDAX_TEMPLATE_URI . '/bootstrap/js/jquery.smartmenus.bootstrap.js' , array( 'jquery' ), '' , true  );
    wp_enqueue_script( 'addax-carousel-js' , ADDAX_TEMPLATE_URI . '/assets/js/custom.js', array( 'jquery' ), '' , true  );
  }

    /* ================ ADDAX THEME SUPPORTS ============== */

    add_theme_support( 'menu' );
    add_theme_support( 'widgets' );
    add_theme_support( 'post-thumbnails' );

    /* ================ ADDAX MENU LOCATIONS ============== */

    register_nav_menus( array(
  		'main-menu' => esc_html__( 'Main Menu', 'addax' ),
  	) );
