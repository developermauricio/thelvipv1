<?php add_action( 'vc_before_init', 'dt_sc_post_comment_box_vc_map' );
function dt_sc_post_comment_box_vc_map() {

	vc_map( array(
		"name" => esc_html__( "Post - Comment Box", 'designthemes-core' ),
		"base" => "dt_sc_post_comment_box",
		"icon" => "dt_sc_post_comment_box",
		"category" => DT_VC_CATEGORY,
		"description" => esc_html__("Show post comment box. Use only one for a page.",'designthemes-core'),
		"params" => array(

			// ID
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Post ID', 'designthemes-core' ),
				'param_name' => 'id',
				'description' => esc_html__( 'Enter Post ID (In single post no need to enter).', 'designthemes-core' ),
				'save_always' => true,
				'admin_label' => true
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

			// Style
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Style', 'designthemes-core'),
				'param_name' => 'comment_style',
				'admin_label' => true,
				'save_always' => true,
				'value' => array(
					esc_html__('Default', 'designthemes-core') => '',
					esc_html__('Rounded', 'designthemes-core') => 'rounded',
					esc_html__('Square', 'designthemes-core') => 'square',
				)
			)
		)
	) );
}?>