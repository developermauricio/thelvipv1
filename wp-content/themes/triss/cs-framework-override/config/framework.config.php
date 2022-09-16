<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => constant('TRISS_THEME_NAME').' '.esc_html__('Options', 'triss'),
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => true,
  'show_reset_all'  => false,
	'framework_title' => sprintf(esc_html__('Designthemes Framework %1$s', 'triss'), '<small>'.esc_html__('by Designthemes', 'triss').'</small>'),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

$options[]      = array(
  'name'        => 'general',
  'title'       => esc_html__('General', 'triss'),
  'icon'        => 'fa fa-gears',

  'fields'      => array(

	array(
	  'type'    => 'subheading',
	  'content' => esc_html__( 'General Options', 'triss' ),
	),
	
	array(
		'id'	=> 'header',
		'type'	=> 'select',
		'title'	=> esc_html__('Site Header', 'triss'),
		'class'	=> 'chosen',
		'options'	=> 'posts',
		'query_args'	=> array(
			'post_type'	=> 'dt_headers',
			'orderby'	=> 'title',
			'order'	=> 'ASC',
			'posts_per_page' => -1
		),
		'default_option'	=> esc_attr__('Select Header', 'triss'),
		'attributes'	=> array ( 'style'	=> 'width:50%'),
		'info'	=> esc_html__('Select default header.','triss'),
	),
	
	array(
		'id'	=> 'footer',
		'type'	=> 'select',
		'title'	=> esc_html__('Site Footer', 'triss'),
		'class'	=> 'chosen',
		'options'	=> 'posts',
		'query_args'	=> array(
			'post_type'	=> 'dt_footers',
			'orderby'	=> 'title',
			'order'	=> 'ASC',
			'posts_per_page' => -1
		),
		'default_option'	=> esc_attr__('Select Footer', 'triss'),
		'attributes'	=> array ( 'style'	=> 'width:50%'),
		'info'	=> esc_html__('Select defaultfooter.','triss'),
	),

	array(
	  'id'  	 => 'use-site-loader',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Site Loader', 'triss'),
	  'info'	 => esc_html__('YES! to use site loader.', 'triss')
	),	

	array(
	  'id'  	 => 'show-pagecomments',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Globally Show Page Comments', 'triss'),
	  'info'	 => esc_html__('YES! to show comments on all the pages. This will globally override your "Allow comments" option under your page "Discussion" settings.', 'triss'),
	  'default'  => true,
	),

	array(
	  'id'  	 => 'showall-pagination',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Show all pages in Pagination', 'triss'),
	  'info'	 => esc_html__('YES! to show all the pages instead of dots near the current page.', 'triss')
	),



	array(
	  'id'      => 'google-map-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Google Map API Key', 'triss'),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid google account api key here', 'triss').'</p>',
	),

	array(
	  'id'      => 'mailchimp-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Mailchimp API Key', 'triss'),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid mailchimp account api key here', 'triss').'</p>',
	),

	array(
	  'id'  	 => 'enable-totop',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Enable To Top', 'triss'),
	  'info'	 => esc_html__('YES! to enable to top for your site.', 'triss'),
	  'default'  => true,
	),


  ),
);

$options[]      = array(
  'name'        => 'layout_options',
  'title'       => esc_html__('Layout Options', 'triss'),
  'icon'        => 'dashicons dashicons-exerpt-view',
  'sections' => array(

	// -----------------------------------------
	// Header Options
	// -----------------------------------------
	array(
	  'name'      => 'breadcrumb_options',
	  'title'     => esc_html__('Breadcrumb Options', 'triss'),
	  'icon'      => 'fa fa-sitemap',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Breadcrumb Options", 'triss' ),
		  ),

		  array(
			'id'  		 => 'show-breadcrumb',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Breadcrumb', 'triss'),
			'info'		 => esc_html__('YES! to display breadcrumb for all pages.', 'triss'),
			'default' 	 => true,
		  ),

		  array(
			'id'           => 'breadcrumb-delimiter',
			'type'         => 'icon',
			'title'        => esc_html__('Breadcrumb Delimiter', 'triss'),
			'info'         => esc_html__('Choose delimiter style to display on breadcrumb section.', 'triss'),
		  ),

		  array(
			'id'           => 'breadcrumb-style',
			'type'         => 'select',
			'title'        => esc_html__('Breadcrumb Style', 'triss'),
			'options'      => array(
			  'default' 							=> esc_html__('Default', 'triss'),
			  'aligncenter'    						=> esc_html__('Align Center', 'triss'),
			  'alignright'  						=> esc_html__('Align Right', 'triss'),
			  'breadcrumb-left'    					=> esc_html__('Left Side Breadcrumb', 'triss'),
			  'breadcrumb-right'     				=> esc_html__('Right Side Breadcrumb', 'triss'),
			  'breadcrumb-top-right-title-center'  	=> esc_html__('Top Right Title Center', 'triss'),
			  'breadcrumb-top-left-title-center'  	=> esc_html__('Top Left Title Center', 'triss'),
			),
			'class'        => 'chosen',
			'default'      => 'aligncenter',
			'info'         => esc_html__('Choose alignment style to display on breadcrumb section.', 'triss'),
		  ),

		  array(
			  'id'                 => 'breadcrumb-position',
			  'type'               => 'select',
			  'title'              => esc_html__('Position', 'triss' ),
			  'options'            => array(
				  'header-top-absolute'    => esc_html__('Behind the Header','triss'),
				  'header-top-relative'    => esc_html__('Default','triss'),
			  ),
			  'class'        => 'chosen',
			  'default'      => 'header-top-relative',
			  'info'         => esc_html__('Choose position of breadcrumb section.', 'triss'),
		  ),

		  array(
			'id'    => 'breadcrumb_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'triss'),
			'desc'  => esc_html__('Choose background options for breadcrumb title section.', 'triss'),
		  ),

		),
	),

  ),
);

