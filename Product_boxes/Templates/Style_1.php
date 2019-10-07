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

class Style_1 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $datas = (array_key_exists('sa_product_boxes_repeater', $style) && is_array($style['sa_product_boxes_repeater']) ? $style['sa_product_boxes_repeater'] : []);
        foreach ($datas as $key => $value) {
         $heading_one  = $heading_two = $details = $images = $button = '';
            if (array_key_exists('sa_product_boxes_heading_one', $value) && $value['sa_product_boxes_heading_one'] != '') {
                $heading_one = '<' . $style['sa_product_boxes_heading_one_tag'] . ' class="oxi-addons-heading-one">' . $this->text_render($value['sa_product_boxes_heading_one']) . '</' . $style['sa_product_boxes_heading_one_tag'] . '>';
            }
            if (array_key_exists('sa_product_boxes_heading_two', $value) && $value['sa_product_boxes_heading_two'] != '') {
                $heading_two = '<' . $style['sa_product_boxes_heading_two_tag'] . ' class="oxi-addons-heading-two">' . $this->text_render($value['sa_product_boxes_heading_two']) . '</' . $style['sa_product_boxes_heading_two_tag'] . '>';
            }
            if (array_key_exists('sa_product_boxes_details', $value) && $value['sa_product_boxes_details'] != '') {
                $details = '<div class="oxi-addons-details"> ' . $this->text_render($value['sa_product_boxes_details']) . ' </div>';
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
            if ($this->media_render('sa_product_boxes_image', $value) != '') {
                $images = '<img  src="' . $this->media_render('sa_product_boxes_image', $value) . '" class="oxi-addons-img" alt="front image"/>';
            }
            echo '<div class="oxi-addons-parent-wrapper-style-1 oxi-addons-parent-wrapper-style-1-'.$key.'  ' . $this->column_render('sa_product_boxes_column', $style) . '">
                    <div class="oxi-addons-main-wrapper oxi-addons-main-wrapper-style-1"  ' . $this->animation_render('sa_product_boxes_animation', $style) . '>
                    <div class="oxi-addons-image-overlay">
                       ' . $images . '
                        <div class="oxi-addons-wrapper">
                            ' . $heading_one . '
                            ' . $heading_two . '
                            ' . $details . '  
                            ' . $button . '  
                        </div>
                    </div> 
                </div>
            </div>';
        }
    }
    public function inline_public_jquery()
    {
        return 'setTimeout(function () {
            oxiequalHeight($("' . $this->WRAPPER . ' .oxi-addons-main-wrapper-style-1"));
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
        $header_one = $header_two = $details = $button = $images = '';


        if ($data[3] != '') {
            $header_one = '  <div class="oxi-addons-heading-one" ' . OxiAddonsAnimation($styledata, 78) . '>
            ' . OxiAddonsTextConvert($data[3]) . '
            </div>';
        }
        if ($data[5] != '') {
            $header_two = ' <div class="oxi-addons-heading-two" ' . OxiAddonsAnimation($styledata, 111) . '>
            ' . OxiAddonsTextConvert($data[5]) . '
            </div>';
        }
        if ($data[7] != '') {
            $details = '<div class="oxi-addons-details" ' . OxiAddonsAnimation($styledata, 144) . '>
            ' . OxiAddonsTextConvert($data[7]) . '
            </div>';
        }
        if ($data[1] != '') {
            $images = ' <img src="' . OxiAddonsUrlConvert($data[1]) . '" alt="images" class="oxi-addons-img">';
        }
        if ($data[11] != '' && $data[9] != '') {
            $button = ' <div class="oxi-addons-button" ' . OxiAddonsAnimation($styledata, 227) . '>
            <a href="' . OxiAddonsUrlConvert($data[11]) . '" target="' . $styledata[151] . '" class="oxi-addons-button-link">
                ' . OxiAddonsTextConvert($data[9]) . '
            </a>
        </div>';
        } elseif ($data[11] == '' && $data[9] != '') {
            $button = ' <div class="oxi-addons-button" ' . OxiAddonsAnimation($styledata, 227) . '>
            <div class="oxi-addons-button-link">
                ' . OxiAddonsTextConvert($data[9]) . '
            </div>';
        }

        echo '<div class="oxi-addons-parent-wrapper-' . $oxiid . ' ' . OxiAddonsItemRows($styledata, 3) . ' ">';
        echo '<div class="oxi-addons-main-wrapper-' . $oxiid . ' oxi-addons-main-wrapper-' . $oxiid . '-' . $value['id'] . '"  ' . OxiAddonsAnimation($styledata, 39) . '>
                    <div class="oxi-addons-image-overlay">
                       ' . $images . '
                        <div class="oxi-addons-wrapper">
                            ' . $header_one . '
                            ' . $header_two . '
                            ' . $details . '  
                            ' . $button . '  
                        </div>
                    </div> 
                </div>'; 
        echo '</div>';
    }
    echo '</div></div>';
    $css .= '
    .oxi-addons-main-wrapper-' . $oxiid . '{          
        width: 100%;
        float: left;
    }
    .oxi-addons-parent-wrapper-' . $oxiid . '{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
    }
 
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-overlay{
        width: 100%;
        max-width:' . $styledata[246] . 'px;
        ' . OxiAddonsBoxShadowSanitize($styledata, 44) . ';    
        margin: 0 auto;
        position: relative; 
        overflow: hidden;  
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-overlay .oxi-addons-img{ 
        width: 100%;
        height: auto; 
        transform: scale3d(1.1, 1.1, 1) translate3d(0, 0, 0);
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-overlay:hover .oxi-addons-img{ 
        transform: scale3d(1.1, 1.1, 1) translate3d(4%, 0, 0);
    }
    .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-image-overlay::after {
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        z-index: 1;
        opacity:0;
        content: "";
        background: ' . $styledata[238] . ';
        transition: all 0.35s;
    }
    .oxi-addons-main-wrapper-' . $oxiid . ':hover  .oxi-addons-image-overlay::after{
        opacity:1;
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-overlay::before{
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        display: inline-block;
        padding-bottom: 100%; 
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper{  
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . '; 
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%); 
        z-index: 2;
        width: 100%;
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper .oxi-addons-heading-one{
        font-size: ' . $styledata[50] . 'px;
        ' . OxiAddonsFontSettings($styledata, 54) . ';
        color: ' . $styledata[60] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 62) . ';
        line-height: 1;
        width: 100%;
        float: left;
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper .oxi-addons-heading-two{
        font-size: ' . $styledata[83] . 'px;
        ' . OxiAddonsFontSettings($styledata, 87) . ';
        color: ' . $styledata[93] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 95) . ';
        line-height: 1;
        width: 100%;
        float: left;
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper .oxi-addons-details{
        font-size: ' . $styledata[116] . 'px;
        ' . OxiAddonsFontSettings($styledata, 120) . ';
        color: ' . $styledata[126] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 128) . ';
        width: 100%;
        float: left; 
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper .oxi-addons-button{
        width: 100%;
        float: left;
        text-align: ' . $styledata[149] . ';
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper .oxi-addons-button .oxi-addons-button-link{
        background: ' . $styledata[185] . ';
        color: ' . $styledata[187] . ';
        display: inline-block;
        ' . OxiAddonsFontSettings($styledata, 193) . ';
        font-size: ' . $styledata[189] . 'px;
        border:  ' . $styledata[215] . 'px ' . $styledata[216] . ';
        border-color: ' . $styledata[219] . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 199) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 153) . ';
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 169) . ';
        ' . OxiAddonsBoxShadowSanitize($styledata, 221) . ';
    }
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button .oxi-addons-button-link:hover{
        background: ' . $styledata[234] . ';
        color: ' . $styledata[232] . ';
        ' . OxiAddonsBoxShadowSanitize($styledata, 240) . ';
        border-color: ' . $styledata[236] . ';
    }

    @media only screen and (min-width : 669px) and (max-width : 993px){
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-overlay{       
            max-width:' . $styledata[247] . 'px;
        }
        .oxi-addons-parent-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . '; 
        }  
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper{ 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';  
    
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper .oxi-addons-heading-one{
            font-size: ' . $styledata[51] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . '; 
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper .oxi-addons-heading-two{
            font-size: ' . $styledata[84] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 96) . '; 
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper .oxi-addons-details{
            font-size: ' . $styledata[117] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . '; 
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper .oxi-addons-button{ 
            text-align: ' . $styledata[150] . ';
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper .oxi-addons-button .oxi-addons-button-link{ 
            font-size: ' . $styledata[190] . 'px;
            border:  ' . $styledata[216] . 'px ' . $styledata[217] . '; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 154) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 170) . '; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 200) . ';
        } 
    }
    @media only screen and (max-width : 668px){
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-overlay{       
            max-width:' . $styledata[248] . 'px;
        }
        oxi-addons-parent-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . '; 
        }  
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper{ 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';  
    
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper .oxi-addons-heading-one{
            font-size: ' . $styledata[52] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 64) . '; 
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper .oxi-addons-heading-two{
            font-size: ' . $styledata[85] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 97) . '; 
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper .oxi-addons-details{
            font-size: ' . $styledata[118] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . '; 
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper .oxi-addons-button{ 
            text-align: ' . $styledata[151] . ';
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper .oxi-addons-button .oxi-addons-button-link{ 
            font-size: ' . $styledata[191] . 'px;
            border:  ' . $styledata[217] . 'px ' . $styledata[218] . '; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 155) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 171) . '; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 201) . ';
        } 
         
    }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
