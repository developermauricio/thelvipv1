<?php
$config = triss_kirki_config();

TRISS_Kirki::add_section( 'dt_site_layout_section', array(
	'title' => esc_html__( 'Site Layout', 'triss' ),
	'priority' => 20
) );

	# site-layout
	TRISS_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'site-layout',
		'label'    => esc_html__( 'Site Layout', 'triss' ),
		'section'  => 'dt_site_layout_section',
		'default'  => triss_defaults('site-layout'),
		'choices' => array(
			'boxed' =>  TRISS_THEME_URI.'/kirki/assets/images/site-layout/boxed.png',
			'wide' => TRISS_THEME_URI.'/kirki/assets/images/site-layout/wide.png',
		)
	));

	# site-boxed-layout
	TRISS_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'site-boxed-layout',
		'label'    => esc_html__( 'Customize Boxed Layout?', 'triss' ),
		'section'  => 'dt_site_layout_section',
		'default'  => '1',
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'triss' ),
			'off' => esc_attr__( 'No', 'triss' )
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
		)			
	));

	# body-bg-type
	TRISS_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-type',
		'label'    => esc_html__( 'Background Type', 'triss' ),
		'section'  => 'dt_site_layout_section',
		'multiple' => 1,
		'default'  => 'none',
		'choices'  => array(
			'pattern' => esc_attr__( 'Predefined Patterns', 'triss' ),
			'upload' => esc_attr__( 'Set Pattern', 'triss' ),
			'none' => esc_attr__( 'None', 'triss' ),
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-pattern
	TRISS_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'body-bg-pattern',
		'label'    => esc_html__( 'Predefined Patterns', 'triss' ),
		'description'    => esc_html__( 'Add Background for body', 'triss' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'choices' => array(
			TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern1.jpg'=> TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern1.jpg',
			TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern2.jpg'=> TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern2.jpg',
			TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern3.jpg'=> TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern3.jpg',
			TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern4.jpg'=> TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern4.jpg',
			TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern5.jpg'=> TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern5.jpg',
			TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern6.jpg'=> TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern6.jpg',
			TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern7.jpg'=> TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern7.jpg',
			TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern8.jpg'=> TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern8.jpg',
			TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern9.jpg'=> TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern9.jpg',
			TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern10.jpg'=> TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern10.jpg',
			TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern11.jpg'=> TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern11.jpg',
			TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern12.jpg'=> TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern12.jpg',
			TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern13.jpg'=> TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern13.jpg',
			TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern14.jpg'=> TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern14.jpg',
			TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern15.jpg'=> TRISS_THEME_URI.'/kirki/assets/images/site-layout/pattern15.jpg',
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'pattern' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)						
	));

	# body-bg-image
	TRISS_Kirki::add_field( $config, array(
		'type' => 'image',
		'settings' => 'body-bg-image',
		'label'    => esc_html__( 'Background Image', 'triss' ),
		'description'    => esc_html__( 'Add Background Image for body', 'triss' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'upload' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-position
	TRISS_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-position',
		'label'    => esc_html__( 'Background Position', 'triss' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-position' )
		),
		'default' => 'center',
		'multiple' => 1,
		'choices' => triss_image_positions(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload') ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-repeat
	TRISS_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-repeat',
		'label'    => esc_html__( 'Background Repeat', 'triss' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-repeat' )
		),
		'default' => 'repeat',
		'multiple' => 1,
		'choices' => triss_image_repeats(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload' ) ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));	