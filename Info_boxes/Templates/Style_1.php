<?php

namespace SHORTCODE_ADDONS_UPLOAD\Info_boxes\Templates;

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
        $datas = (array_key_exists('sa_info_info_box_repeater', $style) && is_array($style['sa_info_info_box_repeater']) ? $style['sa_info_info_box_repeater'] : []);
        foreach ($datas as $key => $value) {
            $icon = $heading = $details = '';
            if (array_key_exists('sa_info_info_box_title', $value) && $value['sa_info_info_box_title'] != '') {
                $heading = '<' . $style['sa_info_tag'] . ' class="oxi_addons__heading_style_1">' . $this->text_render($value['sa_info_info_box_title']) . '</' . $style['sa_info_tag'] . '>';
            }
            if (array_key_exists('sa_info_info_box_desc', $value) && $value['sa_info_info_box_desc'] != '') {
                $details = '<div class="oxi_addons__details_style_1""> ' . $this->text_render($value['sa_info_info_box_desc']) . ' </div>';
            }
            if (array_key_exists('sa_info_info_box_icon', $value) && $value['sa_info_info_box_icon'] != '') {
                $icon = '<div class="oxi_addons__icon_style_1">
                ' . $this->font_awesome_render($value['sa_info_info_box_icon']) . '
            </div>';
            }
            echo '  <div class="oxi_addons__info_boxes_wrapper ' . $this->column_render('sa_info_boxes_column', $style) . '">
                            <div class="oxi_addons__info_boxes_main_style_1 oxi_addons__info_boxes_main_style_1_' . $key . '">
                                ' . $icon . '
                                ' . $heading . '
                                ' . $details . '
                            </div>
                        ';
            echo ' </div>';
        }
    }
    public function inline_public_jquery()
    {
        return 'setTimeout(function () {
            oxiequalHeight($(".' . $this->WRAPPER . ' .oxi_addons__info_boxes_main_style_1"));
        }, 500)';
    }

    public function old_render()
    {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';
        echo '  <div class="oxi-addons-container" > 
                <div class="oxi-addons-row">
                    <div class="oxi-addons-row oxi-add-info-box' . $oxiid . '">';
        foreach ($listdata as $value) {
            $icons = $title = $content = '';
            $files = explode('||#||', $value['files']);
            if ($files[5] != '') {
                $icons = '  <div class="oxi-info-icon">
                            <div class="oxi-info-icon-icons">
                                ' . oxi_addons_font_awesome($files[5]) . '
                             </div>
                        </div>';
            }
            if ($files[1] != '') {
                $title = '  <div class="oxi-info-title" id="title">
                            ' . OxiAddonsTextConvert($files[1]) . '
                        </div>';
            }
            if ($files[3]) {
                $content = '<div class="oxi-info-contetn">
                            ' . OxiAddonsTextConvert($files[3]) . '
                        </div>';
            }
            echo '      <div class="oxi-add-info-box-' . $oxiid . '-padding ' . OxiAddonsItemRows($styledata, 1) . ' " ' . OxiAddonsAnimation($styledata, 125) . ' >
                                        <div class="oxi-info-body">
                                            ' . $icons . '
                                            ' . $title . '
                                            ' . $content . '
                                        </div>';
            echo '</div>';
        }
        echo '   </div>
                </div>
            </div>';



        $css .= ' 
            .oxi-add-info-box' . $oxiid . '{
                width: 100%;
            }
            .oxi-add-info-box-' . $oxiid . '-padding{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';                
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body{
                background: ' . $styledata[5] . ';
                display: flex;
                flex-direction: column;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
           }
                   
           .oxi-add-info-box' . $oxiid . ' .oxi-info-icon{
                font-size: ' . $styledata[39] . 'px;
                display: flex;
                justify-content: ' . $styledata[51] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 53) . ';

           }

            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon-icons{
                color: ' . $styledata[43] . ';
            }
            
            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons {
                height: ' . $styledata[47] . 'px ;
                width: ' . $styledata[47] . 'px ;
                align-items: center;
                display: flex;
                justify-content: center;
                transition: none !important;
            }
            
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-icon-icons{
               color: ' . $styledata[45] . ';
           }
           
           .oxi-add-info-box' . $oxiid . ' .oxi-info-title{
               width: 100%;
               float: left;
               color: ' . $styledata[73] . ';
               font-size: ' . $styledata[69] . 'px;
               ' . OxiAddonsFontSettings($styledata, 75) . ';
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
           }
            
           .oxi-add-info-box' . $oxiid . ' .oxi-info-contetn{
               font-size: ' . $styledata[97] . 'px;
               color: ' . $styledata[101] . ';
               ' . OxiAddonsFontSettings($styledata, 103) . '; 
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 109) . ';
           }
        @media only screen and (min-width : 669px) and (max-width : 993px){

            .oxi-add-info-box-' . $oxiid . '-padding{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';                
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
           }
                   
           .oxi-add-info-box' . $oxiid . ' .oxi-info-icon{
                font-size: ' . $styledata[40] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 54) . ';
                display: flex;
               justify-content: center;
           }

            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons {
                height: ' . $styledata[48] . 'px ;
                width: ' . $styledata[48] . 'px ;
            }

           .oxi-add-info-box' . $oxiid . ' .oxi-info-title{
               font-size: ' . $styledata[70] . 'px;
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
               display: flex;
               justify-content: center;
           }
            
           .oxi-add-info-box' . $oxiid . ' .oxi-info-contetn{
               font-size: ' . $styledata[98] . 'px;
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 110) . ';
               display: flex;
               justify-content: center;
           }
 
        }
        @media only screen and (max-width : 668px){
            .oxi-add-info-box-' . $oxiid . '-padding{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';                
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
           }
                   
           .oxi-add-info-box' . $oxiid . ' .oxi-info-icon{
                font-size: ' . $styledata[41] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 55) . ';
                display: flex;
               justify-content: center;
           }

            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons {
                height: ' . $styledata[49] . 'px ;
                width: ' . $styledata[49] . 'px ;
            }

           .oxi-add-info-box' . $oxiid . ' .oxi-info-title{
               font-size: ' . $styledata[71] . 'px;
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
               display: flex;
               justify-content: center;
           }
            
           .oxi-add-info-box' . $oxiid . ' .oxi-info-contetn{
               font-size: ' . $styledata[99] . 'px;
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 111) . ';
               display: flex;
               justify-content: center;
           }

        }
        ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
