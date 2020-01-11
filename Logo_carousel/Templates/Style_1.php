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
        $effect = $speed = $items = $jquery = '';
        $effect = $style['sa_addons_logo_carousel_effect'] != '' ? $style['sa_addons_logo_carousel_effect'] : 'slide';
        $speed = $style['sa_addons_logo_carousel_slider_speed'] != '' ? $style['sa_addons_logo_carousel_slider_speed'] : 400;
        $items = $style['sa_addons_logo_carousel_visible_items-lap-size'] != '' ? $style['sa_addons_logo_carousel_visible_items-lap-size'] : 3;
        $items_tablet = $style['sa_addons_logo_carousel_visible_items-tab-size'] != '' ? $style['sa_addons_logo_carousel_visible_items-tab-size'] : 3;
        $items_mobile = $style['sa_addons_logo_carousel_visible_items-mob-size'] != '' ? $style['sa_addons_logo_carousel_visible_items-mob-size'] : 3;
        $margin = $style['sa_addons_logo_carousel_items_gap-mob-size'] != '' ? $style['sa_addons_logo_carousel_items_gap-mob-size'] : 10;
        $margin_tablet = $style['sa_addons_logo_carousel_items_gap-mob-size'] != '' ? $style['sa_addons_logo_carousel_items_gap-mob-size'] : 10;
        $margin_mobile = $style['sa_addons_logo_carousel_items_gap-mob-size'] != '' ? $style['sa_addons_logo_carousel_items_gap-mob-size'] : 10;
        $autoplay = (array_key_exists('sa_logo_carousel_autoplay_switter', $style) && $style['sa_logo_carousel_autoplay_switter'] == 'yes') ? $style['sa_addons_logo_carousel_autoplay_speed-size'] : 999999;
        $loop = (array_key_exists('sa_logo_carousel_loop_switter', $style) && $style['sa_logo_carousel_loop_switter'] == 'yes') ? true : false;
        $grab_cursor = (array_key_exists('sa_logo_carousel_pause_grab_cursor', $style) && $style['sa_logo_carousel_pause_grab_cursor'] == 'yes') ? true : false;
        $pause_on_hover = (array_key_exists('sa_logo_carousel_pause_switter', $style) && $style['sa_logo_carousel_pause_switter'] == 'yes') ? true : false;

        $jquery .= ' var LogoCarousel = new Swiper(".' . $this->WRAPPER . ' .swiper-container", {
            direction: "horizontal",
            speed: ' . $speed . ',
            effect: "' . $effect . '",
            spaceBetween: ' . $margin . ',
            slidesPerView: ' . $items . ',
            paginationClickable: true,
            autoHeight: true,
            grabCursor: ' . $grab_cursor . ',
            loop: ' . $loop . ',
            autoplay: {
                delay: ' . $autoplay . '
            },
            breakpoints: {
                480: {
                    slidesPerView: ' . $items_mobile . ',
                    spaceBetween:  ' . $margin_mobile . '
                },
                768: {
                    slidesPerView: ' . $items_tablet . ',
                    spaceBetween:  ' . $margin_tablet . '
                }
            }
        }); ';
        if ($pause_on_hover) {
            $jquery .=' $(".' . $this->WRAPPER . ' .swiper-container").hover(function() {
                (this).autoplay.stop();
            }, function() {
                (this).autoplay.start();
            });';  
        }
        return $jquery;

    }

    public function default_render($style, $child, $admin)
    {

        // echo '<pre>';
        // print_r($style);
        // echo '</pre>';

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
