<?php

namespace SHORTCODE_ADDONS_UPLOAD\Text_blocks;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Text blocks
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Text_blocks extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1');
    }

    public function templates() {
        return array(
         '{"style":{"id":"238","type":"Text_blocks","name":"Style 1","style_name":"Style_1","rawdata":"{\"sa_t_b_1st_text\":\"PAGE\",\"sa_t_b_2n_text\":\"BUILDER\",\"sa_t_b_3rd_text\":\"DRAG & DROP TO <span style=&quot;color: GREEN; &quot;> EASILY <\\\/span> CREATE CUSTOM PAGE\",\"sa_t_b_alignment\":\"center\",\"sa_t_b_margin-lap-choices\":\"px\",\"sa_t_b_margin-lap-top\":\"0\",\"sa_t_b_margin-lap-right\":\"0\",\"sa_t_b_margin-lap-bottom\":\"0\",\"sa_t_b_margin-lap-left\":\"0\",\"sa_t_b_margin-tab-choices\":\"px\",\"sa_t_b_margin-tab-top\":\"\",\"sa_t_b_margin-tab-right\":\"\",\"sa_t_b_margin-tab-bottom\":\"\",\"sa_t_b_margin-tab-left\":\"\",\"sa_t_b_margin-mob-choices\":\"px\",\"sa_t_b_margin-mob-top\":\"\",\"sa_t_b_margin-mob-right\":\"\",\"sa_t_b_margin-mob-bottom\":\"\",\"sa_t_b_margin-mob-left\":\"\",\"sa_t_b_animation-type\":\"\",\"sa_t_b_animation-duration-size\":\"1000\",\"sa_t_b_animation-delay-size\":\"0\",\"sa_t_b_animation-offset-size\":\"100\",\"sa_t_b_color\":\"#6460a6\",\"sa_t_b_typo-font\":\"Arial\",\"sa_t_b_typo-size-lap-choices\":\"px\",\"sa_t_b_typo-size-lap-size\":\"30\",\"sa_t_b_typo-size-tab-choices\":\"px\",\"sa_t_b_typo-size-tab-size\":\"20\",\"sa_t_b_typo-size-mob-choices\":\"px\",\"sa_t_b_typo-size-mob-size\":\"15\",\"sa_t_b_typo-weight\":\"\",\"sa_t_b_typo-transform\":\"\",\"sa_t_b_typo-style\":\"\",\"sa_t_b_typo-decoration\":\"\",\"sa_t_b_typo-l-height-lap-choices\":\"px\",\"sa_t_b_typo-l-height-lap-size\":\"\",\"sa_t_b_typo-l-height-tab-choices\":\"px\",\"sa_t_b_typo-l-height-tab-size\":\"\",\"sa_t_b_typo-l-height-mob-choices\":\"px\",\"sa_t_b_typo-l-height-mob-size\":\"\",\"sa_t_b_typo-l-spacing-lap-choices\":\"px\",\"sa_t_b_typo-l-spacing-lap-size\":\"\",\"sa_t_b_typo-l-spacing-tab-choices\":\"px\",\"sa_t_b_typo-l-spacing-tab-size\":\"\",\"sa_t_b_typo-l-spacing-mob-choices\":\"px\",\"sa_t_b_typo-l-spacing-mob-size\":\"\",\"sa_t_b_text_sha-color\":\"rgba(255, 0, 0, 1)\",\"sa_t_b_text_sha-blur-size\":\"0\",\"sa_t_b_text_sha-horizontal-size\":\"0\",\"sa_t_b_text_sha-vertical-size\":\"0\",\"sa_t_b_padding-lap-choices\":\"px\",\"sa_t_b_padding-lap-top\":\"0\",\"sa_t_b_padding-lap-right\":\"0\",\"sa_t_b_padding-lap-bottom\":\"0\",\"sa_t_b_padding-lap-left\":\"0\",\"sa_t_b_padding-tab-choices\":\"px\",\"sa_t_b_padding-tab-top\":\"\",\"sa_t_b_padding-tab-right\":\"\",\"sa_t_b_padding-tab-bottom\":\"\",\"sa_t_b_padding-tab-left\":\"\",\"sa_t_b_padding-mob-choices\":\"px\",\"sa_t_b_padding-mob-top\":\"\",\"sa_t_b_padding-mob-right\":\"\",\"sa_t_b_padding-mob-bottom\":\"\",\"sa_t_b_padding-mob-left\":\"\",\"sa_t_b_2_color\":\"#d4838a\",\"sa_t_b_2_typo-font\":\"Arial\",\"sa_t_b_2_typo-size-lap-choices\":\"px\",\"sa_t_b_2_typo-size-lap-size\":\"65\",\"sa_t_b_2_typo-size-tab-choices\":\"px\",\"sa_t_b_2_typo-size-tab-size\":\"40\",\"sa_t_b_2_typo-size-mob-choices\":\"px\",\"sa_t_b_2_typo-size-mob-size\":\"30\",\"sa_t_b_2_typo-weight\":\"\",\"sa_t_b_2_typo-transform\":\"\",\"sa_t_b_2_typo-style\":\"\",\"sa_t_b_2_typo-decoration\":\"\",\"sa_t_b_2_typo-l-height-lap-choices\":\"px\",\"sa_t_b_2_typo-l-height-lap-size\":\"\",\"sa_t_b_2_typo-l-height-tab-choices\":\"px\",\"sa_t_b_2_typo-l-height-tab-size\":\"\",\"sa_t_b_2_typo-l-height-mob-choices\":\"px\",\"sa_t_b_2_typo-l-height-mob-size\":\"\",\"sa_t_b_2_typo-l-spacing-lap-choices\":\"px\",\"sa_t_b_2_typo-l-spacing-lap-size\":\"\",\"sa_t_b_2_typo-l-spacing-tab-choices\":\"px\",\"sa_t_b_2_typo-l-spacing-tab-size\":\"\",\"sa_t_b_2_typo-l-spacing-mob-choices\":\"px\",\"sa_t_b_2_typo-l-spacing-mob-size\":\"\",\"sa_t_b_2_text_sha-color\":\"rgba(0, 0, 0, 1)\",\"sa_t_b_2_text_sha-blur-size\":\"0\",\"sa_t_b_2_text_sha-horizontal-size\":\"0\",\"sa_t_b_2_text_sha-vertical-size\":\"0\",\"sa_t_b_2_padding-lap-choices\":\"px\",\"sa_t_b_2_padding-lap-top\":\"0\",\"sa_t_b_2_padding-lap-right\":\"0\",\"sa_t_b_2_padding-lap-bottom\":\"0\",\"sa_t_b_2_padding-lap-left\":\"0\",\"sa_t_b_2_padding-tab-choices\":\"px\",\"sa_t_b_2_padding-tab-top\":\"\",\"sa_t_b_2_padding-tab-right\":\"\",\"sa_t_b_2_padding-tab-bottom\":\"\",\"sa_t_b_2_padding-tab-left\":\"\",\"sa_t_b_2_padding-mob-choices\":\"px\",\"sa_t_b_2_padding-mob-top\":\"\",\"sa_t_b_2_padding-mob-right\":\"\",\"sa_t_b_2_padding-mob-bottom\":\"\",\"sa_t_b_2_padding-mob-left\":\"\",\"sa_t_b_3_color\":\"#a69f9f\",\"sa_t_b_3_typo-font\":\"Arial\",\"sa_t_b_3_typo-size-lap-choices\":\"px\",\"sa_t_b_3_typo-size-lap-size\":\"30\",\"sa_t_b_3_typo-size-tab-choices\":\"px\",\"sa_t_b_3_typo-size-tab-size\":\"20\",\"sa_t_b_3_typo-size-mob-choices\":\"px\",\"sa_t_b_3_typo-size-mob-size\":\"15\",\"sa_t_b_3_typo-weight\":\"\",\"sa_t_b_3_typo-transform\":\"\",\"sa_t_b_3_typo-style\":\"\",\"sa_t_b_3_typo-decoration\":\"\",\"sa_t_b_3_typo-l-height-lap-choices\":\"px\",\"sa_t_b_3_typo-l-height-lap-size\":\"\",\"sa_t_b_3_typo-l-height-tab-choices\":\"px\",\"sa_t_b_3_typo-l-height-tab-size\":\"\",\"sa_t_b_3_typo-l-height-mob-choices\":\"px\",\"sa_t_b_3_typo-l-height-mob-size\":\"\",\"sa_t_b_3_typo-l-spacing-lap-choices\":\"px\",\"sa_t_b_3_typo-l-spacing-lap-size\":\"\",\"sa_t_b_3_typo-l-spacing-tab-choices\":\"px\",\"sa_t_b_3_typo-l-spacing-tab-size\":\"\",\"sa_t_b_3_typo-l-spacing-mob-choices\":\"px\",\"sa_t_b_3_typo-l-spacing-mob-size\":\"\",\"sa_t_b_3_text_sha-color\":\"rgba(255, 255, 255, 1)\",\"sa_t_b_3_text_sha-blur-size\":\"0\",\"sa_t_b_3_text_sha-horizontal-size\":\"0\",\"sa_t_b_3_text_sha-vertical-size\":\"0\",\"sa_t_b_3_padding-lap-choices\":\"px\",\"sa_t_b_3_padding-lap-top\":\"0\",\"sa_t_b_3_padding-lap-right\":\"0\",\"sa_t_b_3_padding-lap-bottom\":\"0\",\"sa_t_b_3_padding-lap-left\":\"0\",\"sa_t_b_3_padding-tab-choices\":\"px\",\"sa_t_b_3_padding-tab-top\":\"\",\"sa_t_b_3_padding-tab-right\":\"\",\"sa_t_b_3_padding-tab-bottom\":\"\",\"sa_t_b_3_padding-tab-left\":\"\",\"sa_t_b_3_padding-mob-choices\":\"px\",\"sa_t_b_3_padding-mob-top\":\"\",\"sa_t_b_3_padding-mob-right\":\"\",\"sa_t_b_3_padding-mob-bottom\":\"\",\"sa_t_b_3_padding-mob-left\":\"\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Text_blocks\",\"shortcode-addons-elements-id\":\"238\",\"shortcode-addons-elements-template\":\"Style_1\",\"sa_t_b_animation-looping\":\"0\"}","stylesheet":".shortcode-addons-wrapper-238  .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-1st-body,.shortcode-addons-wrapper-238 .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-2nd-body, .shortcode-addons-wrapper-238 .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-3rd-body {text-align:center;}.shortcode-addons-wrapper-238 .oxi-addons-text-blocks-style-1 {padding: 0px 0px 0px 0px;}.shortcode-addons-wrapper-238 .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-1st-body{color:#6460a6;font-family:&quot;Arial&quot;;font-size: 30px;padding: 0px 0px 0px 0px;}.shortcode-addons-wrapper-238 .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-2nd-body{color:#d4838a;font-family:&quot;Arial&quot;;font-size: 65px;padding: 0px 0px 0px 0px;}.shortcode-addons-wrapper-238 .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-3rd-body{color:#a69f9f;font-family:&quot;Arial&quot;;font-size: 30px;padding: 0px 0px 0px 0px;}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-238 .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-1st-body{font-size: 20px;}.shortcode-addons-wrapper-238 .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-2nd-body{font-size: 40px;}.shortcode-addons-wrapper-238 .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-3rd-body{font-size: 20px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-238 .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-1st-body{font-size: 15px;}.shortcode-addons-wrapper-238 .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-2nd-body{font-size: 30px;}.shortcode-addons-wrapper-238 .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-3rd-body{font-size: 15px;}}","font_family":"[]"},"child":[]}',
         '{"style":{"id":"239","type":"Text_blocks","name":"Style 2","style_name":"Style_2","rawdata":"{\"sa_t_b_1st_style\":\"contentborderheading\",\"sa_t_b_1st_text\":\"We are<br>Web design <span style=&quot; color: #ed7e4e; font-weight: bold; &quot;> Agency <\\\/span>\",\"sa_t_b_3rd_text\":\"39 years of Experience\",\"sa_t_b_alignment\":\"left\",\"sa_t_b_max_width-lap-choices\":\"px\",\"sa_t_b_max_width-lap-size\":\"700\",\"sa_t_b_max_width-tab-choices\":\"px\",\"sa_t_b_max_width-tab-size\":\"600\",\"sa_t_b_max_width-mob-choices\":\"px\",\"sa_t_b_max_width-mob-size\":\"400\",\"sa_t_b_margin-lap-choices\":\"px\",\"sa_t_b_margin-lap-top\":\"0\",\"sa_t_b_margin-lap-right\":\"0\",\"sa_t_b_margin-lap-bottom\":\"0\",\"sa_t_b_margin-lap-left\":\"0\",\"sa_t_b_margin-tab-choices\":\"px\",\"sa_t_b_margin-tab-top\":\"\",\"sa_t_b_margin-tab-right\":\"\",\"sa_t_b_margin-tab-bottom\":\"\",\"sa_t_b_margin-tab-left\":\"\",\"sa_t_b_margin-mob-choices\":\"px\",\"sa_t_b_margin-mob-top\":\"\",\"sa_t_b_margin-mob-right\":\"\",\"sa_t_b_margin-mob-bottom\":\"\",\"sa_t_b_margin-mob-left\":\"\",\"sa_t_b_animation-type\":\"\",\"sa_t_b_animation-duration-size\":\"1000\",\"sa_t_b_animation-delay-size\":\"0\",\"sa_t_b_animation-offset-size\":\"100\",\"sa_t_b_color\":\"#ba9797\",\"sa_t_b_typo-font\":\"Verdana\",\"sa_t_b_typo-size-lap-choices\":\"px\",\"sa_t_b_typo-size-lap-size\":\"50\",\"sa_t_b_typo-size-tab-choices\":\"px\",\"sa_t_b_typo-size-tab-size\":\"35\",\"sa_t_b_typo-size-mob-choices\":\"px\",\"sa_t_b_typo-size-mob-size\":\"25\",\"sa_t_b_typo-weight\":\"\",\"sa_t_b_typo-transform\":\"\",\"sa_t_b_typo-style\":\"\",\"sa_t_b_typo-decoration\":\"\",\"sa_t_b_typo-l-height-lap-choices\":\"px\",\"sa_t_b_typo-l-height-lap-size\":\"\",\"sa_t_b_typo-l-height-tab-choices\":\"px\",\"sa_t_b_typo-l-height-tab-size\":\"\",\"sa_t_b_typo-l-height-mob-choices\":\"px\",\"sa_t_b_typo-l-height-mob-size\":\"\",\"sa_t_b_typo-l-spacing-lap-choices\":\"px\",\"sa_t_b_typo-l-spacing-lap-size\":\"\",\"sa_t_b_typo-l-spacing-tab-choices\":\"px\",\"sa_t_b_typo-l-spacing-tab-size\":\"\",\"sa_t_b_typo-l-spacing-mob-choices\":\"px\",\"sa_t_b_typo-l-spacing-mob-size\":\"\",\"sa_t_b_text_sha-color\":\"rgba(255, 0, 0, 1)\",\"sa_t_b_text_sha-blur-size\":\"0\",\"sa_t_b_text_sha-horizontal-size\":\"0\",\"sa_t_b_text_sha-vertical-size\":\"0\",\"sa_t_b_padding-lap-choices\":\"px\",\"sa_t_b_padding-lap-top\":\"0\",\"sa_t_b_padding-lap-right\":\"0\",\"sa_t_b_padding-lap-bottom\":\"0\",\"sa_t_b_padding-lap-left\":\"0\",\"sa_t_b_padding-tab-choices\":\"px\",\"sa_t_b_padding-tab-top\":\"\",\"sa_t_b_padding-tab-right\":\"\",\"sa_t_b_padding-tab-bottom\":\"\",\"sa_t_b_padding-tab-left\":\"\",\"sa_t_b_padding-mob-choices\":\"px\",\"sa_t_b_padding-mob-top\":\"\",\"sa_t_b_padding-mob-right\":\"\",\"sa_t_b_padding-mob-bottom\":\"\",\"sa_t_b_padding-mob-left\":\"\",\"sa_t_b_3_color\":\"#6b5351\",\"sa_t_b_3_typo-font\":\"Verdana\",\"sa_t_b_3_typo-size-lap-choices\":\"px\",\"sa_t_b_3_typo-size-lap-size\":\"20\",\"sa_t_b_3_typo-size-tab-choices\":\"px\",\"sa_t_b_3_typo-size-tab-size\":\"15\",\"sa_t_b_3_typo-size-mob-choices\":\"px\",\"sa_t_b_3_typo-size-mob-size\":\"13\",\"sa_t_b_3_typo-weight\":\"100\",\"sa_t_b_3_typo-transform\":\"\",\"sa_t_b_3_typo-style\":\"\",\"sa_t_b_3_typo-decoration\":\"\",\"sa_t_b_3_typo-l-height-lap-choices\":\"px\",\"sa_t_b_3_typo-l-height-lap-size\":\"\",\"sa_t_b_3_typo-l-height-tab-choices\":\"px\",\"sa_t_b_3_typo-l-height-tab-size\":\"\",\"sa_t_b_3_typo-l-height-mob-choices\":\"px\",\"sa_t_b_3_typo-l-height-mob-size\":\"\",\"sa_t_b_3_typo-l-spacing-lap-choices\":\"px\",\"sa_t_b_3_typo-l-spacing-lap-size\":\"\",\"sa_t_b_3_typo-l-spacing-tab-choices\":\"px\",\"sa_t_b_3_typo-l-spacing-tab-size\":\"\",\"sa_t_b_3_typo-l-spacing-mob-choices\":\"px\",\"sa_t_b_3_typo-l-spacing-mob-size\":\"\",\"sa_t_b_3_text_sha-color\":\"rgba(255, 0, 0, 1)\",\"sa_t_b_3_text_sha-blur-size\":\"0\",\"sa_t_b_3_text_sha-horizontal-size\":\"0\",\"sa_t_b_3_text_sha-vertical-size\":\"0\",\"sa_t_b_3_padding-lap-choices\":\"px\",\"sa_t_b_3_padding-lap-top\":\"0\",\"sa_t_b_3_padding-lap-right\":\"0\",\"sa_t_b_3_padding-lap-bottom\":\"0\",\"sa_t_b_3_padding-lap-left\":\"0\",\"sa_t_b_3_padding-tab-choices\":\"px\",\"sa_t_b_3_padding-tab-top\":\"\",\"sa_t_b_3_padding-tab-right\":\"\",\"sa_t_b_3_padding-tab-bottom\":\"\",\"sa_t_b_3_padding-tab-left\":\"\",\"sa_t_b_3_padding-mob-choices\":\"px\",\"sa_t_b_3_padding-mob-top\":\"\",\"sa_t_b_3_padding-mob-right\":\"\",\"sa_t_b_3_padding-mob-bottom\":\"\",\"sa_t_b_3_padding-mob-left\":\"\",\"sa_t_border_color\":\"#827f9c\",\"sa_t_b_br_width-lap-choices\":\"px\",\"sa_t_b_br_width-lap-size\":\"170\",\"sa_t_b_br_width-tab-choices\":\"px\",\"sa_t_b_br_width-tab-size\":\"100\",\"sa_t_b_br_width-mob-choices\":\"px\",\"sa_t_b_br_width-mob-size\":\"80\",\"sa_btn_br_border-type\":\"\",\"sa_btn_br_border-width-lap-choices\":\"px\",\"sa_btn_br_border-width-lap-top\":\"\",\"sa_btn_br_border-width-lap-right\":\"\",\"sa_btn_br_border-width-lap-bottom\":\"\",\"sa_btn_br_border-width-lap-left\":\"\",\"sa_btn_br_border-width-tab-choices\":\"px\",\"sa_btn_br_border-width-tab-top\":\"\",\"sa_btn_br_border-width-tab-right\":\"\",\"sa_btn_br_border-width-tab-bottom\":\"\",\"sa_btn_br_border-width-tab-left\":\"\",\"sa_btn_br_border-width-mob-choices\":\"px\",\"sa_btn_br_border-width-mob-top\":\"\",\"sa_btn_br_border-width-mob-right\":\"\",\"sa_btn_br_border-width-mob-bottom\":\"\",\"sa_btn_br_border-width-mob-left\":\"\",\"sa_btn_br_border-color\":\"\",\"sa_t_bdr_alignment\":\"left_side\",\"sa_t_b_br_padding-lap-choices\":\"px\",\"sa_t_b_br_padding-lap-top\":\"6\",\"sa_t_b_br_padding-lap-right\":\"6\",\"sa_t_b_br_padding-lap-bottom\":\"6\",\"sa_t_b_br_padding-lap-left\":\"0\",\"sa_t_b_br_padding-tab-choices\":\"px\",\"sa_t_b_br_padding-tab-top\":\"6\",\"sa_t_b_br_padding-tab-right\":\"6\",\"sa_t_b_br_padding-tab-bottom\":\"6\",\"sa_t_b_br_padding-tab-left\":\"0\",\"sa_t_b_br_padding-mob-choices\":\"px\",\"sa_t_b_br_padding-mob-top\":\"6\",\"sa_t_b_br_padding-mob-right\":\"6\",\"sa_t_b_br_padding-mob-bottom\":\"6\",\"sa_t_b_br_padding-mob-left\":\"0\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Text_blocks\",\"shortcode-addons-elements-id\":\"239\",\"shortcode-addons-elements-template\":\"Style_2\",\"sa_t_b_animation-looping\":\"0\"}","stylesheet":".shortcode-addons-wrapper-239  .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-heading {text-align:left;}.shortcode-addons-wrapper-239  .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-content {text-align:left;}.shortcode-addons-wrapper-239  .oxi-addons-text-blocks-body  {max-width:700px;}.shortcode-addons-wrapper-239 .oxi-addons-text-blocks-body .oxi-addons-text-blocks-style-2  {padding: 0px 0px 0px 0px;}.shortcode-addons-wrapper-239 .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-heading{color:#ba9797;font-family:&quot;Verdana&quot;;font-size: 50px;padding: 0px 0px 0px 0px;}.shortcode-addons-wrapper-239 .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-content{color:#6b5351;font-family:&quot;Verdana&quot;;font-size: 20px;font-weight: 100;padding: 0px 0px 0px 0px;}.shortcode-addons-wrapper-239 .oxi-addons-text-blocks-style-2 .oxi-addons-text-block-border{border-top: 2px solid #827f9c;}.shortcode-addons-wrapper-239 .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-border .oxi-addons-text-block-border{width:170px;}.shortcode-addons-wrapper-239 .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-border{padding: 6px 6px 6px 0px;}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-239  .oxi-addons-text-blocks-body  {max-width:600px;}.shortcode-addons-wrapper-239 .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-heading{font-size: 35px;}.shortcode-addons-wrapper-239 .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-content{font-size: 15px;}.shortcode-addons-wrapper-239 .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-border .oxi-addons-text-block-border{width:100px;}.shortcode-addons-wrapper-239 .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-border{padding: 6px 6px 6px 0px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-239  .oxi-addons-text-blocks-body  {max-width:400px;}.shortcode-addons-wrapper-239 .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-heading{font-size: 25px;}.shortcode-addons-wrapper-239 .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-content{font-size: 13px;}.shortcode-addons-wrapper-239 .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-border .oxi-addons-text-block-border{width:80px;}.shortcode-addons-wrapper-239 .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-border{padding: 6px 6px 6px 0px;}}","font_family":"[]"},"child":[]}',
      );
    } 
}
