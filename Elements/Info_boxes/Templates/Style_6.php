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

class Style_6 extends Templates
{

    public function default_render($style, $child, $admin)
    {

        foreach ($child as $v) {
            $value = json_decode($v['rawdata'], true);
            $icon = $heading = $details = $button = '';

            if ($value['sa_info_boxes_button_link-url'] != '') {
                $button = '<div class="oxi_addons__button"><a ' . $this->url_render('sa_info_boxes_button_link', $value) . ' class="oxi-buttons">
                ' . $this->text_render($value['sa_info_boxes_button_text']) . '
            </a></div>';
            } elseif ($value['sa_info_boxes_button_link-url'] == '' && $value['sa_info_boxes_button_text'] != '') {
                $button = '<div class="oxi_addons__button"><button class="oxi-buttons" ' . ($value['sa_info_boxes_button_link-id'] != '' ? 'id="' . $value['sa_info_boxes_button_link-id'] . '"' : '') . '>
                ' . $this->text_render($value['sa_info_boxes_button_text']) . '
            </button></div>';
            }

            if ($value['sa_info_boxes_heading'] != '') {
                $heading = '<' . $style['sa_info_tag'] . ' class="oxi_addons__heading_style_6">' . $this->text_render($value['sa_info_boxes_heading']) . '</' . $style['sa_info_tag'] . '>';
            }
            if ($value['sa_info_boxes_details'] != '') {
                $details = '<div class="oxi_addons__details_style_6"> ' . $this->text_render($value['sa_info_boxes_details']) . ' </div>';
            }
            if ($value['sa_info_boxes_fontawesome'] != '') {
                $icon = '<div class="oxi_addons__icon_style_6">
                ' . $this->font_awesome_render($value['sa_info_boxes_fontawesome']) . '
            </div>';
            }
            echo '  <div class="oxi_addons__info_boxes_wrapper ' . ($admin == "admin" ? 'oxi-addons-admin-edit-list' : '') . ' ' . $this->column_render('sa_info_boxes_column', $style) . '">
                            <div class="oxi_addons__info_boxes_main_style_6">
                                ' . $icon . '
                                ' . $heading . '
                                ' . $details . '
                                ' . $button . '
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
            $icons = $title = $content = $buttonText = '';
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
            if ($files[3] != '') {
                $content = ' <div class="oxi-info-contetn">
                    ' . OxiAddonsTextConvert($files[3]) . '
                 </div>';
            } //$buttonText
            if ($files[7] != '' && $files[9] != '') {
                $buttonText = ' <div class="oxi-info-link">
                        <a href="' . OxiAddonsUrlConvert($files[7]) . '" target="' . $styledata[253] . '" > <span class="oxi-info-link-text">' . OxiAddonsTextConvert($files[9]) . '</span></a>
                    </div>';
            }
            echo '      <div class="oxi-add-info-box-' . $oxiid . '-padding ' . OxiAddonsItemRows($styledata, 1) . '" ' . OxiAddonsAnimation($styledata, 153) . ' >
                    <div class="oxi-info-body">
                        ' . $icons . '
                        ' . $title . '
                        ' . $content . '
                        ' . $buttonText . '
                        
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
            ' . OxiAddonsBoxShadowSanitize($styledata, 159) . ';
        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 169) . ' ;
        border-style: ' . $styledata[165] . ';
        border-color: ' . $styledata[166] . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 185) . ';
        
        display: flex;
        flex-direction: column;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
   }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover{
       ' . OxiAddonsBoxShadowSanitize($styledata, 147) . ';
        background: ' . $styledata[291] . ';
        border-style: ' . $styledata[293] . ';
        border-color: ' . $styledata[294] . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 297) . ';
            
   }         
   .oxi-add-info-box' . $oxiid . ' .oxi-info-icon{
        font-size: ' . $styledata[39] . 'px;
        display: flex;
        justify-content: ' . $styledata[73] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 75) . ';
   }

