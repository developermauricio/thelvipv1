<?php 

vc_map( array(
	"name" => esc_html__( 'Product Single - Tabs Exploded', 'designthemes-core' ),
	"base" => "dt_sc_product_tabs_exploded",
	"icon" => "dt_sc_product_tabs_exploded",
	"category" => DT_VC_SHOP,
	"params" => array(

		// Tab
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Tab', 'designthemes-core'),
			'description' => esc_html__('Choose tab that you would like to use.', 'designthemes-core'),
			'param_name' => 'tab',
			'value' => array(
				esc_html__( 'Description', 'designthemes-core' ) => 'description',
				esc_html__( 'Review', 'designthemes-core' ) => 'review',
				esc_html__( 'Additional Information', 'designthemes-core' ) => 'additional_information',
				esc_html__( 'Custom Tab 1', 'designthemes-core' ) => 'custom_tab_1',
				esc_html__( 'Custom Tab 2', 'designthemes-core' ) => 'custom_tab_2',
				esc_html__( 'Custom Tab 3', 'designthemes-core' ) => 'custom_tab_3',
				esc_html__( 'Custom Tab 4', 'designthemes-core' ) => 'custom_tab_4'
			),
			'std' => 'description',
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'admin_label' => true
		),

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

		// Apply Scroll
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Apply Content Scroll', 'designthemes-core'),
			'description' => esc_html__('If you wish to apply scroll you can do it here', 'designthemes-core'),
			'param_name' => 'apply_scroll',
			'value' => array(
				esc_html__( 'False', 'designthemes-core' ) => 'false',
				esc_html__( 'True', 'designthemes-core' ) => 'true',
			),
			'std' => 'false',
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),

		// Scroll Height
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Scroll Height (px)', 'designthemes-core' ),
			'param_name' => 'scroll_height',
			'description' => esc_html__( 'Specify height for your section here.', 'designthemes-core' ),	
			'dependency'  => array( 'element' => 'apply_scroll', 'value' => 'true' ),
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