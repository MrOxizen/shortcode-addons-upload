<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Banner\Templates;

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

class Style_6 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $heading =   $button  = $icon =  $line = '';
        if (array_key_exists('sa_banner_heading_text', $style) && $style['sa_banner_heading_text'] != '') {
            $heading = '<' . $style['sa_banner_tag'] . ' class="oxi_addons__heading" ' . $this->animation_render('sa_banner_heading_animation', $style) . '>' . $this->text_render($style['sa_banner_heading_text']) . '</' . $style['sa_banner_tag'] . '>';
        }
        if (array_key_exists('sa_banner_line_switcher', $style) && $style['sa_banner_line_switcher'] == 'yes') {
            $line = '<div class="oxi_addons__line_main" ' . $this->animation_render('sa_banner_line_animation', $style) . '><div class="oxi_addons__line" ></div></div>';
        }

        if (array_key_exists('sa_banner_button_switcher', $style) && $style['sa_banner_button_switcher'] == 'yes') {
            if (array_key_exists('sa_banner_button_text', $style) && $style['sa_banner_button_text'] != '') {
                if (array_key_exists('sa_banner_button_link-url', $style) && $style['sa_banner_button_link-url'] != '') {
                    $button = '<div class="oxi_addons__button_main" ' . $this->animation_render('sa_banner_button_animation', $style) . '>
                                        <a ' . $this->url_render('sa_banner_button_link', $style) . ' class="oxi_addons__button">
                                            ' . $this->text_render($style['sa_banner_button_text']) . '
                                          </a>
                                    </div>';
                } else {
                    $button = '<div class="oxi_addons__button_main" ' . $this->animation_render('sa_banner_button_animation', $style) . '>
                                        <button class="oxi_addons__button">
                                            ' . $this->text_render($style['sa_banner_button_text']) . ' 
                                        </button>
                                    </div>';
                }
            }
        }


        if (array_key_exists('sa_banner_icon', $style) && $style['sa_banner_icon'] != '') {
            $icon = '
                <div class="oxi_addons__icon">
                    ' . $this->font_awesome_render($style['sa_banner_icon']) . '
                </div>
            ';
        }



        echo '<div class="oxi_addons__banner_wrapper">
                    <div class="oxi_addons__banner_style_6">  
                    <div class="oxi-bt-col-lg-12 oxi-bt-col-md-12 oxi-bt-col-sm-12">
                            <div class="oxi_addons__icon_line">
                                ' . $icon . '
                                ' . $line . '
                            </div>
                            ' . $heading . ' 
                            <div class="oxi_addons__button_main"> 
                                ' . $button . '  
                            </div> 
                        </div>
                    </div>';
        echo ' </div>';
    }

    public function old_render()
    {
        $styledata = $this->dbdata;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $icon = $heading = $button = $line_position = '';

        if ($styledata[191] == 'left') :
            $line_position = '
                    left: 0;
                    -webkit-transform: translate(-0%);
                    -moz-transform: translate(-0%);
                    -o-transform: translate(-0%);
                    transform: translate(-0%);
                    ';

        elseif ($styledata[191] == 'right') :
            $line_position = '
                    right: 0;
                    -webkit-transform: translate(-0);
                    -moz-transform: translate(-0);
                    -o-transform: translate(-0);
                    transform: translate(-0);
                    ';
        else :
            $line_position = '
                left: 50%;
                -webkit-transform: translate(-50%);
                -moz-transform: translate(-50%);
                -o-transform: translate(-50%);
                transform: translate(-50%);
            ';
        endif;

        if ($stylefiles[2] != '') {
            $icon = '
                <div class="oxi-addons-main-icon">
                    <div class="oxi-addons-icon"  ' . OxiAddonsAnimation($styledata, 47) . '> ' . oxi_addons_font_awesome('' . $stylefiles[2] . '') . '</div>
                    <div class="oxi-addons-line" ' . OxiAddonsAnimation($styledata, 95) . '></div>
                </div>
            ';
        }

        if ($stylefiles[4] != '') {
            $heading = '
                <div class="oxi-addons-main-heading" ' . OxiAddonsAnimation($styledata, 80) . '></>
                        ' . OxiAddonsTextConvert($stylefiles[4]) . '
                </div>
            ';
        }
        if ($stylefiles[6] != '' && $stylefiles[8] != '') {
            $button = '
                <div class="oxi-addons-main-button" ' . OxiAddonsAnimation($styledata, 186) . '></>
                    <a href="' . OxiAddonsUrlConvert($stylefiles[8]) . '" class="oxi-addons-link"  target="' . $styledata[100] . '">
                        ' . OxiAddonsTextConvert($stylefiles[6]) . '
                    </a>
                </div>
            ';
        } elseif ($stylefiles[6] != '' && $stylefiles[8] == '') {
            $button = '
            <div class="oxi-addons-main-button" ' . OxiAddonsAnimation($styledata, 186) . '></>
                <div class="oxi-addons-link">
                    ' . OxiAddonsTextConvert($stylefiles[6]) . '
                </div>
            </div>
        ';
        }

        echo '<div class="oxi-addons-container">
                <div class="oxi-addons-row">
                    <div class="oxi-addons-wrapper-' . $oxiid . '">
                         <div class="oxi-addons-lg-col-1 oxi-addons-md-col-1 oxi-addons-xs-col-1 oxi-addons-main">
                                ' . $icon . '
                                ' . $heading . '
                                ' . $button . '
                         </div>
                    </div>
                </div>
            </div>
            ';
        $css = '
            .oxi-addons-wrapper-' . $oxiid . '{
                width: 100%;
                float: left;
                ' . OxiAddonsBGImage($styledata, 3) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
                overflow: hidden;
                display: flex;
                justify-content:center;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-icon{
                position: relative;
                text-align: ' . $styledata[191] . ';
                width: 100%;
                float: left;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-icon .oxi-addons-icon{
                color: ' . $styledata[27] . ';
                display: block;
                font-size: ' . $styledata[23] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-icon .oxi-addons-icon .oxi-icons:hover{
                color: ' . $styledata[29] . ';
                -webkit-transform: translate(5%);
                -moz-transform: translate(5%);
                -o-transform: translate(5%);
                transform: translate(5%);
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-icon .oxi-addons-line{
                position: relative;
                width: 100%;
                float: left;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-icon .oxi-addons-line::before{
                content: "";
                position: absolute;
               ' . $line_position . '
                top: 0;
                width: ' . $styledata[85] . '%;
                height:' . $styledata[89] . 'px;
                background: ' . $styledata[93] . ';
    
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-heading{
                font-size: ' . $styledata[52] . 'px;
                line-height: ' . ($styledata[52] / 2 + 10) . 'px;
                ' . OxiAddonsFontSettings($styledata, 56) . ';
                color: ' . $styledata[62] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 64) . ';
                width: 100%;
                float: left;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button{
                width: 100%;
                float: left;
                text-align: ' . $styledata[193] . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link{
                background: ' . $styledata[114] . ';
                color: ' . $styledata[112] . ';
                display: inline-block;
                ' . OxiAddonsFontSettings($styledata, 106) . ';
                font-size: ' . $styledata[102] . 'px;
                border:  ' . $styledata[148] . 'px ' . $styledata[149] . ';
                border-color: ' . $styledata[152] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 116) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 154) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 170) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 132) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link:hover{
                background: ' . $styledata[140] . ';
                color: ' . $styledata[138] . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 142) . ';
                border-color: ' . $styledata[195] . ';
            }
    
    
    
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-wrapper-' . $oxiid . '{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
                }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-icon .oxi-addons-icon{
                    font-size: ' . $styledata[24] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
                }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-icon .oxi-addons-line::before{
                    width: ' . $styledata[86] . '%;
                    height:' . $styledata[90] . 'px;
                }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-heading{
                    font-size: ' . $styledata[53] . 'px;
                    line-height: ' . ($styledata[53] / 2 + 10) . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 65) . ';
                }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link{
                    font-size: ' . $styledata[103] . 'px;
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 117) . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 155) . ';
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 171) . ';
                   }
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-wrapper-' . $oxiid . '{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
                }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-icon .oxi-addons-icon{
                    font-size: ' . $styledata[25] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
                }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-icon .oxi-addons-line::before{
                    width: ' . $styledata[87] . '%;
                    height:' . $styledata[91] . 'px;
                }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-heading{
                    font-size: ' . $styledata[54] . 'px;
                    line-height: ' . ($styledata[54] / 2 + 10) . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 66) . ';
                }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link{
                    font-size: ' . $styledata[104] . 'px;
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 118) . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 156) . ';
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 172) . ';
                   }
            }
        ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
