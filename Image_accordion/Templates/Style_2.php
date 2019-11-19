<?php

namespace SHORTCODE_ADDONS_UPLOAD\Image_accordion\Templates;

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

class Style_2 extends Templates
{



    public function default_render($style, $child, $admin)
    {



        $datas = (array_key_exists('sa_image_accordion_data', $style) && is_array($style['sa_image_accordion_data']) ? $style['sa_image_accordion_data'] : []);

        echo '<div class="oxi-addons-wrapper-image-two-accordion">
                <div class="oxi-addons-accordion">
                    <ul class="oxi-addons-accordion-ul">';
        foreach ($datas as $key => $value) {


            if (array_key_exists('sa_image_accordion_url-url', $value) && $value['sa_image_accordion_url-url'] != '') {
                $linkstart = '<a ' . $this->url_render('sa_image_accordion_url', $value) . ' class="oxi-link ' . $style['sa-image_accordion-overlay_animation'] . '" >';
            } else {
                $linkstart = '<div class="oxi-link ' . $style['sa-image_accordion-overlay_animation'] . '">';
            }
            if (array_key_exists('sa_image_accordion_url-url', $value) && $value['sa_image_accordion_url-url'] != '') {
                $linkend = '</a>';
            } else {
                $linkend = '</div>';
            }
            echo '<li class="oxi-addons-background-image-' . $key . '">
                    <div class="oxi-addons-overlay oxi-over-' . $key . '">
                        ' . $linkstart . '
                        <h2 class="oxi-addons-heading">' . $this->text_render($value['sa_icon_accordion_item_title']) . '</h2>
                        <p class="oxi-addons-details" >' . $this->text_render($value['sa_icon_accordion_item_description']) . '</p>
                        ' . $linkend . '
                     </div>
                </li>';
        }
        echo ' </ul>
            </div>
         </div>';
    }

    public function inline_public_css()
    {
        $rt = '';
        $style = $this->style;
        $datas = (array_key_exists('sa_image_accordion_data', $style) && is_array($style['sa_image_accordion_data']) ? $style['sa_image_accordion_data'] : []);

        foreach ($datas as $key => $value) {
            $rt .= $this->background_render('sa_image_accordion_image', $value, '.' . $this->WRAPPER . ' .oxi-addons-background-image-' . $key . '');
        }
        return $rt;
    }

