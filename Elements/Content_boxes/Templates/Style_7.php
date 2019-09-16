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

class Style_7 extends Templates {

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
            $heading = $content = $img = $button = '';


            if ($data['sa_el_content_box_heading'] != '') {
                $heading .= '<div class="oxi-addons-content-boxes-heading">
                                ' . $this->text_render($data['sa_el_content_box_heading']) . '
                            </div>';
            }

            if ($data['sa_el_content_box_content'] != '') {
                $content .= '<div class="oxi-addons-content-boxes-content">
                                ' . $this->text_render($data['sa_el_content_box_content']) . '
                            </div> ';
            }

            if ($this->media_render('sa_el_content_box_image', $data) != '') {
                $img = '<div class="oxi-addons-content-boxes-images-data">
                            <div class="oxi-addons-content-boxes-images ">
                                 <img src="' . $this->media_render('sa_el_content_box_image', $data) . '" alt="images" class="oxi-addons-img">
                           </div>
                         </div>';
            }
            
            if ($data['sa_el_content_box_btn_text'] != '') {
                $button .= '<div class="oxi-addons-content-boxes-button">
                                <a  class="oxi-button" ' . $this->url_render('sa_el_content_box_button_link', $data) . '>' . $this->text_render($data['sa_el_content_box_btn_text']) . '</a>
                            </div> ';
            }




            echo '<div class="' . $this->column_render('sa-ac-column', $style) . ' ' . $admin_class . '">';
            echo '<div class="oxi-addons-content-boxes ' . $class . '">
                    <div class="oxi-addons-content-boxes-data"> 
                    ' . $img . '  
                        <div class="oxi-addons-content-boxes-content-outside">
                            ' . $heading . '
                            ' . $content . '
                            ' . $button . '
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
        $href = '';
        $target = '';

        echo '<div class="oxi-addons-container">';
        echo '<div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            $heading = $content = $img = $button = '';
            if ($data[11] != '') {
                $href = 'href="' . OxiAddonsUrlConvert($data[11]) . '"';
                if ($styledata[255] != '') {
                    $target = 'target="' . $styledata[255] . '"';
                }
            }
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
            if ($data[7] != '' && $data[11] != '') {
                $button = '
                        <div class="oxi-addons-content-boxes-button" ' . OxiAddonsAnimation($styledata, 147) . '>
                            <a ' . $target . ' ' . $href . ' class="oxi-button-' . $oxiid . '" id="' . $data[9] . '">' . OxiAddonsTextConvert($data[7]) . '</a>
                        </div>
                    ';
            } elseif ($data[7] != '' && $data[11] == '') {
                $button = '
                        <div class="oxi-addons-content-boxes-button" ' . OxiAddonsAnimation($styledata, 147) . '>
                            <div class="oxi-button-' . $oxiid . '" id="' . $data[9] . '">' . OxiAddonsTextConvert($data[7]) . '</div>
                        </div>
                    ';
            }

            if ($data[1] != '') {
                $img = '
                        <div class="oxi-addons-content-boxes-images-data">
                            <div class="oxi-addons-content-boxes-images  oxi-addons-content-boxes-images-' . $value['id'] . '">

                           </div>
                         </div>
                    ';
                $css .= '.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-images-' . $value['id'] . '{
                                background: linear-gradient(rgba(255, 255, 255, 0.00), rgba(255, 255, 255, 0.00)), url("' . OxiAddonsUrlConvert($data[1]) . '");
                                -moz-background-size: 100% 100%;
                                -o-background-size: 100% 100%;
                                background-size: 100% 100%;
                            }';
            }
            echo '<div class="' . OxiAddonsItemRows($styledata, 251) . ' ">';
            echo '<div class="oxi-addons-content-boxes-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 53) . '>
                    <div class="oxi-addons-content-boxes-' . $oxiid . '-data"> 
                    ' . $img . '  
                        <div class="oxi-addons-content-boxes-' . $oxiid . '-content">
                            ' . $heading . '
                            ' . $content . '
                            ' . $button . '
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
                    overflow:hidden;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
                }
                .oxi-addons-content-boxes-images-body{
                    width: 100%;
                    float:left;
                    overflow:hidden;
                }
                .oxi-addons-content-boxes-' . $oxiid . '-data{
                    width: 100%;
                    float:left;
                    background:' . $styledata[121] . '; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
                    ' . OxiAddonsBoxShadowSanitize($styledata, 47) . '
                }  
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-images-data{
                    width:100%;
                    float:left;  
                    overflow:hidden; 
                } 
                 
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-images{
                    width:100%;
                    height:' . $styledata[117] . 'px; 
                    float:left;   
                } 
                .oxi-addons-content-boxes-' . $oxiid . ':hover .oxi-addons-content-boxes-images{
                    transform:scale(1.2);
                } 
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-button{   
                    width: 100%;
                    float: left; 
                    text-align: ' . $styledata[129] . ';
                 }
                 .oxi-addons-content-boxes-button .oxi-button-' . $oxiid . '{
                     display: inline-block;
                     padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';;
                     font-size:' . $styledata[123] . 'px;
                     ' . OxiAddonsFontSettings($styledata, 157) . ';    
                     background:' . $styledata[153] . ';
                     color:' . $styledata[127] . ';
                     margin:' . OxiAddonsPaddingMarginSanitize($styledata, 235) . ';
                     border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 183) . ';
                     border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 163) . ';
                     border-style:' . $styledata[179] . '; 
                     border-color:' . $styledata[180] . ';
                }
                .oxi-addons-container .oxi-button-' . $oxiid . ':hover,
                .oxi-addons-container .oxi-button-' . $oxiid . ':focus,
                .oxi-addons-container  .oxi-button-' . $oxiid . ':active{
                    color:' . $styledata[151] . ';
                    background:' . $styledata[155] . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 219) . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 199) . ';
                    border-style:' . $styledata[215] . '; 
                    border-color:' . $styledata[216] . ';
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
                           padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
                       }
                       .oxi-addons-content-boxes-' . $oxiid . '-data{ 
                           padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
                       }   
                       .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-images{
                           height:' . $styledata[118] . 'px;
                       } 
                        .oxi-addons-content-boxes-button .oxi-button-' . $oxiid . '{
                              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 132) . ';;
                              font-size:' . $styledata[124] . 'px;
                              margin:' . OxiAddonsPaddingMarginSanitize($styledata, 236) . ';
                              border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 184) . ';
                              border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 164) . ';S
                         }
                         .oxi-addons-container .oxi-button-' . $oxiid . ':hover,
                         .oxi-addons-container .oxi-button-' . $oxiid . ':focus,
                         .oxi-addons-container  .oxi-button-' . $oxiid . ':active{
                             border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 220) . ';
                             border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 200) . ';
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
                         padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
                     }
                     .oxi-addons-content-boxes-' . $oxiid . '-data{ 
                         padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
                     }              
                     .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-images{
                         height:' . $styledata[119] . 'px;
                     } 
                     oxi-addons-content-boxes-button .oxi-button-' . $oxiid . '{
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 133) . ';;
                        font-size:' . $styledata[125] . 'px;
                        margin:' . OxiAddonsPaddingMarginSanitize($styledata, 237) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 185) . ';
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 165) . ';S
                   }
                   .oxi-addons-container .oxi-button-' . $oxiid . ':hover,
                   .oxi-addons-container .oxi-button-' . $oxiid . ':focus,
                   .oxi-addons-container  .oxi-button-' . $oxiid . ':active{
                       border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 221) . ';
                       border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 201) . ';
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
