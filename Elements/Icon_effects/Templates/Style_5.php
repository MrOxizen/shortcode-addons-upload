<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Icon_effects\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_2
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_5 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $styledata = $this->style;
        foreach ($styledata['sa_icon_effects_data'] as $key => $value) {
            $icon = $link = $endlink = '';
            if (array_key_exists('sa_icon_effects_icon', $value) && $value['sa_icon_effects_icon'] != '') {
                $icon .= $this->font_awesome_render($value['sa_icon_effects_icon']);
            }
            if (array_key_exists('sa_icon_effects_url_open', $value) && $value['sa_icon_effects_url_open'] != '0') {
                if ($value['sa_icon_effects_url-url'] != '') {
                    $link .= '<a ' . $this->url_render('sa_icon_effects_url', $value) . ' class="sa_icon_effects_link">';
                    $endlink .= '</a>';
                }
            }
            echo '<div class="sa_addons_icon_effects_colum ' . $this->column_render('sa_icon_effects_col', $style) . '">';
            echo $link;
            echo '<div class="sa_addons_icon_effects_container" ' . $this->animation_render('sa_icon_effects_animation', $styledata) . '>
                    <div class="sa_addons_icon_effects_style_3 sa_icon_effects_unique_' . $key . ' ' . ($value['sa_icon_effects_type'] == 'sa_effects_outside' ? 'sa_effects_outside' : '') . ' ">
                        ' . $icon . '
                    </div>
                </div>
                ';
            echo $endlink;

            echo '</div>';
        }
    }
    public function inline_public_css()
    {
        $styledata = $this->style;
        $css = '';
        foreach ($styledata['sa_icon_effects_data'] as $key => $value) {

            $css .=  '.' . $this->WRAPPER . ' .sa_addons_icon_effects_style_3.sa_icon_effects_unique_' . $key . ':after {
                            background: ' . $value['sa_icon_effects_bg'] . ';
                        }
                        .' . $this->WRAPPER . ' .sa_addons_icon_effects_style_3.sa_icon_effects_unique_' . $key . ' .oxi-icons {
                            color: ' . $value['sa_icon_effects_color'] . ';
                        }
                        .' . $this->WRAPPER . ' .sa_addons_icon_effects_style_3.sa_icon_effects_unique_' . $key . ':hover:after {
                            background: ' . $value['sa_icon_effects_bg_hover'] . ';
                        }
                        .' . $this->WRAPPER . ' .sa_addons_icon_effects_style_3.sa_icon_effects_unique_' . $key . ':hover .oxi-icons {
                            color: ' . $value['sa_icon_effects_color_hover'] . ';
                        }
                        .' . $this->WRAPPER . ' .sa_addons_icon_effects_style_3.sa_icon_effects_unique_' . $key . ' {
                            box-shadow: 0 0 0 ' . $styledata['sa_icon_effects_border_w-size'] . 'px ' . $value['sa_icon_effects_bg'] . ';
                        }
                        .' . $this->WRAPPER . ' .sa_addons_icon_effects_style_3.sa_icon_effects_unique_' . $key . '.sa_effects_outside:hover {
                            box-shadow: 0 0 0 ' . $styledata['sa_icon_effects_border_w-size'] . 'px ' . $value['sa_icon_effects_border_hover'] . ';
                        }
                        ';
        }
        return $css;
    }

    public function old_render()
    {

        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';
        echo '<div class="oxi-addons-container" >'
            . '<div class="oxi-addons-row oxi-addons-center"  ' . OxiAddonsAnimation($styledata, 23) . '>';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            $link = '';
            if ($data[5] != '') {
                $link = '<a href="' . OxiAddonsUrlConvert($data[5]) . '" class="oxi-icon oxi-icon-' . $oxiid . '" id="' . $data[3] . '" target="' . $styledata[1] . '">' . oxi_addons_font_awesome($data[1]) . '</a>';
            } else {
                $link = '<div class="oxi-icon oxi-icon-' . $oxiid . '" id="' . $data[3] . '" >' . oxi_addons_font_awesome($data[1]) . '</div>';
            }
            echo '<div class="' . OxiAddonsItemRows($styledata, 43) . ' ">';
            echo "$link";

            echo '</div>';
        }
        echo ' </div></div>';

        $css = '.oxi-addons-container .oxi-icon-' . $oxiid . '{
                    position: relative;
                    max-width: ' . $styledata[15] . 'px;
                    width: 100%;
                    height: ' . $styledata[15] . 'px;                                      
                    margin: ' . $styledata[7] . 'px ' . $styledata[11] . 'px;
                    animation-duration: ' . $styledata[25] . 's; 
                    border-radius:' . $styledata[27] . 'px;   
                    box-shadow: 0 0 0 ' . $styledata[39] . 'px ' . $styledata[33] . ';    
                }
                .oxi-addons-container .oxi-icon-' . $oxiid . ':after{
                    pointer-events: none;
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    border-radius: 50%;
                    content: "";
                    z-index: -1;
                    -webkit-box-sizing: content-box;
                    -moz-box-sizing: content-box;
                    box-sizing: content-box;
                    top: -' . $styledata[39] . 'px;
                    left: -' . $styledata[39] . 'px;
                    padding: ' . $styledata[39] . 'px;
                    background:' . $styledata[21] . ';
                    -webkit-transition: all 0.2s;
                    -moz-transition: all 0.2s;
                    transition: all 0.2s;
                }                
                .oxi-addons-container .oxi-icon-' . $oxiid . ':hover,
                .oxi-addons-container .oxi-icon-' . $oxiid . ':focus,
                .oxi-addons-container .oxi-icon-' . $oxiid . ':active{
                    max-width: ' . $styledata[15] . 'px;
                    width: 100%;
                    height: ' . $styledata[15] . 'px;    
                    box-shadow: 0 0 0 ' . $styledata[39] . 'px ' . $styledata[33] . ';    
                    margin: ' . $styledata[7] . 'px ' . $styledata[11] . 'px;
                    animation-duration: ' . $styledata[25] . 's;                      
                    border-radius:' . $styledata[27] . 'px;    
                }
                .oxi-addons-container .oxi-icon-' . $oxiid . ':hover:after{
                    background:' . $styledata[33] . ';
                    top: ' . $styledata[35] . 'px;
                    left: ' . $styledata[35] . 'px;
                    width: calc(100% - ' . ($styledata[35] * 2) . 'px);
                    height: calc(100% - ' . ($styledata[35] * 2) . 'px);
                    padding: 0px;
                }
                .oxi-addons-container .oxi-icon-' . $oxiid . '  .oxi-icons {
                     font-size: ' . $styledata[3] . 'px;
                     color:' . $styledata[19] . ';
                     line-height: ' . $styledata[15] . 'px; 
                }
                .oxi-addons-container .oxi-icon-' . $oxiid . ':hover  .oxi-icons {                    
                     color:' . $styledata[31] . ';
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){
                    .oxi-addons-container .oxi-icon-' . $oxiid . '{
                        max-width: ' . $styledata[16] . 'px;                  
                        height: ' . $styledata[16] . 'px;              
                        margin: ' . $styledata[8] . 'px ' . $styledata[12] . 'px;
                        box-shadow: 0 0 0 ' . $styledata[40] . 'px ' . $styledata[33] . ';
                    }
                    .oxi-addons-container .oxi-icon-' . $oxiid . ':after{
                        top: -' . $styledata[40] . 'px;
                        left: -' . $styledata[40] . 'px;
                        padding: ' . $styledata[40] . 'px;
                    }                
                    .oxi-addons-container .oxi-icon-' . $oxiid . ':hover,
                    .oxi-addons-container .oxi-icon-' . $oxiid . ':focus,
                    .oxi-addons-container .oxi-icon-' . $oxiid . ':active{
                        max-width: ' . $styledata[16] . 'px;
                        height: ' . $styledata[16] . 'px;    
                        box-shadow: 0 0 0 ' . $styledata[40] . 'px ' . $styledata[33] . ';    
                        margin: ' . $styledata[8] . 'px ' . $styledata[12] . 'px;     
                        border-radius:' . $styledata[28] . 'px;    
                    }
                    .oxi-addons-container .oxi-icon-' . $oxiid . ':hover:after{
                        top: ' . $styledata[36] . 'px;
                        left: ' . $styledata[36] . 'px;
                        width: calc(100% - ' . ($styledata[36] * 2) . 'px);
                        height: calc(100% - ' . ($styledata[36] * 2) . 'px);
                        padding: 0px;
                    }
                    .oxi-addons-container .oxi-icon-' . $oxiid . '  .oxi-icons {
                         font-size: ' . $styledata[4] . 'px;
                         line-height: ' . $styledata[16] . 'px; 
                    }
                }
                @media only screen and (max-width : 668px){
                    .oxi-addons-container .oxi-icon-' . $oxiid . '{
                        max-width: ' . $styledata[17] . 'px;                  
                        height: ' . $styledata[17] . 'px;              
                        margin: ' . $styledata[9] . 'px ' . $styledata[13] . 'px;
                        box-shadow: 0 0 0 ' . $styledata[41] . 'px ' . $styledata[33] . ';
                    }
                    .oxi-addons-container .oxi-icon-' . $oxiid . ':after{
                        top: -' . $styledata[41] . 'px;
                        left: -' . $styledata[41] . 'px;
                        padding: ' . $styledata[41] . 'px;
                    }                
                    .oxi-addons-container .oxi-icon-' . $oxiid . ':hover,
                    .oxi-addons-container .oxi-icon-' . $oxiid . ':focus,
                    .oxi-addons-container .oxi-icon-' . $oxiid . ':active{
                        max-width: ' . $styledata[17] . 'px;
                        height: ' . $styledata[17] . 'px;    
                        box-shadow: 0 0 0 ' . $styledata[41] . 'px ' . $styledata[33] . ';    
                        margin: ' . $styledata[9] . 'px ' . $styledata[13] . 'px;     
                        border-radius:' . $styledata[29] . 'px;    
                    }
                    .oxi-addons-container .oxi-icon-' . $oxiid . ':hover:after{
                        top: ' . $styledata[37] . 'px;
                        left: ' . $styledata[37] . 'px;
                        width: calc(100% - ' . ($styledata[37] * 2) . 'px);
                        height: calc(100% - ' . ($styledata[37] * 2) . 'px);
                        padding: 0px;
                    }
                    .oxi-addons-container .oxi-icon-' . $oxiid . '  .oxi-icons {
                         font-size: ' . $styledata[5] . 'px;
                         line-height: ' . $styledata[17] . 'px; 
                    }
                }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
