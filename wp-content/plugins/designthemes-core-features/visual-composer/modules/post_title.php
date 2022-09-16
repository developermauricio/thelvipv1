<?php add_action( 'vc_before_init', 'dt_sc_post_title_vc_map' );
function dt_sc_post_title_vc_map() {

	vc_map( array(
		"name" => esc_html__( "Post - Title", 'designthemes-core' ),
		"base" => "dt_sc_post_title",
		"icon" => "dt_sc_post_title",
		"category" => DT_VC_CATEGORY,
		"description" => esc_html__("Show title of post",'designthemes-core'),
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

      		// Class
      		array(
      			'type' => 'textfield',
      			'heading' => esc_html__( 'Extra class name', 'designthemes-core' ),
      			'param_name' => 'el_class',
				'save_always' => true,
      			'description' => esc_html__('Style particular icon box element differently - add a class name and refer to it in custom CSS','designthemes-core')
      		)
		)
	) );
}?>