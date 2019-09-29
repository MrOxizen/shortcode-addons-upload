<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Link_effects;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Link_effects extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1', 'Style_2');
    }

    public function templates() {
        return array(

            );
    }

}
