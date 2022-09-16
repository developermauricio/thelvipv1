<?php
if (! class_exists ( 'DTCoreVC' )) {

	class DTCoreVC {

		function __construct() {

			add_action( 'vc_before_init', array ( $this, 'dt_vcSetAsTheme') );
			add_action( 'admin_enqueue_scripts', array ( $this, 'dt_vc_admin_scripts') );
			add_filter( 'vc_load_default_templates',  array( $this, 'dt_vc_custom_template_modify_array' ) );
			add_action( 'after_setup_theme', array( $this, 'dt_map_shortcodes') );
			add_action( 'init', array( $this, 'dt_vs_contanct_form_7_fields') );

			// Grid Template Variables
			add_filter('vc_gitem_template_attribute_dt_post_format', array( $this, 'vc_gitem_template_attribute_dt_post_format' ), 10, 2 );
			add_filter('vc_gitem_template_attribute_dt_post_tag', array( $this, 'vc_gitem_template_attribute_dt_post_tag' ), 10, 2 );
			add_filter('vc_gitem_template_attribute_dt_post_category', array( $this, 'vc_gitem_template_attribute_dt_post_category' ), 10, 2 );
			add_filter('vc_gitem_template_attribute_dt_post_comment', array( $this, 'vc_gitem_template_attribute_dt_post_comment' ), 10, 2 );
			add_filter('vc_grid_item_shortcodes', array( $this, 'dt_vc_add_grid_shortcodes' ) );

			add_action( 'init', array( $this, 'dt_load_new_modules' ) );
			add_action( 'init', array( $this, 'dt_load_shop_modules' ) );
			add_action( 'init', array( $this, 'dt_load_params' ) );

			// Auto Complete Params
				# dt_sc_recent_posts_widget
				add_filter( 'vc_autocomplete_dt_sc_recent_posts_widget__post_categories_callback', array( $this, 'vc_autocomplete__post_categories_field_search' ), 10, 1 );
				add_filter( 'vc_autocomplete_dt_sc_recent_posts_widget__post_categories_render', array( $this, 'vc_autocomplete__post_categories_field_render' ), 10, 1 );

				# dt_sc_blog_post
				add_filter( 'vc_autocomplete_dt_sc_blog_post__post_categories_callback', array ( $this, 'vc_autocomplete__post_categories_field_search' ), 10, 1 );
				add_filter( 'vc_autocomplete_dt_sc_blog_post__post_categories_render', array ( $this, 'vc_autocomplete__post_categories_field_render' ), 10, 1 );

			// Shop Single Default Templates
			add_action( 'vc_load_default_templates_action', array ( $this, 'dt_vc_shop_single_template_1' ) );
			add_action( 'vc_load_default_templates_action', array ( $this, 'dt_vc_shop_single_template_2' ) );

		}

		function dt_vcSetAsTheme() {
			vc_set_as_theme();

			# Set Shortcode templates folder
			$path = plugin_dir_path ( __FILE__ ) . 'vc_templates';
			vc_set_shortcodes_templates_dir( $path );
		}

		function dt_vc_admin_scripts( $hook ) {
			wp_enqueue_style( 'dt-vc-admin', plugins_url('designthemes-core-features') .'/visual-composer/admin.css', false, TRISS_THEME_VERSION, 'all' );
			wp_enqueue_script( 'dt-vc-admin', plugins_url('designthemes-core-features').'/visual-composer/js/admin.js', array( 'jquery'), null, true );		
		}

		function dt_vc_custom_template_modify_array( $templates ) {
			return array();
		}
		
		// New Shortcodes		
		function dt_load_new_modules() {
			
			require_once plugin_dir_path( __FILE__ ).'modules/new/logo.php';
			require_once plugin_dir_path( __FILE__ ).'modules/new/sc-logo.php';

			require_once plugin_dir_path( __FILE__ ).'modules/new/custom-menu.php';
			require_once plugin_dir_path( __FILE__ ).'modules/new/sc-custom-menu.php';
	
			require_once plugin_dir_path( __FILE__ ).'modules/new/empty-space.php';
			require_once plugin_dir_path( __FILE__ ).'modules/new/sc-empty-space.php';
	
			require_once plugin_dir_path( __FILE__ ).'modules/new/mailchimp.php';
			require_once plugin_dir_path( __FILE__ ).'modules/new/sc-mailchimp.php';
	
			require_once plugin_dir_path( __FILE__ ).'modules/new/note.php';
			require_once plugin_dir_path( __FILE__ ).'modules/new/sc-note.php';
	
			require_once plugin_dir_path( __FILE__ ).'modules/new/sociable.php';
			require_once plugin_dir_path( __FILE__ ).'modules/new/sc-sociable.php';
			
			require_once plugin_dir_path( __FILE__ ).'modules/new/simpler-sidebar.php';
			require_once plugin_dir_path( __FILE__ ).'modules/new/sc-simpler-sidebar.php';
			
			require_once plugin_dir_path( __FILE__ ).'modules/new/widget-recent-posts.php';
			require_once plugin_dir_path( __FILE__ ).'modules/new/sc-widget-recent-posts.php';
			
			require_once plugin_dir_path( __FILE__ ).'modules/new/widget-flickr.php';
			require_once plugin_dir_path( __FILE__ ).'modules/new/sc-widget-flickr.php';
			
			require_once plugin_dir_path( __FILE__ ).'modules/new/widget-twitter.php';
			require_once plugin_dir_path( __FILE__ ).'modules/new/sc-widget-twitter.php';	
		}

		// Shop Modules	
		function dt_load_shop_modules() {
			
			if( function_exists( 'is_woocommerce' ) ){

				require_once plugin_dir_path( __FILE__ ).'modules/shop/product-images-default.php';
				require_once plugin_dir_path( __FILE__ ).'modules/shop/product-images-carousel.php';
				require_once plugin_dir_path( __FILE__ ).'modules/shop/product-images-list.php';
				require_once plugin_dir_path( __FILE__ ).'modules/shop/product-images-360viewer.php';
				require_once plugin_dir_path( __FILE__ ).'modules/shop/product-summary-nav-bar.php';
				require_once plugin_dir_path( __FILE__ ).'modules/shop/product-summary.php';
				require_once plugin_dir_path( __FILE__ ).'modules/shop/product-tabs.php';
				require_once plugin_dir_path( __FILE__ ).'modules/shop/product-tabs-exploded.php';
				require_once plugin_dir_path( __FILE__ ).'modules/shop/product-upsell-products.php';
				require_once plugin_dir_path( __FILE__ ).'modules/shop/product-related-products.php';

				require_once plugin_dir_path( __FILE__ ).'modules/shop/products.php';

				require_once plugin_dir_path( __FILE__ ).'modules/shop/menu-icon.php';

			}
			
		}

        function dt_load_params() {

            if( ! function_exists( 'vc_add_shortcode_param' ) ) {
                return;
            }  

            vc_add_shortcode_param( 'dt_sc_input_number', array( $this, 'dt_sc_input_number' ) );                        
            vc_add_shortcode_param( 'dt_sc_vc_title', array( $this, 'dt_sc_vc_title' ) );
            vc_add_shortcode_param( 'dt_sc_vc_hr', array( $this, 'dt_sc_vc_hr' ) );
            vc_add_shortcode_param( 'dt_sc_vc_hr_invisible', array( $this, 'dt_sc_vc_hr_invisible' ) );
            vc_add_shortcode_param( 'dt_sc_img_picker', array( $this, 'dt_sc_img_picker' ) );
        }

        function dt_sc_input_number( $settings, $value ) {

            $min     = ( isset( $settings['min'] ) ) ? $settings['min'] : "0";
            $max     = ( isset( $settings['max'] ) ) ? "max=\"{$settings['max']}\"" : "";
            $step    = ( isset( $settings['step'] ) ) ? "step=\"{$settings['step']}\"" : "";

            $out  = '<div class="dt_vc_param dt_vc_input_number">';
            $out .= '<input min="'.esc_attr( $min ).'"'. $max.$step.' name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value wpb-textinput ' .esc_attr( $settings['param_name'] ) . ' ' .esc_attr( $settings['type'] ) . '_field" type="number" value="' . esc_attr( $value ) . '" />';
            $out .= '</div>';

            return $out;
        }

        function dt_sc_vc_title( $settings, $value ) {

            $out  = '<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value wpb-textinput ' .esc_attr( $settings['param_name'] ) . ' ' .esc_attr( $settings['type'] ) . '_field" type="hidden" value="' . esc_attr( $value ) . '" />';
            return $out;
        }

        function dt_sc_vc_hr( $settings, $value ) {

            $out  = '<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value wpb-textinput ' .esc_attr( $settings['param_name'] ) . ' ' .esc_attr( $settings['type'] ) . '_field" type="hidden" value="' . esc_attr( $value ) . '" />';
            $out .= '<hr/>';

            return $out;
        }

        function dt_sc_vc_hr_invisible( $settings, $value ) {

            $out  = '<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value wpb-textinput ' .esc_attr( $settings['param_name'] ) . ' ' .esc_attr( $settings['type'] ) . '_field" type="hidden" value="' . esc_attr( $value ) . '" />';
            $out .= '<hr/>';

            return $out;
        }        

        function dt_sc_img_picker( $settings, $value ) {

            $value = ( isset( $settings['std'] ) && empty( $value ) ) ? $settings['std'] : $value;
            $titles = isset( $settings['title'] ) ? $settings['title'] : array();

            $out  = '<div class="dt_vc_param dt_vc_img_picker">';
            $out .= '<ul class="image-param">';
                    foreach( $settings['value'] as $key => $v ) {
                        $active = ( $value == $v ) ? 'class="active"' : '';
                        $title = isset ( $titles[$v] ) ? ' title="'.$titles[$v].'"': '';
                        $out .= '<li data-value="'.esc_attr( $v ).'" '.$active.'> <img src="'.esc_url( $key ).'"'.$title.' /> </li>';
                    }
            $out .= '</ul>';
            $out .= '<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value wpb-textinput ' .esc_attr( $settings['param_name'] ) . ' ' .esc_attr( $settings['type'] ) . '_field" type="hidden" value="' . esc_attr( $value ) . '" />';
            $out .= '</div>';

            return $out;
        }				

		function dt_map_shortcodes() {

			require_once plugin_dir_path( __FILE__ ).'modules/index.php';
		}

		function dt_vs_contanct_form_7_fields() {
			vc_add_param('contact-form-7',array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Extra class name', 'designthemes-core' ),
				'param_name' => 'html_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'designthemes-core' ),
			) );
		}

		function vc_gitem_template_attribute_dt_post_format( $value, $data ) {
			extract( array_merge( array(
				'post' => null,
				'data' => ''
			), $data ) );

			return include(  plugin_dir_path( __FILE__ ).'templates/dt_post_format.php' );
		}

		function vc_gitem_template_attribute_dt_post_tag( $value, $data ) {
			extract( array_merge( array(
				'post' => null,
				'data' => ''
			), $data ) );

			return include(  plugin_dir_path( __FILE__ ).'templates/dt_post_tag.php' );
		}

		function vc_gitem_template_attribute_dt_post_category( $value, $data ) {
			extract( array_merge( array(
				'post' => null,
				'data' => ''
			), $data ) );

			return include(  plugin_dir_path( __FILE__ ).'templates/dt_post_category.php' );
		}		

		function vc_gitem_template_attribute_dt_post_comment( $value, $data ) {
			extract( array_merge( array(
				'post' => null,
				'data' => ''
			), $data ) );

			return include(  plugin_dir_path( __FILE__ ).'templates/dt_post_comment.php' );
		}

		function dt_vc_add_grid_shortcodes( $shortcodes ) {

			# Post Format
			$shortcodes['dt_sc_gitem_post_format'] = array(
				'name' => esc_html__( 'Post Format', 'designthemes-core' ),
				'base' => 'dt_sc_gitem_post_format',
				'category' => esc_html__( 'Post', 'designthemes-core' ),
				'description' => esc_html__( 'Post Format of current post', 'designthemes-core' ),
				'show_settings_on_create' => false,
				'post_type' => Vc_Grid_Item_Editor::postType(),
				'params' => array(
					array( 'type' => 'textfield',
						'heading' => esc_html__( 'Extra class name', 'designthemes-core' ),
						'param_name' => 'el_class',
						'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'designthemes-core')
					)
				)
			);

			# Post Tag
			$shortcodes['dt_sc_gitem_post_tag'] = array(
				'name' => esc_html__( 'Post Tag', 'designthemes-core' ),
				'base' => 'dt_sc_gitem_post_tag',
				'category' => esc_html__( 'Post', 'designthemes-core' ),
				'description' => esc_html__( 'Post Tags of current post', 'designthemes-core' ),
				'show_settings_on_create' => false,
				'post_type' => Vc_Grid_Item_Editor::postType(),
				'params' => array(
					array( 'type' => 'textfield',
						'heading' => esc_html__( 'Extra class name', 'designthemes-core' ),
						'param_name' => 'el_class',
						'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'designthemes-core')
					)
				)
			);

			# Post Category
			$shortcodes['dt_sc_gitem_post_category'] = array(
				'name' => esc_html__( 'Post Categories', 'designthemes-core' ),
				'base' => 'dt_sc_gitem_post_category',
				'category' => esc_html__( 'Post', 'designthemes-core' ),
				'description' => esc_html__( 'Categories of current post', 'designthemes-core' ),
				'params' => array(
					array(
						'type' => 'checkbox',
						'heading' => esc_html__( 'Add link', 'designthemes-core' ),
						'param_name' => 'link',
						'description' => esc_html__( 'Add link to category?', 'designthemes-core' ),
					),
					array(
						'type' => 'dropdown',
						'heading' => esc_html__( 'Style', 'designthemes-core' ),
						'param_name' => 'category_style',
						'value' => array(
							esc_html__( 'None', 'designthemes-core' ) => ' ',
							esc_html__( 'Comma', 'designthemes-core' ) => ', ',
							esc_html__( 'Rounded', 'designthemes-core' ) => 'filled vc_grid-filter-filled-round-all',
							esc_html__( 'Less Rounded', 'designthemes-core' ) => 'filled vc_grid-filter-filled-rounded-all',
							esc_html__( 'Border', 'designthemes-core' ) => 'bordered',
							esc_html__( 'Rounded Border', 'designthemes-core' ) => 'bordered-rounded vc_grid-filter-filled-round-all',
							esc_html__( 'Less Rounded Border', 'designthemes-core' ) => 'bordered-rounded-less vc_grid-filter-filled-rounded-all',
						),
						'description' => esc_html__( 'Select category display style.', 'designthemes-core' ),
					),
					array(
						'type' => 'dropdown',
						'heading' => esc_html__( 'Color', 'designthemes-core' ),
						'param_name' => 'category_color',
						'value' => getVcShared( 'colors' ),
						'std' => 'grey',
						'param_holder_class' => 'vc_colored-dropdown',
						'dependency' => array(
							'element' => 'category_style',
							'value_not_equal_to' => array( ' ', ', ' ),
						),
						'description' => esc_html__( 'Select category color.', 'designthemes-core' ),
					),
					array(
						'type' => 'dropdown',
						'heading' => esc_html__( 'Category size', 'designthemes-core' ),
						'param_name' => 'category_size',
						'value' => getVcShared( 'sizes' ),
						'std' => 'md',
						'description' => esc_html__( 'Select category size.', 'designthemes-core' ),
					),
					array(
						'type' => 'textfield',
						'heading' => esc_html__( 'Extra class name', 'designthemes-core' ),
						'param_name' => 'el_class',
						'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'designthemes-core' ),
					),
					array(
						'type' => 'css_editor',
						'heading' => esc_html__( 'CSS box', 'designthemes-core' ),
						'param_name' => 'css',
						'group' => esc_html__( 'Design Options', 'designthemes-core' ),
					),
				),
				'post_type' => Vc_Grid_Item_Editor::postType(),
			);

			# Post Comment
			$shortcodes['dt_sc_gitem_post_comment'] = array(
				'name' => esc_html__( 'Post Comment', 'designthemes-core' ),
				'base' => 'dt_sc_gitem_post_comment',
				'category' => esc_html__( 'Post', 'designthemes-core' ),
				'description' => esc_html__( 'Post Comment Count of current post', 'designthemes-core' ),
				'show_settings_on_create' => false,
				'post_type' => Vc_Grid_Item_Editor::postType(),
				'params' => array(
					array( 'type' => 'textfield',
						'heading' => esc_html__( 'Extra class name', 'designthemes-core' ),
						'param_name' => 'el_class',
						'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'designthemes-core')
					)
				)
			);						

			return $shortcodes;
		}
		

		/*
		 * Shortcode : dt_sc_recent_posts_widget
		 */
		function vc_autocomplete__post_categories_field_search( $search_string ) {

		 	$vc_taxonomies = get_terms( 'category', array(
			 	'hide_empty' => false,
				'search' => $search_string,
			) );
			
			if ( is_array( $vc_taxonomies ) && ! empty( $vc_taxonomies ) ) {
				foreach ( $vc_taxonomies as $t ) {
					if ( is_object( $t ) ) {
						$data[] = vc_get_term_object( $t );
					}
				}
			}
			
			return $data;
		}
		
		/*
		 * Shortcode : dt_sc_recent_posts_widget
		 */
		function vc_autocomplete__post_categories_field_render( $term ) {
			 
			 $terms = get_terms( 'category', array(
			 	'include' => array( $term['value'] ),
				'hide_empty' => false,
			) );
			
			$data = false;
			if ( is_array( $terms ) && 1 === count( $terms ) ) {
				$term = $terms[0];
				$data = vc_get_term_object( $term );
			}
			
			return $data;
		}


		// Shop Single Default Template - 1
		function dt_vc_shop_single_template_1() {

		    $data               = array ();
		    $data['name']       = esc_html__( 'DT - Shop Single Template 1', 'dtlms' );
			$data['content']    = <<<CONTENT
[vc_row][vc_column width="1/2" el_class="rs_col-sm-12"][dt_sc_product_images_list columns="1" enable_grid_space="true"][dt_sc_empty_space margin_lg="50" margin_md="50" margin_sm="0" margin_xs="0" el_id="1545306752163-e1771211-fbf9"][/vc_column][vc_column width="1/2" el_class="rs_col-sm-12"][ult_sticky_section][dt_sc_empty_space margin_lg="50" margin_md="" margin_sm="30" margin_xs="30" el_id="1545393023593-d06d6284-4cbb"][dt_sc_product_summary_nav_bar items="breadcrumb, navigation"][dt_sc_product_summary items="title, price, additional_content, separator1, addtocart, buttons, separator2, meta_sku, meta_category, share_follow" button_items="wishlist, compare, sizeguide" button_inline_alignment="true"]Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.[/dt_sc_product_summary][dt_sc_empty_space margin_lg="50" margin_md="" margin_sm="0" margin_xs="0" el_id="1545393023666-1dadae0e-0428"][/ult_sticky_section][/vc_column][/vc_row][vc_row][vc_column][dt_sc_product_tabs][/vc_column][/vc_row][vc_row][vc_column width="2/3"][vc_custom_heading text="PLATEA NEC IPSUM" font_container="tag:h2|font_size:20|text_align:left" use_theme_fonts="yes"][vc_single_image source="external_link" external_img_size="785x300" custom_src="https://via.placeholder.com/785x300"][vc_column_text]Adipiscing commodo massa velit metus vestibulum sodales a sagittis id adipiscing risus platea scelerisque elementum platea nec ipsum condimentum a netus. Curae a porttitor risus consectetur quisque a mi phasellus eget convallis dis bibendum pharetra tempor aliquam fermentum pharetra ad vestibulum vulputate habitant molestie non a condimentum ridiculus. Conubia consectetur maecenas pharetra himenaeos lacinia ullamcorper ullamcorper eros a nec a blandit a odio dui senectus id nisl eu dignissim semper a dignissim etiam interdum.[/vc_column_text][vc_single_image source="external_link" external_img_size="785x300" custom_src="https://via.placeholder.com/785x500"][vc_column_text]Morbi massa a molestie est turpis interdum cras eu mus nulla ut a condimentum sodales libero a a cras euismod facilisis venenatis vestibulum. Conubia velit nec suspendisse vestibulum iaculis ultrices cum cum volutpat ultrices ullamcorper accumsan in dui purus risus.[/vc_column_text][vc_custom_heading text="LITORA AMET ACCUMSAN" font_container="tag:h2|font_size:20|text_align:left" use_theme_fonts="yes"][ultimate_carousel slides_on_desk="2" slides_on_tabs="2" slides_on_mob="1" arrows="off" dots="off"][dt_sc_image url="16011"][dt_sc_image url="16012"][dt_sc_image url="15992"][dt_sc_image url="16010"][/ultimate_carousel][vc_column_text]Adipiscing commodo massa velit metus vestibulum sodales a sagittis id adipiscing risus platea scelerisque elementum platea nec ipsum condimentum a netus. Curae a porttitor risus consectetur quisque a mi phasellus eget convallis dis bibendum pharetra tempor aliquam fermentum pharetra ad vestibulum vulputate habitant molestie non a condimentum ridiculus. Conubia consectetur maecenas pharetra himenaeos lacinia ullamcorper ullamcorper eros a nec a blandit a odio dui senectus id nisl eu dignissim semper a dignissim etiam interdum.[/vc_column_text][vc_column_text]Morbi massa a molestie est turpis interdum cras eu mus nulla ut a condimentum sodales libero a a cras euismod facilisis venenatis vestibulum. Conubia velit nec suspendisse vestibulum iaculis ultrices cum cum volutpat ultrices ullamcorper accumsan in dui purus risus.[/vc_column_text][/vc_column][vc_column width="1/3"][ult_sticky_section][dt_sc_empty_space margin_lg="50" margin_md="" margin_sm="" margin_xs="0" el_id="1545393290231-826fc0b9-e186"][dt_sc_accordion default_accordion_type="type2"][dt_sc_accordion_tab title="ABOUT COMPANY :"][vc_row_inner][vc_column_inner][dt_sc_image align="alignleft" url="16955"][vc_column_text]Condimentum a vivamus taciti id aliquam at suspendisse parturient at tristique a cum laoreet a urna ipsum a at con sequat adipi scing adip iscing gravida iaculis praesent cons equat sed.[/vc_column_text][/vc_column_inner][/vc_row_inner][/dt_sc_accordion_tab][dt_sc_accordion_tab title="INFO:"][vc_column_text]Ligula a condimentum cubilia consectetur parturient conubia elit a orci consectetur risus conubia tincidunt potenti a litora.[/vc_column_text][dt_sc_fancy_ul]
<ul>
 	<li>Lorem ipsum dolor sit amet.</li>
 	<li>Aliquam tincidunt mauris eu risus.</li>
 	<li>Vestibulum auctor dapibus neque.</li>
 	<li>Nunc dignissim risus id metus.</li>
 	<li>Cras ornare tristique elit.</li>
 	<li>Vivamus vestibulum nulla nec ante.</li>
 	<li>Praesent placerat risus quis eros.</li>
 	<li>Fusce pellentesque suscipit nibh.</li>
</ul>
[/dt_sc_fancy_ul][/dt_sc_accordion_tab][dt_sc_accordion_tab title="ADDRESS:"][vc_column_text]514 S. Magnolia St.
Orlando, FL 32806[/vc_column_text][/dt_sc_accordion_tab][/dt_sc_accordion][dt_sc_empty_space margin_lg="50" margin_md="" margin_sm="" margin_xs="" el_id="1545308774993-75cef85f-d71b"][/ult_sticky_section][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][ultimate_carousel el_class="no-space" arrows="off" dots="off"][dt_sc_image url="16009"][dt_sc_image url="16008"][dt_sc_image url="16006"][dt_sc_image url="16005"][dt_sc_image url="16004"][dt_sc_image url="16001"][dt_sc_image url="15998"][/ultimate_carousel][/vc_column][/vc_row][vc_row][vc_column][dt_sc_product_upsell_products columns="4" limit="8"][vc_empty_space height="50px"][dt_sc_product_related_products columns="4" limit="4"][/vc_column][/vc_row]
CONTENT;
  
    		vc_add_default_templates( $data );

		}

		// Shop Single Default Template - 2
		function dt_vc_shop_single_template_2() {

		    $data               = array ();
		    $data['name']       = esc_html__( 'DT - Shop Single Template 2', 'dtlms' );
			$data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1545886644357{padding-top: 60px !important;background-color: #f9f9f9 !important;}" addstyles="overflow: visible;"][vc_column][dt_sc_product_summary_nav_bar show_navigation="true"][/vc_column][vc_column][dt_sc_empty_space margin_lg="20" margin_md="" margin_sm="" margin_xs="" el_id="1545298613786-22eb6e15-fd7b"][/vc_column][/vc_row][vc_row full_width="stretch_row" equal_height="yes" content_placement="middle" css=".vc_custom_1546079006026{padding-bottom: 30px !important;background-color: #f9f9f9 !important;}"][vc_column width="1/2" el_class="rs_col-sm-12"][dt_sc_product_images_default][/vc_column][vc_column width="1/2" el_class="rs_col-sm-12"][dt_sc_product_summary items="title, rating, price, additional_content, addtocart, buttons" button_items="wishlist, compare, sizeguide" alignment="aligncenter" button_style="brdrfill" button_radius="square" button_inline_alignment="true" meta_inline_alignment="true" class="bg-with-shadow"]Posuere in netus a eu varius adipiscing suspendisse elementum vitae tempor suspendisse ullamcorper aenean taciti morbi potenti cursus id tortor. Cursus nulla consectetur a eros adipiscing himenaeos nam taciti id turpis a scelerisque vel habitasse. Posuere in netus a eu varius adipiscing suspendisse elementum vitae tempor suspendisse ullamcorper aenean taciti morbi potenti cursus id tortor. Cursus nulla consectetur a eros adipiscing himenaeos nam taciti id turpis a scelerisque vel habitasse.[/dt_sc_product_summary][/vc_column][/vc_row][vc_row][vc_column][dt_sc_product_tabs hide_title="true" class="bg-white"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1545827415155{padding-top: 0px !important;padding-bottom: 0px !important;background-color: #efefef !important;}"][vc_column][dt_sc_empty_space margin_lg="" margin_md="" margin_sm="" margin_xs="25" el_id="1545826927057-02585f70-1d77"][dt_sc_product_summary items="meta_sku, meta_category, share_follow" alignment="aligncenter" button_style="bgfill" button_radius="square" button_inline_alignment="true" social_icon_inline_alignment="true" meta_inline_alignment="true" class="margin-0"][/dt_sc_product_summary][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1545827239795{background-color: #f9f9f9 !important;}"][vc_column][dt_sc_empty_space margin_lg="50" margin_md="50" margin_sm="50" margin_xs="50" el_id="1546079200095-212ba348-3fb0"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1545827448365{padding-bottom: 30px !important;background-color: #f9f9f9 !important;}"][vc_column][dt_sc_product_upsell_products columns="4" limit="8"][/vc_column][/vc_row][vc_row][vc_column][dt_sc_empty_space margin_lg="50" margin_md="50" margin_sm="50" margin_xs="50" el_id="1545827002367-5e79d632-cad7"][/vc_column][/vc_row][vc_row][vc_column][dt_sc_product_related_products columns="4" limit="4"][/vc_column][/vc_row]
CONTENT;
  
    		vc_add_default_templates( $data );

		}


	}
}