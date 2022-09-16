<?php add_action( 'vc_before_init', 'dt_sc_progress_bar_vc_map' );
function dt_sc_progress_bar_vc_map() {
	vc_map( array(
		"name"     => esc_html__( "Progress Bar", 'designthemes-core' ),
		"base"     => "dt_sc_progress_bar",
		"icon"     => "dt_sc_progress_bar",
		"category" => DT_VC_CATEGORY,
		"params"   => array(

			// Type
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Type', 'designthemes-core'),
				'param_name'  => 'type',
				'admin_label' => true,
				'std'         => 'progress-striped',
				'save_always' => true,
				'value'       => array(
					esc_html__('Standard','designthemes-core')       => 'standard',
					esc_html__('Striped','designthemes-core')        => 'progress-striped',
					esc_html__('Active Striped','designthemes-core') => 'progress-striped-active'
				),
			),

			// Style
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Style', 'designthemes-core'),
				'param_name'  => 'style',
				'save_always' => true,
				'value'       => array(
					esc_html__('Style 1','designthemes-core') => 'style1',
					esc_html__('Style 2','designthemes-core') => 'style2',
					esc_html__('Style 3','designthemes-core') => 'style3',
					esc_html__('Style 4','designthemes-core') => 'style4',
					esc_html__('Style 5','designthemes-core') => 'style5',					
				),
			),

			// Label			
			array(
				"type"        => "textfield",
				'admin_label' => true,
				"heading"     => esc_html__( "Label", 'designthemes-core' ),
				"param_name"  => "text",
				"description" => esc_html__( "Enter text used as title of bar", 'designthemes-core' ),
      		),

      		# Label Icon
	      		array(
					'type'        => 'dropdown',
					'heading'     => esc_html__('Label Icon Type','designthemes-core'),
					'param_name'  => 'label_icon_type',
					'std'         => 'fontawesome',
					'save_always' => true,
					'dependency'  => array(  
						'element' => 'style',
						'value'   => 'style5' ), 
					'value'       => array( 
						esc_html__('Font Awesome', 'designthemes-core' ) => 'fontawesome' ,
						esc_html__( 'Open Iconic', 'designthemes-core' ) => 'openiconic',
						esc_html__( 'Typicons', 'designthemes-core' )    => 'typicons',
						esc_html__( 'Entypo', 'designthemes-core' )      => 'entypo',
						esc_html__( 'Linecons', 'designthemes-core' )    => 'linecons',
						esc_html__( 'Mono Social', 'designthemes-core' ) => 'monosocial',
						esc_html__( 'Material', 'designthemes-core' )    => 'material',
						esc_html__( 'Class','designthemes-core')         => 'css_class' 
	                ),
	            ),
				array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'label_icon_fontawesome',
					'save_always' => true,
					'value'       => 'fa fa-adjust', 
					'settings'    => array( 
						'emptyIcon'    => false,
						'iconsPerPage' => 4000 ),
					'dependency'  => array( 
						'element' => 'label_icon_type',
						'value'   => 'fontawesome' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
				),
				array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'label_icon_openiconic',
					'value'       => 'vc-oi vc-oi-dial',
					'save_always' => true,
					'settings'    => array( 
						'emptyIcon'    => false,
						'type'         => 'openiconic',
						'iconsPerPage' => 4000 ),
					'dependency'  => array(
						'element' => 'label_icon_type',
						'value'   => 'openiconic' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
				),
				array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'label_icon_typicons',
					'save_always' => true,
					'value'       => 'typcn typcn-adjust-brightness',
					'settings'    => array( 
						'emptyIcon'    => false,
						'type'         => 'typicons',
						'iconsPerPage' => 4000 ),
					'dependency'  => array( 
						'element' => 'label_icon_type',
						'value'   => 'typicons' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
				),
				array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'label_icon_entypo',
					'save_always' => true,
					'value'       => 'entypo-icon entypo-icon-note',
					'settings'    => array( 
						'emptyIcon'    => false,
						'type'         => 'entypo',
						'iconsPerPage' => 4000 ),
					'dependency'  => array( 
						'element' => 'label_icon_type',
						'value'   => 'entypo' )
				),
				array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'label_icon_linecons',
					'value'       => 'vc_li vc_li-heart',
					'save_always' => true,
					'settings'    => array(
						'emptyIcon'    => false,
						'type'         => 'linecons',
						'iconsPerPage' => 4000 ),
					'dependency'  => array(
						'element' => 'label_icon_type',
						'value'   => 'linecons' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
				),
				array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'label_icon_monosocial',
					'value'       => 'vc-mono vc-mono-fivehundredpx',
					'save_always' => true,
					'settings'    => array(
						'emptyIcon'    => false,
						'type'         => 'monosocial',
						'iconsPerPage' => 4000 ),
					'dependency'  => array(
						'element' => 'label_icon_type',
						'value'   => 'monosocial' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
				),
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Custom class', 'designthemes-core' ),
					'param_name' => 'label_icon_css_class',
					'dependency' => array( 'element' => 'label_icon_type', 'value'   => 'css_class' )
				),
      		# Label Icon

			// Value			
			array(
				"type"        => "textfield",
				'admin_label' => true,
				"heading"     => esc_html__( "Value", 'designthemes-core' ),
				"param_name"  => "value",
				"description" => esc_html__( "Enter value of bar e.g. 70% enter 70 only", 'designthemes-core' ),
      		),

			// Colorpicker			
			array(
				"type"        => "colorpicker",
				"heading"     => esc_html__( "Color", 'designthemes-core' ),
				"param_name"  => "color",
				"description" => esc_html__( "Select bar background color", 'designthemes-core' ),
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