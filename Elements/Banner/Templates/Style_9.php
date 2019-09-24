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

class Style_9 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $heading = $sub_heading = $details =  $left_button =  $right_button  = $image_and_content = $line = $image = '';
        if (array_key_exists('sa_banner_heading_text', $style) && $style['sa_banner_heading_text'] != '') {
            $heading = '<' . $style['sa_banner_tag'] . ' class="oxi_addons__heading" ' . $this->animation_render('sa_banner_heading_animation', $style) . '>' . $this->text_render($style['sa_banner_heading_text']) . '</' . $style['sa_banner_tag'] . '>';
        } 
        if (array_key_exists('sa_banner_details_text', $style) && $style['sa_banner_details_text'] != '') {
            $details = '<div class="oxi_addons__details" ' . $this->animation_render('sa_banner_details_animation', $style) . '> ' . $this->text_render($style['sa_banner_details_text']) . ' </div>';
        }
        if (array_key_exists('sa_banner_line_switcher', $style) && $style['sa_banner_line_switcher'] == 'yes') {
            $line = '<div class="oxi_addons__line_main" ' . $this->animation_render('sa_banner_line_animation', $style) . '><div class="oxi_addons__line" ></div></div>';
        }
        if (array_key_exists('sa_banner_button_switcher', $style) && $style['sa_banner_button_switcher'] == 'yes') {
            if (array_key_exists('sa_banner_button_text', $style) && $style['sa_banner_button_text'] != '') {
                if (array_key_exists('sa_banner_button_link-url', $style) && $style['sa_banner_button_link-url'] != '') {
                    $left_button = '<div class="oxi_addons__button_main" ' . $this->animation_render('sa_banner_button_animation', $style) . '>
                                        <a ' . $this->url_render('sa_banner_button_link', $style) . ' class="oxi_addons__button">
                                            ' . $this->text_render($style['sa_banner_button_text']) . ' 
                                        </a>
                                    </div>';
                } else {
                    $left_button = '<div class="oxi_addons__button_main" ' . $this->animation_render('sa_banner_button_animation', $style) . '>
                                        <button class="oxi_addons__button">
                                            ' . $this->text_render($style['sa_banner_button_text']) . ' 
                                        </button>
                                    </div>';
                }
            }
        }

      
        if ($this->media_render('sa_banner_front_image', $style) != '') {
            $image = '
            <div class="oxi-bt-col-lg-6 oxi-bt-col-md-12 oxi-bt-col-sm-12">
                <div ' . $this->animation_render('sa_banner_front_image_animation', $style) . ' class="oxi_addons_image_main"  >
                    <img ' . (array_key_exists('sa_banner_image_switcher', $style) && $style['sa_banner_image_switcher'] != 'yes' ? 'style="width: 100%; height: auto"' : '') . ' src="' . $this->media_render('sa_banner_front_image', $style) . '" class="oxi_addons__image" alt="front image"/>
                </div> 
            </div>
            ';
        }
        if (array_key_exists('sa_banner_image_position', $style) && $style['sa_banner_image_position'] == 'left') {
            $image_and_content = '
                    ' . $image . ' 
                    <div class="oxi-bt-col-lg-6 oxi-bt-col-md-12 oxi-bt-col-sm-12">
                    <div class="oxi_addons__heading_line">
                        '. $heading .' 
                        '. $line .'
                    </div>   
                    '. $details .'  
                    <div class="oxi_addons__button_main">
                        '. $left_button .'
                        '. $right_button.'
                    </div>
                </div> 
            ';
        } else {
            $image_and_content = '<div class="oxi-bt-col-lg-6 oxi-bt-col-md-12 oxi-bt-col-sm-12">
                                <div class="oxi_addons__heading_line">
                                    '. $heading .'
                                    '. $line .'
                                </div>   
                                '. $details .'  
                                <div class="oxi_addons__button_main">
                                '. $left_button .'
                                '. $right_button .'
                                </div>
                            </div> 
            ' . $image . ' ';
        }
        echo '<div class="oxi_addons__banner_wrapper">
                    <div class="oxi_addons__banner_style_9 row">  
                        '.$image_and_content.'
                    </div>';
        echo ' </div>';
    }

    public function old_render()
    {
        $styledata = $this->dbdata;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $line_position = $heading = $detail = $button = $image = $column = $main_column = '';
    if ($styledata[31] == 'left'):
        $line_position = '
            left: 0;
            -webkit-transform: translate(-0%);
            -moz-transform: translate(-0%);
            -o-transform: translate(-0%);
            transform: translate(-0%);
            ';

    elseif ($styledata[31] == 'right'):
        $line_position = '
            right: 0;
            -webkit-transform: translate(-0);
            -moz-transform: translate(-0);
            -o-transform: translate(-0);
            transform: translate(-0);
            ';
    else:
        $line_position = '
            left: 50%;
            -webkit-transform: translate(-50%);
            -moz-transform: translate(-50%);
            -o-transform: translate(-50%);
            transform: translate(-50%);
        ';
    endif;
    if ($stylefiles[2] != '') {
        $heading = '
                <div class="oxi-addons-main-header">
                    <div class="oxi-addons-heading"  ' . OxiAddonsAnimation($styledata, 51) . '>
                            ' . OxiAddonsTextConvert($stylefiles[2]) . '
                    </div>
                    <div class="oxi-addons-line" ' . OxiAddonsAnimation($styledata, 66) . '></div>
                </div>
        ';
    }
    if ($stylefiles[4] != '') {
        $detail = '
                <div class="oxi-addons-details" ' . OxiAddonsAnimation($styledata, 99) . '>
                        ' . OxiAddonsTextConvert($stylefiles[4]) . '
                </div>
        ';
    }
    if ($stylefiles[8] != '' && $stylefiles[10] != '') {
        $button = '
            <div class="oxi-addons-button"  ' . OxiAddonsAnimation($styledata, 219) . '>
                <a href="' . OxiAddonsUrlConvert($stylefiles[10]) . '" class="oxi-addons-link"  target="' . $styledata[133] . '">
                    ' . OxiAddonsTextConvert($stylefiles[8]) . '
                </a>
            </div>
        ';
    } elseif ($stylefiles[8] != '' && $stylefiles[10] == '') {
        $button = '
            <div class="oxi-addons-button"  ' . OxiAddonsAnimation($styledata, 219) . '>
                <div class="oxi-addons-link">
                    ' . OxiAddonsTextConvert($stylefiles[8]) . '
                </div>
            </div>
         ';
    }
    if ($stylefiles[6] != '') {
        $image = '
            <div class="oxi-addons-lg-col-2 oxi-addons-md-col-1 oxi-addons-xs-col-1 oxi-addons-media">
                <div class="oxi-addons-images" ' . OxiAddonsAnimation($styledata, 128) . '>
                    <img class="oxi-addons-img" src="' . OxiAddonsUrlConvert($stylefiles[6]) . '" alt="images">
                </div>
            </div>
        ';
        $column = '
            <div class="oxi-addons-lg-col-2 oxi-addons-md-col-1 oxi-addons-xs-col-1 oxi-addons-media">
        ';
    } else {
        $column = '
            <div class="oxi-addons-lg-col-1 oxi-addons-md-col-1 oxi-addons-xs-col-1 oxi-addons-media">
        ';
    }
    if ($styledata[224] == 'right') {
        $main_column = '
            ' . $column . '
                <div class="oxi-addons-main">
                    ' . $heading . '
                    ' . $detail . '
                    ' . $button . '
                </div>
            </div>
            ' . $image . '
        ';
    } else {
        $main_column = '
        ' . $image . '
        ' . $column . '
            <div class="oxi-addons-main">
                ' . $heading . '
                ' . $detail . '
                ' . $button . '
            </div>
        </div>
    ';
    }
    echo '<div class="oxi-addons-container">
            <div class="oxi-addons-wrapper-' . $oxiid . '">
                ' . $main_column . '
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
           align-items: center;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main{
            width: 100%;
            float: left;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-header{
           position: relative;
           width: 100%;
           float: left;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main .oxi-addons-heading{
            font-size: ' . $styledata[23] . 'px;
            line-height: 1.2;
            ' . OxiAddonsFontSettings($styledata, 27) . ';
            color: ' . $styledata[33] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . ';
            width: 100%;
            float: left;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-header .oxi-addons-line{
            width: 100%;
            float: left;
            position: relative;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-header .oxi-addons-line::before{
            content: "";
            position: absolute;
            top: 0;
            width: ' . $styledata[56] . '%;
            height:' . $styledata[60] . 'px;
            background: ' . $styledata[64] . ';
            ' . $line_position . '
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main .oxi-addons-details{
            font-size: ' . $styledata[71] . 'px;
            line-height: 1;
            ' . OxiAddonsFontSettings($styledata, 75) . ';
            color: ' . $styledata[81] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
            width: 100%;
            float: left;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main .oxi-addons-button{
            width: 100%;
            float: left;
            text-align: ' . $styledata[226] . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main  .oxi-addons-button .oxi-addons-link{
            background: ' . $styledata[147] . ';
            color: ' . $styledata[145] . ';
            display: inline-block;
            ' . OxiAddonsFontSettings($styledata, 139) . ';
            font-size: ' . $styledata[135] . 'px;
            border:  ' . $styledata[181] . 'px ' . $styledata[182] . ';
            border-color: ' . $styledata[185] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 149) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 203) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 165) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main .oxi-addons-button .oxi-addons-link:hover{
            background: ' . $styledata[173] . ';
            color: ' . $styledata[171] . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 175) . ';
            border-color: ' . $styledata[228] . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-images{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 112) . ';
            display: flex;
            justify-content: center;
            width: 100%;
            float: left;
         }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-images .oxi-addons-img{
                width: ' . $styledata[104] . 'px;
                max-width: 100%;
                height: 100%;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-images .oxi-addons-img:hover{
            cursor: pointer;
            -o-transform: translate(5%);
            -moz-transform: translate(5%);
            -webkit-transform: translate(5%);
            transform: translate(5%);
        }


        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-wrapper-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
                display: block;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main .oxi-addons-heading{
                font-size: ' . $styledata[24] . 'px;
                line-height: 1;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . ';
                text-aling: center;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-header .oxi-addons-line::before{
                width: ' . $styledata[57] . '%;
                height:' . $styledata[61] . 'px;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main .oxi-addons-details{
                font-size: ' . $styledata[72] . 'px;
                line-height: 1;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 84) . ';
                text-align: center;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-header .oxi-addons-line::before{
                left: 50%;
                -o-transform: translate(-50%)  ;
                -moz-transform: translate(-50%)  ;
                -webkit-transform: translate(-50%)  ;
                transform: translate(-50%)  ;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main .oxi-addons-button{
                text-align: center;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main  .oxi-addons-button .oxi-addons-link{
                font-size: ' . $styledata[136] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 150) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 188) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 204) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-images{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 123) . ';
             }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-images .oxi-addons-img{
                    width: ' . $styledata[105] . 'px;
                    max-width: 100%;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-media{
                width: 100%;
                float: none;
            }
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-wrapper-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
                display: block;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main .oxi-addons-heading{
                font-size: ' . $styledata[25] . 'px;
                line-height: 1.1;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . ';
                text-align: center;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-header .oxi-addons-line::before{
                left: 50%;
                -o-transform: translate(-50%)  ;
                -moz-transform: translate(-50%)  ;
                -webkit-transform: translate(-50%)  ;
                transform: translate(-50%)  ;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-header .oxi-addons-line::before{
                width: ' . $styledata[58] . '%;
                height:' . $styledata[62] . 'px;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main .oxi-addons-details{
                font-size: ' . $styledata[73] . 'px;
                line-height: 1;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 84) . ';
                text-align: center;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main .oxi-addons-button{
                text-align: center;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main  .oxi-addons-button .oxi-addons-link{
                font-size: ' . $styledata[137] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 151) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 189) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 205) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-images{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 124) . ';
             }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-images .oxi-addons-img{
                    width: ' . $styledata[106] . 'px;
                    max-width: 100%;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-media{
                width: 100%;
                float: none;
            }
        }
    ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}