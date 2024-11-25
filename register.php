<?php

namespace DevteamCustomBlocks;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function register_acf_custom_blocks() {

	// get an array of all of the block.json files in the blocks directory
	$block_json_files = glob( dirname(__FILE__) . '/blocks/**/block.json' );

	// auto register all blocks that were found.
	foreach ( $block_json_files as $block_json_file ) {
		register_block_type( $block_json_file );
	}

    // Register (but not enqueue!) any external scripts here and take note of their tag.
    wp_register_script(
        'swiper-js', // --> add this to block.json on "script" line.
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        [],
        false,
        false
    );
    wp_register_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css'); // --> And add this to "style" line.

}