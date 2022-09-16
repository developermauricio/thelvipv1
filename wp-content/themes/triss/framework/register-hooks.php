<?php
add_action( 'vc_before_init', 'triss_vc_compatible' );
function triss_vc_compatible() {
	
	vc_set_as_theme();

	$posts = apply_filters( 'triss_vc_default_cpt' , array ( 'page' )  );
	vc_set_default_editor_post_types( $posts );
}

/* ---------------------------------------------------------------------------
 * Theme Hooks : To Resolve <style> ... </style> in side body tag
 * --------------------------------------------------------------------------- */
add_action( 'wp_head', 'triss_wp_head',999 );
if ( ! function_exists( 'triss_wp_head' ) ) {
	function triss_wp_head() {
		ob_start();
	}
}

add_action( 'wp_footer', 'triss_wp_footer',1000 );
if ( ! function_exists( 'triss_wp_footer' ) ) {
	function triss_wp_footer() {

		$content = ob_get_clean();
		$regex = "#<style id='triss-custom-inline-inline-css' type='text/css'>([^<]*)</style>#";
		preg_match($regex, $content, $matches);

		$style = isset($matches[0]) ? $matches[0] : '';
		$content = str_replace($style,'',$content);
		$content = str_replace('</head>',$style.'</head>',$content);

		$regex = "#<style id='font-awesome-inline-css' type='text/css'>([^<]*)</style>#";
		preg_match($regex, $content, $matches);

		$style = isset($matches[0]) ? $matches[0] : '';
		$content = str_replace($style,'',$content);
		$content = str_replace('</head>',$style.'</head>',$content);

		echo "{$content}";
	}
}

/* ---------------------------------------------------------------------------
 * Hook of Top
 * --------------------------------------------------------------------------- */
function triss_hook_top() {
	if( cs_get_option( 'enable-top-hook' ) ) :
		echo '<!-- triss_hook_top -->';
			$hook = cs_get_option( 'top-hook' );
			if (!empty($hook) )
				echo do_shortcode( stripslashes($hook) );
		echo '<!-- triss_hook_top -->';
	endif;	
}
add_action( 'triss_hook_top', 'triss_hook_top', 10 );

/* ---------------------------------------------------------------------------
 * Page Loader
 * --------------------------------------------------------------------------- */
add_action( 'triss_hook_top', 'triss_page_loader', 20 );
function triss_page_loader() {
	$loader = cs_get_option( 'use-site-loader' );
	if( !empty($loader) ) {
		echo '<div class="loader"><div class="loader-inner"><span class="dot"></span><span class="dot dot1"></span><span class="dot dot2"></span><span class="dot dot3"></span><span class="dot dot4"></span></div></div>';
	}
}

/* ---------------------------------------------------------------------------
 * Hook of Content before
 * --------------------------------------------------------------------------- */
function triss_hook_content_before() {
	if( cs_get_option( 'enable-content-before-hook' ) ) :
		echo '<!-- triss_hook_content_before -->';
			$hook = cs_get_option( 'content-before-hook' );
			if (!empty($hook))
				echo do_shortcode( stripslashes($hook) );
		echo '<!-- triss_hook_content_before -->';
	endif;
}
add_action( 'triss_hook_content_before', 'triss_hook_content_before' );


/* ---------------------------------------------------------------------------
 * Hook of Content after
 * --------------------------------------------------------------------------- */
function triss_hook_content_after() {
	if( cs_get_option( 'enable-content-after-hook' ) ) :
		echo '<!-- triss_hook_content_after -->';
			$hook = cs_get_option( 'content-after-hook' );
			if (!empty($hook))
				echo do_shortcode( stripslashes($hook) );
		echo '<!-- triss_hook_content_after -->';
	endif;
}
add_action( 'triss_hook_content_after', 'triss_hook_content_after' );

/* ---------------------------------------------------------------------------
 * Main Header Hook
 * --------------------------------------------------------------------------- */
