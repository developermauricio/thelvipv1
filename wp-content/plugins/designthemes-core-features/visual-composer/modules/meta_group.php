<?php add_action( 'vc_before_init', 'dt_sc_postmeta_group_vc_map' );
function dt_sc_postmeta_group_vc_map() {

	vc_map( array(
		"name" => esc_html__( "Post - Meta Group", 'designthemes-core' ),
		"base" => "dt_sc_postmeta_group",
		"icon" => "dt_sc_postmeta_group",
		"category" => DT_VC_CATEGORY,
		"description" => esc_html__("Show blog post meta group",'designthemes-core'),
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

			// Meta Elements
			array(
				'heading' => esc_html__( 'Meta Elements', 'designthemes-core' ),
				'param_name' => 'blog_meta_position',
				'type'	=> 'param_group',
				'save_always' => true,
				'params' => array(
					array(
						'type' => 'dropdown',
						'heading' => esc_html__( 'Meta Element', 'designthemes-core' ),
						'param_name' => 'element',
						'value' => array(
							esc_html__('Author', 'designthemes-core')	 	 	 => 'author',
							esc_html__('Date', 'designthemes-core')	 	 		 => 'date',
							esc_html__('Comments', 'designthemes-core') 		 => 'comments',
							esc_html__('Categories', 'designthemes-core')	 	 => 'categories',
							esc_html__('Tags', 'designthemes-core')	 			 => 'tags',
							esc_html__('Social Share', 'designthemes-core')	 	 => 'social_share',
							__('Likes & Views', 'designthemes-core') 			 => 'likes_views',
						),
						'save_always' => true,
						'admin_label' => true,
						'std' => 'author'
					),
				),
			),

			// Style
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Style','designthemes-core'),
				'param_name' => 'style',
				'value' => array(
					esc_html__('Space','designthemes-core') => 'metagroup-space-separator',
					esc_html__('Slash','designthemes-core') => 'metagroup-slash-separator',
					esc_html__('Vertical','designthemes-core') => 'metagroup-vertical-separator',
					esc_html__('Horizontal','designthemes-core') => 'metagroup-horizontal-separator',
					esc_html__('Dot','designthemes-core') => 'metagroup-dot-separator',
					esc_html__('Comma','designthemes-core') => 'metagroup-comma-separator',
					esc_html__('Boxed','designthemes-core') => 'metagroup-elements-boxed',
					esc_html__('Boxed Curvy','designthemes-core') => 'metagroup-elements-boxed-curvy',
					esc_html__('Boxed Round','designthemes-core') => 'metagroup-elements-boxed-round',
					esc_html__('Filled','designthemes-core') => 'metagroup-elements-filled',
					esc_html__('Filled Curvy','designthemes-core') => 'metagroup-elements-filled-curvy',
					esc_html__('Filled Round','designthemes-core') => 'metagroup-elements-filled-round',
				),
				'std' => 'metagroup-space-separator',
				'save_always' => true,
				'edit_field_class' => 'vc_col-xs-6',
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