<?php

namespace SHORTCODE_ADDONS_UPLOAD\Simple_menu\Templates;

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


        $icon1 = (array_key_exists('sa_simple_menu_icon1', $style) && $style['sa_simple_menu_icon1'] != '0' ? $style['sa_simple_menu_icon1_cls'] : '');
        $icon2 = (array_key_exists('sa_simple_menu_icon2', $style) && $style['sa_simple_menu_icon2'] != '0' ? $style['sa_simple_menu_icon2_cls'] : '');


        $menu_classes = ['oxi_simple_menu', 'oxi_simple_menu_indicator', $style['sa_simple_manu_drpdn_view'],];
        if ($style['sa_simple_menu_layout'] == 'horizontal') {
            $menu_classes[] = 'sa_menu_horizontal';
        } else {
            $menu_classes[] = 'sa_menu_vertical';
        }
        if ($style['sa_simple_menu_menu'] != 0 && $style['sa_simple_menu_menu'] != '') {
            $args = [
                'menu' => $style['sa_simple_menu_menu'],
                'menu_class' => implode(' ', array_filter($menu_classes)),
                'container' => false,
                'echo' => false,
            ];


            echo '<div class="oxi_simple_menu_style1 ' . $style['sa_simple_menu_alignment'] . '"  data-indicator-class="' . $icon1 . '" data-dropdown-indicator-class="' . $icon2 . '">
                            ' . wp_nav_menu($args) . '
                    </div>';
        }
    }

    public function inline_public_jquery() {
        $style = $this->style;
        $icon1 = (array_key_exists('sa_simple_menu_icon1', $style) && $style['sa_simple_menu_icon1'] != '0' ? $style['sa_simple_menu_icon1_cls'] : '');
        $icon2 = (array_key_exists('sa_simple_menu_icon2', $style) && $style['sa_simple_menu_icon2'] != '0' ? $style['sa_simple_menu_icon2_cls'] : '');

        $js = 'var $horizontal = $(".oxi_simple_menu").hasClass("sa_menu_horizontal");
                if ($horizontal) {
                    $(".oxi_simple_menu > li.menu-item-has-children").each(
                            function () {
                                $("> a", $(this)).append("<span class=\'' . $icon1 . '\'></span>");
                            }
                    );
                    $(".oxi_simple_menu > li ul li.menu-item-has-children").each(
                            function () {
                                $("> a", $(this)).append("<span class=\'' . $icon2 . '\'></span>");
                            }
                    );
                    $(".sa_menu_horizontal").before("<span class =\'oxi_simple_menu_toggle_text\'></span>")
                            .after("<button class = \'oxi_simple_menu_toggle\'><span class = \'eicon-menu-bar\'></span></button>");


                    $(".oxi_simple_menu_style1").on("click",".oxi_simple_menu_toggle",function (e) {
                                e.preventDefault();
                                $(this)
                                        .siblings(".sa_menu_horizontal")
                                        .css("display") == "none"
                                        ? $(this)
                                        .siblings(".sa_menu_horizontal")
                                        .slideDown(300)
                                        : $(this)
                                        .siblings(".sa_menu_horizontal")
                                        .slideUp(300);
                            }
                    );

                $(window).on("resize load", function () {
                    if (window.matchMedia("(max-width: 991px)").matches) {
                        $(".sa_menu_horizontal").addClass(
                                "oxi_simple_menu_responsive"
                                );
                        $(".oxi_simple_menu-toggle_text").text(
                                $(".sa_menu_horizontal .current-menu-item a")
                                .eq(0)
                                .text()
                                );
                    } else {
                        $(".sa_menu_horizontal").removeClass(
                                "oxi_simple_menu_responsive"
                                );
                        $(".sa_menu_horizontal, .sa_menu_horizontal ul").css("display", "");
                    }
                });
            }

                $(".oxi_simple_menu > li.menu-item-has-children").each(
                    function () {

                        var $height = parseInt($("a", this).css("line-height")) / 2;
                        $(this).append("<span class=\'oxi_simple_menu_indicator ' . $icon1 . '\' style=\'top:" + $height + "px\'></span>"
                    );

                    }
                );
                $(".oxi_simple_menu > li ul li.menu-item-has-children").each(
                    function () {

                        var $height = parseInt($("a", this).css("line-height")) / 2;
                        $(this).append("<span class=\'oxi_simple_menu_indicator ' . $icon2 . '\' style=\'top:" + $height + "px\'</span>"
                    );

                    }
                );



           $(".oxi_simple_menu").on("click",".oxi_simple_menu_indicator",function (e) {
               e.preventDefault();
                $(this).toggleClass("oxi_simple_menu_indicator_open");
                $(this).hasClass("oxi_simple_menu_indicator_open")
                        ? $(this)
                        .siblings("ul")
                        .slideDown(300)
                        : $(this)
                        .siblings("ul")
                        .slideUp(300);
                }
           );
        ';

        return $js;
    }

}
