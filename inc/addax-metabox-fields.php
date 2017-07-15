<?php
add_filter( 'rwmb_meta_boxes', 'addax_meta_boxes' );

if( !function_exists( 'addax_meta_boxes') )
{
	if( class_exists('RW_Meta_Box') )
	{
function addax_meta_boxes( $meta_boxes ) {

	$meta_boxes[] = array(
        'title'      => __( 'Slide Options', 'addax' ),
        'post_types' => array('addax-slider'),
        'fields'     => array(

									array(
											'id' 	=> 'slide_sub_heading',
											'name'	=> 'Slide Sub-Heading',
											'type'	=> 'text',
											'desc' => __('Enter sub-heading text here. Leave empty if you don\'t want to show on slide.' , 'addax'),
									),

										array(
												'id' 	=> 'slide_image',
												'name'	=> 'Slide Background Image',
												'type'	=> 'image_advanced',
												'max_file_uploads' => 1,
												'max_status' => false,
												'desc' => __('Upload/Select backgrounf image for your slider.' , 'addax'),
											),

										array(
												'id' 	=> 'slide_bg_overlay',
												'name'	=> 'Slide Background Overlay',
												'type'	=> 'select',
												'desc' => __('Enable Overlay for background from here.' , 'addax'),
												'options' => array(
													'yes' 	=>  __('Yes' , 'addax') ,
													'no'		=> __('No' , 'addax'),
												),
											),

										array(
												'id' 	=> 'background_parallex',
												'name'	=> 'Enable Parallex',
												'type'	=> 'select',
												'desc' => __('Make your slide parallex from here.' , 'addax'),
												'options' => array(
													'yes' 	=>  __('Yes' , 'addax') ,
													'no'		=> __('No' , 'addax'),
												),
										),

										array(
												'id' 	=> 'button_one_text',
												'name'	=> 'Button1 Text',
												'type'	=> 'text',
												'desc' => __('Enter text for button1. Leave empty if you don\'t want to show button on slide.' , 'addax'),
										),

										array(
												'id' 	=> 'button_one_link',
												'name'	=> 'Button1 Link',
												'type'	=> 'text',
												'desc' => __('Enter link for button1.' , 'addax'),
										),

										array(
												'id' 	=> 'button_two_text',
												'name'	=> 'Button2 Text',
												'type'	=> 'text',
												'desc' => __('Enter text for button2. Leave empty if you don\'t want to show button on slide.' , 'addax'),
										),

										array(
												'id' 	=> 'button_two_link',
												'name'	=> 'Button2 Link',
												'type'	=> 'text',
												'desc' => __('Enter link for button2.' , 'addax'),
										),

										array(
												'id' 	=> 'content_position',
												'name'	=> 'Content Position',
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
												'name'	=> 'Main heading font size',
												'type'	=> 'number',
												'desc' => __('Enter value without (px)' , 'addax'),
										),

										array(
												'id' 	=> 'sub_heading_text_size',
												'name'	=> 'Sub heading font size',
												'type'	=> 'number',
												'desc' => __('Enter value without (px)' , 'addax'),
										),

										array(
												'id' 	=> 'main_heading_text_color',
												'name'	=> 'Main heading font color',
												'type'	=> 'color',
												'desc' => __('Select color for main heading.' , 'addax'),
										),

										array(
												'id' 	=> 'sub_heading_text_color',
												'name'	=> 'Sub heading font color',
												'type'	=> 'color',
												'desc' => __('Select color for sub heading.' , 'addax'),
										),
		)
	);

		 return $meta_boxes;
	}
}
}




?>
