<?php 

// Generate Categories List

$categories = get_categories(
	array(
		'hide_empty' =>  0,
		'taxonomy'   =>  'product_cat'
	)
);

$categories_array = array ();
foreach( $categories as $category ){
	$category_data = array ( 'label' => $category->name, 'value' => $category->term_id );
	array_push($categories_array, $category_data);
}


// Generate Tags List

$tags = get_categories(
	array(
		'hide_empty' =>  0,
		'taxonomy'   =>  'product_tag'
	)
);

$tags_array = array ();
foreach( $tags as $tag ){
	$tag_data = array ( 'label' => $tag->name, 'value' => $tag->term_id );
	array_push($tags_array, $tag_data);
}


// Generate Product Titles

$product_posts = get_posts( 
		array( 
			'posts_per_page' => -1, 
			'post_type' => 'product'
		) 
	);

$product_title_array = array ();
foreach($product_posts as $product_post){
	$product_title_data = array ( 'label' => $product_post->post_title, 'value' => $product_post->ID );
	array_push($product_title_array, $product_title_data);
}


// Product Style Templates

$product_style_templates = cs_get_option( 'dt-woo-product-style-templates' );
$product_style_templates = (is_array($product_style_templates) && !empty($product_style_templates)) ? $product_style_templates : false;

$product_style_templates_arr = array ();
if($product_style_templates) {
	foreach($product_style_templates as $product_style_template_key => $product_style_template) {
		$product_style_templates_arr[$product_style_template['template-title']] = $product_style_template_key;
	}
}


