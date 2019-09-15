<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Icon_boxes\Templates;

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
            $value = json_decode($v['rawdata'], true);
            $icon = $heading = $content = $link = $endlink = '';
            if ($value['sa_icon_box_icon'] != '') {
                $icon .= '<div class="sa_addons_icon_boxes_icon">
                            ' . $this->font_awesome_render($value['sa_icon_box_icon']) . '
                        </div>';
            }
            if ($value['sa_icon_box_h_text'] != '') {
                $heading .= '<div class="sa_addons_icon_boxes_headding">
                            ' . $this->text_render($value['sa_icon_box_h_text']) . '
                        </div>';
            }
            if ($value['sa_icon_box_content'] != '') {
                $content .= '<div class="sa_addons_icon_boxes_content">
                            ' . $this->text_render($value['sa_icon_box_content']) . '
                        </div>';
            }
            if ($value['sa_icon_box_url-url'] != '') {
                $link .= '<a ' . $this->url_render('sa_icon_box_url', $value) . '>';
                $endlink .= '</a>';
            }
            echo'<div class="' . $this->column_render('sa_icon_box_col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '">
                    <div class="sa_addons_icon_boxes_container">';
                    echo $link;
                    echo'<div class="sa_addons_icon_boxes_style_1">
                            ' . $icon . '
                            ' . $heading . '
                            ' . $content . '
                        </div>';
                    echo $endlink;
                echo'</div>';
                if ($admin == 'admin') :
                    echo'<div class="oxi-addons-admin-absulote">
                            <div class="oxi-addons-admin-absulate-edit">
                                <button class="btn btn-primary shortcode-addons-template-item-edit" type="button" value="' . $v['id'] . '">Edit</button>
                            </div>
                            <div class="oxi-addons-admin-absulate-delete">
                                <button class="btn btn-danger shortcode-addons-template-item-delete" type="submit" value="' . $v['id'] . '">Delete</button>
                            </div>
                        </div>';
                endif;
                echo'</div>';
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

        echo '<div class="oxi-addons-container">';
        echo '<div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            if ($data[7] != '') {
                $linkfirst = '<a href="' . OxiAddonsUrlConvert($data[7]) . '" target="' . $styledata[177] . '">';
                $linklast = '</a>';
            }
            $icon = $heading = $content = '';

            if ($data[1] != '') {
                $icon = '<div class="oxi-addons-icon-boxes-icon" ' . OxiAddonsAnimation($styledata, 173) . '>
                        ' . oxi_addons_font_awesome($data[1]) . '
                    </div>';
            }
            if ($data[3] != '') {
                $heading = '<div class="oxi-addons-icon-boxes-heading">
                        ' . OxiAddonsTextConvert($data[3]) . '
                    </div>';
            }
            if ($data[5] != '') {
                $content = '<div class="oxi-addons-icon-boxes-content">
                          ' . OxiAddonsTextConvert($data[5]) . '
                        </div>';
            }

            echo '<div class="' . OxiAddonsItemRows($styledata, 179) . '">';
            echo $linkfirst;
            echo '<div class="oxi-addons-icon-boxes-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 89) . '>
                  <div class="oxi-addons-icon-boxes-' . $oxiid . '-data">
                        ' . $icon . '
                        ' . $heading . '
                        ' . $content . '
                  </div>
              </div>';
            echo $linklast;
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
        $css .= '.oxi-addons-icon-boxes-' . $oxiid . '{
                    display: flex;
                    width: 100%;
                    position: relative;
                    max-width: ' . $styledata[3] . 'px;
                    margin: 0 auto;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 67) . ';
                }
                .oxi-addons-icon-boxes-' . $oxiid . '-data{
                    width: 100%;
                    float:left; 
                    ' . OxiAddonsBGImage($styledata, 11) . '
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
                    border-style:' . $styledata[31] . '; 
                    border-color:' . $styledata[32] . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 51) . '; 
                    ' . OxiAddonsBoxShadowSanitize($styledata, 83) . '
                }
                .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-icon-boxes-icon{
                    width: 100%;
                    float:left;
                    text-align: ' . $styledata[99] . ';
                }
                .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-icons{
                   display:inline-block;
                   color: ' . $styledata[97] . ';
                   font-size: ' . $styledata[93] . 'px;
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';   
                }
                .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-icon-boxes-heading{
                   width: 100%;
                   float:left;
                   color: ' . $styledata[121] . ';
                   font-size: ' . $styledata[117] . 'px;
                   ' . OxiAddonsFontSettings($styledata, 123) . '    
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';   
                }
                .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-icon-boxes-content{
                   width: 100%;
                   float:left;
                   color: ' . $styledata[149] . ';
                   font-size: ' . $styledata[145] . 'px;
                   ' . OxiAddonsFontSettings($styledata, 151) . '    
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 157) . ';   
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){
                   .oxi-addons-icon-boxes-' . $oxiid . '{
                        max-width: ' . $styledata[4] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 68) . ';
                    }
                    .oxi-addons-icon-boxes-' . $oxiid . '-data{ 
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 36) . ';
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 52) . '; 
                    }
                    .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-icons{
                       font-size: ' . $styledata[94] . 'px;
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';   
                    }
                    .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-icon-boxes-heading{
                      
                       font-size: ' . $styledata[118] . 'px;
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . ';   
                    }
                    .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-icon-boxes-content{
                       font-size: ' . $styledata[146] . 'px;   
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 158) . ';   
                    } 
                }
                @media only screen and (max-width : 668px){
                    .oxi-addons-icon-boxes-' . $oxiid . '{
                        max-width: ' . $styledata[5] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 69) . ';
                    }
                    .oxi-addons-icon-boxes-' . $oxiid . '-data{ 
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 37) . ';
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 53) . '; 
                    }
                    .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-icons{
                       font-size: ' . $styledata[95] . 'px;
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';   
                    }
                    .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-icon-boxes-heading{
                      
                       font-size: ' . $styledata[119] . 'px;
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';   
                    }
                    .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-icon-boxes-content{
                       font-size: ' . $styledata[147] . 'px;   
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 159) . ';   
                    } 
                }
                ';
        $js = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-addons-icon-boxes-' . $oxiid . '-data"));}, 500);';
        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-jquery', $js);
    }
}
