<?php
/**
 * Theme Functions
 *
 * @package DTtheme
 * @author DesignThemes
 * @link http://wedesignthemes.com
 */
define( 'TRISS_THEME_DIR', get_template_directory() );
define( 'TRISS_THEME_URI', get_template_directory_uri() );

if (function_exists ('wp_get_theme')) :
	$themeData = wp_get_theme();
	define( 'TRISS_THEME_NAME', $themeData->get('Name'));
	define( 'TRISS_THEME_VERSION', $themeData->get('Version'));
endif;

/* ---------------------------------------------------------------------------
 * Loads Kirki
 * ---------------------------------------------------------------------------*/
require_once( TRISS_THEME_DIR .'/kirki/index.php' );

/* ---------------------------------------------------------------------------
 * Loads Codestar
 * ---------------------------------------------------------------------------*/

if( !defined( 'CS_OPTION' ) ) {
	define( 'CS_OPTION', '_triss_cs_options' );
}

require_once TRISS_THEME_DIR .'/cs-framework/cs-framework.php';

if( !defined( 'CS_ACTIVE_TAXONOMY' ) ) { 
	define( 'CS_ACTIVE_TAXONOMY',   false );
}

if( !defined( 'CS_ACTIVE_SHORTCODE' ) ) {
	define( 'CS_ACTIVE_SHORTCODE',  false );
}
if( !defined( 'CS_ACTIVE_CUSTOMIZE' ) ) {
	define( 'CS_ACTIVE_CUSTOMIZE',  false );
}

/* ---------------------------------------------------------------------------
 * Create function to get theme options
 * --------------------------------------------------------------------------- */
function triss_cs_get_option($key, $value = '') {

	$v = cs_get_option( $key );

	if ( !empty( $v ) ) {
		return $v;
	} else {
		return $value;
	}
}

/* ---------------------------------------------------------------------------
 * Loads Theme Textdomain
 * ---------------------------------------------------------------------------*/ 
define( 'TRISS_LANG_DIR', TRISS_THEME_DIR. '/languages' );
load_theme_textdomain( 'triss', TRISS_LANG_DIR );

/* ---------------------------------------------------------------------------
 * Loads the Admin Panel Style
 * ---------------------------------------------------------------------------*/
function triss_admin_scripts() {
	wp_enqueue_style('triss-admin', TRISS_THEME_URI .'/cs-framework-override/style.css');
}
add_action( 'admin_enqueue_scripts', 'triss_admin_scripts' );

/* ---------------------------------------------------------------------------
 * Loads Theme Functions
 * ---------------------------------------------------------------------------*/

// Functions --------------------------------------------------------------------
require_once( TRISS_THEME_DIR .'/framework/register-functions.php' );

// Header -----------------------------------------------------------------------
require_once( TRISS_THEME_DIR .'/framework/register-head.php' );

// Hooks ------------------------------------------------------------------------
require_once( TRISS_THEME_DIR .'/framework/register-hooks.php' );

// Post Functions ---------------------------------------------------------------
require_once( TRISS_THEME_DIR .'/framework/register-post-functions.php' );
new triss_post_functions;

// Widgets ----------------------------------------------------------------------
add_action( 'widgets_init', 'triss_widgets_init' );
function triss_widgets_init() {
	require_once( TRISS_THEME_DIR .'/framework/register-widgets.php' );
}

// Plugins ---------------------------------------------------------------------- 
require_once( TRISS_THEME_DIR .'/framework/register-plugins.php' );

// WooCommerce ------------------------------------------------------------------
if( function_exists( 'is_woocommerce' ) ){
	require_once( TRISS_THEME_DIR .'/framework/woocommerce/register-woocommerce.php' );
}

// WP Store Locator -------------------------------------------------------------
if( class_exists( 'WP_Store_locator' ) ){
	require_once( TRISS_THEME_DIR .'/framework/register-storelocator.php' );
}

// Register Templates -----------------------------------------------------------
require_once( TRISS_THEME_DIR .'/framework/register-templates.php' );

// Register Gutenberg -----------------------------------------------------------
require_once( TRISS_THEME_DIR .'/framework/register-gutenberg-editor.php' );