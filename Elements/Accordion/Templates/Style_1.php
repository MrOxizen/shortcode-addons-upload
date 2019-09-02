<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Accordion\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_1 extends Templates {

    public function style_data_upgrade() {
        $styledata = $this->dbdata['css'];
        $stylefiles = explode('||#||', $styledata);
        $style = explode('|', $stylefiles[0]);

        $this->update = [
            'sa-ac-op-cl-icon' => $stylefiles[2],
            'sa-ac-op-cl-h-icon' => $stylefiles[4],
            'sa-ac-op-cl-h-icon' => $stylefiles[4],
            'shortcode-addons-2-0-preview' => $style[1],
            'sa-ac-title-bg-color' => $style[13],
            'sa-ac-title-color' => $style[77],
            'sa-ac-title-h-color' => $style[101],
            'sa-ac-title-a-color' => $style[169],
            
            'sa-ac-op-cl-bg-color' => $style[103],
            'sa-ac-op-cl-h-bg-color' => $style[105],
            
            'sa-ac-op-cl-color' => $style[115],
            'sa-ac-op-cl-h-color' => $style[117],
            'sa-ac-op-cl-br-color' => $style[123],
            'sa-ac-op-cl-a-bg-color' => $style[157],
            'sa-ac-op-cl-h-br-color' => $style[159],
            'sa-ac-op-cl-a-br-color' => $style[177],
            'sa-ac-cont-bg-color' => $style[211],
            'sa-ac-cont-color' => $style[217],
            'sa-ac-icon-position' => $style[279],
            'sa-ac-opening' => $style[281],
        ];

        $this->upgrade_bg_image($style, 5, 'sa-ac-title-bg');
        $this->upgrade_border($style, 9, 'sa-ac-title-br');
        $this->upgrade_dimensions($style, 19, 'sa-ac-title-br-radius');
        $this->upgrade_dimensions($style, 31, 'sa-ac-title-margin');
        $this->upgrade_dimensions($style, 47, 'sa_ac_margin');
        $this->upgrade_box_shadow($style, 63, 'sa-ac-title-bx-shadow');
        $this->upgrade_animation($style, 69, 'sa-ac-animation');
        $this->upgrade_number($style, 73, 'sa-ac-title-typho-size');
        $this->upgrade_font_settings($style, 79, 'sa-ac-title-typho');
        $this->upgrade_dimensions($style, 85, 'sa-ac-title-padding');
        $this->upgrade_number($style, 107, 'sa-ac-op-cl-size');
        $this->upgrade_number($style, 111, 'sa-ac-op-cl-width');
        $this->upgrade_border($style, 119, 'sa-ac-op-cl-h-br');
        $this->upgrade_dimensions($style, 125, 'sa-ac-op-cl-br-radius');
        $this->upgrade_dimensions($style, 141, 'sa-ac-op-cl-margin');
        $this->upgrade_border($style, 173, 'sa-ac-op-cl-a-br');
        $this->upgrade_dimensions($style, 179, 'sa-ac-op-cl-a-br-radius');
        $this->upgrade_number($style, 213, 'sa-ac-cont-typho-size');
        $this->upgrade_font_settings($style, 219, 'sa-ac-cont-typho', 'sa-ac-cont-tx-shadow');
        $this->upgrade_box_shadow($style, 225, 'sa-ac-cont-bx-shadow');
        $this->upgrade_dimensions($style, 231, 'sa-ac-cont-br-radius');
        $this->upgrade_dimensions($style, 247, 'sa-ac-cont-padding');
        $this->upgrade_dimensions($style, 263, 'sa-ac-cont-margin');
        echo '<pre>';
        print_r($style);
        print_r($this->update);
        echo '</pre>';
    }

    public function default_render($style, $child, $admin) {

        foreach ($child as $v) {
            parse_str($v['files'], $value);
            echo '  <div class="oxi-addons-AC-style-1 oxi-addons-admin-edit-list">
                        <div class="oxi-addons-AC-style-1-heading active" ref="#oxi-addons-AC-style-1-heading-id-25">
                            <div class="span-active"><i class="fas fa-arrow-down oxi-icons"></i></div>
                            <div class="span-deactive"><i class="fas fa-arrow-right oxi-icons"></i></div>
                            <div class="heading-data">' . $value['sa_el_text'] . '</div>
                        </div>
                        <div class="oxi-addons-ac-C-9" id="oxi-addons-AC-style-1-heading-id-25" style="display: block;">
                            <div class="oxi-addons-ac-C-9-b">
                               ' . $value['sa_el_content'] . '
                            </div>
                        </div> ';
            if ($admin == 'admin'):
                echo '  <div class="oxi-addons-admin-absulote">
                            <div class="oxi-addons-admin-absulate-edit">
                                <button class="btn btn-primary shortcode-addons-template-item-edit" type="button" value="' . $v['id'] . '">Edit</button>
                            </div>
                            <div class="oxi-addons-admin-absulate-delete">
                               <button class="btn btn-danger shortcode-addons-template-item-delete" type="submit" value="' . $v['id'] . '">Delete</button>
                             </div>
                        </div>';
            endif;
            echo ' </div>';
        }
    }

//    public function child_data_upgrade($data) {
//        
//    }
}

new Style_1();
