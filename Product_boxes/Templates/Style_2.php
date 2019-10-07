<?php

namespace SHORTCODE_ADDONS_UPLOAD\Product_boxes\Templates;

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

class Style_2  extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $datas = (array_key_exists('sa_product_boxes_repeater', $style) && is_array($style['sa_product_boxes_repeater']) ? $style['sa_product_boxes_repeater'] : []);
        foreach ($datas as $key => $value) {
            $heading = $images_one = $images_one = $details  = $button = '';


            if (array_key_exists('sa_product_boxes_title', $value) && $value['sa_product_boxes_title'] != '') {
                if (array_key_exists('sa_product_boxes_title_link-url', $value) && $value['sa_product_boxes_title_link-url'] != '') {
                    $heading = '<div class="oxi-addons-text">
                                        <a ' . $this->url_render('sa_product_boxes_title_link', $value) . ' class="oxi-addons-text-link">
                                        ' . $this->text_render($value['sa_product_boxes_title']) . ' 
                                        </a>
                                    </div>';
                } else {
                    $heading = '<div class="oxi-addons-text">
                        <div class="oxi-addons-text-link">
                        ' . $this->text_render($value['sa_product_boxes_title']) . ' 
                        </div>
                    </div>';
                }
            }
            if (array_key_exists('sa_product_boxes_price', $value) && $value['sa_product_boxes_price'] != '') {
                $price = '<div class="oxi-addons-price">' . $this->text_render($value['sa_product_boxes_price']) . ' </div>';
            }



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
            if ($this->media_render('sa_product_boxes_front_image', $value) != '') {
                $images_one = '<div class="oxi-addons-front-img">
                    <img src="' . $this->media_render('sa_product_boxes_front_image', $value) . '" alt="images" class="oxi-addons-img">
                </div> ';
            }
            if ($this->media_render('sa_product_boxes_hover_image', $value) != '') {
                $images_two = '<div class="oxi-addons-hover-img">
                    <img src="' . $this->media_render('sa_product_boxes_hover_image', $value) . '" alt="images" class="oxi-addons-img">
                </div> ';
            }
            echo '<div class="oxi-addons-parent-wrapper-style-2 oxi-addons-parent-wrapper-style-2-'.$key.'  ' . $this->column_render('sa_product_boxes_column', $style) . '">
            <div class="oxi-addons-main-wrapper oxi-addons-main-wrapper-style-2" ' . $this->animation_render('sa_product_boxes_animation', $style) . '>
                    <div class="oxi-addons-image-overlay">  
                        ' . $images_one . '
                        ' . $images_two . ' 
                        ' . $button . '  
                    </div> 
                    <div class="oxi-addons-main-content">
                        ' . $heading . '  
                        ' . $price . '   
                    </div>
                </div> 
            </div>';
        }
    }
    public function inline_public_jquery()
    {
        return 'setTimeout(function () {
            oxiequalHeight($("' . $this->WRAPPER . ' .oxi-addons-main-wrapper-style-2"));
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
            $image_one = $image_two = $heading = $button = $price = '';

            if ($data[1] != '') {
                $image_one = '
                <div class="oxi-addons-front-img">
                    <img src="' . OxiAddonsUrlConvert($data[1]) . '" alt="images" class="oxi-addons-img">
                </div>
            ';
            }
            if ($data[3] != '') {
                $image_two = '
                <div class="oxi-addons-hover-img">
                    <img src="' . OxiAddonsUrlConvert($data[3]) . '" alt="images" class="oxi-addons-img">
                </div>
            ';
            }
            if ($data[5] != '' && $data[7] != '') {
                $heading = '
                <div class="oxi-addons-text">
                    <a href="' . OxiAddonsUrlConvert($data[7]) . '" target="' . $styledata[57] . '" class="oxi-addons-text-link">
                        ' . OxiAddonsTextConvert($data[5]) . '
                    </a>
                </div> 
            ';
            } elseif ($data[5] != '' && $data[7] == '') {
                $heading = '
                <div class="oxi-addons-text">
                    <div class="oxi-addons-text-link">
                        ' . OxiAddonsTextConvert($data[5]) . '
                    </div>
                </div> 
            ';
            }
            if ($data[9] != '') {
                $price = '
                <div class="oxi-addons-price">
                    ' . OxiAddonsTextConvert($data[9]) . '
                </div>
            ';
            }
            if ($data[13] != '' && $data[11] != '') {
                $button = '
                <div class="oxi-addons-button">
                    <a href="' . OxiAddonsUrlConvert($data[13]) . '" target="' . $styledata[115] . '" class="oxi-addons-button-link">
                        ' . OxiAddonsTextConvert($data[11]) . '
                    </a>
                </div>
            ';
            } elseif ($data[13] == '' && $data[11] != '') {
                $button = '
            <div class="oxi-addons-button">
                <div class="oxi-addons-button-link">
                    ' . OxiAddonsTextConvert($data[11]) . '
                </div>
            </div>
        ';
            }

            echo '<div class="oxi-addons-parent-wrapper-' . $oxiid . ' ' . OxiAddonsItemRows($styledata, 3) . '">';
            echo '<div class="oxi-addons-main-wrapper-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 47) . '>
                <div class="oxi-addons-image-overlay">  
                    ' . $image_one . '
                    ' . $image_two . ' 
                    ' . $button . '  
                </div> 
                <div class="oxi-addons-main-content">
                    ' . $heading . '  
                    ' . $price . '   
                </div>
            </div>';


            echo '</div>';
        }
        echo '</div></div>';


        $css .= '
    .oxi-addons-parent-wrapper-' . $oxiid . '{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';             
        display:flex;
    }

    .oxi-addons-main-wrapper-' . $oxiid . '{  
        width: 100%;
        max-width:' . $styledata[172] . 'px;
        margin:0 auto;
        background: ' . $styledata[7] . ';
        border:  ' . $styledata[9] . 'px ' . $styledata[10] . ';
        border-color: ' . $styledata[13] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . '; 
        ' . OxiAddonsBoxShadowSanitize($styledata, 51) . ';
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
        visibility: visible;
        opacity: 1;
    }
    .oxi-addons-main-wrapper-' . $oxiid . ':hover .oxi-addons-image-overlay .oxi-addons-front-img{
        visibility: visible;
        opacity: 0;
    }
    .oxi-addons-main-wrapper-' . $oxiid . ':hover .oxi-addons-image-overlay   .oxi-addons-hover-img{
        visibility: visible;
        opacity: 1;
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-front-img .oxi-addons-img,
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-hover-img .oxi-addons-img{  
        width: 100%;
        height: 100%;
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-hover-img{  
        visibility: hidden;
        opacity: 0;
       position: absolute;
       left: 0;
       top: 0; 
       width: 100%;
       height: 100%;
    } 
 
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button{  
        width: 100%;
        float: left;
        z-index: 999;
        position: absolute;
        bottom: -50px;
        left: 0;
    }
    .oxi-addons-main-wrapper-' . $oxiid . ':hover .oxi-addons-image-overlay .oxi-addons-button{   
        bottom: 0px; 
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button .oxi-addons-button-link{  
        font-size: ' . $styledata[133] . 'px;  
        color: ' . $styledata[137] . ';
        background: ' . $styledata[139] . ';
        ' . OxiAddonsFontSettings($styledata, 141) . ';
        display: inline-block;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 117) . '; 
        width: 100%; 
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button .oxi-addons-button-link:hover{  
        color: ' . $styledata[147] . ';
        background: ' . $styledata[149] . ';  
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content{  
        border: ' . $styledata[152] . ' ' . $styledata[151] . '; 
         border-width:  ' . OxiAddonsPaddingMarginSanitize($styledata, 154) . ';
        width: 100%;
        float: left;
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-text{   
        width: 100%;
        float: left;
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-text .oxi-addons-text-link{  
        font-size: ' . $styledata[59] . 'px;
        ' . OxiAddonsFontSettings($styledata, 65) . ';
        color: ' . $styledata[63] . ';
        display: inline-block;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';
        line-height: 1;
        width: 100%;
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-text .oxi-addons-text-link:hover{   
        color: ' . $styledata[170] . ';
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-price{  
        font-size: ' . $styledata[87] . 'px;
        ' . OxiAddonsFontSettings($styledata, 93) . ';
        color: ' . $styledata[91] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';
        line-height: 1;
        width: 100%;
        float: left;
    }  
    @media only screen and (min-width : 669px) and (max-width : 993px){
        .oxi-addons-parent-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . '; 
        }
    
        .oxi-addons-main-wrapper-' . $oxiid . '{    
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';  
            max-width:' . $styledata[173] . ';    
        }
       
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button .oxi-addons-button-link{  
            font-size: ' . $styledata[134] . 'px;   
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 118) . ';  
        } 
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content{   
             border-width:  ' . OxiAddonsPaddingMarginSanitize($styledata, 155) . '; 
        } 
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-text .oxi-addons-text-link{  
            font-size: ' . $styledata[60] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 72) . '; 
        } 
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-price{  
            font-size: ' . $styledata[88] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 100) . ';  
        }
    }
    @media only screen and (max-width : 668px){
        .oxi-addons-parent-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . '; 
        }
    
        .oxi-addons-main-wrapper-' . $oxiid . '{    
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . '; 
            max-width:' . $styledata[174] . ';
        }
       
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button .oxi-addons-button-link{  
            font-size: ' . $styledata[135] . 'px;   
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 119) . ';  
        } 
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content{   
             border-width:  ' . OxiAddonsPaddingMarginSanitize($styledata, 156) . '; 
        } 
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-text .oxi-addons-text-link{  
            font-size: ' . $styledata[61] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . '; 
        } 
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-price{  
            font-size: ' . $styledata[89] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';  
        }
    }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
