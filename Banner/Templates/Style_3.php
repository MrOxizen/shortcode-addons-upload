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

class Style_3 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $heading =  $left_button =  $right_button = $icon_text = $icon = $text = '';
        if (array_key_exists('sa_banner_heading_text', $style) && $style['sa_banner_heading_text'] != '') {
            $heading = '<' . $style['sa_banner_tag'] . ' class="oxi_addons__heading" ' . $this->animation_render('sa_banner_heading_animation', $style) . '>' . $this->text_render($style['sa_banner_heading_text']) . '</' . $style['sa_banner_tag'] . '>';
        }

        if (array_key_exists('sa_banner_button_left_switcher', $style) && $style['sa_banner_button_left_switcher'] == 'yes') {
            if (array_key_exists('sa_banner_button_left_text', $style) && $style['sa_banner_button_left_text'] != '') {
                if (array_key_exists('sa_banner_button_left_link-url', $style) && $style['sa_banner_button_left_link-url'] != '') {
                    $left_button = '<div class="oxi_addons__button_left_main" ' . $this->animation_render('sa_banner_button_left_animation', $style) . '>
                                        <a ' . $this->url_render('sa_banner_button_left_link', $style) . ' class="oxi_addons__button_left">
                                            ' . $this->text_render($style['sa_banner_button_left_text']) . '
                                          </a>
                                    </div>';
                } else {
                    $left_button = '<div class="oxi_addons__button_left_main" ' . $this->animation_render('sa_banner_button_left_animation', $style) . '>
                                        <button class="oxi_addons__button_left">
                                            ' . $this->text_render($style['sa_banner_button_left_text']) . ' 
                                        </button>
                                    </div>';
                }
            }
        }

        if (array_key_exists('sa_banner_button_right_switcher', $style) && $style['sa_banner_button_right_switcher'] == 'yes') {
            if (array_key_exists('sa_banner_button_right_text', $style) && $style['sa_banner_button_right_text'] != '') {
                if (array_key_exists('sa_banner_button_right_link-url', $style) && $style['sa_banner_button_right_link-url'] != '') {
                    $right_button = '<div class="oxi_addons__button_right_main" ' . $this->animation_render('sa_banner_button_right_animation', $style) . '>
                                        <a ' . $this->url_render('sa_banner_button_right_link', $style) . ' class="oxi_addons__button_right">
                                        ' . $this->text_render($style['sa_banner_button_right_text']) . ' 
                                        </a>
                                    </div>';
                } else {
                    $right_button = '<div class="oxi_addons__button_right_main" ' . $this->animation_render('sa_banner_button_right_animation', $style) . '>
                                        <button class="oxi_addons__button_right">
                                        ' . $this->text_render($style['sa_banner_button_right_text']) . ' 
                                        </button>
                                    </div>';
                }
            }
        }

        if (array_key_exists('sa_banner_icon_link-url', $style) && $style['sa_banner_icon_link-url'] != '') {
            $icon = '
                <div class="oxi_addons__icon">
                    ' . $this->font_awesome_render($style['sa_banner_icon']) . '
                </div>
            ';
        }
        if (array_key_exists('sa_banner_icon_link-url', $style) && $style['sa_banner_icon_link-url'] != '') {
            $text = '
                <div class="oxi_addons__text">
                    ' . $this->text_render($style['sa_banner_icon_text']) . ' 
                </div>
            ';
        }
        if (array_key_exists('sa_banner_icon_link-url', $style) && $style['sa_banner_icon_link-url'] != '') {
            $icon_text = '
                    <div class="oxi_addons__icon_text_main">
                         <a ' . $this->url_render('sa_banner_icon_link', $style) . '>
                          ' . $icon . '
                          ' . $text . '
                        </a>
                    </div>';
        } else {
            $icon_text = '
                    <div class="oxi_addons__icon_text_main"> 
                        ' . $icon . '
                        ' . $text . '
                    </div>';
        }


        echo '<div class="oxi_addons__banner_wrapper">
                    <div class="oxi_addons__banner_style_3">  
                        ' . $heading . ' 
                            <div class="oxi_addons__button_main"> 
                                ' . $left_button . ' 
                                ' . $right_button . '
                            </div>
                            ' . $icon_text . ' 
                    </div>';
        echo ' </div>';
    }

    public function old_render()
    {
        $styledata = $this->dbdata;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $heading = $button_left = $button_right = $icon = $icon_text = $icon_link = $main_button = $main_icon = "";
        if ($stylefiles[2] != '') {
            $heading = '
            <div class="oxi-addons-content-heading" ' . OxiAddonsAnimation($styledata, 51) . '>
            ' . OxiAddonsTextConvert($stylefiles[2]) . '
            </div>
        ';
        }
        if ($stylefiles[12] != '' && $stylefiles[10] != '') {
            $button_left = '
            <div class="oxi-addons-button-left" ' . OxiAddonsAnimation($styledata, 186) . '>
                <a href="' . OxiAddonsUrlConvert($stylefiles[12]) . '" class="oxi-addons-button-link"  target="' . $styledata[100] . '">
                ' . OxiAddonsTextConvert($stylefiles[10]) . '
                </a>
            </div>
        ';
        } elseif ($stylefiles[12] == '' && $stylefiles[10] != '') {
            $button_left = '
            <div class="oxi-addons-button-left" ' . OxiAddonsAnimation($styledata, 186) . '>
                <div class="oxi-addons-button-link">
                ' . OxiAddonsTextConvert($stylefiles[10]) . '
                </div>
            </div>
        ';
        }
        if ($stylefiles[16] != '' && $stylefiles[14] != '') {
            $button_right = '
            <div class="oxi-addons-button-right" ' . OxiAddonsAnimation($styledata, 277) . '>
                <a href="' . OxiAddonsUrlConvert($stylefiles[16]) . '" class="oxi-addons-button-link"  target="' . $styledata[191] . '">
                ' . OxiAddonsTextConvert($stylefiles[14]) . '
                </a>
            </div>
        ';
        } else {
            $button_right = '
            <div class="oxi-addons-button-right" ' . OxiAddonsAnimation($styledata, 277) . '>
                <a href="' . OxiAddonsUrlConvert($stylefiles[16]) . '" class="oxi-addons-button-link"  target="' . $styledata[191] . '">
                ' . OxiAddonsTextConvert($stylefiles[14]) . '
                </a>
            </div>
        ';
        }
        if ($stylefiles[10] != '' || $stylefiles[14] != '') {
            $main_button = '
            <div class="oxi-addons-content-button">
                ' . $button_left . '
                ' . $button_right . '
            </div>
        ';
        }
        if ($stylefiles[6] != '') {
            $icon = '
             <span class="oxi-addons-icon"  ' . OxiAddonsAnimation($styledata, 95) . '> ' . oxi_addons_font_awesome('' . $stylefiles[6] . '') . '</span>
        ';
        }
        if ($stylefiles[4] != '') {
            $icon_text = '
             <span class="oxi-addons-text"  ' . OxiAddonsAnimation($styledata, 74) . '>' . OxiAddonsTextConvert($stylefiles[4]) . ' </span>
        ';
        }
        if ($stylefiles[8] != '') {
            $icon_link = '
            <a href="' . OxiAddonsUrlConvert($stylefiles[8]) . '" class="oxi-addons-button-link"  target="' . $styledata[282] . '">
                ' . $icon . '
                ' . $icon_text . '
            </a>
        ';
        } else {
            $icon_link = '
            <div class="oxi-addons-button-link">
                ' . $icon . '
                ' . $icon_text . '
            </div>
        ';
        }
        if ($stylefiles[4] != '' || $stylefiles[6] != '' || $stylefiles[8] != '') {
            $main_icon = '
                 <div class="oxi-addons-content-icon">
                    ' . $icon_link . '
                 </div>
        ';
        }
        echo '<div class="oxi-addons-container">
			<div class="oxi-addons-row">
				<div class="oxi-addons-main-wrapper-' . $oxiid . ' "  >
					<div class="oxi-addons-lg-col-1 oxi-addons-md-col-1 oxi-addons-xs-col-1">
						<div class="oxi-addons-content">
						   ' . $heading . '
						   ' . $main_button . '
						   ' . $main_icon . '
						</div>
					</div>
				</div>
			</div>
        </div>
        ';
        $css = '
        .oxi-addons-main-wrapper-' . $oxiid . '{
            width: 100%;
            float: left;
            ' . OxiAddonsBGImage($styledata, 3) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
            overflow: hidden;
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content{
            text-align: center;
            width: 100%;
            float: left;
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content .oxi-addons-content-heading{
            font-size: ' . $styledata[23] . 'px;
            ' . OxiAddonsFontSettings($styledata, 27) . ';
            color: ' . $styledata[33] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . ';
            width: 100%;
            float: left;
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content .oxi-addons-content-button{
            width: 100%;
            float: left;
            text-align: ' . $styledata[306] . ';
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-button .oxi-addons-button-left{
            display: inline-block;
        }
        .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-button-left .oxi-addons-button-link{
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
        .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-button-left .oxi-addons-button-link:hover{
            background: ' . $styledata[140] . ';
            color: ' . $styledata[138] . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 142) . ';
            border-color: ' . $styledata[308] . ';
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-button .oxi-addons-button-right{
            display: inline-block;
        }
        .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-button-right .oxi-addons-button-link{
            background: ' . $styledata[205] . ';
            color: ' . $styledata[203] . ';
            display: inline-block;
            ' . OxiAddonsFontSettings($styledata, 197) . ';
            font-size: ' . $styledata[193] . 'px;
            border:  ' . $styledata[239] . 'px ' . $styledata[240] . ';
            border-color: ' . $styledata[243] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 207) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 245) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 261) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 223) . ';
        }
        .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-button-right .oxi-addons-button-link:hover{
            background: ' . $styledata[231] . ';
            color: ' . $styledata[229] . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 233) . ';
            border-color: ' . $styledata[310] . ';
        }
         .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content .oxi-addons-content-icon{
            text-align: ' . $styledata[56] . ';
        }
         .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content .oxi-addons-content-icon .oxi-addons-button-link{
             display: inline-block;
        }
         .oxi-addons-main-wrapper-' . $oxiid . '   .oxi-addons-button-link .oxi-addons-icon{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 79) . ';
        }
        .oxi-addons-main-wrapper-' . $oxiid . '   .oxi-addons-button-link .oxi-icons{
             font-size: ' . $styledata[298] . 'px;
             color: ' . $styledata[302] . ';
             line-height:1;
             display: flex;
            justify-content: space-around;
            }
         .oxi-addons-main-wrapper-' . $oxiid . '   .oxi-addons-button-link:hover .oxi-icons{
            color: ' . $styledata[304] . ';
        }
        .oxi-addons-main-wrapper-' . $oxiid . '   .oxi-addons-button-link .oxi-addons-text{
            color: ' . $styledata[294] . ';
            width: 100%;
            float: left;
            ' . OxiAddonsFontSettings($styledata, 288) . ';
            font-size: ' . $styledata[284] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 58) . '; 
        }
         .oxi-addons-main-wrapper-' . $oxiid . '   .oxi-addons-button-link:hover .oxi-addons-text{
                    color: ' . $styledata[296] . ';
            }



        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-main-wrapper-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content .oxi-addons-content-heading{
                font-size: ' . $styledata[24] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 36) . ';
            }
            .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-button-left .oxi-addons-button-link{
                font-size: ' . $styledata[103] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 117) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 155) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 171) . ';
            }
            .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-button-right .oxi-addons-button-link{
                font-size: ' . $styledata[194] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 208) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 246) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 262) . ';
            }
             .oxi-addons-main-wrapper-' . $oxiid . '   .oxi-addons-button-link .oxi-addons-icon{

                font-size: ' . $styledata[299] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 80) . ';
            }
             .oxi-addons-main-wrapper-' . $oxiid . '   .oxi-addons-button-link .oxi-addons-text{
                font-size: ' . $styledata[285] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 59) . ';
            }
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-main-wrapper-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content .oxi-addons-content-heading{
                font-size: ' . $styledata[25] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 37) . ';
            }
            .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-button-left .oxi-addons-button-link{
                font-size: ' . $styledata[104] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 118) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 156) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 172) . ';
            }
            .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-button-right .oxi-addons-button-link{
                font-size: ' . $styledata[195] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 209) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 247) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 263) . ';
            }
             .oxi-addons-main-wrapper-' . $oxiid . '   .oxi-addons-button-link .oxi-addons-icon{
                font-size: ' . $styledata[300] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
            }
             .oxi-addons-main-wrapper-' . $oxiid . '   .oxi-addons-button-link .oxi-addons-text{
                font-size: ' . $styledata[286] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 60) . ';
            }
        }  
    ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