add_action( 'triss_header', 'triss_vc_header_template', 10 );
if( ! function_exists( 'triss_vc_header_template' ) ) {

    function triss_vc_header_template( $page_id ) {

        $id = '';

        if( is_singular() && empty( $page_id ) ) {

            global $post;

            $settings = get_post_meta( $post->ID,'_dt_custom_settings',TRUE );
            $settings = is_array( $settings ) ? $settings  : array();

            if( array_key_exists( 'show-header', $settings ) && !$settings['show-header'] )
                return;

            
            $id = isset( $settings['header'] ) ? $settings['header'] : '';
            $id = ( $id == '' ) ? cs_get_option( 'header' ) : $id;
        } elseif( !empty( $page_id ) ) {

            $settings = get_post_meta( $page_id, '_dt_custom_settings',TRUE );
            $settings = is_array( $settings ) ? $settings  : array();

            if( array_key_exists( 'show-header', $settings ) && !$settings['show-header'] )
                return;

            $id = isset( $settings['header'] ) ? $settings['header'] : '';
            $id = ( $id == '' ) ? cs_get_option( 'header' ) : $id;

        } else {
            
            $id = cs_get_option( 'header' );
        }

        $id = apply_filters( 'triss_header_id', $id );

        if( !$id || !function_exists( 'vc_lean_map' ) ) {
            get_template_part( 'template-parts/content', 'header' );
            return;
        }
        
        ob_start(); 
        wp_enqueue_style( 'triss-custom-inline' );

        if ( $custom_css = get_post_meta( $id, '_wpb_post_custom_css', true ) ) {
            wp_add_inline_style( 'triss-custom-inline' , $custom_css  );
        }

        if ( $shortcode_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true ) ) {
            wp_add_inline_style( 'triss-custom-inline' , $shortcode_custom_css  );
        }

        echo '<div id="header-'.esc_attr( $id ).'" class="dt-header-tpl header-' .esc_attr( $id ). '">';
            echo do_shortcode( get_post_field( 'post_content', $id ) );
        echo '</div>';

        $content = ob_get_clean();
        echo apply_filters( 'triss_header_content', $content );
    }
}

/* ---------------------------------------------------------------------------
 * Main Footer Hook
 * --------------------------------------------------------------------------- */
add_action( 'triss_footer', 'triss_vc_footer_template', 10 );
if( ! function_exists( 'triss_vc_footer_template' ) ) {

	function triss_vc_footer_template() {

		$id = '';

		if( is_singular() ) {

			global $post;

			$settings = get_post_meta( $post->ID,'_dt_custom_settings',TRUE );
			$settings = is_array( $settings ) ? $settings  : array();

			if( array_key_exists( 'show-footer', $settings ) && !$settings['show-footer'] )
				return;

            $id = isset( $settings['footer'] ) ? $settings['footer'] : '';
            $id = ( $id == '' ) ? cs_get_option( 'footer' ) : $id;
            
        } else if(function_exists( 'is_woocommerce' ) && is_shop()) {

            $shop_page_id = get_option('woocommerce_shop_page_id');

            $settings = get_post_meta( $shop_page_id,'_dt_custom_settings',TRUE );
			$settings = is_array( $settings ) ? $settings  : array();

			if( array_key_exists( 'show-footer', $settings ) && !$settings['show-footer'] )
				return;

            $id = isset( $settings['footer'] ) ? $settings['footer'] : '';
            $id = ( $id == '' ) ? cs_get_option( 'footer' ) : $id;

		} else {
            $id = cs_get_option( 'footer' );
        }
		
		$id = apply_filters( 'triss_footer_id', $id );
		
		if( !$id || !function_exists( 'vc_lean_map' ) ) {

			echo '<div class="dt-no-footer-builder-content footer-copyright aligncenter">
				<span>&copy; '.date( 'Y' ).' '.get_bloginfo( 'name' ).'. '. get_bloginfo( 'description', 'display' ).'</span>
			</div>';
			return;
		}

		
		ob_start();	
		wp_enqueue_style( 'triss-custom-inline' );

		if ( $custom_css = get_post_meta( $id, '_wpb_post_custom_css', true ) ) {
			wp_add_inline_style( 'triss-custom-inline' , $custom_css  );
		}

		if ( $shortcode_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true ) ) {
			wp_add_inline_style( 'triss-custom-inline' , $shortcode_custom_css  );
		}

		echo do_shortcode( get_post_field( 'post_content', $id ) );
		$content = ob_get_clean();
        echo apply_filters( 'triss_footer_content', $content );
	}
}

/* ---------------------------------------------------------------------------
 * Hook of Bottom
 * --------------------------------------------------------------------------- */
function triss_hook_bottom() {
	if( cs_get_option( 'enable-bottom-hook' ) ) :
		echo '<!-- triss_hook_bottom -->';
			$hook = cs_get_option( 'bottom-hook' );
            if (!empty($hook))
                echo do_shortcode( stripslashes($hook) );
		echo '<!-- triss_hook_bottom -->';
	endif;
}
add_action( 'triss_hook_bottom', 'triss_hook_bottom' );


/* ---------------------------------------------------------------------------
 * Page Layout  
 * --------------------------------------------------------------------------- */
