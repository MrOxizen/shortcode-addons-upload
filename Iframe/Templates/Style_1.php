<?php

namespace SHORTCODE_ADDONS_UPLOAD\Iframe\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_1 extends Templates {

    public function default_render($style, $child, $admin) {
        $autoh = $screen = $scroll = '';
//        echo '<pre>';
//        print_r($style);
//        echo '</pre>';
//        if ('yes' == $settings['allowfullscreen']) {
//            $this->add_render_attribute('iframe', 'allowfullscreen');
//        } else {
//            $this->add_render_attribute('iframe', 'donotallowfullscreen');
//        }
        if (array_key_exists('sa_iframe_style_1_auto_height', $style) && $style['sa_iframe_style_1_auto_height'] != 'no') {
            $autoh = 'data-auto_height';
        }
        if (array_key_exists('sa_iframe_style_1_fullscreen', $style) && $style['sa_iframe_style_1_fullscreen'] == 'yes') {
            $screen = 'allowfullscreen';
        } else {
            $screen = 'donotallowfullscreen';
        }
        if (array_key_exists('sa_iframe_style_1_scroll', $style) && $style['sa_iframe_style_1_scroll'] != 'yes') {
            $scroll = 'scrolling= "no"';
        }
        echo ' <div  class="sa-iframe-style-1-section" ' . $this->animation_render('sa_iframe_style_1_animation', $style) . '>
                    <iframe class="sa-iframe-style-1" src="' . $style['sa_iframe_style_1_text'] . '"  ' . $autoh . ' '.$screen.'  '.$scroll.'>
                    </iframe>
                </div>';
    }

    public function inline_public_jquery() {
        $jquery = "";
        $jquery .= ' 
                  var $iframe = $(".sa-iframe-style-1-section > iframe"),
            $autoHeight = $iframe.data("auto_height");

            if (!$iframe.length) {
                return;
            }

            if ($autoHeight) {
                $($iframe).load(function () {
                    $(this).height($(this).contents().find("html").height());
                });
            }';
        return $jquery;
    }

}
