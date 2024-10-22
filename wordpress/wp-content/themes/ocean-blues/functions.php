<?php
if (!defined('OCEAN_BLUES_VERSION')) {
    // Replace the version number of the theme on each release.
    define('OCEAN_BLUES_VERSION', wp_get_theme()->get('Version'));
}
define('OCEAN_BLUES_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('OCEAN_BLUES_DIR', trailingslashit(get_template_directory()));
define('OCEAN_BLUES_URL', trailingslashit(get_template_directory_uri()));

if (!function_exists('OCEAN_BLUES_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since walker_fse 1.0.0
     *
     * @return void
     */
    function OCEAN_BLUES_support()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Add support for block styles.
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;
add_action('after_setup_theme', 'OCEAN_BLUES_support');

/*----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (!function_exists('OCEAN_BLUES_styles')) :
    function OCEAN_BLUES_styles()
    {
        // registering style for theme
        wp_enqueue_style('ocean-blues-style', get_stylesheet_uri(), array(), OCEAN_BLUES_VERSION);
        wp_enqueue_style('ocean-blues-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
        if (is_rtl()) {
            wp_enqueue_style('ocean-blues-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css');
        }
        wp_enqueue_script('jquery');
        wp_enqueue_script('ocean-blues-scripts', get_template_directory_uri() . '/assets/js/ocean-blues-scripts.js', array(), OCEAN_BLUES_VERSION, true);
    }
endif;

add_action('wp_enqueue_scripts', 'OCEAN_BLUES_styles');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function OCEAN_BLUES_block_assets()
{
    wp_enqueue_style('ocean-blues-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action('enqueue_block_assets', 'OCEAN_BLUES_block_assets');

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

if (!function_exists('OCEAN_BLUES_excerpt_more_postfix')) {
    function OCEAN_BLUES_excerpt_more_postfix($more)
    {
        if (is_admin()) {
            return $more;
        }
        return '...';
    }
    add_filter('excerpt_more', 'OCEAN_BLUES_excerpt_more_postfix');
}
function OCEAN_BLUES_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'OCEAN_BLUES_add_woocommerce_support');
