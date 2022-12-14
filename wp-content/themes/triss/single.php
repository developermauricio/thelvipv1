<?php get_header();

	$global_breadcrumb = cs_get_option( 'show-breadcrumb' );

    $settings = get_post_meta($post->ID,'_dt_post_settings',TRUE);
    $settings = is_array( $settings ) ?  array_filter( $settings )  : array();

	if( empty($settings) || ( array_key_exists( 'layout', $settings ) && $settings['layout'] == 'global-site-layout' ) ) {
		if( empty($settings) ) { $settings['enable-sub-title'] = true; }
		$settings['layout'] = cs_get_option( 'site-global-sidebar-layout' );
		$settings['show-standard-sidebar-left'] = true;
		$settings['show-standard-sidebar-right'] = true;
	}

    $header_class = '';
    if( !isset( $settings['enable-sub-title'] ) || !$settings['enable-sub-title']  ) {
        if( isset( $settings['show_slider'] ) && $settings['show_slider'] ) {
            if( isset( $settings['slider_type'] ) ) {
                $header_class =  $settings['slider_position'];
            }
        }
    }

    if( !empty( $global_breadcrumb ) ) {
        if( isset( $settings['enable-sub-title'] ) && $settings['enable-sub-title'] ) {
            $header_class = isset( $settings['breadcrumb_position'] ) ? $settings['breadcrumb_position'] : '';
		}
	}?>
<!-- ** Header Wrapper ** -->
<div id="header-wrapper" class="<?php echo esc_attr($header_class); ?>">

    <!-- **Header** -->
    <header id="header">

        <div class="container"><?php
            /**
             * triss_header hook.
             * 
             * @hooked triss_vc_header_template - 10
             *
             */
            do_action( 'triss_header' ); ?>
        </div>
    </header><!-- **Header - End ** -->

    <!-- ** Breadcrumb ** -->
    <?php
    	# Global Breadcrumb
		if( array_key_exists( 'single-post-style', $settings ) ) {

			// Breadcrumb fixed style...
			if( $settings['single-post-style'] == 'breadcrumb-fixed' ) {

				echo '<div class="single-post-header-wrapper aligncenter">';

					if( has_post_thumbnail( $post->ID ) ):
						$bgimage = get_the_post_thumbnail_url( $post->ID, 'full' );
						echo '<div class="main-title-section-bg" style="background-image: url('.$bgimage.');"></div>';
					else:
						echo '<div class="main-title-section-bg"></div>';
					endif;

					echo '<div class="container">';
						echo the_title( '<h1 class="single-post-title">', '</h1>', false );

						$template = 'framework/templates/single/entry-categories.php';
						$template_args['post_ID'] = $post->ID;
						$template_args['post_Style'] = 'breadcrumb-fixed'; ?>

                        <div class="post-meta-data">
                            <div class="post-categories"><?php triss_get_template( $template, $template_args ); ?></div>
                            <div class="date"><?php echo sprintf( esc_html__( '%s ago', 'triss' ), human_time_diff( get_the_date('U'), current_time('timestamp') ) ); ?></div>
						</div><?php
					echo '</div>';

				echo '</div>';
			} elseif( $settings['single-post-style'] == 'breadcrumb-parallax' ) {

				// Breadcrumb parallax style...
				echo '<div class="single-post-header-wrapper dt-parallax-bg aligncenter">';

					if( has_post_thumbnail( $post->ID ) ):
						$bgimage = get_the_post_thumbnail_url( $post->ID, 'full' );
						echo '<div class="main-title-section-bg" style="background-image: url('.$bgimage.');"></div>';
					else:
						echo '<div class="main-title-section-bg"></div>';
					endif;

					echo '<div class="container">';
						$template = 'framework/templates/single/entry-categories.php';
						$template_args['post_ID'] = $post->ID;
						$template_args['post_Style'] = 'breadcrumb-parallax'; ?>

                        <div class="post-categories"><?php triss_get_template( $template, $template_args ); ?></div><?php

						echo the_title( '<h1 class="single-post-title">', '</h1>', false ); ?>

                        <div class="post-meta">
							<div class="post-author"><?php
								$auth = get_post( $post->ID );
								$authid = $auth->post_author;
								echo '<span>'.esc_html__('By ', 'triss').'</span>';
                            	echo '<a href="'.get_author_posts_url($authid).'" title="'.esc_attr__('View all posts by ', 'triss').get_the_author_meta('display_name', $authid).'">'.get_the_author_meta('display_name', $authid).'</a>'; ?>
                            </div>

							<div class="post-date"><?php
								$template = 'framework/templates/single/entry-date.php';
								triss_get_template( $template, $template_args ); ?></div>

                            <div class="post-comments"><?php
								if( ! post_password_required() ) {
									comments_popup_link( esc_html__('No Comments', 'triss'), esc_html__('1 Comment', 'triss'), esc_html__('% Comments', 'triss'), '', esc_html__('Comments Off', 'triss'));
								} else {
									echo esc_html__('Enter your password to view comments.', 'triss');
								} ?>
                            </div>
                        </div><?php
					echo '</div>';
				echo '</div>';
			} else {
				if( !empty( $global_breadcrumb ) ) {
					if( isset( $settings['enable-sub-title'] ) && $settings['enable-sub-title'] ) {

						$breadcrumbs = array();
						$bstyle = triss_cs_get_option( 'breadcrumb-style', 'default' );
						$separator = '<span class="'.triss_cs_get_option( 'breadcrumb-delimiter', 'fa default' ).'"></span>';

						$cat = get_the_category();
						if( $cat ) {
							$cat = $cat[0];
							$breadcrumbs[] = get_category_parents( $cat, true, $separator );
						}
						$breadcrumbs[] = the_title( '<span class="current">', '</span>', false );
						$bcsettings = isset( $settings['breadcrumb_background'] ) ? $settings['breadcrumb_background'] : array();
						$style = triss_breadcrumb_css( $bcsettings );

						triss_breadcrumb_output ( the_title( '<h1>', '</h1>',false ), $breadcrumbs, $bstyle, $style );
					}
				}
			}
		} else {
			if( !empty( $global_breadcrumb ) ) {
				if( isset( $settings['enable-sub-title'] ) && $settings['enable-sub-title'] ) {

					$breadcrumbs = array();
					$bstyle = triss_cs_get_option( 'breadcrumb-style', 'default' );
					$separator = '<span class="'.triss_cs_get_option( 'breadcrumb-delimiter', 'fa default' ).'"></span>';

					$cat = get_the_category();
					if( $cat ) {
						$cat = $cat[0];
						$breadcrumbs[] = get_category_parents( $cat, true, $separator );
					}
					$breadcrumbs[] = the_title( '<span class="current">', '</span>', false );
					$bcsettings = isset( $settings['breadcrumb_background'] ) ? $settings['breadcrumb_background'] : array();
					$style = triss_breadcrumb_css( $bcsettings );

					triss_breadcrumb_output ( the_title( '<h1>', '</h1>',false ), $breadcrumbs, $bstyle, $style );
				}
			}
		}
    ?><!-- ** Breadcrumb End ** -->

