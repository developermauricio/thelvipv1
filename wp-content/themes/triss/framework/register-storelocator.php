<?php
add_filter( 'wpsl_templates', 'triss_wpsl_custom_templates' );
function triss_wpsl_custom_templates( $templates ) {

    $templates[] = array (
        'id'   => 'custom',
        'name' => esc_html__('Custom template', 'triss' ),
        'path' => TRISS_THEME_DIR . '/' . 'wpsl-templates/custom.php',
    );

    return $templates;
}

add_filter( 'wpsl_listing_template', 'triss_custom_listing_template' );
function triss_custom_listing_template() {

    global $wpsl_settings;

    $listing_template = '<li data-store-id="<%= id %>">' . "\r\n";
    $listing_template .= "\t\t" . '<div>' . "\r\n";
    $listing_template .= "\t\t\t" . '<p><%= thumb %>' . "\r\n";
    $listing_template .= "\t\t\t\t" . wpsl_store_header_template( 'listing' ) . "\r\n";
    $listing_template .= "\t\t\t\t" . '<span class="wpsl-street"><%= address %></span>' . "\r\n";
    $listing_template .= "\t\t\t\t" . '<% if ( address2 ) { %>' . "\r\n";
    $listing_template .= "\t\t\t\t" . '<span class="wpsl-street"><%= address2 %></span>' . "\r\n";
    $listing_template .= "\t\t\t\t" . '<% } %>' . "\r\n";
    $listing_template .= "\t\t\t\t" . '<span>' . wpsl_address_format_placeholders() . '</span>' . "\r\n";
    $listing_template .= "\t\t\t\t" . '<span class="wpsl-country"><%= country %></span>' . "\r\n";
    $listing_template .= "\t\t\t" . '</p>' . "\r\n";
    $listing_template .= "\t\t" . '</div>' . "\r\n";

    if ( !$wpsl_settings['hide_distance'] ) {
        $listing_template .= "\t\t" . '<p><span><%= distance %> ' . esc_html( $wpsl_settings['distance_unit'] ) . '</span></p>' . "\r\n";
    }

    $listing_template .= "\t\t" . '<%= createDirectionUrl() %>' . "\r\n"; 

    $listing_template .= "\t" . '</li>' . "\r\n"; 

    return $listing_template;
	
}

add_filter( 'wpsl_thumb_size', 'triss_wpsl_custom_thumb_size' );
function triss_wpsl_custom_thumb_size() {    
    $size = array( 90, 90 );
    return $size;	
}
?>