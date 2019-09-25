<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Info_banner\Templates;

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

class Style_2 extends Templates
{

    public function default_render($style, $child, $admin)
    {

        $image = '';

        if ($this->media_render('sa_info_banner_front_image', $style) != '') {
            $image = ' 
                <div ' . $this->animation_render('sa_info_banner_front_image_animation', $style) . ' class="oxi_addons__image_main" >
                    <img ' . (array_key_exists('sa_info_banner_image_switcher', $style) && $style['sa_info_banner_image_switcher'] != 'yes' ? 'style="width: 100%; max-width: 100%; height: auto;"' : '') . ' src="' . $this->media_render('sa_info_banner_front_image', $style) . '" class="oxi_addons__image" alt="front image"/>
                </div>  
            ';
        }

        echo '
            <div class="oxi_addons__info_banner_style_2 oxi-addons-row">';
        if ($style['sa_info_banner_image_position'] == 'left') {
            echo '<div class="oxi-bt-col-lg-6 oxi-bt-col-md-12 oxi-bt-col-sm-12">' . $image . '</div> ';
        }
        echo '<div class="oxi-bt-col-lg-6 oxi-bt-col-md-12 oxi-bt-col-sm-12">   <div class="oxi-addons-row" >';
        $datas = (array_key_exists('sa_info_banner_repeater', $style) && is_array($style['sa_info_banner_repeater']) ? $style['sa_info_banner_repeater'] : []);
        foreach ($datas as $key => $value) {
            $heading  = $details = $icon = '';
            if (array_key_exists('sa_info_banner_title', $value) && $value['sa_info_banner_title'] != '') {
                $heading = '<' . $style['sa_banner_title_tag'] . ' class="oxi_addons__heading heading-'.$key.'" >' . $this->text_render($value['sa_info_banner_title']) . '</' . $style['sa_banner_title_tag'] . '>';
            }
            if (array_key_exists('sa_info_banner_desc', $value) && $value['sa_info_banner_desc'] != '') {
                $details = '<div class="oxi_addons__details details-'.$key.'" > ' . $this->text_render($value['sa_info_banner_desc']) . ' </div>';
            }
            if (array_key_exists('sa_info_banner_icon', $value) && $value['sa_info_banner_icon'] != '') {
                $icon = '<div class="oxi_addons__icon_main">
                                    <div class="oxi_addons__icon">
                                    ' . $this->font_awesome_render($value['sa_info_banner_icon']) . '
                                    </div>
                                </div>';
            }
            echo ' 
                <div class="oxi_addons__info_banner_content_style_2 ' . $this->column_render('sa_addons_info_banner_column', $style) . '" >
                    <div class="oxi_addons__content_main_wrapper" ' . $this->animation_render('sa_addons_info_banner_animation', $style) . '>
                        <div class="oxi_addons__content_main">
                            ' . $icon . '
                            ' . $heading . '
                            ' . $details . '
                        </div>
                    </div>
                </div> 
            ';
        }
        echo '</div></div>';
        if ($style['sa_info_banner_image_position'] == 'right') {
            echo '<div class="oxi-bt-col-lg-6 oxi-bt-col-md-12 oxi-bt-col-sm-12">' . $image . '</div> ';
        }

        '</div>';
    }

    public function old_render()
    {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';
        $image = '';
        if ($styledata[14] != '') {
            $image = ' <img src="' . OxiAddonsUrlConvert($styledata[3]) . '" alt="front images" class="oxi-addons-img">';
        }

        echo '<div class="oxi-addons-container">
              <div class="oxi-addons-row">
                <div class="oxi-addons-main-wrapper-' . $oxiid . ' ">';
        if ($styledata[203] == 'left') {
            echo ' <div class="oxi-bt-col-lg-6 oxi-bt-col-md-12">
                                <div class="oxi-addons-image-body">
                                    ' . $image . '
                                </div>
                            </div>';
        }
        echo '<div class="oxi-bt-col-lg-6 oxi-bt-col-md-12"> ';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            $heading = $content  = $icon  = '';

            if ($data[1] != '') {
                $heading = '
                                                <div class="oxi-addons-content-boxes-heading">
                                                    ' . OxiAddonsTextConvert($data[1]) . '
                                                </div>
                                            ';
            }
            if ($data[3] != '') {
                $content = '
                                                <div class="oxi-addons-content-boxes-content">
                                                ' . OxiAddonsTextConvert($data[3]) . '
                                                </div>  
                                            ';
            }
            if ($data[5] != '') {
                $icon = '
                                                <div class="oxi-addons-content-boxes-icon" ' . OxiAddonsAnimation($styledata, 195) . '>
                                                ' . oxi_addons_font_awesome($data[5]) . '
                                                </div>  
                                            ';
            }
            echo '<div class="' . OxiAddonsItemRows($styledata, 21) . ' ">';
            echo '<div class="oxi-addons-content-boxes-' . $oxiid . ' " ' . OxiAddonsAnimation($styledata, 87) . '>
                                                <div class="oxi-addons-content-boxes-main">                        
                                                    ' . $icon . '
                                                    ' . $heading . '
                                                    ' . $content . '              
                                                </div>
                                            </div>';

            echo '</div>';
        }
        echo ' </div>';
        if ($styledata[203] == 'right') {
            echo ' <div class="oxi-bt-col-lg-6 oxi-bt-col-md-12">
                                <div class="oxi-addons-image-body">
                                    ' . $image . '
                                </div>
                            </div>';
        }
        echo '</div>';
        echo '</div></div>';

