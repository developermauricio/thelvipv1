<?php 

vc_map( array(
	"name" => esc_html__( 'Product Single - Images List', 'designthemes-core' ),
	"base" => "dt_sc_product_images_list",
	"icon" => "dt_sc_product_images_list",
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

		// Columns
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Columns', 'designthemes-core'),
			'param_name' => 'columns',
			'value' => array( 
						1 => 1, 
						2 => 2, 						
					),
			'description' => esc_html__( 'Number columns to show images in.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'std' => 2
		),

		// Enable Grid Space
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Enable Grid Space', 'designthemes-core'),
			'description' => esc_html__('Choose "True" if you like to enable grid space in this gallery.', 'designthemes-core'),
			'param_name' => 'enable_grid_space',
			'value' => array(
				esc_html__( 'False', 'designthemes-core' ) => 'false',
				esc_html__( 'True', 'designthemes-core' ) => 'true',
			),
			'std' => 'false',
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),		

		// Class
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Class', 'designthemes-core' ),
			'param_name' => 'class',
			'description' => esc_html__( 'If you wish you can add additional class name here.', 'designthemes-core' ),	
			'edit_field_class' => 'vc_column vc_col-sm-6'			
		)
		
	)
) );

?>