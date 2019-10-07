<?php

namespace SHORTCODE_ADDONS_UPLOAD\Button\Templates;

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

class Style_8 extends Templates {

   
    public function default_render($style, $child, $admin) {
        $html = '';
        $text = '<div class="sa-button-text">' . $this->text_render($style['sa_btn_text']) . '</div>';
        $icon = (array_key_exists('sa_btn_icon', $style) && $style['sa_btn_icon'] != '0' ? $this->font_awesome_render($style['sa_btn_icon_class']) : '');

        if (array_key_exists('sa_btn_icon_position', $style) && $style['sa_btn_icon_position'] != '0'):
            $html = $icon . $text;
        else:
            $html = $text . $icon;
        endif;

        echo '  <div class="oxi-addons-align-btn8">
                    <a ' . $this->animation_render('sa_btn_animation', $style) . ' ' . $this->url_render('sa_btn_link', $style) . ' class="oxi-button-btn8 ' . (array_key_exists('sa_btn_width_choose', $style) && $style['sa_btn_width_choose'] != '0' ? $style['sa_btn_width_choose'] : '') . ' " >' . $html . '</a>
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
            if ($styledata[3] != '') {
                $target = 'target="' . $styledata[3] . '"';
            }
        }
        $icon = '';
        $text = '';
        if ($stylefiles[9] != '') {
            $icon = '<span class="oxi-button-icon"> ' . oxi_addons_font_awesome($stylefiles[9]) . ' </span>';
        }
        if ($stylefiles[3] != '') {
            $text = '<span class="oxi-button-text">' . OxiAddonsTextConvert($stylefiles[3]) . '</span>';
        }


        $position = '';
        if ($styledata[203] == 1) {
            $position = $icon . $text;
        } else {
            $position = $text . $icon;
        }
        echo '<div class="oxi-addons-container">
                <div class="oxi-addons-row">
                    <div class="oxi-addons-button-body-' . $oxiid . '">
                        <div class="oxi-addons-align" ' . OxiAddonsAnimation($styledata, 63) . '>';
        echo '<a ' . $target . ' ' . $href . '  class="oxi-button-' . $oxiid . ' " id="' . $stylefiles[5] . '">'
        . $position .
        '</a>';
        echo '</div>
                    </div>
                </div>
          </div>';


        $textalign = explode(':', $styledata[79]);
        $css .= '.oxi-addons-button-body-' . $oxiid . '{  
                    float: left;
                    width: 100%;
                    display: block;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 47) . ';
                }
                 .oxi-addons-button-body-' . $oxiid . ' .oxi-addons-align{
                        text-align: ' . $textalign[0] . ';    
            }
            .oxi-addons-button-body-' . $oxiid . ' .oxi-button-' . $oxiid . ' {
                    display: inline-block;
                    text-align: center;
                    border: none;
                    position: relative;
                    cursor: pointer;
                    z-index: 1;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 121) . ';
                    width: ' . $styledata[205] . 'px;
                    max-width: 100%;
                    
                    background: ' . $styledata[5] . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
                    border-color: ' . $styledata[26] . ';
                    border-style: ' . $styledata[25] . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 137) . ';
                    outline: none;
                    ' . OxiAddonsBoxShadowSanitize($styledata, 191) . '; 
                    
              }

            .oxi-addons-button-body-' . $oxiid . ' .oxi-button-' . $oxiid . ':hover {
                background: ' . $styledata[7] . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 155) . ';
                border-color: ' . $styledata[172] . ';
                border-style: ' . $styledata[171] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 175) . ';
                transition: .5s !important;
                ' . OxiAddonsBoxShadowSanitize($styledata, 197) . '; 

            }
            .oxi-addons-button-body-' . $oxiid . ' .oxi-button-icon{
                    color: ' . $styledata[97] . ';
                    font-size: ' . $styledata[101] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 105) . ';
                    transition: none !important;
            }
            .oxi-addons-button-body-' . $oxiid . ' .oxi-button-' . $oxiid . ':hover .oxi-button-icon{
                    color: ' . $styledata[99] . ';
                    transition: .5s;
            }
            
            .oxi-addons-button-body-' . $oxiid . ' .oxi-button-text{
                color: ' . $styledata[67] . ';
                font-size: ' . $styledata[71] . 'px;
                    ' . OxiAddonsFontSettings($styledata, 75) . '
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
                transition: none !important;
            }
            .oxi-addons-button-body-' . $oxiid . ' .oxi-button-' . $oxiid . ':hover .oxi-button-text{
                    color: ' . $styledata[69] . ';
                    transition: .5s !important;
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
                 .oxi-addons-button-body-' . $oxiid . '{  
                        float: left;
                        width: 100%;
                        display: block;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 48) . ';
                    }
                .oxi-addons-button-body-' . $oxiid . ' .oxi-addons-align{
                            text-align: center;    
                }
                .oxi-addons-button-body-' . $oxiid . ' .oxi-button-' . $oxiid . ' {
                        display: inline-block;
                        text-align: center;
                        border: none;
                        position: relative;
                        cursor: pointer;
                        z-index: 1;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 122) . ';
                        width: ' . $styledata[206] . 'px;
                        max-width: 100%;

                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 10) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 138) . ';

                  }

                .oxi-addons-button-body-' . $oxiid . ' .oxi-button-' . $oxiid . ':hover {
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 156) . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 176) . ';
                    transition: .5s !important;

                }
                .oxi-addons-button-body-' . $oxiid . ' .oxi-button-icon{
                        font-size: ' . $styledata[102] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 106) . ';
                        transition: none !important;
                }
                

                .oxi-addons-button-body-' . $oxiid . ' .oxi-button-text{
                    font-size: ' . $styledata[72] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
                    transition: none !important;
                }
                
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-button-body-' . $oxiid . '{  
                        float: left;
                        width: 100%;
                        display: block;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
                    }
                .oxi-addons-button-body-' . $oxiid . ' .oxi-addons-align{
                            text-align: center;    
                }
                .oxi-addons-button-body-' . $oxiid . ' .oxi-button-' . $oxiid . ' {
                        display: inline-block;
                        text-align: center;
                        border: none;
                        position: relative;
                        cursor: pointer;
                        z-index: 1;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 123) . ';
                        width: ' . $styledata[207] . 'px;
                        max-width: 100%;

                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 139) . ';

                  }

                .oxi-addons-button-body-' . $oxiid . ' .oxi-button-' . $oxiid . ':hover {
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 157) . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 177) . ';
                    transition: .5s !important;

                }
                .oxi-addons-button-body-' . $oxiid . ' .oxi-button-icon{
                        font-size: ' . $styledata[103] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 107) . ';
                        transition: none !important;
                }
                

                .oxi-addons-button-body-' . $oxiid . ' .oxi-button-text{
                    font-size: ' . $styledata[73] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
                    transition: none !important;
                }
            }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
