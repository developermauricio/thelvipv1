<?php add_action( 'vc_before_init', 'dt_sc_lightbox_image_vc_map' );
function dt_sc_lightbox_image_vc_map() {

	vc_map( array(
		"name" => esc_html__( "Lightbox Image", 'designthemes-core' ),
		"base" => "dt_sc_lightbox_image",
		"icon" => "dt_sc_lightbox_image",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			// Image
			array(
				'type' => 'attach_image',
				'heading' => esc_html__('Image','designthemes-core'),
				'param_name' => 'url'
            ),

      		// Title
      		array(
      			'type' => 'textfield',
      			'heading' => esc_html__( 'Title', 'designthemes-core' ),
      			'param_name' => 'title',
				'save_always' => true,
      			'description' => esc_html__('Put the image title on preview.','designthemes-core')
      		),

			// Align
      		array(
      			'type' => 'dropdown',
      			'heading' => esc_html__( 'Alignment', 'designthemes-core' ),
      			'param_name' => 'align',
				'value' => array(
					esc_html__('None', 'designthemes-core') => 'alignnone',
					esc_html__('Left', 'designthemes-core') => 'alignleft',
					esc_html__('Center', 'designthemes-core') => 'aligncenter',
					esc_html__('Right', 'designthemes-core') => 'alignright'
				),
				'std' => 'alignnone'
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
						
      		// Class
      		array(
				"type" => "textfield",
      			"heading" => esc_html__( "Extra class name", 'designthemes-core' ),
      			"param_name" => "class",
      			'description' => esc_html__('Style particular icon box element differently - add a class name and refer to it in custom CSS','designthemes-core')
      		),      		
		)
	) );
}?>