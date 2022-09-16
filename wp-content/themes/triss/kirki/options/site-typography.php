<?php
$config = triss_kirki_config();

# Breadcrumb Settings
TRISS_Kirki::add_section( 'dt_site_breadcrumb_section', array(
	'title' => esc_html__( 'Breadcrumb', 'triss' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 5
) );

	# customize-breadcrumb-title-typo
	TRISS_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-breadcrumb-title-typo',
		'label'    => esc_html__( 'Customize Title ?', 'triss' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => triss_defaults('customize-breadcrumb-title-typo'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'triss' ),
			'off' => esc_attr__( 'No', 'triss' )
		)			
	));
	
	# breadcrumb-title-typo
	TRISS_Kirki::add_field( $config, array(
		'type'     => 'typography',
		'settings' => 'breadcrumb-title-typo',
		'label'    => esc_html__( 'Title Typography', 'triss' ),
		'section'  => 'dt_site_breadcrumb_section',
		'output' => array(
			array( 'element' => '.main-title-section h1, h1.simple-title' )
		),
		'default' => triss_defaults( 'breadcrumb-title-typo' ),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),		
		'active_callback' => array(
			array( 'setting' => 'customize-breadcrumb-title-typo', 'operator' => '==', 'value' => '1' )
		)		
	));		
	
	# customize-breadcrumb-typo
	TRISS_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-breadcrumb-typo',
		'label'    => esc_html__( 'Customize Link ?', 'triss' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => triss_defaults('customize-breadcrumb-typo'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'triss' ),
			'off' => esc_attr__( 'No', 'triss' )
		)			
	));
	
	# breadcrumb-typo
	TRISS_Kirki::add_field( $config, array(
		'type'     => 'typography',
		'settings' => 'breadcrumb-typo',
		'label'    => esc_html__( 'Link Typography', 'triss' ),
		'section'  => 'dt_site_breadcrumb_section',
		'output' => array(
			array( 'element' => 'div.breadcrumb a' )
		),
		'default' => triss_defaults( 'breadcrumb-typo' ),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),
		'active_callback' => array(
			array( 'setting' => 'customize-breadcrumb-typo', 'operator' => '==', 'value' => '1' )
		)		
	));
# Breadcrumb Settings

# Body Content
TRISS_Kirki::add_section( 'dt_body_content_typo_section', array(
	'title' => esc_html__( 'Body', 'triss' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 15
) );

	# customize-body-content-typo
	TRISS_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-body-content-typo',
		'label'    => esc_html__( 'Customize Content Typo', 'triss' ),
		'section'  => 'dt_body_content_typo_section',
		'default'  => triss_defaults( 'customize-body-content-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'triss' ),
			'off' => esc_attr__( 'No', 'triss' )
		)
	));

	# body-content-typo
	TRISS_Kirki::add_field( $config ,array(
		'type' => 'typography',
		'settings' => 'body-content-typo',
		'label'    => esc_html__('Settings', 'triss'),
		'section'  => 'dt_body_content_typo_section',
		'output' => array( 
			array( 'element' => 'body' ),
			array( 
				'element' => '.editor-styles-wrapper > *',
				'context' => array ('editor')
			)
		),
		'default' => triss_defaults('body-content-typo'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),
		'active_callback' => array(
			array( 'setting' => 'customize-body-content-typo', 'operator' => '==', 'value' => '1' )
		)
	));	

