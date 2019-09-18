<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Button\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_2
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_2 extends Templates {

    public function inline_public_css() {
        $position = '';
        $style = $this->style;
        if (array_key_exists('sa_btn_icon_position', $style) && $style['sa_btn_icon_position'] != '0') {
            $position = '.'.$this->WRAPPER . ' .oxi-addons-align-btn2 .oxi-button-btn2:hover .oxi-icons {
                            margin-right: ' . $style['sa_btn_icon_distance-size'] . 'px;
                        }';
        } else {
            $position = '.'.$this->WRAPPER.' .oxi-addons-align-btn2 .oxi-button-btn2:hover .oxi-icons {
                            margin-left: ' . $style['sa_btn_icon_distance-size'] . 'px;
                        }';
            
        }
        $position;

        return $position;
    }

    public function default_render($style, $child, $admin) {
        $html = '';
        $text = '<div class="s-a-button-text">' . $this->text_render($style['sa_btn_text']) . '</div>';
        $icon = (array_key_exists('sa_btn_icon', $style) && $style['sa_btn_icon'] != '0' ? $this->font_awesome_render($style['sa_btn_icon_class']) : '');

        if (array_key_exists('sa_btn_icon_position', $style) && $style['sa_btn_icon_position'] != '0'):
            $html = $icon . $text;
        else:
            $html = $text . $icon;
        endif;

        echo '  <div class="oxi-addons-align-btn2">
                    <a ' . $this->animation_render('sa_btn_animation', $style) . ' ' . $this->url_render('sa_btn_link', $style) . ' class="oxi-button-btn2 ' . (array_key_exists('sa_btn_width_choose', $style) && $style['sa_btn_width_choose'] != '0' ? $style['sa_btn_width_choose'] : '') . ' ' . $style['sa_btn_icon_view'] . '" >' . $html . '</a>
                </div>
                ';
    }

    public function old_render() {
        $style = $this->dbdata;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $css = '';
        $styledata = explode('|', $stylefiles[0]);
        $href = '';
        $target = '';
        if ($stylefiles[7] != '') {
            $href = 'href="' . OxiAddonsUrlConvert($stylefiles[7]) . '"';
            if ($styledata[1] != '') {
                $target = 'target="' . $styledata[1] . '"';
            }
        }
        if ($styledata[115] == 'left') {
            $filesdata = oxi_addons_font_awesome($stylefiles[9]) . ' ' . OxiAddonsTextConvert($stylefiles[3]);
            $icondistance = 'margin-right: ' . $styledata[117] . 'px;';
        } else {
            $filesdata = OxiAddonsTextConvert($stylefiles[3]) . ' ' . oxi_addons_font_awesome($stylefiles[9]);
            $icondistance = 'margin-left: ' . $styledata[117] . 'px;';
        }

        echo '<div class="oxi-addons-container">
             <div class="oxi-addons-row">
                <div class="oxi-addons-align-' . $oxiid . '">';
        echo '<a ' . $target . ' ' . $href . ' ' . OxiAddonsAnimation($styledata, 59) . ' class="oxi-button oxi-button-' . $oxiid . ' ' . $styledata[125] . '" id="' . $stylefiles[5] . '">' . $filesdata . '</a>';
        echo '</div>
         </div>
    </div>';
        $textalign = explode(':', $styledata[11]);
        $css .= '.oxi-addons-container .oxi-button-' . $oxiid . '{   
                max-width: ' . $styledata[29] . 'px;
                width: 100%;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                font-size: ' . $styledata[3] . 'px;
                ' . OxiAddonsFontSettings($styledata, 7) . '
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 67) . ';
                color:' . $styledata[33] . ';
                background:' . $styledata[35] . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
                border-style:' . $styledata[38] . '; 
                border-color: ' . $styledata[39] . ';
                border-radius:' . $styledata[41] . 'px;    
                text-align:center;
            }
            .oxi-addons-align-' . $oxiid . '{
                text-align:center;
                text-align: ' . $textalign[0] . '
            }
            .oxi-addons-container .oxi-button-' . $oxiid . ':hover,
            .oxi-addons-container .oxi-button-' . $oxiid . ':focus,
            .oxi-addons-container  .oxi-button-' . $oxiid . ':active{
               color:' . $styledata[43] . ';
               background:' . $styledata[45] . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
               border-style:' . $styledata[48] . '; 
               border-color:' . $styledata[49] . ';
               border-radius:' . $styledata[51] . 'px;
            }
            .oxi-addons-container .oxi-button-' . $oxiid . ' .oxi-icons{
               font-size: ' . $styledata[121] . 'px;
               color:' . $styledata[119] . ';
            }
            .oxi-addons-container .oxi-button-' . $oxiid . ':hover .oxi-icons{
               ' . $icondistance . '
            }
            
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-container .oxi-button-' . $oxiid . '{   
                    max-width: ' . $styledata[30] . 'px;
                    font-size: ' . $styledata[4] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 14) . ';
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 68) . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 84) . ';
                }
                .oxi-addons-container .oxi-button-' . $oxiid . ':hover,
                .oxi-addons-container .oxi-button-' . $oxiid . ':focus,
                .oxi-addons-container  .oxi-button-' . $oxiid . ':active{
                   border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 100) . ';
                }
                .oxi-addons-container .oxi-button-' . $oxiid . ' .oxi-icons{
                    font-size: ' . $styledata[122] . 'px;
                 }
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-container .oxi-button-' . $oxiid . '{   
                    max-width: ' . $styledata[31] . 'px;
                    font-size: ' . $styledata[5] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 69) . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';
                }
                .oxi-addons-container .oxi-button-' . $oxiid . ':hover,
                .oxi-addons-container .oxi-button-' . $oxiid . ':focus,
                .oxi-addons-container  .oxi-button-' . $oxiid . ':active{
                   border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
                }
                .oxi-addons-container .oxi-button-' . $oxiid . ' .oxi-icons{
                    font-size: ' . $styledata[123] . 'px;
                 }
                 .oxi-addons-align-' . $oxiid . '{
                    text-align:center;
                }
            }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
