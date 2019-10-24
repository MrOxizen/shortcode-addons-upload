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
            '{"style":{"id":"1","type":"Bullet_list","name":"Style 1","style_name":"Style_1","rawdata":"{\"sa_image_accordion_data_style_1\":{\"rep1\":{\"sa_bl_text\":\"Lorem Ipsum is simply dummy text\",\"sa_bl_url-url\":\"\",\"sa_bl_url-follow\":\"yes\",\"sa_bl_url-id\":\"\",\"sa_bl_url-target\":\"0\"},\"rep2\":{\"sa_bl_text\":\"Lorem Ipsum is simply dummy text\",\"sa_bl_url-url\":\"\",\"sa_bl_url-follow\":\"yes\",\"sa_bl_url-id\":\"\",\"sa_bl_url-target\":\"0\"},\"rep3\":{\"sa_bl_text\":\"Lorem Ipsum is simply dummy text\",\"sa_bl_url-url\":\"\",\"sa_bl_url-follow\":\"yes\",\"sa_bl_url-id\":\"\",\"sa_bl_url-target\":\"0\"},\"rep4\":{\"sa_bl_text\":\"Lorem Ipsum is simply dummy text\",\"sa_bl_url-url\":\"\",\"sa_bl_url-follow\":\"yes\",\"sa_bl_url-id\":\"\",\"sa_bl_url-target\":\"0\"}},\"sa_image_accordion_data_style_1nm\":\"4\",\"sa-bl-g-max-width-control\":\"max-width\",\"sa-bl-g-max-width-lap-choices\":\"px\",\"sa-bl-g-max-width-lap-size\":\"482\",\"sa-bl-g-max-width-tab-choices\":\"px\",\"sa-bl-g-max-width-tab-size\":\"50\",\"sa-bl-g-max-width-mob-choices\":\"px\",\"sa-bl-g-max-width-mob-size\":\"50\",\"sa-bl-g-padding-lap-choices\":\"px\",\"sa-bl-g-padding-lap-top\":\"0\",\"sa-bl-g-padding-lap-right\":\"0\",\"sa-bl-g-padding-lap-bottom\":\"0\",\"sa-bl-g-padding-lap-left\":\"0\",\"sa-bl-g-padding-tab-choices\":\"px\",\"sa-bl-g-padding-tab-top\":\"0\",\"sa-bl-g-padding-tab-right\":\"0\",\"sa-bl-g-padding-tab-bottom\":\"0\",\"sa-bl-g-padding-tab-left\":\"0\",\"sa-bl-g-padding-mob-choices\":\"px\",\"sa-bl-g-padding-mob-top\":\"0\",\"sa-bl-g-padding-mob-right\":\"0\",\"sa-bl-g-padding-mob-bottom\":\"0\",\"sa-bl-g-padding-mob-left\":\"0\",\"sa-bl-n-color\":\"#ffffff\",\"sa-bl-n-background\":\"rgba(10, 173, 162, 1)\",\"sa-bl-n-border-type\":\"solid\",\"sa-bl-n-border-width-lap-choices\":\"px\",\"sa-bl-n-border-width-lap-top\":\"2\",\"sa-bl-n-border-width-lap-right\":\"2\",\"sa-bl-n-border-width-lap-bottom\":\"2\",\"sa-bl-n-border-width-lap-left\":\"2\",\"sa-bl-n-border-width-tab-choices\":\"px\",\"sa-bl-n-border-width-tab-top\":\"0\",\"sa-bl-n-border-width-tab-right\":\"0\",\"sa-bl-n-border-width-tab-bottom\":\"0\",\"sa-bl-n-border-width-tab-left\":\"0\",\"sa-bl-n-border-width-mob-choices\":\"px\",\"sa-bl-n-border-width-mob-top\":\"0\",\"sa-bl-n-border-width-mob-right\":\"0\",\"sa-bl-n-border-width-mob-bottom\":\"0\",\"sa-bl-n-border-width-mob-left\":\"0\",\"sa-bl-n-border-color\":\"#ffffff\",\"sa-bl-n-typho-font\":\"Arial\",\"sa-bl-n-typho-size-lap-choices\":\"px\",\"sa-bl-n-typho-size-lap-size\":\"18\",\"sa-bl-n-typho-size-tab-choices\":\"px\",\"sa-bl-n-typho-size-tab-size\":\"\",\"sa-bl-n-typho-size-mob-choices\":\"px\",\"sa-bl-n-typho-size-mob-size\":\"\",\"sa-bl-n-typho-weight\":\"\",\"sa-bl-n-typho-transform\":\"\",\"sa-bl-n-typho-style\":\"\",\"sa-bl-n-typho-decoration\":\"\",\"sa-bl-n-typho-l-height-lap-choices\":\"px\",\"sa-bl-n-typho-l-height-lap-size\":\"\",\"sa-bl-n-typho-l-height-tab-choices\":\"px\",\"sa-bl-n-typho-l-height-tab-size\":\"\",\"sa-bl-n-typho-l-height-mob-choices\":\"px\",\"sa-bl-n-typho-l-height-mob-size\":\"\",\"sa-bl-n-typho-l-spacing-lap-choices\":\"px\",\"sa-bl-n-typho-l-spacing-lap-size\":\"\",\"sa-bl-n-typho-l-spacing-tab-choices\":\"px\",\"sa-bl-n-typho-l-spacing-tab-size\":\"\",\"sa-bl-n-typho-l-spacing-mob-choices\":\"px\",\"sa-bl-n-typho-l-spacing-mob-size\":\"\",\"sa-bl-n-tx-shadow-color\":\"#ffffff\",\"sa-bl-n-tx-shadow-blur-size\":\"0\",\"sa-bl-n-tx-shadow-horizontal-size\":\"0\",\"sa-bl-n-tx-shadow-vertical-size\":\"0\",\"sa-bl-n-padding-lap-choices\":\"px\",\"sa-bl-n-padding-lap-top\":\"11\",\"sa-bl-n-padding-lap-right\":\"11\",\"sa-bl-n-padding-lap-bottom\":\"11\",\"sa-bl-n-padding-lap-left\":\"11\",\"sa-bl-n-padding-tab-choices\":\"px\",\"sa-bl-n-padding-tab-top\":\"0\",\"sa-bl-n-padding-tab-right\":\"0\",\"sa-bl-n-padding-tab-bottom\":\"0\",\"sa-bl-n-padding-tab-left\":\"0\",\"sa-bl-n-padding-mob-choices\":\"px\",\"sa-bl-n-padding-mob-top\":\"0\",\"sa-bl-n-padding-mob-right\":\"0\",\"sa-bl-n-padding-mob-bottom\":\"0\",\"sa-bl-n-padding-mob-left\":\"0\",\"sa-bl-n-hover-color\":\"#ffffff\",\"sa-bl-n-hover-bg-color\":\"rgba(19, 143, 245, 1)\",\"sa-bl-n-hover-border-type\":\"solid\",\"sa-bl-n-hover-border-width-lap-choices\":\"px\",\"sa-bl-n-hover-border-width-lap-top\":\"2\",\"sa-bl-n-hover-border-width-lap-right\":\"2\",\"sa-bl-n-hover-border-width-lap-bottom\":\"2\",\"sa-bl-n-hover-border-width-lap-left\":\"2\",\"sa-bl-n-hover-border-width-tab-choices\":\"px\",\"sa-bl-n-hover-border-width-tab-top\":\"0\",\"sa-bl-n-hover-border-width-tab-right\":\"0\",\"sa-bl-n-hover-border-width-tab-bottom\":\"0\",\"sa-bl-n-hover-border-width-tab-left\":\"0\",\"sa-bl-n-hover-border-width-mob-choices\":\"px\",\"sa-bl-n-hover-border-width-mob-top\":\"0\",\"sa-bl-n-hover-border-width-mob-right\":\"0\",\"sa-bl-n-hover-border-width-mob-bottom\":\"0\",\"sa-bl-n-hover-border-width-mob-left\":\"0\",\"sa-bl-n-hover-border-color\":\"#ffffff\",\"sa-bl-lc-color\":\"#ffffff\",\"sa-bl-lc-bg-color\":\"rgba(19,143,245,1.00)\",\"sa-bl-lc-bg-select\":\"custom-url\",\"sa-bl-lc-bg-image\":\"\",\"sa-bl-lc-bg-url\":\"\",\"sa-bl-lc-bg-position\":\"center center\",\"sa-bl-lc-bg-attachment\":\"\",\"sa-bl-lc-bg-repeat\":\"no-repeat\",\"sa-bl-lc-bg-size-lap\":\"cover\",\"sa-bl-lc-bg-size-tab\":\"cover\",\"sa-bl-lc-bg-size-mob\":\"cover\",\"sa-bl-lc-typho-font\":\"Arial\",\"sa-bl-lc-typho-size-lap-choices\":\"px\",\"sa-bl-lc-typho-size-lap-size\":\"24\",\"sa-bl-lc-typho-size-tab-choices\":\"px\",\"sa-bl-lc-typho-size-tab-size\":\"\",\"sa-bl-lc-typho-size-mob-choices\":\"px\",\"sa-bl-lc-typho-size-mob-size\":\"\",\"sa-bl-lc-typho-weight\":\"\",\"sa-bl-lc-typho-transform\":\"\",\"sa-bl-lc-typho-style\":\"\",\"sa-bl-lc-typho-decoration\":\"\",\"sa-bl-lc-typho-l-height-lap-choices\":\"px\",\"sa-bl-lc-typho-l-height-lap-size\":\"\",\"sa-bl-lc-typho-l-height-tab-choices\":\"px\",\"sa-bl-lc-typho-l-height-tab-size\":\"\",\"sa-bl-lc-typho-l-height-mob-choices\":\"px\",\"sa-bl-lc-typho-l-height-mob-size\":\"\",\"sa-bl-lc-typho-l-spacing-lap-choices\":\"px\",\"sa-bl-lc-typho-l-spacing-lap-size\":\"\",\"sa-bl-lc-typho-l-spacing-tab-choices\":\"px\",\"sa-bl-lc-typho-l-spacing-tab-size\":\"\",\"sa-bl-lc-typho-l-spacing-mob-choices\":\"px\",\"sa-bl-lc-typho-l-spacing-mob-size\":\"\",\"sa-bl-lc-tx-shadow-color\":\"rgba(250, 30, 30, 1)\",\"sa-bl-lc-tx-shadow-blur-size\":\"44\",\"sa-bl-lc-tx-shadow-horizontal-size\":\"58\",\"sa-bl-lc-tx-shadow-vertical-size\":\"80\",\"sa-bl-lc-padding-lap-choices\":\"px\",\"sa-bl-lc-padding-lap-top\":\"8\",\"sa-bl-lc-padding-lap-right\":\"8\",\"sa-bl-lc-padding-lap-bottom\":\"8\",\"sa-bl-lc-padding-lap-left\":\"8\",\"sa-bl-lc-padding-tab-choices\":\"px\",\"sa-bl-lc-padding-tab-top\":\"0\",\"sa-bl-lc-padding-tab-right\":\"0\",\"sa-bl-lc-padding-tab-bottom\":\"0\",\"sa-bl-lc-padding-tab-left\":\"0\",\"sa-bl-lc-padding-mob-choices\":\"px\",\"sa-bl-lc-padding-mob-top\":\"0\",\"sa-bl-lc-padding-mob-right\":\"0\",\"sa-bl-lc-padding-mob-bottom\":\"0\",\"sa-bl-lc-padding-mob-left\":\"0\",\"sa-bl-lc-margin-lap-choices\":\"px\",\"sa-bl-lc-margin-lap-top\":\"0\",\"sa-bl-lc-margin-lap-right\":\"0\",\"sa-bl-lc-margin-lap-bottom\":\"0\",\"sa-bl-lc-margin-lap-left\":\"0\",\"sa-bl-lc-margin-tab-choices\":\"px\",\"sa-bl-lc-margin-tab-top\":\"0\",\"sa-bl-lc-margin-tab-right\":\"0\",\"sa-bl-lc-margin-tab-bottom\":\"0\",\"sa-bl-lc-margin-tab-left\":\"0\",\"sa-bl-lc-margin-mob-choices\":\"px\",\"sa-bl-lc-margin-mob-top\":\"0\",\"sa-bl-lc-margin-mob-right\":\"0\",\"sa-bl-lc-margin-mob-bottom\":\"0\",\"sa-bl-lc-margin-mob-left\":\"0\",\"sa-bl-lc-hover-color\":\"#ffffff\",\"sa-bl-lc-hover-bg-color\":\"rgba(6,199,177,1.01)\",\"sa-bl-lc-hover-bg-select\":\"custom-url\",\"sa-bl-lc-hover-bg-image\":\"\",\"sa-bl-lc-hover-bg-url\":\"\",\"sa-bl-lc-hover-bg-position\":\"center center\",\"sa-bl-lc-hover-bg-attachment\":\"\",\"sa-bl-lc-hover-bg-repeat\":\"no-repeat\",\"sa-bl-lc-hover-bg-size-lap\":\"cover\",\"sa-bl-lc-hover-bg-size-tab\":\"cover\",\"sa-bl-lc-hover-bg-size-mob\":\"cover\",\"sa-ac-opening-number-lap\":\"1.1\",\"sa-ac-opening-number-tab\":\"10\",\"sa-ac-opening-number-mob\":\"10\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Bullet_list\",\"shortcode-addons-elements-id\":\"1\",\"shortcode-addons-elements-template\":\"Style_1\",\"sa-bl-lc-bg-img\":\"0\",\"sa-bl-lc-hover-bg-img\":\"0\"}","stylesheet":".shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .sa-bl-width-auto{max-width:482px;}.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .oxi-addons-list-type-1 ol.oxi-addons-list-ol{padding:0px 0px 0px 0px;}.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:before{color:#ffffff;background:rgba(10, 173, 162, 1);border-style: solid;border-width: 2px 2px 2px 2px;border-color: #ffffff;font-family:&quot;Arial&quot;;font-size: 18px;padding:11px 11px 11px 11px}.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:hover:before{color:#ffffff;background:rgba(19, 143, 245, 1);border-style: solid;border-width: 2px 2px 2px 2px;border-color: #ffffff;}.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link{color: #ffffff;background: rgba(19,143,245,1.00);font-family:&quot;Arial&quot;;font-size: 24px;text-shadow: 58px 80px 44px rgba(250, 30, 30, 1);padding:8px 8px 8px 8px}.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .oxi-addons-list-li .oxi-addons-admin-edit-list{margin:0px 0px 0px 0px}.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:hover{color: #ffffff;background: rgba(6,199,177,1.01);transform: scale(1.1);}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .sa-bl-width-auto{max-width:50px;}.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .oxi-addons-list-type-1 ol.oxi-addons-list-ol{padding:0px 0px 0px 0px;}.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:before{border-width: 0px 0px 0px 0px;padding:0px 0px 0px 0px}.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:hover:before{border-width: 0px 0px 0px 0px;}.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link{padding:0px 0px 0px 0px}.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .oxi-addons-list-li .oxi-addons-admin-edit-list{margin:0px 0px 0px 0px}.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:hover{transform: scale(10);}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .sa-bl-width-auto{max-width:50px;}.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .oxi-addons-list-type-1 ol.oxi-addons-list-ol{padding:0px 0px 0px 0px;}.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:before{border-width: 0px 0px 0px 0px;padding:0px 0px 0px 0px}.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:hover:before{border-width: 0px 0px 0px 0px;}.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link{padding:0px 0px 0px 0px}.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .oxi-addons-list-li .oxi-addons-admin-edit-list{margin:0px 0px 0px 0px}.shortcode-addons-wrapper-1 .oxi-addons-bullet-list-area .oxi-addons-list-type-1 .oxi-BL-link:hover{transform: scale(10);}}","font_family":"[]"},"child":[{"id":"1","styleid":"1","rawdata":"{\"sa_bl_text\":\"Lorem Ipsum is simply dummy text\",\"sa_bl_url-url\":\"\",\"sa_bl_url-follow\":\"yes\",\"sa_bl_url-id\":\"\",\"shortcodeitemid\":\"\",\"sa_bl_url-target\":\"0\"}","stylesheet":""},{"id":"2","styleid":"1","rawdata":"{\"sa_bl_text\":\"Lorem Ipsum is simply dummy text\",\"sa_bl_url-url\":\"#\",\"sa_bl_url-follow\":\"yes\",\"sa_bl_url-id\":\"\",\"shortcodeitemid\":\"\",\"sa_bl_url-target\":\"0\"}","stylesheet":""},{"id":"3","styleid":"1","rawdata":"{\"sa_bl_text\":\"Lorem Ipsum is simply dummy text\",\"sa_bl_url-url\":\"\",\"sa_bl_url-follow\":\"yes\",\"sa_bl_url-id\":\"\",\"shortcodeitemid\":\"\",\"sa_bl_url-target\":\"0\"}","stylesheet":""}]}',
            
        );
    }

}
