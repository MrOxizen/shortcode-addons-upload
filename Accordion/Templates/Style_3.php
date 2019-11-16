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

class Style_3 extends Templates {

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



            $icon = $heading = $descriptions = '';

            if ($data['sa_icon_yes_no'] == 'yes') {
                $icon = '<div class="oxi-addonsAC-icon">
                            ' . $this->font_awesome_render($data['sa_el_ac_opening_icon_adding']) . '
                        </div>';
            }
            if (array_key_exists('sa_el_ac_title_adding', $data) && $data['sa_el_ac_title_adding'] != '') {
                $heading = '<div class="oxi-addonsAC-title">
                                ' . $this->text_render($data['sa_el_ac_title_adding']) . '
                            </div>';
            }
            if (array_key_exists('sa_el_ac_desc_adding', $data) && $data['sa_el_ac_desc_adding'] != '') {
                $descriptions = ' <div class="oxi-addonsAC-content">
                                    <div class="oxi-addonsAC-Content-details">
                                        ' . $this->text_render($data['sa_el_ac_desc_adding']) . '
                                    </div>
                                </div>';
            }

            echo '<div class="" ' . $this->animation_render('sa_ac_box_animation', $style) . '>
                            <div class="sa_ac_style_3 sa_ac_style_'.$this->oxiid.'_' . $key . '" >
                                <div class="oxi-addonsAC-heading">
                                    ' . $icon . '
                                    ' . $heading . '
                                    <div class="oxi-addonsAC-absulote">
                                    </div>
                                </div>
                               ' . $descriptions . '
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
                    $jquery .= 'jQuery(".' . $this->WRAPPER . ' .sa_ac_style_3_' . $key . ' .oxi-addonsAC-heading").addClass("oxi-active");
                                jQuery(".' . $this->WRAPPER . ' .sa_ac_style_3_' . $key . ' .oxi-addonsAC-content").slideDown();';
                endif;
            }
            if (array_key_exists('sa_el_ac_opening_type', $this->style) && $this->style['sa_el_ac_opening_type'] == 'onebyone'):
                $jquery .= 'jQuery(".' . $this->WRAPPER . ' .oxi-addonsAC-heading").on("click", function () {
                                $This = jQuery(this);
                                if($This.hasClass("oxi-active")){
                                    return false;
                                }else{
                                    jQuery(".' . $this->WRAPPER . ' .oxi-addonsAC-content").slideUp();
                                    $This.next().slideDown();
                                    jQuery(".' . $this->WRAPPER . ' .oxi-addonsAC-heading").removeClass("oxi-active");
                                    $This.addClass("oxi-active");
                                }
                            });';


            else:
                $jquery .= 'jQuery(".' . $this->WRAPPER . ' .oxi-addonsAC-heading").on("click",function () {
                                $This = jQuery(this);
                                if($This.hasClass("oxi-active")){
                                    $This.removeClass("oxi-active").next().slideUp();
                                }else{
                                   $This.addClass("oxi-active").next().slideDown();
                                }
                            });';
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

        echo '<div class="oxi-addons-container">
        <div class="oxi-addons-row">';
        foreach ($child as $value) {
            $data = explode('||#||', $value['files']);
            $aticon = $atitle = $adetails = '';
            if ($data[2] != '') {
                $aticon = '<div class="oxi-addonsAC-icon">
                        ' . oxi_addons_font_awesome($data[2]) . '
                    </div>';
            }
            if ($data[4] != '') {
                $atitle = '<div class="oxi-addonsAC-title">
                        ' . OxiAddonsTextConvert($data[4]) . '
                      </div>';
            }
            if ($data[6] != '') {
                $adetails = ' <div class="oxi-addonsAC-content-' . $oxiid . '" id="oxi-addonsAC-heading-' . $oxiid . '-d-' . $value['id'] . '">
                                    <div class="oxi-addonsAC-Content-details">
                                        ' . OxiAddonsTextConvert($data[6]) . '
                                    </div>
                                </div>';
            }
            echo '<div class="' . OxiAddonsAdminDefine('') . '" ' . OxiAddonsAnimation($styledata, 61) . '>
                            <div class="oxi-addonsAC-T-' . $oxiid . '" >
                                <div class="oxi-addonsAC-heading-' . $oxiid . '" ref="#oxi-addonsAC-heading-' . $oxiid . '-d-' . $value['id'] . '">
                                    ' . $aticon . '
                                    ' . $atitle . '
                                    <div class="oxi-addonsAC-absulote-' . $oxiid . '">
                                    </div>
                                </div>
                               ' . $adetails . '
                            </div>';
            echo '</div>';
        }
        echo'</div></div>';

        $css = '.oxi-addonsAC-T-' . $oxiid . '{
        width: 100%;
        margin: auto;
        overflow: auto;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
    }
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-absulote-' . $oxiid . '{
        position: absolute;
        opacity: 0;
        bottom: -8px;
        left: 50px;
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 10px solid ' . $styledata[65] . ';
    }
    .oxi-icons{
        transition:none !important;
    }
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-active .oxi-addonsAC-absulote-' . $oxiid . '{
        position: absolute;
        opacity: 1;
        bottom: -8px;
        left: 50px;
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 10px solid ' . $styledata[65] . ';
    }
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-heading-' . $oxiid . '{
        width: 100%;
        float: left;
        display: flex;
        position: relative;
        cursor: pointer;
        background: ' . $styledata[77] . ';
        color: ' . $styledata[81] . ';
        border-top: ' . $styledata[83] . 'px ' . $styledata[84] . '  ' . $styledata[87] . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
        ' . OxiAddonsBoxShadowSanitize($styledata, 55) . ';
        
        
    }
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-heading-' . $oxiid . '.oxi-active{
        width: 100%;
        float: left;
        display: flex;
        position: relative;
        cursor: pointer;
        background: ' . $styledata[65] . ';
        color: ' . $styledata[69] . ';
        border-top: ' . $styledata[71] . 'px ' . $styledata[72] . '  ' . $styledata[75] . ';
    }
    
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-title{
        width: 100%;
        float: left;
        font-size: ' . $styledata[109] . 'px;
        ' . OxiAddonsFontSettings($styledata, 115) . '
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 121) . ';
        transition:none;
    }
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-icon{
        display: flex;
        float: left;
        align-items: center;
        justify-content: center;
        font-size: ' . $styledata[89] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . ';
        transition:none;
    }
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-content-' . $oxiid . '{
        display: none;
        width: 100%;
        float: left;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 195) . ';
        transition:none;
    }
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-Content-details{
        background: ' . $styledata[137] . ';
        border: ' . $styledata[157] . 'px ' . $styledata[158] . '  ' . $styledata[161] . ';
        border-radius:  ' . OxiAddonsPaddingMarginSanitize($styledata, 163) . ';
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 179) . ';
        ' . OxiAddonsBoxShadowSanitize($styledata, 151) . ';
    }
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-Content-details,
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-Content-details p{
        font-size: ' . $styledata[139] . 'px;
        color: ' . $styledata[143] . ';
        ' . OxiAddonsFontSettings($styledata, 145) . '
    }
