<?php

/**
 * ocean-blues: Block Patterns
 *
 * @since ocean-blues 1.0.0
 */

/**
 * Registers pattern categories for ocean-blues
 *
 * @since ocean-blues 1.0.0
 *
 * @return void
 */
function OCEAN_BLUES_register_pattern_category()
{
	$block_pattern_categories = array(
		'ocean-blues' => array('label' => __('OCEAN-BLUES Patterns', 'ocean-blues')),
	);

	$block_pattern_categories = apply_filters('OCEAN_BLUES_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action('init', 'OCEAN_BLUES_register_pattern_category', 9);
