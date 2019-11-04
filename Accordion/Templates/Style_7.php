<?php

namespace SHORTCODE_ADDONS_UPLOAD\Accordion\Templates;

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

class Style_7 extends Templates {

    public function default_render($style, $child, $admin) {

//        $arrow_order = '';
//        $icon_order = "style = 'order: 2'";
//        if ($style['sa_el_ac_icon_position'] == 'right') {
//            $arrow_order = 'style="order: 2;"';
//            $icon_order = '';
//        } elseif ($style['sa_el_ac_icon_position'] == 'left') {
//            $arrow_order = '';
//            $icon_order = 'style="order: 2;"';
//        }
        
        $icon_position = '';
        if('sa_el_ac_icon_position' == 'right'){
            $icon_position = 'style=" right: -40px; position: absolute;"';
        }elseif('sa_el_ac_icon_position' == 'left'){
            $icon_position = 'style="left: -40px; position: absolute;"';
        }
        
        

        $all_data = (array_key_exists('sa_accordion_data', $style) && is_array($style['sa_accordion_data'])) ? $style['sa_accordion_data'] : [];

        foreach ($all_data as $key => $data) {

//            print_r('<pre>');
//            print_r($style);
//            print_r('</pre>');

            $icon = $title = $details = '';

//            if ($style['sa_el_ac_arrow_icon'] == 'yes') {
//                $active_icon = '<div class="oxi-addonsAC-SX-active" ' . $arrow_order . '><i class="fas fa-arrow-down oxi-icons"></i></div>';
//                if ($style['sa_el_ac_icon_position'] == 'right') {
//                    $inactive_icon = '<div class="oxi-addonsAC-SX-deactive"  ' . $arrow_order . '><i class="fas fa-arrow-left oxi-icons"></i></div>';
//                } else {
//                    $inactive_icon = '<div class="oxi-addonsAC-SX-deactive"  ' . $arrow_order . '><i class="fas fa-arrow-right oxi-icons"></i></div>';
//                }
//            }
            
          
            
            if ($data['sa_icon_yes_no'] == 'yes') {
                $icon = '<div class="oxi-addons-AC-SV-icon" '.$icon_position.'>' . $this->font_awesome_render($data['sa_el_ac_opening_icon_adding']) . '</div>';
            }
            if (array_key_exists('sa_el_ac_title_adding', $data) && $data['sa_el_ac_title_adding'] != '') {
                $title = '<div class="oxi-addons-AC-SV-header">' . $this->text_render($data['sa_el_ac_title_adding']) . '</div>';
            }
            if (array_key_exists('sa_el_ac_desc_adding', $data) && $data['sa_el_ac_desc_adding'] != '') {
                $details = '<div class="oxi-addons-AC-SV-details" id="oxi-addons-AC-SV-'.$key.'">
                                 ' . $this->text_render($data['sa_el_ac_desc_adding']) . '
                            </div>';
            }
            

            echo '<div class="sa_element_ac_style_7  sa_element_ac_style_7_'.$key.' " ' . $this->animation_render('sa_ac_box_animation', $style) . '>
                        <div class="oxi-addons-AC-SV-panel"  ref="#oxi-addons-AC-SV-'.$key.'">
                            ' . $icon . '
                            ' . $title . '
                            ' . $details . '
                        </div>';
            echo'</div>';
        }
    }

