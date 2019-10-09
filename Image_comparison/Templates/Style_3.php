<?php

namespace SHORTCODE_ADDONS_UPLOAD\Image_comparison\Templates;

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

class Style_3 extends Templates {

    public function public_css() {
        wp_enqueue_style('oxi-addons-main-wrapper-image-comparison-style-3', SA_ADDONS_UPLOAD_URL . '/Image_comparison/File/mbac.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function default_render($style, $child, $admin) {
        $id = $style['shortcode-addons-elements-id'];
        $styledata = $this->style;

        echo '<div class="oxi-addons-main-wrapper-image-comparison-style-3">
				  <div class="oxi-addons-main">
                                        <div style="width:100%" id="oxi-addons-mbac-' . $id . '"  class="mbac-wrap"> 
						<ul class="mbac">';
                                                foreach ($styledata['sa_image_comparison_data'] as $key => $value) {
                                                    echo '<li><img src="' . $this->media_render('sa_image_accordion_image', $value) . ' " alt="Image Comparison"></li>';
                                                }
						echo '</ul> 
					</div>
				  </div>
				</div>';
    }

    public function public_jquery() {
        $this->JSHANDLE = 'jquery-mbac';
        wp_enqueue_script('jquery-mbac', SA_ADDONS_UPLOAD_URL . '/Image_comparison/File/mbac.js', true, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery() {
        $jquery = '';
        $styledata = $this->style;
        $id = $styledata['shortcode-addons-elements-id'];


        $jquery .= ' jQuery("#oxi-addons-mbac-' . $id . '").mbac() ';
        return $jquery;
    }

    public function old_render() {
        $style = $this->dbdata;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);

        
        wp_enqueue_style('mbac', SA_ADDONS_UPLOAD_URL . '/Image_comparison/File/mbac.css', false, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_script('mbac-js', SA_ADDONS_UPLOAD_URL . '/Image_comparison/File/mbac.js', false, SA_ADDONS_PLUGIN_VERSION);
        

        $css = $jquery = '';
        $img1 = $img2 = $img3 = $img4 = '';
        if ($stylefiles[2] != '') {
            $img1 = ' <li><img src="' . OxiAddonsUrlConvert($stylefiles[2]) . '" alt="Image Comparison"></li>';
        }
        if ($stylefiles[4] != '') {
            $img2 = ' <li><img src="' . OxiAddonsUrlConvert($stylefiles[4]) . '" alt="Image Comparison"></li>';
        }
        if ($stylefiles[6] != '') {
            $img3 = ' <li><img src="' . OxiAddonsUrlConvert($stylefiles[6]) . '" alt="Image Comparison"></li>';
        }
        if ($stylefiles[8] != '') {
            $img4 = ' <li><img src="' . OxiAddonsUrlConvert($stylefiles[8]) . '" alt="Image Comparison"></li>';
        }

        echo '<div class="oxi-addons-container">
			<div class="oxi-addons-row">
				<div class="oxi-addons-main-wrapper-' . $oxiid . ' "  >
				  <div class="oxi-addons-main"> 
				   <div id="oxi-addons-mbac-' . $oxiid . '"  class="mbac-wrap"> 
						<ul class="mbac">
							' . $img1 . '
							' . $img2 . '
							' . $img3 . '  
							' . $img4 . '
						</ul> 
					</div>
				  </div>
				</div>
            </div>
        </div>
        ';

        $jquery .= ' jQuery("#oxi-addons-mbac-' . $oxiid . '").mbac() ';

        $css .= '
        .oxi-addons-main-wrapper-' . $oxiid . '{ 
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';  
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' *{
                transition: none;
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main{
             width: ' . $styledata[3] . 'px;
             max-width: 100%;
             margin: 0 auto;
        } 
        .oxi-addons-main-wrapper-' . $oxiid . ' .mbac .mbac-slide{
            list-style-type: none;
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .mbac .mbac-slide > img{
             max-width: none;
        } 
        #oxi-addons-beforeafter-' . $oxiid . ' {
             max-width: 100%;
             margin: 0 auto;
        }
       #oxi-addons-beforeafter-' . $oxiid . ' img{
             width: 100%;
        }
       

        @media only screen and (min-width : 669px) and (max-width : 993px){
           .oxi-addons-main-wrapper-' . $oxiid . '{  
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';  
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main{
                width: ' . $styledata[4] . 'px; 
            } 
           
        }
        @media only screen and (max-width : 668px){
          
            .oxi-addons-main-wrapper-' . $oxiid . '{  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';  
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main{
                width: ' . $styledata[5] . 'px; 
            } 
            
        }
    ';
        wp_add_inline_style('mbac', $css);
        wp_add_inline_script('mbac-js', $jquery);
    }

}
