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
use SHORTCODE_ADDONS\Core\Templates;

class Style_1 extends Templates
{

    public function public_css()
    {
        wp_enqueue_style('swiper.js', SA_ADDONS_UPLOAD_URL . '/Logo_carousel/File/swiper.min.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function public_jquery()
    {
        $this->JSHANDLE = 'Swiper';
        wp_enqueue_script('swiper.css', SA_ADDONS_UPLOAD_URL . '/Logo_carousel/File/swiper.min.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery()
    {
        $style = $this->style; 
        $effect = $speed = $items = '';
        if ($style['sa_addons_logo_carousel_effect'] != '') {
            $effect = $style['sa_addons_logo_carousel_effect'];
        }
        if ($style['sa_addons_logo_carousel_slider_speed'] != '') {
            $speed = $style['sa_addons_logo_carousel_slider_speed'];
        }
        if ($style['sa_addons_logo_carousel_visible_items'] != '') {
            $items = $style['sa_addons_logo_carousel_visible_items'];
        }

        $jquery = '';
        $jquery .= 'new Swiper(".' . $this->WRAPPER . ' .swiper-container", {
            direction: "horizontal",
            speed: "' . $speed . '",
            effect: "' . $effect . '",
            slidesPerView: "' . $items . '",
        });';

        return $jquery;

    }

    public function default_render($style, $child, $admin)
    {
        $items = $style['sa_addons_logo_carousel_visible_item'];

        echo 'asdfasdf'. $items;

        echo '<div class="oxi_addons_logo_carousel_wrapper">
                <div class="oxi_addons__logo_carousel_style_1">
                <div class="swiper-container oxi_addons__logo_carousel_style_' . $this->oxiid . '">
                    <div class="swiper-wrapper">';
        $repeater = (array_key_exists('sa_logo_carousel_reapeter', $style) && is_array($style['sa_logo_carousel_reapeter'])) ? $style['sa_logo_carousel_reapeter'] : [];
        foreach ($repeater as $key => $value) {
            echo '<div class="swiper-slide">
                            <img src="' . $this->media_render('sa_logo_carousel_image', $value) . '" alt="slider image"/>
                        </div>';
        }

        echo '</div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                </div>
            </div>';
    }

}
