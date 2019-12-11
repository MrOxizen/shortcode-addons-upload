<?php

namespace SHORTCODE_ADDONS_UPLOAD\Image_accordion\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_3
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_3 extends Templates {

    public function public_jquery() {
        $this->JSHANDLE = 'jquery_image_accordion_style3';
        wp_enqueue_script('jquery_image_accordion_style3', SA_ADDONS_UPLOAD_URL . 'Image_accordion/File/jquery_image_accordion.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function default_render($style, $child, $admin) {

        $datas = (array_key_exists('sa_image_accordion_data', $style) && is_array($style['sa_image_accordion_data']) ? $style['sa_image_accordion_data'] : []);
     

        echo '<div class="oxi-addons-wrapper-image-accordion-three">
                <div class="oxi-addons-accordion">
                    <section id="oxi-addons-slider">
                            <div class="oxi-addons-slider-content">';
        foreach ($datas as $key => $value) {
            echo '<div class="oxi-addons-image oxi-addons-image-first">
                                            <div class="oxi-addons-slider-item">
                                                <div class="oxi-addons-item-img-1" data-src="' . $this->media_render('sa_image_accordion_image_1', $value) . '"></div>
                                                <div class="oxi-addons-item-img-2" data-src="' . $this->media_render('sa_image_accordion_image_2', $value) . '"></div>
                                            </div>
                                            <span class="oxi-addons-image-text oxi-addons-heading"> ' . $this->text_render($value['sa_image_accordion_item_title']) . '</span>
                              </div>';
        }
        echo '      </div>
                </section>
            </div>
         </div>';
    }

    public function inline_public_jquery() {
        $jquery = ''; 
        $jquery .= 'jQuery(".oxi-addons-admin-absulote").addClass("oxi-addons-permission-class"); ';
        return $jquery;
    }

    public function old_render() {

        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        wp_enqueue_style('jquery_image_old_accordion_style3', SA_ADDONS_UPLOAD_URL . '/Image_accordion/File/style.css', True, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_script('jquery_image_old_accordion_js3', SA_ADDONS_UPLOAD_URL . '/Image_accordion/File/jquery_image_accordion.js', false, SA_ADDONS_PLUGIN_VERSION);
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';
        $jquery = '';

        echo '<div class="oxi-addons-container">
		<div class="oxi-addons-row">
            <div class="oxi-addons-wrapper-' . $oxiid . '">
                <div class="oxi-addons-accordion">
                    <section id="oxi-addons-slider">
                            <div class="oxi-addons-slider-content">';
        foreach ($listdata as $key => $value) {
            $data = explode('||#||', $value['files']);
            echo ' <div class="oxi-addons-image oxi-addons-image-first">
                                                            <div class="oxi-addons-slider-item">
                                                                <div class="oxi-addons-item-img-1" data-src="' . OxiAddonsUrlConvert($data[1]) . '"></div>
                                                                <div class="oxi-addons-item-img-2" data-src="' . OxiAddonsUrlConvert($data[3]) . '"></div>
                                                            </div>
                                                                <span class="oxi-addons-image-text oxi-addons-heading">   ' . OxiAddonsTextConvert($data[5]) . '</span>';

            echo '</div>';
        }
        echo '</div>
                     </section>
                </div>
            </div>
            </div>
        </div>';

        $jquery .= '
         jQuery(".oxi-addons-admin-absulote").addClass("oxi-addons-permission-class"); 
    ';

        $css .= '
    .oxi-addons-permission-class{
        left: 0 !important;
        top: 15px !important;
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
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-image-text{
        left: -30%;
    } 
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-image:last-child .oxi-addons-image-text{
        left: -30%;
    }
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-image:first-child .oxi-addons-image-text{
        left: -15%;
    }
    .oxi-addons-wrapper-' . $oxiid . '  #oxi-addons-slider,
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-slider-content,
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-image,
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-slider-item,
   .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-item-img-1,
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-item-img-2{ 
       height:' . $styledata[7] . 'px;
    } 
   .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-item-img-1,
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-item-img-2{ 
      width: 150%;
    }
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-accordion {
        width: 100%;
        max-width:' . $styledata[3] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';   
    } 
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion  .oxi-addons-heading {
        font-size: ' . $styledata[27] . 'px;
        ' . OxiAddonsFontSettings($styledata, 31) . ';
        color: ' . $styledata[37] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . '; 
        width: 100%;
        float: left;
    }  
@media only screen and (min-width : 669px) and (max-width : 993px){   
    .oxi-addons-wrapper-' . $oxiid . '  #oxi-addons-slider,
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-slider-content,
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-image,
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-slider-item
    {
       height:' . $styledata[8] . 'px;
    }
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-accordion { 
        max-width:' . $styledata[4] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 12) . ';   
    } 
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion  .oxi-addons-heading {
        font-size: ' . $styledata[28] . 'px; 
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 40) . ';  
    }     
}
@media only screen and (max-width : 668px){  
    .oxi-addons-wrapper-' . $oxiid . '  #oxi-addons-slider,
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-slider-content,
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-image,
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-slider-item
    {
       height:' . $styledata[9] . 'px;
    }
    .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-accordion { 
        max-width:' . $styledata[5] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ';   
    } 
    .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-accordion  .oxi-addons-heading {
        font-size: ' . $styledata[29] . 'px; 
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';  
    }
    

}';
        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('jquery_image_old_accordion_js3', $jquery);
    }

}
