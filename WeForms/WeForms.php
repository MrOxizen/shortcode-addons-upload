<?php

namespace SHORTCODE_ADDONS_UPLOAD\WeForms;

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

class WeForms extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1');
    }
public function pre_image() {
        return array(
            'Style_1' => [
                'url' => '',
                'image' => 'https://www.shortcode-addons.com/wp-content/uploads/2020/01/Capture.jpg'
            ],
            );
    }

    public function template_rendar($data = array()) {
        $image = $this->pre_image();
        if (!function_exists('is_plugin_active')) {
                include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
            }
            if (!class_exists('WeForms')) {
            echo "<div class='oxi-gf-active'>
                Please Install and Active WeForms Plugin to Use WeForms Element...!
                 </div>
                 <style>
                 .oxi-gf-active{
                        font-size: 27px;
                        color: red;
                        margin: 50px 20px 50px 18px;
                        padding: 20px;
                        background: #ffe9e9;
                        font-weight: 700;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        border: 1px solid red;
                     }    
                 </style>";
        }
        return __('<div class="oxi-addons-col-1" id="' . $data['style']['style_name'] . '">
                                <div class="oxi-addons-style-preview">
                                    <div class="oxi-addons-style-preview-top oxi-addons-center" style="display: flex; justify-content: center;">
                                        <a href="' . $image[$data['style']['style_name']]['url'] . '" target="_black">
                                             <img " src="' . $image[$data['style']['style_name']]['image'] . '">
                                        </a>
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
    public function templates() {
        return array(
            '{"style":{"id":"632","type":"Weforms","name":"Style 1","style_name":"Style_1","rawdata":"{\"sa_weforms_select_form\":\"191\",\"sa-max-w-condition\":\"dynamic\",\"max_width_depand_on_condition-lap-choices\":\"px\",\"max_width_depand_on_condition-lap-size\":\"600\",\"max_width_depand_on_condition-tab-choices\":\"px\",\"max_width_depand_on_condition-tab-size\":\"50\",\"max_width_depand_on_condition-mob-choices\":\"px\",\"max_width_depand_on_condition-mob-size\":\"50\",\"sa_animated_text_typo_alignment\":\"center\",\"sa_weforms_main_background-color\":\"\",\"sa_weforms_main_background-select\":\"media-library\",\"sa_weforms_main_background-image\":\"\",\"sa_weforms_main_background-url\":\"\",\"sa_weforms_main_background-position\":\"center center\",\"sa_weforms_main_background-attachment\":\"\",\"sa_weforms_main_background-repeat\":\"no-repeat\",\"sa_weforms_main_background-size-lap\":\"cover\",\"sa_weforms_main_background-size-tab\":\"cover\",\"sa_weforms_main_background-size-mob\":\"cover\",\"sa_weforms_main_box_border-type\":\"\",\"sa_weforms_main_box_border-width-lap-choices\":\"px\",\"sa_weforms_main_box_border-width-lap-top\":\"\",\"sa_weforms_main_box_border-width-lap-right\":\"\",\"sa_weforms_main_box_border-width-lap-bottom\":\"\",\"sa_weforms_main_box_border-width-lap-left\":\"\",\"sa_weforms_main_box_border-width-tab-choices\":\"px\",\"sa_weforms_main_box_border-width-tab-top\":\"\",\"sa_weforms_main_box_border-width-tab-right\":\"\",\"sa_weforms_main_box_border-width-tab-bottom\":\"\",\"sa_weforms_main_box_border-width-tab-left\":\"\",\"sa_weforms_main_box_border-width-mob-choices\":\"px\",\"sa_weforms_main_box_border-width-mob-top\":\"\",\"sa_weforms_main_box_border-width-mob-right\":\"\",\"sa_weforms_main_box_border-width-mob-bottom\":\"\",\"sa_weforms_main_box_border-width-mob-left\":\"\",\"sa_weforms_main_box_border-color\":\"\",\"sa_weforms_main_box_border_radius-lap-choices\":\"px\",\"sa_weforms_main_box_border_radius-lap-top\":\"\",\"sa_weforms_main_box_border_radius-lap-right\":\"\",\"sa_weforms_main_box_border_radius-lap-bottom\":\"\",\"sa_weforms_main_box_border_radius-lap-left\":\"\",\"sa_weforms_main_box_border_radius-tab-choices\":\"px\",\"sa_weforms_main_box_border_radius-tab-top\":\"\",\"sa_weforms_main_box_border_radius-tab-right\":\"\",\"sa_weforms_main_box_border_radius-tab-bottom\":\"\",\"sa_weforms_main_box_border_radius-tab-left\":\"\",\"sa_weforms_main_box_border_radius-mob-choices\":\"px\",\"sa_weforms_main_box_border_radius-mob-top\":\"\",\"sa_weforms_main_box_border_radius-mob-right\":\"\",\"sa_weforms_main_box_border_radius-mob-bottom\":\"\",\"sa_weforms_main_box_border_radius-mob-left\":\"\",\"sa_weforms_main_box_box_shadow-shadow\":\"yes\",\"sa_weforms_main_box_box_shadow-type\":\"\",\"sa_weforms_main_box_box_shadow-horizontal-size\":\"0\",\"sa_weforms_main_box_box_shadow-vertical-size\":\"0\",\"sa_weforms_main_box_box_shadow-blur-size\":\"0\",\"sa_weforms_main_box_box_shadow-spread-size\":\"0\",\"sa_weforms_main_box_box_shadow-color\":\"#cccccc\",\"sa_weforms_main_box_padding-lap-choices\":\"px\",\"sa_weforms_main_box_padding-lap-top\":\"\",\"sa_weforms_main_box_padding-lap-right\":\"\",\"sa_weforms_main_box_padding-lap-bottom\":\"\",\"sa_weforms_main_box_padding-lap-left\":\"\",\"sa_weforms_main_box_padding-tab-choices\":\"px\",\"sa_weforms_main_box_padding-tab-top\":\"\",\"sa_weforms_main_box_padding-tab-right\":\"\",\"sa_weforms_main_box_padding-tab-bottom\":\"\",\"sa_weforms_main_box_padding-tab-left\":\"\",\"sa_weforms_main_box_padding-mob-choices\":\"px\",\"sa_weforms_main_box_padding-mob-top\":\"\",\"sa_weforms_main_box_padding-mob-right\":\"\",\"sa_weforms_main_box_padding-mob-bottom\":\"\",\"sa_weforms_main_box_padding-mob-left\":\"\",\"sa_weforms_main_box_margin-lap-choices\":\"px\",\"sa_weforms_main_box_margin-lap-top\":\"\",\"sa_weforms_main_box_margin-lap-right\":\"\",\"sa_weforms_main_box_margin-lap-bottom\":\"\",\"sa_weforms_main_box_margin-lap-left\":\"\",\"sa_weforms_main_box_margin-tab-choices\":\"px\",\"sa_weforms_main_box_margin-tab-top\":\"\",\"sa_weforms_main_box_margin-tab-right\":\"\",\"sa_weforms_main_box_margin-tab-bottom\":\"\",\"sa_weforms_main_box_margin-tab-left\":\"\",\"sa_weforms_main_box_margin-mob-choices\":\"px\",\"sa_weforms_main_box_margin-mob-top\":\"\",\"sa_weforms_main_box_margin-mob-right\":\"\",\"sa_weforms_main_box_margin-mob-bottom\":\"\",\"sa_weforms_main_box_margin-mob-left\":\"\",\"sa_weforms_label_typography-font\":\"\",\"sa_weforms_label_typography-size-lap-choices\":\"px\",\"sa_weforms_label_typography-size-lap-size\":\"\",\"sa_weforms_label_typography-size-tab-choices\":\"px\",\"sa_weforms_label_typography-size-tab-size\":\"\",\"sa_weforms_label_typography-size-mob-choices\":\"px\",\"sa_weforms_label_typography-size-mob-size\":\"\",\"sa_weforms_label_typography-weight\":\"\",\"sa_weforms_label_typography-transform\":\"\",\"sa_weforms_label_typography-style\":\"\",\"sa_weforms_label_typography-decoration\":\"\",\"sa_weforms_label_typography-align-lap\":\"\",\"sa_weforms_label_typography-align-tab\":\"\",\"sa_weforms_label_typography-align-mob\":\"\",\"sa_weforms_label_typography-l-height-lap-choices\":\"px\",\"sa_weforms_label_typography-l-height-lap-size\":\"\",\"sa_weforms_label_typography-l-height-tab-choices\":\"px\",\"sa_weforms_label_typography-l-height-tab-size\":\"\",\"sa_weforms_label_typography-l-height-mob-choices\":\"px\",\"sa_weforms_label_typography-l-height-mob-size\":\"\",\"sa_weforms_label_typography-l-spacing-lap-choices\":\"px\",\"sa_weforms_label_typography-l-spacing-lap-size\":\"\",\"sa_weforms_label_typography-l-spacing-tab-choices\":\"px\",\"sa_weforms_label_typography-l-spacing-tab-size\":\"\",\"sa_weforms_label_typography-l-spacing-mob-choices\":\"px\",\"sa_weforms_label_typography-l-spacing-mob-size\":\"\",\"sa_weforms_label_color_\":\"#5c5c5c\",\"sa_weforms_input_typography_-font\":\"\",\"sa_weforms_input_typography_-size-lap-choices\":\"px\",\"sa_weforms_input_typography_-size-lap-size\":\"\",\"sa_weforms_input_typography_-size-tab-choices\":\"px\",\"sa_weforms_input_typography_-size-tab-size\":\"\",\"sa_weforms_input_typography_-size-mob-choices\":\"px\",\"sa_weforms_input_typography_-size-mob-size\":\"\",\"sa_weforms_input_typography_-weight\":\"\",\"sa_weforms_input_typography_-transform\":\"\",\"sa_weforms_input_typography_-style\":\"\",\"sa_weforms_input_typography_-decoration\":\"\",\"sa_weforms_input_typography_-align-lap\":\"\",\"sa_weforms_input_typography_-align-tab\":\"\",\"sa_weforms_input_typography_-align-mob\":\"\",\"sa_weforms_input_typography_-l-height-lap-choices\":\"px\",\"sa_weforms_input_typography_-l-height-lap-size\":\"\",\"sa_weforms_input_typography_-l-height-tab-choices\":\"px\",\"sa_weforms_input_typography_-l-height-tab-size\":\"\",\"sa_weforms_input_typography_-l-height-mob-choices\":\"px\",\"sa_weforms_input_typography_-l-height-mob-size\":\"\",\"sa_weforms_input_typography_-l-spacing-lap-choices\":\"px\",\"sa_weforms_input_typography_-l-spacing-lap-size\":\"\",\"sa_weforms_input_typography_-l-spacing-tab-choices\":\"px\",\"sa_weforms_input_typography_-l-spacing-tab-size\":\"\",\"sa_weforms_input_typography_-l-spacing-mob-choices\":\"px\",\"sa_weforms_input_typography_-l-spacing-mob-size\":\"\",\"sa_weforms_input_color_\":\"#5c5c5c\",\"sa_weforms_input_plh_color\":\"\",\"sa_weforms_input_backgrounds\":\"\",\"sa_weforms_text_borderrr-type\":\"\",\"sa_weforms_text_borderrr-width-lap-choices\":\"px\",\"sa_weforms_text_borderrr-width-lap-top\":\"\",\"sa_weforms_text_borderrr-width-lap-right\":\"\",\"sa_weforms_text_borderrr-width-lap-bottom\":\"\",\"sa_weforms_text_borderrr-width-lap-left\":\"\",\"sa_weforms_text_borderrr-width-tab-choices\":\"px\",\"sa_weforms_text_borderrr-width-tab-top\":\"\",\"sa_weforms_text_borderrr-width-tab-right\":\"\",\"sa_weforms_text_borderrr-width-tab-bottom\":\"\",\"sa_weforms_text_borderrr-width-tab-left\":\"\",\"sa_weforms_text_borderrr-width-mob-choices\":\"px\",\"sa_weforms_text_borderrr-width-mob-top\":\"\",\"sa_weforms_text_borderrr-width-mob-right\":\"\",\"sa_weforms_text_borderrr-width-mob-bottom\":\"\",\"sa_weforms_text_borderrr-width-mob-left\":\"\",\"sa_weforms_text_borderrr-color\":\"\",\"sa_weforms_text_dorder_radius-lap-choices\":\"px\",\"sa_weforms_text_dorder_radius-lap-size\":\"50\",\"sa_weforms_text_dorder_radius-tab-choices\":\"px\",\"sa_weforms_text_dorder_radius-tab-size\":\"50\",\"sa_weforms_text_dorder_radius-mob-choices\":\"px\",\"sa_weforms_text_dorder_radius-mob-size\":\"50\",\"sa_weforms_text_box_s-shadow\":\"yes\",\"sa_weforms_text_box_s-type\":\"\",\"sa_weforms_text_box_s-horizontal-size\":\"0\",\"sa_weforms_text_box_s-vertical-size\":\"0\",\"sa_weforms_text_box_s-blur-size\":\"0\",\"sa_weforms_text_box_s-spread-size\":\"0\",\"sa_weforms_text_box_s-color\":\"#cccccc\",\"sa_weforms_text_F_box_s-shadow\":\"yes\",\"sa_weforms_text_F_box_s-type\":\"\",\"sa_weforms_text_F_box_s-horizontal-size\":\"0\",\"sa_weforms_text_F_box_s-vertical-size\":\"0\",\"sa_weforms_text_F_box_s-blur-size\":\"0\",\"sa_weforms_text_F_box_s-spread-size\":\"0\",\"sa_weforms_text_F_box_s-color\":\"#cccccc\",\"sa_weforms_border_color_focus\":\"#424242\",\"sa_weforms_text_dopadding-lap-choices\":\"px\",\"sa_weforms_text_dopadding-lap-top\":\"\",\"sa_weforms_text_dopadding-lap-right\":\"\",\"sa_weforms_text_dopadding-lap-bottom\":\"\",\"sa_weforms_text_dopadding-lap-left\":\"\",\"sa_weforms_text_dopadding-tab-choices\":\"px\",\"sa_weforms_text_dopadding-tab-top\":\"\",\"sa_weforms_text_dopadding-tab-right\":\"\",\"sa_weforms_text_dopadding-tab-bottom\":\"\",\"sa_weforms_text_dopadding-tab-left\":\"\",\"sa_weforms_text_dopadding-mob-choices\":\"px\",\"sa_weforms_text_dopadding-mob-top\":\"\",\"sa_weforms_text_dopadding-mob-right\":\"\",\"sa_weforms_text_dopadding-mob-bottom\":\"\",\"sa_weforms_text_dopadding-mob-left\":\"\",\"sa_weforms_text_dopamargin-lap-choices\":\"px\",\"sa_weforms_text_dopamargin-lap-top\":\"\",\"sa_weforms_text_dopamargin-lap-right\":\"\",\"sa_weforms_text_dopamargin-lap-bottom\":\"\",\"sa_weforms_text_dopamargin-lap-left\":\"\",\"sa_weforms_text_dopamargin-tab-choices\":\"px\",\"sa_weforms_text_dopamargin-tab-top\":\"\",\"sa_weforms_text_dopamargin-tab-right\":\"\",\"sa_weforms_text_dopamargin-tab-bottom\":\"\",\"sa_weforms_text_dopamargin-tab-left\":\"\",\"sa_weforms_text_dopamargin-mob-choices\":\"px\",\"sa_weforms_text_dopamargin-mob-top\":\"\",\"sa_weforms_text_dopamargin-mob-right\":\"\",\"sa_weforms_text_dopamargin-mob-bottom\":\"\",\"sa_weforms_text_dopamargin-mob-left\":\"\",\"sa_weforms_btn_position\":\"left\",\"sa_weforms_btn_text_typho-font\":\"Open+Sans\",\"sa_weforms_btn_text_typho-size-lap-choices\":\"px\",\"sa_weforms_btn_text_typho-size-lap-size\":\"\",\"sa_weforms_btn_text_typho-size-tab-choices\":\"px\",\"sa_weforms_btn_text_typho-size-tab-size\":\"\",\"sa_weforms_btn_text_typho-size-mob-choices\":\"px\",\"sa_weforms_btn_text_typho-size-mob-size\":\"\",\"sa_weforms_btn_text_typho-weight\":\"\",\"sa_weforms_btn_text_typho-transform\":\"\",\"sa_weforms_btn_text_typho-style\":\"\",\"sa_weforms_btn_text_typho-decoration\":\"\",\"sa_weforms_btn_text_typho-l-height-lap-choices\":\"px\",\"sa_weforms_btn_text_typho-l-height-lap-size\":\"\",\"sa_weforms_btn_text_typho-l-height-tab-choices\":\"px\",\"sa_weforms_btn_text_typho-l-height-tab-size\":\"\",\"sa_weforms_btn_text_typho-l-height-mob-choices\":\"px\",\"sa_weforms_btn_text_typho-l-height-mob-size\":\"\",\"sa_weforms_btn_text_typho-l-spacing-lap-choices\":\"px\",\"sa_weforms_btn_text_typho-l-spacing-lap-size\":\"\",\"sa_weforms_btn_text_typho-l-spacing-tab-choices\":\"px\",\"sa_weforms_btn_text_typho-l-spacing-tab-size\":\"\",\"sa_weforms_btn_text_typho-l-spacing-mob-choices\":\"px\",\"sa_weforms_btn_text_typho-l-spacing-mob-size\":\"\",\"sa_weforms_btn_color_\":\"#ffffff\",\"sa_weforms_btn_backgrounds\":\"\",\"sa_weforms_btn_br-type\":\"\",\"sa_weforms_btn_br-width-lap-choices\":\"px\",\"sa_weforms_btn_br-width-lap-top\":\"\",\"sa_weforms_btn_br-width-lap-right\":\"\",\"sa_weforms_btn_br-width-lap-bottom\":\"\",\"sa_weforms_btn_br-width-lap-left\":\"\",\"sa_weforms_btn_br-width-tab-choices\":\"px\",\"sa_weforms_btn_br-width-tab-top\":\"\",\"sa_weforms_btn_br-width-tab-right\":\"\",\"sa_weforms_btn_br-width-tab-bottom\":\"\",\"sa_weforms_btn_br-width-tab-left\":\"\",\"sa_weforms_btn_br-width-mob-choices\":\"px\",\"sa_weforms_btn_br-width-mob-top\":\"\",\"sa_weforms_btn_br-width-mob-right\":\"\",\"sa_weforms_btn_br-width-mob-bottom\":\"\",\"sa_weforms_btn_br-width-mob-left\":\"\",\"sa_weforms_btn_br-color\":\"\",\"sa_weforms_btn_br_radius-lap-choices\":\"px\",\"sa_weforms_btn_br_radius-lap-top\":\"\",\"sa_weforms_btn_br_radius-lap-right\":\"\",\"sa_weforms_btn_br_radius-lap-bottom\":\"\",\"sa_weforms_btn_br_radius-lap-left\":\"\",\"sa_weforms_btn_br_radius-tab-choices\":\"px\",\"sa_weforms_btn_br_radius-tab-top\":\"\",\"sa_weforms_btn_br_radius-tab-right\":\"\",\"sa_weforms_btn_br_radius-tab-bottom\":\"\",\"sa_weforms_btn_br_radius-tab-left\":\"\",\"sa_weforms_btn_br_radius-mob-choices\":\"px\",\"sa_weforms_btn_br_radius-mob-top\":\"\",\"sa_weforms_btn_br_radius-mob-right\":\"\",\"sa_weforms_btn_br_radius-mob-bottom\":\"\",\"sa_weforms_btn_br_radius-mob-left\":\"\",\"sa_weforms_btn_box_shadow-shadow\":\"yes\",\"sa_weforms_btn_box_shadow-type\":\"\",\"sa_weforms_btn_box_shadow-horizontal-size\":\"0\",\"sa_weforms_btn_box_shadow-vertical-size\":\"0\",\"sa_weforms_btn_box_shadow-blur-size\":\"0\",\"sa_weforms_btn_box_shadow-spread-size\":\"0\",\"sa_weforms_btn_box_shadow-color\":\"#cccccc\",\"sa_weforms_btn_hover_color_\":\"#fcd6d6\",\"sa_weforms_btn_hover_backgrounds\":\"\",\"sa_weforms_btn_h-br-type\":\"\",\"sa_weforms_btn_h-br-width-lap-choices\":\"px\",\"sa_weforms_btn_h-br-width-lap-top\":\"\",\"sa_weforms_btn_h-br-width-lap-right\":\"\",\"sa_weforms_btn_h-br-width-lap-bottom\":\"\",\"sa_weforms_btn_h-br-width-lap-left\":\"\",\"sa_weforms_btn_h-br-width-tab-choices\":\"px\",\"sa_weforms_btn_h-br-width-tab-top\":\"\",\"sa_weforms_btn_h-br-width-tab-right\":\"\",\"sa_weforms_btn_h-br-width-tab-bottom\":\"\",\"sa_weforms_btn_h-br-width-tab-left\":\"\",\"sa_weforms_btn_h-br-width-mob-choices\":\"px\",\"sa_weforms_btn_h-br-width-mob-top\":\"\",\"sa_weforms_btn_h-br-width-mob-right\":\"\",\"sa_weforms_btn_h-br-width-mob-bottom\":\"\",\"sa_weforms_btn_h-br-width-mob-left\":\"\",\"sa_weforms_btn_h-br-color\":\"\",\"sa_weforms_btn_hover-br-radius-lap-choices\":\"px\",\"sa_weforms_btn_hover-br-radius-lap-top\":\"\",\"sa_weforms_btn_hover-br-radius-lap-right\":\"\",\"sa_weforms_btn_hover-br-radius-lap-bottom\":\"\",\"sa_weforms_btn_hover-br-radius-lap-left\":\"\",\"sa_weforms_btn_hover-br-radius-tab-choices\":\"px\",\"sa_weforms_btn_hover-br-radius-tab-top\":\"\",\"sa_weforms_btn_hover-br-radius-tab-right\":\"\",\"sa_weforms_btn_hover-br-radius-tab-bottom\":\"\",\"sa_weforms_btn_hover-br-radius-tab-left\":\"\",\"sa_weforms_btn_hover-br-radius-mob-choices\":\"px\",\"sa_weforms_btn_hover-br-radius-mob-top\":\"\",\"sa_weforms_btn_hover-br-radius-mob-right\":\"\",\"sa_weforms_btn_hover-br-radius-mob-bottom\":\"\",\"sa_weforms_btn_hover-br-radius-mob-left\":\"\",\"sa_weforms_btn_h_box_shadow-shadow\":\"yes\",\"sa_weforms_btn_h_box_shadow-type\":\"\",\"sa_weforms_btn_h_box_shadow-horizontal-size\":\"0\",\"sa_weforms_btn_h_box_shadow-vertical-size\":\"0\",\"sa_weforms_btn_h_box_shadow-blur-size\":\"0\",\"sa_weforms_btn_h_box_shadow-spread-size\":\"0\",\"sa_weforms_btn_h_box_shadow-color\":\"#cccccc\",\"sa_weforms_btn_padding-lap-choices\":\"px\",\"sa_weforms_btn_padding-lap-top\":\"\",\"sa_weforms_btn_padding-lap-right\":\"\",\"sa_weforms_btn_padding-lap-bottom\":\"\",\"sa_weforms_btn_padding-lap-left\":\"\",\"sa_weforms_btn_padding-tab-choices\":\"px\",\"sa_weforms_btn_padding-tab-top\":\"\",\"sa_weforms_btn_padding-tab-right\":\"\",\"sa_weforms_btn_padding-tab-bottom\":\"\",\"sa_weforms_btn_padding-tab-left\":\"\",\"sa_weforms_btn_padding-mob-choices\":\"px\",\"sa_weforms_btn_padding-mob-top\":\"\",\"sa_weforms_btn_padding-mob-right\":\"\",\"sa_weforms_btn_padding-mob-bottom\":\"\",\"sa_weforms_btn_padding-mob-left\":\"\",\"sa_weforms_btn_margin-lap-choices\":\"px\",\"sa_weforms_btn_margin-lap-top\":\"\",\"sa_weforms_btn_margin-lap-right\":\"\",\"sa_weforms_btn_margin-lap-bottom\":\"\",\"sa_weforms_btn_margin-lap-left\":\"\",\"sa_weforms_btn_margin-tab-choices\":\"px\",\"sa_weforms_btn_margin-tab-top\":\"\",\"sa_weforms_btn_margin-tab-right\":\"\",\"sa_weforms_btn_margin-tab-bottom\":\"\",\"sa_weforms_btn_margin-tab-left\":\"\",\"sa_weforms_btn_margin-mob-choices\":\"px\",\"sa_weforms_btn_margin-mob-top\":\"\",\"sa_weforms_btn_margin-mob-right\":\"\",\"sa_weforms_btn_margin-mob-bottom\":\"\",\"sa_weforms_btn_margin-mob-left\":\"\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Weforms\",\"shortcode-addons-elements-id\":\"632\",\"shortcode-addons-elements-template\":\"Style_1\",\"sa_weforms_main_background-img\":\"0\"}","stylesheet":".shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main{max-width: 600px;background: ;border-radius: px px px px;}.shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main, .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main .wpuf-label label{color: #5c5c5c;}.shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;text&quot;],\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;password&quot;],\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;email&quot;],\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;url&quot;],\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;url&quot;],\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;number&quot;],\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields textarea{color: #5c5c5c;border-radius: px px px px;padding: px px px px;margin: px px px px;}.shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ::-webkit-input-placeholder{color: ;}.shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ::-moz-placeholder{color: ;}.shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ::-ms-input-placeholder{color: ;}.shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;text&quot;],\r\n                .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;password&quot;],\r\n                .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;email&quot;],\r\n                .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;url&quot;],\r\n                .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;url&quot;],\r\n                .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;number&quot;],\r\n                .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields textarea{background-color: ;}.shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;text&quot;]:focus,\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;password&quot;]:focus,\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;email&quot;]:focus,\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;url&quot;]:focus,\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;url&quot;]:focus,\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;number&quot;]:focus,\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields textarea:focus{border-color: #424242;}.shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit {text-align : left;}.shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type=&quot;submit&quot;]{font-family:&quot;Open Sans&quot;;color: #ffffff;background-color: ;border-radius: px px px px;padding: px px px px;margin: px px px px;}.shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type=&quot;submit&quot;]:hover{color: #fcd6d6;background-color: ;border-radius: px px px px;}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main{max-width: 50px;border-radius: px px px px;}.shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;text&quot;],\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;password&quot;],\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;email&quot;],\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;url&quot;],\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;url&quot;],\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;number&quot;],\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields textarea{border-radius: px px px px;padding: px px px px;margin: px px px px;}.shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type=&quot;submit&quot;]{border-radius: px px px px;padding: px px px px;margin: px px px px;}.shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type=&quot;submit&quot;]:hover{border-radius: px px px px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main{max-width: 50px;border-radius: px px px px;}.shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;text&quot;],\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;password&quot;],\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;email&quot;],\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;url&quot;],\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;url&quot;],\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields input[type=&quot;number&quot;],\r\n\t\t\t\t\t .shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form li .wpuf-fields textarea{border-radius: px px px px;padding: px px px px;margin: px px px px;}.shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type=&quot;submit&quot;]{border-radius: px px px px;padding: px px px px;margin: px px px px;}.shortcode-addons-wrapper-632 .oxi_weform_style1 .oxi_weform_main ul.wpuf-form .wpuf-submit input[type=&quot;submit&quot;]:hover{border-radius: px px px px;}}","font_family":"{\"Open+Sans\":\"Open+Sans\"}"},"child":[{"id":"1311","styleid":"632","rawdata":"null","stylesheet":""},{"id":"1312","styleid":"632","rawdata":"null","stylesheet":""},{"id":"1313","styleid":"632","rawdata":"null","stylesheet":""}]}',
            
           
            
        );
    }

}
