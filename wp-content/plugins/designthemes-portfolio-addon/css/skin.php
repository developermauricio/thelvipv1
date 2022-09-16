<?php

function dtportfolio_generate_skin_colors() {

	$output = '';

	$use_predefined_skin = (int) get_theme_mod( 'use-predefined-skin', triss_defaults('use-predefined-skin') );
	$primary_color = get_theme_mod('primary-color',triss_defaults('primary-color'));
	$secondary_color = get_theme_mod('secondary-color',triss_defaults('secondary-color'));
	$tertiary_color = get_theme_mod('tertiary-color',triss_defaults('tertiary-color'));
	
	$primary_color_rgba = triss_hex2rgb( $primary_color );
	$primary_color_rgba = implode(',', $primary_color_rgba);

	$secondary_color_rgba = triss_hex2rgb( $secondary_color );
	$secondary_color_rgba = implode(',', $secondary_color_rgba);

	$tertiary_color_rgba = triss_hex2rgb( $tertiary_color );
	$tertiary_color_rgba = implode(',', $tertiary_color_rgba);

	if( empty( $use_predefined_skin ) ) {

		$output .= '.dtportfolio-item .dtportfolio-image-overlay .links a:hover, .dtportfolio-item .dtportfolio-image-overlay a:hover, .dtportfolio-fullpage-carousel .dtportfolio-fullpage-carousel-content a:hover, .dtportfolio-item.dtportfolio-hover-modern-title .dtportfolio-image-overlay .links a:hover, .dtportfolio-swiper-pagination-holder .dtportfolio-swiper-playpause:hover { color:'.$primary_color.'}';	

		$output .= '.dtportfolio-swiper-pagination-holder .swiper-pagination-bullet-active { background:'.$primary_color.'}';	

	}

	return $output;

}

?>