<?php

namespace SHORTCODE_ADDONS_UPLOAD\Flip_carousel;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Flip_carousel extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1');
    }

    public function templates() {
        return array(
            '{"style":{"id":"327","type":"Devices","name":"Style 1","style_name":"Style_1","rawdata":"{\"sa_devices_type\":\"phone\",\"sa_devices_media_type\":\"image\",\"sa_devices_alignment-lap\":\"center\",\"sa_devices_alignment-tab\":\"center\",\"sa_devices_alignment-mob\":\"center\",\"sa_devices_max_width-lap-choices\":\"px\",\"sa_devices_max_width-lap-size\":\"259\",\"sa_devices_max_width-tab-choices\":\"px\",\"sa_devices_max_width-tab-size\":\"\",\"sa_devices_max_width-mob-choices\":\"px\",\"sa_devices_max_width-mob-size\":\"\",\"sa_devices_image-select\":\"media-library\",\"sa_devices_image-image\":\"https:\\\/\\\/www.oxilab.org\\\/wp-content\\\/uploads\\\/2019\\\/01\\\/macbook-apple-imac-computer-39284.jpeg\",\"sa_devices_image-url\":\"\",\"sa_video_box_video_link-select\":\"custom-url\",\"sa_video_box_video_link-media\":\"http:\\\/\\\/localhost\\\/wordpress\\\/wp-content\\\/uploads\\\/2020\\\/01\\\/videoplayback.mp4\",\"sa_video_box_video_link-url\":\"https:\\\/\\\/www.shortcode-addons.com\\\/wp-content\\\/uploads\\\/2020\\\/01\\\/videoplayback.mp4\",\"sa_video_box_controls\":\"yes\",\"sa_video_box_mute\":\"yes\",\"sa_video_box_self_autoplay\":\"yes\",\"sa_video_box_loop\":\"yes\",\"sa_video_box_start\":\"\",\"sa_video_box_end\":\"\",\"aspect_ratio\":\"169\",\"sa_video_box_image_switcher\":\"yes\",\"sa_video_box_image-select\":\"media-library\",\"sa_video_box_image-image\":\"http:\\\/\\\/localhost\\\/wordpress\\\/wp-content\\\/uploads\\\/2019\\\/09\\\/pppppp.jpg\",\"sa_video_box_image-url\":\"https:\\\/\\\/www.shortcode-addons.com\\\/wp-content\\\/uploads\\\/2020\\\/01\\\/placeholder.png\",\"sa_video_box_play_icon_switcher\":\"yes\",\"sa_video_box_icon_hor_position-lap-size\":\"43\",\"sa_video_box_icon_hor_position-tab-size\":\"50\",\"sa_video_box_icon_hor_position-mob-size\":\"50\",\"sa_video_box_icon_ver_position-lap-size\":\"40\",\"sa_video_box_icon_ver_position-tab-size\":\"50\",\"sa_video_box_icon_ver_position-mob-size\":\"50\",\"sa_device_override_color\":\"#b6f009\",\"sa_device_skin\":\"jetblack\",\"shortcode-addons-2-0-preview\":\"rgb(255, 255, 255)\",\"shortcode-addons-elements-name\":\"Devices\",\"shortcode-addons-elements-id\":\"327\",\"shortcode-addons-elements-template\":\"Style_1\",\"sa_device_override_style\":\"0\"}","stylesheet":".shortcode-addons-wrapper-327 .sa_addons_number_style_1 .sa_addons_number_icon{text-align: phone;}.shortcode-addons-wrapper-327 .oxi-addons-wrapper-device{text-align: center;}.shortcode-addons-wrapper-327 .oxi-addons-device-wrapper{max-width: 259px; width: 100%;}.shortcode-addons-wrapper-327 .oxi-addons-device{width: 100%;}.shortcode-addons-wrapper-327 .oxi-addons-device-container-style-3  .oxi-addons-device-play-icon-container{left: 43%;top: 40%;}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-327 .oxi-addons-wrapper-device{text-align: center;}.shortcode-addons-wrapper-327 .oxi-addons-device-container-style-3  .oxi-addons-device-play-icon-container{left: 50%;top: 50%;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-327 .oxi-addons-wrapper-device{text-align: center;}.shortcode-addons-wrapper-327 .oxi-addons-device-container-style-3  .oxi-addons-device-play-icon-container{left: 50%;top: 50%;}}","font_family":"[]"},"child":[{"id":"602","styleid":"327","rawdata":"null","stylesheet":""},{"id":"603","styleid":"327","rawdata":"null","stylesheet":""},{"id":"604","styleid":"327","rawdata":"null","stylesheet":""}]}',
            );
    }

}
