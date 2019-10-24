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

class Style_3 extends Templates {

//    public function public_css() {
//        wp_enqueue_style('oxi-addons-main-wrapper-image-comparison-style-1', SA_ADDONS_UPLOAD_URL . '/Image_comparison/File/twentytwenty.css', false, SA_ADDONS_PLUGIN_VERSION);
//    }

    public function default_render($style, $child, $admin) {
        $text1 = $text2 = '';
        if ($style['sa_animated_text_main_text'] != '') {
            $text1 = ' <span class="oxi-addons-text1">' . $this->text_render($style['sa_animated_text_main_text']) . '</span>';
        }
        if ($style['sa_animated_text'] != '') {
            $text2 = ' <span class="oxi-addons-text2">' . $this->text_render($style['sa_animated_text']) . '</span>';
        }
        $styledata = $this->style;
        $id = $styledata['shortcode-addons-elements-id'];
        echo '<div class="oxi-addons-animet-text-style-3">
                <div class="oxi-addons-text">
                    <div class="oxi-addons-text-body">
                        ' . $text1 . '
                        ' . $text2 . '
                    </div>
                </div>
            </div>';
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $text1 = $text2 = '';
        if ($stylefiles[3] != '') {
            $text1 = ' <span class="oxi-addons-text1">' . OxiAddonsTextConvert($stylefiles[3]) . '</span>';
        }
        if ($stylefiles[5] != '') {
            $text2 = ' <span class="oxi-addons-text2">' . OxiAddonsTextConvert($stylefiles[5]) . '</span>';
        }
        echo '<div class="oxi-addons-container">
                    <div class="oxi-addons-row">
                        <div class="oxi-addons-animet-text-' . $oxiid . '">
                            <div class="oxi-addons-text">
                                <div class="oxi-addons-text-body">
                                    ' . $text1 . '
                                    ' . $text2 . '
                                 </div>
                            </div>
                        </div>
                    </div>                
            </div>';
        $css = '
            .oxi-addons-animet-text-' . $oxiid . '{
                width: 100%;
                height:auto;
                float: left;
            }
            .oxi-addons-animet-text-' . $oxiid . ' .oxi-addons-text{
                position: relative;
            }
            .oxi-addons-animet-text-' . $oxiid . ' .oxi-addons-text-body{
                text-align: center;
                width: 100%;
            }
           .oxi-addons-animet-text-' . $oxiid . '  .oxi-addons-text-body span{
                text-transform: uppercase;
                display: block;
            }
            .oxi-addons-animet-text-' . $oxiid . ' .oxi-addons-text1{
                color: ' . $styledata[5] . ';
                font-size:  ' . $styledata[7] . 'px;
                ' . OxiAddonsFontSettings($styledata, 11) . ';
                letter-spacing: 8px;
                position: relative;
                animation: text ' . $styledata[3] . 's 1;
            }
            .oxi-addons-animet-text-' . $oxiid . ' .oxi-addons-text2{
                color: ' . $styledata[17] . ';
                font-size:  ' . $styledata[19] . 'px;
                animation: text2 ' . $styledata[3] . 's 1;
                    ' . OxiAddonsFontSettings($styledata, 23) . ';
            }
            
            @keyframes text2 {
                0%{        
                   
                    color: rgba(255,89,89,0.00);
                    opacity: 0;
                }
                30%{
              
                    color: #fff;
                    opacity: 0;

                }
                86%{
                 color: #fff;
                    opacity: 0;
                }
            }
            @keyframes text {

                0%{
                    
                    margin-bottom: -40px;
                    
                }
                30%{
                    letter-spacing: 25px;
                    margin-bottom: -40px;
                }
                85%{
                    letter-spacing: 8px;
                    margin-bottom: -40px;
                }
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-animet-text-' . $oxiid . '{
                    width: 100%;
                    height:auto;
                }
                .oxi-addons-animet-text-' . $oxiid . ' .oxi-addons-text1{
                    font-size:  ' . $styledata[8] . 'px;
                    text-align: center;
                }
                .oxi-addons-animet-text-' . $oxiid . ' .oxi-addons-text2{
                    font-size:  ' . $styledata[20] . 'px;
                    text-align: center;
                }

            }
            @media only screen and (max-width : 668px){
                .oxi-addons-animet-text-' . $oxiid . '{
                    width: 100%;
                    height:auto;
                }
                .oxi-addons-animet-text-' . $oxiid . ' .oxi-addons-text1{
                    font-size:  ' . $styledata[9] . 'px;
                    text-align: center;
                }
                .oxi-addons-animet-text-' . $oxiid . ' .oxi-addons-text2{
                    font-size:  ' . $styledata[21] . 'px;
                    text-align: center;
                }
            }

            ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
