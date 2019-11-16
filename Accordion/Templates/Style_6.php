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

class Style_6 extends Templates {

    public function default_render($style, $child, $admin) {

        $arrow_order = '';
        $icon_order = "style = 'order: 2'";
        if ($style['sa_el_ac_icon_position'] == 'right') {
            $arrow_order = 'style="order: 2;"';
            $icon_order = '';
        } elseif ($style['sa_el_ac_icon_position'] == 'left') {
            $arrow_order = '';
            $icon_order = 'style="order: 2;"';
        }

        $all_data = (array_key_exists('sa_accordion_data', $style) && is_array($style['sa_accordion_data'])) ? $style['sa_accordion_data'] : [];

        foreach ($all_data as $key => $data) {


//            print_r('<pre>');
//            print_r($style);
//            print_r('</pre>');

            $active_icon = $inactive_icon = $icon = $heading = $details = '';


            if ($style['sa_el_ac_arrow_icon'] == 'yes') {
                $active_icon = '<div class="oxi-addonsAC-SX-active" ' . $arrow_order . '><i class="fas fa-arrow-down oxi-icons"></i></div>';
                if ($style['sa_el_ac_icon_position'] == 'right') {
                    $inactive_icon = '<div class="oxi-addonsAC-SX-deactive"  ' . $arrow_order . '><i class="fas fa-arrow-left oxi-icons"></i></div>';
                } else {
                    $inactive_icon = '<div class="oxi-addonsAC-SX-deactive"  ' . $arrow_order . '><i class="fas fa-arrow-right oxi-icons"></i></div>';
                }
            }
            if ($data['sa_icon_yes_no'] == 'yes') {
                $icon = '<div class="icon_setting"  ' . $icon_order . '>' . $this->font_awesome_render($data['sa_el_ac_opening_icon_adding']) . '</div>';
            }
            if (array_key_exists('sa_el_ac_title_adding', $data) && $data['sa_el_ac_title_adding'] != '') {
                $heading = '<div class="oxi-addonsAC-SX-heading">' . $this->text_render($data['sa_el_ac_title_adding']) . '</div>';
            }
            if (array_key_exists('sa_el_ac_desc_adding', $data) && $data['sa_el_ac_desc_adding'] != '') {
                $details = '<div class="oxi-addonsAC-SX-C" id="oxi-addonsAC-SX-H-id' . $key . '">
                            <div class="oxi-addonsAC-SX-C-b">
                                ' . $this->text_render($data['sa_el_ac_desc_adding']) . '
                            </div>
                        </div>';
            }
            echo '<div class="sa_whole_div_ac_style_6">';
            echo '<div class="sa_element_ac_style_6    sa_element_ac_style_6_' . $key . ' " ' . $this->animation_render('sa_ac_box_animation', $style) . '>
                            <div class="oxi-addonsAC-SX-H" ref="#oxi-addonsAC-SX-H-id' . $key . '">
                                ' . $active_icon . '
                                ' . $inactive_icon . '
                                ' . $icon . '
                                ' . $heading . '
                            </div>
                            ' . $details . '';
            echo '</div>';
            echo '</div>';
        }
    }

