<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Info_boxes\Templates;

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

class Style_8 extends Templates
{

    public function default_render($style, $child, $admin)
    {

        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);

            $icon = $heading = $details = ''; 
            if (array_key_exists('sa_info_boxes_heading', $value) && $value['sa_info_boxes_heading'] != '') {
                $heading = '<' . $style['sa_info_tag'] . ' class="oxi_addons__heading_style_8">' . $this->text_render($value['sa_info_boxes_heading']) . '</' . $style['sa_info_tag'] . '>';
            }
            if (array_key_exists('sa_info_boxes_details', $value) && $value['sa_info_boxes_details'] != '') {
                $details = '<div class="oxi_addons__details_style_8"> ' . $this->text_render($value['sa_info_boxes_details']) . ' </div>';
            }
            if (array_key_exists('sa_info_boxes_fontawesome', $value) && $value['sa_info_boxes_fontawesome'] != '') {
                if (array_key_exists('sa_info_boxes_icon_link-url', $value) &&$value['sa_info_boxes_icon_link-url'] != '') {
                    $icon = '<div class="oxi_addons__icon_style_8">
                            <a ' . $this->url_render('sa_info_boxes_icon_link', $value) . ' class="oxi_addons__icon">
                            ' . $this->font_awesome_render($value['sa_info_boxes_fontawesome']) . '
                            </a>
                      </div>'; 
                } else {
                    $icon = '<div class="oxi_addons__icon_style_8" ' . ($value['sa_info_boxes_icon_link-id'] != '' ? 'id="' . $value['sa_info_boxes_button_link-id'] . '"' : '') . '> 
                            <div class="oxi_addons__icon">
                                ' . $this->font_awesome_render($value['sa_info_boxes_fontawesome']) . ' 
                            </div>
                         </div>';
                }
               

            }
           
            echo '  <div class="oxi_addons__info_boxes_wrapper ' . ($admin == "admin" ? 'oxi-addons-admin-edit-list' : '') . ' ' . $this->column_render('sa_info_boxes_column', $style) . '">
                            <div class="oxi_addons__info_boxes_main_style_8">
                                ' . $icon . '
                               <div class="oxi_addons__title_details">
                                    ' . $heading . '
                                    ' . $details . ' 
                               </div>
                            </div>
                        ';
            if ($admin == 'admin') :
                echo '  <div class="oxi-addons-admin-absulote">
                                <div class="oxi-addons-admin-absulate-edit">
                                    <button class="btn btn-primary shortcode-addons-template-item-edit" type="button" value="' . $v['id'] . '">Edit</button>
                                </div>
                                <div class="oxi-addons-admin-absulate-delete">
                                <button class="btn btn-danger shortcode-addons-template-item-delete" type="submit" value="' . $v['id'] . '">Delete</button>
                                </div>
                            </div>';
            endif;
            echo ' </div>';
        }
    }
    public function inline_public_jquery()
    {
        return 'setTimeout(function () {
            oxiequalHeight($(".' . $this->WRAPPER . ' .oxi_addons__info_boxes_main_style_8"));
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
            $icons = $heading = $content = '';
            $files = explode('||#||', $value['files']);
            if ($files[5] != '') {
                $icons = '<a href="' . OxiAddonsUrlConvert($files[7]) . '" class="oxi-link" target="' . $styledata[174] . '">   ' . oxi_addons_font_awesome($files[5]) . '</a>';
            }
            if ($files[1] != '') {
                $heading = '  <div class="oxi-addons-title">' . OxiAddonsTextConvert($files[1]) . '</div>';
            }
            if ($files[3] != '') {
                $content = ' <div class="oxi-addons-details">' . OxiAddonsTextConvert($files[3]) . '</div>';
            }
            echo '<div class="oxi-addons-content-body ' . OxiAddonsItemRows($styledata, 3) . '" ' . OxiAddonsAnimation($styledata, 63) . ' >
                    <div class="oxi-addons-section-main"> 
                        <div class="oxi-addons-icon-main">
                            ' . $icons . '
                        </div>
                        <div class="oxi-addons-heading-title">
                            ' . $heading . '
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
              }
              .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-icon-main{
                  width: 100%;
                  float: left;
                  flex: 1;  
              } 
              .oxi-addons-wrapper-' . $oxiid . '  .oxi-link{
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
                justify-content: center;  
                text-decoration:none;   
                 transition: .5s all ease-in-out !important;
              }  
              .oxi-addons-wrapper-' . $oxiid . ' .oxi-link:after{
                content: "";
                position: absolute;
                border:  ' . $styledata[112] . 'px ' . $styledata[113] . '; 
                border-color: ' . $styledata[116] . ';
                height: ' . ($styledata[78] + 10) . 'px ;
                width: ' . ($styledata[78] + 10) . 'px ; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 92) . ';   
                transform: scale(0);
                transition: .5s all ease-in-out;
              }
              .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-section-main:hover  .oxi-link:after{
                content: ""; 
                transform: scale(1);
              }
              .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-section-main:hover  .oxi-link{
                content: ""; 
                transform: scale(1);
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
              .oxi-addons-wrapper-' . $oxiid . '  .oxi-link{ 
                font-size: ' . $styledata[75] . 'px;    
                height: ' . $styledata[79] . 'px ;
                width: ' . $styledata[79] . 'px ;  
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . '; 
              }  
              .oxi-addons-wrapper-' . $oxiid . ' .oxi-link:after{ 
                height: ' . ($styledata[79] + 10) . 'px ;
                width: ' . ($styledata[79] + 10) . 'px ; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . '; 
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
              .oxi-addons-wrapper-' . $oxiid . '  .oxi-link{ 
                font-size: ' . $styledata[76] . 'px;    
                height: ' . $styledata[80] . 'px ;
                width: ' . $styledata[80] . 'px ;  
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 94) . '; 
              }  
              .oxi-addons-wrapper-' . $oxiid . ' .oxi-link:after{ 
                height: ' . ($styledata[80] + 10) . 'px ;
                width: ' . ($styledata[80] + 10) . 'px ; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 94) . '; 
              } 
               .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{ 
                   font-size: ' . $styledata[120] . 'px; 
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 132) . ';
               }
               .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-details{ 
                   font-size: ' . $styledata[148] . 'px; 
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 160) . ';
               } 
            }
            ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
