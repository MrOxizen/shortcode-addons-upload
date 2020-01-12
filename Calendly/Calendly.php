<?php

namespace SHORTCODE_ADDONS_UPLOAD\Calendly;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Count_down
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Calendly extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1');
    }

    public function templates() {
        return array(
            '{"style":{"id":"624","type":"Calendly","name":"Style 1","style_name":"Style_1","rawdata":"{\"sa_calendly_username\":\"sumon_dev\",\"sa_calendly_time\":\"15min\",\"sa_calendly_padding-lap-choices\":\"px\",\"sa_calendly_padding-lap-top\":\"\",\"sa_calendly_padding-lap-right\":\"\",\"sa_calendly_padding-lap-bottom\":\"\",\"sa_calendly_padding-lap-left\":\"\",\"sa_calendly_padding-tab-choices\":\"px\",\"sa_calendly_padding-tab-top\":\"\",\"sa_calendly_padding-tab-right\":\"\",\"sa_calendly_padding-tab-bottom\":\"\",\"sa_calendly_padding-tab-left\":\"\",\"sa_calendly_padding-mob-choices\":\"px\",\"sa_calendly_padding-mob-top\":\"\",\"sa_calendly_padding-mob-right\":\"\",\"sa_calendly_padding-mob-bottom\":\"\",\"sa_calendly_padding-mob-left\":\"\",\"sa_calendly_margin-lap-choices\":\"px\",\"sa_calendly_margin-lap-top\":\"\",\"sa_calendly_margin-lap-right\":\"\",\"sa_calendly_margin-lap-bottom\":\"\",\"sa_calendly_margin-lap-left\":\"\",\"sa_calendly_margin-tab-choices\":\"px\",\"sa_calendly_margin-tab-top\":\"\",\"sa_calendly_margin-tab-right\":\"\",\"sa_calendly_margin-tab-bottom\":\"\",\"sa_calendly_margin-tab-left\":\"\",\"sa_calendly_margin-mob-choices\":\"px\",\"sa_calendly_margin-mob-top\":\"\",\"sa_calendly_margin-mob-right\":\"\",\"sa_calendly_margin-mob-bottom\":\"\",\"sa_calendly_margin-mob-left\":\"\",\"sa_calendly_height-lap-choices\":\"px\",\"sa_calendly_height-lap-size\":\"630\",\"sa_calendly_height-tab-choices\":\"px\",\"sa_calendly_height-tab-size\":\"\",\"sa_calendly_height-mob-choices\":\"px\",\"sa_calendly_height-mob-size\":\"\",\"sa_calendly_text_color\":\"#856660\",\"sa_calendly_button_color\":\"#54160f\",\"sa_calendly_bg_color\":\"#3d1a1a\",\"shortcode-addons-2-0-preview\":\"#FFF\",\"shortcode-addons-elements-name\":\"Calendly\",\"shortcode-addons-elements-id\":\"624\",\"shortcode-addons-elements-template\":\"Style_1\",\"sa_calendly_details\":\"0\"}","stylesheet":".shortcode-addons-wrapper-624 .oxi_addons_calendly .calendly-inline-widget{padding: px px px px;height: 630px;}.shortcode-addons-wrapper-624 .oxi_addons_calendly{padding: px px px px;}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-624 .oxi_addons_calendly .calendly-inline-widget{padding: px px px px;}.shortcode-addons-wrapper-624 .oxi_addons_calendly{padding: px px px px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-624 .oxi_addons_calendly .calendly-inline-widget{padding: px px px px;}.shortcode-addons-wrapper-624 .oxi_addons_calendly{padding: px px px px;}}","font_family":"[]"},"child":[{"id":"1296","styleid":"624","rawdata":"null","stylesheet":""},{"id":"1297","styleid":"624","rawdata":"null","stylesheet":""},{"id":"1298","styleid":"624","rawdata":"null","stylesheet":""},{"id":"1299","styleid":"624","rawdata":"null","stylesheet":""}]}',
          );
    }

}
