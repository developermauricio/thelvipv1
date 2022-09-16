<?php
$config = triss_kirki_config();

TRISS_Kirki::add_section( 'dt_custom_js_section', array(
	'title' => esc_html__( 'Additional JS', 'triss' ),
	'priority' => 210
) );

	# custom-js
	TRISS_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'enable-custom-js',
		'section'  => 'dt_custom_js_section',
		'label'    => esc_html__( 'Enable Custom JS?', 'triss' ),
		'default'  => triss_defaults('enable-custom-js'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'triss' ),
			'off' => esc_attr__( 'No', 'triss' )
		)		
	));

	# custom-js
	TRISS_Kirki::add_field( $config, array(
		'type'     => 'code',
		'settings' => 'custom-js',
		'section'  => 'dt_custom_js_section',
		'transport' => 'postMessage',
		'label'    => esc_html__( 'Add Custom JS', 'triss' ),
		'choices'     => array(
			'language' => 'javascript',
			'theme'    => 'dark',
		),
		'active_callback' => array(
			array( 'setting' => 'enable-custom-js' , 'operator' => '==', 'value' =>'1')
		)
	));