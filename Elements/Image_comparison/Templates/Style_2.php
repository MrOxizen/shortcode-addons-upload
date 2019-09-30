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

class Style_2 extends Templates {

    public function public_css() {
        wp_enqueue_style('oxi-addons-main-wrapper-image-comparison-style-2', SA_ADDONS_UPLOAD_URL . '/Elements/Image_comparison/File/BeerSlider.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function default_render($style, $child, $admin) {
        $id = $style['shortcode-addons-elements-id'];
        
        echo '<div class="oxi-addons-main-wrapper-image-comparison-style-2">
				  <div class="oxi-addons-main">
                                        <div id="oxi-addons-beer-image-comparison-'.$id.'" style="width:100%" class="beer-slider" data-beer-label="' . $this->text_render($style['sa-image-comparison-before-text']) . '">
						<img src="' . $this->media_render('sa-image-comparison-image-one', $style) . '" alt="">
						<div class="beer-reveal" data-beer-label="' . $this->text_render($style['sa-image-comparison-after-text']) . '">
							<img src="' . $this->media_render('sa-image-comparison-image-two', $style) . '" alt="">
						</div>
					</div>
				  </div>
				</div>';
    }

    public function public_jquery() {
        $this->JSHANDLE = 'jquery-BeerSlider';
        wp_enqueue_script('jquery-BeerSlider', SA_ADDONS_UPLOAD_URL . '/Elements/Image_comparison/File/BeerSlider.js', true, SA_ADDONS_PLUGIN_VERSION);
      }

    public function inline_public_jquery() {
        $jquery = '';
        $styledata = $this->style;
        $id = $styledata['shortcode-addons-elements-id'];
       

        $jquery .= ' 
                $.fn.BeerSlider = function ( options ) {
                            options = options || {};
                            return this.each(function() {
                            new BeerSlider(this, options);
                            });
                        };
                       $("#oxi-addons-beer-image-comparison-'.$id.'").BeerSlider({start: ' . $styledata['sa-image-comparison-body-offset'] . '});
                                 ';
        return $jquery;
    }

    public function old_render() {
        $style = $this->dbdata;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
 
        wp_enqueue_style('BeerSlider', SA_ADDONS_UPLOAD_URL . '/Elements/Image_comparison/File/BeerSlider.css', false, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_script('BeerSlider-js', SA_ADDONS_UPLOAD_URL . '/Elements/Image_comparison/File/BeerSlider.js', false, SA_ADDONS_PLUGIN_VERSION);
        

        $css = $jquery = '';


        echo '<div class="oxi-addons-container">
			<div class="oxi-addons-row">
				<div class="oxi-addons-main-wrapper-' . $oxiid . ' "  >
				  <div class="oxi-addons-main"> 
					<div id="oxi-addons-beer-' . $oxiid . '" class="beer-slider" data-beer-label="' . $stylefiles[2] . '">
						<img src="' . OxiAddonsUrlConvert($stylefiles[6]) . '" alt="">
						<div class="beer-reveal" data-beer-label="' . $stylefiles[4] . '">
							<img src="' . OxiAddonsUrlConvert($stylefiles[8]) . '" alt="">
						</div>
					</div>
				  </div>
				</div>
			</div>
        </div>
        ';

        $jquery .= ' 
        	  jQuery.fn.BeerSlider = function ( options ) {
                    options = options || {};
                    return this.each(function() {
                    new BeerSlider(this, options);
                    });
                };
               jQuery("#oxi-addons-beer-' . $oxiid . '").BeerSlider({start: ' . $styledata[23] . '});
			 ';

        $css .= '
        .oxi-addons-main-wrapper-' . $oxiid . '{ 
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';  
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main{
             width: ' . $styledata[3] . 'px;
             max-width: 100%;
             margin: 0 auto;
        } 
        .oxi-addons-main-wrapper-' . $oxiid . ' .beer-reveal[data-beer-label]::after,
         .oxi-addons-main-wrapper-' . $oxiid . ' .beer-slider[data-beer-label]::after {
                  background: ' . $styledata[41] . ' !important;
            color: ' . $styledata[39] . ' !important;
            display: inline-block;
            ' . OxiAddonsFontSettings($styledata, 49) . ' !important;
            font-size: ' . $styledata[35] . 'px !important;
            border:  ' . $styledata[43] . 'px ' . $styledata[44] . ' !important; 
            border-color: ' . $styledata[47] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 55) . ' !important;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ' !important;
        } 
        .oxi-addons-main-wrapper-' . $oxiid . ' .beer-handle {
            width: ' . $styledata[87] . 'px;
            height: ' . $styledata[91] . 'px;
            background: ' . $styledata[25] . ' !important; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 95) . ' !important;
        } 
        .oxi-addons-main-wrapper-' . $oxiid . ' .beer-handle::after,
        .oxi-addons-main-wrapper-' . $oxiid . ' .beer-handle::before { 
            color: ' . $styledata[27] . ' !important;  
        }
        #oxi-addons-beer-' . $oxiid . '{ 
            width: 100%; 
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .beer-slider>img{
            width: 100% !important
        } 
        @media only screen and (min-width : 669px) and (max-width : 993px){
           .oxi-addons-main-wrapper-' . $oxiid . '{  
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';  
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main{
                width: ' . $styledata[4] . 'px; 
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .beer-reveal[data-beer-label]::after, .beer-slider[data-beer-label]::after { 
                font-size: ' . $styledata[36] . 'px !important; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 56) . ' !important;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 72) . ' !important;
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .beer-handle {
                width: ' . $styledata[88] . 'px;
                height: ' . $styledata[92] . 'px; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 96) . ' !important;
            }  
        }
        @media only screen and (max-width : 668px){
          
            .oxi-addons-main-wrapper-' . $oxiid . '{  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';  
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main{
                width: ' . $styledata[5] . 'px; 
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .beer-reveal[data-beer-label]::after, .beer-slider[data-beer-label]::after { 
                font-size: ' . $styledata[37] . 'px !important; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 57) . ' !important;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ' !important;
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .beer-handle {
                width: ' . $styledata[89] . 'px;
                height: ' . $styledata[93] . 'px; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 97) . ' !important;
            } 
        }
    ';
        wp_add_inline_style('BeerSlider', $css);
        wp_add_inline_script('BeerSlider-js', $jquery);
    }

}
