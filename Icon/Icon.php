<?php

namespace SHORTCODE_ADDONS_UPLOAD\Icon;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Accordion
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Icon extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1', 'Style_2');
    }

    public function templates() {
        return array(
            '{"style":{"id":"18","type":"Icon","name":"icon","style_name":"Style_1","rawdata":"{\"sa_icon_repeater\":{\"rep1\":{\"sa_icon_icon\":\"fas fa-atom\",\"sa_icon_icon_id\":\"Order Now\",\"sa_icon_icon_link-url\":\"\",\"sa_icon_icon_link-follow\":\"yes\",\"sa_icon_icon_link-id\":\"\",\"sa_icon_icon_link-target\":\"0\"},\"rep2\":{\"sa_icon_icon\":\"fab fa-app-store\",\"sa_icon_icon_id\":\"Order Now\",\"sa_icon_icon_link-url\":\"\",\"sa_icon_icon_link-follow\":\"yes\",\"sa_icon_icon_link-id\":\"\",\"sa_icon_icon_link-target\":\"0\"},\"rep4\":{\"sa_icon_icon\":\"fas fa-at\",\"sa_icon_icon_id\":\"Order Now\",\"sa_icon_icon_link-url\":\"\",\"sa_icon_icon_link-follow\":\"yes\",\"sa_icon_icon_link-id\":\"\",\"sa_icon_icon_link-target\":\"0\"}},\"sa_icon_repeaternm\":\"4\",\"sa_icon_column-lap\":\"oxi-bt-col-lg-4\",\"sa_icon_column-tab\":\"oxi-bt-col-md-4\",\"sa_icon_column-mob\":\"oxi-bt-col-sm-12\",\"sa_icon_alignment-lap\":\"center\",\"sa_icon_alignment-tab\":\"center\",\"sa_icon_alignment-mob\":\"center\",\"sa_drop_caps_animation-type\":\"bounce\",\"sa_drop_caps_animation-duration-size\":\"5\",\"sa_drop_caps_animation-delay-size\":\"0\",\"sa_drop_caps_animation-offset-size\":\"100\",\"sa_icon_margin-lap-choices\":\"px\",\"sa_icon_margin-lap-top\":\"5\",\"sa_icon_margin-lap-right\":\"5\",\"sa_icon_margin-lap-bottom\":\"5\",\"sa_icon_margin-lap-left\":\"5\",\"sa_icon_margin-tab-choices\":\"px\",\"sa_icon_margin-tab-top\":\"10\",\"sa_icon_margin-tab-right\":\"10\",\"sa_icon_margin-tab-bottom\":\"10\",\"sa_icon_margin-tab-left\":\"10\",\"sa_icon_margin-mob-choices\":\"px\",\"sa_icon_margin-mob-top\":\"10\",\"sa_icon_margin-mob-right\":\"10\",\"sa_icon_margin-mob-bottom\":\"10\",\"sa_icon_margin-mob-left\":\"10\",\"sa_icon_font_size-lap-choices\":\"px\",\"sa_icon_font_size-lap-size\":\"54\",\"sa_icon_font_size-tab-choices\":\"px\",\"sa_icon_font_size-tab-size\":\"55\",\"sa_icon_font_size-mob-choices\":\"px\",\"sa_icon_font_size-mob-size\":\"55\",\"sa_icon_background_size-lap-choices\":\"px\",\"sa_icon_background_size-lap-size\":\"100\",\"sa_icon_background_size-tab-choices\":\"px\",\"sa_icon_background_size-tab-size\":\"100\",\"sa_icon_background_size-mob-choices\":\"px\",\"sa_icon_background_size-mob-size\":\"90\",\"sa_icon_color\":\"#ffffff\",\"sa_icon_bg_color-color\":\"rgba(250,85,151,1.01)\",\"sa_icon_bg_color-select\":\"media-library\",\"sa_icon_bg_color-image\":\"\",\"sa_icon_bg_color-url\":\"\",\"sa_icon_bg_color-position\":\"center center\",\"sa_icon_bg_color-attachment\":\"\",\"sa_icon_bg_color-repeat\":\"no-repeat\",\"sa_icon_bg_color-size-lap\":\"cover\",\"sa_icon_bg_color-size-tab\":\"cover\",\"sa_icon_bg_color-size-mob\":\"cover\",\"sa_icon_border_radius-lap-choices\":\"px\",\"sa_icon_border_radius-lap-top\":\"50\",\"sa_icon_border_radius-lap-right\":\"50\",\"sa_icon_border_radius-lap-bottom\":\"50\",\"sa_icon_border_radius-lap-left\":\"50\",\"sa_icon_border_radius-tab-choices\":\"px\",\"sa_icon_border_radius-tab-top\":\"50\",\"sa_icon_border_radius-tab-right\":\"50\",\"sa_icon_border_radius-tab-bottom\":\"50\",\"sa_icon_border_radius-tab-left\":\"50\",\"sa_icon_border_radius-mob-choices\":\"px\",\"sa_icon_border_radius-mob-top\":\"50\",\"sa_icon_border_radius-mob-right\":\"50\",\"sa_icon_border_radius-mob-bottom\":\"50\",\"sa_icon_border_radius-mob-left\":\"50\",\"sa_icon_shadow-shadow\":\"yes\",\"sa_icon_shadow-type\":\"\",\"sa_icon_shadow-horizontal-size\":\"0\",\"sa_icon_shadow-vertical-size\":\"0\",\"sa_icon_shadow-blur-size\":\"0\",\"sa_icon_shadow-spread-size\":\"0\",\"sa_icon_shadow-color\":\"#cccccc\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Icon\",\"shortcode-addons-elements-id\":\"18\",\"shortcode-addons-elements-template\":\"Style_1\",\"sa_drop_caps_animation-looping\":\"0\",\"sa_icon_bg_color-img\":\"0\"}","stylesheet":".shortcode-addons-wrapper-18 .oxi_addons__icon_main_style_1{justify-content: center;margin: 5px 5px 5px 5px;}.shortcode-addons-wrapper-18 .oxi_addons__icon_main_style_1 .oxi-icons{font-size: 54px;color:#ffffff;}.shortcode-addons-wrapper-18 .oxi_addons__icon_main_style_1 .oxi_addons__icon{width: 100px; height: 100px;background: rgba(250,85,151,1.01);border-radius: 50px 50px 50px 50px;}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-18 .oxi_addons__icon_main_style_1{justify-content: center;margin: 10px 10px 10px 10px;}.shortcode-addons-wrapper-18 .oxi_addons__icon_main_style_1 .oxi-icons{font-size: 55px;}.shortcode-addons-wrapper-18 .oxi_addons__icon_main_style_1 .oxi_addons__icon{width: 100px; height: 100px;border-radius: 50px 50px 50px 50px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-18 .oxi_addons__icon_main_style_1{justify-content: center;margin: 10px 10px 10px 10px;}.shortcode-addons-wrapper-18 .oxi_addons__icon_main_style_1 .oxi-icons{font-size: 55px;}.shortcode-addons-wrapper-18 .oxi_addons__icon_main_style_1 .oxi_addons__icon{width: 90px; height: 90px;border-radius: 50px 50px 50px 50px;}}","font_family":"[]"},"child":[{"id":"21","styleid":"18","rawdata":"{\"sa_icon_fontawesome\":\"fab fa-facebook\",\"sa_icon_id\":\"\",\"sa_icon_link\":\"#\",\"shortcodeitemid\":\"21\"}","stylesheet":""},{"id":"22","styleid":"18","rawdata":"{\"sa_icon_fontawesome\":\"fab fa-twitter\",\"sa_icon_id\":\"\",\"sa_icon_link\":\"\",\"shortcodeitemid\":\"\"}","stylesheet":""}]}',
            '{"style":{"id":"20","type":"Icon","name":"","style_name":"Style_2","rawdata":"{\"sa_icon_repeater\":{\"rep1\":{\"sa_icon_icon\":\"fas fa-asterisk\",\"sa_icon_icon_id\":\"Order Now\",\"sa_icon_icon_link-url\":\"\",\"sa_icon_icon_link-follow\":\"yes\",\"sa_icon_icon_link-id\":\"\",\"sa_icon_icon_link-target\":\"0\"},\"rep2\":{\"sa_icon_icon\":\"fab fa-algolia\",\"sa_icon_icon_id\":\"Order Now\",\"sa_icon_icon_link-url\":\"\",\"sa_icon_icon_link-follow\":\"yes\",\"sa_icon_icon_link-id\":\"\",\"sa_icon_icon_link-target\":\"0\"},\"rep3\":{\"sa_icon_icon\":\"fab fa-apple\",\"sa_icon_icon_id\":\"Order Now\",\"sa_icon_icon_link-url\":\"\",\"sa_icon_icon_link-follow\":\"yes\",\"sa_icon_icon_link-id\":\"\",\"sa_icon_icon_link-target\":\"0\"}},\"sa_icon_repeaternm\":\"3\",\"sa_icon_column-lap\":\"oxi-bt-col-lg-4\",\"sa_icon_column-tab\":\"oxi-bt-col-md-4\",\"sa_icon_column-mob\":\"oxi-bt-col-sm-12\",\"sa_icon_alignment-lap\":\"center\",\"sa_icon_alignment-tab\":\"center\",\"sa_icon_alignment-mob\":\"center\",\"sa_drop_caps_animation-type\":\"bounce\",\"sa_drop_caps_animation-duration-size\":\"0\",\"sa_drop_caps_animation-delay-size\":\"0\",\"sa_drop_caps_animation-offset-size\":\"100\",\"sa_icon_margin-lap-choices\":\"px\",\"sa_icon_margin-lap-top\":\"5\",\"sa_icon_margin-lap-right\":\"5\",\"sa_icon_margin-lap-bottom\":\"5\",\"sa_icon_margin-lap-left\":\"5\",\"sa_icon_margin-tab-choices\":\"px\",\"sa_icon_margin-tab-top\":\"10\",\"sa_icon_margin-tab-right\":\"10\",\"sa_icon_margin-tab-bottom\":\"10\",\"sa_icon_margin-tab-left\":\"10\",\"sa_icon_margin-mob-choices\":\"px\",\"sa_icon_margin-mob-top\":\"10\",\"sa_icon_margin-mob-right\":\"10\",\"sa_icon_margin-mob-bottom\":\"10\",\"sa_icon_margin-mob-left\":\"10\",\"sa_icon_font_size-lap-choices\":\"px\",\"sa_icon_font_size-lap-size\":\"55\",\"sa_icon_font_size-tab-choices\":\"px\",\"sa_icon_font_size-tab-size\":\"50\",\"sa_icon_font_size-mob-choices\":\"px\",\"sa_icon_font_size-mob-size\":\"45\",\"sa_icon_background_size-lap-choices\":\"px\",\"sa_icon_background_size-lap-size\":\"100\",\"sa_icon_background_size-tab-choices\":\"px\",\"sa_icon_background_size-tab-size\":\"100\",\"sa_icon_background_size-mob-choices\":\"px\",\"sa_icon_background_size-mob-size\":\"90\",\"sa_icon_color\":\"#ffffff\",\"sa_icon_bg_color\":\"rgba(87, 221, 255, 1)\",\"sa_drop_caps_border_radius-lap-choices\":\"px\",\"sa_drop_caps_border_radius-lap-top\":\"55\",\"sa_drop_caps_border_radius-lap-right\":\"55\",\"sa_drop_caps_border_radius-lap-bottom\":\"55\",\"sa_drop_caps_border_radius-lap-left\":\"55\",\"sa_drop_caps_border_radius-tab-choices\":\"px\",\"sa_drop_caps_border_radius-tab-top\":\"55\",\"sa_drop_caps_border_radius-tab-right\":\"55\",\"sa_drop_caps_border_radius-tab-bottom\":\"55\",\"sa_drop_caps_border_radius-tab-left\":\"55\",\"sa_drop_caps_border_radius-mob-choices\":\"px\",\"sa_drop_caps_border_radius-mob-top\":\"55\",\"sa_drop_caps_border_radius-mob-right\":\"55\",\"sa_drop_caps_border_radius-mob-bottom\":\"55\",\"sa_drop_caps_border_radius-mob-left\":\"55\",\"sa-ac-title-bx-shadow-shadow\":\"yes\",\"sa-ac-title-bx-shadow-type\":\"\",\"sa-ac-title-bx-shadow-horizontal-size\":\"0\",\"sa-ac-title-bx-shadow-vertical-size\":\"0\",\"sa-ac-title-bx-shadow-blur-size\":\"0\",\"sa-ac-title-bx-shadow-spread-size\":\"5\",\"sa-ac-title-bx-shadow-color\":\"rgba(68, 155, 189, 1)\",\"sa_icon_distance-choices\":\"px\",\"sa_icon_distance-size\":\"6\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Icon\",\"shortcode-addons-elements-id\":\"20\",\"shortcode-addons-elements-template\":\"Style_2\",\"sa_drop_caps_animation-looping\":\"0\"}","stylesheet":".shortcode-addons-wrapper-20 .oxi_addons__icon_main_style_2{justify-content: center;margin: 5px 5px 5px 5px;}.shortcode-addons-wrapper-20 .oxi_addons__icon_main_style_2 .oxi-icons{font-size: 55px;color:#ffffff;}.shortcode-addons-wrapper-20 .oxi_addons__icon_main_style_2 .oxi_addons__icon{width: 100px; height: 100px;background-color:rgba(87, 221, 255, 1);border-radius: 55px 55px 55px 55px;}.shortcode-addons-wrapper-20 .oxi_addons__icon_main_style_2 .oxi_addons__icon::after{border-radius: 55px 55px 55px 55px;-webkit-box-shadow: 0px 0px 0px 5px rgba(68, 155, 189, 1);-moz-box-shadow: 0px 0px 0px 5px rgba(68, 155, 189, 1);box-shadow: 0px 0px 0px 5px rgba(68, 155, 189, 1);padding: 6px; top: -6px; left: -6px}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-20 .oxi_addons__icon_main_style_2{justify-content: center;margin: 10px 10px 10px 10px;}.shortcode-addons-wrapper-20 .oxi_addons__icon_main_style_2 .oxi-icons{font-size: 50px;}.shortcode-addons-wrapper-20 .oxi_addons__icon_main_style_2 .oxi_addons__icon{width: 100px; height: 100px;border-radius: 55px 55px 55px 55px;}.shortcode-addons-wrapper-20 .oxi_addons__icon_main_style_2 .oxi_addons__icon::after{border-radius: 55px 55px 55px 55px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-20 .oxi_addons__icon_main_style_2{justify-content: center;margin: 10px 10px 10px 10px;}.shortcode-addons-wrapper-20 .oxi_addons__icon_main_style_2 .oxi-icons{font-size: 45px;}.shortcode-addons-wrapper-20 .oxi_addons__icon_main_style_2 .oxi_addons__icon{width: 90px; height: 90px;border-radius: 55px 55px 55px 55px;}.shortcode-addons-wrapper-20 .oxi_addons__icon_main_style_2 .oxi_addons__icon::after{border-radius: 55px 55px 55px 55px;}}","font_family":"[]"},"child":[{"id":"26","styleid":"20","rawdata":"{\"sa_icon_fontawesome\":\"fab fa-linkedin\",\"sa_icon_id\":\"\",\"sa_icon_link\":\"\",\"shortcodeitemid\":\"26\"}","stylesheet":""},{"id":"27","styleid":"20","rawdata":"null","stylesheet":""},{"id":"28","styleid":"20","rawdata":"null","stylesheet":""}]}',
            '{"style":{"id":"23","type":"Icon","name":"","style_name":"Style_3","rawdata":"{\"sa_icon_repeater\":{\"rep1\":{\"sa_icon_icon\":\"fab fa-android\",\"sa_icon_icon_id\":\"Order Now\",\"sa_icon_icon_link-url\":\"\",\"sa_icon_icon_link-follow\":\"yes\",\"sa_icon_icon_link-id\":\"\",\"sa_icon_icon_link-target\":\"0\"},\"rep2\":{\"sa_icon_icon\":\"fab fa-angellist\",\"sa_icon_icon_id\":\"Order Now\",\"sa_icon_icon_link-url\":\"\",\"sa_icon_icon_link-follow\":\"yes\",\"sa_icon_icon_link-id\":\"\",\"sa_icon_icon_link-target\":\"0\"},\"rep3\":{\"sa_icon_icon\":\"fas fa-apple-alt\",\"sa_icon_icon_id\":\"Order Now\",\"sa_icon_icon_link-url\":\"\",\"sa_icon_icon_link-follow\":\"yes\",\"sa_icon_icon_link-id\":\"\",\"sa_icon_icon_link-target\":\"0\"}},\"sa_icon_repeaternm\":\"3\",\"sa_icon_column-lap\":\"oxi-bt-col-lg-4\",\"sa_icon_column-tab\":\"oxi-bt-col-md-4\",\"sa_icon_column-mob\":\"oxi-bt-col-sm-12\",\"sa_icon_alignment-lap\":\"center\",\"sa_icon_alignment-tab\":\"center\",\"sa_icon_alignment-mob\":\"center\",\"sa_drop_caps_animation-type\":\"bounce\",\"sa_drop_caps_animation-duration-size\":\"0\",\"sa_drop_caps_animation-delay-size\":\"0\",\"sa_drop_caps_animation-offset-size\":\"100\",\"sa_icon_margin-lap-choices\":\"px\",\"sa_icon_margin-lap-top\":\"5\",\"sa_icon_margin-lap-right\":\"5\",\"sa_icon_margin-lap-bottom\":\"5\",\"sa_icon_margin-lap-left\":\"5\",\"sa_icon_margin-tab-choices\":\"px\",\"sa_icon_margin-tab-top\":\"10\",\"sa_icon_margin-tab-right\":\"10\",\"sa_icon_margin-tab-bottom\":\"10\",\"sa_icon_margin-tab-left\":\"10\",\"sa_icon_margin-mob-choices\":\"px\",\"sa_icon_margin-mob-top\":\"10\",\"sa_icon_margin-mob-right\":\"10\",\"sa_icon_margin-mob-bottom\":\"10\",\"sa_icon_margin-mob-left\":\"10\",\"sa_icon_font_size-lap-choices\":\"px\",\"sa_icon_font_size-lap-size\":\"64\",\"sa_icon_font_size-tab-choices\":\"px\",\"sa_icon_font_size-tab-size\":\"56\",\"sa_icon_font_size-mob-choices\":\"px\",\"sa_icon_font_size-mob-size\":\"51\",\"sa_icon_background_size-lap-choices\":\"px\",\"sa_icon_background_size-lap-size\":\"80\",\"sa_icon_background_size-tab-choices\":\"px\",\"sa_icon_background_size-tab-size\":\"80\",\"sa_icon_background_size-mob-choices\":\"px\",\"sa_icon_background_size-mob-size\":\"80\",\"sa_icon_color\":\"#fa6469\",\"sa_icon_bg_color-color\":\"\",\"sa_icon_bg_color-select\":\"media-library\",\"sa_icon_bg_color-image\":\"\",\"sa_icon_bg_color-url\":\"\",\"sa_icon_bg_color-position\":\"center center\",\"sa_icon_bg_color-attachment\":\"\",\"sa_icon_bg_color-repeat\":\"no-repeat\",\"sa_icon_bg_color-size-lap\":\"cover\",\"sa_icon_bg_color-size-tab\":\"cover\",\"sa_icon_bg_color-size-mob\":\"cover\",\"sa_drop_caps_border_radius-lap-choices\":\"px\",\"sa_drop_caps_border_radius-lap-top\":\"40\",\"sa_drop_caps_border_radius-lap-right\":\"40\",\"sa_drop_caps_border_radius-lap-bottom\":\"40\",\"sa_drop_caps_border_radius-lap-left\":\"40\",\"sa_drop_caps_border_radius-tab-choices\":\"px\",\"sa_drop_caps_border_radius-tab-top\":\"40\",\"sa_drop_caps_border_radius-tab-right\":\"40\",\"sa_drop_caps_border_radius-tab-bottom\":\"40\",\"sa_drop_caps_border_radius-tab-left\":\"40\",\"sa_drop_caps_border_radius-mob-choices\":\"px\",\"sa_drop_caps_border_radius-mob-top\":\"40\",\"sa_drop_caps_border_radius-mob-right\":\"40\",\"sa_drop_caps_border_radius-mob-bottom\":\"40\",\"sa_drop_caps_border_radius-mob-left\":\"40\",\"sa-ac-title-bx-shadow-shadow\":\"yes\",\"sa-ac-title-bx-shadow-type\":\"\",\"sa-ac-title-bx-shadow-horizontal-size\":\"0\",\"sa-ac-title-bx-shadow-vertical-size\":\"0\",\"sa-ac-title-bx-shadow-blur-size\":\"0\",\"sa-ac-title-bx-shadow-spread-size\":\"6\",\"sa-ac-title-bx-shadow-color\":\"rgba(255, 122, 122, 1)\",\"sa_icon_distance-choices\":\"px\",\"sa_icon_distance-size\":\"5\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Icon\",\"shortcode-addons-elements-id\":\"23\",\"shortcode-addons-elements-template\":\"Style_3\",\"sa_drop_caps_animation-looping\":\"0\",\"sa_icon_bg_color-img\":\"0\"}","stylesheet":".shortcode-addons-wrapper-23 .oxi_addons__icon_main_style_3{justify-content: center;margin: 5px 5px 5px 5px;}.shortcode-addons-wrapper-23 .oxi_addons__icon_main_style_3  .oxi-icons{font-size: 64px;}.shortcode-addons-wrapper-23  .oxi_addons__icon_main_style_3 .oxi_addons__icon{width: 80px; height: 80px;}.shortcode-addons-wrapper-23 .oxi_addons__icon_main_style_3 .oxi-icons{color:#fa6469;}.shortcode-addons-wrapper-23 .oxi_addons__icon_main_style_3 .oxi_addons__icon{background: ;border-radius: 40px 40px 40px 40px;}.shortcode-addons-wrapper-23 .oxi_addons__icon_main_style_3 .oxi_addons__icon::after{-webkit-box-shadow: 0px 0px 0px 6px rgba(255, 122, 122, 1);-moz-box-shadow: 0px 0px 0px 6px rgba(255, 122, 122, 1);box-shadow: 0px 0px 0px 6px rgba(255, 122, 122, 1);padding: 5px; top: -5px; left: -5px}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-23 .oxi_addons__icon_main_style_3{justify-content: center;margin: 10px 10px 10px 10px;}.shortcode-addons-wrapper-23 .oxi_addons__icon_main_style_3  .oxi-icons{font-size: 56px;}.shortcode-addons-wrapper-23  .oxi_addons__icon_main_style_3 .oxi_addons__icon{width: 80px; height: 80px;}.shortcode-addons-wrapper-23 .oxi_addons__icon_main_style_3 .oxi_addons__icon{border-radius: 40px 40px 40px 40px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-23 .oxi_addons__icon_main_style_3{justify-content: center;margin: 10px 10px 10px 10px;}.shortcode-addons-wrapper-23 .oxi_addons__icon_main_style_3  .oxi-icons{font-size: 51px;}.shortcode-addons-wrapper-23  .oxi_addons__icon_main_style_3 .oxi_addons__icon{width: 80px; height: 80px;}.shortcode-addons-wrapper-23 .oxi_addons__icon_main_style_3 .oxi_addons__icon{border-radius: 40px 40px 40px 40px;}}","font_family":"[]"},"child":[{"id":"35","styleid":"23","rawdata":"null","stylesheet":""},{"id":"36","styleid":"23","rawdata":"{\"sa_icon_fontawesome\":\"fab fa-accessible-icon\",\"sa_icon_id\":\"\",\"sa_icon_link\":\"\",\"shortcodeitemid\":\"36\"}","stylesheet":""},{"id":"37","styleid":"23","rawdata":"null","stylesheet":""}]}',
            '{"style":{"id":"24","type":"Icon","name":"","style_name":"Style_4","rawdata":"{\"sa_icon_repeater\":{\"rep1\":{\"sa_icon_icon\":\"fas fa-basketball-ball\",\"sa_icon_icon_id\":\"Order Now\",\"sa_icon_icon_link-url\":\"\",\"sa_icon_icon_link-follow\":\"yes\",\"sa_icon_icon_link-id\":\"\",\"sa_icon_icon_link-target\":\"0\"},\"rep2\":{\"sa_icon_icon\":\"fab fa-bandcamp\",\"sa_icon_icon_id\":\"Order Now\",\"sa_icon_icon_link-url\":\"\",\"sa_icon_icon_link-follow\":\"yes\",\"sa_icon_icon_link-id\":\"\",\"sa_icon_icon_link-target\":\"0\"},\"rep3\":{\"sa_icon_icon\":\"fab fa-bity\",\"sa_icon_icon_id\":\"Order Now\",\"sa_icon_icon_link-url\":\"\",\"sa_icon_icon_link-follow\":\"yes\",\"sa_icon_icon_link-id\":\"\",\"sa_icon_icon_link-target\":\"0\"}},\"sa_icon_repeaternm\":\"3\",\"sa_icon_column-lap\":\"oxi-bt-col-lg-4\",\"sa_icon_column-tab\":\"oxi-bt-col-md-4\",\"sa_icon_column-mob\":\"oxi-bt-col-sm-12\",\"sa_icon_alignment-lap\":\"center\",\"sa_icon_alignment-tab\":\"center\",\"sa_icon_alignment-mob\":\"center\",\"sa_icon_animation-type\":\"bounce\",\"sa_icon_animation-duration-size\":\"0\",\"sa_icon_animation-delay-size\":\"0\",\"sa_icon_animation-offset-size\":\"100\",\"sa_icon_margin-lap-choices\":\"px\",\"sa_icon_margin-lap-top\":\"5\",\"sa_icon_margin-lap-right\":\"5\",\"sa_icon_margin-lap-bottom\":\"5\",\"sa_icon_margin-lap-left\":\"5\",\"sa_icon_margin-tab-choices\":\"px\",\"sa_icon_margin-tab-top\":\"10\",\"sa_icon_margin-tab-right\":\"10\",\"sa_icon_margin-tab-bottom\":\"10\",\"sa_icon_margin-tab-left\":\"10\",\"sa_icon_margin-mob-choices\":\"px\",\"sa_icon_margin-mob-top\":\"10\",\"sa_icon_margin-mob-right\":\"10\",\"sa_icon_margin-mob-bottom\":\"10\",\"sa_icon_margin-mob-left\":\"10\",\"sa_icon_font_size-lap-choices\":\"px\",\"sa_icon_font_size-lap-size\":\"50\",\"sa_icon_font_size-tab-choices\":\"px\",\"sa_icon_font_size-tab-size\":\"51\",\"sa_icon_font_size-mob-choices\":\"px\",\"sa_icon_font_size-mob-size\":\"45\",\"sa_icon_background_size-lap-choices\":\"px\",\"sa_icon_background_size-lap-size\":\"120\",\"sa_icon_background_size-tab-choices\":\"px\",\"sa_icon_background_size-tab-size\":\"100\",\"sa_icon_background_size-mob-choices\":\"px\",\"sa_icon_background_size-mob-size\":\"100\",\"sa_icon_color\":\"#ffffff\",\"sa_icon_bg_color-color\":\"rgba(255,102,102,1.01)\",\"sa_icon_bg_color-select\":\"media-library\",\"sa_icon_bg_color-image\":\"\",\"sa_icon_bg_color-url\":\"\",\"sa_icon_bg_color-position\":\"center center\",\"sa_icon_bg_color-attachment\":\"\",\"sa_icon_bg_color-repeat\":\"no-repeat\",\"sa_icon_bg_color-size-lap\":\"cover\",\"sa_icon_bg_color-size-tab\":\"cover\",\"sa_icon_bg_color-size-mob\":\"cover\",\"sa_icon_box_shadow-shadow\":\"yes\",\"sa_icon_box_shadow-type\":\"\",\"sa_icon_box_shadow-horizontal-size\":\"0\",\"sa_icon_box_shadow-vertical-size\":\"0\",\"sa_icon_box_shadow-blur-size\":\"0\",\"sa_icon_box_shadow-spread-size\":\"0\",\"sa_icon_box_shadow-color\":\"#cccccc\",\"sa_icon_border-type\":\"solid\",\"sa_icon_border-width-lap-choices\":\"px\",\"sa_icon_border-width-lap-top\":\"8\",\"sa_icon_border-width-lap-right\":\"8\",\"sa_icon_border-width-lap-bottom\":\"8\",\"sa_icon_border-width-lap-left\":\"8\",\"sa_icon_border-width-tab-choices\":\"px\",\"sa_icon_border-width-tab-top\":\"\",\"sa_icon_border-width-tab-right\":\"\",\"sa_icon_border-width-tab-bottom\":\"\",\"sa_icon_border-width-tab-left\":\"\",\"sa_icon_border-width-mob-choices\":\"px\",\"sa_icon_border-width-mob-top\":\"\",\"sa_icon_border-width-mob-right\":\"\",\"sa_icon_border-width-mob-bottom\":\"\",\"sa_icon_border-width-mob-left\":\"\",\"sa_icon_border-color\":\"#ffe0de\",\"sa_icon_border_radius-lap-choices\":\"px\",\"sa_icon_border_radius-lap-top\":\"60\",\"sa_icon_border_radius-lap-right\":\"60\",\"sa_icon_border_radius-lap-bottom\":\"60\",\"sa_icon_border_radius-lap-left\":\"60\",\"sa_icon_border_radius-tab-choices\":\"px\",\"sa_icon_border_radius-tab-top\":\"60\",\"sa_icon_border_radius-tab-right\":\"60\",\"sa_icon_border_radius-tab-bottom\":\"60\",\"sa_icon_border_radius-tab-left\":\"60\",\"sa_icon_border_radius-mob-choices\":\"px\",\"sa_icon_border_radius-mob-top\":\"60\",\"sa_icon_border_radius-mob-right\":\"60\",\"sa_icon_border_radius-mob-bottom\":\"60\",\"sa_icon_border_radius-mob-left\":\"60\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Icon\",\"shortcode-addons-elements-id\":\"24\",\"shortcode-addons-elements-template\":\"Style_4\",\"sa_icon_animation-looping\":\"0\",\"sa_icon_bg_color-img\":\"0\"}","stylesheet":".shortcode-addons-wrapper-24 .oxi_addons__icon_main_style_4 .oxi_addons__icon_main{justify-content: center;}.shortcode-addons-wrapper-24 .oxi_addons__icon_main_style_4{margin: 5px 5px 5px 5px;}.shortcode-addons-wrapper-24 .oxi_addons__icon_main_style_4 .oxi-icons{font-size: 50px;color:#ffffff;}.shortcode-addons-wrapper-24 .oxi_addons__icon_main_style_4 .oxi_addons__icon{width: 120px; height: 120px;background: rgba(255,102,102,1.01);border-style: solid;border-width: 8px 8px 8px 8px;border-color: #ffe0de;border-radius: 60px 60px 60px 60px;}.shortcode-addons-wrapper-24 .oxi_addons__icon{}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-24 .oxi_addons__icon_main_style_4 .oxi_addons__icon_main{justify-content: center;}.shortcode-addons-wrapper-24 .oxi_addons__icon_main_style_4{margin: 10px 10px 10px 10px;}.shortcode-addons-wrapper-24 .oxi_addons__icon_main_style_4 .oxi-icons{font-size: 51px;}.shortcode-addons-wrapper-24 .oxi_addons__icon_main_style_4 .oxi_addons__icon{width: 100px; height: 100px;border-radius: 60px 60px 60px 60px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-24 .oxi_addons__icon_main_style_4 .oxi_addons__icon_main{justify-content: center;}.shortcode-addons-wrapper-24 .oxi_addons__icon_main_style_4{margin: 10px 10px 10px 10px;}.shortcode-addons-wrapper-24 .oxi_addons__icon_main_style_4 .oxi-icons{font-size: 45px;}.shortcode-addons-wrapper-24 .oxi_addons__icon_main_style_4 .oxi_addons__icon{width: 100px; height: 100px;border-radius: 60px 60px 60px 60px;}}","font_family":"[]"},"child":[{"id":"38","styleid":"24","rawdata":"{\"sa_icon_fontawesome\":\"fab fa-accessible-icon\",\"sa_icon_id\":\"\",\"sa_icon_link\":\"\",\"shortcodeitemid\":\"38\"}","stylesheet":""},{"id":"39","styleid":"24","rawdata":"{\"sa_icon_fontawesome\":\"fab fa-adversal\",\"sa_icon_id\":\"\",\"sa_icon_link\":\"\",\"shortcodeitemid\":\"39\"}","stylesheet":""},{"id":"40","styleid":"24","rawdata":"null","stylesheet":""},{"id":"44","styleid":"24","rawdata":"{\"sa_icon_fontawesome\":\"\",\"sa_icon_id\":\"\",\"sa_icon_link-url\":\"#\",\"sa_icon_link-follow\":\"yes\",\"sa_icon_link-id\":\"asdf\",\"shortcodeitemid\":\"44\"}","stylesheet":""}]}',
        );
    }

}