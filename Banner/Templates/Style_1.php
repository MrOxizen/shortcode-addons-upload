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

class Style_1 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $heading = $details = $left_button = $right_button = $image = $image_and_content = '';
        if (array_key_exists('sa_banner_heading_text', $style) && $style['sa_banner_heading_text'] != '') {
            $heading = '<' . $style['sa_banner_tag'] . ' class="oxi_addons__heading"    >' . $this->text_render($style['sa_banner_heading_text']) . '</' . $style['sa_banner_tag'] . '>';
        }
        if (array_key_exists('sa_banner_details_text', $style) && $style['sa_banner_details_text'] != '') {
            $details = '<div class="oxi_addons__details" ' . $this->animation_render('sa_banner_details_animation', $style) . '> ' . $this->text_render($style['sa_banner_details_text']) . ' </div>';
        }

        if (array_key_exists('sa_banner_button_left_switcher', $style) && $style['sa_banner_button_left_switcher'] == 'yes') {
            if (array_key_exists('sa_banner_button_left_text', $style) && $style['sa_banner_button_left_text'] != '') {
                if (array_key_exists('sa_banner_button_left_link-url', $style) && $style['sa_banner_button_left_link-url'] != '') {
                    $left_button = '<div class="oxi_addons__button_left_main" ' . $this->animation_render('sa_banner_button_left_animation', $style) . '>
                                        <a ' . $this->url_render('sa_banner_button_left_link', $style) . ' class="oxi_addons__button_left">
                                        ' . $this->text_render($style['sa_banner_button_left_text']) . '
                                        ' . $this->font_awesome_render($style['sa_banner_button_left_icon']) . '
                                        </a>
                                    </div>';
                } else {
                    $left_button = '<div class="oxi_addons__button_left_main" ' . $this->animation_render('sa_banner_button_left_animation', $style) . '>
                                        <button class="oxi_addons__button_left">
                                            ' . $this->text_render($style['sa_banner_button_left_text']) . '
                                            ' . $this->font_awesome_render($style['sa_banner_button_left_icon']) . '
                                        </button>
                                    </div>';
                }
            }
        }
        if (array_key_exists('sa_banner_button_right_switcher', $style) && $style['sa_banner_button_right_switcher'] == 'yes') {
            if (array_key_exists('sa_banner_button_right_text', $style) && $style['sa_banner_button_right_text'] != '') {
                $icon_right = '';
                if (array_key_exists('sa_banner_button_right_icon_postion', $style) && $style['sa_banner_button_right_icon_postion'] == 'left') {
                    $icon_right = '' . $this->font_awesome_render($style['sa_banner_button_right_icon']) . ' ' . $this->text_render($style['sa_banner_button_right_text']) . '';
                } else {
                    $icon_right = '' . $this->text_render($style['sa_banner_button_right_text']) . ' ' . $this->font_awesome_render($style['sa_banner_button_right_icon']) . '';
                }
                if (array_key_exists('sa_banner_button_right_link-url', $style) && $style['sa_banner_button_right_link-url'] != '') {
                    $right_button = '<div class="oxi_addons__button_right_main" ' . $this->animation_render('oxi_addons__button_right_main', $style) . '>
                                            <a ' . $this->url_render('sa_banner_button_right_link', $style) . ' class="oxi_addons__button_right">
                                            ' . $icon_right . '
                                            </a>
                                    </div>';
                } else {
                    $right_button = '<div class="oxi_addons__button_right_main" ' . $this->animation_render('oxi_addons__button_right_main', $style) . '>
                                            <p class="oxi_addons__button_right">
                                            ' . $icon_right . '
                                            </p>
                                    </div>';
                }
            }
        }
        if ($this->media_render('sa_banner_front_image', $style) != '') {
            $image = '
            <div class="oxi-bt-col-lg-6 oxi-bt-col-md-12 oxi-bt-col-sm-12">
                <div  class="oxi_addons_image_main" ' . (array_key_exists('sa_banner_image_position', $style) && $style['sa_banner_image_position'] != 'left' ? 'style="transform: translateX(0%)"' : '') . '>
                    <img  ' . $this->animation_render('sa_banner_front_image_animation', $style) . ' ' . (array_key_exists('sa_banner_image_switcher', $style) && $style['sa_banner_image_switcher'] != 'yes' ? 'style="width: 100%; max-width: 100%"' : '') . ' src="' . $this->media_render('sa_banner_front_image', $style) . '" class="oxi_addons__image" alt="front image"/>
                </div> 
            </div>
            ';
        }
        if (array_key_exists('sa_banner_image_position', $style) && $style['sa_banner_image_position'] == 'left') {
            $image_and_content = '
            ' . $image . '
                    <div class="oxi-bt-col-lg-6 oxi-bt-col-md-12 oxi-bt-col-sm-12">
                    ' . $heading . '
                    ' . $details . '
                        <div class="oxi_addons__button_main"> 
                            ' . $left_button . '
                            ' . $right_button . '
                        </div>
                </div> 
            ';
        } else {
            $image_and_content = ' 
                <div class="oxi-bt-col-lg-6 oxi-bt-col-md-12 oxi-bt-col-sm-12">
                    ' . $heading . '
                    ' . $details . '
                        <div class="oxi_addons__button_main"> 
                        ' . $left_button . '
                        ' . $right_button . '
                        </div>
                </div>
                ' . $image . '
                ';
        }

        echo '<div class="oxi_addons__banner_wrapper">
                    <div class="oxi_addons__banner_style_1"> 
                        ' . $image_and_content . '
                    </div>';
        echo ' </div>';
    }

    public function old_render()
    {
        $styledata = $this->dbdata;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = $heading = $details = $button_left = $button_right = $front_image = $column = $text_align = $imageleftsize = '';
        if ($stylefiles[4] != '') {
            $heading = '<div class="oxi-addons-wrapper-heading">' . OxiAddonsTextConvert($stylefiles[4]) . '</div>';
        }

        if ($stylefiles[6] != '') {
            $details = '<div class="oxi-addons-wrapper-details">' . OxiAddonsTextConvert($stylefiles[6]) . '</div>';
        }

        if ($stylefiles[8] != '' && $stylefiles[10] != '') {
            $button_left = '
        <div class="oxi-addons-button-left" ' . OxiAddonsAnimation($styledata, 234) . '>
            <a href="' . OxiAddonsUrlConvert($stylefiles[10]) . '" target="' . $styledata[80] . '" class="oxi-addons-button-link-left">
            ' . OxiAddonsTextConvert($stylefiles[8]) . '
                <span class="oxi-addons-button-link-left-icon">   ' . oxi_addons_font_awesome('' . $stylefiles[12] . '') . '</span>
            </a>
        </div>';
        } elseif ($stylefiles[8] != '' && $stylefiles[10] == '') {
            $button_left = '
        <div class="oxi-addons-button-left" ' . OxiAddonsAnimation($styledata, 234) . '>
            <div class="oxi-addons-button-link-left">
                 ' . OxiAddonsTextConvert($stylefiles[8]) . '
                <span class="oxi-addons-button-link-left-icon">   ' . oxi_addons_font_awesome('' . $stylefiles[12] . '') . '</span>
            </div>
        </div>';
        }
        if ($stylefiles[14] != '' && $stylefiles[16] != '') {
            $button_right = '
        <div class="oxi-addons-button-right" ' . OxiAddonsAnimation($styledata, 241) . '>
            <a href="' . OxiAddonsUrlConvert($stylefiles[16]) . '" target="' . $styledata[160] . '" class="oxi-addons-button-link-right">
                <div class="oxi-addons-button-border">' . OxiAddonsTextConvert($stylefiles[14]) . '</div>
                    <span class="oxi-addons-button-link-right-icon">
                    ' . oxi_addons_font_awesome('' . $stylefiles[18] . '') . '
                    </span>
                </a>
        </div>';
        } elseif ($stylefiles[14] == '' && $stylefiles[16] != '') {
            $button_right = '
                    <div class="oxi-addons-button-right" ' . OxiAddonsAnimation($styledata, 241) . '>
                        <div class="oxi-addons-button-link-right">
                            <div class="oxi-addons-button-border">' . OxiAddonsTextConvert($stylefiles[14]) . '</div>
                                <span class="oxi-addons-button-link-right-icon">
                                ' . oxi_addons_font_awesome('' . $stylefiles[18] . '') . '
                                </span>
                            </div>
                    </div>';
        }
        if ($stylefiles[2] != '') {
            $front_image = '
        <div class="oxi-addons-lg-col-2 oxi-addons-md-col-1 oxi-addons-xs-col-1">
            <div class="oxi-addons-wrapper-right" ' . OxiAddonsAnimation($styledata, 19) . '>
                <img class="oxi-addons-right-image" src="' . OxiAddonsUrlConvert($stylefiles[2]) . '" alt="banner image">
            </div>
        </div>
        ';
        }

        if ($front_image != '') {
            if ($styledata[232] == 'left') {
                $column .= $front_image;
                $imageleftsize = 'transform: translateX(-33.3%);';
            }

            $column .= '<div class="oxi-addons-lg-col-2 oxi-addons-md-col-1 oxi-addons-xs-col-1">
                <div class="oxi-addons-wrapper-left oxi-addons-wrapper-details">
                        ' . $heading . '
                        ' . $details . '
                    <div class="oxi-addons-wrapper-button">
                        ' . $button_left . '
                        ' . $button_right . '
                    </div>
                </div>
            </div>';

            if ($styledata[232] == 'right') {
                $column .= $front_image;
            }
        } else {
            $column = '
        <div class="oxi-addons-lg-col-1">
            <div class="oxi-addons-wrapper-left">
                    ' . $heading . '
                    ' . $details . '
                <div class="oxi-addons-wrapper-button">
                    ' . $button_left . '
                    ' . $button_right . '
                </div>
            </div>
        </div>';
        }

        if ($front_image == '') {
            $text_align = '
            text-align: center !important;
        ';
        }

        echo '<div class="oxi-addons-container">
			<div class="oxi-addons-row">
				<div class="oxi-addons-main-wrapper-' . $oxiid . ' "  >
					' . $column . '
				</div>
			 </div>
        </div>
        ';
        $css .= '
        .oxi-addons-main-wrapper-' . $oxiid . '{
            ' . OxiAddonsBGImage($styledata, 248) . ';
            overflow: hidden;
            width: 100%;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 3) . ';
            display: flex;
            align-items: center;
            float: left;
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper-left{
            padding: 5px;
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper-heading{
            font-size: ' . $styledata[24] . 'px;
            ' . OxiAddonsFontSettings($styledata, 28) . ';
            color: ' . $styledata[34] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 36) . ';
            line-height: ' . $styledata[24] . 'px;
            width: 100%;
            float: left;
            ' . $text_align . '
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper-details{
            font-size: ' . $styledata[52] . 'px;
            ' . OxiAddonsFontSettings($styledata, 56) . ';
            color: ' . $styledata[62] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 64) . ';
            width: 100%;
            float: left; 
            ' . $text_align . '
        }';
        if ($styledata[246] == 'left') {
            $button_align = 'justify-content: flex-start;';
        } elseif ($styledata[246] == 'center') {
            $button_align = 'justify-content: center;';
        } else {
            $button_align = 'justify-content: flex-end;';
        }
        $css .= '.oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper-button{
           width: 100%;
           float: left; 
            display: flex;
           ' . $button_align . ' 
           align-items: center;
           ' . $text_align . '
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button-left{
            display: inline-block;
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button-link-left{
            background: ' . $styledata[94] . ';
            color: ' . $styledata[92] . ';
            display: inline-block;
            ' . OxiAddonsFontSettings($styledata, 86) . ';
            font-size: ' . $styledata[82] . 'px;
            border:  ' . $styledata[122] . 'px ' . $styledata[123] . ';
            vertical-align: middle;
            border-color: ' . $styledata[126] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 96) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 128) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 144) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 112) . ';
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button-link-left:hover{
            background: ' . $styledata[120] . ';
            color: ' . $styledata[118] . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 220) . ';
            border-color: ' . $styledata[239] . ';
        }
        .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-button-link-left-icon {
            padding-left: 5px;
        }
        .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-button-link-left-icon .oxi-icons{
            color: ' . $styledata[92] . ';
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button-link-left:hover .oxi-icons{
            color: ' . $styledata[118] . ';
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button-right{
            display: inline-block;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 202) . ';
        }
        .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-button-link-right{
            color: ' . $styledata[172] . ';
            display: flex;
            align-items: center;
            ' . OxiAddonsFontSettings($styledata, 166) . ';
            font-size: ' . $styledata[162] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 186) . ';
        }
        .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-button-link-right:hover{
            color: ' . $styledata[182] . ';
        }
        .oxi-addons-main-wrapper-' . $oxiid . '   .oxi-addons-button-link-right-icon .oxi-icons{
            color: ' . $styledata[174] . ';
            font-size: ' . $styledata[176] . 'px;
            padding-left: 5px ;
        }
        .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-button-link-right:hover .oxi-addons-button-link-right-icon .oxi-icons{
            color: ' . $styledata[184] . ';
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper-right{
            position: relative;
            width: 100%;
            float: left;
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper-right .oxi-addons-right-image{
            width: 150%;
            max-width: 150%;
            height: auto;
            ' . $imageleftsize . '
        }

        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-main-wrapper-' . $oxiid . '{
                display: block;
            }
            .oxi-addons-main-wrapper-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 4) . ';
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper-heading{
                font-size: ' . $styledata[25] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 37) . ';
                line-height: ' . $styledata[25] . 'px;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper-details{
                font-size: ' . $styledata[53] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 65) . ';
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button-left .oxi-addons-button-link-left{

                font-size: ' . $styledata[83] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 97) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 145) . ';
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button-right .oxi-addons-button-link-right{
                font-size: ' . $styledata[163] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 203) . ';
            }
            .oxi-addons-main-wrapper-' . $oxiid . '   .oxi-addons-button-link-right-icon .oxi-icons{
                font-size: ' . $styledata[177] . 'px;
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper-right .oxi-addons-right-image{
                position: static;
                width: 100%;
                height: auto;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper-right{
                position: relative;
                width: 100%;
                float: none;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper-right .oxi-addons-right-image{
                width: 100%;
                height: auto;
                transform: translateX(0%)
            }
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-main-wrapper-' . $oxiid . '{
                display: block;
            }
            .oxi-addons-main-wrapper-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper-heading{
                font-size: ' . $styledata[26] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 38) . ';
                line-height: ' . $styledata[26] . 'px;
                text-align: center;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper-details{
                font-size: ' . $styledata[54] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 66) . ';
                text-align: center;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper-button{
                justify-content: center;
             }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button-left .oxi-addons-button-link-left{

                font-size: ' . $styledata[88] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 98) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 146) . ';
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button-right .oxi-addons-button-link-right{
                font-size: ' . $styledata[164] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 188) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 204) . ';
            }
            .oxi-addons-main-wrapper-' . $oxiid . '   .oxi-addons-button-link-right-icon .oxi-icons{
                font-size: ' . $styledata[178] . 'px;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper-right{
                position: relative;
                width: 100%;
                float: none;
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper-right .oxi-addons-right-image{
                width: 100%;
                height: auto;
                transform: translateX(0%);
            }
            
        }
    ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
