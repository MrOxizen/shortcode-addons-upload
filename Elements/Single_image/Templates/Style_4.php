<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Single_image\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_4
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_4 extends Templates {

    public function default_render($style, $child, $admin) {
//        echo '<pre>';
//        print_r($style);
//        echo '</pre>';
 
        if($this->media_render('sa_s_image_img', $style) != ''){
        echo ' <div class="oxi-addons-single-image-container" id="' . $style['sa_s_image_ID'] . '">
                            <div class="oxi-addons-single-image-row">
                                <div class="oxi-addons-single-image">
                                    <img src="' . $this->media_render('sa_s_image_img', $style) . '">
                                </div>
                            
                            </div>
                        </div>';
        }else{
            echo '<div style="color : red;">Please Upload an Image !</div>';
        }
    }

    public function old_render() {
        $style = $this->dbdata;
        $child = $this->child;
        $oxiid = $style['id'];
        $css = '';
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        
  
    echo '  <div class="oxi-addons-container">
                <div class="oxi-addons-row">
                    <div class=" oxi-addons-single-image-container-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 79) . ' id="' . $stylefiles[3] . '">
                        <div class="oxi-addons-single-image-row">
                            <div class="oxi-addons-single-image">
                                <img src="' . OxiAddonsUrlConvert($stylefiles[5]) . '">
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    $css .= '.oxi-addons-single-image-container-' . $oxiid . '{
                    display: inline-block;
                    vertical-align: middle;
                    max-width: 100%;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';   
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-row{
                    display: block;
                    vertical-align: middle;
                    max-width: 100%;
                    position: relative;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 3) . ';
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image{
                    display: block;
                    width: 100%;
                    position: relative;
                    ' . OxiAddonsBoxShadowSanitize($styledata, 35) . '
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
                    overflow: hidden;                    
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image img{
                    display: block;
                    width: 100%;
                    height: auto;
                    -webkit-filter: grayscale(' . $styledata[73] . '%);
                    filter: grayscale(' . $styledata[73] . '%);                  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
                    transform:scale(' . $styledata[85] . ');
                    transition: transform ' . $styledata[87] . 's;
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image::before{
                    position: absolute;
                    z-index: 2;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    display: block;
                    content: "";
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                    -webkit-transition: inherit;
                    transition: inherit;
                    background: ' . $styledata[83] . ';                   
                }
                 .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image:hover{
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 57) . ';
                    ' . OxiAddonsBoxShadowSanitize($styledata, 91) . '
                    over-flow:hidden;
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image:hover img{
                    -webkit-filter: grayscale(' . $styledata[75] . '%);
                    filter: grayscale(' . $styledata[75] . '%);
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 57) . '; 
                    transform:scale(' . $styledata[89] . ');
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image:hover::before{
                    background: ' . $styledata[77] . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 57) . ';                        
                }
                ';
   
        wp_add_inline_style('shortcode-addons-style', $css);
       
    }

}
