<?php
/**
 * amp-iframe
 *
 * Gutenberg AMP Custom Block assets.
 *
 * @since   1.0.0
 * @package amp-gb
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue the block's assets for the editor.
 *
 * `wp-blocks`: includes block type registration and related functions.
 * `wp-element`: includes the WordPress Element abstraction for describing the structure of your blocks.
 * `wp-i18n`: To internationalize the block's. text.
 *
 * @since 1.0.0
 */
add_action( 'enqueue_block_editor_assets', 'gb_amp_iframe_block_editor_assets' );
function gb_amp_iframe_block_editor_assets() {

	wp_enqueue_script(
		'gb-amp-iframe',
		plugins_url( 'block.js', __FILE__ ),
		array( 'wp-blocks', 'wp-i18n', 'wp-element' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'block.js' )
	);

	wp_enqueue_style(
		'gb-amp-iframe',
		plugins_url( 'editor.css', __FILE__ ),
		array( 'wp-edit-blocks' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'editor.css' )
	);
}

/**
 * Enqueue the block's assets for the frontend.
 *
 * @since 1.0.0
 */
add_action( 'enqueue_block_assets', 'gb_amp_iframe_block_assets' );
function gb_amp_iframe_block_assets() {

	wp_enqueue_style(
		'gb-amp-iframe-frontend',
		plugins_url( 'style.css', __FILE__ ),
		array( 'wp-blocks' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'editor.css' )
	);
}