<?php

namespace SHORTCODE_ADDONS_UPLOAD\Heading\Templates;

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

class Style_1 extends Templates
{

    public function default_render($style, $child, $admin)
    {

        if ($style['sa_head_text'] != '') {
            echo ' <div class="oxi-addons-heading-container-style-1" > 
                    <' . $style['sa_head_heading_tag'] . ' class="oxi-addons-heading" ' . $this->animation_render('sa_head_animation', $style) . '>' . $this->text_render($style['sa_head_text']) . '</' . $style['sa_head_heading_tag'] . '>
               </div> ';
        }
    }

    public function old_render()
    {
        $style = $this->dbdata;
        $child = $this->child;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[2]);

        $data = $stylefiles[1];
        echo ' <div class="oxi-addons-container" >
             <div class="oxi-addons-row"> 
                    <div class="oxi-addons-container-' . $oxiid . ' " ' . OxiAddonsAnimation($styledata, 45) . '> 
                         <' . $styledata[23] . ' class="oxi-addons-heading-' . $oxiid . '">' . htmlspecialchars_decode($data) . '</' . $styledata[23] . '>
                    </div> 
                </div>
            </div>';

        $css = '.oxi-addons-heading-container{
                text-align: ' . $styledata[1] . ';
                }
                .oxi-addons-heading-container .oxi-addons-heading{
                    font-size: ' . $styledata[19] . 'px;
                    display: inline-block;
                    color: ' . $styledata[25] . ';
                    font-family:  ' . oxi_addons_font_familly($styledata[27]) . ';
                    font-weight: ' . $styledata[29] . ';
                    font-style:  ' . $styledata[31] . ';
                    margin-top: ' . $styledata[33] . 'px;
                    margin-bottom: ' . $styledata[37] . 'px;
                    border-bottom: ' . $styledata[41] . 'px ' . $styledata[42] . '  ' . $styledata[43] . ';
                    padding: ' . $styledata[3] . 'px ' . $styledata[15] . 'px ' . $styledata[7] . 'px ' . $styledata[11] . 'px;
                    line-height: 1;
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){
                   .oxi-addons-heading-container .oxi-addons-heading{ 
                      font-size: ' . $styledata[20] . 'px;  
                      padding: ' . $styledata[4] . 'px ' . $styledata[16] . 'px ' . $styledata[8] . 'px ' . $styledata[12] . 'px;
                      margin-top: ' . $styledata[34] . 'px;
                      margin-bottom: ' . $styledata[38] . 'px;
                    } 
                 } 
                 @media only screen and (max-width : 668px){
                   .oxi-addons-heading-container .oxi-addons-heading{ 
                        font-size: ' . $styledata[21] . 'px;  
                        padding: ' . $styledata[5] . 'px ' . $styledata[17] . 'px ' . $styledata[9] . 'px ' . $styledata[13] . 'px;
                        margin-top: ' . $styledata[35] . 'px;
                        margin-bottom: ' . $styledata[39] . 'px;
                    }
                }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
