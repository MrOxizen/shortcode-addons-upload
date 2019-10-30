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

class Style_5 extends Templates {

    public function default_render($style, $child, $admin) {

//        $order = '';
//        if ($style['sa_el_ac_icon_position'] == 'right') {
//            $order = 'style="order: 1;"';
//        } elseif ($style['sa_el_ac_icon_position'] == 'left') {
//            $order = '';
//        }


        $all_data = (array_key_exists('sa_accordion_data', $style) && is_array($style['sa_accordion_data'])) ? $style['sa_accordion_data'] : [];

        foreach ($all_data as $key => $data) {


//            print_r('<pre>');
//            print_r($style);
//            print_r('</pre>');



            $title = $details = '';

            if (array_key_exists('sa_el_ac_title_adding', $data) && $data['sa_el_ac_title_adding'] != '') {
                $title = '<div class="oxi-addonsAC-FI-title">
                                ' . $this->text_render($data['sa_el_ac_title_adding']) . '
                          </div>';
            }
            if (array_key_exists('sa_el_ac_desc_adding', $data) && $data['sa_el_ac_desc_adding'] != '') {
                $details = '<div class="oxi-addonsAC-FI-desc-details">
                                <div class="oxi-addonsAC-FI-absulote">
                                </div>
                                ' . $this->text_render($data['sa_el_ac_desc_adding']) . '
                            </div>';
            }


            echo '<div class=""  ' . $this->animation_render('sa_ac_box_animation', $style) . '>
                    <div class="sa_el_ac_style_5    sa_el_ac_style_5_'.$key.'">
                        <div class="oxi-addonsAC-FI-Content-details"  ref="#oxi-addonsAC-FI-Content-details-'.$key.'">
                            ' . $title . '
                        </div>
                        <div class="oxi-addonsAC-Fi-content" id="oxi-addonsAC-FI-Content-details-'.$key.'">
                            ' . $details . '
                        </div>
                    </div>';
            echo '</div>';
        }
    }

