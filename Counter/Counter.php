<?php

namespace SHORTCODE_ADDONS_UPLOAD\Counter;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Count_down
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Counter extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1');
    }

    public function templates() {
        return array(
       );
    }

}
