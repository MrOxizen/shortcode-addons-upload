<?php

namespace SHORTCODE_ADDONS_UPLOAD\Light_box;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Light_box
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Light_box extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1');
    }
    public function templates() {
        return array(
        '{"style":{"id":"174","type":"Link_effects","name":"Style 1","style_name":"Style_1","rawdata":"{\"sa_link_text\":\"SIGN UP\",\"sa_link_icon\":\"yes\",\"sa_link_icon1_class\":\"fas fa-caret-left\",\"sa_link_icon2_class\":\"fas fa-caret-right\",\"sa_link_link-url\":\"\",\"sa_link_link-follow\":\"yes\",\"sa_link_link-id\":\"\",\"sa_link_position\":\"center\",\"sa_link_animation-type\":\"bounce\",\"sa_link_animation-duration-size\":\"2800\",\"sa_link_animation-delay-size\":\"600\",\"sa_link_animation-offset-size\":\"100\",\"sa_link_margin-lap-choices\":\"px\",\"sa_link_margin-lap-top\":\"\",\"sa_link_margin-lap-right\":\"\",\"sa_link_margin-lap-bottom\":\"\",\"sa_link_margin-lap-left\":\"\",\"sa_link_margin-tab-choices\":\"px\",\"sa_link_margin-tab-top\":\"\",\"sa_link_margin-tab-right\":\"\",\"sa_link_margin-tab-bottom\":\"\",\"sa_link_margin-tab-left\":\"\",\"sa_link_margin-mob-choices\":\"px\",\"sa_link_margin-mob-top\":\"\",\"sa_link_margin-mob-right\":\"\",\"sa_link_margin-mob-bottom\":\"\",\"sa_link_margin-mob-left\":\"\",\"sa_link_text_typho-font\":\"Roboto\",\"sa_link_text_typho-size-lap-choices\":\"px\",\"sa_link_text_typho-size-lap-size\":\"26\",\"sa_link_text_typho-size-tab-choices\":\"px\",\"sa_link_text_typho-size-tab-size\":\"\",\"sa_link_text_typho-size-mob-choices\":\"px\",\"sa_link_text_typho-size-mob-size\":\"\",\"sa_link_text_typho-weight\":\"\",\"sa_link_text_typho-transform\":\"\",\"sa_link_text_typho-style\":\"\",\"sa_link_text_typho-decoration\":\"\",\"sa_link_text_typho-l-height-lap-choices\":\"px\",\"sa_link_text_typho-l-height-lap-size\":\"\",\"sa_link_text_typho-l-height-tab-choices\":\"px\",\"sa_link_text_typho-l-height-tab-size\":\"\",\"sa_link_text_typho-l-height-mob-choices\":\"px\",\"sa_link_text_typho-l-height-mob-size\":\"\",\"sa_link_text_typho-l-spacing-lap-choices\":\"px\",\"sa_link_text_typho-l-spacing-lap-size\":\"\",\"sa_link_text_typho-l-spacing-tab-choices\":\"px\",\"sa_link_text_typho-l-spacing-tab-size\":\"\",\"sa_link_text_typho-l-spacing-mob-choices\":\"px\",\"sa_link_text_typho-l-spacing-mob-size\":\"\",\"sa_link_text_color\":\"#f06060\",\"sa_link_tx_shadow-color\":\"#ffffff\",\"sa_link_tx_shadow-blur-size\":\"0\",\"sa_link_tx_shadow-horizontal-size\":\"0\",\"sa_link_tx_shadow-vertical-size\":\"0\",\"sa_link_hover_text_color\":\"#2c36c7\",\"sa_link_hover_tx_shadow-color\":\"#ffffff\",\"sa_link_hover_tx_shadow-blur-size\":\"0\",\"sa_link_hover_tx_shadow-horizontal-size\":\"0\",\"sa_link_hover_tx_shadow-vertical-size\":\"0\",\"sa_link_padding-lap-choices\":\"px\",\"sa_link_padding-lap-top\":\"10\",\"sa_link_padding-lap-right\":\"10\",\"sa_link_padding-lap-bottom\":\"10\",\"sa_link_padding-lap-left\":\"10\",\"sa_link_padding-tab-choices\":\"px\",\"sa_link_padding-tab-top\":\"10\",\"sa_link_padding-tab-right\":\"10\",\"sa_link_padding-tab-bottom\":\"10\",\"sa_link_padding-tab-left\":\"10\",\"sa_link_padding-mob-choices\":\"px\",\"sa_link_padding-mob-top\":\"10\",\"sa_link_padding-mob-right\":\"10\",\"sa_link_padding-mob-bottom\":\"10\",\"sa_link_padding-mob-left\":\"10\",\"sa_link_icon_size-lap-choices\":\"px\",\"sa_link_icon_size-lap-size\":\"30\",\"sa_link_icon_size-tab-choices\":\"px\",\"sa_link_icon_size-tab-size\":\"20\",\"sa_link_icon_size-mob-choices\":\"px\",\"sa_link_icon_size-mob-size\":\"20\",\"sa_link_icon_color\":\"#0e48b3\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Link_effects\",\"shortcode-addons-elements-id\":\"174\",\"shortcode-addons-elements-template\":\"Style_1\",\"sa_link_link-target\":\"0\",\"sa_link_animation-looping\":\"0\"}","stylesheet":".shortcode-addons-wrapper-174 .link-effect-main-style1{justify-content:center;}.shortcode-addons-wrapper-174 .link-effect-main-style1 .oxi-links-effects-style1{font-family:&quot;Roboto&quot;;font-size: 26px;color:#f06060;padding: 10px 10px 10px 10px;}.shortcode-addons-wrapper-174 .link-effect-main-style1 .oxi-links-effects-style1:hover{color:#2c36c7;}.shortcode-addons-wrapper-174 .link-effect-main-style1 .oxi-links-effects-style1 .sa_link_icon1{font-size:30px;color:#0e48b3;}.shortcode-addons-wrapper-174 .link-effect-main-style1 .oxi-links-effects-style1 .sa_link_icon2{font-size:30px;color:#0e48b3;}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-174 .link-effect-main-style1 .oxi-links-effects-style1{padding: 10px 10px 10px 10px;}.shortcode-addons-wrapper-174 .link-effect-main-style1 .oxi-links-effects-style1 .sa_link_icon1{font-size:20px;}.shortcode-addons-wrapper-174 .link-effect-main-style1 .oxi-links-effects-style1 .sa_link_icon2{font-size:20px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-174 .link-effect-main-style1 .oxi-links-effects-style1{padding: 10px 10px 10px 10px;}.shortcode-addons-wrapper-174 .link-effect-main-style1 .oxi-links-effects-style1 .sa_link_icon1{font-size:20px;}.shortcode-addons-wrapper-174 .link-effect-main-style1 .oxi-links-effects-style1 .sa_link_icon2{font-size:20px;}}","font_family":"{\"Roboto\":\"Roboto\"}"},"child":[]}',
          
        );
    }

}