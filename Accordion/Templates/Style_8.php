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

class Style_8 extends Templates {

    public function default_render($style, $child, $admin) {

        $arrow_position = '';
        $icon_position = '';
        if ($style['sa_el_ac_icon_position'] == 'right') {
            $arrow_position = 'style="right: 0; transform: translate(50%, -50%); top: 50%;"';
            $icon_position = 'style="left: 0; transform: translate(-50%, -50%); top: 50%;"';
        } elseif ($style['sa_el_ac_icon_position'] == 'left') {
            $arrow_position = 'style="left: 0; transform: translate(-50%, -50%); top: 50%;"';
            $icon_position = 'style="right: 0; transform: translate(50%, -50%); top: 50%;"';
        }


        
        
        
//        
//        element {
//	left: 0;
//	transform: translate(-50%, -50%);
//	top: 50%;
//}
        
        
        
        



        $all_data = (array_key_exists('sa_accordion_data', $style) && is_array($style['sa_accordion_data'])) ? $style['sa_accordion_data'] : [];

        foreach ($all_data as $key => $data) {


//            print_r('<pre>');
//            print_r($style);
//            print_r('</pre>');


            $active_icon = $inactive_icon = $icon = $heading = $details = '';

            if ($style['sa_el_ac_arrow_icon'] == 'yes') {
                $active_icon = '<div class="oxi-addons-AC-EG-active" ' . $arrow_position . '><i class="fas fa-minus oxi-icons"></i></div>';
                if ($style['sa_el_ac_icon_position'] == 'right') {
                    $inactive_icon = '<div class="oxi-addons-AC-EG-deactive"  ' . $arrow_position . '><i class="fas fa-plus oxi-icons"></i></div>';
                } else {
                    $inactive_icon = '<div class="oxi-addons-AC-EG-deactive"  ' . $arrow_position . '><i class="fas fa-plus oxi-icons"></i></div>';
                }
            }
            if ($data['sa_icon_yes_no'] == 'yes') {
                $icon = '<div class="icon_setting"  ' . $icon_position . '>' . $this->font_awesome_render($data['sa_el_ac_opening_icon_adding']) . '</div>';
            }
            if (array_key_exists('sa_el_ac_title_adding', $data) && $data['sa_el_ac_title_adding'] != '') {
                $heading = '<div class="oxi-addons-AC-EG-heading">' . $this->text_render($data['sa_el_ac_title_adding']) . '</div>';
            }
            if (array_key_exists('sa_el_ac_desc_adding', $data) && $data['sa_el_ac_desc_adding'] != '') {
                $details = '<div class="oxi-addons-AC-EG-C" id="oxi-addons-AC-EG-H-id-' . $key . '">
                                <div class="oxi-addons-AC-EG-C-b">
                                    ' . $this->text_render($data['sa_el_ac_desc_adding']) . '
                                </div>
                            </div>';
            }
            echo '<div class="sa_element_ac_style_8 sa_element_ac_style_8_' . $key . ' " ' . $this->animation_render('sa_ac_box_animation', $style) . '>
                        <div class="oxi-addons-AC-EG-H" ref="#oxi-addons-AC-EG-H-id-' . $key . '">
                            ' . $active_icon . '
                            ' . $inactive_icon . '
                            ' . $icon . '
                            ' . $heading . '
                        </div>
                        ' . $details . '';
            echo '</div>';
        }
    }

