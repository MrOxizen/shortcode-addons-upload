<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Headers\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_2
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_2 extends Templates {

    public function default_render($style, $child, $admin) {
//        echo '<pre>';
//        print_r($style['sa_s_image_ribbon_pos']);
//        echo '</pre>';
//        echo $this->url_render('sa_dual_btn_left_link', $style);
        $icon = $heading_one = $heading_two = $button = $detail = '';

        if ($style['sa_headers_h_1'] != '') {
            $heading_one = '
                <div class="oxi-addons-heading-two" ' . $this->animation_render('sa_headers_head_1_animation', $style) . '>
                        ' . $this->text_render($style['sa_headers_h_1']) . '
                </div>
            ';
        }
        if ($style['sa_headers_h_2'] != '') {
            $heading_two = ' 
                <div class="oxi-addons-heading-line">
                    <div class="oxi-addons-heading-one" ' . $this->animation_render('sa_headers_head_2_animation', $style) . '>
                        ' . $this->text_render($style['sa_headers_h_2']) . '
                    </div>
                    <div class="oxi-addons-line" ' . $this->animation_render('sa_headers_line_animation', $style) . '></div>
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

        if ($style['sa_headers_icon'] != '' && $style['sa_headers_icon_link-url'] != '') {
            $icon = '
            <div class="oxi-addons-main-icon"> 
                <a ' . $this->url_render('sa_headers_icon_link', $style) . '   class="oxi-addons-link"  ' . $this->animation_render('sa_headers_icon_animation', $style) . '>
                    ' . $this->font_awesome_render($style['sa_headers_icon']) . '
                </a> 
            </div>
        ';
        } elseif ($style['sa_headers_icon'] != '' && $style['sa_headers_icon_link-url'] == '') {
            $icon = '
            <div class="oxi-addons-main-icon"> 
                    ' . $this->font_awesome_render($style['sa_headers_icon']) . '
            </div>
        ';
        }


        if ($style['sa_headers_button_left_text'] != '' && $style['sa_headers_button_left_link-url'] != '') {
            $button = '
            <div class="oxi-addons-main-button" ' . $this->animation_render('sa_headers_button_left_animation', $style) . '></>
                <a ' . $this->url_render('sa_headers_button_left_link', $style) . ' class="oxi-addons-link"  >
                    ' . $this->text_render($style['sa_headers_button_left_text']) . '
                </a>
            </div>
        ';
        } elseif ($style['sa_headers_button_left_text'] != '' && $style['sa_headers_button_left_link-url'] == '') {
            $button = '
        <div class="oxi-addons-main-button" ' . $this->animation_render('sa_headers_button_left_animation', $style) . '></>
            <div class="oxi-addons-link">
                ' . $this->text_render($style['sa_headers_button_left_text']) . '
            </div>
        </div>
    ';
        }
        if ($style['sa_headers_position_rev'] == 'left') {
            $column = '
                    <div class="oxi-addons-wrapper-left-side">
                        ' . $icon . ' 
                        ' . $heading_one . '
                        ' . $heading_two . '
                        ' . $detail . '
                        ' . $button . ' 
                        </div>
                    <div class="oxi-addons-wrapper-right-side"> 
                       
                    </div>
                ';
        } else {
            $column = '
                    <div class="oxi-addons-wrapper-right-side"> 

                    </div>
                    <div class="oxi-addons-wrapper-left-side">
                        ' . $icon . ' 
                        ' . $heading_one . '
                        ' . $heading_two . '
                        ' . $detail . '
                        ' . $button . ' 
                    </div> 
            ';
               }
            echo '<div class="oxi-addons-headers-wrapper-style-2">
                    ' . $column . '
            </div>';
     
    }

    public function old_render() {
        $style = $this->dbdata;
        $child = $this->child;
        $oxiid = $style['id'];
        $css = '';
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        $icon = $heading_one = $heading_two = $button = $detail = '';

        if ($stylefiles[8] != '') {
            $heading_one = '
                <div class="oxi-addons-heading-two" ' . OxiAddonsAnimation($styledata, 184) . '>
                        ' . OxiAddonsTextConvert($stylefiles[8]) . '
                </div>
            ';
        }
        if ($stylefiles[6] != '') {
            $heading_two = ' 
                <div class="oxi-addons-heading-line">
                    <div class="oxi-addons-heading-one" ' . OxiAddonsAnimation($styledata, 151) . '>
                        ' . OxiAddonsTextConvert($stylefiles[6]) . '
                    </div>
                    <div class="oxi-addons-line" ' . OxiAddonsAnimation($styledata, 199) . '></div>
                </div>
            ';
        }
        if ($stylefiles[4] != '') {
            $detail = '
                    <div class="oxi-addons-short-detail" ' . OxiAddonsAnimation($styledata, 118) . '>
                        ' . OxiAddonsTextConvert($stylefiles[4]) . '
                    </div>
            ';
        }

        if ($stylefiles[2] != '' && $stylefiles[12] != '') {
            $icon = '
            <div class="oxi-addons-main-icon"> 
                <a href="' . OxiAddonsUrlConvert($stylefiles[12]) . '" id="' . OxiAddonsTextConvert($stylefiles[14]) . '"  class="oxi-addons-link"  target="' . $styledata[343] . '" ' . OxiAddonsAnimation($styledata, 83) . '>
                    ' . oxi_addons_font_awesome('' . $stylefiles[2] . '') . '
                </a> 
            </div>
        ';
        } elseif ($stylefiles[2] != '' && $stylefiles[12] == '') {
            $icon = '
            <div class="oxi-addons-main-icon" id="' . OxiAddonsTextConvert($stylefiles[14]) . '"> 
                   ' . oxi_addons_font_awesome('' . $stylefiles[2] . '') . '
            </div>
        ';
        }


        if ($stylefiles[10] != '' && $stylefiles[12] != '') {
            $button = '
            <div class="oxi-addons-main-button" ' . OxiAddonsAnimation($styledata, 294) . '></>
                <a href="' . OxiAddonsUrlConvert($stylefiles[12]) . '" class="oxi-addons-link"  target="' . $styledata[204] . '">
                    ' . OxiAddonsTextConvert($stylefiles[10]) . '
                </a>
            </div>
        ';
        } elseif ($stylefiles[10] != '' && $stylefiles[12] == '') {
            $button = '
        <div class="oxi-addons-main-button" ' . OxiAddonsAnimation($styledata, 294) . '></>
            <div class="oxi-addons-link">
                ' . OxiAddonsTextConvert($stylefiles[10]) . '
            </div>
        </div>
    ';
        }
        if ($styledata[3] == 'left') {
            $column = '
                    <div class="oxi-addons-wrapper-left-side">
                        ' . $icon . ' 
                        ' . $heading_one . '
                        ' . $heading_two . '
                        ' . $detail . '
                        ' . $button . ' 
                        </div>
                    <div class="oxi-addons-wrapper-right-side"> 
                       
                    </div>
        ';
        } else {
            $column = '
            <div class="oxi-addons-wrapper-right-side"> 
           
            </div>
            <div class="oxi-addons-wrapper-left-side">
                ' . $icon . ' 
                ' . $heading_one . '
                ' . $heading_two . '
                ' . $detail . '
                ' . $button . ' 
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
        if ($styledata[88] == 'left') {
            $justify_content_center = 'justify-content: flex-start;';
        } elseif ($styledata[88] == 'center') {
            $justify_content_center = 'justify-content: center;';
        } else {
            $justify_content_center = 'justify-content: flex-end;';
        }
        if ($styledata[43] == 'left') {
            $line_position = 'left:0';
        } elseif ($styledata[43] == 'center') {
            $line_position = '
            left: 50%;
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            transform: translateX(-50%);
        ';
        } else {
            $line_position = '
            right: 0; 
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
            background: ' . $styledata[21] . ';  
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-right-side{
            width: 50%;
            float: left;
             ' . OxiAddonsBGImage($styledata, 39) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 43) . ';
            display: flex; 
            align-items: center;
        }
            
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-icon{
            position: relative; 
            width: 100%;
            float: left; 
            display: flex;  
            ' . $justify_content_center . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 351) . ';   
        }
        .oxi-addons-wrapper-' . $oxiid . '  .oxi-icons{
            display: flex; 
            align-items: center; 
            justify-content: center;
            font-size: ' . $styledata[59] . 'px;  
            color: ' . $styledata[63] . ';
            background: ' . $styledata[307] . ';
            border:  ' . $styledata[309] . 'px ' . $styledata[310] . ';
            border-color: ' . $styledata[313] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 315) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 331) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 67) . ';   
            width: ' . $styledata[299] . 'px;
            height: ' . $styledata[303] . 'px;   
            z-index: 3;
            overflow: hidden;
        }

        .oxi-addons-wrapper-' . $oxiid . '  .oxi-icons:hover{ 
            color: ' . $styledata[337] . ';
            background: ' . $styledata[339] . '; 
            border-color: ' . $styledata[341] . '; 
            ' . OxiAddonsBoxShadowSanitize($styledata, 345) . ' 
        } 
   
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-one{
            font-size: ' . $styledata[123] . 'px;
            ' . OxiAddonsFontSettings($styledata, 127) . ';
            color: ' . $styledata[133] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 135) . '; 
            width: 100%;
            float: left;
         }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-two{
            font-size: ' . $styledata[156] . 'px; 
            ' . OxiAddonsFontSettings($styledata, 160) . ';
            color: ' . $styledata[166] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 168) . ';
            letter-spacing: ' . $stylefiles[18] . 'px;
            width: 100%;
            float: left;
         }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-line{
            position: relative;
            width: 100%;
            float: left;
         }
         .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-line{
            width: 100%;
            float: left;
         }
        .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-line::after{
            content: "";
            position: absolute; 
            bottom: 0;
            width: ' . $styledata[189] . '%;
            height:' . $styledata[193] . 'px;
            background: ' . $styledata[197] . '; 
            ' . $line_position . '
         }


        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail{
            font-size: ' . $styledata[90] . 'px;
            ' . OxiAddonsFontSettings($styledata, 94) . ';
            color: ' . $styledata[100] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
            width: 100%;
            float: left;
         }
 

        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button{
            width: 100%;
            float: left;
            text-align: ' . $styledata[206] . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link{
            background: ' . $styledata[220] . ';
            color: ' . $styledata[218] . ';
            display: inline-block;
            ' . OxiAddonsFontSettings($styledata, 106) . ';
            font-size: ' . $styledata[208] . 'px;
            border:  ' . $styledata[244] . 'px ' . $styledata[245] . ';
            border-color: ' . $styledata[248] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 222) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 250) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 266) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 238) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link:hover{
            background: ' . $styledata[284] . ';
            color: ' . $styledata[282] . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 288) . ';
            border-color: ' . $styledata[286] . ';
        }



        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-wrapper-' . $oxiid . '{ 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 6) . '; 
                display: block;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-left-side{
                width: 100%;
                float: left; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-right-side{
                width: 100%;
                float: left;  
            } 
            .oxi-addons-wrapper-' . $oxiid . '  .oxi-icons{ 
                font-size: ' . $styledata[60] . 'px;     
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 316) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 68) . ';   
                width: ' . $styledata[300] . 'px;
                height: ' . $styledata[304] . 'px;    
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-icon{ 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 352) . ';   
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-one{
                font-size: ' . $styledata[124] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 136) . ';  
             }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-two{
                font-size: ' . $styledata[157] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 169) . '; 
             }  
            .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-line::after{ 
                width: ' . $styledata[190] . '%;
                height:' . $styledata[194] . 'px; 
             }
    
    
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail{
                font-size: ' . $styledata[91] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . '; 
             } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link{ 
                font-size: ' . $styledata[209] . 'px; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 223) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 251) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 267) . '; 
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
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-right-side{
                width: 100%;
                float: left;  
            } 
            .oxi-addons-wrapper-' . $oxiid . '  .oxi-icons{ 
                font-size: ' . $styledata[61] . 'px;     
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 317) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 69) . ';   
                width: ' . $styledata[301] . 'px;
                height: ' . $styledata[305] . 'px;    
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-icon{ 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 353) . ';   
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-one{
                font-size: ' . $styledata[125] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 137) . ';  
             }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-two{
                font-size: ' . $styledata[158] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 170) . '; 
             }  
            .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-line::after{ 
                width: ' . $styledata[191] . '%;
                height:' . $styledata[195] . 'px; 
             }
    
    
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail{
                font-size: ' . $styledata[92] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 104) . '; 
             } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link{ 
                font-size: ' . $styledata[210] . 'px; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 224) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 252) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 268) . '; 
            } 
        }
    ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
