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

class Style_5 extends Templates {

    public function default_render($style, $child, $admin) {
        $hover = '';
        $text = $this->text_render($style['sa_link_text']);

        if (array_key_exists('sa_link_hover', $style) && $style['sa_link_hover'] != '0') {
            $hover = $this->text_render($style['sa_link_hover_text']);
        } else {
            $hover = $text;
        }

        echo ' <div class="link-effect-main-style5">
                   <a ' . $this->url_render('sa_link_link', $style) . 'class="oxi-links-effects-style5" ' . $this->animation_render('sa_link_animation', $style) . '> <span class="oxi-links-effects-style5-span  '.$style['sa_link_view'].'" data-hover="' . $hover . '">' . $text . '<span></a>
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
                      <a ' . $target . ' ' . $href . '  class="oxi-links-effects-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 35) . ' id="' . $stylefiles[5] . '"> <span class="oxi-links-effects-' . $oxiid . '-span" data-hover="' . oxi_addons_html_decode($stylefiles[9]) . '">' . oxi_addons_html_decode($stylefiles[3]) . '<span></a>
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
                    -webkit-perspective: 1000px;
                    -moz-perspective: 1000px;
                    perspective: 1000px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';                    
                    margin: ' . $styledata[27] . 'px ' . $styledata[31] . 'px;
                    overflow: hidden;
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
                    
               }
               .oxi-addons-container .oxi-links-effects-' . $oxiid . '-span{  
                    position: relative;
                    text-align:center;
                    display: inline-block;
                    -webkit-transition: -webkit-transform 0.3s;
                    -moz-transition: -moz-transform 0.3s;
                    transition: transform 0.3s;
               }
               .oxi-addons-container .oxi-links-effects-' . $oxiid . '-span::before{
                    position: absolute;
                    top: 100%;
                    color: ' . $styledata[9] . ';
                    font-weight: ' . $styledata[45] . ';
                    font-style:  ' . $styledata[47] . ';
                    font-family:  ' . oxi_addons_font_familly($styledata[43]) . ';
                    content: attr(data-hover);
                    -webkit-transform: translate3d(0,0,0);
                    -moz-transform: translate3d(0,0,0);
                    transform: translate3d(0,0,0);
                    text-align: center;
                    width: 100%;
                }                
               .oxi-addons-container .oxi-links-effects-' . $oxiid . ':hover, 
               .oxi-addons-container .oxi-links-effects-' . $oxiid . ':focus {
                    outline: none;
                    color: ' . $styledata[9] . ';
                    text-decoration: none;
               }    
               .oxi-addons-container .oxi-links-effects-' . $oxiid . ':hover .oxi-links-effects-' . $oxiid . '-span, 
               .oxi-addons-container .oxi-links-effects-' . $oxiid . ':focus .oxi-links-effects-' . $oxiid . '-span { 
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    transform: translateY(-100%);
               }  
                @media only screen and (min-width : 669px) and (max-width : 993px){
                   .oxi-addons-container .oxi-links-effects-' . $oxiid . '{    
                        font-size: ' . $styledata[4] . 'px;
                        margin: ' . $styledata[28] . 'px ' . $styledata[32] . 'px;
                   }
                }
                @media only screen and (max-width : 668px){
                   .oxi-addons-container .oxi-links-effects-' . $oxiid . '{    
                        font-size: ' . $styledata[5] . 'px;
                        margin: ' . $styledata[29] . 'px ' . $styledata[33] . 'px;
                   }
                } ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
