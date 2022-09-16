<?php 

vc_map( array(
	"name" => esc_html__( 'Product Single - Tabs', 'designthemes-core' ),
	"base" => "dt_sc_product_tabs",
	"icon" => "dt_sc_product_tabs",
	"category" => DT_VC_SHOP,
	"params" => array(

		// Hide Title
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Hide Title', 'designthemes-core'),
			'description' => esc_html__('If you wish to hide title you can do it here', 'designthemes-core'),
			'param_name' => 'hide_title',
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