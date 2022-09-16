<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// -----------------------------------------
// Layer Sliders
// -----------------------------------------
function triss_layersliders() {
  $layerslider = array(  esc_html__('Select a slider','triss') );

  if( class_exists( 'LS_Sliders' ) ) {

    $sliders = LS_Sliders::find(array('limit' => 50));

    if(!empty($sliders)) {
      foreach($sliders as $key => $item){
        $layerslider[ $item['id'] ] = $item['name'];
      }
    }
  }

  return $layerslider;
}

// -----------------------------------------
// Revolution Sliders
// -----------------------------------------
function triss_revolutionsliders() {
  $revolutionslider = array( '' => esc_html__('Select a slider','triss') );

  if(class_exists( 'RevSlider' )) {
    $sld = new RevSlider();
    $sliders = $sld->getArrSliders();
    if(!empty($sliders)){
      foreach($sliders as $key => $item) {
        $revolutionslider[$item->getAlias()] = $item->getTitle();
      }
    }    
  }

  return $revolutionslider;  
}

// -----------------------------------------
// Meta Layout Section
// -----------------------------------------

$cart_page_id = get_option('woocommerce_cart_page_id');
$checkout_page_id = get_option('woocommerce_checkout_page_id');
$myaccount_page_id = get_option('woocommerce_myaccount_page_id');
$wishlist_page_id = get_option( 'yith_wcwl_wishlist_page_id' );

if( isset( $_GET['post'] ) && ( $_GET['post'] == $cart_page_id || $_GET['post'] == $checkout_page_id || $_GET['post'] == $myaccount_page_id || $_GET['post'] == $wishlist_page_id ) ) {	

  $page_layout_options = array(
      'global-site-layout' 	 => TRISS_THEME_URI . '/cs-framework-override/images/admin-option.png',
      'content-full-width'   => TRISS_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
      'with-left-sidebar'    => TRISS_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
      'with-right-sidebar'   => TRISS_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
  );

} else {

  $page_layout_options = array(
    'global-site-layout' 	 => TRISS_THEME_URI . '/cs-framework-override/images/admin-option.png',
    'content-full-width'   => TRISS_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
    'with-left-sidebar'    => TRISS_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
    'with-right-sidebar'   => TRISS_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
    'with-both-sidebar'    => TRISS_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
  );

}