vc_map( array(
	"name" => esc_html__( 'Products', 'designthemes-core' ),
	"base" => "dt_sc_products",
	"icon" => "dt_sc_products",
	"category" => DT_VC_SHOP,
	"params" => array(

		// Data Source
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Data Source', 'designthemes-core'),
			'param_name' => 'data_source',
			'value' => array(
						esc_html__('All Products', 'designthemes-core') => '',
						esc_html__('Featured Products', 'designthemes-core') => 'featured',
						esc_html__('Sale Products', 'designthemes-core') => 'sale',
						esc_html__('Bestsellers', 'designthemes-core') => 'bestseller'
					),
			'std' => '',
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),

		// Show Pagination
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Show Pagination', 'designthemes-core'),
			'param_name' => 'show_pagination',
			'value' => array(
						esc_html__('False', 'designthemes-core') => 'false',
						esc_html__('True', 'designthemes-core') => 'true'
					),
			'std' => 'false',
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),

		// Enable Carousel
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Enable Carousel', 'designthemes-core'),
			'param_name' => 'enable_carousel',
			'value' => array(
						esc_html__('False', 'designthemes-core') => 'false',
						esc_html__('True', 'designthemes-core') => 'true'
					),
			'std' => 'false',
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'dependency'  => array( 'element' => 'show_pagination', 'value' => 'false' ),
		),		

		// Post Per Page
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Post Per Page', 'designthemes-core' ),
			'param_name' => 'post_per_page',
			'std' => 12,
			'edit_field_class' => 'vc_column vc_col-sm-6'			
		),

		// Display Mode
		array(
			'type' => 'dropdown',
			'heading' => esc_html__(' Display Mode', 'designthemes-core'),
			'param_name' => 'display_mode',
			'value' => array(
						esc_html__('Grid', 'designthemes-core') => 'grid',
						esc_html__('List', 'designthemes-core') => 'list'
					),
			'std' => 'grid',
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),

		// Columns
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Columns', 'designthemes-core'),
			'param_name' => 'columns',
			'value' => array(
						1 => 1,
						2 => 2,
						3 => 3,
						4 => 4
					),
			'std' => 4,
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'dependency'  => array( 'element' => 'display_mode', 'value' => 'grid' ),
		),

		// List Options
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('List Options', 'designthemes-core'),
			'param_name' => 'list_options',
			'value' => array(
						esc_html__('Left Thumb', 'designthemes-core') => 'left-thumb',
						esc_html__('Right Thumb', 'designthemes-core') => 'right-thumb'
					),
			'std' => 'left-thumb',
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),		

		// Product Style Template
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Product Style Template', 'designthemes-core'),
			'param_name' => 'product_style_template',
			'value' => $product_style_templates_arr,
			'std' => 0,
			'edit_field_class' => 'vc_column vc_col-sm-6'
		),

		// Class
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Class', 'designthemes-core' ),
			'param_name' => 'class',
			'description' => esc_html__( 'If you wish you can add additional class name here.', 'designthemes-core' ),	
			'edit_field_class' => 'vc_column vc_col-sm-6'			
		),
		

		/** Filters **/

		// Categories
		array(
			'type' => 'autocomplete',
			'heading' => esc_html__( 'Categories', 'designthemes-core' ),
			'param_name' => 'categories',
			'settings'    => array(
				'multiple' => true,
				'sortable' => true,
				'min_length' => 1,
				'no_hide' => true,
				'groups' => true,
				'unique_values' => true,
				'display_inline' => false,
				'values'   => $categories_array,
			),		
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'group' => 'Filters',
			'description' => esc_html__( 'Choose categories that you want to display.', 'designthemes-core' ),	
		),		

		// Tags
		array(
			'type' => 'autocomplete',
			'heading' => esc_html__( 'Tags', 'designthemes-core' ),
			'param_name' => 'tags',
			'settings'    => array(
				'multiple' => true,
				'sortable' => true,
				'min_length' => 1,
				'no_hide' => true,
				'groups' => true,
				'unique_values' => true,
				'display_inline' => false,
				'values'   => $tags_array,
			),		
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'group' => 'Filters',
			'description' => esc_html__( 'Choose tags that you want to display.', 'designthemes-core' ),	
		),

		// Include
		array(
			'type' => 'autocomplete',
			'heading' => esc_html__( 'Include', 'designthemes-core' ),
			'param_name' => 'include',
			'settings'    => array(
				'multiple' => true,
				'sortable' => true,
				'min_length' => 1,
				'no_hide' => true,
				'groups' => true,
				'unique_values' => true,
				'display_inline' => false,
				'values'   => $product_title_array,
			),		
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'group' => 'Filters',
			'description' => esc_html__( 'Choose product that you want to display.', 'designthemes-core' ),	
		),

		// Exclude
		array(
			'type' => 'autocomplete',
			'heading' => esc_html__( 'Exclude', 'designthemes-core' ),
			'param_name' => 'exclude',
			'settings'    => array(
				'multiple' => true,
				'sortable' => true,
				'min_length' => 1,
				'no_hide' => true,
				'groups' => true,
				'unique_values' => true,
				'display_inline' => false,
				'values'   => $product_title_array,
			),		
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'group' => 'Filters',
			'description' => esc_html__( 'Choose product that you don\'t want to display.', 'designthemes-core' ),	
		),


		/** Carousel **/

		// Effect
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Effect','designthemes-core'),
			'param_name' => 'carousel_effect',
			'value' => array( 
						esc_html__('Default', 'designthemes-core') => '',
						esc_html__('Fade', 'designthemes-core') => 'fade',
					),
			'description' => esc_html__( 'Choose effect for your carousel. Slides Per View has to be 1 for Fade effect.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'dependency'  => array( 'element' => 'enable_carousel', 'value' => array ('true') ),
			'group' => 'Carousel',
			'std' => ''
		),

		// Slides Per View
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Slides Per View', 'designthemes-core'),
			'param_name' => 'carousel_slidesperview',
			'value' => array( 
						1 => 1, 
						2 => 2, 
						3 => 3, 
						4 => 4, 						
					),
			'description' => esc_html__( 'Number slides of to show in view port. If the "Display Mode" is "List" only one slide will be displayed per view.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'dependency'  => array( 'element' => 'enable_carousel', 'value' => array ('true') ),
			'group' => 'Carousel',
			'std' => ''
		),

		// Enable loop mode
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Enable Loop Mode', 'designthemes-core'),
			'param_name' => 'carousel_loopmode',
			'value' => array(
				esc_html__('False', 'designthemes-core') => 'false',
				esc_html__('True', 'designthemes-core') => 'true',
			),
			'description' => esc_html__( 'If you wish you can enable continous loop mode for your carousel.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'dependency'  => array( 'element' => 'enable_carousel', 'value' => array ('true') ),
			'group' => 'Carousel',
			'std' => ''				
		),	

		// Enable Mousewheel Control
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Enable Mousewheel Control', 'designthemes-core'),
			'param_name' => 'carousel_mousewheelcontrol',
			'value' => array(
				esc_html__('False', 'designthemes-core') => 'false',
				esc_html__('True', 'designthemes-core') => 'true',
			),
			'description' => esc_html__( 'If you wish you can enable mouse wheel control for your carousel.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'dependency'  => array( 'element' => 'enable_carousel', 'value' => array ('true') ),
			'group' => 'Carousel',
			'std' => ''				
		),	

		// Enable Bullet Pagination
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Enable Bullet Pagination', 'designthemes-core'),
			'param_name' => 'carousel_bulletpagination',
			'value' => array(
				esc_html__('False', 'designthemes-core') => 'false',
				esc_html__('True', 'designthemes-core') => 'true',
			),
			'description' => esc_html__( 'To enable bullet pagination.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'dependency'  => array( 'element' => 'enable_carousel', 'value' => array ('true') ),
			'group' => 'Carousel',
			'std' => ''				
		),	

		// Enable Arrow Pagination
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Enable Arrow Pagination', 'designthemes-core'),
			'param_name' => 'carousel_arrowpagination',
			'value' => array(
				esc_html__('False', 'designthemes-core') => 'false',
				esc_html__('True', 'designthemes-core') => 'true',
			),
			'description' => esc_html__( 'To enable arrow pagination.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'dependency'  => array( 'element' => 'enable_carousel', 'value' => array ('true') ),
			'group' => 'Carousel',
			'std' => ''				
		),	
		
		// Arrow Type
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Arrow Type', 'designthemes-core'),
			'param_name' => 'carousel_arrowpagination_type',
			'value' => array( 
						esc_html__('Default', 'designthemes-core') => '', 
						esc_html__('Type 2', 'designthemes-core') => 'type2', 
					),
			'description' => esc_html__( 'Choose arrow pagination type for your carousel.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'dependency'  => array( 'element' => 'carousel_arrowpagination', 'value' => array ('true') ),
			'group' => 'Carousel',
			'std' => ''
		),	

		// Enable Scrollbar
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Enable Scrollbar', 'designthemes-core'),
			'param_name' => 'carousel_scrollbar',
			'value' => array(
				esc_html__('False', 'designthemes-core') => 'false',
				esc_html__('True', 'designthemes-core') => 'true',
			),
			'description' => esc_html__( 'To enable scrollbar for your carousel.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'dependency'  => array( 'element' => 'enable_carousel', 'value' => array ('true') ),
			'group' => 'Carousel',
			'std' => ''				
		),

		// Space Between Sliders
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Space Between Sliders','designthemes-core'),
			'param_name' => 'carousel_spacebetween',
			'description' => esc_html__( 'Space between sliders can be given here.', 'designthemes-core' ),
			'edit_field_class' => 'vc_column vc_col-sm-6',
			'dependency'  => array( 'element' => 'enable_carousel', 'value' => array ('true') ),
			'group' => 'Carousel',
		)


	)
) );

?>