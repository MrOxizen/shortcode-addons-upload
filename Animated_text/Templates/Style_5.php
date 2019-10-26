<?php

namespace SHORTCODE_ADDONS_UPLOAD\Animated_text\Templates;

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

class Style_5 extends Templates {

//    public function public_css() {
//        wp_enqueue_style('oxi-addons-main-wrapper-image-comparison-style-1', SA_ADDONS_UPLOAD_URL . '/Image_comparison/File/twentytwenty.css', false, SA_ADDONS_PLUGIN_VERSION);
//    }

    public function default_render($style, $child, $admin) {
        $text1 = $text2 = '';

        $styledata = $this->style;
        $id = $styledata['shortcode-addons-elements-id'];
        echo '<div class="oxi-addons-animet-text-style-5">
                        <div class="oxi-animet-text-body-style-5">
                            <div class="oxi-animet-text-text-style-5">
                              <div class="oxi-animet-text-style-5-h1">';
        $str1 = $this->text_render($styledata['sa_animated_text']);
        for ($i = 0; $i <= strlen($str1) - 1; $i++) {
            echo '<span>' . $str1[$i] . '</span>';
        }
        echo '</div>
                            </div>
                        </div>
                    </div>';
    }

    public function inline_public_css() {
        $css = '';
        $styledata = $this->style;
        $styleaminatio = $styledata ['sa_animated_text_animation_loop'];
        $styleaminatiospeed = $styledata ['sa-animated_text_speed-size'];
        if ($styleaminatio == 'yes') {
            $css .= '.'.$this->WRAPPER.' .oxi-animet-text-style-5-h1 span{animation: bounce ' . $styleaminatiospeed . 's ease infinite alternate;}';
        } else {
            $css .= '.'.$this->WRAPPER.' .oxi-animet-text-style-5-h1 span{animation: bounce ' . $styleaminatiospeed . 's ease alternate;}';
        }
        $str1 = $this->text_render($styledata['sa_animated_text']);
        for ($k = 0; $k <= strlen($str1); $k++) {
            $css .= '.oxi-animet-text-style-5-h1 span:nth-child(' . $k . ') {
                              animation-delay: ' . $k . 's;
                        }';
            return $css;
        }
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';

        echo '<div class="oxi-addons-container">  
                <div class="oxi-addons-row">
                    <div class="oxi-addons-animet-text-' . $oxiid . '">
                        <div class="oxi-animet-text-body-' . $oxiid . '">
                            <div class="oxi-animet-text-text-' . $oxiid . '">
                              <div class="oxi-animet-text-' . $oxiid . '-h1">';
        $str1 = $stylefiles[3];
        for ($i = 0; $i <= strlen($str1) - 1; $i++) {
            echo '<span>' . $str1[$i] . '</span>';
        }
        echo '</div>
                            </div>
                        </div>
                    </div>
                </div>
            
         </div>';

        for ($k = 0; $k <= strlen($str1); $k++) {
            $css .= '.oxi-animet-text-' . $oxiid . '-h1 span:nth-child(' . $k . ') {
                              animation-delay: ' . $k . 's;
                        }';
        }
        $css .= '
            .oxi-addons-animet-text-' . $oxiid . '{
                width: 100%;
                height:auto;
                float: left;
                ' . OxiAddonsFontSettings($styledata, 11) . '; 
            } 
             .oxi-addons-animet-text-' . $oxiid . ' .oxi-animet-text-' . $oxiid . '-h1 {
                cursor: default;
                top: 0;
                left: 40%;
                right: 0;
                bottom: 0;
                width: 100%;
                height: 100%;
                margin: auto;
                display: block;
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
              }
              .oxi-animet-text-' . $oxiid . '-h1 span {
                top: 20px;
                display: inline-block;
                animation: bounce ' . $styledata[3] . 's ease ' . $styledata[33] . ' alternate;
                font-size: ' . $styledata[7] . 'px;
                color: ' . $styledata[5] . ';
               
               }
              @-webkit-keyframes bounce {
                100% {
                  top: -20px;
                  text-shadow: 0 1px 0 #ccc, 0 2px 0 #ccc, 0 3px 0 #ccc, 0 4px 0 #ccc,
                    0 5px 0 #ccc, 0 6px 0 #ccc, 0 7px 0 #ccc, 0 8px 0 #ccc, 0 9px 0 #ccc,
                    0 50px 25px rgba(0, 0, 0, 0.2);
                }
              } 
              @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-animet-text-' . $oxiid . '-h1 {
                  padding:' . OxiAddonsPaddingMarginSanitize($styledata, 18) . ';
                } 
                .oxi-animet-text-' . $oxiid . '-h1 span {
                  font-size: ' . $styledata[8] . 'px;
                 }
            }
            @media only screen and (max-width : 668px){
                .oxi-animet-text-' . $oxiid . '-h1 {
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';
              } 
              .oxi-animet-text-' . $oxiid . '-h1 span {
                font-size: ' . $styledata[9] . 'px;
              }
            }
            ';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
