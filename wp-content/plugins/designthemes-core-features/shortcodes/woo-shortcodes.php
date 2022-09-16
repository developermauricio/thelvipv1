<?php
class DTCoreWooShortcodesDefination {
	
	function __construct() {

		add_shortcode ( 'dt_sc_product_images_default', array ( $this, 'dt_sc_product_images_default' ) );
		add_shortcode ( 'dt_sc_product_images_carousel', array ( $this, 'dt_sc_product_images_carousel' ) );
		add_shortcode ( 'dt_sc_product_images_list', array ( $this, 'dt_sc_product_images_list' ) );
		add_shortcode ( 'dt_sc_product_images_360viewer', array ( $this, 'dt_sc_product_images_360viewer' ) );
		add_shortcode ( 'dt_sc_product_summary_nav_bar', array ( $this, 'dt_sc_product_summary_nav_bar' ) );
		add_shortcode ( 'dt_sc_product_summary', array ( $this, 'dt_sc_product_summary' ) );
		add_shortcode ( 'dt_sc_product_tabs', array ( $this, 'dt_sc_product_tabs' ) );
		add_shortcode ( 'dt_sc_product_tabs_exploded', array ( $this, 'dt_sc_product_tabs_exploded' ) );
		add_shortcode ( 'dt_sc_product_upsell_products', array ( $this, 'dt_sc_product_upsell_products' ) );
		add_shortcode ( 'dt_sc_product_related_products', array ( $this, 'dt_sc_product_related_products' ) );

		add_shortcode ( 'dt_sc_products', array ( $this, 'dt_sc_products' ) );

		add_shortcode ( 'dt_sc_shop_menu_icon', array ( $this, 'dt_sc_shop_menu_icon' ) );
		
	}

	function dt_sc_shortcodeHelper($content = null) {
		$content = do_shortcode ( shortcode_unautop ( $content ) );
		$content = preg_replace ( '#^<\/p>|^<br \/>|<p>$#', '', $content );
		$content = preg_replace ( '#<br \/>#', '', $content );
		return trim ( $content );
	}

	function dt_sc_product_images_default( $attrs, $content = null ) {

		$attrs = shortcode_atts ( array (), $attrs, 'dt_sc_product_images_default' );


		$output = '';
	
		ob_start();
		do_action( 'woocommerce_before_single_product_summary' );
		$woocommerce_before_single_product_summary = ob_get_clean();

		$output .= $woocommerce_before_single_product_summary;

		return $output;

	}