    public function inline_public_jquery()
    {
        $jquery = '';
        $style = $this->style;
        $datas = (array_key_exists('sa_image_accordion_data', $style) && is_array($style['sa_image_accordion_data']) ? $style['sa_image_accordion_data'] : []);

        foreach ($datas as $key => $value) {
            $jquery .= 'jQuery(".oxi-addons-background-image-' . $key . '").on("click",function(){ 
                            jQuery(".oxi-addons-wrapper-image-two-accordion .oxi-addons-accordion-ul").children().removeClass("oxi-addClass");
                            jQuery(this).closest("li").addClass("oxi-addClass");
                            jQuery(".oxi-addons-wrapper-image-two-accordion .oxi-addons-overlay").children().removeClass("oxi-opacity");
                            jQuery(".oxi-over-' . $key . '").children().addClass("oxi-opacity"); 
                    });';
        }
        return $jquery;
    }

    public function old_render()
    {

        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];

        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';
        $jquery = '';

        echo '<div class="oxi-addons-container">
		<div class="oxi-addons-row">
            <div class="oxi-addons-wrapper-' . $oxiid . '">
                <div class="oxi-addons-accordion">
                    <ul class="oxi-addons-accordion-ul">';
        foreach ($listdata as $key => $value) {
            $data = explode('||#||', $value['files']);
            if ($data[7] !== '') {
                $linkstart = '<a href="' . OxiAddonsUrlConvert($data[7]) . '" class="oxi-link" target="' . $styledata[85] . '" >';
            } else {
                $linkstart = '<div class="oxi-link">';
            }
            if ($data[7] !== '') {
                $linkend = '</a>';
            } else {
                $linkend = '</div>';
            }
            echo '<li class="oxi-li-' . $key . '" style="background-image: url(' . OxiAddonsUrlConvert($data[1]) . ')">';
            echo '  
         <div class="oxi-addons-overlay oxi-over-' . $key . '">';
            echo $linkstart;
            echo '<h2 class="oxi-addons-heading">' . OxiAddonsTextConvert($data[3]) . ' </h2>
              <p class="oxi-addons-details" >' . OxiAddonsTextConvert($data[5]) . ' </p>';
            echo $linkend;
            echo '</div>';

            $jquery .= 'jQuery(".oxi-li-' . $key . '").on("click",function(){ 
                            jQuery(".oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion-ul").children().removeClass("oxi-addClass");
                            jQuery(this).closest("li").addClass("oxi-addClass");
                            jQuery(".oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion-ul > li .oxi-addons-overlay").children().removeClass("oxi-opacity");
                            jQuery(".oxi-over-' . $key . '").children().addClass("oxi-opacity"); 
                    });';

            echo '</li>';
        }
        echo '</ul>
            </div>
         </div>
         </div>
    </div>';



        $position = '';
        if ($styledata[25] == 'top') {
            $position = 'justify-content: flex-start;';
        } elseif ($styledata[25] == 'center') {
            $position = 'justify-content: center;';
        } else {
            $position = 'justify-content: flex-end;';
        }
        $animation = '';
        if ($styledata[27] == 'style_1') {
            $animation = '
            -webkit-transform: translateX(500px);
            transform: translateX(500px); 
        ';
        } elseif ($styledata[27] == 'style_2') {
            $animation = '
            -webkit-transform: translateX(-500px);
            transform: translateX(-500px); 
        ';
        } elseif ($styledata[27] == 'style_3') {
            $animation = '
            -webkit-transform: translateY(500px);
            transform: translateY(500px); 
        ';
        } elseif ($styledata[27] == 'style_4') {
            $animation = '
            -webkit-transform: translateY(-500px);
            transform: translateY(-500px); 
        ';
        } else {
            $animation = ' ';
        }
        $css .= '
    .oxi-addClass{
        width: 60% !important
    }
    .oxi-opacity{
        opacity: 1 !important;
        -webkit-transform: translateX(0)!important;
        transform: translateX(0) !important; 
        }
    .oxi-addons-wrapper-' . $oxiid . '{  
        max-width: 100%;
        margin: 0 auto;  
        display: flex;
        justify-content:center;   
    }
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-admin-absulote{  
       z-index: 999;
    }
     
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-accordion {
        width: 100%;
        max-width:' . $styledata[3] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';   
    }
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion .oxi-addons-accordion-ul {
        width: 100%;
        display: table;
        table-layout: fixed;
        margin: 0;
        padding: 0;
    }
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion .oxi-addons-accordion-ul > li {
        display: table-cell;
        vertical-align: bottom;
        position: relative;
        width: 16.666%;
        height: auto;
        background-repeat: no-repeat;
        background-position: center center;
        transition: all 500ms ease;
        background-size: cover;
    }
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion .oxi-addons-overlay {
        display: block;
        overflow: hidden;
        width: 100%;
    }
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion .oxi-addons-overlay{
     
        height: ' . $styledata[87] . 'px;
        width: 100%;
        position: relative;
        z-index: 3;
        vertical-align: bottom; 
        box-sizing: border-box; 
        text-decoration: none;
        font-family: Open Sans, sans-serif;
        transition: all 200ms ease;
    }
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion  .oxi-link {
        display: flex;
        flex-direction: column;
        ' . $position . '
        opacity: 0;  
        height: ' . $styledata[87] . 'px;
        margin: 0;
        width: 100%; 
        position: relative;
        z-index: 5; 
        overflow: hidden;
        ' . $animation . '
        -webkit-transition: all 400ms ease;
        transition: all 400ms ease; 
    }
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion  .oxi-addons-heading {
        font-size: ' . $styledata[29] . 'px;
        ' . OxiAddonsFontSettings($styledata, 33) . ';
        color: ' . $styledata[39] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . '; 
        width: 100%;
        float: left;
    }
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion  .oxi-addons-details {
        font-size: ' . $styledata[57] . 'px;
        ' . OxiAddonsFontSettings($styledata, 61) . ';
        color: ' . $styledata[67] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 69) . '; 
        width: 100%;
        float: left;
    }  
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion .oxi-addons-accordion-ul > li:focus {
        outline: none;
    } 
    .oxi-addons-accordion .oxi-addons-accordion-ul:hover > li:hover .oxi-addons-overlay,
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-accordion .oxi-addons-accordion-ul > li:focus  .oxi-addons-overlay, 
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-accordion .oxi-addons-accordion-ul:focus-within > li:focus  .oxi-addons-overlay{
        background: ' . $styledata[23] . '
    } 
@media only screen and (min-width : 669px) and (max-width : 993px){  
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-accordion { 
        max-width:' . $styledata[4] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';   
    } 
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion .oxi-link { 
        height: ' . $styledata[88] . 'px; 
    }
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion  .oxi-addons-heading {
        font-size: ' . $styledata[30] . 'px; 
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 42) . ';  
    }
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion  .oxi-addons-details {
        font-size: ' . $styledata[58] . 'px; 
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 70) . ';  
    }            
}
@media only screen and (max-width : 668px){  
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-accordion {
        height: auto;
    }  
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-accordion { 
        max-width:' . $styledata[5] . 'px;
          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';   
    } 
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion .oxi-link { 
        height: ' . $styledata[89] . 'px; 
    }
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion  .oxi-addons-heading {
        font-size: ' . $styledata[31] . 'px; 
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 43) . ';  
    }
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion  .oxi-addons-details {
        font-size: ' . $styledata[59] . 'px; 
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';  
    }  
}';
        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }
}
