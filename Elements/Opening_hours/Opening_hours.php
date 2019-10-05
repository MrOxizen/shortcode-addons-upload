<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Opening_hours;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Opening_hours extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1', 'Style_2', 'Style_3');
    }

    public function templates() {
        return array(
          
            
          );
    }

}