	function dt_sc_product_images_carousel( $attrs, $content = null ) {

		$attrs = shortcode_atts ( array (
					
					'product_id'                       => '',
					'include_featured_image'           => 'false',
					'include_product_labels'           => 'false',
					'enable_thumb_enlarger'            => 'false',
					'class'                            => '',
					
					'carousel_effect'                  => '',
					'carousel_slidesperview'           => 1,
					'carousel_loopmode'                => '',
					'carousel_mousewheelcontrol'       => '',
					'carousel_verticaldirection'       => '',
					'carousel_bulletpagination'        => '',
					'carousel_thumbnailpagination'     => '',
					'carousel_thumbnail_position'      => '',
					'carousel_slidesperview_thumbnail' => 1,
					'carousel_arrowpagination'         => '',
					'carousel_arrowpagination_type'    => '',
					'carousel_scrollbar'               => '',
					'carousel_spacebetween'            => ''

				), $attrs, 'dt_sc_product_images_carousel' );


		$output = '';
	
		if($attrs['product_id'] == '' && is_singular('product')) {
			global $post;
			$attrs['product_id'] = $post->ID;
		}

		if($attrs['product_id'] != '') {

			$media_carousel_attributes = array ();

			array_push($media_carousel_attributes, 'data-carouseleffect="'.$attrs['carousel_effect'].'"');
			array_push($media_carousel_attributes, 'data-carouselslidesperview="'.$attrs['carousel_slidesperview'].'"');
			array_push($media_carousel_attributes, 'data-carouselloopmode="'.$attrs['carousel_loopmode'].'"');
			array_push($media_carousel_attributes, 'data-carouselmousewheelcontrol="'.$attrs['carousel_mousewheelcontrol'].'"');
			array_push($media_carousel_attributes, 'data-carouselverticaldirection="'.$attrs['carousel_verticaldirection'].'"');
			array_push($media_carousel_attributes, 'data-carouselbulletpagination="'.$attrs['carousel_bulletpagination'].'"');
			array_push($media_carousel_attributes, 'data-carouselthumbnailpagination="'.$attrs['carousel_thumbnailpagination'].'"');
			array_push($media_carousel_attributes, 'data-carouselthumbnailposition="'.$attrs['carousel_thumbnail_position'].'"');
			array_push($media_carousel_attributes, 'data-carouselslidesperviewthumbnail="'.$attrs['carousel_slidesperview_thumbnail'].'"');
			array_push($media_carousel_attributes, 'data-carouselarrowpagination="'.$attrs['carousel_arrowpagination'].'"');
			array_push($media_carousel_attributes, 'data-carouselscrollbar="'.$attrs['carousel_scrollbar'].'"');
			array_push($media_carousel_attributes, 'data-carouselspacebetween="'.$attrs['carousel_spacebetween'].'"');

			if(!empty($media_carousel_attributes)) {
				$media_carousel_attributes_string = implode(' ', $media_carousel_attributes);
			}

			$product = wc_get_product( $attrs['product_id'] );

			$gallery_holder_class = '';
			if($attrs['carousel_thumbnailpagination'] == 'true' && ($attrs['carousel_thumbnail_position'] == 'left' || $attrs['carousel_thumbnail_position'] == 'right')) {
				$gallery_holder_class = 'dt-sc-product-vertical-thumb';
			}
			$gallery_holder_thumb_class = '';
			if($attrs['carousel_thumbnail_position'] == 'left' || $attrs['carousel_thumbnail_position'] == 'right') {
				$gallery_holder_thumb_class = 'dt-sc-product-vertical-thumb-'.$attrs['carousel_thumbnail_position'];
			}			

			$output .= '<div class="dt-sc-product-image-gallery-holder '.$attrs['class'].' '.$gallery_holder_class.' '.$gallery_holder_thumb_class.'">';

				// Gallery Images
				$output .= '<div class="dt-sc-product-image-gallery-container swiper-container" '.$media_carousel_attributes_string.'>';

			    	if($attrs['enable_thumb_enlarger'] == 'true') {
						$output .= '<div class="dt-sc-product-image-gallery-thumb-enlarger">A</div>';
					}

			    	if($attrs['include_product_labels'] == 'true') {

						ob_start();
						triss_woo_show_product_additional_labels();
						$product_sale_flash = ob_get_clean();

						$output .= $product_sale_flash;

					}
						
				    $output .= '<div class="dt-sc-product-image-gallery swiper-wrapper">';

	    				if($attrs['include_featured_image'] == 'true') {
							
							$output .= '<div class="dt-sc-product-image swiper-slide">';

								$attachment_id = $product->get_image_id();

								$image_size               = apply_filters( 'woocommerce_gallery_image_size', 'woocommerce_single' );
								$full_size                = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
								$full_src                 = wp_get_attachment_image_src( $attachment_id, $full_size );
								$image                    = wp_get_attachment_image( $attachment_id, $image_size, false, array(
									'title'                   => get_post_field( 'post_title', $attachment_id ),
									'data-caption'            => get_post_field( 'post_excerpt', $attachment_id ),
									'data-src'                => $full_src[0],
									'data-large_image'        => $full_src[0],
									'data-large_image_width'  => $full_src[1],
									'data-large_image_height' => $full_src[2],
									'class'                   => 'wp-post-image',
								) );

								$output .= $image;

							$output .= '</div>';

						}

						$attachment_ids = $product->get_gallery_image_ids();

	                    if(is_array($attachment_ids) && !empty($attachment_ids)) {
	                        $i = 0;
	                        foreach($attachment_ids as $attachment_id) {

                               	$output .= '<div class="dt-sc-product-image swiper-slide">';

									$image_size               = apply_filters( 'woocommerce_gallery_image_size', 'woocommerce_single' );
									$full_size                = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
									$full_src                 = wp_get_attachment_image_src( $attachment_id, $full_size );
									$image                    = wp_get_attachment_image( $attachment_id, $image_size, false, array(
										'title'                   => get_post_field( 'post_title', $attachment_id ),
										'data-caption'            => get_post_field( 'post_excerpt', $attachment_id ),
										'data-src'                => $full_src[0],
										'data-large_image'        => $full_src[0],
										'data-large_image_width'  => $full_src[1],
										'data-large_image_height' => $full_src[2],
										'class'                   => '',
									) );

									$output .= $image;

                               	$output .= '</div>';

                                $i++;

	                        }
	                    }

		    		$output .= '</div>';

					$output .= '<div class="dt-sc-product-image-gallery-pagination-holder">';

						if($attrs['carousel_bulletpagination'] == 'true') {
							$output .= '<div class="dt-sc-product-image-gallery-bullet-pagination"></div>';	
						}

						if($attrs['carousel_scrollbar'] == 'true') {
							$output .= '<div class="dt-sc-product-image-gallery-scrollbar"></div>';	
						}											

						if($attrs['carousel_arrowpagination'] == 'true') {
							$output .= '<div class="dt-sc-product-image-gallery-arrow-pagination '.$attrs['carousel_arrowpagination_type'].'">';
								$output .= '<a href="#" class="dt-sc-product-image-gallery-arrow-prev">'.esc_html__('Prev', 'designthemes-core').'</a>';
								$output .= '<a href="#" class="dt-sc-product-image-gallery-arrow-next">'.esc_html__('Next', 'designthemes-core').'</a>';
							$output .= '</div>';
						}
					
					$output .= '</div>';
		   		$output .= '</div>';

		   		if($attrs['carousel_thumbnailpagination'] == 'true') {

			   		// Gallery Thumb
					$output .= '<div class="dt-sc-product-image-gallery-thumb-container swiper-container">';
					    $output .= '<div class="dt-sc-product-image-gallery-thumb swiper-wrapper">';

		    				if($attrs['include_featured_image'] == 'true') {
								$featured_image_id = get_post_thumbnail_id($attrs['product_id']);
								$image_details = wp_get_attachment_image_src($featured_image_id, 'woocommerce_single');
								
								$output .= '<div class="swiper-slide"><img src="'.esc_url($image_details[0]).'" title="'.esc_html__('Gallery Thumb', 'designthemes-core').'" alt="'.esc_html__('Gallery Thumb', 'designthemes-core').'" /></div>';
							}

		                    if(is_array($attachment_ids) && !empty($attachment_ids)) {
		                        $i = 0;
		                        foreach($attachment_ids as $attachment_id) {
	                                $image_details = wp_get_attachment_image_src($attachment_id, 'woocommerce_single');
	                               	$output .= '<div class="swiper-slide"><img src="'.esc_url($image_details[0]).'" alt="'.esc_html__('Gallery Thumb', 'designthemes-core').'" /></div>';
	                                $i++;
		                        }
		                    }

			    		$output .= '</div>';
			    	$output .= '</div>';

			    }

		   	$output .= '</div>';
			
		} else {
		
			$output .= esc_html__('Please provide product id to display corresponding data!', 'designthemes-core');
			
		}

		return $output;

	}

