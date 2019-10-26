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

class Style_1 extends Templates {

    public function default_render($style, $child, $admin) {

        $order = '';
        if ($style['sa_el_ac_icon_position'] == 'right') {
            $order = 'order';
        }
        $all_data = (array_key_exists('sa_accordion_data', $style) && is_array($style['sa_accordion_data'])) ? $style['sa_accordion_data'] : [];

        foreach ($all_data as $key => $data) {

            $sactive = $sdactive = $heading = $details = '';

            
            
            
            
            

            if ($style['sa_el_ac_arrow_icon'] == 'yes') {
                $sactive = '<div class="span-active"><i class="fas fa-arrow-down oxi-icons"></i></div>';
                $sdactive = '<div class="span-deactive"><i class="fas fa-arrow-right oxi-icons"></i></div>';
            }
            
            
            
            
            if (array_key_exists('sa_el_ac_title_adding', $data) && $data['sa_el_ac_title_adding'] != '') {
                $heading = '<div class="heading-data  ' . $order . '">' . $this->text_render($data['sa_el_ac_title_adding']) . '</div>';
            }
            if (array_key_exists('sa_el_ac_desc_adding', $data) && $data['sa_el_ac_desc_adding'] != '') {
                $details = '<div class="oxi-addons-ac-C">
                                <div class="oxi-addons-ac-C-b">
                                    ' . $this->text_render($data['sa_el_ac_desc_adding']) . '
                                </div>
                            </div>';
            }
            
            echo '<div class="oa_ac_style_1 oa_ac_style_1_' . $key . '"   ' . $this->animation_render('sa_ac_box_animation', $style) . '>
                        <div class="oxi-addons-ac-H">';
                        echo $heading;
                        echo $sactive;
                        echo $sdactive;
            echo '      </div>
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
                    $jquery .= 'jQuery(".oa_ac_style_1_' . $key . ' .oxi-addons-ac-H").addClass("active");
                                jQuery(".oa_ac_style_1_' . $key . ' .oxi-addons-ac-H").next().slideDown();';
                endif;
            }
            if (array_key_exists('sa_el_ac_opening_type', $this->style) && $this->style['sa_el_ac_opening_type'] == 'onebyone'):
                $jquery .= 'jQuery(".' . $this->WRAPPER . ' .oxi-addons-ac-H").on("click", function () {
                                $This = jQuery(this);
                                if($This.hasClass("active")){
                                    return false;
                                }else{
                                    jQuery(".' . $this->WRAPPER . ' .oxi-addons-ac-C").slideUp();
                                    $This.next().slideDown();
                                    jQuery(".' . $this->WRAPPER . ' .oxi-addons-ac-H").removeClass("active");
                                    $This.addClass("active");
                                }
                            });';
            else:
                $jquery .= 'jQuery(".' . $this->WRAPPER . ' .oxi-addons-ac-H").on("click",function () {
                                $This = jQuery(this);
                                if($This.hasClass("active")){
                                    $This.removeClass("active").next().slideUp();
                                }else{
                                   $This.addClass("active").next().slideDown();
                                }
                            });';
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
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);

        echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            $sactive = $sdactive = $heading = $details = '';
            if ($stylefiles[2] != '') {
                $sactive = '<div class="span-active">' . oxi_addons_font_awesome($stylefiles[2]) . '</div>';
            }
            if ($stylefiles[4] != '') {
                $sdactive = '<div class="span-deactive">' . oxi_addons_font_awesome($stylefiles[4]) . '</div>';
            }
            if ($data[2] != '') {
                $heading = '<div class="heading-data">' . OxiAddonsTextConvert($data[2]) . '</div>';
            }
            if ($data[4] != '') {
                $details = '<div class="oxi-addons-ac-C-' . $oxiid . '" id="oxi-addons-ac-H-' . $oxiid . '-id-' . $value['id'] . '">
                            <div class="oxi-addons-ac-C-' . $oxiid . '-b">
                                ' . OxiAddonsTextConvert($data[4]) . '
                            </div>
                        </div>';
            }
            echo '<div class="oxi-addons-AC-' . $oxiid . ' ' . OxiAddonsAdminDefine($user) . '" ' . OxiAddonsAnimation($styledata, 69) . '>
                        <div class="oxi-addons-ac-H-' . $oxiid . '" ref="#oxi-addons-ac-H-' . $oxiid . '-id-' . $value['id'] . '">
                            ' . $sactive . '
                            ' . $sdactive . '
                            ' . $heading . '
                        </div>
                        ' . $details . '';
            echo '</div>';
        }
        echo '</div>
        </div>';

        $iconposition = $styledata[279] == 'right' ? "order: -1" : "order: 1";
        $css = '.oxi-addons-wrapper{
            width: 100%;
            float:left;
        }
        .oxi-addons-AC-' . $oxiid . '{
            width: 100%;
            float:left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 47) . ';
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . '{
            width: 100%;
            float: left;
            cursor: pointer;
            display: flex;
            align-items: center;
            ' . OxiAddonsBGImage($styledata, 5) . '
            border: ' . $styledata[9] . 'px ' . $styledata[10] . '  ' . $styledata[13] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 63) . ';
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . ' .heading-data{
            width: calc(100% - 40px);
            float: left;
            ' . $iconposition . ';
            font-size: ' . $styledata[73] . 'px;
            color: ' . $styledata[77] . ';
            ' . OxiAddonsFontSettings($styledata, 79) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . '.active .heading-data, .oxi-addons-ac-H-' . $oxiid . ':hover  .heading-data{
            color: ' . $styledata[101] . ';
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . '.active .span-active{
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
            
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . ' .span-deactive{
            display: flex;
            float: left;
            align-items: center;
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
            
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . ':hover .span-deactive{
            color: ' . $styledata[117] . ';
            border-color: ' . $styledata[159] . ';
            background: ' . $styledata[105] . '; 
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . ' .span-active{
            display: none;
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . '.active .span-deactive{
            display: none;
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-C-' . $oxiid . '{
            display: none;
            width: 100%;
            float: left;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 263) . ';
            transition:none;
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-C-' . $oxiid . '-b,
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-C-' . $oxiid . '-b p{
            font-size: ' . $styledata[213] . 'px;
            color: ' . $styledata[217] . ';
            ' . OxiAddonsFontSettings($styledata, 219) . '
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-C-' . $oxiid . '-b{
            width: 100%;
            float: left;
            background: ' . $styledata[211] . ';
           ' . OxiAddonsBoxShadowSanitize($styledata, 225) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 231) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 247) . ';
        }
    @media only screen and (min-width : 669px) and (max-width : 993px){
        .oxi-addons-AC-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 48) . ';
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . '{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . ' .heading-data{
            font-size: ' . $styledata[74] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 86) . ';
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . '.active .span-active{
            font-size: ' . $styledata[162] . 'px;
            width: ' . $styledata[166] . 'px;
            height: ' . $styledata[166] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 180) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 196) . ';
            
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . ' .span-deactive{
            font-size: ' . $styledata[108] . 'px;
            width: 100%;
            max-width: ' . $styledata[112] . 'px;
            height: ' . $styledata[112] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 126) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 142) . ';
            
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-C-' . $oxiid . '{
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 264) . ';
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-C-' . $oxiid . '-b{
            font-size: ' . $styledata[214] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 232) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 248) . ';
            
        }
           
    }
    @media only screen and (max-width : 668px){
        .oxi-addons-AC-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . '{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . ' .heading-data{
            font-size: ' . $styledata[75] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . '.active .span-active{
            font-size: ' . $styledata[163] . 'px;
            width: ' . $styledata[167] . 'px;
            height: ' . $styledata[167] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 181) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 197) . ';
            
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . ' .span-deactive{
            font-size: ' . $styledata[109] . 'px;
            width: 100%;
            max-width: ' . $styledata[113] . 'px;
            height: ' . $styledata[113] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 143) . ';
            
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-C-' . $oxiid . '{
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 165) . ';
        }
        .oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-C-' . $oxiid . '-b{
            font-size: ' . $styledata[215] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 233) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 249) . ';
            
        }
    }';

        $jquery = ' jQuery(document).ready(function () {
                    jQuery(".oxi-addons-ac-H-' . $oxiid . '' . $styledata[3] . '").addClass("active");
                    jQuery(".oxi-addons-ac-H-' . $oxiid . '' . $styledata[3] . '").next().slideDown();
                   ';
        if ($styledata[281] == 'randomly') {
            $jquery .= 'jQuery(".oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . '").click(function () {
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
            $jquery .= 'jQuery(".oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . '").click(function () {
                        if(jQuery(this).hasClass("active")){
                            return false;
                        }else{
                            jQuery(".oxi-addons-ac-C-' . $oxiid . '").slideUp();
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(".oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . '").removeClass("active");
                            jQuery(this).addClass("active");
                            
                        }
                    });';
        }

        $jquery .= '});';


        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
