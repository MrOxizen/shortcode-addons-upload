<?php

namespace SHORTCODE_ADDONS_UPLOAD\QR_code;

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

class QR_code extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1');
    }

    public function templates() {
        return array(
            '{"style":{"id":"413","type":"Document_viewer","name":"Style 01","style_name":"Style_1","rawdata":"{\"sa_document_viewer_repeater\":{\"rep1\":{\"sa_document_viewer_link-select\":\"custom-url\",\"sa_document_viewer_link-media\":\"http:\\\/\\\/127.0.0.1\\\/wordpress\\\/wp-content\\\/uploads\\\/2020\\\/01\\\/A-Sample-PDF.pdf\",\"sa_document_viewer_link-url\":\"https:\\\/\\\/www.shortcode-addons.com\\\/wp-content\\\/uploads\\\/2020\\\/01\\\/A-Sample-PDF.pdf\",\"sa_document_viewer_title\":\"Item 01\"},\"rep4\":{\"sa_document_viewer_link-select\":\"custom-url\",\"sa_document_viewer_link-media\":\"https:\\\/\\\/www.shortcode-addons.com\\\/wp-content\\\/uploads\\\/2020\\\/01\\\/A-Sample-PDF.pdf\",\"sa_document_viewer_link-url\":\"https:\\\/\\\/www.shortcode-addons.com\\\/wp-content\\\/uploads\\\/2020\\\/01\\\/A-Sample-PDF.pdf\",\"sa_document_viewer_title\":\"Item 01\"}},\"sa_document_viewer_repeaternm\":\"4\",\"sa_addons_document_viewer_column-lap\":\"oxi-bt-col-lg-6\",\"sa_addons_document_viewer_column-tab\":\"oxi-bt-col-md-12\",\"sa_addons_document_viewer_column-mob\":\"oxi-bt-col-sm-12\",\"sa_info_image_height-lap-size\":\"473\",\"sa_info_image_height-tab-size\":\"\",\"sa_info_image_height-mob-size\":\"45\",\"sa_addons_card_main_background-color\":\"rgba(102,6,6,1.01)\",\"sa_addons_card_main_background-select\":\"media-library\",\"sa_addons_card_main_background-image\":\"\",\"sa_addons_card_main_background-url\":\"\",\"sa_addons_card_main_background-position\":\"\",\"sa_addons_card_main_background-attachment\":\"\",\"sa_addons_card_main_background-repeat\":\"no-repeat\",\"sa_addons_card_main_background-size-lap\":\"cover\",\"sa_addons_card_main_background-size-tab\":\"cover\",\"sa_addons_card_main_background-size-mob\":\"cover\",\"sa_addons_card_button_border-type\":\"\",\"sa_addons_card_button_border-width-lap-choices\":\"px\",\"sa_addons_card_button_border-width-lap-top\":\"5\",\"sa_addons_card_button_border-width-lap-right\":\"5\",\"sa_addons_card_button_border-width-lap-bottom\":\"5\",\"sa_addons_card_button_border-width-lap-left\":\"5\",\"sa_addons_card_button_border-width-tab-choices\":\"px\",\"sa_addons_card_button_border-width-tab-top\":\"\",\"sa_addons_card_button_border-width-tab-right\":\"\",\"sa_addons_card_button_border-width-tab-bottom\":\"\",\"sa_addons_card_button_border-width-tab-left\":\"\",\"sa_addons_card_button_border-width-mob-choices\":\"px\",\"sa_addons_card_button_border-width-mob-top\":\"\",\"sa_addons_card_button_border-width-mob-right\":\"\",\"sa_addons_card_button_border-width-mob-bottom\":\"\",\"sa_addons_card_button_border-width-mob-left\":\"\",\"sa_addons_card_button_border-color\":\"#ff5959\",\"sa_addons_card_radius-lap-choices\":\"px\",\"sa_addons_card_radius-lap-top\":\"0\",\"sa_addons_card_radius-lap-right\":\"0\",\"sa_addons_card_radius-lap-bottom\":\"0\",\"sa_addons_card_radius-lap-left\":\"0\",\"sa_addons_card_radius-tab-choices\":\"px\",\"sa_addons_card_radius-tab-top\":\"\",\"sa_addons_card_radius-tab-right\":\"\",\"sa_addons_card_radius-tab-bottom\":\"\",\"sa_addons_card_radius-tab-left\":\"\",\"sa_addons_card_radius-mob-choices\":\"px\",\"sa_addons_card_radius-mob-top\":\"\",\"sa_addons_card_radius-mob-right\":\"\",\"sa_addons_card_radius-mob-bottom\":\"\",\"sa_addons_card_radius-mob-left\":\"\",\"sa_addons_card_shadow-shadow\":\"yes\",\"sa_addons_card_shadow-type\":\"\",\"sa_addons_card_shadow-horizontal-size\":\"0\",\"sa_addons_card_shadow-vertical-size\":\"6\",\"sa_addons_card_shadow-blur-size\":\"12\",\"sa_addons_card_shadow-spread-size\":\"-4\",\"sa_addons_card_shadow-color\":\"rgba(59, 59, 59, 0.51)\",\"sa_addons_card_padding-lap-choices\":\"px\",\"sa_addons_card_padding-lap-top\":\"\",\"sa_addons_card_padding-lap-right\":\"\",\"sa_addons_card_padding-lap-bottom\":\"\",\"sa_addons_card_padding-lap-left\":\"\",\"sa_addons_card_padding-tab-choices\":\"px\",\"sa_addons_card_padding-tab-top\":\"\",\"sa_addons_card_padding-tab-right\":\"\",\"sa_addons_card_padding-tab-bottom\":\"\",\"sa_addons_card_padding-tab-left\":\"\",\"sa_addons_card_padding-mob-choices\":\"px\",\"sa_addons_card_padding-mob-top\":\"\",\"sa_addons_card_padding-mob-right\":\"\",\"sa_addons_card_padding-mob-bottom\":\"\",\"sa_addons_card_padding-mob-left\":\"\",\"sa_addons_document_viewer_margin-lap-choices\":\"px\",\"sa_addons_document_viewer_margin-lap-top\":\"20\",\"sa_addons_document_viewer_margin-lap-right\":\"20\",\"sa_addons_document_viewer_margin-lap-bottom\":\"20\",\"sa_addons_document_viewer_margin-lap-left\":\"20\",\"sa_addons_document_viewer_margin-tab-choices\":\"px\",\"sa_addons_document_viewer_margin-tab-top\":\"\",\"sa_addons_document_viewer_margin-tab-right\":\"\",\"sa_addons_document_viewer_margin-tab-bottom\":\"\",\"sa_addons_document_viewer_margin-tab-left\":\"\",\"sa_addons_document_viewer_margin-mob-choices\":\"px\",\"sa_addons_document_viewer_margin-mob-top\":\"\",\"sa_addons_document_viewer_margin-mob-right\":\"\",\"sa_addons_document_viewer_margin-mob-bottom\":\"\",\"sa_addons_document_viewer_margin-mob-left\":\"\",\"shortcode-addons-2-0-preview\":\"#FFF\",\"shortcode-addons-elements-name\":\"Document_viewer\",\"shortcode-addons-elements-id\":\"413\",\"shortcode-addons-elements-template\":\"Style_1\",\"sa_addons_card_main_background-img\":\"0\"}","stylesheet":".shortcode-addons-wrapper-413 .oxi_addons__document_viewer_content_style_1 .oxi_addons__document{height: 473px;}.shortcode-addons-wrapper-413 .oxi_addons__document_viewer_content_style_1 .oxi_addons__document_viewer{background: rgba(102,6,6,1.01);border-radius: 0px 0px 0px 0px;-webkit-box-shadow: 0px 6px 12px -4px rgba(59, 59, 59, 0.51);-moz-box-shadow: 0px 6px 12px -4px rgba(59, 59, 59, 0.51);box-shadow: 0px 6px 12px -4px rgba(59, 59, 59, 0.51);}.shortcode-addons-wrapper-413 .oxi_addons__document_viewer_content_style_1 .oxi_addons__document_viewer_main{padding: 20px 20px 20px 20px;}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-413 .oxi_addons__document_viewer_content_style_1 .oxi_addons__document{height: 45px;}}","font_family":"[]"},"child":[{"id":"960","styleid":"413","rawdata":"null","stylesheet":""},{"id":"961","styleid":"413","rawdata":"null","stylesheet":""},{"id":"962","styleid":"413","rawdata":"null","stylesheet":""},{"id":"963","styleid":"413","rawdata":"null","stylesheet":""},{"id":"964","styleid":"413","rawdata":"null","stylesheet":""},{"id":"965","styleid":"413","rawdata":"null","stylesheet":""}]}',
        );
    }

}
