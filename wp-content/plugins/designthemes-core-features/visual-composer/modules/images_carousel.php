<?php add_action( 'vc_before_init', 'dt_sc_images_carousel_vc_map' );
function dt_sc_images_carousel_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Images carousel", 'designthemes-core' ),
		"base" => "dt_sc_images_carousel",
		"icon" => "dt_sc_images_carousel",
		"category" => DT_VC_CATEGORY,
		'description' => esc_html__( 'Images carousel with images', 'designthemes-core' ),
		"params" => array(
			
			array(
				'type' => 'attach_images',
				'heading' => esc_html__( 'Images', 'designthemes-core' ),
				'param_name' => 'images',
				'description' => esc_html__( 'Select images from media library', 'designthemes-core' )
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

      		array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Add Pagination?', 'designthemes-core' ),
				'admin_label' => true,
				'param_name'  => 'pagination',
				'description' => esc_html__( 'If checked pagination will be added', 'designthemes-core' ),
				'value'       => array( esc_html__( 'Yes', 'designthemes-core' ) => 'yes' )
			),
			  
			// Custom Class
			array(
				"type" => "textfield",
				'admin_label' => true,
				"heading" => esc_html__( "Custom Class", 'designthemes-core' ),
				"param_name" => "class"
			),

		)	 
	) );
}?>