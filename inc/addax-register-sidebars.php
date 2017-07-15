<?php
if ( ! function_exists( 'addax_register_widgets' ) ) {
	function addax_register_widgets() {

    global $addax_theme_options;

		if( isset( $addax_theme_options['footer-widgets-layout'] ) )
    {


    // widgets 2 columns
    if( $addax_theme_options['footer-widgets-layout'] == 2 )
    {
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer One', 'addax' ),
				'id'            => 'addax_footer_one',
				'before_widget' => '<div class="col-md-6 addax-widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-heading">',
				'after_title'   => '</h2>'
			)
		);

    register_sidebar(
			array(
				'name'          => esc_html__( 'Footer two', 'addax' ),
				'id'            => 'addax_footer_two',
				'before_widget' => '<div class="col-md-6 addax-widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-heading">',
				'after_title'   => '</h2>'
			)
		);

  } // widgets 2 columns Ends

  }

	}
}
add_action( 'widgets_init', 'addax_register_widgets' );


?>
