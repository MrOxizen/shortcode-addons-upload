<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Admin\Upgrade;

class Style_1 extends Upgrade {

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
    }

    public function child_data_upgrade($value) {
        $ex = explode('||#||', $value);
        $files = ['sa_el_text' => $ex[2],
            'sa_el_content' => $ex[4]
        ];
        return $files;
    }

}
