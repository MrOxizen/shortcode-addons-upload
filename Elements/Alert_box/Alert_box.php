<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Alert_box;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Alert_box extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1', 'Style_2');
    }

    public function templates() {
        return array(
         
            );
    }

}
