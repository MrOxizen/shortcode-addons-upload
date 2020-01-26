<?php

namespace SHORTCODE_ADDONS_UPLOAD\Post_carousel\Files;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\Templates;

class Swiper_Settings_View  extends Templates
{

    public function inline_public_jquery()
    {
        $style = $this->style;
        $prev = '.sa_swiper_slider_next_' . $this->oxiid . '';
        $next = '.sa_swiper_slider_prev_' . $this->oxiid . '';
        $pagin = '.sa_swiper_slider_dots_' . $this->oxiid . '';
        $rtl = $style['sa_swiper_slider_direction'];
        $margin = $style["sa_swiper_slider_items_gap-lap-size"] != '' ? $style["sa_swiper_slider_items_gap-lap-size"] : 10;
        $margin_tablet = $style["sa_swiper_slider_items_gap-tab-size"] != '' ? $style["sa_swiper_slider_items_gap-tab-size"] : 10;
        $margin_mobile = $style["sa_swiper_slider_items_gap-mob-size"] != '' ? $style["sa_swiper_slider_items_gap-mob-size"] : 10;
        $speed = $style["sa_swiper_slider_slider_speed-size"] != '' ? $style["sa_swiper_slider_slider_speed-size"] : 400;
        $autoplay = (array_key_exists('sa_swiper_slider_autoplay_switter', $style) && $style['sa_swiper_slider_autoplay_switter'] == "yes") ? $style['sa_swiper_slider_autoplay_speed-size'] : 999999;
        $loop = (array_key_exists('sa_swiper_slider_loop_switter', $style) && $style["sa_swiper_slider_loop_switter"] == "yes") ? "1" : "0";
        $grab_cursor = (array_key_exists('sa_swiper_slider_grab_cursor', $style) && $style["sa_swiper_slider_grab_cursor"] == "yes") ? "1" : "0";
        $pause_on_hover = (array_key_exists('sa_swiper_slider_pause_switter', $style) && $style["sa_swiper_slider_pause_switter"] == "yes") ? "true" : "false";
        $auto_height = (array_key_exists('sa_swiper_slider_auto_height', $style) && $style["sa_swiper_slider_auto_height"] == "yes") ? "true" : "false";
        $effects = $style["sa_swiper_slider_effect"];
        $centeredSlides = ($effects == 'coverflow') ? 'true' : 'false';
        if ($effects == "coverflow" || $effects == "slide") {
            $items = $style["sa_swiper_slider_visible_items-lap-size"] != '' ? $style["sa_swiper_slider_visible_items-lap-size"] : 3;
            $items_tablet = $style["sa_swiper_slider_visible_items-tab-size"] != '' ? $style["sa_swiper_slider_visible_items-tab-size"] : 2;
            $items_mobile = $style["sa_swiper_slider_visible_items-mob-size"] != '' ? $style["sa_swiper_slider_visible_items-mob-size"] : 1;
        } elseif ($effects == "cube") {
            $items = 1;
            $items_tablet = 1;
            $items_mobile = 1;
        } else {
            $items = "auto";
            $items_tablet = "auto";
            $items_mobile = "auto";
        }
        $js = '';
        $js .= '
        var sa_swiper_slider = $(".' . $this->WRAPPER . ' .sa_swiper_slider_main_wrapper .sa_swiper_slider_triger");
        if("' . $rtl . '" == "right"){
            $(sa_swiper_slider).prop("dir", "rtl");
        }
            var SaSwiperSlider = new Swiper(sa_swiper_slider, {
                direction: "horizontal",
                speed: ' . $speed . ',
                effect: "' . $effects . '",
                centeredSlides: ' . $centeredSlides . ',
                grabCursor: ' . $grab_cursor . ',
                autoHeight: ' . $auto_height . ',
                loop: ' . $loop . ',
                observer: true,
                observeParents: true,
                cubeEffect: {
                    shadow: false,
                    slideShadows: false,
                    shadowOffset: 0,
                    shadowScale: 0,
                },
                autoplay: {
                    delay: ' . $autoplay . '
                },
                pagination: {
                    el: "' . $pagin . '",
                    clickable: true
                },
                navigation: {
                    nextEl: "' . $prev . '",
                    prevEl: "' . $next . '"
                },
                breakpoints: {
                    960: {
                        slidesPerView: "' . $items . '",
                        spaceBetween:  ' . $margin . '
                    },
                    600 : {
                        slidesPerView: "' . $items_tablet . '",
                        spaceBetween:  ' . $margin_tablet . '
                    },
                    480: {
                        slidesPerView: "' . $items_mobile . '",
                        spaceBetween:  ' . $margin_mobile . '
                    }
                }
            });
            if (' . $autoplay . ' === 0) {
                SaSwiperSlider.autoplay.stop();
            }
            if (' . $pause_on_hover . ' == true) {
                sa_swiper_slider.on("mouseenter", function() {
                    SaSwiperSlider.autoplay.stop();
                });
                sa_swiper_slider.on("mouseleave", function() {
                    SaSwiperSlider.autoplay.start();
                });
            }
            ';
        return $js;
    }
    public function slider_default_render($main_clsass = '', $slider_item = '')
    {
        $style = $this->style;
        $arrow = $sa_swiper_slider_arrows_left = $sa_swiper_slider_arrows_right = '';
        if ($style['sa_swiper_slider_arrows_right'] != '') {
            $sa_swiper_slider_arrows_left = $this->font_awesome_render($style['sa_swiper_slider_arrows_right']);
        }
        if ($style['sa_swiper_slider_arrows_left'] != '') {
            $sa_swiper_slider_arrows_right = $this->font_awesome_render($style['sa_swiper_slider_arrows_left']);
        }
        if (array_key_exists('sa_swiper_slider_arrow', $style) && $style['sa_swiper_slider_arrow'] == 'yes') {
            $arrow = '
                <div class="swiper-button-next  sa_swiper_slider_next_' . $this->oxiid . '">
                    ' . $sa_swiper_slider_arrows_left . '
                </div>
                <div class="swiper-button-prev sa_swiper_slider_prev_' . $this->oxiid . '">
                    ' . $sa_swiper_slider_arrows_right . '
                </div>
            ';
        }
        echo '<div class="' . $main_clsass . '  sa_swiper_slider_main_wrapper ' . $style['sa_swiper_slider_dots_position'] . '">
                    <div class="swiper-container sa_swiper_slider_triger ' . $style['sa_swiper_slider_image_switcher'] . '">
                        <div class="swiper-wrapper">
                            ' . $slider_item . '
                        </div>
                    </div>';
        if (array_key_exists('sa_swiper_slider_dots', $style) && $style['sa_swiper_slider_dots'] == 'yes') :
            echo '<div class="swiper-pagination sa_swiper_slider_dots_' . $this->oxiid . '"></div>';
        endif;
        echo $arrow;
        echo '
            </div>
            ';

        $this->inline_css .= '
            .sa_swiper_slider_main_wrapper .sa_swiper_slider_triger {
                max-width: 100%;
            }
            .sa_swiper_slider_main_wrapper .swiper-button-prev::after,
            .sa_swiper_slider_main_wrapper .swiper-button-next::after {
                display: none;
            }
            .sa_swiper_slider_main_wrapper .swiper-button-next,
            .sa_swiper_slider_main_wrapper .swiper-button-prev {
                position: absolute;
                top: 50%;
                z-index: 9999;
            }
            .sa_swiper_slider_main_wrapper .swiper-pagination {
                left: 50%;
                transform: translateX(-50%);
                -webkit-transform: translateX(-50%);
                -moz-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                -o-transform: translateX(-50%);
            }
            .sa_swiper_slider_main_wrapper.sa_swiper_slider_dots_inside .swiper-pagination {
                bottom: 30px;
            }
            .sa_swiper_slider_main_wrapper.sa_swiper_slider_dots_outside .swiper-pagination {
                bottom: -25px;
            }
        ';
    }
}
