<?php

namespace SHORTCODE_ADDONS_UPLOAD\Smooth_scroll\Templates;

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

    public function public_jquery() {
        $this->JSHANDLE = 'smooth-scroll.min';
        wp_enqueue_script('smooth-scroll.min', SA_ADDONS_UPLOAD_URL . '/Smooth_scroll/file/smooth-scroll.min', true, SA_ADDONS_PLUGIN_VERSION);
    }

    public function default_render($style, $child, $admin) {

        $frameRate = $style['sa_ss_frame_rate-size'];
        $animationTime = $style['sa_ss_anitmation_time-size'];
        $stepSize = $style['sa_ss_step_size-size'];
        $pulseAlgorithm = ($style['sa_ss_pa'] == 'yes') ? '1' : '0';
        $pulseScale = $style['sa_ss_ps-size'];
        $pulseNormalize = $style['sa_ss_pn-size'];
        $accelerationDelta = $style['sa_ss_ad-size'];
        $accelerationMax = $style['sa_ss_am-size'];
        $keyboardSupport = ($style['sa_ss_ke'] == 'yes') ? '1' : '0';
        $arrowScroll = $style['sa_ss_as-size'];
        $touchpadSupport = ($style['sa_ss_tps'] == 'yes') ? '1' : '0';
        $fixedBackground = ($style['sa_ss_fs'] == 'yes') ? '1' : '0';

        if (!empty($style['sa_ss_rss']) && $style['sa_ss_rss'] == 'yes') {
            $tablet_off = ' data-tablet-off="yes"';
        } else {
            $tablet_off = ' data-tablet-off="no"';
        }
        echo '<div class="sa-el-smooth-scroll" data-frameRate="' . esc_attr($frameRate) . '" data-animationTime="' . esc_attr($animationTime) . '" data-stepSize="' . esc_attr($stepSize) . '" data-pulseAlgorithm="' . esc_attr($pulseAlgorithm) . '" data-pulseScale="' . esc_attr($pulseScale) . '" data-pulseNormalize="' . esc_attr($pulseNormalize) . '" data-accelerationDelta="' . esc_attr($accelerationDelta) . '" data-accelerationMax="' . esc_attr($accelerationMax) . '" data-keyboardSupport="' . esc_attr($keyboardSupport) . '" data-arrowScroll="' . esc_attr($arrowScroll) . '" data-touchpadSupport="' . esc_attr($touchpadSupport) . '" data-fixedBackground="' . esc_attr($fixedBackground) . '" ' . $tablet_off . '></div>';
    }
    
    public function inline_public_jquery() {
        $js = 'var $container = $(".sa-el-smooth-scroll");
        if ($container.length) {
            var data_frameRate = ($container.attr("data-frameRate") == undefined) ? 150 : $container.attr("data-frameRate"),
                data_animationTime = ($container.attr("data-animationTime") == undefined) ? 1000 : $container.attr("data-animationTime"),
                data_stepSize = ($container.attr("data-stepSize") == undefined) ? 100 : $container.attr("data-stepSize"),
                data_pulseAlgorithm = ($container.attr("data-pulseAlgorithm") == undefined) ? 1 : $container.attr("data-pulseAlgorithm"),
                data_pulseScale = ($container.attr("data-pulseScale") == undefined) ? 4 : $container.attr("data-pulseScale"),
                data_pulseNormalize = ($container.attr("data-pulseNormalize") == undefined) ? 1 : $container.attr("data-pulseNormalize"),
                data_accelerationDelta = ($container.attr("data-accelerationDelta") == undefined) ? 50 : $container.attr("data-accelerationDelta"),
                data_accelerationMax = ($container.attr("data-accelerationMax") == undefined) ? 3 : $container.attr("data-accelerationMax"),
                data_keyboardSupport = ($container.attr("data-keyboardSupport") == undefined) ? 1 : $container.attr("data-keyboardSupport"),
                data_arrowScroll = ($container.attr("data-arrowScroll") == undefined) ? 50 : $container.attr("data-arrowScroll"),
                data_touchpadSupport = ($container.attr("data-touchpadSupport") == undefined) ? 0 : $container.attr("data-touchpadSupport"),
                data_fixedBackground = ($container.attr("data-fixedBackground") == undefined) ? 1 : $container.attr("data-fixedBackground"),
                data_tablet_off = ($container.attr("data-tablet-off") == undefined) ? 50 : $container.attr("data-tablet-off");

            if (!$("body").hasClass("sa-el-smooth-scroll-tras")) {
                $("body").addClass("sa-el-smooth-scroll-tras");
                $("head").append("<style>.sa-el-smooth-scroll-tras .magic-scroll .parallax-scroll,.sa-el-smooth-scroll-tras .magic-scroll .scale-scroll,.sa-el-smooth-scroll-tras .magic-scroll .both-scroll{-webkit-transition: -webkit-transform 0s ease .0s;-ms-transition: -ms-transform 0s ease .0s;-moz-transition: -moz-transform 0s ease .0s;-o-transition: -o-transform 0s ease .0s;transition: transform 0s ease .0s;will-change: transform;}</style>");
            }
            if (data_tablet_off == "yes") {
                var width = window.innerWidth;
                if (width > 800) {
                    if (!$("body").hasClass("sa-el-smooth-scroll-tras")) {
                        $("body").addClass("sa-el-smooth-scroll-tras");
                    }
                    SmoothScroll({ frameRate: data_frameRate, animationTime: data_animationTime, stepSize: data_stepSize, pulseAlgorithm: data_pulseAlgorithm, pulseScale: data_pulseScale, pulseNormalize: data_pulseNormalize, accelerationDelta: data_accelerationDelta, accelerationMax: data_accelerationMax, keyboardSupport: data_keyboardSupport, arrowScroll: data_arrowScroll, touchpadSupport: data_touchpadSupport, fixedBackground: data_fixedBackground });
                } else {
                    if ($("body").hasClass("sa-el-smooth-scroll-tras")) {
                        $("body").removeClass("sa-el-smooth-scroll-tras");
                    }
                }
            } else {
                SmoothScroll({ frameRate: data_frameRate, animationTime: data_animationTime, stepSize: data_stepSize, pulseAlgorithm: data_pulseAlgorithm, pulseScale: data_pulseScale, pulseNormalize: data_pulseNormalize, accelerationDelta: data_accelerationDelta, accelerationMax: data_accelerationMax, keyboardSupport: data_keyboardSupport, arrowScroll: data_arrowScroll, touchpadSupport: data_touchpadSupport, fixedBackground: data_fixedBackground });
            }


        }';
        return $js;
    }

}
