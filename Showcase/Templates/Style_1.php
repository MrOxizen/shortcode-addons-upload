<?php

namespace SHORTCODE_ADDONS_UPLOAD\Showcase\Templates;

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

        wp_enqueue_style('slick.min.css', SA_ADDONS_UPLOAD_URL . '/Showcase/File/slick.min.css', false, SA_ADDONS_PLUGIN_VERSION);
    }
    public function public_jquery()
    {
        $this->JSHANDLE = 'slick.min';
        wp_enqueue_script('slick.min', SA_ADDONS_UPLOAD_URL . '/Showcase/File/slick.min.js', false, SA_ADDONS_PLUGIN_VERSION);
    }
    public function default_render($style, $child, $admin)
    {
        $slider_data = '';
        $slider_data = wp_json_encode(array_filter([
            "scrollable_nav" => $style["scrollable_nav"],
            "preview_position" => $style["preview_position"],
            "preview_stack" => $style["preview_stack"],
            "nav_items_lap" => $style["nav_items-lap"],
            "nav_items_tab" => $style["nav_items-tab"],
            "nav_items_mob" => $style["nav_items-mob"],
            "effect" => $style["effect"],
            "animation_speed" => $this->text_render($style["animation_speed"]),
            "arrows" => $style["arrows"],
            "dots" => $style["dots"],
            "autoplay" => $style["autoplay"],
            "autoplay_speed" => $this->text_render($style["autoplay_speed"]),
            "pause_on_hover" => $style["pause_on_hover"],
            "infinite_loop" => $style["infinite_loop"],
            "adaptive_height" => $style["adaptive_height"],
            "arrow_left" => $this->font_awesome_render($style["arrow_left"]),
            "arrow_right" => $this->font_awesome_render($style["arrow_right"]),
        ]));
        $all_data = (array_key_exists('sa_showcase_data', $style) && is_array($style['sa_showcase_data'])) ? $style['sa_showcase_data'] : [];

        echo '<div class="sa_showcase_container_style_1">
                <div class=" sa_showcase_preview_align_' . $style['preview_position'] . ' sa_showcase_dots_' . $style['dots_position'] . '">
                    <div class="sa_showcase" >
                        <div class="sa_showcase_preview_wrap">
                            <div id="sa_showcase_preview_' . $this->oxiid . '" class="sa_showcase_preview" data-slider=\'' . $slider_data . '\'>';
        foreach ($all_data as $key => $item) {
            $image_html = '';
            echo '
                            <div class="sa_showcase_preview_item sa_showcase_preview_item_' . $key . '">';
            if ($item['preview_type'] == 'shortcode') {
                if ($item['preview_shortcode'] != '') {
                    echo $this->text_render($item['preview_shortcode']);
                } else {
                    echo '<div style="color: red; font-size: 22px;">Please Enter Your Shortcode!</div>';
                }
            } else {
                if ($this->media_render('image', $item) != '') {

                    $image_url = $this->media_render('image', $item);

                    $image_html = '<div class="sa_showcase_preview_image">';

                    $image_html .= '<img src="' . esc_url($image_url) . '" alt="">';

                    $image_html .= '</div>';

                    echo $image_html;
                }
            }
            echo '
                            </div>';
        }
        echo '
                            </div>
                        </div>

                        <div class="sa_showcase_navigation">
                            <div class="sa_showcase_navigation_items sa_grid ">';
        foreach ($all_data as $key => $item) {
            $nav_icon = $nav_title = $nav_des = '';
            if ($item['nav_icon_type'] == 'icon' && $item['nav_icon'] != '') {
                $nav_icon = '
                            <span class="sa_showcase_navigation_icon">
                            ' . $this->font_awesome_render($item['nav_icon']) . '
                            </span>
                                ';
            } elseif ($item['nav_icon_type'] == 'image' && $this->media_render('nav_icon_image', $item) != '') {
                $nav_icon = '
                            <span class="sa_showcase_navigation_icon">
                                <img src="' . $this->media_render('nav_icon_image', $item) . '" >
                            </span>
                                ';
            }

            if ($item['title'] != '') {
                $nav_title = '
                            <div class="sa_showcase_navigation_title">
                                ' . $this->text_render($item['title']) . '
                            </div>
                                ';
            }
            if ($item['description'] != '') {
                $nav_des = '
                            <div class="sa_showcase_navigation_description">
                                ' . $this->text_render($item['description']) . '
                            </div>
                                ';
            }
            echo '
                    <div class="sa_showcase_navigation_item_wrap sa_showcase_navigation_item_wrap_' . $key . ' sa_grid_item_wrap ' . $this->column_render('navigation_columns', $style) . '">
                        <div class="sa_showcase_navigation_item sa_grid_item">';
            if ($item['navigation_type'] == 'shortcode') {
                if ($item['shortcode'] != '') {
                    echo $this->text_render($item['shortcode']);
                } else {
                    echo '
                            <div style="color: red; font-size: 18px;">Please Enter Your Shortcode!</div>';
                }
            } else {
                if ($item['nav_icon_type'] != 'none') {
                    echo '
                            <div class="sa_showcase_navigation_icon_wrap">
                                ' . $nav_icon . '
                            </div>';
                }
                echo $nav_title;
                echo $nav_des;
            }
            echo '
                        </div>
                    </div>';
        }
        echo '
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ';
    }

    public function inline_public_jquery()
    {
        $jquery = '';

        $jquery = '
        setTimeout(function(){
            var $main = $(".' . $this->WRAPPER . ' .sa_showcase_container_style_1 .sa_showcase"),
            $carousel = $main.find(".sa_showcase_preview"),
            $settings = $carousel.data("slider"),
            $slider_wrap = $main.find(".sa_showcase_preview_wrap"),
            $nav_wrap = $main.find(".sa_showcase_navigation_items"),
            $nav = $main.find(".sa_showcase_navigation_item_wrap"),
            $scrollable_nav = $settings["scrollable_nav"],
            $preview_position = $settings["preview_position"],
            $stack_on = $settings["preview_stack"];

            $carousel.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: ($settings["autoplay"] == "yes") ? true : false,
                autoplaySpeed:$settings["autoplay_speed"],
                arrows: ($settings["arrows"] =="yes") ? true : false,
                prevArrow: \'<div class="sa_slider_arrow sa_arrow sa_arrow_prev">\'+$settings["arrow_left"]+\'</div>\',
                nextArrow: \'<div class="sa_slider_arrow sa_arrow sa_arrow_next">\'+$settings["arrow_right"]+\'</div>\',
                dots: ($settings["dots"] =="yes") ? true : false,
                fade: "fade" === $settings["effect"],
                speed: $settings["animation_speed"],
                infinite: ($settings["infinite_loop"] == "yes") ? true : false,
                pauseOnHover: $settings["pause_on_hover"],
                adaptiveHeight: ($settings["adaptive_height"] =="yes") ? true : false,
                asNavFor: ($scrollable_nav == "yes") ? $nav_wrap : "",
            });

            $carousel.slick("setPosition");

            if ($scrollable_nav == "yes") {

                $nav_wrap.slick({
                    slidesToShow: ($settings["nav_items_lap"] != "") ? parseInt($settings["nav_items_lap"]) : 5,
                    slidesToScroll: 1,
                    asNavFor: $carousel,
                    arrows: false,
                    dots: false,
                    infinite: "yes" === $settings["infinite_loop"],
                    focusOnSelect: true,
                    vertical: ($preview_position == "top") ? false : true,
                    centerMode: true,
                    centerPadding: "0px",
                    responsive: [{
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: ($settings["nav_items_tab"] != "") ? parseInt($settings["nav_items_tab"]) : 3,
                                slidesToScroll: 1,
                                vertical: ($stack_on == "tablet") ? false : true,
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: ($settings["nav_items_mob"] != "") ? parseInt($settings["nav_items_mob"]) : 2,
                                slidesToScroll: 1,
                                vertical: false,
                            }
                        },
                    ],
                });

            } else {

                $nav.removeClass("sa_active_slide");
                $nav.eq(0).addClass("sa_active_slide");

                $carousel.on("beforeChange", function(event, slick, currentSlide, nextSlide) {
                    currentSlide = nextSlide;
                    $nav.removeClass("sa_active_slide");
                    $nav.eq(currentSlide).addClass("sa_active_slide");
                });

                $nav.each(function(currentSlide) {
                    $(this).on("click", function(e) {
                        e.preventDefault();
                        $carousel.slick("slickGoTo", currentSlide);
                    });
                });
                $slider_wrap.resize(function() {
                    $carousel.slick("setPosition");
                });
            }
        }, 2000);';
        return $jquery;
    }
}
