<?php
function triss_kirki_config() {
	return 'triss_kirki_config';
}

function triss_defaults( $key = '' ) {
	$defaults = array();

	# site identify
	$defaults['use-custom-logo'] = '1';
	$defaults['custom-logo'] = TRISS_THEME_URI.'/images/logo.png';
	$defaults['custom-light-logo'] = TRISS_THEME_URI.'/images/light-logo.png';
	$defaults['site_icon'] = TRISS_THEME_URI.'/images/favicon.ico';

	# site layout
	$defaults['site-layout'] = 'wide';

	# site skin
	$defaults['primary-color']      = '#d3ad69';
	$defaults['secondary-color']    = '#121212';
	$defaults['tertiary-color']     = '#fcf1db';
	$defaults['body-bg-color']      = '#ffffff';
	$defaults['body-content-color'] = '#000000';
	$defaults['body-a-color']       = '#000000';
	$defaults['body-a-hover-color'] = '#d3ad69';

	# site breadcrumb
	$defaults['customize-breadcrumb-title-typo'] = '1';
	$defaults['breadcrumb-title-typo'] = array( 'font-family' => 'Josefin Sans',
		'variant'        => '300',
		'subsets'        => array( 'latin-ext' ),
		'font-size'      => '58px',
		'line-height'    => 'normal',
		'letter-spacing' => '0.5px',
		'color'          => '#000000',
		'text-align'     => 'unset',
		'text-transform' =>  'none' );
	$defaults['customize-breadcrumb-typo'] = '1';
	$defaults['breadcrumb-typo'] = array( 'font-family' => 'Open Sans',
		'variant'        => 'normal',
		'subsets'        => array( 'latin-ext' ),
		'font-size'      => '14px',
		'line-height'    => 'normal',
		'letter-spacing' => '0',
		'color'          => '#0a0a0a',
		'text-align'     => 'unset',
		'text-transform' =>  'none' );

	# body content
	$defaults['customize-body-content-typo'] = '1';
	$defaults['body-content-typo'] = array(
		'font-family'    => 'Open Sans',
		'variant'        => '300',
		'font-size'      => '14px',
		'line-height'    => '24px',
		'letter-spacing' => '0.5px',
		'color'          => '#666666',
		'text-align'     => 'unset',
		'text-transform' => 'none'
	);

	# site typography
	$defaults['customize-body-h1-typo'] = '1';
	$defaults['h1'] = array(
		'font-family'    => 'Josefin Sans',
		'variant'        => '300',
		'font-size'      => '66px',
		'line-height'    => 'normal',
		'letter-spacing' => '0.5px',
		'color'          => '#000000',
		'text-align'     => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h2-typo'] = '1';
	$defaults['h2'] = array(
		'font-family'    => 'Josefin Sans',
		'variant'        => '300',
		'font-size'      => '58px',
		'line-height'    => 'normal',
		'letter-spacing' => '0.5px',
		'color'          => '#000000',
		'text-align'     => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h3-typo'] = '1';
	$defaults['h3'] = array(
		'font-family'    => 'Josefin Sans',
		'variant'        => '300',
		'font-size'      => '44px',
		'line-height'    => 'normal',
		'letter-spacing' => '0.5px',
		'color'          => '#000000',
		'text-align'     => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h4-typo'] = '1';
	$defaults['h4'] = array(
		'font-family'    => 'Josefin Sans',
		'variant'        => '300',
		'font-size'      => '36px',
		'line-height'    => 'normal',
		'letter-spacing' => '0.5px',
		'color'          => '#000000',
		'text-align'     => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h5-typo'] = '1';
	$defaults['h5'] = array(
		'font-family'    => 'Josefin Sans',
		'variant'        => '300',
		'font-size'      => '28px',
		'line-height'    => 'normal',
		'letter-spacing' => '0.2px',
		'color'          => '#000000',
		'text-align'     => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h6-typo'] = '1';
	$defaults['h6'] = array(
		'font-family'    => 'Josefin Sans',
		'variant'        => '300',
		'font-size'      => '20px',
		'line-height'    => 'normal',
		'letter-spacing' => '0.5px',
		'color'          => '#000000',
		'text-align'     => 'unset',
		'text-transform' => 'none'
	);

	# custom content
	$defaults['customize-custom-content-typo'] = '1';
	$defaults['custom-content-typo']           = array( 'font-family' => 'Open Sans', 'variant' => '300' );
	$defaults['customize-custom-heading-typo'] = '1';
	$defaults['custom-heading-typo'] = array( 'font-family' => 'Josefin Sans' );

	# site footer
	$defaults['customize-footer-title-typo'] = '1';
	$defaults['footer-title-typo'] = array( 'font-family' => 'Josefin Sans',
		'variant'        => '700',
		'subsets'        => array( 'latin-ext' ),
		'font-size'      => '24px',
		'line-height'    => '36px',
		'letter-spacing' => '0.5px',
		'color'          => '#191919',
		'text-align'     => 'left',
		'text-transform' => 'none' );
	$defaults['customize-footer-content-typo'] = '1';
	$defaults['footer-content-typo'] = array( 'font-family' => 'Open Sans',
		'variant'        => '300',
		'subsets'        => array( 'latin-ext' ),
		'font-size'      => '14px',
		'line-height'    => '24px',
		'letter-spacing' => '0',
		'color'          => '#191919',
		'text-align'     => 'left',
		'text-transform' => 'none' );

	if( !empty( $key ) && array_key_exists( $key, $defaults) ) {
		return $defaults[$key];
	}

	return '';
}

function triss_image_positions() {

	$positions = array( "top left" => esc_attr__('Top Left','triss'),
		"top center"    => esc_attr__('Top Center','triss'),
		"top right"     => esc_attr__('Top Right','triss'),
		"center left"   => esc_attr__('Center Left','triss'),
		"center center" => esc_attr__('Center Center','triss'),
		"center right"  => esc_attr__('Center Right','triss'),
		"bottom left"   => esc_attr__('Bottom Left','triss'),
		"bottom center" => esc_attr__('Bottom Center','triss'),
		"bottom right"  => esc_attr__('Bottom Right','triss'),
	);

	return $positions;
}

function triss_image_repeats() {

	$image_repeats = array( "repeat" => esc_attr__('Repeat','triss'),
		"repeat-x"  => esc_attr__('Repeat in X-axis','triss'),
		"repeat-y"  => esc_attr__('Repeat in Y-axis','triss'),
		"no-repeat" => esc_attr__('No Repeat','triss')
	);

	return $image_repeats;
}

function triss_border_styles() {

	$image_repeats = array(
		"none"	 => esc_attr__('None','triss'),
		"dotted" => esc_attr__('Dotted','triss'),
		"dashed" => esc_attr__('Dashed','triss'),
		"solid"	 => esc_attr__('Solid','triss'),
		"double" => esc_attr__('Double','triss'),
		"groove" => esc_attr__('Groove','triss'),
		"ridge"	 => esc_attr__('Ridge','triss'),
	);

	return $image_repeats;
}

function triss_animations() {

	$animations = array(
		'' 					 => esc_html__('Default','triss'),	
		"bigEntrance"        =>  esc_attr__("bigEntrance",'triss'),
        "bounce"             =>  esc_attr__("bounce",'triss'),
        "bounceIn"           =>  esc_attr__("bounceIn",'triss'),
        "bounceInDown"       =>  esc_attr__("bounceInDown",'triss'),
        "bounceInLeft"       =>  esc_attr__("bounceInLeft",'triss'),
        "bounceInRight"      =>  esc_attr__("bounceInRight",'triss'),
        "bounceInUp"         =>  esc_attr__("bounceInUp",'triss'),
        "bounceOut"          =>  esc_attr__("bounceOut",'triss'),
        "bounceOutDown"      =>  esc_attr__("bounceOutDown",'triss'),
        "bounceOutLeft"      =>  esc_attr__("bounceOutLeft",'triss'),
        "bounceOutRight"     =>  esc_attr__("bounceOutRight",'triss'),
        "bounceOutUp"        =>  esc_attr__("bounceOutUp",'triss'),
        "expandOpen"         =>  esc_attr__("expandOpen",'triss'),
        "expandUp"           =>  esc_attr__("expandUp",'triss'),
        "fadeIn"             =>  esc_attr__("fadeIn",'triss'),
        "fadeInDown"         =>  esc_attr__("fadeInDown",'triss'),
        "fadeInDownBig"      =>  esc_attr__("fadeInDownBig",'triss'),
        "fadeInLeft"         =>  esc_attr__("fadeInLeft",'triss'),
        "fadeInLeftBig"      =>  esc_attr__("fadeInLeftBig",'triss'),
        "fadeInRight"        =>  esc_attr__("fadeInRight",'triss'),
        "fadeInRightBig"     =>  esc_attr__("fadeInRightBig",'triss'),
        "fadeInUp"           =>  esc_attr__("fadeInUp",'triss'),
        "fadeInUpBig"        =>  esc_attr__("fadeInUpBig",'triss'),
        "fadeOut"            =>  esc_attr__("fadeOut",'triss'),
        "fadeOutDownBig"     =>  esc_attr__("fadeOutDownBig",'triss'),
        "fadeOutLeft"        =>  esc_attr__("fadeOutLeft",'triss'),
        "fadeOutLeftBig"     =>  esc_attr__("fadeOutLeftBig",'triss'),
        "fadeOutRight"       =>  esc_attr__("fadeOutRight",'triss'),
        "fadeOutUp"          =>  esc_attr__("fadeOutUp",'triss'),
        "fadeOutUpBig"       =>  esc_attr__("fadeOutUpBig",'triss'),
        "flash"              =>  esc_attr__("flash",'triss'),
        "flip"               =>  esc_attr__("flip",'triss'),
        "flipInX"            =>  esc_attr__("flipInX",'triss'),
        "flipInY"            =>  esc_attr__("flipInY",'triss'),
        "flipOutX"           =>  esc_attr__("flipOutX",'triss'),
        "flipOutY"           =>  esc_attr__("flipOutY",'triss'),
        "floating"           =>  esc_attr__("floating",'triss'),
        "hatch"              =>  esc_attr__("hatch",'triss'),
        "hinge"              =>  esc_attr__("hinge",'triss'),
        "lightSpeedIn"       =>  esc_attr__("lightSpeedIn",'triss'),
        "lightSpeedOut"      =>  esc_attr__("lightSpeedOut",'triss'),
        "pullDown"           =>  esc_attr__("pullDown",'triss'),
        "pullUp"             =>  esc_attr__("pullUp",'triss'),
        "pulse"              =>  esc_attr__("pulse",'triss'),
        "rollIn"             =>  esc_attr__("rollIn",'triss'),
        "rollOut"            =>  esc_attr__("rollOut",'triss'),
        "rotateIn"           =>  esc_attr__("rotateIn",'triss'),
        "rotateInDownLeft"   =>  esc_attr__("rotateInDownLeft",'triss'),
        "rotateInDownRight"  =>  esc_attr__("rotateInDownRight",'triss'),
        "rotateInUpLeft"     =>  esc_attr__("rotateInUpLeft",'triss'),
        "rotateInUpRight"    =>  esc_attr__("rotateInUpRight",'triss'),
        "rotateOut"          =>  esc_attr__("rotateOut",'triss'),
        "rotateOutDownRight" =>  esc_attr__("rotateOutDownRight",'triss'),
        "rotateOutUpLeft"    =>  esc_attr__("rotateOutUpLeft",'triss'),
        "rotateOutUpRight"   =>  esc_attr__("rotateOutUpRight",'triss'),
        "shake"              =>  esc_attr__("shake",'triss'),
        "slideDown"          =>  esc_attr__("slideDown",'triss'),
        "slideExpandUp"      =>  esc_attr__("slideExpandUp",'triss'),
        "slideLeft"          =>  esc_attr__("slideLeft",'triss'),
        "slideRight"         =>  esc_attr__("slideRight",'triss'),
        "slideUp"            =>  esc_attr__("slideUp",'triss'),
        "stretchLeft"        =>  esc_attr__("stretchLeft",'triss'),
        "stretchRight"       =>  esc_attr__("stretchRight",'triss'),
        "swing"              =>  esc_attr__("swing",'triss'),
        "tada"               =>  esc_attr__("tada",'triss'),
        "tossing"            =>  esc_attr__("tossing",'triss'),
        "wobble"             =>  esc_attr__("wobble",'triss'),
        "fadeOutDown"        =>  esc_attr__("fadeOutDown",'triss'),
        "fadeOutRightBig"    =>  esc_attr__("fadeOutRightBig",'triss'),
        "rotateOutDownLeft"  =>  esc_attr__("rotateOutDownLeft",'triss')
    );

	return $animations;
}

function triss_custom_fonts( $standard_fonts ){

	$custom_fonts = array();

	$fonts = cs_get_option('custom_font_fields');
	if( is_countable( $fonts ) && count( $fonts ) > 0 ):
		foreach( $fonts as $font ):
			$custom_fonts[$font['custom_font_name']] = array(
				'label' => $font['custom_font_name'],
				'variants' => array( '100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic' ),
				'stack' => $font['custom_font_name'] . ', sans-serif'
			);
		endforeach;
	endif;

	return array_merge_recursive( $custom_fonts, $standard_fonts );
}
add_filter( 'kirki/fonts/standard_fonts', 'triss_custom_fonts', 20 );