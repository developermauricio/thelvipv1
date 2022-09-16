<?php add_action( 'vc_before_init', 'dt_sc_post_related_posts_vc_map' );
function dt_sc_post_related_posts_vc_map() {

	vc_map( array(
		"name" => esc_html__( "Post - Related Posts", 'designthemes-core' ),
		"base" => "dt_sc_post_related_posts",
		"icon" => "dt_sc_post_related_posts",
		"category" => DT_VC_CATEGORY,
		"description" => esc_html__("Show related posts of current post",'designthemes-core'),
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

      		// Title
      		array(
      			'type' => 'textfield',
      			'heading' => esc_html__( 'Title', 'designthemes-core' ),
      			'param_name' => 'related_title',
				'value' => esc_html__('Related Posts', 'designthemes-core'),
				'save_always' => true,
      			'description' => esc_html__('Put the related posts section title.','designthemes-core')
      		),

			// Column
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Column', 'designthemes-core'),
				'param_name' => 'related_column',
				'admin_label' => true,
				'save_always' => true,
				'value' => array(
					'I Column' => 'one-column',
					'II Columns' => 'one-half-column',
					'III Columns' => 'one-third-column',
				),
				'std' => 'one-third-column',
			),

      		// Count
      		array(
      			'type' => 'textfield',
      			'heading' => esc_html__( 'Count', 'designthemes-core' ),
      			'param_name' => 'related_count',
				'value' => '3',
				'save_always' => true,
      			'description' => esc_html__('Put no.of related posts to show.','designthemes-core')
      		),

      		// Enable Excerpt
      		array(
      			'type' => 'checkbox',
      			'heading' => esc_html__( 'Enable Excerpt', 'designthemes-core' ),
      			'param_name' => 'related_excerpt',
      			'description' => esc_html__( 'YES! to enable excerpt of related posts.', 'designthemes-core' ),
      			'value' => array( esc_html__( 'Yes', 'designthemes-core' ) => 'yes' ),
				'save_always' => true,
				'edit_field_class' => 'vc_col-xs-6',
      		),

      		// Excerpt Length
      		array(
      			'type' => 'textfield',
      			'heading' => esc_html__( 'Excerpt Length', 'designthemes-core' ),
      			'param_name' => 'related_excerpt_length',
				'value' => '25',
				'save_always' => true,
      			'description' => esc_html__('Put length of excerpt text to show post.','designthemes-core'),
				'dependency'  => array( 'element' => 'related_excerpt', 'value' => array( 'yes' )  ),
      		),

      		// Enable Carousel
      		array(
      			'type' => 'checkbox',
      			'heading' => esc_html__( 'Enable Carousel', 'designthemes-core' ),
      			'param_name' => 'related_carousel',
      			'description' => esc_html__( 'YES! to enable carousel for related posts.', 'designthemes-core' ),
      			'value' => array( esc_html__( 'Yes', 'designthemes-core' ) => 'yes' ),
				'save_always' => true,
				'edit_field_class' => 'vc_col-xs-6',
      		),

			// Nav Style
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Navigation Style', 'designthemes-core'),
				'param_name' => 'related_nav_style',
				'save_always' => true,
				'value' => array(
					esc_html__('None', 'designthemes-core') => '',
					esc_html__('Navigations', 'designthemes-core') => 'navigation',
					esc_html__('Pager', 'designthemes-core') => 'pager',
				),
				'dependency'  => array( 'element' => 'related_carousel', 'value' => array( 'yes' )  ),
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