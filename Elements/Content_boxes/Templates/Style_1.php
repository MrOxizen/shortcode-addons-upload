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

class Style_1 extends Templates {
    
    

    public function default_render($style, $child, $admin) {
        $class = '';
        if($style['sa-max-w-condition'] == 'custom'){
            $class = 'sa-max-w-auto';
        }elseif($style['sa-max-w-condition'] == 'dynamic'){
            $class = '';
        }
        
        if($admin == 'admin'){
            $admin_class = 'oxi-addons-admin-edit-list';
        }else{
            $admin_class = '';
        }

        foreach ($child as $v) {
            $data = json_decode($v['rawdata'], true);
            
            $heading = $content = $button = '';
            if ($data['sa_el_title'] != '') {
                $heading .= '<div class="oxi-addons-content-boxes-heading">
                                ' . $this->text_render($data['sa_el_title']) . '
                            </div>';
            }
            if ($data['sa_el_content'] != '') {
                $content .= '<div class="oxi-addons-content-boxes-content">
                                ' . $this->text_render($data['sa_el_content']) . '
                            </div> ';
            }
            if ($data['sa_el_btn_text'] != '') {
                $button .= '<div class="oxi-addons-content-boxes-button" >
                                <a  class="oxi-button" ' . $this->url_render('sa_el_btn_link', $data) . '>' . $this->text_render($data['sa_el_btn_text']) .'</a>
                            </div>';
            }
            
            echo '<div class="'.$this->column_render('sa-ac-column', $style).' '.$admin_class.'">';
            echo '<div class="oxi-addons-content-boxes '.$class.' ">
                        <div class="oxi-addons-content-boxes-data"  >
                            ' . $heading . '
                            ' . $content . '
                            ' . $button . '
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
        echo '<div class="oxi-addons-container">
             <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            $heading = $content = $button = '';
            if ($data[8] != '') {
                $href = 'href="' . OxiAddonsUrlConvert($data[9]) . '"';
                if ($styledata[277] != '') {
                    $target = 'target="' . $styledata[277] . '"';
                }
            }
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
            if ($data[5] != '' && $data[8] != '') {
                $button = '
                        <div class="oxi-addons-content-boxes-button" ' . OxiAddonsAnimation($styledata, 173) . '>
                            <a ' . $target . ' ' . $href . ' class="oxi-button-' . $oxiid . '" id="' . $data[7] . '">' . OxiAddonsTextConvert($data[5]) . '</a>
                        </div>
                    ';
            } elseif ($data[5] != '' && $data[8] == '') {
                $button = '
                        <div class="oxi-addons-content-boxes-button" ' . OxiAddonsAnimation($styledata, 173) . '>
                            <div  class="oxi-button-' . $oxiid . '" id="' . $data[7] . '">' . OxiAddonsTextConvert($data[5]) . '</div>
                        </div>
                     ';
            }


            echo '<div class="' . OxiAddonsItemRows($styledata, 279) . ' ">';
            echo '<div class="oxi-addons-content-boxes-' . $oxiid . '">
                        <div class="oxi-addons-content-boxes-' . $oxiid . '-data"  ' . OxiAddonsAnimation($styledata, 89) . '>                        
                            ' . $heading . '
                            ' . $content . '            
                            ' . $button . '            
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
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
                    border-style:' . $styledata[31] . '; 
                    border-color:' . $styledata[32] . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 51) . ';
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 67) . ';
                    ' . OxiAddonsBoxShadowSanitize($styledata, 83) . '
                }                          
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-heading{
                   width: 100%;
                   float:left;
                   color: ' . $styledata[121] . ';
                   font-size: ' . $styledata[117] . 'px;
                   ' . OxiAddonsFontSettings($styledata, 123) . '    
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';   
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-content{
                   width: 100%;
                   float:left;
                   color: ' . $styledata[149] . ';
                   font-size: ' . $styledata[145] . 'px;
                   ' . OxiAddonsFontSettings($styledata, 151) . '    
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 157) . ';   
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-button{      
                    width:100%;
                    float:left;
                    text-align:' . $styledata[99] . ';
                 }
                 .oxi-addons-content-boxes-button .oxi-button-' . $oxiid . '{
                    display:inline-block;
                    font-size:' . $styledata[93] . 'px;
                    ' . OxiAddonsFontSettings($styledata, 199) . '    
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
                    margin:' . OxiAddonsPaddingMarginSanitize($styledata, 183) . ';
                    color:' . $styledata[97] . ';
                    background:' . $styledata[179] . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 225) . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 205) . ';
                    border-style:' . $styledata[221] . '; 
                    border-color:' . $styledata[222] . ';
                }
                .oxi-addons-container .oxi-button-' . $oxiid . ':hover,
                .oxi-addons-container .oxi-button-' . $oxiid . ':focus,
                .oxi-addons-container  .oxi-button-' . $oxiid . ':active{
                    color:' . $styledata[177] . ';
                    background:' . $styledata[181] . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 261) . ';
                    border-style:' . $styledata[257] . '; 
                    border-color:' . $styledata[258] . ';
                    
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){
                   .oxi-addons-content-boxes-' . $oxiid . '{
                        max-width: ' . $styledata[4] . 'px;
                    }
                    .oxi-addons-content-boxes-' . $oxiid . '-data{ 
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 36) . ';
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 52) . ';
                        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 68) . ';
                    }                    
                    .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-heading{                      
                       font-size: ' . $styledata[118] . 'px;
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . ';   
                    }
                    .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-content{
                       font-size: ' . $styledata[146] . 'px;   
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 158) . ';   
                    } 
                     .oxi-addons-content-boxes-button .oxi-button-' . $oxiid . '{
                        font-size:' . $styledata[94] . 'px;                        
                        padding:' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
                        margin:' . OxiAddonsPaddingMarginSanitize($styledata, 184) . ';                        
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 226) . ';
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 206) . ';
                    }
                    .oxi-addons-container .oxi-button-' . $oxiid . ':hover,
                    .oxi-addons-container .oxi-button-' . $oxiid . ':focus,
                    .oxi-addons-container  .oxi-button-' . $oxiid . ':active{
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 262) . ';
                    }
                }
                @media only screen and (max-width : 668px){
                    .oxi-addons-content-boxes-' . $oxiid . '{
                        max-width: ' . $styledata[5] . 'px;
                    }
                    .oxi-addons-content-boxes-' . $oxiid . '-data{ 
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 37) . ';
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 53) . ';
                        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 69) . ';
                    }
                    .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-heading{
                       font-size: ' . $styledata[119] . 'px;
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';   
                    }
                    .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-content{
                       font-size: ' . $styledata[147] . 'px;   
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 159) . ';   
                    } 
                     .oxi-addons-content-boxes-button .oxi-button-' . $oxiid . '{
                        font-size:' . $styledata[95] . 'px;                        
                        padding:' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
                        margin:' . OxiAddonsPaddingMarginSanitize($styledata, 185) . ';                        
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 227) . ';
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 207) . ';
                    }
                    .oxi-addons-container .oxi-button-' . $oxiid . ':hover,
                    .oxi-addons-container .oxi-button-' . $oxiid . ':focus,
                    .oxi-addons-container  .oxi-button-' . $oxiid . ':active{
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 263) . ';
                    }
                }
                ';

        $jquery = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-addons-content-boxes-' . $oxiid . '-data"));}, 500);';

        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-animation', $jquery);
    }

}
