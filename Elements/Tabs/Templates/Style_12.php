<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Tabs\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_12
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_12 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $jquery = $linkopening = '';



        echo '<div class="sa-addons-tabs-main-wrapper-style-12" ' . $this->animation_render('sa_tabs_tab_anim', $style) . '>
                <div class="sa-addons-tabs-main-wrapper">
                <div class="sa-addons-main-tab-header">';
        foreach ($child as $header) {
            $value_header =  $header['rawdata'] != '' ? json_decode(stripcslashes($header['rawdata']), true) : [];
            $icon = '';
            if (array_key_exists('sa_tabs_url_open', $value_header) && $value_header['sa_tabs_url_open'] != '0') :

                if ($value_header['sa_tabs_url-target'] != 'yes') :
                    $linkopening = ", '_self'";
                endif;
                if ($value_header['sa_tabs_url-url'] != '') {
                    $jquery .= 'jQuery(".sa-header-' . $header['id'] . '").click(function() {window.open("' . $value_header['sa_tabs_url-url'] . '" ' . $linkopening . ');});';
                }
            endif;
            if (array_key_exists('sa_tabs_tab_icon_on_off', $value_header) && $value_header['sa_tabs_tab_icon_on_off'] != '0') :
                $icon .= '<div class="sa_tabs_icon">
                            ' . $this->font_awesome_render($value_header['sa_tabs_tab_icon']) . '
                            </div>';
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
            <div class="sa-addons-main-tab-body">';
        foreach ($child as $body) {
            $value_body = ($body['rawdata'] != '' ? json_decode(stripcslashes($body['rawdata']), true) : []);
            if (array_key_exists('sa_tabs_url_open', $value_body) && $value_body['sa_tabs_url_open'] != '0') :
                if ($value_body['sa_tabs_url-target'] != 'yes') :
                    $linkopening = ", '_self'";
                endif;
                if ($value_body['sa_tabs_url-url'] != '') {
                    $jquery .= 'jQuery(".sa-header-' . $body['id'] . '").click(function() {window.open("' . $value_body['sa_tabs_url-url'] . '" ' . $linkopening . ');});';
                }
            endif;
            if (array_key_exists('sa_tabs_tab_icon_on_off', $value_body) && $value_body['sa_tabs_tab_icon_on_off'] != '0') :
                $icon .= '<div class="sa_tabs_icon">
                            ' . $this->font_awesome_render($value_body['sa_tabs_tab_icon']) . '
                            </div>';
                if ($style['sa_tabs_headding_icon_style'] == 'inline-block') :
                    $icon_text = ($style['sa_tabs_headding_icon_posi'] == 'left' ? '' . $icon . ' ' . $this->text_render($value_body['sa_tabs_h_text']) . '' : '' . $this->text_render($value_body['sa_tabs_h_text']) . '' . $icon . '');
                else :
                    $icon_text = ($style['sa_tabs_headding_icon_posi_block'] == 'top' ? '' . $icon . ' ' . $this->text_render($value_body['sa_tabs_h_text']) . '' : '' . $this->text_render($value_body['sa_tabs_h_text']) . '' . $icon . '');
                endif;
            else :
                $icon_text = $this->text_render(array_key_exists('sa_tabs_h_text', $value_body) ? $value_body['sa_tabs_h_text'] : '');
            endif;

            echo '<div class="sa-addons-header-two sa-header-' . $body['id'] . ' " ref="#sa-tab-' . $this->oxiid . '-id-' . $body['id'] . '">' . $icon_text . '</div>';
            echo '<div class="sa-addons-body ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '" id="sa-tab-' . $this->oxiid . '-id-' . $body['id'] . '" style="display: none;">
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
        echo '</div>';

        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }
    public function inline_public_css()
    {
        $styledata = $this->style;
        return '.' . $this->WRAPPER . ' .sa-addons-tabs-main-wrapper-style-12 .sa-active::before{
                    border-left: ' . $this->style['sa_tabs_headding_arrow-size'] . 'px solid  ' . $this->style['sa_tabs_headding_arrow-color'] . ';
                    border-bottom: ' . $this->style['sa_tabs_headding_arrow-size'] . 'px solid transparent;
                    border-top: ' . $this->style['sa_tabs_headding_arrow-size'] . 'px solid transparent;
                    }
                    
                    .' . $this->WRAPPER . ' .sa-addons-tabs-main-wrapper-style-12 .sa-addons-main-tab-body {
                        width: calc(100% - ' . $styledata['sa_tabs_headding_body_w-size'] . '%);
                    }';
    }
    public function inline_public_jquery()
    {
        $styledata = $this->style;
        $animationIn = $animationOut = $jquery = '';
        if ($styledata['sa_tabs_tab_anim'] == 'slide') {
            $animationIn = 'slideDown';
            $animationOut = 'slideUp';
        } else {
            $animationIn = 'fadeIn';
            $animationOut = 'fadeOut';
        }
        $jquery .= ' 
            jQuery(".sa-addons-tabs-main-wrapper-style-12 .sa-addons-header:eq(' . $styledata['sa_tabs_initial'] . ')").addClass("sa-active");
            jQuery(".sa-addons-tabs-main-wrapper-style-12 .sa-addons-header-two:eq(' . $styledata['sa_tabs_initial'] . ')").addClass("sa-active");
            jQuery(".sa-addons-tabs-main-wrapper-style-12 .sa-addons-body:eq(' . $styledata['sa_tabs_initial'] . ')").' . $animationIn . '("slow");
            jQuery(".sa-addons-tabs-main-wrapper-style-12 .sa-addons-header").click(function() {
            if (jQuery(this).hasClass("sa-active")) {
                return false
            } else {
                jQuery(".sa-addons-tabs-main-wrapper-style-12 .sa-addons-header").removeClass("sa-active");
                jQuery(this).addClass("sa-active");
                jQuery(".sa-addons-tabs-main-wrapper-style-12 .sa-addons-body").' . $animationOut . '("slow");
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).' . $animationIn . '("slow"); 
            }
        });
            jQuery(".sa-addons-tabs-main-wrapper-style-12 .sa-addons-header-two").click(function() {
            if (jQuery(this).hasClass("sa-active")) {
                return false
            } else {
                jQuery(".sa-addons-tabs-main-wrapper-style-12 .sa-addons-header-two").removeClass("sa-active");
                jQuery(this).addClass("sa-active");
                jQuery(".sa-addons-tabs-main-wrapper-style-12 .sa-addons-body").' . $animationOut . '("slow");
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).' . $animationIn . '("slow");
                var fullwidth = jQuery("html, body").width();';
        if (array_key_exists('sa_tabs_tab_fix_header', $styledata) && $styledata['sa_tabs_tab_fix_header'] != '0') {
            $jquery .= '    if(fullwidth <= 668){
                            jQuery("html, body").animate({
                                scrollTop: jQuery(".sa-addons-tabs-main-wrapper-style-12").offset().top - ' . $styledata['sa_tabs_tab_fix_h_offset'] . '
                            }, 2000);
                        } ';
        }
        $jquery .= '}
        });
    ';
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
            echo '<div class="oxi-addons-header oxi-header-' . $header['id'] . ' " ref="#oxi-tab-' . $oxiid . '-id-' . $header['id'] . '">' . $value_header[1] . ' </div>';
        }
        echo '</div>
    <div class="oxi-addons-main-tab-body ">';
        foreach ($listdata as $body) {
            $value_body = explode('||#||', $body['files']);
            if (!empty($value_body[3])) {
                $jquery .= 'jQuery(".oxi-header-' . $body['id'] . '").click(function() {window.open("' . $value_body[3] . '" ' . $linkopening . ');});';
            }
            echo '<div class="oxi-addons-header-two oxi-header-' . $body['id'] . ' " ref="#oxi-tab-' . $oxiid . '-id-' . $body['id'] . '"> ' . $value_body[1] . '</div>';

            echo '<div class="oxi-addons-body " id="oxi-tab-' . $oxiid . '-id-' . $body['id'] . '" style="display: none;">
            ' . $value_body[5] . '
            
            ';
            echo '</div>';
        }
        echo '</div>
                    </div>
                </div>
            </div>
        </div>';
        $animationIn = $animationOut = '';
        if ($styledata[5] == 'slide') {
            $animationIn = 'slideDown';
            $animationOut = 'slideUp';
        } else {
            $animationIn = 'fadeIn';
            $animationOut = 'fadeOut';
        }
        $jquery .= ' 
            jQuery(".oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header:eq(' . $styledata[3] . ')").addClass("oxi-active");
            jQuery(".oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header-two:eq(' . $styledata[3] . ')").addClass("oxi-active");
            jQuery(".oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-body:eq(' . $styledata[3] . ')").' . $animationIn . '("slow");
            jQuery(".oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header").click(function() {
            if (jQuery(this).hasClass("oxi-active")) {
                return false
            } else {
                jQuery(".oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header").removeClass("oxi-active");
                jQuery(this).addClass("oxi-active");
                jQuery(".oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-body").' . $animationOut . '("slow");
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).' . $animationIn . '("slow"); 
            }
        });
            jQuery(".oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header-two").click(function() {
            if (jQuery(this).hasClass("oxi-active")) {
                return false
            } else {
                jQuery(".oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header-two").removeClass("oxi-active");
                jQuery(this).addClass("oxi-active");
                jQuery(".oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-body").' . $animationOut . '("slow");
                var activeTab = jQuery(this).attr("ref");
                jQuery(activeTab).' . $animationIn . '("slow");
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
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 34) . '; 
        }
        .oxi-addons-container *{
            transition: none; 
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-tab-header{  
            width: ' . $styledata[212] . '%; 
            float: left;
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header-two{
            display: none; 
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header{  
            display: flex;
            align-items: center;
            width: ' . ((100 - $styledata[212]) + 10) . '%; 
            position: relative;
            font-size: ' . $styledata[74] . 'px;
            color: ' . $styledata[72] . ';
            background: ' . $styledata[232] . ';
            ' . OxiAddonsFontSettings($styledata, 78) . ';
            border-style: ' . $styledata[84] . ';
            border-color: ' . $styledata[85] . '; 
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ' ;  
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ' ;  
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 50) . '; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 236) . '; 
            cursor: pointer;   
        }
        
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-active{
            color: ' . $styledata[206] . ' !important; 
            background: ' . $styledata[230] . ' !important; 
            ' . OxiAddonsBoxShadowSanitize($styledata, 216) . '; 
            position: relative;   
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-active::before{  
        content: "";
            position: absolute;
            right: -14px;
            border-left: solid 15px ' . $styledata[230] . ' !important;
            border-bottom: solid 15px transparent;
            border-top: solid 15px transparent;
        } 


        .oxi-addons-main-wrapper-' . $oxiid . ' .active{
            display: block !important;
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
            background: ' . $styledata[234] . '; 
            -webkit-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
    
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-tab-body{
            width: ' . (100 - $styledata[212]) . '%; 
            float:left;
            background: ' . $styledata[119] . ';
            border-style: ' . $styledata[121] . ';
            border-color: ' . $styledata[122] . ';
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 124) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 172) . ';  
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-body{
            font-size: ' . $styledata[180] . 'px;
            color: ' . $styledata[178] . ';
            ' . OxiAddonsFontSettings($styledata, 184) . '; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 156) . '; 
        } 

    @media only screen and (min-width : 669px) and (max-width : 993px){
        .oxi-addons-main-wrapper-' . $oxiid . '{ 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-wrapper{ 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . '; 
        } 
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-tab-header{  
            width: ' . $styledata[213] . '%;  
        } 
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header{   
            width: ' . ((100 - $styledata[213]) + 15) . '%;  
            font-size: ' . $styledata[75] . 'px; 
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 88) . ' ;  
            padding-top: 15px;
            padding-bottom: 15px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 104) . ' ;  
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 51) . '; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 237) . '; 
        }
        
    
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-tab-body{
            width: ' . (100 - $styledata[213]) . '%;  
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 125) . '; 
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-body{
            font-size: ' . $styledata[181] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 157) . '; 
        } 
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-active .oxi-addons-span-arrow{
            width: 47px;
            position: absolute;
            right: -25px;
            top: 5px;
            height: 44px;
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
        } 
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-tab-header{  
            display: none;
        } 
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header-two{
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: ' . $styledata[76] . 'px;
            color: ' . $styledata[72] . ';
            background: ' . $styledata[232] . ';
            ' . OxiAddonsFontSettings($styledata, 78) . ';
            border-style: ' . $styledata[84] . ';
            border-color: ' . $styledata[85] . ';
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 89) . ' ; 
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 52) . ';  
            cursor: pointer;
            text-align: center; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 105) . ' ;   
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 238) . '; 
        }   
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-tab-body{ 
            width: 100%;
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
            box-shadow: none;
        } 
    }
    ';

        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }
}