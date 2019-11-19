<?php

namespace SHORTCODE_ADDONS_UPLOAD\Animated_text;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Animated_text extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1', 'Style_2');
    }

    public function templates() {
        return array(
              '{"style":{"id":"166","type":"Animated_text","name":"Style 1","style_name":"Style_1","rawdata":"{\"sa_animated_text_data\":{\"rep5\":{\"sa_animated_text_title\":\"This is how bubbleText works.\"},\"rep6\":{\"sa_animated_text_title\":\"Animating each letter in a friendly way\"},\"rep7\":{\"sa_animated_text_title\":\"Thanks for seeing it :)\"},\"rep8\":{\"sa_animated_text_title\":\"It really matters to me ...\"},\"rep9\":{\"sa_animated_text_title\":\"Regards,\"},\"rep10\":{\"sa_animated_text_title\":\"Guedes, Washington L.\"}},\"sa_animated_text_datanm\":\"10\",\"sa-animated_text_speed-size\":\"266\",\"sa-animated_text_letter_speed-size\":\"68\",\"sa_animated_text\":\"Hello World\",\"sa_animated_text_typo-font\":\"\",\"sa_animated_text_typo-size-lap-choices\":\"px\",\"sa_animated_text_typo-size-lap-size\":\"\",\"sa_animated_text_typo-size-tab-choices\":\"px\",\"sa_animated_text_typo-size-tab-size\":\"\",\"sa_animated_text_typo-size-mob-choices\":\"px\",\"sa_animated_text_typo-size-mob-size\":\"\",\"sa_animated_text_typo-weight\":\"\",\"sa_animated_text_typo-transform\":\"\",\"sa_animated_text_typo-style\":\"\",\"sa_animated_text_typo-decoration\":\"\",\"sa_animated_text_typo-align-lap\":\"\",\"sa_animated_text_typo-align-tab\":\"\",\"sa_animated_text_typo-align-mob\":\"\",\"sa_animated_text_typo-l-height-lap-choices\":\"px\",\"sa_animated_text_typo-l-height-lap-size\":\"\",\"sa_animated_text_typo-l-height-tab-choices\":\"px\",\"sa_animated_text_typo-l-height-tab-size\":\"\",\"sa_animated_text_typo-l-height-mob-choices\":\"px\",\"sa_animated_text_typo-l-height-mob-size\":\"\",\"sa_animated_text_typo-l-spacing-lap-choices\":\"px\",\"sa_animated_text_typo-l-spacing-lap-size\":\"\",\"sa_animated_text_typo-l-spacing-tab-choices\":\"px\",\"sa_animated_text_typo-l-spacing-tab-size\":\"\",\"sa_animated_text_typo-l-spacing-mob-choices\":\"px\",\"sa_animated_text_typo-l-spacing-mob-size\":\"\",\"sa_animated_text_color\":\"#787878\",\"sa_animated_text_shadow-color\":\"#ffffff\",\"sa_animated_text_shadow-blur-size\":\"0\",\"sa_animated_text_shadow-horizontal-size\":\"0\",\"sa_animated_text_shadow-vertical-size\":\"0\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Animated_text\",\"shortcode-addons-elements-id\":\"166\",\"shortcode-addons-elements-template\":\"Style_1\"}","stylesheet":".shortcode-addons-wrapper-166 .oxi-addons-main-wrapper-style-1 .oxi-addons-progress-bar{padding:266px;padding:68px;}.shortcode-addons-wrapper-166 .oxi-addons-main-wrapper-style-1 .oxi-addons-progress-title{color: #787878;}","font_family":"[]"},"child":[{"id":"363","styleid":"166","rawdata":"null","stylesheet":""},{"id":"364","styleid":"166","rawdata":"null","stylesheet":""},{"id":"365","styleid":"166","rawdata":"null","stylesheet":""}]}',
              '{"style":{"id":"170","type":"Animated_text","name":"Style 2","style_name":"Style_2","rawdata":"{\"sa_animated_text_data_2\":{\"rep1\":{\"sa_animated_text_title\":\"This is how bubbleText works.\"},\"rep2\":{\"sa_animated_text_title\":\"Animating each letter in a friendly way\"},\"rep3\":{\"sa_animated_text_title\":\"Thanks for seeing it :)\"}},\"sa_animated_text_data_2nm\":\"3\",\"sa-animated_text_delay-size\":\"2000\",\"sa-animated_text_letter_suffle-size\":\"129\",\"sa_animated_text\":\"Hello World\",\"sa_animated_text_typo-font\":\"\",\"sa_animated_text_typo-size-lap-choices\":\"px\",\"sa_animated_text_typo-size-lap-size\":\"40\",\"sa_animated_text_typo-size-tab-choices\":\"px\",\"sa_animated_text_typo-size-tab-size\":\"\",\"sa_animated_text_typo-size-mob-choices\":\"px\",\"sa_animated_text_typo-size-mob-size\":\"\",\"sa_animated_text_typo-weight\":\"\",\"sa_animated_text_typo-transform\":\"\",\"sa_animated_text_typo-style\":\"\",\"sa_animated_text_typo-decoration\":\"\",\"sa_animated_text_typo-align-lap\":\"\",\"sa_animated_text_typo-align-tab\":\"\",\"sa_animated_text_typo-align-mob\":\"\",\"sa_animated_text_typo-l-height-lap-choices\":\"px\",\"sa_animated_text_typo-l-height-lap-size\":\"\",\"sa_animated_text_typo-l-height-tab-choices\":\"px\",\"sa_animated_text_typo-l-height-tab-size\":\"\",\"sa_animated_text_typo-l-height-mob-choices\":\"px\",\"sa_animated_text_typo-l-height-mob-size\":\"\",\"sa_animated_text_typo-l-spacing-lap-choices\":\"px\",\"sa_animated_text_typo-l-spacing-lap-size\":\"\",\"sa_animated_text_typo-l-spacing-tab-choices\":\"px\",\"sa_animated_text_typo-l-spacing-tab-size\":\"\",\"sa_animated_text_typo-l-spacing-mob-choices\":\"px\",\"sa_animated_text_typo-l-spacing-mob-size\":\"\",\"sa_animated_text_color\":\"#0ab08f\",\"sa_animated_text_shadow-color\":\"rgba(255, 255, 255, 1)\",\"sa_animated_text_shadow-blur-size\":\"\",\"sa_animated_text_shadow-horizontal-size\":\"\",\"sa_animated_text_shadow-vertical-size\":\"\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Animated_text\",\"shortcode-addons-elements-id\":\"170\",\"shortcode-addons-elements-template\":\"Style_2\"}","stylesheet":".shortcode-addons-wrapper-170 .oxi-addons-AT-style-2 .oxi-animated-style-2{font-size: 40px;color: #0ab08f;}","font_family":"[]"},"child":[{"id":"375","styleid":"170","rawdata":"null","stylesheet":""},{"id":"376","styleid":"170","rawdata":"null","stylesheet":""},{"id":"377","styleid":"170","rawdata":"null","stylesheet":""}]}',
              '{"style":{"id":"171","type":"Animated_text","name":"Style 3","style_name":"Style_3","rawdata":"{\"sa-animated_text_speed-size\":\"3\",\"sa_animated_text_main_text\":\"WELCOME IN\",\"sa_animated_text_main_text_typo-font\":\"\",\"sa_animated_text_main_text_typo-size-lap-choices\":\"px\",\"sa_animated_text_main_text_typo-size-lap-size\":\"\",\"sa_animated_text_main_text_typo-size-tab-choices\":\"px\",\"sa_animated_text_main_text_typo-size-tab-size\":\"\",\"sa_animated_text_main_text_typo-size-mob-choices\":\"px\",\"sa_animated_text_main_text_typo-size-mob-size\":\"\",\"sa_animated_text_main_text_typo-weight\":\"\",\"sa_animated_text_main_text_typo-transform\":\"\",\"sa_animated_text_main_text_typo-style\":\"\",\"sa_animated_text_main_text_typo-decoration\":\"\",\"sa_animated_text_main_text_typo-align-lap\":\"\",\"sa_animated_text_main_text_typo-align-tab\":\"\",\"sa_animated_text_main_text_typo-align-mob\":\"\",\"sa_animated_text_main_text_typo-l-height-lap-choices\":\"px\",\"sa_animated_text_main_text_typo-l-height-lap-size\":\"\",\"sa_animated_text_main_text_typo-l-height-tab-choices\":\"px\",\"sa_animated_text_main_text_typo-l-height-tab-size\":\"\",\"sa_animated_text_main_text_typo-l-height-mob-choices\":\"px\",\"sa_animated_text_main_text_typo-l-height-mob-size\":\"\",\"sa_animated_text_main_text_typo-l-spacing-lap-choices\":\"px\",\"sa_animated_text_main_text_typo-l-spacing-lap-size\":\"\",\"sa_animated_text_main_text_typo-l-spacing-tab-choices\":\"px\",\"sa_animated_text_main_text_typo-l-spacing-tab-size\":\"\",\"sa_animated_text_main_text_typo-l-spacing-mob-choices\":\"px\",\"sa_animated_text_main_text_typo-l-spacing-mob-size\":\"\",\"sa_animated_text_main_text_color\":\"#787878\",\"sa_animated_text_main_text_shadow-color\":\"rgba(255, 255, 255, 1)\",\"sa_animated_text_main_text_shadow-blur-size\":\"0\",\"sa_animated_text_main_text_shadow-horizontal-size\":\"0\",\"sa_animated_text_main_text_shadow-vertical-size\":\"0\",\"sa_animated_text\":\"OXILAB\",\"sa_animated_text_typo-font\":\"\",\"sa_animated_text_typo-size-lap-choices\":\"px\",\"sa_animated_text_typo-size-lap-size\":\"\",\"sa_animated_text_typo-size-tab-choices\":\"px\",\"sa_animated_text_typo-size-tab-size\":\"\",\"sa_animated_text_typo-size-mob-choices\":\"px\",\"sa_animated_text_typo-size-mob-size\":\"\",\"sa_animated_text_typo-weight\":\"\",\"sa_animated_text_typo-transform\":\"\",\"sa_animated_text_typo-style\":\"\",\"sa_animated_text_typo-decoration\":\"\",\"sa_animated_text_typo-align-lap\":\"\",\"sa_animated_text_typo-align-tab\":\"\",\"sa_animated_text_typo-align-mob\":\"\",\"sa_animated_text_typo-l-height-lap-choices\":\"px\",\"sa_animated_text_typo-l-height-lap-size\":\"\",\"sa_animated_text_typo-l-height-tab-choices\":\"px\",\"sa_animated_text_typo-l-height-tab-size\":\"\",\"sa_animated_text_typo-l-height-mob-choices\":\"px\",\"sa_animated_text_typo-l-height-mob-size\":\"\",\"sa_animated_text_typo-l-spacing-lap-choices\":\"px\",\"sa_animated_text_typo-l-spacing-lap-size\":\"\",\"sa_animated_text_typo-l-spacing-tab-choices\":\"px\",\"sa_animated_text_typo-l-spacing-tab-size\":\"\",\"sa_animated_text_typo-l-spacing-mob-choices\":\"px\",\"sa_animated_text_typo-l-spacing-mob-size\":\"\",\"sa_animated_text_color\":\"#14d1d1\",\"sa_animated_text_shadow-color\":\"rgba(255, 255, 255, 1)\",\"sa_animated_text_shadow-blur-size\":\"0\",\"sa_animated_text_shadow-horizontal-size\":\"0\",\"sa_animated_text_shadow-vertical-size\":\"0\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Animated_text\",\"shortcode-addons-elements-id\":\"171\",\"shortcode-addons-elements-template\":\"Style_3\"}","stylesheet":".shortcode-addons-wrapper-171 .oxi-addons-animet-text-style-3 .oxi-addons-text1{animation: text 3s 1;color: #787878;}.shortcode-addons-wrapper-171 .oxi-addons-animet-text-style-3 .oxi-addons-text2{animation: text2 3s 1;color: #14d1d1;}","font_family":"[]"},"child":[{"id":"378","styleid":"171","rawdata":"null","stylesheet":""},{"id":"379","styleid":"171","rawdata":"null","stylesheet":""},{"id":"380","styleid":"171","rawdata":"null","stylesheet":""}]}',
              '{"style":{"id":"172","type":"Animated_text","name":"Style 4","style_name":"Style_4","rawdata":"{\"sa-animated_text_speed-size\":\"0.5\",\"sa_animated_text\":\"HELLO WORLD\",\"sa_animated_text_typo-font\":\"\",\"sa_animated_text_typo-size-lap-choices\":\"px\",\"sa_animated_text_typo-size-lap-size\":\"50\",\"sa_animated_text_typo-size-tab-choices\":\"px\",\"sa_animated_text_typo-size-tab-size\":\"\",\"sa_animated_text_typo-size-mob-choices\":\"px\",\"sa_animated_text_typo-size-mob-size\":\"\",\"sa_animated_text_typo-weight\":\"\",\"sa_animated_text_typo-transform\":\"\",\"sa_animated_text_typo-style\":\"\",\"sa_animated_text_typo-decoration\":\"\",\"sa_animated_text_typo-align-lap\":\"\",\"sa_animated_text_typo-align-tab\":\"\",\"sa_animated_text_typo-align-mob\":\"\",\"sa_animated_text_typo-l-height-lap-choices\":\"px\",\"sa_animated_text_typo-l-height-lap-size\":\"\",\"sa_animated_text_typo-l-height-tab-choices\":\"px\",\"sa_animated_text_typo-l-height-tab-size\":\"\",\"sa_animated_text_typo-l-height-mob-choices\":\"px\",\"sa_animated_text_typo-l-height-mob-size\":\"\",\"sa_animated_text_typo-l-spacing-lap-choices\":\"px\",\"sa_animated_text_typo-l-spacing-lap-size\":\"\",\"sa_animated_text_typo-l-spacing-tab-choices\":\"px\",\"sa_animated_text_typo-l-spacing-tab-size\":\"\",\"sa_animated_text_typo-l-spacing-mob-choices\":\"px\",\"sa_animated_text_typo-l-spacing-mob-size\":\"\",\"sa_animated_text_color\":\"#0037cf\",\"sa_animated_text_shadow-color\":\"rgba(240, 17, 17, 1)\",\"sa_animated_text_shadow-blur-size\":\"1\",\"sa_animated_text_shadow-horizontal-size\":\"1\",\"sa_animated_text_shadow-vertical-size\":\"0\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Animated_text\",\"shortcode-addons-elements-id\":\"172\",\"shortcode-addons-elements-template\":\"Style_4\"}","stylesheet":".shortcode-addons-wrapper-172 .oxi-addons-animet-text-style-4 .oxi-text-hidden{transition: 0.5s ease-in;}.shortcode-addons-wrapper-172 .oxi-addons-animet-text-style-4 .oxi-text-text{font-size: 50px;color: #0037cf;text-shadow: 1px 0px 1px rgba(240, 17, 17, 1);}","font_family":"[]"},"child":[{"id":"381","styleid":"172","rawdata":"null","stylesheet":""},{"id":"382","styleid":"172","rawdata":"null","stylesheet":""},{"id":"383","styleid":"172","rawdata":"null","stylesheet":""}]}',
              '{"style":{"id":"173","type":"Animated_text","name":"Style 5","style_name":"Style_5","rawdata":"{\"sa_animated_text_animation_loop\":\"yes\",\"sa-animated_text_speed-size\":\"3\",\"sa_animated_text\":\"Hesadlfjldk\",\"sa_animated_text_typo-font\":\"Arial\",\"sa_animated_text_typo-size-lap-choices\":\"px\",\"sa_animated_text_typo-size-lap-size\":\"50\",\"sa_animated_text_typo-size-tab-choices\":\"px\",\"sa_animated_text_typo-size-tab-size\":\"\",\"sa_animated_text_typo-size-mob-choices\":\"px\",\"sa_animated_text_typo-size-mob-size\":\"\",\"sa_animated_text_typo-weight\":\"\",\"sa_animated_text_typo-transform\":\"\",\"sa_animated_text_typo-style\":\"\",\"sa_animated_text_typo-decoration\":\"\",\"sa_animated_text_typo-align-lap\":\"right\",\"sa_animated_text_typo-align-tab\":\"\",\"sa_animated_text_typo-align-mob\":\"\",\"sa_animated_text_typo-l-height-lap-choices\":\"px\",\"sa_animated_text_typo-l-height-lap-size\":\"\",\"sa_animated_text_typo-l-height-tab-choices\":\"px\",\"sa_animated_text_typo-l-height-tab-size\":\"\",\"sa_animated_text_typo-l-height-mob-choices\":\"px\",\"sa_animated_text_typo-l-height-mob-size\":\"\",\"sa_animated_text_typo-l-spacing-lap-choices\":\"px\",\"sa_animated_text_typo-l-spacing-lap-size\":\"10\",\"sa_animated_text_typo-l-spacing-tab-choices\":\"px\",\"sa_animated_text_typo-l-spacing-tab-size\":\"\",\"sa_animated_text_typo-l-spacing-mob-choices\":\"px\",\"sa_animated_text_typo-l-spacing-mob-size\":\"\",\"sa_animated_text_color\":\"#05a867\",\"sa_animated_text_shadow-color\":\"rgba(130, 125, 126, 1)\",\"sa_animated_text_shadow-blur-size\":\"8\",\"sa_animated_text_shadow-horizontal-size\":\"8\",\"sa_animated_text_shadow-vertical-size\":\"6\",\"sa_animated_text_padding-lap-choices\":\"px\",\"sa_animated_text_padding-lap-top\":\"79\",\"sa_animated_text_padding-lap-right\":\"79\",\"sa_animated_text_padding-lap-bottom\":\"79\",\"sa_animated_text_padding-lap-left\":\"79\",\"sa_animated_text_padding-tab-choices\":\"px\",\"sa_animated_text_padding-tab-top\":\"\",\"sa_animated_text_padding-tab-right\":\"\",\"sa_animated_text_padding-tab-bottom\":\"\",\"sa_animated_text_padding-tab-left\":\"\",\"sa_animated_text_padding-mob-choices\":\"px\",\"sa_animated_text_padding-mob-top\":\"\",\"sa_animated_text_padding-mob-right\":\"\",\"sa_animated_text_padding-mob-bottom\":\"\",\"sa_animated_text_padding-mob-left\":\"\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Animated_text\",\"shortcode-addons-elements-id\":\"173\",\"shortcode-addons-elements-template\":\"Style_5\"}","stylesheet":".shortcode-addons-wrapper-173 .oxi-animet-text-style-5-h1 span{font-family:&quot;Arial&quot;;font-size: 50px;text-align: right;letter-spacing: 10px;color: #05a867;text-shadow: 8px 6px 8px rgba(130, 125, 126, 1);}.shortcode-addons-wrapper-173 .oxi-animet-text-style-5-h1{padding: 79px 79px 79px 79px;}","font_family":"[]"},"child":[{"id":"384","styleid":"173","rawdata":"null","stylesheet":""},{"id":"385","styleid":"173","rawdata":"null","stylesheet":""},{"id":"386","styleid":"173","rawdata":"null","stylesheet":""}]}',
              '{"style":{"id":"299","type":"Animated_text","name":"","style_name":"Style_6","rawdata":"{\"sa_animated_text_animation_on_off\":\"yes\",\"sa-animated_text_speed-size\":\"10\",\"sa-animated_text_stroke_width-size\":\"6\",\"sa-animated_text_margin_top-size\":\"0\",\"sa-animated_text_margin_bottom-size\":\"0\",\"sa_animated_text_1st_color\":\"#eb7f7f\",\"sa_animated_text_2nd_color\":\"#6edae0\",\"sa_animated_text_3rd_color\":\"#5ce091\",\"sa_animated_text_4th_color\":\"#be70db\",\"sa_animated_text_5th_color\":\"#d9e04c\",\"sa_animated_first_text\":\"Hello\",\"sa-animated_text_1st_text_font_size-size\":\"0.4\",\"sa_animated_second_text\":\"World\",\"sa-sa_animated_second_text_font_size-size\":\"0.5\",\"shortcode-addons-2-0-preview\":\"rgb(255, 255, 255)\",\"shortcode-addons-elements-name\":\"Animated_text\",\"shortcode-addons-elements-id\":\"299\",\"shortcode-addons-elements-template\":\"Style_6\"}","stylesheet":".shortcode-addons-wrapper-299 .oxi-addons-animet-text-style-6 .oxi-add-text-copy{margin-top: 6px;}.shortcode-addons-wrapper-299 .oxi-addons-animet-text-style-6 svg{margin-top: 0%;margin-bottom:0%;}.shortcode-addons-wrapper-299 .oxi-addons-animet-text-style-6 .oxi-add-text-copy:nth-child(1){stroke: #eb7f7f;}.shortcode-addons-wrapper-299 .oxi-addons-animet-text-style-6 .oxi-add-text-copy:nth-child(2){stroke: #6edae0;}.shortcode-addons-wrapper-299 .oxi-addons-animet-text-style-6 .oxi-add-text-copy:nth-child(3){stroke: #5ce091;}.shortcode-addons-wrapper-299 .oxi-addons-animet-text-style-6 .oxi-add-text-copy:nth-child(4){stroke: #be70db;}.shortcode-addons-wrapper-299 .oxi-addons-animet-text-style-6 .oxi-add-text-copy:nth-child(5){stroke: #d9e04c;}.shortcode-addons-wrapper-299 .oxi-add-text--line2{font-size: 0.4em;}.shortcode-addons-wrapper-299 .oxi-add-text--line{font-size: 0.5em;}","font_family":"[]"},"child":[{"id":"691","styleid":"299","rawdata":"null","stylesheet":""},{"id":"692","styleid":"299","rawdata":"null","stylesheet":""},{"id":"693","styleid":"299","rawdata":"null","stylesheet":""}]}',
              '{"style":{"id":"176","type":"Animated_text","name":"Style 7","style_name":"Style_7","rawdata":"{\"sa_animated_text_data\":{\"rep1\":{\"sa_animated_text_title\":\"Animated Text\"},\"rep2\":{\"sa_animated_text_title\":\"Hello World\"},\"rep3\":{\"sa_animated_text_title\":\"Animated Text\"}},\"sa_animated_text_datanm\":\"3\",\"sa_animated_text_padding-lap-choices\":\"px\",\"sa_animated_text_padding-lap-top\":\"\",\"sa_animated_text_padding-lap-right\":\"\",\"sa_animated_text_padding-lap-bottom\":\"\",\"sa_animated_text_padding-lap-left\":\"\",\"sa_animated_text_padding-tab-choices\":\"px\",\"sa_animated_text_padding-tab-top\":\"\",\"sa_animated_text_padding-tab-right\":\"\",\"sa_animated_text_padding-tab-bottom\":\"\",\"sa_animated_text_padding-tab-left\":\"\",\"sa_animated_text_padding-mob-choices\":\"px\",\"sa_animated_text_padding-mob-top\":\"\",\"sa_animated_text_padding-mob-right\":\"\",\"sa_animated_text_padding-mob-bottom\":\"\",\"sa_animated_text_padding-mob-left\":\"\",\"oxi-addons-select-in-animation\":\"reverse\",\"oxi-addons-select-out-animation\":\"bounce\",\"sa_animated_text_typo-font\":\"\",\"sa_animated_text_typo-size-lap-choices\":\"px\",\"sa_animated_text_typo-size-lap-size\":\"\",\"sa_animated_text_typo-size-tab-choices\":\"px\",\"sa_animated_text_typo-size-tab-size\":\"\",\"sa_animated_text_typo-size-mob-choices\":\"px\",\"sa_animated_text_typo-size-mob-size\":\"\",\"sa_animated_text_typo-weight\":\"\",\"sa_animated_text_typo-transform\":\"\",\"sa_animated_text_typo-style\":\"\",\"sa_animated_text_typo-decoration\":\"\",\"sa_animated_text_typo-align-lap\":\"\",\"sa_animated_text_typo-align-tab\":\"\",\"sa_animated_text_typo-align-mob\":\"\",\"sa_animated_text_typo-l-height-lap-choices\":\"px\",\"sa_animated_text_typo-l-height-lap-size\":\"\",\"sa_animated_text_typo-l-height-tab-choices\":\"px\",\"sa_animated_text_typo-l-height-tab-size\":\"\",\"sa_animated_text_typo-l-height-mob-choices\":\"px\",\"sa_animated_text_typo-l-height-mob-size\":\"\",\"sa_animated_text_typo-l-spacing-lap-choices\":\"px\",\"sa_animated_text_typo-l-spacing-lap-size\":\"\",\"sa_animated_text_typo-l-spacing-tab-choices\":\"px\",\"sa_animated_text_typo-l-spacing-tab-size\":\"\",\"sa_animated_text_typo-l-spacing-mob-choices\":\"px\",\"sa_animated_text_typo-l-spacing-mob-size\":\"\",\"sa_animated_text_color\":\"#094fe6\",\"sa_animated_text_shadow-color\":\"#ffffff\",\"sa_animated_text_shadow-blur-size\":\"0\",\"sa_animated_text_shadow-horizontal-size\":\"0\",\"sa_animated_text_shadow-vertical-size\":\"0\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Animated_text\",\"shortcode-addons-elements-id\":\"176\",\"shortcode-addons-elements-template\":\"Style_7\"}","stylesheet":".shortcode-addons-wrapper-176 .oxi-addons-wrapper-style-7 .oxi-addons-tlt *{color: #094fe6;}","font_family":"[]"},"child":[]}',
              '{"style":{"id":"177","type":"Animated_text","name":"Style 8","style_name":"Style_8","rawdata":"{\"sa_aminated_text_padding-lap-choices\":\"px\",\"sa_aminated_text_padding-lap-top\":\"10\",\"sa_aminated_text_padding-lap-right\":\"10\",\"sa_aminated_text_padding-lap-bottom\":\"10\",\"sa_aminated_text_padding-lap-left\":\"10\",\"sa_aminated_text_padding-tab-choices\":\"px\",\"sa_aminated_text_padding-tab-top\":\"\",\"sa_aminated_text_padding-tab-right\":\"\",\"sa_aminated_text_padding-tab-bottom\":\"\",\"sa_aminated_text_padding-tab-left\":\"\",\"sa_aminated_text_padding-mob-choices\":\"px\",\"sa_aminated_text_padding-mob-top\":\"\",\"sa_aminated_text_padding-mob-right\":\"\",\"sa_aminated_text_padding-mob-bottom\":\"\",\"sa_aminated_text_padding-mob-left\":\"\",\"sa_animated_text_style_8\":\"Lorem Ipsum\",\"sa_animated_text_typo-font\":\"\",\"sa_animated_text_typo-size-lap-choices\":\"px\",\"sa_animated_text_typo-size-lap-size\":\"\",\"sa_animated_text_typo-size-tab-choices\":\"px\",\"sa_animated_text_typo-size-tab-size\":\"\",\"sa_animated_text_typo-size-mob-choices\":\"px\",\"sa_animated_text_typo-size-mob-size\":\"\",\"sa_animated_text_typo-weight\":\"\",\"sa_animated_text_typo-transform\":\"\",\"sa_animated_text_typo-style\":\"\",\"sa_animated_text_typo-decoration\":\"\",\"sa_animated_text_typo-l-height-lap-choices\":\"px\",\"sa_animated_text_typo-l-height-lap-size\":\"\",\"sa_animated_text_typo-l-height-tab-choices\":\"px\",\"sa_animated_text_typo-l-height-tab-size\":\"\",\"sa_animated_text_typo-l-height-mob-choices\":\"px\",\"sa_animated_text_typo-l-height-mob-size\":\"\",\"sa_animated_text_typo-l-spacing-lap-choices\":\"px\",\"sa_animated_text_typo-l-spacing-lap-size\":\"\",\"sa_animated_text_typo-l-spacing-tab-choices\":\"px\",\"sa_animated_text_typo-l-spacing-tab-size\":\"\",\"sa_animated_text_typo-l-spacing-mob-choices\":\"px\",\"sa_animated_text_typo-l-spacing-mob-size\":\"\",\"sa_animated_text_typo_alignment\":\"center\",\"sa_animated_text_shadow-color\":\"#ffffff\",\"sa_animated_text_shadow-blur-size\":\"0\",\"sa_animated_text_shadow-horizontal-size\":\"0\",\"sa_animated_text_shadow-vertical-size\":\"0\",\"sa_animated_text_first_color\":\"#ff0059\",\"sa_animated_text_second_color\":\"#f7df2d\",\"sa_animated_text_third_color\":\"#bffa0f\",\"sa_animated_text_four_color\":\"#29c71e\",\"sa_animated_text_fifth_color\":\"#00f084\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Animated_text\",\"shortcode-addons-elements-id\":\"177\",\"shortcode-addons-elements-template\":\"Style_8\"}","stylesheet":".shortcode-addons-wrapper-177 .oxi-addons-wrapper-style-8{padding: 10px 10px 10px 10px;justify-content: center;}.shortcode-addons-wrapper-177 .oxi-addons-wrapper-style-8 .oxi-addons-h1{}.shortcode-addons-wrapper-177 .oxi-addons-wrapper-style-8 .oxi-addons-h1::before{color: #ff0059;}.shortcode-addons-wrapper-177 .oxi-addons-wrapper-style-8 .oxi-addons-h1 .oxi-addons-glitch1::before{color: #f7df2d;}.shortcode-addons-wrapper-177 .oxi-addons-wrapper-style-8 .oxi-addons-h1 .oxi-addons-glitch1::after{color: #bffa0f;}.shortcode-addons-wrapper-177 oxi-addons-wrapper-style-8 .oxi-addons-h1 .oxi-addons-glitch2::before{color: #29c71e;}.shortcode-addons-wrapper-177 .oxi-addons-wrapper-style-8 .oxi-addons-h1 .oxi-addons-glitch2::after{color: #00f084;}","font_family":"[]"},"child":[]}',
              '{"style":{"id":"178","type":"Animated_text","name":"Style 9","style_name":"Style_9","rawdata":"{\"sa_aminated_text_padding_background-color\":\"rgba(255,255,255,0.64)\",\"sa_aminated_text_padding_background-select\":\"media-library\",\"sa_aminated_text_padding_background-image\":\"\",\"sa_aminated_text_padding_background-url\":\"\",\"sa_aminated_text_padding_background-position\":\"center center\",\"sa_aminated_text_padding_background-attachment\":\"\",\"sa_aminated_text_padding_background-repeat\":\"no-repeat\",\"sa_aminated_text_padding_background-size-lap\":\"cover\",\"sa_aminated_text_padding_background-size-tab\":\"cover\",\"sa_aminated_text_padding_background-size-mob\":\"cover\",\"sa_aminated_text_padding-lap-choices\":\"px\",\"sa_aminated_text_padding-lap-top\":\"\",\"sa_aminated_text_padding-lap-right\":\"\",\"sa_aminated_text_padding-lap-bottom\":\"\",\"sa_aminated_text_padding-lap-left\":\"\",\"sa_aminated_text_padding-tab-choices\":\"px\",\"sa_aminated_text_padding-tab-top\":\"\",\"sa_aminated_text_padding-tab-right\":\"\",\"sa_aminated_text_padding-tab-bottom\":\"\",\"sa_aminated_text_padding-tab-left\":\"\",\"sa_aminated_text_padding-mob-choices\":\"px\",\"sa_aminated_text_padding-mob-top\":\"\",\"sa_aminated_text_padding-mob-right\":\"\",\"sa_aminated_text_padding-mob-bottom\":\"\",\"sa_aminated_text_padding-mob-left\":\"\",\"sa_animated_text_style_9\":\"Johan Due\",\"sa_animated_text_typo-font\":\"\",\"sa_animated_text_typo-size-lap-choices\":\"px\",\"sa_animated_text_typo-size-lap-size\":\"\",\"sa_animated_text_typo-size-tab-choices\":\"px\",\"sa_animated_text_typo-size-tab-size\":\"\",\"sa_animated_text_typo-size-mob-choices\":\"px\",\"sa_animated_text_typo-size-mob-size\":\"\",\"sa_animated_text_typo-weight\":\"\",\"sa_animated_text_typo-transform\":\"\",\"sa_animated_text_typo-style\":\"\",\"sa_animated_text_typo-decoration\":\"\",\"sa_animated_text_typo-l-height-lap-choices\":\"px\",\"sa_animated_text_typo-l-height-lap-size\":\"\",\"sa_animated_text_typo-l-height-tab-choices\":\"px\",\"sa_animated_text_typo-l-height-tab-size\":\"\",\"sa_animated_text_typo-l-height-mob-choices\":\"px\",\"sa_animated_text_typo-l-height-mob-size\":\"\",\"sa_animated_text_typo-l-spacing-lap-choices\":\"px\",\"sa_animated_text_typo-l-spacing-lap-size\":\"\",\"sa_animated_text_typo-l-spacing-tab-choices\":\"px\",\"sa_animated_text_typo-l-spacing-tab-size\":\"\",\"sa_animated_text_typo-l-spacing-mob-choices\":\"px\",\"sa_animated_text_typo-l-spacing-mob-size\":\"\",\"sa_animated_text_typo_alignment\":\"center\",\"sa_animated_text_shadow-color\":\"#ffffff\",\"sa_animated_text_shadow-blur-size\":\"0\",\"sa_animated_text_shadow-horizontal-size\":\"0\",\"sa_animated_text_shadow-vertical-size\":\"0\",\"sa_animated_text_first_color\":\"#ffffff\",\"sa_animated_text_second_color\":\"#4897f7\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Animated_text\",\"shortcode-addons-elements-id\":\"178\",\"shortcode-addons-elements-template\":\"Style_9\",\"sa_aminated_text_padding_background-img\":\"0\"}","stylesheet":".shortcode-addons-wrapper-178 .oxi-addons-wrapper-style-9{background: rgba(255,255,255,0.64);justify-content: center;}.shortcode-addons-wrapper-178 .oxi-addons-wrapper-style-9 .oxi-addons-para{color: #ffffff;}.shortcode-addons-wrapper-178 .oxi-addons-wrapper-style-9 .oxi-addons-para .oxi-addons-span::after{color: #4897f7;}","font_family":"[]"},"child":[]}',
              
             );
    }

}
