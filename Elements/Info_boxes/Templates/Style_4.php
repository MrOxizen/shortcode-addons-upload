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

class Style_4 extends Templates
{

    public function default_render($style, $child, $admin)
    {

        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);
            $icon = $heading = $details = '';
            if (array_key_exists('sa_info_boxes_heading', $value) && $value['sa_info_boxes_heading'] != '') {
                $heading = '<' . $style['sa_info_tag'] . ' class="oxi_addons__heading_style_4">' . $this->text_render($value['sa_info_boxes_heading']) . '</' . $style['sa_info_tag'] . '>';
            }
            if (array_key_exists('sa_info_boxes_details', $value) && $value['sa_info_boxes_details'] != '') {
                $details = '<div class="oxi_addons__details_style_4"> ' . $this->text_render($value['sa_info_boxes_details']) . ' </div>';
            }
            if (array_key_exists('sa_info_boxes_fontawesome', $value) && $value['sa_info_boxes_fontawesome'] != '') {
                $icon = '<div class="oxi_addons__icon_style_4">
                ' . $this->font_awesome_render($value['sa_info_boxes_fontawesome']) . '
            </div>';
            }
            echo '  <div class="oxi_addons__info_boxes_wrapper ' . ($admin == "admin" ? 'oxi-addons-admin-edit-list' : '') . ' ' . $this->column_render('sa_info_boxes_column', $style) . '">
                            <div class="oxi_addons__info_boxes_main_style_4">
                                ' . $icon . '
                                ' . $heading . '
                                ' . $details . '
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
            $icons = $title = $content =  '';
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
                $content =  '<div class="oxi-info-contetn">
                   ' . OxiAddonsTextConvert($files[3]) . '
               </div>';
            }
            echo '      <div class="oxi-add-info-box-' . $oxiid . '-padding ' . OxiAddonsItemRows($styledata, 1) . ' " ' . OxiAddonsAnimation($styledata, 159) . ' >
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
       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';                
   }
  .oxi-add-info-box' . $oxiid . ' .oxi-info-body{
       background: ' . $styledata[163] . ';
      ' . OxiAddonsBoxShadowSanitize($styledata, 249) . ';
       border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 169) . ' ;
       border-style: ' . $styledata[165] . ';
       border-color: ' . $styledata[166] . ';
       border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 185) . ';
       display: flex;
       flex-direction: column;
       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . ';
  }
  .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover{
       background: ' . $styledata[223] . ';
      ' . OxiAddonsBoxShadowSanitize($styledata, 201) . ';
       border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 229) . ' ;
       border-style: ' . $styledata[225] . ';
       border-color: ' . $styledata[226] . ';

  }         
  .oxi-add-info-box' . $oxiid . ' .oxi-info-icon{
       font-size: ' . $styledata[37] . 'px;
       display: flex;
       justify-content: ' . $styledata[75] . ';
       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 207) . ';

  }

   .oxi-add-info-box' . $oxiid . ' .oxi-info-icon-icons{
       background:' . $styledata[57] . ';
       border-width: ' . $styledata[51] . 'px;
       border-style: ' . $styledata[52] . ';
       border-color: ' . $styledata[55] . ';
       border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 59) . ';
       color: ' . $styledata[41] . ';
   }
   
   .oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons {
       height: ' . $styledata[43] . 'px ;
       width: ' . $styledata[43] . 'px ;
       align-items: center;
       display: flex;
       justify-content: center;
       transition: none !important;
   }
   
  .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-icon-icons{
      background: ' . $styledata[97] . ';
      color: ' . $styledata[77] . ';
      border-color: ' . $styledata[95] . ';
      border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 79) . ';
  }
  
  .oxi-add-info-box' . $oxiid . ' .oxi-info-title{
      width: 100%;
      float: left;
      color: ' . $styledata[113] . ';
      font-size: ' . $styledata[103] . 'px;
      ' . OxiAddonsFontSettings($styledata, 107) . ';
      padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 115) . ';
  }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-title{
       color:' . $styledata[245] . ';
   }
  .oxi-add-info-box' . $oxiid . ' .oxi-info-contetn{
      font-size: ' . $styledata[133] . 'px;
      color: ' . $styledata[135] . ';
      ' . OxiAddonsFontSettings($styledata, 137) . '; 
      padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 143) . ';
  }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-contetn{
       color:' . $styledata[247] . ';
   }
@media only screen and (min-width : 669px) and (max-width : 993px){
   .oxi-add-info-box-' . $oxiid . '-padding{
       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 6) . ';                
   }
  .oxi-add-info-box' . $oxiid . ' .oxi-info-body{
       border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 170) . ' ;
       border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 186) . ';
       margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 22) . ';
  }
  .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover{
       border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 230) . ' ;
  }         
  .oxi-add-info-box' . $oxiid . ' .oxi-info-icon{
       font-size: ' . $styledata[38] . 'px;
       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 208) . ';

  }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-icon-icons{
       border-width: ' . $styledata[52] . 'px;
       border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 60) . ';
   }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons {
       height: ' . $styledata[44] . 'px ;
       width: ' . $styledata[44] . 'px ;
   }
   
  .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-icon-icons{
      border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 80) . ';
  }
  .oxi-add-info-box' . $oxiid . ' .oxi-info-title{
      padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 116) . ';
  }
  .oxi-add-info-box' . $oxiid . ' .oxi-info-contetn{
      font-size: ' . $styledata[134] . 'px;
      padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 144) . ';
  }

}
@media only screen and (max-width : 668px){

   .oxi-add-info-box-' . $oxiid . '-padding{
       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';                
   }
  .oxi-add-info-box' . $oxiid . ' .oxi-info-body{
       border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 171) . ' ;
       border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
       margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
  }
  .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover{
       border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 231) . ' ;
  }         
  .oxi-add-info-box' . $oxiid . ' .oxi-info-icon{
       font-size: ' . $styledata[39] . 'px;
       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 209) . ';
      display: flex;
      justify-content: center;

  }
   .oxi-add-info-box' . $oxiid . ' .oxi-info-icon-icons{
       border-width: ' . $styledata[53] . 'px;
       border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 61) . ';
   }
   
   .oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons {
       height: ' . $styledata[45] . 'px ;
       width: ' . $styledata[45] . 'px ;
   }
  .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-icon-icons{
      border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
  }
  
  .oxi-add-info-box' . $oxiid . ' .oxi-info-title{
      padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 117) . ';
      display: flex;
      justify-content: center;
  }
  .oxi-add-info-box' . $oxiid . ' .oxi-info-contetn{
      font-size: ' . $styledata[135] . 'px;
      padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 145) . ';
      display: flex;
      justify-content: center;
  } 
}
';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
