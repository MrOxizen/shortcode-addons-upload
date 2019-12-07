<?php

/*
  Plugin Name: Flipbox - Awesomes Flip Boxes Image Overlay
  Plugin URI: https://www.oxilab.org/downloads/flipbox-image-overlay/
  Description: Flipbox - Awesomes Flip Boxes Image Overlay is the most easiest Flip builder Plugin. Create multiple Flip or  Flipboxes  with this.
  Author: Biplob Adhikari
  Author URI: http://www.oxilab.org/
  Version: 2.3
 */
if (!defined('ABSPATH'))
    exit;

define('OXI_FLIP_BOX_FILE', __FILE__);
define('OXI_FLIP_BOX_BASENAME', plugin_basename(__FILE__));
define('OXI_FLIP_BOX_PATH', plugin_dir_path(__FILE__));
define('OXI_FLIP_BOX_URL', plugins_url('/', __FILE__));
define('OXI_FLIP_BOX_PLUGIN_VERSION', '2.3.0');
define('OXI_FLIP_BOX_TEXTDOMAIN', 'oxi-flip-box-plugin');

/**
 * Including composer autoloader globally.
 *
 * @since 2.3.0
 */
require_once OXI_FLIP_BOX_PATH . 'autoloader.php';

/**
 * Run plugin after all others plugins
 *
 * @since 2.3.0
 */
add_action('plugins_loaded', function () {
    \OXI_FLIP_BOX_PLUGINS\Classes\Bootstrap::instance();
});


/**
 * Activation hook
 *
 * @since 2.3.0
 */
register_activation_hook(__FILE__, function () {
    $Installation = new \OXI_FLIP_BOX_PLUGINS\Classes\Installation();
    $Installation->plugin_activation_hook();
});

/**
 * Deactivation hook
 *
 * @since 2.3.0
 */
register_deactivation_hook(__FILE__, function () {
    $Installation = new \OXI_FLIP_BOX_PLUGINS\Classes\Installation();
    $Installation->plugin_deactivation_hook();
});

/**
 * Upgrade hook
 *
 * @since 2.3.0
 */
add_action('upgrader_process_complete', function ($upgrader_object, $options) {
    $Installation = new \OXI_FLIP_BOX_PLUGINS\Classes\Installation();
    $Installation->plugin_upgrade_hook($upgrader_object, $options);
}, 10, 2);
