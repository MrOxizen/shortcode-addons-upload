<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Link_effects\Templates;

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

class Style_11 extends Templates {

    public function default_render($style, $child, $admin) {

        $text = $this->text_render($style['sa_link_text']);

        echo ' <div class="link-effect-main-style11">
                   <a ' . $this->url_render('sa_link_link', $style) . 'class="oxi-links-effects-style11" ' . $this->animation_render('sa_link_animation', $style) . '>' . $text . '</a>
                </div>';
    }

    public function old_render() {
        $style = $this->dbdata;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        $href = '';
        $target = '';
        if ($stylefiles[7] != '') {
            $href = 'href="' . OxiAddonsUrlConvert($stylefiles[7]) . '"';
            if ($styledata[1] != '') {
                $target = 'target="' . $styledata[1] . '"';
            }
        }
        echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">
                <div class="link-effect-main-' . $oxiid . '">    
                    <a ' . $target . ' ' . $href . '  class="oxi-links-effects-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 35) . ' id="' . $stylefiles[5] . '">' . oxi_addons_html_decode($stylefiles[3]) . '</a>
                </div>
            </div>
          </div>';
        $css = '
            .oxi-addons-container .link-effect-main-' . $oxiid . '{
                width: 100%;
                float: left;
                display: flex;
                justify-content: center;
            } 
            .oxi-addons-container .oxi-links-effects-' . $oxiid . '{  
                    position: relative;
                    display: inline-block;                    
                    outline: none;
                    cursor:pointer;
                    color: ' . $styledata[7] . ';
                    text-decoration: none;
                    font-family:  ' . oxi_addons_font_familly($styledata[13]) . ';                    
                    font-weight: ' . $styledata[15] . ';
                    font-style:  ' . $styledata[17] . ';
                    font-size: ' . $styledata[3] . 'px;
                    padding: ' . $styledata[19] . 'px ' . $styledata[23] . 'px;
                    margin: ' . $styledata[27] . 'px ' . $styledata[31] . 'px;
                    
               }
               .oxi-addons-container  .oxi-links-effects-' . $oxiid . ':hover, 
               .oxi-addons-container  .oxi-links-effects-' . $oxiid . ':focus {
                    outline: none;
                    color: ' . $styledata[9] . ';
                    text-decoration: none;
               }               
                .oxi-addons-container .oxi-links-effects-' . $oxiid . '::before,
                .oxi-addons-container .oxi-links-effects-' . $oxiid . '::after{
                    position: absolute;
                    width: ' . ($styledata[3] + $styledata[19] * 2) . 'px;
                    height: ' . $styledata[43] . 'px;
                    background: ' . $styledata[11] . ';
                    content: "";
                    -webkit-transition: all 0.3s;
                    -moz-transition: all 0.3s;
                    transition: all 0.3s;
                    pointer-events: none;
                }
                .oxi-addons-container .oxi-links-effects-' . $oxiid . '::before {
                    top: 0;
                    left: 0;
                    -webkit-transform: rotate(90deg);
                    -moz-transform: rotate(90deg);
                    transform: rotate(90deg);
                    -webkit-transform-origin: 0 0;
                    -moz-transform-origin: 0 0;
                    transform-origin: 0 0;
                }
                .oxi-addons-container .oxi-links-effects-' . $oxiid . '::after {
                    right: 0;
                    bottom: 0;
                    -webkit-transform: rotate(90deg);
                    -moz-transform: rotate(90deg);
                    transform: rotate(90deg);
                    -webkit-transform-origin: 100% 0;
                    -moz-transform-origin: 100% 0;
                    transform-origin: 100% 0;
                }
                .oxi-addons-container .oxi-links-effects-' . $oxiid . ':hover::before, 
                .oxi-addons-container .oxi-links-effects-' . $oxiid . ':focus::before{
                    left: 50%;
                    background: ' . $styledata[47] . ';
                    -webkit-transform: rotate(0deg) translateX(-50%);
                    -moz-transform: rotate(0deg) translateX(-50%);
                    transform: rotate(0deg) translateX(-50%);
                }                
                .oxi-addons-container .oxi-links-effects-' . $oxiid . ':hover::after,
                .oxi-addons-container .oxi-links-effects-' . $oxiid . ':focus::after {
                    right: 50%;
                    background: ' . $styledata[47] . ';
                    -webkit-transform: rotate(0deg) translateX(50%);
                    -moz-transform: rotate(0deg) translateX(50%);
                    transform: rotate(0deg) translateX(50%);
                }
                @media screen and (max-width: 993px){
                    .oxi-addons-container .oxi-links-effects-' . $oxiid . '{                          
                        font-size: ' . $styledata[4] . 'px;
                        padding: ' . $styledata[20] . 'px ' . $styledata[24] . 'px;
                        margin: ' . $styledata[28] . 'px ' . $styledata[32] . 'px;
                    }
                    .oxi-addons-container .oxi-links-effects-' . $oxiid . '::before,
                    .oxi-addons-container .oxi-links-effects-' . $oxiid . '::after{
                        width: ' . ($styledata[4] + $styledata[20] * 2) . 'px;
                        height: ' . $styledata[44] . 'px;
                    }                    
                }
                @media only screen and (max-width: 668px){
                    .oxi-addons-container .oxi-links-effects-' . $oxiid . '{                          
                        font-size: ' . $styledata[5] . 'px;
                        padding: ' . $styledata[21] . 'px ' . $styledata[25] . 'px;
                        margin: ' . $styledata[29] . 'px ' . $styledata[33] . 'px;
                    }
                    .oxi-addons-container .oxi-links-effects-' . $oxiid . '::before,
                    .oxi-addons-container .oxi-links-effects-' . $oxiid . '::after{
                        width: ' . ($styledata[5] + $styledata[21] * 2) . 'px;
                        height: ' . $styledata[45] . 'px;
                    }
                } ';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