function triss_page_layout( $layout = '' ) {

    $page_layout       = $sidebar_class = '';
    $show_sidebar      = $show_left_sidebar = $show_right_sidebar = false;
    $container_class   = "container";
    $image_size_class = '';

	switch ( $layout ) {

		case 'with-left-sidebar':
            $page_layout      = "page-with-sidebar with-left-sidebar";
            $show_sidebar     = $show_left_sidebar = true;
            $sidebar_class    = "secondary-has-left-sidebar";
            $image_size_class = 'default';
    	break;

    	case 'with-right-sidebar':
            $page_layout      = "page-with-sidebar with-right-sidebar";
            $show_sidebar     = $show_right_sidebar	= true;
            $sidebar_class    = "secondary-has-right-sidebar";
            $image_size_class = 'default';
    	break;

    	case 'with-both-sidebar':
            $page_layout      = "page-with-sidebar with-both-sidebar";
            $show_sidebar     = $show_left_sidebar = $show_right_sidebar = true;
            $sidebar_class    = "secondary-has-both-sidebar";
            $image_size_class = 'default';
    	break;

        case 'fullwidth':
            $container_class  = "portfolio-fullwidth-container";
            $page_layout      = "content-full-width";
            $image_size_class = 'fullwidth';
        break;

    	case 'content-full-width':
    	default:
            $page_layout      = "content-full-width";
            $image_size_class = 'default';
    	break;
    }

	if( ( is_archive() || is_search() || is_home() ) && $layout == 'with-both-sidebar' ) {

		$left_std = cs_get_option( 'show-standard-left-sidebar-for-post-archives' );
		$right_std = cs_get_option( 'show-standard-right-sidebar-for-post-archives' );

		$left = $right = false;
		if( is_active_sidebar('post-archives-sidebar-left') || ( !empty( $left_std ) && is_active_sidebar('standard-sidebar-left') ) ) {
			$left = true;
		}

		if( is_active_sidebar('post-archives-sidebar-right') || ( !empty( $right_std ) && is_active_sidebar('standard-sidebar-right') ) ) {
			$right = true;
		}

		$pageid = get_option('page_for_posts');
		if( $pageid > 0 ) {
			$settings = array();
			$left = $right = false;

			$settings = get_post_meta($pageid,'_tpl_default_settings',TRUE);
			$settings = is_array( $settings ) ?  array_filter( $settings )  : array();

			if( empty($settings) || ( array_key_exists( 'layout', $settings ) && $settings['layout'] == 'global-site-layout' ) ) {
				$settings['layout'] = cs_get_option( 'site-global-sidebar-layout' );
				$settings['show-standard-sidebar-left'] = true;
				$settings['show-standard-sidebar-right'] = true;
				unset($settings['widget-area-left']);
				unset($settings['widget-area-right']);
			}
			
			if( ( $settings['show-standard-sidebar-left'] && is_active_sidebar( 'standard-sidebar-left' ) ) || triss_active_custom_widgetarea( 'page', $pageid, 'left' ) ) {
				$left = true;
			}
	
			if( ( $settings['show-standard-sidebar-right'] && is_active_sidebar( 'standard-sidebar-right' ) ) || triss_active_custom_widgetarea( 'page', $pageid, 'right' ) ) {
				$right = true;
			}
		}
		
		if( $left && $right ) {
            $page_layout      = "page-with-sidebar with-both-sidebar";
            $show_sidebar     = $show_left_sidebar = $show_right_sidebar = true;
            $sidebar_class    = "secondary-has-both-sidebar";
            $image_size_class = 'default';
		} elseif( $left ) {
			$page_layout        = "page-with-sidebar with-left-sidebar";
			$sidebar_class      = "secondary-has-left-sidebar";
			$show_sidebar       = $show_left_sidebar = true;
			$show_right_sidebar = false;
		} elseif( $right ) {
            $page_layout      	= "page-with-sidebar with-right-sidebar";
			$sidebar_class    	= "secondary-has-right-sidebar";
			$show_sidebar     	= $show_right_sidebar	= true;
			$show_left_sidebar = false;
		} else {
            $page_layout      = "content-full-width";
			$show_sidebar     = $show_left_sidebar = $show_right_sidebar = false;
		}
	} elseif( $layout == 'with-both-sidebar' ) {
		global $post;
		$id = $post->ID;
		$type = $post->post_type;
		$settings = array();

		if( $type == 'page' ){
			$settings = get_post_meta($id,'_tpl_default_settings',TRUE);
			$settings = is_array( $settings ) ?  array_filter( $settings )  : array();

			if( empty($settings) || ( array_key_exists( 'layout', $settings ) && $settings['layout'] == 'global-site-layout' ) ) {
				$settings['layout'] = cs_get_option( 'site-global-sidebar-layout' );
				$settings['show-standard-sidebar-left'] = true;
				$settings['show-standard-sidebar-right'] = true;
				unset($settings['widget-area-left']);
				unset($settings['widget-area-right']);
			}
		} elseif( $type == 'post' ){
			$settings = get_post_meta($id,'_dt_post_settings',TRUE);
			$settings = is_array( $settings ) ?  array_filter( $settings )  : array();
			if( empty($settings) || ( array_key_exists( 'layout', $settings ) && $settings['layout'] == 'global-site-layout' ) ) {
				$settings['layout'] = cs_get_option( 'site-global-sidebar-layout' );
				$settings['show-standard-sidebar-left'] = true;
				$settings['show-standard-sidebar-right'] = true;
				unset($settings['widget-area-left']);
				unset($settings['widget-area-right']);
			}
		} elseif( $type == 'dt_portfolios' ){
			$settings = get_post_meta($id,'_portfolio_settings',TRUE);
			$settings = is_array( $settings ) ?  array_filter( $settings )  : array();
		} else {
			$settings = get_post_meta($id,'_custom_settings',TRUE);
			$settings = is_array( $settings ) ?  array_filter( $settings )  : array();
		}

		$settings['show-standard-sidebar-left'] = isset( $settings['show-standard-sidebar-left'] ) ?  $settings['show-standard-sidebar-left']  : '';
		$settings['show-standard-sidebar-right'] = isset( $settings['show-standard-sidebar-right'] ) ?  $settings['show-standard-sidebar-right']  : '';
		
		$left = $right = false;
		if( ( $settings['show-standard-sidebar-left'] && is_active_sidebar( 'standard-sidebar-left' ) ) || triss_active_custom_widgetarea( $type, $id, 'left' ) ) {
			$left = true;
		}

		if( ( $settings['show-standard-sidebar-right'] && is_active_sidebar( 'standard-sidebar-right' ) ) || triss_active_custom_widgetarea( $type, $id, 'right' ) ) {
			$right = true;
		}

		if( $left && $right ) {
            $page_layout      = "page-with-sidebar with-both-sidebar";
            $show_sidebar     = $show_left_sidebar = $show_right_sidebar = true;
            $sidebar_class    = "secondary-has-both-sidebar";
            $image_size_class = 'default';
		} elseif( $left ) {
			$page_layout        = "page-with-sidebar with-left-sidebar";
			$sidebar_class      = "secondary-has-left-sidebar";
			$show_sidebar       = $show_left_sidebar = true;
			$show_right_sidebar = false;
		} elseif( $right ) {
            $page_layout      	= "page-with-sidebar with-right-sidebar";
			$sidebar_class    	= "secondary-has-right-sidebar";
			$show_sidebar     	= $show_right_sidebar	= true;
			$show_left_sidebar = false;
		}
	}

    return array(
        'page_layout'        => $page_layout,
        'sidebar_class'      => $sidebar_class,
        'show_sidebar'       => $show_sidebar,
        'show_left_sidebar'  => $show_left_sidebar,
        'show_right_sidebar' => $show_right_sidebar,
        'container_class'    => $container_class,
        'image_size_class'   => $image_size_class,
    );
}

