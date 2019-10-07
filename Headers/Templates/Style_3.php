<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Headers\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_3
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_3 extends Templates {

    public function default_render($style, $child, $admin) {
//        echo '<pre>';
//        print_r($style['sa_s_image_ribbon_pos']);
//        echo '</pre>';
//        echo $this->url_render('sa_dual_btn_left_link', $style);
        $icon = $heading_one = $heading_two = $button_right = $button_left = $detail = '';



        if ($style['sa_headers_name'] != '') {
            $name = '
                <div class="oxi-addons-name" ' . $this->animation_render('sa_headers_name_animation', $style) . '>
                        ' . $this->text_render($style['sa_headers_name']) . '
                </div>
            ';
        }
        if ($style['sa_headers_h_1'] != '') {
            $heading = '
                <div class="oxi-addons-heading" ' . $this->animation_render('sa_headers_head_1_animation', $style) . '>
                        ' . $this->text_render($style['sa_headers_h_1']) . '
                </div>
            ';
        }


        if ($style['sa_headers_sd'] != '') {
            $detail = '
                    <div class="oxi-addons-short-detail" ' . $this->animation_render('sa_headers_sd_animation', $style) . '>
                        ' . $this->text_render($style['sa_headers_sd']) . '
                    </div>
            ';
        }



        if ($style['sa_headers_button_left_text'] != '' && $style['sa_headers_button_left_link-url'] != '') {
            $button_left = ' 
                <a ' . $this->url_render('sa_headers_button_left_link', $style) . ' ' . $this->animation_render('sa_headers_button_left_animation', $style) . ' class="oxi-addons-link-left"  >
                    ' . $this->text_render($style['sa_headers_button_left_text']) . '
                </a>
           
        ';
        } elseif ($style['sa_headers_button_left_text'] != '' && $style['sa_headers_button_left_link-url'] == '') {
            $button_left = ' 
            <div class="oxi-addons-link-left" ' . $this->animation_render('sa_headers_button_left_animation', $style) . '>
               ' . $this->text_render($style['sa_headers_button_left_text']) . '
            </div> ';
        }
        if ($style['sa_headers_button_right_text'] != '' && $style['sa_headers_button_right_link-url'] != '') {
            $button_right = ' 
                <a ' . $this->url_render('sa_headers_button_right_link', $style) . ' ' . $this->animation_render('sa_headers_button_right_animation', $style) . ' class="oxi-addons-link-right"  >
                    ' . $this->text_render($style['sa_headers_button_right_text']) . '
                </a>
           
        ';
        } elseif ($style['sa_headers_button_right_text'] != '' && $style['sa_headers_button_right_link-url'] == '') {
            $button_right = ' 
            <div class="oxi-addons-link-right" ' . $this->animation_render('sa_headers_button_right_animation', $style) . '>
               ' . $this->text_render($style['sa_headers_button_right_text']) . '
            </div> ';
        }


        if ($style['sa_headers_position_rev'] == 'left') {
            $column = '
                    <div class="oxi-addons-wrapper-left-side"> 
                        ' . $name . '
                        ' . $heading . '
                        ' . $detail . '.
                                <div class="oxi-addons-main-button" >
                                ' . $button_left . ' 
                                ' . $button_right . ' 
                                </div>
                        </div>

                    <div class="oxi-addons-wrapper-right-side"> 
                       
                    </div>';
        } else {
            $column = '
                     <div class="oxi-addons-wrapper-right-side"> 
           
            </div>
            <div class="oxi-addons-wrapper-left-side"> 
                ' . $name . '
                ' . $heading . '
                ' . $detail . '
                <div class="oxi-addons-main-button" >
                ' . $button_left . ' 
                ' . $button_right . ' 
                </div>
            </div> 
            ';
        }
        echo '<div class="oxi-addons-headers-wrapper-style-3">
                    ' . $column . '
            </div>';
    }

    public
            function old_render() {
        $style = $this->dbdata;
        $child = $this->child;
        $oxiid = $style['id'];
        $css = '';
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        $name = $heading = $button_left = $button_right = $detail = '';
        $css = '';
        if ($stylefiles[2] != '') {
            $name = '
                <div class="oxi-addons-name" ' . OxiAddonsAnimation($styledata, 75) . '>
                        ' . OxiAddonsTextConvert($stylefiles[2]) . '
                </div>
            ';
        }
        if ($stylefiles[6] != '') {
            $heading = '  
                <div class="oxi-addons-heading" ' . OxiAddonsAnimation($styledata, 108) . '>
                    ' . OxiAddonsTextConvert($stylefiles[6]) . '
                </div> 
            ';
        }
        if ($stylefiles[8] != '') {
            $detail = '
                    <div class="oxi-addons-short-detail" ' . OxiAddonsAnimation($styledata, 141) . '>
                        ' . OxiAddonsTextConvert($stylefiles[8]) . '
                    </div>
            ';
        }


        if ($stylefiles[10] != '' && $stylefiles[12] != '') {
            $button_left = ' 
                <a href="' . OxiAddonsUrlConvert($stylefiles[12]) . '" class="oxi-addons-link-left"  target="' . $styledata[146] . '" ' . OxiAddonsAnimation($styledata, 234) . '>
                    ' . OxiAddonsTextConvert($stylefiles[10]) . '
                </a>
           
        ';
        } elseif ($stylefiles[10] != '' && $stylefiles[12] == '') {
            $button_left = ' 
            <div class="oxi-addons-link-left" ' . OxiAddonsAnimation($styledata, 234) . '>
                ' . OxiAddonsTextConvert($stylefiles[10]) . '
            </div> 
    ';
        }
        if ($stylefiles[14] != '' && $stylefiles[16] != '') {
            $button_right = ' 
                <a  href="' . OxiAddonsUrlConvert($stylefiles[16]) . '" class="oxi-addons-link-right"  target="' . $styledata[239] . '" ' . OxiAddonsAnimation($styledata, 327) . '>
                    ' . OxiAddonsTextConvert($stylefiles[14]) . '
                </a>
           
        ';
        } elseif ($stylefiles[14] != '' && $stylefiles[16] == '') {
            $button_right = ' 
            <div class="oxi-addons-link-right" ' . OxiAddonsAnimation($styledata, 327) . '>
                ' . OxiAddonsTextConvert($stylefiles[16]) . '
            </div> 
    ';
        }
        if ($styledata[3] == 'left') {
            $column = '
                    <div class="oxi-addons-wrapper-left-side"> 
                        ' . $name . '
                        ' . $heading . '
                        ' . $detail . '.
                                <div class="oxi-addons-main-button" >
                                ' . $button_left . ' 
                                ' . $button_right . ' 
                                </div>
                        </div>

                    <div class="oxi-addons-wrapper-right-side"> 
                       
                    </div>
        ';
        } else {
            $column = '
            <div class="oxi-addons-wrapper-right-side"> 
           
            </div>
            <div class="oxi-addons-wrapper-left-side"> 
                ' . $name . '
                ' . $heading . '
                ' . $detail . '
                <div class="oxi-addons-main-button" >
                ' . $button_left . ' 
                ' . $button_right . ' 
                </div>
            </div> 
    ';
        }
        echo '<div class="oxi-addons-container">
		<div class="oxi-addons-row">
            <div class="oxi-addons-wrapper-' . $oxiid . '">
                ' . $column . '
            </div>
            </div>
        </div>
        ';

        if (strlen($stylefiles[2]) <= 20) {
            $width = '
            width: 50%; 
         ';
        } else {
            $width = ' 
            width: 70%; 
         ';
        }
        $css = '
        .oxi-addons-wrapper-' . $oxiid . '{
            width: 100%;
            float: left; 
            overflow: hidden; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';
            display: flex; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-left-side{
            width: 50%;
            float: left;
            background: ' . $styledata[23] . '; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
            position: relative;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-right-side{
            width: 50%;
            float: left;
             ' . OxiAddonsBGImage($styledata, 41) . '; 
            display: flex; 
            align-items: center;
        }  
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-name{
            position: absolute;
            left: 0;
            top: 0;
            font-size: ' . $styledata[45] . 'px; 
            ' . OxiAddonsFontSettings($styledata, 49) . ';
            color: ' . $styledata[55] . ';
            background: ' . $styledata[57] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 59) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 332) . ';
            letter-spacing: ' . $stylefiles[4] . 'px; 
            float: left;
            ' . $width . '
         }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading{
            font-size: ' . $styledata[80] . 'px;
            ' . OxiAddonsFontSettings($styledata, 84) . ';
            color: ' . $styledata[90] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 92) . '; 
            width: 100%;
            float: left;
         } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail{
            font-size: ' . $styledata[113] . 'px;
            ' . OxiAddonsFontSettings($styledata, 117) . ';
            color: ' . $styledata[123] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 125) . ';
            width: 100%;
            float: left;
         } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button{
            width: 100%;
            float: left;
            text-align: ' . $styledata[21] . ';
        } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link-left{
            background: ' . $styledata[160] . ';
            color: ' . $styledata[158] . ';
            display: inline-block;
            ' . OxiAddonsFontSettings($styledata, 152) . ';
            font-size: ' . $styledata[148] . 'px;
            border:  ' . $styledata[184] . 'px ' . $styledata[185] . ';
            border-color: ' . $styledata[188] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 162) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 190) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 206) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 178) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link-left:hover{
            background: ' . $styledata[224] . ';
            color: ' . $styledata[222] . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 228) . ';
            border-color: ' . $styledata[226] . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link-right{
            background: ' . $styledata[253] . ';
            color: ' . $styledata[251] . ';
            display: inline-block;
            ' . OxiAddonsFontSettings($styledata, 245) . ';
            font-size: ' . $styledata[241] . 'px;
            border:  ' . $styledata[277] . 'px ' . $styledata[278] . ';
            border-color: ' . $styledata[281] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 255) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 283) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 299) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 271) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link-right:hover{
            background: ' . $styledata[317] . ';
            color: ' . $styledata[315] . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 321) . ';
            border-color: ' . $styledata[319] . ';
        }   
        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-wrapper-' . $oxiid . '{ 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 6) . '; 
                display: block;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-left-side{ 
                width: 100%;
                float: left; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 26) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-right-side{
                width: 100%;
                float: left; 
                height: 100vh
            }  
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-name{
                font-size: ' . $styledata[46] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 60) . '; 
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 333) . ';
             }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading{
                font-size: ' . $styledata[81] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . ';  
             }
     
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail{
                font-size: ' . $styledata[114] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 126) . '; 
             }
      
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link-left{ 
                font-size: ' . $styledata[149] . 'px; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 163) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 191) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 207) . '; 
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link-right{
                  font-size: ' . $styledata[242] . 'px; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 256) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 284) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 300) . '; 
            } 
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-wrapper-' . $oxiid . '{ 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . '; 
                display: block;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-left-side{ 
                width: 100%;
                float: left; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-right-side{
                width: 100%;
                float: left; 
                height: 100vh;

            }  
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-name{
                font-size: ' . $styledata[47] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 61) . '; 
                width: 80%; 
                left: 50%;
                transform: translateX(-50%);
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 334) . ';
             }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading{
                font-size: ' . $styledata[82] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 94) . ';  
                text-align: center;
             } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail{
                font-size: ' . $styledata[115] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . '; 
                text-align: center;
             }
             .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button { 
                text-align: center;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link-left{ 
                font-size: ' . $styledata[150] . 'px; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 164) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 192) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 208) . '; 
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link-right{
                  font-size: ' . $styledata[243] . 'px; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 257) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 285) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 301) . '; 
            }  
        }
    ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
