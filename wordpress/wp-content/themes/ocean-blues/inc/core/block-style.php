<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package ocean-blues
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 0.1
     *
     * @return void
     */
    function OCEAN_BLUES_register_block_styles()
    {
        register_block_style(
            'core/columns',
            array(
                'name'  => 'ocean-blues-boxshadow',
                'label' => __('Box Shadow', 'ocean-blues')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'ocean-blues-boxshadow',
                'label' => __('Box Shadow', 'ocean-blues')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'ocean-blues-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'ocean-blues')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'ocean-blues-boxshadow-large',
                'label' => __('Box Shadow Large', 'ocean-blues')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'ocean-blues-boxshadow',
                'label' => __('Box Shadow', 'ocean-blues')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'ocean-blues-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'ocean-blues')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'ocean-blues-boxshadow-large',
                'label' => __('Box Shadow Larger', 'ocean-blues')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'ocean-blues-boxshadow',
                'label' => __('Box Shadow', 'ocean-blues')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'ocean-blues-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'ocean-blues')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'ocean-blues-boxshadow-larger',
                'label' => __('Box Shadow Large', 'ocean-blues')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'ocean-blues-image-pulse',
                'label' => __('Iamge Pulse Effect', 'ocean-blues')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'ocean-blues-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'ocean-blues')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'ocean-blues-image-hover-pulse',
                'label' => __('Hover Pulse Effect', 'ocean-blues')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'ocean-blues-image-hover-rotate',
                'label' => __('Hover Rotate Effect', 'ocean-blues')
            )
        );
        register_block_style(
            'core/columns',
            array(
                'name'  => 'ocean-blues-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'ocean-blues')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'ocean-blues-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'ocean-blues')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'ocean-blues-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'ocean-blues')
            )
        );

        register_block_style(
            'core/post-terms',
            array(
                'name'  => 'categories-background-with-round',
                'label' => __('Background with round corner style', 'ocean-blues')
            )
        );
        register_block_style(
            'core/post-title',
            array(
                'name'  => 'title-hover-primary-color',
                'label' => __('Hover: Primary color', 'ocean-blues')
            )
        );
        register_block_style(
            'core/post-title',
            array(
                'name'  => 'title-hover-secondary-color',
                'label' => __('Hover: Secondary color', 'ocean-blues')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-color',
                'label' => __('Hover: Primary Color', 'ocean-blues')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'ocean-blues')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-bgcolor',
                'label' => __('Hover: Primary color fill', 'ocean-blues')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-bgcolor',
                'label' => __('Hover: Secondary color fill', 'ocean-blues')
            )
        );

        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-color',
                'label' => __('Hover: Primary Color', 'ocean-blues')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'ocean-blues')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-fill',
                'label' => __('Hover: Primary Fill', 'ocean-blues')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-fill',
                'label' => __('Hover: secondary Fill', 'ocean-blues')
            )
        );

        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-no-bullet',
                'label' => __('List Style: Hide bullet', 'ocean-blues')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'hide-bullet-list-link-hover-style-primary',
                'label' => __('Hover style with primary color and hide bullet', 'ocean-blues')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'hide-bullet-list-link-hover-style-secondary',
                'label' => __('Hover style with secondary color and hide bullet', 'ocean-blues')
            )
        );

        register_block_style(
            'core/gallery',
            array(
                'name'  => 'enable-grayscale-mode-on-image',
                'label' => __('Enable Grayscale Mode on Image', 'ocean-blues')
            )
        );
        register_block_style(
            'core/social-links',
            array(
                'name'  => 'social-icon-border',
                'label' => __('Border Style', 'ocean-blues')
            )
        );
        register_block_style(
            'core/page-list',
            array(
                'name'  => 'ocean-blues-page-list-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'ocean-blues')
            )
        );
        register_block_style(
            'core/categories',
            array(
                'name'  => 'ocean-blues-categories-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'ocean-blues')
            )
        );
        register_block_style(
            'core/cover',
            array(
                'name'  => 'ocean-blues-cover-round-style',
                'label' => __('Round Corner Style', 'ocean-blues')
            )
        );
    }
    add_action('init', 'OCEAN_BLUES_register_block_styles');
}
