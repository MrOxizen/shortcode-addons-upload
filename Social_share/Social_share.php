<?php

namespace SHORTCODE_ADDONS_UPLOAD\Social_share;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Icon_boxes
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Social_share extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1',);
    }

    public function templates() {
        return array(
        );
    }

}
