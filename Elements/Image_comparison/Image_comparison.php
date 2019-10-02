<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Image_comparison;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Image_comparison extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1', 'Style_2');
    }

    public function templates() {
        return array(
            '{"style":{"id":"7","type":"Image_comparison","name":"Style 01","style_name":"Style_1","rawdata":"{\"sa-image-comparison-body-width-lap-choices\":\"px\",\"sa-image-comparison-body-width-lap-size\":\"1000\",\"sa-image-comparison-body-width-tab-choices\":\"px\",\"sa-image-comparison-body-width-tab-size\":\"1000\",\"sa-image-comparison-body-width-mob-choices\":\"px\",\"sa-image-comparison-body-width-mob-size\":\"1000\",\"sa-image-comparison-body-offset\":\"0.5\",\"sa_image-comparison_margin-lap-choices\":\"px\",\"sa_image-comparison_margin-lap-top\":\"\",\"sa_image-comparison_margin-lap-right\":\"\",\"sa_image-comparison_margin-lap-bottom\":\"\",\"sa_image-comparison_margin-lap-left\":\"\",\"sa_image-comparison_margin-tab-choices\":\"px\",\"sa_image-comparison_margin-tab-top\":\"\",\"sa_image-comparison_margin-tab-right\":\"\",\"sa_image-comparison_margin-tab-bottom\":\"\",\"sa_image-comparison_margin-tab-left\":\"\",\"sa_image-comparison_margin-mob-choices\":\"px\",\"sa_image-comparison_margin-mob-top\":\"\",\"sa_image-comparison_margin-mob-right\":\"\",\"sa_image-comparison_margin-mob-bottom\":\"\",\"sa_image-comparison_margin-mob-left\":\"\",\"sa_image-comparison_position\":\"true\",\"sa-image-comparison-handle-color\":\"#ffffff\",\"sa-image-comparison-image-one-select\":\"media-library\",\"sa-image-comparison-image-one-image\":\"https:\\\/\\\/www.oxilab.org\\\/wp-content\\\/uploads\\\/2019\\\/04\\\/pexels-photo-210019-1.png\",\"sa-image-comparison-image-one-url\":\"#asdas\",\"sa-image-comparison-image-two-select\":\"media-library\",\"sa-image-comparison-image-two-image\":\"https:\\\/\\\/www.oxilab.org\\\/wp-content\\\/uploads\\\/2019\\\/04\\\/pexels-photo-210019.png\",\"sa-image-comparison-image-two-url\":\"#asdas\",\"sa_image_compersion_overlay_controler\":\"true\",\"sa-image-comparison-before-text\":\"Heading\",\"sa-image-comparison-after-text\":\"Heading\",\"sa-image-comparison-typograpy-font\":\"\",\"sa-image-comparison-typograpy-size-lap-choices\":\"px\",\"sa-image-comparison-typograpy-size-lap-size\":\"\",\"sa-image-comparison-typograpy-size-tab-choices\":\"px\",\"sa-image-comparison-typograpy-size-tab-size\":\"\",\"sa-image-comparison-typograpy-size-mob-choices\":\"px\",\"sa-image-comparison-typograpy-size-mob-size\":\"\",\"sa-image-comparison-typograpy-weight\":\"\",\"sa-image-comparison-typograpy-transform\":\"\",\"sa-image-comparison-typograpy-style\":\"\",\"sa-image-comparison-typograpy-decoration\":\"\",\"sa-image-comparison-typograpy-l-height-lap-choices\":\"px\",\"sa-image-comparison-typograpy-l-height-lap-size\":\"\",\"sa-image-comparison-typograpy-l-height-tab-choices\":\"px\",\"sa-image-comparison-typograpy-l-height-tab-size\":\"\",\"sa-image-comparison-typograpy-l-height-mob-choices\":\"px\",\"sa-image-comparison-typograpy-l-height-mob-size\":\"\",\"sa-image-comparison-typograpy-l-spacing-lap-choices\":\"px\",\"sa-image-comparison-typograpy-l-spacing-lap-size\":\"\",\"sa-image-comparison-typograpy-l-spacing-tab-choices\":\"px\",\"sa-image-comparison-typograpy-l-spacing-tab-size\":\"\",\"sa-image-comparison-typograpy-l-spacing-mob-choices\":\"px\",\"sa-image-comparison-typograpy-l-spacing-mob-size\":\"\",\"sa-image-comparison-text-color\":\"#ffffff\",\"sa-image-comparison-overlay-bg-color\":\"rgba(207, 67, 67, 0.77)\",\"sa-image-comparison-overlay-text-shadow-color\":\"#ffffff\",\"sa-image-comparison-overlay-text-shadow-blur-size\":\"0\",\"sa-image-comparison-overlay-text-shadow-horizontal-size\":\"0\",\"sa-image-comparison-overlay-text-shadow-vertical-size\":\"0\",\"sa-image-comparison-overlay-button-border-radius-lap-choices\":\"px\",\"sa-image-comparison-overlay-button-border-radius-lap-top\":\"\",\"sa-image-comparison-overlay-button-border-radius-lap-right\":\"\",\"sa-image-comparison-overlay-button-border-radius-lap-bottom\":\"\",\"sa-image-comparison-overlay-button-border-radius-lap-left\":\"\",\"sa-image-comparison-overlay-button-border-radius-tab-choices\":\"px\",\"sa-image-comparison-overlay-button-border-radius-tab-top\":\"\",\"sa-image-comparison-overlay-button-border-radius-tab-right\":\"\",\"sa-image-comparison-overlay-button-border-radius-tab-bottom\":\"\",\"sa-image-comparison-overlay-button-border-radius-tab-left\":\"\",\"sa-image-comparison-overlay-button-border-radius-mob-choices\":\"px\",\"sa-image-comparison-overlay-button-border-radius-mob-top\":\"\",\"sa-image-comparison-overlay-button-border-radius-mob-right\":\"\",\"sa-image-comparison-overlay-button-border-radius-mob-bottom\":\"\",\"sa-image-comparison-overlay-button-border-radius-mob-left\":\"\",\"sa-image-comparison-overlay-button-padding-lap-choices\":\"px\",\"sa-image-comparison-overlay-button-padding-lap-top\":\"\",\"sa-image-comparison-overlay-button-padding-lap-right\":\"\",\"sa-image-comparison-overlay-button-padding-lap-bottom\":\"\",\"sa-image-comparison-overlay-button-padding-lap-left\":\"\",\"sa-image-comparison-overlay-button-padding-tab-choices\":\"px\",\"sa-image-comparison-overlay-button-padding-tab-top\":\"\",\"sa-image-comparison-overlay-button-padding-tab-right\":\"\",\"sa-image-comparison-overlay-button-padding-tab-bottom\":\"\",\"sa-image-comparison-overlay-button-padding-tab-left\":\"\",\"sa-image-comparison-overlay-button-padding-mob-choices\":\"px\",\"sa-image-comparison-overlay-button-padding-mob-top\":\"\",\"sa-image-comparison-overlay-button-padding-mob-right\":\"\",\"sa-image-comparison-overlay-button-padding-mob-bottom\":\"\",\"sa-image-comparison-overlay-button-padding-mob-left\":\"\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Image_comparison\",\"shortcode-addons-elements-id\":\"7\",\"shortcode-addons-elements-template\":\"Style_1\"}","stylesheet":".shortcode-addons-wrapper-7 .oxi-addons-main-wrapper-image-comparison .oxi-addons-main{max-width:1000px;}.shortcode-addons-wrapper-7 .oxi-addons-align-btn1{text-align:center;}.shortcode-addons-wrapper-7 .oxi-addons-main-wrapper-image-comparison .twentytwenty-handle{border-color: #ffffff;}.shortcode-addons-wrapper-7 .oxi-addons-main-wrapper-image-comparison .twentytwenty-up-arrow{border-bottom-color: #ffffff;}.shortcode-addons-wrapper-7 .oxi-addons-main-wrapper-image-comparison .twentytwenty-down-arrow{border-top-color: #ffffff;}.shortcode-addons-wrapper-7 .oxi-addons-main-wrapper-image-comparison .twentytwenty-left-arrow{border-right-color: #ffffff;}.shortcode-addons-wrapper-7 .oxi-addons-main-wrapper-image-comparison .twentytwenty-right-arrow{border-left-color: #ffffff;}.shortcode-addons-wrapper-7 .oxi-addons-main-wrapper-image-comparison .twentytwenty-horizontal .twentytwenty-handle::before, .shortcode-addons-wrapper-7 .oxi-addons-main-wrapper-image-comparison .twentytwenty-horizontal .twentytwenty-handle::after, .shortcode-addons-wrapper-7 .oxi-addons-main-wrapper-image-comparison .twentytwenty-vertical .twentytwenty-handle::before, .shortcode-addons-wrapper-7 .oxi-addons-main-wrapper-image-comparison .twentytwenty-vertical .twentytwenty-handle::after{background: #ffffff;}.shortcode-addons-wrapper-7 .oxi-addons-main-wrapper-image-comparison .twentytwenty-before-label::before, .shortcode-addons-wrapper-7 .oxi-addons-main-wrapper-image-comparison .twentytwenty-after-label::before, .shortcode-addons-wrapper-7 .oxi-addons-main-wrapper-image-comparison .twentytwenty-before-label::before,  .shortcode-addons-wrapper-7 .oxi-addons-main-wrapper-image-comparison .twentytwenty-after-label::before{color: #ffffff;background: rgba(207, 67, 67, 0.77);}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-7 .oxi-addons-main-wrapper-image-comparison .oxi-addons-main{max-width:1000px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-7 .oxi-addons-main-wrapper-image-comparison .oxi-addons-main{max-width:1000px;}}","font_family":"[]"},"child":[]}',
            '{"style":{"id":"8","type":"Image_comparison","name":"Style 02","style_name":"Style_2","rawdata":"{\"sa-image-comparison-body-width-lap-choices\":\"px\",\"sa-image-comparison-body-width-lap-size\":\"1000\",\"sa-image-comparison-body-width-tab-choices\":\"px\",\"sa-image-comparison-body-width-tab-size\":\"1000\",\"sa-image-comparison-body-width-mob-choices\":\"px\",\"sa-image-comparison-body-width-mob-size\":\"1000\",\"sa-image-comparison-body-offset\":\"0.5\",\"sa_image-comparison_margin-lap-choices\":\"px\",\"sa_image-comparison_margin-lap-top\":\"\",\"sa_image-comparison_margin-lap-right\":\"\",\"sa_image-comparison_margin-lap-bottom\":\"\",\"sa_image-comparison_margin-lap-left\":\"\",\"sa_image-comparison_margin-tab-choices\":\"px\",\"sa_image-comparison_margin-tab-top\":\"\",\"sa_image-comparison_margin-tab-right\":\"\",\"sa_image-comparison_margin-tab-bottom\":\"\",\"sa_image-comparison_margin-tab-left\":\"\",\"sa_image-comparison_margin-mob-choices\":\"px\",\"sa_image-comparison_margin-mob-top\":\"\",\"sa_image-comparison_margin-mob-right\":\"\",\"sa_image-comparison_margin-mob-bottom\":\"\",\"sa_image-comparison_margin-mob-left\":\"\",\"sa-image-comparison-handle-bg-color\":\"rgba(168, 57, 57, 1)\",\"sa-image-comparison-handle-color\":\"#ffffff\",\"sa-image-comparison-handle-width-lap-size\":\"50\",\"sa-image-comparison-handle-width-tab-size\":\"50\",\"sa-image-comparison-handle-width-mob-size\":\"50\",\"sa-image-comparison-handle-width-lap-choices\":\"px\",\"sa-image-comparison-handle-width-tab-choices\":\"px\",\"sa-image-comparison-handle-width-mob-choices\":\"px\",\"sa-image-comparison-image-one-select\":\"media-library\",\"sa-image-comparison-image-one-image\":\"https:\\\/\\\/www.oxilab.org\\\/wp-content\\\/uploads\\\/2019\\\/04\\\/pexels-photo-210019-3.png\",\"sa-image-comparison-image-one-url\":\"#asdas\",\"sa-image-comparison-image-two-select\":\"media-library\",\"sa-image-comparison-image-two-image\":\"https:\\\/\\\/www.oxilab.org\\\/wp-content\\\/uploads\\\/2019\\\/04\\\/pexels-photo-210019-2.png\",\"sa-image-comparison-image-two-url\":\"#asdas\",\"sa_image_compersion_button_controler\":\"true\",\"sa-image-comparison-before-text\":\"Before\",\"sa-image-comparison-after-text\":\"After\",\"sa-image-comparison-typograpy-font\":\"\",\"sa-image-comparison-typograpy-size-lap-choices\":\"px\",\"sa-image-comparison-typograpy-size-lap-size\":\"\",\"sa-image-comparison-typograpy-size-tab-choices\":\"px\",\"sa-image-comparison-typograpy-size-tab-size\":\"\",\"sa-image-comparison-typograpy-size-mob-choices\":\"px\",\"sa-image-comparison-typograpy-size-mob-size\":\"\",\"sa-image-comparison-typograpy-weight\":\"\",\"sa-image-comparison-typograpy-transform\":\"\",\"sa-image-comparison-typograpy-style\":\"\",\"sa-image-comparison-typograpy-decoration\":\"\",\"sa-image-comparison-typograpy-l-height-lap-choices\":\"px\",\"sa-image-comparison-typograpy-l-height-lap-size\":\"\",\"sa-image-comparison-typograpy-l-height-tab-choices\":\"px\",\"sa-image-comparison-typograpy-l-height-tab-size\":\"\",\"sa-image-comparison-typograpy-l-height-mob-choices\":\"px\",\"sa-image-comparison-typograpy-l-height-mob-size\":\"\",\"sa-image-comparison-typograpy-l-spacing-lap-choices\":\"px\",\"sa-image-comparison-typograpy-l-spacing-lap-size\":\"\",\"sa-image-comparison-typograpy-l-spacing-tab-choices\":\"px\",\"sa-image-comparison-typograpy-l-spacing-tab-size\":\"\",\"sa-image-comparison-typograpy-l-spacing-mob-choices\":\"px\",\"sa-image-comparison-typograpy-l-spacing-mob-size\":\"\",\"sa-image-comparison-text-color\":\"#ffffff\",\"sa-image-comparison-button-bg-color\":\"rgba(237, 35, 35, 0.73)\",\"sa-image-comparison-button-text-shadow-color\":\"#ffffff\",\"sa-image-comparison-button-text-shadow-blur-size\":\"0\",\"sa-image-comparison-button-text-shadow-horizontal-size\":\"0\",\"sa-image-comparison-button-text-shadow-vertical-size\":\"0\",\"sa-image-comparison-button-button-border-radius-lap-choices\":\"px\",\"sa-image-comparison-button-button-border-radius-lap-top\":\"\",\"sa-image-comparison-button-button-border-radius-lap-right\":\"\",\"sa-image-comparison-button-button-border-radius-lap-bottom\":\"\",\"sa-image-comparison-button-button-border-radius-lap-left\":\"\",\"sa-image-comparison-button-button-border-radius-tab-choices\":\"px\",\"sa-image-comparison-button-button-border-radius-tab-top\":\"\",\"sa-image-comparison-button-button-border-radius-tab-right\":\"\",\"sa-image-comparison-button-button-border-radius-tab-bottom\":\"\",\"sa-image-comparison-button-button-border-radius-tab-left\":\"\",\"sa-image-comparison-button-button-border-radius-mob-choices\":\"px\",\"sa-image-comparison-button-button-border-radius-mob-top\":\"\",\"sa-image-comparison-button-button-border-radius-mob-right\":\"\",\"sa-image-comparison-button-button-border-radius-mob-bottom\":\"\",\"sa-image-comparison-button-button-border-radius-mob-left\":\"\",\"sa-image-comparison-button-button-padding-lap-choices\":\"px\",\"sa-image-comparison-button-button-padding-lap-top\":\"\",\"sa-image-comparison-button-button-padding-lap-right\":\"\",\"sa-image-comparison-button-button-padding-lap-bottom\":\"\",\"sa-image-comparison-button-button-padding-lap-left\":\"\",\"sa-image-comparison-button-button-padding-tab-choices\":\"px\",\"sa-image-comparison-button-button-padding-tab-top\":\"\",\"sa-image-comparison-button-button-padding-tab-right\":\"\",\"sa-image-comparison-button-button-padding-tab-bottom\":\"\",\"sa-image-comparison-button-button-padding-tab-left\":\"\",\"sa-image-comparison-button-button-padding-mob-choices\":\"px\",\"sa-image-comparison-button-button-padding-mob-top\":\"\",\"sa-image-comparison-button-button-padding-mob-right\":\"\",\"sa-image-comparison-button-button-padding-mob-bottom\":\"\",\"sa-image-comparison-button-button-padding-mob-left\":\"\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Image_comparison\",\"shortcode-addons-elements-id\":\"8\",\"shortcode-addons-elements-template\":\"Style_2\"}","stylesheet":".shortcode-addons-wrapper-8 .oxi-addons-main-wrapper-image-comparison-style-2 .oxi-addons-main{width:1000px;}.shortcode-addons-wrapper-8 .oxi-addons-main-wrapper-image-comparison-style-2 .beer-handle{background: rgba(168, 57, 57, 1);width:50px;height:50px;}.shortcode-addons-wrapper-8 .oxi-addons-main-wrapper-image-comparison-style-2 .beer-range:focus~.beer-handle{background: rgba(168, 57, 57, 1);}.shortcode-addons-wrapper-8 .oxi-addons-main-wrapper-image-comparison-style-2 .beer-handle::after, .shortcode-addons-wrapper-8 .oxi-addons-main-wrapper-image-comparison-style-2 .beer-handle::before{color: #ffffff;}.shortcode-addons-wrapper-8 .oxi-addons-main-wrapper-image-comparison-style-2 .beer-reveal[data-beer-label]::after, .shortcode-addons-wrapper-8 .oxi-addons-main-wrapper-image-comparison-style-2 .beer-slider[data-beer-label]::after{color: #ffffff;background: rgba(237, 35, 35, 0.73);}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-8 .oxi-addons-main-wrapper-image-comparison-style-2 .oxi-addons-main{width:1000px;}.shortcode-addons-wrapper-8 .oxi-addons-main-wrapper-image-comparison-style-2 .beer-handle{width:50px;height:50px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-8 .oxi-addons-main-wrapper-image-comparison-style-2 .oxi-addons-main{width:1000px;}.shortcode-addons-wrapper-8 .oxi-addons-main-wrapper-image-comparison-style-2 .beer-handle{width:50px;height:50px;}}","font_family":"[]"},"child":[]}',
            '{"style":{"id":"9","type":"Image_comparison","name":"Style 03","style_name":"Style_3","rawdata":"{\"sa-image-comparison-body-width-lap-choices\":\"px\",\"sa-image-comparison-body-width-lap-size\":\"575\",\"sa-image-comparison-body-width-tab-choices\":\"px\",\"sa-image-comparison-body-width-tab-size\":\"1000\",\"sa-image-comparison-body-width-mob-choices\":\"px\",\"sa-image-comparison-body-width-mob-size\":\"1000\",\"sa_image-comparison_margin-lap-choices\":\"px\",\"sa_image-comparison_margin-lap-top\":\"\",\"sa_image-comparison_margin-lap-right\":\"\",\"sa_image-comparison_margin-lap-bottom\":\"\",\"sa_image-comparison_margin-lap-left\":\"\",\"sa_image-comparison_margin-tab-choices\":\"px\",\"sa_image-comparison_margin-tab-top\":\"\",\"sa_image-comparison_margin-tab-right\":\"\",\"sa_image-comparison_margin-tab-bottom\":\"\",\"sa_image-comparison_margin-tab-left\":\"\",\"sa_image-comparison_margin-mob-choices\":\"px\",\"sa_image-comparison_margin-mob-top\":\"\",\"sa_image-comparison_margin-mob-right\":\"\",\"sa_image-comparison_margin-mob-bottom\":\"\",\"sa_image-comparison_margin-mob-left\":\"\",\"sa_image_comparison_data\":{\"rep1\":{\"sa_image_accordion_title\":\"First Image\",\"sa_image_accordion_image-select\":\"media-library\",\"sa_image_accordion_image-image\":\"https:\\\/\\\/www.oxilab.org\\\/wp-content\\\/uploads\\\/2019\\\/04\\\/pexels-photo-712618-3.png\",\"sa_image_accordion_image-url\":\"#asdas\"},\"rep2\":{\"sa_image_accordion_title\":\"Second Image\",\"sa_image_accordion_image-select\":\"media-library\",\"sa_image_accordion_image-image\":\"https:\\\/\\\/www.oxilab.org\\\/wp-content\\\/uploads\\\/2019\\\/04\\\/pexels-photo-712618-2.png\",\"sa_image_accordion_image-url\":\"#asdas\"},\"rep3\":{\"sa_image_accordion_title\":\"Third Image\",\"sa_image_accordion_image-select\":\"media-library\",\"sa_image_accordion_image-image\":\"https:\\\/\\\/www.oxilab.org\\\/wp-content\\\/uploads\\\/2019\\\/04\\\/pexels-photo-712618-1.png\",\"sa_image_accordion_image-url\":\"#asdas\"},\"rep6\":{\"sa_image_accordion_title\":\"Image Title\",\"sa_image_accordion_image-select\":\"media-library\",\"sa_image_accordion_image-image\":\"https:\\\/\\\/www.oxilab.org\\\/wp-content\\\/uploads\\\/2019\\\/04\\\/pexels-photo-712618.png\",\"sa_image_accordion_image-url\":\"#asdas\"}},\"sa_image_comparison_datanm\":\"6\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Image_comparison\",\"shortcode-addons-elements-id\":\"9\",\"shortcode-addons-elements-template\":\"Style_3\"}","stylesheet":".shortcode-addons-wrapper-9 .oxi-addons-main-wrapper-image-comparison-style-3 .oxi-addons-main{width:575px;}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-9 .oxi-addons-main-wrapper-image-comparison-style-3 .oxi-addons-main{width:1000px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-9 .oxi-addons-main-wrapper-image-comparison-style-3 .oxi-addons-main{width:1000px;}}","font_family":"[]"},"child":[]}',
            '{"style":{"id":"11","type":"Image_comparison","name":"Style 04","style_name":"Style_4","rawdata":"{\"sa-image-comparison-body-width-lap-choices\":\"px\",\"sa-image-comparison-body-width-lap-size\":\"806\",\"sa-image-comparison-body-width-tab-choices\":\"px\",\"sa-image-comparison-body-width-tab-size\":\"800\",\"sa-image-comparison-body-width-mob-choices\":\"px\",\"sa-image-comparison-body-width-mob-size\":\"800\",\"sa-image-comparison-hover-width-size\":\"10\",\"sa-image-comparison-hover-transition-size\":\"3.5\",\"sa_image-comparison_margin-lap-choices\":\"px\",\"sa_image-comparison_margin-lap-top\":\"92\",\"sa_image-comparison_margin-lap-right\":\"92\",\"sa_image-comparison_margin-lap-bottom\":\"92\",\"sa_image-comparison_margin-lap-left\":\"92\",\"sa_image-comparison_margin-tab-choices\":\"px\",\"sa_image-comparison_margin-tab-top\":\"\",\"sa_image-comparison_margin-tab-right\":\"\",\"sa_image-comparison_margin-tab-bottom\":\"\",\"sa_image-comparison_margin-tab-left\":\"\",\"sa_image-comparison_margin-mob-choices\":\"px\",\"sa_image-comparison_margin-mob-top\":\"\",\"sa_image-comparison_margin-mob-right\":\"\",\"sa_image-comparison_margin-mob-bottom\":\"\",\"sa_image-comparison_margin-mob-left\":\"\",\"sa-image-comparison-image-one-select\":\"media-library\",\"sa-image-comparison-image-one-image\":\"https:\\\/\\\/images.pexels.com\\\/photos\\\/237018\\\/pexels-photo-237018.jpeg?cs=srgb&dl=asphalt-beauty-colorful-237018.jpg&fm=jpg\",\"sa-image-comparison-image-one-url\":\"#asdas\",\"sa-image-comparison-image-two-select\":\"media-library\",\"sa-image-comparison-image-two-image\":\"https:\\\/\\\/s3-ap-northeast-1.amazonaws.com\\\/cdn.travel-star.jp\\\/production\\\/imgs\\\/images\\\/000\\\/200\\\/994\\\/original.?1548999161\",\"sa-image-comparison-image-two-url\":\"#asdas\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Image_comparison\",\"shortcode-addons-elements-id\":\"11\",\"shortcode-addons-elements-template\":\"Style_4\"}","stylesheet":".shortcode-addons-wrapper-11 .oxi_addons_image_style_4_box_body{max-width:806px;}.shortcode-addons-wrapper-11 .oxi-addons-main-wrapper-image-comparison-style-2 .oxi-addons-main{width:10%;}.shortcode-addons-wrapper-11 .oxi_addons_image_style_4_box .oxi_addons_font_view_img{transition:all 3.5s ease-in-out;}.shortcode-addons-wrapper-11 .oxi_addons_image_style_4_box{padding: 92px 92px 92px 92px;}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-11 .oxi_addons_image_style_4_box_body{max-width:800px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-11 .oxi_addons_image_style_4_box_body{max-width:800px;}}","font_family":"[]"},"child":[]}',
          );
    }

}