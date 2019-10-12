<?php

namespace SHORTCODE_ADDONS_UPLOAD\Hover_effects;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Hover_effects extends Elements_Frontend {

   public function pre_active() {
        return array('Style_1', 'Style_2', 'Style_3', 'Style_4');
    }
  public function templates() {
        return array(
          );
    }
   
}
