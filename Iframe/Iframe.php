<?php

namespace SHORTCODE_ADDONS_UPLOAD\Iframe;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Display post
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 *  
 */

use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Iframe extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1');
    }

    public function templates() {
        return array(
            '{"style":{"id":"24","type":"Iframe","name":"Style 1","style_name":"Style_1","rawdata":"{\"sa_iframe_style_1_text\":\"https:\\\/\\\/www.youtube.com\\\/embed\\\/jpTtoacIECc\",\"sa_iframe_style_1_width-lap-choices\":\"px\",\"sa_iframe_style_1_width-lap-size\":\"2000\",\"sa_iframe_style_1_width-tab-choices\":\"px\",\"sa_iframe_style_1_width-tab-size\":\"\",\"sa_iframe_style_1_width-mob-choices\":\"px\",\"sa_iframe_style_1_width-mob-size\":\"\",\"sa_iframe_style_1_auto_height\":\"no\",\"sa_iframe_style_1_height-lap-choices\":\"px\",\"sa_iframe_style_1_height-lap-size\":\"536\",\"sa_iframe_style_1_height-tab-choices\":\"px\",\"sa_iframe_style_1_height-tab-size\":\"\",\"sa_iframe_style_1_height-mob-choices\":\"px\",\"sa_iframe_style_1_height-mob-size\":\"\",\"sa_iframe_style_1_Padding-lap-choices\":\"px\",\"sa_iframe_style_1_Padding-lap-top\":\"\",\"sa_iframe_style_1_Padding-lap-right\":\"\",\"sa_iframe_style_1_Padding-lap-bottom\":\"\",\"sa_iframe_style_1_Padding-lap-left\":\"\",\"sa_iframe_style_1_Padding-tab-choices\":\"px\",\"sa_iframe_style_1_Padding-tab-top\":\"\",\"sa_iframe_style_1_Padding-tab-right\":\"\",\"sa_iframe_style_1_Padding-tab-bottom\":\"\",\"sa_iframe_style_1_Padding-tab-left\":\"\",\"sa_iframe_style_1_Padding-mob-choices\":\"px\",\"sa_iframe_style_1_Padding-mob-top\":\"\",\"sa_iframe_style_1_Padding-mob-right\":\"\",\"sa_iframe_style_1_Padding-mob-bottom\":\"\",\"sa_iframe_style_1_Padding-mob-left\":\"\",\"sa_iframe_style_1_animation-type\":\"bounce\",\"sa_iframe_style_1_animation-duration-size\":\"1000\",\"sa_iframe_style_1_animation-delay-size\":\"0\",\"sa_iframe_style_1_animation-offset-size\":\"100\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Iframe\",\"shortcode-addons-elements-id\":\"24\",\"shortcode-addons-elements-template\":\"Style_1\",\"sa_iframe_style_1_fullscreen\":\"0\",\"sa_iframe_style_1_scroll\":\"0\",\"sa_iframe_style_1_animation-looping\":\"0\"}","stylesheet":".shortcode-addons-wrapper-24 .sa-iframe-style-1-section {max-width:2000px;}.shortcode-addons-wrapper-24 .sa-iframe-style-1-section &gt; iframe{height:536px;}","font_family":"[]"},"child":[]}',
          );
    }

}
