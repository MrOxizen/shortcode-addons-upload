<?php

namespace SHORTCODE_ADDONS_UPLOAD\One_page_navigation\Templates;

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

    public function default_render($style, $child, $admin)
    {


        $repeater =  (array_key_exists('sa_one_page_navigation_data', $style) && is_array($style['sa_one_page_navigation_data'])) ? $style['sa_one_page_navigation_data'] : [];
        $i = 1;
        echo '<div class="nav-align-' . $style['heading_alignment'] . '">
                <div class="sa-one-page-nav-container">
                    <ul id="sa-one-page-nav-' . $this->oxiid . '" class="sa-one-page-nav" data-section-id="sa-one-page-nav-' . $this->oxiid . '" data-top-offset="' . $style['top_offset-size'] . '" data-scroll-speed="' . $style['scrolling_speed'] . '" data-scroll-wheel="' . $style['scroll_wheel'] . '" data-scroll-touch="' . $style['scroll_touch'] . '" data-scroll-keys="' . $style['scroll_keys'] . '">';
        foreach ($repeater as $index => $dot) {
            $sa_section_title = $dot['section_title'];
            $sa_section_id = $dot['section_id'];
            $sa_dot_icon = $dot['dot_icon'];
            if ($style['tooltip_arrow'] == 'yes') {
                $sa_tooltip_arrow = 'sa-tooltip-arrow';
            }
            if ($style['nav_tooltip'] == 'yes') {
                $sa_dot_tooltip = sprintf('<span class="%1$s  %2$s"><span class="sa-nav-dot-tooltip-content">%3$s</span></span>', 'sa-nav-dot-tooltip', $sa_tooltip_arrow, $sa_section_title);
            } else {
                $sa_dot_tooltip = '';
            }
            printf('<li class="sa-one-page-nav-item">%1$s<a href="#" data-row-id="%2$s"><span class="sa-nav-dot-wrap"><span class="sa-nav-dot  %3$s"></span></span></a></li>', $sa_dot_tooltip, $sa_section_id, $sa_dot_icon);

            $i++;
        }
        echo '</ul>
            </div>
        </div>';
    }


    public function inline_public_jquery()
    {
        $jquery = '';
        $jquery .= '
        var onepage_nav_elem = $(".sa-one-page-nav");
        var $section_id = "#" + onepage_nav_elem.data("section-id"),
            $top_offset = onepage_nav_elem.data("top-offset"),
            $scroll_speed = onepage_nav_elem.data("scroll-speed"),
            $scroll_wheel = onepage_nav_elem.data("scroll-wheel"),
            $scroll_touch = onepage_nav_elem.data("scroll-touch"),
            $scroll_keys = onepage_nav_elem.data("scroll-keys"),
            $target_dot = $section_id + " .sa-one-page-nav-item a",
            $nav_item = $section_id + " .sa-one-page-nav-item",
            $active_item = $section_id + " .sa-one-page-nav-item.active";

        $($target_dot).on("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (0 === $("#" + $(this).data("row-id")).length) {
                return;
            }
            if ($("html, body").is(":animated")) {
                return;
            }
            $("html, body").animate({
                scrollTop: $("#" + $(this).data("row-id")).offset().top - $top_offset
            }, $scroll_speed);
            $($section_id + " .sa-one-page-nav-item").removeClass("active");
            $(this).parent().addClass("active");
            return false;
        });
        updateDot();
        $(window).on("scroll", function () {
            updateDot();
        });
        function updateDot() {
            $(".oxi-addons-container").each(function () {
                var $this = $(this);
                if (($this.offset().top - $(window).height() / 2 < $(window).scrollTop()) && ($this.offset().top >= $(window).scrollTop() || $this.offset().top + $this.height() - $(window).height() / 2 > $(window).scrollTop())) {
                    $($section_id + " .sa-one-page-nav-item a[data-row-id=" + $this.attr("id") + "]").parent().addClass("active");
                } else {
                    $($section_id + " .sa-one-page-nav-item a[data-row-id=" + $this.attr("id") + "]").parent().removeClass("active");
                }
            });
        }
        if ($scroll_wheel == "yes") {
            var lastAnimation = 0,
                    quietPeriod = 500,
                    animationTime = 800,
                    startX,
                    startY,
                    timestamp;
            $(document).on("mousewheel DOMMouseScroll", function (e) {
                var timeNow = new Date().getTime();
                if (timeNow - lastAnimation < quietPeriod + animationTime) {
                    e.preventDefault();
                    return;
                }
                var delta = e.originalEvent.detail < 0 || e.originalEvent.wheelDelta > 0 ? 1 : -1;
                if (!$("html,body").is(":animated")) {
                    if (delta < 0) {
                        if ($($active_item).next().length > 0) {
                            $($active_item).next().find("a").trigger("click");
                        }
                    } else {
                        if ($($active_item).prev().length > 0) {
                            $($active_item).prev().find("a").trigger("click");
                        }
                    }
                }
                lastAnimation = timeNow;
            });
            if ($scroll_touch == "yes") {
                $(document).on("pointerdown touchstart", function (e) {
                    var touches = e.originalEvent.touches;
                    if (touches && touches.length) {
                        startY = touches[0].screenY;
                        timestamp = e.originalEvent.timeStamp;
                    }
                }).on("touchmove", function (e) {
                    if ($("html,body").is(":animated")) {
                        e.preventDefault();
                    }
                }).on("pointerup touchend", function (e) {
                    var touches = e.originalEvent;
                    if (touches.pointerType === "touch" || e.type === "touchend") {
                        var Y = touches.screenY || touches.changedTouches[0].screenY;
                        var deltaY = startY - Y;
                        var time = touches.timeStamp - timestamp;

                        if (deltaY < 0) {
                            if ($($active_item).prev().length > 0) {
                                $($active_item).prev().find("a").trigger("click");
                            }
                        }

                        if (deltaY > 0) {
                            if ($($active_item).next().length > 0) {
                                $($active_item).next().find("a").trigger("click");
                            }
                        }
                        if (Math.abs(deltaY) < 2) {
                            return;
                        }
                    }
                });
            }
        }
        if ($scroll_keys == "yes") {
            $(document).keydown(function (e) {
                var tag = e.target.tagName.toLowerCase();
                if (tag === "input" && tag === "textarea") {
                    return;
                }
                switch (e.which) {
                    case 38:
                        $($active_item).prev().find("a").trigger("click");
                        break;
                    case 40:
                        $($active_item).next().find("a").trigger("click");
                        break;
                    case 33:
                        $($active_item).prev().find("a").trigger("click");
                        break;
                    case 36:
                        $($active_item).next().find("a").trigger("click");
                        break;
                    default:
                        return;
                }
            });
        }';
        return $jquery;
    }
}
