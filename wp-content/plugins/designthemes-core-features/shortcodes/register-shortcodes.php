<?php
if (! class_exists ( 'DTCoreShortcodes' )) {
	
	/**
	 * Used to "Loades Core Shortcodes & Add button to tinymce"
	 *
	 * @author iamdesigning11
	 */
	class DTCoreShortcodes {

		/**
		 * Constructor for DTCoreShortcodes
		 */
		function __construct() {

			add_action( 'init', array( $this, 'dt_sc_load_shortcodes') );

			add_action( 'wp_enqueue_scripts', array(
				$this,
				'dt_wp_enqueue_scripts'
			) );

			add_action( 'init', array( $this, 'dt_sc_mc_subscribe') );

			add_filter( 'widget_text', 'do_shortcode' );

		}

		function dt_sc_load_shortcodes() {

			require_once plugin_dir_path ( __FILE__ ) . 'shortcodes.php';
			if( function_exists( 'is_woocommerce' ) ){
				require_once plugin_dir_path ( __FILE__ ) . 'woo-shortcodes.php';
			}

		}

		function dt_wp_enqueue_scripts() {
			/* Front End CSS & jQuery */
			wp_enqueue_style ( 'dt-animation-css', plugin_dir_url ( __FILE__ ) . 'css/animations.css' );
			wp_enqueue_style ( 'dt-slick-css', plugin_dir_url ( __FILE__ ) . 'css/slick.css' );
			wp_enqueue_style ( 'dt-swiper-css', plugin_dir_url ( __FILE__ ) . 'css/swiper.min.css' );
			wp_enqueue_style ( 'dt-scrolltabs-css', plugin_dir_url ( __FILE__ ) . 'css/dt-scrolltabs.css' );
			wp_enqueue_style ( 'dt-sc-css', plugin_dir_url ( __FILE__ ) . 'css/shortcodes.css' );

			wp_enqueue_script ( 'dt-sc-tabs', plugin_dir_url ( __FILE__ ) . 'js/jquery.tabs.min.js', array (), false, true );
			wp_enqueue_script ( 'dt-sc-tiptip', plugin_dir_url ( __FILE__ ) . 'js/jquery.tipTip.minified.js', array (), false, true );
			wp_enqueue_script ( 'dt-sc-inview', plugin_dir_url ( __FILE__ ) . 'js/jquery.inview.js', array (), false, true );
			wp_enqueue_script ( 'dt-sc-animatenum', plugin_dir_url ( __FILE__ ) . 'js/jquery.animateNumber.min.js', array (), false, true );
			wp_enqueue_script ( 'dt-sc-donutchart', plugin_dir_url ( __FILE__ ) . 'js/jquery.donutchart.js', array (), false, true );
			wp_enqueue_script ( 'dt-sc-slick', plugin_dir_url ( __FILE__ ) . 'js/slick.min.js', array (), false, true );
			wp_enqueue_script ( 'dt-sc-scrolltabs', plugin_dir_url ( __FILE__ ) . 'js/dt.scrolltabs.js', array (), false, true );
			wp_enqueue_script ( 'dt-sc-toggle-click', plugin_dir_url ( __FILE__ ) . 'js/jquery.toggle.click.js', array (), false, true );
			wp_enqueue_script ( 'dt-sc-script', plugin_dir_url ( __FILE__ ) . 'js/shortcodes.js', array (), false, true );
			wp_enqueue_script ( 'dt-sc-swiper', plugin_dir_url ( __FILE__ ) . 'js/swiper.min.js', array (), false, true );
			wp_enqueue_script ( 'dt-sc-360-viewer', plugin_dir_url ( __FILE__ ) . 'js/dt-360-viewer.js', array (), false, true );

			wp_enqueue_script ( 'dt-custom-waypoints', plugin_dir_url(__FILE__) . 'js/custom-waypoints.js', array('jquery'), false, true );

			if( function_exists( 'is_woocommerce' ) ){
				wp_enqueue_script ( 'dt-sc-woo-script', plugin_dir_url ( __FILE__ ) . 'js/woo-shortcodes.js', array (), false, true );
			}
		}

		function dt_sc_mc_subscribe() {
			if( defined('TRISS_CORE_PLUGIN') ) {
				require_once( TRISS_CORE_PLUGIN."/apis/mailchimp/mailchimp.php" );
			}
		}
	}
}
?>