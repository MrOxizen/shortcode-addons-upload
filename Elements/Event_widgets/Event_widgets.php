<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets;

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

class Event_widgets extends Elements_Frontend
{

    public function pre_active()
    {
        return array('Style_1', 'Style_2');
    }

    public function templates()
    {
        return array(
            '{"style":{"id":"60","type":"Icon_effects","name":"style 1","style_name":"Style_1","rawdata":"{\"sa_icon_effects_col-lap\":\"oxi-bt-col-lg-4\",\"sa_icon_effects_col-tab\":\"oxi-bt-col-md-12\",\"sa_icon_effects_col-mob\":\"oxi-bt-col-sm-12\",\"sa_icon_effects_data\":{\"rep5\":{\"sa_icon_effects_icon\":\"fab fa-linkedin-in\",\"sa_icon_effects_color\":\"#ffffff\",\"sa_icon_effects_bg\":\"rgba(14, 118, 168, 1)\",\"sa_icon_effects_color_hover\":\"#ffffff\",\"sa_icon_effects_bg_hover\":\"rgba(14, 118, 168, 1)\",\"sa_icon_effects_box_shadow_hover-shadow\":\"yes\",\"sa_icon_effects_box_shadow_hover-type\":\"\",\"sa_icon_effects_box_shadow_hover-horizontal-size\":\"0\",\"sa_icon_effects_box_shadow_hover-vertical-size\":\"0\",\"sa_icon_effects_box_shadow_hover-blur-size\":\"0\",\"sa_icon_effects_box_shadow_hover-spread-size\":\"5\",\"sa_icon_effects_box_shadow_hover-color\":\"rgba(14, 118, 168, 1)\",\"sa_icon_effects_type\":\"\",\"sa_icon_effects_url-url\":\"\",\"sa_icon_effects_url-follow\":\"yes\",\"sa_icon_effects_url-id\":\"\",\"sa_icon_effects_url_open\":\"0\",\"sa_icon_effects_url-target\":\"0\"},\"rep9\":{\"sa_icon_effects_icon\":\"fab fa-facebook-square\",\"sa_icon_effects_color\":\"#ffffff\",\"sa_icon_effects_bg\":\"rgba(59, 89, 152, 1)\",\"sa_icon_effects_color_hover\":\"#ffffff\",\"sa_icon_effects_bg_hover\":\"rgba(59, 89, 152, 1)\",\"sa_icon_effects_box_shadow_hover-shadow\":\"yes\",\"sa_icon_effects_box_shadow_hover-type\":\"\",\"sa_icon_effects_box_shadow_hover-horizontal-size\":\"0\",\"sa_icon_effects_box_shadow_hover-vertical-size\":\"0\",\"sa_icon_effects_box_shadow_hover-blur-size\":\"0\",\"sa_icon_effects_box_shadow_hover-spread-size\":\"5\",\"sa_icon_effects_box_shadow_hover-color\":\"rgba(59, 89, 152, 1)\",\"sa_icon_effects_type\":\"sa_effects_outside\",\"sa_icon_effects_url-url\":\"\",\"sa_icon_effects_url-follow\":\"yes\",\"sa_icon_effects_url-id\":\"\",\"sa_icon_effects_url_open\":\"0\",\"sa_icon_effects_url-target\":\"0\"},\"rep10\":{\"sa_icon_effects_icon\":\"fab fa-twitter-square\",\"sa_icon_effects_color\":\"#ffffff\",\"sa_icon_effects_bg\":\"rgba(0, 172, 238, 1)\",\"sa_icon_effects_color_hover\":\"#ffffff\",\"sa_icon_effects_bg_hover\":\"rgba(0, 172, 238, 1)\",\"sa_icon_effects_box_shadow_hover-shadow\":\"yes\",\"sa_icon_effects_box_shadow_hover-type\":\"\",\"sa_icon_effects_box_shadow_hover-horizontal-size\":\"0\",\"sa_icon_effects_box_shadow_hover-vertical-size\":\"0\",\"sa_icon_effects_box_shadow_hover-blur-size\":\"0\",\"sa_icon_effects_box_shadow_hover-spread-size\":\"5\",\"sa_icon_effects_box_shadow_hover-color\":\"rgba(0, 172, 238, 1)\",\"sa_icon_effects_type\":\"\",\"sa_icon_effects_url-url\":\"\",\"sa_icon_effects_url-follow\":\"yes\",\"sa_icon_effects_url-id\":\"\",\"sa_icon_effects_url_open\":\"0\",\"sa_icon_effects_url-target\":\"0\"}},\"sa_icon_effects_datanm\":\"15\",\"sa_icon_effects_f_s-lap-choices\":\"px\",\"sa_icon_effects_f_s-lap-size\":\"50\",\"sa_icon_effects_f_s-tab-choices\":\"px\",\"sa_icon_effects_f_s-tab-size\":\"50\",\"sa_icon_effects_f_s-mob-choices\":\"px\",\"sa_icon_effects_f_s-mob-size\":\"50\",\"sa_icon_effects_w_hei-lap-choices\":\"px\",\"sa_icon_effects_w_hei-lap-size\":\"100\",\"sa_icon_effects_w_hei-tab-choices\":\"px\",\"sa_icon_effects_w_hei-tab-size\":\"5\",\"sa_icon_effects_w_hei-mob-choices\":\"px\",\"sa_icon_effects_w_hei-mob-size\":\"5\",\"sa_icon_effects_border_r-lap-choices\":\"px\",\"sa_icon_effects_border_r-lap-top\":\"50\",\"sa_icon_effects_border_r-lap-right\":\"50\",\"sa_icon_effects_border_r-lap-bottom\":\"50\",\"sa_icon_effects_border_r-lap-left\":\"50\",\"sa_icon_effects_border_r-tab-choices\":\"px\",\"sa_icon_effects_border_r-tab-top\":\"50\",\"sa_icon_effects_border_r-tab-right\":\"50\",\"sa_icon_effects_border_r-tab-bottom\":\"50\",\"sa_icon_effects_border_r-tab-left\":\"50\",\"sa_icon_effects_border_r-mob-choices\":\"px\",\"sa_icon_effects_border_r-mob-top\":\"50\",\"sa_icon_effects_border_r-mob-right\":\"50\",\"sa_icon_effects_border_r-mob-bottom\":\"50\",\"sa_icon_effects_border_r-mob-left\":\"50\",\"sa_icon_effects_padding-lap-choices\":\"px\",\"sa_icon_effects_padding-lap-size\":\"5\",\"sa_icon_effects_padding-tab-choices\":\"px\",\"sa_icon_effects_padding-tab-size\":\"5\",\"sa_icon_effects_padding-mob-choices\":\"px\",\"sa_icon_effects_padding-mob-size\":\"5\",\"sa_icon_effects_margin-lap-choices\":\"px\",\"sa_icon_effects_margin-lap-top\":\"20\",\"sa_icon_effects_margin-lap-right\":\"0\",\"sa_icon_effects_margin-lap-bottom\":\"20\",\"sa_icon_effects_margin-lap-left\":\"0\",\"sa_icon_effects_margin-tab-choices\":\"px\",\"sa_icon_effects_margin-tab-top\":\"\",\"sa_icon_effects_margin-tab-right\":\"\",\"sa_icon_effects_margin-tab-bottom\":\"\",\"sa_icon_effects_margin-tab-left\":\"\",\"sa_icon_effects_margin-mob-choices\":\"px\",\"sa_icon_effects_margin-mob-top\":\"\",\"sa_icon_effects_margin-mob-right\":\"\",\"sa_icon_effects_margin-mob-bottom\":\"\",\"sa_icon_effects_margin-mob-left\":\"\",\"sa_icon_effects_animation-type\":\"\",\"sa_icon_effects_animation-duration-size\":\"1000\",\"sa_icon_effects_animation-delay-size\":\"0\",\"sa_icon_effects_animation-offset-size\":\"100\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Icon_effects\",\"shortcode-addons-elements-id\":\"60\",\"shortcode-addons-elements-template\":\"Style_1\",\"sa_icon_effects_animation-looping\":\"0\"}","stylesheet":".shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_rep5 .oxi-icons{color:#ffffff;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_rep5{background:rgba(14, 118, 168, 1);}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_rep5:hover .oxi-icons{color:#ffffff;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_rep5:hover{background:rgba(14, 118, 168, 1);}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_rep5:after{-webkit-box-shadow: 0px 0px 0px 5px rgba(14, 118, 168, 1);-moz-box-shadow: 0px 0px 0px 5px rgba(14, 118, 168, 1);box-shadow: 0px 0px 0px 5px rgba(14, 118, 168, 1);}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_rep9 .oxi-icons{color:#ffffff;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_rep9{background:rgba(59, 89, 152, 1);}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_rep9:hover .oxi-icons{color:#ffffff;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_rep9:hover{background:rgba(59, 89, 152, 1);}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_rep9:after{-webkit-box-shadow: 0px 0px 0px 5px rgba(59, 89, 152, 1);-moz-box-shadow: 0px 0px 0px 5px rgba(59, 89, 152, 1);box-shadow: 0px 0px 0px 5px rgba(59, 89, 152, 1);}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_rep10 .oxi-icons{color:#ffffff;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_rep10{background:rgba(0, 172, 238, 1);}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_rep10:hover .oxi-icons{color:#ffffff;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_rep10:hover{background:rgba(0, 172, 238, 1);}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_rep10:after{-webkit-box-shadow: 0px 0px 0px 5px rgba(0, 172, 238, 1);-moz-box-shadow: 0px 0px 0px 5px rgba(0, 172, 238, 1);box-shadow: 0px 0px 0px 5px rgba(0, 172, 238, 1);}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_repidrep .oxi-icons{color:#ffffff;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_repidrep{background:#2AD4BB;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_repidrep:hover .oxi-icons{color:#ffffff;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_repidrep:hover{background:#2AD4BB;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1.sa_icon_effects_unique_repidrep:after{box-shadow:none;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1 .oxi-icons{font-size: 50px;line-height: 100px;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1{max-width: 100px; height: 100px;border-radius: 50px 50px 50px 50px;margin: 20px 0px 20px 0px;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1:after{padding: 5px; top: -5px; left: -5px;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1:hover{margin: 20px 0px 20px 0px;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1:focus{margin: 20px 0px 20px 0px;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1:active{margin: 20px 0px 20px 0px;}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1 .oxi-icons{font-size: 50px;line-height: 5px;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1{max-width: 5px; height: 5px;border-radius: 50px 50px 50px 50px;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1:after{padding: 5px; top: -5px; left: -5px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1 .oxi-icons{font-size: 50px;line-height: 5px;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1{max-width: 5px; height: 5px;border-radius: 50px 50px 50px 50px;}.shortcode-addons-wrapper-60 .sa_addons_icon_effects_style_1:after{padding: 5px; top: -5px; left: -5px;}}","font_family":"[]"},"child":[{"id":"170","styleid":"60","rawdata":"null","stylesheet":""},{"id":"171","styleid":"60","rawdata":"null","stylesheet":""},{"id":"172","styleid":"60","rawdata":"null","stylesheet":""}]}',
        );
    }
}
