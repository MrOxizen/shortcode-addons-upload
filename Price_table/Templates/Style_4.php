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

class Style_4 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);

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
                        $button = '<div class="oxi-addons-button" ' . $this->animation_render('sa_banner_button_left_animation', $style) . '>
                                            <button class="oxi-addons-link">
                                                ' . $this->text_render($value['sa_price_table_button_text']) . ' 
                                            </button>
                                        </div>';
                    }
                }
            }

            echo '<div class="oxi-addons-parent-wrapper-style-2 ' . ($admin == "admin" ? 'oxi-addons-admin-edit-list' : '') . ' ' . $this->column_render('sa_price_table_column', $style) . '">
                   <div class="oxi-addons-wrapper-style-2" ' . $this->animation_render('sa_product_boxes_animation', $style) . ' >
                    ' . $ribbon . '
                    ' . $title . '
                    <div class="oxi-addons-main">
                        ' . $price . '';
            $datas = (array_key_exists('sa_price_table_repeater', $value) && is_array($value['sa_price_table_repeater']) ? $value['sa_price_table_repeater'] : []);

            foreach ($datas as $data) {
                echo '<div class="oxi-addons-main-feature"  > 
                                                <div class="oxi-addons-feature">
                                                ' . $this->text_render($data['sa_price_table_feature']) . '
                                                </div>';

                echo '</div>';
            }
            echo  '</div>
                    ' . $button . '
                 </div>';
            if ($admin == 'admin') :
                echo '  <div class="oxi-addons-admin-absulote">
                                <div class="oxi-addons-admin-absulate-edit">
                                    <button class="btn btn-primary shortcode-addons-template-item-edit" type="button" value="' . $v['id'] . '">Edit</button>
                                </div>
                                <div class="oxi-addons-admin-absulate-delete">
                                <button class="btn btn-danger shortcode-addons-template-item-delete" type="submit" value="' . $v['id'] . '">Delete</button>
                                </div>
                            </div>';
            endif;
            echo ' </div>';
        }
    }
    public function inline_public_jquery()
    {
        return 'setTimeout(function () {
            oxiequalHeight($("' . $this->WRAPPER . ' .oxi-addons-wrapper-style-2"));
        }, 500)';
    }


    public function old_render()
    {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $icon = $price = $button = $title = $ribon = '';
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
        if ($styledata[136] === 'true') {
            $ribon = '
            <div class="oxi-addons-ribon">
                ' . OxiAddonsTextConvert($stylefiles[8]) . '
            </div>
            ';
        }

        if ($styledata[138] === 'right') {
            $ribon_position = '
                right: ' . $styledata[162] . 'px; 
                top: ' . $styledata[166] . 'px;
        ';
            $css .= '
        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-ribon{
                right: ' . $styledata[163] . 'px !important; 
                top: ' . $styledata[167] . 'px !important;
            }
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-ribon{
                right: ' . $styledata[164] . 'px !important; 
                top: ' . $styledata[168] . 'px !important;
            }
        }
        ';
        } else {
            $ribon_position = '
                left: ' . $styledata[162] . 'px ; 
                top: ' . $styledata[166] . 'px;
        ';
            $css .= '
        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-ribon{
                right: ' . $styledata[163] . 'px !important; 
                top: ' . $styledata[167] . 'px !important;
            }
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-ribon{
                right: ' . $styledata[164] . 'px !important; 
                top: ' . $styledata[168] . 'px !important;
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
        echo '<div class="oxi-addons-container">
    <div class="oxi-addons-row">
           <div class="oxi-addons-main-wrapper-' . $oxiid . '">
                <div class="oxi-addons-wrapper-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 73) . ' >
                ' . $ribon . '
                ' . $title . '
                <div class="oxi-addons-main"> 
                    ' . $price . ' 
                ';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            echo '<div class="oxi-addons-main-feature"  > 
                                <div class="oxi-addons-feature">
                                    ' . OxiAddonsTextConvert($data[1]) . '
                                    
                                </div>';

            echo '</div>';
        }
        echo '</div>
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
        font-size: ' . $styledata[140] . 'px;
        ' . OxiAddonsFontSettings($styledata, 148) . ';
        color: ' . $styledata[144] . ';
        background: ' . $styledata[146] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 174) . '; 
        width: ' . $styledata[154] . 'px; 
        max-width: 100%;
        height: ' . $styledata[158] . 'px;
        max-height: 100%;
        line-height: 1.5; 
        ' . $ribon_position . ' 
        transform: rotate(' . $styledata[170] . 'deg);  
        transform-origin: 50% 50%;
    } 
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-feature{ 
        width: 100%;
        float: left; 
        border: ' . $styledata[100] . ' ' . $styledata[101] . ';
        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 104) . '; 
     } 
     .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-feature:first-child{ 
        border-top: 0px;
     } 
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-feature:last-child{ 
        border-bottom: 0px;
     } 
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-feature{  
        font-size: ' . $styledata[84] . 'px;
        ' . OxiAddonsFontSettings($styledata, 88) . ';
        color: ' . $styledata[94] . ';
        background: ' . $styledata[98] . '; 
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 120) . '; 
     } 
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-feature span{  
        color: ' . $styledata[96] . '; 
        font-weight: normal; 
     } 
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price{
        font-size: ' . $styledata[190] . 'px;
        ' . OxiAddonsFontSettings($styledata, 194) . ';
        color: ' . $styledata[200] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 204) . '; 
        width: 100%;
        float: left;
     } 
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price  span{ 
        color: ' . $styledata[202] . '; 
        font-weight: normal;
        font-size: calc(' . $styledata[190] . 'px - 10px);
     } 
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price-title{
        font-size: ' . $styledata[220] . 'px;
        ' . OxiAddonsFontSettings($styledata, 228) . ';
        color: ' . $styledata[224] . ';
        background: ' . $styledata[226] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 234) . ';
        ' . OxiAddonsBoxShadowSanitize($styledata, 250) . ';
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
            font-size: ' . $styledata[141] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 175) . '; 
            width: ' . $styledata[155] . 'px;  
            height: ' . $styledata[159] . 'px; 
            transform: rotate(' . $styledata[171] . 'deg);
        } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-feature{  
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . '; 
         } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-feature{  
            font-size: ' . $styledata[85] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 121) . '; 
         }  
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price{
            font-size: ' . $styledata[191] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 205) . ';  
         }  
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price-title{
            font-size: ' . $styledata[221] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 235) . '; 
         } 
         .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-button{   
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 275) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-button .oxi-addons-link{  
            font-size: ' . $styledata[293] . 'px; 
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
            font-size: ' . $styledata[142] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 176) . '; 
            width: ' . $styledata[156] . 'px;  
            height: ' . $styledata[160] . 'px; 
            transform: rotate(' . $styledata[172] . 'deg);
        } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-feature{  
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . '; 
         } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-feature{  
            font-size: ' . $styledata[86] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 122) . '; 
         }  
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price{
            font-size: ' . $styledata[192] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 206) . ';  
         }  
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-price-title{
            font-size: ' . $styledata[222] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 236) . '; 
         } 
         .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-button{   
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 276) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-button .oxi-addons-link{  
            font-size: ' . $styledata[294] . 'px; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 314) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 260) . ';  
        }
    }
';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