/* ---------------------------------------------------------------------------
 * Return Breadcrumb Style
 * --------------------------------------------------------------------------- */
function triss_breadcrumb_css( $settings = array() ) {

    $bg = $co = $repeat = $pos = $attach = $size = $style = '';

    $bg = !empty( $settings['image'] ) ? $settings['image'] : '';
    $co = !empty( $settings['color'] ) ? $settings['color'] : '';
	
    if(!empty($bg) || !empty($co)) :
        $repeat = !empty( $settings['repeat'] ) ? $settings['repeat'] :'repeat';
        $pos    = !empty( $settings['position'] ) ? $settings['position'] :'left top';
        $attach = !empty( $settings['attachment'] ) ? $settings['attachment'] :'scroll';
        $size   = !empty( $settings['size'] ) ? $settings['size'] :'auto';
    else:
        $bgoptions = cs_get_option( 'breadcrumb_background' );
        $bg         = !empty( $bgoptions['image'] ) ? $bgoptions['image'] : '';
        $attach     = !empty( $bgoptions['attachment'] ) ? $bgoptions['attachment'] :'scroll';
        $pos        = !empty( $bgoptions['position'] ) ? $bgoptions['position'] :'left top';
        $size       = !empty( $bgoptions['size'] ) ? $bgoptions['size'] :'auto';
        $repeat     = !empty( $bgoptions['repeat'] ) ? $bgoptions['repeat'] :'repeat';
        $co         = !empty( $bgoptions['color'] ) ? $bgoptions['color'] : '';
    endif;

	$style = !empty($bg) ? "background-image: url($bg); " : "";
	$style .= !empty($pos) ? "background-position: $pos; " : "";
	$style .= !empty($size) ? "background-size: $size; " : "";
	$style .= !empty($repeat) ? "background-repeat: $repeat; " : "";
	$style .= !empty($attach) ? "background-attachment: $attach; " : "";
    $style .= !empty($co) ? "background-color:$co;" : "";

    return $style;
}