# Heading
TRISS_Kirki::add_section( 'dt_headings_typo_section', array(
	'title' => esc_html__( 'Headings', 'triss' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 20
) );

	# H1
	# customize-body-h1-typo
	TRISS_Kirki::add_field( 'triss_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h1-typo',
		'label'    => esc_html__( 'Customize H1 Tag', 'triss' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => triss_defaults( 'customize-body-h1-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'triss' ),
			'off' => esc_attr__( 'No', 'triss' )
		)
	));

	# h1 tag typography	
	TRISS_Kirki::add_field( 'triss_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h1',
		'label'    =>__('H1 Tag Settings', 'triss'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h1' ),
			array( 
				'element' => '.editor-post-title__block .editor-post-title__input, .editor-styles-wrapper .wp-block h1, body#tinymce.wp-editor.content h1',
				'context' => array ('editor')
			),
		),
		'default' => triss_defaults('h1'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),					
		'active_callback' => array(
			array( 'setting' => 'customize-body-h1-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H1 Divider
	TRISS_Kirki::add_field( 'triss_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h1-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H2
	# customize-body-h2-typo
	TRISS_Kirki::add_field( 'triss_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h2-typo',
		'label'    => esc_html__( 'Customize H2 Tag', 'triss' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => triss_defaults( 'customize-body-h2-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'triss' ),
			'off' => esc_attr__( 'No', 'triss' )
		)
	));

	# h2 tag typography	
	TRISS_Kirki::add_field( 'triss_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h2',
		'label'    =>__('H2 Tag Settings', 'triss'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h2' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h2',
				'context' => array ('editor')
			),
		),
		'default' => triss_defaults('h2'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),									
		'active_callback' => array(
			array( 'setting' => 'customize-body-h2-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H2 Divider
	TRISS_Kirki::add_field( 'triss_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h2-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H3
	# customize-body-h3-typo
	TRISS_Kirki::add_field( 'triss_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h3-typo',
		'label'    => esc_html__( 'Customize H3 Tag', 'triss' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => triss_defaults( 'customize-body-h3-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'triss' ),
			'off' => esc_attr__( 'No', 'triss' )
		)
	));

	# h3 tag typography	
	TRISS_Kirki::add_field( 'triss_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h3',
		'label'    =>__('H3 Tag Settings', 'triss'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h3' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h3',
				'context' => array ('editor')
			),
		),
		'default' => triss_defaults('h3'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),									
		'active_callback' => array(
			array( 'setting' => 'customize-body-h3-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H3 Divider
	TRISS_Kirki::add_field( 'triss_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h3-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H4
	# customize-body-h4-typo
	TRISS_Kirki::add_field( 'triss_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h4-typo',
		'label'    => esc_html__( 'Customize H4 Tag', 'triss' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => triss_defaults( 'customize-body-h4-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'triss' ),
			'off' => esc_attr__( 'No', 'triss' )
		)
	));

	# h4 tag typography	
	TRISS_Kirki::add_field( 'triss_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h4',
		'label'    =>__('H4 Tag Settings', 'triss'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h4' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h4',
				'context' => array ('editor')
			),
		),
		'default' => triss_defaults('h4'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),									
		'active_callback' => array(
			array( 'setting' => 'customize-body-h4-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H4 Divider
	TRISS_Kirki::add_field( 'triss_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h4-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H5
	# customize-body-h5-typo
	TRISS_Kirki::add_field( 'triss_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h5-typo',
		'label'    => esc_html__( 'Customize H5 Tag', 'triss' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => triss_defaults( 'customize-body-h5-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'triss' ),
			'off' => esc_attr__( 'No', 'triss' )
		)
	));

	# h5 tag typography	
	TRISS_Kirki::add_field( 'triss_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h5',
		'label'    =>__('H5 Tag Settings', 'triss'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h5' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h5',
				'context' => array ('editor')
			),
		),
		'default' => triss_defaults('h5'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),									
		'active_callback' => array(
			array( 'setting' => 'customize-body-h5-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H5 Divider
	TRISS_Kirki::add_field( 'triss_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h5-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H6
	# customize-body-h6-typo
	TRISS_Kirki::add_field( 'triss_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h6-typo',
		'label'    => esc_html__( 'Customize H6 Tag', 'triss' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => triss_defaults( 'customize-body-h6-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'triss' ),
			'off' => esc_attr__( 'No', 'triss' )
		)
	));

	# h6 tag typography	
	TRISS_Kirki::add_field( 'triss_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h6',
		'label'    =>__('H6 Tag Settings', 'triss'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h6' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h6',
				'context' => array ('editor')
			),
		),
		'default' => triss_defaults('h6'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),									
		'active_callback' => array(
			array( 'setting' => 'customize-body-h6-typo', 'operator' => '==', 'value' => '1' )
		)
	));
	

# Custom Content Settings
TRISS_Kirki::add_section( 'dt_site_custom_content_section', array(
	'title' => esc_html__( 'Custom Content', 'triss' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 25
) );

	# customize-custom-content-typo
	TRISS_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-custom-content-typo',
		'label'    => esc_html__( 'Customize Custom Content ?', 'triss' ),
		'section'  => 'dt_site_custom_content_section',
		'default'  => triss_defaults('customize-custom-content-typo'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'triss' ),
			'off' => esc_attr__( 'No', 'triss' )
		)			
	));
	
	# custom-content-typo
	TRISS_Kirki::add_field( $config, array(
		'type'     => 'typography',
		'settings' => 'custom-content-typo',
		'label'    => esc_html__( 'Custom Content Typography', 'triss' ),
		'section'  => 'dt_site_custom_content_section',
		'output' => array(
			array( 'element' => 'body, input[type="text"], input[type="password"], input[type="email"], input[type="url"], input[type="tel"], input[type="number"], input[type="range"], input[type="date"], textarea, input.text, input[type="search"], select, textarea' )
		),
		'default' => triss_defaults( 'custom-content-typo' ),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),		
		'active_callback' => array(
			array( 'setting' => 'customize-custom-content-typo', 'operator' => '==', 'value' => '1' )
		)		
	));		

	# customize-custom-heading-typo
	TRISS_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-custom-heading-typo',
		'label'    => esc_html__( 'Customize Custom Heading ?', 'triss' ),
		'section'  => 'dt_site_custom_content_section',
		'default'  => triss_defaults('customize-custom-heading-typo'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'triss' ),
			'off' => esc_attr__( 'No', 'triss' )
		)			
	));
	
	# custom-heading-typo
	TRISS_Kirki::add_field( $config, array(
		'type'     => 'typography',
		'settings' => 'custom-heading-typo',
		'label'    => esc_html__( 'Custom Heading Typography', 'triss' ),
		'section'  => 'dt_site_custom_content_section',
		'output' => array(
			array( 'element' => 'h1, h2, h3, h4, h5, h6, #main-menu ul.menu > li > a, #reply-title, .dt-sc-counter.type1 .dt-sc-counter-number, .dt-sc-portfolio-sorting a, .dt-sc-testimonial.type1 blockquote, .dt-sc-testimonial .dt-sc-testimonial-author cite, .dt-sc-pr-tb-col.minimal .dt-sc-price p, .dt-sc-pr-tb-col.minimal .dt-sc-price h6 span, .dt-sc-testimonial.special-testimonial-carousel blockquote, .dt-sc-pr-tb-col .dt-sc-tb-title, .dt-sc-pr-tb-col .dt-sc-tb-content, .woocommerce div.product .dt-sc-product-tabs .woocommerce-tabs ul.tabs li a, .woocommerce #reviews #comments ol.commentlist li .comment-text p.meta strong' )
		),
		'default' => triss_defaults( 'custom-heading-typo' ),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),		
		'active_callback' => array(
			array( 'setting' => 'customize-custom-heading-typo', 'operator' => '==', 'value' => '1' )
		)		
	));	

# Custom Content Settings


# Footer Typography
	TRISS_Kirki::add_section( 'dt_footer_typo', array(
		'title'	=> esc_html__( 'Footer', 'triss' ),
		'panel' => 'dt_site_typography_panel',
		'priority' => 100,
	) );

		# customize-footer-title-typo
		TRISS_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-title-typo',
			'label'    => esc_html__( 'Customize Title ?', 'triss' ),
			'section'  => 'dt_footer_typo',
			'default'  => triss_defaults('customize-footer-title-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'triss' ),
				'off' => esc_attr__( 'No', 'triss' )
			),
		));

		# footer-title-typo
		TRISS_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-title-typo',
			'label'    => esc_html__( 'Title Typography', 'triss' ),
			'section'  => 'dt_footer_typo',
			'output' => array(
				array( 'element' => 'div.footer-widgets h3.widgettitle, #footer h3.widgettitle' )
			),
			'default' => triss_defaults( 'footer-title-typo' ),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-title-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# Divider
		TRISS_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'footer-title-typo-divider',
			'section'  => 'dt_footer_typo',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'customize-footer-title-typo', 'operator' => '==', 'value' => '1' )
			)			
		));

		# customize-footer-content-typo
		TRISS_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-content-typo',
			'label'    => esc_html__( 'Customize Content ?', 'triss' ),
			'section'  => 'dt_footer_typo',
			'default'  => triss_defaults('customize-footer-content-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'triss' ),
				'off' => esc_attr__( 'No', 'triss' )
			),
		));

		# footer-content-typo
		TRISS_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-content-typo',
			'label'    => esc_html__( 'Content Typography', 'triss' ),
			'section'  => 'dt_footer_typo',
			'output' => array(
				array( 'element' => '#footer, .footer-copyright, div.footer-widgets .widget' )
			),
			'default' => triss_defaults( 'footer-content-typo' ),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# footer-content-a-color		
		TRISS_Kirki::add_field( $config, array(
			'type'     => 'color',
			'settings' => 'footer-content-a-color',
			'label'    => esc_html__( 'Anchor Color', 'triss' ),
			'section'  => 'dt_footer_typo',
			'choices' => array( 'alpha' => true ),
			'output' => array(
				array( 'element' => '.footer-widgets a, #footer a' )
			),
			'default' => triss_defaults( 'footer-content-a-color' ),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# footer-content-a-hover-color
		TRISS_Kirki::add_field( $config, array(
			'type'     => 'color',
			'settings' => 'footer-content-a-hover-color',
			'label'    => esc_html__( 'Anchor Hover Color', 'triss' ),
			'section'  => 'dt_footer_typo',
			'choices' => array( 'alpha' => true ),			
			'output' => array(
				array( 'element' => '.footer-widgets a:hover, #footer a:hover' )
			),
			'default' => triss_defaults( 'footer-content-a-hover-color' ),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));