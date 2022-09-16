<?php add_action( 'vc_before_init', 'dt_sc_pricing_table_4_vc_map' );
function dt_sc_pricing_table_4_vc_map() {

	class WPBakeryShortCode_dt_sc_pricing_box_4 extends WPBakeryShortCodesContainer {
	}

	vc_map( array(
		"name"                    => __( "Pricing Box 4", 'designthemes-core' ),
		"base"                    => "dt_sc_pricing_box_4",
		"icon"                    => "dt_sc_pricing_box_4",
		"category"                => DT_VC_CATEGORY,
		"content_element"         => true,
		"js_view"                 => 'VcColumnView',
		'as_parent'               => array( 'only' => 'dt_sc_pricing_box_4_item' ),
		"show_settings_on_create" => false,
		"params"                  => array(

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
              "type"        => "textfield",
              "heading"     => esc_html__( "Extra class name", 'designthemes-core' ),
              "param_name"  => "class",
              'description' => esc_html__('Style particular element differently - add a class name and refer to it in custom CSS','designthemes-core')
      		)
		)		
	) );

	vc_map( array(
		"name"     => __( "Item", 'designthemes-core' ),
		"base"     => "dt_sc_pricing_box_4_item",
		"icon"     => "dt_sc_pricing_box_4_item",
		"category" => DT_VC_CATEGORY,
		'as_child' => array( 'only' => 'dt_sc_pricing_box_4' ),		
		"params"   => array(
      		array(
				"type"        => "textfield",
				"heading"     => esc_html__( "Title", 'designthemes-core' ),
				"param_name"  => "title",
				"admin_label" => true
      		),

      		array(
				"type"        => "textfield",
				"heading"     => esc_html__( "Price", 'designthemes-core' ),
				"param_name"  => "price",
				"description" => esc_html__("Enter the price for this package e.g. $19.25/month",'designthemes-core'),
      		),

      		array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Is active?', 'designthemes-core' ),
				'admin_label' => true,
				'param_name'  => 'highlight',
				'description' => esc_html__( 'If checked pricing box will be highlighted', 'designthemes-core' ),
				'value'       => array( esc_html__( 'Yes', 'designthemes-core' ) => 'yes' )
      		),

      		array(
				'type'       => 'textarea_html',
				'heading'    => esc_html__( 'Description', 'designthemes-core' ),
				'param_name' => 'content',
      		),

      		# Content
      		array(
				'type'        => 'param_group',
				'heading'     => __( 'Values', 'designthemes-core' ),
				'param_name'  => 'values',
				'group'       => esc_html__( 'Content', 'designthemes-core'),
				'value'       => urlencode( json_encode( array(
					array( 'label' => 'Item 1', 'is_active' => 'yes' ),
					array( 'label' => 'Item 2' ),
					array( 'label' => 'Item 3', 'is_active' => 'yes' ),
					array( 'label' => 'Item 4' ),
					array( 'label' => 'Item 5' ),
				) ) ),
				'params'      => array(
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Label', 'designthemes-core' ),
						'param_name'  => 'label',
						'admin_label' => true
      				),
      				array(
						'type'        => 'checkbox',
						'heading'     => __( 'Is Active?', 'designthemes-core' ),
						'param_name'  => 'is_active',
						'value'       => array( esc_html__( 'Yes', 'designthemes-core' ) => 'yes' ),
						'admin_label' => true
      				),
				),
				'description' => __( 'Enter values for pricing table item - label and availability.', 'designthemes-core' ),
			),      		

      		# Button 1
	      		array(
					'type'        => 'vc_link',
					'heading'     => esc_html__( 'Button 1', 'designthemes-core' ),
					'param_name'  => 'link',
					'group'       => esc_html__( 'Button 1', 'designthemes-core'),
					'description' => esc_html__( 'Add link to this package', 'designthemes-core' )
	      		),

	      		array(
					'type'        => 'checkbox',
					'heading'     => esc_html__( 'Add Icon?', 'designthemes-core' ),
					'admin_label' => true,
					'group'       => esc_html__( 'Button 1', 'designthemes-core'),
					'param_name'  => 'link_icon',
					'value'       => array( esc_html__( 'Yes', 'designthemes-core' ) => 'yes' )
	      		),      		

	      		# Link Icon
		      		array(
						'type'        => 'dropdown',
						'heading'     => esc_html__('Link Icon Type','designthemes-core'),
						'param_name'  => 'link_icon_type',
						'std'         => 'fontawesome',
						'save_always' => true,
						'group'       => esc_html__( 'Button 1', 'designthemes-core'),
						'dependency'  => array( 
							'element' => 'link_icon',
							'value'   => 'yes' ), 
						'value'       => array( 
							esc_html__('Font Awesome', 'designthemes-core' ) => 'fontawesome' ,
							esc_html__( 'Open Iconic', 'designthemes-core' ) => 'openiconic',
							esc_html__( 'Typicons', 'designthemes-core' )    => 'typicons',
							esc_html__( 'Entypo', 'designthemes-core' )      => 'entypo',
							esc_html__( 'Linecons', 'designthemes-core' )    => 'linecons',
							esc_html__( 'Mono Social', 'designthemes-core' ) => 'monosocial',
							esc_html__( 'Material', 'designthemes-core' )    => 'material',
		                ),
		            ),

					array(
						'type'        => 'iconpicker',
						'heading'     => __( 'Icon', 'designthemes-core' ),
						'param_name'  => 'link_icon_fontawesome',
						'value'       => 'fa fa-adjust', 
						'save_always' => true,
						'group'       => esc_html__( 'Button 1', 'designthemes-core'),					
						'settings'    => array( 
							'emptyIcon'    => false,
							'iconsPerPage' => 4000 ),
						'dependency'  => array( 
							'element' => 'link_icon_type',
							'value'   => 'fontawesome' ),
						'description' => __( 'Select icon from library.', 'designthemes-core' ),
					),

					array(
						'type'        => 'iconpicker',
						'heading'     => __( 'Icon', 'designthemes-core' ),
						'param_name'  => 'link_icon_openiconic',
						'value'       => 'vc-oi vc-oi-dial',
						'save_always' => true,
						'group'       => esc_html__( 'Button 1', 'designthemes-core'),					
						'settings'    => array( 
							'emptyIcon'    => false,
							'type'         => 'openiconic',
							'iconsPerPage' => 4000 ),
						'dependency'  => array(
							'element' => 'link_icon_type',
							'value'   => 'openiconic' ),
						'description' => __( 'Select icon from library.', 'designthemes-core' ),
					),

					array(
						'type'        => 'iconpicker',
						'heading'     => __( 'Icon', 'designthemes-core' ),
						'param_name'  => 'link_icon_typicons',
						'value'       => 'typcn typcn-adjust-brightness',
						'save_always' => true,
						'group'       => esc_html__( 'Button 1', 'designthemes-core'),					
						'settings'    => array( 
							'emptyIcon'    => false,
							'type'         => 'typicons',
							'iconsPerPage' => 4000 ),
						'dependency'  => array( 
							'element' => 'link_icon_type',
							'value'   => 'typicons' ),
						'description' => __( 'Select icon from library.', 'designthemes-core' ),
					),

					array(
						'type'        => 'iconpicker',
						'heading'     => __( 'Icon', 'designthemes-core' ),
						'param_name'  => 'link_icon_entypo',
						'value'       => 'entypo-icon entypo-icon-note',
						'save_always' => true,
						'group'       => esc_html__( 'Button 1', 'designthemes-core'),					
						'settings'    => array( 
							'emptyIcon'    => false,
							'type'         => 'entypo',
							'iconsPerPage' => 4000 ),
						'dependency'  => array( 
							'element' => 'link_icon_type',
							'value'   => 'entypo' )
					),

					array(
						'type'        => 'iconpicker',
						'heading'     => __( 'Icon', 'designthemes-core' ),
						'param_name'  => 'link_icon_linecons',
						'value'       => 'vc_li vc_li-heart',
						'save_always' => true,
						'group'       => esc_html__( 'Button 1', 'designthemes-core'),					
						'settings'    => array(
							'emptyIcon'    => false,
							'type'         => 'linecons',
							'iconsPerPage' => 4000 ),
						'dependency'  => array(
							'element' => 'link_icon_type',
							'value'   => 'linecons' ),
						'description' => __( 'Select icon from library.', 'designthemes-core' ),
					),

					array(
						'type'        => 'iconpicker',
						'heading'     => __( 'Icon', 'designthemes-core' ),
						'param_name'  => 'link_icon_monosocial',
						'value'       => 'vc-mono vc-mono-fivehundredpx',
						'save_always' => true,					 
						'group'       => esc_html__( 'Button 1', 'designthemes-core'),					
						'settings'    => array( 
							'emptyIcon'    => false,
							'type'         => 'monosocial',
							'iconsPerPage' => 4000 ),
						'dependency'  => array( 
							'element' => 'link_icon_type',
							'value'   => 'monosocial' ),
						'description' => __( 'Select icon from library.', 'designthemes-core' ),
					),

					array(
						'type'        => 'iconpicker',
						'heading'     => __( 'Icon', 'designthemes-core' ),
						'param_name'  => 'link_icon_material',
						'save_always' => true,
						'group'       => esc_html__( 'Button 1', 'designthemes-core'),					
						'value'       => 'icon icon-book',
						'settings'    => array( 
							'type'         => 'material',
							'emptyIcon'    => false,
							'iconsPerPage' => 200 ),
						'dependency'  => array( 
							'element' => 'link_icon_type',
							'value'   => 'material' ),
						'description' => __( 'Select icon from library.', 'designthemes-core' ),
					),	            
	      		# Link Icon
      		
      		# Button 2
	      		array(
					'type'        => 'vc_link',
					'heading'     => esc_html__( 'Button 2', 'designthemes-core' ),
					'param_name'  => 'link_2',
					'group'       => esc_html__( 'Button 2', 'designthemes-core'),
					'description' => esc_html__( 'Add link to this package', 'designthemes-core' )
	      		),

	      		array(
					'type'        => 'checkbox',
					'heading'     => esc_html__( 'Add Icon?', 'designthemes-core' ),
					'admin_label' => true,
					'group'       => esc_html__( 'Button 2', 'designthemes-core'),
					'param_name'  => 'link_2_icon',
					'value'       => array( esc_html__( 'Yes', 'designthemes-core' ) => 'yes' )
	      		),      		

	      		# Link Icon
		      		array(
						'type'        => 'dropdown',
						'heading'     => esc_html__('Link Icon Type','designthemes-core'),
						'param_name'  => 'link_2_icon_type',
						'std'         => 'fontawesome',
						'save_always' => true,
						'group'       => esc_html__( 'Button 2', 'designthemes-core'),
						'dependency'  => array( 
							'element' => 'link_2_icon',
							'value'   => 'yes' ), 
						'value'       => array( 
							esc_html__('Font Awesome', 'designthemes-core' ) => 'fontawesome' ,
							esc_html__( 'Open Iconic', 'designthemes-core' ) => 'openiconic',
							esc_html__( 'Typicons', 'designthemes-core' )    => 'typicons',
							esc_html__( 'Entypo', 'designthemes-core' )      => 'entypo',
							esc_html__( 'Linecons', 'designthemes-core' )    => 'linecons',
							esc_html__( 'Mono Social', 'designthemes-core' ) => 'monosocial',
							esc_html__( 'Material', 'designthemes-core' )    => 'material',
		                ),
		            ),

					array(
						'type'        => 'iconpicker',
						'heading'     => __( 'Icon', 'designthemes-core' ),
						'param_name'  => 'link_2_icon_fontawesome',
						'value'       => 'fa fa-adjust', 
						'save_always' => true,
						'group'       => esc_html__( 'Button 2', 'designthemes-core'),					
						'settings'    => array( 
							'emptyIcon'    => false,
							'iconsPerPage' => 4000 ),
						'dependency'  => array( 
							'element' => 'link_2_icon_type',
							'value'   => 'fontawesome' ),
						'description' => __( 'Select icon from library.', 'designthemes-core' ),
					),

					array(
						'type'        => 'iconpicker',
						'heading'     => __( 'Icon', 'designthemes-core' ),
						'param_name'  => 'link_2_icon_openiconic',
						'value'       => 'vc-oi vc-oi-dial',
						'save_always' => true,
						'group'       => esc_html__( 'Button 2', 'designthemes-core'),					
						'settings'    => array( 
							'emptyIcon'    => false,
							'type'         => 'openiconic',
							'iconsPerPage' => 4000 ),
						'dependency'  => array(
							'element' => 'link_2_icon_type',
							'value'   => 'openiconic' ),
						'description' => __( 'Select icon from library.', 'designthemes-core' ),
					),

					array(
						'type'        => 'iconpicker',
						'heading'     => __( 'Icon', 'designthemes-core' ),
						'param_name'  => 'link_2_icon_typicons',
						'value'       => 'typcn typcn-adjust-brightness',
						'save_always' => true,
						'group'       => esc_html__( 'Button 2', 'designthemes-core'),					
						'settings'    => array( 
							'emptyIcon'    => false,
							'type'         => 'typicons',
							'iconsPerPage' => 4000 ),
						'dependency'  => array( 
							'element' => 'link_2_icon_type',
							'value'   => 'typicons' ),
						'description' => __( 'Select icon from library.', 'designthemes-core' ),
					),

					array(
						'type'        => 'iconpicker',
						'heading'     => __( 'Icon', 'designthemes-core' ),
						'param_name'  => 'link_2_icon_entypo',
						'value'       => 'entypo-icon entypo-icon-note',
						'save_always' => true,
						'group'       => esc_html__( 'Button 2', 'designthemes-core'),					
						'settings'    => array( 
							'emptyIcon'    => false,
							'type'         => 'entypo',
							'iconsPerPage' => 4000 ),
						'dependency'  => array( 
							'element' => 'link_2_icon_type',
							'value'   => 'entypo' )
					),

					array(
						'type'        => 'iconpicker',
						'heading'     => __( 'Icon', 'designthemes-core' ),
						'param_name'  => 'link_2_icon_linecons',
						'value'       => 'vc_li vc_li-heart',
						'save_always' => true,
						'group'       => esc_html__( 'Button 2', 'designthemes-core'),					
						'settings'    => array(
							'emptyIcon'    => false,
							'type'         => 'linecons',
							'iconsPerPage' => 4000 ),
						'dependency'  => array(
							'element' => 'link_2_icon_type',
							'value'   => 'linecons' ),
						'description' => __( 'Select icon from library.', 'designthemes-core' ),
					),

					array(
						'type'        => 'iconpicker',
						'heading'     => __( 'Icon', 'designthemes-core' ),
						'param_name'  => 'link_2_icon_monosocial',
						'value'       => 'vc-mono vc-mono-fivehundredpx',
						'save_always' => true,					 
						'group'       => esc_html__( 'Button 2', 'designthemes-core'),					
						'settings'    => array( 
							'emptyIcon'    => false,
							'type'         => 'monosocial',
							'iconsPerPage' => 4000 ),
						'dependency'  => array( 
							'element' => 'link_2_icon_type',
							'value'   => 'monosocial' ),
						'description' => __( 'Select icon from library.', 'designthemes-core' ),
					),

					array(
						'type'        => 'iconpicker',
						'heading'     => __( 'Icon', 'designthemes-core' ),
						'param_name'  => 'link_2_icon_material',
						'save_always' => true,
						'group'       => esc_html__( 'Button 2', 'designthemes-core'),					
						'value'       => 'icon icon-book',
						'settings'    => array( 
							'type'         => 'material',
							'emptyIcon'    => false,
							'iconsPerPage' => 200 ),
						'dependency'  => array( 
							'element' => 'link_2_icon_type',
							'value'   => 'material' ),
						'description' => __( 'Select icon from library.', 'designthemes-core' ),
					),	            
	      		# Link Icon
		)
	) );
}