    public function inline_public_jquery() {
        $arraykey = $this->style;
        $jquery = '';


        if (array_key_exists('sa_accordion_data', $this->style)):
            foreach ($this->style['sa_accordion_data'] as $key => $value) {
                if (array_key_exists('sa_ac_active', $value) && $value['sa_ac_active'] == 'yes'):
                    $jquery .= 'jQuery(".sa_element_ac_style_7_' . $key . ' .oxi-addons-AC-SV-panel").addClass("active");
                                jQuery(".sa_element_ac_style_7_' . $key . ' .oxi-addons-AC-SV-panel").next().slideDown();';
                endif;
            }
            if (array_key_exists('sa_el_ac_opening_type', $this->style) && $this->style['sa_el_ac_opening_type'] != 'onebyone'):
                $jquery .= 'jQuery(".oxi-addons-AC-SV-panel").click(function () {
                        if(jQuery(this).hasClass("active")){
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideUp();
                            jQuery(this).removeClass("active");
                        }else{
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(this).addClass("active");
                        }
                    });';
            else:
                $jquery .= 'jQuery(".oxi-addons-AC-SV-panel").click(function () {
                        if(jQuery(this).hasClass("active")){
                            return false;
                        }else{
                            jQuery(".oxi-addons-AC-SV-details").slideUp();
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(".oxi-addons-AC-SV-panel").removeClass("active");
                            jQuery(this).addClass("active");
                        }
                    });
                    ';
            endif;

        endif;
        
