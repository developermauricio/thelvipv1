<?php 

vc_map( array(
	"name" => esc_html__( 'Menu Icon', 'designthemes-core' ),
	"base" => "dt_sc_shop_menu_icon",
	"icon" => "dt_sc_shop_menu_icon",
	"category" => DT_VC_SHOP,
	"params" => array(

		// Cart Action
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Cart Action', 'designthemes-core'),
			'description' => esc_html__('Choose how you want to display the cart content.', 'designthemes-core'),
			'param_name' => 'cart_action',
			'value' => array(
				esc_html__( 'None', 'designthemes-core' ) => '',
				esc_html__( 'Notification Widget', 'designthemes-core' ) => 'notification_widget',
				esc_html__( 'Sidebar Widget', 'designthemes-core' ) => 'sidebar_widget',
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
		)
		
	)
) );

?>