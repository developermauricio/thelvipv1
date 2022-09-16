<?php if ( ! defined( 'ABSPATH' ) ) { exit; }

	
	$post_meta = get_post_meta($post_ID, '_dt_post_settings', TRUE);
	$post_meta = is_array($post_meta) ? $post_meta  : array();

	$page_id = get_queried_object_id();
	$page_meta = get_post_meta( $page_id, '_tpl_default_settings', true );
	$page_meta = is_array( $page_meta ) ? $page_meta : array();
	
	$format = !empty( $post_meta['post-format-type'] ) ? $post_meta['post-format-type'] : 'standard';

	if( array_key_exists('page-enable-fullwidth',$page_meta) && $page_meta['page-enable-fullwidth']) {
		$img_size = array( 'one-column' => 'full', 'one-half-column' => 'full', 'one-third-column' => 'triss-blog-iii-column', 'one-fourth-column' => 'triss-blog-iv-column' );
	} else{
		$img_size = array( 'one-column' => 'triss-blog-i-column', 'one-half-column' => 'triss-blog-ii-column', 'one-third-column' => 'triss-blog-iii-column', 'one-fourth-column' => 'triss-blog-iv-column' );
	}

	// If it's galley post
	if( $format === "gallery" && $post_meta['post-gallery-items'] != '' && $meta[5] == true ) : ?>
		<ul class="entry-gallery-post-slider"><?php
			$items = explode(',', $post_meta["post-gallery-items"]);
			foreach ( $items as $item ) { ?>
				<li><?php echo wp_get_attachment_image( $item, $img_size[$column] ); ?></li><?php
			}?>
		</ul><?php
	// If it's video post
	elseif( $format === "video" && $post_meta['media-url'] != '') : ?>
		<div class="dt-video-wrap"><?php
			if( $post_meta['media-type'] == 'oembed' && ! isset( $_COOKIE['dtPrivacyVideoEmbedsDisabled'] ) ) :
				echo wp_oembed_get($post_meta['media-url']);
			elseif( $post_meta['media-type'] == 'self' ) :
				echo wp_video_shortcode( array('src' => $post_meta['media-url']) );
			endif;?>
		</div><?php
	// If it's audio post
	elseif( $format === "audio") :
		if( $post_meta['media-url'] != '' ) :
			if( $post_meta['media-type'] == 'oembed' ) :
				echo wp_oembed_get($post_meta['media-url']);
			elseif( $post_meta['media-type'] == 'self' ) :
				echo wp_audio_shortcode( array('src' => $post_meta['media-url']) );
			endif;
		endif;
	// If it's having feature image
	elseif( has_post_thumbnail( $post_ID ) ) : ?>
		<a href="<?php echo get_permalink($post_ID);?>" title="<?php printf(esc_attr__('Permalink to %s','triss'), the_title_attribute('echo=0'));?>">
			<?php echo get_the_post_thumbnail( $post_ID, $img_size[$column] );?>
		</a><?php
	endif;