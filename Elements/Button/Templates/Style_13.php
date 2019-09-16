<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Button\Templates;

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

class Style_13 extends Templates {

    public function default_render($style, $child, $admin) {
        $text = '<div class="sa-button-text">' . $this->text_render($style['sa_btn_text']) . '</div>';
        $icon = (array_key_exists('sa_btn_icon', $style) ? $this->font_awesome_render($style['sa_btn_icon_class']) : '');

        if (array_key_exists('sa_btn_icon_position', $style)):
            $html = $icon . $text;
        else:
            $html = $text . $icon;
        endif;
        echo '  <div class="oxi-addons-align-btn13">
                         <a ' . $this->url_render('sa_btn_link', $style) . ' class="oxi-button-btn13 ' . (array_key_exists('sa_btn_width_choose', $style) ? $style['sa_btn_width_choose'] : '') . '" >' . $html . '</a>
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
                    <div class="oxi-addons-button-body" ' . OxiAddonsAnimation($styledata, 47) . '>
                        <div class="oxi-addons-button-align">';
        echo '<a ' . $target . ' ' . $href . '   class="oxi-button oxi-button-' . $oxiid . ' buttonOxi" id="' . $stylefiles[5] . '" >' . OxiAddonsTextConvert($stylefiles[3]) . '</a>';
        echo '       </div>
                    </div>
                </div>
            </div>
          </div>';

        $textalign = explode(':', $styledata[65]);
        $css .= '.oxi-addons-align-' . $oxiid . ' {   
                    float: left;
                    width: 100%;
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-body{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
                text-align: ' . $textalign[0] . ';
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align{
                display: inline-flex;
                align-items: center;
                justify-content: center;
                position: relative; 
                
                height: ' . $styledata[11] . 'px;
                width: ' . $styledata[7] . 'px;
                max-width:300px;
                max-height:300px;
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-button-' . $oxiid . '{
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                margin: auto;
                font-size: ' . $styledata[57] . 'px;
                    ' . OxiAddonsFontSettings($styledata, 61) . '
                text-align: center;
                text-decoration: none;
                cursor: pointer;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';
                border-style: ' . $styledata[87] . ';
                border-color: ' . $styledata[88] . ';
                border-radius: ' . $styledata[91] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
                outline: none;
                overflow: hidden;
                color: ' . $styledata[67] . ';
                background:' . $styledata[69] . ';
                transition: color 0.3s 0.1s ease-out;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
                    ' . OxiAddonsBoxShadowSanitize($styledata, 51) . '; 
              }
            .oxi-addons-align-' . $oxiid . ' .oxi-button-' . $oxiid . '::before {
                position: absolute;
                top: 50%;
                bottom: 50%;
                margin: auto;
                content: "";
                border-radius: 50%;
                display: block;
                width: 320px;
                height: 320px;
                text-align: center;
                transition: box-shadow 0.5s ease-out;
                z-index: -1; 
            }
            
            .oxi-addons-align-' . $oxiid . ' .oxi-button-' . $oxiid . ':focus,
            .oxi-addons-align-' . $oxiid . ' .oxi-button-' . $oxiid . ':hover {
                color:' . $styledata[93] . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 97) . ';
                border-style: ' . $styledata[113] . ';
                border-color: ' . $styledata[114] . ';
                border-radius: ' . $styledata[117] . 'px;
                    ' . OxiAddonsBoxShadowSanitize($styledata, 51) . '; 
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-button-' . $oxiid . ':hover::before {
                box-shadow: inset 0 0 0 300px ' . $styledata[95] . ';
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-button-' . $oxiid . ':focus{
                color: ' . $styledata[67] . ';
            }
            
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-body{
                    justify-content: center;
                    display: flex;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-body{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align{
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    position: relative; 
                    height: ' . $styledata[12] . 'px;
                    width: ' . $styledata[8] . 'px;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-button-' . $oxiid . '{
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    margin: auto;
                    font-size: ' . $styledata[58] . 'px;
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 72) . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
                    outline: none;
                    overflow: hidden;
                    transition: color 0.3s 0.1s ease-out;
                    text-align: center;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  }
                
                .oxi-addons-align-' . $oxiid . ' .oxi-button-' . $oxiid . ':hover {
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 98) . ';
                }
                
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-body{
                    justify-content: center;
                    display: flex;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-body{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align{
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    position: relative; 
                    height: ' . $styledata[13] . 'px;
                    width: ' . $styledata[9] . 'px;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-button-' . $oxiid . '{
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    margin: auto;
                    font-size: ' . $styledata[59] . 'px;
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
                    outline: none;
                    overflow: hidden;
                    transition: color 0.3s 0.1s ease-out;
                    text-align: center;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  }
                
                .oxi-addons-align-' . $oxiid . ' .oxi-button-' . $oxiid . ':hover {
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';
                }
            }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
