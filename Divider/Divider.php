<?php

namespace SHORTCODE_ADDONS_UPLOAD\Divider;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Display post
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Divider extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1','Style_2');
    }

    public function templates() {
        return array(
            '',
        );
    }

}
