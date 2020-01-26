<?php

namespace SHORTCODE_ADDONS_UPLOAD\Preview_window\Templates;

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

        wp_enqueue_style('tooltipster.bundle.min.css', SA_ADDONS_UPLOAD_URL . '/Preview_window/File/tooltipster.bundle.min.css', false, SA_ADDONS_PLUGIN_VERSION);
    }
    public function public_jquery()
    {
        $this->JSHANDLE = 'tooltipster.bundle.min.js';
        wp_enqueue_script('tooltipster.bundle.min.js', SA_ADDONS_UPLOAD_URL . '/Preview_window/File/tooltipster.bundle.min.js', false, SA_ADDONS_PLUGIN_VERSION);
    }
    public function default_render($style, $child, $admin)
    {
        $caption = $trigger_img = $tooltip_img = $title = $content  = $preview_img_url = '';
        $id = $this->oxiid;
        if ($this->media_render('sa_preview_window_trigger_image', $style) != '') {
            $trigger_img = '<img  src="' . $this->media_render('sa_preview_window_trigger_image', $style) . '" alt="' . $this->text_render($style['sa_preview_window_trigger_alt']) . '" class="sa_preview_image_trigger">';
        }
        if ($style['sa_preview_window_trigger_caption'] != '') {
            $caption = '<figcaption class="sa_preview_image_figcap">
                            ' . $this->text_render($style['sa_preview_window_trigger_caption']) . '
                        </figcaption>';
        }
        if (array_key_exists('sa_preview_window_trigger_link_switcher', $style) && $style['sa_preview_window_trigger_link_switcher'] == 'yes') {
            if ($style['sa_preview_window_trigger_link_selection'] == 'url') {
                $preview_img_url = $this->url_render('sa_preview_window_image_link', $style);
            } else {
                $preview_img_url = get_permalink($style['sa_preview_window_image_existing_link']);
            }
        }
        if (array_key_exists('sa_preview_window_tooltip_img_switcher', $style) && $style['sa_preview_window_tooltip_img_switcher'] == 'yes') {
            if ($this->media_render('sa_preview_window_tooltip_image', $style) != '') {
                $tooltip_img = '
                    <div class="sa_prev_img_tooltip_img_wrap_' . $id . '">
                        <img src="' . $this->media_render('sa_preview_window_tooltip_image', $style) . '" alt="' . $this->text_render($style['sa_preview_window_tooltip_alt']) . '" class="sa_preview_image_tooltips_img"> 
                    </div>';
            }
        }
        if (array_key_exists('sa_preview_window_tooltip_title_switcher', $style) && $style['sa_preview_window_tooltip_title_switcher'] == 'yes') {
            if ($style['sa_preview_window_tooltip_title'] != '') {
                $title = '<div class="sa_prev_img_tooltip_title_wrap sa_prev_img_tooltip_title_wrap_' . $id . '">
                                <' . $style['sa_preview_window_tooltip_title_heading'] . ' class="sa_previmg_tooltip_title">
                                    ' . $this->text_render($style['sa_preview_window_tooltip_title']) . '
                                </' . $style['sa_preview_window_tooltip_title_heading'] . '>
                            </div>
                            ';
            }
        }
        if (array_key_exists('sa_preview_window_tooltip_desc_switcher', $style) && $style['sa_preview_window_tooltip_desc_switcher'] == 'yes') {
            if ($style['sa_preview_window_tooltip_desc'] != '') {
                $content = '<div class="sa_prev_img_tooltip_desc_wrap sa_prev_img_tooltip_desc_wrap_' . $id . '">
                                ' . $this->text_render($style['sa_preview_window_tooltip_desc']) . '
                            </div>
                        ';
            }
        }
        $tooltip_container = [
            'background' => $style['sa_preview_window_tooltip_container_bg']
        ];
        $prev_img_settings = '';
        $prev_img_settings = wp_json_encode(array_filter([
            "anim" => $style["sa_preview_window_image_anim"],
            "animDur" => (!empty($style["sa_preview_window_image_anim_dur"]) ? $style["sa_preview_window_image_anim_dur"] : 350),
            "delay" => (!empty($style["sa_preview_window_image_delay"]) ? $style["sa_preview_window_image_delay"] : 10),
            "arrow" => $style["sa_preview_window_image_arrow"],
            "active" => $style["sa_preview_window_image_interactive"],
            "responsive" => $style["sa_preview_window_image_responsive"],
            "distance" => (!empty($style["sa_preview_window_image_distance"]) ? $style["sa_preview_window_image_distance"] : 6),
            "minWidth" => (!empty($style["sa_preview_window_image_min_width-lap"]) ? $style["sa_preview_window_image_min_width-lap"] : 1),
            "maxWidth" => (!empty($style["sa_preview_window_image_max_width-lap"]) ? $style["sa_preview_window_image_max_width-lap"] : "null"),
            "minWidthTabs" => (!empty($style["sa_preview_window_image_min_width-tab"]) ? $style["sa_preview_window_image_min_width-tab"] : 1),
            "maxWidthTabs" => (!empty($style["sa_preview_window_image_max_width-tab"]) ? $style["sa_preview_window_image_max_width-tap"] : "null"),
            "minWidthMobs" => (!empty($style["sa_preview_window_image_min_width-mob"]) ? $style["sa_preview_window_image_min_width-mob"] : 1),
            "maxWidthMobs" => (!empty($style["sa_preview_window_image_max_width-mob"]) ? $style["sa_preview_window_image_max_width-mob"] : "null"),
            "side" => (!empty($style["sa_preview_window_image_side"]) ? $style["sa_preview_window_image_side"] : array('right', 'left')),
            "container" => $tooltip_container,
            "hideMobiles" => $style["sa_preview_window_image_hide"],
            "id" => $id,
        ]));

        echo '
            <div class="sa_preview_image_container_style_1">
                <div id="sa_preview_image_main_' . $id . '" class="sa_preview_image_wrap" data-settings=\'' . $prev_img_settings . '\'>
                    <div class="sa_preview_image_trig_img_wrap">
                        <div class="sa_preview_image_inner_trig_img" data-tooltip-content="#tooltip_content">';
        if (array_key_exists('sa_preview_window_trigger_link_switcher', $style) && $style['sa_preview_window_trigger_link_switcher'] == 'yes') :
            echo '
                            <a ' . (($style['sa_preview_window_trigger_link_selection'] == 'url') ? $preview_img_url : "href='$preview_img_url'") . '>';
        endif;
        echo '
                                <figure class="sa_preview_image_figure">
                                    ' . $trigger_img . '
                                    ' . $caption . '
                                </figure>
        ';
        if (array_key_exists('sa_preview_window_trigger_link_switcher', $style) && $style['sa_preview_window_trigger_link_switcher'] == 'yes') :
            echo '
                            </a>';
        endif;
        echo '
                            <div id="tooltip_content" class="sa_prev_img_tooltip_wrap sa_prev_img_tooltip_wrap_' . $id . '">';
        if ($style["sa_preview_window_tooltip_type"] == "shortcode") {
            if ($style['sa_preview_window_tooltip_shortcode'] != '') {
                echo $this->text_render($style["sa_preview_window_tooltip_shortcode"]);
            } else {
                echo '
                            <div style="color:red; font-size: 18px;">Place Enter Your Shortcode</div>
                    ';
            }
        } else {
            echo '
                                ' . $tooltip_img . '
                                ' . $title . '
                                ' . $content . '';
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
            var Sa_pre_wind_main = $(".' . $this->WRAPPER . ' .sa_preview_image_wrap"),
                Image_Settings = Sa_pre_wind_main.data("settings"),
                previewImageOffset = $(Sa_pre_wind_main).offset().left,
                windowWidth = $(window).outerWidth(),
                minWidth = null,
                maxWidth = null;
                if (windowWidth <= 768) {
                    minWidth = parseInt(Image_Settings["minWidthMobs"]);
                    maxWidth = parseInt(Image_Settings["maxWidthMobs"]);
                } else if (windowWidth > 768 && $(this).outerWidth() <= 1024) {
                    minWidth = parseInt(Image_Settings["minWidthTabs"]);
                    maxWidth = parseInt(Image_Settings["maxWidthTabs"]);
                } else {
                    minWidth = parseInt(Image_Settings["minWidth"]);
                    maxWidth = parseInt(Image_Settings["maxWidth"]);
                }
                if (JSON.parse(Image_Settings["responsive"])) {
                    if (previewImageOffset < parseInt(Image_Settings["minWidth"])) {
                        var difference = parseInt(Image_Settings["minWidth"]) - previewImageOffset;
                        parseInt(Image_Settings["minWidth"]) = parseInt(Image_Settings["minWidth"]) - difference;
                    }
                }
                Sa_pre_wind_main.find(".sa_preview_image_inner_trig_img").tooltipster({
                    functionBefore: function() {
                        if (
                            JSON.parse(Image_Settings["hideMobiles"]) &&
                            $(window).outerWidth() < 768
                        ) {
                            return false;
                        }
                    },
                    functionInit: function(instance, helper) {
                        var content = $(helper.origin)
                        .find("#tooltip_content")
                        .detach();
                        instance.content(content);
                    },
                    functionReady: function() {
                        $(".tooltipster-box").addClass(
                        "tooltipster-box-" + Image_Settings["id"]
                        );
                    },
                    contentCloning: true,
                    plugins: ["sideTip"],
                    animation: Image_Settings["anim"],
                    animationDuration: parseInt(Image_Settings["animDur"]),
                    delay: parseInt(Image_Settings["delay"]),
                    trigger: "custom",
                    triggerOpen: {
                        tap: true,
                        mouseenter: true
                    },
                    triggerClose: {
                        tap: true,
                        mouseleave: true
                    },
                    arrow: JSON.parse(Image_Settings["arrow"]),
                    contentAsHTML: true,
                    autoClose: false,
                    maxWidth: maxWidth,
                    minWidth: minWidth,
                    distance: parseInt(Image_Settings["distance"]),
                    interactive: JSON.parse(Image_Settings["active"]),
                    minIntersection: 16,
                    side: Image_Settings["side"]
                });
            },500);
            
        ';
        return $jquery;
    }
}
