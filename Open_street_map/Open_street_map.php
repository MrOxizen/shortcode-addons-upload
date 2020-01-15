<?php

namespace SHORTCODE_ADDONS_UPLOAD\Open_street_map;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Open_street_map extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1');
    }

    public function templates() {
        return array(
            '{"style":{"id":"429","type":"Google_map","name":"Style 1","style_name":"Style_1","rawdata":"{\"sa_gm_latitude\":\"23.821529\",\"sa_gm_Longitude\":\"90.419032\",\"sa_gm_api\":\"\",\"sa_gm_width-lap-choices\":\"%\",\"sa_gm_width-lap-size\":\"80\",\"sa_gm_width-tab-choices\":\"px\",\"sa_gm_width-tab-size\":\"\",\"sa_gm_width-mob-choices\":\"px\",\"sa_gm_width-mob-size\":\"\",\"sa_gm_height-lap-choices\":\"px\",\"sa_gm_height-lap-size\":\"400\",\"sa_gm_height-tab-choices\":\"px\",\"sa_gm_height-tab-size\":\"\",\"sa_gm_height-mob-choices\":\"px\",\"sa_gm_height-mob-size\":\"\",\"sa_gm_padding-lap-choices\":\"px\",\"sa_gm_padding-lap-top\":\"\",\"sa_gm_padding-lap-right\":\"\",\"sa_gm_padding-lap-bottom\":\"\",\"sa_gm_padding-lap-left\":\"\",\"sa_gm_padding-tab-choices\":\"px\",\"sa_gm_padding-tab-top\":\"\",\"sa_gm_padding-tab-right\":\"\",\"sa_gm_padding-tab-bottom\":\"\",\"sa_gm_padding-tab-left\":\"\",\"sa_gm_padding-mob-choices\":\"px\",\"sa_gm_padding-mob-top\":\"\",\"sa_gm_padding-mob-right\":\"\",\"sa_gm_padding-mob-bottom\":\"\",\"sa_gm_padding-mob-left\":\"\",\"sa_gm_margin-lap-choices\":\"px\",\"sa_gm_margin-lap-top\":\"\",\"sa_gm_margin-lap-right\":\"\",\"sa_gm_margin-lap-bottom\":\"\",\"sa_gm_margin-lap-left\":\"\",\"sa_gm_margin-tab-choices\":\"px\",\"sa_gm_margin-tab-top\":\"\",\"sa_gm_margin-tab-right\":\"\",\"sa_gm_margin-tab-bottom\":\"\",\"sa_gm_margin-tab-left\":\"\",\"sa_gm_margin-mob-choices\":\"px\",\"sa_gm_margin-mob-top\":\"\",\"sa_gm_margin-mob-right\":\"\",\"sa_gm_margin-mob-bottom\":\"\",\"sa_gm_margin-mob-left\":\"\",\"sa_gm_animation-type\":\"\",\"sa_gm_animation-duration-size\":\"1000\",\"sa_gm_animation-delay-size\":\"0\",\"sa_gm_animation-offset-size\":\"100\",\"sa_gm_animation-looping\":\"yes\",\"sa_gm_place_zoom\":\"13\",\"sa_gm_place_title\":\"Hello\",\"sa_gm_place_location_info\":\"Always set the map height explicitly to define the size of the div * element that contains the map.Always set the map height explicitly to define the size of the div * element that contains the map.Always set the map height explicitly to define the size of the div * element that contains the map.\",\"sa_gm_Location_text_typho-font\":\"Open+Sans\",\"sa_gm_Location_text_typho-size-lap-choices\":\"px\",\"sa_gm_Location_text_typho-size-lap-size\":\"12\",\"sa_gm_Location_text_typho-size-tab-choices\":\"px\",\"sa_gm_Location_text_typho-size-tab-size\":\"\",\"sa_gm_Location_text_typho-size-mob-choices\":\"px\",\"sa_gm_Location_text_typho-size-mob-size\":\"\",\"sa_gm_Location_text_typho-weight\":\"\",\"sa_gm_Location_text_typho-transform\":\"\",\"sa_gm_Location_text_typho-style\":\"\",\"sa_gm_Location_text_typho-decoration\":\"\",\"sa_gm_Location_text_typho-align-lap\":\"\",\"sa_gm_Location_text_typho-align-tab\":\"\",\"sa_gm_Location_text_typho-align-mob\":\"\",\"sa_gm_Location_text_typho-l-height-lap-choices\":\"px\",\"sa_gm_Location_text_typho-l-height-lap-size\":\"\",\"sa_gm_Location_text_typho-l-height-tab-choices\":\"px\",\"sa_gm_Location_text_typho-l-height-tab-size\":\"\",\"sa_gm_Location_text_typho-l-height-mob-choices\":\"px\",\"sa_gm_Location_text_typho-l-height-mob-size\":\"\",\"sa_gm_Location_text_typho-l-spacing-lap-choices\":\"px\",\"sa_gm_Location_text_typho-l-spacing-lap-size\":\"\",\"sa_gm_Location_text_typho-l-spacing-tab-choices\":\"px\",\"sa_gm_Location_text_typho-l-spacing-tab-size\":\"\",\"sa_gm_Location_text_typho-l-spacing-mob-choices\":\"px\",\"sa_gm_Location_text_typho-l-spacing-mob-size\":\"\",\"sa_gm_location_text_color\":\"#f20000\",\"sa_gm_location_width-lap-choices\":\"px\",\"sa_gm_location_width-lap-size\":\"300\",\"sa_gm_location_width-tab-choices\":\"px\",\"sa_gm_location_width-tab-size\":\"\",\"sa_gm_location_width-mob-choices\":\"px\",\"sa_gm_location_width-mob-size\":\"\",\"sa_gm_location_height-lap-choices\":\"px\",\"sa_gm_location_height-lap-size\":\"\",\"sa_gm_location_height-tab-choices\":\"px\",\"sa_gm_location_height-tab-size\":\"\",\"sa_gm_location_height-mob-choices\":\"px\",\"sa_gm_location_height-mob-size\":\"\",\"shortcode-addons-2-0-preview\":\"#FFF\",\"shortcode-addons-elements-name\":\"Google_map\",\"shortcode-addons-elements-id\":\"429\",\"shortcode-addons-elements-template\":\"Style_1\"}","stylesheet":".shortcode-addons-wrapper-429 .map-style1{max-width:80%;height:400px;}.shortcode-addons-wrapper-429 .oxi_add_gmap_location_info_body-style1{font-family:&quot;Open Sans&quot;;font-size: 12px;color:#f20000;}.shortcode-addons-wrapper-429 .oxi_add_gmap_location_info-style1{width:300px;}","font_family":"{\"Open+Sans\":\"Open+Sans\"}"},"child":[]}',
            );
    }

    public function image() {
        return array(
            'Style_1' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/07/1-Screenshot_2019-07-03-Available-Shortcodes-‹-admins-Blog-—-WordPress3.png',
            'Style_2' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/07/2-Screenshot_2019-07-03-Available-Shortcodes-‹-admins-Blog-—-WordPress2.png',
            'Style_3' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/07/3-Screenshot_2019-07-03-Available-Shortcodes-%E2%80%B9-admins-Blog-%E2%80%94-WordPress.png',
            'Style_4' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/07/4-Screenshot_2019-07-03-Available-Shortcodes-‹-admins-Blog-—-WordPress1.png',
        );
    }
    
    public function template_rendar($data = array()) {
        
        return __('<div class="oxi-addons-col-1" id="' . $data['style']['style_name'] . '">
                    <div class="oxi-addons-style-preview">
                        <div class="oxi-addons-style-preview-top oxi-addons-center" style="display: flex; justify-content: center;">
                            <img  src="' . $this->image()[$data['style']['style_name']] . '">
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

}
