<?php

namespace SHORTCODE_ADDONS_UPLOAD\Accordion;

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

class Accordion extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1', 'Style_2');
    }

    public function templates() {
        return array(
            '{"style":{"id":"71","type":"Accordion","name":"","style_name":"Style_1","rawdata":"{\"sa_el_ac_opening_type\":\"onebyone\",\"sa_accordion_data\":{\"rep10\":{\"sa_ac_active\":\"yes\",\"sa_icon_yes_no\":\"yes\",\"sa_el_ac_opening_icon_adding\":\"fas fa-check\",\"sa_el_ac_title_adding\":\"Lorem ipsum dolor\",\"sa_el_ac_desc_adding\":\"Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \"},\"rep11\":{\"sa_icon_yes_no\":\"yes\",\"sa_el_ac_opening_icon_adding\":\"fas fa-check\",\"sa_el_ac_title_adding\":\"Lorem Ipsum Dolor\",\"sa_el_ac_desc_adding\":\"Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \",\"sa_ac_active\":\"0\"},\"rep14\":{\"sa_icon_yes_no\":\"yes\",\"sa_el_ac_opening_icon_adding\":\"fas fa-check\",\"sa_el_ac_title_adding\":\"Lorem Ipsum Dolor\",\"sa_el_ac_desc_adding\":\"Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \",\"sa_ac_active\":\"0\"}},\"sa_accordion_datanm\":\"14\",\"sa_el_ac_title_background-color\":\"rgba(204,171,167,1.01)\",\"sa_el_ac_title_background-select\":\"media-library\",\"sa_el_ac_title_background-image\":\"\",\"sa_el_ac_title_background-url\":\"\",\"sa_el_ac_title_background-position\":\"\",\"sa_el_ac_title_background-attachment\":\"\",\"sa_el_ac_title_background-repeat\":\"\",\"sa_el_ac_title_background-size-lap\":\"\",\"sa_el_ac_title_background-size-tab\":\"\",\"sa_el_ac_title_background-size-mob\":\"cover\",\"sa_el_ac_border_title-type\":\"\",\"sa_el_ac_border_title-width-lap-choices\":\"px\",\"sa_el_ac_border_title-width-lap-top\":\"1\",\"sa_el_ac_border_title-width-lap-right\":\"1\",\"sa_el_ac_border_title-width-lap-bottom\":\"1\",\"sa_el_ac_border_title-width-lap-left\":\"1\",\"sa_el_ac_border_title-width-tab-choices\":\"px\",\"sa_el_ac_border_title-width-tab-top\":\"\",\"sa_el_ac_border_title-width-tab-right\":\"\",\"sa_el_ac_border_title-width-tab-bottom\":\"\",\"sa_el_ac_border_title-width-tab-left\":\"\",\"sa_el_ac_border_title-width-mob-choices\":\"px\",\"sa_el_ac_border_title-width-mob-top\":\"\",\"sa_el_ac_border_title-width-mob-right\":\"\",\"sa_el_ac_border_title-width-mob-bottom\":\"\",\"sa_el_ac_border_title-width-mob-left\":\"10\",\"sa_el_ac_border_title-color\":\"#000000\",\"sa_el_ac_border_title_radius-lap-choices\":\"px\",\"sa_el_ac_border_title_radius-lap-top\":\"0\",\"sa_el_ac_border_title_radius-lap-right\":\"0\",\"sa_el_ac_border_title_radius-lap-bottom\":\"0\",\"sa_el_ac_border_title_radius-lap-left\":\"0\",\"sa_el_ac_border_title_radius-tab-choices\":\"px\",\"sa_el_ac_border_title_radius-tab-top\":\"0\",\"sa_el_ac_border_title_radius-tab-right\":\"0\",\"sa_el_ac_border_title_radius-tab-bottom\":\"0\",\"sa_el_ac_border_title_radius-tab-left\":\"0\",\"sa_el_ac_border_title_radius-mob-choices\":\"px\",\"sa_el_ac_border_title_radius-mob-top\":\"0\",\"sa_el_ac_border_title_radius-mob-right\":\"0\",\"sa_el_ac_border_title_radius-mob-bottom\":\"2\",\"sa_el_ac_border_title_radius-mob-left\":\"2\",\"sa_ac_box_shadow_nwo-shadow\":\"yes\",\"sa_ac_box_shadow_nwo-type\":\"\",\"sa_ac_box_shadow_nwo-horizontal-size\":\"2\",\"sa_ac_box_shadow_nwo-vertical-size\":\"2\",\"sa_ac_box_shadow_nwo-blur-size\":\"10\",\"sa_ac_box_shadow_nwo-spread-size\":\"2\",\"sa_ac_box_shadow_nwo-color\":\"rgba(199, 199, 199, 1)\",\"sa_ac_box_animation-type\":\"\",\"sa_ac_box_animation-duration-size\":\"1\",\"sa_ac_box_animation-delay-size\":\"1000\",\"sa_ac_box_animation-offset-size\":\"20\",\"sa_ac_box_animation-looping\":\"yes\",\"sa_ac_main_padding-lap-choices\":\"px\",\"sa_ac_main_padding-lap-top\":\"0\",\"sa_ac_main_padding-lap-right\":\"0\",\"sa_ac_main_padding-lap-bottom\":\"0\",\"sa_ac_main_padding-lap-left\":\"0\",\"sa_ac_main_padding-tab-choices\":\"px\",\"sa_ac_main_padding-tab-top\":\"0\",\"sa_ac_main_padding-tab-right\":\"0\",\"sa_ac_main_padding-tab-bottom\":\"0\",\"sa_ac_main_padding-tab-left\":\"0\",\"sa_ac_main_padding-mob-choices\":\"px\",\"sa_ac_main_padding-mob-top\":\"0\",\"sa_ac_main_padding-mob-right\":\"0\",\"sa_ac_main_padding-mob-bottom\":\"10\",\"sa_ac_main_padding-mob-left\":\"10\",\"sa_ac_main_margin-lap-choices\":\"px\",\"sa_ac_main_margin-lap-top\":\"10\",\"sa_ac_main_margin-lap-right\":\"10\",\"sa_ac_main_margin-lap-bottom\":\"10\",\"sa_ac_main_margin-lap-left\":\"10\",\"sa_ac_main_margin-tab-choices\":\"px\",\"sa_ac_main_margin-tab-top\":\"0\",\"sa_ac_main_margin-tab-right\":\"0\",\"sa_ac_main_margin-tab-bottom\":\"0\",\"sa_ac_main_margin-tab-left\":\"0\",\"sa_ac_main_margin-mob-choices\":\"px\",\"sa_ac_main_margin-mob-top\":\"0\",\"sa_ac_main_margin-mob-right\":\"0\",\"sa_ac_main_margin-mob-bottom\":\"0\",\"sa_ac_main_margin-mob-left\":\"0\",\"sa_el_ac_title_typography-font\":\"Arial\",\"sa_el_ac_title_typography-size-lap-choices\":\"px\",\"sa_el_ac_title_typography-size-lap-size\":\"25\",\"sa_el_ac_title_typography-size-tab-choices\":\"px\",\"sa_el_ac_title_typography-size-tab-size\":\"\",\"sa_el_ac_title_typography-size-mob-choices\":\"px\",\"sa_el_ac_title_typography-size-mob-size\":\"\",\"sa_el_ac_title_typography-weight\":\"100\",\"sa_el_ac_title_typography-transform\":\"\",\"sa_el_ac_title_typography-style\":\"\",\"sa_el_ac_title_typography-decoration\":\"\",\"sa_el_ac_title_typography-align-lap\":\"left\",\"sa_el_ac_title_typography-align-tab\":\"\",\"sa_el_ac_title_typography-align-mob\":\"\",\"sa_el_ac_title_typography-l-height-lap-choices\":\"px\",\"sa_el_ac_title_typography-l-height-lap-size\":\"\",\"sa_el_ac_title_typography-l-height-tab-choices\":\"px\",\"sa_el_ac_title_typography-l-height-tab-size\":\"\",\"sa_el_ac_title_typography-l-height-mob-choices\":\"px\",\"sa_el_ac_title_typography-l-height-mob-size\":\"\",\"sa_el_ac_title_typography-l-spacing-lap-choices\":\"px\",\"sa_el_ac_title_typography-l-spacing-lap-size\":\"\",\"sa_el_ac_title_typography-l-spacing-tab-choices\":\"px\",\"sa_el_ac_title_typography-l-spacing-tab-size\":\"\",\"sa_el_ac_title_typography-l-spacing-mob-choices\":\"px\",\"sa_el_ac_title_typography-l-spacing-mob-size\":\"\",\"sa_el_ac_title_color\":\"#030303\",\"sa_el_ac_title_hover_color\":\"#7300ff\",\"sa_el_ac_title_text_shadow-color\":\"#030303\",\"sa_el_ac_title_text_shadow-blur-size\":\"0\",\"sa_el_ac_title_text_shadow-horizontal-size\":\"0\",\"sa_el_ac_title_text_shadow-vertical-size\":\"0\",\"sa_el_ac_title_padding-lap-choices\":\"px\",\"sa_el_ac_title_padding-lap-top\":\"0\",\"sa_el_ac_title_padding-lap-right\":\"0\",\"sa_el_ac_title_padding-lap-bottom\":\"0\",\"sa_el_ac_title_padding-lap-left\":\"0\",\"sa_el_ac_title_padding-tab-choices\":\"px\",\"sa_el_ac_title_padding-tab-top\":\"0\",\"sa_el_ac_title_padding-tab-right\":\"0\",\"sa_el_ac_title_padding-tab-bottom\":\"0\",\"sa_el_ac_title_padding-tab-left\":\"0\",\"sa_el_ac_title_padding-mob-choices\":\"px\",\"sa_el_ac_title_padding-mob-top\":\"0\",\"sa_el_ac_title_padding-mob-right\":\"0\",\"sa_el_ac_title_padding-mob-bottom\":\"0\",\"sa_el_ac_title_padding-mob-left\":\"0\",\"sa_el_ac_descriptions_color\":\"#030303\",\"sa_el_ac_descriptions_background\":\"rgba(200, 181, 201, 1)\",\"sa_el_ac_descriptions_typography-font\":\"Arial\",\"sa_el_ac_descriptions_typography-size-lap-choices\":\"px\",\"sa_el_ac_descriptions_typography-size-lap-size\":\"15\",\"sa_el_ac_descriptions_typography-size-tab-choices\":\"px\",\"sa_el_ac_descriptions_typography-size-tab-size\":\"15\",\"sa_el_ac_descriptions_typography-size-mob-choices\":\"px\",\"sa_el_ac_descriptions_typography-size-mob-size\":\"0\",\"sa_el_ac_descriptions_typography-weight\":\"100\",\"sa_el_ac_descriptions_typography-transform\":\"\",\"sa_el_ac_descriptions_typography-style\":\"\",\"sa_el_ac_descriptions_typography-decoration\":\"\",\"sa_el_ac_descriptions_typography-align-lap\":\"\",\"sa_el_ac_descriptions_typography-align-tab\":\"\",\"sa_el_ac_descriptions_typography-align-mob\":\"\",\"sa_el_ac_descriptions_typography-l-height-lap-choices\":\"px\",\"sa_el_ac_descriptions_typography-l-height-lap-size\":\"22\",\"sa_el_ac_descriptions_typography-l-height-tab-choices\":\"px\",\"sa_el_ac_descriptions_typography-l-height-tab-size\":\"15\",\"sa_el_ac_descriptions_typography-l-height-mob-choices\":\"px\",\"sa_el_ac_descriptions_typography-l-height-mob-size\":\"15\",\"sa_el_ac_descriptions_typography-l-spacing-lap-choices\":\"px\",\"sa_el_ac_descriptions_typography-l-spacing-lap-size\":\"0\",\"sa_el_ac_descriptions_typography-l-spacing-tab-choices\":\"px\",\"sa_el_ac_descriptions_typography-l-spacing-tab-size\":\"\",\"sa_el_ac_descriptions_typography-l-spacing-mob-choices\":\"px\",\"sa_el_ac_descriptions_typography-l-spacing-mob-size\":\"0\",\"sa_el_ac_descriptions_border_color-type\":\"solid\",\"sa_el_ac_descriptions_border_color-width-lap-choices\":\"px\",\"sa_el_ac_descriptions_border_color-width-lap-top\":\"0\",\"sa_el_ac_descriptions_border_color-width-lap-right\":\"0\",\"sa_el_ac_descriptions_border_color-width-lap-bottom\":\"0\",\"sa_el_ac_descriptions_border_color-width-lap-left\":\"0\",\"sa_el_ac_descriptions_border_color-width-tab-choices\":\"px\",\"sa_el_ac_descriptions_border_color-width-tab-top\":\"\",\"sa_el_ac_descriptions_border_color-width-tab-right\":\"0\",\"sa_el_ac_descriptions_border_color-width-tab-bottom\":\"0\",\"sa_el_ac_descriptions_border_color-width-tab-left\":\"0\",\"sa_el_ac_descriptions_border_color-width-mob-choices\":\"px\",\"sa_el_ac_descriptions_border_color-width-mob-top\":\"\",\"sa_el_ac_descriptions_border_color-width-mob-right\":\"\",\"sa_el_ac_descriptions_border_color-width-mob-bottom\":\"\",\"sa_el_ac_descriptions_border_color-width-mob-left\":\"0\",\"sa_el_ac_descriptions_border_color-color\":\"#000000\",\"sa_el_ac_descriptions_borde_border_radius-lap-choices\":\"px\",\"sa_el_ac_descriptions_borde_border_radius-lap-top\":\"0\",\"sa_el_ac_descriptions_borde_border_radius-lap-right\":\"10\",\"sa_el_ac_descriptions_borde_border_radius-lap-bottom\":\"10\",\"sa_el_ac_descriptions_borde_border_radius-lap-left\":\"10\",\"sa_el_ac_descriptions_borde_border_radius-tab-choices\":\"px\",\"sa_el_ac_descriptions_borde_border_radius-tab-top\":\"0\",\"sa_el_ac_descriptions_borde_border_radius-tab-right\":\"0\",\"sa_el_ac_descriptions_borde_border_radius-tab-bottom\":\"0\",\"sa_el_ac_descriptions_borde_border_radius-tab-left\":\"20\",\"sa_el_ac_descriptions_borde_border_radius-mob-choices\":\"px\",\"sa_el_ac_descriptions_borde_border_radius-mob-top\":\"0\",\"sa_el_ac_descriptions_borde_border_radius-mob-right\":\"0\",\"sa_el_ac_descriptions_borde_border_radius-mob-bottom\":\"0\",\"sa_el_ac_descriptions_borde_border_radius-mob-left\":\"0\",\"sa_el_ac_descriptions_text_shadow-color\":\"rgba(255, 255, 255, 1)\",\"sa_el_ac_descriptions_text_shadow-blur-size\":\"0\",\"sa_el_ac_descriptions_text_shadow-horizontal-size\":\"0\",\"sa_el_ac_descriptions_text_shadow-vertical-size\":\"0\",\"sa_el_ac_descriptions_box_shadow-shadow\":\"yes\",\"sa_el_ac_descriptions_box_shadow-type\":\"\",\"sa_el_ac_descriptions_box_shadow-horizontal-size\":\"2\",\"sa_el_ac_descriptions_box_shadow-vertical-size\":\"2\",\"sa_el_ac_descriptions_box_shadow-blur-size\":\"10\",\"sa_el_ac_descriptions_box_shadow-spread-size\":\"2\",\"sa_el_ac_descriptions_box_shadow-color\":\"rgba(125, 120, 120, 1)\",\"sa_el_ac_descriptions_padding-lap-choices\":\"px\",\"sa_el_ac_descriptions_padding-lap-top\":\"15\",\"sa_el_ac_descriptions_padding-lap-right\":\"15\",\"sa_el_ac_descriptions_padding-lap-bottom\":\"15\",\"sa_el_ac_descriptions_padding-lap-left\":\"15\",\"sa_el_ac_descriptions_padding-tab-choices\":\"px\",\"sa_el_ac_descriptions_padding-tab-top\":\"0\",\"sa_el_ac_descriptions_padding-tab-right\":\"0\",\"sa_el_ac_descriptions_padding-tab-bottom\":\"0\",\"sa_el_ac_descriptions_padding-tab-left\":\"0\",\"sa_el_ac_descriptions_padding-mob-choices\":\"px\",\"sa_el_ac_descriptions_padding-mob-top\":\"0\",\"sa_el_ac_descriptions_padding-mob-right\":\"0\",\"sa_el_ac_descriptions_padding-mob-bottom\":\"0\",\"sa_el_ac_descriptions_padding-mob-left\":\"0\",\"sa_el_ac_descriptions_margin-lap-choices\":\"px\",\"sa_el_ac_descriptions_margin-lap-top\":\"0\",\"sa_el_ac_descriptions_margin-lap-right\":\"0\",\"sa_el_ac_descriptions_margin-lap-bottom\":\"0\",\"sa_el_ac_descriptions_margin-lap-left\":\"0\",\"sa_el_ac_descriptions_margin-tab-choices\":\"px\",\"sa_el_ac_descriptions_margin-tab-top\":\"0\",\"sa_el_ac_descriptions_margin-tab-right\":\"0\",\"sa_el_ac_descriptions_margin-tab-bottom\":\"0\",\"sa_el_ac_descriptions_margin-tab-left\":\"0\",\"sa_el_ac_descriptions_margin-mob-choices\":\"px\",\"sa_el_ac_descriptions_margin-mob-top\":\"0\",\"sa_el_ac_descriptions_margin-mob-right\":\"0\",\"sa_el_ac_descriptions_margin-mob-bottom\":\"0\",\"sa_el_ac_descriptions_margin-mob-left\":\"0\",\"sa_el_ac_opening_icon_height_and_width-lap-choices\":\"px\",\"sa_el_ac_opening_icon_height_and_width-lap-size\":\"30\",\"sa_el_ac_opening_icon_height_and_width-tab-choices\":\"px\",\"sa_el_ac_opening_icon_height_and_width-tab-size\":\"20\",\"sa_el_ac_opening_icon_height_and_width-mob-choices\":\"px\",\"sa_el_ac_opening_icon_height_and_width-mob-size\":\"20\",\"sa_el_ac_opening_icon_icon_size-lap-choices\":\"px\",\"sa_el_ac_opening_icon_icon_size-lap-size\":\"18\",\"sa_el_ac_opening_icon_icon_size-tab-choices\":\"px\",\"sa_el_ac_opening_icon_icon_size-tab-size\":\"50\",\"sa_el_ac_opening_icon_icon_size-mob-choices\":\"px\",\"sa_el_ac_opening_icon_icon_size-mob-size\":\"1\",\"sa_el_ac_opening_icon_icon_color\":\"#000000\",\"sa_el_ac_opening_icon_icon_background\":\"rgba(255, 255, 255, 0.01)\",\"sa_el_ac_opening_icon_icon_border-type\":\"solid\",\"sa_el_ac_opening_icon_icon_border-width-lap-choices\":\"px\",\"sa_el_ac_opening_icon_icon_border-width-lap-top\":\"1\",\"sa_el_ac_opening_icon_icon_border-width-lap-right\":\"1\",\"sa_el_ac_opening_icon_icon_border-width-lap-bottom\":\"1\",\"sa_el_ac_opening_icon_icon_border-width-lap-left\":\"1\",\"sa_el_ac_opening_icon_icon_border-width-tab-choices\":\"px\",\"sa_el_ac_opening_icon_icon_border-width-tab-top\":\"\",\"sa_el_ac_opening_icon_icon_border-width-tab-right\":\"\",\"sa_el_ac_opening_icon_icon_border-width-tab-bottom\":\"\",\"sa_el_ac_opening_icon_icon_border-width-tab-left\":\"\",\"sa_el_ac_opening_icon_icon_border-width-mob-choices\":\"px\",\"sa_el_ac_opening_icon_icon_border-width-mob-top\":\"\",\"sa_el_ac_opening_icon_icon_border-width-mob-right\":\"\",\"sa_el_ac_opening_icon_icon_border-width-mob-bottom\":\"1\",\"sa_el_ac_opening_icon_icon_border-width-mob-left\":\"1\",\"sa_el_ac_opening_icon_icon_border-color\":\"#000000\",\"sa_el_ac_opening_icon_icon_hover_color\":\"#4400ff\",\"sa_el_ac_opening_icon_icon_hover_background\":\"rgba(0, 0, 0, 0.01)\",\"sa_el_ac_opening_icon_icon_hover_border\":\"#3700ff\",\"sa_el_ac_opening_icon_icon_border_radius-lap-choices\":\"%\",\"sa_el_ac_opening_icon_icon_border_radius-lap-top\":\"50\",\"sa_el_ac_opening_icon_icon_border_radius-lap-right\":\"50\",\"sa_el_ac_opening_icon_icon_border_radius-lap-bottom\":\"50\",\"sa_el_ac_opening_icon_icon_border_radius-lap-left\":\"50\",\"sa_el_ac_opening_icon_icon_border_radius-tab-choices\":\"px\",\"sa_el_ac_opening_icon_icon_border_radius-tab-top\":\"0\",\"sa_el_ac_opening_icon_icon_border_radius-tab-right\":\"0\",\"sa_el_ac_opening_icon_icon_border_radius-tab-bottom\":\"0\",\"sa_el_ac_opening_icon_icon_border_radius-tab-left\":\"0\",\"sa_el_ac_opening_icon_icon_border_radius-mob-choices\":\"px\",\"sa_el_ac_opening_icon_icon_border_radius-mob-top\":\"0\",\"sa_el_ac_opening_icon_icon_border_radius-mob-right\":\"0\",\"sa_el_ac_opening_icon_icon_border_radius-mob-bottom\":\"10\",\"sa_el_ac_opening_icon_icon_border_radius-mob-left\":\"0\",\"sa_el_ac_opening_icon_icon_padding-lap-choices\":\"px\",\"sa_el_ac_opening_icon_icon_padding-lap-top\":\"0\",\"sa_el_ac_opening_icon_icon_padding-lap-right\":\"15\",\"sa_el_ac_opening_icon_icon_padding-lap-bottom\":\"0\",\"sa_el_ac_opening_icon_icon_padding-lap-left\":\"15\",\"sa_el_ac_opening_icon_icon_padding-tab-choices\":\"px\",\"sa_el_ac_opening_icon_icon_padding-tab-top\":\"0\",\"sa_el_ac_opening_icon_icon_padding-tab-right\":\"0\",\"sa_el_ac_opening_icon_icon_padding-tab-bottom\":\"0\",\"sa_el_ac_opening_icon_icon_padding-tab-left\":\"0\",\"sa_el_ac_opening_icon_icon_padding-mob-choices\":\"px\",\"sa_el_ac_opening_icon_icon_padding-mob-top\":\"0\",\"sa_el_ac_opening_icon_icon_padding-mob-right\":\"0\",\"sa_el_ac_opening_icon_icon_padding-mob-bottom\":\"20\",\"sa_el_ac_opening_icon_icon_padding-mob-left\":\"0\",\"sa_el_ac_arrow_icon\":\"yes\",\"sa_el_ac_icon_position\":\"right\",\"sa_el_ac_arrow_height_and_width-lap-choices\":\"px\",\"sa_el_ac_arrow_height_and_width-lap-size\":\"30\",\"sa_el_ac_arrow_height_and_width-tab-choices\":\"px\",\"sa_el_ac_arrow_height_and_width-tab-size\":\"120\",\"sa_el_ac_arrow_height_and_width-mob-choices\":\"px\",\"sa_el_ac_arrow_height_and_width-mob-size\":\"120\",\"sa_el_ac_arrow_icon_icon_size-lap-choices\":\"px\",\"sa_el_ac_arrow_icon_icon_size-lap-size\":\"18\",\"sa_el_ac_arrow_icon_icon_size-tab-choices\":\"px\",\"sa_el_ac_arrow_icon_icon_size-tab-size\":\"50\",\"sa_el_ac_arrow_icon_icon_size-mob-choices\":\"px\",\"sa_el_ac_arrow_icon_icon_size-mob-size\":\"30\",\"sa_el_ac_closing_arrow_color\":\"#030303\",\"sa_el_ac_closing_arrow_background\":\"rgba(224, 216, 215, 0.01)\",\"sa_el_ac_closing_arrow_border-type\":\"solid\",\"sa_el_ac_closing_arrow_border-width-lap-choices\":\"px\",\"sa_el_ac_closing_arrow_border-width-lap-top\":\"1\",\"sa_el_ac_closing_arrow_border-width-lap-right\":\"1\",\"sa_el_ac_closing_arrow_border-width-lap-bottom\":\"1\",\"sa_el_ac_closing_arrow_border-width-lap-left\":\"1\",\"sa_el_ac_closing_arrow_border-width-tab-choices\":\"px\",\"sa_el_ac_closing_arrow_border-width-tab-top\":\"\",\"sa_el_ac_closing_arrow_border-width-tab-right\":\"18\",\"sa_el_ac_closing_arrow_border-width-tab-bottom\":\"\",\"sa_el_ac_closing_arrow_border-width-tab-left\":\"\",\"sa_el_ac_closing_arrow_border-width-mob-choices\":\"px\",\"sa_el_ac_closing_arrow_border-width-mob-top\":\"\",\"sa_el_ac_closing_arrow_border-width-mob-right\":\"\",\"sa_el_ac_closing_arrow_border-width-mob-bottom\":\"\",\"sa_el_ac_closing_arrow_border-width-mob-left\":\"\",\"sa_el_ac_closing_arrow_border-color\":\"#030303\",\"sa_el_ac_closing_arrow_hover_color\":\"#0011ff\",\"sa_el_ac_closing_arrow_hover_background\":\"rgba(13, 0, 255, 0.01)\",\"sa_el_ac_closing_arrow_hover_border\":\"#1500ff\",\"sa_el_ac_closing_arrow_border_radius-lap-choices\":\"px\",\"sa_el_ac_closing_arrow_border_radius-lap-top\":\"5\",\"sa_el_ac_closing_arrow_border_radius-lap-right\":\"5\",\"sa_el_ac_closing_arrow_border_radius-lap-bottom\":\"5\",\"sa_el_ac_closing_arrow_border_radius-lap-left\":\"5\",\"sa_el_ac_closing_arrow_border_radius-tab-choices\":\"px\",\"sa_el_ac_closing_arrow_border_radius-tab-top\":\"0\",\"sa_el_ac_closing_arrow_border_radius-tab-right\":\"0\",\"sa_el_ac_closing_arrow_border_radius-tab-bottom\":\"0\",\"sa_el_ac_closing_arrow_border_radius-tab-left\":\"0\",\"sa_el_ac_closing_arrow_border_radius-mob-choices\":\"px\",\"sa_el_ac_closing_arrow_border_radius-mob-top\":\"0\",\"sa_el_ac_closing_arrow_border_radius-mob-right\":\"0\",\"sa_el_ac_closing_arrow_border_radius-mob-bottom\":\"0\",\"sa_el_ac_closing_arrow_border_radius-mob-left\":\"0\",\"sa_el_ac_opening_arrow_padding-lap-choices\":\"px\",\"sa_el_ac_opening_arrow_padding-lap-top\":\"0\",\"sa_el_ac_opening_arrow_padding-lap-right\":\"15\",\"sa_el_ac_opening_arrow_padding-lap-bottom\":\"0\",\"sa_el_ac_opening_arrow_padding-lap-left\":\"15\",\"sa_el_ac_opening_arrow_padding-tab-choices\":\"px\",\"sa_el_ac_opening_arrow_padding-tab-top\":\"0\",\"sa_el_ac_opening_arrow_padding-tab-right\":\"0\",\"sa_el_ac_opening_arrow_padding-tab-bottom\":\"0\",\"sa_el_ac_opening_arrow_padding-tab-left\":\"0\",\"sa_el_ac_opening_arrow_padding-mob-choices\":\"px\",\"sa_el_ac_opening_arrow_padding-mob-top\":\"0\",\"sa_el_ac_opening_arrow_padding-mob-right\":\"0\",\"sa_el_ac_opening_arrow_padding-mob-bottom\":\"0\",\"sa_el_ac_opening_arrow_padding-mob-left\":\"0\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Accordion\",\"shortcode-addons-elements-id\":\"71\",\"shortcode-addons-elements-template\":\"Style_1\",\"sa_el_ac_title_background-img\":\"0\"}","stylesheet":".shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H {background: rgba(204,171,167,1.01);}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H{border-radius: 0px 0px 0px 0px;-webkit-box-shadow: 2px 2px 10px 2px rgba(199, 199, 199, 1);-moz-box-shadow: 2px 2px 10px 2px rgba(199, 199, 199, 1);box-shadow: 2px 2px 10px 2px rgba(199, 199, 199, 1);padding:0px 0px 0px 0px}.shortcode-addons-wrapper-71 .oa_ac_style_1 {padding:10px 10px 10px 10px}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H .heading-data{font-family:&quot;Arial&quot;;font-size: 25px;font-weight: 100;text-align: left;color: #030303;margin:0px 0px 0px 0px}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H.active .heading-data, .oxi-addons-ac-H:hover .heading-data{color: #7300ff !important;}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-C-b{color: #030303;background: rgba(200, 181, 201, 1);font-family:&quot;Arial&quot;;font-size: 15px;font-weight: 100;line-height: 22px;letter-spacing: 0px;border-style: solid;border-width: 0px 0px 0px 0px;border-color: #000000;border-radius: 0px 10px 10px 10px;-webkit-box-shadow: 2px 2px 10px 2px rgba(125, 120, 120, 1);-moz-box-shadow: 2px 2px 10px 2px rgba(125, 120, 120, 1);box-shadow: 2px 2px 10px 2px rgba(125, 120, 120, 1);padding:15px 15px 15px 15px}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-C{padding:0px 0px 0px 0px}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H .icon_setting,.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H.active .icon_setting{height:30px; width:30px;font-size:18px;border-radius: 50% 50% 50% 50%;margin:0px 15px 0px 15px}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H .icon_setting{color: #000000;background: rgba(255, 255, 255, 0.01);border-style: solid;border-width: 1px 1px 1px 1px;border-color: #000000;}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H:hover .icon_setting,.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H.active .icon_setting{color: #4400ff;background: rgba(0, 0, 0, 0.01);border-color: #3700ff;}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H .span-deactive,.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H.active .span-active{height:30px; width:30px;font-size:18px;margin:0px 15px 0px 15px}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H .span-deactive{color: #030303;background: rgba(224, 216, 215, 0.01);border-style: solid;border-width: 1px 1px 1px 1px;border-color: #030303;}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H:hover .span-deactive,.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H.active .span-active{color: #0011ff;background: rgba(13, 0, 255, 0.01);border-color: #1500ff;}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H .span-deactive,.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H.active .span-active {border-radius: 5px 5px 5px 5px;}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H{border-radius: 0px 0px 0px 0px;padding:0px 0px 0px 0px}.shortcode-addons-wrapper-71 .oa_ac_style_1 {padding:0px 0px 0px 0px}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H .heading-data{margin:0px 0px 0px 0px}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-C-b{font-size: 15px;line-height: 15px;border-radius: 0px 0px 0px 20px;padding:0px 0px 0px 0px}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-C{padding:0px 0px 0px 0px}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H .icon_setting,.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H.active .icon_setting{height:20px; width:20px;font-size:50px;border-radius: 0px 0px 0px 0px;margin:0px 0px 0px 0px}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H .span-deactive,.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H.active .span-active{height:120px; width:120px;font-size:50px;margin:0px 0px 0px 0px}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H .span-deactive,.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H.active .span-active {border-radius: 0px 0px 0px 0px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H{border-radius: 0px 0px 2px 2px;padding:0px 0px 10px 10px}.shortcode-addons-wrapper-71 .oa_ac_style_1 {padding:0px 0px 0px 0px}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H .heading-data{margin:0px 0px 0px 0px}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-C-b{font-size: 0px;line-height: 15px;letter-spacing: 0px;border-radius: 0px 0px 0px 0px;padding:0px 0px 0px 0px}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-C{padding:0px 0px 0px 0px}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H .icon_setting,.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H.active .icon_setting{height:20px; width:20px;font-size:1px;border-radius: 0px 0px 10px 0px;margin:0px 0px 20px 0px}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H .span-deactive,.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H.active .span-active{height:120px; width:120px;font-size:30px;margin:0px 0px 0px 0px}.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H .span-deactive,.shortcode-addons-wrapper-71 .oa_ac_style_1 .oxi-addons-ac-H.active .span-active {border-radius: 0px 0px 0px 0px;}}","font_family":"[]"},"child":[{"id":"184","styleid":"71","rawdata":"null","stylesheet":""},{"id":"185","styleid":"71","rawdata":"null","stylesheet":""},{"id":"186","styleid":"71","rawdata":"null","stylesheet":""}]}',
            
        );
    }

}