/* ---------------------------------------------------------------------------
 * Breadcrumb
 * --------------------------------------------------------------------------- */
function triss_new_breadcrumbs( $args ) {

    $breadcrumbs = array();
    $output = '';

    $homeLink = esc_url( home_url('/') );
    $separator = '<span class="'.cs_get_option( 'breadcrumb-delimiter', 'fa default' ).'"></span>';
    $breadcrumbs[] =  '<a href="'. $homeLink .'">'. esc_html__('Home','triss') .'</a>';
    $breadcrumbs = array_merge( $breadcrumbs, $args );

    $output .=  '<div class="breadcrumb">';
        $count = count( $breadcrumbs );
        $i = 1;

        foreach( $breadcrumbs as $bk => $bc ){
            if( !is_object( $bc ) ) {
                if( strpos( $bc , $separator ) ) {
                    // category parents fix
                    $output .=  ($bc);
                } else {
                    if( $i == $count ) $separator = '';
                    $output .=  ($bc . $separator);
                }
            }
            $i++;
        }
    $output .=  '</div>';

    return $output;
}

function triss_breadcrumb_output( $title, $breadcrumbs, $class, $inline_css ) {

    $inline_css = !empty( $inline_css ) ? "style='".esc_attr($inline_css)."'" : "";

    echo '<section class="main-title-section-wrapper '.esc_attr($class).'">';
    echo '  <div class="main-title-section-bg" '. $inline_css.'></div>';
    echo '  <div class="container">';
    echo '  	<div class="main-title-section">'. $title .'</div>';
    echo        triss_new_breadcrumbs( $breadcrumbs );
    echo '  </div>';
    echo '</section>';
}


if(!function_exists('triss_privacy_comment_checkbox_default')) {
	function triss_privacy_comment_checkbox_default( $comment_field ) {

		if( !class_exists( 'DTCorePlugin' ) || cs_get_option('privacy-commentform') != "true" ) {

			if (!function_exists( 'is_woocommerce' ) || (function_exists( 'is_woocommerce' ) && !is_singular( 'product' )) ) {

				$comment_field['author'] = '<div class="column dt-sc-one-half first"><p class="comment-form-author"><input id="author" name="author" type="text" value="" size="30" placeholder="'.esc_attr__('Name', 'triss').'" required /></p></div>';
				$comment_field['email']  = '<div class="column dt-sc-one-half"><p class="comment-form-email"><input id="email" name="email" type="text" value="" size="30" placeholder="'.esc_attr__('Email', 'triss').'"  required /></p></div>';

			}

		}

		unset($comment_field['url']);
		unset($comment_field['comment_field']);

		return $comment_field;
	}
	add_filter( 'comment_form_default_fields', 'triss_privacy_comment_checkbox_default'  );
}

// Move comment field to bottom
if(!function_exists('triss_move_comment_field_to_bottom')) {

	function triss_move_comment_field_to_bottom( $fields ) {

		if (!function_exists( 'is_woocommerce' ) || (function_exists( 'is_woocommerce' ) && !is_singular( 'product' )) ) {

			$comment_field       = $fields['comment'];
			$author_field        = isset($fields['author']) ? $fields['author'] : '';
			$email_field         = isset($fields['email']) ? $fields['email'] : '';
			$cookies_field       = isset($fields['cookies']) ? $fields['cookies'] : '';
			$url_field           = isset($fields['url']) ? $fields['url'] : '';
			$privatepolicy_field = isset($fields['comment-form-dt-privatepolicy']) ? $fields['comment-form-dt-privatepolicy'] : '';

			$new_fields            = array ();
			$new_fields['author']  = $author_field;
			$new_fields['email']   = $email_field;
			$new_fields['comment'] = $comment_field;
			$new_fields['cookies'] = $cookies_field;
			$new_fields['comment-form-dt-privatepolicy'] = $privatepolicy_field;

			$fields = $new_fields;

		}

		return $fields;

	}

	add_filter( 'comment_form_fields', 'triss_move_comment_field_to_bottom' );

}