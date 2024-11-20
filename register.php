<?php

namespace ACFCustomBlocks;

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

}