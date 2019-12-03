<?php

namespace SHORTCODE_ADDONS_UPLOAD\Google_map;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Google_map extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1');
    }

    public function templates() {
        return array(
            );
    }

}
