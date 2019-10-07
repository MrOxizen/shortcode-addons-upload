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

class Style_4 extends Templates
{

    public function default_render($style, $child, $admin)
    { 
        $heading =  $details =  $button = $line = '';
        if (array_key_exists('sa_banner_heading_text', $style) && $style['sa_banner_heading_text'] != '') {
            $heading = '<' . $style['sa_banner_tag'] . ' class="oxi_addons__heading" ' . $this->animation_render('sa_banner_heading_animation', $style) . '>' . $this->text_render($style['sa_banner_heading_text']) . '</' . $style['sa_banner_tag'] . '>';
        }

        if (array_key_exists('sa_banner_details_text', $style) && $style['sa_banner_details_text'] != '') {
            $details = '<div class="oxi_addons__details" ' . $this->animation_render('sa_banner_details_animation', $style) . '> ' . $this->text_render($style['sa_banner_details_text']) . ' </div>';
        }
        if (array_key_exists('sa_banner_line_switcher', $style) && $style['sa_banner_line_switcher'] == 'yes') {
            $line = '<div ' . $this->animation_render('sa_banner_line_animation', $style) . '><div class="oxi_addons__line" ></div></div>';
        }
        if (array_key_exists('sa_banner_button_switcher', $style) && $style['sa_banner_button_switcher'] == 'yes') {
            if (array_key_exists('sa_banner_button_text', $style) && $style['sa_banner_button_text'] != '') {
                if (array_key_exists('sa_banner_button_link-url', $style) && $style['sa_banner_button_link-url'] != '') {
                    $button = '<div class="oxi_addons__button_main" ' . $this->animation_render('sa_banner_button_animation', $style) . '>
                                        <a ' . $this->url_render('sa_banner_button_link', $style) . ' class="oxi_addons__button">
                                            ' . $this->text_render($style['sa_banner_button_text']) . '
                                            ' . $this->font_awesome_render($style['sa_banner_button_icon']) . '
                                        </a>
                                    </div>';
                } else {
                    $button = '<div class="oxi_addons__button_main" ' . $this->animation_render('sa_banner_button_animation', $style) . '>
                                        <button class="oxi_addons__button">
                                            ' . $this->text_render($style['sa_banner_button_text']) . '
                                            ' . $this->font_awesome_render($style['sa_banner_button_icon']) . '
                                        </button>
                                    </div>';
                }
            }
        } 
        echo '<div class="oxi_addons__banner_wrapper">
                    <div class="oxi_addons__banner_style_4">  
                        <div class="oxi-bt-col-lg-6 oxi-bt-col-md-12 oxi-bt-col-sm-12">
                        ' . $line . ' 
                        ' . $heading . ' 
                        ' . $button . ' 
                        
                        </div>
                        <div class="oxi-bt-col-lg-6 oxi-bt-col-md-12 oxi-bt-col-sm-12">
                            ' . $details . '
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
        /*
     * initialize Variable
     */

        $heading = $details = $line = $col_heading = $col_content = $button = $heading_content = $text_align = $text_align_details = $line_position = '';
        /*
     * heading
     */

        if ($stylefiles[2] != '') {
            $heading = '
                <div class="oxi-addons-heading"  ' . OxiAddonsAnimation($styledata, 51) . '>' . OxiAddonsTextConvert($stylefiles[2]) . '</div>
        ';
        }
        if ($stylefiles[2] != '') {
            $col_content = '<div class="oxi-addons-lg-col-2 oxi-addons-md-col-1 oxi-addons-xs-col-1 oxi-addons-detail-main">';
        } else {
            $col_content = '<div class="oxi-addons-lg-col-1  oxi-addons-md-col-1 oxi-addons-xs-col-1 oxi-addons-detail-main">';
            $text_align = 'text-align: center';
        }
        /*
     * short details
     */
        if ($stylefiles[4] != '') {
            $details = ' 
          ' . $col_content . '
                    <div class="oxi-addons-short-details">
                        <p class="oxi-addons-para-text"  ' . OxiAddonsAnimation($styledata, 84) . '>
                            ' . OxiAddonsTextConvert($stylefiles[4]) . '
                        </p>
                    </div>
                </div>
        ';
            $line = '<div class="oxi-addons-line"  ' . OxiAddonsAnimation($styledata, 99) . '></div> ';
            $col_heading = '<div class="oxi-addons-lg-col-2">';
        } else {
            $col_heading = '<div class="oxi-addons-lg-col-1">';
        }
        /*
     * button
     */
        if ($stylefiles[8] != '' && $stylefiles[6] != '') {
            $button = '
                <div class="oxi-addons-button"  ' . OxiAddonsAnimation($styledata, 190) . '>
                    <a href="' . OxiAddonsUrlConvert($stylefiles[8]) . '" class="oxi-addons-button-link"  target="' . $styledata[104] . '">
                        ' . OxiAddonsTextConvert($stylefiles[6]) . '
                        </a>
                </div>
        ';
        } elseif ($stylefiles[8] == '' && $stylefiles[6] != '') {
            $button = '
                <div class="oxi-addons-button"  ' . OxiAddonsAnimation($styledata, 190) . '>
                    <div class="oxi-addons-button-link">
                        ' . OxiAddonsTextConvert($stylefiles[6]) . '
                    </div>
                </div>
        ';
        }
        if ($stylefiles[2] != '') {
            $heading_content = '
            ' . $col_heading . '
                <div class="oxi-addons-content-wrapper">
                        ' . $line . '
                        ' . $heading . '
                        ' . $button . '
                </div>
            </div>
            ';
        }
        if ($styledata[197] == 'right') {
            $Position = '
            ' . $details . '
            ' . $heading_content . '
        ';
        } else {
            $Position = '
            ' . $heading_content . '
            ' . $details . '
        ';
            $text_align_details = 'text-align: left';
            $line_position = "
            right: 0;
            left: 95%;
        ";
        }
        echo '<div class="oxi-addons-container">
			<div class="oxi-addons-row">
				<div class="oxi-addons-wrapper-' . $oxiid . '">
					' . $Position . '
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
            align-items: center;
        } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-details{
            width: 100%;
            float: left;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-details .oxi-addons-para-text{
            font-size: ' . $styledata[56] . 'px;
            ' . OxiAddonsFontSettings($styledata, 60) . ';
            color: ' . $styledata[66] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 68) . ';
            width: 100%;
            float: left;
            ' . $text_align_details . ';
            ' . $text_align . ';

        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-wrapper {
            position: relative;
            width:100%;
            float: left;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-wrapper .oxi-addons-line{
            width: 100%;
            float: left;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-wrapper .oxi-addons-line::before{
            content: "";
            position: absolute;
            left: 0;
            top: -10%;
            width: ' . $styledata[89] . 'px;
            height:' . $styledata[93] . '%;
            background: ' . $styledata[97] . ';
            ' . $line_position . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-wrapper .oxi-addons-heading{
            font-size: ' . $styledata[23] . 'px;
            ' . OxiAddonsFontSettings($styledata, 27) . ';
            color: ' . $styledata[33] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . ';
            width: 100%;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-wrapper .oxi-addons-button{
            width: 100%;
            float: left;
            text-align: ' . $styledata[195] . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-wrapper .oxi-addons-button .oxi-addons-button-link{
            background: ' . $styledata[118] . ';
            color: ' . $styledata[116] . ';
            display: inline-block;
            ' . OxiAddonsFontSettings($styledata, 110) . ';
            font-size: ' . $styledata[106] . 'px;
            border:  ' . $styledata[152] . 'px ' . $styledata[153] . ';
            border-color: ' . $styledata[156] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 120) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 158) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 174) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 136) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-wrapper .oxi-addons-button .oxi-addons-button-link:hover{
            background: ' . $styledata[144] . ';
            color: ' . $styledata[142] . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 146) . ';
            border-color: ' . $styledata[199] . ';
        } 
        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-wrapper-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-details .oxi-addons-para-text{
                font-size: ' . $styledata[57] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 69) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-wrapper .oxi-addons-line::before{
                width: ' . $styledata[90] . 'px;
                height:' . $styledata[94] . '%;
                left: 0;

            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-detail-main{
                display: none;
             }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-wrapper .oxi-addons-heading{
                font-size: ' . $styledata[24] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 36) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-wrapper .oxi-addons-button .oxi-addons-button-link{
                font-size: ' . $styledata[107] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 121) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 159) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 175) . ';
            }
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-lg-col-2{
                width: 100%;
            }
            .oxi-addons-wrapper-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
            }

            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-details .oxi-addons-para-text{
                font-size: ' . $styledata[58] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 70) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-wrapper .oxi-addons-line::before{
                top: -5%;
                width: ' . $styledata[91] . 'px;
                height:' . $styledata[95] . '%;
                left: 0;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-wrapper .oxi-addons-heading{
                font-size: ' . $styledata[25] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 37) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-detail-main{
               display: none;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-wrapper .oxi-addons-button .oxi-addons-button-link{
                font-size: ' . $styledata[108] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 122) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 160) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 176) . ';
            }
        }
    ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
