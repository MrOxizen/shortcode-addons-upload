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
     public function template_rendar($data = array()) {

        return __('<div class="oxi-addons-col-6" id="' . $data['style']['style_name'] . '">
                                <div class="oxi-addons-style-preview">
                                    <div class="oxi-addons-style-preview-top oxi-addons-center oxiequalHeight">
                                    ' . ($this->Shortcode($data)) . '
                                    </div>
                                    <div class="oxi-addons-style-preview-bottom">
                                        <div class="oxi-addons-style-preview-bottom-left">
                                        ' . $this->ShortcodeName($data['style']['style_name']) . '
                                        </div>
                                        ' . $this->ShortcodeControl($data) . '
                                    </div>
                                </div>
                             </div>', SHORTCODE_ADDOONS);
    }
}
