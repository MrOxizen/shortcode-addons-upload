<?php

namespace SHORTCODE_ADDONS_UPLOAD\Banner\Templates;

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

class Style_8 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $heading = $sub_heading = $details =  $left_button =  $right_button  = $line =  '';
        if (array_key_exists('sa_banner_heading_text', $style) && $style['sa_banner_heading_text'] != '') {
            $heading = '<' . $style['sa_banner_tag'] . ' class="oxi_addons__heading" ' . $this->animation_render('sa_banner_heading_animation', $style) . '>' . $this->text_render($style['sa_banner_heading_text']) . '</' . $style['sa_banner_tag'] . '>';
        }
        if (array_key_exists('sa_banner_sub_heading_text', $style) && $style['sa_banner_sub_heading_text'] != '') {
            $sub_heading = '<' . $style['sa_banner_sub_heading_tag'] . ' class="oxi_addons__sub_heading" ' . $this->animation_render('sa_banner_sub_heading_animation', $style) . '>' . $this->text_render($style['sa_banner_sub_heading_text']) . '</' . $style['sa_banner_sub_heading_tag'] . '>';
        } 
        if (array_key_exists('sa_banner_details_text', $style) && $style['sa_banner_details_text'] != '') {
            $details = '<div class="oxi_addons__details" ' . $this->animation_render('sa_banner_details_animation', $style) . '> ' . $this->text_render($style['sa_banner_details_text']) . ' </div>';
        }
        if (array_key_exists('sa_banner_line_switcher', $style) && $style['sa_banner_line_switcher'] == 'yes') {
            $line = '<div class="oxi_addons__line_main" ' . $this->animation_render('sa_banner_line_animation', $style) . '><div class="oxi_addons__line" ></div></div>';
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
     
       
        echo '<div class="oxi_addons__banner_wrapper">
                    <div class="oxi_addons__banner_style_8">  
                        <div class="oxi_addons__overlay">
                            <div class="oxi_addons__heading_line">
                                '. $heading .'
                                '. $line .'
                            </div>  
                            '. $sub_heading .'
                            '. $details .'  
                            <div class="oxi_addons__button_main">
                            '. $left_button .'
                            '. $right_button .'
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
        $justify = $heading_one = $heading_two = $detail = $button_left = $button_right = $button_main = $line_position = '';
    if ($styledata[349] == 'left') {
        $justify = 'justify-content: start';
    } elseif ($styledata[349] == 'right') {
        $justify = 'justify-content: end';
    } else {
        $justify = 'justify-content: center';
    }
    $data = explode(':', $styledata[55]);
    if ( $data[0] == 'left'):
        $line_position = '
		        left: 0;
		        -webkit-transform: translate(-0%);
		        -moz-transform: translate(-0%);
		        -o-transform: translate(-0%);
		        transform: translate(-0%);
		        ';

    elseif ( $data[0] == 'right'):
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
        $heading_one = '
            <div class="oxi-addons-header">
                <div class="oxi-addons-heading-one" ' . OxiAddonsAnimation($styledata, 75) . '></>
                            ' . OxiAddonsTextConvert($stylefiles[2]) . '
                </div>
                <div class="oxi-addons-line" ' . OxiAddonsAnimation($styledata, 123) . '></div>
            </div>
        ';
    }
    if ($stylefiles[4] != '') {
        $heading_two = '
                <div class="oxi-addons-heading-two" ' . OxiAddonsAnimation($styledata, 108) . ' >
                    ' . OxiAddonsTextConvert($stylefiles[4]) . '
                </div>
        ';
    }
    if ($stylefiles[6] != '') {
        $detail = '
            <div class="oxi-addons-details"  ' . OxiAddonsAnimation($styledata, 156) . '>
                ' . OxiAddonsTextConvert($stylefiles[6]) . '
            </div>
        ';
    }
    if ($stylefiles[8] != '' && $stylefiles[10] != '') {
        $button_left = '
            <div class="oxi-addons-button-left">
                <a href="' . OxiAddonsUrlConvert($stylefiles[10]) . '" class="oxi-addons-link"  target="' . $styledata[161] . '"  ' . OxiAddonsAnimation($styledata, 247) . '>
                    ' . OxiAddonsTextConvert($stylefiles[8]) . '
                </a>
            </div>
        ';
    } elseif ($stylefiles[8] != '' && $stylefiles[10] == '') {
        $button_left = '
            <div class="oxi-addons-button-left">
                <div class="oxi-addons-link"   ' . OxiAddonsAnimation($styledata, 247) . '>
                    ' . OxiAddonsTextConvert($stylefiles[8]) . '
                </div>
            </div>
        ';
    }
    if ($stylefiles[12] != '' && $stylefiles[14] != '') {
        $button_right = '
            <div class="oxi-addons-button-right">
                <a href="' . OxiAddonsUrlConvert($stylefiles[14]) . '" class="oxi-addons-link"  target="' . $styledata[252] . '"  ' . OxiAddonsAnimation($styledata, 338) . '>
                    ' . OxiAddonsTextConvert($stylefiles[12]) . '
                </a>
            </div>
        ';
    } elseif ($stylefiles[12] != '' && $stylefiles[14] == '') {
        $button_right = '
            <div class="oxi-addons-button-right">
                <div class="oxi-addons-link" ' . OxiAddonsAnimation($styledata, 338) . '>
                    ' . OxiAddonsTextConvert($stylefiles[12]) . '
                </div>
            </div>
        ';
    }
    if ($stylefiles[8] != '' || $stylefiles[12] != '') {
        $button_main = '
                <div class="oxi-addons-button">
                        ' . $button_left . '
                        ' . $button_right . '
                </div>
        ';
    }
    echo '<div class="oxi-addons-container">
			<div class="oxi-addons-row">
				<div class="oxi-addons-wrapper-' . $oxiid . '">
						<div class="oxi-addons-main-bg">
								' . $heading_one . '
								' . $heading_two . '
								' . $detail . '
								' . $button_main . '
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
           ' . $justify . '
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-bg{
            background: ' . $styledata[23] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 41) . ';
            width: 100%;
            max-width: ' . $styledata[345] . 'px;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-header{
            position: relative;
            width: 100%;
            float: left;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-header .oxi-addons-heading-one{
            font-size: ' . $styledata[47] . 'px;
            line-height: 1;
            ' . OxiAddonsFontSettings($styledata, 51) . ';
            color: ' . $styledata[57] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 59) . ';
            width: 100%;
            float: left;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-header .oxi-addons-line{
            width: 100%;
            float: left;
            position: relative;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-header .oxi-addons-line::before{
            content: "";
            position: absolute;
            top: 0;
            width: ' . $styledata[113] . '%;
            height:' . $styledata[117] . 'px;
            background: ' . $styledata[121] . ';
            ' . $line_position . '
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-two{
            font-size: ' . $styledata[80] . 'px;
            line-height: 1;
            ' . OxiAddonsFontSettings($styledata, 84) . ';
            color: ' . $styledata[90] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 92) . ';
            width: 100%;
            float: left;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-details{
            font-size: ' . $styledata[128] . 'px;
            line-height: 1;
            ' . OxiAddonsFontSettings($styledata, 132) . ';
            color: ' . $styledata[138] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 140) . ';
            width: 100%;
            float: left;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-button{
            width: 100%;
            float: left;
            text-align: ' . $styledata[343] . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-button-left{
            display: inline-block;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-button-left .oxi-addons-link{
            background: ' . $styledata[175] . ';
            color: ' . $styledata[173] . ';
            display: inline-block;
            ' . OxiAddonsFontSettings($styledata, 167) . ';
            font-size: ' . $styledata[163] . 'px;
            border:  ' . $styledata[209] . 'px ' . $styledata[210] . ';
            border-color: ' . $styledata[213] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 177) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 215) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 231) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 193) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-button-left .oxi-addons-link:hover{
            background: ' . $styledata[201] . ';
            color: ' . $styledata[199] . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 203) . ';
            border-color: ' . $styledata[351] . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-button-right{
            display: inline-block;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-button-right .oxi-addons-link{
            background: ' . $styledata[266] . ';
            color: ' . $styledata[264] . ';
            display: inline-block;
            ' . OxiAddonsFontSettings($styledata, 258) . ';
            font-size: ' . $styledata[254] . 'px;
            border:  ' . $styledata[300] . 'px ' . $styledata[301] . ';
            border-color: ' . $styledata[304] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 268) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 306) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 322) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 284) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-button-right .oxi-addons-link:hover{
            background: ' . $styledata[292] . ';
            color: ' . $styledata[290] . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 294) . ';
            border-color: ' . $styledata[353] . ';
        }

        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-wrapper-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-bg{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 26) . ';
                max-width: ' . $styledata[345] . 'px;
            }

            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-header .oxi-addons-heading-one{
                font-size: ' . $styledata[48] . 'px;
                line-height: 1;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 60) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-header .oxi-addons-line::before{
                width: ' . $styledata[114] . '%;
                height:' . $styledata[118] . 'px;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-two{
                font-size: ' . $styledata[81] . 'px;
                line-height: 1;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 92) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-details{
                font-size: ' . $styledata[129] . 'px;
                line-height: 1;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 141) . ';
            }
             .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-button-left .oxi-addons-link{
                font-size: ' . $styledata[164] . 'px;
                 border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 178) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 216) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 232) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-button-right .oxi-addons-link{
                font-size: ' . $styledata[255] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 269) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 307) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 323) . ';
              }
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-wrapper-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-bg{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';
                max-width: ' . $styledata[345] . 'px;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-header .oxi-addons-heading-one{
                font-size: ' . $styledata[49] . 'px;
                line-height: 1;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 61) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-header .oxi-addons-line::before{
                width: ' . $styledata[115] . '%;
                height:' . $styledata[119] . 'px;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-two{
                font-size: ' . $styledata[82] . 'px;
                line-height: 1;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-details{
                font-size: ' . $styledata[130] . 'px;
                line-height: 1;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 142) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-button-left .oxi-addons-link{
                font-size: ' . $styledata[165] . 'px;
                 border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 179) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 217) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 233) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-button-right .oxi-addons-link{
                font-size: ' . $styledata[256] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 270) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 308) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 324) . ';
              }
        }
    ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}