    public function inline_public_jquery() {
        $arraykey = $this->style;
        $jquery = '';


        if (array_key_exists('sa_accordion_data', $this->style)):
            foreach ($this->style['sa_accordion_data'] as $key => $value) {
                if (array_key_exists('sa_ac_active', $value) && $value['sa_ac_active'] == 'yes'):
                    $jquery .= 'jQuery(".sa_ac_style_5_' . $key . ' .oxi-addonsAC-FI-Content-details").addClass("oxi-active");
                                jQuery(".sa_ac_style_5_' . $key . ' .oxi-addonsAC-Fi-content").slideDown();';
                endif;
            }
            if (array_key_exists('sa_el_ac_opening_type', $this->style) && $this->style['sa_el_ac_opening_type'] == 'randomly'):
                $jquery .= 'jQuery(".oxi-addonsAC-FI-Content-details").click(function () {
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
            else:
                $jquery .= 'jQuery(".oxi-addonsAC-FI-Content-details").click(function () {
                        if(jQuery(this).hasClass("oxi-active")){
                            return false;
                        }else{
                            jQuery(".oxi-addonsAC-Fi-content").slideUp();
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(".oxi-addonsAC-FI-Content-details").removeClass("oxi-active");
                            jQuery(this).addClass("oxi-active");
                        }
                    });
                    ';
            endif;

        endif;


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
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            $title = $details = '';
            if ($data[2] != '') {
                $title = '<div class="oxi-addonsAC-FI-title">
                                        ' . OxiAddonsTextConvert($data[2]) . '
                                    </div>';
            }
            if ($data[4] != '') {
                $details = ' <div class="oxi-addonsAC-FI-Content-details">
                                        <div class="oxi-addonsAC-FI-absulote-' . $oxiid . '">
                                        </div>
                                        ' . OxiAddonsTextConvert($data[4]) . '
                                    </div>';
            }
            echo '<div class="' . OxiAddonsAdminDefine($user) . '"  ' . OxiAddonsAnimation($styledata, 61) . '>
                            <div class="oxi-addonsAC-FI-' . $oxiid . '">
                                <div class="oxi-addonsAC-FI-Content-details' . $oxiid . '" ref="#oxi-addonsAC-FI-Content-details' . $oxiid . '-d-' . $value['id'] . '">
                                   ' . $title . ' 
                                </div>
                                <div class="oxi-addonsAC-Fi-content-' . $oxiid . '" id="oxi-addonsAC-FI-Content-details' . $oxiid . '-d-' . $value['id'] . '">
                                   ' . $details . '
                                </div>
                            </div>';
            echo '</div>';
        }
        echo'</div>';
        echo'</div>';

        $css = '.oxi-addons-wrapper{
        width: 100%;
        float: left;
    }
    .oxi-addonsAC-FI-' . $oxiid . '{
        width: 100%;
        margin: auto;
        overflow: auto;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-absulote-' . $oxiid . '{
        position: absolute;
        top: -10px;
        left: 50px;
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 10px solid ' . $styledata[99] . ';
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details' . $oxiid . '{
        width: 100%;
        float: left;
        display: flex;
        cursor: pointer;
        border: ' . $styledata[119] . 'px ' . $styledata[120] . '  ' . $styledata[123] . ';
        background: ' . $styledata[65] . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
        ' . OxiAddonsBoxShadowSanitize($styledata, 55) . ';
        
        
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-title{
        width: 100%;
        float: left;
        color: ' . $styledata[69] . ';
        font-size: ' . $styledata[71] . 'px;
        ' . OxiAddonsFontSettings($styledata, 77) . '
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
    }
    
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-Fi-content-' . $oxiid . '{
        display: none;
        width: 100%;
        float: left;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 157) . ';
        transition:none;
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details{
        position: relative;
        background: ' . $styledata[99] . ';
        border-radius:  ' . OxiAddonsPaddingMarginSanitize($styledata, 125) . ';
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 141) . ';
        ' . OxiAddonsBoxShadowSanitize($styledata, 113) . ';
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details, 
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details p{
        font-size: ' . $styledata[101] . 'px;
        color: ' . $styledata[105] . ';
        ' . OxiAddonsFontSettings($styledata, 107) . '
    }
@media only screen and (min-width : 669px) and (max-width : 993px){
    .oxi-addonsAC-FI-' . $oxiid . '{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 40) . ';
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details' . $oxiid . '{
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
  
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-title{
        font-size: ' . $styledata[72] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 84) . ';
    }
    
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-Fi-content-' . $oxiid . '{
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 158) . ';
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details{
        border-radius:  ' . OxiAddonsPaddingMarginSanitize($styledata, 126) . ';
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 142) . ';
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details, 
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details p{
        font-size: ' . $styledata[102] . 'px;
    }
}
@media only screen and (max-width : 668px){
      .oxi-addonsAC-FI-' . $oxiid . '{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details' . $oxiid . '{
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
  
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-title{
        font-size: ' . $styledata[73] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';
    }
    
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-Fi-content-' . $oxiid . '{
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 159) . ';
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details{
        border-radius:  ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . ';
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 143) . ';
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details, 
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details p{
        font-size: ' . $styledata[103] . 'px;
    }
    
}';

        $jquery = ' jQuery(document).ready(function () {
                    jQuery(".oxi-addonsAC-FI-Content-details' . $oxiid . '' . $styledata[3] . '").addClass("oxi-active");
                    jQuery(".oxi-addonsAC-FI-Content-details' . $oxiid . '' . $styledata[3] . '").next().slideDown();
                   ';
        if ($styledata[5] == 'randomly') {
            $jquery .= 'jQuery(".oxi-addonsAC-FI-Content-details' . $oxiid . '").click(function () {
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
            $jquery .= 'jQuery(".oxi-addonsAC-FI-Content-details' . $oxiid . '").click(function () {
                        if(jQuery(this).hasClass("oxi-active")){
                            return false;
                        }else{
                            jQuery(".oxi-addonsAC-Fi-content-' . $oxiid . '").slideUp();
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(".oxi-addonsAC-FI-Content-details' . $oxiid . '").removeClass("oxi-active");
                            jQuery(this).addClass("oxi-active");
                            
                        }
                    });
                    ';
        }

        $jquery .= '});';

        echo OxiAddonsInlineCSSData($css);
        echo OxiAddonsInlineCSSData($jquery, 'js');


        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
