<?php

namespace SHORTCODE_ADDONS_UPLOAD\Drop_caps\Templates;

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

    /**
     * load current element render since 2.0.0
     *
     * @since 2.0.0
     */
    public function render() {
        $this->default_render($this->style, $this->child, $this->admin);
    }

    public function default_render($style, $child, $admin) {
        $text = '';
        if (array_key_exists('sa_drop_caps_text', $style) && $style['sa_drop_caps_text'] != '') {
            $text = ' <div class="oxi_addons__text" ' . $this->animation_render('sa_drop_caps_animation', $style) . '>' . $this->text_render($style['sa_drop_caps_text']) . '</div>';
        }
        echo '<div class="'.$this->WRAPPER.' oxi_addons__drop_caps_main_style_1" >
               ' . $text . '
              </div>';
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';
        echo '<div class="oxi-addons-drop-caps-' . $oxiid . '"  ' . OxiAddonsAnimation($styledata, 35) . '>' . $stylefiles[3] . '</div>';
        $css .= '
            .oxi-addons-drop-caps-' . $oxiid . '{ 
                display: inline-block;
                float: ' . $stylefiles[7] . ';
                text-align: center;
                line-height: 1;
                color: ' . $styledata[43] . ';
                font-size: ' . $styledata[39] . 'px;
                font-family: ' . oxi_addons_font_familly($styledata[45]) . ' !important;
                font-style: ' . $styledata[49] . ' !important;
                font-weight: ' . $styledata[47] . ' !important;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 3) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-drop-caps-' . $oxiid . '{ 
                   font-size: ' . $styledata[40] . 'px;
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 4) . ';
                   margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 20) . ';
                }  
            }
            @media only screen and (max-width : 668px){
               .oxi-addons-drop-caps-' . $oxiid . '{ 
                   font-size: ' . $styledata[41] . 'px;
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';
                   margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . ';
               }  
            }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