$options[]      = array(
  'name'        => 'allpage_options',
  'title'       => esc_html__('All Page Options', 'triss'),
  'icon'        => 'fa fa-files-o',
  'sections' => array(

	// -----------------------------------------
	// Global Sidebar Options
	// -----------------------------------------
	array(
	  'name'      => 'global_sidebar_options',
	  'title'     => esc_html__('Global Sidebar Options', 'triss'),
	  'icon'      => 'dashicons dashicons-format-aside',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Global Sidebar Options", 'triss' ),
		  ),

		  array(
			'id'      	 => 'site-global-sidebar-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Global Sidebar Layout', 'triss'),
			'options'    => array(
			  'content-full-width'   => TRISS_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => TRISS_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => TRISS_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => TRISS_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'with-left-sidebar',
			),
			'desc'  => esc_html__('Choose sidebar layout for site wide.', 'triss')
		  ),
		),
	),

	// -----------------------------------------
	// Blog Archive Options
	// -----------------------------------------
	array(
	  'name'      => 'blog_archive_options',
	  'title'     => esc_html__('Blog Archive Options', 'triss'),
	  'icon'      => 'fa fa-file-archive-o',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Blog Archives Page Layout", 'triss' ),
		  ),

		  array(
			'id'      	 => 'blog-archives-page-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Page Layout', 'triss'),
			'options'    => array(
			  'content-full-width'   => TRISS_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => TRISS_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => TRISS_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => TRISS_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'with-left-sidebar',
			'attributes'   => array(
			  'data-depend-id' => 'blog-archives-page-layout',
			),
		  ),

		  array(
			'id'  		 => 'show-standard-left-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Left Sidebar', 'triss'),
			'dependency' => array( 'blog-archives-page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
			'default'	 => true
		  ),

		  array(
			'id'  		 => 'show-standard-right-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Right Sidebar', 'triss'),
			'dependency' => array( 'blog-archives-page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
			'default'	 => true
		  ),

		  array(
			'id'      	   => 'blog-post-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Post Layout', 'triss'),
			'options'      => array(
			  'entry-grid'  => TRISS_THEME_URI . '/cs-framework-override/images/entry-grid.png',
			  'entry-list'  => TRISS_THEME_URI . '/cs-framework-override/images/entry-list.png',			  
			  'entry-cover' => TRISS_THEME_URI . '/cs-framework-override/images/entry-cover.png',
			),
			'default'      => 'entry-grid',
			'attributes'   => array(
			  'data-depend-id' => 'blog-post-layout',
			),
		  ),

		  array(
			'id'           => 'blog-post-grid-list-style',
			'type'         => 'select',
			'title'        => esc_html__('Post Style', 'triss'),
			'options'      => array(
			  'dt-sc-boxed' 			=> esc_html__('Boxed', 'triss'),
			  'dt-sc-simple'      		=> esc_html__('Simple', 'triss'),
			  'dt-sc-overlap'      		=> esc_html__('Overlap', 'triss'),
			  'dt-sc-content-overlay' 	=> esc_html__('Content Overlay', 'triss'),
			  'dt-sc-simple-withbg'		=> esc_html__('Simple with Background', 'triss'),
			  'dt-sc-overlay'   	    => esc_html__('Overlay', 'triss'),
			  'dt-sc-overlay-ii'      	=> esc_html__('Overlay II', 'triss'),			  
			  'dt-sc-overlay-iii'      	=> esc_html__('Overlay III', 'triss'),			  
			  'dt-sc-alternate'	 		=> esc_html__('Alternate', 'triss'),
			  'dt-sc-minimal'       	=> esc_html__('Minimal', 'triss'),
			  'dt-sc-modern' 	      	=> esc_html__('Modern', 'triss'),
			  'dt-sc-classic'	 		=> esc_html__('Classic', 'triss'),
			  'dt-sc-classic-ii'	 	=> esc_html__('Classic II', 'triss'),
			  'dt-sc-classic-overlay' 	=> esc_html__('Classic Overlay', 'triss'),
			  'dt-sc-grungy-boxed' 		=> esc_html__('Grungy Boxed', 'triss'),
			  'dt-sc-title-overlap'	 	=> esc_html__('Title Overlap', 'triss'),
			),
			'class'        => 'chosen',
			'default'      => 'dt-sc-content-overlay',
			'info'         => esc_html__('Choose post style to display blog archives pages.', 'triss'),
			'dependency'   => array( 'blog-post-layout', 'any', 'entry-grid,entry-list' ),
		  ),

		  array(
			'id'           => 'blog-post-cover-style',
			'type'         => 'select',
			'title'        => esc_html__('Post Style', 'triss'),
			'options'      => array(
			  'dt-sc-boxed' 			=> esc_html__('Boxed', 'triss'),
			  'dt-sc-canvas'      		=> esc_html__('Canvas', 'triss'),
			  'dt-sc-content-overlay' 	=> esc_html__('Content Overlay', 'triss'),
			  'dt-sc-overlay'   	    => esc_html__('Overlay', 'triss'),
			  'dt-sc-overlay-ii'      	=> esc_html__('Overlay II', 'triss'),
			  'dt-sc-overlay-iii'      	=> esc_html__('Overlay III', 'triss'),
			  'dt-sc-trendy' 			=> esc_html__('Trendy', 'triss'),
			  'dt-sc-mobilephone' 		=> esc_html__('Mobile Phone', 'triss'),
			),
			'class'        => 'chosen',
			'default'      => 'dt-sc-boxed',
			'info'         => esc_html__('Choose post style to display blog archives pages.', 'triss'),
			'dependency'   => array( 'blog-post-layout', '==', 'entry-cover' ),
		  ),

		  array(
			'id'      	   => 'blog-post-columns',
			'type'         => 'image_select',
			'title'        => esc_html__('Columns', 'triss'),
			'options'      => array(
			  'one-column' 		  => TRISS_THEME_URI . '/cs-framework-override/images/one-column.png',
			  'one-half-column'   => TRISS_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'  => TRISS_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			),
			'default'      => 'one-half-column',
			'attributes'   => array(
			  'data-depend-id' => 'blog-post-columns',
			),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-cover' ),
		  ),

		  array(
			'id'      	   => 'blog-list-thumb',
			'type'         => 'image_select',
			'title'        => esc_html__('List Type', 'triss'),
			'options'      => array(
			  'entry-left-thumb'  => TRISS_THEME_URI . '/cs-framework-override/images/entry-left-thumb.png',
			  'entry-right-thumb' => TRISS_THEME_URI . '/cs-framework-override/images/entry-right-thumb.png',
			),
			'default'      => 'entry-left-thumb',
			'attributes'   => array(
			  'data-depend-id' => 'blog-list-thumb',
			),
			'dependency' => array( 'blog-post-layout', '==', 'entry-list' ),
		  ),

		  array(
			'id'           => 'blog-alignment',
			'type'         => 'select',
			'title'        => esc_html__('Elements Alignment', 'triss'),
			'options'      => array(
			  'alignnone'	=> esc_html__('None', 'triss'),
			  'alignleft' 	=> esc_html__('Align Left', 'triss'),
			  'aligncenter' => esc_html__('Align Center', 'triss'),
			  'alignright'  => esc_html__('Align Right', 'triss'),
			),
			'class'        => 'chosen',
			'default'      => 'alignnone',
			'info'         => esc_html__('Choose alignment to display archives pages.', 'triss'),
			'dependency'   => array( 'blog-post-layout', 'any', 'entry-grid,entry-cover' ),
		  ),

		  array(
			'id'  		 => 'enable-equal-height',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Enable Equal Height', 'triss'),
			'info'		 => esc_html__('YES! to items display as equal height', 'triss'),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-cover' ),
		  ),

		  array(
			'id'    => 'enable-fullwidth-blog-archives',
			'type'  => 'switcher',
			'title' => esc_html__('Enable Fullwidth', 'triss'),
			'info'  => esc_html__('This option is applicable for all archive pages.', 'triss'),
			'default' => false
		  ),

		  array(
			'id'  		 => 'enable-no-space',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Enable No Space', 'triss'),
			'info'		 => esc_html__('YES! to items display as no space', 'triss'),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-cover' ),
		  ),

		  array(
			'id'  		 => 'enable-gallery-slider',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Display Gallery Slider', 'triss'),
			'info'		 => esc_html__('YES! to display gallery slider', 'triss'),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-list' ),
		  ),

		  array(
			'id'             => 'blog-elements-position',
			'type'           => 'sorter',
			'title'          => esc_html__('Elements Positioning', 'triss'),
			'default'        => array(
			  'enabled'      => array(
				'feature_image'	=> esc_html__('Feature Image', 'triss'),
				'meta_group' 	=> esc_html__('Meta Group', 'triss'),
				'title'      	=> esc_html__('Title', 'triss'),
				'content'    	=> esc_html__('Content', 'triss'),
				'read_more'  	=> esc_html__('Read More', 'triss'),
			  ),
			  'disabled'     => array(
				'author'		=> esc_html__('Author', 'triss'),
				'tags'  		=> esc_html__('Tags', 'triss'),
				'date'     		=> esc_html__('Date', 'triss'),
				'comments' 		=> esc_html__('Comments', 'triss'),
				'categories'    => esc_html__('Categories', 'triss'),
				'social_share'  => esc_html__('Social Share', 'triss'),
				'likes_views'   => esc_html__('Likes & Views', 'triss'),
			  ),
			),
			'enabled_title'  	=> esc_html__('Active Elements', 'triss'),
			'disabled_title' 	=> esc_html__('Deactive Elements', 'triss'),
		  ),

		  array(
			'id'             => 'blog-meta-position',
			'type'           => 'sorter',
			'title'          => esc_html__('Meta Group Positioning', 'triss'),
			'default'        => array(
			  'enabled'      => array(
					'date'     		=> esc_html__('Date', 'triss')
			  ),
			  'disabled'     => array(
					'comments' 		=> esc_html__('Comments', 'triss'),
					'author'		=> esc_html__('Author', 'triss'),
					'categories'    => esc_html__('Categories', 'triss'),					
					'tags'  		=> esc_html__('Tags', 'triss'),
					'social_share'  => esc_html__('Social Share', 'triss'),
					'likes_views'   => esc_html__('Likes & Views', 'triss'),
			  ),
			),
			'enabled_title'  => esc_html__('Active Items', 'triss'),
			'disabled_title' => esc_html__('Deactive Items', 'triss'),
			'desc'  		 => esc_html__('Note: Use max 3 items for better results.', 'triss')
		  ),

		  array(
			'id'  		 => 'enable-post-format',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Enable Post Format', 'triss'),
			'info'		 => esc_html__('YES! to display post format icon', 'triss'),
		  ),

		  array(
			'id'  		 => 'enable-excerpt-text',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Enable Excerpt Text', 'triss'),
			'info'		 => esc_html__('YES! to display excerpt content', 'triss'),
			'default'    => true,
		  ),

		  array(
			'id'  		 => 'blog-excerpt-length',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Excerpt Length', 'triss'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Put Excerpt Length', 'triss').'</span>',
			'default' 	 => 33,
			'dependency' => array( 'enable-excerpt-text', '==', 'true' ),
		  ),

		  array(
			'id'  		 => 'enable-video-audio',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Display Video & Audio for Posts', 'triss'),
			'info'		 => esc_html__('YES! to display video & audio, instead of feature image for posts', 'triss'),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-list' ),
			'default'    => true,
		  ),

		  array(
			'id'  		 => 'blog-readmore-text',
			'type'  	 => 'text',
			'title' 	 => esc_html__('Read More Text', 'triss'),
			'info'		 => esc_html__('Put the read more text here', 'triss'),
			'default'	 => esc_html__('Read More', 'triss')
		  ),

		  array(
			'id'           => 'blog-image-hover-style',
			'type'         => 'select',
			'title'        => esc_html__('Image Hover Style', 'triss'),
			'options'      => array(
			  'dt-sc-default' 			=> esc_html__('Default', 'triss'),
			  'dt-sc-blur'      		=> esc_html__('Blur', 'triss'),
			  'dt-sc-bw'   		   		=> esc_html__('Black and White', 'triss'),
			  'dt-sc-brightness'	 	=> esc_html__('Brightness', 'triss'),
			  'dt-sc-fadeinleft'   	    => esc_html__('Fade InLeft', 'triss'),
			  'dt-sc-fadeinright'  	    => esc_html__('Fade InRight', 'triss'),
			  'dt-sc-hue-rotate'   	    => esc_html__('Hue-Rotate', 'triss'),
			  'dt-sc-invert'	   	    => esc_html__('Invert', 'triss'),
			  'dt-sc-opacity'   	    => esc_html__('Opacity', 'triss'),
			  'dt-sc-rotate'	   	    => esc_html__('Rotate', 'triss'),
			  'dt-sc-rotate-alt'   	    => esc_html__('Rotate Alt', 'triss'),
			  'dt-sc-scalein'   	    => esc_html__('Scale In', 'triss'),
			  'dt-sc-scaleout' 	    	=> esc_html__('Scale Out', 'triss'),
			  'dt-sc-sepia'	   	    	=> esc_html__('Sepia', 'triss'),
			  'dt-sc-tint'		   	    => esc_html__('Tint', 'triss'),
			),
			'class'        => 'chosen',
			'default'      => 'dt-sc-scalein',
			'info'         => esc_html__('Choose image hover style to display archives pages.', 'triss'),
		  ),

		  array(
			'id'           => 'blog-image-overlay-style',
			'type'         => 'select',
			'title'        => esc_html__('Image Overlay Style', 'triss'),
			'options'      => array(
			  'dt-sc-default' 			=> esc_html__('None', 'triss'),
			  'dt-sc-fixed' 			=> esc_html__('Fixed', 'triss'),
			  'dt-sc-tb' 				=> esc_html__('Top to Bottom', 'triss'),
			  'dt-sc-bt'   				=> esc_html__('Bottom to Top', 'triss'),
			  'dt-sc-rl'   				=> esc_html__('Right to Left', 'triss'),
			  'dt-sc-lr'				=> esc_html__('Left to Right', 'triss'),
			  'dt-sc-middle'			=> esc_html__('Middle', 'triss'),
			  'dt-sc-middle-radial'		=> esc_html__('Middle Radial', 'triss'),
			  'dt-sc-tb-gradient' 		=> esc_html__('Gradient - Top to Bottom', 'triss'),
			  'dt-sc-bt-gradient'   	=> esc_html__('Gradient - Bottom to Top', 'triss'),
			  'dt-sc-rl-gradient'   	=> esc_html__('Gradient - Right to Left', 'triss'),
			  'dt-sc-lr-gradient'		=> esc_html__('Gradient - Left to Right', 'triss'),
			  'dt-sc-radial-gradient'	=> esc_html__('Gradient - Radial', 'triss'),
			  'dt-sc-flash' 			=> esc_html__('Flash', 'triss'),
			  'dt-sc-circle' 			=> esc_html__('Circle', 'triss'),
			  'dt-sc-hm-elastic'		=> esc_html__('Horizontal Elastic', 'triss'),
			  'dt-sc-vm-elastic'		=> esc_html__('Vertical Elastic', 'triss'),
			),
			'class'        => 'chosen',
			'default'      => 'dt-sc-default',
			'info'         => esc_html__('Choose image overlay style to display archives pages.', 'triss'),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-list' ),
		  ),

		  array(
			'id'           => 'blog-pagination',
			'type'         => 'select',
			'title'        => esc_html__('Pagination Style', 'triss'),
			'options'      => array(
			  'older_newer' 	=> esc_html__('Older & Newer', 'triss'),
			  'numbered'      	=> esc_html__('Numbered', 'triss'),
			  'load_more'      	=> esc_html__('Load More', 'triss'),
			  'infinite_scroll'	=> esc_html__('Infinite Scroll', 'triss'),
			),
			'class'        => 'chosen',
			'default'      => 'numbered',
			'info'         => esc_html__('Choose pagination style to display archives pages.', 'triss'),
		  ),

		),
	),

	// -----------------------------------------
	// Blog Single Options
	// -----------------------------------------
	array(
	  'name'      => 'blog_single_options',
	  'title'     => esc_html__('Blog Single Options', 'triss'),
	  'icon'      => 'fa fa-thumb-tack',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Blog Single Post Options", 'triss' ),
		  ),

		  array(
			'id'             => 'post-elements-position',
			'type'           => 'sorter',
			'title'          => esc_html__('Post Elements Positioning', 'triss'),
			'default'        => array(
			  'enabled'      => array(
				'tags'  		=> esc_html__('Tags', 'triss'),
				'meta_group' 	=> esc_html__('Meta Group', 'triss'),
				'comment_box' 	=> esc_html__('Comment Box', 'triss'),
			  ),
			  'disabled'     => array(
				'feature_image'	=> esc_html__('Feature Image', 'triss'),
				'navigation'    => esc_html__('Navigation', 'triss'),
				'title'      	=> esc_html__('Title', 'triss'),
				'content'    	=> esc_html__('Content', 'triss'),
				'author'		=> esc_html__('Author', 'triss'),
				'date'     		=> esc_html__('Date', 'triss'),
				'comments' 		=> esc_html__('Comments', 'triss'),
				'categories'    => esc_html__('Categories', 'triss'),
				'social_share'  => esc_html__('Social Share', 'triss'),
				'likes_views'   => esc_html__('Likes & Views', 'triss'),
				'author_bio' 	=> esc_html__('Author Bio', 'triss'),
				'related_posts' => esc_html__('Related Posts', 'triss'),
				'related_article' 	=> esc_html__('Related Article( Only Fixed )', 'triss'),
			  ),
			),
			'enabled_title'  => esc_html__('Active Elements', 'triss'),
			'disabled_title' => esc_html__('Deactive Elements', 'triss'),
		  ),

		  array(
			'id'             => 'post-meta-position',
			'type'           => 'sorter',
			'title'          => esc_html__('Meta Group Positioning', 'triss'),
			'default'        => array(
			  'enabled'      => array(
				'social_share'  => esc_html__('Social Share', 'triss'),
			  ),
			  'disabled'     => array(
				'author'		=> esc_html__('Author', 'triss'),
				'date'     		=> esc_html__('Date', 'triss'),
				'tags'  		=> esc_html__('Tags', 'triss'),
				'categories'    => esc_html__('Categories', 'triss'),				  
				'comments' 		=> esc_html__('Comments', 'triss'),
				'likes_views'   => esc_html__('Likes & Views', 'triss'),
			  ),
			),
			'enabled_title'  => esc_html__('Active Items', 'triss'),
			'disabled_title' => esc_html__('Deactive Items', 'triss'),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Related Post Options", 'triss' ),
		  ),

		  array(
			'id'  		 => 'post-related-title',
			'type'  	 => 'text',
			'title' 	 => esc_html__('Related Posts Section Title', 'triss'),
			'info'		 => esc_html__('Put the related posts section title here', 'triss'),
			'default'	 => esc_html__('Related Posts', 'triss')
		  ),

		  array(
			'id'      	   => 'post-related-columns',
			'type'         => 'image_select',
			'title'        => esc_html__('Columns', 'triss'),
			'options'      => array(
			  'one-column' 		  => TRISS_THEME_URI . '/cs-framework-override/images/one-column.png',
			  'one-half-column'   => TRISS_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'  => TRISS_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			  //'one-fourth-column' => TRISS_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
			),
			'default'      => 'one-third-column',
			'attributes'   => array(
			  'data-depend-id' => 'post-related-columns',
			),
		  ),

		  array(
			'id'  		 => 'post-related-count',
			'type'  	 => 'number',
			'title' 	 => esc_html__('No.of Posts to Show', 'triss'),
			'info'		 => esc_html__('Put the no.of related posts to show', 'triss'),
			'default'	 => 3
		  ),

		  array(
			'id'  		 => 'enable-related-excerpt',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Enable Excerpt Text', 'triss'),
			'info'		 => esc_html__('YES! to display excerpt content', 'triss'),
		  ),

		  array(
			'id'  		 => 'post-related-excerpt',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Excerpt Length', 'triss'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Put Excerpt Length', 'triss').'</span>',
			'default' 	 => 25,
			'dependency' => array( 'enable-related-excerpt', '==', 'true' ),
		  ),

		  array(
			'id'  		 => 'enable-related-carousel',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Enable Carousel', 'triss'),
			'info'		 => esc_html__('YES! to enable carousel related posts', 'triss'),
		  ),

		  array(
			'id'           => 'related-carousel-nav',
			'type'         => 'select',
			'title'        => esc_html__('Navigation Style', 'triss'),
			'options'      => array(
			  '' 			=> esc_html__('None', 'triss'),
			  'navigation'  => esc_html__('Navigations', 'triss'),
			  'pager'   	=> esc_html__('Pager', 'triss'),
			),
			'class'        => 'chosen',
			'default'      => 'text',
			'info'         => esc_html__('Choose navigation style to display related post carousel.', 'triss'),
			'dependency' => array( 'enable-related-carousel', '==', 'true' ),
		  ),

		  array(
			'id'    => 'enable-fullwidth-single-post',
			'type'  => 'switcher',
			'title' => esc_html__('Enable Fullwidth', 'triss'),
			'info'  => esc_html__('This option is applicable for all single posts', 'triss'),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Miscellaneous Post Options", 'triss' ),
		  ),

		  array(
			'id'  		 => 'enable-image-lightbox',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Feature Image Lightbox', 'triss'),
			'info'		 => esc_html__('YES! to enable lightbox for feature image.', 'triss'),
		  ),

		  array(
			'id'           => 'post-comments-list-style',
			'type'         => 'select',
			'title'        => esc_html__('Comments List Style', 'triss'),
			'options'      => array(
			  'rounded' 	=> esc_html__('Rounded', 'triss'),
			  'square'   	=> esc_html__('Square', 'triss'),
			),
			'class'        => 'chosen',
			'default'      => 'rounded',
			'info'         => esc_html__('Choose comments list style to display single post.', 'triss'),
		  ),
		),
	),

	// -----------------------------------------
	// 404 Options
	// -----------------------------------------
	array(
	  'name'      => '404_options',
	  'title'     => esc_html__('404 Options', 'triss'),
	  'icon'      => 'fa fa-warning',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "404 Message", 'triss' ),
		  ),
		  
		  array(
			'id'      => 'enable-404message',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Message', 'triss' ),
			'info'	  => esc_html__('YES! to enable not-found page message.', 'triss'),
			'default' => true
		  ),

		  array(
			'id'           => 'notfound-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'triss'),
			'options'      => array(
			  'type1' 	   => esc_html__('Modern', 'triss'),
			  'type2'      => esc_html__('Classic', 'triss'),
			  'type4'  	   => esc_html__('Diamond', 'triss'),
			  'type5'      => esc_html__('Shadow', 'triss'),
			  'type6'      => esc_html__('Diamond Alt', 'triss'),
			  'type7'  	   => esc_html__('Stack', 'triss'),
			  'type8'  	   => esc_html__('Minimal', 'triss'),
			),
			'class'        => 'chosen',
			'default'      => 'type1',
			'info'         => esc_html__('Choose the style of not-found template page.', 'triss')
		  ),

		  array(
			'id'      => 'notfound-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('404 Dark BG', 'triss' ),
			'info'	  => esc_html__('YES! to use dark bg notfound page for this site.', 'triss')
		  ),

		  array(
			'id'           => 'notfound-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'triss'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'triss'),
			'info'       	 => esc_html__('Choose the page for not-found content.', 'triss')
		  ),
		  
		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Background Options", 'triss' ),
		  ),

		  array(
			'id'    => 'notfound_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'triss')
		  ),

		  array(
			'id'  		 => 'notfound-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'triss'),
			'info'		 => esc_html__('Paste custom CSS styles for not found page.', 'triss')
		  ),

		),
	),

	// -----------------------------------------
	// Underconstruction Options
	// -----------------------------------------
	array(
	  'name'      => 'comingsoon_options',
	  'title'     => esc_html__('Under Construction Options', 'triss'),
	  'icon'      => 'fa fa-thumbs-down',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Under Construction", 'triss' ),
		  ),
	
		  array(
			'id'      => 'enable-comingsoon',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Coming Soon', 'triss' ),
			'info'	  => esc_html__('YES! to check under construction page of your website.', 'triss')
		  ),
	
		  array(
			'id'           => 'comingsoon-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'triss'),
			'options'      => array(
			  'type1' 	   => esc_html__('Diamond', 'triss'),
			  'type2'      => esc_html__('Teaser', 'triss'),
			  'type3'  	   => esc_html__('Minimal', 'triss'),
			  'type4'      => esc_html__('Counter Only', 'triss'),
			  'type5'      => esc_html__('Belt', 'triss'),
			  'type6'  	   => esc_html__('Classic', 'triss'),
			  'type7'  	   => esc_html__('Boxed', 'triss')
			),
			'class'        => 'chosen',
			'default'      => 'type1',
			'info'         => esc_html__('Choose the style of coming soon template.', 'triss'),
		  ),

		  array(
			'id'      => 'uc-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('Coming Soon Dark BG', 'triss' ),
			'info'	  => esc_html__('YES! to use dark bg coming soon page for this site.', 'triss')
		  ),

		  array(
			'id'           => 'comingsoon-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'triss'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'triss'),
			'info'       	 => esc_html__('Choose the page for comingsoon content.', 'triss')
		  ),

		  array(
			'id'      => 'show-launchdate',
			'type'    => 'switcher',
			'title'   => esc_html__('Show Launch Date', 'triss' ),
			'info'	  => esc_html__('YES! to show launch date text.', 'triss'),
		  ),

		  array(
			'id'      => 'comingsoon-launchdate',
			'type'    => 'text',
			'title'   => esc_html__('Launch Date', 'triss'),
			'attributes' => array( 
			  'placeholder' => '10/30/2016 12:00:00'
			),
			'after' 	=> '<p class="cs-text-info">'.esc_html__('Put Format: 12/30/2016 12:00:00 month/day/year hour:minute:second', 'triss').'</p>',
		  ),

		  array(
			'id'           => 'comingsoon-timezone',
			'type'         => 'select',
			'title'        => esc_html__('UTC Timezone', 'triss'),
			'options'      => array(
			  '-12' => '-12', '-11' => '-11', '-10' => '-10', '-9' => '-9', '-8' => '-8', '-7' => '-7', '-6' => '-6', '-5' => '-5', 
			  '-4' => '-4', '-3' => '-3', '-2' => '-2', '-1' => '-1', '0' => '0', '+1' => '+1', '+2' => '+2', '+3' => '+3', '+4' => '+4',
			  '+5' => '+5', '+6' => '+6', '+7' => '+7', '+8' => '+8', '+9' => '+9', '+10' => '+10', '+11' => '+11', '+12' => '+12'
			),
			'class'        => 'chosen',
			'default'      => '0',
			'info'         => esc_html__('Choose utc timezone, by default UTC:00:00', 'triss'),
		  ),

		  array(
			'id'    => 'comingsoon_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'triss')
		  ),

		  array(
			'id'  		 => 'comingsoon-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'triss'),
			'info'		 => esc_html__('Paste custom CSS styles for under construction page.', 'triss'),
		  ),

		),
	),

  ),
);