</div><!-- ** Header Wrapper - End ** -->
<!-- **Main** -->
<div id="main">

    <!-- ** Container ** -->
    <div class="container"><?php
        $page_layout  = array_key_exists( "layout", $settings ) ? $settings['layout'] : "content-full-width";
        $layout = triss_page_layout( $page_layout );
        extract( $layout );
        ?>

        <!-- Primary -->
        <section id="primary" class="<?php echo esc_attr( $page_layout );?>"><?php
            if( have_posts() ) {
                while( have_posts() ) {
                    the_post();
                    get_template_part( 'framework/loops/content', 'single' );
                }
            }?>
        </section><!-- Primary End --><?php

		if ( $show_sidebar ) {
			if ( $show_left_sidebar ) {
				$sticky_class = ( array_key_exists('enable-sticky-sidebar', $settings) && $settings['enable-sticky-sidebar'] == 'true' ) ? ' sidebar-as-sticky' : '';?>
				
				<!-- Secondary Left -->
				<section id="secondary-left" class="secondary-sidebar <?php echo esc_attr( $sidebar_class.$sticky_class );?>"><?php
					triss_show_sidebar( 'post', $post->ID, 'left' ); ?></section><!-- Secondary Left End --><?php
			}
		}

        if ( $show_sidebar ) {
            if ( $show_right_sidebar ) {
                $sticky_class = ( array_key_exists('enable-sticky-sidebar', $settings) && $settings['enable-sticky-sidebar'] == 'true' ) ? ' sidebar-as-sticky' : '';?>

                <!-- Secondary Right -->
                <section id="secondary-right" class="secondary-sidebar <?php echo esc_attr( $sidebar_class.$sticky_class );?>"><?php
                    triss_show_sidebar( 'post', $post->ID, 'right' ); ?></section><!-- Secondary Right End --><?php
            }
        }?>
    </div>
    <!-- ** Container End ** -->
    
</div><!-- **Main - End ** -->    
<?php get_footer(); ?>