	function dt_sc_product_images_list( $attrs, $content = null ) {

		$attrs = shortcode_atts ( array (
					
					'product_id'             => '',
					'include_featured_image' => 'false',
					'include_product_labels' => 'false',
					'enable_thumb_enlarger'  => 'false',
					'columns'                => 2,
					'enable_grid_space'      => 'false',
					'class'                  => '',
					
				), $attrs, 'dt_sc_product_images_list' );


		$output = '';
	
		if($attrs['product_id'] == '' && is_singular('product')) {
			global $post;
			$attrs['product_id'] = $post->ID;
		}

		if($attrs['product_id'] != '') {

			$product = wc_get_product( $attrs['product_id'] );	

			$output .= '<div class="dt-sc-product-image-gallery-holder '.$attrs['class'].'">';

				// Gallery Images
				$output .= '<div class="dt-sc-product-image-gallery-container">';

					if($attrs['columns'] == 2) {
						$column_class = 'column dt-sc-one-half';
					} else if($attrs['columns'] == 1) {
						$column_class = 'column dt-sc-one-column';
					}

					if($attrs['enable_grid_space'] == 'false') {
						$column_class .= ' no-space';
					}

			    	if($attrs['enable_thumb_enlarger'] == 'true') {
						$output .= '<div class="dt-sc-product-image-gallery-thumb-enlarger"></div>';
					}

			    	if($attrs['include_product_labels'] == 'true') {

						ob_start();
						triss_woo_show_product_additional_labels();
						$product_sale_flash = ob_get_clean();

						$output .= $product_sale_flash;

					}
						
				    $output .= '<div class="dt-sc-product-image-gallery">';

				    	$i = 1;

	    				if($attrs['include_featured_image'] == 'true') {

							$featured_image_id = get_post_thumbnail_id($attrs['product_id']);
						
							$output .= '<div class="dt-sc-product-image '.$column_class.' first">';

								$attachment_id = $product->get_image_id();

								$image_size               = apply_filters( 'woocommerce_gallery_image_size', 'full' );
								$full_size                = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
								$full_src                 = wp_get_attachment_image_src( $attachment_id, $full_size );
								$image                    = wp_get_attachment_image( $attachment_id, $image_size, false, array(
									'title'                   => get_post_field( 'post_title', $attachment_id ),
									'data-caption'            => get_post_field( 'post_excerpt', $attachment_id ),
									'data-src'                => $full_src[0],
									'data-large_image'        => $full_src[0],
									'data-large_image_width'  => $full_src[1],
									'data-large_image_height' => $full_src[2],
									'class'                   => 'wp-post-image',
								) );

								$output .= $image;

							$output .= '</div>';

							$i = 2;

						}

						$attachment_ids = $product->get_gallery_image_ids();

	                    if(is_array($attachment_ids) && !empty($attachment_ids)) {
	                        foreach($attachment_ids as $attachment_id) {

								if($i == 1) { $first_class = 'first';  } else { $first_class = ''; }
								if($i == $attrs['columns']) { $i = 1; } else { $i = $i + 1; }	

                               	$output .= '<div class="dt-sc-product-image '.$column_class.' '.$first_class.'">';

									$image_size               = apply_filters( 'woocommerce_gallery_image_size', 'full' );
									$full_size                = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
									$full_src                 = wp_get_attachment_image_src( $attachment_id, $full_size );
									$image                    = wp_get_attachment_image( $attachment_id, $image_size, false, array(
										'title'                   => get_post_field( 'post_title', $attachment_id ),
										'data-caption'            => get_post_field( 'post_excerpt', $attachment_id ),
										'data-src'                => $full_src[0],
										'data-large_image'        => $full_src[0],
										'data-large_image_width'  => $full_src[1],
										'data-large_image_height' => $full_src[2],
										'class'                   => '',
									) );

									$output .= $image;

                               	$output .= '</div>';

	                        }
	                    }

		    		$output .= '</div>';


		   		$output .= '</div>';

		   	$output .= '</div>';
			
		} else {
		
			$output .= esc_html__('Please provide product id to display corresponding data!', 'designthemes-core');
			
		}

		return $output;

	}

	function dt_sc_product_images_360viewer( $attrs, $content = null ) {

		$attrs = shortcode_atts ( array (
					
					'product_id'          => '',
					'enable_popup_viewer' => 'false',
					'source'              => '',
					'class'               => '',

				), $attrs, 'dt_sc_product_images_360viewer' );


		$output = '';
	
		if($attrs['product_id'] == '' && is_singular('product')) {
			global $post;
			$attrs['product_id'] = $post->ID;
		}

		if($attrs['product_id'] != '') {

			if($attrs['enable_popup_viewer'] == 'true') {

				$viewer360_gallery_ids = get_post_meta ( $attrs['product_id'], '_360viewer_gallery', true );
				$viewer360_gallery_ids = (isset($viewer360_gallery_ids['product-360view-gallery']) && $viewer360_gallery_ids['product-360view-gallery'] != '') ? explode(',', $viewer360_gallery_ids['product-360view-gallery']) : array ();

				if(isset($viewer360_gallery_ids[0])) {

					$output .= '<div class="dt-sc-product-image-360-viewer-holder dt-sc-product-image-360-popup-viewer-holder '.$attrs['class'].'">';

						$output .= '<div class="dt-sc-product-image-360-viewer-enlarger">A</div>';

						if($attrs['source'] != 'single-product') {

							$image = wp_get_attachment_image( $viewer360_gallery_ids[0], 'full', false );
							$output .= $image;

						}

						$output .= '<div class="dt-sc-product-image-360-viewer-container">';

							$output .= '<div class="dt-sc-product-image-360-viewer" data-count="'.count($viewer360_gallery_ids).'">';

			                    if(is_array($viewer360_gallery_ids) && !empty($viewer360_gallery_ids)) {
			                    	$i = 1;
			                        foreach($viewer360_gallery_ids as $viewer360_gallery_id) {

										$image = wp_get_attachment_image( $viewer360_gallery_id, 'full', false, array (
													'data-index' => $i,
												) );

										$output .= $image;

										$i++;

			                        }
			                    }

					   		$output .= '</div>';

					   		$output .= '<div class="dt-sc-product-image-360-viewer-close">'.esc_html__( 'Close', 'designthemes-core' ).'</div>';

					   	$output .= '</div>';

					$output .= '</div>';

				}

			} else {

				$output .= '<div class="dt-sc-product-image-360-viewer-holder '.$attrs['class'].'">';

					$output .= '<div class="dt-sc-product-image-360-viewer-container">';

						$viewer360_gallery_ids = get_post_meta ( $attrs['product_id'], '_360viewer_gallery', true );
						$viewer360_gallery_ids = (isset($viewer360_gallery_ids['product-360view-gallery']) && $viewer360_gallery_ids['product-360view-gallery'] != '') ? explode(',', $viewer360_gallery_ids['product-360view-gallery']) : array ();

						$output .= '<div class="dt-sc-product-image-360-viewer" id="dt-sc-product-image-360-viewer" data-count="'.count($viewer360_gallery_ids).'">';

		                    if(is_array($viewer360_gallery_ids) && !empty($viewer360_gallery_ids)) {
		                    	$i = 1;
		                        foreach($viewer360_gallery_ids as $viewer360_gallery_id) {

									$image = wp_get_attachment_image( $viewer360_gallery_id, 'full', false, array (
												'data-index' => $i,
											) );

									$output .= $image;

									$i++;

		                        }
		                    }

				   		$output .= '</div>';

				   	$output .= '</div>';

			   	$output .= '</div>';

		   }
			
		} else {
		
			$output .= esc_html__('Please provide product id to display corresponding data!', 'designthemes-core');
			
		}

		return $output;

	}

