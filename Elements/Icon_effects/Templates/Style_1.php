<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Icon_effects\Templates;

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
        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);

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
            echo '<div class="' . $this->column_render('sa_icon_effects_col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '">';
            echo $link;
            echo '<div class="sa_addons_icon_effectses_container">
                        <div class="sa_addons_icon_effects_style_1" ' . $this->animation_render('sa_icon_effects_animation', $style) . '>
                            ' . $icon . '
                        </div>
                </div>
                ';
            echo $endlink;
            if ($admin == 'admin') :
                echo '<div class="oxi-addons-admin-absulote">
                            <div class="oxi-addons-admin-absulate-edit">
                                <button class="btn btn-primary shortcode-addons-template-item-edit" type="button" value="' . $v['id'] . '">Edit</button>
                            </div>
                            <div class="oxi-addons-admin-absulate-delete">
                                <button class="btn btn-danger shortcode-addons-template-item-delete" type="submit" value="' . $v['id'] . '">Delete</button>
                            </div>
                        </div>';
            endif;
            echo '</div>';
        }
    }

    public function old_render()
    {

        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';
        // echo '<pre>';
        // print_r($styledata);
        // echo '</pre>';
        echo '<div class="oxi-addons-container  "  >'
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
                background:' . $styledata[21] . ';
                border-radius:' . $styledata[27] . 'px;    
            }
            .oxi-addons-container .oxi-icon-' . $oxiid . ':after{
                pointer-events: none;
                position: absolute;
                width: 100%;
                height: 100%;
                border-radius: 50%;
                content: "";
                -webkit-box-sizing: content-box;
                -moz-box-sizing: content-box;
                box-sizing: content-box;   
                top: -' . $styledata[35] . 'px;
                left: -' . $styledata[35] . 'px;
                padding: ' . $styledata[35] . 'px;
                box-shadow: 0 0 0 ' . $styledata[39] . 'px ' . $styledata[33] . ';
                -webkit-transition: -webkit-transform 0.2s, opacity 0.2s;
                -webkit-transform: scale(.8);
                -moz-transition: -moz-transform 0.2s, opacity 0.2s;
                -moz-transform: scale(.8);
                -ms-transform: scale(.8);
                transition: transform 0.2s, opacity 0.2s;
                transform: scale(.8);
                opacity: 0;
            }                
            .oxi-addons-container .oxi-icon-' . $oxiid . ':hover,
            .oxi-addons-container .oxi-icon-' . $oxiid . ':focus,
            .oxi-addons-container .oxi-icon-' . $oxiid . ':active{
                max-width: ' . $styledata[15] . 'px;
                width: 100%;
                height: ' . $styledata[15] . 'px;                  
                margin: ' . $styledata[7] . 'px ' . $styledata[11] . 'px;
                animation-duration: ' . $styledata[25] . 's;  
                background:' . $styledata[33] . ';
                border-radius:' . $styledata[27] . 'px;    
            }
            .oxi-addons-container .oxi-icon-' . $oxiid . ':hover:after{
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
                opacity: 1;
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
                }
                .oxi-addons-container .oxi-icon-' . $oxiid . ':hover,
                .oxi-addons-container .oxi-icon-' . $oxiid . ':focus,
                .oxi-addons-container .oxi-icon-' . $oxiid . ':active{
                    max-width: ' . $styledata[16] . 'px;
                    height: ' . $styledata[16] . 'px;                  
                    margin: ' . $styledata[8] . 'px ' . $styledata[12] . 'px;
                    border-radius:' . $styledata[28] . 'px;    
                }
                .oxi-addons-container .oxi-icon-' . $oxiid . '  .oxi-icons {
                     line-height: ' . $styledata[16] . 'px; 
                     font-size: ' . $styledata[4] . 'px;
                }
                .oxi-addons-container .oxi-icon-' . $oxiid . ':after{
                    top: -' . $styledata[36] . 'px;
                    left: -' . $styledata[36] . 'px;
                    padding: ' . $styledata[36] . 'px;
                    box-shadow: 0 0 0 ' . $styledata[40] . 'px ' . $styledata[33] . ';
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-container .oxi-icon-' . $oxiid . '{
                    max-width: ' . $styledata[17] . 'px;                  
                    height: ' . $styledata[17] . 'px;              
                    margin: ' . $styledata[9] . 'px ' . $styledata[13] . 'px;
                }
                .oxi-addons-container .oxi-icon-' . $oxiid . ':hover,
                .oxi-addons-container .oxi-icon-' . $oxiid . ':focus,
                .oxi-addons-container .oxi-icon-' . $oxiid . ':active{
                    max-width: ' . $styledata[17] . 'px;
                    height: ' . $styledata[17] . 'px;                  
                    margin: ' . $styledata[9] . 'px ' . $styledata[13] . 'px;
                    border-radius:' . $styledata[29] . 'px;    
                }
                .oxi-addons-container .oxi-icon-' . $oxiid . '  .oxi-icons {
                     line-height: ' . $styledata[17] . 'px; 
                     font-size: ' . $styledata[5] . 'px;
                }
                .oxi-addons-container .oxi-icon-' . $oxiid . ':after{
                    top: -' . $styledata[37] . 'px;
                    left: -' . $styledata[37] . 'px;
                    padding: ' . $styledata[37] . 'px;
                    box-shadow: 0 0 0 ' . $styledata[41] . 'px ' . $styledata[33] . ';
                }
            }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
