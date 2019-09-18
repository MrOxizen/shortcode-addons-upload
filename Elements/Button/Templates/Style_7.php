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

class Style_7 extends Templates {

    public function default_render($style, $child, $admin) {
       $text = '<div class="sa-button-text">' . $this->text_render($style['sa_btn_text']) . '</div>';


        echo '  <div class="oxi-addons-button">
                    <div class="oxi-addons-align-btn7">
                        <a ' . $this->animation_render('sa_btn_animation', $style) . ' ' . $this->url_render('sa_btn_link', $style) . ' class="oxi-button-btn7 ' . (array_key_exists('sa_btn_width_choose', $style) && $style['sa_btn_width_choose'] != '0' ? $style['sa_btn_width_choose'] : '') . ' '.$style['sa_btn_effect_position'].'" >' . $text . '</a>
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
                    <div class="oxi-addons-button-body" ' . OxiAddonsAnimation($styledata, 31) . '>
                        <div class="oxi-addons-button-align" >';
        echo '<a ' . $target . ' ' . $href . '   class=" oxi-button-' . $oxiid . ' buttonOxi" id="' . $stylefiles[5] . '" >' . OxiAddonsTextConvert($stylefiles[3]) . '</a>';
        echo '       </div>
                    </div>
                </div>
            </div>
          </div>';

        $textalign = explode(':', $styledata[13]);
        $css .= '.oxi-addons-align-' . $oxiid . ' {   
                    float: left;
                    width: 100%;
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-body{
                    text-align : ' . $textalign[0] . ';
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align{
                display: inline-flex;
                align-items: center;
                justify-content: center;
                position: relative;
                
                background: ' . $styledata[49] . ';
                -webkit-transition-duration: 4s; 
                transition-duration: 0s;
                text-decoration: none;
                cursor: pointer;
                overflow:hidden;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 51) . ';
                border-style: ' . $styledata[67] . ';
                border-color: ' . $styledata[68] . ';
                border-radius: ' . $styledata[71] . 'px;
                outline: none;
                 ' . OxiAddonsBoxShadowSanitize($styledata, 35) . '; 
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:hover{
                
                color: ' . $styledata[73] . ';
                background: ' . $styledata[75] . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 77) . ';
                border-style: ' . $styledata[93] . ';
                border-color: ' . $styledata[94] . ';
                border-radius: ' . $styledata[97] . 'px;
                outline: none;
                 ' . OxiAddonsBoxShadowSanitize($styledata, 41) . '; 
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-button-' . $oxiid . '{
                font-size: ' . $styledata[5] . 'px;
                ' . OxiAddonsFontSettings($styledata, 9) . ';
                text-align : center;
                color: ' . $styledata[47] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . '; 
                max-width: 100%;
                width: ' . $styledata[103] . 'px;
                display: flex;
                align-items: center;
                justify-content: center;
            }';


        if ($styledata[101] == 1) {
            $css .= '.oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:after {
                content: "";
                background: #f1f1f1;
                display: block;
                position: absolute;
                padding-top: 300%;
                padding-left: 250%;
                margin-left: -20px !important;
                margin-top: -120%;
                opacity: 0;
                transition: all .8s;
                top:0;
                left:0;
              }';
        } elseif ($styledata[101] == 2) {
            $css .= '.oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:after {
                content: "";
                background: #f1f1f1;
                display: block;
                position: absolute;
                padding-top: 300%;
                padding-left: 250%;
                margin-left: -20px !important;
                margin-top: -120%;
                opacity: 0;
                transition: all .8s;
                top:0;
                right:0;
              }';
        } elseif ($styledata[101] == 3) {
            $css .= '.oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:after {
                content: "";
                background: #f1f1f1;
                display: block;
                position: absolute;
                padding-top: 300%;
                padding-left: 250%;
                margin-left: -20px !important;
                margin-top: -120%;
                opacity: 0;
                transition: all .8s;
                bottom:50%;
                top:50%;
                left:0%;
                right:0%;
              }';
        } elseif ($styledata[101] == 4) {
            $css .= '.oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:after {
                content: "";
                background: #f1f1f1;
                display: block;
                position: absolute;
                padding-top: 300%;
                padding-left: 250%;
                margin-left: -20px !important;
                margin-top: -120%;
                opacity: 0;
                transition: all .8s;
                bottom:0;
                left:0;
              }';
        } else {
            $css .= '.oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:after {
                content: "";
                background: #f1f1f1;
                display: block;
                position: absolute;
                padding-top: 300%;
                padding-left: 250%;
                margin-left: -20px !important;
                margin-top: -120%;
                opacity: 0;
                transition: all .8s;
                bottom:0;
                right:0;
              }';
        }

        $css .= ' .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:active:after {
                   padding: 0;
                   margin: 0;
                   opacity: 1;
                   transition: 0s
            }
            
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-align-' . $oxiid . ' {   
                        float: left;
                        width: 100%;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-body{
                    text-align : center;
                }

                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align{
                    display: inlene-flex;
                    align-items: center;
                    justify-content: center;

                    position: relative;
                    overflow:hidden;
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 52) . ';
                    outline: none;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:hover{
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 78) . ';
                    outline: none;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-button-' . $oxiid . '{
                    font-size: ' . $styledata[6] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';      
                    max-width: 100%;
                    width: ' . $styledata[104] . 'px;
                }

                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:after {
                    content: "";
                    background: #f1f1f1;
                    display: block;
                    position: absolute;
                    padding-top: 300%;
                    padding-left: 250%;
                    margin-left: -20px !important;
                    margin-top: -120%;
                    opacity: 0;
                    transition: all .8s;
                    left:0;
                    bottom:0;
                  }

                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:active:after {
                       padding: 0;
                       margin: 0;
                       opacity: 1;
                       transition: 0s
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-align-' . $oxiid . ' {   
                        float: left;
                        width: 100%;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-body{
                    text-align : center;
                }

                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align{
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;

                    position: relative;
                    overflow:hidden;
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 53) . ';
                    outline: none;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:hover{
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 79) . ';
                    outline: none;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-button-' . $oxiid . '{
                    font-size: ' . $styledata[7] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';   
                    max-width: 100%;
                    width: ' . $styledata[105] . 'px;
                }

                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:after {
                    content: "";
                    background: #f1f1f1;
                    display: block;
                    position: absolute;
                    padding-top: 300%;
                    padding-left: 250%;
                    margin-left: -20px !important;
                    margin-top: -120%;
                    opacity: 0;
                    transition: all .8s;
                    left:0;
                    bottom:0;
                  }

                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align:active:after {
                       padding: 0;
                       margin: 0;
                       opacity: 1;
                       transition: 0s
                }
            }';


        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
