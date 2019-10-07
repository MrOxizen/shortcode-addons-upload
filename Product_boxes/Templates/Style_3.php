<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Product_boxes\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style 3
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_3 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $datas = (array_key_exists('sa_product_boxes_repeater', $style) && is_array($style['sa_product_boxes_repeater']) ? $style['sa_product_boxes_repeater'] : []);
        foreach ($datas as $key => $value) {
            $heading  = $price = $image = $button = '';
            if (array_key_exists('sa_product_boxes_title', $value) && $value['sa_product_boxes_title'] != '') {
                $heading = '<' . $style['sa_product_boxes_title_tag'] . ' class="oxi-addons-text">' . $this->text_render($value['sa_product_boxes_title']) . '</' . $style['sa_product_boxes_title_tag'] . '>';
            }
            if (array_key_exists('sa_product_boxes_button_switter', $style) && $style['sa_product_boxes_button_switter'] == 'yes') {
                if (array_key_exists('sa_product_boxes_button_text', $value) && $value['sa_product_boxes_button_text'] != '') {
                    if (array_key_exists('sa_product_boxes_button_link-url', $value) && $value['sa_product_boxes_button_link-url'] != '') {
                        $button = '<div class="oxi-addons-button" ' . $this->animation_render('sa_banner_button_left_animation', $style) . '>
                                        <a ' . $this->url_render('sa_product_boxes_button_link', $value) . ' class="oxi-addons-button-link">
                                        ' . $this->text_render($value['sa_product_boxes_button_text']) . ' 
                                        </a>
                                    </div>';
                    } else {
                        $button = '<div class="oxi-addons-button" ' . $this->animation_render('sa_banner_button_left_animation', $style) . '>
                                        <button class="oxi-addons-button-link">
                                            ' . $this->text_render($value['sa_product_boxes_button_text']) . ' 
                                        </button>
                                    </div>';
                    }
                }
            }
            if (array_key_exists('sa_product_boxes_price', $value) && $value['sa_product_boxes_price'] != '') {
                $price = '<div class="oxi-addons-price">' . $this->text_render($value['sa_product_boxes_price']) . ' </div>';
            }
            
            if ($this->media_render('sa_product_boxes_image', $value) != '') {
                $image = '<div class="oxi-addons-image-overlay">  
                            <div class="oxi-addons-front-img">
                                <img src="' . $this->media_render('sa_product_boxes_image', $value) . '" alt="images" class="oxi-addons-img">
                            </div>  
                        </div> ';
                }

            echo '<div class="oxi-addons-parent-wrapper-style-3 oxi-addons-parent-wrapper-style-3-' . $key . '  ' . $this->column_render('sa_product_boxes_column', $style) . '">
                    <div class="oxi-addons-main-wrapper oxi-addons-main-wrapper-style-3"  ' . $this->animation_render('sa_product_boxes_animation', $style) . '>
                    <div class="oxi-addons-body">
                    ' . $image . '
                    <div class="oxi-addons-main-content"> 
                         <div class="oxi-addons-overlay">
                         ' . $heading . '
                         ' . $price . '
                         ' . $button . ' 
                         </div>
                     </div>
                </div>
                </div>
            </div>';
        }
    }
    public function inline_public_jquery()
    {
        return 'setTimeout(function () {
            oxiequalHeight($("' . $this->WRAPPER . ' .oxi-addons-main-wrapper-style-3"));
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
        echo '<div class="oxi-addons-container">
          <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            $image = $price = $heading = $button = '';

            if ($data[1] != '') {
                $image = '
                <div class="oxi-addons-image-overlay">  
                    <div class="oxi-addons-front-img">
                        <img src="' . OxiAddonsUrlConvert($data[1]) . '" alt="images" class="oxi-addons-img">
                    </div>  
                </div> 
            ';
            }
            if ($data[3] != '') {
                $heading = ' 
                    <div class="oxi-addons-text"> 
                    ' . OxiAddonsTextConvert($data[3]) . ' 
                    </div> 
            ';
            }
            if ($data[5] != '') {
                $price = '
                <div class="oxi-addons-price">
                    ' . OxiAddonsTextConvert($data[5]) . '
                </div>
            ';
            }
            if ($data[9] != '' && $data[7] != '') {
                $button = '
                <div class="oxi-addons-button">
                    <a href="' . OxiAddonsUrlConvert($data[9]) . '" target="' . $styledata[113] . '" class="oxi-addons-button-link">
                        ' . OxiAddonsTextConvert($data[7]) . '
                    </a>
                </div>
            ';
            } elseif ($data[9] == '' && $data[7] != '') {
                $button = '
                <div class="oxi-addons-button">
                    <div class="oxi-addons-button-link">
                        ' . OxiAddonsTextConvert($data[7]) . '
                    </a>
                </div>
        ';
            }

            echo '<div class="oxi-addons-parent-wrapper-' . $oxiid . ' ' . OxiAddonsItemRows($styledata, 3) . ' ">';
            echo '<div class="oxi-addons-main-wrapper-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 47) . '>
               <div class="oxi-addons-body">
                   ' . $image . '
                   <div class="oxi-addons-main-content"> 
                        <div class="oxi-addons-overlay">
                        ' . $heading . '
                        ' . $price . '
                        ' . $button . ' 
                        </div>
                    </div>
               </div>
            </div>';
            echo '</div>';
        }
        echo '</div></div>';


        $css .= '
    .oxi-addons-parent-wrapper-' . $oxiid . '{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . '; 
    }
    .oxi-addons-main-wrapper-' . $oxiid . '{  
        width: 100%;
        max-width:' . $styledata[205] . 'px;
        display:flex;
        margin:0 auto;
        background: ' . $styledata[7] . ';
        border:  ' . $styledata[9] . 'px ' . $styledata[10] . ';
        border-color: ' . $styledata[13] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . '; 
        ' . OxiAddonsBoxShadowSanitize($styledata, 51) . ';
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-body{  
        width: 100%;
        float: left;
        position: relative;
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-overlay{   
        width: 100%;
        float: left;
        position: relative;
        overflow: hidden;
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-overlay::before{   
        content: "";
        display: block;
        padding-bottom: 100%; 
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-front-img{  
        position: absolute;
        left: 0;
        top: 0; 
        width: 100%;
        height: 100%; 
    } 
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-front-img .oxi-addons-img{  
        width: 100%;
        height: 100%;
    } 
 
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button{  
        width: 100%;
        float: left;
        z-index: 999;
        text-align: ' . $styledata[147] . ';
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button .oxi-addons-button-link{  
        font-size: ' . $styledata[149] . 'px;
        color: ' . $styledata[153] . ';
        background: ' . $styledata[155] . ';
        border:  ' . $styledata[157] . 'px ' . $styledata[158] . ';
        border-color: ' . $styledata[161] . ';
        display: inline-block;
        ' . OxiAddonsFontSettings($styledata, 163) . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 169) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 115) . ';
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
        ' . OxiAddonsBoxShadowSanitize($styledata, 185) . ';
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button .oxi-addons-button-link:hover{  
        color: ' . $styledata[191] . ';
        background: ' . $styledata[193] . ';
        border-color: ' . $styledata[195] . ';
        ' . OxiAddonsBoxShadowSanitize($styledata, 197) . ';
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content{    
        width: 100%;
        float: left;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0; 
    } 
   
    .oxi-addons-main-wrapper-' . $oxiid . ':hover .oxi-addons-main-content{   
        background: ' . $styledata[203] . '; 
    } 
   
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-overlay{    
        width: 100%;
        position: absolute;
        left: 0;
        top: 50%; 
        visibility: hidden;
        opacity: 0;
        
    } 
    .oxi-addons-main-wrapper-' . $oxiid . ':hover .oxi-addons-main-content .oxi-addons-overlay{ 
        visibility: visible;
        opacity: 1;
        transform: translateY(-50%);
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-text{  
        width: 100%;
        float: left;
        font-size: ' . $styledata[57] . 'px;
        ' . OxiAddonsFontSettings($styledata, 63) . ';
        color: ' . $styledata[61] . ';
        display: inline-block;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 69) . ';
        line-height: 1;
        width: 100%;
    } 
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-price{  
        font-size: ' . $styledata[85] . 'px;
        ' . OxiAddonsFontSettings($styledata, 91) . ';
        color: ' . $styledata[89] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 97) . ';
        line-height: 1;
        width: 100%;
        float: left;
    }
   
    
  
    @media only screen and (min-width : 669px) and (max-width : 993px){
       
    .oxi-addons-main-wrapper-' . $oxiid . '{   
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';         
        max-width:' . $styledata[205] . ';    
    }
     
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button .oxi-addons-button-link{  
        font-size: ' . $styledata[150] . 'px; 
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 170) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 116) . ';
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 132) . '; 
    }
 
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-text{   
        font-size: ' . $styledata[58] . 'px; 
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 70) . '; 
    } 
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-price{  
        font-size: ' . $styledata[86] . 'px; 
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 98) . '; 
    }
   
    }
    @media only screen and (max-width : 668px){
        .oxi-addons-main-wrapper-' . $oxiid . '{   
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';            
            max-width:' . $styledata[206] . ';
        }
         
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button .oxi-addons-button-link{  
            font-size: ' . $styledata[151] . 'px; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 171) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 117) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 133) . '; 
        }
     
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-text{   
            font-size: ' . $styledata[59] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . '; 
        } 
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-price{  
            font-size: ' . $styledata[87] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . '; 
        }
    }'; 
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
