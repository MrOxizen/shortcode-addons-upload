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
        $newdata = http_build_query($this->update);
        //$this->wpdb->query($this->wpdb->prepare("UPDATE {$this->parent_table} SET css = %s, stylesheet = %s WHERE id = %d", $newdata, $stylesheet, $styleid));
    }

    public function child_data_upgrade() {
        foreach ($this->child as $value) {
            $itemid = $value['id'];
            $filesdat = explode('||#||', $value['files']);
            //  print_r($filesdata);
            $filesd = $filesdat;
            $fil = 'sa-ac-opening-number-lap=5&sa-ac-opening-number-tab=&sa-ac-opening-number-mob=&sa-ac-opening=randomly&sa-ac-icon-position=right&sa-ac-animation-type=pulse&sa-ac-animation-duration-size=0&sa-ac-animation-delay-size=0&sa_ac_margin-lap-choices=%25&sa_ac_margin-lap-top=&sa_ac_margin-lap-right=&sa_ac_margin-lap-bottom=&sa_ac_margin-lap-left=&sa_ac_margin-tab-choices=em&sa_ac_margin-tab-top=1&sa_ac_margin-tab-right=1&sa_ac_margin-tab-bottom=1&sa_ac_margin-tab-left=5&sa_ac_margin-mob-choices=px&sa_ac_margin-mob-top=1&sa_ac_margin-mob-right=1&sa_ac_margin-mob-bottom=1&sa_ac_margin-mob-left=1&sa-ac-title-typho-font=Architects%2BDaughter&sa-ac-title-typho-size-lap-choices=em&sa-ac-title-typho-size-lap-size=0.0&sa-ac-title-typho-size-tab-choices=rem&sa-ac-title-typho-size-tab-size=0.0&sa-ac-title-typho-size-mob-choices=vm&sa-ac-title-typho-size-mob-size=5.6&sa-ac-title-typho-weight=300&sa-ac-title-typho-transform=&sa-ac-title-typho-style=&sa-ac-title-typho-decoration=&sa-ac-title-typho-l-height-lap-choices=px&sa-ac-title-typho-l-height-lap-size=0&sa-ac-title-typho-l-height-tab-choices=px&sa-ac-title-typho-l-height-tab-size=0&sa-ac-title-typho-l-height-mob-choices=px&sa-ac-title-typho-l-height-mob-size=0&sa-ac-title-typho-l-spacing-lap-choices=px&sa-ac-title-typho-l-spacing-lap-size=0&sa-ac-title-typho-l-spacing-tab-choices=px&sa-ac-title-typho-l-spacing-tab-size=0&sa-ac-title-typho-l-spacing-mob-choices=px&sa-ac-title-typho-l-spacing-mob-size=0&sa-ac-title-color=%23bd008e&sa-ac-title-bg-color=&sa-ac-title-bg-select=custom-url&sa-ac-title-bg-image=&sa-ac-title-bg-url=&sa-ac-title-bg-position-lap=&sa-ac-title-bg-position-tab=&sa-ac-title-bg-position-mob=&sa-ac-title-bg-attachment=&sa-ac-title-bg-repeat-lap=&sa-ac-title-bg-repeat-tab=&sa-ac-title-bg-repeat-mob=&sa-ac-title-bg-size-lap=&sa-ac-title-bg-size-tab=&sa-ac-title-bg-size-mob=&sa-ac-title-bg-width-lap-choices=px&sa-ac-title-bg-width-lap-size=1000&sa-ac-title-bg-width-tab-choices=px&sa-ac-title-bg-width-tab-size=1000&sa-ac-title-bg-width-mob-choices=px&sa-ac-title-bg-width-mob-size=1000&sa-ac-title-br-type=none&sa-ac-title-br-width-lap-top=0&sa-ac-title-br-width-lap-right=0&sa-ac-title-br-width-lap-bottom=0&sa-ac-title-br-width-lap-left=0&sa-ac-title-br-width-tab-top=0&sa-ac-title-br-width-tab-right=0&sa-ac-title-br-width-tab-bottom=0&sa-ac-title-br-width-tab-left=0&sa-ac-title-br-width-mob-top=0&sa-ac-title-br-width-mob-right=0&sa-ac-title-br-width-mob-bottom=0&sa-ac-title-br-width-mob-left=0&sa-ac-title-br-color=%23cccccc&sa-ac-title-h-color=%23940000&sa-ac-title-h-bg-color=&sa-ac-title-h-bg-select=media-library&sa-ac-title-h-bg-image=http%3A%2F%2F127.0.0.1%2Fwordpress%2Fwp-content%2Fuploads%2F2019%2F08%2Fservice-2-copyright.jpg&sa-ac-title-h-bg-url=&sa-ac-title-h-bg-position-lap=&sa-ac-title-h-bg-position-tab=&sa-ac-title-h-bg-position-mob=&sa-ac-title-h-bg-attachment=&sa-ac-title-h-bg-repeat-lap=&sa-ac-title-h-bg-repeat-tab=&sa-ac-title-h-bg-repeat-mob=&sa-ac-title-h-bg-size-lap=&sa-ac-title-h-bg-size-tab=&sa-ac-title-h-bg-size-mob=&sa-ac-title-h-bg-width-lap-choices=px&sa-ac-title-h-bg-width-lap-size=1000&sa-ac-title-h-bg-width-tab-choices=px&sa-ac-title-h-bg-width-tab-size=1000&sa-ac-title-h-bg-width-mob-choices=px&sa-ac-title-h-bg-width-mob-size=1000&sa-ac-title-h-br-type=none&sa-ac-title-h-br-width-lap-top=0&sa-ac-title-h-br-width-lap-right=0&sa-ac-title-h-br-width-lap-bottom=0&sa-ac-title-h-br-width-lap-left=0&sa-ac-title-h-br-width-tab-top=0&sa-ac-title-h-br-width-tab-right=0&sa-ac-title-h-br-width-tab-bottom=0&sa-ac-title-h-br-width-tab-left=0&sa-ac-title-h-br-width-mob-top=0&sa-ac-title-h-br-width-mob-right=0&sa-ac-title-h-br-width-mob-bottom=0&sa-ac-title-h-br-width-mob-left=0&sa-ac-title-h-br-color=%23cccccc&sa-ac-title-a-color=%23000000&sa-ac-title-a-bg-color=&sa-ac-title-a-bg-select=custom-url&sa-ac-title-a-bg-image=&sa-ac-title-a-bg-url=&sa-ac-title-a-bg-position-lap=&sa-ac-title-a-bg-position-tab=&sa-ac-title-a-bg-position-mob=&sa-ac-title-a-bg-attachment=&sa-ac-title-a-bg-repeat-lap=&sa-ac-title-a-bg-repeat-tab=&sa-ac-title-a-bg-repeat-mob=&sa-ac-title-a-bg-size-lap=&sa-ac-title-a-bg-size-tab=&sa-ac-title-a-bg-size-mob=&sa-ac-title-a-bg-width-lap-choices=px&sa-ac-title-a-bg-width-lap-size=1000&sa-ac-title-a-bg-width-tab-choices=px&sa-ac-title-a-bg-width-tab-size=1000&sa-ac-title-a-bg-width-mob-choices=px&sa-ac-title-a-bg-width-mob-size=1000&sa-ac-title-a-br-type=none&sa-ac-title-a-br-width-lap-top=0&sa-ac-title-a-br-width-lap-right=0&sa-ac-title-a-br-width-lap-bottom=0&sa-ac-title-a-br-width-lap-left=0&sa-ac-title-a-br-width-tab-top=0&sa-ac-title-a-br-width-tab-right=0&sa-ac-title-a-br-width-tab-bottom=0&sa-ac-title-a-br-width-tab-left=0&sa-ac-title-a-br-width-mob-top=0&sa-ac-title-a-br-width-mob-right=0&sa-ac-title-a-br-width-mob-bottom=0&sa-ac-title-a-br-width-mob-left=0&sa-ac-title-a-br-color=%23cccccc&sa-ac-title-br-radius-lap-choices=px&sa-ac-title-br-radius-lap-top=&sa-ac-title-br-radius-lap-right=&sa-ac-title-br-radius-lap-bottom=&sa-ac-title-br-radius-lap-left=&sa-ac-title-br-radius-tab-choices=px&sa-ac-title-br-radius-tab-top=0&sa-ac-title-br-radius-tab-right=0&sa-ac-title-br-radius-tab-bottom=0&sa-ac-title-br-radius-tab-left=0&sa-ac-title-br-radius-mob-choices=px&sa-ac-title-br-radius-mob-top=0&sa-ac-title-br-radius-mob-right=0&sa-ac-title-br-radius-mob-bottom=0&sa-ac-title-br-radius-mob-left=0&sa-ac-title-tx-shadow-color=%23cccccc&sa-ac-title-tx-shadow-blur-size=0&sa-ac-title-tx-shadow-horizontal-size=0&sa-ac-title-tx-shadow-vertical-size=0&sa-ac-title-bx-shadow-type=&sa-ac-title-bx-shadow-horizontal-size=0&sa-ac-title-bx-shadow-vertical-size=0&sa-ac-title-bx-shadow-blur-size=0&sa-ac-title-bx-shadow-spread-size=0&sa-ac-title-bx-shadow-color=%23cccccc&sa-ac-title-padding-lap-choices=px&sa-ac-title-padding-lap-top=8&sa-ac-title-padding-lap-right=8&sa-ac-title-padding-lap-bottom=8&sa-ac-title-padding-lap-left=8&sa-ac-title-padding-tab-choices=px&sa-ac-title-padding-tab-top=0&sa-ac-title-padding-tab-right=0&sa-ac-title-padding-tab-bottom=0&sa-ac-title-padding-tab-left=0&sa-ac-title-padding-mob-choices=px&sa-ac-title-padding-mob-top=0&sa-ac-title-padding-mob-right=0&sa-ac-title-padding-mob-bottom=0&sa-ac-title-padding-mob-left=0&sa-ac-title-margin-lap-choices=px&sa-ac-title-margin-lap-top=0&sa-ac-title-margin-lap-right=0&sa-ac-title-margin-lap-bottom=0&sa-ac-title-margin-lap-left=0&sa-ac-title-margin-tab-choices=px&sa-ac-title-margin-tab-top=0&sa-ac-title-margin-tab-right=0&sa-ac-title-margin-tab-bottom=0&sa-ac-title-margin-tab-left=0&sa-ac-title-margin-mob-choices=px&sa-ac-title-margin-mob-top=0&sa-ac-title-margin-mob-right=0&sa-ac-title-margin-mob-bottom=0&sa-ac-title-margin-mob-left=0&sa-ac-op-cl-size-lap-choices=px&sa-ac-op-cl-size-lap-size=50&sa-ac-op-cl-size-tab-choices=px&sa-ac-op-cl-size-tab-size=50&sa-ac-op-cl-size-mob-choices=px&sa-ac-op-cl-size-mob-size=50&sa-ac-op-cl-width-lap-choices=px&sa-ac-op-cl-width-lap-size=50&sa-ac-op-cl-width-tab-choices=px&sa-ac-op-cl-width-tab-size=50&sa-ac-op-cl-width-mob-choices=px&sa-ac-op-cl-width-mob-size=50&sa-ac-op-cl-color=%23787878&sa-ac-op-cl-bg-color=%23cccccc&sa-ac-op-cl-bg-select=custom-url&sa-ac-op-cl-bg-image=&sa-ac-op-cl-bg-url=&sa-ac-op-cl-bg-position-lap=&sa-ac-op-cl-bg-position-tab=&sa-ac-op-cl-bg-position-mob=&sa-ac-op-cl-bg-attachment=&sa-ac-op-cl-bg-repeat-lap=&sa-ac-op-cl-bg-repeat-tab=&sa-ac-op-cl-bg-repeat-mob=&sa-ac-op-cl-bg-size-lap=&sa-ac-op-cl-bg-size-tab=&sa-ac-op-cl-bg-size-mob=&sa-ac-op-cl-bg-width-lap-choices=px&sa-ac-op-cl-bg-width-lap-size=1000&sa-ac-op-cl-bg-width-tab-choices=px&sa-ac-op-cl-bg-width-tab-size=1000&sa-ac-op-cl-bg-width-mob-choices=px&sa-ac-op-cl-bg-width-mob-size=1000&sa-ac-op-cl-bg-type=none&sa-ac-op-cl-bg-width-lap-top=0&sa-ac-op-cl-bg-width-lap-right=0&sa-ac-op-cl-bg-width-lap-bottom=0&sa-ac-op-cl-bg-width-lap-left=0&sa-ac-op-cl-bg-width-tab-top=0&sa-ac-op-cl-bg-width-tab-right=0&sa-ac-op-cl-bg-width-tab-bottom=0&sa-ac-op-cl-bg-width-tab-left=0&sa-ac-op-cl-bg-width-mob-top=0&sa-ac-op-cl-bg-width-mob-right=0&sa-ac-op-cl-bg-width-mob-bottom=0&sa-ac-op-cl-bg-width-mob-left=0&sa-ac-op-cl-bg-color=%23cccccc&sa-ac-op-cl-h-color=%23787878&sa-ac-op-cl-h-bg-color=&sa-ac-op-cl-h-bg-select=custom-url&sa-ac-op-cl-h-bg-image=&sa-ac-op-cl-h-bg-url=&sa-ac-op-cl-h-bg-position-lap=&sa-ac-op-cl-h-bg-position-tab=&sa-ac-op-cl-h-bg-position-mob=&sa-ac-op-cl-h-bg-attachment=&sa-ac-op-cl-h-bg-repeat-lap=&sa-ac-op-cl-h-bg-repeat-tab=&sa-ac-op-cl-h-bg-repeat-mob=&sa-ac-op-cl-h-bg-size-lap=&sa-ac-op-cl-h-bg-size-tab=&sa-ac-op-cl-h-bg-size-mob=&sa-ac-op-cl-h-bg-width-lap-choices=px&sa-ac-op-cl-h-bg-width-lap-size=1000&sa-ac-op-cl-h-bg-width-tab-choices=px&sa-ac-op-cl-h-bg-width-tab-size=1000&sa-ac-op-cl-h-bg-width-mob-choices=px&sa-ac-op-cl-h-bg-width-mob-size=1000&sa-ac-op-cl-h-br-type=none&sa-ac-op-cl-h-br-width-lap-top=0&sa-ac-op-cl-h-br-width-lap-right=0&sa-ac-op-cl-h-br-width-lap-bottom=0&sa-ac-op-cl-h-br-width-lap-left=0&sa-ac-op-cl-h-br-width-tab-top=0&sa-ac-op-cl-h-br-width-tab-right=0&sa-ac-op-cl-h-br-width-tab-bottom=0&sa-ac-op-cl-h-br-width-tab-left=0&sa-ac-op-cl-h-br-width-mob-top=0&sa-ac-op-cl-h-br-width-mob-right=0&sa-ac-op-cl-h-br-width-mob-bottom=0&sa-ac-op-cl-h-br-width-mob-left=0&sa-ac-op-cl-h-br-color=%23cccccc&sa-ac-op-cl-a-color=%23787878&sa-ac-op-cl-a-bg-color=&sa-ac-op-cl-a-bg-select=custom-url&sa-ac-op-cl-a-bg-image=&sa-ac-op-cl-a-bg-url=&sa-ac-op-cl-a-bg-position-lap=&sa-ac-op-cl-a-bg-position-tab=&sa-ac-op-cl-a-bg-position-mob=&sa-ac-op-cl-a-bg-attachment=&sa-ac-op-cl-a-bg-repeat-lap=&sa-ac-op-cl-a-bg-repeat-tab=&sa-ac-op-cl-a-bg-repeat-mob=&sa-ac-op-cl-a-bg-size-lap=&sa-ac-op-cl-a-bg-size-tab=&sa-ac-op-cl-a-bg-size-mob=&sa-ac-op-cl-a-bg-width-lap-choices=px&sa-ac-op-cl-a-bg-width-lap-size=1000&sa-ac-op-cl-a-bg-width-tab-choices=px&sa-ac-op-cl-a-bg-width-tab-size=1000&sa-ac-op-cl-a-bg-width-mob-choices=px&sa-ac-op-cl-a-bg-width-mob-size=1000&sa-ac-op-cl-a-br-type=none&sa-ac-op-cl-a-br-width-lap-top=0&sa-ac-op-cl-a-br-width-lap-right=0&sa-ac-op-cl-a-br-width-lap-bottom=0&sa-ac-op-cl-a-br-width-lap-left=0&sa-ac-op-cl-a-br-width-tab-top=0&sa-ac-op-cl-a-br-width-tab-right=0&sa-ac-op-cl-a-br-width-tab-bottom=0&sa-ac-op-cl-a-br-width-tab-left=0&sa-ac-op-cl-a-br-width-mob-top=0&sa-ac-op-cl-a-br-width-mob-right=0&sa-ac-op-cl-a-br-width-mob-bottom=0&sa-ac-op-cl-a-br-width-mob-left=0&sa-ac-op-cl-a-br-color=%23cccccc&sa-ac-op-cl-br-radius-lap-choices=px&sa-ac-op-cl-br-radius-lap-top=0&sa-ac-op-cl-br-radius-lap-right=0&sa-ac-op-cl-br-radius-lap-bottom=0&sa-ac-op-cl-br-radius-lap-left=0&sa-ac-op-cl-br-radius-tab-choices=px&sa-ac-op-cl-br-radius-tab-top=0&sa-ac-op-cl-br-radius-tab-right=0&sa-ac-op-cl-br-radius-tab-bottom=0&sa-ac-op-cl-br-radius-tab-left=0&sa-ac-op-cl-br-radius-mob-choices=px&sa-ac-op-cl-br-radius-mob-top=0&sa-ac-op-cl-br-radius-mob-right=0&sa-ac-op-cl-br-radius-mob-bottom=0&sa-ac-op-cl-br-radius-mob-left=0&sa-ac-op-cl-bx-shadow-type=&sa-ac-op-cl-bx-shadow-horizontal-size=0&sa-ac-op-cl-bx-shadow-vertical-size=0&sa-ac-op-cl-bx-shadow-blur-size=0&sa-ac-op-cl-bx-shadow-spread-size=0&sa-ac-op-cl-bx-shadow-color=%23cccccc&sa-ac-op-cl-padding-lap-choices=px&sa-ac-op-cl-padding-lap-top=0&sa-ac-op-cl-padding-lap-right=0&sa-ac-op-cl-padding-lap-bottom=0&sa-ac-op-cl-padding-lap-left=0&sa-ac-op-cl-padding-tab-choices=px&sa-ac-op-cl-padding-tab-top=0&sa-ac-op-cl-padding-tab-right=0&sa-ac-op-cl-padding-tab-bottom=0&sa-ac-op-cl-padding-tab-left=0&sa-ac-op-cl-padding-mob-choices=px&sa-ac-op-cl-padding-mob-top=0&sa-ac-op-cl-padding-mob-right=0&sa-ac-op-cl-padding-mob-bottom=0&sa-ac-op-cl-padding-mob-left=0&sa-ac-op-cl-margin-lap-choices=px&sa-ac-op-cl-margin-lap-top=0&sa-ac-op-cl-margin-lap-right=0&sa-ac-op-cl-margin-lap-bottom=0&sa-ac-op-cl-margin-lap-left=0&sa-ac-op-cl-margin-tab-choices=px&sa-ac-op-cl-margin-tab-top=0&sa-ac-op-cl-margin-tab-right=0&sa-ac-op-cl-margin-tab-bottom=0&sa-ac-op-cl-margin-tab-left=0&sa-ac-op-cl-margin-mob-choices=px&sa-ac-op-cl-margin-mob-top=0&sa-ac-op-cl-margin-mob-right=0&sa-ac-op-cl-margin-mob-bottom=0&sa-ac-op-cl-margin-mob-left=0&sa-ac-cont-typho-font=&sa-ac-cont-typho-size-lap-choices=px&sa-ac-cont-typho-size-lap-size=0&sa-ac-cont-typho-size-tab-choices=px&sa-ac-cont-typho-size-tab-size=0&sa-ac-cont-typho-size-mob-choices=px&sa-ac-cont-typho-size-mob-size=0&sa-ac-cont-typho-weight=&sa-ac-cont-typho-transform=&sa-ac-cont-typho-style=&sa-ac-cont-typho-decoration=&sa-ac-cont-typho-l-height-lap-choices=px&sa-ac-cont-typho-l-height-lap-size=0&sa-ac-cont-typho-l-height-tab-choices=px&sa-ac-cont-typho-l-height-tab-size=0&sa-ac-cont-typho-l-height-mob-choices=px&sa-ac-cont-typho-l-height-mob-size=0&sa-ac-cont-typho-l-spacing-lap-choices=px&sa-ac-cont-typho-l-spacing-lap-size=0&sa-ac-cont-typho-l-spacing-tab-choices=px&sa-ac-cont-typho-l-spacing-tab-size=0&sa-ac-cont-typho-l-spacing-mob-choices=px&sa-ac-cont-typho-l-spacing-mob-size=0&sa-ac-cont-color=%23787878&sa-ac-cont-bg-color=&sa-ac-cont-bg-select=custom-url&sa-ac-cont-bg-image=&sa-ac-cont-bg-url=&sa-ac-cont-bg-position-lap=&sa-ac-cont-bg-position-tab=&sa-ac-cont-bg-position-mob=&sa-ac-cont-bg-attachment=&sa-ac-cont-bg-repeat-lap=&sa-ac-cont-bg-repeat-tab=&sa-ac-cont-bg-repeat-mob=&sa-ac-cont-bg-size-lap=&sa-ac-cont-bg-size-tab=&sa-ac-cont-bg-size-mob=&sa-ac-cont-bg-width-lap-choices=px&sa-ac-cont-bg-width-lap-size=1000&sa-ac-cont-bg-width-tab-choices=px&sa-ac-cont-bg-width-tab-size=1000&sa-ac-cont-bg-width-mob-choices=px&sa-ac-cont-bg-width-mob-size=1000&sa-ac-cont-br-type=none&sa-ac-cont-br-width-lap-top=0&sa-ac-cont-br-width-lap-right=0&sa-ac-cont-br-width-lap-bottom=0&sa-ac-cont-br-width-lap-left=0&sa-ac-cont-br-width-tab-top=0&sa-ac-cont-br-width-tab-right=0&sa-ac-cont-br-width-tab-bottom=0&sa-ac-cont-br-width-tab-left=0&sa-ac-cont-br-width-mob-top=0&sa-ac-cont-br-width-mob-right=0&sa-ac-cont-br-width-mob-bottom=0&sa-ac-cont-br-width-mob-left=0&sa-ac-cont-br-color=%23cccccc&sa-ac-cont-br-radius-lap-choices=px&sa-ac-cont-br-radius-lap-top=&sa-ac-cont-br-radius-lap-right=&sa-ac-cont-br-radius-lap-bottom=&sa-ac-cont-br-radius-lap-left=&sa-ac-cont-br-radius-tab-choices=px&sa-ac-cont-br-radius-tab-top=0&sa-ac-cont-br-radius-tab-right=0&sa-ac-cont-br-radius-tab-bottom=0&sa-ac-cont-br-radius-tab-left=0&sa-ac-cont-br-radius-mob-choices=px&sa-ac-cont-br-radius-mob-top=0&sa-ac-cont-br-radius-mob-right=0&sa-ac-cont-br-radius-mob-bottom=0&sa-ac-cont-br-radius-mob-left=0&sa-ac-cont-tx-shadow-color=%23cccccc&sa-ac-cont-tx-shadow-blur-size=0&sa-ac-cont-tx-shadow-horizontal-size=0&sa-ac-cont-tx-shadow-vertical-size=0&sa-ac-cont-bx-shadow-type=&sa-ac-cont-bx-shadow-horizontal-size=0&sa-ac-cont-bx-shadow-vertical-size=0&sa-ac-cont-bx-shadow-blur-size=0&sa-ac-cont-bx-shadow-spread-size=0&sa-ac-cont-bx-shadow-color=%23cccccc&sa-ac-cont-padding-lap-choices=px&sa-ac-cont-padding-lap-top=0&sa-ac-cont-padding-lap-right=0&sa-ac-cont-padding-lap-bottom=0&sa-ac-cont-padding-lap-left=0&sa-ac-cont-padding-tab-choices=px&sa-ac-cont-padding-tab-top=0&sa-ac-cont-padding-tab-right=0&sa-ac-cont-padding-tab-bottom=0&sa-ac-cont-padding-tab-left=0&sa-ac-cont-padding-mob-choices=px&sa-ac-cont-padding-mob-top=0&sa-ac-cont-padding-mob-right=0&sa-ac-cont-padding-mob-bottom=0&sa-ac-cont-padding-mob-left=0&sa-ac-cont-margin-lap-choices=px&sa-ac-cont-margin-lap-top=0&sa-ac-cont-margin-lap-right=0&sa-ac-cont-margin-lap-bottom=0&sa-ac-cont-margin-lap-left=0&sa-ac-cont-margin-tab-choices=px&sa-ac-cont-margin-tab-top=0&sa-ac-cont-margin-tab-right=0&sa-ac-cont-margin-tab-bottom=0&sa-ac-cont-margin-tab-left=0&sa-ac-cont-margin-mob-choices=px&sa-ac-cont-margin-mob-top=0&sa-ac-cont-margin-mob-right=0&sa-ac-cont-margin-mob-bottom=0&sa-ac-cont-margin-mob-left=0&oxi-addons-preview-bg=&shortcode-addons-elements-name=Button&shortcode-addons-elements-id=1&shortcode-addons-elements-template=Style_1';
            wp_parse_str($fil, $value);
            echo '<pre>';
            print_r($value);
            echo '</pre>';

            $files = [
                'sa_el_text' => $filesd[2],
                'sa_el_content' => $filesd[4],
            ];
            echo '<pre>';
            print_r($files);
            echo '</pre>';
            $f = wp_json_encode($files, JSON_UNESCAPED_UNICODE);
            //echo $f;
            // $f = '||#||OxiAddons-AC-T ||#||Lorem Ipsum is simply dummy text of the printing and typesetting industry.||#|| OxiAddons-AC-IN ||#||Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.||#||';
            if ((int) $itemid):
                $this->wpdb->query($this->wpdb->prepare("UPDATE {$this->child_table} SET files = %s WHERE id = %d", $f, $itemid));
                echo $this->wpdb->prepare("UPDATE {$this->child_table} SET files = %s WHERE id = %d", $f, $itemid);
                echo '<br>';
            endif;
        }



        //$this->child = $childarray;
    }

    public function default_render($style, $child, $admin) {

        foreach ($child as $v) {

//            wp_parse_str($v['files'], $value);
//            echo '  <div class="oxi-addons-AC-style-1 oxi-addons-admin-edit-list">
//                        <div class="oxi-addons-AC-style-1-heading active" ref="#oxi-addons-AC-style-1-heading-id-25">
//                            <div class="span-active"><i class="fas fa-arrow-down oxi-icons"></i></div>
//                            <div class="span-deactive"><i class="fas fa-arrow-right oxi-icons"></i></div>
//                            <div class="heading-data">' . $value['sa_el_text'] . '</div>
//                        </div>
//                        <div class="oxi-addons-ac-C-9" id="oxi-addons-AC-style-1-heading-id-25" style="display: block;">
//                            <div class="oxi-addons-ac-C-9-b">
//                               ' . $value['sa_el_content'] . '
//                            </div>
//                        </div> ';
//            if ($admin == 'admin'):
//                echo '  <div class="oxi-addons-admin-absulote">
//                            <div class="oxi-addons-admin-absulate-edit">
//                                <button class="btn btn-primary shortcode-addons-template-item-edit" type="button" value="' . $v['id'] . '">Edit</button>
//                            </div>
//                            <div class="oxi-addons-admin-absulate-delete">
//                               <button class="btn btn-danger shortcode-addons-template-item-delete" type="submit" value="' . $v['id'] . '">Delete</button>
//                             </div>
//                        </div>';
//            endif;
//            echo ' </div>';
        }
    }

}

new Style_1();
