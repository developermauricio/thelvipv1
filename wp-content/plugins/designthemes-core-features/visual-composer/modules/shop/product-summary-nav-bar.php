<?php 

vc_map( array(
	"name" => esc_html__( 'Product Single - Summary Nav Bar', 'designthemes-core' ),
	"base" => "dt_sc_product_summary_nav_bar",
	"icon" => "dt_sc_product_summary_nav_bar",
	"category" => DT_VC_SHOP,
	"params" => array(

		// Item to Show & its Order
		array(
			'type' => 'autocomplete',
			'heading' => esc_html__( 'Items', 'designthemes-core' ),
			'param_name' => 'items',
			'settings'    => array(
				'multiple' => true,
				'sortable' => true,
				'min_length' => 1,
				'no_hide' => true,
				'groups' => true,
				'unique_values' => true,
				'display_inline' => false,
				'values'   => array ( 
								array ( 'label' => esc_html__('Summary Nav - Breadcrumb', 'designthemes-core'), 'value' => 'breadcrumb' ),
								array ( 'label' => esc_html__('Summary Nav - Navigation', 'designthemes-core'), 'value' => 'navigation' )
							),
			),
			'std' => 'breadcrumb,navigation',
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'description' => esc_html__( 'Choose items that you want to display in summary nav bar and also you can change its order here.', 'designthemes-core' ),	
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