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

class Style_9 extends Templates {

    public function default_render($style, $child, $admin) {
        $hover = '';
        $text = $this->text_render($style['sa_link_text']);
        $text2 = '' . $this->text_render($style['sa_link_hover_text']);

        if (array_key_exists('sa_link_hover', $style) && $style['sa_link_hover'] != '0') {
            $hover = $text2;
        } else {
            $hover = $text;
        }

        echo ' <div class="link-effect-main-style9">
                   <a ' . $this->url_render('sa_link_link', $style) . 'class="oxi-links-effects-style9 '.$style['sa_link_view'].'" ' . $this->animation_render('sa_link_animation', $style) . '>
                       <div class="sa_link_text">  
                       ' . $text .'
                       </div>
                       <div class="sa_link_hover_text">
                        '. $hover . '
                       </div> 
                   </a>
                   
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
                      <a ' . $target . ' ' . $href . '  class="oxi-links-effects-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 35) . ' id="' . $stylefiles[5] . '" data-hover="' . oxi_addons_html_decode($stylefiles[9]) . '"> <span class="oxi-links-effects-' . $oxiid . '-span">' . oxi_addons_html_decode($stylefiles[3]) . '<span></a>
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
                    padding: 0px 0px;
                    position: relative;
                    display: inline-block;                    
                    outline: none;
                    cursor:pointer;
                    overflow: hidden;
                    text-decoration: none;
                    font-family:  ' . oxi_addons_font_familly($styledata[13]) . ';                    
                    font-weight: ' . $styledata[15] . ';
                    font-style:  ' . $styledata[17] . ';
                    font-size: ' . $styledata[3] . 'px;
                    margin: ' . $styledata[27] . 'px ' . $styledata[31] . 'px;  
                                        
               } 
               .oxi-addons-container .oxi-links-effects-' . $oxiid . '-span{  
                    color: ' . $styledata[7] . ';                    
                    text-decoration: none;
                    display: block;
                    font-family:  ' . oxi_addons_font_familly($styledata[13]) . ';                    
                    font-weight: ' . $styledata[15] . ';
                    font-style:  ' . $styledata[17] . ';
                    font-size: ' . $styledata[3] . 'px;
                    background: ' . $styledata[11] . ';
                    padding: ' . $styledata[19] . 'px ' . $styledata[23] . 'px;     
                    -webkit-transition: -webkit-transform 0.3s;
                    -moz-transition: -moz-transform 0.3s;
                    transition: transform 0.3s;
               } 
               .oxi-addons-container .oxi-links-effects-' . $oxiid . '::before {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    content:"";
                    background: ' . $styledata[39] . ';
                    color: ' . $styledata[9] . ';
                    padding: ' . $styledata[19] . 'px ' . $styledata[23] . 'px;
                    content: attr(data-hover);
                    -webkit-transition: -webkit-transform 0.3s;
                    -moz-transition: -moz-transform 0.3s;
                    transition: transform 0.3s;
                    -webkit-transform: translateX(-100%);
                }  
                .oxi-addons-container .oxi-links-effects-' . $oxiid . ':hover, 
                .oxi-addons-container .oxi-links-effects-' . $oxiid . ':focus{   
                   text-decoration: none;
               } 
               .oxi-addons-container .oxi-links-effects-' . $oxiid . ':hover .oxi-links-effects-' . $oxiid . '-span, 
               .oxi-addons-container .oxi-links-effects-' . $oxiid . ':focus .oxi-links-effects-' . $oxiid . '-span {   
                    -webkit-transform: translateX(100%);
                    -moz-transform: translateX(100%);
                    transform: translateX(100%);
               }    
               .oxi-addons-container .oxi-links-effects-' . $oxiid . ':hover::before,
               .oxi-addons-container .oxi-links-effects-' . $oxiid . ':focus::before {
                    -webkit-transform: translateX(0%);
                    -moz-transform: translateX(0%);
                    transform: translateX(0%);
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){
                   .oxi-addons-container .oxi-links-effects-' . $oxiid . '{    
                        font-size: ' . $styledata[4] . 'px;
                        margin: ' . $styledata[28] . 'px ' . $styledata[32] . 'px;  
                   }
                   .oxi-addons-container .oxi-links-effects-' . $oxiid . '-span{                     
                        padding: ' . $styledata[20] . 'px ' . $styledata[24] . 'px;                                         
                   }
                   .oxi-addons-container .oxi-links-effects-' . $oxiid . '::before {                  
                        padding: ' . $styledata[20] . 'px ' . $styledata[24] . 'px;                   
                    }   
                }
                @media only screen and (max-width : 668px){
                   .oxi-addons-container .oxi-links-effects-' . $oxiid . '{    
                        font-size: ' . $styledata[5] . 'px;
                        margin: ' . $styledata[29] . 'px ' . $styledata[33] . 'px;   
                   }
                   .oxi-addons-container .oxi-links-effects-' . $oxiid . '-span{                     
                        padding: ' . $styledata[21] . 'px ' . $styledata[25] . 'px;
                                        
                   }
                   .oxi-addons-container .oxi-links-effects-' . $oxiid . '::before {                  
                        padding: ' . $styledata[21] . 'px ' . $styledata[25] . 'px;                   
                    }   
                } ';


        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