    public function inline_public_jquery() {
        $arraykey = $this->style;
        $jquery = '';


        if (array_key_exists('sa_accordion_data', $this->style)):
            foreach ($this->style['sa_accordion_data'] as $key => $value) {
                if (array_key_exists('sa_ac_active', $value) && $value['sa_ac_active'] == 'yes'):
                    $jquery .= 'jQuery(".sa_element_ac_style_6_' . $key . ' .oxi-addonsAC-SX-H").addClass("active");
                                jQuery(".sa_element_ac_style_6_' . $key . ' .oxi-addonsAC-SX-H").next().slideDown();';
                endif;
            }
            if (array_key_exists('sa_el_ac_opening_type', $this->style) && $this->style['sa_el_ac_opening_type'] != 'onebyone'):
                $jquery .= 'jQuery(".' . $this->WRAPPER . ' .oxi-addonsAC-SX-H").click(function () {
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
                $jquery .= 'jQuery(".' . $this->WRAPPER . ' .oxi-addonsAC-SX-H").click(function () {
                        if(jQuery(this).hasClass("active")){
                            return false;
                        }else{
                            jQuery(".' . $this->WRAPPER . ' .oxi-addonsAC-SX-C").slideUp();
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(".' . $this->WRAPPER . ' .oxi-addonsAC-SX-H").removeClass("active");
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
            <div class="oxi-addons-AC-SX-row">';
        foreach ($child as $value) {
            $data = explode('||#||', $value['files']);
            $aticon = $atdicon = $atheding = $atdetails = '';
            if ($stylefiles[2] != '') {
                $aticon = '<div class="oxi-addonsAC-SX-active">' . oxi_addons_font_awesome($stylefiles[2]) . '</div>';
            }
            if ($stylefiles[4] != '') {
                $atdicon = '<div class="oxi-addonsAC-SX-deactive">' . oxi_addons_font_awesome($stylefiles[4]) . '</div>';
            }
            if ($data[2] != '') {
                $atheding = '<div class="oxi-addonsAC-SX-heading">' . OxiAddonsTextConvert($data[2]) . '</div>';
            }
            if ($data[4] != '') {
                $atdetails = '<div class="oxi-addonsAC-SX-C-' . $oxiid . '" id="oxi-addonsAC-SX-H-' . $oxiid . '-id-' . $value['id'] . '">
                            <div class="oxi-addonsAC-SX-C-' . $oxiid . '-b">
                                ' . OxiAddonsTextConvert($data[4]) . '
                            </div>
                        </div>';
            }
            echo '<div class="oxi-addons-AC-SX-' . $oxiid . ' ' . OxiAddonsAdminDefine('') . '" ' . OxiAddonsAnimation($styledata, 69) . '>
                        <div class="oxi-addonsAC-SX-H-' . $oxiid . '" ref="#oxi-addonsAC-SX-H-' . $oxiid . '-id-' . $value['id'] . '">
                            ' . $aticon . '
                            ' . $atdicon . '
                            ' . $atheding . '
                        </div>
                        ' . $atdetails . '';
            echo '</div>';
        }
        echo '</div>
        </div>
    </div>';

        $iconposition = $styledata[279] == 'right' ? "order: -1" : "order: 1";
        $css = '.oxi-addons-AC-SX-row{
            width: 100%;
            float: left;
            border-bottom: ' . $styledata[9] . 'px ' . $styledata[10] . '  ' . $styledata[13] . ';
            transition:none;
        }
        .oxi-addons-AC-SX-' . $oxiid . '{
            width: 100%;
            float:left;
            border-top: ' . $styledata[9] . 'px ' . $styledata[10] . '  ' . $styledata[13] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 47) . ';
            transition:none;
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '{
            width: 100%;
            float: left;
            cursor: pointer;
            display: flex;
            align-items: center;
            ' . OxiAddonsBGImage($styledata, 5) . '
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 63) . ';
            transition:none;
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . ' .oxi-addonsAC-SX-heading{
            width: calc(100% - 40px);
            float: left;
            ' . $iconposition . ';
            font-size: ' . $styledata[73] . 'px;
            color: ' . $styledata[77] . ';
            ' . OxiAddonsFontSettings($styledata, 79) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';
            transition:none;
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '.active .oxi-addonsAC-SX-heading, .oxi-addonsAC-SX-H-' . $oxiid . ':hover  .oxi-addonsAC-SX-heading{
            color: ' . $styledata[101] . ';
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '.active .oxi-addonsAC-SX-active{
            display: flex;
            float: left;
            align-items: center;
            justify-content: center;
            background: ' . $styledata[157] . ';
            font-size: ' . $styledata[161] . 'px;
            width: 100%;
            max-width: ' . $styledata[165] . 'px;
            height: ' . $styledata[165] . 'px;
            color: ' . $styledata[169] . ';
            border: ' . $styledata[173] . 'px ' . $styledata[174] . '  ' . $styledata[177] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 179) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 195) . ';
            transition:none;
            
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . ' .oxi-addonsAC-SX-deactive{
            display: flex;
            float: left;
            align-items: center;
            justify-content: center;
            background: ' . $styledata[103] . ';
            font-size: ' . $styledata[107] . 'px;
            width:100%;
            max-width: ' . $styledata[111] . 'px;
            height: ' . $styledata[111] . 'px;
            color: ' . $styledata[115] . ';
            border: ' . $styledata[119] . 'px ' . $styledata[120] . '  ' . $styledata[123] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 125) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 141) . ';
            transition:none;
            
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . ':hover .oxi-addonsAC-SX-deactive{
            color: ' . $styledata[117] . ';
            border-color: ' . $styledata[159] . ';
            background: ' . $styledata[105] . '; 
            transition:none;
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . ' .oxi-addonsAC-SX-active{
            display: none;
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '.active .oxi-addonsAC-SX-deactive{
            display: none;
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '{
            display: none;
            width: 100%;
            float: left;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 263) . ';
            transition:none;
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '-b{
            width: 100%;
            float: left;
            background: ' . $styledata[211] . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 225) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 231) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 247) . ';
            transition:none;
            
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '-b,
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '-b p{
            font-size: ' . $styledata[213] . 'px;
            color: ' . $styledata[217] . ';
            ' . OxiAddonsFontSettings($styledata, 219) . '
            transition:none;
            
        }
    @media only screen and (min-width : 669px) and (max-width : 993px){
        .oxi-addons-AC-SX-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 48) . ';
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . ' .oxi-addonsAC-SX-heading{
            font-size: ' . $styledata[74] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 86) . ';
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '.active .oxi-addonsAC-SX-active{
            font-size: ' . $styledata[162] . 'px;
            width: 100%;
            max-width: ' . $styledata[166] . 'px;
            height: ' . $styledata[166] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 180) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 196) . ';
            
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . ' .oxi-addonsAC-SX-deactive{
            font-size: ' . $styledata[108] . 'px;
            width: 100%;
            max-width: ' . $styledata[112] . 'px;
            height: ' . $styledata[112] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 126) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 142) . ';
            
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '{
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 264) . ';
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '-b{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 232) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 248) . ';
            
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '-b,
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '-b p{
            font-size: ' . $styledata[214] . 'px;
            
        }
           
    }
    @media only screen and (max-width : 668px){
        .oxi-addons-AC-SX-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . ' .oxi-addonsAC-SX-heading{
            font-size: ' . $styledata[75] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '.active .oxi-addonsAC-SX-active{
            font-size: ' . $styledata[163] . 'px;
            width: 100%;
            max-width: ' . $styledata[167] . 'px;
            height: ' . $styledata[167] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 181) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 197) . ';
            
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . ' .oxi-addonsAC-SX-deactive{
            font-size: ' . $styledata[109] . 'px;
            width: 100%;
            max-width: ' . $styledata[113] . 'px;
            height: ' . $styledata[113] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 143) . ';
            
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '{
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 165) . ';
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '-b{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 233) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 249) . ';
            
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '-b,
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '-b p{
            font-size: ' . $styledata[215] . 'px;
            
        }
    }';

        $jquery = ' jQuery(document).ready(function () {
                    jQuery(".oxi-addonsAC-SX-H-' . $oxiid . '' . $styledata[3] . '").addClass("active");
                    jQuery(".oxi-addonsAC-SX-H-' . $oxiid . '' . $styledata[3] . '").next().slideDown();
                   ';
        if ($styledata[281] == 'randomly') {
            $jquery .= 'jQuery(".oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '").click(function () {
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
        } else {
            $jquery .= 'jQuery(".oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '").click(function () {
                        if(jQuery(this).hasClass("active")){
                            return false;
                        }else{
                            jQuery(".oxi-addonsAC-SX-C-' . $oxiid . '").slideUp();
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(".oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '").removeClass("active");
                            jQuery(this).addClass("active");
                            
                        }
                    });';
        }

        $jquery .= '});';


        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }

}
