<?php

/**
 * Plugin Name: Devteam Custom Blocks
 * Description: Templating structure for the creation of custom Gutenberg Blocks (procedural PHP version).
 * Version:     1.0.0
 * Author:      Matt Bedford | Ulisse
 * Text Domain: devteam
 * Requires PHP:    8.1
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


namespace DevteamCustomBlocks;

if (!defined('ABSPATH')) {
	exit;
}

// ACF Pro is required, but we don't include it in plugin headers as it is currently unavailable on wp repos.
if ( ! function_exists( 'is_plugin_active' ) ) {
	include_once ABSPATH . 'wp-admin/includes/plugin.php';
}

// If we find ACF Pro, then go ahead and register our blocks.
if ( is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {

	add_action('init', function () {
		include_once 'register.php';
		register_acf_custom_blocks();
	});

}