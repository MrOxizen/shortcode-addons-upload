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

class Style_10 extends Templates {

    public function default_render($style, $child, $admin) {

        $text = $this->text_render($style['sa_link_text']);

        echo ' <div class="link-effect-main-style10" >
                   <a ' . $this->url_render('sa_link_link', $style) . 'class="oxi-links-effects-style10" ' . $this->animation_render('sa_link_animation', $style) . '>' . $text . '</a>
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
            padding: 0px 0px;
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
            top: 50%;
            left: 50%;
            width: ' . $styledata[19] . 'px;
            height: ' . $styledata[19] . 'px;
            border-width: ' . $styledata[43] . 'px;
            border-color:' . $styledata[11] . ';
            border-style:solid;
            border-radius: ' . $styledata[53] . '%;
            content: "";
            opacity: 0;
            -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
            -moz-transition: -moz-transform 0.3s, opacity 0.3s;
            transition: transform 0.3s, opacity 0.3s;
            -webkit-transform: translateX(-50%) translateY(-50%) scale(0.2);
            -moz-transform: translateX(-50%) translateY(-50%) scale(0.2);
            transform: translateX(-50%) translateY(-50%) scale(0.2);
        }
        .oxi-addons-container .oxi-links-effects-' . $oxiid . '::after {
            width: ' . $styledata[49] . 'px;
            height: ' . $styledata[49] . 'px;
            border: ' . $styledata[23] . 'px;
            border-color:' . $styledata[47] . ';
            border-style:solid;
            -webkit-transform: translateX(-50%) translateY(-50%) scale(0.8);
            -moz-transform: translateX(-50%) translateY(-50%) scale(0.8);
            transform: translateX(-50%) translateY(-50%) scale(0.8);
        }
            .oxi-addons-container .oxi-links-effects-' . $oxiid . ':hover::before,
            .oxi-addons-container .oxi-links-effects-' . $oxiid . ':hover::after, 
            .oxi-addons-container .oxi-links-effects-' . $oxiid . ':focus::before,
            .oxi-addons-container .oxi-links-effects-' . $oxiid . ':focus::after {
                opacity: 1;
                -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
                -moz-transform: translateX(-50%) translateY(-50%) scale(1);
                transform: translateX(-50%) translateY(-50%) scale(1);
            }
            @media screen and (max-width: 993px){
                .oxi-addons-container .oxi-links-effects-' . $oxiid . '{                          
                    font-size: ' . $styledata[4] . 'px;
                    margin: ' . $styledata[28] . 'px ' . $styledata[32] . 'px;
                }   
                .oxi-addons-container .oxi-links-effects-' . $oxiid . '::before,
                .oxi-addons-container .oxi-links-effects-' . $oxiid . '::after{ 
                    width: ' . $styledata[20] . 'px;
                    height: ' . $styledata[20] . 'px;
                    border: ' . $styledata[44] . 'px solid ' . $styledata[11] . ';
                    border-radius: ' . $styledata[54] . '%;
                }
                .oxi-addons-container .oxi-links-effects-' . $oxiid . '::after {
                    width: ' . $styledata[50] . 'px;
                    height: ' . $styledata[50] . 'px;
                    border: ' . $styledata[24] . 'px solid ' . $styledata[11] . ';
                }
            }
            @media only screen and (max-width: 668px){
                .oxi-addons-container .oxi-links-effects-' . $oxiid . '{                          
                    font-size: ' . $styledata[5] . 'px;
                    margin: ' . $styledata[29] . 'px ' . $styledata[33] . 'px;
                }
                .oxi-addons-container .oxi-links-effects-' . $oxiid . '::before,
                .oxi-addons-container .oxi-links-effects-' . $oxiid . '::after{ 
                    width: ' . $styledata[21] . 'px;
                    height: ' . $styledata[21] . 'px;
                    border: ' . $styledata[45] . 'px solid ' . $styledata[11] . ';
                    border-radius: ' . $styledata[55] . '%;
                }
                .oxi-addons-container .oxi-links-effects-' . $oxiid . '::after {
                    width: ' . $styledata[51] . 'px;
                    height: ' . $styledata[51] . 'px;
                    border: ' . $styledata[25] . 'px solid ' . $styledata[11] . ';
                }
            } ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
