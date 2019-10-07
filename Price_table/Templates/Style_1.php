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

class Style_1 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $datas = (array_key_exists('sa_price_table_repeater', $style) && is_array($style['sa_price_table_repeater']) ? $style['sa_price_table_repeater'] : []);
        foreach ($datas as $key => $value) {
            $title   = $price    = $button = $ribbon = '';
            if (array_key_exists('sa_price_table_title', $value) && $value['sa_price_table_title'] != '') {
                $title = '<' . $style['sa_price_table_title_tag'] . ' class="oxi-addons-price-title">' . $this->text_render($value['sa_price_table_title']) . '</' . $style['sa_price_table_title_tag'] . '>';
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
                        $button = '<div class="oxi-addons-main-button">
                                            <a ' . $this->url_render('sa_price_table_button_link', $value) . ' class="oxi-addons-link">
                                            ' . $this->text_render($value['sa_price_table_button_text']) . ' 
                                            </a>
                                        </div>';
                    } else {
                        $button = '<div class="oxi-addons-main-button" ' . $this->animation_render('sa_banner_button_left_animation', $style) . '>
                                            <button class="oxi-addons-link">
                                                ' . $this->text_render($value['sa_price_table_button_text']) . ' 
                                            </button>
                                        </div>';
                    }
                }
            }

            echo '<div class="oxi-addons-parent-wrapper-style-1 oxi-addons-parent-wrapper-style-1-' . $key . '  ' . $this->column_render('sa_price_table_column', $style) . '">
                   <div class="oxi-addons-wrapper-style-1" ' . $this->animation_render('sa_product_boxes_animation', $style) . ' >
                    ' . $ribbon . '
                    <div class="oxi-addons-main">
                        ' . $price . '
                        ' . $title . '
                    </div>
                    ' . $button . '
                </div>
            </div>';
        }
    }
    public function inline_public_jquery()
    {
        return 'setTimeout(function () {
            oxiequalHeight($("' . $this->WRAPPER . ' .oxi-addons-wrapper-style-1"));
        }, 500)';
    }


    public function old_render()
    {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
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
        if ($styledata[84] === 'true') {
            $ribon = '
                <div class="oxi-addons-ribon">
                    ' . OxiAddonsTextConvert($stylefiles[8]) . '
                </div>
                ';
        }

        if ($styledata[216] === 'right') {
            $ribon_position = '
                    right: ' . $styledata[218] . 'px; 
                    top: ' . $styledata[222] . 'px;
            ';
            $css .= '
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-ribon{
                    right: ' . $styledata[219] . 'px !important; 
                    top: ' . $styledata[223] . 'px !important;
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-ribon{
                    right: ' . $styledata[220] . 'px !important; 
                    top: ' . $styledata[224] . 'px !important;
                }
            }
            ';
        } else {
            $ribon_position = '
                    left: ' . $styledata[218] . 'px ; 
                    top: ' . $styledata[222] . 'px;
            ';
            $css .= '
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-ribon{
                    right: ' . $styledata[219] . 'px !important; 
                    top: ' . $styledata[223] . 'px !important;
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-ribon{
                    right: ' . $styledata[220] . 'px !important; 
                    top: ' . $styledata[224] . 'px !important;
                }
            }
            ';
        }


        if ($stylefiles[14] != '' && $stylefiles[16] != '') {
            $button = '
                <div class="oxi-addons-main-button">
                    <a href="' . OxiAddonsUrlConvert($stylefiles[16]) . '" class="oxi-addons-link"  target="' . $styledata[178] . '">
                        ' . OxiAddonsTextConvert($stylefiles[14]) . '
                    </a>
                </div>
            ';
        } elseif ($stylefiles[14] != '' && $stylefiles[16] == '') {
            $button = '
            <div class="oxi-addons-main-button">
                <div class="oxi-addons-link">
                    ' . OxiAddonsTextConvert($stylefiles[14]) . '
                </div>
            </div>
        ';
        }
        echo '<div class="oxi-addons-container"><div class="oxi-addons-row">
                <div class="oxi-addons-main-wrapper-' . $oxiid . '">
                    <div class="oxi-addons-wrapper-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 73) . ' >
                        ' . $ribon . '
                        <div class="oxi-addons-main">
                            ' . $price . '
                            ' . $title . '
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
                max-width: ' . $styledata[230] . 'px;
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
                 background: ' . $styledata[214] . ';
                 padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 106) . '; 
                 width: ' . $styledata[86] . 'px; 
                 max-width: 100%;
                 height: ' . $styledata[90] . 'px;
                 max-height: 100%;
                 line-height: 1.5; 
                 ' . $ribon_position . ' 
                 transform: rotate(' . $styledata[226] . 'deg);  
                 transform-origin: 50% 50%;
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price{
                font-size: ' . $styledata[122] . 'px;
                ' . OxiAddonsFontSettings($styledata, 126) . ';
                color: ' . $styledata[132] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 134) . '; 
                width: 100%;
                float: left;
             } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price-title{
                font-size: ' . $styledata[150] . 'px;
                ' . OxiAddonsFontSettings($styledata, 154) . ';
                color: ' . $styledata[160] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 162) . ';
                width: 100%;
                float: left;
             } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button{
                width: 100%;
                float: left; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link{
                background: ' . $styledata[202] . ';
                color: ' . $styledata[200] . ';
                display:  block;
                ' . OxiAddonsFontSettings($styledata, 204) . ';
                font-size: ' . $styledata[196] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 180) . '; 
                width: 100%;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link:hover{
                background: ' . $styledata[212] . ';
                color: ' . $styledata[210] . '; 
            }
     
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-wrapper-' . $oxiid . '{ 
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 10) . '; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 26) . ';  
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 58) . ';  
                    max-width: ' . $styledata[231] . 'px; 
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main{  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 42) . '; 
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-ribon{ 
                     font-size: ' . $styledata[95] . 'px; 
                     padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 107) . '; 
                     width: ' . $styledata[87] . 'px;  
                     height: ' . $styledata[91] . 'px; 
                     transform: rotate(' . $styledata[227] . 'deg);   
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price{
                    font-size: ' . $styledata[123] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 135) . ';  
                 }
            
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price-title{
                    font-size: ' . $styledata[151] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 163) . '; 
                 } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link{ 
                    font-size: ' . $styledata[197] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 181) . ';  
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-wrapper-' . $oxiid . '{ 
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . '; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';  
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 59) . ';   
                    max-width: ' . $styledata[232] . 'px;
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main{  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 43) . '; 
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-ribon{ 
                     font-size: ' . $styledata[96] . 'px; 
                     padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 108) . '; 
                     width: ' . $styledata[88] . 'px;  
                     height: ' . $styledata[92] . 'px; 
                     transform: rotate(' . $styledata[228] . 'deg);   
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price{
                    font-size: ' . $styledata[124] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 136) . ';  
                 } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price-title{
                    font-size: ' . $styledata[152] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 164) . '; 
                 } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link{ 
                    font-size: ' . $styledata[198] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 182) . ';  
                }
            }
        ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
