<?php

namespace SHORTCODE_ADDONS_UPLOAD\Inline_svg;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Display post
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 *  
 */

use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Inline_svg extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1');
    }

    public function templates() {
        return array(
            '{"style":{"id":"242","type":"Inline_svg","name":"Style 1","style_name":"Style_1","rawdata":"{\"sa_iframe_align\":\"sa_divider_center\",\"sa_divider_width-lap-choices\":\"px\",\"sa_divider_width-lap-size\":\"300\",\"sa_divider_width-tab-choices\":\"px\",\"sa_divider_width-tab-size\":\"\",\"sa_divider_width-mob-choices\":\"px\",\"sa_divider_width-mob-size\":\"\",\"sa_divider_Padding-lap-choices\":\"px\",\"sa_divider_Padding-lap-top\":\"\",\"sa_divider_Padding-lap-right\":\"\",\"sa_divider_Padding-lap-bottom\":\"\",\"sa_divider_Padding-lap-left\":\"\",\"sa_divider_Padding-tab-choices\":\"px\",\"sa_divider_Padding-tab-top\":\"\",\"sa_divider_Padding-tab-right\":\"\",\"sa_divider_Padding-tab-bottom\":\"\",\"sa_divider_Padding-tab-left\":\"\",\"sa_divider_Padding-mob-choices\":\"px\",\"sa_divider_Padding-mob-top\":\"\",\"sa_divider_Padding-mob-right\":\"\",\"sa_divider_Padding-mob-bottom\":\"\",\"sa_divider_Padding-mob-left\":\"\",\"sa_divider_animation-type\":\"\",\"sa_divider_animation-duration-size\":\"1000\",\"sa_divider_animation-delay-size\":\"0\",\"sa_divider_animation-offset-size\":\"100\",\"sa_divider_height-lap-size\":\"4\",\"sa_divider_height-tab-size\":\"2\",\"sa_divider_height-mob-size\":\"2\",\"sa_divider_style\":\"double\",\"sa-_divider_color\":\"#ff0a0a\",\"sa_divider_id\":\"\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Divider\",\"shortcode-addons-elements-id\":\"242\",\"shortcode-addons-elements-template\":\"Style_1\",\"sa_divider_animation-looping\":\"0\"}","stylesheet":".shortcode-addons-wrapper-242 .oxi-divider-style1{max-width:300px;}.shortcode-addons-wrapper-242 .oxi-divider-style1 .oxi-divider-left .oxi-divider{border-top-width:4px;border-top-style:double;border-top-color:#ff0a0a;}.shortcode-addons-wrapper-242 .oxi-divider-style1 .oxi-divider-right .oxi-divider{border-top-width:4px;border-top-style:double;border-top-color:#ff0a0a;}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-242 .oxi-divider-style1 .oxi-divider-left .oxi-divider{border-top-width:2px;}.shortcode-addons-wrapper-242 .oxi-divider-style1 .oxi-divider-right .oxi-divider{border-top-width:2px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-242 .oxi-divider-style1 .oxi-divider-left .oxi-divider{border-top-width:2px;}.shortcode-addons-wrapper-242 .oxi-divider-style1 .oxi-divider-right .oxi-divider{border-top-width:2px;}}","font_family":"[]"},"child":[]}',
          );
    }

}
