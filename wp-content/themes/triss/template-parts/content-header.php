<div class="dt-no-header-builder-content dt-no-header-triss">

    <div class="no-header-top">
        <span><?php echo get_bloginfo( 'description', 'display' ); ?></span>
    </div>

    <div class="no-header">

        <div class="no-header-logo-container">

            <div class="no-header-logo-wrapper">
                <div class="dt-logo-container logo-align-left">
                <?php
                if( class_exists( 'Kirki' ) ) { 
                    $use_logo = (int) get_theme_mod( 'use-custom-logo', triss_defaults('use-custom-logo') );
                    $url      = get_theme_mod( 'custom-logo', triss_defaults('custom-logo') );

                    if( !empty( $use_logo ) && !empty( $url ) ) {?>
                        <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
                            <img class="normal_logo" src="<?php echo esc_url( $url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name') ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name') ); ?>"/>
                        </a><?php
                    }

                    if( empty( $use_logo ) ){?>
                        <div class="logo-title">
                            <h1 id="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('title'); ?>"><?php bloginfo('title'); ?></a></h1>
                        </div><?php
                    }
                } else { ?>
                    <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
                        <img src="<?php echo TRISS_THEME_URI.'/images/logo.png'; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name') ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name') ); ?>"/>
                    </a><?php
                } ?>
                </div>    
            </div> 
        </div>

        <div class="no-header-menu dt-header-menu" data-menu="dummy-menu"><?php
            $menu = false;
            if ( has_nav_menu( 'main-menu' ) ) {
                $args = array(
                    'theme_location' => 'main-menu',
                    'container_class' => 'menu-container',
                    'items_wrap' => '<ul id="%1$s" class="%2$s" data-menu="dummy-menu"> <li class="close-nav"></li> %3$s </ul> <div class="sub-menu-overlay"></div>',
                    'menu_class' => 'dt-primary-nav',
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                    'fallback_cb' => '',
                    'walker' => new DTWPHeaderMenuWalker,
                    'echo'            => false
                );

                if( class_exists( 'DTCorePlugin' )  ) {
                    $args['walker'] = new DTHeaderMenuWalker;
                }

                $menu = wp_nav_menu( $args );
                echo apply_filters( 'trish_default_menu', $menu );
            }?></div>
            
            <?php if( $menu ) {  ?>
                <!-- Mobile Menu -->
                <div class="mobile-nav-container mobile-nav-offcanvas-right" data-menu="dummy-menu">
                    <div class="menu-trigger menu-trigger-icon" data-menu="dummy-menu"><i></i><span><?php esc_html_e('Menu', 'triss'); ?></span></div>
                    <div class="mobile-menu" data-menu="dummy-menu"></div>
                    <div class="overlay"></div>
                </div>
                <!-- Mobile Menu -->
            <?php } ?>
    </div>
</div>