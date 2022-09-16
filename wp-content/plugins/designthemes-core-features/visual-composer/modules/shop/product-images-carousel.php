<?php 

vc_map( array(
	"name" => esc_html__( 'Product Single - Images Carousel', 'designthemes-core' ),
	"base" => "dt_sc_product_images_carousel",
	"icon" => "dt_sc_product_images_carousel",
	"category" => DT_VC_SHOP,
	"params" => array(

		// Include Feature Image
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Include Feature Image', 'designthemes-core'),
			'description' => esc_html__('Choose "True" if you like to include featured image in this gallery.', 'designthemes-core'),
			'param_name' => 'include_featured_image',
			'value' => array(
				esc_html__( 'False', 'designthemes-core' ) => 'false',
				esc_html__( 'True', 'designthemes-core' ) => 'true',
			),
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),			

		// Include Product Labels
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Include Product Labels', 'designthemes-core'),
			'description' => esc_html__('Choose "True" if you like to include product labels in this gallery.', 'designthemes-core'),
			'param_name' => 'include_product_labels',
			'value' => array(
				esc_html__( 'False', 'designthemes-core' ) => 'false',
				esc_html__( 'True', 'designthemes-core' ) => 'true',
			),
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),

		// Enable Thumb Enlarger
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Enable Thumb Enlarger', 'designthemes-core'),
			'description' => esc_html__('Choose "True" if you like to enable thumbnail enlarger in this gallery.', 'designthemes-core'),
			'param_name' => 'enable_thumb_enlarger',
			'value' => array(
				esc_html__( 'False', 'designthemes-core' ) => 'false',
				esc_html__( 'True', 'designthemes-core' ) => 'true',
			),
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),

		// Class
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Class', 'designthemes-core' ),
			'param_name' => 'class',
			'description' => esc_html__( 'If you wish you can add additional class name here.', 'designthemes-core' ),	
			'edit_field_class' => 'vc_column vc_col-sm-6'			
		),


		// Carousel Tab

		// Effect
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Effect','designthemes-core'),
			'param_name' => 'carousel_effect',
			'value' => array( 
						esc_html__('Default', 'designthemes-core') => '',
						esc_html__('Fade', 'designthemes-core') => 'fade',
					),
			'description' => esc_html__( 'Choose effect for your carousel. Slides Per View has to be 1 for Fade effect.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'group' => 'Carousel',
			'std' => ''
		),

		// Slides Per View
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Slides Per View', 'designthemes-core'),
			'param_name' => 'carousel_slidesperview',
			'value' => array( 
						1 => 1, 
						2 => 2, 
						3 => 3, 
						4 => 4, 						
					),
			'description' => esc_html__( 'Number slides of to show in view port.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'group' => 'Carousel',
			'std' => ''
		),

		// Enable loop mode
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Enable Loop Mode', 'designthemes-core'),
			'param_name' => 'carousel_loopmode',
			'value' => array(
				esc_html__('False', 'designthemes-core') => 'false',
				esc_html__('True', 'designthemes-core') => 'true',
			),
			'description' => esc_html__( 'If you wish you can enable continous loop mode for your carousel.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'group' => 'Carousel',
			'std' => ''				
		),	

		// Enable mousewheel control
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Enable Mousewheel Control', 'designthemes-core'),
			'param_name' => 'carousel_mousewheelcontrol',
			'value' => array(
				esc_html__('False', 'designthemes-core') => 'false',
				esc_html__('True', 'designthemes-core') => 'true',
			),
			'description' => esc_html__( 'If you wish you can enable mouse wheel control for your carousel.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'group' => 'Carousel',
			'std' => ''				
		),	
		
		// Enable vertical direction
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Enable Vertical Direction', 'designthemes-core'),
			'param_name' => 'carousel_verticaldirection',
			'value' => array(
				esc_html__('False', 'designthemes-core') => 'false',
				esc_html__('True', 'designthemes-core') => 'true',
			),
			'description' => esc_html__( 'To make your slides to navigate vertically.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'group' => 'Carousel',
			'std' => ''				
		),		

		// Enable Bullet Pagination
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Enable Bullet Pagination', 'designthemes-core'),
			'param_name' => 'carousel_bulletpagination',
			'value' => array(
				esc_html__('False', 'designthemes-core') => 'false',
				esc_html__('True', 'designthemes-core') => 'true',
			),
			'description' => esc_html__( 'To enable bullet pagination.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'group' => 'Carousel',
			'std' => ''				
		),	

		// Enable Thumbnail Pagination
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Enable Thumbnail Pagination', 'designthemes-core'),
			'param_name' => 'carousel_thumbnailpagination',
			'value' => array(
				esc_html__('False', 'designthemes-core') => 'false',
				esc_html__('True', 'designthemes-core') => 'true',
			),
			'description' => esc_html__( 'To enable thumbnail pagination.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'group' => 'Carousel',
			'std' => ''				
		),			

		// Thumbnail Position
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Thumbnail Position', 'designthemes-core'),
			'param_name' => 'carousel_thumbnail_position',
			'value' => array( 
						esc_html__('Bottom', 'designthemes-core') => '', 
						esc_html__('Left', 'designthemes-core') => 'left', 
						esc_html__('Right', 'designthemes-core') => 'right', 
					),
			'description' => esc_html__( 'Choose thumbnail position for your carousel. "Bottom" option wont work for "Vertical Direction"', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'dependency'  => array( 'element' => 'carousel_thumbnailpagination', 'value' => array ('true') ),
			'group' => 'Carousel',
			'std' => ''
		),	

		// Number Of Images - Thumbnail
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Number Of Images - Thumbnail', 'designthemes-core'),
			'param_name' => 'carousel_slidesperview_thumbnail',
			'value' => array( 
						1 => 1, 
						2 => 2, 
						3 => 3, 
						4 => 4,
						5 => 5,
						6 => 6 						
					),
			'description' => esc_html__( 'Number of images to show in thumbnails.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'dependency'  => array( 'element' => 'carousel_thumbnailpagination', 'value' => array ('true') ),
			'group' => 'Carousel',
			'std' => ''
		),

		// Enable Arrow Pagination
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Enable Arrow Pagination', 'designthemes-core'),
			'param_name' => 'carousel_arrowpagination',
			'value' => array(
				esc_html__('False', 'designthemes-core') => 'false',
				esc_html__('True', 'designthemes-core') => 'true',
			),
			'description' => esc_html__( 'To enable arrow pagination.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'group' => 'Carousel',
			'std' => ''				
		),	
		
		// Arrow Type
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Arrow Type', 'designthemes-core'),
			'param_name' => 'carousel_arrowpagination_type',
			'value' => array( 
						esc_html__('Default', 'designthemes-core') => '', 
						esc_html__('Type 2', 'designthemes-core') => 'type2', 
					),
			'description' => esc_html__( 'Choose arrow pagination type for your carousel.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'dependency'  => array( 'element' => 'carousel_arrowpagination', 'value' => array ('true') ),
			'group' => 'Carousel',
			'std' => ''
		),	

		// Enable Scrollbar
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Enable Scrollbar', 'designthemes-core'),
			'param_name' => 'carousel_scrollbar',
			'value' => array(
				esc_html__('False', 'designthemes-core') => 'false',
				esc_html__('True', 'designthemes-core') => 'true',
			),
			'description' => esc_html__( 'To enable scrollbar for your carousel.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'group' => 'Carousel',
			'std' => ''				
		),

		// Space Between Sliders
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Space Between Sliders','designthemes-core'),
			'param_name' => 'carousel_spacebetween',
			'description' => esc_html__( 'Space between sliders can be given here.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'group' => 'Carousel',
		)
		
	)
) );

?>