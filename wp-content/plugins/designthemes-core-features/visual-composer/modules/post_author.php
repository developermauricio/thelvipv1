<?php add_action( 'vc_before_init', 'dt_sc_post_author_vc_map' );
function dt_sc_post_author_vc_map() {

	vc_map( array(
		"name" => esc_html__( "Post - Author", 'designthemes-core' ),
		"base" => "dt_sc_post_author",
		"icon" => "dt_sc_post_author",
		"category" => DT_VC_CATEGORY,
		"description" => esc_html__("Show author of post",'designthemes-core'),
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
			
			// Style
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Style','designthemes-core'),
				'param_name' => 'style',
				'value' => array(
					esc_html__('Space','designthemes-core') => 'meta-elements-space',
					esc_html__('Boxed','designthemes-core') => 'meta-elements-boxed' ,
					esc_html__('Curvy','designthemes-core') => 'meta-elements-boxed-curvy',
					esc_html__('Round','designthemes-core') => 'meta-elements-boxed-round',
					esc_html__('Filled','designthemes-core') => 'meta-elements-filled' ,
					esc_html__('Filled Curvy','designthemes-core') => 'meta-elements-filled-curvy',
					esc_html__('Filled Round','designthemes-core') => 'meta-elements-filled-round'
				),
				'std' => 'meta-elements-space',
				'save_always' => true,
				'edit_field_class' => 'vc_col-xs-6'
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
      			'type' => 'textfield',
      			'heading' => esc_html__( 'Extra class name', 'designthemes-core' ),
      			'param_name' => 'el_class',
				'save_always' => true,
				'edit_field_class' => 'vc_col-xs-6'
      		)
		)
	) );
}?>