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

class Style_9 extends Templates
{

    public function default_render($style, $child, $admin)
    {

        $datas = (array_key_exists('sa_info_info_box_repeater', $style) && is_array($style['sa_info_info_box_repeater']) ? $style['sa_info_info_box_repeater'] : []);
        foreach ($datas as $key => $value) {

            $icon = $heading = $details = $sub_heading = '';
            if (array_key_exists('sa_info_info_box_sub_title', $value) && $value['sa_info_info_box_sub_title'] != '') {
                $sub_heading = '<p class="oxi_addons__sub_heading_style_9">' . $this->text_render($value['sa_info_info_box_title']) . '</p>';
            }
            if (array_key_exists('sa_info_info_box_title', $value) && $value['sa_info_info_box_title'] != '') {
                $heading = '<' . $style['sa_info_tag'] . ' class="oxi_addons__heading_style_9">' . $this->text_render($value['sa_info_info_box_title']) . '</' . $style['sa_info_tag'] . '>';
            }
            if (array_key_exists('sa_info_info_box_desc', $value) && $value['sa_info_info_box_desc'] != '') {
                $details = '<div class="oxi_addons__details_style_9"> ' . $this->text_render($value['sa_info_info_box_desc']) . ' </div>';
            }
            if (array_key_exists('sa_info_info_box_icon', $value) && $value['sa_info_info_box_icon'] != '') {

                $icon = '<div class="oxi_addons__icon_style_9"> 
                            <div class="oxi_addons__icon">
                                ' . $this->font_awesome_render($value['sa_info_info_box_icon']) . ' 
                            </div>
                         </div>';
            }

            echo '  <div class="oxi_addons__info_boxes_wrapper  ' . $this->column_render('sa_info_boxes_column', $style) . '">
                            <div class="oxi_addons__info_boxes_main_style_9" ' . $this->animation_render('sa_info_boxes_animation', $style) . '>
                                    ' . $icon . ' 
                                    ' . $heading . '
                                    ' . $sub_heading . '
                                    ' . $details . ' 
                            </div>
                        ';
             
            echo ' </div>';
        }
    }
    public function inline_public_jquery()
    {
        return 'setTimeout(function () {
            oxiequalHeight($(".' . $this->WRAPPER . ' .oxi_addons__info_boxes_main_style_9"));
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
                        <div class="oxi-addons-wrapper-' . $oxiid . '">';
        foreach ($listdata as $value) {
            $icons = $heading = $content = $subheading = '';
            $files = explode('||#||', $value['files']);
            if ($files[5] != '') {
                $icons =  '<div class="oxi-addons-main-icon">' . oxi_addons_font_awesome($files[5]) . '</div>';
            }
            if ($files[1] != '') {
                $heading = '  <div class="oxi-addons-title">
                                                ' . OxiAddonsTextConvert($files[1]) . '
                                            </div>';
            }
            if ($files[1] != '') {
                $subheading = '<div class="oxi-addons-sub-title">
                                                ' . OxiAddonsTextConvert($files[7]) . '
                                            </div>';
            }
            if ($files[3] != '') {
                $content = ' <div class="oxi-addons-details">
                                                ' . OxiAddonsTextConvert($files[3]) . '
                                            </div>';
            }
            echo '      <div class="oxi-addons-content-body ' . OxiAddonsItemRows($styledata, 3) . ' " ' . OxiAddonsAnimation($styledata, 63) . ' >
                                            <div class="oxi-addons-section-main">  
                                                <div class="oxi-addons-heading-title">
                                                    ' . $icons . ' 
                                                    ' . $heading . '
                                                    ' . $subheading . '
                                                    ' . $content . '
                                                </div>
                                            </div>';
            echo '</div>';
        }
        echo '   </div>
                    </div>
                </div>';



        $css .= ' 
            .oxi-addons-container *{
                transition: none ;
            }
              .oxi-addons-wrapper-' . $oxiid . '{
                    width: 100%;  
              }
              .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-body{  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 47) . ';
              }
              .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-section-main{
                    width: 100%;
                    float: left;
                    display: flex;
                    background: ' . $styledata[7] . ';
                    ' . OxiAddonsBoxShadowSanitize($styledata, 68) . '; 
                    border:  ' . $styledata[9] . 'px ' . $styledata[10] . '; 
                    border-color: ' . $styledata[13] . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';    
              } ';
        $align = '';
        if ($styledata[174] == 'left') {
            $align = 'justify-content: flex-start;';
        } elseif ($styledata[174] == 'center') {
            $align = 'justify-content: center;';
        } else {
            $align = 'justify-content: flex-end;';
        }
        $css .= ' .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-main-icon{
                position: relative;
                width: 100%; 
                display: flex;
                ' . $align . '
              }  
              .oxi-addons-wrapper-' . $oxiid . '  .oxi-icons{
                  position: relative;
                color: ' . $styledata[82] . '; 
                font-size: ' . $styledata[74] . 'px;    
                height: ' . $styledata[78] . 'px ;
                width: ' . $styledata[78] . 'px ; 
                background: ' . $styledata[84] . ';
                border:  ' . $styledata[86] . 'px ' . $styledata[87] . '; 
                border-color: ' . $styledata[90] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 92) . ';   
                align-items: center;
                display: flex;
                text-decoration:none;   
                transition: .5s all ease-in-out !important;
              }  
               
              .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-section-main:hover  .oxi-icons{ 
                border-color: ' . $styledata[116] . ';
                 background: ' . $styledata[110] . ';
                color: ' . $styledata[108] . '; 
              }
               .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-title{
                  width: 100%;
                  float: left; 
               }
               .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{
                   width: 100%;
                   float: left;
                   color: ' . $styledata[122] . ';
                   font-size: ' . $styledata[118] . 'px;
                   ' . OxiAddonsFontSettings($styledata, 124) . ';
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . ';
               }
               .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-sub-title{
                   width: 100%;
                   float: left;
                   color: ' . $styledata[180] . ';
                   font-size: ' . $styledata[176] . 'px;
                   ' . OxiAddonsFontSettings($styledata, 182) . ';
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 188) . ';
               }
               .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-details{
                   width: 100%;
                   float: left;
                   font-size: ' . $styledata[146] . 'px;
                   color: ' . $styledata[150] . ';
                   ' . OxiAddonsFontSettings($styledata, 152) . ';
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 158) . ';
               }
     
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-body{ 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 48) . ';
                }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-section-main{ 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';    
                 } 
                .oxi-addons-wrapper-' . $oxiid . '  .oxi-icons{ 
                    font-size: ' . $styledata[75] . 'px;    
                    height: ' . $styledata[79] . 'px ;
                    width: ' . $styledata[79] . 'px ;  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . '; 
                }   
                 .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-sub-title{ 
                   font-size: ' . $styledata[177] . 'px; 
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 189) . ';
               }
               .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{ 
                   font-size: ' . $styledata[119] . 'px; 
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
               }
               .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-details{ 
                   font-size: ' . $styledata[147] . 'px; 
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 159) . ';
               }
            }
            @media only screen and (max-width : 668px){
               .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-body{ 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
              }
              .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-section-main{ 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';    
              } 
              .oxi-addons-wrapper-' . $oxiid . '  .oxi-icons{ 
                font-size: ' . $styledata[76] . 'px;    
                height: ' . $styledata[80] . 'px ;
                width: ' . $styledata[80] . 'px ;  
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 94) . '; 
              }   
              .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-main-icon{ 
                display: flex;
                justify-content:center;
              }   
               .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{ 
                   font-size: ' . $styledata[120] . 'px; 
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 132) . ';
                   text-align: center;
               }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-sub-title{ 
                   font-size: ' . $styledata[178] . 'px; 
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 190) . ';
                   text-align: center;
               }
               .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-details{ 
                   font-size: ' . $styledata[148] . 'px; 
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 160) . ';
                   text-align: center;
               } 
            }
            ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
