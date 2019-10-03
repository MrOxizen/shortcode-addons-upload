<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Image_accordion;

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

class Image_accordion extends Elements_Frontend
{

    public function pre_active()
    {
        return array('style-1', 'style-2');
    }

    public function templates()
    {
        return array(
            '{"style":{"id":"21","type":"Image_accordion","name":"Style 01","style_name":"Style_1","rawdata":"{\"sa_image_accordion_data\":{\"rep1\":{\"sa_image_accordion_image-color\":\"rgba(77,77,77,0.39)\",\"sa_image_accordion_image-img\":\"yes\",\"sa_image_accordion_image-select\":\"media-library\",\"sa_image_accordion_image-image\":\"https:\\\/\\\/www.oxilab.org\\\/wp-content\\\/uploads\\\/2019\\\/04\\\/pexels-photo-210019-1.png\",\"sa_image_accordion_image-url\":\"\",\"sa_image_accordion_image-position\":\"center center\",\"sa_image_accordion_image-attachment\":\"\",\"sa_image_accordion_image-repeat\":\"no-repeat\",\"sa_image_accordion_image-size-lap\":\"cover\",\"sa_image_accordion_image-size-tab\":\"cover\",\"sa_image_accordion_image-size-mob\":\"cover\",\"sa_image_accordion_url-url\":\"\",\"sa_image_accordion_url-follow\":\"yes\",\"sa_image_accordion_url-id\":\"\",\"sa_icon_accordion_item_title\":\"Accordion Item Title\",\"sa_icon_accordion_item_description\":\"Accordion Short Details goes here \",\"sa_image_accordion_url_open\":\"0\",\"sa_image_accordion_url-target\":\"0\"},\"rep4\":{\"sa_image_accordion_image-color\":\"rgba(204,12,12,0.40)\",\"sa_image_accordion_image-img\":\"yes\",\"sa_image_accordion_image-select\":\"media-library\",\"sa_image_accordion_image-image\":\"https:\\\/\\\/www.oxilab.org\\\/wp-content\\\/uploads\\\/2019\\\/04\\\/pexels-photo-210019.png\",\"sa_image_accordion_image-url\":\"\",\"sa_image_accordion_image-position\":\"center center\",\"sa_image_accordion_image-attachment\":\"\",\"sa_image_accordion_image-repeat\":\"no-repeat\",\"sa_image_accordion_image-size-lap\":\"cover\",\"sa_image_accordion_image-size-tab\":\"cover\",\"sa_image_accordion_image-size-mob\":\"cover\",\"sa_image_accordion_url-url\":\"\",\"sa_image_accordion_url-follow\":\"yes\",\"sa_image_accordion_url-id\":\"\",\"sa_icon_accordion_item_title\":\"Accordion Item Title\",\"sa_icon_accordion_item_description\":\"Accordion Short Details goes here \",\"sa_image_accordion_url_open\":\"0\",\"sa_image_accordion_url-target\":\"0\"},\"rep3\":{\"sa_image_accordion_image-color\":\"rgba(77,77,77,0.39)\",\"sa_image_accordion_image-img\":\"yes\",\"sa_image_accordion_image-select\":\"media-library\",\"sa_image_accordion_image-image\":\"https:\\\/\\\/www.oxilab.org\\\/wp-content\\\/uploads\\\/2019\\\/04\\\/pexels-photo-210019-2.png\",\"sa_image_accordion_image-url\":\"\",\"sa_image_accordion_image-position\":\"center center\",\"sa_image_accordion_image-attachment\":\"\",\"sa_image_accordion_image-repeat\":\"no-repeat\",\"sa_image_accordion_image-size-lap\":\"cover\",\"sa_image_accordion_image-size-tab\":\"cover\",\"sa_image_accordion_image-size-mob\":\"cover\",\"sa_image_accordion_url-url\":\"\",\"sa_image_accordion_url-follow\":\"yes\",\"sa_image_accordion_url-id\":\"\",\"sa_icon_accordion_item_title\":\"Accordion Item Title\",\"sa_icon_accordion_item_description\":\"Accordion Short Details goes here \",\"sa_image_accordion_url_open\":\"0\",\"sa_image_accordion_url-target\":\"0\"},\"rep2\":{\"sa_image_accordion_image-color\":\"rgba(245,3,3,0.40)\",\"sa_image_accordion_image-img\":\"yes\",\"sa_image_accordion_image-select\":\"media-library\",\"sa_image_accordion_image-image\":\"https:\\\/\\\/www.oxilab.org\\\/wp-content\\\/uploads\\\/2019\\\/04\\\/pexels-photo-210019-3.png\",\"sa_image_accordion_image-url\":\"\",\"sa_image_accordion_image-position\":\"center center\",\"sa_image_accordion_image-attachment\":\"\",\"sa_image_accordion_image-repeat\":\"no-repeat\",\"sa_image_accordion_image-size-lap\":\"cover\",\"sa_image_accordion_image-size-tab\":\"cover\",\"sa_image_accordion_image-size-mob\":\"cover\",\"sa_image_accordion_url-url\":\"\",\"sa_image_accordion_url-follow\":\"yes\",\"sa_image_accordion_url-id\":\"\",\"sa_icon_accordion_item_title\":\"Accordion Item Title\",\"sa_icon_accordion_item_description\":\"Accordion Short Details goes here \",\"sa_image_accordion_url_open\":\"0\",\"sa_image_accordion_url-target\":\"0\"}},\"sa_image_accordion_datanm\":\"4\",\"sa-image_accordion-body-width-lap-choices\":\"px\",\"sa-image_accordion-body-width-lap-size\":\"1000\",\"sa-image_accordion-body-width-tab-choices\":\"px\",\"sa-image_accordion-body-width-tab-size\":\"1000\",\"sa-image_accordion-body-width-mob-choices\":\"px\",\"sa-image_accordion-body-width-mob-size\":\"1000\",\"sa-image_accordion-body-height-lap-choices\":\"px\",\"sa-image_accordion-body-height-lap-size\":\"400\",\"sa-image_accordion-body-height-tab-choices\":\"px\",\"sa-image_accordion-body-height-tab-size\":\"300\",\"sa-image_accordion-body-height-mob-choices\":\"px\",\"sa-image_accordion-body-height-mob-size\":\"300\",\"sa_image_accordion_margin-lap-choices\":\"px\",\"sa_image_accordion_margin-lap-top\":\"\",\"sa_image_accordion_margin-lap-right\":\"\",\"sa_image_accordion_margin-lap-bottom\":\"\",\"sa_image_accordion_margin-lap-left\":\"\",\"sa_image_accordion_margin-tab-choices\":\"px\",\"sa_image_accordion_margin-tab-top\":\"\",\"sa_image_accordion_margin-tab-right\":\"\",\"sa_image_accordion_margin-tab-bottom\":\"\",\"sa_image_accordion_margin-tab-left\":\"\",\"sa_image_accordion_margin-mob-choices\":\"px\",\"sa_image_accordion_margin-mob-top\":\"\",\"sa_image_accordion_margin-mob-right\":\"\",\"sa_image_accordion_margin-mob-bottom\":\"\",\"sa_image_accordion_margin-mob-left\":\"\",\"sa-image_accordion-overlay_alignment\":\"center\",\"sa-image_accordion-overlay_animation\":\"default\",\"sa-image_accordion-heading-typho-font\":\"\",\"sa-image_accordion-heading-typho-size-lap-choices\":\"px\",\"sa-image_accordion-heading-typho-size-lap-size\":\"\",\"sa-image_accordion-heading-typho-size-tab-choices\":\"px\",\"sa-image_accordion-heading-typho-size-tab-size\":\"\",\"sa-image_accordion-heading-typho-size-mob-choices\":\"px\",\"sa-image_accordion-heading-typho-size-mob-size\":\"\",\"sa-image_accordion-heading-typho-weight\":\"\",\"sa-image_accordion-heading-typho-transform\":\"\",\"sa-image_accordion-heading-typho-style\":\"\",\"sa-image_accordion-heading-typho-decoration\":\"\",\"sa-image_accordion-heading-typho-l-height-lap-choices\":\"px\",\"sa-image_accordion-heading-typho-l-height-lap-size\":\"\",\"sa-image_accordion-heading-typho-l-height-tab-choices\":\"px\",\"sa-image_accordion-heading-typho-l-height-tab-size\":\"\",\"sa-image_accordion-heading-typho-l-height-mob-choices\":\"px\",\"sa-image_accordion-heading-typho-l-height-mob-size\":\"\",\"sa-image_accordion-heading-typho-l-spacing-lap-choices\":\"px\",\"sa-image_accordion-heading-typho-l-spacing-lap-size\":\"\",\"sa-image_accordion-heading-typho-l-spacing-tab-choices\":\"px\",\"sa-image_accordion-heading-typho-l-spacing-tab-size\":\"\",\"sa-image_accordion-heading-typho-l-spacing-mob-choices\":\"px\",\"sa-image_accordion-heading-typho-l-spacing-mob-size\":\"\",\"sa-image_accordion-heading-color\":\"#ffffff\",\"sa-image_accordion-heading-shadow-color\":\"#ffffff\",\"sa-image_accordion-heading-shadow-blur-size\":\"0\",\"sa-image_accordion-heading-shadow-horizontal-size\":\"0\",\"sa-image_accordion-heading-shadow-vertical-size\":\"0\",\"sa-image_accordion-heading-padding-lap-choices\":\"px\",\"sa-image_accordion-heading-padding-lap-top\":\"0\",\"sa-image_accordion-heading-padding-lap-right\":\"0\",\"sa-image_accordion-heading-padding-lap-bottom\":\"0\",\"sa-image_accordion-heading-padding-lap-left\":\"0\",\"sa-image_accordion-heading-padding-tab-choices\":\"px\",\"sa-image_accordion-heading-padding-tab-top\":\"0\",\"sa-image_accordion-heading-padding-tab-right\":\"0\",\"sa-image_accordion-heading-padding-tab-bottom\":\"0\",\"sa-image_accordion-heading-padding-tab-left\":\"0\",\"sa-image_accordion-heading-padding-mob-choices\":\"px\",\"sa-image_accordion-heading-padding-mob-top\":\"0\",\"sa-image_accordion-heading-padding-mob-right\":\"0\",\"sa-image_accordion-heading-padding-mob-bottom\":\"0\",\"sa-image_accordion-heading-padding-mob-left\":\"0\",\"sa-image_accordion-details-typho-font\":\"\",\"sa-image_accordion-details-typho-size-lap-choices\":\"px\",\"sa-image_accordion-details-typho-size-lap-size\":\"\",\"sa-image_accordion-details-typho-size-tab-choices\":\"px\",\"sa-image_accordion-details-typho-size-tab-size\":\"\",\"sa-image_accordion-details-typho-size-mob-choices\":\"px\",\"sa-image_accordion-details-typho-size-mob-size\":\"\",\"sa-image_accordion-details-typho-weight\":\"\",\"sa-image_accordion-details-typho-transform\":\"\",\"sa-image_accordion-details-typho-style\":\"\",\"sa-image_accordion-details-typho-decoration\":\"\",\"sa-image_accordion-details-typho-l-height-lap-choices\":\"px\",\"sa-image_accordion-details-typho-l-height-lap-size\":\"\",\"sa-image_accordion-details-typho-l-height-tab-choices\":\"px\",\"sa-image_accordion-details-typho-l-height-tab-size\":\"\",\"sa-image_accordion-details-typho-l-height-mob-choices\":\"px\",\"sa-image_accordion-details-typho-l-height-mob-size\":\"\",\"sa-image_accordion-details-typho-l-spacing-lap-choices\":\"px\",\"sa-image_accordion-details-typho-l-spacing-lap-size\":\"\",\"sa-image_accordion-details-typho-l-spacing-tab-choices\":\"px\",\"sa-image_accordion-details-typho-l-spacing-tab-size\":\"\",\"sa-image_accordion-details-typho-l-spacing-mob-choices\":\"px\",\"sa-image_accordion-details-typho-l-spacing-mob-size\":\"\",\"sa-image_accordion-details-color\":\"#ffffff\",\"sa-image_accordion-details-shadow-color\":\"#ffffff\",\"sa-image_accordion-details-shadow-blur-size\":\"0\",\"sa-image_accordion-details-shadow-horizontal-size\":\"0\",\"sa-image_accordion-details-shadow-vertical-size\":\"0\",\"sa-image_accordion-details-padding-lap-choices\":\"px\",\"sa-image_accordion-details-padding-lap-top\":\"0\",\"sa-image_accordion-details-padding-lap-right\":\"0\",\"sa-image_accordion-details-padding-lap-bottom\":\"0\",\"sa-image_accordion-details-padding-lap-left\":\"0\",\"sa-image_accordion-details-padding-tab-choices\":\"px\",\"sa-image_accordion-details-padding-tab-top\":\"0\",\"sa-image_accordion-details-padding-tab-right\":\"0\",\"sa-image_accordion-details-padding-tab-bottom\":\"0\",\"sa-image_accordion-details-padding-tab-left\":\"0\",\"sa-image_accordion-details-padding-mob-choices\":\"px\",\"sa-image_accordion-details-padding-mob-top\":\"0\",\"sa-image_accordion-details-padding-mob-right\":\"0\",\"sa-image_accordion-details-padding-mob-bottom\":\"0\",\"sa-image_accordion-details-padding-mob-left\":\"0\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Image_accordion\",\"shortcode-addons-elements-id\":\"21\",\"shortcode-addons-elements-template\":\"Style_1\"}","stylesheet":".shortcode-addons-wrapper-21 .oxi-addons-background-image-rep1{background: linear-gradient(0deg, rgba(77,77,77,0.39) 0%, rgba(77,77,77,0.39) 100%), url(\'https:\/\/www.oxilab.org\/wp-content\/uploads\/2019\/04\/pexels-photo-210019-1.png\') no-repeat center center;background-size: cover;}.shortcode-addons-wrapper-21 .oxi-addons-background-image-rep4{background: linear-gradient(0deg, rgba(204,12,12,0.40) 0%, rgba(204,12,12,0.40) 100%), url(\'https:\/\/www.oxilab.org\/wp-content\/uploads\/2019\/04\/pexels-photo-210019.png\') no-repeat center center;background-size: cover;}.shortcode-addons-wrapper-21 .oxi-addons-background-image-rep3{background: linear-gradient(0deg, rgba(77,77,77,0.39) 0%, rgba(77,77,77,0.39) 100%), url(\'https:\/\/www.oxilab.org\/wp-content\/uploads\/2019\/04\/pexels-photo-210019-2.png\') no-repeat center center;background-size: cover;}.shortcode-addons-wrapper-21 .oxi-addons-background-image-rep2{background: linear-gradient(0deg, rgba(245,3,3,0.40) 0%, rgba(245,3,3,0.40) 100%), url(\'https:\/\/www.oxilab.org\/wp-content\/uploads\/2019\/04\/pexels-photo-210019-3.png\') no-repeat center center;background-size: cover;}.shortcode-addons-wrapper-21 .oxi-addons-background-image-repidrep{}.shortcode-addons-wrapper-21 .oxi-addons-wrapper-image-accordion .oxi-addons-accordion{max-width:1000px;}.shortcode-addons-wrapper-21 .oxi-addons-wrapper-image-accordion .oxi-addons-accordion .oxi-link{height:400px;justify-content: center;}.shortcode-addons-wrapper-21 .oxi-addons-wrapper-image-accordion .oxi-addons-accordion .oxi-addons-heading{color: #ffffff;padding:0px 0px 0px 0px;}.shortcode-addons-wrapper-21 .oxi-addons-wrapper-image-accordion .oxi-addons-accordion .oxi-addons-details{color: #ffffff;padding:0px 0px 0px 0px;}@media only screen and (min-width : 669px) and (max-width : 993px){.shortcode-addons-wrapper-21 .oxi-addons-background-image-rep1{background-size: cover;}.shortcode-addons-wrapper-21 .oxi-addons-background-image-rep4{background-size: cover;}.shortcode-addons-wrapper-21 .oxi-addons-background-image-rep3{background-size: cover;}.shortcode-addons-wrapper-21 .oxi-addons-background-image-rep2{background-size: cover;}.shortcode-addons-wrapper-21 .oxi-addons-wrapper-image-accordion .oxi-addons-accordion{max-width:1000px;}.shortcode-addons-wrapper-21 .oxi-addons-wrapper-image-accordion .oxi-addons-accordion .oxi-link{height:300px;}.shortcode-addons-wrapper-21 .oxi-addons-wrapper-image-accordion .oxi-addons-accordion .oxi-addons-heading{padding:0px 0px 0px 0px;}.shortcode-addons-wrapper-21 .oxi-addons-wrapper-image-accordion .oxi-addons-accordion .oxi-addons-details{padding:0px 0px 0px 0px;}}@media only screen and (max-width : 668px){.shortcode-addons-wrapper-21 .oxi-addons-background-image-rep1{background-size: cover;}.shortcode-addons-wrapper-21 .oxi-addons-background-image-rep4{background-size: cover;}.shortcode-addons-wrapper-21 .oxi-addons-background-image-rep3{background-size: cover;}.shortcode-addons-wrapper-21 .oxi-addons-background-image-rep2{background-size: cover;}.shortcode-addons-wrapper-21 .oxi-addons-wrapper-image-accordion .oxi-addons-accordion{max-width:1000px;}.shortcode-addons-wrapper-21 .oxi-addons-wrapper-image-accordion .oxi-addons-accordion .oxi-link{height:300px;}.shortcode-addons-wrapper-21 .oxi-addons-wrapper-image-accordion .oxi-addons-accordion .oxi-addons-heading{padding:0px 0px 0px 0px;}.shortcode-addons-wrapper-21 .oxi-addons-wrapper-image-accordion .oxi-addons-accordion .oxi-addons-details{padding:0px 0px 0px 0px;}}","font_family":"[]"},"child":[{"id":"66","styleid":"21","rawdata":"null","stylesheet":""},{"id":"67","styleid":"21","rawdata":"null","stylesheet":""},{"id":"68","styleid":"21","rawdata":"null","stylesheet":""},{"id":"69","styleid":"21","rawdata":"null","stylesheet":""}]}',
            'Style 17OXIIMPORTicon_effectsOXIIMPORTstyle-17OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#ffffff| oxi_addons-icon-bg-color |rgba(12,209,186,1.00)|oxi_addons-icon-animation||:false:false:500:10:0.2|10//| oxi-addons-icon-border-radius |90| oxi-addons-preview-BG |#ffffff| oxi_addons-icon-hover-color |#ffffff| oxi_addons-icon-hover-bg-color |rgba(4,140,126,1.00)| oxi_addons-icon-padding |0|0|0| oxi_addons-icon-border |5|5|5|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn2||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
        );
    }
}