// -----------------------------------------
// Widget area Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'widgetarea_options',
  'title'       => esc_html__('Widget Area', 'triss'),
  'icon'        => 'fa fa-trello',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Custom Widget Area for Sidebar", 'triss' ),
	  ),

	  array(
		'id'           => 'wtitle-style',
		'type'         => 'select',
		'title'        => esc_html__('Sidebar widget Title Style', 'triss'),
		'options'      => array(
		  'default'    => esc_html__('Choose any type', 'triss'),
		  'type1' 	   => esc_html__('Double Border', 'triss'),
		  'type2'      => esc_html__('Tooltip', 'triss'),
		  'type3'  	   => esc_html__('Title Top Border', 'triss'),
		  'type4'      => esc_html__('Left Border & Pattren', 'triss'),
		  'type5'      => esc_html__('Bottom Border', 'triss'),
		  'type6'  	   => esc_html__('Tooltip Border', 'triss'),
		  'type7'  	   => esc_html__('Boxed Modern', 'triss'),
		  'type8'  	   => esc_html__('Elegant Border', 'triss'),
		  'type9' 	   => esc_html__('Needle', 'triss'),
		  'type10' 	   => esc_html__('Ribbon', 'triss'),
		  'type11' 	   => esc_html__('Content Background', 'triss'),
		  'type12' 	   => esc_html__('Classic BG', 'triss'),
		  'type13' 	   => esc_html__('Tiny Boders', 'triss'),
		  'type14' 	   => esc_html__('BG & Border', 'triss'),
		  'type15' 	   => esc_html__('Classic BG Alt', 'triss'),
		  'type16' 	   => esc_html__('Left Border & BG', 'triss'),
		  'type17' 	   => esc_html__('Basic', 'triss'),
		  'type18' 	   => esc_html__('BG & Pattern', 'triss'),
		),
		'class'          => 'chosen',
		'default' 		 =>  'type15',
		'info'           => esc_html__('Choose the style of sidebar widget title.', 'triss')
	  ),

	  array(
		'id'              => 'widgetarea-custom',
		'type'            => 'group',
		'title'           => esc_html__('Custom Widget Area', 'triss'),
		'button_title'    => esc_html__('Add New', 'triss'),
		'accordion_title' => esc_html__('Add New Widget Area', 'triss'),
		'fields'          => array(

		  array(
			'id'          => 'widgetarea-custom-name',
			'type'        => 'text',
			'title'       => esc_html__('Name', 'triss'),
		  ),

		)
	  ),

	),
);

// -----------------------------------------
// Sociable Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'sociable_options',
  'title'       => esc_html__('Sociable', 'triss'),
  'icon'        => 'fa fa-share-square',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Sociable", 'triss' ),
	  ),

	  array(
		'id'              => 'sociable_fields',
		'type'            => 'group',
		'title'           => esc_html__('Sociable', 'triss'),
		'info'            => esc_html__('Click button to add type of social & url.', 'triss'),
		'button_title'    => esc_html__('Add New Social', 'triss'),
		'accordion_title' => esc_html__('Adding New Social Field', 'triss'),
		'fields'          => array(
		  array(
			'id'          => 'sociable_fields_type',
			'type'        => 'select',
			'title'       => esc_html__('Select Social', 'triss'),
			'options'      => array(
			  'delicious' 	 => esc_html__('Delicious', 'triss'),
			  'deviantart' 	 => esc_html__('Deviantart', 'triss'),
			  'digg' 	  	 => esc_html__('Digg', 'triss'),
			  'dribbble' 	 => esc_html__('Dribbble', 'triss'),
			  'envelope' 	 => esc_html__('Envelope', 'triss'),
			  'facebook' 	 => esc_html__('Facebook', 'triss'),
			  'flickr' 		 => esc_html__('Flickr', 'triss'),
			  'google-plus'  => esc_html__('Google Plus', 'triss'),
			  'gtalk'  		 => esc_html__('GTalk', 'triss'),
			  'instagram'	 => esc_html__('Instagram', 'triss'),
			  'lastfm'	 	 => esc_html__('Lastfm', 'triss'),
			  'linkedin'	 => esc_html__('Linkedin', 'triss'),
			  'pinterest'	 => esc_html__('Pinterest', 'triss'),
			  'reddit'		 => esc_html__('Reddit', 'triss'),
			  'rss'		 	 => esc_html__('RSS', 'triss'),
			  'skype'		 => esc_html__('Skype', 'triss'),
			  'stumbleupon'	 => esc_html__('Stumbleupon', 'triss'),
			  'tumblr'		 => esc_html__('Tumblr', 'triss'),
			  'twitter'		 => esc_html__('Twitter', 'triss'),
			  'viadeo'		 => esc_html__('Viadeo', 'triss'),
			  'vimeo'		 => esc_html__('Vimeo', 'triss'),
			  'yahoo'		 => esc_html__('Yahoo', 'triss'),
			  'youtube'		 => esc_html__('Youtube', 'triss'),
			),
			'class'        => 'chosen',
			'default'      => 'delicious',
		  ),

		  array(
			'id'          => 'sociable_fields_url',
			'type'        => 'text',
			'title'       => esc_html__('Enter URL', 'triss')
		  ),
		)
	  ),

   ),
);

// -----------------------------------------
// Hook Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'hook_options',
  'title'       => esc_html__('Hooks', 'triss'),
  'icon'        => 'fa fa-paperclip',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Top Hook", 'triss' ),
	  ),

	  array(
		'id'  	=> 'enable-top-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Top Hook', 'triss'),
		'info'	=> esc_html__("YES! to enable top hook.", 'triss')
	  ),

	  array(
		'id'  		 => 'top-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Top Hook', 'triss'),
		'info'		 => esc_html__('Paste your top hook, Executes after the opening &lt;body&gt; tag.', 'triss')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content Before Hook", 'triss' ),
	  ),

	  array(
		'id'  	=> 'enable-content-before-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content Before Hook', 'triss'),
		'info'	=> esc_html__("YES! to enable content before hook.", 'triss')
	  ),

	  array(
		'id'  		 => 'content-before-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content Before Hook', 'triss'),
		'info'		 => esc_html__('Paste your content before hook, Executes before the opening &lt;#primary&gt; tag.', 'triss')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content After Hook", 'triss' ),
	  ),

	  array(
		'id'  	=> 'enable-content-after-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content After Hook', 'triss'),
		'info'	=> esc_html__("YES! to enable content after hook.", 'triss')
	  ),

	  array(
		'id'  		 => 'content-after-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content After Hook', 'triss'),
		'info'		 => esc_html__('Paste your content after hook, Executes after the closing &lt;/#main&gt; tag.', 'triss')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Bottom Hook", 'triss' ),
	  ),

	  array(
		'id'  	=> 'enable-bottom-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Bottom Hook', 'triss'),
		'info'	=> esc_html__("YES! to enable bottom hook.", 'triss')
	  ),

	  array(
		'id'  		 => 'bottom-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Bottom Hook', 'triss'),
		'info'		 => esc_html__('Paste your bottom hook, Executes after the closing &lt;/body&gt; tag.', 'triss')
	  ),

  array(
		'id'  	=> 'enable-analytics-code',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Tracking Code', 'triss'),
		'info'	=> esc_html__("YES! to enable site tracking code.", 'triss')
	  ),

	  array(
		'id'  		 => 'analytics-code',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Google Analytics Tracking Code', 'triss'),
		'info'		 => esc_html__('Either enter your Google tracking id (UA-XXXXX-X) or your full Google Analytics tracking Code here. If you want to offer your visitors the option to stop being tracked you can place the shortcode [dt_sc_privacy_google_tracking] somewhere on your site', 'triss')
	  ),

   ),
);

