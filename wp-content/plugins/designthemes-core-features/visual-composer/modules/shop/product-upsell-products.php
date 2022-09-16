<?php 

// Product Style Templates

$product_style_templates = cs_get_option( 'dt-woo-product-style-templates' );
$product_style_templates = (is_array($product_style_templates) && !empty($product_style_templates)) ? $product_style_templates : false;

$product_style_templates_arr = array ();
$product_style_templates_arr[esc_html__('Admin Option', 'designthemes-core')] = 'admin-option';
if($product_style_templates) {
	foreach($product_style_templates as $product_style_template_key => $product_style_template) {
		$product_style_templates_arr[$product_style_template['template-title']] = $product_style_template_key;
	}
}


vc_map( array(
	"name" => esc_html__( 'Product Single - Upsell Products', 'designthemes-core' ),
	"base" => "dt_sc_product_upsell_products",
	"icon" => "dt_sc_product_upsell_products",
	"category" => DT_VC_SHOP,
	"params" => array(

		// Column
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Column', 'designthemes-core'),
			'description' => esc_html__('Choose column that you like to display upsell products.', 'designthemes-core'),
			'param_name' => 'columns',
			'value' => array(
				esc_html__( '1', 'designthemes-core' ) => 1,
				esc_html__( '2', 'designthemes-core' ) => 2,
				esc_html__( '3', 'designthemes-core' ) => 3,
				esc_html__( '4', 'designthemes-core' ) => 4
			),
			'std' => 4,
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'admin_label' => true
		),

		// Limit
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Limit', 'designthemes-core'),
			'description' => esc_html__('Choose number of products that you like to display.', 'designthemes-core'),
			'param_name' => 'limit',
			'value' => array(
				esc_html__( '1', 'designthemes-core' ) => 1,
				esc_html__( '2', 'designthemes-core' ) => 2,
				esc_html__( '3', 'designthemes-core' ) => 3,
				esc_html__( '4', 'designthemes-core' ) => 4,
				esc_html__( '5', 'designthemes-core' ) => 5,
				esc_html__( '6', 'designthemes-core' ) => 6,
				esc_html__( '7', 'designthemes-core' ) => 7,
				esc_html__( '8', 'designthemes-core' ) => 8,
				esc_html__( '9', 'designthemes-core' ) => 9,
				esc_html__( '10', 'designthemes-core' ) => 10								
			),
			'std' => 4,
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'admin_label' => true
		),

		// Product Style Template
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Product Style Template', 'designthemes-core'),
			'param_name' => 'product_style_template',
			'value' => $product_style_templates_arr,
			'std' => 'admin-option',
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),
		
		// Hide Title
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Hide Title', 'designthemes-core'),
			'description' => esc_html__('If you wish to hide title you can do it here', 'designthemes-core'),
			'param_name' => 'hide_title',
			'value' => array(
				esc_html__( 'False', 'designthemes-core' ) => false,
				esc_html__( 'True', 'designthemes-core' ) => true,
			),
			'std' => false,
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