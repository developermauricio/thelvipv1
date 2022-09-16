<?php add_action( 'vc_before_init', 'dt_sc_image_flip_vc_map' );
function dt_sc_image_flip_vc_map() {
	vc_map( array(
		"name" => esc_html__("Image Flip", 'designthemes-core'),
		"base" => "dt_sc_image_flip",
		"icon" => "dt_sc_image_flip",
		"category" => DT_VC_CATEGORY,
		"description" => esc_html__("Add image flip",'designthemes-core'),
		"params" => array(

			# Image 1
			array(
				'type' => 'attach_image',
				'heading' => esc_html__('Image 1 URL', 'designthemes-core'),
				'param_name' => 'image1',
			),

			# Image 2
			array(
				'type' => 'attach_image',
				'heading' => esc_html__('Image 2 URL', 'designthemes-core'),
				'param_name' => 'image2',
			),

			# Link
			array(
				'type' => 'vc_link',
				'heading' => esc_html__('Link', 'designthemes-core'),
				'param_name' => 'link'				
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
		)
	) );
}?>