// -----------------------------------------
// Custom Font Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'font_options',
  'title'       => esc_html__('Custom Fonts', 'triss'),
  'icon'        => 'fa fa-font',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Custom Fonts", 'triss' ),
	  ),

	  array(
		'id'              => 'custom_font_fields',
		'type'            => 'group',
		'title'           => esc_html__('Custom Font', 'triss'),
		'info'            => esc_html__('Click button to add font name & urls.', 'triss'),
		'button_title'    => esc_html__('Add New Font', 'triss'),
		'accordion_title' => esc_html__('Adding New Font Field', 'triss'),
		'fields'          => array(
		  array(
			'id'          => 'custom_font_name',
			'type'        => 'text',
			'title'       => esc_html__('Font Name', 'triss')
		  ),

		  array(
			'id'      => 'custom_font_woof',
			'type'    => 'upload',
			'title'   => esc_html__('Upload File (*.woff)', 'triss'),
			'after'   => '<p class="cs-text-muted">'.esc_html__('You can upload custom font family (*.woff) file here.', 'triss').'</p>',
		  ),

		  array(
			'id'      => 'custom_font_woof2',
			'type'    => 'upload',
			'title'   => esc_html__('Upload File (*.woff2)', 'triss'),
			'after'   => '<p class="cs-text-muted">'.esc_html__('You can upload custom font family (*.woff2) file here.', 'triss').'</p>',
		  )
		)
	  ),

   ),
);

// ------------------------------
// backup                       
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => esc_html__('Backup', 'triss'),
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => esc_html__('You can save your current options. Download a Backup and Import.', 'triss')
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

// ------------------------------
// license
// ------------------------------
$options[]   = array(
  'name'     => 'theme_version',
  'title'    => constant('TRISS_THEME_NAME').esc_html__(' Log', 'triss'),
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => constant('TRISS_THEME_NAME').esc_html__(' Theme Change Log', 'triss')
    ),
    array(
      'type'    => 'content',
	  'content' => '<pre>

	 2022.03.02 - version 1.9
	* Fixed Kirki Customizer Issue

	  2020.12.22 - version 1.8
	* Plugin Translation issue fix

	  2021.01.23 - version 1.7
	* Compatible with wordpress 5.6
	* Some design issues updated
	* Updated: All premium plugins

	2020.11.26 - version 1.6
	* Latest jQuery fixes updated
	* Updated: All premium plugins

	2020.10.19 - version 1.5
	* Compatible with wordpress 5.5.1
	* Updated: Coming soon enabled sticky menu issue
	* Updated: Notice errors
	* Updated: Fatal error on other theme activation
	* Updated: All premium plugins
	* Updated: Woocommerce latest version
	* Updated: dt_sc_products shortcode issue
	* Updated: Yoast seo plugin compatibility issue

	2020.09.15 - version 1.4
	* RTL issue updated ( Fully compatible with RTL languages)

	2020.08.13 - version 1.3
	* Compatible with wordpress 5.5

	2020.07.27 - version 1.2
	* Updated: Envato Theme check
	* Updated: sanitize_text_field added
	* Updated: All wordpress theme standards

	2020.05.18 - version 1.1
	* Updated: Missing font files issue
	* Updated: Header, Footer not set after import
	* Updated: Portfolio js error

	2020.03.16 - version 1.0
	* First release!  </pre>',
    ),

  )
);

// ------------------------------
// Seperator
// ------------------------------
$options[] = array(
  'name'   => 'seperator_1',
  'title'  => esc_html__('Plugin Options', 'triss'),
  'icon'   => 'fa fa-plug'
);

