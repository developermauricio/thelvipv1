<?php add_action( 'vc_before_init', 'dt_sc_form_map_switcher_vc_map' );
function dt_sc_form_map_switcher_vc_map() {

	class WPBakeryShortCode_dt_sc_form_map_switcher extends WPBakeryShortCodesContainer {
	}

	vc_map( array(
        "name"            => __( "Form & Map Switcher", 'designthemes-core' ),
        "base"            => "dt_sc_form_map_switcher",
        "icon"            => "dt_sc_form_map_switcher",
        "category"        => DT_VC_CATEGORY,
        "content_element" => true,
        "js_view"         => 'VcColumnView',
        'as_parent'       => array( 'only' => 'contact-form-7,dt_sc_google_map' ),
        'description'     => __( 'Form & Map Switch Container', 'designthemes-core' ),
        "params"          => array(

            # Title1
      		array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Switch Title 1", 'designthemes-core' ),
                "param_name"  => "text1",
                "value"       => esc_attr__('Form', 'designthemes-core'),
                "save_always" => true,
      		),

      		# Title2
      		array(
                     "type"        => "textfield",
                     "heading"     => esc_html__( "Switch Title 2", 'designthemes-core' ),
                     "param_name"  => "text2",
                     "value"       => esc_attr__('Map', 'designthemes-core'),
                     "save_always" => true,                
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

			# Class
      		array(
              "type"        => "textfield",
              "heading"     => esc_html__( "Extra class name", 'designthemes-core' ),
              "param_name"  => "class",
              'description' => esc_html__('Style particular element differently - add a class name and refer to it in custom CSS','designthemes-core')
      		)			
		)		
	) );
}?>