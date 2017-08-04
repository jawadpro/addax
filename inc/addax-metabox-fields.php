<?php
add_filter( 'rwmb_meta_boxes', 'addax_meta_boxes' );

if( !function_exists( 'addax_meta_boxes') )
{
	if( class_exists('RW_Meta_Box') )
	{
function addax_meta_boxes( $meta_boxes ) {


// ADDAX SLIDER POST TYPE METABOXES
	$meta_boxes[] = array(
        'title'      => __( 'Slide Options', 'addax' ),
        'post_types' => array('addax-slider'),
        'fields'     => array(

									array(
											'id' 	=> 'slide_sub_heading',
											'name'	=> __('Slide Sub-Heading' , 'addax'),
											'type'	=> 'text',
											'desc' => __('Enter sub-heading text here. Leave empty if you don\'t want to show on slide.' , 'addax'),
									),

										array(
												'id' 	=> 'slide_image',
												'name'	=> __( 'Slide Background Image' , 'addax' ),
												'type'	=> 'image_advanced',
												'max_file_uploads' => 1,
												'max_status' => false,
												'desc' => __('Upload/Select background image for your slider.' , 'addax'),
											),

										array(
												'id' 	=> 'slide_bg_overlay',
												'name'	=> __( 'Slide Background Overlay' , 'addax' ),
												'type'	=> 'select',
												'desc' => __('Enable Overlay for background from here.' , 'addax'),
												'options' => array(
													'yes' 	=>  __('Yes' , 'addax') ,
													'no'		=> __('No' , 'addax'),
												),
											),

										array(
												'id' 	=> 'button_one_text',
												'name'	=> __( 'Button1 Text' , 'addax' ),
												'type'	=> 'text',
												'desc' => __('Enter text for button1. Leave empty if you don\'t want to show button on slide.' , 'addax'),
										),

										array(
												'id' 	=> 'button_one_link',
												'name'	=> __( 'Button1 Link' , 'addax' ),
												'type'	=> 'text',
												'desc' => __('Enter link for button1.' , 'addax'),
										),

										array(
												'id' 	=> 'button_two_text',
												'name'	=> __( 'Button2 Text' , 'addax' ),
												'type'	=> 'text',
												'desc' => __('Enter text for button2. Leave empty if you don\'t want to show button on slide.' , 'addax'),
										),

										array(
												'id' 	=> 'button_two_link',
												'name'	=> __( 'Button2 Link' , 'addax' ),
												'type'	=> 'text',
												'desc' => __('Enter link for button2.' , 'addax'),
										),

										array(
												'id' 	=> 'content_position',
												'name'	=> __( 'Content Position' , 'addax' ),
												'type'	=> 'select',
												'desc' => __('Select Position for slide content.' , 'addax'),
												'options' => array(
													'center' 	=>  __('Center' , 'addax') ,
													'right'		=> __('Right' , 'addax'),
													'left'		=> __('Left' , 'addax'),
												),
										),

        )
    );

		$meta_boxes[] = array(
	        'title'      => __( 'Slide Styling', 'addax' ),
	        'post_types' => array('addax-slider'),
	        'fields'     => array(

										array(
												'id' 	=> 'main_heading_text_size',
												'name'	=> __( 'Main heading font size' , 'addax' ),
												'type'	=> 'number',
												'desc' => __('Enter value without (px)' , 'addax'),
										),

										array(
												'id' 	=> 'sub_heading_text_size',
												'name'	=> __( 'Sub heading font size' , 'addax' ),
												'type'	=> 'number',
												'desc' => __('Enter value without (px)' , 'addax'),
										),

										array(
												'id' 	=> 'main_heading_text_color',
												'name'	=> __( 'Main heading font color' , 'addax' ),
												'type'	=> 'color',
												'desc' => __('Select color for main heading.' , 'addax'),
										),

										array(
												'id' 	=> 'sub_heading_text_color',
												'name'	=> __( 'Sub heading font color' , 'addax' ),
												'type'	=> 'color',
												'desc' => __('Select color for sub heading.' , 'addax'),
										),
		)
	);

// TESTIMONIAL POST TYPE METABOX
$meta_boxes[] = array(
			'title'      => __( 'Testimonial Options', 'addax' ),
			'post_types' => array('adx-testimonial'),
			'fields'     => array(


								array(
										'id' 	=> 'client_desgi',
										'name'	=> __( 'Designation' , 'addax' ),
										'type'	=> 'text',
										'desc' => __('Enter desgination here.' , 'addax'),
								),

								array(
										'id' 	=> 'client_image',
										'name'	=> __( 'User Image' , 'addax' ),
										'type'	=> 'image_advanced',
										'max_file_uploads' => 1,
										'max_status' => false,
										'desc' => __('Upload/Select image.' , 'addax'),
									),

									array(
											'id' 	=> 'client_feedback',
											'name'	=> __( 'Feedback' , 'addax' ),
											'type'	=> 'textarea',
											'desc' => __('Enter feedback here.' , 'addax'),
											'required'  => true,
									),

)
);

// PAGE METABOXES
	$meta_boxes[] = array(
				'title'      => __( 'Page Options', 'addax' ),
				'post_types' => array('page' , 'post'),
				'fields'     => array(

									array(
											'type'	=> 'heading',
											'name'	=> __( 'Page Slider' , 'addax' ),
									),

									array(
											'id' 	=> 'page_header_shortcode',
											'name'	=> __( 'Slider Shortcode' , 'addax' ),
											'type'	=> 'text',
											'desc' => __('You can user Addax Slider, Revolution Slider or Layer Slider etc shortcode here.' , 'addax'),
									),

									array(
											'type'	=> 'heading',
											'name'	=> __( 'Page Title Bar' , 'addax' ),
									),

									array(
											'id' 	=> 'title_bar_show',
											'name'	=> __( 'Hide Title Bar' , 'addax' ),
											'type'	=> 'checkbox',
									),

									array(
											'id' 	=> 'title_bar_subheading',
											'name'	=> __( 'Title Bar Sub Heading' , 'addax' ),
											'type'	=> 'text',
											'visible' => ['title_bar_show', false]
									),

									array(
											'id' 	=> 'title_bar_content_position',
											'name'	=> __( 'Title Bar Content Position' , 'addax' ),
											'type'	=> 'select',
											'options' => array(
												'left' 	=>  __('Left' , 'addax') ,
												'right'	=> __('Right' , 'addax'),
												'center'	=> __('Center' , 'addax')
											),
											'visible' => ['title_bar_show', false]
									),

									array(
											'id' 	=> 'title_bar_background',
											'name'	=> __( 'Title Bar Background Type' , 'addax' ),
											'type'	=> 'select',
											'options' => array(
												'color' 	=>  __('Color' , 'addax') ,
												'image'		=> __('Image' , 'addax'),
											),
											'visible' => ['title_bar_show', false]
									),

									array(
											'id' 	=> 'title_bar_bg_color',
											'name'	=> __( 'Title Bar Background Color' , 'addax' ),
											'type'	=> 'color',
											'visible' => [
												    'when' => [
												        ['title_bar_background', 'color'],
												        ['title_bar_show', false]
												    ],
												    'relation' => 'and'
												]
									),

									array(
											'id' 	=> 'title_bar_bg_image',
											'name'	=> __( 'Title Bar Background Image' , 'addax' ),
											'type'	=> 'image_advanced',
											'max_file_uploads' => 1,
											'max_status' => false,
											'visible' => [
												    'when' => [
												        ['title_bar_background', 'image'],
												        ['title_bar_show', false]
												    ],
												    'relation' => 'and'
												]
										),

										array(
												'id' 	=> 'title_bar_bg_parallax',
												'name'	=> __( 'Enable Background Parallax' , 'addax' ),
												'type'	=> 'checkbox',
												'visible' => [
													    'when' => [
													        ['title_bar_background', 'image'],
													        ['title_bar_show', false]
													    ],
													    'relation' => 'and'
													]
										),

										array(
												'id' 	=> 'title_bar_txt_color',
												'name'	=> __( 'Title Bar Text Color' , 'addax' ),
												'type'	=> 'color',
												'visible' => ['title_bar_show', false]
										),

	)
);



return $meta_boxes;
	}
}
}




?>
