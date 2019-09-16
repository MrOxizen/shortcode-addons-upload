<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Content_boxes\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/*
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_8 extends Templates {

    public function default_render($style, $child, $admin) {
        $class = '';
        if ($style['sa-max-width-condition'] == 'dynamic') {
            $class = 'sa-max-w-dynamic';
        } elseif ($style['sa-max-width-condition'] == 'default') {
            $class = '';
        }

        if ($admin == 'admin') {
            $admin_class = 'oxi-addons-admin-edit-list';
        } else {
            $admin_class = '';
        }

        foreach ($child as $v) {
            $data = json_decode($v['rawdata'], true);
//            echo '<pre>';
//        print_r($data);
//        echo '</pre>';
            $icon = $heading = $content = '';

            if ($data['sa_el_content_box_fa_icon'] != '') {
                $icon .= '
                <div class="oxi-addons-content-boxes-icon">
                    <div class="oxi-addons-content-boxes-icon-data">
                        ' . $this->font_awesome_render($data['sa_el_content_box_fa_icon']) . '
                    </div>
                </div>
                 ';
            }
            if ($data['sa_el_content_box_heading'] != '') {
                $heading .= '
                    <div class="oxi-addons-content-boxes-heading">
                        ' . $this->text_render($data['sa_el_content_box_heading']) . '
                    </div>
                            ';
            }
            if ($data['sa_el_content_box_content'] != '') {
                $content .= '
                    <div class="oxi-addons-content-boxes-content">
                        ' . $this->text_render($data['sa_el_content_box_content']) . '
                    </div> 
                    ';
            }

            echo '<div class="' . $this->column_render('sa-ac-column', $style) . ' ' . $admin_class . '">';
            echo '<div class="oxi-addons-content-boxes ' . $class . '">
                    <div class="oxi-addons-content-boxes-data">  
                    ' . $icon . '
                        <div class="oxi-addons-content-boxes-content-outer"> 
                        ' . $heading . '
                        ' . $content . '  
                        </div>    
                    </div>
                </div>';
            if ($admin == 'admin'):
                echo '  <div class="oxi-addons-admin-absulote">
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

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $stylename = $styledata['style_name'];
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';
        echo '<div class="oxi-addons-container">';
        echo '<div class="oxi-addons-row">';
        foreach ($listdata as $value) {

            $data = explode('||#||', $value['files']);
            $heading = $content = $icon = '';


            if ($data[1] != '') {
                $heading = '
                <div class="oxi-addons-content-boxes-heading">
                    ' . OxiAddonsTextConvert($data[1]) . '
                </div>
            ';
            }
            if ($data[3] != '') {
                $content = '
                <div class="oxi-addons-content-boxes-content">
                ' . OxiAddonsTextConvert($data[3]) . '
                </div>  
            ';
            }
            if ($data[5] != '') {
                $icon = '
                <div class="oxi-addons-content-boxes-icon" ' . OxiAddonsAnimation($styledata, 129) . '>
                    <div class="oxi-addons-content-icon-boxes-data">
                        ' . oxi_addons_font_awesome($data[5]) . '
                    </div>
                </div>
            ';
            }
            echo '<div class="' . OxiAddonsItemRows($styledata, 169) . '  ">';
            echo '<div class="oxi-addons-content-boxes-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 53) . '>
                    <div class="oxi-addons-content-boxes-' . $oxiid . '-data">  
                            ' . $icon . '
                        <div class="oxi-addons-content-boxes-' . $oxiid . '-content">
                        ' . $heading . '
                        ' . $content . '  
                        </div>    
                    </div>
                </div>';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
        $css .= '.oxi-addons-content-boxes-' . $oxiid . '{
                    width: 100%;
                    position: relative;
                    max-width: ' . $styledata[3] . 'px;
                    margin: 0 auto;
                }
                .oxi-addons-content-boxes-' . $oxiid . '-data{
                    width: 100%;
                    float:left;   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
                    ' . OxiAddonsBoxShadowSanitize($styledata, 47) . '
                }              
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon{
                    width:100%;                    
                    text-align:center;
                    float:left;  
                    display:flex;
                    align-items:center;
                    justify-content:center;
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-icon-boxes-data{
                    width: ' . $styledata[117] . 'px;
                    height: ' . $styledata[117] . 'px;
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 153) . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 133) . ';
                    border-style:' . $styledata[149] . '; 
                    border-color:' . $styledata[150] . ';
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    background:' . $styledata[121] . ';  
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-icons{
                    display:block;
                    font-size:' . $styledata[123] . 'px;
                    color:' . $styledata[127] . ';
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-' . $oxiid . '-content{
                    width:100%;
                    float:left;
                } 
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-heading{
                   width: 100%;
                   float:left;
                   color: ' . $styledata[63] . ';
                   font-size: ' . $styledata[59] . 'px;
                   ' . OxiAddonsFontSettings($styledata, 65) . '    
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';   
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-content{
                   width: 100%;
                   float:left;
                   color: ' . $styledata[91] . ';
                   font-size: ' . $styledata[87] . 'px;
                   ' . OxiAddonsFontSettings($styledata, 93) . ';    
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';   
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-content:hover{ 
                   color: ' . $styledata[115] . '; 
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){
                       .oxi-addons-content-boxes-' . $oxiid . '{
                           max-width: ' . $styledata[4] . 'px;
                       }
                       .oxi-addons-content-boxes-' . $oxiid . '-data{       
                           padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
                           margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
                       }              
                      .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-icon-boxes-data{
                        width: ' . $styledata[118] . 'px;
                        height: ' . $styledata[118] . 'px;
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 154) . ';
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 134) . ';
                    } 
                      .oxi-addons-content-boxes-' . $oxiid . ' .oxi-icons{
                          font-size:' . $styledata[124] . 'px;
                      }
                      .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-heading{
                         font-size: ' . $styledata[60] . 'px;    
                         padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 72) . ';   
                      }
                      .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-content{
                         font-size: ' . $styledata[88] . 'px;
                         padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 100) . ';   
                      }
                    }
                @media only screen and (max-width : 668px){
                    .oxi-addons-content-boxes-' . $oxiid . '{
                         max-width: ' . $styledata[5] . 'px;
                     }
                     .oxi-addons-content-boxes-' . $oxiid . '-data{ 
                         padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
                         margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
                     }              
                     .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-icon-boxes-data{
                        width: ' . $styledata[119] . 'px;
                        height: ' . $styledata[119] . 'px;
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 155) . ';
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 135) . ';
                    }  
                      .oxi-addons-content-boxes-' . $oxiid . ' .oxi-icons{
                          font-size:' . $styledata[125] . 'px;
                      } 
                     
                     .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-heading{
                        font-size: ' . $styledata[61] . 'px;    
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 3) . ';   
                     }
                     .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-content{
                        font-size: ' . $styledata[89] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';   
                     }  
                }
                ';

        $jquery = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-addons-content-boxes-' . $oxiid . '-data"));}, 500);';



        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-animation', $jquery);
    }

}
