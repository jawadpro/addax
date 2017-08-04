<?php
if ( ! function_exists( 'addax_register_widgets' ) ) {
	function addax_register_widgets() {

		register_sidebar(
      array(
        'name'          => esc_html__( 'Default Sidebar', 'addax' ),
        'id'            => 'default_sidebar',
        'before_widget' => '<div class="addax-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget-title"><h4>',
        'after_title'   => '</h4></div>'
      )
    );

		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer Widget 1', 'addax' ),
				'id'            => 'addax_footer_one',
				'before_widget' => '<div class="addax-widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-heading">',
				'after_title'   => '</h2>'
			)
		);

    register_sidebar(
			array(
				'name'          => esc_html__( 'Footer Widget 2', 'addax' ),
				'id'            => 'addax_footer_two',
				'before_widget' => '<div class="addax-widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-heading">',
				'after_title'   => '</h2>'
			)
		);

    register_sidebar(
      array(
        'name'          => esc_html__( 'Footer Widget 3', 'addax' ),
        'id'            => 'addax_footer_three',
        'before_widget' => '<div class="addax-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-heading">',
        'after_title'   => '</h2>'
      )
    );

    register_sidebar(
      array(
        'name'          => esc_html__( 'Footer Widget 4', 'addax' ),
        'id'            => 'addax_footer_four',
        'before_widget' => '<div class="addax-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-heading">',
        'after_title'   => '</h2>'
      )
    );



	}
}
add_action( 'widgets_init', 'addax_register_widgets' );


?>
