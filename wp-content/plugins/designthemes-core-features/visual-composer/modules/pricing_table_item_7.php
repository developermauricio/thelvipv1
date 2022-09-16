<?php add_action( 'vc_before_init', 'dt_sc_pricing_table_7_vc_map' );
function dt_sc_pricing_table_7_vc_map() {
	vc_map( array( 
		"name"     => esc_html__( "Pricing Box 7", 'designthemes-core' ),
		"base"     => "dt_sc_pricing_table_item_7",
		"icon"     => "dt_sc_pricing_table_item_7",
		"category" => DT_VC_CATEGORY,
		"params"   => array(

      		// Thumb
			array(
				'type'        => 'attach_image',
				'heading'     => esc_html__( 'Image', 'designthemes-core' ),
				'param_name'  => 'thumb',
				'description' => esc_html__( 'Select image from media library', 'designthemes-core' ),
			),			

      		// selected
      		array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Is active?', 'designthemes-core' ),
				'admin_label' => true,
				'param_name'  => 'highlight',
				'description' => esc_html__( 'If checked pricing box will be highlighted', 'designthemes-core' ),
				'value'       => array( esc_html__( 'Yes', 'designthemes-core' ) => 'yes' )
      		),			

			// Price
      		array(
				"type"        => "textfield",
				"heading"     => esc_html__( "Price", 'designthemes-core' ),
				"param_name"  => "price",
				"description" => esc_html__("Enter the price for this package e.g. $25",'designthemes-core'),
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
						   
      		# URL
      		array(
				'type'        => 'vc_link',
				'heading'     => esc_html__( 'URL (Link)', 'designthemes-core' ),
				'param_name'  => 'link',
				'description' => esc_html__( 'Add link to this package', 'designthemes-core' )
      		),

      		// Content
      		array(
				'type'        => 'param_group',
				'heading'     => __( 'Values', 'designthemes-core' ),
				'param_name'  => 'values',
				'group'       => 'Content',
				'description' => __( 'Enter values for pricing table item - title.', 'designthemes-core' ),
				'value'       => urlencode( json_encode( array(
      				array( 'label' => __('Stater Pack Included','designthemes-core') ),
      				array( 'label' => __('Personal Trainer','designthemes-core') ),
      				array( 'label' => __('Convienient Time','designthemes-core') ),
      				array( 'label' => __('Special Class','designthemes-core') ),
      				array( 'label' => __('Group Training','designthemes-core') ),
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
						'heading'    => __( 'Enable It?', 'designthemes-core' ),
						'param_name' => 'is_enable',
						'value'      => array( esc_html__( 'Yes', 'designthemes-core' ) => 'yes' )
      				),
      			)
      		)      		
		)
	) );
}?>