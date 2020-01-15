<?php

namespace SHORTCODE_ADDONS_UPLOAD\Logo_carousel\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_5
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_5 extends Templates
{

    public function public_css()
    {
        wp_enqueue_style('Swiper.css', SA_ADDONS_UPLOAD_URL . '/Logo_carousel/File/swiper.min.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function public_jquery()
    {
        $this->JSHANDLE = 'Swiper.js';
        wp_enqueue_script('Swiper.js', SA_ADDONS_UPLOAD_URL . '/Logo_carousel/File/swiper.min.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery()
    {
        $style = $this->style;
        $speed = $items = $jquery = $slides_type = $coverflow_type = '';
        $effect = $style['sa_addons_logo_carousel_effect'] != '' ? $style['sa_addons_logo_carousel_effect'] : 'slide';
        $speed = $style['sa_addons_logo_carousel_slider_speed-size'] != '' ? $style['sa_addons_logo_carousel_slider_speed-size'] : 400;
        $margin = $style['sa_addons_logo_carousel_items_gap-lap-size'] != '' ? $style['sa_addons_logo_carousel_items_gap-lap-size'] : 10;
        $margin_tablet = $style['sa_addons_logo_carousel_items_gap-tab-size'] != '' ? $style['sa_addons_logo_carousel_items_gap-tab-size'] : 10;
        $margin_mobile = $style['sa_addons_logo_carousel_items_gap-mob-size'] != '' ? $style['sa_addons_logo_carousel_items_gap-mob-size'] : 10;
        $autoplay = (array_key_exists('sa_logo_carousel_autoplay_switter', $style) && $style['sa_logo_carousel_autoplay_switter'] == 'yes') ? $style['sa_addons_logo_carousel_autoplay_speed-size'] : 999999;
        $loop = (array_key_exists('sa_logo_carousel_loop_switter', $style) && $style['sa_logo_carousel_loop_switter'] == 'yes') ? '1' : '0';
        $grab_cursor = (array_key_exists('sa_logo_carousel_grab_cursor', $style) && $style['sa_logo_carousel_grab_cursor'] == 'yes') ? '1' : '0';
        $pause_on_hover = (array_key_exists('sa_logo_carousel_pause_switter', $style) && $style['sa_logo_carousel_pause_switter'] == 'yes') ? true : false;

        $jquery .= ' var LogoCarousel = new Swiper(".' . $this->WRAPPER . ' .oxi_addons__logo_carousel_style_' . $this->oxiid . '", {
            direction: "horizontal",
            speed: ' . $speed . ',
            effect: "flip",
            paginationClickable: true,
            autoHeight: true,
            grabCursor: ' . $grab_cursor . ',
            loop: ' . $loop . ',
            autoplay: {
                delay: ' . $autoplay . '
            },
            pagination: {
                el: ".swiper__pagination_' . $this->oxiid . '",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper__button_prev_' . $this->oxiid . '",
                prevEl: ".swiper__button_next_' . $this->oxiid . '"
            },
        }); ';
        if ($pause_on_hover) {
            $jquery .= '
            var mySwiper = document.querySelector(".' . $this->WRAPPER . ' .oxi_addons__logo_carousel_style_' . $this->oxiid . '").swiper
            $(".swiper-container").mouseenter(function() {
                mySwiper.autoplay.stop();
              });
              $(".swiper-container").mouseleave(function() {
                mySwiper.autoplay.start();
              });';
        }
        return $jquery;

    }

    public function default_render($style, $child, $admin)
    {

        $rtl = $arrow = $dot = $icon_left = $icon_right = '';

        if ($style['sa_logo_carousel_icon_left']) {
            $icon_left = $this->font_awesome_render($style['sa_logo_carousel_icon_left']);
        }
        if ($style['sa_logo_carousel_icon_right']) {
            $icon_right = $this->font_awesome_render($style['sa_logo_carousel_icon_right']);
        }

        if ((array_key_exists('sa_logo_carousel_pause_arrow', $style) && $style['sa_logo_carousel_pause_arrow'] == 'yes')) {
            $arrow = '
                <div class="swiper-button-prev oxi_addons__icon_left swiper__button_prev_' . $this->oxiid . '">
                    ' . $icon_left . '
                </div>
                <div class="swiper-button-next oxi_addons__icon_right swiper__button_next_' . $this->oxiid . '">
                    ' . $icon_right . '
                </div>
            ';
        }
        if ((array_key_exists('sa_logo_carousel_pause_dots', $style) && $style['sa_logo_carousel_pause_dots'] == 'yes')) {
            $dot = '<div class="oxi_addons__dot_main">
                            <div class="swiper-pagination oxi_addons__dot swiper__pagination_' . $this->oxiid . ' ' . $style['sa_addons_logo_carousel_position'] . '">
                            </div>
                        </div>';
        }

        $rtl = (array_key_exists('sa_addons_logo_carousel_direction', $style) && $style['sa_addons_logo_carousel_direction'] == 'right') ? 'dir="rtl"' : '';
        echo '<div class="oxi_addons_logo_carousel_wrapper">
                <div class="oxi_addons__logo_carousel_style_5">
                <div class="swiper-container ' . $style['sa_logo_carousel_body_switcher'] . ' oxi_addons__logo_carousel_style_' . $this->oxiid . '" ' . $rtl . '>
                    <div class="swiper-wrapper">';
        $repeater = (array_key_exists('sa_logo_carousel_reapeter', $style) && is_array($style['sa_logo_carousel_reapeter'])) ? $style['sa_logo_carousel_reapeter'] : [];
        foreach ($repeater as $key => $value) {

            $image = $title = '';

            if (array_key_exists('sa_logo_carousel_title_link-url', $value) && $value['sa_logo_carousel_title_link-url'] != '') {
                $image = '<a ' . $this->url_render('sa_logo_carousel_title_link', $value) . ' ><img class="oxi_addons__image ' . $style['sa_logo_carousel_grayscale_switter'] . ' ' . $style['sa_logo_carousel_grayscale_switter_hover'] . '" src="' . $this->media_render('sa_logo_carousel_image', $value) . '" alt="slider image"/></a>';
            } else {
                $image = '<img class="oxi_addons__image ' . $style['sa_logo_carousel_image_switcher'] . ' ' . $style['sa_logo_carousel_grayscale_switter'] . ' ' . $style['sa_logo_carousel_grayscale_switter_hover'] . '" src="' . $this->media_render('sa_logo_carousel_image', $value) . '" alt="slider image"/>';
            }
            if ((array_key_exists('sa_logo_carousel_title_show', $value) && $value['sa_logo_carousel_title_show'] == 'yes')) {
                if (array_key_exists('sa_logo_carousel_title', $value) && $value['sa_logo_carousel_title'] != '') {
                    $title = '<div class="oxi_addons__title">' . $this->text_render($value['sa_logo_carousel_title']) . '</div>';
                }
            }

            echo '<div class="swiper-slide">
                    ' . $image . '
                    ' . $title . '
                </div>';
        }

        echo '</div>
                    ' . $arrow . '
                    </div>
               ' . $dot . '
                </div>
            </div>';
    }

}