$meta_layout_section =array(
  'name'  => 'layout_section',
  'title' => esc_html__('Layout', 'triss'),
  'icon'  => 'fa fa-columns',
  'fields' =>  array(
    array(
      'id'  => 'layout',
      'type' => 'image_select',
      'title' => esc_html__('Page Layout', 'triss' ),
      'options'      => $page_layout_options,
      'default'      => 'content-full-width',
      'attributes'   => array( 'data-depend-id' => 'page-layout' )
    ),
    array(
      'id'         => 'show-standard-sidebar-left',
      'type'       => 'switcher',
      'title'      => esc_html__('Show Standard Left Sidebar', 'triss' ),
      'dependency' => array( 'page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
    'default'	   => true,
    ),
    array(
      'id'        => 'widget-area-left',
      'type'      => 'select',
      'title'     => esc_html__('Choose Left Widget Areas', 'triss' ),
      'class'     => 'chosen',
      'options'   => triss_custom_widgets(),
      'attributes'  => array( 
        'multiple'  => 'multiple',
        'data-placeholder' => esc_html__('Select Left Widget Areas','triss'),
        'style' => 'width: 400px;'
      ),
      'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'          => 'show-standard-sidebar-right',
      'type'        => 'switcher',
      'title'       => esc_html__('Show Standard Right Sidebar', 'triss' ),
      'dependency'  => array( 'page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
    'default'	  	=> true,
    ),
    array(
      'id'        => 'widget-area-right',
      'type'      => 'select',
      'title'     => esc_html__('Choose Right Widget Areas', 'triss' ),
      'class'     => 'chosen',
      'options'   => triss_custom_widgets(),
      'attributes'    => array( 
        'multiple' => 'multiple',
        'data-placeholder' => esc_html__('Select Right Widget Areas','triss'),
        'style' => 'width: 400px;'
      ),
      'dependency'  => array( 'page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'         => 'page-enable-fullwidth',
      'type'       => 'switcher',
      'title'      => esc_html__('Enable Fullwidth', 'triss' ),
      'default'	   => false,
    ),
  )
);

// -----------------------------------------
// Meta Breadcrumb Section
// -----------------------------------------
$meta_breadcrumb_section = array(
  'name'  => 'breadcrumb_section',
  'title' => esc_html__('Breadcrumb', 'triss'),
  'icon'  => 'fa fa-sitemap',
  'fields' =>  array(
    array(
      'id'      => 'enable-sub-title',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Breadcrumb', 'triss' ),
      'default' => true
    ),
    array(
    	'id'                 => 'breadcrumb_position',
	'type'               => 'select',
      'title'              => esc_html__('Position', 'triss' ),
      'options'            => array(
        'header-top-absolute'    => esc_html__('Behind the Header','triss'),
        'header-top-relative' 	   => esc_html__('Default','triss'),
		),
		'default'            => 'header-top-relative',	
      'dependency'         => array( 'enable-sub-title', '==', 'true' ),
    ),    
    array(
      'id'    => 'breadcrumb_background',
      'type'  => 'background',
      'title' => esc_html__('Background', 'triss' ),
      'dependency'   => array( 'enable-sub-title', '==', 'true' ),
    ),
  )
);

// -----------------------------------------
// Meta Slider Section
// -----------------------------------------
$meta_slider_section = array(
  'name'  => 'slider_section',
  'title' => esc_html__('Slider', 'triss'),
  'icon'  => 'fa fa-slideshare',
  'fields' =>  array(
    array(
      'id'           => 'slider-notice',
      'type'         => 'notice',
      'class'        => 'danger',
      'content'      => esc_html__('Slider tab works only if breadcrumb disabled.','triss'),
      'class'        => 'margin-30 cs-danger',
      'dependency'   => array( 'enable-sub-title', '==', 'true' ),
    ),

    array(
      'id'           => 'show_slider',
      'type'         => 'switcher',
      'title'        => esc_html__('Show Slider', 'triss' ),
      'dependency'   => array( 'enable-sub-title', '==', 'false' ),
    ),
    array(
    	'id'                 => 'slider_position',
	'type'               => 'select',
	'title'              => esc_html__('Position', 'triss' ),
	'options'            => array(
		'header-top-relative'     => esc_html__('Top Header Relative','triss'),
		'header-top-absolute'    => esc_html__('Top Header Absolute','triss'),
		'bottom-header' 	   => esc_html__('Bottom Header','triss'),
	),
	'default'            => 'bottom-header',
	'dependency'         => array( 'enable-sub-title|show_slider', '==|==', 'false|true' ),
   ),
   array(
      'id'                 => 'slider_type',
      'type'               => 'select',
      'title'              => esc_html__('Slider', 'triss' ),
      'options'            => array(
        ''                 => esc_html__('Select a slider','triss'),
        'layerslider'      => esc_html__('Layer slider','triss'),
        'revolutionslider' => esc_html__('Revolution slider','triss'),
        'customslider'     => esc_html__('Custom Slider Shortcode','triss'),
      ),
      'validate' => 'required',
      'dependency'         => array( 'enable-sub-title|show_slider', '==|==', 'false|true' ),
    ),

    array(
      'id'          => 'layerslider_id',
      'type'        => 'select',
      'title'       => esc_html__('Layer Slider', 'triss' ),
      'options'     => triss_layersliders(),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|layerslider' )
    ),

    array(
      'id'          => 'revolutionslider_id',
      'type'        => 'select',
      'title'       => esc_html__('Revolution Slider', 'triss' ),
      'options'     => triss_revolutionsliders(),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|revolutionslider' )
    ),

    array(
      'id'          => 'customslider_sc',
      'type'        => 'textarea',
      'title'       => esc_html__('Custom Slider Code', 'triss' ),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|customslider' )
    ),
  )  
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
array_push( $meta_layout_section['fields'], array(
  'id'        => 'enable-sticky-sidebar',
  'type'      => 'switcher',
  'title'     => esc_html__('Enable Sticky Sidebar', 'triss' ),
  'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-right-sidebar,with-both-sidebar' )
) );

$page_settings = array(
  $meta_layout_section,
  $meta_breadcrumb_section,
  $meta_slider_section,
  array(
    'name'   => 'sidenav_template_section',
    'title'  => esc_html__('Side Navigation Template', 'triss'),
    'icon'   => 'fa fa-th-list',
    'fields' =>  array(
      array(
        'id'      => 'sidenav-tpl-notice',
        'type'    => 'notice',
        'class'   => 'success',
        'content' => esc_html__('Side Navigation Tab Works only if page template set to Side Navigation Template in Page Attributes','triss'),
        'class'   => 'margin-30 cs-success',      
      ),
      array(
        'id'      => 'sidenav-style',
        'type'    => 'select',
        'title'   => esc_html__('Side Navigation Style', 'triss' ),
        'options' => array(
          'type1'  => esc_html__('Type1','triss'),
          'type2'  => esc_html__('Type2','triss'),
          'type3'  => esc_html__('Type3','triss'),
          'type4'  => esc_html__('Type4','triss'),
          'type5'  => esc_html__('Type5','triss')
        ),
      ),
      array(
        'id'    => 'sidenav-align',
        'type'  => 'switcher',
        'title' => esc_html__('Align Right', 'triss' ),
        'info'  => esc_html__('YES! to align right of side navigation.','triss')
      ),
      array(
        'id'    => 'sidenav-sticky',
        'type'  => 'switcher',
        'title' => esc_html__('Sticky Side Navigation', 'triss' ),
        'info'  => esc_html__('YES! to sticky side navigation content.','triss')
      ),
      array(
        'id'    => 'enable-sidenav-content',
        'type'  => 'switcher',
        'title' => esc_html__('Show Content', 'triss' ),
        'info'  => esc_html__('YES! to show content in below side navigation.','triss')
      ),
      array(
        'id'         => 'sidenav-content',
        'type'       => 'textarea',
        'title'      => esc_html__('Side Navigation Content', 'triss' ),
        'info'       => esc_html__('Paste any shortcode content here','triss'),
        'attributes' => array( 'rows' => 6 ),
      ),
    )
  ),  
);

$shop_page_id = get_option('woocommerce_shop_page_id');

if( isset( $_GET['post'] ) && ( $_GET['post'] != $shop_page_id ) || !isset( $_GET['post'] )  ) {	
  $options[] = array(
    'id'        => '_tpl_default_settings',
    'title'     => esc_html__('Page Settings','triss'),
    'post_type' => 'page',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => $page_settings
  );

}

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$post_meta_layout_section = $meta_layout_section;
$fields = $post_meta_layout_section['fields'];

	$fields[0]['title'] =  esc_html__('Post Layout', 'triss' );
	#unset( $fields[0]['options']['with-both-sidebar'] );
	#unset( $fields[0]['info'] );
	#unset( $fields[0]['options']['fullwidth'] );
	unset( $fields[5] );
	unset( $post_meta_layout_section['fields'] );
	$post_meta_layout_section['fields']  = $fields;  

	$post_format_section = array(
		'name'  => 'post_format_data_section',
		'title' => esc_html__('Post Format', 'triss'),
		'icon'  => 'fa fa-cog',
		'fields' =>  array(

			array(
				'id'           => 'single-post-style',
				'type'         => 'select',
				'title'        => esc_html__('Post Style', 'triss'),
				'options'      => array(
				  'breadcrumb-fixed'    => esc_html__('Breadcrumb Fixed', 'triss'),
				  'breadcrumb-parallax' => esc_html__('Breadcrumb Parallax', 'triss'),
				  'overlay'				         => esc_html__('Overlay', 'triss'),
				  'overlap' 		          => esc_html__('Overlap', 'triss'),
				  'boxed' 		            => esc_html__('Boxed', 'triss'),
				  'custom' 		    	      => esc_html__('Custom', 'triss')
				),
				'class'        => 'chosen',
				'default'      => 'boxed',
				'info'         => esc_html__('Choose post style to display single post. If post style is "Custom", display based on Editor content.', 'triss')
			),

			array(
				'id'           => 'single-custom-style',
				'type'         => 'select',
				'title'        => esc_html__('Custom Style', 'triss'),
				'options'      => array(
				  'minimal'     => esc_html__('Minimal', 'triss'),
				  'classic' 	=> esc_html__('Classic', 'triss'),
				  'modern'		=> esc_html__('Modern', 'triss'),
				),
				'class'        => 'chosen',
				'default'      => 'minimal',
				'info'         => esc_html__('Select type of custom style.', 'triss'),
				'dependency'   => array( 'single-post-style', '==', 'custom' ),
			),

			array(
			    'id'           => 'view_count',
			    'type'         => 'number',
			    'title'        => esc_html__('Views', 'triss' ),
				'info'         => esc_html__('No.of views of this post.', 'triss'),
	          	'attributes' => array(
		           'style'    => 'width: 15%;'
        	    ),
			),

			array(
			    'id'           => 'like_count',
			    'type'         => 'number',
			    'title'        => esc_html__('Likes', 'triss' ),
				'info'         => esc_html__('No.of likes of this post.', 'triss'),
	          	'attributes' => array(
		           'style'    => 'width: 15%;'
        	    ),
			),

			array(
				'id' => 'post-format-type',
				'title'   => esc_html__('Type', 'triss' ),
				'type' => 'select',
				'default' => 'standard',
				'options' => array(
					'standard'  => esc_html__('Standard', 'triss'),
					'status'	=> esc_html__('Status','triss'),
					'quote'		=> esc_html__('Quote','triss'),
					'gallery'	=> esc_html__('Gallery','triss'),
					'image'		=> esc_html__('Image','triss'),
					'video'		=> esc_html__('Video','triss'),
					'audio'		=> esc_html__('Audio','triss'),
					'link'		=> esc_html__('Link','triss'),
					'aside'		=> esc_html__('Aside','triss'),
					'chat'		=> esc_html__('Chat','triss')
				),
				'info'         => esc_html__('Post Format & Type should be Same. Check the Post Format from the "Format" Tab, which comes in the Right Side Section', 'triss'),
			),

			array(
				'id' 	  => 'post-gallery-items',
				'type'	  => 'gallery',
				'title'   => esc_html__('Add Images', 'triss' ),
				'add_title'   => esc_html__('Add Images', 'triss' ),
				'edit_title'  => esc_html__('Edit Images', 'triss' ),
				'clear_title' => esc_html__('Remove Images', 'triss' ),
				'dependency' => array( 'post-format-type', '==', 'gallery' ),
			),

			array(
				'id' 	  => 'media-type',
				'type'	  => 'select',
				'title'   => esc_html__('Select Type', 'triss' ),
				'dependency' => array( 'post-format-type', 'any', 'video,audio' ),
		      	'options'	=> array(
					'oembed' => esc_html__('Oembed','triss'),
					'self' => esc_html__('Self Hosted','triss'),
				)
			),

			array(
				'id' 	  => 'media-url',
				'type'	  => 'textarea',
				'title'   => esc_html__('Media URL', 'triss' ),
				'dependency' => array( 'post-format-type', 'any', 'video,audio' ),
			),
		)
	);

	$options[] = array(
		'id'        => '_dt_post_settings',
		'title'     => esc_html__('Post Settings','triss'),
		'post_type' => 'post',
		'context'   => 'normal',
		'priority'  => 'high',
		'sections'  => array(
			$post_meta_layout_section,
			$meta_breadcrumb_section,
			$post_format_section			
		)
	);

// -----------------------------------------
// Tribe Events Post Metabox Options
// -----------------------------------------
  array_push( $post_meta_layout_section['fields'], array(
    'id' => 'event-post-style',
    'title'   => esc_html__('Post Style', 'triss' ),
    'type' => 'select',
    'default' => 'type1',
    'options' => array(
      'type1'  => esc_html__('Classic', 'triss'),
      'type2'  => esc_html__('Full Width','triss'),
      'type3'  => esc_html__('Minimal Tab','triss'),
      'type4'  => esc_html__('Clean','triss'),
      'type5'  => esc_html__('Modern','triss'),
    ),
	'class'    => 'chosen',
	'info'     => esc_html__('Your event post page show at most selected style.', 'triss')
  ) );

  $options[] = array(
    'id'        => '_custom_settings',
    'title'     => esc_html__('Settings','triss'),
    'post_type' => 'tribe_events',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
      $post_meta_layout_section,
      $meta_breadcrumb_section
    )
  );

  if( function_exists( 'is_woocommerce' ) ) {

    $woo_size_guides = cs_get_option( 'dt-woo-size-guides' );
    $woo_size_guides = (is_array($woo_size_guides) && !empty($woo_size_guides)) ? $woo_size_guides : false;
  
    $size_guides[] = esc_html__('None', 'triss');
    if($woo_size_guides) {
      foreach($woo_size_guides as $woo_size_guide_key => $woo_size_guide) {
        $size_guides[$woo_size_guide_key] = $woo_size_guide['title'];
      }
    }
    
    $product_meta_layout_section = array(
      'name'   => 'general_section',
      'title'  => esc_html__('General', 'triss'),
      'icon'   => 'fa fa-angle-double-right',
      'fields' =>  array(
          array(
              'id'         => 'page-layout',
              'type'       => 'image_select',
              'title'      => esc_html__('Page Layout', 'triss'),
              'options'    => array(
                  'admin-option'       => TRISS_THEME_URI . '/cs-framework-override/images/admin-option.png',
                  'content-full-width' => TRISS_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
                  'with-left-sidebar'  => TRISS_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
                  'with-right-sidebar' => TRISS_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
              ),
              'default'    => 'admin-option',
              'attributes' => array( 'data-depend-id' => 'page-layout' )
          ),
          array(
              'id'         => 'show-standard-sidebar',
              'type'       => 'switcher',
              'title'      => esc_html__('Show Product Standard Sidebar', 'triss'),
              'dependency' => array( 'page-layout', 'any', 'with-left-sidebar,with-right-sidebar' )
          ),
          array(
              'id'         => 'product-widgetareas',
              'type'       => 'select',
              'title'      => esc_html__('Choose Custom Widget Area', 'triss'),
              'class'      => 'chosen',
              'options'    => triss_custom_widgets(),
              'dependency' => array( 'page-layout', 'any', 'with-left-sidebar,with-right-sidebar' ),
              'attributes' => array(
                  'multiple'         => 'multiple',
                  'data-placeholder' => esc_attr__('Select Widget Areas', 'triss'),
                  'style'            => 'width: 400px;'
              ),
          ),
  
          # Product Template
          array(
              'id'      => 'product-template',
              'type'    => 'select',
              'title'   => esc_html__('Product Template', 'triss'),
              'class'   => 'chosen',
              'options' => array(
                  'admin-option'    => esc_html__( 'Admin Option', 'triss' ),
                  'woo-default'     => esc_html__( 'WooCommerce Default', 'triss' ),
                  'custom-template' => esc_html__( 'Custom Template', 'triss' )
              ),
              'default'    => 'admin-option',
              'info'       => esc_html__('Don\'t use product shortcodes in content area when "WooCommerce Default" template is chosen.', 'triss')
          ),
                 
          array(
              'id'         => 'show-upsell',
              'type'       => 'select',
              'title'      => esc_html__('Show Upsell Products', 'triss'),
              'class'      => 'chosen',
              'default'    => 'admin-option',
              'attributes' => array( 'data-depend-id' => 'show-upsell' ),
              'options'    => array(
                  'admin-option' => esc_html__( 'Admin Option', 'triss' ),
                  'true'         => esc_html__( 'Show', 'triss'),
                  null           => esc_html__( 'Hide', 'triss'),
              ),
              'dependency' => array( 'product-template', '!=', 'custom-template')
          ),
          array(
              'id'         => 'upsell-column',
              'type'       => 'select',
              'title'      => esc_html__('Choose Upsell Column', 'triss'),
              'class'      => 'chosen',
              'default'    => 4,
              'options'    => array(
                  'admin-option' => esc_html__( 'Admin Option', 'triss' ),
                  1              => esc_html__( 'One Column', 'triss' ),
                  2              => esc_html__( 'Two Columns', 'triss' ),
                  3              => esc_html__( 'Three Columns', 'triss' ),
                  4              => esc_html__( 'Four Columns', 'triss' ),
              ),
              'dependency' => array( 'product-template|show-upsell', '!=|==', 'custom-template|true')
          ),
          array(
              'id'         => 'upsell-limit',
              'type'       => 'select',
              'title'      => esc_html__('Choose Upsell Limit', 'triss'),
              'class'      => 'chosen',
              'default'    => 4,
              'options'    => array(
                  'admin-option' => esc_html__( 'Admin Option', 'triss' ),
                  1              => esc_html__( 'One', 'triss' ),
                  2              => esc_html__( 'Two', 'triss' ),
                  3              => esc_html__( 'Three', 'triss' ),
                  4              => esc_html__( 'Four', 'triss' ),
                  5              => esc_html__( 'Five', 'triss' ),
                  6              => esc_html__( 'Six', 'triss' ),
                  7              => esc_html__( 'Seven', 'triss' ),
                  8              => esc_html__( 'Eight', 'triss' ),
                  9              => esc_html__( 'Nine', 'triss' ),
                  10              => esc_html__( 'Ten', 'triss' ),                                                
              ),
              'dependency' => array( 'product-template|show-upsell', '!=|==', 'custom-template|true')
          ),        
          array(
              'id'         => 'show-related',
              'type'       => 'select',
              'title'      => esc_html__('Show Related Products', 'triss'),
              'class'      => 'chosen',
              'default'    => 'admin-option',
              'attributes' => array( 'data-depend-id' => 'show-related' ),
              'options'    => array(
                  'admin-option' => esc_html__( 'Admin Option', 'triss' ),
                  'true'         => esc_html__( 'Show', 'triss'),
                  null           => esc_html__( 'Hide', 'triss'),
              ),
              'dependency' => array( 'product-template', '!=', 'custom-template')
          ),
          array(
              'id'         => 'related-column',
              'type'       => 'select',
              'title'      => esc_html__('Choose Related Column', 'triss'),
              'class'      => 'chosen',
              'default'    => 4,
              'options'    => array(
                  'admin-option' => esc_html__( 'Admin Option', 'triss' ),
                  2              => esc_html__( 'Two Columns', 'triss' ),
                  3              => esc_html__( 'Three Columns', 'triss' ),
                  4              => esc_html__( 'Four Columns', 'triss' ),
              ),
              'dependency' => array( 'product-template|show-related', '!=|==', 'custom-template|true')
          ),
          array(
              'id'         => 'related-limit',
              'type'       => 'select',
              'title'      => esc_html__('Choose Related Limit', 'triss'),
              'class'      => 'chosen',
              'default'    => 4,
              'options'    => array(
                  'admin-option' => esc_html__( 'Admin Option', 'triss' ),
                  1              => esc_html__( 'One', 'triss' ),
                  2              => esc_html__( 'Two', 'triss' ),
                  3              => esc_html__( 'Three', 'triss' ),
                  4              => esc_html__( 'Four', 'triss' ),
                  5              => esc_html__( 'Five', 'triss' ),
                  6              => esc_html__( 'Six', 'triss' ),
                  7              => esc_html__( 'Seven', 'triss' ),
                  8              => esc_html__( 'Eight', 'triss' ),
                  9              => esc_html__( 'Nine', 'triss' ),
                  10              => esc_html__( 'Ten', 'triss' ),                                                
              ),
              'dependency' => array( 'product-template|show-related', '!=|==', 'custom-template|true')
          ),
  
          # Product Additional Tabs
          array(
            'id'              => 'product-additional-tabs',
            'type'            => 'group',
            'title'           => esc_html__('Additional Tabs', 'triss'),
            'info'            => esc_html__('Click button to add title and description.', 'triss'),
            'button_title'    => esc_html__('Add New Tab', 'triss'),
            'accordion_title' => esc_html__('Adding New Tab Field', 'triss'),
            'fields'          => array(
              array(
              'id'          => 'tab_title',
              'type'        => 'text',
              'title'       => esc_html__('Title', 'triss'),
              ),
  
              array(
              'id'          => 'tab_description',
              'type'        => 'textarea',
              'title'       => esc_html__('Description', 'triss')
              ),
            )
          ),
  
          # Product New Label
           array(
              'id'         => 'product-new-label',
              'type'       => 'switcher',
              'title'      => esc_html__('Add "New" label', 'triss'),
          ), 
  
          array(
            'id'         => 'dt-single-product-size-guides',
            'type'       => 'select',
            'title'      => esc_html__('Product Size Guides', 'triss'),
            'options'    => $size_guides,
            //'info'       => esc_html__('Choose product size guide that defined in admin section.', 'triss')
          ),              
  
          array(
            'id'          => 'description',
            'type'        => 'textarea',
            'title'       => esc_html__('Description', 'triss'),
            'info'       => esc_html__('This content will be used in description tab, when "Custom Template" is chosen.', 'triss')
            ),
  
      )
    );
  
    $options[] = array(
      'id'        => '_custom_settings',
      'title'     => esc_html__('Product Settings','triss'),
      'post_type' => 'product',
      'context'   => 'normal',
      'priority'  => 'high',
      'sections'  => array(
        $product_meta_layout_section
      )
    );
  
    $options[] = array(
      'id'        => '_360viewer_gallery',
      'title'     => esc_html__('Product 360 View Gallery','triss'),
      'post_type' => 'product',
      'context'   => 'side',
      'priority'  => 'low',
      'sections'  => array(
                      array(
                      'name'   => '360view_section',
                      'fields' =>  array(
                                      array (
                                        'id'          => 'product-360view-gallery',
                                        'type'        => 'gallery',
                                        'title'       => esc_html__('Gallery Images', 'triss'),
                                        'desc'        => esc_html__('Simply add images to gallery items.', 'triss'),
                                        'add_title'   => esc_html__('Add Images', 'triss'),
                                        'edit_title'  => esc_html__('Edit Images', 'triss'),
                                        'clear_title' => esc_html__('Remove Images', 'triss'),
                                      )
                                  )
                      )
                    )
      );
  
  
  }
  
// -----------------------------------------
// Header And Footer Options Metabox
// -----------------------------------------
$post_types = apply_filters( 'triss_header_footer_default_cpt' , array ( 'post', 'page', 'product' )  );
$options[] = array(
	'id'	=> '_dt_custom_settings',
	'title'	=> esc_html__('Header & Footer','triss'),
	'post_type' => $post_types,
	'priority'  => 'high',
	'context'   => 'side', 
	'sections'  => array(
	
		# Header Settings
		array(
			'name'  => 'header_section',
			'title' => esc_html__('Header', 'triss'),
			'icon'  => 'fa fa-angle-double-right',
			'fields' =>  array(
			
				# Header Show / Hide
				array(
					'id'		=> 'show-header',
					'type'		=> 'switcher',
					'title'		=> esc_html__('Show Header', 'triss'),
					'default'	=>  true,
				),
				
				# Header
				array(
					'id'  		 => 'header',
					'type'  	 => 'select',
					'title' 	 => esc_html__('Choose Header', 'triss'),
					'class'		 => 'chosen',
					'options'	 => 'posts',
					'query_args' => array(
						'post_type'	 => 'dt_headers',
						'orderby'	 => 'ID',
						'order'		 => 'ASC',
						'posts_per_page' => -1,
					),
					'default_option' => esc_attr__('Select Header', 'triss'),
					'attributes' => array( 'style'	=> 'width:50%' ),
					'info'		 => esc_html__('Select custom header for this page.','triss'),
					'dependency'	=> array( 'show-header', '==', 'true' )
				),							
			)			
		),
		# Header Settings

		# Footer Settings
		array(
			'name'  => 'footer_settings',
			'title' => esc_html__('Footer', 'triss'),
			'icon'  => 'fa fa-angle-double-right',
			'fields' =>  array(
			
				# Footer Show / Hide
				array(
					'id'		=> 'show-footer',
					'type'		=> 'switcher',
					'title'		=> esc_html__('Show Footer', 'triss'),
					'default'	=>  true,
				),
				
				# Footer
		        array(
					'id'         => 'footer',
					'type'       => 'select',
					'title'      => esc_html__('Choose Footer', 'triss'),
					'class'      => 'chosen',
					'options'    => 'posts',
					'query_args' => array(
						'post_type'  => 'dt_footers',
						'orderby'    => 'ID',
						'order'      => 'ASC',
						'posts_per_page' => -1,
					),
					'default_option' => esc_attr__('Select Footer', 'triss'),
					'attributes' => array( 'style'  => 'width:50%' ),
					'info'       => esc_html__('Select custom footer for this page.','triss'),
					'dependency'    => array( 'show-footer', '==', 'true' )
				),			
			)			
		),
		# Footer Settings
		
	)	
);
	
CSFramework_Metabox::instance( $options );