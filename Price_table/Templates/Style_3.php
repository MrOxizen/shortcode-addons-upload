<?php

namespace SHORTCODE_ADDONS_UPLOAD\Price_table\Templates;

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
        $datas = (array_key_exists('sa_price_table_repeater', $style) && is_array($style['sa_price_table_repeater']) ? $style['sa_price_table_repeater'] : []);
        foreach ($datas as $key => $value) {
            $title = $subtitle =  $details  = $price    = $button = $ribbon = '';
            if (array_key_exists('sa_price_table_title', $value) && $value['sa_price_table_title'] != '') {
                $title = '<' . $style['sa_price_table_title_tag'] . ' class="oxi-addons-price-title">' . $this->text_render($value['sa_price_table_title']) . '</' . $style['sa_price_table_title_tag'] . '>';
            }
            if (array_key_exists('sa_price_table_sub_title', $value) && $value['sa_price_table_sub_title'] != '') {
                $subtitle = '<' . $style['sa_price_table_sub_title_tag'] . ' class="oxi-addons-price-subtitle">' . $this->text_render($value['sa_price_table_sub_title']) . '</' . $style['sa_price_table_sub_title_tag'] . '>';
            }
            if (array_key_exists('sa_price_table_details', $value) && $value['sa_price_table_details'] != '') {
                $details = '<p class="oxi-addons-price-short-details">' . $this->text_render($value['sa_price_table_details']) . '</p>';
            }

            if (array_key_exists('sa_price_table_price', $value) && $value['sa_price_table_price'] != '') {
                $price = '<div class="oxi-addons-price">' . $this->text_render($value['sa_price_table_price']) . '</div>';
            } 
            
            if (array_key_exists('sa_price_table_ribbon_switter', $style) && $style['sa_price_table_ribbon_switter'] == 'yes') {

                if (array_key_exists('sa_price_table_ribbon_text', $value) && $value['sa_price_table_ribbon_text'] != '') {
                    $ribbon = '<div class="oxi-addons-ribon ' . $style['sa_price_table_ribbon_position_left_right'] . '">' . $this->text_render($value['sa_price_table_ribbon_text']) . '</div>';
                }
            }

            if (array_key_exists('sa_price_table_button_switter', $style) && $style['sa_price_table_button_switter'] == 'yes') {
                if (array_key_exists('sa_price_table_button_text', $value) && $value['sa_price_table_button_text'] != '') {
                    if (array_key_exists('sa_price_table_button_link-url', $value) && $value['sa_price_table_button_link-url'] != '') {
                        $button = '<div class="oxi-addons-button">
                                            <a ' . $this->url_render('sa_price_table_button_link', $value) . ' class="oxi-addons-link">
                                            ' . $this->text_render($value['sa_price_table_button_text']) . ' 
                                            </a>
                                        </div>';
                    } else {
                        $button = '<div class="oxi-addons-button" ' . $this->animation_render('sa_banner_button_left_animation', $style) . '>
                                            <button class="oxi-addons-link">
                                                ' . $this->text_render($value['sa_price_table_button_text']) . ' 
                                            </button>
                                        </div>';
                    }
                }
            }

            echo '<div class="oxi-addons-parent-wrapper-style-3 oxi-addons-parent-wrapper-style-3-' . $key . '  ' . $this->column_render('sa_price_table_column', $style) . '">
                   <div class="oxi-addons-wrapper-style-3" ' . $this->animation_render('sa_price_table_animation', $style) . ' >
                    ' . $ribbon . '
                    ' . $title . '
                    ' . $subtitle . '
                    <div class="oxi-addons-main">
                        ' . $price . '
                        ' . $details . '
                    </div>
                    ' . $button . '
                </div>
            </div>';
        }
    }
    public function inline_public_jquery()
    {
        return 'setTimeout(function () {
            oxiequalHeight($("' . $this->WRAPPER . ' .oxi-addons-wrapper-style-3"));
        }, 500)';
    }


    public function old_render()
    {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $price = $button = $title = $ribon = $subtitle = $details = '';
        $css = '';
    
        if ($stylefiles[10] != '') {
            $price = '  
                <div class="oxi-addons-price">
                    ' . OxiAddonsTextConvert($stylefiles[10]) . '
                </div> 
                ';
        }
        if ($stylefiles[12] != '') {
            $title = '
                <div class="oxi-addons-price-title">
                    ' . OxiAddonsTextConvert($stylefiles[12]) . '
                </div>
                ';
        }
        if ($stylefiles[18] != '') {
            $subtitle = '
                <div class="oxi-addons-price-subtitle">
                    ' . OxiAddonsTextConvert($stylefiles[18]) . '
                </div>
                ';
        }
        if ($stylefiles[20] != '') {
            $details = '
                <div class="oxi-addons-price-short-details">
                    ' . OxiAddonsTextConvert($stylefiles[20]) . '
                </div>
                ';
        }
        if ($styledata[84] === 'true') {
            $ribon = '
                <div class="oxi-addons-ribon">
                    ' . OxiAddonsTextConvert($stylefiles[8]) . '
                </div>
                ';
        }
    
        if ($styledata[124] === 'right') {
            $ribon_position = '
                    right: ' . $styledata[126] . 'px; 
                    top: ' . $styledata[130] . 'px;
            ';
            $css .= '
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-ribon{
                    right: ' . $styledata[127] . 'px !important; 
                    top: ' . $styledata[131] . 'px !important;
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-ribon{
                    right: ' . $styledata[128] . 'px !important; 
                    top: ' . $styledata[131] . 'px !important;
                }
            }
            ';
        } else {
            $ribon_position = '
                    left: ' . $styledata[126] . 'px ; 
                    top: ' . $styledata[130] . 'px;
            ';
            $css .= '
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-ribon{
                    right: ' . $styledata[127] . 'px !important; 
                    top: ' . $styledata[131] . 'px !important;
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-ribon{
                    right: ' . $styledata[128] . 'px !important; 
                    top: ' . $styledata[132] . 'px !important;
                }
            }
            ';
        }
    
    
        if ($stylefiles[14] != '' && $stylefiles[16] != '') {
            $button = '
                <div class="oxi-addons-button" ' . OxiAddonsAnimation($styledata, 334) . '>
                    <a href="' . OxiAddonsUrlConvert($stylefiles[16]) . '" class="oxi-addons-link"  target="' . $styledata[256] . '">
                        ' . OxiAddonsTextConvert($stylefiles[14]) . '
                    </a>
                </div>
            ';
        } elseif ($stylefiles[14] != '' && $stylefiles[16] == '') {
            $button = '
            <div class="oxi-addons-button" ' . OxiAddonsAnimation($styledata, 334) . '>
                <div class="oxi-addons-link">
                    ' . OxiAddonsTextConvert($stylefiles[14]) . '
                </div>
            </div>
        ';
        }
        echo '<div class="oxi-addons-container"> <div class="oxi-addons-row">
                 <div class="oxi-addons-main-wrapper-' . $oxiid . '">
                    <div class="oxi-addons-wrapper-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 73) . ' >
                        ' . $ribon . '
                        ' . $title . '
                        ' . $subtitle . '
                        <div class="oxi-addons-main">
                            ' . $price . '
                            ' . $details . '
                        </div>
                        ' . $button . '
                    </div>
                </div>
            </div>
            </div>
           
            ';
        $css .= '
            .oxi-addons-main-wrapper-' . $oxiid . '{
                width: 100%;
                float: left;
                display: flex;
                justify-content: center;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 57) . '; 
            }
            .oxi-addons-wrapper-' . $oxiid . '{
                position: relative;
                width: 100%;
                float: left; 
                overflow: hidden; 
                background: ' . $styledata[3] . ';
                border: ' . $styledata[5] . ' ' . $styledata[6] . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';   
                ' . OxiAddonsBoxShadowSanitize($styledata, 78) . ';
                transform: scale(' . $stylefiles[2] . ');
                transition: all .5s !important;
                cursor: pointer;
                max-width: ' . $styledata[351] . 'px;
            }
            .oxi-addons-wrapper-' . $oxiid . ':hover{ 
                transform: scale(' . $stylefiles[4] . ') translateY(' . $stylefiles[6] . 'px);
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main{ 
                width: 100%;
                float: left;  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . '; 
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-ribon{
                display: flex;
                align-items: center;
                justify-content: center;
                 position: absolute;
                 font-size: ' . $styledata[94] . 'px;
                 ' . OxiAddonsFontSettings($styledata, 98) . ';
                 color: ' . $styledata[104] . ';
                 background: ' . $styledata[122] . ';
                 padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 106) . '; 
                 width: ' . $styledata[86] . 'px; 
                 max-width: 100%;
                 height: ' . $styledata[90] . 'px;
                 max-height: 100%;
                 line-height: 1.5; 
                 ' . $ribon_position . ' 
                 transform: rotate(' . $styledata[134] . 'deg);  
                 transform-origin: 50% 50%;
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price{
                font-size: ' . $styledata[138] . 'px;
                ' . OxiAddonsFontSettings($styledata, 142) . ';
                color: ' . $styledata[148] . ';
                Background: ' . $styledata[150] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 152) . '; 
                width: 100%;
                float: left;
             } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price-title{
                font-size: ' . $styledata[168] . 'px;
                ' . OxiAddonsFontSettings($styledata, 172) . ';
                color: ' . $styledata[178] . ';
                background: ' . $styledata[180] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 182) . ';
                width: 100%;
                float: left;
             } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price-subtitle{
                font-size: ' . $styledata[198] . 'px;
                ' . OxiAddonsFontSettings($styledata, 202) . ';
                color: ' . $styledata[208] . ';
                background: ' . $styledata[210] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 212) . ';
                width: 100%;
                float: left;
             } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price-short-details{
                font-size: ' . $styledata[228] . 'px;
                ' . OxiAddonsFontSettings($styledata, 232) . ';
                color: ' . $styledata[238] . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 240) . ';
                width: 100%;
                float: left;
             } 
             .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-button{  
                width: 100%;
                float: left;
                z-index: 999;
                text-align: ' . $styledata[290] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 274) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-button .oxi-addons-link{  
                font-size: ' . $styledata[292] . 'px;
                color: ' . $styledata[296] . ';
                background: ' . $styledata[298] . ';
                border:  ' . $styledata[300] . 'px ' . $styledata[301] . ';
                border-color: ' . $styledata[304] . ';
                display: inline-block;
                ' . OxiAddonsFontSettings($styledata, 306) . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 312) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 258) . '; 
                ' . OxiAddonsBoxShadowSanitize($styledata, 328) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-button .oxi-addons-link:hover{  
                color: ' . $styledata[339] . ';
                background: ' . $styledata[341] . ';
                border-color: ' . $styledata[343] . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 345) . ';
            }
     
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-wrapper-' . $oxiid . '{ 
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 10) . '; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 26) . ';  
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 58) . ';   
                    max-width: ' . $styledata[352] . 'px;
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main{  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 42) . '; 
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-ribon{ 
                     font-size: ' . $styledata[95] . 'px;  
                     padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 107) . '; 
                     width: ' . $styledata[87] . 'px;  
                     height: ' . $styledata[91] . 'px; 
                     transform: rotate(' . $styledata[135] . 'deg);   
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price{
                    font-size: ' . $styledata[139] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 153) . ';  
                 } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price-title{
                    font-size: ' . $styledata[169] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 183) . '; 
                 } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price-subtitle{
                    font-size: ' . $styledata[198] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 212) . '; 
                 } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price-short-details{
                    font-size: ' . $styledata[229] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 241) . '; 
                 } 
                 .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-button{   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 275) . ';
                }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-button .oxi-addons-link{  
                    font-size: ' . $styledata[295] . 'px; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 313) . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 259) . ';  
                }
              
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-wrapper-' . $oxiid . '{ 
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . '; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';  
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 59) . ';  
                    max-width: ' . $styledata[353] . 'px; 
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main{  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 43) . '; 
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-ribon{ 
                    font-size: ' . $styledata[96] . 'px;  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 108) . '; 
                    width: ' . $styledata[88] . 'px;  
                    height: ' . $styledata[92] . 'px; 
                    transform: rotate(' . $styledata[136] . 'deg);   
               } 
               .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price{
                   font-size: ' . $styledata[140] . 'px; 
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 154) . ';  
                } 
               .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price-title{
                   font-size: ' . $styledata[170] . 'px; 
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 184) . '; 
                } 
               .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price-subtitle{
                   font-size: ' . $styledata[199] . 'px; 
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 212) . '; 
                } 
               .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price-short-details{
                   font-size: ' . $styledata[230] . 'px; 
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 242) . '; 
                } 
                .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-button{   
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 276) . ';
               }
               .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-button .oxi-addons-link{  
                   font-size: ' . $styledata[296] . 'px; 
                   border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 314) . ';
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 260) . ';  
               }
            }
        ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