    public function inline_public_jquery() {
        $arraykey = $this->style;
        $jquery = '';


        if (array_key_exists('sa_accordion_data', $this->style)):
            foreach ($this->style['sa_accordion_data'] as $key => $value) {
                if (array_key_exists('sa_ac_active', $value) && $value['sa_ac_active'] == 'yes'):
                    $jquery .= 'jQuery(".' . $this->WRAPPER . ' .sa_element_ac_style_8_' . $key . '   .oxi-addons-AC-EG-H").addClass("active");
                                jQuery(".' . $this->WRAPPER . ' .sa_element_ac_style_8_' . $key . '   .oxi-addons-AC-EG-H").next().slideDown();';
                endif;
            }
            if (array_key_exists('sa_el_ac_opening_type', $this->style) && $this->style['sa_el_ac_opening_type'] != 'onebyone'):
                $jquery .= 'jQuery(".' . $this->WRAPPER . ' .oxi-addons-AC-EG-H").click(function () {
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
                $jquery .= 'jQuery(".' . $this->WRAPPER . ' .oxi-addons-AC-EG-H").click(function () {
                        if(jQuery(this).hasClass("active")){
                            return false;
                        }else{
                            jQuery(".' . $this->WRAPPER . ' .oxi-addons-AC-EG-C").slideUp();
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(".' . $this->WRAPPER . ' .oxi-addons-AC-EG-H").removeClass("active");
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

        echo '<div class="oxi-addons-container">';
        echo '<div class="oxi-addons-row">';
        foreach ($child as $value) {
            $data = explode('||#||', $value['files']);
            $aticon = $daticon = $dheading = $ddetails = '';
            if ($stylefiles[2] != '') {
                $aticon = '<div class="oxi-addons-AC-EG-active">' . oxi_addons_font_awesome($stylefiles[2]) . '</div>';
            }
            if ($stylefiles[4] != '') {
                $daticon = ' <div class="oxi-addons-AC-EG-deactive">' . oxi_addons_font_awesome($stylefiles[4]) . '</div>';
            }
            if ($data[2] != '') {
                $dheading = '<div class="oxi-addons-AC-EG-heading">' . OxiAddonsTextConvert($data[2]) . '</div>';
            }
            if ($data[4] != '') {
                $ddetails = '<div class="oxi-addons-AC-EG-C-' . $oxiid . '" id="oxi-addons-AC-EG-H-' . $oxiid . '-id-' . $value['id'] . '">
                            <div class="oxi-addons-AC-EG-C-' . $oxiid . '-b">
                                ' . OxiAddonsTextConvert($data[4]) . '
                            </div>
                        </div>';
            }
            echo '<div class="oxi-addons-AC-EG-' . $oxiid . ' ' . OxiAddonsAdminDefine('') . '" ' . OxiAddonsAnimation($styledata, 69) . '>
                        <div class="oxi-addons-AC-EG-H-' . $oxiid . '" ref="#oxi-addons-AC-EG-H-' . $oxiid . '-id-' . $value['id'] . '">
                            ' . $aticon . '
                            ' . $daticon . '
                            ' . $dheading . '
                        </div>
                        ' . $ddetails . '';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';


        $css = '.oxi-addons-wrapper{
            width: 100%;
            float:left;
        }
        .oxi-addons-AC-EG-' . $oxiid . '{
            width: 100%;
            float:left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 47) . ';
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . '{
            width: 100%;
            float: left;
            position:relative;
            cursor: pointer;
            display: flex;
            align-items: center;
            ' . OxiAddonsBGImage($styledata, 5) . '
            border: ' . $styledata[9] . 'px ' . $styledata[10] . '  ' . $styledata[13] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 63) . ';
            transition:none;
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . ' .oxi-addons-AC-EG-heading{
            width: calc(100% - 40px);
            float: left;
            position: relative;
            font-size: ' . $styledata[73] . 'px;
            color: ' . $styledata[77] . ';
            ' . OxiAddonsFontSettings($styledata, 79) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';
            transition:none;
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . '.active .oxi-addons-AC-EG-heading, .oxi-addons-AC-EG-H-' . $oxiid . ':hover  .oxi-addons-AC-EG-heading{
            color: ' . $styledata[101] . ';
            transition:none;
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . '.active .oxi-addons-AC-EG-active{
            display: flex;
            float: left;
            top: 0;
            left: -' . $styledata[165] . 'px;
            position: absolute;
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
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . ' .oxi-addons-AC-EG-deactive{
            display: flex;
            float: left;
            align-items: center;
            position: absolute;
            top: 0;
            left: -' . $styledata[165] . 'px;
            justify-content: center;
            background: ' . $styledata[103] . ';
            font-size: ' . $styledata[107] . 'px;
            width: 100%;
            max-width: ' . $styledata[111] . 'px;
            height: ' . $styledata[111] . 'px;
            color: ' . $styledata[115] . ';
            border: ' . $styledata[119] . 'px ' . $styledata[120] . '  ' . $styledata[123] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 125) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 141) . ';
            transition:none;
            
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . ':hover .oxi-addons-AC-EG-deactive{
            color: ' . $styledata[117] . ';
            border-color: ' . $styledata[159] . ';
            background: ' . $styledata[105] . '; 
            transition:none;
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . ' .oxi-addons-AC-EG-active{
            display: none;
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . '.active .oxi-addons-AC-EG-deactive{
            display: none;
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-C-' . $oxiid . '{
            display: none;
            width: 100%;
            float: left;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 263) . ';
            transition:none;
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-C-' . $oxiid . '-b{
            width: 100%;
            float: left;
            border: ' . $styledata[9] . 'px ' . $styledata[10] . '  ' . $styledata[13] . ';
            background: ' . $styledata[211] . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 225) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 231) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 247) . ';
            transition:none;
            
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-C-' . $oxiid . '-b, 
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-C-' . $oxiid . '-b p{
            font-size: ' . $styledata[213] . 'px;
            color: ' . $styledata[217] . ';
            ' . OxiAddonsFontSettings($styledata, 219) . '
            transition:none;
            
        }
    @media only screen and (min-width : 669px) and (max-width : 993px){
        .oxi-addons-AC-EG-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 48) . ';
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . '{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . ' .oxi-addons-AC-EG-heading{
            font-size: ' . $styledata[74] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 86) . ';
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . '.active .oxi-addons-AC-EG-active{
            font-size: ' . $styledata[162] . 'px;
            width: 100%;
            max-width: ' . $styledata[166] . 'px;
            height: ' . $styledata[166] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 180) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 196) . ';
            
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . ' .oxi-addons-AC-EG-deactive{
            font-size: ' . $styledata[108] . 'px;
            width: 100%;
            max-width: ' . $styledata[112] . 'px;
            height: ' . $styledata[112] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 126) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 142) . ';
            
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-C-' . $oxiid . '{
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 264) . ';
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-C-' . $oxiid . '-b{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 232) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 248) . ';
            
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-C-' . $oxiid . '-b, 
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-C-' . $oxiid . '-b p{
            font-size: ' . $styledata[214] . 'px;       
        }
           
    }
    @media only screen and (max-width : 668px){
        .oxi-addons-AC-EG-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . '{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . ' .oxi-addons-AC-EG-heading{
            font-size: ' . $styledata[75] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . '.active .oxi-addons-AC-EG-active{
            font-size: ' . $styledata[163] . 'px;
            width: 100%;
            max-width: ' . $styledata[167] . 'px;
            height: ' . $styledata[167] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 181) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 197) . ';
            
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . ' .oxi-addons-AC-EG-deactive{
            font-size: ' . $styledata[109] . 'px;
            width: 100%;
            max-width: ' . $styledata[113] . 'px;
            height: ' . $styledata[113] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 143) . ';
            
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-C-' . $oxiid . '{
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 165) . ';
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-C-' . $oxiid . '-b{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 233) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 249) . ';
            
        }
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-C-' . $oxiid . '-b, 
        .oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-C-' . $oxiid . '-b p{
            font-size: ' . $styledata[215] . 'px;       
        }
    }';

        $jquery = ' jQuery(document).ready(function () {
                    jQuery(".oxi-addons-AC-EG-H-' . $oxiid . '' . $styledata[3] . '").addClass("active");
                    jQuery(".oxi-addons-AC-EG-H-' . $oxiid . '' . $styledata[3] . '").next().slideDown();
                   ';
        if ($styledata[281] == 'randomly') {
            $jquery .= 'jQuery(".oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . '").click(function () {
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
            $jquery .= 'jQuery(".oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . '").click(function () {
                        if(jQuery(this).hasClass("active")){
                            return false;
                        }else{
                            jQuery(".oxi-addons-AC-EG-C-' . $oxiid . '").slideUp();
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(".oxi-addons-AC-EG-' . $oxiid . ' .oxi-addons-AC-EG-H-' . $oxiid . '").removeClass("active");
                            jQuery(this).addClass("active");
                            
                        }
                    });';
        }

        $jquery .= '});';


        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }

}