	function dt_sc_product_summary_nav_bar( $attrs, $content = null ) {

		$attrs = shortcode_atts ( array (
					
					'product_id'      => '',
					'items'           => 'breadcrumb, navigation',
					'class'           => ''

				), $attrs, 'dt_sc_product_summary_nav_bar' );


		$output = '';
	
		if($attrs['product_id'] == '' && is_singular('product')) {
			global $post;
			$attrs['product_id'] = $post->ID;
		}

		if($attrs['product_id'] != '') {

			if($attrs['items'] != '') {

				$items = explode(', ', $attrs['items']);

				if(is_array($items) && !empty($items)) {

					$output .= '<div class="dt-sc-product-summary-nav-bar '.$attrs['class'].'">';

						// Breadcrumb
						$breadcrumb = '';
						if(in_array('breadcrumb', $items)) {
							ob_start();
							woocommerce_breadcrumb();
							$breadcrumb = ob_get_clean();
						}

						// Navigation
						$navigation = '';
						if(in_array('navigation', $items)) {
							if( function_exists( 'triss_single_product_nav' ) ) {
								$navigation = triss_single_product_nav();
							}						
						}

						// Build selected items
						foreach ($items as $key => $value) {
							$output .= $$value;
						}

					$output .= '</div>';

				}

			}
			
		} else {
		
			$output .= esc_html__('Please provide product id to display corresponding data!', 'designthemes-core');
			
		}

		return $output;

	}

	function dt_sc_product_summary( $attrs, $content = null ) {

		$attrs = shortcode_atts ( array (
					
					'product_id'                   => '',
					'items'                        => 'title, rating, price, excerpt, addtocart, meta',
					'button_items'                 => '',
					'share_follow_type'            => 'share',
					'additional_content'           => '',
					'alignment'                    => '',
					'button_style'                 => 'simple',
					'button_radius'                => '',
					'button_inline_alignment'      => 'false',
					'button_hide_text'             => 'false',
					'social_icon_style'            => 'simple',
					'social_icon_radius'           => '',
					'social_icon_inline_alignment' => 'false',
					'meta_inline_alignment'        => 'false',
					'class'                        => ''

				), $attrs, 'dt_sc_product_summary' );


		$output = '';
	
		if($attrs['product_id'] == '' && is_singular('product')) {
			global $post;
			$attrs['product_id'] = $post->ID;
		}

		if($attrs['product_id'] != '' && $attrs['items'] != '') {

			global $product;

			$items        = explode(', ', $attrs['items']);
			$button_items = explode(', ', $attrs['button_items']);

			$button_style_cls = '';
			if($attrs['button_style'] != '') {
				$button_style_cls = 'style-'.$attrs['button_style'];
			}

			$button_radius_cls = '';
			if($attrs['button_radius'] != '') {
				$button_radius_cls = 'radius-'.$attrs['button_radius'];
			}

			$button_inline_alignment_cls = '';
			if($attrs['button_inline_alignment'] == 'true') {
				$button_inline_alignment_cls = 'align-inline';
			}

			$button_hide_text_cls = '';
			if($attrs['button_hide_text'] == 'true') {
				$button_hide_text_cls = 'hide-button-text';
			}

			$social_icon_style_cls = '';
			if($attrs['social_icon_style'] != '') {
				$social_icon_style_cls = 'style-'.$attrs['social_icon_style'];
			}

			$social_icon_radius_cls = '';
			if($attrs['social_icon_radius'] != '') {
				$social_icon_radius_cls = 'radius-'.$attrs['social_icon_radius'];
			}

			$social_icon_inline_alignment_cls = '';
			if($attrs['social_icon_inline_alignment'] == 'true') {
				$social_icon_inline_alignment_cls = 'align-inline';
			}	

			$meta_inline_alignment_cls = '';
			if($attrs['meta_inline_alignment'] == 'true') {
				$meta_inline_alignment_cls = 'align-inline';
			}	
		

			$output .= '<div class="dt-sc-product-summary summary entry-summary '.esc_attr($attrs['class']).' '.esc_attr($attrs['alignment']).'">';

				// Title
				$title = '';
				if(in_array('title', $items)) {
					ob_start();
					woocommerce_template_single_title();
					$woocommerce_template_single_title = ob_get_clean();
					$title = '<div class="dt-sc-single-product-title">'.$woocommerce_template_single_title.'</div>';
				}

				// Rating
				$rating = '';
				if(in_array('rating', $items)) {
					ob_start();
					woocommerce_template_single_rating();
					$woocommerce_template_single_rating = ob_get_clean();
					$rating = $woocommerce_template_single_rating;
				}

				// Price
				$price = '';
				if(in_array('price', $items)) {				
					ob_start();
					woocommerce_template_single_price();
					$woocommerce_template_single_price = ob_get_clean();
					$price = '<div class="dt-sc-single-product-price">'.$woocommerce_template_single_price.'</div>';
				}

				// Countdown
				$countdown = '';
				if(in_array('countdown', $items)) {				
					ob_start();
					triss_products_sale_countdown_timer();
					$woocommerce_template_countdown = ob_get_clean();
					$countdown = $woocommerce_template_countdown;
				}

				// Excerpt
				$excerpt = '';
				if(in_array('excerpt', $items)) {				
					ob_start();
					woocommerce_template_single_excerpt();
					$woocommerce_template_single_excerpt = ob_get_clean();
					$excerpt = $woocommerce_template_single_excerpt;
				}

				// Add to cart
				$addtocart = '';
				if(in_array('addtocart', $items)) {				
					ob_start();
					echo '<div class="product-buttons-wrapper product-button product-button-cart '.esc_attr($button_style_cls).' '.esc_attr($button_radius_cls).' '.esc_attr($button_inline_alignment_cls).'">';
						echo '<div class="wc_inline_buttons">';		
							echo '<div class="wcwl_btn_wrapper wc_btn_inline">';	
								woocommerce_template_single_add_to_cart();
							echo '</div>';
						echo '</div>';
					echo '</div>';			
					$woocommerce_template_single_add_to_cart = ob_get_clean();
					$addtocart = $woocommerce_template_single_add_to_cart;
				}	

				// Wishlist, Compare, Quick View, Size Guide
				$buttons = '';
				if(in_array('buttons', $items)) {

					$wishlist = $compare = $quickview = $sizeguide = '';
					if(in_array('wishlist', $button_items)) {
						ob_start();
						do_action( 'dt_woo_loop_product_button_elements_wishlist' );
						$wishlist = ob_get_clean();
						$wishlist = $wishlist;								
					}
					if(in_array('compare', $button_items)) {
						ob_start();
						do_action( 'dt_woo_loop_product_button_elements_compare' );
						$compare = ob_get_clean();
						$compare = $compare;									
					}
					if(in_array('quickview', $button_items)) {
						ob_start();
						do_action( 'dt_woo_loop_product_button_elements_quickview' );
						$quickview = ob_get_clean();
						$quickview = $quickview;							
					}
					if(in_array('sizeguide', $button_items)) {
						ob_start();
						do_action( 'dt_woo_loop_product_button_elements_sizeguide' );
						$sizeguide = ob_get_clean();
						$sizeguide = $sizeguide;							
					}

					ob_start();
					echo '<div class="product-buttons-wrapper product-button '.esc_attr($button_style_cls).' '.esc_attr($button_radius_cls).' '.esc_attr($button_inline_alignment_cls).' '.esc_attr($button_hide_text_cls).'">';
						echo '<div class="wc_inline_buttons">';
							// Build selected items
							foreach ($button_items as $key => $value) {
								echo $$value;
							}	
						echo '</div>';
					echo '</div>';	
							
					$woocommerce_buttons = ob_get_clean();
					$buttons = $woocommerce_buttons;

				}				

				// Meta
				$meta = '';
				if(in_array('meta', $items)) {				
					ob_start();
					echo '<div class="product_meta_wrapper '.esc_attr($meta_inline_alignment_cls).'">';
						woocommerce_template_single_meta();
					echo '</div>';
					$woocommerce_template_single_meta = ob_get_clean();
					$meta = $woocommerce_template_single_meta;
				}							

				// Meta SKU
				$meta_sku = '';
				if(in_array('meta_sku', $items)) {				
					if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) {
						$meta_data_sku = ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'designthemes-core' );
						$meta_sku = '<div class="product_meta_wrapper '.esc_attr($meta_inline_alignment_cls).'"><div class="product_meta"><span class="sku_wrapper"><strong>'.esc_html__( 'SKU:', 'designthemes-core' ).'</strong><span class="sku">'.$meta_data_sku.'</span></span></div></div>';
					}
				}