    .oxi-add-info-box' . $oxiid . ' .oxi-info-icon-icons{
        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 271) . ' ;
        border-style: ' . $styledata[287] . ';
        border-color: ' . $styledata[288] . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 57) . ';
        color: ' . $styledata[43] . ';
        background: ' . $styledata[157] . ';
    }
    .oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons {
        height: ' . $styledata[45] . 'px ;
        width: ' . $styledata[45] . 'px ;
        align-items: center;
        display: flex;
        justify-content: center;
        transition: none !important;
    }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-icon-icons{
        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 337) . ' ;
        border-style: ' . $styledata[317] . ';
        border-color: ' . $styledata[318] . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 321) . ';
        color: ' . $styledata[315] . ';
        background: ' . $styledata[313] . ';
   }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-title{
       width: 100%;
       float: left;
       color: ' . $styledata[95] . ';
       font-size: ' . $styledata[91] . 'px;
       ' . OxiAddonsFontSettings($styledata, 97) . ';
       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
   }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-title{
       color: ' . $styledata[353] . ';
    }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-contetn{
       font-size: ' . $styledata[119] . 'px;
       color: ' . $styledata[123] . ';
       ' . OxiAddonsFontSettings($styledata, 125) . '; 
       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
   }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-contetn{
       color: ' . $styledata[355] . ';
    }
       
   .oxi-add-info-box' . $oxiid . ' .oxi-info-link{
       width: 100%;
       float: right;
       text-align: ' . $styledata[381] . ';
       padding:' . OxiAddonsPaddingMarginSanitize($styledata, 383) . ';
    }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-link-text{
    ' . OxiAddonsFontSettings($styledata, 209) . '; 
        font-size: ' . $styledata[203] . ';
        background: ' . $styledata[215] . ';
        border-width: ' . $styledata[221] . 'px;
        border-style: ' . $styledata[217] . ';
        border-color: ' . $styledata[218] . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 237) . ';
        color: ' . $styledata[207] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 255) . ';
   }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-link a:hover .oxi-info-link-text{
        background: ' . $styledata[359] . ';
        border-style: ' . $styledata[361] . ';
        border-color: ' . $styledata[362] . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 365) . ';
        color: ' . $styledata[357] . ';
    }
@media only screen and (min-width : 669px) and (max-width : 993px){
    .oxi-add-info-box' . $oxiid . '{
        width: 100%;
    }
    .oxi-add-info-box-' . $oxiid . '-padding{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';                
    }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-body{
        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 170) . ' ;
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 186) . ';
        display: flex;
        flex-direction: column;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
   }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover{
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 298) . ';
   }         
   .oxi-add-info-box' . $oxiid . ' .oxi-info-icon{
        font-size: ' . $styledata[40] . 'px;
        display: flex;
        justify-content: ' . $styledata[74] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 76) . ';
   }
    .oxi-add-info-box' . $oxiid . ' .oxi-info-icon-icons{
        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 272) . ' ;
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 58) . ';
    }
    .oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons {
        height: ' . $styledata[46] . 'px ;
        width: ' . $styledata[46] . 'px ;
        align-items: center;
        display: flex;
        justify-content: center;
    }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-icon-icons{
        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 338) . ' ;
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 322) . ';
   }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-title{
       width: 100%;
       float: left;
       font-size: ' . $styledata[92] . 'px;
       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 104) . ';
   }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-contetn{
       font-size: ' . $styledata[120] . 'px;
       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 132) . ';
   }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-link{
       display: flex;
       justify-content: center;
    }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-link-text{
        font-size: ' . $styledata[204] . ';
        border-width: ' . $styledata[222] . 'px;
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 238) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 256) . ';
   }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-link a:hover .oxi-info-link-text{
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 366) . ';
    } 
}
@media only screen and (max-width : 668px){
    .oxi-add-info-box' . $oxiid . '{
        width: 100%;
    }
    .oxi-add-info-box-' . $oxiid . '-padding{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';                
    }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-body{
        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 171) . ' ;
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
        display: flex;
        flex-direction: column;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
   }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover{
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 299) . ';
   }         
   .oxi-add-info-box' . $oxiid . ' .oxi-info-icon{
        font-size: ' . $styledata[41] . 'px;
        display: flex;
        justify-content: ' . $styledata[75] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 77) . ';
   }

    .oxi-add-info-box' . $oxiid . ' .oxi-info-icon-icons{
        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 273) . ' ;
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 59) . ';
    }
    .oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons {
        height: ' . $styledata[47] . 'px ;
        width: ' . $styledata[47] . 'px ;
        align-items: center;
        display: flex;
        justify-content: center;
    }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-icon-icons{
        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 339) . ' ;
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 323) . ';
   }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-title{
       width: 100%;
       float: left;
       font-size: ' . $styledata[93] . 'px;
       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 105) . ';
   }

   .oxi-add-info-box' . $oxiid . ' .oxi-info-contetn{
       font-size: ' . $styledata[121] . 'px;
       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 133) . ';
   }

   .oxi-add-info-box' . $oxiid . ' .oxi-info-link{
       display: flex;
       justify-content: center;
    }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-link-text{
        font-size: ' . $styledata[205] . ';
        border-width: ' . $styledata[223] . 'px;
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 239) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 257) . ';
   }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-link a:hover .oxi-info-link-text{
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 367) . ';
    }
   
}
';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
