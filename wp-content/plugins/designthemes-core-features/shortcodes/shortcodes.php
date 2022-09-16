<?php
class DTCoreShortcodesDefination {
	
	function __construct() {

		/* Tabs Shortcode */
		add_shortcode ( "dt_sc_tabs", array (
			$this,
			"dt_sc_tabs"
		) );
		
		/* Tab Content for VC */
		add_shortcode("dt_sc_tab", array(
			$this,
			'dt_sc_tab'
		) );

		/* Accordion Shortcode */
		add_shortcode ( "dt_sc_accordion", array (
			$this,
			"dt_sc_accordion"
		) );

		/* Toggle Shortcode */
		add_shortcode ( "dt_sc_toggle", array (
			$this,
			"dt_sc_toggle"
		) );

		/* Toggle Framed Shortcode */
		add_shortcode ( "dt_sc_toggle_framed", array (
			$this,
			"dt_sc_toggle_framed"
		) );

		/* Toggle Group Shortcode */
		add_shortcode ( "dt_sc_toggle_group", array (
			$this,
			"dt_sc_toggle_group"
		) );

		/* Separator */
		add_shortcode("dt_sc_separator", array(
			$this,
			"dt_sc_separator"
		) );

		/* Alignment */
		add_shortcode ( "dt_sc_align", array (
			$this,
			"dt_sc_align"
		) );

		/* Any Class & Styles */
		add_shortcode ( "dt_sc_anyclass_style", array (
			$this,
			"dt_sc_anyclass_style"
		) );

		/* Button */
		add_shortcode ( "dt_sc_button", array (
			$this,
			"dt_sc_button"
		) );

		/* Titled Box Shortcode */
		add_shortcode ( "dt_sc_titled_box", array (
			$this,
			"dt_sc_titled_box"
		) );

		/* Donutchart */
		add_shortcode ( "dt_sc_donutchart", array (
			$this,
			"dt_sc_donutchart"
		) );

		/* Progress Bar Shortcode */
		add_shortcode ( "dt_sc_progress_bar", array (
			$this,
			"dt_sc_progress_bar"
		) );

		/* Pricing Table Item */
		add_shortcode ( "dt_sc_pricing_table_item", array (
			$this,
			"dt_sc_pricing_table_item"
		) );

		/* Pricing Table Minimal Item */
		add_shortcode ( "dt_sc_pricing_table_minimal_item", array (
			$this,
			"dt_sc_pricing_table_minimal_item"
		) );

		/* Pricing Table Type2 Item */
		add_shortcode ( "dt_sc_pricing_table_type2_item", array (
			$this,
			"dt_sc_pricing_table_type2_item"
		) );

		/* Pricing Table Type 3 Item */
		add_shortcode ( "dt_sc_pricing_table_item_3", array (
			$this,
			"dt_sc_pricing_table_item_3"
		) );

		/* Pricing Table Type 4  */
		add_shortcode ( "dt_sc_pricing_box_4", array (
			$this,
			"dt_sc_pricing_box_4"
		) );
			/* Pricing Table Type 4 Item */
			add_shortcode ( "dt_sc_pricing_box_4_item", array (
				$this,
				"dt_sc_pricing_box_4_item"
			) );

		/* Pricing Table Type 5  */
		add_shortcode ( "dt_sc_pricing_table_5", array (
			$this,
			"dt_sc_pricing_table_5"
		) );

		/* Pricing Table Type 6  */
		add_shortcode ( "dt_sc_pricing_table_6", array (
			$this,
			"dt_sc_pricing_table_6"
		) );

		/* Pricing Table Type 7  */
		add_shortcode ( "dt_sc_pricing_table_item_7", array (
			$this,
			"dt_sc_pricing_table_item_7"
		) );				

		/* Icon Box */
		add_shortcode ( "dt_sc_iconbox", array (
			$this,
			"dt_sc_iconbox"
		) );

		/* Dropcap */
		add_shortcode ( "dt_sc_dropcap", array (
			$this,
			"dt_sc_dropcap"
		) );

		/* Blockquote */
		add_shortcode ( "dt_sc_blockquote", array (
			$this,
			"dt_sc_blockquote"
		) );

		/* Colored Button Shortcode */
		add_shortcode ( "dt_sc_colored_button", array (
			$this,
			"dt_sc_colored_button"
		) );

		/* Ordered List Shortcode */
		add_shortcode ( "dt_sc_fancy_ol", array (
			$this,
			"dt_sc_fancy_ol"
		) );

		/* Unordered List Shortcode */
		add_shortcode ( "dt_sc_fancy_ul", array (
			$this,
			"dt_sc_fancy_ul"
		) );

		/* Tooltip Shortcode */
		add_shortcode ( "dt_sc_tooltip", array (
			$this,
			"dt_sc_tooltip"
		) );

		/* Simple Heading */																					
		add_shortcode( "dt_sc_simple_heading", array(
			$this,
			"dt_sc_simple_heading"
		) );

		/* Horizontal Invisible */
		add_shortcode ( "dt_sc_hr_invisible", array (
			$this,
			"dt_sc_hr_invisible"
		) );

		/* Horizontal Top */
		add_shortcode ( "dt_sc_hr_top", array (
			$this,
			"dt_sc_hr_top"
		) );

		/* Horizontal Custom */
		add_shortcode ( "dt_sc_hr_custom", array (
			$this,
			"dt_sc_hr_custom"
		) );
		
		/* Horizontal SVG */
		add_shortcode ( "dt_sc_hr_svg", array (
			$this,
			"dt_sc_hr_svg"
		) );

		/* Phone No */
		add_shortcode ( "dt_sc_phone_no", array (
			$this,
			"dt_sc_phone_no"
		) );

		/* Whatsapp No */
		add_shortcode ( "dt_sc_whatsapp_no", array (
			$this,
			"dt_sc_whatsapp_no"
		) );

		/* Email Address */
		add_shortcode ( "dt_sc_email", array (
			$this,
			"dt_sc_email"
		) );
		
		/* URL */
		add_shortcode ( "dt_sc_url", array (
			$this,
			"dt_sc_url"
		) );

		/* Search Form */
		add_shortcode ( "dt_sc_search_form", array (
			$this,
			"dt_sc_search_form"
		) );

		/* Woo Cart */
		add_shortcode ( "dt_sc_woo_cart", array (
			$this,
			"dt_sc_woo_cart"
		) );

		/* Icon */
		add_shortcode ( "dt_sc_icon", array (
			$this,
			"dt_sc_icon"
		) );

		/* Image */
		add_shortcode ( "dt_sc_image", array (
			$this,
			"dt_sc_image"
		) );

		/* Unique */

		/* Contact Info Shortcode */
		add_shortcode ( "dt_sc_contact_info", array (
			$this,
			"dt_sc_contact_info"
		) );

		/* Number Count Shortcode */
		add_shortcode ( "dt_sc_number_counter", array (
			$this,
			"dt_sc_number_counter"
		) );

		/* Image Caption Shortcode */
		add_shortcode ( "dt_sc_image_caption", array (
			$this,
			"dt_sc_image_caption"
		) );

		/* Image Flip Shortcode */
		add_shortcode ( "dt_sc_image_flip", array (
			$this,
			"dt_sc_image_flip"
		) );

		/* Event caption */
		add_shortcode ( "dt_sc_event_caption", array (
			$this,
			"dt_sc_event_caption"
		) );

		/* event contact info */
		add_shortcode ( "dt_sc_event_contact_info", array (
			$this,
			"dt_sc_event_contact_info"
		) );

		/* Mailchimp Newsletter */
		add_shortcode ( "dt_sc_mc_newsletter", array (
			$this,
			"dt_sc_mc_newsletter"
		) );

		/* Team Shortcode */
		add_shortcode ( "dt_sc_team", array (
			$this,
			"dt_sc_team"
		) );

		/* Speakers Shortcode */
		add_shortcode ( "dt_sc_speaker", array (
			$this,
			"dt_sc_speaker"
		) );

		/* Testimonial Individual */
		add_shortcode ( "dt_sc_testimonial", array (
			$this,
			"dt_sc_testimonial"
		) );

		/* Testimonial Carousel Wrapper */
		add_shortcode ( "dt_sc_tm_carousel_wrapper", array (
			$this,
			"dt_sc_tm_carousel_wrapper"
		) );

		/* Fullwidth Testimonial Carousel Wrapper */
		add_shortcode ( "dt_sc_fw_tm_wrapper", array (
			$this,
			"dt_sc_fw_tm_wrapper"
		) );
		
		/* Testimonial Carousel Item */
		add_shortcode ( "dt_sc_tm_carousel_item", array (
			$this,
			"dt_sc_tm_carousel_item"
		) );
		
		/* Partners Carousel */
		add_shortcode ( "dt_sc_partners_carousel", array (
			$this,
			"dt_sc_partners_carousel"
		) );

		/* Images Carousel */
		add_shortcode ( "dt_sc_images_carousel", array (
			$this,
			"dt_sc_images_carousel"
		) );

		/* Hexagon Wrapper */
		add_shortcode ( "dt_sc_hexagon_wrapper", array (
			$this,
			"dt_sc_hexagon_wrapper"
		) );

		/* Hexagon Item */
		add_shortcode ( "dt_sc_hexagon_item", array (
			$this,
			"dt_sc_hexagon_item"
		) );

		/* Hexagon single item */
		add_shortcode("dt_sc_single_hexagon", array(
			$this,
			"dt_sc_single_hexagon"
		) );

		/* Twitter Tweets */
		add_shortcode ( "dt_sc_twitter_tweets", array (
			$this,
			"dt_sc_twitter_tweets"
		) );

		/* triangle wrapper */
		add_shortcode ( "dt_sc_triangle_wrapper", array (
			$this,
			"dt_sc_triangle_wrapper"
		) );

		/* popular content */
		add_shortcode ( "dt_sc_popular_content", array (
			$this,
			"dt_sc_popular_content"
		) );

		/* Domain wrapper*/
		add_shortcode ( "dt_sc_domains_wrapper", array (
			$this,
			"dt_sc_domains_wrapper"
		));

		add_shortcode ( "dt_sc_domain_box", array (
			$this,
			"dt_sc_domain_box"
		));

		/* Blog Post */
		add_shortcode("dt_sc_blog_post", array(
			$this,
			"dt_sc_blog_post"
		) );

		/* Feature Image */
		add_shortcode("dt_sc_post_feature_image", array(
			$this,
			"dt_sc_post_feature_image"
		) );

		/* Title */
		add_shortcode("dt_sc_post_title", array(
			$this,
			"dt_sc_post_title"
		) );

		/* Meta Group */
		add_shortcode("dt_sc_postmeta_group", array(
			$this,
			"dt_sc_postmeta_group"
		) );

		/* Author */
		add_shortcode("dt_sc_post_author", array(
			$this,
			"dt_sc_post_author"
		) );

		/* Date */
		add_shortcode("dt_sc_post_date", array(
			$this,
			"dt_sc_post_date"
		) );

		/* Comments */
		add_shortcode("dt_sc_post_comments", array(
			$this,
			"dt_sc_post_comments"
		) );

		/* Categories */
		add_shortcode("dt_sc_post_categories", array(
			$this,
			"dt_sc_post_categories"
		) );

		/* Tags */
		add_shortcode("dt_sc_post_tags", array(
			$this,
			"dt_sc_post_tags"
		) );

		/* Social Share */
		add_shortcode("dt_sc_post_socials", array(
			$this,
			"dt_sc_post_socials"
		) );

		/* Likes & Views */
		add_shortcode("dt_sc_post_likes_views", array(
			$this,
			"dt_sc_post_likes_views"
		) );

		/* Related Article */
		add_shortcode("dt_sc_post_related_article", array(
			$this,
			"dt_sc_post_related_article"
		) );

		/* Navigation */
		add_shortcode("dt_sc_post_navigation", array(
			$this,
			"dt_sc_post_navigation"
		) );

		/* Author Bio */
		add_shortcode("dt_sc_post_author_bio", array(
			$this,
			"dt_sc_post_author_bio"
		) );

		/* Comment Box */
		add_shortcode("dt_sc_post_comment_box", array(
			$this,
			"dt_sc_post_comment_box"
		) );

		/* Related Posts */
		add_shortcode("dt_sc_post_related_posts", array(
			$this,
			"dt_sc_post_related_posts"
		) );

		/* LightBox Image */
		add_shortcode("dt_sc_lightbox_image", array(
			$this,
			"dt_sc_lightbox_image"
		) );

		/* Tribe event lists*/
		add_shortcode ( "dt_sc_events_list", array (
			$this,
			"dt_sc_events_list"
		));

		add_shortcode( "dt_sc_special_events_list", array(
			$this,
			"dt_sc_special_events_list"
		) );		

		/* Map Overlay */
		add_shortcode ( "dt_sc_map_overlay", array (
			$this,
			"dt_sc_map_overlay"
		));

		add_shortcode ( "dt_sc_map", array (
			$this,
			"dt_sc_map"
		));		

		/* Coming Soon */
		add_shortcode ( "dt_sc_down_count", array (
			$this,
			"dt_sc_down_count"
		));

		/* Horizontal Timeline */
		add_shortcode( "dt_sc_horizontal_timeline", array(
			$this,
			"dt_sc_horizontal_timeline"
		) );

		/* Horizontal Timeline Entry */
		add_shortcode( "dt_sc_hr_timeline_entry", array(
			$this,
			"dt_sc_hr_timeline_entry"
		) );

		/* Horizontal Timeline Slider */
		add_shortcode ( "dt_sc_hr_timeline_slider", array (
			$this,
			"dt_sc_hr_timeline_slider"
		) );

		/* Vertical Timeline */
		add_shortcode( "dt_sc_vertical_timeline", array(
			$this,
			"dt_sc_vertical_timeline"
		) );

		/* Vertical Timeline Entry */
		add_shortcode( "dt_sc_vc_timeline_entry", array(
			$this,
			"dt_sc_vc_timeline_entry"
		) );

		/* Special Vertical Timeline */
		add_shortcode( "dt_sc_special_vertical_timeline", array(
			$this,
			"dt_sc_special_vertical_timeline"
		) );

		/* Special Vertical Timeline Entry */
		add_shortcode( "dt_sc_special_vc_timeline_entry", array(
			$this,
			"dt_sc_special_vc_timeline_entry"
		) );

		/* BR Tag */
		add_shortcode ( "dt_sc_br", array (
			$this,
			"dt_sc_br"
		) );

		/* Custom Menu */
		add_shortcode ( "dt_sc_custom_menu", array (
			$this,
			"dt_sc_custom_menu"
		) );

		/* Sociable : From admin options panel */
		add_shortcode ( "dt_sc_sociable", array (
			$this,
			"dt_sc_sociable"
		) );

		/* Social Shortcode */
		add_shortcode ( "dt_sc_social", array (
			$this,
			"dt_sc_social"
		) );
		
		/* Video Manager */
		add_shortcode ( "dt_sc_video_manager", array (
			$this,
			"dt_sc_video_manager"
		) );

		/* Video Manager */
		add_shortcode ( "dt_sc_video_item", array (
			$this,
			"dt_sc_video_item"
		) );

		/* Video Manager */
		add_shortcode ( "dt_sc_video_first_item", array (
			$this,
			"dt_sc_video_first_item"
		) );
		
		/* VC Grid Template Variables */
		add_shortcode('dt_sc_gitem_post_format', array(
			$this,
			'dt_sc_gitem_post_format'
		) );

		add_shortcode('dt_sc_gitem_post_tag', array(
			$this,
			'dt_sc_gitem_post_tag'
		) );

		add_shortcode('dt_sc_gitem_post_comment', array(
			$this,
			'dt_sc_gitem_post_comment'
		) );

		add_shortcode( 'dt_sc_gitem_post_category', array(
			$this,
			'dt_sc_gitem_post_category'
		) );

		add_shortcode ( "dt_sc_notfound_msg", array (
			$this,
			"dt_sc_notfound_msg"
		) );

		add_shortcode ( "dt_sc_ad_carousel_wrapper", array (
			$this,
			"dt_sc_ad_carousel_wrapper"
		) );
		
		add_shortcode ( "dt_sc_testimonial_carousel_special", array (
			$this,
			"dt_sc_testimonial_carousel_special"
		) );

		add_shortcode("dt_sc_google_map", array(
			$this,
			"dt_sc_google_map"
		) );

		add_shortcode("dt_sc_form_map_switcher", array(
			$this,
			"dt_sc_form_map_switcher"
		) );		

		add_shortcode("dt_sc_working_hours", array(
			$this,
			"dt_sc_working_hours"
		) );

		add_shortcode("dt_sc_work_hour", array(
			$this,
			"dt_sc_work_hour"
		) );		

		add_shortcode("dt_sc_post_view_count", array(
			$this,
			"dt_sc_post_view_count"
		) );

		add_shortcode("dt_sc_post_like_count", array(
			$this,
			"dt_sc_post_like_count"
		) );

		add_shortcode("dt_sc_post_social_share", array(
			$this,
			"dt_sc_post_social_share"
		) );
		
		/* GDPR Privacy Shortcodes */
		add_shortcode("dt_sc_privacy_link", array(
			$this,
			"dt_sc_privacy_policy_link"
		) );

		add_shortcode("dt_sc_privacy_google_tracking", array(
			$this,
			"dt_sc_privacy_disable_google_tracking"
		) );

		add_shortcode("dt_sc_privacy_google_webfonts", array(
			$this,
			"dt_sc_privacy_disable_google_webfonts"
		) );

		add_shortcode("dt_sc_privacy_google_maps", array(
			$this,
			"dt_sc_privacy_disable_google_maps"
		) );

		add_shortcode("dt_sc_privacy_video_embeds", array(
			$this,
			"dt_sc_privacy_disable_video_embeds"
		) );		
	}

	/**
	 *
	 * @param string $content
	 * @return string
	 */
	static function dtShortcodeHelper($content = null) {
		$content = do_shortcode ( shortcode_unautop ( $content ) );
		$content = preg_replace ( '#^<\/p>|^<br \/>|<p>$#', '', $content );
		$content = preg_replace ( '#<br \/>#', '', $content );
		return trim ( $content );
	}

	public function getCSSAnimation( $css_animation ) {
		$output = '';
		if ( '' !== $css_animation && 'none' !== $css_animation ) {
			wp_enqueue_style( 'animate-css' );
			$output = ' wpb_animate_when_almost_visible wpb_' . $css_animation . ' ' . $css_animation;
		}

		return $output;
	}		

