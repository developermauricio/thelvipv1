<?php add_action( 'vc_before_init', 'dt_sc_contact_info_vc_map' );
function dt_sc_contact_info_vc_map() {
	vc_map( array(
		"name"        => esc_html__("Contact Info", 'designthemes-core'),
		"base"        => "dt_sc_contact_info",
		"icon"        => "dt_sc_contact_info",
		"category"    => DT_VC_CATEGORY,
		"description" => esc_html__("Add different types of contact info",'designthemes-core'),
		"params"      => array(

			# Type
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__('Type', 'designthemes-core'),
				'param_name' => 'type',
				'std'        => '',
				'value'      => array( 
					esc_html__('Type 1','designthemes-core') => '',
					esc_html__('Type 2','designthemes-core') => 'type2',
					esc_html__('Type 3','designthemes-core') => 'type3',
					esc_html__('Type 4','designthemes-core') => 'type4',
					esc_html__('Type 5','designthemes-core') => 'type5',
					esc_html__('Type 6','designthemes-core') => 'type6',
					esc_html__('Type 7','designthemes-core') => 'type7',
					esc_html__('Type 8','designthemes-core') => 'type8',
					esc_html__('Type 9','designthemes-core') => 'type9',
				)
			),

			# Icon Class
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__('Icon Class', 'designthemes-core'),
				'param_name' => 'icon'
			),

			# Image
            array(
				'type'       => 'attach_image',
				'heading'    => esc_html__('Image','designthemes-core'),
				'param_name' => 'image',
				'dependency' => array( 'element' => 'type', 'value' => 'type9' )
            ),			

			# Title
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__('Title', 'designthemes-core'),
				'param_name' => 'title'
			),

			# link
			array(
				'type'       => 'vc_link',
				'heading'    => esc_html__('Link', 'designthemes-core'),
				'param_name' => 'link',
				'dependency' => array(
					'element' => 'type',
					'value'   => 'type5'
				)
			),

			# Content
			array(
				'type'       => 'textarea_html',
				'heading'    => esc_html__('Content','designthemes-core'),
				'param_name' => 'content',
				'value'      => '<p> <strong>Toll Free:</strong> 1224 2234 LAW <br> <strong>Fax:</strong> 1224 2235 225 </p>'
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
				"type"        => "textfield",
				"heading"     => esc_html__( "Extra class name", 'designthemes-core' ),
				"param_name"  => "class",
				'description' => esc_html__('Style particular icon box element differently - add a class name and refer to it in custom CSS','designthemes-core')
      		)
		)
	) );	
}?>