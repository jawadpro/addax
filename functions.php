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
    //wp_enqueue_script( 'addax-macy-js' , ADDAX_TEMPLATE_URI . '/assets/js/macy.js', array( 'jquery' ), '' , true  );
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


    // Register our tweaked Category Archives widget
function myprefix_widgets_init() {
  register_widget( 'WP_Widget_Categories_custom' );
}
add_action( 'widgets_init', 'myprefix_widgets_init' );


/**
 * Duplicated and tweaked WP core Categories widget class
 */
class WP_Widget_Categories_Custom extends WP_Widget {

  function __construct() {
    $widget_ops = array( 'classname' => 'widget_categories widget_categories_custom', 'description' => __( "A list of categories, with slightly tweaked output.", 'mytextdomain'  ) );
    parent::__construct( 'categories_custom', __( 'Categories Custom', 'mytextdomain' ), $widget_ops );
  }

  function widget( $args, $instance ) {
    extract( $args );

    $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? __( 'Categories Custom', 'mytextdomain'  ) : $instance['title'], $instance, $this->id_base);

    echo $before_widget;
    if ( $title )
      echo $before_title . $title . $after_title;
    ?>

    <ul>
    <?php
      // Get the category list, and tweak the output of the markup.
      $pattern = '#<li([^>]*)><a([^>]*)>(.*?)<\/a>\s*\(([0-9]*)\)\s*<\/li>#i';  // removed ( and )

      // $replacement = '<li$1><a$2>$3</a><span class="cat-count">$4</span>'; // no link on span
      // $replacement = '<li$1><a$2>$3</a><span class="cat-count"><a$2>$4</a></span>'; // wrap link in span
      $replacement = '<li$1><a$2><span class="cat-name">$3</span><span class="cat-count">$4</span></a>'; // give cat name and count a span, wrap it all in a link

      $subject      = wp_list_categories( 'echo=0&orderby=name&exclude=&title_li=&depth=1&show_count=1' );
      echo preg_replace( $pattern, $replacement, $subject );
    ?>
    </ul>
    <?php
    echo $after_widget;
  }

  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance['title'] = strip_tags( $new_instance['title'] );
    $instance['count'] = 1;
    $instance['hierarchical'] = 0;
    $instance['dropdown'] = 0;

    return $instance;
  }

  function form( $instance ) {
    //Defaults
    $instance = wp_parse_args( (array) $instance, array( 'title' => '') );
    $title = esc_attr( $instance['title'] );
    $count = true;
    $hierarchical = false;
    $dropdown = false;
?>
    <p><label for="<?php echo $this->get_field_id('title', 'mytextdomain' ); ?>"><?php _e( 'Title:', 'mytextdomain'  ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>

    <input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>"<?php checked( $count ); ?> disabled="disabled" />
    <label for="<?php echo $this->get_field_id('count'); ?>"><?php _e( 'Show post counts', 'mytextdomain'  ); ?></label><br />
<?php
  }

}
