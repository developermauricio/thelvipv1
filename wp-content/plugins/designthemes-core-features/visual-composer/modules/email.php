<?php add_action( 'vc_before_init', 'dt_sc_email_vc_map' );
function dt_sc_email_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Email id", 'designthemes-core' ),
		"base" => "dt_sc_email",
		"icon" => "dt_sc_email",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			# Email id
			array(
				'type' => 'textfield',
				'param_name' => 'text',
				'heading' => esc_html__( 'Email id', 'designthemes-core' ),
      			'admin_label' => true,
				'description' => esc_html__( 'Enter valid Emailid', 'designthemes-core' )
			),

			vc_map_add_css_animation(),

			array(
				"type" => "textfield",
				"heading" => __("Animation delay ( optional )", 'designthemes-core'),
				"edit_field_class" => 'vc_col-sm-6 vc_column',
				"param_name" => "delay",
				"value" => "0",
				"description" => __("Set the animation delay ( e.g 200 )", 'designthemes-core')
			),

			# Class
      		array(
      			"type" => "textfield",
      			"heading" => esc_html__( "Extra class name", 'designthemes-core' ),
      			"param_name" => "class",
      			"value" => 'icon icon-mail',
      			'description' => esc_html__('Style particular element differently - add a class name and refer to it in custom CSS','designthemes-core')
      		)						
		)
	) );	
}?>