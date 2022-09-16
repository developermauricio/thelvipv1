<?php 

vc_map( array(
	"name" => esc_html__( 'Product Single - Images 360 Viewer', 'designthemes-core' ),
	"base" => "dt_sc_product_images_360viewer",
	"icon" => "dt_sc_product_images_360viewer",
	"category" => DT_VC_SHOP,
	"params" => array(

		// Enable PopUp Viewer
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Enable PopUp Viewer', 'designthemes-core'),
			'description' => esc_html__('If you wish, you can show 360 viewer in popup.', 'designthemes-core'),
			'param_name' => 'enable_popup_viewer',
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