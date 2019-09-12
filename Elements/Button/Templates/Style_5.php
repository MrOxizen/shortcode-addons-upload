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

class Style_5 extends Templates {

    public function default_render($style, $child, $admin) {
        $text = '';
        $text = '<div class="sa-button-text">' . $this->text_render($style['sa_btn_text']) . '</div>';

        echo '  <div class="oxi-addons-button">
                    <div class="oxi-addons-align-btn5">
                        <a ' . $this->url_render('sa_btn_link', $style) . ' class="oxi-button-btn5 ' . (array_key_exists('sa_btn_width_choose', $style) ? $style['sa_btn_width_choose'] : '') . '" id="' . $style['sa_btn_id'] . '">' . $text . '</a>
                    </div>
                </div>';
    }

    public function old_render() {
        $style = $this->dbdata;
        $child = $this->child;
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
                    <div class="oxi-addons-button-body">
                        <div class="oxi-addons-button-align" ' . OxiAddonsAnimation($styledata, 55) . '>';
        echo '              <a ' . $target . ' ' . $href . ' class="OxiAddons-Btn-' . $oxiid . ' OxiAddons-Btn-style" id="' . $stylefiles[5] . '">' . OxiAddonsTextConvert($stylefiles[3]) . '</a>
                       </div>
                    </div>
                </div>
            </div>
          </div>';

        $textalign = explode(':', $styledata[21]);
        $css .= '.oxi-addons-align-' . $oxiid . ' {   
                    float: left;
                    width: 100%;
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-body{
                    text-align: ' . $textalign[0] . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
                }';

        $css .= '.oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align{
                display: inline-flex;
                align-items: center;
                justify-content: center;
                text-decoration: none;
                background: ' . $styledata[73] . ';
                border-radius: ' . $styledata[95] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 75) . ';
                border-color: ' . $styledata[92] . ';
                border-style: ' . $styledata[91] . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 59) . '; 
                -moz-transition: all 0.15s ease-in-out;
                -o-transition: all 0.15s ease-in-out;
                -webkit-transition: all 0.15s ease-in-out;
                transition: all 0.15s ease-in-out;
            }
            
            .oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-' . $oxiid . '{
                display: inline-block;
                color: ' . $styledata[71] . ';
                font-size: ' . $styledata[5] . 'px;
                ' . OxiAddonsFontSettings($styledata, 17) . ';
                text-align: center;
                text-decoration: none;
                cursor: pointer;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
                box-shadow: none;
                width: ' . $styledata[125] . 'px;
                max-width:  100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-' . $oxiid . ':hover{
                color:' . $styledata[97] . ';
                
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:hover {
                background: ' . $styledata[99] . ';
                border-radius: ' . $styledata[121] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
                border-color: ' . $styledata[118] . ';
                border-style: ' . $styledata[117] . ';
                 ' . OxiAddonsBoxShadowSanitize($styledata, 59) . '; 
              }
            
            .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:active {
                margin-top: 5px;
                -moz-box-shadow: none;
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-align-' . $oxiid . ' {   
                    float: left;
                    width: 100%;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-body{
                    display: flex;
                    justify-content: center;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 40) . ';
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align{
                    display: flex;
                    align-items: center;
                    justify-content: center;

                    text-decoration: none;
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 76) . ';
                    width: ' . $styledata[10] . 'px;
                    height: ' . $styledata[14] . 'px;
                    -moz-transition: all 0.15s ease-in-out;
                    -o-transition: all 0.15s ease-in-out;
                    -webkit-transition: all 0.15s ease-in-out;
                    transition: all 0.15s ease-in-out;
                }

                .oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-' . $oxiid . '{
                    display: inline-block;
                    text-decoration: none;
                    cursor: pointer;
                    font-size: ' . $styledata[6] . 'px;
                text-align: center;

                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
                        width: ' . $styledata[126] . 'px;
                    max-width:  100%;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:hover {
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
                  }

                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:active {
                    top: 3px;
                    -moz-box-shadow: none;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                }
            
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-align-' . $oxiid . ' {   
                    float: left;
                    width: 100%;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-body{
                    display: flex;
                    justify-content: center;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align{
                    display: flex;
                    align-items: center;
                    justify-content: center;

                    text-decoration: none;
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 77) . ';
                    width: ' . $styledata[11] . 'px;
                    height: ' . $styledata[15] . 'px;
                    -moz-transition: all 0.15s ease-in-out;
                    -o-transition: all 0.15s ease-in-out;
                    -webkit-transition: all 0.15s ease-in-out;
                    transition: all 0.15s ease-in-out;
                }

                .oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-' . $oxiid . '{
                    display: inline-block;
                    text-decoration: none;
                    font-size: ' . $styledata[7] . 'px;
                    text-align: center;
                    cursor: pointer;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
                        width: ' . $styledata[127] . 'px;
                    max-width: 100%;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:hover {
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
                  }

                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:active {
                    margin-top: 5px;
                    -moz-box-shadow: none;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                }
            }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
