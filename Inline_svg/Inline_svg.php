<?php

namespace SHORTCODE_ADDONS_UPLOAD\Inline_svg;

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

class Inline_svg extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1');
    }

    public function templates() {
        return array(
            '{"style":{"id":"39","type":"Inline_svg","name":"Style 1","style_name":"Style_1","rawdata":"{\"oxi_inline_svg_svg-select\":\"custom-url\",\"oxi_inline_svg_svg-image\":\"https:\\\/\\\/www.shortcode-addons.com\\\/wp-content\\\/uploads\\\/2020\\\/01\\\/heart.svg\",\"oxi_inline_svg_svg-url\":\"https:\\\/\\\/www.shortcode-addons.com\\\/wp-content\\\/uploads\\\/2020\\\/01\\\/heart.svg\",\"oxi_inline_svg_link-url\":\"\",\"oxi_inline_svg_link-follow\":\"yes\",\"oxi_inline_svg_link-id\":\"\",\"oxi_inline_svg_alignment\":\"center\",\"oxi_inline_svg_animation-type\":\"\",\"oxi_inline_svg_animation-duration-size\":\"1000\",\"oxi_inline_svg_animation-delay-size\":\"0\",\"oxi_inline_svg_animation-offset-size\":\"100\",\"oxi_inline_svg_aspect_ratio\":\"yes\",\"oxi_inline_svg_max_width-lap-choices\":\"px\",\"oxi_inline_svg_max_width-lap-size\":\"150\",\"oxi_inline_svg_max_width-tab-choices\":\"px\",\"oxi_inline_svg_max_width-tab-size\":\"150\",\"oxi_inline_svg_max_width-mob-choices\":\"px\",\"oxi_inline_svg_max_width-mob-size\":\"150\",\"oxi_inline_svg_height-lap-choices\":\"px\",\"oxi_inline_svg_height-lap-size\":\"150\",\"oxi_inline_svg_height-tab-choices\":\"px\",\"oxi_inline_svg_height-tab-size\":\"150\",\"oxi_inline_svg_height-mob-choices\":\"px\",\"oxi_inline_svg_height-mob-size\":\"150\",\"oxi_inline_svg_inline_css_color\":\"#ffffff\",\"oxi_inline_svg_inline_css_h_color\":\"#ffffff\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Inline_svg\",\"shortcode-addons-elements-id\":\"39\",\"shortcode-addons-elements-template\":\"Style_1\",\"oxi_inline_svg_link-target\":\"0\",\"oxi_inline_svg_animation-looping\":\"0\",\"oxi_inline_svg_custom_width\":\"0\",\"oxi_inline_svg_custom_color\":\"0\",\"oxi_inline_svg_inline_css\":\"0\"}","stylesheet":".shortcode-addons-wrapper-39 .oxi-inline-svg__wrapper{text-align: center;}.shortcode-addons-wrapper-39 .oxi-inline-svg{color:#ffffff;}.shortcode-addons-wrapper-39 .oxi-inline-svg:hover{color:#ffffff;}","font_family":"[]"},"child":[]}',
        );
    }

}
