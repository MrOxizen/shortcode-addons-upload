<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Offcanvas_content;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Icon_boxes
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Offcanvas_content extends Elements_Frontend
{

    public function pre_active()
    {
        return array('Style_1');
    }

    public function templates()
    {
        return array(
            '{"style":{"id":"91","type":"Offcanvas_content","name":"style 1","style_name":"Style_1","rawdata":"{\"sa_offcavas_btn_t\":\"Click Me\",\"sa_offcavas_btn_icon_show\":\"icon_show\",\"sa_offcavas_btn_icon\":\"fas fa-apple-alt\",\"sa_offcavas_btn_icon_posi\":\"left\",\"sa_offcavas_btn_icon_s-lap-choices\":\"px\",\"sa_offcavas_btn_icon_s-lap-size\":\"18\",\"sa_offcavas_btn_icon_s-tab-choices\":\"px\",\"sa_offcavas_btn_icon_s-tab-size\":\"20\",\"sa_offcavas_btn_icon_s-mob-choices\":\"px\",\"sa_offcavas_btn_icon_s-mob-size\":\"20\",\"sa_offcavas_btn_icon_c\":\"#f2603f\",\"sa_offcavas_btn_icon_c_h\":\"#ffffff\",\"sa_offcavas_btn_icon_padding-lap-choices\":\"px\",\"sa_offcavas_btn_icon_padding-lap-top\":\"\",\"sa_offcavas_btn_icon_padding-lap-right\":\"\",\"sa_offcavas_btn_icon_padding-lap-bottom\":\"\",\"sa_offcavas_btn_icon_padding-lap-left\":\"\",\"sa_offcavas_btn_icon_padding-tab-choices\":\"px\",\"sa_offcavas_btn_icon_padding-tab-top\":\"\",\"sa_offcavas_btn_icon_padding-tab-right\":\"\",\"sa_offcavas_btn_icon_padding-tab-bottom\":\"\",\"sa_offcavas_btn_icon_padding-tab-left\":\"\",\"sa_offcavas_btn_icon_padding-mob-choices\":\"px\",\"sa_offcavas_btn_icon_padding-mob-top\":\"\",\"sa_offcavas_btn_icon_padding-mob-right\":\"\",\"sa_offcavas_btn_icon_padding-mob-bottom\":\"\",\"sa_offcavas_btn_icon_padding-mob-left\":\"\",\"sa_offcavas_btn_typo-font\":\"Roboto\",\"sa_offcavas_btn_typo-size-lap-choices\":\"px\",\"sa_offcavas_btn_typo-size-lap-size\":\"18\",\"sa_offcavas_btn_typo-size-tab-choices\":\"px\",\"sa_offcavas_btn_typo-size-tab-size\":\"\",\"sa_offcavas_btn_typo-size-mob-choices\":\"px\",\"sa_offcavas_btn_typo-size-mob-size\":\"\",\"sa_offcavas_btn_typo-weight\":\"400\",\"sa_offcavas_btn_typo-transform\":\"\",\"sa_offcavas_btn_typo-style\":\"\",\"sa_offcavas_btn_typo-decoration\":\"\",\"sa_offcavas_btn_typo-align-lap\":\"center\",\"sa_offcavas_btn_typo-align-tab\":\"\",\"sa_offcavas_btn_typo-align-mob\":\"\",\"sa_offcavas_btn_typo-l-height-lap-choices\":\"px\",\"sa_offcavas_btn_typo-l-height-lap-size\":\"\",\"sa_offcavas_btn_typo-l-height-tab-choices\":\"px\",\"sa_offcavas_btn_typo-l-height-tab-size\":\"\",\"sa_offcavas_btn_typo-l-height-mob-choices\":\"px\",\"sa_offcavas_btn_typo-l-height-mob-size\":\"\",\"sa_offcavas_btn_typo-l-spacing-lap-choices\":\"px\",\"sa_offcavas_btn_typo-l-spacing-lap-size\":\"\",\"sa_offcavas_btn_typo-l-spacing-tab-choices\":\"px\",\"sa_offcavas_btn_typo-l-spacing-tab-size\":\"\",\"sa_offcavas_btn_typo-l-spacing-mob-choices\":\"px\",\"sa_offcavas_btn_typo-l-spacing-mob-size\":\"\",\"sa_offcavas_btn_c\":\"#f2603f\",\"sa_offcavas_btn_bg-color\":\"rgba(255,255,255,1.00)\",\"sa_offcavas_btn_bg-select\":\"media-library\",\"sa_offcavas_btn_bg-image\":\"\",\"sa_offcavas_btn_bg-url\":\"\",\"sa_offcavas_btn_bg-position\":\"center center\",\"sa_offcavas_btn_bg-attachment\":\"\",\"sa_offcavas_btn_bg-repeat\":\"no-repeat\",\"sa_offcavas_btn_bg-size-lap\":\"cover\",\"sa_offcavas_btn_bg-size-tab\":\"cover\",\"sa_offcavas_btn_bg-size-mob\":\"cover\",\"sa_offcavas_btn_border-type\":\"solid\",\"sa_offcavas_btn_border-width-lap-choices\":\"px\",\"sa_offcavas_btn_border-width-lap-top\":\"2\",\"sa_offcavas_btn_border-width-lap-right\":\"2\",\"sa_offcavas_btn_border-width-lap-bottom\":\"2\",\"sa_offcavas_btn_border-width-lap-left\":\"2\",\"sa_offcavas_btn_border-width-tab-choices\":\"px\",\"sa_offcavas_btn_border-width-tab-top\":\"\",\"sa_offcavas_btn_border-width-tab-right\":\"\",\"sa_offcavas_btn_border-width-tab-bottom\":\"\",\"sa_offcavas_btn_border-width-tab-left\":\"\",\"sa_offcavas_btn_border-width-mob-choices\":\"px\",\"sa_offcavas_btn_border-width-mob-top\":\"\",\"sa_offcavas_btn_border-width-mob-right\":\"\",\"sa_offcavas_btn_border-width-mob-bottom\":\"\",\"sa_offcavas_btn_border-width-mob-left\":\"\",\"sa_offcavas_btn_border-color\":\"#f26241\",\"sa_offcavas_btn_c_h\":\"#ffffff\",\"sa_offcavas_btn_bg_h-color\":\"rgba(241,86,66,1.00)\",\"sa_offcavas_btn_bg_h-select\":\"media-library\",\"sa_offcavas_btn_bg_h-image\":\"\",\"sa_offcavas_btn_bg_h-url\":\"\",\"sa_offcavas_btn_bg_h-position\":\"center center\",\"sa_offcavas_btn_bg_h-attachment\":\"\",\"sa_offcavas_btn_bg_h-repeat\":\"no-repeat\",\"sa_offcavas_btn_bg_h-size-lap\":\"cover\",\"sa_offcavas_btn_bg_h-size-tab\":\"cover\",\"sa_offcavas_btn_bg_h-size-mob\":\"cover\",\"sa_offcavas_btn_border_h-type\":\"solid\",\"sa_offcavas_btn_border_h-width-lap-choices\":\"px\",\"sa_offcavas_btn_border_h-width-lap-top\":\"2\",\"sa_offcavas_btn_border_h-width-lap-right\":\"2\",\"sa_offcavas_btn_border_h-width-lap-bottom\":\"2\",\"sa_offcavas_btn_border_h-width-lap-left\":\"2\",\"sa_offcavas_btn_border_h-width-tab-choices\":\"px\",\"sa_offcavas_btn_border_h-width-tab-top\":\"\",\"sa_offcavas_btn_border_h-width-tab-right\":\"\",\"sa_offcavas_btn_border_h-width-tab-bottom\":\"\",\"sa_offcavas_btn_border_h-width-tab-left\":\"\",\"sa_offcavas_btn_border_h-width-mob-choices\":\"px\",\"sa_offcavas_btn_border_h-width-mob-top\":\"\",\"sa_offcavas_btn_border_h-width-mob-right\":\"\",\"sa_offcavas_btn_border_h-width-mob-bottom\":\"\",\"sa_offcavas_btn_border_h-width-mob-left\":\"\",\"sa_offcavas_btn_border_h-color\":\"#02d406\",\"sa_offcavas_btn_border_r-lap-choices\":\"px\",\"sa_offcavas_btn_border_r-lap-top\":\"30\",\"sa_offcavas_btn_border_r-lap-right\":\"30\",\"sa_offcavas_btn_border_r-lap-bottom\":\"30\",\"sa_offcavas_btn_border_r-lap-left\":\"30\",\"sa_offcavas_btn_border_r-tab-choices\":\"px\",\"sa_offcavas_btn_border_r-tab-top\":\"\",\"sa_offcavas_btn_border_r-tab-right\":\"\",\"sa_offcavas_btn_border_r-tab-bottom\":\"\",\"sa_offcavas_btn_border_r-tab-left\":\"\",\"sa_offcavas_btn_border_r-mob-choices\":\"px\",\"sa_offcavas_btn_border_r-mob-top\":\"\",\"sa_offcavas_btn_border_r-mob-right\":\"\",\"sa_offcavas_btn_border_r-mob-bottom\":\"\",\"sa_offcavas_btn_border_r-mob-left\":\"\",\"sa_offcavas_btn_padding-lap-choices\":\"px\",\"sa_offcavas_btn_padding-lap-top\":\"10\",\"sa_offcavas_btn_padding-lap-right\":\"30\",\"sa_offcavas_btn_padding-lap-bottom\":\"10\",\"sa_offcavas_btn_padding-lap-left\":\"30\",\"sa_offcavas_btn_padding-tab-choices\":\"px\",\"sa_offcavas_btn_padding-tab-top\":\"\",\"sa_offcavas_btn_padding-tab-right\":\"\",\"sa_offcavas_btn_padding-tab-bottom\":\"\",\"sa_offcavas_btn_padding-tab-left\":\"\",\"sa_offcavas_btn_padding-mob-choices\":\"px\",\"sa_offcavas_btn_padding-mob-top\":\"\",\"sa_offcavas_btn_padding-mob-right\":\"\",\"sa_offcavas_btn_padding-mob-bottom\":\"\",\"sa_offcavas_btn_padding-mob-left\":\"\",\"sa_offcavas_btn_margin-lap-choices\":\"px\",\"sa_offcavas_btn_margin-lap-top\":\"\",\"sa_offcavas_btn_margin-lap-right\":\"\",\"sa_offcavas_btn_margin-lap-bottom\":\"\",\"sa_offcavas_btn_margin-lap-left\":\"\",\"sa_offcavas_btn_margin-tab-choices\":\"px\",\"sa_offcavas_btn_margin-tab-top\":\"\",\"sa_offcavas_btn_margin-tab-right\":\"\",\"sa_offcavas_btn_margin-tab-bottom\":\"\",\"sa_offcavas_btn_margin-tab-left\":\"\",\"sa_offcavas_btn_margin-mob-choices\":\"px\",\"sa_offcavas_btn_margin-mob-top\":\"\",\"sa_offcavas_btn_margin-mob-right\":\"\",\"sa_offcavas_btn_margin-mob-bottom\":\"\",\"sa_offcavas_btn_margin-mob-left\":\"\",\"sa_offcavas_sidebar_posi\":\"sa_offcavas_sidebar_left\",\"sa_offcavas_sidebar_w-lap-choices\":\"px\",\"sa_offcavas_sidebar_w-lap-size\":\"400\",\"sa_offcavas_sidebar_w-tab-choices\":\"px\",\"sa_offcavas_sidebar_w-tab-size\":\"350\",\"sa_offcavas_sidebar_w-mob-choices\":\"px\",\"sa_offcavas_sidebar_w-mob-size\":\"350\",\"sa_offcavas_content_bg-color\":\"rgba(255,255,255,1.00)\",\"sa_offcavas_content_bg-select\":\"media-library\",\"sa_offcavas_content_bg-image\":\"\",\"sa_offcavas_content_bg-url\":\"\",\"sa_offcavas_content_bg-position\":\"center center\",\"sa_offcavas_content_bg-attachment\":\"\",\"sa_offcavas_content_bg-repeat\":\"no-repeat\",\"sa_offcavas_content_bg-size-lap\":\"cover\",\"sa_offcavas_content_bg-size-tab\":\"cover\",\"sa_offcavas_content_bg-size-mob\":\"cover\",\"sa_offcavas_overlay_bg-color\":\"rgba(3,3,3,0.36)\",\"sa_offcavas_overlay_bg-select\":\"media-library\",\"sa_offcavas_overlay_bg-image\":\"\",\"sa_offcavas_overlay_bg-url\":\"\",\"sa_offcavas_overlay_bg-position\":\"center center\",\"sa_offcavas_overlay_bg-attachment\":\"\",\"sa_offcavas_overlay_bg-repeat\":\"no-repeat\",\"sa_offcavas_overlay_bg-size-lap\":\"cover\",\"sa_offcavas_overlay_bg-size-tab\":\"cover\",\"sa_offcavas_overlay_bg-size-mob\":\"cover\",\"sa_offcavas_content_padding-lap-choices\":\"px\",\"sa_offcavas_content_padding-lap-top\":\"20\",\"sa_offcavas_content_padding-lap-right\":\"20\",\"sa_offcavas_content_padding-lap-bottom\":\"20\",\"sa_offcavas_content_padding-lap-left\":\"20\",\"sa_offcavas_content_padding-tab-choices\":\"px\",\"sa_offcavas_content_padding-tab-top\":\"\",\"sa_offcavas_content_padding-tab-right\":\"\",\"sa_offcavas_content_padding-tab-bottom\":\"\",\"sa_offcavas_content_padding-tab-left\":\"\",\"sa_offcavas_content_padding-mob-choices\":\"px\",\"sa_offcavas_content_padding-mob-top\":\"\",\"sa_offcavas_content_padding-mob-right\":\"\",\"sa_offcavas_content_padding-mob-bottom\":\"\",\"sa_offcavas_content_padding-mob-left\":\"\",\"sa_offcavas_close_icon\":\"fas fa-times\",\"sa_offcavas_close_icon_s-lap-choices\":\"px\",\"sa_offcavas_close_icon_s-lap-size\":\"24\",\"sa_offcavas_close_icon_s-tab-choices\":\"px\",\"sa_offcavas_close_icon_s-tab-size\":\"17\",\"sa_offcavas_close_icon_s-mob-choices\":\"px\",\"sa_offcavas_close_icon_s-mob-size\":\"17\",\"sa_offcavas_close_icon_c\":\"#000000\",\"sa_offcavas_close_icon_c_h\":\"#f2603f\",\"sa_offcavas_close_icon_align\":\"right\",\"sa_offcavas_close_icon_padding-lap-choices\":\"px\",\"sa_offcavas_close_icon_padding-lap-top\":\"0\",\"sa_offcavas_close_icon_padding-lap-right\":\"20\",\"sa_offcavas_close_icon_padding-lap-bottom\":\"20\",\"sa_offcavas_close_icon_padding-lap-left\":\"20\",\"sa_offcavas_close_icon_padding-tab-choices\":\"px\",\"sa_offcavas_close_icon_padding-tab-top\":\"\",\"sa_offcavas_close_icon_padding-tab-right\":\"\",\"sa_offcavas_close_icon_padding-tab-bottom\":\"\",\"sa_offcavas_close_icon_padding-tab-left\":\"\",\"sa_offcavas_close_icon_padding-mob-choices\":\"px\",\"sa_offcavas_close_icon_padding-mob-top\":\"\",\"sa_offcavas_close_icon_padding-mob-right\":\"\",\"sa_offcavas_close_icon_padding-mob-bottom\":\"\",\"sa_offcavas_close_icon_padding-mob-left\":\"\",\"sa_offcavas_content_value\":\"Insert Short Code Here and Make A Nice Design.....\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Offcanvas_content\",\"shortcode-addons-elements-id\":\"91\",\"shortcode-addons-elements-template\":\"Style_1\",\"sa_offcavas_btn_bg-img\":\"0\",\"sa_offcavas_btn_bg_h-img\":\"0\",\"sa_offcavas_content_bg-img\":\"0\",\"sa_offcavas_overlay_bg-img\":\"0\"}","stylesheet":".shortcode-addons-wrapper-91 .sa_addons_oc_container_style_1 .sa_addons_oc_cl_btn_icon{font-size: 18px;color: #f2603f;}.shortcode-addons-wrapper-91 .sa_addons_oc_container_style_1 .sa_addons_oc_cl_btn:hover .sa_addons_oc_cl_btn_icon{color: #ffffff;}.shortcode-addons-wrapper-91 .sa_addons_oc_container_style_1 .sa_addons_oc_btn_content{font-family:&quot;Roboto&quot;;font-size: 18px;font-weight: 400;text-align: center;}.shortcode-addons-wrapper-91 .sa_addons_oc_container_style_1 .sa_addons_oc_cl_btn{color: #f2603f;background: rgba(255,255,255,1.00);border-style: solid;border-width: 2px 2px 2px 2px;border-color: #f26241;border-radius: 30px 30px 30px 30px;padding: 10px 30px 10px 30px;}.shortcode-addons-wrapper-91 .sa_addons_oc_container_style_1 .sa_addons_oc_cl_btn:hover{color: #ffffff;background: rgba(241,86,66,1.00);border-style: solid;border-width: 2px 2px 2px 2px;border-color: #02d406;}.shortcode-addons-wrapper-91 .sa_addons_oc_container_style_1 .sa_addons_oc_show_content{width: 400px;background: rgba(255,255,255,1.00);padding: 20px 20px 20px 20px;}.shortcode-addons-wrapper-91 .sa_addons_oc_container_style_1 .sa_addons_oc_content_overlay{background: rgba(3,3,3,0.36);}.shortcode-addons-wrapper-91 .sa_addons_oc_container_style_1 .sa_addons_oc_content_close_icon{font-size: 24px;color: #000000;text-align: right;padding: 0px 20px 20px 20px;}.shortcode-addons-wrapper-91 .sa_addons_oc_container_style_1 .sa_addons_oc_content_close_icon:hover{color: #f2603f;}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-91 .sa_addons_oc_container_style_1 .sa_addons_oc_cl_btn_icon{font-size: 20px;}.shortcode-addons-wrapper-91 .sa_addons_oc_container_style_1 .sa_addons_oc_show_content{width: 350px;}.shortcode-addons-wrapper-91 .sa_addons_oc_container_style_1 .sa_addons_oc_content_close_icon{font-size: 17px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-91 .sa_addons_oc_container_style_1 .sa_addons_oc_cl_btn_icon{font-size: 20px;}.shortcode-addons-wrapper-91 .sa_addons_oc_container_style_1 .sa_addons_oc_show_content{width: 350px;}.shortcode-addons-wrapper-91 .sa_addons_oc_container_style_1 .sa_addons_oc_content_close_icon{font-size: 17px;}}","font_family":"{\"Roboto\":\"Roboto\"}"},"child":[]}',
            '{"style":{"id":"92","type":"Offcanvas_content","name":"style 2","style_name":"Style_2","rawdata":"{\"sa_offcavas_btn_img-select\":\"media-library\",\"sa_offcavas_btn_img-image\":\"https:\\\/\\\/www.shortcode-addons.com\\\/wp-content\\\/uploads\\\/2019\\\/08\\\/travel2-1-1.jpg\",\"sa_offcavas_btn_img-url\":\"https:\\\/\\\/www.shortcode-addons.com\\\/wp-content\\\/uploads\\\/2019\\\/08\\\/travel2-1-1.jpg\",\"sa_offcavas_btn_w-lap-choices\":\"px\",\"sa_offcavas_btn_w-lap-size\":\"300\",\"sa_offcavas_btn_w-tab-choices\":\"px\",\"sa_offcavas_btn_w-tab-size\":\"300\",\"sa_offcavas_btn_w-mob-choices\":\"px\",\"sa_offcavas_btn_w-mob-size\":\"300\",\"sa_offcavas_btn_h-lap-choices\":\"px\",\"sa_offcavas_btn_h-lap-size\":\"300\",\"sa_offcavas_btn_h-tab-choices\":\"px\",\"sa_offcavas_btn_h-tab-size\":\"300\",\"sa_offcavas_btn_h-mob-choices\":\"px\",\"sa_offcavas_btn_h-mob-size\":\"300\",\"sa_offcavas_btn_margin-lap-choices\":\"px\",\"sa_offcavas_btn_margin-lap-top\":\"0\",\"sa_offcavas_btn_margin-lap-right\":\"0\",\"sa_offcavas_btn_margin-lap-bottom\":\"0\",\"sa_offcavas_btn_margin-lap-left\":\"0\",\"sa_offcavas_btn_margin-tab-choices\":\"px\",\"sa_offcavas_btn_margin-tab-top\":\"\",\"sa_offcavas_btn_margin-tab-right\":\"\",\"sa_offcavas_btn_margin-tab-bottom\":\"\",\"sa_offcavas_btn_margin-tab-left\":\"\",\"sa_offcavas_btn_margin-mob-choices\":\"px\",\"sa_offcavas_btn_margin-mob-top\":\"\",\"sa_offcavas_btn_margin-mob-right\":\"\",\"sa_offcavas_btn_margin-mob-bottom\":\"\",\"sa_offcavas_btn_margin-mob-left\":\"\",\"sa_offcavas_btn_border-type\":\"solid\",\"sa_offcavas_btn_border-width-lap-choices\":\"px\",\"sa_offcavas_btn_border-width-lap-top\":\"5\",\"sa_offcavas_btn_border-width-lap-right\":\"5\",\"sa_offcavas_btn_border-width-lap-bottom\":\"5\",\"sa_offcavas_btn_border-width-lap-left\":\"5\",\"sa_offcavas_btn_border-width-tab-choices\":\"px\",\"sa_offcavas_btn_border-width-tab-top\":\"\",\"sa_offcavas_btn_border-width-tab-right\":\"\",\"sa_offcavas_btn_border-width-tab-bottom\":\"\",\"sa_offcavas_btn_border-width-tab-left\":\"\",\"sa_offcavas_btn_border-width-mob-choices\":\"px\",\"sa_offcavas_btn_border-width-mob-top\":\"\",\"sa_offcavas_btn_border-width-mob-right\":\"\",\"sa_offcavas_btn_border-width-mob-bottom\":\"\",\"sa_offcavas_btn_border-width-mob-left\":\"\",\"sa_offcavas_btn_border-color\":\"#ffffff\",\"sa_offcavas_btn_border_r-lap-choices\":\"px\",\"sa_offcavas_btn_border_r-lap-top\":\"5\",\"sa_offcavas_btn_border_r-lap-right\":\"5\",\"sa_offcavas_btn_border_r-lap-bottom\":\"5\",\"sa_offcavas_btn_border_r-lap-left\":\"5\",\"sa_offcavas_btn_border_r-tab-choices\":\"px\",\"sa_offcavas_btn_border_r-tab-top\":\"\",\"sa_offcavas_btn_border_r-tab-right\":\"\",\"sa_offcavas_btn_border_r-tab-bottom\":\"\",\"sa_offcavas_btn_border_r-tab-left\":\"\",\"sa_offcavas_btn_border_r-mob-choices\":\"px\",\"sa_offcavas_btn_border_r-mob-top\":\"\",\"sa_offcavas_btn_border_r-mob-right\":\"\",\"sa_offcavas_btn_border_r-mob-bottom\":\"\",\"sa_offcavas_btn_border_r-mob-left\":\"\",\"sa_offcavas_btn_padding-lap-choices\":\"px\",\"sa_offcavas_btn_padding-lap-top\":\"\",\"sa_offcavas_btn_padding-lap-right\":\"\",\"sa_offcavas_btn_padding-lap-bottom\":\"\",\"sa_offcavas_btn_padding-lap-left\":\"\",\"sa_offcavas_btn_padding-tab-choices\":\"px\",\"sa_offcavas_btn_padding-tab-top\":\"\",\"sa_offcavas_btn_padding-tab-right\":\"\",\"sa_offcavas_btn_padding-tab-bottom\":\"\",\"sa_offcavas_btn_padding-tab-left\":\"\",\"sa_offcavas_btn_padding-mob-choices\":\"px\",\"sa_offcavas_btn_padding-mob-top\":\"\",\"sa_offcavas_btn_padding-mob-right\":\"\",\"sa_offcavas_btn_padding-mob-bottom\":\"\",\"sa_offcavas_btn_padding-mob-left\":\"\",\"sa_offcavas_btn_box_shadow-shadow\":\"yes\",\"sa_offcavas_btn_box_shadow-type\":\"\",\"sa_offcavas_btn_box_shadow-horizontal-size\":\"1\",\"sa_offcavas_btn_box_shadow-vertical-size\":\"1\",\"sa_offcavas_btn_box_shadow-blur-size\":\"15\",\"sa_offcavas_btn_box_shadow-spread-size\":\"2\",\"sa_offcavas_btn_box_shadow-color\":\"rgba(189, 174, 174, 1)\",\"sa_offcavas_btn_anim-type\":\"\",\"sa_offcavas_btn_anim-duration-size\":\"1000\",\"sa_offcavas_btn_anim-delay-size\":\"0\",\"sa_offcavas_btn_anim-offset-size\":\"100\",\"sa_offcavas_btn_anim-looping\":\"yes\",\"sa_offcavas_sidebar_posi\":\"sa_offcavas_sidebar_left\",\"sa_offcavas_sidebar_w-lap-choices\":\"px\",\"sa_offcavas_sidebar_w-lap-size\":\"350\",\"sa_offcavas_sidebar_w-tab-choices\":\"px\",\"sa_offcavas_sidebar_w-tab-size\":\"350\",\"sa_offcavas_sidebar_w-mob-choices\":\"px\",\"sa_offcavas_sidebar_w-mob-size\":\"350\",\"sa_offcavas_content_bg-color\":\"\",\"sa_offcavas_content_bg-select\":\"media-library\",\"sa_offcavas_content_bg-image\":\"\",\"sa_offcavas_content_bg-url\":\"\",\"sa_offcavas_content_bg-position\":\"center center\",\"sa_offcavas_content_bg-attachment\":\"\",\"sa_offcavas_content_bg-repeat\":\"no-repeat\",\"sa_offcavas_content_bg-size-lap\":\"cover\",\"sa_offcavas_content_bg-size-tab\":\"cover\",\"sa_offcavas_content_bg-size-mob\":\"cover\",\"sa_offcavas_overlay_bg-color\":\"\",\"sa_offcavas_overlay_bg-select\":\"media-library\",\"sa_offcavas_overlay_bg-image\":\"\",\"sa_offcavas_overlay_bg-url\":\"\",\"sa_offcavas_overlay_bg-position\":\"center center\",\"sa_offcavas_overlay_bg-attachment\":\"\",\"sa_offcavas_overlay_bg-repeat\":\"no-repeat\",\"sa_offcavas_overlay_bg-size-lap\":\"cover\",\"sa_offcavas_overlay_bg-size-tab\":\"cover\",\"sa_offcavas_overlay_bg-size-mob\":\"cover\",\"sa_offcavas_content_padding-lap-choices\":\"px\",\"sa_offcavas_content_padding-lap-top\":\"\",\"sa_offcavas_content_padding-lap-right\":\"\",\"sa_offcavas_content_padding-lap-bottom\":\"\",\"sa_offcavas_content_padding-lap-left\":\"\",\"sa_offcavas_content_padding-tab-choices\":\"px\",\"sa_offcavas_content_padding-tab-top\":\"\",\"sa_offcavas_content_padding-tab-right\":\"\",\"sa_offcavas_content_padding-tab-bottom\":\"\",\"sa_offcavas_content_padding-tab-left\":\"\",\"sa_offcavas_content_padding-mob-choices\":\"px\",\"sa_offcavas_content_padding-mob-top\":\"\",\"sa_offcavas_content_padding-mob-right\":\"\",\"sa_offcavas_content_padding-mob-bottom\":\"\",\"sa_offcavas_content_padding-mob-left\":\"\",\"sa_offcavas_close_icon\":\"fas fa-times\",\"sa_offcavas_close_icon_s-lap-choices\":\"px\",\"sa_offcavas_close_icon_s-lap-size\":\"17\",\"sa_offcavas_close_icon_s-tab-choices\":\"px\",\"sa_offcavas_close_icon_s-tab-size\":\"17\",\"sa_offcavas_close_icon_s-mob-choices\":\"px\",\"sa_offcavas_close_icon_s-mob-size\":\"17\",\"sa_offcavas_close_icon_c\":\"#000000\",\"sa_offcavas_close_icon_c_h\":\"#f15a46\",\"sa_offcavas_close_icon_align\":\"right\",\"sa_offcavas_close_icon_padding-lap-choices\":\"px\",\"sa_offcavas_close_icon_padding-lap-top\":\"\",\"sa_offcavas_close_icon_padding-lap-right\":\"\",\"sa_offcavas_close_icon_padding-lap-bottom\":\"\",\"sa_offcavas_close_icon_padding-lap-left\":\"\",\"sa_offcavas_close_icon_padding-tab-choices\":\"px\",\"sa_offcavas_close_icon_padding-tab-top\":\"\",\"sa_offcavas_close_icon_padding-tab-right\":\"\",\"sa_offcavas_close_icon_padding-tab-bottom\":\"\",\"sa_offcavas_close_icon_padding-tab-left\":\"\",\"sa_offcavas_close_icon_padding-mob-choices\":\"px\",\"sa_offcavas_close_icon_padding-mob-top\":\"\",\"sa_offcavas_close_icon_padding-mob-right\":\"\",\"sa_offcavas_close_icon_padding-mob-bottom\":\"\",\"sa_offcavas_close_icon_padding-mob-left\":\"\",\"sa_offcavas_content_value\":\"Insert Short Code Here and Make A Nice Design.....\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Offcanvas_content\",\"shortcode-addons-elements-id\":\"92\",\"shortcode-addons-elements-template\":\"Style_2\",\"sa_offcavas_content_bg-img\":\"0\",\"sa_offcavas_overlay_bg-img\":\"0\"}","stylesheet":".shortcode-addons-wrapper-92 .sa_addons_oc_container_style_2 .sa_addons_oc_style_2{max-width: 300px;height: 300px;border-style: solid;border-width: 5px 5px 5px 5px;border-color: #ffffff;border-radius: 5px 5px 5px 5px;-webkit-box-shadow: 1px 1px 15px 2px rgba(189, 174, 174, 1);-moz-box-shadow: 1px 1px 15px 2px rgba(189, 174, 174, 1);box-shadow: 1px 1px 15px 2px rgba(189, 174, 174, 1);}.shortcode-addons-wrapper-92 .sa_addons_oc_container_style_2{padding: 0px 0px 0px 0px;}.shortcode-addons-wrapper-92 .sa_addons_oc_container_style_2 .sa_addons_oc_show_content{width: 350px;background: ;}.shortcode-addons-wrapper-92 .sa_addons_oc_container_style_2 .sa_addons_oc_content_overlay{background: ;}.shortcode-addons-wrapper-92 .sa_addons_oc_container_style_2 .sa_addons_oc_content_close_icon{font-size: 17px;color: #000000;text-align: right;}.shortcode-addons-wrapper-92 .sa_addons_oc_container_style_2 .sa_addons_oc_content_close_icon:hover{color: #f15a46;}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-92 .sa_addons_oc_container_style_2 .sa_addons_oc_style_2{max-width: 300px;height: 300px;}.shortcode-addons-wrapper-92 .sa_addons_oc_container_style_2 .sa_addons_oc_show_content{width: 350px;}.shortcode-addons-wrapper-92 .sa_addons_oc_container_style_2 .sa_addons_oc_content_close_icon{font-size: 17px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-92 .sa_addons_oc_container_style_2 .sa_addons_oc_style_2{max-width: 300px;height: 300px;}.shortcode-addons-wrapper-92 .sa_addons_oc_container_style_2 .sa_addons_oc_show_content{width: 350px;}.shortcode-addons-wrapper-92 .sa_addons_oc_container_style_2 .sa_addons_oc_content_close_icon{font-size: 17px;}}","font_family":"[]"},"child":[]}',
            '{"style":{"id":"93","type":"Offcanvas_content","name":"style 3","style_name":"Style_3","rawdata":"{\"sa_offcavas_btn_value\":\"<span style=\\\"font-size:24px;color:green\\\">Please insert a Shortcode or text here...<\\\/span>\",\"sa_offcavas_sidebar_posi\":\"sa_offcavas_sidebar_left\",\"sa_offcavas_sidebar_w-lap-choices\":\"px\",\"sa_offcavas_sidebar_w-lap-size\":\"350\",\"sa_offcavas_sidebar_w-tab-choices\":\"px\",\"sa_offcavas_sidebar_w-tab-size\":\"350\",\"sa_offcavas_sidebar_w-mob-choices\":\"px\",\"sa_offcavas_sidebar_w-mob-size\":\"350\",\"sa_offcavas_content_bg-color\":\"\",\"sa_offcavas_content_bg-select\":\"media-library\",\"sa_offcavas_content_bg-image\":\"\",\"sa_offcavas_content_bg-url\":\"\",\"sa_offcavas_content_bg-position\":\"center center\",\"sa_offcavas_content_bg-attachment\":\"\",\"sa_offcavas_content_bg-repeat\":\"no-repeat\",\"sa_offcavas_content_bg-size-lap\":\"cover\",\"sa_offcavas_content_bg-size-tab\":\"cover\",\"sa_offcavas_content_bg-size-mob\":\"cover\",\"sa_offcavas_overlay_bg-color\":\"\",\"sa_offcavas_overlay_bg-select\":\"media-library\",\"sa_offcavas_overlay_bg-image\":\"\",\"sa_offcavas_overlay_bg-url\":\"\",\"sa_offcavas_overlay_bg-position\":\"center center\",\"sa_offcavas_overlay_bg-attachment\":\"\",\"sa_offcavas_overlay_bg-repeat\":\"no-repeat\",\"sa_offcavas_overlay_bg-size-lap\":\"cover\",\"sa_offcavas_overlay_bg-size-tab\":\"cover\",\"sa_offcavas_overlay_bg-size-mob\":\"cover\",\"sa_offcavas_content_padding-lap-choices\":\"px\",\"sa_offcavas_content_padding-lap-top\":\"\",\"sa_offcavas_content_padding-lap-right\":\"\",\"sa_offcavas_content_padding-lap-bottom\":\"\",\"sa_offcavas_content_padding-lap-left\":\"\",\"sa_offcavas_content_padding-tab-choices\":\"px\",\"sa_offcavas_content_padding-tab-top\":\"\",\"sa_offcavas_content_padding-tab-right\":\"\",\"sa_offcavas_content_padding-tab-bottom\":\"\",\"sa_offcavas_content_padding-tab-left\":\"\",\"sa_offcavas_content_padding-mob-choices\":\"px\",\"sa_offcavas_content_padding-mob-top\":\"\",\"sa_offcavas_content_padding-mob-right\":\"\",\"sa_offcavas_content_padding-mob-bottom\":\"\",\"sa_offcavas_content_padding-mob-left\":\"\",\"sa_offcavas_close_icon\":\"fas fa-times\",\"sa_offcavas_close_icon_s-lap-choices\":\"px\",\"sa_offcavas_close_icon_s-lap-size\":\"17\",\"sa_offcavas_close_icon_s-tab-choices\":\"px\",\"sa_offcavas_close_icon_s-tab-size\":\"17\",\"sa_offcavas_close_icon_s-mob-choices\":\"px\",\"sa_offcavas_close_icon_s-mob-size\":\"17\",\"sa_offcavas_close_icon_c\":\"#000000\",\"sa_offcavas_close_icon_c_h\":\"#f15a46\",\"sa_offcavas_close_icon_align\":\"right\",\"sa_offcavas_close_icon_padding-lap-choices\":\"px\",\"sa_offcavas_close_icon_padding-lap-top\":\"\",\"sa_offcavas_close_icon_padding-lap-right\":\"\",\"sa_offcavas_close_icon_padding-lap-bottom\":\"\",\"sa_offcavas_close_icon_padding-lap-left\":\"\",\"sa_offcavas_close_icon_padding-tab-choices\":\"px\",\"sa_offcavas_close_icon_padding-tab-top\":\"\",\"sa_offcavas_close_icon_padding-tab-right\":\"\",\"sa_offcavas_close_icon_padding-tab-bottom\":\"\",\"sa_offcavas_close_icon_padding-tab-left\":\"\",\"sa_offcavas_close_icon_padding-mob-choices\":\"px\",\"sa_offcavas_close_icon_padding-mob-top\":\"\",\"sa_offcavas_close_icon_padding-mob-right\":\"\",\"sa_offcavas_close_icon_padding-mob-bottom\":\"\",\"sa_offcavas_close_icon_padding-mob-left\":\"\",\"sa_offcavas_content_value\":\"Insert Short Code Here and Make A Nice Design.....\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Offcanvas_content\",\"shortcode-addons-elements-id\":\"93\",\"shortcode-addons-elements-template\":\"Style_3\",\"sa_offcavas_content_bg-img\":\"0\",\"sa_offcavas_overlay_bg-img\":\"0\"}","stylesheet":".shortcode-addons-wrapper-93 .sa_addons_oc_container_style_3 .sa_addons_oc_show_content{width: 350px;background: ;}.shortcode-addons-wrapper-93 .sa_addons_oc_container_style_3 .sa_addons_oc_content_overlay{background: ;}.shortcode-addons-wrapper-93 .sa_addons_oc_container_style_3 .sa_addons_oc_content_close_icon{font-size: 17px;color: #000000;text-align: right;}.shortcode-addons-wrapper-93 .sa_addons_oc_container_style_3 .sa_addons_oc_content_close_icon:hover{color: #f15a46;}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-93 .sa_addons_oc_container_style_3 .sa_addons_oc_show_content{width: 350px;}.shortcode-addons-wrapper-93 .sa_addons_oc_container_style_3 .sa_addons_oc_content_close_icon{font-size: 17px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-93 .sa_addons_oc_container_style_3 .sa_addons_oc_show_content{width: 350px;}.shortcode-addons-wrapper-93 .sa_addons_oc_container_style_3 .sa_addons_oc_content_close_icon{font-size: 17px;}}","font_family":"[]"},"child":[]}',     
        );
    }
}
