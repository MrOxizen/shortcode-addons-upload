<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Tabs\Templates;

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
        $jquery = $linkopening = '';



        echo '<div class="sa-addons-tabs-main-wrapper-style-4">
                <div class="sa-addons-tabs-main-wrapper">
                <div class="sa-addons-main-tab-header">';
        foreach ($child as $header) {
            $value_header =  $header['rawdata'] != '' ? json_decode($header['rawdata'], true) : [];
            $icon = '';
            if (array_key_exists('sa_tabs_url_open', $value_header)) :

                if ($value_header['sa_tabs_url-target'] != 'yes') :
                    $linkopening = ", '_self'";
                endif;
                if ($value_header['sa_tabs_url-url'] != '') {
                    $jquery .= 'jQuery(".sa-header-' . $header['id'] . '").click(function() {window.open("' . $value_header['sa_tabs_url-url'] . '" ' . $linkopening . ');});';
                }
            endif;
            if (array_key_exists('sa_tabs_tab_icon_on_off', $value_header)) :
                $icon .= '<div class="sa_tabs_icon">
                                                ' . $this->font_awesome_render($value_header['sa_tabs_tab_icon']) . '
                                                </div>';
            endif;
            if (array_key_exists('sa_tabs_tab_icon_on_off', $value_header)) :
                if ($style['sa_tabs_headding_icon_style'] == 'inline-block') :
                    $icon_text = ($style['sa_tabs_headding_icon_posi'] == 'left' ? '' . $icon . ' ' . $this->text_render($value_header['sa_tabs_h_text']) . '' : '' . $this->text_render($value_header['sa_tabs_h_text']) . '' . $icon . '');
                else :
                    $icon_text = ($style['sa_tabs_headding_icon_posi_block'] == 'top' ? '' . $icon . ' ' . $this->text_render($value_header['sa_tabs_h_text']) . '' : '' . $this->text_render($value_header['sa_tabs_h_text']) . '' . $icon . '');
                endif;
            else :
                $icon_text = $this->text_render(array_key_exists('sa_tabs_h_text', $value_header) ? $value_header['sa_tabs_h_text'] : '');
            endif;
            echo '<div class="sa-addons-header ' . $style['sa_tabs_headding_icon_style'] . ' sa-header-' . $header['id'] . ' " ref="#sa-tab-' . $this->oxiid . '-id-' . $header['id'] . '">' . $icon_text . '</div>';
        }
        echo '</div>
            <div class="sa-addons-main-tab-body ">
                <div class="sa-addons-line"></div>';
        foreach ($child as $body) {
            $value_body = ($body['rawdata'] != '' ? json_decode($body['rawdata'], true) : []);
            if (array_key_exists('sa_tabs_url_open', $value_body)) :
                if ($value_body['sa_tabs_url-target'] != 'yes') :
                    $linkopening = ", '_self'";
                endif;
                if ($value_body['sa_tabs_url-url'] != '') {
                    $jquery .= 'jQuery(".sa-header-' . $body['id'] . '").click(function() {window.open("' . $value_body['sa_tabs_url-url'] . '" ' . $linkopening . ');});';
                }
            endif;

            if (array_key_exists('sa_tabs_tab_icon_on_off', $value_body)) :
                $icon .= '<div class="sa_tabs_icon">
                                            ' . $this->font_awesome_render($value_body['sa_tabs_tab_icon']) . '
                                            </div>';
            endif;
            if (array_key_exists('sa_tabs_tab_icon_on_off', $value_body)) :
                if ($style['sa_tabs_headding_icon_style'] == 'inline-block') :
                    $icon_text = ($style['sa_tabs_headding_icon_posi'] == 'left' ? '' . $icon . ' ' . $this->text_render($value_body['sa_tabs_h_text']) . '' : '' . $this->text_render($value_body['sa_tabs_h_text']) . '' . $icon . '');
                else :
                    $icon_text = ($style['sa_tabs_headding_icon_posi_block'] == 'top' ? '' . $icon . ' ' . $this->text_render($value_body['sa_tabs_h_text']) . '' : '' . $this->text_render($value_body['sa_tabs_h_text']) . '' . $icon . '');
                endif;
            else :
                $icon_text = $this->text_render(array_key_exists('sa_tabs_h_text', $value_body) ? $value_body['sa_tabs_h_text'] : '');
            endif;

            echo '</div>';
            echo '<div class="sa-addons-header-two sa-header-' . $body['id'] . ' " ref="#sa-tab-' . $this->oxiid . '-id-' . $body['id'] . '">' . $icon_text . '</div>';
            echo '<div class="sa-addons-body ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '" id="sa-tab-' . $this->oxiid . '-id-' . $body['id'] . '" style="display: none;">
                            <div class="sa-addons-line"></div>
                            ' . $this->text_render(array_key_exists('sa_tabs_content', $value_body) ? $value_body['sa_tabs_content'] : '') . '
                    ';
            if ($admin == 'admin') :
                echo '<div class="oxi-addons-admin-absulote">
                                    <div class="oxi-addons-admin-absulate-edit">
                                        <button class="btn btn-primary shortcode-addons-template-item-edit" type="button" value="' . $body['id'] . '">Edit</button>
                                    </div>
                                    <div class="oxi-addons-admin-absulate-delete">
                                        <button class="btn btn-danger shortcode-addons-template-item-delete" type="submit" value="' . $body['id'] . '">Delete</button>
                                    </div>
                                </div>';
            endif;
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';

        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }
    public function inline_public_css()
    {
        return '.' . $this->WRAPPER . ' .sa-addons-tabs-main-wrapper-style-4 .sa-active::after{
                    border-left: ' . $this->style['sa_tabs_headding_arrow-size'] . 'px solid transparent;
                    border-right: ' . $this->style['sa_tabs_headding_arrow-size'] . 'px solid transparent;
                    border-bottom: ' . $this->style['sa_tabs_headding_arrow-size'] . 'px solid ' . $this->style['sa_tabs_headding_arrow-color'] . ';
                    }';
    }
    public function inline_public_jquery()
    {
        $styledata = $this->style;
        $jquery = '';
        $jquery .= ' 
            jQuery(".sa-addons-tabs-main-wrapper-style-4 .sa-addons-header:eq(' . $styledata['sa_tabs_initial'] . ')").addClass("sa-active");
            jQuery(".sa-addons-tabs-main-wrapper-style-4 .sa-addons-header-two:eq(' . $styledata['sa_tabs_initial'] . ')").addClass("sa-active");
            jQuery(".sa-addons-tabs-main-wrapper-style-4 .sa-addons-body:eq(' . $styledata['sa_tabs_initial'] . ')").addClass("active"); 
            jQuery(".sa-addons-tabs-main-wrapper-style-4 .sa-addons-header").click(function() {
            if (jQuery(this).hasClass("sa-active")) {
                return false
            } else {
                jQuery(".sa-addons-tabs-main-wrapper-style-4 .sa-addons-header").removeClass("sa-active");
                jQuery(this).addClass("sa-active");
                jQuery(".sa-addons-tabs-main-wrapper-style-4 .sa-addons-body").removeClass("active");
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).addClass("active"); 
            }
        });
            jQuery(".sa-addons-tabs-main-wrapper-style-4 .sa-addons-header-two").click(function() {
            if (jQuery(this).hasClass("sa-active")) {
                return false
            } else {
                jQuery(".sa-addons-tabs-main-wrapper-style-4 .sa-addons-header-two").removeClass("sa-active");
                jQuery(this).addClass("sa-active");
                jQuery(".sa-addons-tabs-main-wrapper-style-4 .sa-addons-body").removeClass("active");
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).addClass("active");
                var fullwidth = jQuery("html, body").width();';
        if (array_key_exists('sa_tabs_tab_fix_header', $styledata)) {
            $jquery .= 'if(fullwidth <= 668){
                                jQuery("html, body").animate({
                                    scrollTop: jQuery(".sa-addons-tabs-main-wrapper-style-4").offset().top - ' . $styledata['sa_tabs_tab_fix_h_offset'] . '
                                }, 2000);
                            } ';
        }
        $jquery .= '}
        });';
        return $jquery;
    }

    public function old_render()
    {

        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);

        $css = '';
        $jquery = $linkopening = '';
        if ($styledata[9] != 'new-tab') {
            $linkopening = ", '_self'";
        }
        echo '<div class="oxi-addons-container">
                <div class="oxi-addons-row">
                    <div class="oxi-addons-main-wrapper-' . $oxiid . ' ">
                        <div class="oxi-addons-wrapper">
                            <div class="oxi-addons-main-tab-header">';
        foreach ($listdata as $header) {
            $value_header = explode('||#||', $header['files']);
            if (!empty($value_header[3])) {
                $jquery .= 'jQuery(".oxi-header-' . $header['id'] . '").click(function() {window.open("' . $value_header[3] . '" ' . $linkopening . ');});';
            }
            echo '<div class="oxi-addons-header oxi-header-' . $header['id'] . ' " ref="#oxi-tab-' . $oxiid . '-id-' . $header['id'] . '">' . $value_header[1] . '</div>';
        }
        echo '</div>
        <div class="oxi-addons-main-tab-body "> <div class="oxi-addons-line"></div>';

        foreach ($listdata as $body) {
            $value_body = explode('||#||', $body['files']);
            if (!empty($value_body[3])) {
                $jquery .= 'jQuery(".oxi-header-' . $body['id'] . '").click(function() {window.open("' . $value_body[3] . '" ' . $linkopening . ');});';
            }
            echo '<div class="oxi-addons-header-two oxi-header-' . $body['id'] . ' " ref="#oxi-tab-' . $oxiid . '-id-' . $body['id'] . '">' . $value_body[1] . '</div>';

            echo '<div class="oxi-addons-body " id="oxi-tab-' . $oxiid . '-id-' . $body['id'] . '" style="display: none;">
                <div class="oxi-addons-line-two"></div>
                ' . $value_body[5] . '
                
                ';

            echo '</div>';
        }
        echo '</div>
                        </div>
                    </div>
                </div>
            </div>';
        $jquery .= ' 
                jQuery(".oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header:eq(' . $styledata[3] . ')").addClass("oxi-active");
                jQuery(".oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header-two:eq(' . $styledata[3] . ')").addClass("oxi-active");
                jQuery(".oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-body:eq(' . $styledata[3] . ')").addClass("active"); 
                jQuery(".oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header").click(function() {
                if (jQuery(this).hasClass("oxi-active")) {
                    return false
                } else {
                    jQuery(".oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header").removeClass("oxi-active");
                    jQuery(this).addClass("oxi-active");
                    jQuery(".oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-body").removeClass("active");
                    var activeTab = jQuery(this).attr("ref");
                    jQuery(activeTab).addClass("active"); 
                }
            });
                jQuery(".oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header-two").click(function() {
                if (jQuery(this).hasClass("oxi-active")) {
                    return false
                } else {
                    jQuery(".oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header-two").removeClass("oxi-active");
                    jQuery(this).addClass("oxi-active");
                    jQuery(".oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-body").removeClass("active");
                    var activeTab = jQuery(this).attr("ref");
                    jQuery(activeTab).addClass("active");
                    var fullwidth = jQuery("html, body").width();';
        if ($styledata[7] == 'true') {
            $jquery .= '    if(fullwidth <= 668){
                                jQuery("html, body").animate({
                                    scrollTop: jQuery(".oxi-addons-main-wrapper-' . $oxiid . '").offset().top - ' . $stylefiles[2] . '
                                }, 2000);
                            } ';
        }
        $jquery .= '}
            });
        ';


        $css .= '
            .oxi-addons-main-wrapper-' . $oxiid . '{
                width: 100%;  
                float: left;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 190) . ';
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper{
                display: flex;
                flex-direction: inherit;
                overflow: hidden;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 34) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 172) . '; 
            }
            .oxi-addons-container *{
                transition: none; 
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-tab-header{
                overflow: hidden; 
                width: ' . $styledata[240] . 'px;
                background: ' . $styledata[13] . ';  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 50) . '; 
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header-two{
                display: none; 
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header{
                font-size: ' . $styledata[74] . 'px;
                color: ' . $styledata[72] . ';
                ' . OxiAddonsFontSettings($styledata, 78) . ';
                border-style: ' . $styledata[84] . ';
                border-color: ' . $styledata[85] . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ' ;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
                cursor: pointer;
            }
        
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-active{
                color: ' . $styledata[206] . ' !important; 
                position: relative;
                -webkit-transition: all 0.5s linear;
                -ms-transition: all 0.5s linear;
                -o-transition: all 0.5s linear;
                -moz-transition: all 0.5s linear;
                transition: all 0.5s linear;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-active::before{ 
                content: "";
                position: absolute; 
                left: -' . ($styledata[95]) . 'px;
                top: 0;
                background: ' . $styledata[206] . ' !important; 
                width: ' . ($styledata[95] + 1) . 'px;
                height: 100%;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .active{
                display: block !important;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-line{
                width: ' . $styledata[214] . 'px;
                height: ' . $styledata[218] . 'px; 
                background: ' . $styledata[222] . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 224) . ';
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header-two:hover{
                color: ' . $styledata[210] . '; 
                -webkit-transition: all 0.2s linear;
                -ms-transition: all 0.2s linear;
                -o-transition: all 0.2s linear;
                -moz-transition: all 0.2s linear;
                transition: all 0.2s linear;
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header:hover{
                color: ' . $styledata[210] . '; 
                -webkit-transition: all 0.2s linear;
                -ms-transition: all 0.2s linear;
                -o-transition: all 0.2s linear;
                -moz-transition: all 0.2s linear;
                transition: all 0.2s linear;
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-tab-body{
                width: 100%;
                float:left;
                background: ' . $styledata[119] . ';
                border-style: ' . $styledata[121] . ';
                border-color: ' . $styledata[122] . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 124) . '; 
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-body{
                font-size: ' . $styledata[180] . 'px;
                color: ' . $styledata[178] . ';
                ' . OxiAddonsFontSettings($styledata, 184) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 156) . '; 
            } 

        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-main-wrapper-' . $oxiid . '{ 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 191) . ';
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper{ 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . '; 
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-tab-header{ 
                width: ' . $styledata[241] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 51) . '; 
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header{
                font-size: ' . $styledata[75] . 'px; 
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 88) . ' ;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 104) . '; 
            }
        
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-active::before{  
                left: -' . ($styledata[96]) . 'px; 
                width: ' . ($styledata[96] + 1) . 'px; 
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-line{
                width: ' . $styledata[215] . 'px;
                height: ' . $styledata[219] . 'px;  
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 225) . ';
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-tab-body{ 
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 125) . '; 
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-body{
                font-size: ' . $styledata[180] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 157) . '; 
            } 

        }
        @media only screen and (max-width : 668px){
            .oxi-addons-main-wrapper-' . $oxiid . '{ 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 192) . '; 
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper{ 
                display: block;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 36) . '; 
                box-shadow: none;
                overflow: visible;
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-tab-header{  
                display: none;
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header-two{
                display: block; 
                font-size: ' . $styledata[76] . 'px;
                color: ' . $styledata[72] . ';
                ' . OxiAddonsFontSettings($styledata, 78) . ';
                border-style: ' . $styledata[84] . ';
                border-color: ' . $styledata[85] . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 89) . ' ;
                background: ' . $styledata[13] . ';  
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 52) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 105) . ';
                cursor: pointer;
                text-align: center;
            }  
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-active::before{  
                display: none;
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-line{
                display: none;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-line-two{
                    background: ' . $styledata[222] . ';
                width: ' . $styledata[216] . 'px;
                height: ' . $styledata[220] . 'px;  
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 226) . ';  
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-tab-body{ 
                border: none !important;
                background: transparent;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-body{
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 126) . '; 
                font-size: ' . $styledata[181] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 158) . '; 
                ' . OxiAddonsBoxShadowSanitize($styledata, 172) . '; 
                background: ' . $styledata[119] . ';
                border-style: ' . $styledata[121] . ';
                border-color: ' . $styledata[122] . ';
            } 
        }
        ';

        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }
}
