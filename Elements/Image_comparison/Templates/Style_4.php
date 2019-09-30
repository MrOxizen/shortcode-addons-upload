<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Image_comparison\Templates;

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

class Style_4 extends Templates {

    public function default_render($style, $child, $admin) {
        $id = $style['shortcode-addons-elements-id'];
        echo '<div class="oxi_addons_image_style_4_box">
            
                    <div class="oxi_addons_image_style_4_box_body">
                        <div class="oxi_addons_hover_view_img" style="background: url(\'' . $this->media_render('sa-image-comparison-image-one', $style) . '\') no-repeat fixed;">';
                            $width = 100;
                            $loop = $style['sa-image-comparison-hover-width-size'];
                            $pwidth = $width / $loop;
                            for ($i = 0; $i < $loop; $i++) {
                                echo'<div class="oxi_addons_font_view_img" style="background: url(\'' . $this->media_render('sa-image-comparison-image-two', $style) . '\') no-repeat fixed;"></div>';
                            }
                    echo'</div>
                    </div>
                </div>';
    }

    public function old_render() {
        $style = $this->dbdata;
        $oxiid = $style['id'];
    $stylefiles = explode('||#||', $style['css']);
    $styledata = explode('|', $stylefiles[0]);
    echo'<div class="oxi-addons-container">
            <div class="oxi-addons-row">
                <div class="oxi_addons_image_'.$oxiid.'_box">
                    <div class="oxi_addons_image_'.$oxiid.'_box_body">
                        <div class="oxi_addons_hover_view_img">';
                            $width = 100;
                            $loop = $styledata[7];
                            $pwidth = $width / $loop;
                            for ($i = 0; $i < $loop; $i++) {
                                echo'<div class="oxi_addons_font_view_img"></div>';
                            }
                    echo'</div>
                    </div>

                </div>
            </div>
        </div>';
    $css='
        .oxi_addons_image_'.$oxiid.'_box {
            max-width: '.$styledata[3].'px;
            margin: 0 auto;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . '; 
        }
        .oxi_addons_image_'.$oxiid.'_box_body{
            width:100%;
            position: relative;   
        }
        .oxi_addons_image_'.$oxiid.'_box_body:after{
           display:block;
           content:"";
           padding-bottom:'.(500 /$styledata[3] * 100).'%;
        }
        .oxi_addons_image_'.$oxiid.'_box .oxi_addons_hover_view_img {
            white-space: nowrap;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            background: url("' . OxiAddonsUrlConvert($stylefiles[4]) . '") no-repeat fixed;
            background-position: center center;
            background-size: cover;
            z-index: 5;
            font-size: 0;
        }
        .oxi_addons_image_'.$oxiid.'_box .oxi_addons_font_view_img {
            width: '.$pwidth.'%;
            height: 100%;
            display: inline-block;
            position: relative;
            z-index: 6;
            padding: 2px;
            transition: all '.$styledata[27].'s ease-in-out;
            background: url("' . OxiAddonsUrlConvert($stylefiles[2]) . '") no-repeat fixed;
            background-size: cover;
            background-position: center center;
            border-radius: 0%;
            cursor: pointer;
        }
        .oxi_addons_image_'.$oxiid.'_box .oxi_addons_font_view_img:hover {
            transition: all 0s linear; 
            opacity: 0;
        }
        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi_addons_image_'.$oxiid.'_box {
                max-width: '.$styledata[4].'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 12) . '; 
            }
            .oxi_addons_image_'.$oxiid.'_box_body:after{
               display:block;
               content:"";
               padding-bottom:'.(500 /$styledata[4] * 100).'%;
            }
            .oxi_addons_image_'.$oxiid.'_box .oxi_addons_font_view_img {
                transition: all '.$styledata[28].'s ease-in-out;
            }    
        }
        @media only screen and (max-width : 668px){
        
            .oxi_addons_image_'.$oxiid.'_box {
                max-width: '.$styledata[5].'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . '; 
            }
            .oxi_addons_image_'.$oxiid.'_box_body:after{
               display:block;
               content:"";
               padding-bottom:'.(500 /$styledata[5] * 100).'%;
            }  
            .oxi_addons_image_'.$oxiid.'_box .oxi_addons_font_view_img {
                transition: all '.$styledata[29].'s ease-in-out;
            }   
            
        }';
         wp_add_inline_style('shortcode-addons-style', $css);
    }

}
