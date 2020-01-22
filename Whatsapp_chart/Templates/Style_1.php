<?php

namespace SHORTCODE_ADDONS_UPLOAD\Whatsapp_chart\Templates;

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
        wp_enqueue_style('tooltipster.css', SA_ADDONS_UPLOAD_URL . '/Whatsapp_chart/File/css/tooltipster.bundle.min.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function public_jquery()
    {
        $this->JSHANDLE = 'tooltipster.js';
        wp_enqueue_script('tooltipster.js', SA_ADDONS_UPLOAD_URL . '/Whatsapp_chart/File/js/tooltipster.bundle.min.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery()
    {
        $style = $this->style;
        $jquery = '';
        $jquery .= 'jQuery(".oxi_addons__whatsapp_main.yes").tooltipster({
                    functionInit: function (instance, helper) {
                        var content = $(helper.origin)
                                .find("#tooltip_content")
                                .detach();
                        instance.content(content);
                    },
                    animation:  "' . $style['sa_whatsapp_chat_tooltips_animation'] . '",
                    contentCloning: true,
                    trigger: "hover",
                    arrow: true,
                    contentAsHTML: true,
                    autoClose: false,
                    minIntersection: 16,
                    interactive: true,
                    delay: 0,
                    side: ["right", "left", "top", "bottom"]
                });';

        $jquery .= ' $("#tooltip_content").addClass("oxi__block")

                jQuery(window).on("resize", function(){
                    var $width  = jQuery(window).width();
                    if ($width  < 767){';
        if (array_key_exists('sa_whatsapp_chat_hide_on_mobile', $style) && $style['sa_whatsapp_chat_hide_on_mobile'] == 'yes') {
            $jquery .= 'jQuery(".oxi_addons__whatsapp_main").hide()';
        }
        $jquery .= '}else if($width >= 768 && $width <= 991){';
        if (array_key_exists('sa_whatsapp_chat_hide_on_tab', $style) && $style['sa_whatsapp_chat_hide_on_tab'] == 'yes') {
            $jquery .= 'jQuery(".oxi_addons__whatsapp_main").hide()';
        }
        $jquery .= ' }else if($width > 991){
                        jQuery(".oxi_addons__whatsapp_main").show();
                   }
                });
                ';

        return $jquery;

    }

    public function default_render($style, $child, $admin)
    {
        $target = 'yes' == $style['sa_whatsapp_chat_open_link'] ? "_blank" : "_self";
        $id = ('private' == $style['sa_whatsapp_chat_type']) ? $style['sa_whatsapp_chat_number'] : $style['sa_whatsapp_chat_group'];
        $is_mobile = (wp_is_mobile()) ? 'api' : 'web';
        $browser = $_SERVER['HTTP_USER_AGENT'];
        $is_firefox = (false !== strpos($browser, 'Firefox')) ? 'web' : 'chat';
        $prefix = ('private' == $style['sa_whatsapp_chat_type']) ? $is_mobile : $is_firefox;
        $suffix = ('private' == $style['sa_whatsapp_chat_type']) ? 'send?phone=' : '';
        $href = sprintf('https://%s.whatsapp.com/%s%s', $prefix, $suffix, $id);

        $icon = $button = $tooltip =  '';
        if (array_key_exists('sa_whatsapp_chat_icon_switter', $style) && $style['sa_whatsapp_chat_icon_switter'] == 'yes') {
            $icon = '<div class="oxi_addons__icon">
                        ' . $this->font_awesome_render($style['sa_whatsapp_chat_icon']) . '
                    </div>';
        }
        if (array_key_exists('sa_whatsapp_chat_text_switter', $style) && $style['sa_whatsapp_chat_text_switter'] == 'yes') {
            if (array_key_exists('sa_whatsapp_chat_button_text', $style) && $style['sa_whatsapp_chat_button_text'] != '') {
                $button = '<div class="oxi_addons__button">
                        ' . $this->text_render($style['sa_whatsapp_chat_button_text']) . '
                    </div>';
            }
        }
        if (array_key_exists('sa_whatsapp_chat_tooltip_switter', $style) && $style['sa_whatsapp_chat_tooltip_switter'] == 'yes') {
            if (array_key_exists('sa_whatsapp_chat_tooltips_text', $style) && $style['sa_whatsapp_chat_tooltips_text'] != '') {
                $tooltip = '<div class="oxi_addons__tooltip" id="tooltip_content">
                        ' . $this->text_render($style['sa_whatsapp_chat_tooltips_text']) . '
                    </div>';
            }
        }
        echo '<div class="oxi_addons__whatsapp_style_1">
                <a href="' . $href . '" class="oxi_addons__whatsapp_main ' . $style['sa_whatsapp_chat_tooltip_switter'] . ' ' . $style['sa_whatsapp_chat_float'] . ' ' . $style['sa_whatsapp_chat_button_alignment'] . '" data-tooltip-content="#tooltip_content" target="' . $target . '">
                    ' . $icon . '
                    ' . $button . '
                    ' . $tooltip . '
                </a>
            </div>';
    }

}
