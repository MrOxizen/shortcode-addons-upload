<?php

namespace SHORTCODE_ADDONS_UPLOAD\Button\Templates;

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

class Style_11 extends Templates {

    public function inline_public_css() {
        $style = $this->style;
        $animation = '.' . $this->WRAPPER . ' .oxi-addons-align-btn11 .' . $style['sa_btn_effect_view'] . ':hover{
            -webkit-animation: ' . $style['sa_btn_effect_view'] . ' ' . $style['sa_btn_duration-size'] . 'ms linear infinite;
            animation: ' . $style['sa_btn_effect_view'] . ' ' . $style['sa_btn_duration-size'] . 'ms linear infinite;
        }';


        return $animation;
    }

    public function default_render($style, $child, $admin) {
        $text = $effect = '';
        $text = '<div class="sa-button-text">' . $this->text_render($style['sa_btn_text']) . '</div>';
         $html  = '';
        $icon = (array_key_exists('sa_btn_icon', $style) && $style['sa_btn_icon'] != '0' ? $this->font_awesome_render($style['sa_btn_icon_class']) : '');

        if (array_key_exists('sa_btn_icon_position', $style) && $style['sa_btn_icon_position'] != '0'):
            $html = $icon . $text;
        else:
            $html = $text . $icon;
        endif;

        echo '  <div class="oxi-addons-button">
                    <div class="oxi-addons-align-btn11">
                        <a ' . $this->animation_render('sa_btn_animation', $style) . ' ' . $this->url_render('sa_btn_link', $style) . ' class="oxi-button-btn11 ' . (array_key_exists('sa_btn_width_choose', $style) && $style['sa_btn_width_choose'] != '0' ? $style['sa_btn_width_choose'] : '') . ' ' . (array_key_exists('sa_btn_h_e', $style) && $style['sa_btn_h_e'] != '0' ? $style['sa_btn_effect_view'] : '') . '" >' . $html . '</a>
                    </div>
                </div>';
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
            if ($styledata[3] != '') {
                $target = 'target="' . $styledata[3] . '"';
            }
        }
        echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">
                <div class="oxi-addons-align-' . $oxiid . '">
                    <div class="oxi-addons-button-body" ' . OxiAddonsAnimation($styledata, 33) . '>
                        <div class="oxi-addons-button-align" >';
        echo '<a ' . $target . ' ' . $href . '   class="oxi-button oxi-button-' . $oxiid . ' buttonOxi" id="' . $stylefiles[5] . '" >' . OxiAddonsTextConvert($stylefiles[3]) . '</a>';
        echo '       </div>
                    </div>
                </div>
            </div>
          </div>';

        $textalign = explode(':', $styledata[15]);
        $css .= '.oxi-addons-align-' . $oxiid . ' {   
                    float: left;
                    width: 100%;
                    display: block;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 85) . '; 
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-body{
               text-align: ' . $textalign[0] . ';
           }
           .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align{
                align-items: center;
                justify-content: center;
                position: relative;
                display: inline-flex;
                
            }
            
            .oxi-addons-align-' . $oxiid . ' .oxi-button-' . $oxiid . '{
                    background: ' . $styledata[51] . ';
                    color: ' . $styledata[49] . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 53) . ';
                    border-style: ' . $styledata[69] . ';
                    border-color: ' . $styledata[70] . ';
                    border-radius: ' . $styledata[73] . 'px;
                    cursor: pointer;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . '; 
                    transition: .2s;
                    width: ' . $styledata[101] . 'px;
                    max-width: 100%;
                    font-size: ' . $styledata[7] . 'px;
                    ' . OxiAddonsFontSettings($styledata, 11) . ';
                    text-align: center;
                    outline: none;
                     ' . OxiAddonsBoxShadowSanitize($styledata, 37) . '; 
                               
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-button-' . $oxiid . ':hover{
                outline: none;
                ' . OxiAddonsFontSettings($styledata, 11) . ';
                 ' . OxiAddonsBoxShadowSanitize($styledata, 43) . '; 
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-button-' . $oxiid . ':hover{
                color: ' . $styledata[75] . ';
                background: ' . $styledata[77] . ';
                animation: slidebg 2s linear infinite;
                transition-delay: .0s;
                text-align: center;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 53) . ';
                border-style: ' . $styledata[69] . ';
                border-color: ' . $styledata[70] . ';
                border-radius: ' . $styledata[73] . 'px;
             }

            @keyframes slidebg {
                to {
                  background-position:25vw;
                }
              }

            
            @media only screen and (min-width : 669px) and (max-width : 993px){
                
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-body{
                    justify-content: center;
                    display: flex;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 86) . '; 
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align{
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    position: relative;
                    font-size: ' . $styledata[8] . 'px;
                    outline: none;

                }
                .oxi-addons-align-' . $oxiid . ' .oxi-button-' . $oxiid . '{
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 54) . ';
                        border-radius: ' . $styledata[74] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 18) . '; 
                        transition: .2s;
                        width: ' . $styledata[102] . 'px;
                        max-width: 100%;
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-body{
                    justify-content: center;
                    display: flex;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 87) . '; 
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align{
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    position: relative;
                    font-size: ' . $styledata[9] . 'px;
                    outline: none;

                }
                .oxi-addons-align-' . $oxiid . ' .oxi-button-' . $oxiid . '{
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 55) . ';
                        border-radius: ' . $styledata[75] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . '; 
                        transition: .2s;
                        width: ' . $styledata[103] . 'px;
                        max-width: 100%;
                }
            }';


        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
