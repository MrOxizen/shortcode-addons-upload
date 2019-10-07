<?php

namespace SHORTCODE_ADDONS_UPLOAD\Content_boxes\Templates;

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

class Style_4 extends Templates {
    
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
//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';
            
            $heading = $content = $img = '';

            
            if (array_key_exists('sa_el_box_heading', $data) &&  $data['sa_el_box_heading'] != '') {
                $heading .= '<div class="sa-cb-tem-4-heading">
                                ' . $this->text_render($data['sa_el_box_heading']) . '
                            </div>';
            }
            
            if (array_key_exists('sa_el_box_content', $data) &&  $data['sa_el_box_content'] != '') {
                $content .= '<div class="sa-cb-tem-4-content">
                                ' . $this->text_render($data['sa_el_box_content']) . '
                            </div> ';
            }
            
            if ($this->media_render('sa_el_box_image',$data) != '') {
                $img = '<div class="oxi-addons-img" style="background: url(\'' . $this->media_render('sa_el_box_image', $data) . '\');
                            background-size: cover;">
                          </div>';
            }
            
            

           
           echo '<div class="' . $this->column_render('sa-ac-column', $style) . ' ' . $admin_class . '">';
            echo '<div class="sa-cb-tem-4 sa-cb-tem-4-'.$key.' ' . $class . '" ' . $this->animation_render('sa-ac-animation', $style) . '>
                    <div class="sa-cb-tem-innar">
                        <div class="sa-cb-tem-4-data">  
                            <div class="sa-cb-image-body">
                                ' . $img . ' 
                            </div>
                            <div class="sa-cb-tem-4-content-inside">
                                ' . $heading . '
                                ' . $content . ' 
                            </div>    
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
            $heading = $content = $img = '';
            if ($data[3] != '') {
                $heading = '
                    <div class="oxi-addons-content-boxes-heading">
                        ' . OxiAddonsTextConvert($data[3]) . '
                    </div>
                ';
            }
            if ($data[5] != '') {
                $content = '
                    <div class="oxi-addons-content-boxes-content">
                    ' . OxiAddonsTextConvert($data[5]) . '
                </div>  
                ';
            }
            if ($data[1] != '') {
                $img = '
                    <div class="oxi-addons-content-boxes-images  oxi-addons-content-boxes-images-' . $value['id'] . '">
                       
                    </div>
                ';
                $css .= '.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-images-' . $value['id'] . '{
                            background: linear-gradient(rgba(255, 255, 255, 0.00), rgba(255, 255, 255, 0.00)), url("' . OxiAddonsUrlConvert($data[1]) . '");
                            -moz-background-size: 100% 100%;
                            -o-background-size: 100% 100%;
                            background-size: 100% 100%;
                        }';
            }
            echo '<div class="' . OxiAddonsItemRows($styledata, 127) . ' ">';
            echo ' 
                <div class="oxi-addons-content-boxes-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 53) . '>
                    <div class="oxi-addons-content-boxes-' . $oxiid . '-data">  
                      ' . $img . ' 
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
                    background:' . $styledata[121] . ';                   
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
                    ' . OxiAddonsBoxShadowSanitize($styledata, 47) . '
                }              
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-images{
                    width:100%; 
                    height:' . $styledata[117] . 'px; 
                    float:left;
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
                       .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-images{ 
                            height:' . $styledata[118] . 'px;  
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
                     .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-images{ 
                        height:' . $styledata[119] . 'px;  
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