@media only screen and (min-width : 669px) and (max-width : 993px){
    .oxi-addonsAC-T-' . $oxiid . '{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 40) . ';
    }
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-heading-' . $oxiid . '{
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
    }
    
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-title{
        font-size: ' . $styledata[110] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 122) . ';
    }
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-icon{
        font-size: ' . $styledata[90] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 94) . ';
    }
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-content-' . $oxiid . '{
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 196) . ';
    }
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-Content-details{
        font-size: ' . $styledata[140] . 'px;
        border-radius:  ' . OxiAddonsPaddingMarginSanitize($styledata, 164) . ';
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 180) . ';
    }
}
@media only screen and (max-width : 668px){
     .oxi-addonsAC-T-' . $oxiid . '{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
    }
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-heading-' . $oxiid . '{
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
    }
    
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-title{
        font-size: ' . $styledata[111] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 123) . ';
    }
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-icon{
        font-size: ' . $styledata[91] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 95) . ';
    }
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-content-' . $oxiid . '{
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 197) . ';
    }
    .oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-Content-details{
        font-size: ' . $styledata[141] . 'px;
        border-radius:  ' . OxiAddonsPaddingMarginSanitize($styledata, 165) . ';
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 181) . ';
    }
    
}';

        $jquery = ' jQuery(document).ready(function () {
                    jQuery(".oxi-addonsAC-heading-' . $oxiid . '' . $styledata[3] . '").addClass("oxi-active");
                    jQuery(".oxi-addonsAC-heading-' . $oxiid . '' . $styledata[3] . '").next().slideDown();
                   ';
        if ($styledata[5] == 'randomly') {
            $jquery .= 'jQuery(".oxi-addonsAC-heading-' . $oxiid . '").click(function () {
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
            $jquery .= 'jQuery(".oxi-addonsAC-heading-' . $oxiid . '").click(function () {
                        if(jQuery(this).hasClass("oxi-active")){
                            return false;
                        }else{
                            jQuery(".oxi-addonsAC-content-' . $oxiid . '").slideUp();
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(".oxi-addonsAC-heading-' . $oxiid . '").removeClass("oxi-active");
                            jQuery(this).addClass("oxi-active");
                            
                        }
                    });
                    ';
        }

        $jquery .= '});';

        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }

}
