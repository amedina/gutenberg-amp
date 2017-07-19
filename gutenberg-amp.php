<?php
/**
 * Plugin Name: Gutenberg AMP Blocks
 * Plugin URI: https://github.com/amedina/gutenberg-amp
 * Description: Set of AMP components for Gutenberg
 * Author: Alberto Medina
 * Author URI: https://github.com/amedina/gutenberg-amp
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: gb-amp
 * Domain Path: /languages/
 * License: GPLv2 or later
 *
 * @package gb-amp
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'GB_VERSION' ) ) {
	define( 'GB_VERSION', '1.0.0' );
}

if ( ! defined( 'GB_NAME' ) ) {
	define( 'GB_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

if ( ! defined( 'GB_DIR' ) ) {
	define( 'GB_DIR', WP_PLUGIN_DIR . '/' . GB_NAME );
}

var_dump(__FILE__);

if ( ! defined( 'GB_URL' ) ) {
	define( 'GB_URL', WP_PLUGIN_URL . '/' . GB_NAME );
}

/**
 * amp-iframe block
 */
//require_once( GB_DIR . '/blocks/layout/amp-iframe/index.php' );