				// Meta Category
				$meta_category = '';
				if(in_array('meta_category', $items)) {				
					$meta_category = '<div class="product_meta_wrapper '.esc_attr($meta_inline_alignment_cls).'"><div class="product_meta">'.wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in"><strong>' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'designthemes-core' ) . '</strong> ', '</span>' ).'</div></div>';
				}

				// Meta Tag
				$meta_tag = '';
				if(in_array('meta_tag', $items)) {				
					$meta_tag = '<div class="product_meta_wrapper '.esc_attr($meta_inline_alignment_cls).'"><div class="product_meta">'.wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as"><strong>' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'designthemes-core' ) . '</strong> ', '</span>' ).'</div></div>';
				}				

				// Share / Follow
				$share_follow = '';
				if(in_array('share_follow', $items)) {				
					$share_follow = triss_single_product_sociable_share_follow($attrs['product_id'], $attrs['share_follow_type'], $social_icon_style_cls, $social_icon_radius_cls, $social_icon_inline_alignment_cls);
				}

				// Additional Content
				$additional_content = '';
				if(in_array('additional_content', $items)) {				
					if(isset($content) && !empty($content)) {
						$additional_content = '<div class="dt-sc-product-summary-additional-content">';
							$additional_content .= DTCoreWooShortcodesDefination::dt_sc_shortcodeHelper ( $content );
						$additional_content .= '</div>';
					}
				}				

				// Additional Information
				$additional_information = '';
				if(in_array('additional_information', $items)) {				
					ob_start();
					$wc_product_object = wc_get_product( $attrs['product_id'] );
					wc_display_product_attributes( $wc_product_object );
					$woocommerce_additional_information = ob_get_clean();
					$additional_information = $woocommerce_additional_information;
				}

				// Separator 1
				$separator1 = '';
				if(in_array('separator1', $items)) {
					$separator1 = '<div class="dt-sc-single-product-separator"></div>';
				}

				// Separator 2
				$separator2 = '';
				if(in_array('separator2', $items)) {
					$separator2 = '<div class="dt-sc-single-product-separator"></div>';
				}


				// Build selected items
				foreach ($items as $key => $value) {
					$output .= $$value;
				}				

