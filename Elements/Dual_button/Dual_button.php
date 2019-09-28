<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Dual_button;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Dual Button
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Dual_button extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1');
    }

    public function templates() {
        return array(
            '{"style":{"id":"102","type":"Dual_button","name":"","style_name":"Style_1","rawdata":"{\\\"sa_dual_btn_align\\\":\\\"center\\\",\\\"sa_dual_btn_max_width-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_max_width-lap-size\\\":\\\"600\\\",\\\"sa_dual_btn_max_width-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_max_width-tab-size\\\":\\\"600\\\",\\\"sa_dual_btn_max_width-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_max_width-mob-size\\\":\\\"600\\\",\\\"sa_dual_btn_margin-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_margin-lap-top\\\":\\\"\\\",\\\"sa_dual_btn_margin-lap-right\\\":\\\"\\\",\\\"sa_dual_btn_margin-lap-bottom\\\":\\\"\\\",\\\"sa_dual_btn_margin-lap-left\\\":\\\"\\\",\\\"sa_dual_btn_margin-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_margin-tab-top\\\":\\\"\\\",\\\"sa_dual_btn_margin-tab-right\\\":\\\"\\\",\\\"sa_dual_btn_margin-tab-bottom\\\":\\\"\\\",\\\"sa_dual_btn_margin-tab-left\\\":\\\"\\\",\\\"sa_dual_btn_margin-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_margin-mob-top\\\":\\\"\\\",\\\"sa_dual_btn_margin-mob-right\\\":\\\"\\\",\\\"sa_dual_btn_margin-mob-bottom\\\":\\\"\\\",\\\"sa_dual_btn_margin-mob-left\\\":\\\"\\\",\\\"sa_s_image_animation-type\\\":\\\"\\\",\\\"sa_s_image_animation-duration-size\\\":\\\"1000\\\",\\\"sa_s_image_animation-delay-size\\\":\\\"0\\\",\\\"sa_s_image_animation-offset-size\\\":\\\"100\\\",\\\"sa_dual_btn_mid_text_icon\\\":\\\"icon\\\",\\\"sa_dual_btn_mid_icon\\\":\\\"fas fa-adjust\\\",\\\"sa_dual_btn_mid_text\\\":\\\"OR\\\",\\\"sa_dual_btn_mid_icon_font-size\\\":\\\"13\\\",\\\"sa_dual_btn_mid_typho-font\\\":\\\"\\\",\\\"sa_dual_btn_mid_typho-size-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_mid_typho-size-lap-size\\\":\\\"\\\",\\\"sa_dual_btn_mid_typho-size-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_mid_typho-size-tab-size\\\":\\\"\\\",\\\"sa_dual_btn_mid_typho-size-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_mid_typho-size-mob-size\\\":\\\"\\\",\\\"sa_dual_btn_mid_typho-weight\\\":\\\"\\\",\\\"sa_dual_btn_mid_typho-transform\\\":\\\"\\\",\\\"sa_dual_btn_mid_typho-style\\\":\\\"\\\",\\\"sa_dual_btn_mid_typho-decoration\\\":\\\"\\\",\\\"sa_dual_btn_mid_typho-l-height-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_mid_typho-l-height-lap-size\\\":\\\"\\\",\\\"sa_dual_btn_mid_typho-l-height-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_mid_typho-l-height-tab-size\\\":\\\"\\\",\\\"sa_dual_btn_mid_typho-l-height-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_mid_typho-l-height-mob-size\\\":\\\"\\\",\\\"sa_dual_btn_mid_typho-l-spacing-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_mid_typho-l-spacing-lap-size\\\":\\\"\\\",\\\"sa_dual_btn_mid_typho-l-spacing-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_mid_typho-l-spacing-tab-size\\\":\\\"\\\",\\\"sa_dual_btn_mid_typho-l-spacing-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_mid_typho-l-spacing-mob-size\\\":\\\"\\\",\\\"sa_dual_btn_mid_color\\\":\\\"#ffffff\\\",\\\"sa_dual_btn_mid_bg_color\\\":\\\"rgba(3, 3, 3, 1)\\\",\\\"sa_dual_btn_mid_padding-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_mid_padding-lap-top\\\":\\\"\\\",\\\"sa_dual_btn_mid_padding-lap-right\\\":\\\"\\\",\\\"sa_dual_btn_mid_padding-lap-bottom\\\":\\\"\\\",\\\"sa_dual_btn_mid_padding-lap-left\\\":\\\"\\\",\\\"sa_dual_btn_mid_padding-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_mid_padding-tab-top\\\":\\\"\\\",\\\"sa_dual_btn_mid_padding-tab-right\\\":\\\"\\\",\\\"sa_dual_btn_mid_padding-tab-bottom\\\":\\\"\\\",\\\"sa_dual_btn_mid_padding-tab-left\\\":\\\"\\\",\\\"sa_dual_btn_mid_padding-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_mid_padding-mob-top\\\":\\\"\\\",\\\"sa_dual_btn_mid_padding-mob-right\\\":\\\"\\\",\\\"sa_dual_btn_mid_padding-mob-bottom\\\":\\\"\\\",\\\"sa_dual_btn_mid_padding-mob-left\\\":\\\"\\\",\\\"sa_dual_btn_mid_border_radius-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_mid_border_radius-lap-top\\\":\\\"\\\",\\\"sa_dual_btn_mid_border_radius-lap-right\\\":\\\"\\\",\\\"sa_dual_btn_mid_border_radius-lap-bottom\\\":\\\"\\\",\\\"sa_dual_btn_mid_border_radius-lap-left\\\":\\\"\\\",\\\"sa_dual_btn_mid_border_radius-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_mid_border_radius-tab-top\\\":\\\"\\\",\\\"sa_dual_btn_mid_border_radius-tab-right\\\":\\\"\\\",\\\"sa_dual_btn_mid_border_radius-tab-bottom\\\":\\\"\\\",\\\"sa_dual_btn_mid_border_radius-tab-left\\\":\\\"\\\",\\\"sa_dual_btn_mid_border_radius-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_mid_border_radius-mob-top\\\":\\\"\\\",\\\"sa_dual_btn_mid_border_radius-mob-right\\\":\\\"\\\",\\\"sa_dual_btn_mid_border_radius-mob-bottom\\\":\\\"\\\",\\\"sa_dual_btn_mid_border_radius-mob-left\\\":\\\"\\\",\\\"sa_dual_btn_left_text\\\":\\\"Button Text\\\",\\\"sa_dual_btn_left_link-url\\\":\\\"\\\",\\\"sa_dual_btn_left_link-follow\\\":\\\"yes\\\",\\\"sa_dual_btn_left_link-id\\\":\\\"\\\",\\\"ssa_dual_btn_left_icon\\\":\\\"fas fa-angle-double-left\\\",\\\"sa_dual_btn_left_id\\\":\\\"\\\",\\\"sa_dual_btn_right_text\\\":\\\"Button Text\\\",\\\"sa_dual_btn_right_link-url\\\":\\\"\\\",\\\"sa_dual_btn_right_link-follow\\\":\\\"yes\\\",\\\"sa_dual_btn_right_link-id\\\":\\\"\\\",\\\"ssa_dual_btn_right_icon\\\":\\\"fas fa-angle-double-right\\\",\\\"sa_dual_btn_right_id\\\":\\\"\\\",\\\"sa_dual_btn_left_typho-font\\\":\\\"\\\",\\\"sa_dual_btn_left_typho-size-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_typho-size-lap-size\\\":\\\"\\\",\\\"sa_dual_btn_left_typho-size-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_typho-size-tab-size\\\":\\\"\\\",\\\"sa_dual_btn_left_typho-size-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_typho-size-mob-size\\\":\\\"\\\",\\\"sa_dual_btn_left_typho-weight\\\":\\\"\\\",\\\"sa_dual_btn_left_typho-transform\\\":\\\"\\\",\\\"sa_dual_btn_left_typho-style\\\":\\\"\\\",\\\"sa_dual_btn_left_typho-decoration\\\":\\\"\\\",\\\"sa_dual_btn_left_typho-l-height-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_typho-l-height-lap-size\\\":\\\"\\\",\\\"sa_dual_btn_left_typho-l-height-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_typho-l-height-tab-size\\\":\\\"\\\",\\\"sa_dual_btn_left_typho-l-height-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_typho-l-height-mob-size\\\":\\\"\\\",\\\"sa_dual_btn_left_typho-l-spacing-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_typho-l-spacing-lap-size\\\":\\\"\\\",\\\"sa_dual_btn_left_typho-l-spacing-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_typho-l-spacing-tab-size\\\":\\\"\\\",\\\"sa_dual_btn_left_typho-l-spacing-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_typho-l-spacing-mob-size\\\":\\\"\\\",\\\"sa_dual_btn_left_color\\\":\\\"#ffffff\\\",\\\"sa_dual_btn_left_bg_color\\\":\\\"rgba(23, 186, 63, 1)\\\",\\\"sa_dual_btn_left_border-type\\\":\\\"\\\",\\\"sa_dual_btn_left_border-width-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_border-width-lap-top\\\":\\\"\\\",\\\"sa_dual_btn_left_border-width-lap-right\\\":\\\"\\\",\\\"sa_dual_btn_left_border-width-lap-bottom\\\":\\\"\\\",\\\"sa_dual_btn_left_border-width-lap-left\\\":\\\"\\\",\\\"sa_dual_btn_left_border-width-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_border-width-tab-top\\\":\\\"\\\",\\\"sa_dual_btn_left_border-width-tab-right\\\":\\\"\\\",\\\"sa_dual_btn_left_border-width-tab-bottom\\\":\\\"\\\",\\\"sa_dual_btn_left_border-width-tab-left\\\":\\\"\\\",\\\"sa_dual_btn_left_border-width-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_border-width-mob-top\\\":\\\"\\\",\\\"sa_dual_btn_left_border-width-mob-right\\\":\\\"\\\",\\\"sa_dual_btn_left_border-width-mob-bottom\\\":\\\"\\\",\\\"sa_dual_btn_left_border-width-mob-left\\\":\\\"\\\",\\\"sa_dual_btn_left_border-color\\\":\\\"\\\",\\\"sa_dual_btn_left_br-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_br-lap-top\\\":\\\"\\\",\\\"sa_dual_btn_left_br-lap-right\\\":\\\"\\\",\\\"sa_dual_btn_left_br-lap-bottom\\\":\\\"\\\",\\\"sa_dual_btn_left_br-lap-left\\\":\\\"\\\",\\\"sa_dual_btn_left_br-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_br-tab-top\\\":\\\"\\\",\\\"sa_dual_btn_left_br-tab-right\\\":\\\"\\\",\\\"sa_dual_btn_left_br-tab-bottom\\\":\\\"\\\",\\\"sa_dual_btn_left_br-tab-left\\\":\\\"\\\",\\\"sa_dual_btn_left_br-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_br-mob-top\\\":\\\"\\\",\\\"sa_dual_btn_left_br-mob-right\\\":\\\"\\\",\\\"sa_dual_btn_left_br-mob-bottom\\\":\\\"\\\",\\\"sa_dual_btn_left_br-mob-left\\\":\\\"\\\",\\\"sa_dual_btn_left_h_color\\\":\\\"#ffffff\\\",\\\"sa_dual_btn_left_h_bg_color\\\":\\\"rgba(15, 162, 207, 1)\\\",\\\"sa_dual_btn_left_h_border_btm-type\\\":\\\"\\\",\\\"sa_dual_btn_left_h_border_btm-width-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_h_border_btm-width-lap-top\\\":\\\"\\\",\\\"sa_dual_btn_left_h_border_btm-width-lap-right\\\":\\\"\\\",\\\"sa_dual_btn_left_h_border_btm-width-lap-bottom\\\":\\\"\\\",\\\"sa_dual_btn_left_h_border_btm-width-lap-left\\\":\\\"\\\",\\\"sa_dual_btn_left_h_border_btm-width-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_h_border_btm-width-tab-top\\\":\\\"\\\",\\\"sa_dual_btn_left_h_border_btm-width-tab-right\\\":\\\"\\\",\\\"sa_dual_btn_left_h_border_btm-width-tab-bottom\\\":\\\"\\\",\\\"sa_dual_btn_left_h_border_btm-width-tab-left\\\":\\\"\\\",\\\"sa_dual_btn_left_h_border_btm-width-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_h_border_btm-width-mob-top\\\":\\\"\\\",\\\"sa_dual_btn_left_h_border_btm-width-mob-right\\\":\\\"\\\",\\\"sa_dual_btn_left_h_border_btm-width-mob-bottom\\\":\\\"\\\",\\\"sa_dual_btn_left_h_border_btm-width-mob-left\\\":\\\"\\\",\\\"sa_dual_btn_left_h_border_btm-color\\\":\\\"\\\",\\\"sa_dual_btn_left_h_padding-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_h_padding-lap-top\\\":\\\"\\\",\\\"sa_dual_btn_left_h_padding-lap-right\\\":\\\"\\\",\\\"sa_dual_btn_left_h_padding-lap-bottom\\\":\\\"\\\",\\\"sa_dual_btn_left_h_padding-lap-left\\\":\\\"\\\",\\\"sa_dual_btn_left_h_padding-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_h_padding-tab-top\\\":\\\"\\\",\\\"sa_dual_btn_left_h_padding-tab-right\\\":\\\"\\\",\\\"sa_dual_btn_left_h_padding-tab-bottom\\\":\\\"\\\",\\\"sa_dual_btn_left_h_padding-tab-left\\\":\\\"\\\",\\\"sa_dual_btn_left_h_padding-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_h_padding-mob-top\\\":\\\"\\\",\\\"sa_dual_btn_left_h_padding-mob-right\\\":\\\"\\\",\\\"sa_dual_btn_left_h_padding-mob-bottom\\\":\\\"\\\",\\\"sa_dual_btn_left_h_padding-mob-left\\\":\\\"\\\",\\\"sa_dual_btn_left_padding-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_padding-lap-top\\\":\\\"\\\",\\\"sa_dual_btn_left_padding-lap-right\\\":\\\"\\\",\\\"sa_dual_btn_left_padding-lap-bottom\\\":\\\"\\\",\\\"sa_dual_btn_left_padding-lap-left\\\":\\\"\\\",\\\"sa_dual_btn_left_padding-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_padding-tab-top\\\":\\\"\\\",\\\"sa_dual_btn_left_padding-tab-right\\\":\\\"\\\",\\\"sa_dual_btn_left_padding-tab-bottom\\\":\\\"\\\",\\\"sa_dual_btn_left_padding-tab-left\\\":\\\"\\\",\\\"sa_dual_btn_left_padding-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_padding-mob-top\\\":\\\"\\\",\\\"sa_dual_btn_left_padding-mob-right\\\":\\\"\\\",\\\"sa_dual_btn_left_padding-mob-bottom\\\":\\\"\\\",\\\"sa_dual_btn_left_padding-mob-left\\\":\\\"\\\",\\\"sa_dual_btn_left_font_size\\\":\\\"17\\\",\\\"sa_dual_btn_left_position\\\":\\\"left\\\",\\\"sa_dual_btn_left_icon_padding-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_icon_padding-lap-top\\\":\\\"\\\",\\\"sa_dual_btn_left_icon_padding-lap-right\\\":\\\"\\\",\\\"sa_dual_btn_left_icon_padding-lap-bottom\\\":\\\"\\\",\\\"sa_dual_btn_left_icon_padding-lap-left\\\":\\\"\\\",\\\"sa_dual_btn_left_icon_padding-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_icon_padding-tab-top\\\":\\\"\\\",\\\"sa_dual_btn_left_icon_padding-tab-right\\\":\\\"\\\",\\\"sa_dual_btn_left_icon_padding-tab-bottom\\\":\\\"\\\",\\\"sa_dual_btn_left_icon_padding-tab-left\\\":\\\"\\\",\\\"sa_dual_btn_left_icon_padding-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_left_icon_padding-mob-top\\\":\\\"\\\",\\\"sa_dual_btn_left_icon_padding-mob-right\\\":\\\"\\\",\\\"sa_dual_btn_left_icon_padding-mob-bottom\\\":\\\"\\\",\\\"sa_dual_btn_left_icon_padding-mob-left\\\":\\\"\\\",\\\"sa_dual_btn_right_typho-font\\\":\\\"\\\",\\\"sa_dual_btn_right_typho-size-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_typho-size-lap-size\\\":\\\"\\\",\\\"sa_dual_btn_right_typho-size-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_typho-size-tab-size\\\":\\\"\\\",\\\"sa_dual_btn_right_typho-size-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_typho-size-mob-size\\\":\\\"\\\",\\\"sa_dual_btn_right_typho-weight\\\":\\\"\\\",\\\"sa_dual_btn_right_typho-transform\\\":\\\"\\\",\\\"sa_dual_btn_right_typho-style\\\":\\\"\\\",\\\"sa_dual_btn_right_typho-decoration\\\":\\\"\\\",\\\"sa_dual_btn_right_typho-l-height-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_typho-l-height-lap-size\\\":\\\"\\\",\\\"sa_dual_btn_right_typho-l-height-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_typho-l-height-tab-size\\\":\\\"\\\",\\\"sa_dual_btn_right_typho-l-height-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_typho-l-height-mob-size\\\":\\\"\\\",\\\"sa_dual_btn_right_typho-l-spacing-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_typho-l-spacing-lap-size\\\":\\\"\\\",\\\"sa_dual_btn_right_typho-l-spacing-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_typho-l-spacing-tab-size\\\":\\\"\\\",\\\"sa_dual_btn_right_typho-l-spacing-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_typho-l-spacing-mob-size\\\":\\\"\\\",\\\"sa_dual_btn_right_color\\\":\\\"#ffffff\\\",\\\"sa_dual_btn_right_bg_color\\\":\\\"rgba(237, 3, 124, 1)\\\",\\\"sa_dual_btn_right_border_btm-type\\\":\\\"\\\",\\\"sa_dual_btn_right_border_btm-width-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_border_btm-width-lap-top\\\":\\\"\\\",\\\"sa_dual_btn_right_border_btm-width-lap-right\\\":\\\"\\\",\\\"sa_dual_btn_right_border_btm-width-lap-bottom\\\":\\\"\\\",\\\"sa_dual_btn_right_border_btm-width-lap-left\\\":\\\"\\\",\\\"sa_dual_btn_right_border_btm-width-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_border_btm-width-tab-top\\\":\\\"\\\",\\\"sa_dual_btn_right_border_btm-width-tab-right\\\":\\\"\\\",\\\"sa_dual_btn_right_border_btm-width-tab-bottom\\\":\\\"\\\",\\\"sa_dual_btn_right_border_btm-width-tab-left\\\":\\\"\\\",\\\"sa_dual_btn_right_border_btm-width-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_border_btm-width-mob-top\\\":\\\"\\\",\\\"sa_dual_btn_right_border_btm-width-mob-right\\\":\\\"\\\",\\\"sa_dual_btn_right_border_btm-width-mob-bottom\\\":\\\"\\\",\\\"sa_dual_btn_right_border_btm-width-mob-left\\\":\\\"\\\",\\\"sa_dual_btn_right_border_btm-color\\\":\\\"\\\",\\\"sa_dual_btn_right_padding-lap-top\\\":\\\"\\\",\\\"sa_dual_btn_right_padding-lap-right\\\":\\\"\\\",\\\"sa_dual_btn_right_padding-lap-bottom\\\":\\\"\\\",\\\"sa_dual_btn_right_padding-lap-left\\\":\\\"\\\",\\\"sa_dual_btn_right_padding-tab-top\\\":\\\"\\\",\\\"sa_dual_btn_right_padding-tab-right\\\":\\\"\\\",\\\"sa_dual_btn_right_padding-tab-bottom\\\":\\\"\\\",\\\"sa_dual_btn_right_padding-tab-left\\\":\\\"\\\",\\\"sa_dual_btn_right_padding-mob-top\\\":\\\"\\\",\\\"sa_dual_btn_right_padding-mob-right\\\":\\\"\\\",\\\"sa_dual_btn_right_padding-mob-bottom\\\":\\\"\\\",\\\"sa_dual_btn_right_padding-mob-left\\\":\\\"\\\",\\\"sa_dual_btn_right_h_color\\\":\\\"#ffffff\\\",\\\"sa_dual_btn_right_h_bg_cl\\\":\\\"rgba(177, 25, 207, 1)\\\",\\\"sa_dual_btn_right_h_border-type\\\":\\\"\\\",\\\"sa_dual_btn_right_h_border-width-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_h_border-width-lap-top\\\":\\\"\\\",\\\"sa_dual_btn_right_h_border-width-lap-right\\\":\\\"\\\",\\\"sa_dual_btn_right_h_border-width-lap-bottom\\\":\\\"\\\",\\\"sa_dual_btn_right_h_border-width-lap-left\\\":\\\"\\\",\\\"sa_dual_btn_right_h_border-width-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_h_border-width-tab-top\\\":\\\"\\\",\\\"sa_dual_btn_right_h_border-width-tab-right\\\":\\\"\\\",\\\"sa_dual_btn_right_h_border-width-tab-bottom\\\":\\\"\\\",\\\"sa_dual_btn_right_h_border-width-tab-left\\\":\\\"\\\",\\\"sa_dual_btn_right_h_border-width-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_h_border-width-mob-top\\\":\\\"\\\",\\\"sa_dual_btn_right_h_border-width-mob-right\\\":\\\"\\\",\\\"sa_dual_btn_right_h_border-width-mob-bottom\\\":\\\"\\\",\\\"sa_dual_btn_right_h_border-width-mob-left\\\":\\\"\\\",\\\"sa_dual_btn_right_h_border-color\\\":\\\"\\\",\\\"sa_dual_btn_right_h_br-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_h_br-lap-top\\\":\\\"\\\",\\\"sa_dual_btn_right_h_br-lap-right\\\":\\\"\\\",\\\"sa_dual_btn_right_h_br-lap-bottom\\\":\\\"\\\",\\\"sa_dual_btn_right_h_br-lap-left\\\":\\\"\\\",\\\"sa_dual_btn_right_h_br-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_h_br-tab-top\\\":\\\"\\\",\\\"sa_dual_btn_right_h_br-tab-right\\\":\\\"\\\",\\\"sa_dual_btn_right_h_br-tab-bottom\\\":\\\"\\\",\\\"sa_dual_btn_right_h_br-tab-left\\\":\\\"\\\",\\\"sa_dual_btn_right_h_br-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_h_br-mob-top\\\":\\\"\\\",\\\"sa_dual_btn_right_h_br-mob-right\\\":\\\"\\\",\\\"sa_dual_btn_right_h_br-mob-bottom\\\":\\\"\\\",\\\"sa_dual_btn_right_h_br-mob-left\\\":\\\"\\\",\\\"sa_dual_btn_right_padding-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_padding-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_padding-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right__color\\\":\\\"#ffffff\\\",\\\"sa_dual_btn_right__h_color\\\":\\\"#ffffff\\\",\\\"sa_dual_btn_right__font_size\\\":\\\"17\\\",\\\"sa_dual_btn_right_position\\\":\\\"right\\\",\\\"sa_dual_btn_right_icon_padding-lap-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_icon_padding-lap-top\\\":\\\"\\\",\\\"sa_dual_btn_right_icon_padding-lap-right\\\":\\\"\\\",\\\"sa_dual_btn_right_icon_padding-lap-bottom\\\":\\\"\\\",\\\"sa_dual_btn_right_icon_padding-lap-left\\\":\\\"\\\",\\\"sa_dual_btn_right_icon_padding-tab-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_icon_padding-tab-top\\\":\\\"\\\",\\\"sa_dual_btn_right_icon_padding-tab-right\\\":\\\"\\\",\\\"sa_dual_btn_right_icon_padding-tab-bottom\\\":\\\"\\\",\\\"sa_dual_btn_right_icon_padding-tab-left\\\":\\\"\\\",\\\"sa_dual_btn_right_icon_padding-mob-choices\\\":\\\"px\\\",\\\"sa_dual_btn_right_icon_padding-mob-top\\\":\\\"\\\",\\\"sa_dual_btn_right_icon_padding-mob-right\\\":\\\"\\\",\\\"sa_dual_btn_right_icon_padding-mob-bottom\\\":\\\"\\\",\\\"sa_dual_btn_right_icon_padding-mob-left\\\":\\\"\\\",\\\"shortcode-addons-2-0-preview\\\":\\\"\\\",\\\"shortcode-addons-elements-name\\\":\\\"Dual_button\\\",\\\"shortcode-addons-elements-id\\\":\\\"102\\\",\\\"shortcode-addons-elements-template\\\":\\\"Style_1\\\",\\\"sa_s_image_animation-looping\\\":\\\"0\\\",\\\"sa_dual_btn_left_link-target\\\":\\\"0\\\",\\\"sa_dual_btn_right_link-target\\\":\\\"0\\\"}","stylesheet":".shortcode-addons-wrapper-102   .oxi-addons-dual-button-align  {text-align:center;}.shortcode-addons-wrapper-102 .oxi-addons-btn-group {width:600px;}.shortcode-addons-wrapper-102 .oxi-dual-button .oxi-addons-btn-group-before{font-size: 13px;}.shortcode-addons-wrapper-102 .oxi-addons-btn-group-before{color : #ffffff; background : rgba(3, 3, 3, 1); }.shortcode-addons-wrapper-102 .oxi-addons-btn-group &gt; a:nth-of-type(1) span.oxi-text{color : #ffffff; }.shortcode-addons-wrapper-102 .oxi-addons-btn-group &gt; a:nth-of-type(1) {background : rgba(23, 186, 63, 1); }.shortcode-addons-wrapper-102 .oxi-addons-btn-group &gt; a:nth-of-type(1):hover span.oxi-text{color : #ffffff; }.shortcode-addons-wrapper-102 .oxi-addons-btn-group &gt; a:nth-of-type(1):hover {background : rgba(15, 162, 207, 1); }.shortcode-addons-wrapper-102 .oxi-dual-button .oxi-addons-btn-group &gt; a:nth-of-type(1) .oxi-left-icon .oxi-icons{color : #ffffff; font-size: 17px;}.shortcode-addons-wrapper-102 .oxi-dual-button .oxi-addons-btn-group &gt; a:nth-of-type(1):hover .oxi-left-icon .oxi-icons{color : #ffffff; }.shortcode-addons-wrapper-102 .oxi-dual-button .oxi-addons-btn-group &gt; a:nth-of-type(2) span.oxi-text{color : #ffffff; }.shortcode-addons-wrapper-102 .oxi-dual-button .oxi-addons-btn-group &gt; a:nth-of-type(2){background : rgba(237, 3, 124, 1); }.shortcode-addons-wrapper-102 .oxi-dual-button .oxi-addons-btn-group &gt; a:nth-of-type(2):hover span.oxi-text{color : #ffffff; }.shortcode-addons-wrapper-102 .oxi-dual-button .oxi-addons-btn-group &gt; a:nth-of-type(2):hover{background : rgba(177, 25, 207, 1); }.shortcode-addons-wrapper-102 .oxi-dual-button .oxi-addons-btn-group &gt; a:nth-of-type(2) .oxi-icons{color : #ffffff; font-size: 17px;}.shortcode-addons-wrapper-102 .oxi-dual-button .oxi-addons-btn-group &gt; a:nth-of-type(2):hover .oxi-icons{color : #ffffff; }@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-102 .oxi-addons-btn-group {width:600px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-102 .oxi-addons-btn-group {width:600px;}}","font_family":"[]"},"child":[]}',
        );
    }

}
