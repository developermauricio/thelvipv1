<?php add_action( 'vc_before_init', 'dt_sc_special_vertical_timeline_vc_map' );
function dt_sc_special_vertical_timeline_vc_map() {

	class WPBakeryShortCode_dt_sc_special_vertical_timeline extends WPBakeryShortCodesContainer {
	}
	class WPBakeryShortCode_dt_sc_special_vc_timeline_entry extends WPBakeryShortCode {
	}

	vc_map( array(
		"name" => esc_html__( "Special Vertical timeline", 'designthemes-core' ),
		"base" => "dt_sc_special_vertical_timeline",
		"icon" => "dt_sc_special_vertical_timeline",
		"category" => DT_VC_CATEGORY,
		"content_element" => true,
		"js_view" => 'VcColumnView',
		'as_parent' => array( 'only' => 'dt_sc_special_vc_timeline_entry' ),
		'description' => esc_html__( 'Timeline content', 'designthemes-core' ),
		"params" => array(
			
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
      			'description' => esc_html__('Style particular icon box element differently - add a class name and refer to it in custom CSS','designthemes-core')
      		)									
		)		
	) );
}?>