//        $opening = '';
//        foreach ($opening as $key => $value) {
//            echo $key;
//        }

        return $jquery;
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $child = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);


        echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">
            <div class="oxi-addons-AC-SV-row">';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            $aticon = $otitle = $details = '';
            if ($data[6] != '') {
                $aticon = '<div class="oxi-addons-AC-SV-icon">' . oxi_addons_font_awesome($data[6]) . '</div>';
            }
            if ($data[2] != '') {
                $otitle = '<div class="oxi-addons-AC-SV-header">' . OxiAddonsTextConvert($data[2]) . '</div>';
            }
            if ($data[4] != '') {
                $details = '<div class="oxi-addons-AC-SV-details" id="oxi-addons-AC-SV-' . $oxiid . '-' . $value['id'] . '">
                                 ' . OxiAddonsTextConvert($data[4]) . '
                            </div>';
            }
            echo '<div class="oxi-addons-AC-SV-' . $oxiid . ' " ref="#oxi-addons-AC-SV-' . $oxiid . '-' . $value['id'] . '" ' . OxiAddonsAnimation($styledata, 61) . '>
                        <div class="oxi-addons-AC-SV-panel" >
                            ' . $aticon . '
                            ' . $otitle . '
                            ' . $details . '
                        </div>';
            echo'</div>';
        }
        echo '</div>
          </div>
        </div>';

        $css = '.oxi-addons-AC-SV-row{
        width: 100%;
        float: left;
    }
    .oxi-addons-AC-SV-' . $oxiid . '{
        width: 100%;
        float: left;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-panel{
      width: 100%;
      float:left;
      position: relative;
      ' . OxiAddonsBGImage($styledata, 65) . '
      border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
      padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
      box-shadow: 0px 5px 0px 0px ' . $styledata[161] . ', 0px 10px 5px ' . $styledata[163] . ';
      transition:none; 
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-panel:active {
      top: 3px;
      box-shadow: 0px 2px 0px 0px ' . $styledata[161] . ', 0px 5px 3px ' . $styledata[163] . ';
    }

    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-panel:active .oxi-addons-AC-SV-icon{
      top: -3px;
      transition:none; 
      box-shadow: 0px 5px 0px 0px ' . $styledata[143] . ', 1px 1px 0px 0px ' . $styledata[143] . ', 2px 2px 0px 0px ' . $styledata[143] . ', 2px 5px 0px 0px ' . $styledata[143] . ', 6px 4px 2px ' . $styledata[143] . ', 0px 10px 5px ' . $styledata[163] . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-icon {
      display: flex;
      justify-content:center;
      align-items: center;
      cursor: pointer;
      position: absolute;
      height: 100%;
      width: 100%;
      max-width: ' . $styledata[133] . 'px;
      max-height: ' . $styledata[133] . 'px;
      left: -' . $styledata[133] . 'px;
      background: ' . $styledata[127] . ';
      top: 0px;
      font-size: ' . $styledata[129] . 'px;
      color: ' . $styledata[137] . ';
      border-right: 1px solid ' . $styledata[143] . ';
      border-radius: 5px 0px 0px 5px;
      text-shadow: 1px 1px 0px ' . $styledata[143] . ';
      box-shadow: inset 0px 1px 0px ' . $styledata[143] . ', 0px 5px 0px 0px ' . $styledata[143] . ', 0px 10px 5px ' . $styledata[163] . ';
      transition:none; 
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-header {
      width: 100%;
      float: left;
      cursor: pointer;
      font-size: ' . $styledata[71] . 'px;
      color: ' . $styledata[69] . ';
      ' . OxiAddonsFontSettings($styledata, 77) . '
      padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
      transition:none; 
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-details {
      display: none;
      width: 100%;
      float: left;
      font-size: ' . $styledata[99] . 'px;
      color: ' . $styledata[103] . ';
      ' . OxiAddonsFontSettings($styledata, 105) . '
      padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 111) . ';
      transition:none;    
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-active .oxi-addons-AC-SV-details {
      display: block;
      width: 100%;
      float: left;
      font-size: ' . $styledata[99] . 'px;
      color: ' . $styledata[103] . ';
      ' . OxiAddonsFontSettings($styledata, 105) . '
      padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 111) . ';
      transition:none; 
    }
    @media only screen and (min-width : 669px) and (max-width : 993px){
    .oxi-addons-AC-SV-' . $oxiid . '{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 40) . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-panel {
      border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
      padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-icon {
      max-width: ' . $styledata[134] . 'px;
      max-height: ' . $styledata[134] . 'px;
      left: -' . $styledata[134] . 'px;
      font-size: ' . $styledata[130] . 'px;
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-header {
      font-size: ' . $styledata[72] . 'px;
      padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 84) . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-details {
      font-size: ' . $styledata[100] . 'px;
      padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 112) . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-active .oxi-addons-AC-SV-details {
      font-size: ' . $styledata[100] . 'px;
      padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 112) . ';
    }
           
    }
    @media only screen and (max-width : 668px){
      .oxi-addons-AC-SV-' . $oxiid . '{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-panel {
      border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
      padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-icon {
      max-width: ' . $styledata[135] . 'px;
      max-height: ' . $styledata[135] . 'px;
      left: -' . $styledata[135] . 'px;
      font-size: ' . $styledata[131] . 'px;
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-header {
      font-size: ' . $styledata[73] . 'px;
      padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-details {
      font-size: ' . $styledata[101] . 'px;
      padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 113) . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-active .oxi-addons-AC-SV-details {
      font-size: ' . $styledata[101] . 'px;
      padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 113) . ';
    }  
            
    }
';

        $jquery = ' jQuery(document).ready(function () {
                    jQuery(".oxi-addons-AC-SV-' . $oxiid . ':first").addClass("oxi-active");
                    jQuery(".oxi-addons-AC-SV-header:first").next().slideDown();
                   ';
        if ($styledata[5] == 'randomly') {
            $jquery .= 'jQuery(".oxi-addons-AC-SV-' . $oxiid . '").click(function () {
                        if(jQuery(this).hasClass("oxi-active")){
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideUp();
                            jQuery(this).removeClass("oxi-active");
                        }else{
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(this).addClass("oxi-active");
                        }
                    });';
        } else {
            $jquery .= 'jQuery(".oxi-addons-AC-SV-' . $oxiid . '").click(function () {
                        if(jQuery(this).hasClass("oxi-active")){
                            return false;
                        }else{
                            jQuery(".oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-details").slideUp();
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(".oxi-addons-AC-SV-' . $oxiid . '").removeClass("oxi-active");
                            jQuery(this).addClass("oxi-active");
                            
                        }
                    });';
        }

        $jquery .= '});';
        echo OxiAddonsInlineCSSData($css);
        echo OxiAddonsInlineCSSData($jquery, 'js');
    }

}
