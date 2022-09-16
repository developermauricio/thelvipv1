<?php 

vc_map( array(
	"name" => esc_html__( 'Product Single - Summary', 'designthemes-core' ),
	"base" => "dt_sc_product_summary",
	"icon" => "dt_sc_product_summary",
	"category" => DT_VC_SHOP,
	"params" => array(

		// Class
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Class', 'designthemes-core' ),
			'param_name' => 'class',
			'description' => esc_html__( 'If you wish you can add additional class name here.', 'designthemes-core' ),	
			'edit_field_class' => 'vc_column vc_col-sm-6'			
		),

		// Item to Show & its Order
		array(
			'type' => 'autocomplete',
			'heading' => esc_html__( 'Items', 'designthemes-core' ),
			'param_name' => 'items',
			'settings'    => array(
				'multiple'       => true,
				'sortable'       => true,
				'min_length'     => 1,
				'no_hide'        => true,
				'groups'         => true,
				'unique_values'  => true,
				'display_inline' => false,
				'values'   => array ( 
								array ( 'label' => esc_html__('Summary Title', 'designthemes-core'), 'value' => 'title' ),
								array ( 'label' => esc_html__('Summary Rating', 'designthemes-core'), 'value' => 'rating' ),
								array ( 'label' => esc_html__('Summary Price', 'designthemes-core'), 'value' => 'price' ),
								array ( 'label' => esc_html__('Summary Count Down', 'designthemes-core'), 'value' => 'countdown' ),
								array ( 'label' => esc_html__('Summary Excerpt', 'designthemes-core'), 'value' => 'excerpt' ),
								array ( 'label' => esc_html__('Summary Add To Cart', 'designthemes-core'), 'value' => 'addtocart' ),
								array ( 'label' => esc_html__('Summary Buttons', 'designthemes-core'), 'value' => 'buttons' ),
								array ( 'label' => esc_html__('Summary Meta', 'designthemes-core'), 'value' => 'meta' ),
								array ( 'label' => esc_html__('Summary Meta SKU', 'designthemes-core'), 'value' => 'meta_sku' ),
								array ( 'label' => esc_html__('Summary Meta Category', 'designthemes-core'), 'value' => 'meta_category' ),
								array ( 'label' => esc_html__('Summary Meta Tag', 'designthemes-core'), 'value' => 'meta_tag' ),
								array ( 'label' => esc_html__('Summary Share / Follow', 'designthemes-core'), 'value' => 'share_follow' ),
								array ( 'label' => esc_html__('Summary Additional Content', 'designthemes-core'), 'value' => 'additional_content' ),
								array ( 'label' => esc_html__('Summary Additional Information', 'designthemes-core'), 'value' => 'additional_information' ),
								array ( 'label' => esc_html__('Summary Separator 1', 'designthemes-core'), 'value' => 'separator1' ),
								array ( 'label' => esc_html__('Summary Separator 2', 'designthemes-core'), 'value' => 'separator2' )
							),
			),
			'std' => 'title,rating,price,excerpt,addtocart,meta',
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'description' => sprintf(esc_html__( 'Choose items that you want to display in summary and also you can change its order here. Start typing %1$s to list all available options.', 'designthemes-core' ), '<strong>Summary...</strong>'),	
		),		

		// Button Item to Show & its Order
		array(
			'type' => 'autocomplete',
			'heading' => esc_html__( 'Button Items', 'designthemes-core' ),
			'param_name' => 'button_items',
			'settings'    => array(
				'multiple' => true,
				'sortable' => true,
				'min_length' => 1,
				'no_hide' => true,
				'groups' => true,
				'unique_values' => true,
				'display_inline' => false,
				'values'   => array ( 
								array ( 'label' => esc_html__('Button Wishlist', 'designthemes-core'), 'value'   => 'wishlist' ),
								array ( 'label' => esc_html__('Button Compare', 'designthemes-core'), 'value'    => 'compare' ),
								array ( 'label' => esc_html__('Button Size Guide', 'designthemes-core'), 'value' => 'sizeguide' )
							),
			),
			'std' => '',
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'description' => sprintf(esc_html__( 'Choose button items that you want to display in Summary Buttons and also you can change its order here. Start typing %1$s to list all available options.', 'designthemes-core' ), '<strong>Button...</strong>'),	
		),

  		// Additional Content
		array(
			'type' => 'textarea_html',
			'heading' => esc_html__('Additional Content','designthemes-core'),
			'param_name' => 'content',
			'value' => ''
        ),

		// Share / Follow
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Share / Follow Type', 'designthemes-core'),
			'description' => esc_html__('Choose between Share / Follow you would like to use.', 'designthemes-core'),
			'param_name' => 'share_follow_type',
			'value' => array(
				esc_html__( 'Share', 'designthemes-core' ) => 'share',
				esc_html__( 'Follow', 'designthemes-core' ) => 'follow',
			),
			'std' => 'share',
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),

		// Alignment
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Alignment', 'designthemes-core'),
			'description' => esc_html__('Choose alignment you would like to use for your product summary.', 'designthemes-core'),
			'param_name' => 'alignment',
			'value' => array(
				esc_html__( 'Left', 'designthemes-core' ) => '',
				esc_html__( 'Center', 'designthemes-core' ) => 'aligncenter',
				esc_html__( 'Right', 'designthemes-core' ) => 'alignright',
			),
			'std' => '',
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),

		// Button Style
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Button Style', 'designthemes-core'),
			'description' => esc_html__('This option is applicable for all buttons used in product summary.', 'designthemes-core'),
			'param_name' => 'button_style',
			'value' => array(
				esc_html__( 'Simple', 'designthemes-core' ) => 'simple',
				esc_html__( 'BG Fill', 'designthemes-core' ) => 'bgfill',
				esc_html__( 'Border Fill', 'designthemes-core' ) => 'brdrfill',
				esc_html__( 'Skin BG Fill', 'designthemes-core' ) => 'skin-bgfill',
				esc_html__( 'Skin Border Fill', 'designthemes-core' ) => 'skin-brdrfill',
			),
			'std' => 'simple',
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),

		// Button Radius
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Button Radius', 'designthemes-core'),
			'description' => esc_html__('This option is applicable for all buttons used in product summary.', 'designthemes-core'),
			'param_name' => 'button_radius',
			'value' => array(
				esc_html__( 'Square', 'designthemes-core' ) => 'square',
				esc_html__( 'Rounded', 'designthemes-core' ) => 'rounded',
				esc_html__( 'Circle', 'designthemes-core' ) => 'circle'
			),
			'std' => '',
			'dependency'  => array( 'element' => 'button_style', 'value' => array ('bgfill', 'brdrfill', 'skin-bgfill', 'skin-brdrfill') ),
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),

		// Button Inline Alignment
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Button Inline Alignment', 'designthemes-core'),
			'description' => esc_html__('This option is applicable for all buttons used in product summary.', 'designthemes-core'),
			'param_name' => 'button_inline_alignment',
			'value' => array(
				esc_html__( 'False', 'designthemes-core' ) => 'false',
				esc_html__( 'True', 'designthemes-core' ) => 'true'
			),
			'std' => 'false',
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),

		// Button Hide Text
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Button Hide Text', 'designthemes-core'),
			'description' => esc_html__('This option is applicable for all buttons used in product summary.', 'designthemes-core'),
			'param_name' => 'button_hide_text',
			'value' => array(
				esc_html__( 'False', 'designthemes-core' ) => 'false',
				esc_html__( 'True', 'designthemes-core' ) => 'true'
			),
			'std' => 'false',
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),

		// Social Icon Style
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Social Icon Style', 'designthemes-core'),
			'description' => esc_html__('This option is applicable for all social icons used in product summary.', 'designthemes-core'),
			'param_name' => 'social_icon_style',
			'value' => array(
				esc_html__( 'Simple', 'designthemes-core' ) => 'simple',
				esc_html__( 'BG Fill', 'designthemes-core' ) => 'bgfill',
				esc_html__( 'Border Fill', 'designthemes-core' ) => 'brdrfill',
				esc_html__( 'Skin BG Fill', 'designthemes-core' ) => 'skin-bgfill',
				esc_html__( 'Skin Border Fill', 'designthemes-core' ) => 'skin-brdrfill',
			),
			'std' => 'simple',
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),

		// Social Icon Radius
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Social Icon Radius', 'designthemes-core'),
			'description' => esc_html__('This option is applicable for all social icons used in product summary.', 'designthemes-core'),
			'param_name' => 'social_icon_radius',
			'value' => array(
				esc_html__( 'Square', 'designthemes-core' ) => 'square',
				esc_html__( 'Rounded', 'designthemes-core' ) => 'rounded',
				esc_html__( 'Circle', 'designthemes-core' ) => 'circle'
			),
			'std' => '',
			'dependency'  => array( 'element' => 'social_icon_style', 'value' => array ('bgfill', 'brdrfill', 'skin-bgfill', 'skin-brdrfill') ),
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),

		// Social Icon Inline Alignment
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Social Icon Inline Alignment', 'designthemes-core'),
			'description' => esc_html__('This option is applicable for all social icons used in product summary.', 'designthemes-core'),
			'param_name' => 'social_icon_inline_alignment',
			'value' => array(
				esc_html__( 'False', 'designthemes-core' ) => 'false',
				esc_html__( 'True', 'designthemes-core' ) => 'true'
			),
			'std' => 'false',
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),
		
		// Meta Inline Alignment
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Meta Inline Alignment', 'designthemes-core'),
			'description' => esc_html__('This option is applicable for all meta items used in product summary.', 'designthemes-core'),
			'param_name' => 'meta_inline_alignment',
			'value' => array(
				esc_html__( 'False', 'designthemes-core' ) => 'false',
				esc_html__( 'True', 'designthemes-core' ) => 'true'
			),
			'std' => 'false',
			'edit_field_class' => 'vc_column vc_col-sm-6'
		)		
		
	)
) );

?>