	/**
	 * tabs wrapper
	 * @return string
	 */
	function dt_sc_tabs($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'type' => 'horizontal',
			'style' => 'default',
			'effect' => 'fade',

			'css_animation'  => '',
			'delay'          => '0',

			'class' => ''
		), $attrs ) );

		preg_match_all( '/dt_sc_tab([^\]]+)/i', $content, $matches, PREG_OFFSET_CAPTURE );
		$tab_titles = array();
		if ( isset( $matches[1] ) ) {
			$tab_titles = $matches[1];
		}

		$tabs_nav = '';
		if($style == 'default')
			$tabs_nav .= "<ul class='dt-sc-tabs-{$type}'>";
		else
			$tabs_nav .= "<ul class='dt-sc-tabs-{$type}-frame'>";

			foreach ( $tab_titles as $tab ) {

				$tab_atts = shortcode_parse_atts( $tab[0] );

				$icon = "";

				if( isset($tab_atts['icon_type']) && $tab_atts['icon_type'] === 'fontawesome' ) {
					vc_icon_element_fonts_enqueue( 'fontawesome' );
					$icon = isset( $tab_atts['icon'] ) ? $tab_atts['icon'] : '';
				} elseif( isset($tab_atts['icon_type']) && $tab_atts['icon_type'] === 'custom' ){
					$icon = isset( $tab_atts['icon_class'] ) ? $tab_atts['icon_class'] : '';
				}

				$icon = !empty( $icon ) ? "<span class='".$icon."'></span>" : "";

				$tabs_nav .= '<li><a href="javascript:void(0);">'.$icon.$tab_atts['title'].'</a></li>';
			}

			$tabs_nav .= '</ul>';

		if($style != 'default') $style = '-frame';
		else $style = '';

		$a = '[dt_sc_tab class="dt-sc-tabs-'.$type.$style.'-content" ';
		$content = str_replace( '[dt_sc_tab',$a, $content);
		$out = do_shortcode( $content );

		$animation = $this->getCSSAnimation( $css_animation );

		return "<div class='dt-sc-tabs-{$type}{$style}-container {$animation} {$class}' data-effect='{$effect}' data-delay='{$delay}'>{$tabs_nav}{$out}</div>";
	}

	#For VC fix
	function dt_sc_tab( $attrs, $content = null ){
		extract ( shortcode_atts ( array (
				'class' => '' 
		), $attrs ) );	
		
		$content = do_shortcode( $content );
		
		return "<div class='$class'>".$content."</div>";	
	}

	/**
	 * toggle
	 * @return string
	 */
	function dt_sc_toggle($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'title' => '' 
		), $attrs ) );

		$out = "<h5 class='dt-sc-toggle'><a href='#'>{$title}</a></h5>";
		$out .= '<div class="dt-sc-toggle-content" style="display: none;">';
		$out .= '<div class="block">';
		$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= '</div>';
		$out .= '</div>';
		return $out;
	}

	/**
	 * toggle framed
	 * @return string
	 */
	function dt_sc_toggle_framed($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'title' => '' 
		), $attrs ) );
		
		$out = '<div class="dt-sc-toggle-frame">';
		$out .= "	<h5 class='dt-sc-toggle'><a href='#'>{$title}</a></h5>";
		$out .= '	<div class="dt-sc-toggle-content" style="display: none;">';
		$out .= '		<div class="block">';
		$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= '		</div>';
		$out .= '	</div>';
		$out .= '</div>';
		return $out;
	}

	/**
	 * toggle group
	 * @return string
	 */
	function dt_sc_toggle_group($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'class' => '',
			'style' => 'default', #VC
			'type' => '', #VC
			'css_animation'  => '',
			'delay'          => '0',
		), $attrs ) );				
		
		if( $style == 'frame' ){
			
			$content = str_replace("dt_sc_toggle","dt_sc_toggle_framed", $content );
		}
		
		$out = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$animation = $this->getCSSAnimation( $css_animation );
		
		$out = "<div class='dt-sc-toggle-group-set {$type} {$animation} {$class}' data-delay='{$delay}'>{$out}</div>";
		return $out;
	}

	/**
	 * accordion group
	 * @return string
	 */
	function dt_sc_accordion($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'class' => '' ,
			'style' => 'default', #VC
			'default_accordion_type' => '', #VC
			'framed_accordion_type' => '', #VC

			'css_animation'  => '',
			'delay'          => '0',			
		), $attrs ) );
		
		
		if( $style == 'frame' ){
			
			$content = str_replace("dt_sc_accordion_tab","dt_sc_toggle_framed", $content );
			$type = $framed_accordion_type;
		} else {

			$content = str_replace("dt_sc_accordion_tab","dt_sc_toggle", $content );
			$type = $default_accordion_type;			
		}

		$out = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = str_replace ( "<h5 class='dt-sc-toggle", "<h5 class='dt-sc-toggle-accordion ", $out );

		$animation = $this->getCSSAnimation( $css_animation );
		$out = "<div class='dt-sc-toggle-frame-set {$type} {$animation} {$class}' data-delay='{$delay}'>{$out}</div>";
		return $out;
	}

	function dt_sc_separator($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'style' => 'horizontal',
			'horizontal_type' => 'small',
			'vertical_type' => 'small',
			'class' => ''
		), $attrs ) );

		$separator = "";

		if( $style == 'horizontal' ) {
			$separator = $horizontal_type;

		} else if( $style == 'vertical' ){

			$vertical_type = ( $vertical_type == 'small' ) ? '-small' : '';

			$separator = 'vertical'.$vertical_type;
		}

		$out = "<div class='dt-sc-{$separator}-separator {$class}'></div>";
		return $out;
	}

	/**
	 * anyclass style
	 * @return string
	 */
	function dt_sc_anyclass_style($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'class' => '',
			'styles' => '',
			'css_animation'  => '',
			'delay'          => '0',			
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );
		$styles = !empty($styles) ? "style='{$styles}'" : '';

		$out = "<div class='{$class} {$animation}' data-delay='{$delay}' {$styles}>";
			$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= "</div>";

		return $out;
	}

	/**
	 * alignment
	 * @return string
	 */
	function dt_sc_align($attrs, $content = null) {
		
		extract ( shortcode_atts ( array (
			'align' => 'center',
			'class' => '',
			'styles' => '',
			'css_animation'  => '',
			'delay'          => '0',
			'css' => '' #VC
		), $attrs ) );
		
		$css = vc_shortcode_custom_css_class($css); # VC		
		
		$styles = !empty($styles) ? "style='{$styles}'" : '';

		$animation = $this->getCSSAnimation( $css_animation );		

		$out = "<div class='align{$align} {$css} {$class} {$animation}' data-delay='{$delay}' {$styles}>";
			$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= "</div>";

		return $out;
	}	

	/**
	 * button
	 * @return string
	 */
	function dt_sc_button($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'title' => 'Text on the button', #VC
			'link' => '',
			'size' => 'small',
			'style' => '', #'filled', # Button Style
			
			'textsize' => '',
			'textcolor' => '',
			'color' => '',
			'bgcolor' => '',
			
			'icon_type' => '', #VC
			'iconalign' => '', 
			'iconclass' => '',
			'icon_css_class' => '',
			
			'class' =>'',

			'css_animation'  => '',
			'delay'          => '0',			

			'css' => '',

			'use_theme_fonts' =>  'yes',
			'google_fonts' => '',
		), $attrs ) );

		$content = $title;

		$size = ($size == 'xlarge') ? ' xlarge' : $size;
		$size = ($size == 'large') ? ' large' : $size;
		$size = ($size == 'medium') ? ' medium' : $size;
		$size = ($size == 'small') ? ' small' : $size;
		

		$color = (($color) && (empty ( $bgcolor ))) ? ' ' . $color : '';

		$inline_styles = array ();
		if ($bgcolor)
			$inline_styles [] = 'background-color:' . $bgcolor . ';border-color:' . $bgcolor . ';';

		if ($textcolor)
			$inline_styles [] = 'color:' . $textcolor . ';';

		if ($textsize)
			$inline_styles [] = 'font-size:' . $textsize . ';';		
		
		$iconspan = $iconspan_left = $iconspan_right = "";
		if( !empty( $icon_type ) && $style != 'filled-outline' ) {

			$icon = "";

			if( $icon_type == 'fontawesome' ) {
				vc_icon_element_fonts_enqueue( 'fontawesome' );
				$icon = $iconclass;
			}

			if( $icon_type == 'css_class' )
				$icon = $icon_css_class;

			if( !empty( $icon ) )
				$iconspan =  "<span class='{$icon}'> </span>";
				
			if($iconalign == 'icon-left with-icon') {
				$iconspan_left = $iconspan;
			} else {
				$iconspan_right = $iconspan;
			}	
		} 
		
		//parse link by vc
		$a_href = $a_title = $a_target = '';
		if(function_exists('vc_build_link')) {
			$link = ( '||' === $link ) ? '' : $link;
			$link = vc_build_link( $link );
			$a_href = $link['url'];
			$a_title = $link['title'];
			$a_target = !empty($link['target']) ? $link['target'] : '_self';
			$css = vc_shortcode_custom_css_class($css); # VC
		}

		if(preg_match('#^{{#', $a_href) === 1) {
			$a_href =  str_replace ( '{{', '[', $a_href );
			$a_href =  str_replace ( '}}', '/]', $a_href );
			$a_href = do_shortcode($a_href);
		} else {
			$a_href = esc_url ( $a_href );
		}

		if(empty($a_href)){
			$a_href = '#';
		}

		if( empty( $use_theme_fonts ) && ( !empty( $google_fonts ) ) ) {

			$settings = get_option( 'wpb_js_google_fonts_subsets' );
			if ( is_array( $settings ) && ! empty( $settings ) ) {
				$subsets = '&subset=' . implode( ',', $settings );
			} else {
				$subsets = '';
			}

			$result = '';
			$params_pairs = explode( '|', $google_fonts );
			if ( ! empty( $params_pairs ) ) {
				foreach ( $params_pairs as $pair ) {
					$param = preg_split( '/\:/', $pair );
					if ( ! empty( $param[0] ) && isset( $param[1] ) ) {
						$result[ $param[0] ] = rawurldecode( $param[1] );
					}
				}
			}

			if( isset( $result['font_family'] ) ) {
				wp_enqueue_style( 'dt_google_fonts_' . vc_build_safe_css_class( $result['font_family'] ), '//fonts.googleapis.com/css?family=' . $result['font_family'] . $subsets );
			}

			$font_family = explode( ':',$result['font_family'] );
			$fonts_styles = explode( ':',$result['font_style'] );

			$inline_styles[] = 'font-family:'.$font_family[0].';';
			$inline_styles[] = 'font-weight:'.$fonts_styles[1].';';
			$inline_styles[] = 'font-style:'.$fonts_styles[2].';';
		}

		$inline_style = join ( '', array_unique ( $inline_styles ) );
		$inline_style = ! empty ( $inline_style ) ? ' style="' . $inline_style . '"' : '';

		$animation = $this->getCSSAnimation( $css_animation );

		if($style == 'filled filled-outline') {
			$content = '<span>'.$content.'</span>';
		}

		$out = "<a href='{$a_href}' target='{$a_target}' title='{$a_title}' class='dt-sc-button {$css} {$size} {$iconalign} {$color} {$style} {$animation} {$class}' data-delay='{$delay}' {$inline_style}>{$iconspan_left} {$content} {$iconspan_right}</a>";

		return $out;
	}

	/**
	 * titled box
	 * @return string
	 */
	function dt_sc_titled_box($attrs, $content = null) {
		
		extract ( shortcode_atts ( array (
			'type'	=> 'titled-box',
			'title' => 'Lorem ipsum dolor sit amet',
			'icon_type' => 'fontawesome', #VC
			'icon' => '', #VC
			'icon_css_class' => '', #VC
			'textcolor' => '',
			'bgcolor' => '',
			'variation' => '',

			'css_animation'  => '',
			'delay'          => '0',

			'class' => ''
		), $attrs ) );
		
		
		$type = "dt-sc-$type";
		$variation = ( ( $variation ) && ( empty( $bgcolor ) ) ) ? ' ' . $variation : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper( $content );
		$content = strip_tags($content);
		
		if( $icon_type == "fontawesome" ) {
			vc_icon_element_fonts_enqueue( 'fontawesome' );
			$icon = $icon;
		} else {
			$icon = $icon_css_class;
		}
		
		$styles = array();
		if($bgcolor) $styles[] = 'background-color:' . $bgcolor . ';border-color:' . $bgcolor . ';';
		if($textcolor) $styles[] = 'color:' . $textcolor . ';';
		$style = join('', array_unique( $styles ) );
		$style = !empty( $style ) ? ' style="' . $style . '"': '' ;

		$animation = $this->getCSSAnimation( $css_animation );

		
		
		if($type == 'dt-sc-titled-box') :
			$icon = ( empty($icon) ) ? "" : "<span class='{$icon}'></span>";
			$title = "<h6 class='{$type}-title' {$style}> {$icon} {$title}</h6>";

			$out = "<div class='{$type} {$variation} {$animation} {$class}' data-delay='{$delay}'>";
				$out .= $title;
				$out .=	"<div class='{$type}-content'>{$content}</div>";
			$out .= "</div>";
		else :
			$out = "<div class='{$type} {$animation} {$class}' data-delay='{$delay}'>{$content}</div>";
		endif;

		return $out;
	}

	/**
	 * donutchart
	 * @return string
	 */
	function dt_sc_donutchart($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
			'title'       => '',
			'desc'        => '',
			'size'        => 'medium',
			'datasize'    => '',
			'donutwidth'  => '5',
			'datapercent' => '',
			'bgcolor'     => '#79deff',
			'fgcolor'     => '#666666',
			'class'       => '',
			'css_animation'  => '',
			'delay'          => '0',
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );

		$size = 'dt-sc-donutchart-'.$size;

		$out = "<div class='{$size} {$animation} {$class}' data-delay='{$delay}'>";
			$out .= "<div class='dt-sc-donutchart' data-donutwidth='{$donutwidth}' data-size='{$datasize}' data-percent='{$datapercent}' data-bgcolor='{$bgcolor}' data-fgcolor='{$fgcolor}'></div>";

			if($title != '')
				$out .= "<h5 class='dt-sc-donutchart-title'>{$title}</h5>";

			if($desc != '')
				$out .= "<p class='dt-sc-donutchart-desc'>{$desc}</p>";			

		$out .= '</div>';

		return $out;
	}

	/**
	 * progress bar
	 * @return string
	 */
	function dt_sc_progress_bar($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'type'                   => 'progress-striped',
			'value'                  => '55',
			'color'                  => '',
			'text'                   => '', #VC
			'label_icon_type'        => '',
			'label_icon_fontawesome' => 'fas fa-adjust',
			'label_icon_openiconic'  => 'vc-oi vc-oi-dial',
			'label_icon_typicons'    => 'typcn typcn-adjust-brightness',
			'label_icon_entypo'      => 'entypo-icon entypo-icon-note',
			'label_icon_linecons'    => 'vc_li vc_li-heart',
			'label_icon_monosocial'  => 'vc-mono vc-mono-fivehundredpx',
			'label_icon_css_class'   => '',
			'style'                  => '',

			'css_animation'  => '',
			'delay'          => '0',			
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );


		if( $type === 'standard' ){
			$type = "dt-sc-standard";
		}elseif( $type === 'progress-striped' ){
			$type = "dt-sc-progress-striped";
		}elseif( $type === 'progress-striped-active' ){
			$type = "dt-sc-progress-striped active";
		}

		$color = ! empty ( $color ) ? "style='background-color:$color;'" : "";

		if( $style == 'style1' ) {
			$out = '<div class="dt-sc-progress style1 '.$type.' '.$animation.'" data-delay="'.$delay.'">';
				$out .= '<div class="dt-sc-bar" '.$color.' data-value="'.$value.'">';
					$out .= '<div class="dt-sc-bar-text">'.$text.' <span> '.$value.'% </span></div>';
				$out .= '</div>';
			$out .= '</div>';
		}elseif( $style == 'style2' ) {
			$out = '<div class="dt-sc-progress-wrapper '.$animation.'" data-delay="'.$delay.'">';
				$out .= '<div class="dt-sc-bar-title">'.$text.'</div>';
				$out .= '<div class="dt-sc-progress style2 '.$type.'">';
					$out .= '<div class="dt-sc-bar" '.$color.' data-value="'.$value.'">';
						$out .= '<div class="dt-sc-bar-text"><span> '.$value.'% </span></div>';
					$out .= '</div>';
				$out .= '</div>';
			$out .= '</div>';			
		} elseif( $style == 'style3' ) {
			$out = '<div class="dt-sc-progress style3 '.$type.' '.$animation.'" data-delay="'.$delay.'">';
				$out .= '<div class="dt-sc-bar" '.$color.' data-value="'.$value.'">';
					$out .= '<div class="dt-sc-bar-text">'.$text.' <span '.$color.'> '.$value.'% </span></div>';
					$out .= '<span class="dt-sc-progressbar-pointer" '.$color.'></span>';
				$out .= '</div>';
			$out .= '</div>';			
		} elseif( $style == 'style4' ) {
			$out = '<div class="dt-sc-progress style4 '.$type.' '.$animation.'" data-delay="'.$delay.'">';
				$out .= '<div class="dt-sc-bar" '.$color.' data-value="'.$value.'">';
					$out .= '<span class="dt-sc-pipe" '.$color.'></span>';
					$out .= '<div class="dt-sc-bar-text"> <div class="dt-sc-bar-label">'.$text.' </div> <span> '.$value.'% </span></div>';
				$out .= '</div>';
			$out .= '</div>';
		} elseif( $style == 'style5' ) {

			$iconWrp = '';
			if( $label_icon_type == 'css_class' && !empty( $label_icon_css_class ) ) {
				$iconWrp = '<i class="'.$label_icon_css_class.'"></i>';
			} else{
				vc_icon_element_fonts_enqueue( $label_icon_type );
				$i = 'label_icon_'.$label_icon_type;
				$i = $$i;
				$iconWrp = '<i class="'.$i.'"></i>';
			}

			$out = '<div class="dt-sc-progress style5 '.$type.' '.$animation.'" data-delay="'.$delay.'">';
				$out .= '<div class="dt-sc-bar" '.$color.' data-value="'.$value.'">';
					$out .= '<div class="dt-sc-bar-text">'. $iconWrp . '<div class="dt-sc-bar-label">'.$text.' </div> <span> '.$value.'% </span></div>';
				$out .= '</div>';
			$out .= '</div>';
			
		}		

		return $out;
	}

	/**
	 * pricing table item
	 * @return string
	 */
	function dt_sc_pricing_table_item($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'heading'   => '',
			'subtitle'  => '',
			'thumb'     => '',
			'currency'  => '',
			'price'     => '',
			'decimal'   => '',
			'permonth'  => '',
			'highlight' => '',
			'type'      => 'standard',

			'css_animation'  => '',
			'delay'          => '0',

			'link'      => '',			
		), $attrs ) );

		$selected = ( strtolower($highlight) == "yes" ) ? 'selected' : '';
		$animation = $this->getCSSAnimation( $css_animation );

		$out = "<div class='dt-sc-pr-tb-col type1 $type $animation $selected' data-delay='$delay'>";
			$out .= '<div class="dt-sc-tb-header">';
				$out .= '<div class="dt-sc-tb-title">';
					$out .= "<h5>{$heading}</h5>";
					if($subtitle)
						$out .= "<p>{$subtitle}</p>";						
				$out .= '</div>';

				$out .= '<div class="dt-sc-price">';
					$out .= "<h6> <sup>{$currency}</sup>{$price}";
					if($decimal)
						$out .= "<sup>{$decimal}</sup>";
					if($permonth)
						$out .= "<span> {$permonth} </span>";
					$out .="</h6>";
				$out .= '</div>';

			$out .= '</div>';

			if($thumb && $type == 'standard' ):
				$image = wpb_getImageBySize( array( 'attach_id' => $thumb, 'thumb_size' => 'full' ));
				$out .= '<div class="dt-sc-tb-thumb">';
				$out .= $image['thumbnail'];
				$out .= '</div>';
			endif;

			$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
			$content = str_replace ( '<ul>', '<ul class="dt-sc-tb-content">', $content );
			$content = str_replace ( '<ol>', '<ul class="dt-sc-tb-content">', $content );
			$content = str_replace ( '</ol>', '</ul>', $content );

			$out .= $content;
			
			$link = ( '||' === $link ) ? '' : $link;
			//parse link by vc					
			$link = vc_build_link( $link );
			$a_href = $link['url'];
			$a_title = $link['title'];
			$a_target = !empty($link['target']) ? $link['target'] : '_self';
			
			if( !empty($a_href) ) :			
				$out .= '<div class="dt-sc-buy-now">';					
					$out .= "<a class='dt-sc-button' target='{$a_target}' href='".esc_url($a_href)."'>{$a_title}</a>";					
				$out .= '</div>';
			endif;
				
		$out .= '</div>';

		return $out;
	}

	/**
	 * pricing table minimal item
	 * @return string
	 */
	function dt_sc_pricing_table_minimal_item($attrs, $content = null) {
		
		extract ( shortcode_atts ( array (
			'heading' => '',
			'subtitle' => '',
			'icon_type' => 'fontawesome', #VC
			'icon' => 'fas fa-info-circle', #VC
			'icon_css_class' => '', #VC
			'starting' => '',
			'price' => '',
			'permonth' => '', #VC
			'highlight' => '',
			'link' => '',

			'css_animation'  => '',
			'delay'          => '0',			
		), $attrs ) );

		$selected = ( strtolower($highlight) == "yes" ) ? 'selected' : '';

		$animation = $this->getCSSAnimation( $css_animation );

		if( $icon_type == 'fontawesome' ) {
			vc_icon_element_fonts_enqueue( "fontawesome" );
			$icon = $icon;
		} else {
			$icon = $icon_css_class;
		}
		
		$out = "<div class='dt-sc-pr-tb-col minimal $animation $selected' data-delay='$delay'>";
		
			$out .= '<div class="dt-sc-tb-header">';
				$out .= '<div class="icon-wrapper">';
					$out .= "<span class='{$icon}'> </span>";
				$out .= '</div>';

				$out .= '<div class="dt-sc-tb-title">';
					$out .= "<h5>{$heading}</h5>";
					if($subtitle)
						$out .= "<p>{$subtitle}</p>";
				$out .= '</div>';
				$out .= '<div class="dt-sc-price">';
					$out .= "<p>{$starting}</p>";
					$out .= "<h6> {$price} <span> {$permonth} </span> </h6>";
				$out .= '</div>';
			$out .= '</div>';
			
			$link = ( '||' === $link ) ? '' : $link;
			//parse link by vc					
			$link = vc_build_link( $link );
			$a_href = $link['url'];
			$a_title = $link['title'];
			$a_target = !empty($link['target']) ? $link['target'] : '_self';
			
			if( !empty($a_href) ) :	
				$out .= '<div class="dt-sc-buy-now">';
				$out .= "<a class='dt-sc-button' target='{$a_target}' href='".esc_url($a_href)."'>{$a_title}</a>";
				$out .= '</div>';
			endif;
			
		$out .= '</div>';

		return $out;
	}

	/**
	 * pricing table type2 item
	 * @return string
	 */
	function dt_sc_pricing_table_type2_item($attrs, $content = null) {
		
		extract ( shortcode_atts ( array (
			'number' => '',
			'month' => '',
			'plan' => '',
			'currency' => '',
			'price' => '',
			'highlight' => '', #VC

			'css_animation'  => '',
			'delay'          => '0',

			'link' =>'' #VC
		), $attrs ) );

		$selected = ( strtolower($highlight) == "yes" ) ? 'selected' : '';
		$animation = $this->getCSSAnimation( $css_animation );

		$out = "<div class='dt-sc-pr-tb-col type2 $animation  $selected' data-delay='$delay'>";
			$out .= '<div class="dt-sc-tb-header">';
				$out .= '<div class="dt-sc-tb-title">';
					$out .= "<h5> <span>{$number}</span>{$month}<br>{$plan}</h5>";
				$out .= '</div>';
				$out .= '<div class="dt-sc-price">';
					$out .= "<h6> <sup>{$currency}</sup>{$price}</h6>";
				$out .= '</div>';
			$out .= '</div>';

			$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
			$content = str_replace ( '<ul>', '<ul class="dt-sc-tb-content">', $content );
			$content = str_replace ( '<ol>', '<ul class="dt-sc-tb-content">', $content );
			$content = str_replace ( '</ol>', '</ul>', $content );

			$out .= $content;

			$link = ( '||' === $link ) ? '' : $link;
			//parse link by vc					
			$link = vc_build_link( $link );
			$a_href = $link['url'];
			$a_title = $link['title'];
			$a_target = !empty($link['target']) ? $link['target'] : '_self';
			
			if( !empty($a_href) ):
				$out .= '<div class="dt-sc-buy-now">';
					$out .= "<a class='dt-sc-button' target='{$a_target}' href='".esc_url($a_href)."'>{$a_title}</a>";
				$out .= '</div>';			
			endif;
		$out .= '</div>';

		return $out;
	}

	/**
	 * pricing table type 3 item
	 * @return string
	 */
	function dt_sc_pricing_table_item_3( $attrs, $content = null ){
		extract ( shortcode_atts ( array (
			'title'                  => '',
			'title_icon_type'        => '',
				'title_icon_fontawesome' => '',
				'title_icon_openiconic'  => '',
				'title_icon_typicons'    => '',
				'title_icon_entypo'      => '',
				'title_icon_linecons'    => '',
				'title_icon_monosocial'  => '',
				'title_icon_material'    => '',
				'title_icon_css_class'   => '',
			'price'                  => '',
			'values'                 => '',
				'label'                  => '',
				'label_icon'             => '',
				'label_icon_type'        => '',
					'label_icon_fontawesome' => '',
					'label_icon_openiconic'  => '',
					'label_icon_typicons'    => '',
					'label_icon_entypo'      => '',
					'label_icon_linecons'    => '',
			'highlight'              => '',
			'link'                   => '',
			'link_icon'              => '',
			'link_icon_type'         => '',
				'link_icon_fontawesome'  => '',
				'link_icon_openiconic'   => '',
				'link_icon_typicons'     => '',
				'link_icon_entypo'       => '',
				'link_icon_linecons'     => '',
				'link_icon_monosocial'   => '',
				'link_icon_material'     => '',

			'css_animation'  => '',
			'delay'          => '0',							
		), $attrs ) );

		$selected = ( strtolower($highlight) == "yes" ) ? 'selected' : '';
		$animation = $this->getCSSAnimation( $css_animation );

		$out  = "<div class='dt-sc-pr-tb-col type3 $animation $selected' data-delay='$delay'>";
			$out .= '<div class="dt-sc-pr-tb-col-wrapper">';
				$out .= '<div class="dt-sc-tb-header">';
					$out .= '<div class="dt-sc-tb-title">';
						$out .= '<div class="dt-sc-pricing-title">';
							$out .= !empty( $title ) ? '<h3>'.$title.'</h3>' : '';
							$out .= !empty( $price ) ? '<span>'.$price.'</span>' : '';
						$out .= '</div>';

						$out .= '<div class="dt-sc-pricing-icon">';
							if( $title_icon_type !== 'css_class' ) {

								vc_icon_element_fonts_enqueue( $title_icon_type );
								$i = 'title_icon_'.$title_icon_type;
								$i = $$i;
								$out .= '<i class="'.$i.'"></i>';
							} elseif( !empty( $title_icon_css_class ) ) {
								$out .= '<i class="'.$title_icon_css_class.'"></i>';								
							}
						$out .= '</div>';
					$out .= '</div>';
				$out .= '</div>';

				$values = (array) vc_param_group_parse_atts( $values );
				if( !empty( $values ) ) {
					$out .= '<ul class="dt-sc-tb-content">';
					foreach ( $values as $data ) {

						$icon = '';
						if( $data['label_icon'] == "yes" ) {

							vc_icon_element_fonts_enqueue( $data['label_icon_type'] );
							$i    = $data[ 'label_icon_'.$data['label_icon_type'] ];
							$icon = '<i class="'.$i.'"></i>';
						}

						$out .= '<li>' . $icon . $data['label'] . '</li>';
					}
					$out .= '</ul>';
				}

				$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
				if( !empty( $content ) ) {
					$out .= '<div class="dt-sc-pricing-desc">' . $content .'</div>';
				}

				$url = vc_build_link( $link );
				if ( strlen( $link ) > 0 && strlen( $url['url'] ) > 0 ) {
					$out .= '<div class="dt-sc-pricing-buy-now">';
						$out .= '<a href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">';
							if( $link_icon == "yes" ) {
								vc_icon_element_fonts_enqueue( $link_icon_type );
								$i   = 'link_icon_'.$link_icon_type;
								$i   = $$i;
								$out .= '<i class="'.$i.'"></i>';
							}
							$out .= '<span>'. esc_html( $url['title'] ) . '</span>';
						$out .= '</a>';
					$out .= '</div>';
				}
			$out .= '</div>';
		$out .= '</div>';

		return $out;
	}

	/**
	 * pricing table type 4
	 * @return string
	 */
	function dt_sc_pricing_box_4( $attrs, $content = null ) {
		extract ( shortcode_atts ( array (
			'css_animation'  => '',
			'delay'          => '0',
			'class' => '',
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );

		preg_match_all("'\[dt_sc_pricing_box_4_item (.*?)\[/dt_sc_pricing_box_4_item\]'si", $content, $matches);

		$out = "<ul class='dt-sc-pricing-table type4 ".$class.' '.$animation."' data-delay='".$delay."'>";
		foreach( $matches[0] as $sc ) {
			$out .= '<li class="dt-sc-pr-tb-col">';
			$out .= do_shortcode( $sc );
			$out .= '</li>';
		}
		$out .= "</ul>";

		return $out;
	}

	/**
	 * pricing table type 4 - Item
	 * @return string
	 */
	function dt_sc_pricing_box_4_item( $attrs, $content = null ) {
		extract ( shortcode_atts ( array (
			"title"                   => '',
			"price"                   => '',
			'highlight'               => '',
			'values'                  => '',
				'label'                   => '',
				'is_active'               => '',
			'link'                    => '',
				'link_icon'               => '',
				'link_icon_type'          => '',
				'link_icon_fontawesome'   => '',
				'link_icon_openiconic'    => '',
				'link_icon_typicons'      => '',
				'link_icon_entypo'        => '',
				'link_icon_linecons'      => '',
				'link_icon_monosocial'    => '',
				'link_icon_material'      => '',
			'link_2'                  => '',
				'link_2_icon'             => '',
				'link_2_icon_type'        => '',
				'link_2_icon_fontawesome' => '',
				'link_2_icon_openiconic'  => '',
				'link_2_icon_typicons'    => '',
				'link_2_icon_entypo'      => '',
				'link_2_icon_linecons'    => '',
				'link_2_icon_monosocial'  => '',
				'link_2_icon_material'    => '',

		), $attrs ) );

		$content  = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );		
		$selected = ( strtolower($highlight) == "yes" ) ? 'selected' : '';		

		$out = "<ul class='dt-sc-pricing-table-type4-item ".$selected."'>";

			$out .= "<li class='dt-sc-one-fourth column first no-space'>";
				$out .= '<div class="dt-sc-tb-title">';
					$out .= !empty( $title ) ? '<h4>'.$title.'</h4>' : '';
					$out .= !empty( $price ) ? '<span>'.$price.'</span>' : '';
					$out .= !empty( $content ) ? '<div class="dt-sc-pricing-desc">' . $content .'</div>' : '';
				$out .= '</div>';
			$out .= "</li>";

			$out .= "<li class='dt-sc-one-half column no-space'>";
				$values = (array) vc_param_group_parse_atts( $values );
				if( !empty( $values ) ) {
					vc_icon_element_fonts_enqueue('fontawesome');
					$out .= "<ul class='dt-sc-tb-content'>";
					foreach ( $values as $data ) {
						$i   = ( $data['is_active'] == "yes" ) ? "fas fa-check" : "fas fa-times";
						$out .= "<li>";
							$out .= '<i class="'.$i.'"></i>';
							$out .= $data['label'];
						$out .= "</li>";
					}
					$out .= "</ul>";
				}
			$out .= "</li>";

			$out .= "<li class='dt-sc-one-fourth column no-space'>";
				$url = vc_build_link( $link );
				if ( strlen( $link ) > 0 && strlen( $url['url'] ) > 0 ) {
					$out .= '<div class="dt-sc-pricing-buy-now link-1">';
						$out .= '<a href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">';
							if( $link_icon == "yes" ) {
								vc_icon_element_fonts_enqueue( $link_icon_type );
								$i   = 'link_icon_'.$link_icon_type;
								$i   = $$i;
								$out .= '<i class="'.$i.'"></i>';
							}
							$out .= '<span>'. esc_html( $url['title'] ) . '</span>';
						$out .= '</a>';
					$out .= '</div>';
				}

				$url = vc_build_link( $link_2 );
				if ( strlen( $link ) > 0 && strlen( $url['url'] ) > 0 ) {
					$out .= '<div class="dt-sc-pricing-buy-now link-2">';
						$out .= '<a href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">';
							if( $link_2_icon == "yes" ) {
								vc_icon_element_fonts_enqueue( $link_2_icon_type );
								$i   = 'link_2_icon_'.$link_2_icon_type;
								$i   = $$i;
								$out .= '<i class="'.$i.'"></i>';
							}
							$out .= '<span>'. esc_html( $url['title'] ) . '</span>';
						$out .= '</a>';
					$out .= '</div>';
				}
			$out .= "</li>";

		$out .= "</ul>";

		return $out;
	}

	/**
	 * pricing table type 5
	 * @return string
	 */
	function dt_sc_pricing_table_5( $attrs, $content = null ) {
		extract ( shortcode_atts ( array (
			'title'                  => '',
			'price'                  => '',
			'per'                    => '',
			'highlight'              => '',
			'link'                   => '',
			'values'                 => '',
				'label'                  => '',
				'label_icon'             => '',
				'label_icon_type'        => '',
				'label_icon_fontawesome' => '',
				'label_icon_openiconic'  => '',
				'label_icon_typicons'    => '',
				'label_icon_entypo'      => '',
				'label_icon_linecons'    => '',
				'label_icon_monosocial'  => '',

			'css_animation'  => '',
			'delay'          => '0',
		), $attrs ) );

		$selected = ( strtolower($highlight) == "yes" ) ? 'selected' : '';
		$animation = $this->getCSSAnimation( $css_animation );

		$out  = "<div class='dt-sc-pr-tb-col type5 $animation $selected' data-delay='$delay'>";

			$out .= '<div class="dt-sc-tb-header">';
				$out .= '<div class="dt-sc-tb-price">';
					$out .= !empty( $price ) ? '<h2> <span data-hover="'.$price.'">'.$price.'</span> </h2>' : '';
					$out .= !empty( $per ) ? '<span class="value">' . $per . '</span>' : '';
				$out .= '</div>';
				$out .= '<div class="dt-sc-tb-title">';
					$out .= !empty( $title ) ? '<h5>'.$title.'</h5>' : '';
				$out .= '</div>';
			$out .= '</div>';

			$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
			if( !empty( $content ) ) {
				$out .= '<div class="dt-sc-pricing-desc">' . $content .'</div>';
			}

			$values = (array) vc_param_group_parse_atts( $values );
			if( !empty( $values ) ) {
				$out .= '<ul class="dt-sc-tb-content">';
					foreach ( $values as $data ) {

						$icon = '';
						if( $data['label_icon'] == "yes" ) {
							vc_icon_element_fonts_enqueue( $data['label_icon_type'] );
							$i    = $data[ 'label_icon_'.$data['label_icon_type'] ];
							$icon = '<i class="'.$i.'"></i>';
						}

						$out .= '<li>' . $icon . $data['label'] . '</li>';
					}
					$out .= '</ul>';
				}			

			$url = vc_build_link( $link );
			if ( strlen( $link ) > 0 && strlen( $url['url'] ) > 0 ) {
				$out .= '<div class="dt-sc-pricing-buy-now">';
					$out .= '<a href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">';
						$out .= esc_html( $url['title'] );
					$out .= '</a>';
				$out .= '</div>';
			}
		$out .= '</div>';

		return $out;
	}

	/**
	 * pricing table type 6
	 * @return string
	 */
	function dt_sc_pricing_table_6( $attrs, $content = null ) {
		extract ( shortcode_atts ( array (
			'heading'               => '',
			'highlight'             => '',
			'add_icon'              => '',
			'type'                  => '',
				'icon_fontawesome'      => '',
				'icon_openiconic'       => '',
				'icon_typicons'         => '',
				'icon_entypo'           => '',
				'icon_linecons'         => '',
				'icon_monosocial'       => '',
				'thumb'                 => '',
			'color'                 => '',
			'currency'              => '',
			'price'                 => '',
			'unit'                  => '',
			'link'                  => '',
			'values'                => '',
				'label'                 => '',
				'is_stricked_out'       => '',
				'add_item_icon'         => '',
					'item_icon_type'        => '',
					'item_icon_fontawesome' => '',
					'item_icon_openiconic'  => '',
					'item_icon_typicons'    => '',
					'item_icon_entypo'      => '',
					'item_icon_linecons'    => '',
					'item_icon_monosocial'  => '',

			'css_animation'  => '',
			'delay'          => '0',								
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );

		$icon = $icon_wrapper = $out = '';

		if( !empty($add_icon) && ( $type !== 'image' ) ) {

			// Enqueue needed icon font.
			vc_icon_element_fonts_enqueue( $type );

			$icon = 'icon_'.$type;
			$icon = $$icon;

			$icon_wrapper .= '<div class="icon-wrapper">';
			$icon_wrapper .= "<span class='{$icon}'> </span>";
			$icon_wrapper .= '</div>';
		} elseif( $type == 'image' ){

			$image = wpb_getImageBySize(array(
				'attach_id' => $thumb,
				'thumb_size' => 'full',
				'class' => 'dt-sc-pr-tb-image'
			));

			if( $image ){
				$icon_wrapper .= '<div class="image-wrapper">';
				$icon_wrapper .= $image['thumbnail'];
				$icon_wrapper .= '</div>';
			}
		}

		$color = !empty( $color ) ? '<span class="dt-sc-pr-tb-color" style="background-color:'.$color.'"></span>': '';

		$class = !empty( $icon_wrapper ) ? ' tb-has-icon ': '';
		$class .= ( strtolower($highlight) == "yes" ) ? 'selected' : '';

		$out .= "<div class='outer-frame-border $animation' data-delay='$delay'>";
			$out .= "<div class='dt-sc-pr-tb-col type6 $class'>";

				$out .= '<div class="dt-sc-tb-header">';
					$out .= $color;
					$out .= '<div class="dt-sc-tb-title">';
						$out .= "<h5>{$heading}</h5>";
					$out .= '</div>';
					$out .= '<div class="dt-sc-price"> <h6>';
						$out .= !empty( $currency ) ? "<sup>{$currency}</sup>" : "";
						$out .= !empty( $price ) ? "<span>{$price}</span>" : "";
						$out .= !empty( $unit ) ? "<sub>{$unit}</sub>" : "";
					$out .= '</h6></div>';
				$out .= '</div>';

				$out .= $icon_wrapper;
				$values = (array) vc_param_group_parse_atts( $values );
				if( !empty( $values ) ) {
					$out .= '<ul class="dt-sc-tb-content">';
					foreach ( $values as $data ) {
						$icon = '';
						$stricked = isset( $data['is_stricked_out'] ) ? 'class="dt-sc-strike-out"' : '';

						if( isset( $data['add_item_icon'] ) ) {
							vc_icon_element_fonts_enqueue( $data['item_icon_type'] );
							$icon = 'icon_'.$data['item_icon_type'];
							$icon = $data['item_'.$icon];
							$icon = "<span class='{$icon}'> </span>";
						}

						$out .= '<li '.$stricked.'>'.$icon.$data['label'].'</li>';
					}
					$out .= '</ul>';
				}

				$url = vc_build_link( $link );
				if ( strlen( $link ) > 0 && strlen( $url['url'] ) > 0 ) {
					$out .= '<div class="dt-sc-buy-now">';
						$out .= '<a href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">'. esc_html( $url['title'] ) .'</a>';
					$out .= '</div>';
				}
			$out .= '</div>';
		$out .= '</div>';
		return $out;
	}

	/**
	 * pricing table type 7
	 */
	function dt_sc_pricing_table_item_7( $attrs, $content = null ) {
		extract ( shortcode_atts ( array (
			'thumb'     => '',
			'highlight' => '',
			'price'     => '',
			'link'      => '',
			'css_animation'  => '',
			'delay'          => '0',
			'values'    => '',
				'label'     => '',
				'is_enable' => '',
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );

		$selected = ( strtolower($highlight) == "yes" ) ? 'selected' : '';
		$image    = wpb_getImageBySize(array(
			'attach_id'  => $thumb,
			'thumb_size' => 'full',
			'class'      => 'dt-sc-pr-tb-image'
		));		

		$out  = "<div class='dt-sc-pr-tb-col type7 $animation $selected' data-delay='$delay'>";
			$out .= '<div class="dt-sc-tb-header">';
				$out .= !empty( $image ) ? '<div class="image-wrapper">'.$image['thumbnail'].'</div>' : "";
				$out .= !empty( $price ) ? "<h6>{$price}</h6>" : "";
			$out .= '</div>';

			$values = (array) vc_param_group_parse_atts( $values );
			if( !empty( $values ) ) {
				$out .= '<ul class="dt-sc-tb-content">';
				foreach ( $values as $data ) {
					$enabled = isset( $data['is_enable'] ) ? 'class="dt-sc-item-enable"' : '';
					$out .= '<li '.$enabled.'>'.$data['label'].'</li>';
				}
				$out .= '</ul>';
			}

			$url = vc_build_link( $link );
			if ( strlen( $link ) > 0 && strlen( $url['url'] ) > 0 ) {
				$out .= '<div class="dt-sc-buy-now">';
					$out .= '<a href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">'. esc_html( $url['title'] ) .'</a>';
				$out .= '</div>';
			}

		$out .= '</div>';

		return $out;
	}

	/**
	 * iconbox
	 * @return string
	 */
	function dt_sc_iconbox($attrs, $content = null) {
		
		extract ( shortcode_atts ( array (
			'type'           => 'type1', #VC
			'title'          => '',
			'subtitle'       => '',
			'span_text'      => '',
			'icon_type'      => 'icon', #VC
			'icon'           => 'fa fa-telegram', #VC
			'icon_css_class' => '', #VC
			'iconurl'        => '',
			'color'          => '',
			'link'           => '',			
			'class'          => '',
			'addstyles'      => '', # VC
			'css_animation'  => '',
			'delay'          => '0',
		), $attrs ) );
		
		//parse link
		$link = ( '||' === $link ) ? '' : $link;
		$link = vc_build_link( $link );
		$a_href = $link['url'];
		$a_title = $link['title'];
		$a_target = !empty($link['target']) ? $link['target'] : '_self';

		if($icon_type == 'css_class' ) {
			$icon = $icon_css_class;
		}
		
		if( $icon_type == "fontawesome" ) {
			vc_icon_element_fonts_enqueue( "fontawesome" );
		}

		$class = ( $icon_type == 'none' ) ? $class.' no-icon' : $class;

		$style = !empty( $addstyles ) ? " style='".esc_attr( $addstyles )."'" : "";
		
		$class .= ( $type == 'type9' ) ? " dt-sc-icon-box-type9 " : '';
		$class .= !empty($color) ? ' '.$color : '';

		$animation = $this->getCSSAnimation( $css_animation );

		if( $type == 'type16' ):
			if( !empty($iconurl) && ( $icon_type == 'image' ) ):
				$class .= ' with-image';					
			endif;
		endif;

		$out = "<div class='dt-sc-icon-box {$type} {$class} {$animation}' data-delay='{$delay}' {$style}>";
		if( $type == 'type16' ):
			$out .= "<a href='{$a_href}' title='{$a_title}' target='{$a_target}'>";
		endif;

			if( $type == 'type16' ) {
				if( !empty($icon) && ( $icon_type == "fontawesome" || $icon_type == "css_class" ) ):
					$out .= '<div class="icon-wrapper">';
						$out .= "<span class='{$icon}'> </span>";
					$out .= '</div>';
				endif;

				if( !empty($iconurl) && ( $icon_type == 'image' ) ):
					$image = wpb_getImageBySize( array( 'attach_id' => $iconurl, 'thumb_size' => 'full' ));
					$out .= '<div class="icon-wrapper" style="background-image:url('.$image['p_img_large'][0].');">';
					$out .= '</div>';						
				endif;

				$out .= '<div class="icon-content">';
					$out .= '<div class="icon-content-inner">';
						$out .= !empty($title) ? "<h5>{$title}</h5>" : "";
						$out .= !empty($subtitle) ? "<h4>{$subtitle}</h4>" : "";
						$out .= !empty($span_text) ? "<h6>{$span_text}</h6>" : "";
					$out .= '</div>';				
				$out .= '</div>';				
			} else {
				
				if( !empty($icon) && ( $icon_type == "fontawesome" || $icon_type == "css_class" ) ):

					$out .= '<div class="icon-wrapper">';
						$out .= "<span class='{$icon}'> </span>";
						if( $type == "type15" ) {
							if(!empty($title) && !empty($a_href))
								$out .= "<h4><a href='{$a_href}' title='{$a_title}' target='{$a_target}'>{$title}</a></h4>";
							elseif(!empty($title))
								$out .= "<h4>{$title}</h4>";						
						}
					$out .= '</div>';
				endif;
				
				if( !empty($iconurl) && ( $icon_type == 'image' ) ):
				
					$image = wpb_getImageBySize( array( 'attach_id' => $iconurl, 'thumb_size' => 'full' ));

					$out .= '<div class="icon-wrapper">';
						if( $type == 'type3')
							$out .= '<span>';

							$out .= $image['thumbnail'];

						if( $type == 'type3')
							$out .= '</span>';


						if( $type == "type15" ) {
							if(!empty($title) && !empty($a_href))
								$out .= "<h4><a href='{$a_href}' title='{$a_title}' target='{$a_target}'>{$title}</a></h4>";
							elseif(!empty($title))
								$out .= "<h4>{$title}</h4>";						
						}					

					$out .= '</div>';
				endif;

				$out .= '<div class="icon-content">';
					if(!empty($subtitle) && $type !== "type15" )
						$out .= "<h5>{$subtitle}</h5>";

					if( $type !== "type15" ) {

						if(!empty($title) && !empty($a_href))
							$out .= "<h4><a href='{$a_href}' title='{$a_title}' target='{$a_target}'>{$title}</a></h4>";
						elseif(!empty($title))
							$out .= "<h4>{$title}</h4>";
					}

					$out .= '<p>'.DTCoreShortcodesDefination::dtShortcodeHelper ( $content ).'</p>';
				$out .= '</div>';

				if(!empty($icon) && ($type == 'type1'))
					$out .= "<span class='{$icon} large-icon'> </span>";				
			}

			if( $type == 'type16' ):
				$out .= "</a>";
			endif;

		$out .= '</div>';

		return $out;
	}

	/**
	 * dropcap
	 * @return string
	 */
	function dt_sc_dropcap($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
			'type' => 'default', #VC
			'variation' => '',
			'bgcolor' => '',
			'textcolor' => ''
		), $attrs ) );

		$type = 'dt-sc-dropcap-'. $type;

		$bgcolor = ( $type == 'dt-sc-dropcap-default') ? "" : $bgcolor;
		$variation = ( ( $variation ) && ( empty( $bgcolor ) ) ) ? ' ' . $variation : '';

		$styles = array();
		if($bgcolor) $styles[] = 'background-color:' . $bgcolor . ';';
		if($textcolor) $styles[] = 'color:' . $textcolor . ';border-color:' . $textcolor . ';';;
		$style = join('', array_unique( $styles ) );
		$style = !empty( $style ) ? ' style="' . $style . '"': '' ;

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$out = "<span class='dt-sc-dropcap $type {$variation}' {$style}>{$content}</span>";
		return $out;
	}

	/**
	 * blockquote
	 * @return string
	 */
	function dt_sc_blockquote($attrs, $content = null) {
		
		extract ( shortcode_atts ( array (
			'type' => 'type1',
			'align' => '',
			'cite'=> '',
			'role' =>'',
			'css_animation'  => '',
			'delay'          => '0',
			'class'          => '',			
		), $attrs ) );

		$custom_class = array();
		if( $align )
			$custom_class[] = ' ' . $align;
		
		if( $class )
			$custom_class[] = ' ' . $class;

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = strip_tags($content);
		$content = ! empty ( $content ) ? "<q>{$content}</q>" : '';

		$cite = ! empty ( $cite ) ? '&ndash; ' .$cite : '';
		if($type == 'type4' && $cite != '') {
			$cite .= ' &ndash;';
		}
		$role = ! empty ( $role ) ? ' <span>' . $role . '</span>' : '';

		$cite = !empty( $cite ) ? "<cite>$cite$role</cite>" : '';

		$custom_class = join( '', array_unique( $custom_class ) );

		$animation = $this->getCSSAnimation( $css_animation );

		$out = "<blockquote class='{$type} {$custom_class} {$animation}' data-delay='{$delay}'>{$content}{$cite}</blockquote>";
		return $out;
	}

	/**
	 * colored button
	 * @return string
	 */
	function dt_sc_colored_button($attrs, $content = null) {
		
		extract ( shortcode_atts ( array (
			'title' => '',
			'subtitle' => '',
			'color' => '',
			'link' => '', #VC
			'icon_type' => 'fontawesome', #VC
			'icon' => 'fa fa-telegram', #VC
			'icon_css_class' => '', #VC

			'css_animation'  => '',
			'delay'          => '0',

			'class' =>''
		), $attrs ) );

		//parse link by vc
		$link = ( '||' === $link ) ? '' : $link;
		$link = vc_build_link( $link );
		$a_href = $link['url'];
		$a_title = $link['title'];
		$a_target = !empty($link['target']) ? $link['target'] : '_self';

		if(preg_match('#^{{#', $a_href) === 1) {
			$a_href =  str_replace ( '{{', '[', $a_href );
			$a_href =  str_replace ( '}}', '/]', $a_href );
			$a_href = do_shortcode($a_href);
		}else {
			$a_href = esc_url ( $a_href );
		}

		$icon_class = $icon_css_class;
		if(  $icon_type == 'fontawesome' ) {
			vc_icon_element_fonts_enqueue( 'fontawesome' );
			$icon_class = $icon;
		}

		$iconspan = !empty($icon_class) ? "<span class='{$icon_class}'> </span>" : '';

		$animation = $this->getCSSAnimation( $css_animation );

		$out = "<a class='dt-sc-colored-big-buttons with-left-icon {$color} {$class} {$animation}' data-delay='{$delay}' target='{$a_target}' title='{$a_title}' href='{$a_href}'> {$iconspan} {$title} <br> <strong>{$subtitle}</strong> </a>";

		return $out;
	}

	/**
	 * fancy order list
	 * @return string
	 */
	function dt_sc_fancy_ol($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'style' => 'decimal',
			'variation' => '',
			'class' => '',

			'css_animation'  => '',
			'delay'          => '0',			
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );

		$style = ($style) ? trim ( $style ) : 'decimal';
		$class = ($class) ? trim ( $class ) : '';
		$variation = ($variation) ? ' ' . trim ( $variation ) : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace ( '<ol>', "<ol class='dt-sc-fancy-list {$variation} {$class} {$animation} {$style}' data-delay='{$delay}'>", $content );
		$content = str_replace ( '<li>', '<li><span>', $content );
		$content = str_replace ( '</li>', '</span></li>', $content );

		return $content;
	}

	/**
	 * fancy unorder list
	 * @return string
	 */
	function dt_sc_fancy_ul($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'style' => 'arrow',
			'variation' => '',

			'css_animation'  => '',
			'delay'          => '0',			

			'class' => ''
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );		

		$style = ($style) ? trim ( $style ) : '';
		$class = ($class) ? trim ( $class ) : '';
		$variation = ($variation) ? ' ' . trim ( $variation ) : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace ( '<ul>', "<ul class='dt-sc-fancy-list {$variation} {$animation} {$class} {$style}' data-delay='{$delay}'>", $content );

		return $content;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tooltip($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'type'	=> '',
			'position' => 'top',
			'bgcolor' => '#000000',
			'textcolor' => '#ffffff',
			'link' => '',
			'css_animation'  => '',
			'delay'          => '0',
		), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper( $content );

		//parse link by vc
		$link = ( '||' === $link ) ? '' : $link;
		$link = vc_build_link( $link );
		$a_href = $link['url'];
		$a_title = $link['title'];
		$a_target = !empty($link['target']) ? $link['target'] : '_self';

		$class = ( $type == "boxed" ) ? "dt-sc-boxed-tooltip" : "";
		$class .= " dt-sc-tooltip-".$position;		

		$styles = array();
		if($bgcolor) $styles[] = 'background-color:' . $bgcolor . ';border-color:' . $bgcolor . ';';
		if($textcolor) $styles[] = 'color:' . $textcolor . ';';
		
		$style = join('', array_unique( $styles ) );
		$style = !empty( $style ) ? ' style="' . $style . '"': '' ;
		$style = ( $type == "boxed" ) ? $style : "";

		$animation = $this->getCSSAnimation( $css_animation );

		$out = "<a href='{$a_href}' title='{$a_title}' target='{$a_target}' class='{$animation} {$class}' data-delay='{$delay}' {$style}>{$content}</a>";
		return $out;
	}

	function dt_sc_simple_heading( $attrs, $content = null ){
		extract ( shortcode_atts ( array (
			'type'           => 'top-separator',
			'tag'            => 'h2',
			'text'           => 'Lorem ipsum dolor',
			'subtag'         => 'h3',
			'subtext'        => 'Lorem ipsum dolor',
			'extra_text'     => 'Lorem ipsum dolor', # Used only if type = stripe
			'extra_text_tag' => 'h5', # Used only if type = stripe
			'icon'           => 'icon icon-compactcamera', # Used only type = with-icon-link			
			'css_animation'  => '',
			'delay'          => '0',
			'class'          => ''
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );

		$out = "";
		if( $type == 'simple' ) {
			$class .= ' '.$animation;
			$class = !empty( $class ) ? ' class="'.$class.'"' : '';
			$out .= "<{$tag}{$class} data-delay='{$delay}'>{$text}</{$tag}>";
		} elseif( $type == 'top-separator') {
			$out  = "<div class='dt-sc-title with-separator-top {$animation} {$class}' data-delay='{$delay}'>";
			$out .= "<{$tag} class='dt-sc-main-heading'>{$text}</{$tag}>";
			$out .= "</div>";
		} elseif( $type == 'two-color') {
			$out  = "<div class='dt-sc-title with-dual-color {$animation} {$class}' data-delay='{$delay}'>";
			$out .= "<{$tag} class='dt-sc-main-heading'>{$text}</{$tag}>";
			$out .= "</div>";
		} elseif( $type == "split" ) {			
			$out  = "<div class='dt-sc-title mz-title {$animation} {$class}' data-delay='{$delay}'>";
			$out .= "<div class='mz-title-content'><{$tag} class='dt-sc-main-heading'><span>{$text}</span></{$tag}></div>";
			$out .= "</div>";
		} elseif( $type == "mz-stripe" ) {			
			$out  = "<div class='dt-sc-title mz-stripe-title {$animation} {$class}' data-delay='{$delay}'>";
			$out .= "<div class='mz-stripe-title-content'><{$tag} class='dt-sc-main-heading'>{$text}</{$tag}></div>";
			$out .= "</div>";						
		} elseif( $type == 'ribbon') {
			$out  = "<div class='dt-sc-title dt-sc-ribbon-title {$animation} {$class}' data-delay='{$delay}'>";
			$out .= "<{$tag} class='dt-sc-main-heading'><span>{$text}</span></{$tag}>";
			$out .= "</div>";
		} elseif( $type == 'bottom-separator' ){
			$out = "<div class='dt-sc-title with-separator-bottom {$animation} {$class}' data-delay='{$delay}'>";
			$out .= "<{$tag} class='dt-sc-main-heading'>{$text}</{$tag}>";
			$out .= "<{$subtag} class='dt-sc-sub-heading'>{$subtext}</{$subtag}>";
			$out .= "</div>";			
		} elseif( $type == 'script' ) {
			$out = "<div class='dt-sc-title script-with-sub-title {$animation} {$class}' data-delay='{$delay}'>";
			$out .= "<{$tag} class='dt-sc-main-heading'>{$text}</{$tag}>";
			$out .= "<{$subtag} class='dt-sc-sub-heading'>{$subtext}</{$subtag}>";
			$out .= "</div>";
		} elseif( $type == 'stripe') {
			$out = "<div class='dt-sc-title with-two-color-stripe {$animation} {$class}' data-delay='{$delay}'>";
			$out .= "<{$subtag} class='dt-sc-sub-heading'>{$subtext}</{$subtag}>";
			$out .= "<{$tag} class='dt-sc-main-heading'>{$text}</{$tag}>";
			$out .= "<{$extra_text_tag}>{$extra_text}</{$extra_text_tag}>";
			$out .= "</div>";
		} elseif( $type == 'with-icon-bg' ) {
			//parse link by vc
			$out = "<div class='dt-sc-title {$type} {$animation} {$class}' data-delay='{$delay}'>";
				$out .= '<div class="icon-wrapper">';
					$out .= "<span class='{$icon}'> </span>";
				$out .= "</div>";
				$out .= '<div class="icon-content">';
					$out .= "<{$tag} class='dt-sc-main-heading'>{$text}</{$tag}>";
					$out .= "<{$subtag} class='dt-sc-sub-heading'>{$subtext}</{$subtag}>";
				$out .= "</div>";				
			$out .= "</div>";
		} elseif( $type == 'two-border' ) {
			$out = "<div class='dt-sc-title with-before-after-shape {$animation} {$class}' data-delay='{$delay}'>";
			$out .= "<{$tag} class='dt-sc-main-heading'>{$text}</{$tag}>";
			$out .= "<{$subtag} class='dt-sc-sub-heading'>{$subtext}</{$subtag}>";
			$out .= '<p>'.DTCoreShortcodesDefination::dtShortcodeHelper ( $content ).'</p>';
			$out .= "</div>";
		} elseif( $type == 'vertical-solid-line' ) {
			$out = "<div class='dt-sc-title with-vertical-solid-line {$animation} {$class}' data-delay='{$delay}'>";
			$out .= "<{$tag} class='dt-sc-main-heading'><span>{$text}</span></{$tag}>";
			$out .= '<p>'.DTCoreShortcodesDefination::dtShortcodeHelper ( $content ).'</p>';
			$out .= "</div>";
		} elseif( $type == 'type-writing') {
			$out  = "<div class='dt-sc-title with-two-color-stripe type-writing {$animation} {$class}' data-delay='{$delay}'>";
			$out .= "<{$subtag} class='dt-sc-sub-heading'>{$subtext}</{$subtag}>";
			$out .= "<{$tag} class='type-writer dt-sc-main-heading' data-text='".esc_attr( $text )."'>{$text}</{$tag}>";
			$out .= "<{$extra_text_tag}>{$extra_text}</{$extra_text_tag}>";
			$out .= "</div>";
		} elseif( $type == 'separator-with-shape' ) {
			$out = "<div class='dt-sc-title separator-with-shape {$animation} {$class}' data-delay='{$delay}'>";
			$out .= "<{$tag} class='dt-sc-main-heading'><span>{$text}</span></{$tag}>";
			$out .= "</div>";			
		} elseif( $type == 'decoration' ) {
			$out = "<div class='dt-sc-title decorated {$animation} {$class}' data-delay='{$delay}'>";
			$out .= "<{$tag} class='dt-sc-main-heading'><span>{$text}</span></{$tag}>";
			$out .= "</div>";			
		}

		return $out;
	}

	/**
	 * horizontal invisible
	 * @return string
	 */
	function dt_sc_hr_invisible($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'size'  =>  'medium',
			'class' =>  ''
		), $attrs ) );

		$out = "<div class='dt-sc-hr-invisible-{$size} {$class}'> </div>";	

		return $out;
	}

	/**
	 * horizontal top
	 * @return string
	 */
	function dt_sc_hr_top($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'value'  =>  '10',
			'class' =>  ''
		), $attrs ) );

		$out = "<div class='dt-sc-hr-top-{$value} {$class}'> </div>";

		return $out;
	}

	/**
	 * horizontal custom
	 * @return string
	 */
	function dt_sc_hr_custom($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'type'  =>  'clear',
			'class' =>  ''
		), $attrs ) );

		$out = "<div class='dt-sc-{$type} {$class}'> </div>";

		return $out;
	}

	/**
	 * hr stamp divider
	 * @return string
	 */
	function dt_sc_hr_svg($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
			'type' => 'stamp-divider-down',
			'fillcolor' => '#ffffff',
			'strokecolor' => '#ffffff'
		), $attrs ) );

		$out = "<svg class='dt-sc-{$type}' xmlns='http://www.w3.org/2000/svg' version='1.1' width='100%' height='150' viewBox='0 0 400 260' preserveAspectRatio='none'>
                <path style='fill:{$fillcolor}; stroke:{$strokecolor}' d='M0 0 Q 2.5 40 5 0 Q 7.5 40 10 0 Q 12.5 40 15 0 Q 17.5 40 20 0 Q 22.5 40 25 0 Q 27.5 40 30 0 Q 32.5 40 35 0
                         Q 37.5 40 40 0 Q 42.5 40 45 0 Q 47.5 40 50 0 Q 52.5 40 55 0 Q 57.5 40 60 0 Q 62.5 40 65 0 Q 67.5 40 70 0 Q 72.5 40 75 0 Q 77.5 40 80 0 Q 82.5 40 85 0
                         Q 87.5 40 90 0 Q 92.5 40 95 0 Q 97.5 40 100 0 Q 102.5 40 105 0 Q 107.5 40 110 0 Q 112.5 40 115 0 Q 117.5 40 120 0 Q 122.5 40 125 0 Q 127.5 40 130 0
                         Q 132.5 40 135 0 Q 137.5 40 140 0 Q 142.5 40 145 0 Q 147.5 40 150 0 Q 152.5 40 155 0 Q 157.5 40 160 0 Q 162.5 40 165 0 Q 167.5 40 170 0 Q 172.5 40 175 0
                         Q 177.5 40 180 0 Q 182.5 40 185 0 Q 187.5 40 190 0 Q 192.5 40 195 0 Q 197.5 40 200 0 Q 202.5 40 205 0 Q 207.5 40 210 0 Q 212.5 40 215 0 Q 217.5 40 220 0
                         Q 222.5 40 225 0 Q 227.5 40 230 0 Q 232.5 40 235 0 Q 237.5 40 240 0 Q 242.5 40 245 0 Q 247.5 40 250 0 Q 252.5 40 255 0 Q 257.5 40 260 0 Q 262.5 40 265 0
                         Q 267.5 40 270 0 Q 272.5 40 275 0 Q 277.5 40 280 0 Q 282.5 40 285 0 Q 287.5 40 290 0 Q 292.5 40 295 0 Q 297.5 40 300 0 Q 302.5 40 305 0 Q 307.5 40 310 0
                         Q 312.5 40 315 0 Q 317.5 40 320 0 Q 322.5 40 325 0 Q 327.5 40 330 0 Q 332.5 40 335 0 Q 337.5 40 340 0 Q 342.5 40 345 0 Q 347.5 40 350 0 Q 352.5 40 355 0
                         Q 357.5 40 360 0 Q 362.5 40 365 0 Q 367.5 40 370 0 Q 372.5 40 375 0 Q 377.5 40 380 0 Q 382.5 40 385 0 Q 387.5 40 390 0 Q 392.5 40 395 0 Q 397.5 40 400 0 Z'>
                </path>
            </svg>";

		return $out;
	}
	
	/**
	 * email address
	 * @return string
	 */
	function dt_sc_email($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'text' => '',
			'css_animation'  => '',
			'delay'          => '0',
			'class' => 'icon icon-mail'
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );

		$out = "<div class='text-with-icon {$animation}' data-delay='{$delay}'>";
			$out .= "<span class='{$class}'> </span>";
			$out .= "<a href='mailto:{$text}'> {$text} </a>";
		$out .= "</div>";

		return $out;
	}

	/**
	 * phone no
	 * @return string
	 */
	function dt_sc_phone_no($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'text' => '',
			'css_animation'  => '',
			'delay'          => '0',
			'class' => 'fas fa-phone fa-rotate-90'
		), $attrs ) );

		$href = preg_replace('/[^0-9]/', '', $text);

		$animation = $this->getCSSAnimation( $css_animation );
		
		$out = "<div class='text-with-icon {$animation}' data-delay='{$delay}'>";
			$out .= "<span class='{$class}'> </span>";
			$out .= "<a href='tel:{$href}'> {$text} </a>";
		$out .= "</div>";

		return $out;
	}


	/**
	 * whatsapp no
	 * @return string
	 */
	function dt_sc_whatsapp_no($attrs, $content = null) {
        extract ( shortcode_atts ( array (
            'text' => '',
            'class' => 'fab fa-whatsapp'
        ), $attrs ) );
        
        $href = preg_replace('/[^0-9]/', '', $text);

        $out = "<div class='text-with-icon'>";
            $out .= "<span class='{$class}'> </span>";
            $out .= "<a href='https://api.whatsapp.com/send?phone={$href}'> {$text} </a>";
        $out .= "</div>";

        return $out;
	}

	/**
	 * url
	 * @return string
	 */
	function dt_sc_url($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'link'                                  => '',
			'icon_type'                             => '',
			'icon_type_entypo'                      => '',
			'icon_type_fontawesome'                 => '',
			'icon_type_icon_moon_line'              => '',
			'icon_type_icon_moon_solid'             => '',
			'icon_type_icon_moon_ultimate'          => '',
			'icon_type_linecons'                    => '',
			'icon_type_material_design_iconic_font' => '',
			'icon_type_material'                    => '',
			'icon_type_monosocial'                  => '',
			'icon_type_openiconic'                  => '',
			'icon_type_pe_icon_7_stroke'            => '',
			'icon_type_stroke'                      => '',
			'icon_type_typicons'                    => '',

			'css_animation'  => '',
			'delay'          => '0',

			'class'                                 => '',
		), $attrs ) );

		$link = ( '||' === $link ) ? '' : $link;
		$link = vc_build_link( $link );
		$a_href = $link['url'];
		$a_title = $link['title'];
		$a_target = !empty($link['target']) ? $link['target'] : '_self';

		$animation = $this->getCSSAnimation( $css_animation );

		if( !empty($a_href) ):
			$out  = "<div class='text-with-icon {$animation} {$class}' data-delay='{$delay}'>";

				vc_icon_element_fonts_enqueue( $icon_type );
				$out .= "<span class='".${'icon_type_'.$icon_type}."'> </span>";

			$out .= "<a title='".esc_attr($a_title)."' target='".esc_attr($a_target)."' href='".esc_url($a_href)."'>{$a_title}</a>";
			$out .= "</div>";
			return $out;
		endif;		
	}

	/**
	 * search form
	 * @return string
	 */
	function dt_sc_search_form($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'css_animation'  => '',
			'delay'          => '0',
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );

		$out  = "<div class='dt-search-form-wrapper {$animation}' data-delay='{$delay}'>";
			$out .= get_search_form(false);
		$out .= "</div>";
		return $out;
	}

	/**
	 * woocommerce cart
	 * @return string
	 */
	function dt_sc_woo_cart($attrs, $content = null) {

		extract ( shortcode_atts ( array (
			'class' => ''
		), $attrs ) );
	
		if( function_exists("is_woocommerce")) :
			$out = '<a class="cart-info '.$class.'" href="'.esc_url(wc_get_cart_url()).'" title="'.esc_attr__( 'View Shopping Cart', 'designthemes-core' ).'">';
				$count = WC()->cart->cart_contents_count;
				$out .= '<p class="cart-icon"> <span> '.$count.' </span> </p>';
				$out .= is_object( WC()->cart ) ? '<span class="cart-total"> ' . WC()->cart->get_cart_total() . ' </span>' : '';
			$out .= '</a>';
		else:
			$out .= '<p>'.esc_html__('Kindly install & activate woocommerce plugin and check it.', 'designthemes-core').'</p>';
		endif;
	
		return $out;
	}

	/**
	 * icon
	 * @return string
	 */
	function dt_sc_icon( $attrs, $content = null ) {

		extract ( shortcode_atts ( array (
			'icon' => '',
			'styles' => '',
			'link' => '',

			'css_animation'  => '',
			'delay'          => '0',

			'class' => ''
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );

		$styles = !empty($styles) ? "style='{$styles}'" : '';

		$out = "<span class='{$icon} {$animation} {$class}' data-delay='{$delay}' {$styles}> </span>";

		$link = ( '||' === $link ) ? '' : $link;
		$link = vc_build_link( $link );
		$a_href = $link['url'];
		$a_title = $link['title'];
		$a_target = !empty($link['target']) ? $link['target'] : '_self';

		if( !empty($a_href) ):
			$out = "<a title='".esc_attr($a_title)."' target='".esc_attr($a_target)."' href='".esc_url($a_href)."' class='".esc_attr($class)."'>{$out}</a>";
		endif;

		return $out;
	}

	function dt_sc_image( $attrs, $content = null ) {
		extract ( shortcode_atts ( array (
			'url' => '',
			'align' => 'alignnone',
			'class' => '',
			'styles' => '',
			'link' => '',
			'css_animation'  => '',
			'delay'          => '0',			
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );

		$image = wpb_getImageBySize( array('attach_id' => $url, 'thumb_size' => 'full') );
		$url = $image['thumbnail'];

		if( !empty( $url ) ):
			if( !empty($class) ):
				$url = str_replace(' class="', ' class="'.$class.' ', $url);
			endif;

			if( !empty($styles) ):
				$url = str_replace('<img', '<img style="'.$styles.'" ', $url);
			endif;

			if( !empty($align) ):
				$url = str_replace(' class="', ' class="'.$align.' ', $url);
			endif;

			if( !empty( $animation ) ) {
				$url = str_replace('<img', '<img data-delay="'.$delay.'" ', $url);
				$url = str_replace(' class="', ' class="'.$animation.' ', $url);
			}

			//parse link by vc
			$link = ( '||' === $link ) ? '' : $link;
			$link = vc_build_link( $link );
			$a_href = $link['url'];
			$a_title = $link['title'];
			$a_target = !empty( $link['target'] ) ? trim($link['target']) : '_self';
			if( strlen( $link['url'] ) > 0 ) {
				return '<a href="'.$a_href.'" title="'.$a_title.'" target="'.$a_target.'">'.$url.'</a>';
			} else {
				return $url;				
			}
		endif;
	}

	/**
	 * contact info
	 * @return string
	 */
	function dt_sc_contact_info($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'type'  => '',
			'icon'  => '',
			'image' => '',
			'title' => '',
			'link'  => '',
			'css_animation'  => '',
			'delay'          => '0',
			'class' => ''
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );

		$out = "<div class='dt-sc-contact-info {$type} {$animation} {$class}' data-delay='{$delay}'>";

			if( $type == 'type5') {
				//parse link by vc
				$link = ( '||' === $link ) ? '' : $link;
				$link = vc_build_link( $link );
				$a_href = $link['url'];
				$a_title = $link['title'];
				$a_target = !empty($link['target']) ? $link['target'] : '_self';

				if( !empty($icon) ) {
					$out .= "<a class='dt-sc-contact-icon' title='{$a_title}' href='{$a_href}' target='{$a_target}'><span class='{$icon}'> </span></a>";
				}

				if(!empty($title)) {
					$out .= "<h6><a title='{$title}' href='{$a_href}'>{$title}</a></h6>";
				}
			} elseif( $type == 'type9' ) {
				//parse link by vc
				$link     = ( '||' === $link ) ? '' : $link;
				$link     = vc_build_link( $link );
				$a_href   = !empty($link['url']) ? $link['url']: '#';
				$a_title  = $link['title'];
				$a_target = !empty($link['target']) ? $link['target'] : '_self';

				$out .= "<a title='{$a_title}' href='{$a_href}' target='{$a_target}'>";
					if( !empty($image) ) {
						$image = wpb_getImageBySize( array( 'attach_id' => $image, 'thumb_size' => 'full' ));
						$image = $image['thumbnail'];
							$out .= "<div class='cinfo-image'>{$image}</div>";
					}
					if( !empty($icon) ) {
						$out .= "<span class='{$icon}'> </span>";
					}
				$out .= "</a>";

				if(!empty($title)) {
					$out .= "<h6><a title='{$title}' href='{$a_href}'>{$title}</a></h6>";
				}				
			} else {
				if( !empty($icon) ) {
					$out .= "<span class='{$icon}'> </span>";
				}

				if(!empty($title)) {
					$out .= "<h6>{$title}</h6>";
				}
			}
		$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= "</div>";

		return $out;
	}

	/**
	 * number counter
	 * @return string
	 */
	function dt_sc_number_counter($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'type'  =>	'type1',
			'icon_type' => 'icon_class',
			'icon'  =>  '',
			'iconurl'  =>  '',
			'iconcolor'  =>  '',
			'value'  =>  '',
			'append'  =>  '',
			'title'  =>  '',
			'subtitle' => '',
			'css_animation'  => '',
			'delay'          => '0',
			'class'  =>  '',
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );

		$append = !empty($append) ? "data-append='{$append}'" : '';
		$out = "<div class='dt-sc-counter {$type} {$iconcolor} {$animation} {$class}' data-delay='{$delay}'>";
			$out .= "<div class='dt-sc-counter-icon-holder'>";
				if(!empty($icon) || !empty($iconurl)):
					$out .= "<div class='icon-wrapper'>";
						if(!empty($icon) && $icon_type == 'icon_class' ):
							$out .= "<span class='{$icon}'> </span>";
						elseif(!empty($iconurl) && $icon_type == 'icon_url' ):
							$image = wpb_getImageBySize( array( 'attach_id' => $iconurl, 'thumb_size' => 'full' ));
							$image = $image['thumbnail'];
							$out .= '<span>'.$image.'</span>';
						endif;
					$out .= "</div>";
				endif;

				if( !empty($title) && $type == 'type7' )
					$out .= "<h4>{$title}</h4>";

				$out .= "<div class='dt-sc-counter-number' data-value='{$value}' {$append}>{$value}</div>";

				if( !empty($subtitle) && $type == 'type7' )
					$out .= '<span class="dt-sc-counter-subtitle">'.$subtitle.'</span>';
			$out .= "</div>";

			if( !empty($title) && $type != 'type7' )
				$out .= "<h4>{$title}</h4>";

		$out .= "</div>";
		return $out;		
	}

	/**
	 * image caption
	 * @return string
	 */
	function dt_sc_image_caption($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'type'       =>  '',
			'title'      =>  '',
			'subtitle'   =>  '',
			'image'      =>  '',
			'image_link' =>  '',
			'imgpos'     =>  '',
			'icon_type'  => '',
			'icon'       =>  '',
			'iconurl'    =>  '',
			'class'      =>  '',
			'css_animation'  => '',
			'delay'          => '0',
			'overlay'    => 'rgba(0, 0, 0, 0.8)',
		), $attrs ) );


		$image = wpb_getImageBySize( array( 'attach_id' => $image, 'thumb_size' => 'full' ));

		//parse link by vc
		$link = ( '||' === $image_link ) ? '' : $image_link;
		$link = vc_build_link( $link );
		$a_href = isset( $link['url'] ) ? $link['url'] : '';

		$animation = $this->getCSSAnimation( $css_animation );

		$out = "<div class='dt-sc-image-caption {$type} {$animation} {$class}' data-delay='{$delay}'>";
			if( $type == 'type6' || $type == 'type10' ) {
					$out .= "<div class='dt-sc-image-wrapper'>";
					if( !empty( $a_href ) ) {
						$a_target = !empty($link['target']) ? $link['target'] : '_self';
						$out .= '<a href="'.esc_url( $a_href ).'" target="'.esc_attr( $a_target ).'"';
						$out .= isset( $link['title'] ) && !empty( $link['title'] )  ? ' title="'.esc_attr( $link['title'] ).'"' : '';
						$out .= isset( $link['rel'] ) && !empty( $link['rel'] )  ? ' rel ="'.esc_attr( $link['rel'] ).'"' : '>';
					}
						if(!empty($image))
							$out .= $image['thumbnail'];	
							
						if( !empty( $a_href ) ) {
							$out .= '</a>';
						}
					$out .= "</div>";
				$out .= "<div class='dt-sc-image-content'>";
					if(!empty($icon) || !empty($iconurl)):
						$out .= "<div class='icon-wrapper'>";
							if(!empty($icon)):
								$out .= "<span class='{$icon}'> </span>";
							elseif(!empty($iconurl)):
								$image = wpb_getImageBySize( array( 'attach_id' => $iconurl, 'thumb_size' => 'full' ));
								$out .= $image['thumbnail'];
							endif;	
						$out .= "</div>";
					endif;

					$out .= "<div class='dt-sc-image-title'>";
						$out .= !empty( $title ) ? "<h3>{$title}</h3>" : '';
						$out .= !empty( $subtitle ) ? "<h6>{$subtitle}</h6>" : '';
					$out .= "</div>";
					$out .= '<p>'.DTCoreShortcodesDefination::dtShortcodeHelper ( $content ).'</p>';
					
				$out .= "</div>";
	
			} else {
				$html_1 = "<div class='dt-sc-image-wrapper'>";
				if( !empty( $a_href ) ) {
					$a_target = !empty($link['target']) ? $link['target'] : '_self';
					$html_1 .= '<a href="'.esc_url( $a_href ).'" target="'.esc_attr( $a_target ).'"';
					$html_1 .= isset( $link['title'] ) && !empty( $link['title'] )  ? ' title="'.esc_attr( $link['title'] ).'"' : '';
					$html_1 .= isset( $link['rel'] ) && !empty( $link['rel'] )  ? ' rel ="'.esc_attr( $link['rel'] ).'"' : '>';
				}
					if(!empty($image))
						$html_1 .= $image['thumbnail'];

					if( !empty( $a_href ) ) {
						$html_1 .= '</a>';
					}

					if(!empty($icon) || !empty($iconurl)):
						$html_1 .= "<div class='icon-wrapper'>";
							if(!empty($icon)):
								$html_1 .= "<span class='{$icon}'> </span>";
							elseif(!empty($iconurl)):
								$image = wpb_getImageBySize( array( 'attach_id' => $iconurl, 'thumb_size' => 'full' ));
								$html_1 .= $image['thumbnail'];
							endif;	
						$html_1 .= "</div>";
					endif;
					
					if($type == 'type9' || $type == 'type10' ):

						if( empty( $overlay ) ) {
							$html_1 .= '<div class="dt-sc-image-overlay">';
						} else {
							$html_1 .= '<div class="dt-sc-image-overlay" style="background:'.$overlay.'">';
						}

						if( $type == 'type9' ) {
							$html_1 .= '<p>'.DTCoreShortcodesDefination::dtShortcodeHelper ( $content ).'</p>';
						}
						$html_1 .= '</div>';
					endif;
				$html_1 .= "</div>";

				$html_2 = "<div class='dt-sc-image-content'>";

					$html_2 .= "<div class='dt-sc-image-title'>";
						$html_2 .= "<h3>{$title}</h3>";
						if(!empty($subtitle))
							$html_2 .= "<h6>{$subtitle}</h6>";
					$html_2 .= "</div>";

					if( ($type != 'type9') && ( $type != 'type10') ):
						$html_2 .= '<p>'.DTCoreShortcodesDefination::dtShortcodeHelper ( $content ).'</p>';
					endif;

				$html_2 .= "</div>";

				if($imgpos == "bottom")
					$out .= $html_2 . $html_1;
				else
					$out .= $html_1 . $html_2;				
			}

		$out .= "</div>";
		return $out;
	}

	/**
	 * image flip
	 * @return string
	 */
	function dt_sc_image_flip($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'image1'  =>  '',
			'image2'  =>  '',
			'link'  =>'',
			'css_animation'  => '',
			'delay'          => '0',
		), $attrs ) );

		//parse link by vc
		$link = ( '||' === $link ) ? '' : $link;
		$link = vc_build_link( $link );
		$a_href = $link['url'];
		$a_title = $link['title'];
		$a_target = !empty($link['target']) ? $link['target'] : '_self';

		$image1 = wpb_getImageBySize( array( 'attach_id' => $image1, 'thumb_size' => 'full' ));
		$image2 = wpb_getImageBySize( array( 'attach_id' => $image2, 'thumb_size' => 'full' ));

		$animation = $this->getCSSAnimation( $css_animation );

		$out = "<div class='dt-sc-image-flip {$animation}'  data-delay='{$delay}'>";
		$out .= !empty( $a_href ) ? "<a href='{$a_href}' title='{$a_title}' target='{$a_target}'>" : "";
		$out .= !empty( $image1['thumbnail'] ) ? $image1['thumbnail'] : '';
		$out .= !empty( $image2['thumbnail'] ) ? $image2['thumbnail'] : '';
		$out .= !empty( $a_href ) ? "</a>" : "";
		$out .= "</div>";
		return $out;
	}

	/**
	 * event caption
	 * @return string
	 */
	function dt_sc_event_caption($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
			'title' => '',
			'image' => '',
			'subtitle1' => '',
			'subtitle2' => '',
			'css_animation'  => '',
			'delay'          => '0',			
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );		

		$image = wpb_getImageBySize( array( 'attach_id' => $image, 'thumb_size' => 'full' ));

		$out = "<div class='dt-sc-event-image-caption {$animation}' data-delay='{$delay}'>";
			$out .= '<div class="dt-sc-image-content">';
				$out .= "<h3>{$title}</h3>";
				$out .= '<p>'.DTCoreShortcodesDefination::dtShortcodeHelper ( $content ).'</p>';
			$out .= '</div>';
			$out .= '<div class="dt-sc-image-wrapper">';
				$out .= !empty( $image['thumbnail'] ) ? $image['thumbnail'] : '<img src="http://place-hold.it/320x340"/>';
				$out .= '<div class="overlay-text">';
					$out .= "<h3><span>{$subtitle1}</span>{$subtitle2}</h3>";
				$out .= '</div>';
			$out .= '</div>';
		$out .= '</div>';

		return $out;
	}

	/**
	 * event contact info
	 * @return string
	 */
	function dt_sc_event_contact_info($attrs, $content = null, $shortcodename = "") {

		extract ( shortcode_atts ( array (
			'title' => '',
			'icon' => '',
			'color' => '',
			'link' => '',
			'css_animation'  => '',
			'delay'          => '0',
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );

		//parse link by vc
		$link = ( '||' === $link ) ? '' : $link;
		$link = vc_build_link( $link );
		$a_href = $link['url'];
		$a_title = $link['title'];
		$a_target = !empty($link['target']) ? $link['target'] : '_self';

		$out = "<div class='dt-sc-contact-info type5 {$animation} {$color}' data-delay='{$delay}'>";
			$out .= "<a class='dt-sc-contact-icon' href='{$a_href}' title='{$a_title}' target='{$a_target}'> <span class='{$icon}'> </span> </a>";
			$out .= "<h6><a href='{$a_href}' title='{$a_title}' target='{$a_target}'>{$title}</a></h6>";
		$out .= '</div>';

		return $out;
	}

	/**
	 * mailchimp newsletter
	 * @return string
	 */
	function dt_sc_mc_newsletter($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'type' => 'type1',
			'title' => '',
			'subtitle' => '',
			'tooltip' => '',
			'listid' => '',
			'name' => esc_html__('Your Name', 'designthemes-core'),
			'email' => esc_html__('Your Email Address', 'designthemes-core'),
			'button' => esc_html__('Subscribe Now', 'designthemes-core'),
			'show_name' => '',
			'privacy' => '',

			'css_animation'  => '',
			'delay'          => '0',

			'class' => ''
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );

		$out = "<div class='dt-sc-newsletter-section {$type} {$animation} {$class}' data-delay='{$delay}'>";
			if(!empty($subtitle))
				$out .= "<i>{$subtitle}</i>";
		
			if(!empty($title))
				$out .= "<h2>{$title}</h2>";

			if(!empty($content) && ($type != 'type1'))
				$out .= '<p>'.DTCoreShortcodesDefination::dtShortcodeHelper ( $content ).'</p>';

			$mcapi = cs_get_option( 'mailchimp-key' );

			$out .= '<form class="dt-sc-subscribe-frm" name="frmsubscribe" action="#" method="post">';

				if($show_name == 'true') {

					if( $type == "type2" ) {
						$out .= "<div class='input-content'> <input type='text' name='dt_mc_fname' placeholder='{$name}'> </div>";
					} else {
						$out .= "<input type='text' name='dt_mc_fname' placeholder='{$name}'>";
					}
				}

				if( $type == "type2" ) {
					$out .= "<div class='input-content'> <input type='email' name='dt_mc_emailid' required='required' placeholder='{$email}'> </div>";
				} else {
					$out .= "<input type='email' name='dt_mc_emailid' required='required' placeholder='{$email}'>";
				}

				$out .= "<input type='hidden' name='dt_mc_apikey' value='$mcapi' />";
				$out .= "<input type='hidden' name='dt_mc_listid' value='$listid' />";
				
				if( ($type == 'type4') || ($type == 'type5') ):
					$out .= apply_filters('dt_sc_mailchimp_form_elements', $privacy, $attrs );
				endif;
				
				$out .= "<input type='submit' name='mc_submit' value='{$button}'>";
				
				if( ($type == 'type1') || ($type == 'type2') || ($type == 'type3') || ($type == 'type6') || ($type == 'type7') ):
					$out .= apply_filters('dt_sc_mailchimp_form_elements', $privacy, $attrs );
				endif;

			$out .= '</form>';

			if(!empty($tooltip))
				$out .= "<div class='newsletter-tooltip'>{$tooltip}</div>";

	
				$out .= '<div class="dt_ajax_subscribe_msg"></div>';
			
				
		$out .= '</div>';

		return $out;
	}

	/**
	 * team
	 * @return string
	 */
	function dt_sc_team($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'name'	=> '',
			'role' => '',
			'image' => '',
			'teamstyle' => '',
			'socialstyle' => '',
			'facebook' => '',
			'twitter' => '',
			'google' => '',
			'linkedin' => '',			
			'css_animation'  => '',
			'delay'          => '0',
			'class' => ''
		), $attrs ) );

		$sociables = array(
			'fa-dribbble'      => 'dribble',
			'fa-flickr'        => 'flickr',
			'fa-github'        => 'github',
			'fa-pinterest'     => 'pinterest',
			'fa-twitter'       => 'twitter',
			'fa-youtube'       => 'youtube',
			'fa-android'       => 'android',
			'fa-dropbox'       => 'dropbox',
			'fa-instagram'     => 'instagram',
			'fa-windows'       => 'windows',
			'fa-apple'         => 'apple',
			'fa-facebook-f'    => 'facebook',
			'fa-google-plus-g' => 'google',
			'fa-linkedin-in'   => 'linkedin',
			'fa-skype'         => 'skype',
			'fa-tumblr'        => 'tumblr',
			'fa-vimeo-square'  => 'vimeo'
		);

		$out   = '';
		$image = wpb_getImageBySize( array( 'attach_id' => $image, 'thumb_size' => 'full' ));
		$image = $image['thumbnail'];

		$animation = $this->getCSSAnimation( $css_animation );

		if( $teamstyle == 'flip-details-on-hover' ) {
			$out .= "<div class='dt-sc-team {$teamstyle} {$animation} {$class}' data-delay='{$delay}'>";
				$out .= "<div class='dt-sc-team-thumb'>";
					$out .= !empty( $image ) ? $image : '';

					$out .= "<div class='figcaption'>";
						$out .= "<div class='fig-content'>";
							$out .= !empty( $image ) ? $image : '';
							$out .= !empty( $name ) ? "<h5>{$name}</h5>" : "";
							$out .= !empty( $role ) ? "<span>{$role}</span>" : "";
								if( !empty( $content ) ) {
									$out .= '<p>'.DTCoreShortcodesDefination::dtShortcodeHelper( $content ).'</p>';							
								}
								$social_links = "";
								foreach ( $sociables as $key => $value ) {
									if(is_array($attrs) && array_key_exists($value, $attrs) && $attrs[$value] != '')
										$social_links .= '<li><a class="fab '.$key.'" href="'.$attrs[$value].'" title="'.ucfirst($value).'"></a></li>';
								}
								$social_links = ! empty ( $social_links ) ? "<ul class='dt-sc-team-social {$socialstyle}'>$social_links</ul>" : "";
								$out .= $social_links;
						$out .= "</div>";
					$out .= "</div>";

					$out .= '<div class="team-title">';
						$out .= !empty( $name ) ? "<h5>{$name}</h5>" : "";
						$out .= !empty( $role ) ? "<span>{$role}</span>" : "";
					$out .= "</div>";
				$out .= "</div>";
			$out .= "</div>";
		} elseif( $teamstyle == 'simple-rounded-image' ) {
			$out .= "<div class='dt-sc-team {$teamstyle} {$animation} {$class}' data-delay='{$delay}'>";
				$out .= "<div class='dt-sc-team-thumb'>";
					$out .= !empty( $image ) ? $image : '';
				$out .= "</div>";

				$out .= "<div class='dt-sc-team-details'>";
					$out .= "<h4>{$name}</h4>";
					$out .= "<h5>{$role}</h5>";

					$social_links = "";
					foreach ( $sociables as $key => $value ) {
						if(is_array($attrs) && array_key_exists($value, $attrs) && $attrs[$value] != '')
							$social_links .= '<li><a class="fab '.$key.'" href="'.$attrs[$value].'" title="'.ucfirst($value).'"></a></li>';
					}
					$social_links = ! empty ( $social_links ) ? "<ul class='dt-sc-team-social {$socialstyle}'>$social_links</ul>" : "";
					$out .= $social_links;

					$content = '<p>'.DTCoreShortcodesDefination::dtShortcodeHelper( $content ).'</p>';
					$out .= $content;
				$out .= "</div>";
			$out .= "</div>";
		} elseif( $teamstyle == 'type2' ) {
			$out .= "<div class='dt-sc-team {$teamstyle} {$animation} {$class}' data-delay='{$delay}'>";
				$out .= "<div class='dt-sc-team-thumb'>";
					$out .= !empty( $image ) ? $image : '';
				$out .= "</div>";

				$out .= "<div class='dt-sc-team-details'>";
					$out .= "<h4>{$name}</h4>";
					$out .= "<h5>{$role}</h5>";

					$s = "";
					foreach ( $sociables as $key => $value ) {
						if(is_array($attrs) && array_key_exists($value, $attrs) && $attrs[$value] != '')
							$s .= '<li><a class="fab '.$key.'" href="'.$attrs[$value].'" title="'.ucfirst($value).'"></a></li>';
					}
					$s = ! empty ( $s ) ? "<ul class='dt-sc-team-social {$socialstyle}'>$s</ul>" : "";
					$out .= $s;

					$content = '<p>'.DTCoreShortcodesDefination::dtShortcodeHelper( $content ).'</p>';
					$out .= $content;
				$out .= "</div>";
			$out .= "</div>";			
		} else {
			$out .= "<div class='dt-sc-team {$teamstyle} {$animation} {$class}' data-delay='{$delay}'>";

				$out .= "<div class='dt-sc-team-thumb'>";
					$out .= !empty( $image ) ? $image : '';

					if($teamstyle == 'type2'):
						$out .= "<div class='dt-sc-team-thumb-overlay'>";
							$s = "";
							foreach ( $sociables as $key => $value ) {
								if(is_array($attrs) && array_key_exists($value, $attrs) && $attrs[$value] != '')
									$s .= '<li><a class="fab '.$key.'" href="'.$attrs[$value].'" title="'.ucfirst($value).'"></a></li>';
							}
							$s = ! empty ( $s ) ? "<ul class='dt-sc-team-social {$socialstyle}'>$s</ul>" : "";
							$out .= $s;
						$out .= "</div>";
					endif;

				$out .= "</div>";

				$out .= "<div class='dt-sc-team-details'>";
					$out .= "<h4>{$name}</h4>";
					$out .= "<h5>{$role}</h5>";

					if($teamstyle != 'type2'):
						$s = "";
						foreach ( $sociables as $key => $value ) {
							if(is_array($attrs) && array_key_exists($value, $attrs) && $attrs[$value] != '')
								$s .= '<li><a class="fab '.$key.'" href="'.$attrs[$value].'" title="'.ucfirst($value).'"></a></li>';
						}
						$s = ! empty ( $s ) ? "<ul class='dt-sc-team-social {$socialstyle}'>$s</ul>" : "";
						$out .= $s;
					endif;

					$content = '<p>'.DTCoreShortcodesDefination::dtShortcodeHelper( $content ).'</p>';
					$out .= $content;
				$out .= "</div>";

			$out .= "</div>";
		}

		return $out;
	}

	/**
	 * speaker
	 * @return string
	 */
	function dt_sc_speaker($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'name' => '',
			'role' => '',
			'image' => '',
			'facebook' => '',
			'twitter' => '',
			'google' => '',
			'linkedin' => '',
			'class' => ''
		), $attrs ) );

		$image = wpb_getImageBySize( array( 'attach_id' => $image, 'thumb_size' => 'full' ));
		$image = $image['thumbnail'];

		$out = '<div class="dt-sc-keynote-speakers '.$class.'">';
			$out .= '<div class="dt-sc-speakers-thumb">';
				$out .= '<div class="dt-sc-speakers-thumb-holder">';
				$out .= !empty( $image ) ? $image : '';
				
					$out .= '<div class="dt-sc-speakers-thumb-overlay">';
					
						$sociables = array('fa-dribbble' => 'dribble', 'fa-flickr' => 'flickr', 'fa-github' => 'github', 'fa-pinterest' => 'pinterest','fa-twitter' => 'twitter', 'fa-youtube' => 'youtube', 'fa-android' => 'android', 'fa-dropbox' => 'dropbox', 'fa-instagram' => 'instagram', 'fa-windows' => 'windows', 'fa-apple' => 'apple', 'fa-facebook' => 'facebook', 'fa-google-plus' => 'google', 'fa-linkedin' => 'linkedin', 'fa-skype' => 'skype', 'fa-tumblr' => 'tumblr', 'fa-vimeo-square' => 'vimeo', 'fa-behance' => 'behance');
	
						$s = "";
						foreach ( $sociables as $key => $value ) {
							if(is_array($attrs) && array_key_exists($value, $attrs) && $attrs[$value] != '')
								$s .= '<li><a class="fa '.$key.'" href="'.$attrs[$value].'" title="'.ucfirst($value).'"></a></li>';
						}
						$s = ! empty ( $s ) ? "<ul class='dt-sc-team-social hexagon-border'>$s</ul>" : "";
						$out .= $s;
						
					$out .= '</div>';
				$out .= '</div>';
				$out .= "<h4>{$name}</h4>";
				$out .= "<h5>{$role}</h5>";
			$out .= '</div>';
			$out .= '<div class="dt-sc-speakers-details">';
				$out .= '<p>'.DTCoreShortcodesDefination::dtShortcodeHelper( $content ).'</p>';
			$out .= '</div>';
		$out .= '</div>';

		return $out;
	}

	/**
	 * tetimonials
	 * @return string
	 */
	function dt_sc_testimonial($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'type' => 'type1',
			'image' => '',
			'name' => '',
			'role' => '',
			'css_animation'  => '',
			'delay'          => '0',
			'class' => ''
		), $attrs ) );

		$image = wpb_getImageBySize( array( 'attach_id' => $image, 'thumb_size' => 'full' ));
		$image = $image['thumbnail'];
		$image = !empty( $image ) ? $image : '';

		$animation = $this->getCSSAnimation( $css_animation );

		$out = "<div class='dt-sc-testimonial-wrapper {$animation}' data-delay='{$delay}'>";
			$out .= "<div class='dt-sc-testimonial {$type} {$class}'>";
				$img = ""; $con = "";

				$img = '<div class="dt-sc-testimonial-author">';
					if(!empty($image))
						$img .= "<span>".$image."</span>";
					if((!empty($name) || !empty($role)) && $type != 'type1' && $type != 'type4' && $type != 'type7' ):
						$img .= '<cite>';
							if(!empty($name))
								$img .= $name;
							if(!empty($role))
								$img .= "<small>{$role}</small>";
						$img .= '</cite>';
					endif;
				$img .= '</div>';
	
				$con = '<div class="dt-sc-testimonial-quote">';
					$con .= '<blockquote>';
						$con .= '<q>'.DTCoreShortcodesDefination::dtShortcodeHelper ( strip_tags($content) ).'</q>';
						if((!empty($name) || !empty($role)) && ($type == 'type1' || $type == 'type4' || $type == 'type7') ):
							$con .= '<cite>';
								if(!empty($name))
									$con .= $name;
								if(!empty($role))
									$con .= "<small>{$role}</small>";
							$con .= '</cite>';
						endif;
					$con .= '</blockquote>';
				$con .= '</div>';

				if($type == 'type1' || $type == 'type3' || $type == 'type4' || $type == 'type6' || $type == 'type7' || $type == 'type8')
					$out .= $img.$con;
				else
					$out .= $con.$img;

			$out .= '</div>';
        $out .= '</div>';

		return $out;		
	}

	/**
	 * tetimonials carousel wrapper
	 * @return string
	 */
	function dt_sc_tm_carousel_wrapper($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'type' => 'type2',
			'animation' => 'scroll',
			'css_animation'  => '',
			'delay'          => '0',			
			'class' => ''
		), $attrs ) );

		$content = str_replace('[dt_sc_tm_carousel_item', '[dt_sc_tm_carousel_item type="'.$type.'"', $content );
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$css_animation = $this->getCSSAnimation( $css_animation );

		$out = "<div class='dt-sc-testimonial-wrapper carousel_items {$type} {$css_animation} {$class}' data-animation='{$animation}' data-delay='{$delay}'>";
			$out .= '<ul class="dt-sc-testimonial-carousel">';
			$out .= $content;
			$out .= '</ul>';
			$out .= '<div class="carousel-arrows">';
			$out .= '	<a href="#" class="testimonial-prev"> </a>';
			$out .= '	<a href="#" class="testimonial-next"> </a>';
			$out .= '</div>';
		$out .= '</div>';

		return $out;
	}

	/**
	 * fullwidth tetimonials carousel wrapper
	 * @return string
	 */
	function dt_sc_fw_tm_wrapper($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'title' => '',
			'css_animation'  => '',
			'delay'          => '0',
			'class' => ''
		), $attrs ) );
		
		preg_match_all( '/\[dt_sc_tm_carousel_item (.*?)\](.*?)\[\/dt_sc_tm_carousel_item\]/', $content, $matches);
		# $matches[1] = testimonial attrs
		# $matches[2] = testimonial content

		# To get attributes
		$authors = array();		
		foreach( $matches[1] as $a ) {
			array_push( $authors , shortcode_parse_atts($a) );
		}

		$animation = $this->getCSSAnimation( $css_animation );
		
		$out = '<div class="dt-sc-special-testimonial-container '.$animation.' '.$class.'" data-overlay="'.$delay.'">';
		
		$out .= '<div class="wpb_column vc_column_container vc_col-sm-6 dt-sc-skin-highlight extend-bg-fullwidth-left extend-bg-color-skin">';
		$out .= '	<div class="vc_column-inner">';
		$out .= '		<div class="wpb_wrapper">';
		$out .= '			<div class="alignright">';
		$out .= 				!empty($title) ? '<h2>'.$title.'</h2>' : '';
		$out .= '				<div class="dt-sc-hr-invisible-xsmall"> </div>';
		$out .= '				<div class="dt-sc-clear"></div>';
		$out .= '				<div class="dt-sc-testimonial-special-wrapper">';
		$out .= '					<ul class="dt-sc-testimonial-special">';
							foreach( $matches[2] as $key => $content ) {
								
								$name = isset( $authors[$key]['name'] ) ? $authors[$key]['name'] : '';
								$role = isset( $authors[$key]['role'] ) ? '<small>'.$authors[$key]['role'].'</small>' : '';
								
								$out .= '<li class="dt-sc-testimonial-wrapper">';
								$out .= '	<div class="dt-sc-testimonial special-testimonial-carousel">';
								$out .= '		<div class="dt-sc-testimonial-quote"><blockquote><q>'.$content.'</q></blockquote></div>';
								$out .= '		<div class="dt-sc-testimonial-author">';
								$out .=	'			<cite>'.$name.$role.'</cite>';
								$out .= '		</div>';
								$out .= '	</div>';
								$out .= '</li>';
							}
		$out .= '			</ul>';
		$out .= '				</div>';		
		$out .= '			</div>';
		$out .= '		</div>';
		$out .= '	</div>';
		$out .= '</div>';

		$out .= '<div class="wpb_column vc_column_container vc_col-sm-6">';
		$out .= '	<div class="vc_column-inner">';
		$out .= '		<div class="wpb_wrapper">';
		$out .= '			<ul class="dt-sc-testimonial-images">';
								foreach( $matches[1] as $attributes ){
									$a = shortcode_parse_atts($attributes);

									$image = '';
									if( isset($a['image']) ):
										$image = wpb_getImageBySize( array( 'attach_id' => $a['image'], 'thumb_size' => 'full' ));
										$image = $image['thumbnail'];
									endif;

									if( $image != '')
										$out .= '<li><div><a href="">'.$image.'</a></div></li>';
								}
		$out .= '			</ul>';
		$out .= '		</div>';
		$out .= '	</div>';
		$out .= '</div>';
		
		$out .= '</div>';
		
		return $out;		
	}

	/**
	 * tetimonial carousel item
	 * @return string
	 */
	function dt_sc_tm_carousel_item($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'type' => '',
			'name' => '',
			'role' => '',
			'image' => '',
			'class' => ''
		), $attrs ) );

		$image = wpb_getImageBySize( array( 'attach_id' => $image, 'thumb_size' => 'full' ));
		$image = $image['thumbnail'];
		$image = !empty( $image ) ? $image : '';

		$out = '<li>';
			$out .= "<div class='dt-sc-testimonial {$type} {$class}'>";
				$img = ""; $con = "";

				$img = '<div class="dt-sc-testimonial-author">';
					if(!empty($image))
						$img .= "<span>".$image."</span>";

					if( (!empty($name) || !empty($role)) && $type != 'type1' && $type != 'type4' && $type != 'type7' ) :
						$img .= '<cite>';
							if(!empty($name))
								$img .= $name;
							if(!empty($role))
								$img .= "<small>{$role}</small>";
						$img .= '</cite>';
					endif;
				$img .= '</div>';
	
				$con = '<div class="dt-sc-testimonial-quote">';
					$con .= '<blockquote>';
						$con .= ' <q>'.DTCoreShortcodesDefination::dtShortcodeHelper ( $content ).'</q>';
						if((!empty($name) || !empty($role)) && ($type == 'type1' || $type == 'type4' || $type == 'type7') ):
							$con .= '<cite>';
								if(!empty($name))
									$con .= $name;
								if(!empty($role))
									$con .= "<small>{$role}</small>";
							$con .= '</cite>';
						endif;
					$con .= '</blockquote>';
				$con .= '</div>';

				if($type == 'type1' || $type == 'type3' || $type == 'type4' || $type == 'type6' || $type == 'type7' || $type == 'type8')
					$out .= $img.$con;
				else
					$out .= $con.$img;

			$out .= '</div>';
        $out .= '</li>';

		return $out;
	}

	/**
	 * partners carousel
	 * @return string
	 */
	function dt_sc_partners_carousel($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'images' => '',
			'scroll' => '3',
			'visible' => '3',
			'css_animation'  => '',
			'delay'          => '0',
		), $attrs ) );

		if( !empty($images) ) :

			$images = explode( ',', $images );

			$animation = $this->getCSSAnimation( $css_animation );

			$out = '<div class="dt-sc-partners-carousel-wrapper '.$animation.'" data-delay="'.$delay.'" data-scroll="'.esc_attr($scroll).'" data-visible="'.esc_attr($visible).'">';

				$out .= "<ul class='dt-sc-partners-carousel'>";
							foreach ( $images as $attach_id ):
								if ( $attach_id > 0 ) :
									$post_thumbnail = wpb_getImageBySize( array( 'attach_id' => $attach_id, 'thumb_size' =>'full' ) );
									$out .= '<li>'.$post_thumbnail['thumbnail'].'</li>';
								endif;
							endforeach;
				$out .= '</ul>';

				$out .= '<div class="carousel-arrows">';
					$out .= '<a href="" class="partners-prev"> </a>';
					$out .= '<a href="" class="partners-next"> </a>';
				$out .= '</div>';
			$out .= '</div>';

			return $out;
		endif;
	}

	/**
	 * images carousel
	 * @return string
	 */
	function dt_sc_images_carousel($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'images'     => '',
			'pagination' => '',
			'css_animation'  => '',
			'delay'          => '0',
			'class'         => ''		
		), $attrs ) );

		if( !empty($images) ) :

			$i      = 0;
			$images = explode( ',', $images );

			$animation = $this->getCSSAnimation( $css_animation );
			$out = '<div class="dt-sc-images-wrapper '.$animation.' '.$class.'" data-delay="'.$delay.'">';

				$out .= "<ul class='dt-sc-images-carousel'>";
							foreach ( $images as $attach_id ):
								if ( $attach_id > 0 ) :
									$post_thumbnail = wpb_getImageBySize( array( 'attach_id' => $attach_id, 'thumb_size' =>'full' ) );
									$out .= '<li>'.$post_thumbnail['thumbnail'].'</li>';									
									$i += 1;
								endif;
							endforeach;
				$out .= '</ul>';

				$out .= '<div class="carousel-arrows">';
					$out .= '<a href="JavaScript:void(0);" class="images-prev"> </a>';
					$out .= ( $pagination == 'yes' ) ? '<p id="pagenumber"><span></span> / '.$i.'</p>' : '';
					$out .= '<a href="JavaScript:void(0);" class="images-next"> </a>';
				$out .= '</div>';
			$out .= '</div>';

			return $out;
		endif;
	}

	/**
	 * hexagon wrapper
	 * @return string
	 */
	function dt_sc_hexagon_wrapper($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'image' => '',
			'title' => '',
			'subtitle' => '',
			'extratitle' => ''
		), $attrs ) );

		$image = wpb_getImageBySize( array( 'attach_id' => $image, 'thumb_size' => 'full' ));
		$image = $image['thumbnail'];


		$out = '<div class="dt-sc-hexagon-shape">';
			$out .= '<div class="dt-sc-hexagon-image">';
				$out .= '<span>';
					if( !empty($image) ):
						$out .= $image;
					endif;
				$out .= '</span>';
				$out .= '<div class="dt-sc-hexagon-image-overlay">';
					$out .= "<h3>{$title}</h3>";
					$out .= "<h2>{$subtitle}</h2>";
					$out .= "<h3>{$extratitle}</h3>";
				$out .= "</div>";
			$out .= "</div>";

			$out .= '<ul class="dt-sc-hexagons">';
				$out .= do_shortcode(DTCoreShortcodesDefination::dtShortcodeHelper ( $content ));
			$out .= '</ul>';
		$out .= '</div>';

		return $out;
	}

	/**
	 * hexagon item
	 * @return string
	 */
	function dt_sc_hexagon_item($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'icon' => '',
			'title' => ''
		), $attrs ) );

		$out = '<li>';
			$out .= "<span class='{$icon}'> </span>";
			$out .= "<div class='dt-sc-hexagon-overlay'> <p>{$title}</p> </div>";
		$out .= '</li>';

		return $out;
	}

	function dt_sc_single_hexagon( $attrs, $content = null ){
		extract ( shortcode_atts ( array (
			'icon_type' => 'fontawesome', #VC
			'iconclass' => 'fas fa-home',
			'icon_css_class' => '',
			'title' => '',
			'class' => ''
		), $attrs ) );

		$icon = ( $icon_type == 'fontawesome' ) ? $iconclass : $icon_css_class;

		$out = "<div class='dt-sc-single-hexagon {$class}'>";
			$out .= "<span class='{$icon}'> </span>";
			$out .= "<div class='dt-sc-single-hexagon-overlay'> <p>{$title}</p> </div>";
		$out .= '</div>';
		return $out;
	}

	/**
	 * twitter tweets
	 * @return string
	 */
	function dt_sc_twitter_tweets($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'consumerkey' => '',
			'consumersecret' => '',
			'accesstoken' => '',
			'accesstokensecret' => '',
			'username' => '',
			'useravatar' => 'no',
			'css_animation'  => '',
			'delay'          => '0',
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );

		$out = '';

		if($username && $consumerkey && $consumersecret && $accesstoken && $accesstokensecret) {
			$transName = 'list_tweets';
			$cacheTime = 10;

			require_once(TRISS_CORE_PLUGIN."/apis/twitteroauth/twitteroauth.php");

			$twitterConnection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret );
			$twitterData = $twitterConnection->get('statuses/user_timeline',array('screen_name' => $username, 'count' => 5,'exclude_replies' => true));

			if($twitterConnection->http_code != 200)
				$twitterData = get_transient($transName);

			set_transient($transName, $twitterData, 60 * 10);
			$twitter = get_transient($transName);			

			$out .= '<div class="dt-sc-twitter-feeds '.$animation.'" data-delay="'.$delay.'">';
				$out .= '<div class="dt-sc-twitter-icon"> <span class="fab fa-twitter"> </span> </div>';

				if($twitter && is_array($twitter)) {
					$out .= '<div class="dt-sc-twitter-carousel-wrapper">';
						$out .= '<ul class="dt-sc-twitter-carousel">';

							foreach( $twitter as $tweet ):
								$latestTweet = $tweet->text;
								$latestTweet = preg_replace('/https:\/\/([a-z0-9_\.\-\+\&\!\#\~\/\,]+)/i', '<a href="https://$1" target="_blank">https://$1</a>', $latestTweet);
								$latestTweet = preg_replace('/@([a-z0-9_]+)/i', '<a href="httpd://twitter.com/$1" target="_blank">$1</a>', $latestTweet);

								$twitterTime = strtotime($tweet->created_at);
								$twitterTime = !empty($tweet->utc_offset) ? $twitterTime+($tweet->utc_offset ) : $twitterTime;
								$timeAgo = date_i18n(  get_option('date_format'), $twitterTime );

								$out .= '<li class="dt-sc-tweet">';
									if( $useravatar == 'yes' )
										$out .= '<span class="tweet-thumb"><a href="http://twitter.com/'.$username.'" title="'.$username.'"><img src="'.$tweet->user->profile_image_url.'" alt="thumb" /></a></span>';
										$out .= '<span class="tweet-text">'.$latestTweet.'</span>';
										$out .= "<span class='tweet-time'>{$timeAgo}</span>";
								$out .= '</li>';
							endforeach;

						$out .= '</ul>';
					$out .= '</div>';
				} else {
					$out .= '<div class="no-tweets">'.esc_html__('No Twitter Tweets found.','designthemes-core').'</div>';
				}
			$out .= '</div>';
		} else {
			$out .= '<div class="no-tweets '.$animation.'" data-delay="'.$delay.'">'.esc_html__('Invalid Twitter Authentication keys.','designthemes-core').'</div>';
		}

		return $out;
	}

	/**
	 * triangle wrapper
	 * @return string
	 */
	function dt_sc_triangle_wrapper($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
			'title' => '',
			'subtitle' => '',
			'image' => '',
			'link' => '',
			'type' => ''
		), $attrs ) );

		$image = wpb_getImageBySize( array( 'attach_id' => $image, 'thumb_size' => 'full' ));
		$image = $image['thumbnail'];

		//parse link by vc
		$link = ( '||' === $link ) ? '' : $link;
		$link = vc_build_link( $link );
		$a_href = $link['url'];
		$a_title = $link['title'];
		$a_target = !empty($link['target']) ? $link['target'] : '_self';

		$out = "<div class='dt-sc-triangle-wrapper {$type}'>";

			$img = '<div class="dt-sc-triangle-img">';
				$img .= '<div class="dt-sc-triangle-img-crop">';
				$img .= "<a href='".$a_href."' title='".$a_title."' target='".$a_target."'>".$image."</a>";
				$img .= '</div>';
			$img .= '</div>';

			$text = '<div class="dt-sc-triangle-content">';
				$text .= "<h4>{$title}</h4>";
				$text .= "<h5>{$subtitle}</h5>";
			$text .= '</div>';

			if($type == 'alter')
				$out .= $text . $img;
			else
				$out .= $img . $text;

		$out .= '</div>';

		return $out;
	}

	/**
	 * popular content box
	 * @return string
	 */
	function dt_sc_popular_content($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
			'image' => '',
			'title' => '',
			'duration' => '',
			'price' => '',
			'css_animation'  => '',
			'delay'          => '0',
		), $attrs ) );

		$image = wpb_getImageBySize( array( 'attach_id' => $image, 'thumb_size' => 'full' ));
		$image = $image['thumbnail'];

		$animation = $this->getCSSAnimation( $css_animation );

		$out = '<div class="dt-sc-popular-procedures '.$animation.'" data-delay="'.$delay.'">';
			if(!empty($image))
				$out .= "<div class='image'>".$image."</div>";
			
			$out .= '<div class="details">';
				$out .= "<h3>{$title}</h3>";
				$out .= "<span class='duration'>{$duration}</span>";
				$out .= "<span class='price'>{$price}</span>";
				$out .= '<p>'.DTCoreShortcodesDefination::dtShortcodeHelper ( $content ).'</p>';
			$out .= '</div>';
		$out .= '</div>';

		return $out;
	}

	/**
	 * domain wrapper
	 * @return string
	 */
	function dt_sc_domains_wrapper( $attrs, $content = null ){
		extract( shortcode_atts( array( 
			'class' => ''
		) , $attrs ) );

		$out = "<ul class='available-domains {$class}'>";
			$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= "</ul>";

		return $out;
	}

	/**
	 * domian box
	 * @return string
	 */
	function dt_sc_domain_box( $attrs, $content = null ){
		extract( shortcode_atts( array( 
			'domain' => '',
			'icon' => '',
			'title' => '',
			'price' => '',
			'link' =>'', 
			'class' => ''
		) , $attrs ) );

		//parse link by vc
		$link = ( '||' === $link ) ? '' : $link;
		$link = vc_build_link( $link );
		$a_href = $link['url'];
		$a_title = $link['title'];
		$a_target = !empty($link['target']) ? $link['target'] : '_self';

		$out = '<li class="'.$class.'">';
			if(!empty($domain))
				$out .= '<div class="tdl">'.$domain.'</div>';

			if(!empty($icon))
				$out .= '<span class="'.$icon.'"></span>';

			if(!empty($title))
				$out .= '<p>'.$title.'</p>';

			if(!empty($price))
				$out .= '<span class="price">'.$price.'</span>';

			$out .= '<a class="dt-sc-button" title="'.$a_title.'" href="'.$a_href.'" target="'.$a_target.'">'.$a_title.'</a>';
		$out .= '</li>';

		return $out;
	}

	function dt_sc_blog_post( $attrs, $content = null ){
		extract( shortcode_atts( array( 
			'count' => '-1',
			'blog_post_layout' => 'entry-grid',
			'blog_post_grid_list_style' => 'dt-sc-boxed',
			'blog_post_cover_style' => 'dt-sc-boxed',
			'blog_post_columns' => 'one-third-column',
			'blog_list_thumb' => 'entry-left-thumb',
			'blog_alignment' => '',
			'enable_equal_height' => '',
			'enable_gallery_slider' => '',
			'blog_elements_position' => '',
			'blog_meta_position' => '',
			'enable_post_format' => '',
			'enable_video_audio' => '',
			'enable_excerpt_text' => '',
			'blog_excerpt_length' => 25,
			'blog_readmore_text' => '',
			'blog_image_hover_style' => 'dt-sc-default',
			'blog_image_overlay_style' => 'dt-sc-background',
			'blog_pagination' => 'older_newer',
			'el_class' => '',
			'_post_categories' => '',
			'_post_not_in' => '',
			'css_animation'  => '',
			'delay'          => '0',
		) , $attrs ) );

		$out = '';

		$animation = $this->getCSSAnimation( $css_animation );

		$out .= '<div class="dt-sc-posts-list-wrapper '.$animation.' '.$el_class.'" data-delay="'.$delay.'">';

        // Getting options...
		$holder_class = $combine_class = array();
		$post_style = '';

        $post_layout = $blog_post_layout;
		$combine_class[] = $post_layout.'-layout';

        $post_gl_style = $blog_post_grid_list_style;
		$post_cover_style = $blog_post_cover_style;
		$combine_class[] = $post_style = ( $post_layout == 'entry-grid' || $post_layout == 'entry-list' ) ? $post_gl_style.'-style' : $post_cover_style.'-style';

		$post_list_type = $blog_list_thumb;
		$combine_class[] = ( $post_layout == 'entry-list' ) ? $post_list_type : '';

		$post_equal_height = $enable_equal_height;
		if( ( $post_layout == 'entry-grid' || $post_layout == 'entry-cover' ) && $post_equal_height == true ):
			$holder_class[] = 'apply-equal-height';
		elseif( $post_layout == 'entry-grid' || $post_layout == 'entry-cover' ):
			$holder_class[] = 'apply-isotope';
		elseif( $post_layout == 'entry-list' ):
			$holder_class[] = '';
		endif;

		$post_img_hover_style = $blog_image_hover_style;
		$combine_class[] = ( $post_img_hover_style != '' ) ? $post_img_hover_style.'-hover' : '';

		$post_img_overlay_style = $blog_image_overlay_style;
		$combine_class[] = ( ( $post_layout == 'entry-grid' || $post_layout == 'entry-cover' ) && $post_img_overlay_style != '' ) ? $post_img_overlay_style.'-overlay' : '';

		$post_alignment = $blog_alignment;
		$combine_class[] = ( ( $post_layout == 'entry-grid' || $post_layout == 'entry-cover' ) && $post_alignment != '' ) ? $post_alignment : '';

		$post_columns = $blog_post_columns;
		$post_columns = isset( $post_columns ) ? $post_columns : 'one-column';
		$post_columns = ( $post_layout == 'entry-list' ) ? 'one-column' : $post_columns;

        switch( $post_columns ):

            default:
			case 'one-column':
				$post_class = "column dt-sc-one-column dt-sc-post-entry ";
                $columns = 1;
            break;

            case 'one-half-column':
				$post_class = "column dt-sc-one-half dt-sc-post-entry ";
                $columns = 2;
            break;

            case 'one-third-column':
				$post_class = "column dt-sc-one-third dt-sc-post-entry ";
                $columns = 3;
            break;

            case 'one-fourth-column':
				$post_class = "column dt-sc-one-fourth dt-sc-post-entry ";
                $columns = 4;
            break;
        endswitch;

		$post_class .= implode(' ', $combine_class);

		if ( get_query_var('paged') ) {
			$paged = get_query_var('paged');
		} elseif ( get_query_var('page') ) { 
			$paged = get_query_var('page');
		} else {
			$paged = 1;
		}

		$args = array( 'paged' => $paged, 'posts_per_page' => $count, 'orderby' => 'date', 'ignore_sticky_posts' => true, 'post_status' => 'publish' );
		$warning = esc_html__('No Posts Found','designthemes-core');

		if( !empty($_post_categories) ){
			$args = array( 'paged' => $paged, 'posts_per_page' => $count, 'orderby' => 'date', 'cat' => $_post_categories, 'ignore_sticky_posts' => true, 'post_status' => 'publish' );
			$warning = esc_html__('No Posts Found in Category ','designthemes-core').$_post_categories;
		}

		if( !empty($_post_not_in) ){
			$args['post__not_in'] = array( $_post_not_in );
		}

		$rposts = new WP_Query( $args );
		if ( $rposts->have_posts() ) :

            $i = 1;

            $out .= "<div class='tpl-blog-holder ".implode(' ', $holder_class)."'>";
            $out .= "<div class='grid-sizer ".$post_class."'></div>";

			$meta = $newEles = $newMEles = array();

            $element_position = (array) vc_param_group_parse_atts( $blog_elements_position );
			$element_position = !empty( $element_position ) ? $element_position : explode( ',', $blog_elements_position );

			$meta_group_position = (array) vc_param_group_parse_atts( $blog_meta_position );
			$meta_group_position = !empty( $meta_group_position ) ? $meta_group_position : explode( ',', $blog_meta_position );

			$enable_excerpt = $enable_excerpt_text;
			$excerpt_length = $blog_excerpt_length;

			$read_more = $blog_readmore_text;
			$enable_slider = $enable_gallery_slider;

			$enable_video_audio = $enable_video_audio;
			$enable_post_format = $enable_post_format;

			$excerpt_length = !empty( $excerpt_length ) ? $excerpt_length : 25;
			$read_more = !empty( $read_more ) ? $read_more : '';

			if( is_array( $element_position[0] ) ) {
				foreach($element_position as $key => $items) {
					$newEles[$items['element']] = $items['element'];
				}
			} else {
				foreach($element_position as $item) {
					$newEles[$item] = $item;
				}
			}

			if( is_array( $meta_group_position[0] ) ) {
				foreach($meta_group_position as $key => $items) {
					$newMEles[$items['element']] = $items['element'];
				}
			} else {
				foreach($meta_group_position as $item) {
					$newMEles[$item] = $item;
				}
			}

			array_push( $meta, $newEles, $newMEles, $enable_excerpt, $excerpt_length, $read_more, $enable_slider, $enable_video_audio, $enable_post_format );

            while( $rposts->have_posts() ):
                $rposts->the_post();

                $temp_class = "";
                $post_ID = get_the_ID();

                if($i == 1) $temp_class = $post_class.' first'; else $temp_class = $post_class;
                if($i == $columns) $i = 1; else $i = $i + 1;

                $post_meta = get_post_meta($post_ID, '_dt_post_settings', TRUE);
                $post_meta = is_array($post_meta) ? $post_meta : array();

                $format = !empty( $post_meta['post-format-type'] ) ? $post_meta['post-format-type'] : 'standard';

                $out .= '<div class="'.esc_attr($temp_class).'">';

					$post_classes = get_post_class('blog-entry '.'format-'.$format, $post_ID);
					if( !array_key_exists( 'feature_image', $newEles ) ) {
						if( ( $key = array_search( 'has-post-thumbnail', $post_classes ) ) !== false ) {
							unset( $post_classes[$key] );
						}
					}
					if( $enable_post_format == true ) {
						$post_classes[] = 'has-post-format';
					}
					if( $enable_video_audio == true && ( $format === 'video' || $format === 'audio' ) ) {
						$post_classes[] = 'has-post-media';
					}

					$post_classes = implode( ' ', $post_classes );

                    $out .= '<article id="post-'.$post_ID.'" class="'.esc_attr($post_classes).'">';

						$template = apply_filters( 'triss_blog_archive_template', 'framework/templates/archive-blog-entry.php' );
						$template_args['ID'] = $post_ID;
						$template_args['Post_Style'] = $post_style;
						$template_args['Post_Layout'] = $post_layout;
						$template_args['Post_Column'] = $post_columns;
						$template_args['meta'] = $meta;

						ob_start();
						triss_get_template( $template, $template_args );
						$out .= ob_get_clean();

                    $out .= '</article>';
                $out .= '</div>';
            endwhile;

			wp_reset_postdata();

            $out .= '</div>';

			if( $blog_pagination == 'numbered' ):

				$out .= '<div class="pagination blog-pagination">'.triss_pagination($rposts).'</div>';

			elseif( $blog_pagination == 'older_newer' ):

				$out .= '<div class="pagination blog-pagination">';
					if(get_previous_posts_link()):
						$out .= '<div class="newer-posts">'.get_previous_posts_link( '<i class="fas fa-angle-left"></i>'.esc_html__(' Newer Posts', 'designthemes-core') ).'</div>';
					endif;
					if(get_next_posts_link()):
						$out .= '<div class="older-posts">'.get_next_posts_link( esc_html__('Older Posts ', 'designthemes-core').'<i class="fas fa-angle-right"></i>', $rposts->max_num_pages ).'</div>';
					endif;
				$out .= '</div>';

			elseif( $blog_pagination == 'load_more' ):

				$pos = $count % $columns;
				$pos += 1;

				$out .= '<div class="pagination blog-pagination"><a class="loadmore-btn more-items" data-count="'.$count.'" data-cats="'.$_post_categories.'" data-maxpage="'.esc_attr($rposts->max_num_pages).'" data-pos="'.esc_attr($pos).'" data-eheight="'.esc_attr($post_equal_height).'" data-style="'.esc_attr($post_style).'" data-layout="'.esc_attr($post_layout).'" data-column="'.esc_attr($post_columns).'" data-listtype="'.esc_attr($post_list_type).'" data-hover="'.esc_attr($post_img_hover_style).'" data-overlay="'.esc_attr($post_img_overlay_style).'" data-align="'.esc_attr($post_alignment).'" href="javascript:void(0);" data-meta="'.htmlspecialchars(json_encode($meta), ENT_QUOTES, get_bloginfo( 'charset' )).'">'.esc_html__('Load More', 'designthemes-core').'</a></div>';

			elseif( $blog_pagination == 'infinite_scroll' ):

				$pos = $count % $columns;
				$pos += 1;

				$out .= '<div class="pagination blog-pagination"><div class="infinite-btn more-items" data-count="'.$count.'" data-cats="'.$_post_categories.'" data-maxpage="'.esc_attr($rposts->max_num_pages).'" data-pos="'.esc_attr($pos).'" data-eheight="'.esc_attr($post_equal_height).'" data-style="'.esc_attr($post_style).'" data-layout="'.esc_attr($post_layout).'" data-column="'.esc_attr($post_columns).'" data-listtype="'.esc_attr($post_list_type).'" data-hover="'.esc_attr($post_img_hover_style).'" data-overlay="'.esc_attr($post_img_overlay_style).'" data-align="'.esc_attr($post_alignment).'" data-meta="'.htmlspecialchars(json_encode($meta), ENT_QUOTES, get_bloginfo( 'charset' )).'"></div></div>';
			endif;

		else:
			$out .= "<div class='dt-sc-warning-box'>{$warning}</div>";
		endif;

		$out .= '</div>';

		return $out;
	}

	function dt_sc_post_feature_image( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'id' => '',
			'enable_lightbox' => '',

			'css_animation'  => '',
			'delay'          => '0',

			'el_class' => ''
		), $attrs ) );

		$out = '';

		$animation = $this->getCSSAnimation( $css_animation );

		if( empty( $id ) ) {
			global $post;
			$id =  $post->ID;
		}

		$post_meta = get_post_meta($id,'_dt_post_settings',TRUE);
		$post_meta = is_array($post_meta) ? $post_meta  : array();

		$format = !empty( $post_meta['post-format-type'] ) ? $post_meta['post-format-type'] : 'standard';

		$post_meta['enable-lightbox'] = !empty( $enable_lightbox ) ? $enable_lightbox : '';

		$template = 'framework/templates/single/entry-image.php';
		$template_args['post_ID'] = $id;
		$template_args['meta'] = $post_meta;

		$out .= '<!-- Featured Image -->';
		$out .= '<div class="entry-thumb single-preview-img '.$animation.' '.$el_class.'" data-delay="'.$delay.'">';
			ob_start();
			triss_get_template( $template, $template_args );
			$out .= ob_get_clean();

			$out .= '<!-- Post Format -->';
			$out .= '<div class="entry-format">';
				$out .= '<a class="ico-format" href="'.esc_url(get_post_format_link( $format )).'"></a>';
			$out .= '</div><!-- Post Format -->';
		$out .= '</div><!-- Featured Image -->';

		return $out;
	}

	function dt_sc_post_title( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'id' => '',

			'css_animation'  => '',
			'delay'          => '0',			

			'el_class' => ''
		), $attrs ) );

		$out = '';

		if( empty( $id ) ) {
			global $post;
			$id =  $post->ID;
		}

		$template = 'framework/templates/single/no-loop/entry-title.php';
		$template_args['post_ID'] = $id;

		$animation = $this->getCSSAnimation( $css_animation );

		$out .= '<!-- Entry Title -->';
		$out .= '<div class="entry-title '.$animation.' '.$el_class.'" dataa-delay="'.$delay.'">';
			ob_start();
			triss_get_template( $template, $template_args );
			$out .= ob_get_clean();
		$out .= '</div><!-- Entry Title -->';

		return $out;
	}

	function dt_sc_postmeta_group( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'id' => '',
			'blog_meta_position' => '',
			'style' => 'metagroup-space-separator',
			'css_animation'  => '',
			'delay'          => '0',
			'el_class' => '',
		) , $attrs ) );

		$out = '';

		$animation = $this->getCSSAnimation( $css_animation );

		if( empty( $id ) ) {
			global $post;
			$id =  $post->ID;
		}

		$newMEles = array();

		$meta_group_position = (array) vc_param_group_parse_atts( $blog_meta_position );
		$meta_group_position = !empty( $meta_group_position ) ? $meta_group_position : explode( ',', $blog_meta_position );

		if( is_array( $meta_group_position[0] ) ) {
			foreach($meta_group_position as $key => $items) {
				$newMEles[$items['element']] = $items['element'];
			}
		} else {
			foreach($meta_group_position as $item) {
				$newMEles[$item] = $item;
			}
		}

		if( count( $newMEles ) >= 1 ) {

			$out .= '<div class="dt-sc-posts-meta-group '.$style.' '.$animation.' '.$el_class.'" data-delay="'.$delay.'">';

				$template_args['post_ID'] = $id;
				$template_args['post_Style'] = '';

				ob_start();

				foreach( $newMEles as $value ):

					if( $value == 'social_share' ):

						$template = 'framework/templates/single/entry-social.php'; ?>
						<!-- Entry Social Share -->
						<div class="entry-social-share">
							<?php triss_get_template( $template, $template_args ); ?>
						</div><!-- Entry Social Share --><?php

					elseif( $value == 'likes_views' ):

						$template = 'framework/templates/single/entry-likes-views.php'; ?>
						<!-- Entry Likes Views -->
						<div class="entry-likes-views">
							<?php triss_get_template( $template, $template_args ); ?>
						</div><!-- Entry Likes Views --><?php

					elseif( $value == 'comments' ):

						$template = 'framework/templates/single/no-loop/entry-comment.php'; ?>
						<!-- Entry Comment -->
						<div class="entry-comments">
							<?php triss_get_template( $template, $template_args ); ?>
						</div><!-- Entry Comment --><?php

					else:

						$template = 'framework/templates/single/no-loop/entry-'.$value.'.php'; ?>
						<!-- Entry Start -->
						<div class="entry-<?php echo esc_attr($value); ?>">
							<?php triss_get_template( $template, $template_args ); ?>
						</div><!-- Entry End --><?php
					endif;

				endforeach;

				$out .= ob_get_clean();

			$out .= '</div>';
		}

		return $out;
	}

	function dt_sc_post_author( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'id' => '',
			'style' => 'meta-elements-space',

			'css_animation'  => '',
			'delay'          => '0',

			'el_class' => ''
		), $attrs ) );

		$out = '';

		if( empty( $id ) ) {
			global $post;
			$id =  $post->ID;
		}

		$animation = $this->getCSSAnimation( $css_animation );

		$post_meta = get_post_meta($id,'_dt_post_settings',TRUE);
		$post_meta = is_array($post_meta) ? $post_meta  : array();

		$template = 'framework/templates/single/no-loop/entry-author.php';
		$template_args['post_ID'] = $id;
		$template_args['post_Style'] = $post_meta['single-post-style'];

		$out .= '<!-- Entry Author -->';
		$out .= '<div class="entry-author '.$style.' '.$animation.' '.$el_class.'" data-delay="'.$delay.'">';
			ob_start();
			triss_get_template( $template, $template_args );
			$out .= ob_get_clean();
		$out .= '</div><!-- Entry Author -->';

		return $out;
	}

	function dt_sc_post_date( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'id' => '',
			'style' => 'meta-elements-space',
			'css_animation'  => '',
			'delay'          => '0',			
			'el_class' => ''
		), $attrs ) );

		$out = '';

		if( empty( $id ) ) {
			global $post;
			$id =  $post->ID;
		}

		$post_meta = get_post_meta($id,'_dt_post_settings',TRUE);
		$post_meta = is_array($post_meta) ? $post_meta  : array();

		$template = 'framework/templates/single/no-loop/entry-date.php';
		$template_args['post_ID'] = $id;
		$template_args['post_Style'] = $post_meta['single-post-style'];

		$animation = $this->getCSSAnimation( $css_animation );

		$out .= '<!-- Entry Date -->';
		$out .= '<div class="entry-date '.$style.' '.$el_class.' '.$animation.'" data-delay="'.$delay.'">';
			ob_start();
			triss_get_template( $template, $template_args );
			$out .= ob_get_clean();
		$out .= '</div><!-- Entry Date -->';

		return $out;
	}

	function dt_sc_post_comments( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'id' => '',
			'style' => 'meta-elements-space',
			'css_animation'  => '',
			'delay'          => '0',
			'el_class' => ''
		), $attrs ) );

		$out = '';

		if( empty( $id ) ) {
			global $post;
			$id =  $post->ID;
		}

		$post_meta = get_post_meta($id,'_dt_post_settings',TRUE);
		$post_meta = is_array($post_meta) ? $post_meta  : array();

		$template = 'framework/templates/single/no-loop/entry-comment.php';
		$template_args['post_ID'] = $id;
		$template_args['post_Style'] = $post_meta['single-post-style'];

		$animation = $this->getCSSAnimation( $css_animation );		

		$out .= '<!-- Entry Comment -->';
		$out .= '<div class="entry-comments '.$style.' '.$el_class.' '.$animation.'">';
			ob_start();
			triss_get_template( $template, $template_args );
			$out .= ob_get_clean();
		$out .= '</div><!-- Entry Comment -->';

		return $out;
	}

	function dt_sc_post_categories( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'id' => '',
			'style' => 'meta-elements-space',
			'css_animation'  => '',
			'delay'          => '0',
			'el_class' => ''
		), $attrs ) );

		$out = '';

		if( empty( $id ) ) {
			global $post;
			$id =  $post->ID;
		}

		$animation = $this->getCSSAnimation( $css_animation );		

		$post_meta = get_post_meta($id,'_dt_post_settings',TRUE);
		$post_meta = is_array($post_meta) ? $post_meta  : array();

		$template = 'framework/templates/single/no-loop/entry-categories.php';
		$template_args['post_ID'] = $id;
		$template_args['post_Style'] = $post_meta['single-post-style'];

		$out .= '<!-- Entry Categories -->';
		$out .= '<div class="entry-categories '.$style.' '.$el_class.' '.$animation.'" data-delay="'.$delay.'">';
			ob_start();
			triss_get_template( $template, $template_args );
			$out .= ob_get_clean();
		$out .= '</div><!-- Entry Categories -->';

		return $out;
	}

	function dt_sc_post_tags( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'id' => '',
			'style' => 'meta-elements-space',
			'css_animation'  => '',
			'delay'          => '0',
			'el_class' => ''
		), $attrs ) );

		$out = '';

		if( empty( $id ) ) {
			global $post;
			$id =  $post->ID;
		}

		$post_meta = get_post_meta($id,'_dt_post_settings',TRUE);
		$post_meta = is_array($post_meta) ? $post_meta  : array();

		$template = 'framework/templates/single/no-loop/entry-tags.php';
		$template_args['post_ID'] = $id;
		$template_args['post_Style'] = $post_meta['single-post-style'];

		$animation = $this->getCSSAnimation( $css_animation );

		$out .= '<!-- Entry Tags -->';
		$out .= '<div class="entry-tags '.$style.' '.$el_class.' '.$animation.'" data-delay="'.$delay.'">';
			ob_start();
			triss_get_template( $template, $template_args );
			$out .= ob_get_clean();
		$out .= '</div><!-- Entry Tags -->';

		return $out;
	}

	function dt_sc_post_socials( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'id' => '',
			'style' => 'meta-elements-space',
			'css_animation'  => '',
			'delay'          => '0',
			'el_class' => ''
		), $attrs ) );

		$out = '';

		$animation = $this->getCSSAnimation( $css_animation );

		if( empty( $id ) ) {
			global $post;
			$id =  $post->ID;
		}

		$template = 'framework/templates/single/entry-social.php';
		$template_args['post_ID'] = $id;

		$out .= '<!-- Entry Social Share -->';
		$out .= '<div class="entry-social-share '.$style.' '.$el_class.' '.$animation.'" data-delay="'.$delay.'">';
			ob_start();
			triss_get_template( $template, $template_args );
			$out .= ob_get_clean();
		$out .= '</div><!-- Entry Social Share -->';

		return $out;
	}

	function dt_sc_post_likes_views( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'id' => '',
			'style' => 'meta-elements-space',
			'css_animation'  => '',
			'delay'          => '0',
			'el_class' => ''
		), $attrs ) );

		$out = '';
		$animation = $this->getCSSAnimation( $css_animation );

		if( empty( $id ) ) {
			global $post;
			$id =  $post->ID;
		}

		$template = 'framework/templates/single/entry-likes-views.php';
		$template_args['post_ID'] = $id;

		$out .= '<!-- Entry Likes Views -->';
		$out .= '<div class="entry-likes-views '.$style.' '.$el_class.' '.$animation.'" data-delay="'.$delay.'">';
			ob_start();
			triss_get_template( $template, $template_args );
			$out .= ob_get_clean();
		$out .= '</div><!-- Entry Likes Views -->';

		return $out;
	}

	function dt_sc_post_related_article( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'id' => '',
			'css_animation'  => '',
			'delay'          => '0',			
		), $attrs ) );

		$out = '';
		$animation = $this->getCSSAnimation( $css_animation );

		if( empty( $id ) ) {
			global $post;
			$id =  $post->ID;
		}

		$template = 'framework/templates/single/entry-related-article.php';
		$template_args['post_ID'] = $id;

		ob_start();
		$out .= "<div class='{$animation}' data-delay='{$delay}'>";
			triss_get_template( $template, $template_args );
		$out .= ob_get_clean();
		$out .= '</div>';

		return $out;
	}

	function dt_sc_post_navigation( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'id' => '',
			'css_animation'  => '',
			'delay'          => '0',
			'el_class' => ''
		), $attrs ) );

		$out = '';

		if( empty( $id ) ) {
			global $post;
			$id =  $post->ID;
		}

		$template = 'framework/templates/single/entry-navigation.php';
		$template_args['post_ID'] = $id;

		$animation = $this->getCSSAnimation( $css_animation );		

		$out .= '<!-- Entry Navigation -->';
		$out .= '<div class="entry-post-navigation '.$el_class.' '.$animation.'" data-delay="'.$delay.'">';
			ob_start();
			triss_get_template( $template, $template_args );
			$out .= ob_get_clean();
		$out .= '</div><!-- Entry Navigation -->';

		return $out;
	}

	function dt_sc_post_author_bio( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'id' => '',
			'css_animation'  => '',
			'delay'          => '0',
			'el_class' => ''
		), $attrs ) );

		$out = '';

		if( empty( $id ) ) {
			global $post;
			$id =  $post->ID;
		}

		$template = 'framework/templates/single/no-loop/entry-author-bio.php';
		$template_args['post_ID'] = $id;
		$template_args['post_Style'] = '';

		$animation = $this->getCSSAnimation( $css_animation );

		$out .= '<!-- Entry Author Bio -->';
		$out .= '<div class="entry-author-bio '.$el_class.' '.$animation.'" data-delay="'.$delay.'">';
			ob_start();
			triss_get_template( $template, $template_args );
			$out .= ob_get_clean();
		$out .= '</div><!-- Entry Author Bio -->';

		return $out;
	}

	function dt_sc_post_comment_box( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'id' => '',
			'css_animation'  => '',
			'delay'          => '0',			
			'comment_style' => ''
		), $attrs ) );

		$out = '';

		if( empty( $id ) ) {
			global $post;
			$id =  $post->ID;
		}

		$template = 'framework/templates/single/entry-commentbox.php';
		$template_args['post_ID'] = $id;
		$template_args['comment_Style'] = $comment_style;

		$animation = $this->getCSSAnimation( $css_animation );

		ob_start();
		$out .= "<div class='{$animation}' data-delay='{$delay}'>";
			triss_get_template( $template, $template_args );
			$out .= ob_get_clean();
		$out .= '</div>';

		return $out;
	}

	function dt_sc_post_related_posts( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'id' => '',
			'related_title' => '',
			'related_column' => '',
			'related_count' => '',
			'related_excerpt' => '',
			'related_excerpt_length' => '',
			'related_carousel' => '',
			'related_nav_style' => '',

			'css_animation'  => '',
			'delay'          => '0',

			'el_class' => ''
		), $attrs ) );

		$out = '';

		if( empty( $id ) ) {
			global $post;
			$id =  $post->ID;
		}

		$template = 'framework/templates/single/entry-related-posts.php';
		$template_args['post_ID'] = $id;
		$template_args['related_Title'] = $related_title;
		$template_args['related_Column'] = $related_column;
		$template_args['related_Count'] = $related_count;
		$template_args['related_Excerpt'] = $related_excerpt;
		$template_args['related_Excerpt_Length'] = $related_excerpt_length;
		$template_args['related_Carousel'] = $related_carousel;
		$template_args['related_Nav_Style'] = $related_nav_style;

		$animation = $this->getCSSAnimation( $css_animation );		

		$out .= '<!-- Entry Related Posts -->';
		$out .= '<div class="entry-related-posts '.$el_class.' '.$animation.'" data-delay="'.$delay.'">';
			ob_start();
			triss_get_template( $template, $template_args );
			$out .= ob_get_clean();
		$out .= '</div><!-- Entry Related Posts -->';

		return $out;
	}

	function dt_sc_lightbox_image( $attrs, $content = null ) {
		extract ( shortcode_atts ( array (
			'url' => '',
			'title' => '',
			'align' => 'alignnone',
			'css_animation'  => '',
			'delay'          => '0',
			'class' => '',
		), $attrs ) );

		$image = wpb_getImageBySize( array('attach_id' => $url, 'thumb_size' => 'full') );
		$url = $image['thumbnail'];

		$animation = $this->getCSSAnimation( $css_animation );		

		if( !empty( $url ) ):
			if( !empty($class) ):
				$url = str_replace(' class="', ' class="'.$class.' ', $url);
			endif;

			if( !empty($align) ):
				$url = str_replace(' class="', ' class="'.$align.' ', $url);
			endif;

			if( !empty( $animation ) ) {

				$url = str_replace(' class="', ' class="'.$animation.' ', $url);
				$url = str_replace(' class="', 'data-delay="'.$delay.'" class="', $url);
			}

			return '<a href="'.$image['p_img_large'][0].'" title="'.$title.'" class="lightbox-preview-img">'.$url.'</a>';
		endif;
	}

	/**
	 * event lists
	 * @return string
	 */
	function dt_sc_events_list( $attrs, $content = null ){
		extract( shortcode_atts( array( 
			'title' => '',
			'limit' => 3,
			'categories' => ''
		) , $attrs ) );

		global $post; $out = "";

		// select categories
		if(empty($categories)) {
			$cats = get_categories('taxonomy=tribe_events_cat&hide_empty=1');
			$cats = get_terms( array('tribe_events_cat'), array('fields' => 'ids'));
		} else {
			$cats = explode(',', $categories);
		}

		$out = '<div class="dt-sc-events-list-wrapper">';

			if(!empty($title))	$out .= "<h3>{$title}</h3>";

				$events = tribe_get_events( array( 'eventDisplay' => 'list', 'posts_per_page' => $limit,
													'tax_query'=> array( array( 'taxonomy' => 'tribe_events_cat', 'field' => 'term_id', 'terms' => $cats ) ) ));
													
			if($events):							
				foreach($events as $post):
					setup_postdata($post);
					$out .= '<div class="dt-sc-events-list">';
						$out .= '<div class="dt-sc-event-date">';
							$out .= '<h2> <strong>'.tribe_get_start_date($post->ID, false, 'd').'</strong> '.tribe_get_start_date($post->ID, false, 'M').'</h2>';
							$out .= '<p> <span>'.tribe_get_start_date($post->ID, false, 'l').'</span> - '.tribe_get_start_time($post->ID, false, 'h:i').' - '.tribe_get_end_time($post->ID, false, 'h:i').' </p>';
						$out .= '</div>';
						$out .= '<div class="dt-sc-event-title">';
							$out .= '<h5> <a title="'.get_the_title().'" href="'.get_permalink($post->ID).'"> <small> '.tribe_get_organizer($post->ID).' </small> '.get_the_title().' </a> </h5>';
						$out .= '</div>';
						$out .= '<div class="dt-sc-event-duration">';
							$out .= '<h6>'.round((get_post_meta($post->ID, '_EventDuration', true) / 3600), 2).' hrs</h6>';
						$out .= '</div>';
					$out .= '</div>';
				endforeach;
			else:
				$out .= '<div class="dt-sc-warning-box">'.esc_html__('No Events Found','designthemes-core').'</div>';
			endif;	
			wp_reset_postdata();

		$out .= '</div>';

		return $out;
	}

	/**
	 * special events list
	 * @return string
	 */
	function dt_sc_special_events_list( $attrs, $content = null ){
		extract( shortcode_atts( array( 
			'type' => 'type1',
			'limit' => -1,
			'categories' => ''
		) , $attrs ) );

		global $post; $out = "";

		// select categories
		if(empty($categories)) {
			$cats = get_categories('taxonomy=tribe_events_cat&hide_empty=1');
			$cats = get_terms( array('tribe_events_cat'), array('fields' => 'ids'));
		} else {
			$cats = explode(',', $categories);
		}

		$events = tribe_get_events( array( 'eventDisplay' => 'list', 'posts_per_page' => $limit, 'tax_query'=> array( array( 'taxonomy' => 'tribe_events_cat', 'field' => 'term_id', 'terms' => $cats ) ) ));
		if($events): $i = 1;
		
			switch($type):
			
				case 'type1':
				default:
					foreach($events as $post):
						setup_postdata($post);
						$event_id = $post->ID;
		
						$temp_class = "";
						
						if($i == 1) $temp_class = " first";
						if($i == 3) $i = 1; else $i = $i + 1;
						
						$out .= '<div class="dt-sc-one-third column '.$temp_class.'">';
							$out .= '<div class="dt-sc-event type1">';
								 $title = ( strlen(get_the_title()) > 27 ) ? substr(get_the_title(),0,27)."..." : get_the_title();
								 $out .= '<h2 class="entry-title"><a href="'.get_permalink().'">'.$title.'</a></h2>';
								 $out .= '<div class="dt-sc-event-thumb">';
									if(has_post_thumbnail()):
										$attr = array('title' => get_the_title(), 'alt' => get_the_title());
										$out .= get_the_post_thumbnail($post->ID, 'triss-event-list2', $attr);
									else:
										$out .= '<img src="https://place-hold.it/420x275&text='.get_the_title().'" alt="'.get_the_title().'" title="'.get_the_title().'" />';
									endif;
									$out .= '<p class="dt-sc-event-date"><span>'.tribe_get_start_date ( $event_id, true, 'd' ).'</span><br>'.tribe_get_start_date ( $event_id, true, 'M' ).'</p>';
								 $out .= '</div>';
								 $out .= '<div class="dt-sc-event-meta">';
									$out .= '<p class="event-timing"><span class="fas fa-clock"></span>'.tribe_get_start_time ( $event_id, 'h:i a' ).' - '.tribe_get_end_time ( $event_id, 'h:i a' ).'</p>';
									$venue = ( strlen(tribe_get_venue($event_id)) > 18 ) ? substr(tribe_get_venue($event_id),0,18)."..." : tribe_get_venue($event_id);
									$out .= '<p class="events-venue"><span class="fas fa-map-marker-alt"></span>'.$venue.'</p>';
								 $out .= '</div>';
							$out .= '</div>';
						$out .= '</div>';

						if($i == 1) $out .= '<div class="dt-sc-hr-invisible-small"> </div>';

					endforeach;
				break;

				case 'type2':
					foreach($events as $post):
						setup_postdata($post);
						$event_id = $post->ID;

						$temp_class = "";

						if($i == 1) $temp_class = " first";
						if($i == 3) $i = 1; else $i = $i + 1;
						
						$out .= '<div class="dt-sc-one-third column '.$temp_class.'">';
							$out .= '<div class="dt-sc-event type2">';
								 $title = ( strlen(get_the_title()) > 27 ) ? substr(get_the_title(),0,27)."..." : get_the_title();
								 $out .= '<h2 class="entry-title"><a href="'.get_permalink().'">'.$title.'</a></h2>';
								 $out .= '<div class="dt-sc-event-thumb">';
									if(has_post_thumbnail()):
										$attr = array('title' => get_the_title(), 'alt' => get_the_title());
										$out .= get_the_post_thumbnail($post->ID, 'triss-event-list2', $attr);
									else:
										$out .= '<img src="https://place-hold.it/420x275&text='.get_the_title().'" alt="'.get_the_title().'" title="'.get_the_title().'" />';
									endif;
								 $out .= '</div>';
								 $out .= '<div class="dt-sc-event-meta">';
								    $out .= '<p class="dt-sc-event-date"><span>'.tribe_get_start_date ( $event_id, true, 'd' ).'</span>'.tribe_get_start_date ( $event_id, true, 'F' ).'<br>'.tribe_get_start_date ( $event_id, true, 'Y' ).'</p>';
									$venue = ( strlen(tribe_get_venue($event_id)) > 18 ) ? substr(tribe_get_venue($event_id),0,18)."..." : tribe_get_venue($event_id);
									$out .= '<p class="event-timing">'.tribe_get_start_time ( $event_id, 'h:i a' ).' - '.tribe_get_end_time ( $event_id, 'h:i a' ).'<br>'.$venue.'</p>';
								 $out .= '</div>';
							$out .= '</div>';
						$out .= '</div>';

						if($i == 1) $out .= '<div class="dt-sc-hr-invisible-small"> </div>';

					endforeach;
				break;

				case 'type3':
					foreach($events as $post):
						setup_postdata($post);
						$event_id = $post->ID;

						$temp_class = "";

						if($i == 1) $temp_class = " first";
						if($i == 3) $i = 1; else $i = $i + 1;
						
						$out .= '<div class="dt-sc-one-third column '.$temp_class.'">';
							$out .= '<div class="dt-sc-event type3">';
								$out .= '<div class="dt-sc-event-thumb">';
									if(has_post_thumbnail()):
										$attr = array('title' => get_the_title(), 'alt' => get_the_title());
										$out .= get_the_post_thumbnail($post->ID, 'triss-event-list2', $attr);
									else:
										$out .= '<img  src="https://place-hold.it/420x275&text='.get_the_title().'" alt="'.get_the_title().'" title="'.get_the_title().'" />';
									endif;
								    $out .= '<p class="dt-sc-event-date"><span>'.tribe_get_start_date ( $event_id, true, 'd' ).'</span> '.tribe_get_start_date ( $event_id, true, 'F' ).' '.tribe_get_start_date ( $event_id, true, 'Y' ).'</p>';
								$out .= '</div>';
								$out .= '<div class="dt-sc-event-meta">';
								    $out .= '<p class="event-timing"> '.tribe_get_start_time ( $event_id, 'h:i a' ).' - '.tribe_get_end_time ( $event_id, 'h:i a' ).' - '.tribe_get_venue($event_id).'</p>';
								$out .= '</div>';
								$out .= '<div class="dt-sc-clear"></div>';
								$out .= '<h2 class="entry-title"><a href="'.get_permalink().'">'.get_the_title().'</a></h2>';
							$out .= '</div>';
						$out .= '</div>';

						if($i == 1) $out .= '<div class="dt-sc-hr-invisible-small"> </div>';

					endforeach;
				break;

				case 'type4':
					foreach($events as $post):
						setup_postdata($post);
						$event_id = $post->ID;

						$temp_class = "";

						if($i == 1) $temp_class = " first";
						if($i == 3) $i = 1; else $i = $i + 1;
						
						$out .= '<div class="dt-sc-one-third column '.$temp_class.'">';
							$out .= '<div class="dt-sc-event type4">';
								$out .= '<div class="dt-sc-event-thumb">';
									if(has_post_thumbnail()):
										$attr = array('title' => get_the_title(), 'alt' => get_the_title());
										$out .= get_the_post_thumbnail($post->ID, 'triss-event-list2', $attr);
									else:
										$out .= '<img src="https://place-hold.it/420x275&text='.get_the_title().'" alt="'.get_the_title().'" title="'.get_the_title().'" />';
									endif;
									$out .= '<h2 class="entry-title"><a href="'.get_permalink().'">'.get_the_title().'</a></h2>';
								$out .= '</div>';
								$out .= '<p class="dt-sc-event-date"><span>'.tribe_get_start_date ( $event_id, true, 'd' ).'</span> <i>'.tribe_get_start_date ( $event_id, true, 'F' ).', '.tribe_get_start_date ( $event_id, true, 'l' ).' - '.tribe_get_start_time ( $event_id, 'h:i a' ).' - '.tribe_get_end_time ( $event_id, 'h:i a' ).'</i> <br>'.tribe_get_venue($event_id).'</p>';
							$out .= '</div>';
						$out .= '</div>';

						if($i == 1) $out .= '<div class="dt-sc-hr-invisible-small"> </div>';

					endforeach;
				break;

				case 'type5':
					foreach($events as $post):
						setup_postdata($post);
						$event_id = $post->ID;

						$temp_class = "";

						if($i == 1) $temp_class = " first";
						if($i == 2) $i = 1; else $i = $i + 1;
						
						$out .= '<div class="dt-sc-one-half column '.$temp_class.'">';
							$out .= '<div class="dt-sc-event type5">';
								$out .= '<div class="dt-sc-one-half column first">';
								   $out .= '<div class="dt-sc-event-thumb">';
									  if(has_post_thumbnail()):
										  $attr = array('title' => get_the_title(), 'alt' => get_the_title());
										  $out .= get_the_post_thumbnail($post->ID, 'triss-event-list2', $attr);
									  else:
										  $out .= '<img src="https://place-hold.it/420x275&text='.get_the_title().'" alt="'.get_the_title().'" title="'.get_the_title().'" />';
									  endif;
								   $out .= '</div>';
								$out .= '</div>';
								$out .= '<div class="dt-sc-one-half column">';
								   $out .= '<div class="dt-sc-event-meta">';
										$out .= '<p class="dt-sc-event-date"><span>'.tribe_get_start_date ( $event_id, true, 'd' ).'</span> '.tribe_get_start_date ( $event_id, true, 'M' ).' - <i>'.tribe_get_start_time ( $event_id, 'h:i a' ).' - '.tribe_get_end_time ( $event_id, 'h:i a' ).'</i> </p>';
										$out .= '<p class="dt-sc-event-venue">'.tribe_get_venue($event_id).'</p>';
										$out .= '<div class="dt-sc-hr-invisible-xsmall"></div>';
										$title = ( strlen(get_the_title()) > 18 ) ? substr(get_the_title(),0,18)."..." : get_the_title();
										$out .= '<h2 class="entry-title"><a href="'.get_permalink().'">'.$title.'</a></h2>';
										$ecost = tribe_get_formatted_cost($event_id);
										if(!empty($ecost))
											$out .= '<div class="dt-sc-event-cost">'.$ecost.'</div>';
										$out .= '<a href="'.get_permalink().'" class="dt-sc-events-read-more">'.esc_html__('Find out more', 'designthemes-core').'</a>';
								   $out .= '</div>';
								$out .= '</div>';
							$out .= '</div>';
						$out .= '</div>';

						if($i == 1) $out .= '<div class="dt-sc-hr-invisible-small"> </div>';

					endforeach;
				break;
					
			endswitch;
		else:
			$out .= '<div class="dt-sc-warning-box">'.esc_html__('No Events Found','designthemes-core').'</div>';
		endif;	
		wp_reset_postdata();

		return $out;
	}

	/* Map Overlay */
	/**
	 * map overlay
	 * @return string
	 */
	function dt_sc_map_overlay($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
			'class' => ''
		), $attrs ) );

		$out = "<div class='dt-sc-map-overlay {$class}'><div class='container'>";
			$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= "</div></div>";

		return $out;
	}

	/**
	 * map code
	 * @return string
	 */
	function dt_sc_map($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
			'class' => ''
		), $attrs ) );

		$out = "<div class='map {$class}'>";
			$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= "</div>";

		return $out;
	}

	/* Coming Soon */
	/**
	 * down count
	 * @return string
	 */
	function dt_sc_down_count($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'class'  =>  ''
		), $attrs ) );

		$out = "";
		$type = cs_get_option( 'comingsoon-style' );

		if( !cs_get_option( 'show-launchdate' ) ) return;

		$out .= '<div class="downcount '.$class.'" data-date="'.triss_cs_get_option('comingsoon-launchdate', date('m/d/Y')).'" data-offset="'.triss_cs_get_option('comingsoon-timezone', '0').'">';
			$out .= '<div class="dt-sc-counter-wrapper">';
				$out .= '<div class="counter-icon-wrapper">';
					$out .= '<div class="dt-sc-counter-number days">00</div>';
				$out .= '</div>';
				if($type == 'type2')
					$out .= '<h3 class="title">'.esc_html__('Days Left', 'designthemes-core').'</h3>';
				else
					$out .= '<h3 class="title">'.esc_html__('Days', 'designthemes-core').'</h3>';
			$out .= '</div>';
			$out .= '<div class="dt-sc-counter-wrapper">';
				$out .= '<div class="counter-icon-wrapper">';
					$out .= '<div class="dt-sc-counter-number hours">00</div>';
				$out .= '</div>';
				if($type == 'type2')
					$out .= '<h3 class="title">'.esc_html__('Hr.', 'designthemes-core').'</h3>';
				elseif($type == 'type5')
					$out .= '<h3 class="title">'.esc_html__('Hrs', 'designthemes-core').'</h3>';
				else
					$out .= '<h3 class="title">'.esc_html__('Hours', 'designthemes-core').'</h3>';
			$out .= '</div>';
			$out .= '<div class="dt-sc-counter-wrapper">';
				$out .= '<div class="counter-icon-wrapper">';
					$out .= '<div class="dt-sc-counter-number minutes">00</div>';
				$out .= '</div>';
				if($type == 'type2')
					$out .= '<h3 class="title">'.esc_html__('Min.', 'designthemes-core').'</h3>';
				elseif($type == 'type5')
					$out .= '<h3 class="title">'.esc_html__('Mins', 'designthemes-core').'</h3>';
				else
					$out .= '<h3 class="title">'.esc_html__('Minutes', 'designthemes-core').'</h3>';
			$out .= '</div>';
			$out .= '<div class="dt-sc-counter-wrapper last">';
				$out .= '<div class="counter-icon-wrapper">';
					$out .= '<div class="dt-sc-counter-number seconds">00</div>';
				$out .= '</div>';
				if($type == 'type2')
					$out .= '<h3 class="title">'.esc_html__('Sec.', 'designthemes-core').'</h3>';
				elseif($type == 'type5')
					$out .= '<h3 class="title">'.esc_html__('Secs', 'designthemes-core').'</h3>';
				else
					$out .= '<h3 class="title">'.esc_html__('Seconds', 'designthemes-core').'</h3>';
			$out .= '</div>';
		$out .= '</div>';

		return $out;
	}

	/* Horizontal Time Line */
	function dt_sc_horizontal_timeline( $attrs, $content = null ) {
		extract ( shortcode_atts ( array (
			'type' => 'type1',
			'column' => '3',
			'class' => '',
			'css_animation'  => '',
			'delay'          => '0',
		), $attrs ) );

		$entries = array();
		preg_match_all("'\[dt_sc_hr_timeline_entry (.*?)\[/dt_sc_hr_timeline_entry\]'si", $content, $matches);
		if( isset( $matches[1] ) ) {
			$entries = $matches[1];
		}

		if (!function_exists('dt_sc_arr_map')){
			function dt_sc_arr_map($value){ 
				return '[dt_sc_hr_timeline_entry '.$value.'[/dt_sc_hr_timeline_entry]'; 
			}
	    }
	    $entries = array_map("dt_sc_arr_map", $entries);
		#$entries = array_map(function($value){ return '[dt_sc_hr_timeline_entry '.$value.'[/dt_sc_hr_timeline_entry]'; }, $entries);

		$column_class = "";

		switch( $column ):

			case '2':
				$column_class = "column dt-sc-one-half";
			break;

			case '3':
				$column_class = "column dt-sc-one-third";
			break;

			case '4':
				$column_class = "column dt-sc-one-fourth";
			break;									
		endswitch;
		
		$animation = $this->getCSSAnimation( $css_animation );
		$out = "<div class='dt-sc-hr-timeline-section {$type} {$animation} {$class}' data-delay='{$delay}'>";
			$out .= '<div class="dt-sc-hr-timeline-wrapper">';

			$i = 1;

			foreach( $entries as $key => $entry ):
				$temp_class = "";
				if($i == 1) $temp_class = $column_class." first"; else $temp_class = $column_class;
				if($i == $column) $i = 1; else $i = $i + 1;

				$out .= '<div class="'.$temp_class.'">';
				$out .= do_shortcode( $entry );
				$out .= '</div>';
			endforeach;

			$out .= '</div>';
		$out .= '</div>';
		return $out;
	}

	function dt_sc_hr_timeline_entry( $attrs, $content = null ){
		extract ( shortcode_atts ( array (
			'title' => '',
			'subtitle' => '',
			'url' => '',
			'icon_type' => 'icon', #VC
			'iconclass' => '',
			'icon' => 'fa fa-info-circle', #VC
			'image' => '', #VC
			'icon_css_class' => '', #VC
			'class' => ''
		), $attrs ) );

		$out = "<div class='dt-sc-hr-timeline {$class}'>";
			$out .= '<div class="dt-sc-hr-timeline-content">';

				$iconspan = "";
				if( !empty( $icon_type ) ) {
					$icon = "";
					if( $icon_type == 'fontawesome' ) {
						vc_icon_element_fonts_enqueue( "fontawesome" );
						$icon = $iconclass;
						
						if( !empty( $icon ) ) {
							$iconspan =  "<span class='{$icon}'> </span>";
						}
					}

					if( $icon_type == 'css_class' ) {
						$icon = $icon_css_class;

						if( !empty( $icon ) ) {
							$iconspan =  "<span class='{$icon}'> </span>";
						}
					}

					if( $icon_type == 'image' && !empty( $image ) ) {
						$image = wpb_getImageBySize( array( 'attach_id' => $image, 'thumb_size' => 'full' ));
						$image = $image['thumbnail'];

						$iconspan =  '<span class="image-wrapper">'.$image.'</span>';
					}
		
				}

				if($class == 'bottom'):
					$out .= $iconspan;
					$out .= '<div class="dt-sc-hr-timeline-inner-content">';
						$out .= "<h3>{$title}</h3>";
						$out .= '<p>'.DTCoreShortcodesDefination::dtShortcodeHelper ( $content ).'</p>';
					$out .= '</div>';
				endif;
					
				if(!empty($url)):
					$image = wpb_getImageBySize( array( 'attach_id' => $url, 'thumb_size' => 'full' ));
					$image = $image['thumbnail'];					
					$out .= '<div class="dt-sc-hr-timeline-thumb">';
					$out .= $image;							
					$out .= '</div>';
				endif;

				if($class != 'bottom'):
					$out .= '<div class="dt-sc-hr-timeline-inner-content">';
						$out .= "<h3>{$title}</h3>";
						$out .= '<p>'.DTCoreShortcodesDefination::dtShortcodeHelper ( $content ).'</p>';
					$out .= '</div>';
					$out .= $iconspan;
				endif;

				if(!empty($subtitle)):
					$out .= "<h4>{$subtitle}</h4>";
				endif;
				
			$out .= '</div>';
		$out .= '</div>';
		
		return $out;
	}

	/**
	 * Horizontal timeline
	 * @return string
	 */
	function dt_sc_hr_timeline_slider( $attrs, $content = null ) {
		extract ( shortcode_atts ( array (
			'type' => 'type1',
			'items_to_show' => 5,
			'enable_dots' => '',

			'css_animation'  => '',
			'delay'          => '0',

			'class' => ''
		), $attrs ) );

		$out = '';

		$pattern = get_shortcode_regex();
		preg_match_all( '/'. $pattern .'/s', $content, $matches );

		$authors = array();
		foreach( $matches[3] as $a ) {
			array_push( $authors , shortcode_parse_atts($a) );
		}

		$animation = $this->getCSSAnimation( $css_animation );

		if( $type == 'type1' ) {
			$out .= '<div class="dt-sc-hr-timeline-slider '.$animation.' '.$class.'" data-delay="'.$delay.'">';
		        $out .= '<div class="dt-sc-hr-timeline-slider-details-holder timeline-details-for">';
					for( $i = 0; $i < sizeof($matches[5]); $i++ ){
						# Timeline item detail
						$out .= '<div class="dt-sc-timeline-detail">';

							$t = shortcode_parse_atts($matches[3][$i]);
							$image = '';
							if( isset($t['url']) ):
								$image = wpb_getImageBySize( array( 'attach_id' => $t['url'], 'thumb_size' => 'full' ));
								$image = $image['thumbnail'];
							endif;

							$out .= '<div class="dt-sc-timeline-image">'.$image.'</div>';
							$out .= '<div class="dt-sc-timeline-description">'.DTCoreShortcodesDefination::dtShortcodeHelper( $matches[5][$i] ).'</div>';
						$out .= '</div>';
					} 
	  			$out .= '</div>';

	  			$dots_attr = '';
	  			if($enable_dots == 'true') {
	  				$dots_attr = 'data-dots="true"';
	  			}

	  			$items_to_show_attr = 'data-itemstoshow="'.$items_to_show.'"';

				$out .= '<div class="dt-sc-hr-timeline-slider-images-holder timeline-details-nav" '.$dots_attr.' '.$items_to_show_attr.'>';

					foreach( $matches[3] as $attributes ){
	
						$a = shortcode_parse_atts($attributes);
						$title = isset( $a['title'] ) ? $a['title'] : '';
						$subtitle = isset( $a['subtitle'] ) ? $a['subtitle'] : '';
						$iconspan = '<span class="dot"></span>';

						if( !empty( $a['icon_type'] ) ) {
							$icon = "";
							if( $a['icon_type'] == 'fontawesome' && isset( $a['iconclass'] ) ) {

								vc_icon_element_fonts_enqueue( "fontawesome" );
								$icon = $a['iconclass'];
							}

							if( $a['icon_type'] == 'css_class' )
								$icon = $a['icon_css_class'];
							if( !empty( $icon ) )
								$iconspan =  "<span class='{$icon}'> </span>";
						}

						if( isset($title) && isset($subtitle) ):
							$out .= '<div class="dt-sc-timeline-item">';
								$out .=	'<h4>'.$title.'</h4>';
								$out .= $iconspan;
								$out .=	'<h3>'.$subtitle.'</h3>';
							$out .= '</div>';
						endif;
					}
				$out .= '</div>';
			$out .= '</div>';
		} elseif( $type == 'type2' ) {
			$out .= '<div class="dt-sc-hr-timeline-slider '.$class.'">';

		        $out .= '<div class="dt-sc-hr-timeline-slider-details-holder timeline-details-for">';
					for( $i = 0; $i < sizeof($matches[5]); $i++ ){
						# Timeline item detail
						$out .= '<div class="dt-sc-timeline-detail">';
							$out .= DTCoreShortcodesDefination::dtShortcodeHelper($matches[5][$i]);
						$out .= '</div>';
					} 
	  			$out .= '</div>';

	  			$dots_attr = '';
	  			if($enable_dots == 'true') {
	  				$dots_attr = 'data-dots="true"';
	  			}

	  			$items_to_show_attr = 'data-itemstoshow="'.$items_to_show.'"';
				$out .= '<div class="dt-sc-hr-timeline-slider-images-holder timeline-details-nav" '.$dots_attr.' '.$items_to_show_attr.'>';
					foreach( $matches[3] as $attributes ){
						$a = shortcode_parse_atts($attributes);
						$image = '';
						if( isset($a['url']) ):
							$image = wpb_getImageBySize( array( 'attach_id' => $a['url'], 'thumb_size' => 'full' ));
							$image = $image['thumbnail'];
						endif;

						$title = isset( $a['title'] ) ? $a['title'] : '';
						$subtitle = isset( $a['subtitle'] ) ? $a['subtitle'] : '';
						$iconspan = '<span class="dot"></span>';

						if( !empty( $a['icon_type'] ) ) {
							$icon = "";
							if( $a['icon_type'] == 'fontawesome' && isset( $a['iconclass'] ) )
								$icon = $a['iconclass'];
							if( $a['icon_type'] == 'css_class' )
								$icon = $a['icon_css_class'];
							if( !empty( $icon ) )
								$iconspan =  "<span class='{$icon}'> </span>";
						}

						if( isset($title) && isset($subtitle) ):
							$out .= '<div class="dt-sc-timeline-item">';
								$out .= '<div class="dt-sc-timeline-image">'.$image.'</div>';
								$out .= $iconspan;
								$out .=	'<h4>'.$title.'</h4>';
								$out .=	'<h3>'.$subtitle.'</h3>';
								$out .= '<div class="dt-sc-timeline-description">'.$a['excerpt'].'</div>';
							$out .= '</div>';
						endif;
					}
				$out .= '</div>';
			$out .= '</div>';
		} # Type 
		return $out;				
	}

	/* Vertical Time Line */

	/**
	 * vertical timeline
	 * @return string
	 */
	function dt_sc_vertical_timeline($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'type' => 'type1',
			'css_animation'  => '',
			'delay'          => '0',
			'class' => ''
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );

		$out = "<div class='dt-sc-timeline-section {$type} {$animation} {$class}' data-delay='{$delay}'>";
			$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= '</div>';

		return $out;
	}

	/**
	 * vertical timeline entry
	 * @return string
	 */
	function dt_sc_vc_timeline_entry( $attrs,$content = null ){
		extract ( shortcode_atts ( array (
			'title' => '',
			'subtitle' => '',
			'icon_type' => '',
			'icon_class' => '',
			'font_icon' => '',
			'image' => '',
			'link' => '',
			'hover_text' => '',
			'class' => ''
		), $attrs ) );

		$out = "<div class='dt-sc-timeline {$class}'>";
			$out .= '<div class="column dt-sc-one-half">';
				$out .= '<div class="dt-sc-timeline-content">';

					if( $icon_type == 'fontawesome' && !empty($font_icon) )
						$out .= '<div class="dt-sc-timeline-icon-wrapper"> <span class="'.$font_icon.'"> </span> </div>';

					if( $icon_type == 'icon_class' && !empty($icon_class) )
						$out .= '<div class="dt-sc-timeline-icon-wrapper"> <span class="'.$icon_class.'"> </span> </div>';

					if($icon_type == 'image' && !empty($image)):

						//parse link by vc
						$link = ( '||' === $link ) ? '' : $link;
						$link = vc_build_link( $link );
						$a_href = $link['url'];
						$a_title = $link['title'];
						$a_target = !empty($link['target']) ? $link['target'] : '_self';

						$image = wpb_getImageBySize( array( 'attach_id' => $image, 'thumb_size' => 'full' ));
						$image = $image['thumbnail'];

						$out .= '<div class="dt-sc-timeline-image-wrapper">';
						$out .= !empty($a_href) ? "<a href='".$a_href."' title='".$a_title."' target='".$a_target."'>".$image."</a>": $image;
								if(!empty($hover_text)):
									$out .= '<div class="dt-sc-timeline-thumb-overlay">';
										$out .= "<h5>{$hover_text}</h5>";
									$out .= '</div>';
								endif;
						$out .= '</div>';
					endif;

					$out .= '<h2><span>'.$title.'</span>';

					if($subtitle)
						$out .= '<br>'.$subtitle;
					$out .= '</h2>';

					if($content != '')
						$out .= '<p>'.DTCoreShortcodesDefination::dtShortcodeHelper ( $content ).'</p>';

				$out .= '</div>';
			$out .= '</div>';
		$out .= '</div>';
		
		return $out;
	}

	/**
	 * special vertical timeline
	 * @return string
	 */
	function dt_sc_special_vertical_timeline($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'css_animation'  => '',
			'delay'          => '0',
			'class' => ''
		), $attrs ) );

		$animation = $this->getCSSAnimation( $css_animation );

		$out = "<div class='dt-sc-timeline-section dt-sc-vc-special {$animation} {$class}' data-delay='{$delay}'>";
			$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= '</div>';

		return $out;
	}

	/**
	 * special vertical timeline entry
	 * @return string
	 */
	function dt_sc_special_vc_timeline_entry( $attrs,$content = null ){
		extract ( shortcode_atts ( array (
			'icon_type' => 'none',
			'font_icon' => '',
			'icon_class' => '',
			'icon_image' => '',
			'icontitle' => '',
			'title' => '',
			'subtitle' => '',
			'image' => '',
			'hover_text' => '',
			'link' => '',
			'btn_text' => '',
			'btn_link' => '#',
			'class' => ''
		), $attrs ) );

		$out = "<div class='dt-sc-timeline {$class}'>";
			$out .= '<div class="dt-sc-timeline-content">';

				if( $btn_text != '' && $btn_link != '' ):
					$out .= '<div class="dt-sc-timeline-button">';
						$out .= '<a class="dt-sc-button bordered" href="'.$btn_link.'" title="'.$btn_text.'" target="_blank">'.$btn_text.'</a>';
					$out .= '</div>';
				endif;

				if( $icon_type != 'none' ):
					$out .= '<div class="dt-sc-timeline-icon-wrapper">';
						if( $icon_type == 'fontawesome' && !empty($font_icon) ) {
							vc_icon_element_fonts_enqueue( "fontawesome" );
							$out .= '<span class="'.$font_icon.'"> </span>';
						}

						if( $icon_type == 'icon_class' && !empty($icon_class) )
							$out .= '<span class="'.$icon_class.'"> </span>';

						if( $icon_type == 'image' && !empty($icon_image) ):
							$img = wpb_getImageBySize( array( 'attach_id' => $icon_image, 'thumb_size' => 'full' ));
							$img = $img['thumbnail'];
	
							$out .= '<span>'.$img.'</span>';
						endif;

						if( $icontitle )
							$out .= '<h3>'.$icontitle.'</h3>';
					$out .= '</div>';
				endif;

				if( !empty($image) ):
	
					//parse link by vc
					$link = ( '||' === $link ) ? '' : $link;
					$link = vc_build_link( $link );
					$a_href = $link['url'];
					$a_title = $link['title'];
					$a_target = !empty($link['target']) ? $link['target'] : '_self';
	
					$image = wpb_getImageBySize( array( 'attach_id' => $image, 'thumb_size' => 'full' ));
					$image = $image['thumbnail'];
	
					$out .= '<div class="dt-sc-timeline-image-wrapper">';
					$out .= !empty($a_href) ? "<a href='".$a_href."' title='".$a_title."' target='".$a_target."'>".$image."</a>": $image;
							if(!empty($hover_text)):
								$out .= '<div class="dt-sc-timeline-thumb-overlay">';
									$out .= "<h5>{$hover_text}</h5>";
								$out .= '</div>';
							endif;
					$out .= '</div>';
				endif;
	
				$out .= '<div class="dt-sc-timeline-content-wrapper">';
					$out .= '<h2>'.$title.'</h2>';

					if( $subtitle )
						$out .= '<span>'.$subtitle.'</span>';
	
					if($content != '')
						$out .= '<p>'.DTCoreShortcodesDefination::dtShortcodeHelper ( $content ).'</p>';
				$out .= '</div>';

			$out .= '</div>';
		$out .= '</div>';

		return $out;
	}	

	/**
	 * break tag
	 * @return string
	 */
	function dt_sc_br($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'br' => '1'
		), $attrs ) );

		$br = intval( $br );

		$out = "";

		for( $i = 1; $i <= $br; $i++ ) {
			$out .= '<br>';
		}

		return $out;
	}

	/**
	 * menu
	 * @return string
	 */
	static function dt_theme_sc_wp_menu() {
		echo '<ul class="menu-links">';
		$args = array(
			'depth' 		=> 0,
			'title_li' 		=> '',
			'echo' 			=> 0,
			'post_type' 	=> 'page',
			'post_status' 	=> 'publish'
		);

		$pages = wp_list_pages($args);

		if ($pages) {
			echo wp_kses( $pages, array(
				'li' => array(
					'id'    => array(),
					'class' => array(),					
				),
				'a' => array(
					'id'     => array(),
					'href'   => array(),
					'title'  => array(),
					'class'  => array(),
					'rel'    => array(),
					'target' => array()
				)
			) );
		}
		echo '</ul>';
	}

	function dt_sc_custom_menu($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'class'  =>  ''
		), $attrs ) );

		$out = "";

		$args = array(
			'container'      => false,
			'menu_id'        => false,
			'menu_class'     => 'menu-links '.$class,
			'fallback_cb'    => 'DTCoreShortcodesDefination::dt_theme_sc_wp_menu',
			'theme_location' => 'shortcode-menu',
			'echo'           => false,
			'depth'          => 0
		);
		$out .= wp_nav_menu( $args ); 

		return $out;
	}

	/**
	 * sociable
	 * @return string
	 */
	function dt_sc_sociable($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'socials' => 'delicious,dribbble,facebook',
			'style'   =>  '',
			'target'  => '_blank',
			'class'   =>  ''
		), $attrs ) );

		# Available Socials
		/**
		 * delicious deviantart digg dribbble envelope-open
		 * facebook flickr google-plus comment instagram
		 * lastfm linkedin picasa myspace pinterest
		 * reddit rss skype stumbleupon technorati
		 * tumblr twitter viadeo vimeo yahoo youtube
		 **/

		$out = $list = '';

		$social_opts = array();

		$socials = explode(",", $socials );
		$sociable_flds = cs_get_option( 'sociable_fields' );

		if( is_array( $sociable_flds ) ) {

			foreach( $sociable_flds as $sf):
				$social_opts[$sf['sociable_fields_type']] = $sf['sociable_fields_url'];
			endforeach;

			foreach( $socials as $social ){
				if( array_key_exists( $social, $social_opts ) ) {
					$list .= '<li class="'.esc_attr( $social ).'"><a target="'.$target.'" href="'.esc_attr( $social_opts[$social] ).'"></a></li>';
				}
			}

			$out = !empty( $list ) ? "<ul class='dt-sc-sociable {$style} {$class}'>".$list.'</ul>' : '';
		}

		return $out;
	}

	/**
	 * social
	 * @return string
	 */
	function dt_sc_social($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'class' => ''
		), $attrs ) );

		$sociables = array('fa-dribbble' => 'dribble', 'fa-flickr' => 'flickr', 'fa-github' => 'github', 'fa-pinterest' => 'pinterest','fa-twitter' => 'twitter', 'fa-youtube' => 'youtube', 'fa-android' => 'android', 'fa-dropbox' => 'dropbox', 'fa-instagram' => 'instagram', 'fa-windows' => 'windows', 'fa-apple' => 'apple', 'fa-facebook' => 'facebook', 'fa-google-plus' => 'google', 'fa-linkedin' => 'linkedin', 'fa-skype' => 'skype', 'fa-tumblr' => 'tumblr', 'fa-vimeo-square' => 'vimeo', 'fa-behance' => 'behance');

		$s = $out = "";
		foreach ( $sociables as $key => $value ) {
			if(is_array($attrs) && array_key_exists($value, $attrs) && $attrs[$value] != '')
				$s .= '<li><a class="fa '.$key.'" href="'.$attrs[$value].'" title="'.ucfirst($value).'"></a></li>';
		}
		$s = ! empty ( $s ) ? "<ul class='dt-sc-team-social {$class}'>$s</ul>" : "";
		$out .= $s;

		return $out;
	}

	function dt_sc_video_manager($attrs, $content = null ){
		extract( shortcode_atts( array(
			'css_animation'  => '',
			'delay'          => '0',			
		), $attrs ) );
		
		if(empty($content))
			return '';

		$animation = $this->getCSSAnimation( $css_animation );
			
		preg_match_all( '/dt_sc_video_item([^\]]+)/i', $content, $matches, PREG_OFFSET_CAPTURE );
		$first = $matches[0][0][0];
		$first = str_replace("dt_sc_video_item","dt_sc_video_first_item",$first);
		
		$out = "<div class='wpb_column vc_col-sm-8 rs_col-sm-12 vc_col-md-12 vc_col-lg-8 {$animation}' data-delay='{$delay}'>";
			$out .= DTCoreShortcodesDefination::dtShortcodeHelper ('['.$first.'/]');
		$out .= '</div>';
		
		$out .= "<div class='wpb_column vc_col-sm-4 rs_col-sm-12 vc_col-md-12 vc_col-lg-4 dt-sc-video-manager-right {$animation}' data-delay='{$delay}'>";
			$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= '</div>';
		
		return $out;		
	}
	
	function dt_sc_video_item($attrs, $content = null ){
		extract( shortcode_atts( array(
			'title' => '',
			'subtitle' => '',
			'link' => '',
			'image' => ''
		), $attrs ) );
		
		$full = wp_get_attachment_image_src( $image, 'full' );
		$full = $full[0];	
		
		$image = wp_get_attachment_image_src( $image, 'thumbnail' );
		$image = $image[0];
					
		$image = !empty($image) ? '<img src="'.esc_url($image).'" data-full="'.esc_attr($full).'"/>' : '<img src="https://place-hold.it/136x81"/>';
		
		$out = '<div class="dt-sc-video-item" data-link="'.esc_attr($link).'">';
		$out .= '	<div class="dt-sc-vitem-thumb">'.$image.'</div>';
		$out .= '	<div class="dt-sc-vitem-detail">';
		$out .= '		<h2>'.esc_html($title).'</h2>';
		$out .= '		<p>'.esc_html($subtitle).'</p>';		
		$out .= '	</div>';		
		$out .= '</div>';
		return $out;
	}

	function dt_sc_video_first_item($attrs, $content = null ){
		extract( shortcode_atts( array(
			'title' => '',
			'subtitle' => '',
			'link' => '',
			'image' => ''
		), $attrs ) );
		
		$image = wp_get_attachment_image_src( $image, 'full' );
		$image = $image[0];
		
		$image = !empty($image) ? '<img src="'.esc_url($image).'"/>' : '<img src="https://place-hold.it/1040x500"/>';		
		
		$out = '<div class="dt-sc-video-wrapper">';
		$out .=		$image;
		$out .= '	<div class="video-overlay">';
		$out .= '		<div class="video-overlay-inner">';
		$out .= '			<a href="'.esc_url($link).'"><span class="icon icon-play"></span></a>';
		$out .= '			<h2>'.esc_html($title).'</h2>';
		$out .= '			<p>'.esc_html($subtitle).'</p>';		
		$out .= '		</div>';
		$out .= '	</div>';				
		$out .= '</div>';
		return $out;
	}

	function dt_sc_gitem_post_format( $atts ) {
		return '{{ dt_post_format:' . http_build_query( (array) $atts ) . ' }}';
	}

	function dt_sc_gitem_post_tag( $atts ) {
		return '{{ dt_post_tag:' . http_build_query( (array) $atts ) . ' }}';
	}

	function dt_sc_gitem_post_comment( $atts ) {
		return '{{ dt_post_comment:' . http_build_query( (array) $atts ) . ' }}';
	}

	function dt_sc_gitem_post_category( $atts ) {

		return '{{ dt_post_category:' . http_build_query( (array) $atts ) . ' }}';
	}
	
	/**
	 * notfound message
	 * @return string
	 */
	static function dt_sc_notfound_msg( $attrs, $content = null ) {

		extract ( shortcode_atts ( array (
			'title1' => '',
			'title2' => '',
			'subtitle' => '',
			'class' => ''
		), $attrs ) );

		$out = "<div class='error-box square {$class}'>";
			$out .= '<div class="error-box-inner">';
				$out .= '<h3>'.$title1.'</h3>';
				$out .= '<h2>'.$title2.'</h2>';
				$out .= '<h4>'.$subtitle.'</h4>';
			$out .= '</div>';	
		$out .= "</div>";

		return $out;
	}
	
	/**
	 * carousel wrapper
	 * @return string
	 */
	function dt_sc_ad_carousel_wrapper( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'visible' => '3',
			'scroll' => '1',
			'auto' => '',
			'animation' => 'scroll',
			'navigation' => 'true',
			'pager' => 'false',
			'css_animation'  => '',
			'delay'          => '0',
			'class' => ''
		), $atts));

		$out = $nav = $pagger = "";


		$out .= '<div class="dt-sc-carousel-wrapper dt_carousel" data-visible="'.$visible.'" data-scroll="'.$scroll.'" data-auto="'.$auto.'" data-animation="'.$animation.'">';
			$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= '</div>';

		if($navigation == 'true') {
			$nav = '<div class="dt-carousel-navigation">'
							.'<div class="carousel-prv-arrow"><a class="prev-arrow" href="#"><span class="fas fa-angle-left"> </span></a></div>'
							.'<div class="carousel-next-arrow"><a class="next-arrow" href="#"><span class="fas fa-angle-right"> </span></a></div>'
						.'</div>';
		}

		if($pager == 'true') {
			$pagger = '<div class="dt-carousel-pagination"></div>';
		}

		$animation = $this->getCSSAnimation( $css_animation );

		return '<div class="carousel_items '.$class.' '.$animation.'" data-delay="'.$delay.'">'
					.$out
					.$nav
					.$pagger
				.'</div>';
	}

	function dt_sc_testimonial_carousel_special($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'items_to_show' => 5,
			'enable_dots' => '',			
			'css_animation'  => '',
			'delay'          => '0',
			'class' => ''
		), $attrs ) );

		$pattern = get_shortcode_regex();
		preg_match_all( '/'. $pattern .'/s', $content, $matches );

		$authors = array();
		foreach( $matches[3] as $a ) {
			array_push( $authors , shortcode_parse_atts($a) );
		}

		$animation = $this->getCSSAnimation( $css_animation );

		$out = '<div class="dt-sc-special-testimonial '.$animation.' '.$class.'" data-delay="'.$delay.'">';

	        $out .= '<div class="dt-sc-special-testimonial-details-holder testimonial-details-for">';
	        		foreach( $matches[5] as $content ){
	        			$out .= '<div class="dt-sc-testimonial-description">'.$content.'</div>';
	        		} 
	  		$out .= '</div>';
	  		
	  		$dots_attr = '';
	  		if($enable_dots == 'true') {
	  			$dots_attr = 'data-dots="true"';
	  		}

	  		$items_to_show_attr = 'data-itemstoshow="'.$items_to_show.'"';

			$out .= '<div class="dt-sc-special-testimonial-images-holder testimonial-details-nav" '.$dots_attr.' '.$items_to_show_attr.'>';

					foreach( $matches[3] as $attributes ){

						$a = shortcode_parse_atts($attributes);

						$name = isset( $a['name'] ) ? $a['name'] : '';
						$role = isset( $a['role'] ) ? '<small>'.$a['role'].'</small>' : '';

						$image = '';
						if( isset($a['image']) ):
							$image = wpb_getImageBySize( array( 'attach_id' => $a['image'], 'thumb_size' => 'full' ));
							$image = $image['thumbnail'];
						endif;	

						if( isset($a['image']) && isset($name) ):
							$out .= '<div class="dt-sc-testimonial-image">';
								$out .= $image;
								$out .= '<div class="dt-sc-testimonial-author">';
									$out .=	'<cite>'.$name.$role.'</cite>';
									if(isset($a['ratings']) && !empty($a['ratings'])) {
										$out .= '<span class="ratings '.$a['ratings'].'"></span>';
									}
								$out .= '</div>';
							$out .= '</div>';
						endif;
					}

			$out .= '</div>';
		$out .= '</div>';

		return $out;
	}
	
	/**
	 * responsive google map
	 * @return string
	 */
	function dt_sc_google_map( $attrs, $content = null ) {

		extract ( shortcode_atts ( array (
			'map_type' => '',
			'map_style' => '',
			'custom_map_style' => '',
			'map_width' => '',
			'map_height' => '',
			'map_zoom_level' => '',
			'map_street_view_control' => '',
			'map_type_control' => '',
			'map_zoom_control' => '',
			'map_scale_control' => '',
			'map_scroll_wheel' => '',
			'map_draggable' => '',
			'map_markers' => '',

			'css_animation'  => '',
			'delay'          => '0',			
		), $attrs ) );
		
		if( isset( $_COOKIE['dtPrivacyGoogleMapsDisabled'] ) ) {
			$out = '<div class="responsive-map">';
				$out .= '<div class="dt-sc-warning-box">'.esc_html__('Maps were disabled by the visitor on this site.', 'designthemes-core').'</div>';
			$out .= '</div>';
			
			return $out;
		}

		$api_key = cs_get_option( 'google-map-key' );
		$api_key = ( isset( $api_key ) && $api_key != '' ) ? $api_key : '';

		$api_url = 'http://maps.googleapis.com';
		if( is_ssl() ) {
			$api_url = 'https://maps-api-ssl.google.com';
		}

		$api_url .= '/maps/api/js';
		$api_url = add_query_arg( array( 'key' => $api_key ) , $api_url );

		wp_enqueue_script( 'google-map', $api_url, array('jquery'), null, false );
		wp_enqueue_script( 'jquery.gmap',  plugin_dir_url ( __FILE__ ) . 'js/jquery.gmap.js', array('jquery','google-map'), null, false );

		$mapid = rand();
		$lat = 'null'; $long = 'null';

		// If width or height were specified in the shortcode, extract them too
    	$dimensions = '';
    	if(isset($attrs['map_height']))
        	$dimensions .= 'height:' . $attrs['map_height'] . ';';
    	if(isset($attrs['map_width']))
	        $dimensions .= 'width:' . $attrs['map_width'] . ';';

	    $map_street_view_control = ( $map_street_view_control == 'enable' ) ? 'true' : 'false';
	    $map_type_control = ( $map_type_control == 'enable' ) ? 'true' : 'false';
	    $map_zoom_control = ( $map_zoom_control == 'enable' ) ? 'true' : 'false';
	    $map_scale_control = ( $map_scale_control == 'enable' ) ? 'true' : 'false';
	    $map_scroll_wheel = ( $map_scroll_wheel == 'enable' ) ? 'true' : 'false';
	    $map_draggable = ( $map_draggable == 'enable' ) ? 'true' : 'false';

	    // Map Style
	    $style = $map_style;
	    if( $style == 'custom' ) {

	    	if( !empty( $custom_map_style ) ) {
	    		$style = '[{ "stylers": [{"hue": "' . $custom_map_style . '" } ] } ]';
	    	} else {
	    		$style = '';
	    	}
	    } else {
		    switch ($style) {
		        case '1':
		            $style = '[{"stylers":[{"featureType":"all"}]}]';
		            break;
		        case '2':
		            $style = '[{"stylers":[{"featureType":"all"},{"saturation":-100},{"gamma":0.50},{"lightness":30}]}]';
		            break;
		        case '3':
		            $style = '[{"stylers":[{"invert_lightness":true},{"visibility":"on"}]}]';
		            break;
		        case '4':
		            $style = '[{"stylers":[{"invert_lightness":true},{"hue":"#0000b0"},{"saturation":-30}]}]';
		            break;
		        case '5':
		            $style = '[{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]},{"featureType":"landscape","stylers":[{"color":"#f2e5d4"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}]';
		            break;
		        case '6':
		            $style = '[{"stylers":[{"lightness":10},{"gamma":1.2},{"saturation":-20},{"visibility":"on"},{"weight":0.1},{"hue":"#00ccff"}]}]';
		            break;
		        case '7':
		            $style = '[{"stylers":[{"saturation":-20},{"visibility":"on"},{"hue":"#00ccff"},{"invert_lightness":true},{"lightness":5}]}]';
		            break;
		        case '8':
		            $style = '[{"stylers":[{"saturation":-20},{"visibility":"on"},{"lightness":5},{"hue":"#ff004c"},{"gamma":1.45}]}]';
		            break;
		        case '9':
		            $style = '[{"featureType":"water","stylers":[{"color":"#021019"}]},{"featureType":"landscape","stylers":[{"color":"#08304b"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#0c4152"},{"lightness":5}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#0b434f"},{"lightness":25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#0b3d51"},{"lightness":16}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#000000"},{"lightness":13}]},{"featureType":"transit","stylers":[{"color":"#146474"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#144b53"},{"lightness":14},{"weight":1.4}]}]';
		            break;
		        case '10':
		            $style = '[{"stylers":[{"visibility":"on"},{"saturation":-30},{"hue":"#ccff00"},{"lightness":-20},{"gamma":1},{"weight":0.1},{"invert_lightness":true}]}]';
		            break;
		        case '11':
		            $style = '[{"stylers":[{"hue":"#00ccff"},{"saturation":5},{"lightness":-20}]}]';
		            break;
		        case '12':
		            $style = '[{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"hue":149},{"saturation":-78},{"lightness":0}]},{"featureType":"road.highway","stylers":[{"hue":-31},{"saturation":-40},{"lightness":2.8}]},{"featureType":"poi","elementType":"label","stylers":[{"visibility":"off"}]},{"featureType":"landscape","stylers":[{"hue":163},{"saturation":-26},{"lightness":-1.1}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"hue":3},{"saturation":-24.24},{"lightness":-38.57}]}]';
		            break;
		        case '13':
		            $style = '[{"stylers":[{"gamma":1.58},{"saturation":30},{"weight":0.1}]}]';
		            break;
		        case '14':
		            $style = '[{"stylers":[{"invert_lightness":true},{"weight":0.1},{"hue":"#00ffa2"},{"visibility":"on"},{"saturation":-120},{"lightness":10},{"gamma":1.2}]}]';
		            break;
		        case '15':
		            $style = '[{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#00ccff"},{"weight":0.1},{"saturation":80}]},{"featureType":"road.local","elementType": "geometry","stylers":[{"visibility":"on"},{"lightness":30}]},{"featureType":"transit","stylers":[{"hue":"#0077ff"},{"lightness":100},{"color":"#141480"},{"visibility":"simplified"},{ "saturation":-30},{"gamma":0.96},{"invert_lightness":true}]},{"featureType":"administrative.neighborhood","stylers":[{"invert_lightness":true},{"visibility":"on"}]},{"featureType": "road.highway.controlled_access","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","stylers":[{"weight":0.1}]},{"featureType":"road.local","stylers":[{ "visibility":"off"}]},{"featureType":"administrative","stylers":[{"invert_lightness":true},{"hue":"#00ff66"},{"saturation":30},{"lightness":-20},{"gamma":1.91}]},{"stylers":[{ "weight":0.1}]}]';
		            break;
		        case '16':
		            $style = '[{"featureType":"road","stylers":[{"visibility":"on"}]},{"featureType":"water","stylers":[{"visibility":"off"}]},{"featureType":"administrative","stylers":[{ "weight":0.9}]}]';
		            break;
		        case '17':
		            $style = '[{"stylers":[{"hue":"#ffd500"},{"lightness":-30}]}]';
		            break;
		        case '18':
		            $style = '[{"featureType":"road","stylers":[{"hue":"#e6ff00"}]},{"featureType":"road","stylers":[{"visibility":"on" },{"weight":0.1},{"lightness":10},{"gamma":0.96}]},{ "featureType":"administrative","elementType":"labels.icon","stylers":[{"visibility":"simplified"},{"weight":0.1}]},{"stylers":[{"hue":"#0019ff"},{"lightness":10},{"gamma":0.96}]},{ "stylers":[{"gamma":0.96},{"weight":0.1}]},{"featureType":"administrative","stylers":[{"color":"#328080"}]}]';
		            break;
		        case '19':
		            $style = '[{"featureType":"road","stylers":[{"lightness":-10},{"weight":0.1},{"hue":"#008000"}]},{"stylers":[{"saturation":30},{"lightness":-10}]}]';
		            break;
		        case '20':
		            $style = '[{"stylers":[{"visibility":"on"},{"weight":0.9},{"hue":"#005eff"},{"lightness":-10},{"gamma":1.2}]}]';
		            break;
		        case '21':
		            $style = '[{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#aee2e0"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#abce83"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#769E72"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#7B8758"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"color":"#EBF4A4"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#8dab68"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#5B5B3F"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ABCE83"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#A4C67D"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#9BBF72"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#EBF4A4"}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#87ae79"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#7f2200"},{"visibility":"off"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"visibility":"on"},{"weight":4.1}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#495421"}]},{"featureType":"administrative.neighborhood","elementType":"labels","stylers":[{"visibility":"off"}]}]';
		            break;
		        case '22':
		            $style = '[{"featureType":"administrative","stylers":[{"visibility":"on"}]},{"featureType":"poi","stylers":[{"visibility":"on"}]},{"featureType":"road","stylers":[{"visibility":"on"}]},{"featureType":"water","stylers":[{"visibility":"on"}]},{"featureType":"transit","stylers":[{"visibility":"on"}]},{"featureType":"landscape","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","stylers":[{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"water","stylers":[{"color":"#84afa3"},{"lightness":52}]},{"stylers":[{"saturation":-77}]},{"featureType":"road"}]';
		            break;
		        case '23':
		            $style = '[{"featureType":"water","elementType":"all","stylers":[{"hue":"#87bcba"},{"saturation":-37},{"lightness":-17},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"hue":"#4f6b46"},{"saturation":-23},{"lightness":-61},{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"hue":"#d38bc8"},{"saturation":-55},{"lightness":13},{"visibility":"on"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"hue":"#ffa200"},{"saturation":100},{"lightness":-22},{"visibility":"on"}]},{"featureType":"road.local","elementType":"all","stylers":[{"hue":"#d38bc8"},{"saturation":-55},{"lightness":-31},{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#f69d94"},{"saturation":84},{"lightness":9},{"visibility":"on"}]},{"featureType":"administrative","elementType":"all","stylers":[{"hue":"#d38bc8"},{"saturation":45},{"lightness":36},{"visibility":"on"}]},{"featureType":"administrative.country","elementType":"all","stylers":[{"hue":"#d38bc8"},{"saturation":45},{"lightness":36},{"visibility":"on"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"hue":"#d38bc8"},{"saturation":45},{"lightness":36},{"visibility":"on"}]},{"featureType":"poi.government","elementType":"all","stylers":[{"hue":"#d38bc8"},{"saturation":35},{"lightness":-19},{"visibility":"on"}]},{"featureType":"poi.school","elementType":"all","stylers":[{"hue":"#d38bc8"},{"saturation":-6},{"lightness":-17},{"visibility":"on"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"hue":"#b2ba70"},{"saturation":-19},{"lightness":-25},{"visibility":"on"}]}]';
		            break;
		        case '24':
		            $style = '[{"featureType":"water","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":-78},{"lightness":67},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"on"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"on"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#e9ebed"},{"saturation":-90},{"lightness":-8},{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":10},{"lightness":69},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"hue":"#2c2e33"},{"saturation":7},{"lightness":19},{"visibility":"on"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":-2},{"visibility":"on"}]}]';
		            break;
		        case '25':
		            $style = '[{"stylers":[{"saturation":-100},{"gamma":1}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"saturation":50},{"gamma":0},{"hue":"#50a5d1"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#333333"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"weight":0.5},{"color":"#333333"}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"gamma":1},{"saturation":50}]}]';
		            break;
		        case '26':
		            $style = '[{"featureType":"water","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"landscape","stylers":[{"color":"#f2f2f2"}]},{"featureType":"road","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]}]';
		            break;
		        case '27':
		            $style = '[{"featureType":"water","elementType":"all","stylers":[{"hue":"#1CB2BD"},{"saturation":53},{"lightness":-44},{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"hue":"#1CB2BD"},{"saturation":40}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#BBDC00"},{"saturation":80},{"lightness":-20},{"visibility":"on"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"on"}]}]';
		            break;
		        case '28':
		            $style = '[{"featureType":"administrative","stylers":[{"visibility":"on"}]},{"featureType":"poi","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"water","stylers":[{"color":"#84afa3"},{"lightness":52}]},{"stylers":[{"saturation":-17},{"gamma":0.36}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#3f518c"}]}]';
		            break;
		        case '29':
		            $style = '[{"featureType":"water","elementType":"geometry","stylers":[{"color":"#193341"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#2c5a71"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#29768a"},{"lightness":-37}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#406d80"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#406d80"}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#3e606f"},{"weight":2},{"gamma":0.84}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"weight":0.6},{"color":"#1a3541"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#2c5a71"}]}]';
		            break;
		        case '30':
		            $style = '[{"featureType":"landscape","stylers":[{"hue":"#00dd00"}]},{"featureType":"road","stylers":[{"hue":"#dd0000"}]},{"featureType":"water","stylers":[{"hue":"#000040"}]},{"featureType":"poi.park","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","stylers":[{"hue":"#ffff00"}]},{"featureType":"road.local","stylers":[{"visibility":"off"}]}]';
		            break;
		        case '31':
		            $style = '[{"featureType":"landscape","stylers":[{"hue":"#FFE100"},{"saturation":34.48275862068968},{"lightness":-1.490196078431353},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FF009A"},{"saturation":-2.970297029703005},{"lightness":-17.815686274509815},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FFE100"},{"saturation":8.600000000000009},{"lightness":-4.400000000000006},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#00C3FF"},{"saturation":29.31034482758622},{"lightness":-38.980392156862735},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#0078FF"},{"saturation":0},{"lightness":0},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#00FF19"},{"saturation":-30.526315789473685},{"lightness":-22.509803921568633},{"gamma":1}]}]';
		            break;
		        case '32':
		            $style = '[{"featureType":"landscape","stylers":[{"hue":"#FFA800"},{"saturation":0},{"lightness":0},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#53FF00"},{"saturation":-73},{"lightness":40},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FBFF00"},{"saturation":0},{"lightness":0},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#00FFFD"},{"saturation":0},{"lightness":30},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#00BFFF"},{"saturation":6},{"lightness":8},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#679714"},{"saturation":33.4},{"lightness":-25.4},{"gamma":1}]}]';
		            break;
		        case '33':
		            $style = '[{"featureType":"landscape","stylers":[{"hue":"#FFAD00"},{"saturation":50.2},{"lightness":-34.8},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FFAD00"},{"saturation":-19.8},{"lightness":-1.8},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FFAD00"},{"saturation":72.4},{"lightness":-32.6},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FFAD00"},{"saturation":74.4},{"lightness":-18},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#00FFA6"},{"saturation":-63.2},{"lightness":38},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#FFC300"},{"saturation":54.2},{"lightness":-14.4},{"gamma":1}]}]';
		            break;
		        case '34':
		            $style = '[{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill"},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#7dcdcd"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]}]';
		            break;
		        case '35':
		            $style = '[{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#b5cbe4"}]},{"featureType":"landscape","stylers":[{"color":"#efefef"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#83a5b0"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#bdcdd3"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e3eed3"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}]';
		            break;
		        case '36':
		            $style = '[{"featureType":"water","stylers":[{"color":"#19a0d8"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"weight":6}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#e85113"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efe9e4"},{"lightness":-40}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#efe9e4"},{"lightness":-20}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"lightness":-100}]},{"featureType":"road.highway","elementType":"labels.icon"},{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape","stylers":[{"lightness":20},{"color":"#efe9e4"}]},{"featureType":"landscape.man_made","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"lightness":-100}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"hue":"#11ff00"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"hue":"#4cff00"},{"saturation":58}]},{"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#f0e4d3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#efe9e4"},{"lightness":-25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#efe9e4"},{"lightness":-10}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"simplified"}]}]';
		            break;
		        case '37':
		            $style = '[{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]},{"featureType":"landscape","stylers":[{"color":"#f2e5d4"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}]';
		            break;
		        case '38':
		            $style = '[{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#b5cbe4"}]},{"featureType":"landscape","stylers":[{"color":"#efefef"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#83a5b0"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#bdcdd3"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e3eed3"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}]';
		            break;
		        case '39':
		            $style = '[{"stylers":[{"hue":"#dd0d0d"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]}]';
		            break;
		        case '40':
		            $style = '[{"featureType":"water","elementType":"geometry","stylers":[{"color":"#ffdfa6"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#b52127"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#c5531b"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#74001b"},{"lightness":-10}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#da3c3c"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#74001b"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#da3c3c"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"#990c19"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#74001b"},{"lightness":-8}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#6a0d10"},{"visibility":"on"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#ffdfa6"},{"weight":0.4}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]}]';
		            break;
		        case '41':
		            $style = '[{"elementType":"geometry","stylers":[{"hue":"#ff4400"},{"saturation":-68},{"lightness":-4},{"gamma":0.72}]},{"featureType":"road","elementType":"labels.icon"},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"hue":"#0077ff"},{"gamma":3.1}]},{"featureType":"water","stylers":[{"hue":"#00ccff"},{"gamma":0.44},{"saturation":-33}]},{"featureType":"poi.park","stylers":[{"hue":"#44ff00"},{"saturation":-23}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"hue":"#007fff"},{"gamma":0.77},{"saturation":65},{"lightness":99}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"gamma":0.11},{"weight":5.6},{"saturation":99},{"hue":"#0091ff"},{"lightness":-86}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"lightness":-48},{"hue":"#ff5e00"},{"gamma":1.2},{"saturation":-23}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"saturation":-64},{"hue":"#ff9100"},{"lightness":16},{"gamma":0.47},{"weight":2.7}]}]';
		            break;
		        case '42':
		            $style = '[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#cf3737"},{"saturation":"100"},{"lightness":"71"},{"gamma":"7.79"}]},{"featureType":"road","elementType":"labels.text","stylers":[{"invert_lightness":true}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#413f3e"},{"lightness":17},{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#070707"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"invert_lightness":true}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"invert_lightness":true}]},{"featureType":"road.highway.controlled_access","elementType":"labels.text","stylers":[{"invert_lightness":true}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"invert_lightness":true},{"gamma":"2.93"}]},{"featureType":"road.arterial","elementType":"labels.text.stroke","stylers":[{"weight":"0.01"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#dba714"},{"lightness":"-12"},{"visibility":"on"},{"saturation":"-92"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"invert_lightness":true}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"weight":"1.70"},{"gamma":"1.87"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19},{"visibility":"on"}]},{"featureType":"transit","elementType":"labels","stylers":[{"visibility":"on"},{"invert_lightness":true}]},{"featureType":"transit","elementType":"labels.text","stylers":[{"invert_lightness":true},{"visibility":"on"}]},{"featureType":"transit","elementType":"labels.text.fill","stylers":[{"gamma":"0.00"},{"lightness":"67"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#dba714"},{"lightness":17}]}]';
		            break;
		        case '43':
		            $style = '[{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}]';
		            break;
		        case '44':
		            $style = '[{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"saturation":-100},{"lightness":20}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"on"},{"saturation":-100},{"lightness":40}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"saturation":-10},{"lightness":30}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":-60},{"lightness":10}]},{"featureType":"landscape.natural","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":-60},{"lightness":60}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"},{"saturation":-100},{"lightness":60}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"},{"saturation":-100},{"lightness":60}]}]';
		            break;
		        case '45':
		            $style = '[{"featureType":"water","elementType":"geometry","stylers":[{"color":"#333739"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#2ecc71"}]},{"featureType":"poi","stylers":[{"color":"#2ecc71"},{"lightness":-7}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#2ecc71"},{"lightness":-28}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#2ecc71"},{"visibility":"on"},{"lightness":-15}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#2ecc71"},{"lightness":-18}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#2ecc71"},{"lightness":-34}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#333739"},{"weight":0.8}]},{"featureType":"poi.park","stylers":[{"color":"#2ecc71"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#333739"},{"weight":0.3},{"lightness":10}]}]';
		            break;
		        case '46':
		            $style = '[{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#165c64"},{"saturation":34},{"lightness":-69},{"visibility":"on"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"hue":"#b7caaa"},{"saturation":-14},{"lightness":-18},{"visibility":"on"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"hue":"#cbdac1"},{"saturation":-6},{"lightness":-9},{"visibility":"on"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#8d9b83"},{"saturation":-89},{"lightness":-12},{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#d4dad0"},{"saturation":-88},{"lightness":54},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#bdc5b6"},{"saturation":-89},{"lightness":-3},{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#bdc5b6"},{"saturation":-89},{"lightness":-26},{"visibility":"on"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"hue":"#c17118"},{"saturation":61},{"lightness":-45},{"visibility":"on"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"hue":"#8ba975"},{"saturation":-46},{"lightness":-28},{"visibility":"on"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"hue":"#a43218"},{"saturation":74},{"lightness":-51},{"visibility":"simplified"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":0},{"lightness":100},{"visibility":"simplified"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":0},{"lightness":100},{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"labels","stylers":[{"hue":"#ffffff"},{"saturation":0},{"lightness":100},{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":0},{"lightness":100},{"visibility":"off"}]},{"featureType":"administrative","elementType":"all","stylers":[{"hue":"#3a3935"},{"saturation":5},{"lightness":-57},{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"hue":"#cba923"},{"saturation":50},{"lightness":-46},{"visibility":"on"}]}]';
		            break;
		        case '47':
		            $style = '[{"featureType":"water","elementType":"geometry","stylers":[{"color":"#004358"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#1f8a70"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#1f8a70"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#fd7400"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#1f8a70"},{"lightness":-20}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#1f8a70"},{"lightness":-17}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"visibility":"on"},{"weight":0.9}]},{"elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#1f8a70"},{"lightness":-10}]},{},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#1f8a70"},{"weight":0.7}]}]';
		            break;
		        case '48':
		            $style = '[{"featureType":"administrative","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"water","stylers":[{"color":"#abbaa4"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#3f518c"}]},{"featureType":"road.highway","stylers":[{"color":"#ad9b8d"}]}]';
		            break;
		        case '49':
		            $style = '[{"stylers":[{"hue":"#ff8800"},{"gamma":0.4}]}]';
		            break;
		        case '50':
		            $style = '[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#425a68"},{"visibility":"on"}]}]';
		            break;
		        default:
		            $style = '[{"stylers":[{"featureType":"all"}]}]';
		            break;
		    }
		}

		// Markers
		$markers = '[]';
		if( !empty( $map_markers ) ) {

			$map_markers = (array) vc_param_group_parse_atts( $map_markers );
			$count = count( $map_markers );

			$markers  = '[';

			foreach( $map_markers as $key => $value ) {

				$key++;

				if( !empty( $value['marker_latitude'] ) && ( !empty( $value['marker_longitude'] ) ) ) {

					$markers .= '{';

						$markers .= 'flat: true,';
						$markers .= 'key:"'.$key.'",';
						$markers .= 'latitude:"'.$value['marker_latitude'].'",'; 
						$markers .= 'longitude:"'.$value['marker_longitude'].'",';

						if( array_key_exists( 'marker_content', $value )) {
							$content = rawurldecode( base64_decode( strip_tags( $value['marker_content'] ) ) );
							if( !empty( $content ) ) {
								$popup = ( $value['popup'] == 'hidden' ) ? 'false' : 'true';
								$markers .= 'popup:'.$popup.',';
								$markers .= 'html:"'.$content.'",';
							}
						}

						if( $value['marker_icon'] == 'custom' &&  isset( $value['custom_marker_icon'] ) ) {
							$icon = wp_get_attachment_image_src( $value['custom_marker_icon'], 'full' );
							$icon = $icon[0];
							$markers .= 'icon: { image:"'.$icon.'" }';
						} else{
							$icon = plugins_url('designthemes-core-features').'/shortcodes/images/markers/'.$value['marker_icon'];
							$markers .= 'icon: { image:"'.$icon.'" },';
						}

					$markers .= '}';
				}

				$markers .= ( $count > $key ) ? ',' : '';
			}
			$markers .= ']';			
		}

		$animation = $this->getCSSAnimation( $css_animation );
		ob_start();

		echo '<div id="responsive_map-'.$mapid.'" class="responsive-map '.$animation.'" data-delay="'.$delay.'" style="'.$dimensions.'">';
		echo '</div>';?>
		<script type="text/javascript">
			jQuery(document).ready(function($){

				var mapdiv = jQuery("#responsive_map-<?php echo esc_js( $mapid ); ?>");
				mapdiv.gMap({
					maptype: google.maps.MapTypeId.<?php echo esc_js( strtoupper( $attrs['map_type'] ) ); ?>,
					zoom: <?php echo esc_js( $map_zoom_level ); ?>,
					latitude: <?php echo esc_js( $lat ); ?>,
					longitude: <?php echo esc_js( $long ); ?>,
					streetViewControl:<?php echo esc_js( $map_street_view_control ); ?>,
					mapTypeControl:<?php echo esc_js( $map_type_control ); ?>,
					zoomControl:<?php echo esc_js( $map_zoom_control ); ?>,
					scaleControl:<?php echo esc_js( $map_scale_control ); ?>,
					scrollwheel:<?php echo esc_js( $map_scroll_wheel );?>,
					draggable:<?php echo esc_js( $map_draggable );?>,
					styles:<?php echo apply_filters( 'js_escape', $style );?>,
					markers: <?php echo apply_filters( 'js_escape', $markers ); ?>,
					panControl: true,
					overviewMapControl:true,
				});
			});
		</script><?php	
		return ob_get_clean();
	}

	/**
	 * form map switcher
	 * @return string
	 */
	function dt_sc_form_map_switcher( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'text1' => '',
			'text2' => '',
			'css_animation'  => '',
			'delay'          => '0',
			'class' => ''
		), $atts));

		$out = $switch = $matches[] = '';

		$pattern = get_shortcode_regex();
		preg_match_all( '/'. $pattern .'/s', $content, $matches );

		$switch = '<div class="map-form-switcher">';
			$switch .= '<div class="switcher-bg">';
				$switch .= '<span class="switcher-text">'.$text1.'</span>';
				$switch .= '<span class="switcher-toggle">';
					$switch .= '<span class="icon"></span>';
				$switch .= '</span>';
				$switch .= '<span class="switcher-text">'.$text2.'</span>';
			$switch .= '</div>';
		$switch .= '</div>';

		if( array_key_exists( 0, $matches[0] ) ):
			$out .= '<div class="dt-sc-switcher-front">';
				$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $matches[0][0] );
			$out .= '</div>';
		endif;

		if( array_key_exists( 1, $matches[0] ) ):
			$out .= '<div class="dt-sc-switcher-back">';
				$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $matches[0][1] );
			$out .= '</div>';
		endif;

		$animation = $this->getCSSAnimation( $css_animation );

		return '<div class="dt-sc-map-form-holder '.$class.' '.$animation.'" data-delay="'.$delay.'">' .$switch .$out .'</div>';
	}	

	/**
	 * dt_sc_working_hours : Working Hours Wrap
	 * @return string
	 */
	function dt_sc_working_hours( $attrs, $content = null ){
		extract ( shortcode_atts ( array ( 
			'text' => '',
			'css_animation'  => '',
			'delay'          => '0',
			'class' => ''
		), $attrs ) );
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$animation = $this->getCSSAnimation( $css_animation );

		
		$text = !empty( $text ) ? "<p>{$text}</p>" : "";
		return "<div class='dt-working-hours $animation $class' data-delay='{$delay}'><ul>{$content}</ul>{$text}</div>";
	}

	/**
	 * dt_sc_work_hour : Working Hour
	 * @return string
	 */
	function dt_sc_work_hour( $attrs, $content = null ){
		extract ( shortcode_atts ( array ( 'day' => '','time'=>''), $attrs ) );
		return "<li><strong>{$day} :</strong><span>{$time}</span></li>";
	}	

	/**
	 * view count
	 * @return string
	 */
	function dt_sc_post_view_count($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'post_id' => ''
		), $attrs ) );

		$post_meta = get_post_meta ( $post_id, '_dt_post_settings', TRUE );
		$post_meta = is_array ( $post_meta ) ? $post_meta : array ();

		$v = array_key_exists("view_count", $post_meta) && !empty( $post_meta['view_count'] ) ?  $post_meta['view_count'] : 0;
		$v = $v + 1;
		$post_meta['view_count'] = $v;

		update_post_meta( $post_id, '_dt_post_settings', $post_meta );

		return $v;
	}

	/**
	 * like count
	 * @return string
	 */
	function dt_sc_post_like_count($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'post_id' => ''
		), $attrs ) );

		$post_meta = get_post_meta ( $post_id, '_dt_post_settings', TRUE );
		$post_meta = is_array ( $post_meta ) ? $post_meta : array ();

		$v = array_key_exists("like_count",$post_meta) && !empty( $post_meta['like_count'] ) ?  $post_meta['like_count'] : '0';

		return $v;
	}

	/**
	 * post social share
	 * @return string
	 */
	function dt_sc_post_social_share($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'post_id' => ''
		), $attrs ) );

		$out = '<div class="share">';
			$out .= '<span>'.esc_html__('Share', 'designthemes-core').'</span>';
			$link = get_permalink( $post_id );
			$link = rawurlencode( $link );
  
			$title = get_the_title( $post_id );
			$title = urlencode($title);

			$out .= '<ul class="dt-share-list">';
				$out .= '<li><a href="https://www.facebook.com/sharer.php?u='.$link.'&amp;t='.$title.'" class="fab fa-facebook-f" target="_blank"></a></li>';
				$out .= '<li><a href="https://twitter.com/share?text='.$title.'&amp;url='.$link.'" class="fab fa-twitter" target="_blank"></a></li>';
				$out .= '<li><a href="https://plus.google.com/share?url='.$link.'" class="fab fa-google-plus-g" target="_blank"></a></li>';
				$out .= '<li><a href="https://pinterest.com/pin/create/button/?url='.$link.'&media='.get_the_post_thumbnail_url($post_id, 'full').'" class="fab fa-pinterest" target="_blank"></a></li>';
			$out .= '</ul>';
		$out .= '</div>';

		return $out;
	}	
	
	/**
	 * privacy policy link
	 * @return link
	 */
	function dt_sc_privacy_policy_link( $attrs = array() , $content = "") {	

		$page_id = get_option('wp_page_for_privacy_policy');
		$url	 = get_permalink($page_id);
		$content = !empty($content) ?  $content : get_the_title($page_id);
		$link	 = "<a href='{$url}'>{$content}</a>";

		return $link;
	}

	function dt_sc_privacy_disable_google_tracking( $attrs = array() , $content = "") {	
		$content = !empty($content) ?  $content : __('Click to enable/disable google analytics tracking.', 'designthemes-core');
		$cookie  = "dtPrivacyGoogleTrackingDisabled";
		
		$checked = ' checked="checked"';
		if( isset( $_COOKIE[$cookie] ) )
			$checked = '';

		$out = '<div class="dt-toggle-switch">';
			$out .= '<label>';
				$out .= '<input type="checkbox" '.$checked.' id="'.$cookie.'" name="'.$cookie.'" class="'.$cookie.'">';
				$out .= '<span>'.$content.'</span>';
			$out .= '</label>';
		$out .= '</div>';

		return $out;
	}

	function dt_sc_privacy_disable_google_webfonts( $attrs = array() , $content = "") {
		$content = !empty($content) ?  $content : __('Click to enable/disable google webfonts.', 'designthemes-core');
		$cookie  = "dtPrivacyGoogleWebfontsDisabled";

		$checked = ' checked="checked"';
		if( isset( $_COOKIE[$cookie] ) )
			$checked = '';

		$out = '<div class="dt-toggle-switch">';
			$out .= '<label>';
				$out .= '<input type="checkbox" '.$checked.' id="'.$cookie.'" name="'.$cookie.'" class="'.$cookie.'">';
				$out .= '<span>'.$content.'</span>';
			$out .= '</label>';
		$out .= '</div>';

		return $out;
	}

	function dt_sc_privacy_disable_google_maps( $attrs = array() , $content = "") {	
		$content = !empty($content) ?  $content : __('Click to enable/disable google maps.', 'designthemes-core');
		$cookie  = "dtPrivacyGoogleMapsDisabled";

		$checked = ' checked="checked"';
		if( isset( $_COOKIE[$cookie] ) )
			$checked = '';

		$out = '<div class="dt-toggle-switch">';
			$out .= '<label>';
				$out .= '<input type="checkbox" '.$checked.' id="'.$cookie.'" name="'.$cookie.'" class="'.$cookie.'">';
				$out .= '<span>'.$content.'</span>';
			$out .= '</label>';
		$out .= '</div>';

		return $out;
	}

	function dt_sc_privacy_disable_video_embeds( $attrs = array() , $content = "") {	
		$content = !empty($content) ?  $content : __('Click to enable/disable video embeds.', 'designthemes-core');
		$cookie  = "dtPrivacyVideoEmbedsDisabled";

		$checked = ' checked="checked"';
		if( isset( $_COOKIE[$cookie] ) )
			$checked = '';

		$out = '<div class="dt-toggle-switch">';
			$out .= '<label>';
				$out .= '<input type="checkbox" '.$checked.' id="'.$cookie.'" name="'.$cookie.'" class="'.$cookie.'">';
				$out .= '<span>'.$content.'</span>';
			$out .= '</label>';
		$out .= '</div>';

		return $out;
	}
}
new DTCoreShortcodesDefination();?>