<?php add_action( 'vc_before_init', 'dt_sc_blog_post_vc_map' );
function dt_sc_blog_post_vc_map() {

	vc_map( array(
		"name" => esc_html__( "Blog Posts", 'designthemes-core' ),
		"base" => "dt_sc_blog_post",
		"icon" => "dt_sc_blog_post",
		"category" => DT_VC_CATEGORY,
		"description" => esc_html__("Show blog posts",'designthemes-core'),
		"params" => array(

			// Data Source
			array(
				'type' => 'autocomplete',
				'heading' => __( 'Categories', 'designthemes-core' ),
				'param_name' => '_post_categories',
				'settings' => array(
					'multiple' => true,
					'min_length' => 1,
					'groups' => true,
					'unique_values' => true,
					'display_inline' => true,
					'delay' => 500,
					'auto_focus' => true,
				),
				'param_holder_class' => 'vc_not-for-custom',
				'description' => __( 'Enter categories name & pick.', 'designthemes-core' )
			),

			// Post Count
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Post Counts', 'designthemes-core' ),
				'param_name' => 'count',
				'description' => esc_html__( 'Enter post count', 'designthemes-core' ),
				'save_always' => true,
				'admin_label' => true
			),

			// Post Layout
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Post Layout','designthemes-core'),
				'param_name' => 'blog_post_layout',
				'value' => array(
					esc_html__('Grid','designthemes-core') => 'entry-grid',
					esc_html__('List','designthemes-core') => 'entry-list' ,
					esc_html__('Cover','designthemes-core') => 'entry-cover'
				),
				'std' => 'entry-grid',
				'save_always' => true,
				'admin_label' => true,
				'edit_field_class' => 'vc_col-xs-6'
			),

			// Post Style
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Post Style','designthemes-core'),
				'param_name' => 'blog_post_grid_list_style',
				'value' => array(
					esc_html__('Boxed','designthemes-core') => 'dt-sc-boxed',
					esc_html__('Simple','designthemes-core') => 'dt-sc-simple' ,
					esc_html__('Overlap','designthemes-core') => 'dt-sc-overlap',
					esc_html__('Content Overlay','designthemes-core') => 'dt-sc-content-overlay',
					esc_html__('Simple with Background','designthemes-core') => 'dt-sc-simple-withbg',
					esc_html__('Overlay','designthemes-core') => 'dt-sc-overlay',
					esc_html__('Overlay II','designthemes-core') => 'dt-sc-overlay-ii',
					esc_html__('Overlay III','designthemes-core') => 'dt-sc-overlay-iii',
					esc_html__('Alternate','designthemes-core') => 'dt-sc-alternate',
					esc_html__('Minimal','designthemes-core') => 'dt-sc-minimal',
					esc_html__('Modern','designthemes-core') => 'dt-sc-modern',
					esc_html__('Classic','designthemes-core') => 'dt-sc-classic',
					esc_html__('Classic II','designthemes-core') => 'dt-sc-classic-ii',
					esc_html__('Classic Overlay','designthemes-core') => 'dt-sc-classic-overlay',
					esc_html__('Grungy Boxed','designthemes-core') => 'dt-sc-grungy-boxed',
					esc_html__('Title Overlap','designthemes-core') => 'dt-sc-title-overlap',
				),
				'std' => 'dt-sc-boxed',
				'save_always' => true,
				'admin_label' => true,
				'edit_field_class' => 'vc_col-xs-6',
				'dependency'  => array( 'element' => 'blog_post_layout', 'value' => array( 'entry-grid', 'entry-list' )  ),
			),
			
			// Post Style
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Post Style','designthemes-core'),
				'param_name' => 'blog_post_cover_style',
				'value' => array(
					esc_html__('Boxed','designthemes-core') => 'dt-sc-boxed',
					esc_html__('Canvas','designthemes-core') => 'dt-sc-canvas',
					esc_html__('Content Overlay','designthemes-core') => 'dt-sc-content-overlay',
					esc_html__('Overlay','designthemes-core') => 'dt-sc-overlay',
					esc_html__('Overlay II','designthemes-core') => 'dt-sc-overlay-ii',
					esc_html__('Overlay III','designthemes-core') => 'dt-sc-overlay-iii',
					esc_html__('Trendy','designthemes-core') => 'dt-sc-trendy',
					esc_html__('Mobile Phone','designthemes-core') => 'dt-sc-mobilephone',
				),
				'std' => 'dt-sc-boxed',
				'save_always' => true,
				'admin_label' => true,
				'edit_field_class' => 'vc_col-xs-6',
				'dependency'  => array( 'element' => 'blog_post_layout', 'value' => array( 'entry-cover' )  ),
			),

			// Post Column
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Columns','designthemes-core'),
				'param_name' => 'blog_post_columns',
				'value' => array(
					esc_html__('I Column','designthemes-core') => 'one-column',
					esc_html__('II Columns','designthemes-core') => 'one-half-column' ,
					esc_html__('III Columns','designthemes-core') => 'one-third-column',
					#esc_html__('IV Columns','designthemes-core') => 'one-fourth-column',
				),
				'std' => 'one-third-column',
				'save_always' => true,
				'admin_label' => true,
				'edit_field_class' => 'vc_col-xs-6',
				'dependency'  => array( 'element' => 'blog_post_layout', 'value' => array( 'entry-grid', 'entry-cover' )  ),
			),

			// List Type
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('List Type','designthemes-core'),
				'param_name' => 'blog_list_thumb',
				'value' => array(
					esc_html__('Left Thumb','designthemes-core') => 'entry-left-thumb',
					esc_html__('Right Thumb','designthemes-core') => 'entry-right-thumb',
				),
				'std' => 'entry-left-thumb',
				'save_always' => true,
				'edit_field_class' => 'vc_col-xs-6',
				'dependency'  => array( 'element' => 'blog_post_layout', 'value' => array( 'entry-list' )  ),
			),

			// Post Alignment
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Elements Alignment','designthemes-core'),
				'param_name' => 'blog_alignment',
				'value' => array(
					esc_html__('None','designthemes-core') => 'alignnone',
					esc_html__('Align Left','designthemes-core') => 'alignleft',
					esc_html__('Align Center','designthemes-core') => 'aligncenter',
					esc_html__('Align Right','designthemes-core') => 'alignright',
				),
				'std' => 'alignnone',
				'save_always' => true,
				'edit_field_class' => 'vc_col-xs-6',
				'dependency'  => array( 'element' => 'blog_post_layout', 'value' => array( 'entry-grid', 'entry-cover' )  ),
			),

      		// Equal Height
      		array(
      			'type' => 'checkbox',
      			'heading' => esc_html__( 'Enable Equal Height', 'designthemes-core' ),
      			'param_name' => 'enable_equal_height',
      			'description' => esc_html__( 'YES! to items display as equal height', 'designthemes-core' ),
      			'value' => array( esc_html__( 'Yes', 'designthemes-core' ) => 'yes' ),
				'save_always' => true,
				'edit_field_class' => 'vc_col-xs-6',
				'dependency'  => array( 'element' => 'blog_post_layout', 'value' => array( 'entry-grid', 'entry-cover' )  ),
      		),

      		// Gallery Slider
      		array(
      			'type' => 'checkbox',
      			'heading' => esc_html__( 'Display Gallery Slider', 'designthemes-core' ),
      			'param_name' => 'enable_gallery_slider',
      			'description' => esc_html__( 'YES! to display gallery slider', 'designthemes-core' ),
      			'value' => array( esc_html__( 'Yes', 'designthemes-core' ) => 'yes' ),
				'save_always' => true,
				'edit_field_class' => 'vc_col-xs-6',
				'dependency'  => array( 'element' => 'blog_post_layout', 'value' => array( 'entry-grid', 'entry-list' )  ),
      		),

			// Elements
			array(
				'heading' => esc_html__( 'Elements & Positioning', 'designthemes-core' ),
				'param_name' => 'blog_elements_position',
				'type'	=> 'param_group',
				'save_always' => true,  			
				'params' => array(
					array(
						'type' => 'dropdown',
						'heading' => esc_html__( 'Element', 'designthemes-core' ),
						'param_name' => 'element',
						'value' => array(
							esc_html__('Feature Image', 'designthemes-core')	 => 'feature_image',
							esc_html__('Title', 'designthemes-core')			 => 'title',
							esc_html__('Content', 'designthemes-core')	 		 => 'content',
							esc_html__('Read More', 'designthemes-core')	 	 => 'read_more',
							esc_html__('Meta Group', 'designthemes-core')	 	 => 'meta_group',
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
						'std' => 'title'
					),
				),
			),

			// Meta Group Elements
			array(
				'heading' => esc_html__( 'Meta Group Positioning', 'designthemes-core' ),
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

      		// Post Format
      		array(
      			'type' => 'checkbox',
      			'heading' => esc_html__( 'Enable Post Format', 'designthemes-core' ),
      			'param_name' => 'enable_post_format',
      			'description' => esc_html__( 'YES! to display post format icon', 'designthemes-core' ),
      			'value' => array( esc_html__( 'Yes', 'designthemes-core' ) => 'yes' ),
				'save_always' => true,
				'edit_field_class' => 'vc_col-xs-6'
      		),

      		// Video Audio
      		array(
      			'type' => 'checkbox',
      			'heading' => esc_html__( 'Display Video & Audio for Posts', 'designthemes-core' ),
      			'param_name' => 'enable_video_audio',
      			'description' => esc_html__( 'YES! to display video & audio, instead of feature image for posts', 'designthemes-core' ),
      			'value' => array( esc_html__( 'Yes', 'designthemes-core' ) => 'yes' ),
				'save_always' => true,
				'edit_field_class' => 'vc_col-xs-6',
				'dependency'  => array( 'element' => 'blog_post_layout', 'value' => array( 'entry-grid', 'entry-list' )  ),
      		),

      		// Enable Excerpt
      		array(
      			'type' => 'checkbox',
      			'heading' => esc_html__( 'Enable Excerpt Text', 'designthemes-core' ),
      			'param_name' => 'enable_excerpt_text',
      			'description' => esc_html__( 'YES! to display excerpt content', 'designthemes-core' ),
      			'value' => array( esc_html__( 'Yes', 'designthemes-core' ) => 'yes' ),
				'std' => 'yes',
				'save_always' => true,
				'edit_field_class' => 'vc_col-xs-6'
      		),

			// Excerpt Length
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Excerpt Length', 'designthemes-core' ),
				'param_name' => 'blog_excerpt_length',
				'value' => 25,
				'save_always' => true,
				'edit_field_class' => 'vc_col-xs-6',
				'dependency'  => array( 'element' => 'enable_excerpt_text', 'value' => array( 'yes' )  ),
			),

      		// Read More
      		array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Read More Text', 'designthemes-core' ),
				'param_name' => 'blog_readmore_text',
				'value' => esc_html__('Read More', 'designthemes-core'),
				'save_always' => true,
				'edit_field_class' => 'vc_col-xs-6',
				'description' => esc_html__('Note: Please Enter the Read More Button Text here.', 'designthemes-core'),
      		),

			// Image Hover Style
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Image Hover Style','designthemes-core'),
				'param_name' => 'blog_image_hover_style',
				'value' => array(
					esc_html__('Default','designthemes-core') => 'dt-sc-default',
					esc_html__('Blur','designthemes-core') => 'dt-sc-blur',
					esc_html__('Black and White','designthemes-core') => 'dt-sc-bw',
					esc_html__('Brightness','designthemes-core') => 'dt-sc-brightness',
					esc_html__('Fade InLeft','designthemes-core') => 'dt-sc-fadeinleft',
					esc_html__('Fade InRight','designthemes-core') => 'dt-sc-fadeinright',
					esc_html__('Hue-Rotate','designthemes-core') => 'dt-sc-hue-rotate',
					esc_html__('Invert','designthemes-core') => 'dt-sc-invert',
					esc_html__('Opacity','designthemes-core') => 'dt-sc-opacity',
					esc_html__('Rotate','designthemes-core') => 'dt-sc-rotate',
					esc_html__('Rotate Alt','designthemes-core') => 'dt-sc-rotate-alt',
					esc_html__('Scale In','designthemes-core') => 'dt-sc-scalein',
					esc_html__('Scale Out','designthemes-core') => 'dt-sc-scaleout',
					esc_html__('Sepia','designthemes-core') => 'dt-sc-sepia',
					esc_html__('Tint','designthemes-core') => 'dt-sc-tint',
				),
				'std' => 'dt-sc-default',
				'save_always' => true,
				'edit_field_class' => 'vc_col-xs-6',
				'description' => esc_html__('Note: Fade, Rotate & Scale Styles will not work for Gallery Sliders.', 'designthemes-core'),
			),

			// Image Overlay Style
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Image Overlay Style','designthemes-core'),
				'param_name' => 'blog_image_overlay_style',
				'value' => array(
					esc_html__('None','designthemes-core') => 'dt-sc-default',
					esc_html__('Fixed','designthemes-core') => 'dt-sc-fixed',
					esc_html__('Top to Bottom','designthemes-core') => 'dt-sc-tb',
					esc_html__('Bottom to Top','designthemes-core') => 'dt-sc-bt',
					esc_html__('Right to Left','designthemes-core') => 'dt-sc-rl',
					esc_html__('Left to Right','designthemes-core') => 'dt-sc-lr',
					esc_html__('Middle','designthemes-core') => 'dt-sc-middle',
					esc_html__('Middle Radial','designthemes-core') => 'dt-sc-middle-radial',
					esc_html__('Gradient - Top to Bottom','designthemes-core') => 'dt-sc-tb-gradient',
					esc_html__('Gradient - Bottom to Top','designthemes-core') => 'dt-sc-bt-gradient',
					esc_html__('Gradient - Right to Left','designthemes-core') => 'dt-sc-rl-gradient',
					esc_html__('Gradient - Left to Right','designthemes-core') => 'dt-sc-lr-gradient',
					esc_html__('Gradient - Radial','designthemes-core') => 'dt-sc-radial-gradient',
					esc_html__('Flash','designthemes-core') => 'dt-sc-flash',
					esc_html__('Circle','designthemes-core') => 'dt-sc-circle',
					esc_html__('Horizontal Elastic','designthemes-core') => 'dt-sc-hm-elastic',
					esc_html__('Vertical Elastic','designthemes-core') => 'dt-sc-vm-elastic',
				),
				'std' => 'dt-sc-default',
				'save_always' => true,
				'edit_field_class' => 'vc_col-xs-6',
				'dependency'  => array( 'element' => 'blog_post_layout', 'value' => array( 'entry-grid', 'entry-list' )  ),
			),

			// Pagination
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Pagination Style','designthemes-core'),
				'param_name' => 'blog_pagination',
				'value' => array(
					esc_html__('None','designthemes-core') => '',
					__('Older & Newer','designthemes-core') => 'older_newer',
					esc_html__('Numbered','designthemes-core') => 'numbered',
					esc_html__('Load More','designthemes-core') => 'load_more',	
					esc_html__('Infinite Scroll','designthemes-core') => 'infinite_scroll',
				),
				'std' => 'older_newer',
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
      			'description' => esc_html__('Style particular element differently - add a class name and refer to it in custom CSS','designthemes-core')
      		)
		)
	) );	
}?>