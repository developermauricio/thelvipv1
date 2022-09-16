<?php add_action( 'vc_before_init', 'dt_sc_fancy_ol_vc_map' );
function dt_sc_fancy_ol_vc_map() {

	global $variations;

	vc_map( array(
		"name" => esc_html__( "Fancy Ordered List", 'designthemes-core' ),
		"base" => "dt_sc_fancy_ol",
		"icon" => "dt_sc_fancy_ol",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			// Style
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Style', 'designthemes-core'),
				'param_name' => 'style',
				'admin_label' => true,
				'value' => array(
					'Decimal' => 'decimal',
					'Decimal With Leading Zero' => 'decimal-leading-zero',
					'Lower Alpha' => 'lower-alpha',
					'Lower Roman' => 'lower-roman',
					'Upper Alpha' => 'upper-alpha',
					'Upper Roman' => 'upper-roman',
				)
			),

			// Style
			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'heading' => esc_html__('Variation', 'designthemes-core'),
				'param_name' => 'variation',
      			'value' => $variations,
      		),

			// Content
			array(
				'type' => 'textarea_html',
				'heading' => esc_html__('Add Unordered List','designthemes-core'),
				'param_name' => 'content',
				'value' => '<ol><li>Lorem ipsum dolor sit</li><li>Praesent convallis nibh</li><li>Nullam ac sapien sit</li><li>Phasellus auctor augue</li></ol>'
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

			// Custom Class
      		array(
      			"type" => "textfield",
      			'admin_label' => true,
      			"heading" => esc_html__( "Custom Class", 'designthemes-core' ),
      			"param_name" => "class"
      		)			
		)
	) );
} ?>