// -----------------------------------------
// Woocommerce Options
// -----------------------------------------
if( function_exists( 'is_woocommerce' ) ) {

	$product_style_templates = cs_get_option( 'dt-woo-product-style-templates' );
	$product_style_templates = (is_array($product_style_templates) && !empty($product_style_templates)) ? $product_style_templates : false;

	$product_style_templates_arr = array ();
	if($product_style_templates) {
		foreach($product_style_templates as $product_style_template_key => $product_style_template) {
			$product_style_templates_arr[$product_style_template_key] = $product_style_template['template-title'];
		}
	}

	$woo_page_layouts = array(
		'content-full-width'   => TRISS_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
		'with-left-sidebar'    => TRISS_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
		'with-right-sidebar'   => TRISS_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
	);

	$social_follow = array (
			  'delicious' 	 => esc_html__('Delicious', 'triss'),
			  'deviantart' 	 => esc_html__('Deviantart', 'triss'),
			  'digg' 	  	 => esc_html__('Digg', 'triss'),
			  'dribbble' 	 => esc_html__('Dribbble', 'triss'),
			  'envelope' 	 => esc_html__('Envelope', 'triss'),
			  'facebook' 	 => esc_html__('Facebook', 'triss'),
			  'flickr' 		 => esc_html__('Flickr', 'triss'),
			  'google-plus'  => esc_html__('Google Plus', 'triss'),
			  'gtalk'  		 => esc_html__('GTalk', 'triss'),
			  'instagram'	 => esc_html__('Instagram', 'triss'),
			  'lastfm'	 	 => esc_html__('Lastfm', 'triss'),
			  'linkedin'	 => esc_html__('Linkedin', 'triss'),
			  'pinterest'	 => esc_html__('Pinterest', 'triss'),
			  'reddit'		 => esc_html__('Reddit', 'triss'),
			  'rss'		 	 => esc_html__('RSS', 'triss'),
			  'skype'		 => esc_html__('Skype', 'triss'),
			  'stumbleupon'	 => esc_html__('Stumbleupon', 'triss'),
			  'tumblr'		 => esc_html__('Tumblr', 'triss'),
			  'twitter'		 => esc_html__('Twitter', 'triss'),
			  'viadeo'		 => esc_html__('Viadeo', 'triss'),
			  'vimeo'		 => esc_html__('Vimeo', 'triss'),
			  'yahoo'		 => esc_html__('Yahoo', 'triss'),
			  'youtube'		 => esc_html__('Youtube', 'triss')
			);

	$social_follow_options = array ();
	foreach($social_follow as $socialfollow_key => $socialfollow) {

		$social_follow_option = array(
							'id'    => 'dt-single-product-show-follow-'.$socialfollow_key,
							'type'  => 'switcher',
							'title' => sprintf(esc_html__('Show %1$s Follow', 'triss'), $socialfollow),
						);
		array_push($social_follow_options, $social_follow_option);

	}

	array_push($social_follow_options, array(
						  'type'    => 'notice',
						  'class'   => 'info',
						  'content' => esc_html__('For Sociables Follow - links must be defined under "Sociables" tab. Sociables Share & Sociables Follow option is used for "Custom Template" single product settings.', 'triss' )
						));


	$options[] = array(
		'name'     => 'dtwoo',
		'title'    => esc_html__( 'WooCommerce', 'triss' ),
		'icon'     => 'fa fa-shopping-cart',
		'sections' => array(

			// Shop
				array(
					'name'	=> 'dt-woo-shop',
					'title'	=> esc_html__('Shop', 'triss'),
					'icon'  => 'fa fa-angle-double-right',
					'fields'=> array(
						array(	
							'type'    => 'subheading',
							'content' => esc_html__( 'Shop Page Settings', 'triss' ),
						),

						array(
							'id'         => 'shop-page-layout',
							'type'       => 'image_select',
							'title'      => esc_html__('Page Layout', 'triss'),
							'options'    => $woo_page_layouts,
							'default'    => 'with-left-sidebar',
							'attributes' => array( 'data-depend-id' => 'dt-woo-shop-page-layout' )
						),

						array(
							'id'         => 'shop-page-show-standard-sidebar',
							'type'       => 'switcher',
							'title'      => esc_html__('Show Standard Sidebar', 'triss'),
							'dependency' => array( 'dt-woo-shop-page-layout', 'any', 'with-left-sidebar,with-right-sidebar' ),
							'default'    => true
						),

						array(
							'id'         => 'shop-page-widgetareas',
							'type'       => 'select',
							'title'      => esc_html__('Choose Custom Widget Area', 'triss'),
							'class'      => 'chosen',
							'options'    => triss_custom_widgets(),
							'dependency' => array( 'dt-woo-shop-page-layout', 'any', 'with-left-sidebar,with-right-sidebar' ),
							'attributes' => array(
								'multiple'         => 'multiple',
								'data-placeholder' => esc_attr__('Select Widget Areas', 'triss'),
								'style'            => 'width: 400px;'
							),
						),

						array(
							'id'      => 'shop-product-per-page',
							'type'    => 'number',
							'title'   => esc_html__('Products Per Page', 'triss'),
							'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Number of products to show in catalog / shop page', 'triss').'</span>',
							'default' => 12,
						),

						array(
							'id'         => 'shop-page-product-layout',
							'type'       => 'image_select',
							'title'      => esc_html__('Product Layout', 'triss'),
							'options'    => array(
								1 => TRISS_THEME_URI . '/cs-framework-override/images/one-column.png',
								2 => TRISS_THEME_URI . '/cs-framework-override/images/one-half-column.png',
								3 => TRISS_THEME_URI . '/cs-framework-override/images/one-third-column.png',
								4 => TRISS_THEME_URI . '/cs-framework-override/images/one-fourth-column.png'
							),
							'default'    => 4,							
						),

				        array(
				          'id'         => 'shop-page-product-style-template',
				          'type'       => 'select',
				          'title'      => esc_html__('Product Style Template', 'triss'),
									'options'    => $product_style_templates_arr,
									'default'    => 0
				        ), 											

								array(
									'id'         => 'shop-page-enable-breadcrumb',
									'type'       => 'switcher',
									'title'      => esc_html__('Enable Breadcrumb', 'triss'),
									'info'       => esc_html__('YES! to show breadcrumb on shop page.', 'triss'),
									'default'    => true
								),

								array(
									'id'  		 => 'shop-page-bottom-hook',
									'type'  	 => 'textarea',
									'title' 	 => esc_html__('Bottom Hook', 'triss'),
									'info'		 => esc_html__('Content added here will be shown below shop listings.', 'triss')
								),

						array(
							'type'    => 'subheading',
							'content' => esc_html__( "Shop Page Sorter Settings", 'triss' ),
						),

						array(
							'id'         => 'product-show-sorter-on-header',
							'type'       => 'switcher',
							'title'      => esc_html__('Show Sorter On Header', 'triss'),
							'attributes' => array( 'data-depend-id' => 'dt-woo-shop-product-sorter-on-header' ),
							'info'       => esc_html__('YES! to show sorter bar on header.', 'triss'),
							'default'    => true
						),

						array(
							'id'             => 'product-sorter-header-elements',
							'type'           => 'sorter',
							'title'          => esc_html__('Sorter Header Elements', 'triss'),
							'default'        => array(
								'enabled'      => array(
									'filter'               => esc_html__('Filter', 'triss'),
									'display_mode'         => esc_html__('Display Mode', 'triss'),
									'display_mode_options' => esc_html__('Display Mode Options', 'triss'),									
								),
								'disabled'     => array(
									'pagination'           => esc_html__('Pagination', 'triss'),
									'result_count' => esc_html__('Result Count', 'triss'),
								),
							),
							'enabled_title'  => esc_html__('Active Elements', 'triss'),
							'disabled_title' => esc_html__('Deatcive Elements', 'triss'),
							'dependency' => array( 'dt-woo-shop-product-sorter-on-header', '==', 'true' )
						),

						array(
							'id'         => 'product-show-sorter-on-footer',
							'type'       => 'switcher',
							'title'      => esc_html__('Show Sorter On Footer', 'triss'),
							'attributes' => array( 'data-depend-id' => 'dt-woo-shop-product-sorter-on-footer' ),
							'info'       => esc_html__('YES! to show sorter bar on footer.', 'triss'),
							'default'    => true
						),

						array(
							'id'             => 'product-sorter-footer-elements',
							'type'           => 'sorter',
							'title'          => esc_html__('Sorter Footer Elements', 'triss'),
							'default'        => array(
								'enabled'      => array(
									'pagination'   => esc_html__('Pagination', 'triss'),
								),
								'disabled'     => array(
									'filter'       => esc_html__('Filter', 'triss'),
									'result_count' => esc_html__('Result Count', 'triss'),
									'display_mode'         => esc_html__('Display Mode', 'triss'),
									'display_mode_options' => esc_html__('Display Mode Options', 'triss'),
								),
							),
							'enabled_title'  => esc_html__('Active Elements', 'triss'),
							'disabled_title' => esc_html__('Deatcive Elements', 'triss'),
							'dependency' => array( 'dt-woo-shop-product-sorter-on-footer', '==', 'true' )
						)

					)
				),

			// Product Category
				array(
					'name'	=> 'dt-woo-cat-archive',
					'title'	=> esc_html__('Category Archive', 'triss'),
					'icon'  => 'fa fa-angle-double-right',
					'fields'=> array(

						array(
							'type'    => 'subheading',
							'content' => esc_html__( 'Category Archive Settings', 'triss' ),
						),

						array(
							'id'         => 'dt-woo-category-archive-layout',
							'type'       => 'image_select',
							'title'      => esc_html__('Page Layout', 'triss'),
							'options'    => $woo_page_layouts,
							'default'    => 'with-left-sidebar',
							'attributes' => array( 'data-depend-id' => 'dt-woo-category-archive-layout' )
						),

						array(
							'id'         => 'dt-woo-category-archive-show-standard-sidebar',
							'type'       => 'switcher',
							'title'      => esc_html__('Show Standard Sidebar', 'triss'),
							'dependency' => array( 'dt-woo-category-archive-layout', 'any', 'with-left-sidebar,with-right-sidebar' )
						),

						array(
							'id'         => 'dt-woo-category-archive-widgetareas',
							'type'       => 'select',
							'title'      => esc_html__('Choose Custom Widget Area', 'triss'),
							'class'      => 'chosen',
							'options'    => triss_custom_widgets(),
							'dependency' => array( 'dt-woo-category-archive-layout', 'any', 'with-left-sidebar,with-right-sidebar' ),
							'attributes' => array(
								'multiple'         => 'multiple',
								'data-placeholder' => esc_attr__('Select Widget Areas', 'triss'),
								'style'            => 'width: 400px;'
							),
						),

						array(
							'id'      => 'dt-woo-category-archive-product-per-page',
							'type'    => 'number',
							'title'   => esc_html__('Products Per Page', 'triss'),
							'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Number of products to show in product category archive page', 'triss').'</span>',
							'default' => 5,
						),

						array(
							'id'      => 'dt-woo-category-archive-product-column',
							'type'    => 'image_select',
							'title'   => esc_html__('Product Layout', 'triss'),
							'options' => array(
								1 => TRISS_THEME_URI . '/cs-framework-override/images/one-column.png',
								2 => TRISS_THEME_URI . '/cs-framework-override/images/one-half-column.png',
								3 => TRISS_THEME_URI . '/cs-framework-override/images/one-third-column.png',
								4 => TRISS_THEME_URI . '/cs-framework-override/images/one-fourth-column.png'
							),
							'default' => 4,
						),

				        array(
				          'id'         => 'dt-woo-category-product-style-template',
				          'type'       => 'select',
				          'title'      => esc_html__('Product Style Template', 'triss'),
									'options'    => $product_style_templates_arr,
									'default'    => 0
								),

								array(
									'id'         => 'dt-woo-category-archive-enable-breadcrumb',
									'type'       => 'switcher',
									'title'      => esc_html__('Enable Breadcrumb', 'triss'),
									'info'       => esc_html__('YES! to show breadcrumb on category archive page.', 'triss'),
									'default'    => true
								)

					)
				),

			// Product Tag
				array(
					'name'	=> 'dt-woo-tag-archive',
					'title'	=> esc_html__('Tag Archive', 'triss'),
					'icon'  => 'fa fa-angle-double-right',
					'fields'=> array(

						array(
							'type'    => 'subheading',
							'content' => esc_html__( 'Tag Archive Settings', 'triss' ),
						),

						array(
							'id'         => 'dt-woo-tag-archive-layout',
							'type'       => 'image_select',
							'title'      => esc_html__('Page Layout', 'triss'),
							'options'    => $woo_page_layouts,
							'default'    => 'with-left-sidebar',
							'attributes' => array( 'data-depend-id' => 'dt-woo-tag-archive-layout' )
						),

						array(
							'id'         => 'dt-woo-tag-archive-show-standard-sidebar',
							'type'       => 'switcher',
							'title'      => esc_html__('Show Standard Sidebar', 'triss'),
							'dependency' => array( 'dt-woo-tag-archive-layout', 'any', 'with-left-sidebar,with-right-sidebar' )
						),

						array(
							'id'         => 'dt-woo-tag-archive-widgetareas',
							'type'       => 'select',
							'title'      => esc_html__('Choose Custom Widget Area', 'triss'),
							'class'      => 'chosen',
							'options'    => triss_custom_widgets(),
							'dependency' => array( 'dt-woo-tag-archive-layout', 'any', 'with-left-sidebar,with-right-sidebar' ),
							'attributes' => array(
								'multiple'         => 'multiple',
								'data-placeholder' => esc_attr__('Select Widget Areas', 'triss'),
								'style'            => 'width: 400px;'
							),
						),

						array(
							'id'      => 'dt-woo-tag-archive-product-per-page',
							'type'    => 'number',
							'title'   => esc_html__('Products Per Page', 'triss'),
							'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Number of products to show in product tag archive page', 'triss').'</span>',
							'default' => get_option( 'posts_per_page' ),
						),

						array(
							'id'      => 'dt-woo-tag-archive-product-column',
							'type'    => 'image_select',
							'title'   => esc_html__('Product Layout', 'triss'),
							'options' => array(
								2 => TRISS_THEME_URI . '/cs-framework-override/images/one-half-column.png',
								3 => TRISS_THEME_URI . '/cs-framework-override/images/one-third-column.png',
								4 => TRISS_THEME_URI . '/cs-framework-override/images/one-fourth-column.png'							
							),
							'default' => 4,
						),	

				        array(
				          'id'         => 'dt-woo-tag-product-style-template',
				          'type'       => 'select',
				          'title'      => esc_html__('Product Style Template', 'triss'),
									'options'    => $product_style_templates_arr,
									'default'    => 0
								),

								array(
									'id'         => 'dt-woo-tag-archive-enable-breadcrumb',
									'type'       => 'switcher',
									'title'      => esc_html__('Enable Breadcrumb', 'triss'),
									'info'       => esc_html__('YES! to show breadcrumb on tag archive page.', 'triss'),
									'default'    => true
								)								

					)
				),

			// Product
				array(
					'name'   => 'dt-woo-single-product',
					'title'  => esc_html__('Product', 'triss'),
					'icon'   => 'fa fa-angle-double-right',
					'fields' => array_merge ( 
						array(

							array(	
								'type'    => 'subheading',
								'content' => esc_html__( 'Single Product Page Default Settings', 'triss' ),
							),

							array(
								'id'      => 'dt-single-product-default-template',
								'type'    => 'select',
								'title'   => esc_html__('Product Template', 'triss'),
								'class'   => 'chosen',
								'options' => array(
									'woo-default'     => esc_html__( 'WooCommerce Default', 'triss' ),
									'custom-template' => esc_html__( 'Custom Template', 'triss' )
								),
								'default'    => 'woo-default',
								'info'       => esc_html__('Don\'t use product shortcodes in content area when "WooCommerce Default" template is chosen.', 'triss')
							),

							array(
								'id'         => 'dt-single-product-default-layout',
								'type'       => 'image_select',
								'title'      => esc_html__('Page Layout', 'triss'),
								'options'    => $woo_page_layouts,			
								'default'    => 'with-left-sidebar',
								'attributes' => array( 'data-depend-id' => 'dt-single-product-default-layout' )
							),

							array(
								'id'         => 'dt-single-product-show-default-sidebar',
								'type'       => 'switcher',
								'title'      => esc_html__('Show Standard Sidebar', 'triss'),
								'dependency' => array( 'dt-single-product-default-layout', 'any', 'with-left-sidebar,with-right-sidebar' )
							),

							array(
								'id'         => 'dt-single-product-widgetareas',
								'type'       => 'select',
								'title'      => esc_html__('Choose Custom Widget Area', 'triss'),
								'class'      => 'chosen',
								'options'    => triss_custom_widgets(),
								'dependency' => array( 'dt-single-product-default-layout', 'any', 'with-left-sidebar,with-right-sidebar' ),
								'attributes' => array(
									'multiple'         => 'multiple',
									'data-placeholder' => esc_attr__('Select Widget Areas', 'triss'),
									'style'            => 'width: 400px;'
								),
							),

							array(
								'id'		 => 'dt-single-product-sale-countdown-timer',
								'type'		 => 'switcher',
								'title'		 => esc_html__('Enable Sale Countdown Timer', 'triss'),
								'info'       => esc_html__('This option is applicable for "WooCommerce Default" template page only.', 'triss')
							),

							array(
								'id'		 => 'dt-single-product-enable-size-guide',
								'type'		 => 'switcher',
								'title'		 => esc_html__('Enable Size Guide Button', 'triss'),
								'info'       => esc_html__('This option is applicable for "WooCommerce Default" template page only.', 'triss')
							),

							array(
								'id'		 => 'dt-single-product-enable-ajax-addtocart',
								'type'		 => 'switcher',
								'title'		 => esc_html__('Enable Ajax Add To Cart', 'triss'),
								'info'       => esc_html__('If you wish, you can have ajax functionality in single page add to cart button.', 'triss')
							),

							array(
								'id'         => 'dt-single-product-enable-breadcrumb',
								'type'       => 'switcher',
								'title'      => esc_html__('Enable Breadcrumb', 'triss'),
								'info'       => esc_html__('YES! to show breadcrumb on single product page.', 'triss'),
								'default'    => true
							),

							array(	
								'type'    => 'subheading',
								'content' => esc_html__( 'Single Page Upsell Products Settings', 'triss' ),
							),
							
							array(
								'id'		 => 'dt-single-product-default-show-upsell',
								'type'		 => 'switcher',
								'title'		 => esc_html__('Show Upsell Products', 'triss'),
								'default' 	 => true
							),

							array(
								'id'  		=> 'dt-single-product-upsell-title',
								'type'  	=> 'wysiwyg',
								'title' 	=> esc_html__('Upsell Title', 'triss'),
								'default'	=> '<h2>'.esc_html__('You may also like&hellip;', 'triss').'</h2>'
							),

							array(
								'id'      => 'dt-single-product-upsell-column',
								'type'    => 'image_select',
								'title'   => esc_html__('Upsell Column', 'triss'),
								'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Select upsell products column layout', 'triss').'</span>',
								'default' => 4,
								'options' => array(
									1 => TRISS_THEME_URI . '/cs-framework-override/images/one-column.png',
									2 => TRISS_THEME_URI . '/cs-framework-override/images/one-half-column.png',
									3 => TRISS_THEME_URI . '/cs-framework-override/images/one-third-column.png',
									4 => TRISS_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
								)
							),

							array(
								'id'      => 'dt-single-product-upsell-limit',
								'type'    => 'select',
								'title'   => esc_html__('Upsell Limit', 'triss'),
								'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Select upsell products limit', 'triss').'</span>',
								'default' => 4,
								'options' => array(
									1 => esc_html__( '1', 'triss' ),
									2 => esc_html__( '2', 'triss' ),
									3 => esc_html__( '3', 'triss' ),
									4 => esc_html__( '4', 'triss' ),
									5 => esc_html__( '5', 'triss' ),
									6 => esc_html__( '6', 'triss' ),
									7 => esc_html__( '7', 'triss' ),
									8 => esc_html__( '8', 'triss' ),	
									9 => esc_html__( '9', 'triss' ),
									10 => esc_html__( '10', 'triss' ),									
								)
							),

					        array(
					          'id'         => 'dt-woo-single-product-upsell-style-template',
					          'type'       => 'select',
					          'title'      => esc_html__('Product Style Template', 'triss'),
					          'options'    => $product_style_templates_arr
					        ),

							array(	
								'type'    => 'subheading',
								'content' => esc_html__( 'Single Page Related Products Settings', 'triss' ),
							),

							array(
								'id'    => 'dt-single-product-default-show-related',
								'type'  => 'switcher',
								'title' => esc_html__('Show Related Products', 'triss'),
								'default' 	 => true
							),

							array(
								'id'      => 'dt-single-product-related-title',
								'type'    => 'wysiwyg',
								'title'   => esc_html__('Related Product Title', 'triss'),
								'default' => '<h2>'.esc_html__('Related products', 'triss').'</h2>'
							),

							array(
								'id'      => 'dt-single-product-related-column',
								'type'    => 'image_select',
								'title'   => esc_html__('Related Column', 'triss'),
								'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Select related products column layout', 'triss').'</span>',
								'default' => 4,
								'options' => array(
									2 => TRISS_THEME_URI . '/cs-framework-override/images/one-half-column.png',
									3 => TRISS_THEME_URI . '/cs-framework-override/images/one-third-column.png',
									4 => TRISS_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
								)							
							),

							array(
								'id'      => 'dt-single-product-related-limit',
								'type'    => 'select',
								'title'   => esc_html__('Related Limit', 'triss'),
								'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Select related products limit', 'triss').'</span>',
								'default' => 4,
								'options' => array(
									1 => esc_html__( '1', 'triss' ),
									2 => esc_html__( '2', 'triss' ),
									3 => esc_html__( '3', 'triss' ),
									4 => esc_html__( '4', 'triss' ),
									5 => esc_html__( '5', 'triss' ),
									6 => esc_html__( '6', 'triss' ),
									7 => esc_html__( '7', 'triss' ),
									8 => esc_html__( '8', 'triss' ),	
									9 => esc_html__( '9', 'triss' ),
									10 => esc_html__( '10', 'triss' ),									
								)
							),

					        array(
					          'id'         => 'dt-woo-single-product-related-style-template',
					          'type'       => 'select',
					          'title'      => esc_html__('Product Style Template', 'triss'),
					          'options'    => $product_style_templates_arr
					        ),

							array(	
								'type'    => 'subheading',
								'content' => esc_html__( 'Single Product Page Settings', 'triss' ),
							),

							array(
								'id'    => 'dt-single-product-addtocart-sticky',
								'type'  => 'switcher',
								'title' => esc_html__('Sticky Add to Cart', 'triss'),
							),

							array(
								'id'    => 'dt-single-product-show-360-viewer',
								'type'  => 'switcher',
								'title' => esc_html__('Show Product 360 Viewer', 'triss'),
							),

							array(	
								'type'    => 'subheading',
								'content' => esc_html__( 'Sociables Share', 'triss' ),
							),

							array(
								'id'      => 'dt-single-product-show-sharer-facebook',
								'type'    => 'switcher',
								'title'   => esc_html__('Show Facebook Sharer', 'triss'),
								'default' => true,
							),

							array(
								'id'    => 'dt-single-product-show-sharer-delicious',
								'type'  => 'switcher',
								'title' => esc_html__('Show Delicious Sharer', 'triss'),
								'default' => true,
							),

							array(
								'id'    => 'dt-single-product-show-sharer-digg',
								'type'  => 'switcher',
								'title' => esc_html__('Show Digg Sharer', 'triss'),
								'default' => true,
							),

							array(
								'id'    => 'dt-single-product-show-sharer-stumbleupon',
								'type'  => 'switcher',
								'title' => esc_html__('Show Stumble Upon Sharer', 'triss'),
								'default' => true,
							),

							array(
								'id'    => 'dt-single-product-show-sharer-twitter',
								'type'  => 'switcher',
								'title' => esc_html__('Show Twitter Sharer', 'triss'),
								'default' => true,
							),

							array(
								'id'    => 'dt-single-product-show-sharer-googleplus',
								'type'  => 'switcher',
								'title' => esc_html__('Show Google Plus Sharer', 'triss'),
							),

							array(
								'id'    => 'dt-single-product-show-sharer-linkedin',
								'type'  => 'switcher',
								'title' => esc_html__('Show Linkedin Sharer', 'triss'),
							),

							array(
								'id'    => 'dt-single-product-show-sharer-pinterest',
								'type'  => 'switcher',
								'title' => esc_html__('Show Pinterest Sharer', 'triss'),
							),	

							array(	
								'type'    => 'subheading',
								'content' => esc_html__( 'Sociables Follow', 'triss' ),
							),							

						),

						$social_follow_options

					)
				),
			
			// Size Guide
				array(
					'name'   => 'dt-woo-size-guides',
					'title'  => esc_html__( 'Size Guides', 'triss' ),
					'icon'   => 'fa fa-angle-double-right',
					'fields' => array(
						array(
							'id'              => 'dt-woo-size-guides',
							'type'            => 'group',
							'title'           => esc_html__( 'Size Guides List', 'triss' ),
							'button_title'    => esc_html__('Add New', 'triss'),
							'accordion_title' => esc_html__('Add New Size Guide', 'triss'),
							'fields'          => array(
								array(
									'id'    => 'title',
									'type'  => 'text',
									'title' => esc_html__('Title', 'triss'),
								),
								array(
									'id'    => 'size-guide',
									'type'  => 'upload',
									'title' => esc_html__('Size Guide', 'triss'),
								)
							)
						)
					)
				),
			
			// Product Style Templates
				array(
					'name'   => 'dt-woo-product-style-templates-holder',
					'title'  => esc_html__( 'Product Style Templates', 'triss' ),
					'icon'   => 'fa fa-angle-double-right',
					'fields' => array(
						array(
							'id'              => 'dt-woo-product-style-templates',
							'type'            => 'group',
							'title'           => esc_html__( 'Product Style Templates', 'triss' ),
							'button_title'    => esc_html__('Add New', 'triss'),
							'accordion_title' => esc_html__('Add New Template', 'triss'),
							'fields'          => array(

								array(
									'id'    => 'template-title',
									'type'  => 'text',
									'title' => esc_html__('Template Title', 'triss'),
								),
								array(
									'id'         => 'product-style',
									'type'       => 'select',
									'title'      => esc_html__('Product Style', 'triss'),
									'options'    => array(
														'product-style-default'              => esc_html__('Default', 'triss'),
														'product-style-cornered'             => esc_html__('Cornered', 'triss'),
														'product-style-title-eg-highlighter' => esc_html__('Title & Element Group Highlighter', 'triss'),
														'product-style-content-highlighter'  => esc_html__('Content Highlighter', 'triss'),
														'product-style-egrp-overlap-pc'      => esc_html__('Element Group Overlap Product Content', 'triss'),
														'product-style-egrp-reveal-pc'       => esc_html__('Element Group Reveal Product Content', 'triss'),
														'product-style-igrp-over-pc'         => esc_html__('Icon Group over Product Content', 'triss'),
														'product-style-egrp-over-pc'         => esc_html__('Element Group over Product Content', 'triss')
													),
									'default'    => 'product-style-default'
								),								

							// "Product Style" Hover Options

								array(
									'type'    => 'notice',
									'class'   => 'info',
									'content' => esc_html__('"Product Style" Hover Options.', 'triss')
								),

								array(
									'id'         => 'product-hover-styles',
									'type'       => 'select',
									'title'      => esc_html__('Hover Styles', 'triss'),
									'options'    => array(
														''                                        => esc_html__('None', 'triss'),
														'product-hover-fade-border'               => esc_html__('Fade - Border', 'triss'),
														'product-hover-fade-skinborder'           => esc_html__('Fade - Skin Border', 'triss'),
														'product-hover-fade-gradientborder'       => esc_html__('Fade - Gradient Border', 'triss'),
														'product-hover-fade-shadow'               => esc_html__('Fade - Shadow', 'triss'),
														'product-hover-fade-inshadow'             => esc_html__('Fade - InShadow', 'triss'),
														'product-hover-thumb-fade-border'         => esc_html__('Fade Thumb Border', 'triss'),
														'product-hover-thumb-fade-skinborder'     => esc_html__('Fade Thumb SkinBorder', 'triss'),
														'product-hover-thumb-fade-gradientborder' => esc_html__('Fade Thumb Gradient Border', 'triss'),
														'product-hover-thumb-fade-shadow'         => esc_html__('Fade Thumb Shadow', 'triss'),
														'product-hover-thumb-fade-inshadow'       => esc_html__('Fade Thumb InShadow', 'triss')
													),
									'default'    => 'product-hover-fade-border'
								),

								array(
									'id'         => 'product-overlay-bgcolor',
									'type'       => 'color_picker',
									'title'      => esc_html__('Overlay Background Color', 'triss')
								),

								array(
									'id'         => 'product-overlay-dark-bgcolor',
									'type'       => 'switcher',
									'title'      => esc_html__('Overlay Dark Background', 'triss'),
								),

								array(
									'id'         => 'product-overlay-effects',
									'type'       => 'select',
									'title'      => esc_html__('Overlay Effects', 'triss'),
									'options'    => array(
														''                                    => esc_html__('None', 'triss'),
														'product-overlay-fixed'               => esc_html__('Fixed', 'triss'),
														'product-overlay-toptobottom'         => esc_html__('Top to Bottom', 'triss'),
														'product-overlay-bottomtotop'         => esc_html__('Bottom to Top', 'triss'),
														'product-overlay-righttoleft'         => esc_html__('Right to Left', 'triss'),
														'product-overlay-lefttoright'         => esc_html__('Left to Right', 'triss'),
														'product-overlay-middle'              => esc_html__('Middle', 'triss'),
														'product-overlay-middleradial'        => esc_html__('Middle Radial', 'triss'),
														'product-overlay-gradienttoptobottom' => esc_html__('Gradient - Top to Bottom', 'triss'),
														'product-overlay-gradientbottomtotop' => esc_html__('Gradient - Bottom to Top', 'triss'),
														'product-overlay-gradientrighttoleft' => esc_html__('Gradient - Right to Left', 'triss'),
														'product-overlay-gradientlefttoright' => esc_html__('Gradient - Left to Right', 'triss'),
														'product-overlay-gradientradial'      => esc_html__('Gradient - Radial', 'triss'),
														'product-overlay-flash'               => esc_html__('Flash', 'triss'),
														'product-overlay-scale'               => esc_html__('Scale', 'triss'),
														'product-overlay-horizontalelastic'   => esc_html__('Horizontal - Elastic', 'triss'),
														'product-overlay-verticalelastic'     => esc_html__('Vertical - Elastic', 'triss')
													),
									'default'    => ''
								),

								array(
									'id'         => 'product-hover-image-effects',
									'type'       => 'select',
									'title'      => esc_html__('Hover Image Effects', 'triss'),
									'options'    => array(
														''                                => esc_html__('None', 'triss'),
														'product-hover-image-blur'        => esc_html__('Blur', 'triss'),
														'product-hover-image-blackwhite'  => esc_html__('Black & White', 'triss'),
														'product-hover-image-fadeinleft'  => esc_html__('Fade In Left', 'triss'),
														'product-hover-image-fadeinright' => esc_html__('Fade In Right', 'triss'),
														'product-hover-image-rotate'      => esc_html__('Rotate', 'triss'),
														'product-hover-image-rotatealt'   => esc_html__('Rotate - Alt', 'triss'),
														'product-hover-image-scalein'     => esc_html__('Scale In', 'triss'),
														'product-hover-image-scaleout'    => esc_html__('Scale Out', 'triss'),
														'product-hover-image-floatout'    => esc_html__('Float Up', 'triss')
													),
									'default'    => ''
								),

								array(
									'id'         => 'product-hover-secondary-image-effects',
									'type'       => 'select',
									'title'      => esc_html__('Hover Secondary Image Effects', 'triss'),
									'options'    => array(
														'product-hover-secimage-fade'              => esc_html__('Fade', 'triss'),
														'product-hover-secimage-zoomin'            => esc_html__('Zoom In', 'triss'),
														'product-hover-secimage-zoomout'           => esc_html__('Zoom Out', 'triss'),
														'product-hover-secimage-zoomoutup'         => esc_html__('Zoom Out Up', 'triss'),
														'product-hover-secimage-zoomoutdown'       => esc_html__('Zoom Out Down', 'triss'),
														'product-hover-secimage-zoomoutleft'       => esc_html__('Zoom Out Left', 'triss'),
														'product-hover-secimage-zoomoutright'      => esc_html__('Zoom Out Right', 'triss'),
														'product-hover-secimage-pushup'            => esc_html__('Push Up', 'triss'),
														'product-hover-secimage-pushdown'          => esc_html__('Push Down', 'triss'),
														'product-hover-secimage-pushleft'          => esc_html__('Push Left', 'triss'),
														'product-hover-secimage-pushright'         => esc_html__('Push Right', 'triss'),
														'product-hover-secimage-slideup'           => esc_html__('Slide Up', 'triss'),
														'product-hover-secimage-slidedown'         => esc_html__('Slide Down', 'triss'),
														'product-hover-secimage-slideleft'         => esc_html__('Slide Left', 'triss'),
														'product-hover-secimage-slideright'        => esc_html__('Slide Right', 'triss'),		
														'product-hover-secimage-hingeup'           => esc_html__('Hinge Up', 'triss'),
														'product-hover-secimage-hingedown'         => esc_html__('Hinge Down', 'triss'),
														'product-hover-secimage-hingeleft'         => esc_html__('Hinge Left', 'triss'),
														'product-hover-secimage-hingeright'        => esc_html__('Hinge Right', 'triss'),		
														'product-hover-secimage-foldup'            => esc_html__('Fold Up', 'triss'),
														'product-hover-secimage-folddown'          => esc_html__('Fold Down', 'triss'),
														'product-hover-secimage-foldleft'          => esc_html__('Fold Left', 'triss'),
														'product-hover-secimage-foldright'         => esc_html__('Fold Right', 'triss'),
														'product-hover-secimage-fliphoriz'         => esc_html__('Flip Horizontal', 'triss'),
														'product-hover-secimage-flipvert'          => esc_html__('Flip Vertical', 'triss')
													),
									'default'    => 'product-hover-secimage-fade'
								),

								array(
									'id'         => 'product-content-hover-effects',
									'type'       => 'select',
									'title'      => esc_html__('Content Hover Effects', 'triss'),
									'options'    => array(
														''                                   => esc_html__('None', 'triss'),
														'product-content-hover-fade'         => esc_html__('Fade', 'triss'),
														'product-content-hover-zoom'         => esc_html__('Zoom', 'triss'),
														'product-content-hover-slidedefault' => esc_html__('Slide Default', 'triss'),
														'product-content-hover-slideleft'    => esc_html__('Slide From Left', 'triss'),
														'product-content-hover-slideright'   => esc_html__('Slide From Right', 'triss'),
														'product-content-hover-slidetop'     => esc_html__('Slide From Top', 'triss'),
														'product-content-hover-slidebottom'  => esc_html__('Slide From Bottom', 'triss')
													),
									'default'    => ''
								),

								array(
									'id'         => 'product-icongroup-hover-effects',
									'type'       => 'select',
									'title'      => esc_html__('Icon Group Hover Effects', 'triss'),
									'options'    => array(
														''                               => esc_html__('None', 'triss'),
														'product-icongroup-hover-flipx'  => esc_html__('Flip X', 'triss'),
														'product-icongroup-hover-flipy'  => esc_html__('Flip Y', 'triss'),
														'product-icongroup-hover-bounce' => esc_html__('Bounce', 'triss')
													),
									'default'    => ''
								),

							// "Product Style" Common Options

								array(
									'type'    => 'notice',
									'class'   => 'info',
									'content' => esc_html__('"Product Style" Common Options.', 'triss')
								),	
								array(
									'id'         => 'product-borderorshadow',
									'type'       => 'select',
									'title'      => esc_html__('Border or Shadow', 'triss'),
									'options'    => array(
														''                              => esc_html__('None', 'triss'),
														'product-borderorshadow-border' => esc_html__('Border', 'triss'),
														'product-borderorshadow-shadow' => esc_html__('Shadow', 'triss')
													),
									'default'    => '',
									'desc'      => esc_html__('Choose either Border or Shadow for your product listing.', 'triss')
								),										
								array(
									'id'         => 'product-border-type',
									'type'       => 'select',
									'title'      => esc_html__('Border - Type', 'triss'),
									'options'    => array(
														'product-border-type-default' => esc_html__('Default', 'triss'),
														'product-border-type-thumb'   => esc_html__('Thumb', 'triss')
													),
									'default'    => 'product-border-type-default',
								),													
								array(
									'id'         => 'product-border-position',
									'type'       => 'select',
									'title'      => esc_html__('Border - Position', 'triss'),
									'options'    => array(
														'product-border-position-default'      => esc_html__('Default', 'triss'),
														'product-border-position-left'         => esc_html__('Left', 'triss'),
														'product-border-position-right'        => esc_html__('Right', 'triss'),
														'product-border-position-top'          => esc_html__('Top', 'triss'),
														'product-border-position-bottom'       => esc_html__('Bottom', 'triss'),
														'product-border-position-top-left'     => esc_html__('Top Left', 'triss'),
														'product-border-position-top-right'    => esc_html__('Top Right', 'triss'),
														'product-border-position-bottom-left'  => esc_html__('Bottom Left', 'triss'),
														'product-border-position-bottom-right' => esc_html__('Bottom Right', 'triss')														
													),
									'default'    => 'product-border-position-default',
								),	
								array(
									'id'         => 'product-shadow-type',
									'type'       => 'select',
									'title'      => esc_html__('Shadow - Type', 'triss'),
									'options'    => array(
														'product-shadow-type-default' => esc_html__('Default', 'triss'),
														'product-shadow-type-thumb'   => esc_html__('Thumb', 'triss')
													),
									'default'    => 'product-shadow-type-default',
								),
								array(
									'id'         => 'product-shadow-position',
									'type'       => 'select',
									'title'      => esc_html__('Shadow - Position', 'triss'),
									'options'    => array(
														'product-shadow-position-default'      => esc_html__('Default', 'triss'),
														'product-shadow-position-top-left'     => esc_html__('Top Left', 'triss'),
														'product-shadow-position-top-right'    => esc_html__('Top Right', 'triss'),
														'product-shadow-position-bottom-left'  => esc_html__('Bottom Left', 'triss'),
														'product-shadow-position-bottom-right' => esc_html__('Bottom Right', 'triss')
													),
									'default'    => 'product-shadow-position-default',
								),

								array(
									'id'         => 'product-bordershadow-highlight',
									'type'       => 'select',
									'title'      => esc_html__('Border / Shadow - Highlight', 'triss'),
									'options'    => array(
														''                                       => esc_html__('None', 'triss'),
														'product-bordershadow-highlight-default' => esc_html__('Default', 'triss'),
														'product-bordershadow-highlight-onhover' => esc_html__('On Hover', 'triss')
													),
									'default'    => '',
								),

								array(
									'id'         => 'product-background-bgcolor',
									'type'       => 'color_picker',
									'title'      => esc_html__('Background - Background Color', 'triss')
								),

								array(
									'id'         => 'product-background-dark-bgcolor',
									'type'       => 'switcher',
									'title'      => esc_html__('Background - Dark Background', 'triss')
								),
							
								array(
									'id'         => 'product-padding',
									'type'       => 'select',
									'title'      => esc_html__('Padding', 'triss'),
									'options'    => array(
														'product-padding-default' => esc_html__('Default', 'triss'),
														'product-padding-overall' => esc_html__('Product', 'triss'),
														'product-padding-thumb'   => esc_html__('Thumb', 'triss'),
														'product-padding-content' => esc_html__('Content', 'triss'),
													),
									'default'    => 'product-padding-default'
								),
								array(
									'id'         => 'product-space',
									'type'       => 'select',
									'title'      => esc_html__('Space', 'triss'),
									'options'    => array(
														'product-without-space' => esc_html__('False', 'triss'),
														'product-with-space'  => esc_html__('True', 'triss')
													),
									'default'    => 'product-with-space'
								),
								array(
									'id'         => 'product-display-type',
									'type'       => 'select',
									'title'      => esc_html__('Display Type', 'triss'),
									'options'    => array(
														'grid' => esc_html__('Grid', 'triss'),
														'list'  => esc_html__('List', 'triss')
													),
									'default'    => 'grid'
								),
								array(
									'id'         => 'product-display-type-list-options',
									'type'       => 'select',
									'title'      => esc_html__('List Options', 'triss'),
									'options'    => array(
														'left-thumb'  => esc_html__('Left Thumb', 'triss'),
														'right-thumb' => esc_html__('Right Thumb', 'triss')
													),
									'default'    => 'left-thumb'
								),	
								array(
									'id'         => 'product-show-labels',
									'type'       => 'select',
									'title'      => esc_html__('Show Product Labels', 'triss'),
									'options'    => array(
														'true'  => esc_html__('True', 'triss'),
														'false' => esc_html__('False', 'triss')
													),
									'default'    => 'true'
								),															
								array(
									'id'         => 'product-label-design',
									'type'       => 'select',
									'title'      => esc_html__('Product Label Design', 'triss'),
									'options'    => array(
														'product-label-boxed'      => esc_html__('Boxed', 'triss'),
														'product-label-circle'  => esc_html__('Circle', 'triss'),
														'product-label-rounded'   => esc_html__('Rounded', 'triss'),
														'product-label-angular'   => esc_html__('Angular', 'triss'),
														'product-label-ribbon'   => esc_html__('Ribbon', 'triss'),
													),
									'default'    => 'product-label-boxed',
								),

								array(
									'id'         => 'product-custom-class',
									'type'       => 'text',
									'title'      => esc_html__('Custom Class', 'triss')
								),	

							// "Product Style - Thumb" Options

								array(
									'type'    => 'notice',
									'class'   => 'info',
									'content' => esc_html__('"Product Style - Thumb" Options.', 'triss')
								),

								array(
									'id'         => 'product-thumb-secondary-image-onhover',
									'type'       => 'switcher',
									'title'      => esc_html__('Show Secondary Image On Hover', 'triss'),
									'desc'	 => esc_html__('YES! to show secondary image on product hover. First image in the gallery will be used as secondary image.', 'triss')
								),

								array(
									'id'             => 'product-thumb-content',
									'type'           => 'sorter',
									'title'          => esc_html__('Content', 'triss'),
									'default'        => array(
										'enabled'      => array(
											'title'          => esc_html__('Title', 'triss'),
											'category'       => esc_html__('Category', 'triss'),
											'price'          => esc_html__('Price', 'triss'),
											'button_element' => esc_html__('Button Element', 'triss'),
											'icons_group'    => esc_html__('Icons Group', 'triss'),
										),
										'disabled'     => array(
											'excerpt'       => esc_html__('Excerpt', 'triss'),
											'rating'        => esc_html__('Rating', 'triss'),
											'countdown'     => esc_html__('Count Down', 'triss'),
											'separator'     => esc_html__('Separator', 'triss'),
											'element_group' => esc_html__('Element Group', 'triss'),
											'swatches'      => esc_html__('Swatches', 'triss'),
										),
									),
									'enabled_title'  => esc_html__('Active Elements', 'triss'),
									'disabled_title' => esc_html__('Deatcive Elements', 'triss'),
								),

								array(
									'id'         => 'product-thumb-alignment',
									'type'       => 'select',
									'title'      => esc_html__('Alignment', 'triss'),
									'options'    => array(
														'product-thumb-alignment-top'          => esc_html__('Top', 'triss'),
														'product-thumb-alignment-top-left'     => esc_html__('Top Left', 'triss'),
														'product-thumb-alignment-top-right'    => esc_html__('Top Right', 'triss'),
														'product-thumb-alignment-middle'       => esc_html__('Middle', 'triss'),
														'product-thumb-alignment-bottom'       => esc_html__('Bottom', 'triss'),
														'product-thumb-alignment-bottom-left'  => esc_html__('Bottom Left', 'triss'),
														'product-thumb-alignment-bottom-right' => esc_html__('Bottom Right', 'triss')
													),
									'default'    => 'product-thumb-alignment-top'
								),

								array(
									'id'         => 'product-thumb-iconsgroup-icons',
									'type'       => 'select',
									'title'      => esc_html__('Icons Group - Icons', 'triss'),
									'options'    => array(
														'cart'      => esc_html__('Cart', 'triss'),
														'wishlist'  => esc_html__('Wishlist', 'triss'),
														'compare'   => esc_html__('Compare', 'triss'),
														'quickview' => esc_html__('Quick View', 'triss')
													),
									'class'         => 'chosen',
									'attributes'    => array(
										'multiple'    => 'multiple',
									),							
								),

								array(
									'id'         => 'product-thumb-iconsgroup-style',
									'type'       => 'select',
									'title'      => esc_html__('Icons Group - Style', 'triss'),
									'options'    => array(
														'product-thumb-iconsgroup-style-simple'  => esc_html__('Simple', 'triss'),
														'product-thumb-iconsgroup-style-bgfill-square'  => esc_html__('Background Fill Square', 'triss'),
														'product-thumb-iconsgroup-style-bgfill-rounded-square' => esc_html__('Background Fill Rounded Square', 'triss'),
														'product-thumb-iconsgroup-style-bgfill-rounded'  => esc_html__('Background Fill Rounded', 'triss'),
														'product-thumb-iconsgroup-style-brdrfill-square'  => esc_html__('Border Fill Square', 'triss'),
														'product-thumb-iconsgroup-style-brdrfill-rounded-square' => esc_html__('Border Fill Rounded Square', 'triss'),
														'product-thumb-iconsgroup-style-brdrfill-rounded'  => esc_html__('Border Fill Rounded', 'triss'),
														'product-thumb-iconsgroup-style-skinbgfill-square'  => esc_html__('Skin Background Fill Square', 'triss'),
														'product-thumb-iconsgroup-style-skinbgfill-rounded-square' => esc_html__('Skin Background Fill Rounded Square', 'triss'),
														'product-thumb-iconsgroup-style-skinbgfill-rounded'  => esc_html__('Skin Background Fill Rounded', 'triss'),
														'product-thumb-iconsgroup-style-skinbrdrfill-square'  => esc_html__('Skin Border Fill Square', 'triss'),
														'product-thumb-iconsgroup-style-skinbrdrfill-rounded-square' => esc_html__('Skin Border Fill Rounded Square', 'triss'),
														'product-thumb-iconsgroup-style-skinbrdrfill-rounded'  => esc_html__('Skin Border Fill Rounded', 'triss')																											
													),
									'default'    => 'product-thumb-iconsgroup-style-simple'
								),

								array(
									'id'         => 'product-thumb-iconsgroup-position',
									'type'       => 'select',
									'title'      => esc_html__('Icons Group - Position', 'triss'),
									'options'    => array(

													''                                                                              => esc_html__('Default', 'triss'),

													'product-thumb-iconsgroup-position-horizontal horizontal-position-top'          => esc_html__('Horizontal Top', 'triss'),
													'product-thumb-iconsgroup-position-horizontal horizontal-position-top-left'     => esc_html__('Horizontal Top Left', 'triss'),
													'product-thumb-iconsgroup-position-horizontal horizontal-position-top-right'    => esc_html__('Horizontal Top Right', 'triss'),
													'product-thumb-iconsgroup-position-horizontal horizontal-position-middle'       => esc_html__('Horizontal Middle', 'triss'),
													'product-thumb-iconsgroup-position-horizontal horizontal-position-bottom'       => esc_html__('Horizontal Bottom', 'triss'),
													'product-thumb-iconsgroup-position-horizontal horizontal-position-bottom-left'  => esc_html__('Horizontal Bottom Left', 'triss'),
													'product-thumb-iconsgroup-position-horizontal horizontal-position-bottom-right' => esc_html__('Horizontal Bottom Right', 'triss'),

													'product-thumb-iconsgroup-position-vertical vertical-position-top-left'         => esc_html__('Vertical Top Left', 'triss'),
													'product-thumb-iconsgroup-position-vertical vertical-position-top-right'        => esc_html__('Vertical Top Right', 'triss'),
													'product-thumb-iconsgroup-position-vertical vertical-position-middle-left'      => esc_html__('Vertical Middle Left', 'triss'),
													'product-thumb-iconsgroup-position-vertical vertical-position-middle-right'     => esc_html__('Vertical Middle Right', 'triss'),
													'product-thumb-iconsgroup-position-vertical vertical-position-bottom-left'      => esc_html__('Vertical Bottom Left', 'triss'),
													'product-thumb-iconsgroup-position-vertical vertical-position-bottom-right'     => esc_html__('Vertical Bottom Right', 'triss')

												),
									'default'    => ''
								),

								array(
									'id'         => 'product-thumb-buttonelement-button',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Button', 'triss'),
									'options'    => array(
														''          => esc_html__('None', 'triss'),
														'cart'      => esc_html__('Cart', 'triss'),
														'wishlist'  => esc_html__('Wishlist', 'triss'),
														'compare'   => esc_html__('Compare', 'triss'),
														'quickview' => esc_html__('Quick View', 'triss')
													)
								),	

								array(
									'id'         => 'product-thumb-buttonelement-secondary-button',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Secondary Button', 'triss'),
									'options'    => array(
														''          => esc_html__('None', 'triss'),
														'cart'      => esc_html__('Cart', 'triss'),
														'wishlist'  => esc_html__('Wishlist', 'triss'),
														'compare'   => esc_html__('Compare', 'triss'),
														'quickview' => esc_html__('Quick View', 'triss')
													)
								),

								array(
									'id'         => 'product-thumb-buttonelement-style',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Style', 'triss'),
									'options'    => array(
														'product-thumb-buttonelement-style-simple'  => esc_html__('Simple', 'triss'),
														'product-thumb-buttonelement-style-bgfill-square'  => esc_html__('Background Fill Square', 'triss'),
														'product-thumb-buttonelement-style-bgfill-rounded-square' => esc_html__('Background Fill Rounded Square', 'triss'),
														'product-thumb-buttonelement-style-bgfill-rounded'  => esc_html__('Background Fill Rounded', 'triss'),
														'product-thumb-buttonelement-style-brdrfill-square'  => esc_html__('Border Fill Square', 'triss'),
														'product-thumb-buttonelement-style-brdrfill-rounded-square' => esc_html__('Border Fill Rounded Square', 'triss'),
														'product-thumb-buttonelement-style-brdrfill-rounded'  => esc_html__('Border Fill Rounded', 'triss'),
														'product-thumb-buttonelement-style-skinbgfill-square'  => esc_html__('Skin Background Fill Square', 'triss'),
														'product-thumb-buttonelement-style-skinbgfill-rounded-square' => esc_html__('Skin Background Fill Rounded Square', 'triss'),
														'product-thumb-buttonelement-style-skinbgfill-rounded'  => esc_html__('Skin Background Fill Rounded', 'triss'),
														'product-thumb-buttonelement-style-skinbrdrfill-square'  => esc_html__('Skin Border Fill Square', 'triss'),
														'product-thumb-buttonelement-style-skinbrdrfill-rounded-square' => esc_html__('Skin Border Fill Rounded Square', 'triss'),
														'product-thumb-buttonelement-style-skinbrdrfill-rounded'  => esc_html__('Skin Border Fill Rounded', 'triss')																
													),
									'default'    => 'product-thumb-buttonelement-style-simple'
								),

								array(
									'id'         => 'product-thumb-buttonelement-stretch',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Stretch', 'triss'),
									'options'    => array(
														''                                    => esc_html__('False', 'triss'),
														'product-thumb-buttonelement-stretch' => esc_html__('True', 'triss')
													)
								),

								array(
									'id'             => 'product-thumb-element-group',
									'type'           => 'sorter',
									'title'          => esc_html__('Element Group Content', 'triss'),
									'default'        => array(
										'enabled'      => array(
											'title' => esc_html__('Title', 'triss'),
											'price' => esc_html__('Price', 'triss')
										),
										'disabled'     => array(
											'cart'           => esc_html__('Cart', 'triss'),
											'wishlist'       => esc_html__('Wishlist', 'triss'),
											'compare'        => esc_html__('Compare', 'triss'),
											'quickview'      => esc_html__('Quick View', 'triss'),
											'category'       => esc_html__('Category', 'triss'),
											'button_element' => esc_html__('Button Element', 'triss'),
											'icons_group'    => esc_html__('Icons Group', 'triss'),
											'excerpt'        => esc_html__('Excerpt', 'triss'),
											'rating'         => esc_html__('Rating', 'triss'),
											'separator'      => esc_html__('Separator', 'triss'),
											'swatches'       => esc_html__('Swatches', 'triss')
										),
									),
									'enabled_title'  => esc_html__('Active Elements', 'triss'),
									'disabled_title' => esc_html__('Deatcive Elements', 'triss'),
								),


							// "Product Style - Content" Options
								
								array(
									'type'    => 'notice',
									'class'   => 'info',
									'content' => esc_html__('"Product Style - Content" Options.', 'triss')
								),

								array(
									'id'         => 'product-content-enable',
									'type'       => 'switcher',
									'title'      => esc_html__('Enable Content Section', 'triss'),
									'desc'	 => esc_html__('YES! to enable content section.', 'triss')
								),

								array(
									'id'             => 'product-content-content',
									'type'           => 'sorter',
									'title'          => esc_html__('Content', 'triss'),
									'default'        => array(
										'enabled'      => array(
											'title'          => esc_html__('Title', 'triss'),
											'category'       => esc_html__('Category', 'triss'),
											'price'          => esc_html__('Price', 'triss'),
											'button_element' => esc_html__('Button Element', 'triss'),
											'icons_group'    => esc_html__('Icons Group', 'triss'),
										),
										'disabled'     => array(
											'excerpt'       => esc_html__('Excerpt', 'triss'),
											'rating'        => esc_html__('Rating', 'triss'),
											'countdown'     => esc_html__('Count Down', 'triss'),
											'separator'     => esc_html__('Separator', 'triss'),
											'element_group' => esc_html__('Element Group', 'triss'),
											'swatches'      => esc_html__('Swatches', 'triss'),
										),
									),
									'enabled_title'  => esc_html__('Active Elements', 'triss'),
									'disabled_title' => esc_html__('Deatcive Elements', 'triss'),
								),

								array(
									'id'         => 'product-content-alignment',
									'type'       => 'select',
									'title'      => esc_html__('Alignment', 'triss'),
									'options'    => array(
														'product-content-alignment-left'   => esc_html__('Left', 'triss'),
														'product-content-alignment-right'  => esc_html__('Right', 'triss'),
														'product-content-alignment-center' => esc_html__('Center', 'triss')
													),
									'default'    => 'product-content-alignment-left'
								),

								array(
									'id'         => 'product-content-iconsgroup-icons',
									'type'       => 'select',
									'title'      => esc_html__('Icons Group - Icons', 'triss'),
									'options'    => array(
														'cart'      => esc_html__('Cart', 'triss'),
														'wishlist'  => esc_html__('Wishlist', 'triss'),
														'compare'   => esc_html__('Compare', 'triss'),
														'quickview' => esc_html__('Quick View', 'triss')
													),
									'class'         => 'chosen',
									'attributes'    => array(
										'multiple'    => 'multiple',
									),							
								),

								array(
									'id'         => 'product-content-iconsgroup-style',
									'type'       => 'select',
									'title'      => esc_html__('Icons Group - Style', 'triss'),
									'options'    => array(
														'product-content-iconsgroup-style-simple'  => esc_html__('Simple', 'triss'),
														'product-content-iconsgroup-style-bgfill-square'  => esc_html__('Background Fill Square', 'triss'),
														'product-content-iconsgroup-style-bgfill-rounded-square' => esc_html__('Background Fill Rounded Square', 'triss'),
														'product-content-iconsgroup-style-bgfill-rounded'  => esc_html__('Background Fill Rounded', 'triss'),
														'product-content-iconsgroup-style-brdrfill-square'  => esc_html__('Border Fill Square', 'triss'),
														'product-content-iconsgroup-style-brdrfill-rounded-square' => esc_html__('Border Fill Rounded Square', 'triss'),
														'product-content-iconsgroup-style-brdrfill-rounded'  => esc_html__('Border Fill Rounded', 'triss'),
														'product-content-iconsgroup-style-skinbgfill-square'  => esc_html__('Skin Background Fill Square', 'triss'),
														'product-content-iconsgroup-style-skinbgfill-rounded-square' => esc_html__('Skin Background Fill Rounded Square', 'triss'),
														'product-content-iconsgroup-style-skinbgfill-rounded'  => esc_html__('Skin Background Fill Rounded', 'triss'),
														'product-content-iconsgroup-style-skinbrdrfill-square'  => esc_html__('Skin Border Fill Square', 'triss'),
														'product-content-iconsgroup-style-skinbrdrfill-rounded-square' => esc_html__('Skin Border Fill Rounded Square', 'triss'),
														'product-content-iconsgroup-style-skinbrdrfill-rounded'  => esc_html__('Skin Border Fill Rounded', 'triss')																													
													),
									'default'    => 'product-content-iconsgroup-style-simple'
								),

								array(
									'id'         => 'product-content-buttonelement-button',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Button', 'triss'),
									'options'    => array(
														''          => esc_html__('None', 'triss'),
														'cart'      => esc_html__('Cart', 'triss'),
														'wishlist'  => esc_html__('Wishlist', 'triss'),
														'compare'   => esc_html__('Compare', 'triss'),
														'quickview' => esc_html__('Quick View', 'triss')
													)
								),	

								array(
									'id'         => 'product-content-buttonelement-secondary-button',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Secondary Button', 'triss'),
									'options'    => array(
														''          => esc_html__('None', 'triss'),
														'cart'      => esc_html__('Cart', 'triss'),
														'wishlist'  => esc_html__('Wishlist', 'triss'),
														'compare'   => esc_html__('Compare', 'triss'),
														'quickview' => esc_html__('Quick View', 'triss')
													)
								),

								array(
									'id'         => 'product-content-buttonelement-style',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Style', 'triss'),
									'options'    => array(
														'product-content-buttonelement-style-simple'  => esc_html__('Simple', 'triss'),
														'product-content-buttonelement-style-bgfill-square'  => esc_html__('Background Fill Square', 'triss'),
														'product-content-buttonelement-style-bgfill-rounded-square' => esc_html__('Background Fill Rounded Square', 'triss'),
														'product-content-buttonelement-style-bgfill-rounded'  => esc_html__('Background Fill Rounded', 'triss'),
														'product-content-buttonelement-style-brdrfill-square'  => esc_html__('Border Fill Square', 'triss'),
														'product-content-buttonelement-style-brdrfill-rounded-square' => esc_html__('Border Fill Rounded Square', 'triss'),
														'product-content-buttonelement-style-brdrfill-rounded'  => esc_html__('Border Fill Rounded', 'triss'),
														'product-content-buttonelement-style-skinbgfill-square'  => esc_html__('Skin Background Fill Square', 'triss'),
														'product-content-buttonelement-style-skinbgfill-rounded-square' => esc_html__('Skin Background Fill Rounded Square', 'triss'),
														'product-content-buttonelement-style-skinbgfill-rounded'  => esc_html__('Skin Background Fill Rounded', 'triss'),
														'product-content-buttonelement-style-skinbrdrfill-square'  => esc_html__('Skin Border Fill Square', 'triss'),
														'product-content-buttonelement-style-skinbrdrfill-rounded-square' => esc_html__('Skin Border Fill Rounded Square', 'triss'),
														'product-content-buttonelement-style-skinbrdrfill-rounded'  => esc_html__('Skin Border Fill Rounded', 'triss')																													
													),
									'default'    => 'product-content-buttonelement-style-simple'
								),

								array(
									'id'         => 'product-content-buttonelement-stretch',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Stretch', 'triss'),
									'options'    => array(
														''                                    => esc_html__('False', 'triss'),
														'product-content-buttonelement-stretch' => esc_html__('True', 'triss')
													)
								),

								array(
									'id'             => 'product-content-element-group',
									'type'           => 'sorter',
									'title'          => esc_html__('Element Group Content', 'triss'),
									'default'        => array(
										'enabled'      => array(
											'title'          => esc_html__('Title', 'triss'),
											'price'          => esc_html__('Price', 'triss')
										),
										'disabled'     => array(
											'cart'           => esc_html__('Cart', 'triss'),
											'wishlist'       => esc_html__('Wishlist', 'triss'),
											'compare'        => esc_html__('Compare', 'triss'),
											'quickview'      => esc_html__('Quick View', 'triss'),
											'category'       => esc_html__('Category', 'triss'),
											'button_element' => esc_html__('Button Element', 'triss'),
											'icons_group'    => esc_html__('Icons Group', 'triss'),
											'excerpt'        => esc_html__('Excerpt', 'triss'),
											'rating'         => esc_html__('Rating', 'triss'),
											'separator'      => esc_html__('Separator', 'triss'),
											'swatches'       => esc_html__('Swatches', 'triss')
										),
									),
									'enabled_title'  => esc_html__('Active Elements', 'triss'),
									'disabled_title' => esc_html__('Deactive Elements', 'triss')
								),

							
							),

							'default' => array (
														dt_sc_woo_default_product_settings()
												),							

						)					
					)
				),

			// Others
				array(
					'name'   => 'dt-woo-other-settings',
					'title'  => esc_html__('Others', 'triss'),
					'icon'   => 'fa fa-angle-double-right',
					'fields' => array(

						array(	
							'type'    => 'subheading',
							'content' => esc_html__( 'Other Settings', 'triss' ),
						),

						array(
							'id'    => 'dt-woo-quantity-plusnminus',
							'type'  => 'switcher',
							'title' => esc_html__('Enable Plus / Minus Button - Quantity', 'triss'),
						),

						array(
							'id'    => 'dt-woo-enable-fullwidth',
							'type'  => 'switcher',
							'title' => esc_html__('Enable Fullwidth', 'triss'),
							'desc'  => esc_html__('This option is applicable for only the main shop page.', 'triss'),
							'default' => true
						),

						array(	
							'type'    => 'subheading',
							'content' => esc_html__( 'Cart Settings', 'triss' ),
						),

						array(
							'id'         => 'dt-woo-addtocart-custom-action',
							'type'       => 'select',
							'title'      => esc_html__('Add To Cart Custom Action', 'triss'),
							'options'    => array(
												''                    => esc_html__('None', 'triss'),
												'sidebar_widget'      => esc_html__('Sidebar Widget', 'triss'),
												'notification_widget' => esc_html__('Notification Widget', 'triss'),
											),
							'default'    => '',
						),

						array(
							'id'      => 'dt-woo-cross-sell-column',
							'type'    => 'image_select',
							'title'   => esc_html__('Cross Sell Prodcut Column', 'triss'),
							'options' => array(
								2 => TRISS_THEME_URI . '/cs-framework-override/images/one-half-column.png',
								3 => TRISS_THEME_URI . '/cs-framework-override/images/one-third-column.png',
								4 => TRISS_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
							),
							'default' => 4,
						),

						array(
							'id'  		=> 'dt-cross-sell-title',
							'type'  	=> 'wysiwyg',
							'title' 	=> esc_html__('Cross Sell Title', 'triss'),
							'default'	=> '<h2>You may be interested in&hellip;</h2>'
						),

						array(
							'id'         => 'dt-woo-cross-sell-style-template',
							'type'       => 'select',
							'title'      => esc_html__('Product Style Template', 'triss'),
							'options'    => $product_style_templates_arr
						),

					)
				),
		)
	);
}

CSFramework::instance( $settings, $options );