<?php add_action( 'vc_before_init', 'dt_sc_pricing_table_item_3_vc_map' );
function dt_sc_pricing_table_item_3_vc_map() {
	vc_map( array(
		"name"     => esc_html__( "Pricing Box 3", 'designthemes-core' ),
		"base"     => "dt_sc_pricing_table_item_3",
		"icon"     => "dt_sc_pricing_table_item_3",
		"category" => DT_VC_CATEGORY,		
		"params"   => array(

      		array(
				"type"       => "textfield",
				"heading"    => esc_html__( "Title", 'designthemes-core' ),
				"param_name" => "title"
      		),

      		# Title Icon
	      		array(
					'type'        => 'dropdown',
					'heading'     => esc_html__('Title Icon Type','designthemes-core'),
					'param_name'  => 'title_icon_type',
					'std'         => 'fontawesome',
					'save_always' => true, 
					'value'       => array( 
						esc_html__('Font Awesome', 'designthemes-core' ) => 'fontawesome',
						esc_html__('Class','designthemes-core')          => 'css_class' 
	                ),
	            ),

				array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'title_icon_fontawesome',
					'value'       => 'fa fa-adjust', 
					'save_always' => true,
					'settings'    => array( 
						'emptyIcon'    => false,
						'iconsPerPage' => 4000 ),
					'dependency'  => array( 
						'element' => 'title_icon_type',
						'value'   => 'fontawesome' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
				),

				array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'title_icon_openiconic',
					'value'       => 'vc-oi vc-oi-dial',
					'save_always' => true,
					'settings'    => array( 
						'emptyIcon'    => false,
						'type'         => 'openiconic',
						'iconsPerPage' => 4000 ),
					'dependency'  => array(
						'element' => 'title_icon_type',
						'value'   => 'openiconic' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
				),

				array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'title_icon_typicons',
					'value'       => 'typcn typcn-adjust-brightness',
					'save_always' => true,
					'settings'    => array( 
						'emptyIcon'    => false,
						'type'         => 'typicons',
						'iconsPerPage' => 4000 ),
					'dependency'  => array( 
						'element' => 'title_icon_type',
						'value'   => 'typicons' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
				),

				array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'title_icon_entypo',
					'value'       => 'entypo-icon entypo-icon-note',
					'save_always' => true,
					'settings'    => array( 
						'emptyIcon'    => false,
						'type'         => 'entypo',
						'iconsPerPage' => 4000 ),
					'dependency'  => array( 
						'element' => 'title_icon_type',
						'value'   => 'entypo' )
				),

				array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'title_icon_linecons',
					'value'       => 'vc_li vc_li-heart',
					'save_always' => true,
					'settings'    => array(
						'emptyIcon'    => false,
						'type'         => 'linecons',
						'iconsPerPage' => 4000 ),
					'dependency'  => array(
						'element' => 'title_icon_type',
						'value'   => 'linecons' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
				),

				array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'title_icon_monosocial',
					'value'       => 'vc-mono vc-mono-fivehundredpx',
					'save_always' => true,					 
					'settings'    => array( 
						'emptyIcon'    => false,
						'type'         => 'monosocial',
						'iconsPerPage' => 4000 ),
					'dependency'  => array( 
						'element' => 'title_icon_type',
						'value'   => 'monosocial' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
				),

				array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'title_icon_material',
					'save_always' => true,
					'value'       => 'icon icon-book',
					'settings'    => array( 
						'type'         => 'material',
						'emptyIcon'    => false,
						'iconsPerPage' => 200 ),
					'dependency'  => array( 
						'element' => 'title_icon_type',
						'value'   => 'material' ),
					'description' => __( 'Select icon from library.', 'designthemes-core' ),
				),

				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Custom class', 'designthemes-core' ),
					'param_name' => 'title_icon_css_class',
					'dependency' => array( 'element' => 'title_icon_type', 'value'   => 'css_class' )
                ),
      		# Title Icon

      		array(
				"type"        => "textfield",
				"heading"     => esc_html__( "Price", 'designthemes-core' ),
				"param_name"  => "price",
				"description" => esc_html__("Enter the price for this package e.g. $19.25/month",'designthemes-core'),
      		),

      		# Content
      		array(
				'type'        => 'param_group',
				'heading'     => __( 'Values', 'designthemes-core' ),
				'param_name'  => 'values',
				'group'       => esc_html__( 'Content', 'designthemes-core'),
				'value'       => urlencode( json_encode( array(
					array( 'label' => 'Item 1' ),
					array( 'label' => 'Item 2' ),
					array( 'label' => 'Item 3' ),
				) ) ),
				'params'      => array(
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Label', 'designthemes-core' ),
						'param_name'  => 'label',
						'description' => __( 'Enter text used as title of bar.', 'designthemes-core' ),
						'admin_label' => true
      				),

      				array(
						'type'       => 'checkbox',
						'heading'    => __( 'Add icon?', 'designthemes-core' ),
						'param_name' => 'label_icon',
						'value'      => array( esc_html__( 'Yes', 'designthemes-core' ) => 'yes' )
      				),

		      		# Label Icon
			      		array(
							'type'        => 'dropdown',
							'heading'     => esc_html__('Label Icon Type','designthemes-core'),
							'param_name'  => 'label_icon_type',
							'std'         => 'fontawesome',
							'save_always' => true,
							'dependency'  => array( 
								'element' => 'label_icon',
								'value'   => 'yes' ), 
							'value'       => array( 
								esc_html__('Font Awesome', 'designthemes-core' ) => 'fontawesome' ,
								esc_html__( 'Open Iconic', 'designthemes-core' ) => 'openiconic',
								esc_html__( 'Typicons', 'designthemes-core' )    => 'typicons',
								esc_html__( 'Entypo', 'designthemes-core' )      => 'entypo',
								esc_html__( 'Linecons', 'designthemes-core' )    => 'linecons',
			                ),
			            ),
						array(
							'type'        => 'iconpicker',
							'heading'     => __( 'Icon', 'designthemes-core' ),
							'param_name'  => 'label_icon_fontawesome',
							'value'       => 'fa fa-adjust', 
							'save_always' => true,
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
							'save_always' => true,
							'value'       => 'vc-oi vc-oi-dial',
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
							'save_always' => true,
							'value'       => 'vc_li vc_li-heart',
							'settings'    => array(
								'emptyIcon'    => false,
								'type'         => 'linecons',
								'iconsPerPage' => 4000 ),
							'dependency'  => array(
								'element' => 'label_icon_type',
								'value'   => 'linecons' ),
							'description' => __( 'Select icon from library.', 'designthemes-core' ),
						),
		      		# Label Icon		                  				
				),
				'description' => __( 'Enter values for pricing table item - title and icon.', 'designthemes-core' ),
      		),
      		# Content
      		      		
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
				'type'        => 'vc_link',
				'heading'     => esc_html__( 'URL (Link)', 'designthemes-core' ),
				'param_name'  => 'link',
				'group'       => esc_html__( 'Button', 'designthemes-core'),
				'description' => esc_html__( 'Add link to this package', 'designthemes-core' )
      		),

      		array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Add Icon?', 'designthemes-core' ),
				'admin_label' => true,
				'group'       => esc_html__( 'Button', 'designthemes-core'),
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
					'group'       => esc_html__( 'Button', 'designthemes-core'),
					'dependency'  => array( 
						'element' => 'link_icon',
						'value'   => 'yes' ), 
					'value'       => array( 
						esc_html__('None', 'designthemes-core' ) => '',
						esc_html__('Font Awesome', 'designthemes-core' ) => 'fontawesome'
	                ),
	            ),

				array(
					'type'        => 'iconpicker',
					'heading'     => __( 'Icon', 'designthemes-core' ),
					'param_name'  => 'link_icon_fontawesome',
					'value'       => 'fa fa-adjust', 
					'save_always' => true,
					'group'       => esc_html__( 'Button', 'designthemes-core'),					
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
					'group'       => esc_html__( 'Button', 'designthemes-core'),					
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
					'group'       => esc_html__( 'Button', 'designthemes-core'),					
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
					'group'       => esc_html__( 'Button', 'designthemes-core'),					
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
					'group'       => esc_html__( 'Button', 'designthemes-core'),					
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
					'group'       => esc_html__( 'Button', 'designthemes-core'),					
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
					'group'       => esc_html__( 'Button', 'designthemes-core'),					
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
		)
	) );		
}?>