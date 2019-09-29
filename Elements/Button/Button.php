<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Button;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Button extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1');
    }

    public function templates() {
        return array(
//            '{"style":{"id":"17","type":"button","name":"","style_name":"Style_1","rawdata":"{\\\"sa_btn_text\\\":\\\"Button, Tex\\\",\\\"sa_btn_icon_class\\\":\\\"fas fa-angle-double-right\\\",\\\"sa_btn_link-url\\\":\\\"\\\",\\\"sa_btn_link-follow\\\":\\\"yes\\\",\\\"sa_btn_link-id\\\":\\\"\\\",\\\"sa_btn_width_choose\\\":\\\"sa-width-dymanic\\\",\\\"sa_btn_width-lap-choices\\\":\\\"px\\\",\\\"sa_btn_width-lap-size\\\":\\\"220\\\",\\\"sa_btn_width-tab-choices\\\":\\\"px\\\",\\\"sa_btn_width-tab-size\\\":\\\"220\\\",\\\"sa_btn_width-mob-choices\\\":\\\"px\\\",\\\"sa_btn_width-mob-size\\\":\\\"220\\\",\\\"sa_btn_btn_position\\\":\\\"center\\\",\\\"sa_btn_animation-type\\\":\\\"bounce\\\",\\\"sa_btn_animation-duration-size\\\":\\\"3400\\\",\\\"sa_btn_animation-delay-size\\\":\\\"0\\\",\\\"sa_btn_animation-offset-size\\\":\\\"80\\\",\\\"sa_btn_animation-looping\\\":\\\"yes\\\",\\\"sa_btn_margin-lap-choices\\\":\\\"px\\\",\\\"sa_btn_margin-lap-top\\\":\\\"0\\\",\\\"sa_btn_margin-lap-right\\\":\\\"0\\\",\\\"sa_btn_margin-lap-bottom\\\":\\\"0\\\",\\\"sa_btn_margin-lap-left\\\":\\\"0\\\",\\\"sa_btn_margin-tab-choices\\\":\\\"px\\\",\\\"sa_btn_margin-tab-top\\\":\\\"0\\\",\\\"sa_btn_margin-tab-right\\\":\\\"0\\\",\\\"sa_btn_margin-tab-bottom\\\":\\\"0\\\",\\\"sa_btn_margin-tab-left\\\":\\\"0\\\",\\\"sa_btn_margin-mob-choices\\\":\\\"px\\\",\\\"sa_btn_margin-mob-top\\\":\\\"0\\\",\\\"sa_btn_margin-mob-right\\\":\\\"0\\\",\\\"sa_btn_margin-mob-bottom\\\":\\\"0\\\",\\\"sa_btn_margin-mob-left\\\":\\\"0\\\",\\\"sa_btn_text_typho-font\\\":\\\"\\\",\\\"sa_btn_text_typho-size-lap-choices\\\":\\\"px\\\",\\\"sa_btn_text_typho-size-lap-size\\\":\\\"\\\",\\\"sa_btn_text_typho-size-tab-choices\\\":\\\"px\\\",\\\"sa_btn_text_typho-size-tab-size\\\":\\\"\\\",\\\"sa_btn_text_typho-size-mob-choices\\\":\\\"px\\\",\\\"sa_btn_text_typho-size-mob-size\\\":\\\"\\\",\\\"sa_btn_text_typho-weight\\\":\\\"\\\",\\\"sa_btn_text_typho-transform\\\":\\\"\\\",\\\"sa_btn_text_typho-style\\\":\\\"\\\",\\\"sa_btn_text_typho-decoration\\\":\\\"\\\",\\\"sa_btn_text_typho-l-height-lap-choices\\\":\\\"px\\\",\\\"sa_btn_text_typho-l-height-lap-size\\\":\\\"\\\",\\\"sa_btn_text_typho-l-height-tab-choices\\\":\\\"px\\\",\\\"sa_btn_text_typho-l-height-tab-size\\\":\\\"\\\",\\\"sa_btn_text_typho-l-height-mob-choices\\\":\\\"px\\\",\\\"sa_btn_text_typho-l-height-mob-size\\\":\\\"\\\",\\\"sa_btn_text_typho-l-spacing-lap-choices\\\":\\\"px\\\",\\\"sa_btn_text_typho-l-spacing-lap-size\\\":\\\"\\\",\\\"sa_btn_text_typho-l-spacing-tab-choices\\\":\\\"px\\\",\\\"sa_btn_text_typho-l-spacing-tab-size\\\":\\\"\\\",\\\"sa_btn_text_typho-l-spacing-mob-choices\\\":\\\"px\\\",\\\"sa_btn_text_typho-l-spacing-mob-size\\\":\\\"\\\",\\\"sa-btn-text-color\\\":\\\"#5c5c5c\\\",\\\"sa-btn-bg-color\\\":\\\"rgba(122,0,43,0.67)\\\",\\\"sa-btn-bg-select\\\":\\\"media-library\\\",\\\"sa-btn-bg-image\\\":\\\"\\\",\\\"sa-btn-bg-url\\\":\\\"\\\",\\\"sa-btn-bg-position\\\":\\\"center center\\\",\\\"sa-btn-bg-attachment\\\":\\\"\\\",\\\"sa-btn-bg-repeat\\\":\\\"no-repeat\\\",\\\"sa-btn-bg-size-lap\\\":\\\"cover\\\",\\\"sa-btn-bg-size-tab\\\":\\\"cover\\\",\\\"sa-btn-bg-size-mob\\\":\\\"cover\\\",\\\"sa-btn-br-type\\\":\\\"\\\",\\\"sa-btn-br-width-lap-choices\\\":\\\"px\\\",\\\"sa-btn-br-width-lap-top\\\":\\\"\\\",\\\"sa-btn-br-width-lap-right\\\":\\\"\\\",\\\"sa-btn-br-width-lap-bottom\\\":\\\"\\\",\\\"sa-btn-br-width-lap-left\\\":\\\"\\\",\\\"sa-btn-br-width-tab-choices\\\":\\\"px\\\",\\\"sa-btn-br-width-tab-top\\\":\\\"\\\",\\\"sa-btn-br-width-tab-right\\\":\\\"\\\",\\\"sa-btn-br-width-tab-bottom\\\":\\\"\\\",\\\"sa-btn-br-width-tab-left\\\":\\\"\\\",\\\"sa-btn-br-width-mob-choices\\\":\\\"px\\\",\\\"sa-btn-br-width-mob-top\\\":\\\"\\\",\\\"sa-btn-br-width-mob-right\\\":\\\"\\\",\\\"sa-btn-br-width-mob-bottom\\\":\\\"\\\",\\\"sa-btn-br-width-mob-left\\\":\\\"\\\",\\\"sa-btn-br-color\\\":\\\"\\\",\\\"sa-btn-br-radius-lap-choices\\\":\\\"px\\\",\\\"sa-btn-br-radius-lap-top\\\":\\\"50\\\",\\\"sa-btn-br-radius-lap-right\\\":\\\"50\\\",\\\"sa-btn-br-radius-lap-bottom\\\":\\\"50\\\",\\\"sa-btn-br-radius-lap-left\\\":\\\"50\\\",\\\"sa-btn-br-radius-tab-choices\\\":\\\"px\\\",\\\"sa-btn-br-radius-tab-top\\\":\\\"50\\\",\\\"sa-btn-br-radius-tab-right\\\":\\\"50\\\",\\\"sa-btn-br-radius-tab-bottom\\\":\\\"50\\\",\\\"sa-btn-br-radius-tab-left\\\":\\\"50\\\",\\\"sa-btn-br-radius-mob-choices\\\":\\\"px\\\",\\\"sa-btn-br-radius-mob-top\\\":\\\"50\\\",\\\"sa-btn-br-radius-mob-right\\\":\\\"50\\\",\\\"sa-btn-br-radius-mob-bottom\\\":\\\"50\\\",\\\"sa-btn-br-radius-mob-left\\\":\\\"50\\\",\\\"sa-btn-tx-shadow-color\\\":\\\"#ffffff\\\",\\\"sa-btn-tx-shadow-blur-size\\\":\\\"0\\\",\\\"sa-btn-tx-shadow-horizontal-size\\\":\\\"0\\\",\\\"sa-btn-tx-shadow-vertical-size\\\":\\\"0\\\",\\\"sa_btn_box_shadow-shadow\\\":\\\"yes\\\",\\\"sa_btn_box_shadow-type\\\":\\\"\\\",\\\"sa_btn_box_shadow-horizontal-size\\\":\\\"0\\\",\\\"sa_btn_box_shadow-vertical-size\\\":\\\"0\\\",\\\"sa_btn_box_shadow-blur-size\\\":\\\"0\\\",\\\"sa_btn_box_shadow-spread-size\\\":\\\"0\\\",\\\"sa_btn_box_shadow-color\\\":\\\"#cccccc\\\",\\\"sa-btn-text-h-color\\\":\\\"#ffffff\\\",\\\"sa-btn-h-bg-color\\\":\\\"\\\",\\\"sa-btn-h-bg-select\\\":\\\"media-library\\\",\\\"sa-btn-h-bg-image\\\":\\\"\\\",\\\"sa-btn-h-bg-url\\\":\\\"\\\",\\\"sa-btn-h-bg-position\\\":\\\"center center\\\",\\\"sa-btn-h-bg-attachment\\\":\\\"\\\",\\\"sa-btn-h-bg-repeat\\\":\\\"no-repeat\\\",\\\"sa-btn-h-bg-size-lap\\\":\\\"cover\\\",\\\"sa-btn-h-bg-size-tab\\\":\\\"cover\\\",\\\"sa-btn-h-bg-size-mob\\\":\\\"cover\\\",\\\"sa-btn-h-br-type\\\":\\\"\\\",\\\"sa-btn-h-br-width-lap-choices\\\":\\\"px\\\",\\\"sa-btn-h-br-width-lap-top\\\":\\\"\\\",\\\"sa-btn-h-br-width-lap-right\\\":\\\"\\\",\\\"sa-btn-h-br-width-lap-bottom\\\":\\\"\\\",\\\"sa-btn-h-br-width-lap-left\\\":\\\"\\\",\\\"sa-btn-h-br-width-tab-choices\\\":\\\"px\\\",\\\"sa-btn-h-br-width-tab-top\\\":\\\"\\\",\\\"sa-btn-h-br-width-tab-right\\\":\\\"\\\",\\\"sa-btn-h-br-width-tab-bottom\\\":\\\"\\\",\\\"sa-btn-h-br-width-tab-left\\\":\\\"\\\",\\\"sa-btn-h-br-width-mob-choices\\\":\\\"px\\\",\\\"sa-btn-h-br-width-mob-top\\\":\\\"\\\",\\\"sa-btn-h-br-width-mob-right\\\":\\\"\\\",\\\"sa-btn-h-br-width-mob-bottom\\\":\\\"\\\",\\\"sa-btn-h-br-width-mob-left\\\":\\\"\\\",\\\"sa-btn-h-br-color\\\":\\\"\\\",\\\"sa-btn-hover-br-radius-lap-choices\\\":\\\"px\\\",\\\"sa-btn-hover-br-radius-lap-top\\\":\\\"50\\\",\\\"sa-btn-hover-br-radius-lap-right\\\":\\\"50\\\",\\\"sa-btn-hover-br-radius-lap-bottom\\\":\\\"50\\\",\\\"sa-btn-hover-br-radius-lap-left\\\":\\\"50\\\",\\\"sa-btn-hover-br-radius-tab-choices\\\":\\\"px\\\",\\\"sa-btn-hover-br-radius-tab-top\\\":\\\"50\\\",\\\"sa-btn-hover-br-radius-tab-right\\\":\\\"50\\\",\\\"sa-btn-hover-br-radius-tab-bottom\\\":\\\"50\\\",\\\"sa-btn-hover-br-radius-tab-left\\\":\\\"50\\\",\\\"sa-btn-hover-br-radius-mob-choices\\\":\\\"px\\\",\\\"sa-btn-hover-br-radius-mob-top\\\":\\\"50\\\",\\\"sa-btn-hover-br-radius-mob-right\\\":\\\"50\\\",\\\"sa-btn-hover-br-radius-mob-bottom\\\":\\\"50\\\",\\\"sa-btn-hover-br-radius-mob-left\\\":\\\"50\\\",\\\"sa-btn-h-tx-shadow-color\\\":\\\"#ffffff\\\",\\\"sa-btn-h-tx-shadow-blur-size\\\":\\\"0\\\",\\\"sa-btn-h-tx-shadow-horizontal-size\\\":\\\"0\\\",\\\"sa-btn-h-tx-shadow-vertical-size\\\":\\\"0\\\",\\\"sa_btn_h_box_shadow-shadow\\\":\\\"yes\\\",\\\"sa_btn_h_box_shadow-type\\\":\\\"\\\",\\\"sa_btn_h_box_shadow-horizontal-size\\\":\\\"0\\\",\\\"sa_btn_h_box_shadow-vertical-size\\\":\\\"0\\\",\\\"sa_btn_h_box_shadow-blur-size\\\":\\\"0\\\",\\\"sa_btn_h_box_shadow-spread-size\\\":\\\"0\\\",\\\"sa_btn_h_box_shadow-color\\\":\\\"#cccccc\\\",\\\"sa_btn_padding-lap-choices\\\":\\\"px\\\",\\\"sa_btn_padding-lap-top\\\":\\\"10\\\",\\\"sa_btn_padding-lap-right\\\":\\\"10\\\",\\\"sa_btn_padding-lap-bottom\\\":\\\"10\\\",\\\"sa_btn_padding-lap-left\\\":\\\"10\\\",\\\"sa_btn_padding-tab-choices\\\":\\\"px\\\",\\\"sa_btn_padding-tab-top\\\":\\\"10\\\",\\\"sa_btn_padding-tab-right\\\":\\\"10\\\",\\\"sa_btn_padding-tab-bottom\\\":\\\"10\\\",\\\"sa_btn_padding-tab-left\\\":\\\"10\\\",\\\"sa_btn_padding-mob-choices\\\":\\\"px\\\",\\\"sa_btn_padding-mob-top\\\":\\\"10\\\",\\\"sa_btn_padding-mob-right\\\":\\\"10\\\",\\\"sa_btn_padding-mob-bottom\\\":\\\"10\\\",\\\"sa_btn_padding-mob-left\\\":\\\"10\\\",\\\"sa_btn_icon_size-lap-choices\\\":\\\"px\\\",\\\"sa_btn_icon_size-lap-size\\\":\\\"20\\\",\\\"sa_btn_icon_size-tab-choices\\\":\\\"px\\\",\\\"sa_btn_icon_size-tab-size\\\":\\\"20\\\",\\\"sa_btn_icon_size-mob-choices\\\":\\\"px\\\",\\\"sa_btn_icon_size-mob-size\\\":\\\"20\\\",\\\"sa_btn_icon_color\\\":\\\"#ffffff\\\",\\\"sa_btn_icon_h_color\\\":\\\"#ffffff\\\",\\\"sa_btn_icon_padding-lap-choices\\\":\\\"px\\\",\\\"sa_btn_icon_padding-lap-top\\\":\\\"0\\\",\\\"sa_btn_icon_padding-lap-right\\\":\\\"0\\\",\\\"sa_btn_icon_padding-lap-bottom\\\":\\\"0\\\",\\\"sa_btn_icon_padding-lap-left\\\":\\\"0\\\",\\\"sa_btn_icon_padding-tab-choices\\\":\\\"px\\\",\\\"sa_btn_icon_padding-tab-top\\\":\\\"0\\\",\\\"sa_btn_icon_padding-tab-right\\\":\\\"0\\\",\\\"sa_btn_icon_padding-tab-bottom\\\":\\\"0\\\",\\\"sa_btn_icon_padding-tab-left\\\":\\\"0\\\",\\\"sa_btn_icon_padding-mob-choices\\\":\\\"px\\\",\\\"sa_btn_icon_padding-mob-top\\\":\\\"0\\\",\\\"sa_btn_icon_padding-mob-right\\\":\\\"0\\\",\\\"sa_btn_icon_padding-mob-bottom\\\":\\\"0\\\",\\\"sa_btn_icon_padding-mob-left\\\":\\\"0\\\",\\\"shortcode-addons-2-0-preview\\\":\\\"\\\",\\\"shortcode-addons-elements-name\\\":\\\"Button\\\",\\\"shortcode-addons-elements-id\\\":\\\"17\\\",\\\"shortcode-addons-elements-template\\\":\\\"Style_1\\\",\\\"sa_btn_icon\\\":\\\"0\\\",\\\"sa_btn_icon_position\\\":\\\"0\\\",\\\"sa_btn_link-target\\\":\\\"0\\\",\\\"sa-btn-bg-img\\\":\\\"0\\\",\\\"sa-btn-h-bg-img\\\":\\\"0\\\"}","stylesheet":".shortcode-addons-wrapper-17 .oxi-addons-align-btn1 .oxi-button-btn1.sa-width-dymanic{max-width:220px;}.shortcode-addons-wrapper-17 .oxi-addons-align-btn1{text-align:center;}.shortcode-addons-wrapper-17 .oxi-addons-align-btn1 .oxi-button-btn1{margin: 0px 0px 0px 0px;background: rgba(122,0,43,0.67);border-radius: 50px 50px 50px 50px;padding: 10px 10px 10px 10px;}.shortcode-addons-wrapper-17 .oxi-addons-align-btn1 .oxi-button-btn1 .sa-button-text{color:#5c5c5c;}.shortcode-addons-wrapper-17 .oxi-addons-align-btn1 .oxi-button-btn1:hover .sa-button-text{color:#ffffff;}.shortcode-addons-wrapper-17 .oxi-addons-align-btn1 .oxi-button-btn1:hover{background: ;border-radius: 50px 50px 50px 50px;}.shortcode-addons-wrapper-17 .oxi-addons-align-btn1 .oxi-button-btn1 .oxi-icons{font-size:20px;color:#ffffff;padding: 0px 0px 0px 0px;}.shortcode-addons-wrapper-17 .oxi-addons-align-btn1 .oxi-button-btn1:hover .oxi-icons{color:#ffffff;}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-17 .oxi-addons-align-btn1 .oxi-button-btn1.sa-width-dymanic{max-width:220px;}.shortcode-addons-wrapper-17 .oxi-addons-align-btn1 .oxi-button-btn1{margin: 0px 0px 0px 0px;border-radius: 50px 50px 50px 50px;padding: 10px 10px 10px 10px;}.shortcode-addons-wrapper-17 .oxi-addons-align-btn1 .oxi-button-btn1:hover{border-radius: 50px 50px 50px 50px;}.shortcode-addons-wrapper-17 .oxi-addons-align-btn1 .oxi-button-btn1 .oxi-icons{font-size:20px;padding: 0px 0px 0px 0px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-17 .oxi-addons-align-btn1 .oxi-button-btn1.sa-width-dymanic{max-width:220px;}.shortcode-addons-wrapper-17 .oxi-addons-align-btn1 .oxi-button-btn1{margin: 0px 0px 0px 0px;border-radius: 50px 50px 50px 50px;padding: 10px 10px 10px 10px;}.shortcode-addons-wrapper-17 .oxi-addons-align-btn1 .oxi-button-btn1:hover{border-radius: 50px 50px 50px 50px;}.shortcode-addons-wrapper-17 .oxi-addons-align-btn1 .oxi-button-btn1 .oxi-icons{font-size:20px;padding: 0px 0px 0px 0px;}}","font_family":"[]"},"child":[]}'
        );
    }


}
