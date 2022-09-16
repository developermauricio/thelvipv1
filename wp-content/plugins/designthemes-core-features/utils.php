<?php

if(!function_exists('dt_blog_single_social_share')) {
	function dt_blog_single_social_share($post_ID) {

		$output = '<div class="share">';
		
			$title = get_the_title( $post_ID );
			$title = urlencode($title);

			$link = get_permalink( $post_ID );
			$link = rawurlencode( $link );

			$output .= '<i class="fas fa-share-alt-square"></i>';
			$output .= '<ul class="dt-share-list">';
				$output .= '<li><a href="http://www.facebook.com/sharer.php?u='.esc_attr($link).'&amp;t='.esc_attr($title).'" class="fab fa-facebook-f" target="_blank"></a></li>';
				$output .= '<li><a href="http://twitter.com/share?text='.esc_attr($title).'&amp;url='.esc_attr($link).'" class="fab fa-twitter" target="_blank"></a></li>';
				$output .= '<li><a href="http://plus.google.com/share?url='.esc_attr($link).'" class="fab fa-google-plus-g" target="_blank"></a></li>';
				$output .= '<li><a href="http://pinterest.com/pin/create/button/?url='.esc_attr($link).'&media='.get_the_post_thumbnail_url($post_ID, 'full').'" class="fab fa-pinterest" target="_blank"></a></li>';
			$output .= '</ul>';
			
		$output .= '</div>';

		return $output;

	}
}

?>