        $justify = '';
        if ($styledata[97] == 'left') {
            $justify = 'justify-content: flex-start;';
        } elseif ($styledata[97] == 'right') {
            $justify = 'justify-content: flex-end;';
        } else {
            $justify = 'justify-content: center;';
        }
        $css .= '  
            .oxi-addons-main-wrapper-' . $oxiid . '{
                width: 100%;
                float: left;
                ' . OxiAddonsBGImage($styledata, 199) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 205) . ';
                overflow: hidden;
                display: flex;
                align-items: center;
                background-size: cover;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-body{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . '; 
                text-align: center;
    
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-body .oxi-addons-img{
                height: auto;
                max-width: ' . $styledata[223] . '%;
                width: ' . $styledata[223] . '%;
            }  
            .oxi-addons-content-boxes-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 65) . ';
                display: inline-block;
                overflow: auto;
            }
            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-main{
                width: 100%;
                float:left; 
                background: ' . $styledata[25] . ';
                border:  ' . $styledata[27] . 'px ' . $styledata[28] . ';
                border-color: ' . $styledata[31] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 81) . '
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . '; 
            } 
            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-heading{
                width: 100%;
                float:left;
                font-size: ' . $styledata[115] . 'px;
                color: ' . $styledata[119] . ';
                ' . OxiAddonsFontSettings($styledata, 121) . ';    
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . ';   
            }
            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-content{
                width: 100%;
                float:left;
                font-size: ' . $styledata[143] . 'px;
                color: ' . $styledata[147] . ';
                ' . OxiAddonsFontSettings($styledata, 149) . ';    
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 155) . ';    
            }
            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon{
                width: 100%;
                float:left;  
                display: flex;   
                ' . $justify . ';
            } 
            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon .oxi-icons{
                display: flex; 
                align-items: center; 
                justify-content: center;
                font-size: ' . $styledata[91] . 'px; 
                line-height:1;
                color: ' . $styledata[95] . ';
                background: ' . $styledata[171] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 173) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 189) . '
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . '; 
                width: ' . $styledata[227] . 'px;
                height: ' . $styledata[227] . 'px;  
            }  
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-main-wrapper-' . $oxiid . '{
                    display: block;
                }
                .oxi-addons-main-wrapper-' . $oxiid . '{ 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 206) . '; 
                }
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-body{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 6) . '; 
                }
              
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-body .oxi-addons-img{
                    height: auto;
                    max-width: ' . $styledata[224] . '%;
                    width: ' . $styledata[224] . '%;
                } 
        
                .oxi-addons-content-boxes-' . $oxiid . '{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 66) . ';
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-main{ 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 34) . '; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 50) . '; 
                } 
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-heading{ 
                    font-size: ' . $styledata[116] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 128) . ';   
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-content{ 
                    font-size: ' . $styledata[144] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 156) . ';   
                } 
             
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon .oxi-icons{
                    font-size: ' . $styledata[92] . 'px;  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 174) . '; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 100) . ';   
                    width: ' . $styledata[228] . 'px;
                    height: ' . $styledata[228] . 'px;  
                } 
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-main-wrapper-' . $oxiid . '{
                    display: block;
                }
                .oxi-addons-main-wrapper-' . $oxiid . '{ 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 207) . '; 
                }
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-body{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . '; 
                }
              
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-body .oxi-addons-img{
                    height: auto;
                    max-width: ' . $styledata[225] . '%;
                    width: ' . $styledata[225] . '%;
                } 
        
                .oxi-addons-content-boxes-' . $oxiid . '{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 67) . ';
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-main{ 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . '; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 51) . '; 
                } 
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-heading{ 
                    font-size: ' . $styledata[117] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';   
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-content{ 
                    font-size: ' . $styledata[145] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 157) . ';   
                } 
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon{ 
                    justify-content: center !important;  
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon .oxi-icons{
                    font-size: ' . $styledata[92] . 'px;  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 175) . '; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';   
                    width: ' . $styledata[229] . 'px;
                    height: ' . $styledata[229] . 'px;  
                } 
            }
            ';

        if ($styledata[203] == 'left') {
            $css .= '.oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-body .oxi-addons-img{
                            height: auto;
                            max-width: ' . $styledata[223] . '%;
                            width: ' . $styledata[223] . '%;
                            transform:translateX(-' . (100 - ((100 / $styledata[223]) * 100)) . '%);
                        } 
                        @media only screen and (min-width : 669px) and (max-width : 993px){
    
                            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-body .oxi-addons-img{
                                height: auto;
                                max-width: ' . $styledata[224] . '%;
                                width: ' . $styledata[224] . '%;
                                transform:translateX(-' . (100 - ((100 / $styledata[224]) * 100)) . '%);
                            } 
                        }
                        @media only screen and (max-width : 668px){ 
                            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-body .oxi-addons-img{
                                height: auto;
                                max-width: ' . $styledata[225] . '%;
                                width: ' . $styledata[225] . '%;
                                transform:translateX(-' . (100 - ((100 / $styledata[225]) * 100)) . '%);
                            } 
                        }
                        
                        ';
        }
        if ($styledata[221] == 'auto') {
            $css .= '.oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-body .oxi-addons-img{ 
                    max-width: 100%;
                    width:  auto !important;
                    transform:translateX(-0%) !important; 
                } ';
        }
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