		   	$output .= '</div>';
		
		} else {
		
			$output .= esc_html__('Please provide product id to display corresponding data!', 'designthemes-core');
			
		}

		return $output;

	}

	function dt_sc_product_tabs( $attrs, $content = null ) {

		$attrs = shortcode_atts ( array (
					
					'product_id'      => '',
					'hide_title' => 'false',
					'class'           => ''

				), $attrs, 'dt_sc_product_tabs' );


		$output = '';
	
		if($attrs['product_id'] == '' && is_singular('product')) {
			global $post;
			$attrs['product_id'] = $post->ID;
		}

		if($attrs['product_id'] != '') {

			$hide_title_class = '';
			if($attrs['hide_title'] == 'true') {
				$hide_title_class = 'dt-sc-product-hide-tab-title';
			}

			$output .= '<div class="dt-sc-product-tabs-wrapper '.$attrs['class'].' '.$hide_title_class.'">';

				ob_start();
				woocommerce_output_product_data_tabs();
				$output .= ob_get_clean();

			$output .= '</div>';
			
		} else {
		
			$output .= esc_html__('Please provide product id to display corresponding data!', 'designthemes-core');
			
		}

		return $output;

	}	

	function dt_sc_product_tabs_exploded( $attrs, $content = null ) {

		$attrs = shortcode_atts ( array (
					
					'product_id'    => '',
					'tab'           => 'description',
					'hide_title'    => 'false',
					'apply_scroll'  => 'false',
					'scroll_height' => 400,
					'class'         => ''

				), $attrs, 'dt_sc_product_tabs_exploded' );


		$output = '';
	
		if($attrs['product_id'] == '' && is_singular('product')) {
			global $post;
			$attrs['product_id'] = $post->ID;
		}

		if($attrs['product_id'] != '') {

			$hide_title_class = '';
			if($attrs['hide_title'] == 'true') {
				$hide_title_class = 'dt-sc-product-hide-tab-title';
			}

			$scroll_class = $scroll_height_style_attr = '';
			if($attrs['apply_scroll'] == 'true') {
				$scroll_class             = 'dt-sc-content-scroll';
				$scroll_height            = ($attrs['scroll_height'] != '') ? $attrs['scroll_height'] : 400;
				$scroll_height_style_attr = 'style = "height:'.esc_attr($scroll_height).'px"';
			}			

			$output .= '<div class="dt-sc-product-tabs dt-sc-product-tabs-exploded '.$attrs['class'].' '.$hide_title_class.' '.$scroll_class.'" '.$scroll_height_style_attr.'>';

				if($attrs['tab'] == 'description') {

					ob_start();
					woocommerce_product_description_tab();
					$output .= ob_get_clean();

				}

				if($attrs['tab'] == 'review') {

					ob_start();
					comments_template();
					$output .= ob_get_clean();

				}

				if($attrs['tab'] == 'additional_information') {

					ob_start();
					woocommerce_product_additional_information_tab();
					$output .= ob_get_clean();

				}


				// Custom Tabs

				if($attrs['tab'] == 'custom_tab_1' || $attrs['tab'] == 'custom_tab_2' || $attrs['tab'] == 'custom_tab_3' || $attrs['tab'] == 'custom_tab_4') {

					$settings = get_post_meta( $attrs['product_id'], '_custom_settings', true );
					$product_additional_tabs = (isset($settings['product-additional-tabs']) && $settings['product-additional-tabs'] != '') ? $settings['product-additional-tabs'] : array ();	

					// Tab 1
					if($attrs['tab'] == 'custom_tab_1' && isset($product_additional_tabs[1])) {

						ob_start();
						$tab_title = $product_additional_tabs[1]['tab_title'];
						$tab_title = preg_replace('/[^A-Za-z0-9\-]/', '', $tab_title);
						$tab_key = 'dt_'.strtolower(str_replace(' ', '', $tab_title));
						triss_woo_additional_product_tabs_content( $tab_key );
						$output .= ob_get_clean();

					}	

					// Tab 2
					if($attrs['tab'] == 'custom_tab_2' && isset($product_additional_tabs[2])) {

						ob_start();
						$tab_title = $product_additional_tabs[2]['tab_title'];
						$tab_title = preg_replace('/[^A-Za-z0-9\-]/', '', $tab_title);
						$tab_key = 'dt_'.strtolower(str_replace(' ', '', $tab_title));
						triss_woo_additional_product_tabs_content( $tab_key );
						$output .= ob_get_clean();

					}

					// Tab 3
					if($attrs['tab'] == 'custom_tab_3' && isset($product_additional_tabs[3])) {

						ob_start();
						$tab_title = $product_additional_tabs[3]['tab_title'];
						$tab_title = preg_replace('/[^A-Za-z0-9\-]/', '', $tab_title);
						$tab_key = 'dt_'.strtolower(str_replace(' ', '', $tab_title));
						triss_woo_additional_product_tabs_content( $tab_key );
						$output .= ob_get_clean();

					}

					// Tab 4
					if($attrs['tab'] == 'custom_tab_4' && isset($product_additional_tabs[4])) {

						ob_start();
						$tab_title = $product_additional_tabs[4]['tab_title'];
						$tab_title = preg_replace('/[^A-Za-z0-9\-]/', '', $tab_title);
						$tab_key = 'dt_'.strtolower(str_replace(' ', '', $tab_title));
						triss_woo_additional_product_tabs_content( $tab_key );
						$output .= ob_get_clean();

					}					

				}

			$output .= '</div>';
			
		} else {
		
			$output .= esc_html__('Please provide product id to display corresponding data!', 'designthemes-core');
			
		}

		return $output;

	}	

	function dt_sc_product_upsell_products( $attrs, $content = null ) {

		$attrs = shortcode_atts ( array (
					
					'product_id'             => '',
					'columns'                => 4,
					'limit'                  => 4,
					'product_style_template' => 'admin-option',
					'hide_title'             => false,
					'class'                  => ''

				), $attrs, 'dt_sc_product_upsell_products' );


		$output = '';
	
		if($attrs['product_id'] == '' && is_singular('product')) {
			global $post;
			$attrs['product_id'] = $post->ID;
		}

		if($attrs['product_id'] != '') {

			$output .= '<div class="dt-sc-product-upsell-products '.$attrs['class'].'">';

				if($attrs['product_style_template'] == 'admin-option') {
					$product_style_template = cs_get_option( 'dt-woo-single-product-upsell-style-template' );
				} else {
					$product_style_template = $attrs['product_style_template'];
				}

				$display_mode = triss_woo_post_display_mode_from_location($product_style_template);
				if($display_mode == 'list') {
					$attrs['columns'] = 1;	
				}
				
				// Hide Title
				wc_set_loop_prop('product_upsell_hide_title', $attrs['hide_title']);

				$output .= triss_product_style_setup_template_prop($product_style_template); /* Call Product Style Variables Setup */

				ob_start();
				woocommerce_upsell_display( $limit =  $attrs['limit'], $columns = $attrs['columns'], $orderby = 'rand', $order = 'desc' );
				$output .= ob_get_clean();

				triss_product_style_reset_template_prop(); /* Reset Product Style Variables Setup */
				
			$output .= '</div>';
			
		} else {
		
			$output .= esc_html__('Please provide product id to display corresponding data!', 'designthemes-core');
			
		}

		return $output;

	}

	function dt_sc_product_related_products( $attrs, $content = null ) {

		$attrs = shortcode_atts ( array (
					
					'product_id'             => '',
					'columns'                => 4,
					'limit'                  => 4,
					'product_style_template' => 'admin-option',
					'hide_title'             => false,
					'class'                  => ''

				), $attrs, 'dt_sc_product_related_products' );


		$output = '';
	
		if($attrs['product_id'] == '' && is_singular('product')) {
			global $post;
			$attrs['product_id'] = $post->ID;
		}

		if($attrs['product_id'] != '') {

			$output .= '<div class="dt-sc-product-related-products '.$attrs['class'].'">';

				if($attrs['product_style_template'] == 'admin-option') {
					$product_style_template = cs_get_option( 'dt-woo-single-product-related-style-template' );
				} else {
					$product_style_template = $attrs['product_style_template'];
				}

				$display_mode = triss_woo_post_display_mode_from_location($product_style_template);
				if($display_mode == 'list') {
					$attrs['columns'] = 1;	
				}

				// Hide Title
				wc_set_loop_prop('product_related_hide_title', $attrs['hide_title']);

				$output .= triss_product_style_setup_template_prop($product_style_template); /* Call Product Style Variables Setup */

				ob_start();
				woocommerce_related_products( array ( 'posts_per_page' => $attrs['limit'], 'columns' => $attrs['columns'], 'orderby' => 'rand' ) );
				$output .= ob_get_clean();

				triss_product_style_reset_template_prop(); /* Reset Product Style Variables Setup */

			$output .= '</div>';
			
		} else {
		
			$output .= esc_html__('Please provide product id to display corresponding data!', 'designthemes-core');
			
		}

		return $output;

	}

	function dt_sc_products( $attrs, $content = null ) {

		$attrs = shortcode_atts ( array (
					
					'data_source'                   => '',
					'columns'                       => 4,
					'post_per_page'                 => 12,
					'show_pagination'               => 'false',
					'enable_carousel'               => 'false',
					'display_mode'                  => 'grid',
					'list_options'                  => 'left-thumb',
					'product_style_template'        => 0,
					'class'                         => '',
					'categories'                    => '',
					'tags'                          => '',
					'include'                       => '',
					'exclude'                       => '',	
					'carousel_effect'               => '',
					'carousel_slidesperview'        => 1,
					'carousel_loopmode'             => '',
					'carousel_mousewheelcontrol'    => '',
					'carousel_bulletpagination'     => '',
					'carousel_arrowpagination'      => '',
					'carousel_arrowpagination_type' => '',
					'carousel_scrollbar'            => '',
					'carousel_spacebetween'         => '',
					
					'current_page'                  => 1,
					'offset'                        => 0

				), $attrs, 'dt_sc_products' );


		$output = '';


		$woo_product_style_template = $attrs['product_style_template'];

		if($attrs['display_mode'] == 'list') {
			$attrs['columns'] = 1;
			$attrs['carousel_slidesperview'] = 1;
		}


		$media_carousel_attributes_string = $container_class = $wrapper_class = $item_class = '';

		if($attrs['enable_carousel'] == 'true') {

			$media_carousel_attributes = array ();

			array_push($media_carousel_attributes, 'data-carouseleffect="'.$attrs['carousel_effect'].'"');
			array_push($media_carousel_attributes, 'data-carouselslidesperview="'.$attrs['carousel_slidesperview'].'"');
			array_push($media_carousel_attributes, 'data-carouselloopmode="'.$attrs['carousel_loopmode'].'"');
			array_push($media_carousel_attributes, 'data-carouselmousewheelcontrol="'.$attrs['carousel_mousewheelcontrol'].'"');
			array_push($media_carousel_attributes, 'data-carouselbulletpagination="'.$attrs['carousel_bulletpagination'].'"');
			array_push($media_carousel_attributes, 'data-carouselarrowpagination="'.$attrs['carousel_arrowpagination'].'"');
			array_push($media_carousel_attributes, 'data-carouselscrollbar="'.$attrs['carousel_scrollbar'].'"');
			array_push($media_carousel_attributes, 'data-carouselspacebetween="'.$attrs['carousel_spacebetween'].'"');

			if(!empty($media_carousel_attributes)) {
				$media_carousel_attributes_string = implode(' ', $media_carousel_attributes);
			}

			
			$container_class = 'swiper-container';
			$wrapper_class = 'swiper-wrapper';
			$item_class = 'swiper-slide';

			$output .= '<div class="dt-sc-products-carousel-container">';

		}


		// Loop variables setup
		wc_set_loop_prop('is_shortcode', 1);
		wc_set_loop_prop('product_style_template', $attrs['product_style_template']);
		wc_set_loop_prop('item_class', $item_class);
		wc_set_loop_prop('columns', $attrs['columns']);
		wc_set_loop_prop('display_mode', $attrs['display_mode']);
		wc_set_loop_prop('display_mode_list_options', $attrs['list_options']);

		triss_product_style_setup_template_prop($woo_product_style_template); // Call Product Style Variables Setup


		$output .= '<div class="dt-sc-products-container woocommerce '.$attrs['class'].' '.$container_class.'" '.$media_carousel_attributes_string.'>';

			$output .= '<ul class="products '.$wrapper_class.' '.dt_sc_woo_shop_products_class().'">';		

				ob_start();

				    $args = array(
						'post_type'      => 'product',
						'post_status'    => 'publish',
						'posts_per_page' => $attrs['post_per_page'],
						'meta_query'     => array (), 
						'tax_query'      => array (),	
						'offset'         => $attrs['offset'], 
						'paged'          => $attrs['current_page'],							    	
					);


				    // Exclude hidden products
					$args['tax_query'][] = array(
						'taxonomy'         => 'product_visibility',
						'terms'            => array( 'exclude-from-catalog', 'exclude-from-search' ),
						'field'            => 'name',
						'operator'         => 'NOT IN',
						'include_children' => false,
					);


					// Categories
					$categories = ($attrs['categories'] != '') ? explode(', ', $attrs['categories']) : array ();
					if(!empty($categories)) {
						$args['tax_query'][] = array ( 
													'taxonomy' => 'product_cat',
													'field'    => 'id',
													'terms'    => $categories,
													'operator' => 'IN'
												);
					}

					// Tags
					$tags = ($attrs['tags'] != '') ? explode(', ', $attrs['tags']) : array ();
					if(!empty($tags)) {
						$args['tax_query'][] = array ( 
													'taxonomy' => 'product_tag',
													'field'    => 'id',
													'terms'    => $tags,
													'operator' => 'IN'
												);
					}

					// Include
					$include = ($attrs['include'] != '') ? explode(',', $attrs['include']) : array ();
					if(!empty($include)) {
						$args['post__in'] = $include;
					}

					// Exclude
					$exclude = ($attrs['exclude'] != '') ? explode(',', $attrs['exclude']) : array ();
					if(!empty($exclude)) {
						$args['post__not_in'] = $exclude;
					}

					// Data Source

					# Featured
					if ( $attrs['data_source'] == 'featured' ) {
						$args['tax_query'][] = array (
													'taxonomy' => 'product_visibility',
													'field'    => 'name',
													'terms'    => 'featured',
													'operator' => 'IN',
												);
					}

					# Sale
					if ( $attrs['data_source'] == 'sale' ) {
						if(!empty($include)) {
							$args['post__in'] = array_merge( $include, wc_get_product_ids_on_sale() );
						} else {
							$args['post__in'] = wc_get_product_ids_on_sale();
						}					
					}

					# Best Seller
					if ( $attrs['data_source'] == 'bestseller' ) {
						$args['orderby'] = 'meta_value_num';
						$args['meta_key'] = 'total_sales';
					}

					// Loop

					$products = new WP_Query( $args );

					if ( $products->have_posts() ) :
						while ( $products->have_posts() ) :
							$products->the_post();
							wc_get_template_part( 'content', 'product' );
						endwhile;
					endif;				

					wp_reset_postdata();

				$output .= ob_get_clean();

			$output .= '</ul>';

			$max_num_pages = $products->max_num_pages;

			// For pagination
			if($attrs['show_pagination'] == 'true') {
				$shortcode_attrs = json_encode($attrs);
				$output .= triss_products_ajax_pagination($max_num_pages, $attrs['current_page'], $attrs['post_per_page'], 'triss_products_ajax_call', 'dt-sc-products-container', $shortcode_attrs);
			}

			if($attrs['enable_carousel'] == 'true') {

				$output .= '<div class="dt-sc-products-pagination-holder">';

					if($attrs['carousel_bulletpagination'] == 'true') {
						$output .= '<div class="dt-sc-products-bullet-pagination"></div>';	
					}

					if($attrs['carousel_scrollbar'] == 'true') {
						$output .= '<div class="dt-sc-products-scrollbar"></div>';	
					}											

					if($attrs['carousel_arrowpagination'] == 'true') {
						$output .= '<div class="dt-sc-products-arrow-pagination '.$attrs['carousel_arrowpagination_type'].'">';
							$output .= '<a href="#" class="dt-sc-products-arrow-prev">'.esc_html__('Prev', 'designthemes-core').'</a>';
							$output .= '<a href="#" class="dt-sc-products-arrow-next">'.esc_html__('Next', 'designthemes-core').'</a>';
						$output .= '</div>';
					}

				$output .= '</div>';

			}

		$output .= '</div>';
			

		// Reset the loop.
		wc_reset_loop();

		if($attrs['enable_carousel'] == 'true') {
			$output .= '</div>';
		}

		return $output;

	}

	function dt_sc_shop_menu_icon( $attrs, $content = null ) {

		$attrs = shortcode_atts ( array (
					
					'class'       => '',
					'cart_action' => '',

				), $attrs, 'dt_sc_shop_menu_icon' );


		$output = '';
	
		if( function_exists( 'is_woocommerce' ) ) {

			$count = WC()->cart->get_cart_contents_count();
			$subtotal = WC()->cart->get_cart_subtotal();

			$output .= '<div class="dt-sc-shop-menu-icon '.$attrs['class'].'">';

				if($attrs['cart_action'] == 'notification_widget') {
					$output .= '<a href="'.esc_url( wc_get_cart_url() ).'">';
				}
				
					$output .= '<span class="dt-sc-shop-menu-icon-wrapper">';
						$output .= '<span class="dt-sc-shop-menu-cart-inner">';
							$output .= '<span class="dt-sc-shop-menu-cart-icon"></span>';
						$output .= '</span>';
						$output .= '<span class="dt-sc-shop-menu-cart-number">'.sprintf(esc_html__('%1$s Item', 'designthemes-core'), esc_html($count)).'</span>';
						$output .= '<span class="dt-sc-shop-menu-cart-totals">'.$subtotal.'</span>';
					$output .= '</span>';

				if($attrs['cart_action'] == 'notification_widget') {
					$output .= '</a>';
				}

				if($attrs['cart_action'] == 'notification_widget') {

					$output .= '<div class="dt-sc-shop-menu-cart-content-wrapper">';
						$output .= '<div class="dt-sc-shop-menu-cart-content">'.esc_html__('Your cart is currently empty!', 'designthemes-core').'</div>';
					$output .= '</div>';

					set_site_transient( 'cart_action', 'notification_widget', 12 * HOUR_IN_SECONDS );

				} else if($attrs['cart_action'] == 'sidebar_widget') {

					set_site_transient( 'cart_action', 'sidebar_widget', 12 * HOUR_IN_SECONDS );

				} else {
					
					set_site_transient( 'cart_action', 'none', 12 * HOUR_IN_SECONDS );

				}

			$output .= '</div>';

		}

		return $output;

	}

}
new DTCoreWooShortcodesDefination();
?>