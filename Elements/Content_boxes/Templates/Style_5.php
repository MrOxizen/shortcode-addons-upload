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

class Style_5 extends Templates {

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

         $all_data = (array_key_exists('sa_icon_effects_data', $style) && is_array($style['sa_icon_effects_data'])) ? $style['sa_icon_effects_data'] : [];

        foreach ($all_data as $key => $data) {
//            echo '<pre>';
//        print_r($data);
//        echo '</pre>';
            $icon = $heading = $content = '';

            if (array_key_exists('sa_el_content_box_fa_icon', $data) &&  $data['sa_el_content_box_fa_icon'] != '') {
                $icon .= '
                <div class="sa-cb-tem-5-icon">
                    <div class="sa-cb-tem-5-icon-data">
                        ' . $this->font_awesome_render($data['sa_el_content_box_fa_icon']) . '
                    </div>
                </div>
                 ';
            }
            if (array_key_exists('sa_el_content_box_heading', $data) &&  $data['sa_el_content_box_heading'] != '') {
                $heading .= '
                    <div class="sa-cb-tem-5-heading">
                        ' . $this->text_render($data['sa_el_content_box_heading']) . '
                    </div>
                            ';
            }
            if (array_key_exists('sa_el_content_box_content', $data) &&  $data['sa_el_content_box_content'] != '') {
                $content .= '
                    <div class="sa-cb-tem-5-content">
                        ' . $this->text_render($data['sa_el_content_box_content']) . '
                    </div> 
                    ';
            }

            echo '<div class="' . $this->column_render('sa-ac-column', $style) . ' ' . $admin_class . '">';
            echo '<div class="sa-cb-tem-5   sa-cb-tem-5-'.$key.'  ' . $class . '" ' . $this->animation_render('sa-cb-content-box-animation', $style) . '>
                    <div class="sa-cb-tem-5-data">  
                        <div class="sa-cb-h-ratio">
                        ' . $icon . '
                        </div>
                        <div class="sa-cb-tem-5-content-outer"> 
                        ' . $heading . '
                        ' . $content . '  
                        </div>    
                    </div>
                </div>';
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
                <div class="oxi-addons-content-boxes-icon">
                    <div class="oxi-addons-content-boxes-icon-data" ' . OxiAddonsAnimation($styledata, 129) . '>
                        ' . oxi_addons_font_awesome($data[5]) . '
                    </div>
                </div>
                ';
            }


            echo '<div class="' . OxiAddonsItemRows($styledata, 133) . ' ">';

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
                    ' . OxiAddonsBGImage($styledata, 11) . '              
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
                    ' . OxiAddonsBoxShadowSanitize($styledata, 47) . '
                }              
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon{
                    width:100%;                    
                    height:' . $styledata[117] . 'px;
                    float:left;
                    text-align:center;
                    background:' . $styledata[121] . ';
                    display:flex;
                    justify-content: center;
                    align-items: center;
                } 
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon-data{
                    position:relative;
                    display:inline-block;
                } 
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-icons{
                    display:inlne-block;
                    width: 100%;
                    height: 100%;
                    font-size:' . $styledata[123] . 'px;
                    color:' . $styledata[127] . ';
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-' . $oxiid . '-content{
                    width:100%;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
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
                .oxi-addons-content-boxes-' . $oxiid . ':hover .oxi-addons-content-boxes-content{
                    color:' . $styledata[115] . ';
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){
                       .oxi-addons-content-boxes-' . $oxiid . '{
                           max-width: ' . $styledata[4] . 'px;
                       }
                       .oxi-addons-content-boxes-' . $oxiid . '-data{              
                           margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
                       }              
                      .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon{
                          height:' . $styledata[118] . 'px;
                      } 
                      .oxi-addons-content-boxes-' . $oxiid . ' .oxi-icons{
                          font-size:' . $styledata[124] . 'px;
                      }
                      .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-' . $oxiid . '-content{
                          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
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
                         margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
                     }              
                     .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon{
                          height:' . $styledata[119] . 'px;
                      } 
                      .oxi-addons-content-boxes-' . $oxiid . ' .oxi-icons{
                          font-size:' . $styledata[125] . 'px;
                      } 
                     .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-' . $oxiid . '-content{
                         padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
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
