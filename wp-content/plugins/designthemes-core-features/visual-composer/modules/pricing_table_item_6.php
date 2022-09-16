<?php add_action('vc_before_init', 'dt_sc_pricing_table_6_vc_map');
function dt_sc_pricing_table_6_vc_map()
{
	vc_map(array(
		"name" => esc_html__("Pricing Box 6", 'designthemes-core'),
		"base" => "dt_sc_pricing_table_6",
		"icon" => "dt_sc_pricing_table_6",
		"category" => DT_VC_CATEGORY,
		"params" => array(

			array(
				"type" => "textfield",
				"heading" => esc_html__("Title", 'designthemes-core'),
				'admin_label' => true,
				"param_name" => "heading"
			),

			array(
				'type' => 'checkbox',
				'heading' => esc_html__('Is active?', 'designthemes-core'),
				'admin_label' => true,
				'param_name' => 'highlight',
				'description' => esc_html__('If checked pricing box will be highlighted', 'designthemes-core'),
				'value' => array(esc_html__('Yes', 'designthemes-core') => 'yes')
			),

      		// Add Icon / Image
			array(
				'type' => 'checkbox',
				'heading' => __('Add icon or image?', 'designthemes-core'),
				'param_name' => 'add_icon',
				'value' => array(esc_html__('Yes', 'designthemes-core') => 'yes')
			),

			array(
				'type' => 'dropdown',
				'heading' => __('Icon library', 'designthemes-core'),
				'param_name' => 'type',
				'save_always' => true,
				'value' => array(
					__('Font Awesome', 'designthemes-core') => 'fontawesome',
					__('Open Iconic', 'designthemes-core') => 'openiconic',
					__('Typicons', 'designthemes-core') => 'typicons',
					__('Entypo', 'designthemes-core') => 'entypo',
					__('Linecons', 'designthemes-core') => 'linecons',
					__('Mono Social', 'designthemes-core') => 'monosocial',
					__('Image', 'designthemes-core') => 'image'
				),
				'description' => __('Select icon library.', 'designthemes-core'),
				'dependency' => array(
					'element' => 'add_icon',
					'value' => 'yes'
				)
			),

			array(
				'type' => 'iconpicker',
				'heading' => __('Icon', 'designthemes-core'),
				'param_name' => 'icon_fontawesome',
				'save_always' => true,
				'value' => 'fa fa-adjust',
				'settings' => array(
					'emptyIcon' => false,
					'iconsPerPage' => 4000,
				),
				'dependency' => array(
					'element' => 'type',
					'value' => 'fontawesome',
				),
				'description' => __('Select icon from library.', 'designthemes-core'),
			),

			array(
				'type' => 'iconpicker',
				'heading' => __('Icon', 'designthemes-core'),
				'param_name' => 'icon_openiconic',
				'save_always' => true,
				'value' => 'vc-oi vc-oi-dial',
				'settings' => array(
					'emptyIcon' => false,
					'type' => 'openiconic',
					'iconsPerPage' => 4000,
				),
				'dependency' => array(
					'element' => 'type',
					'value' => 'openiconic',
				),
				'description' => __('Select icon from library.', 'designthemes-core'),
			),

			array(
				'type' => 'iconpicker',
				'heading' => __('Icon', 'designthemes-core'),
				'param_name' => 'icon_typicons',
				'save_always' => true,
				'value' => 'typcn typcn-adjust-brightness',
				'settings' => array(
					'emptyIcon' => false,
					'type' => 'typicons',
					'iconsPerPage' => 4000,
				),
				'dependency' => array(
					'element' => 'type',
					'value' => 'typicons',
				),
				'description' => __('Select icon from library.', 'designthemes-core'),
			),

			array(
				'type' => 'iconpicker',
				'heading' => __('Icon', 'designthemes-core'),
				'param_name' => 'icon_entypo',
				'save_always' => true,
				'value' => 'entypo-icon entypo-icon-note',
				'settings' => array(
					'emptyIcon' => false,
					'type' => 'entypo',
					'iconsPerPage' => 4000,
				),
				'dependency' => array(
					'element' => 'type',
					'value' => 'entypo',
				),
			),

			array(
				'type' => 'iconpicker',
				'heading' => __('Icon', 'designthemes-core'),
				'param_name' => 'icon_linecons',
				'save_always' => true,
				'value' => 'vc_li vc_li-heart',
				'settings' => array(
					'emptyIcon' => false,
					'type' => 'linecons',
					'iconsPerPage' => 4000,
				),
				'dependency' => array(
					'element' => 'type',
					'value' => 'linecons',
				),
				'description' => __('Select icon from library.', 'designthemes-core'),
			),

			array(
				'type' => 'iconpicker',
				'heading' => __('Icon', 'designthemes-core'),
				'save_always' => true,
				'param_name' => 'icon_monosocial',
				'value' => 'vc-mono vc-mono-fivehundredpx',
				'settings' => array(
					'emptyIcon' => false,
					'type' => 'monosocial',
					'iconsPerPage' => 4000,
				),
				'dependency' => array(
					'element' => 'type',
					'value' => 'monosocial',
				),
				'description' => __('Select icon from library.', 'designthemes-core'),
			),


			array(
				'type' => 'attach_image',
				'heading' => esc_html__('Image', 'designthemes-core'),
				'param_name' => 'thumb',
				'dependency' => array(
					'element' => 'type',
					'value' => 'image',
				),
				'description' => esc_html__('Select image from media library', 'designthemes-core'),
			),

			// Color
			array(
				'type' => 'colorpicker',
				'heading' => __('Color', 'designthemes-core'),
				'param_name' => 'color',
				'description' => __('Select heading top color.', 'designthemes-core')
			),

			// Currency
			array(
				"type" => "textfield",
				"heading" => esc_html__("Currency", 'designthemes-core'),
				"param_name" => "currency",
				"description" => esc_html__("Enter the price for this package e.g. $157.99 enter $ here", 'designthemes-core'),
			),

			// Price
			array(
				"type" => "textfield",
				"heading" => esc_html__("Price", 'designthemes-core'),
				"param_name" => "price",
				"description" => esc_html__("Enter the price for this package e.g. $157 enter 157 here", 'designthemes-core'),
			),

			// Price Unit
			array(
				"type" => "textfield",
				"heading" => esc_html__("Price Unit", 'designthemes-core'),
				"param_name" => "unit",
				"description" => esc_html__("Enter the price unit for this package e.g. / month", 'designthemes-core')
			),

      		// Button
			array(
				'type' => 'vc_link',
				'heading' => esc_html__('URL (Link)', 'designthemes-core'),
				'param_name' => 'link',
				'description' => esc_html__('Add link to this package', 'designthemes-core')
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


      		// Content
			array(
				'type' => 'param_group',
				'heading' => __('Values', 'designthemes-core'),
				'param_name' => 'values',
				'group' => 'Content',
				'description' => __('Enter values for pricing table item - title and icon.', 'designthemes-core'),
				'value' => urlencode(json_encode(array(
					array('label' => __('Stater Pack Included', 'designthemes-core')),
					array('label' => __('Personal Trainer', 'designthemes-core')),
					array('label' => __('Convienient Time', 'designthemes-core')),
					array('label' => __('Special Class', 'designthemes-core')),
					array('label' => __('Group Training', 'designthemes-core')),
				))),
				'params' => array(

					array(
						'type' => 'textfield',
						'heading' => __('Label', 'designthemes-core'),
						'param_name' => 'label',
						'description' => __('Enter text used as title of bar.', 'designthemes-core'),
						'admin_label' => true
					),

					array(
						'type' => 'checkbox',
						'heading' => __('Strike it out?', 'designthemes-core'),
						'param_name' => 'is_stricked_out',
						'value' => array(esc_html__('Yes', 'designthemes-core') => 'yes')
					),

					array(
						'type' => 'checkbox',
						'heading' => __('Add icon?', 'designthemes-core'),
						'param_name' => 'add_item_icon',
						'value' => array(esc_html__('Yes', 'designthemes-core') => 'yes')
					),

					array(
						'type' => 'dropdown',
						'heading' => __('Icon library', 'designthemes-core'),
						'save_always' => true,
						'param_name' => 'item_icon_type',
						'description' => __('Select icon library.', 'designthemes-core'),
						'dependency' => array(
							'element' => 'add_item_icon',
							'value' => 'yes'
						),
						'value' => array(
							__('Font Awesome', 'designthemes-core') => 'fontawesome',
							__('Open Iconic', 'designthemes-core') => 'openiconic',
							__('Typicons', 'designthemes-core') => 'typicons',
							__('Entypo', 'designthemes-core') => 'entypo',
							__('Linecons', 'designthemes-core') => 'linecons',
							__('Mono Social', 'designthemes-core') => 'monosocial',
						),
					),

					array(
						'type' => 'iconpicker',
						'heading' => __('Icon', 'designthemes-core'),
						'param_name' => 'item_icon_fontawesome',
						'value' => 'fa fa-adjust',
						'settings' => array(
							'emptyIcon' => false,
							'iconsPerPage' => 4000,
						),
						'dependency' => array(
							'element' => 'item_icon_type',
							'value' => 'fontawesome'
						),
						'description' => __('Select icon from library.', 'designthemes-core'),
					),

					array(
						'type' => 'iconpicker',
						'heading' => __('Icon', 'designthemes-core'),
						'param_name' => 'item_icon_openiconic',
						'value' => 'vc-oi vc-oi-dial',
						'settings' => array(
							'emptyIcon' => false,
							'type' => 'openiconic',
							'iconsPerPage' => 4000,
						),
						'dependency' => array(
							'element' => 'item_icon_type',
							'value' => 'openiconic',
						),
						'description' => __('Select icon from library.', 'designthemes-core'),
					),

					array(
						'type' => 'iconpicker',
						'heading' => __('Icon', 'designthemes-core'),
						'param_name' => 'item_icon_typicons',
						'value' => 'typcn typcn-adjust-brightness',
						'settings' => array(
							'emptyIcon' => false,
							'type' => 'typicons',
							'iconsPerPage' => 4000,
						),
						'dependency' => array(
							'element' => 'item_icon_type',
							'value' => 'typicons',
						),
						'description' => __('Select icon from library.', 'designthemes-core'),
					),

					array(
						'type' => 'iconpicker',
						'heading' => __('Icon', 'designthemes-core'),
						'param_name' => 'item_icon_entypo',
						'value' => 'entypo-icon entypo-icon-note',
						'settings' => array(
							'emptyIcon' => false,
							'type' => 'entypo',
							'iconsPerPage' => 4000,
						),
						'dependency' => array(
							'element' => 'item_icon_type',
							'value' => 'entypo',
						),
					),

					array(
						'type' => 'iconpicker',
						'heading' => __('Icon', 'designthemes-core'),
						'param_name' => 'item_icon_linecons',
						'value' => 'vc_li vc_li-heart',
						'settings' => array(
							'emptyIcon' => false,
							'type' => 'linecons',
							'iconsPerPage' => 4000,
						),
						'dependency' => array(
							'element' => 'item_icon_type',
							'value' => 'linecons',
						),
						'description' => __('Select icon from library.', 'designthemes-core'),
					),

					array(
						'type' => 'iconpicker',
						'heading' => __('Icon', 'designthemes-core'),
						'param_name' => 'item_icon_monosocial',
						'value' => 'vc-mono vc-mono-fivehundredpx',
						'settings' => array(
							'emptyIcon' => false,
							'type' => 'monosocial',
							'iconsPerPage' => 4000,
						),
						'dependency' => array(
							'element' => 'item_icon_type',
							'value' => 'monosocial',
						),
						'description' => __('Select icon from library.', 'designthemes-core'),
					),
				)
			)

		)
	));
} ?>