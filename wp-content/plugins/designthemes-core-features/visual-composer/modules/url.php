<?php add_action( 'vc_before_init', 'dt_sc_url_vc_map' );
function dt_sc_url_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Link", 'designthemes-core' ),
		"base" => "dt_sc_url",
		"icon" => "dt_sc_url",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			# Link
			array(
				'type' => 'vc_link',
				'param_name' => 'link',
				'heading' => esc_html__( 'Link', 'designthemes-core' ),
			),

            # Icon library
            array(
				'type'        => 'dropdown',
				'param_name'  => 'icon_type',
				'heading'     => esc_html__( 'Icon library', 'designthemes-core' ),
				'save_always' => true,
				'value'       => array(
					__( 'Entypo', 'designthemes-core' )                 => 'entypo',
					__( 'Font Awesome', 'designthemes-core' )           => 'fontawesome',
					__( 'Icon Moon Line', 'designthemes-core' )         => 'icon_moon_line',
					__( 'Icon Moon Solid', 'designthemes-core' )        => 'icon_moon_solid',
					__( 'Icon Moon Ultimate', 'designthemes-core' )     => 'icon_moon_ultimate',
					__( 'Linecons', 'designthemes-core' )               => 'linecons',
					__( 'Material Design Iconic', 'designthemes-core' ) => 'material_design_iconic_font',
					__( 'Material', 'designthemes-core' )               => 'material',
					__( 'Mono Social', 'designthemes-core' )            => 'monosocial',
					__( 'Open Iconic', 'designthemes-core' )            => 'openiconic',
					__( 'Pe Icon 7 Stroke', 'designthemes-core' )       => 'pe_icon_7_stroke',
					__( 'Stroke Gap', 'designthemes-core' )             => 'stroke',
					__( 'Typicons', 'designthemes-core' )               => 'typicons',
                ),
            ),

            # Icon
                # Entypo
                array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'icon_type_entypo',
					'save_always' => true,
					'value'       => 'entypo-icon entypo-icon-note',
					'settings'    => array( 'emptyIcon' => false, 'type' => 'entypo', 'iconsPerPage' => 4000 ),
					'dependency'  => array( 'element' => 'icon_type', 'value' => 'entypo' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
                ),               

                # Font Awesome
                array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'icon_type_fontawesome',
					'save_always' => true,
					'value'       => 'fa fa-adjust',
					'settings'    => array( 'emptyIcon' => false, 'iconsPerPage' => 4000 ),
					'dependency'  => array( 'element' => 'icon_type', 'value' => 'fontawesome' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
                ),

                # Icon Moon Line            
                array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'icon_type_icon_moon_line',
					'save_always' => true,
					'value'       => 'dt-icon-moon-line line-icon-Add-Bag',
					'settings'    => array( 'type' => 'icon-moon-line', 'emptyIcon' => false, 'iconsPerPage' => 200 ),
					'dependency'  => array( 'element' => 'icon_type', 'value' => 'icon_moon_line' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
                ),

                # Icon Moon Solid            
                array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'icon_type_icon_moon_solid',
					'save_always' => true,
					'value'       => 'dt-icon-moon-solid solid-icon-Add-File',
					'settings'    => array( 'type' => 'icon-moon-solid', 'emptyIcon' => false, 'iconsPerPage' => 200 ),
					'dependency'  => array( 'element' => 'icon_type', 'value' => 'icon_moon_solid' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
                ),

                # Icon Moon Ultimate            
                array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'icon_type_icon_moon_ultimate',
					'save_always' => true,
					'value'       => 'dt-icon-moon-ultimate ultimate-icon-office',
					'settings'    => array( 'type' => 'icon-moon-ultimate', 'emptyIcon' => false, 'iconsPerPage' => 200 ),
					'dependency'  => array( 'element' => 'icon_type', 'value' => 'icon_moon_ultimate' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
                ),

                # Linecons
                array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'icon_type_linecons',
					'save_always' => true,
					'value'       => 'vc_li vc_li-heart',
					'settings'    => array( 'emptyIcon' => false,  'type' => 'linecons', 'iconsPerPage' => 4000 ),
					'dependency'  => array( 'element' => 'icon_type', 'value' => 'linecons', ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
                ),

                # Material Design Iconic                                 
                array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'icon_type_material_design_iconic_font',
					'save_always' => true,
					'value'       => 'dt-material-design-iconic zmdi zmdi-airplane',
					'settings'    => array( 'type' => 'material-design-iconic-font', 'emptyIcon' => false, 'iconsPerPage' => 200 ),
					'dependency'  => array( 'element' => 'icon_type', 'value' => 'material_design_iconic_font', ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
                ),

                # Material
                array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'icon_type_material',
					'save_always' => true,
					'value'       => 'vc-material vc-material-cake',
					'settings'    => array( 'type' => 'material', 'emptyIcon' => false, 'iconsPerPage' => 200 ),
					'dependency'  => array( 'element' => 'icon_type', 'value' => 'material', ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
                ),

                # Mono Social
                array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'icon_type_monosocial',
					'value'       => 'vc-mono vc-mono-fivehundredpx',
					'save_always' => true,
					'settings'    => array( 'emptyIcon' => false, 'type' => 'monosocial', 'iconsPerPage' => 4000 ),
					'dependency'  => array( 'element' => 'icon_type', 'value' => 'monosocial', ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
                ),

                # Open Iconic
                array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'icon_type_openiconic',
					'value'       => 'vc-oi vc-oi-dial',
					'settings'    => array( 'emptyIcon' => false, 'type' => 'openiconic', 'iconsPerPage' => 4000, ),
					'dependency'  => array( 'element' => 'icon_type', 'value' => 'openiconic', ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
                ),

                # Pe Icon 7 Stroke
                array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'icon_type_pe_icon_7_stroke',
					'value'       => 'dt-pe-7s pe-7s-hourglass',
					'settings'    => array( 'type' => 'pe-icon-7-stroke', 'emptyIcon' => false, 'iconsPerPage' => 200 ),
					'dependency'  => array( 'element' => 'icon_type', 'value' => 'pe_icon_7_stroke' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),               
                ),

                # Stroke Gap
                array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'icon_type_stroke',
					'value'       => 'dt-stroke-icon icon icon-tie',
					'settings'    => array( 'type' => 'stroke', 'emptyIcon' => false, 'iconsPerPage' => 200 ),
					'dependency'  => array( 'element' => 'icon_type', 'value' => 'stroke' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),               
                ),

                # Typicons
                array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'icon_type_typicons',
					'value'       => 'typcn typcn-adjust-brightness',
					'settings'    => array( 'type' => 'typicons', 'emptyIcon' => false, 'iconsPerPage' => 200 ),
					'dependency'  => array( 'element' => 'icon_type', 'value' => 'typicons' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),               
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
      			"type" => "textfield",
      			"heading" => esc_html__( "Extra class name", 'designthemes-core' ),
      			"param_name" => "class",
      			"value" => '',
      			'description' => esc_html__('Style particular element differently - add a class name and refer to it in custom CSS','designthemes-core')
      		)						
		)
	) );	
}?>