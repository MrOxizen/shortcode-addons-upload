<?php

namespace SHORTCODE_ADDONS_UPLOAD\Logo_carousel\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS_UPLOAD\Logo_carousel\File\Swiper_Settings_View;

class Style_1 extends Swiper_Settings_View
{
    public $logo_data;
    public function public_css()
    {
        wp_enqueue_style('Swiper.css', SA_ADDONS_UPLOAD_URL . '/Logo_carousel/File/swiper.min.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function public_jquery()
    {
        wp_enqueue_script('Swiper.js', SA_ADDONS_UPLOAD_URL . '/Logo_carousel/File/swiper.min.js', false, SA_ADDONS_PLUGIN_VERSION);
        $this->JSHANDLE = 'Swiper.js';
    }
    public function render_logo()
    {
        $style = $this->style;
        $repeater = (array_key_exists('sa_logo_carousel_reapeter', $style) && is_array($style['sa_logo_carousel_reapeter'])) ? $style['sa_logo_carousel_reapeter'] : [];
        ob_start();
        foreach ($repeater as $key => $value) {

            $image = $title = '';

            if (array_key_exists('sa_logo_carousel_title_link-url', $value) && $value['sa_logo_carousel_title_link-url'] != '') {
                $image = '<a ' . $this->url_render('sa_logo_carousel_title_link', $value) . ' ><img class="oxi_addons__image ' . $style['sa_logo_carousel_grayscale_switter'] . ' ' . $style['sa_logo_carousel_grayscale_switter_hover'] . '" src="' . $this->media_render('sa_logo_carousel_image', $value) . '" alt="slider image"/></a>';
            } else {
                $image = '<img class="oxi_addons__image ' . $style['sa_logo_carousel_grayscale_switter'] . ' ' . $style['sa_logo_carousel_grayscale_switter_hover'] . '" src="' . $this->media_render('sa_logo_carousel_image', $value) . '" alt="slider image"/>';
            }
            if ((array_key_exists('sa_logo_carousel_title_show', $value) && $value['sa_logo_carousel_title_show'] == 'yes')) {
                if (array_key_exists('sa_logo_carousel_title', $value) && $value['sa_logo_carousel_title'] != '') {
                    $title = '<div class="oxi_addons__title">' . $this->text_render($value['sa_logo_carousel_title']) . '</div>';
                }
            }

            echo '<div class="swiper-slide oxi_addons__logo_carousel_item oxi_addons__logo_carousel_style_' . $key . '">
                    ' . $image . '
                    ' . $title . '
                </div>';
        }
        return ob_get_clean();
    }

    public function default_render($style, $child, $admin)
    {
        $this->logo_data = $this->render_logo();
        $this->slider_default_render('oxi_addons__logo_carousel_style_1', $this->logo_data);
    }
}
