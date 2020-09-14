<?php
/**
 * @Packge       : Zeus
 * @Version      : 1.0
 * @Author       : Hasan Fardous
 * @Author URI 	 : https://github.com/hasanfardous
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'ZEUS_DIR_URI' ) ) {
	define( 'ZEUS_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'ZEUS_DIR_ASSETS_URI' ) ) {
	define( 'ZEUS_DIR_ASSETS_URI', ZEUS_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'ZEUS_DIR_CSS_URI' ) ) {
	define( 'ZEUS_DIR_CSS_URI', ZEUS_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'ZEUS_DIR_JS_URI' ) ) {
	define( 'ZEUS_DIR_JS_URI', ZEUS_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'ZEUS_DIR_IMGS_URI' ) ) {
	define( 'ZEUS_DIR_IMGS_URI', ZEUS_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'ZEUS_DIR_ICON_IMG_URI' ) ) {
	define( 'ZEUS_DIR_ICON_IMG_URI', ZEUS_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'ZEUS_DIR_PATH' ) ) {
	define( 'ZEUS_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'ZEUS_DIR_PATH_INC' ) ) {
	define( 'ZEUS_DIR_PATH_INC', ZEUS_DIR_PATH . 'inc/' );
}

//Classes Folder Directory
if ( ! defined( 'ZEUS_DIR_PATH_CLASSES' ) ) {
	define( 'ZEUS_DIR_PATH_CLASSES', ZEUS_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'ZEUS_DIR_PATH_HOOKS' ) ) {
	define( 'ZEUS_DIR_PATH_HOOKS', ZEUS_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function zeus_admin_script(){
    wp_enqueue_style( 'zeus-admin', get_template_directory_uri().'/assets/css/zeus_admin.css', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'zeus_admin_script' );



/**
 * Include File
 *
 */
require_once( ZEUS_DIR_PATH_INC . 'zeus-breadcrumbs.php' );
require_once( ZEUS_DIR_PATH_INC . 'zeus-widgets-reg.php' );
require_once( ZEUS_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( ZEUS_DIR_PATH_INC . 'zeus-functions.php' );
require_once( ZEUS_DIR_PATH_INC . 'zeus-commoncss.php' );
require_once( ZEUS_DIR_PATH_INC . 'support-functions.php' );
require_once( ZEUS_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( ZEUS_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( ZEUS_DIR_PATH_INC . 'plugin_activation.php' );
require_once( ZEUS_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( ZEUS_DIR_PATH_INC . 'customizer/zeus-add-custom-customizer-controll.php' );
require_once( ZEUS_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( ZEUS_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( ZEUS_DIR_PATH_HOOKS . 'hooks.php' );
require_once( ZEUS_DIR_PATH_HOOKS . 'hooks-functions.php' );

/**
 * Instantiate Zeus object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features.
 *
 */

$Zeus = new Zeus();