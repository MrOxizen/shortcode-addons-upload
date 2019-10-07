<?php

namespace SHORTCODE_ADDONS_UPLOAD\Link_effects\Templates;

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

class Style_8 extends Templates {

    public function default_render($style, $child, $admin) {

        $text = $this->text_render($style['sa_link_text']);

        echo ' <div class="link-effect-main-style8" >
                   <a ' . $this->url_render('sa_link_link', $style) . 'class="oxi-links-effects-style8" ' . $this->animation_render('sa_link_animation', $style) . '>' . $text . '</a>
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
                    animation: ' . $styledata[37] . 's; 
               }
               .oxi-addons-container .oxi-links-effects-' . $oxiid . ':hover, 
               .oxi-addons-container .oxi-links-effects-' . $oxiid . ':focus {
                    outline: none;
                    color: ' . $styledata[9] . ';
                    text-decoration: none;
               }               
                .oxi-addons-container .oxi-links-effects-' . $oxiid . '::before,
                .oxi-addons-container .oxi-links-effects-' . $oxiid . '::after{                    
                  position: absolute;
                  top: 0;
                  left: 0;
                  width: 100%;
                  height: 100%;
                  border-width: ' . $styledata[43] . 'px;
                  border-color:' . $styledata[11] . ';
                  border-style: solid;
                  content: "";
                  -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
                  -moz-transition: -moz-transform 0.3s, opacity 0.3s;
                  transition: transform 0.3s, opacity 0.3s;
                }
                .oxi-addons-container .oxi-links-effects-' . $oxiid . '::after {
                    border-color: #fff;
                    opacity: 0;
                    -webkit-transform: translateY(-7px) translateX(6px);
                    -moz-transform: translateY(-7px) translateX(6px);
                    transform: translateY(-7px) translateX(6px);
                }
                .oxi-addons-container .oxi-links-effects-' . $oxiid . ':hover::before, 
                .oxi-addons-container .oxi-links-effects-' . $oxiid . ':focus::before{
                    opacity: 0;
                    -webkit-transform: translateY(5px) translateX(-5px);
                    -moz-transform: translateY(5px) translateX(-5px);
                    transform: translateY(5px) translateX(-5px);
                }                
                .oxi-addons-container .oxi-links-effects-' . $oxiid . ':hover::after,
                .oxi-addons-container .oxi-links-effects-' . $oxiid . ':focus::after {
                    opacity: 1;
                    -webkit-transform: translateY(0px) translateX(0px);
                    -moz-transform: translateY(0px) translateX(0px);
                    transform: translateY(0px) translateX(0px);
                    border-color: ' . $styledata[47] . ';
                }
                @media screen and (max-width: 993px){
                    .oxi-addons-container .oxi-links-effects-' . $oxiid . '{                          
                        font-size: ' . $styledata[4] . 'px;
                        padding: ' . $styledata[20] . 'px ' . $styledata[24] . 'px;
                        margin: ' . $styledata[28] . 'px ' . $styledata[32] . 'px;
                    }                    
                }
                @media only screen and (max-width: 668px){
                    .oxi-addons-container .oxi-links-effects-' . $oxiid . '{                          
                        font-size: ' . $styledata[5] . 'px;
                        padding: ' . $styledata[21] . 'px ' . $styledata[25] . 'px;
                        margin: ' . $styledata[29] . 'px ' . $styledata[33] . 'px;
                    }
                } ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
