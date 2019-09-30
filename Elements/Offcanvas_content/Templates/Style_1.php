<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Offcanvas_content\Templates;

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

class Style_1 extends Templates
{

    public function default_render($style, $child, $admin)
    {

        echo '<div class="sa_addons_oc_container_style_1 ' . $style['sa_offcavas_sidebar_posi'] . '">
                <div class="sa_addons_oc_style_1">
                    <div class="sa_addons_oc_btn_content">
                        <div class="sa_addons_oc_cl_btn">      
                            <div class="sa_addons_oc_cl_btn_icon">

                            </div>
                        </div>
                            
                    </div>
                    <div class="sa_addons_oc_content_overlay"></div>
                    <div class="sa_addons_oc_show_content">
                        <div class="sa_addons_oc_content_details">
                            
                            <div class="sa_addons_oc_content_close_icon">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ';
    }
    public function inline_public_jquery()
    {
        $jquery = '';

        $jquery .= 'jQuery(document).ready(function(){
                        jQuery(". ' . $this->WRAPPER . ' .sa_addons_oc_container_style_1 .sa_addons_oc_cl_btn").click(function(){
                            jQuery(". ' . $this->WRAPPER . ' .sa_addons_oc_container_style_1 .sa_addons_oc_show_content").toggleClass("sa_active");
                            jQuery(". ' . $this->WRAPPER . ' .sa_addons_oc_container_style_1 .sa_addons_oc_content_overlay").toggleClass("sa_active");
                        });
                        jQuery(". ' . $this->WRAPPER . ' .sa_addons_oc_container_style_1 .sa_addons_oc_content_close_icon .oxi-icons").click(function(){
                            jQuery(". ' . $this->WRAPPER . ' .sa_addons_oc_container_style_1 .sa_addons_oc_show_content").toggleClass("sa_active");
                            jQuery(". ' . $this->WRAPPER . ' .sa_addons_oc_container_style_1 .sa_addons_oc_content_overlay").toggleClass("sa_active");
                        });
                        jQuery(". ' . $this->WRAPPER . ' .sa_addons_oc_container_style_1 .sa_addons_oc_content_overlay").click(function(){
                            jQuery(". ' . $this->WRAPPER . ' .sa_addons_oc_container_style_1 .sa_addons_oc_show_content").toggleClass("sa_active");
                            jQuery(". ' . $this->WRAPPER . ' .sa_addons_oc_container_style_1 .sa_addons_oc_content_overlay").toggleClass("sa_active");
                        });
                    });
                    ';
        return $jquery;
    }
    public function old_render()
    {

        $styledata = $this->dbdata;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $btntext = $btnicon = $info = $cicon = '';
        if (!empty($stylefiles[2])) {
            $btntext = '<div class="oxi-addons-OC-C-button-text">' . OxiAddonsTextConvert($stylefiles[2]) . '</div>';
        }
        if (!empty($stylefiles[4])) {
            $btnicon = '<div class="oxi-addons-OC-C-button-icon">' . oxi_addons_font_awesome($stylefiles[4]) . '</div>';
        }
        if (!empty($stylefiles[6])) {
            $info = ' <div class="oxi-addons-OC-content-details">
                    ' . OxiAddonsTextConvert($stylefiles[6]) . '
                </div>';
        }
        if (!empty($stylefiles[8])) {
            $cicon = '<div class="oxi-addons-OC-cross-icon">' . oxi_addons_font_awesome($stylefiles[8]) . '</div>';
        }
        echo '<div class="oxi-addons-container">
                <div class="oxi-addons-row">
                    <div class="oxi-addons-OC-' . $oxiid . '">
                        <div class="oxi-addons-OC-row">
                            <div class="oxi-addons-OC-button">
                                <div  class="oxi-addons-OC-C-button-link">
                                        ' . $btnicon . '
                                        ' . $btntext . '
                                </div>
                            </div>
                            <div class="oxi-addons-OC-conetent-overlay"></div>
                            <div class="oxi-addons-OC-Content">
                                ' . $cicon . '
                                ' . $info . '
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
        if ($styledata[51] == 'right') {
            $right = "right: 0";
            $margin = "margin-right: -$styledata[5]px";
            $marginler = "margin-right: 0;";
        } else {
            $right = "left: 0";
            $margin = "margin-left: -$styledata[5]px";
            $marginler = "margin-left: 0;";
        }
        $css = '.oxi-addons-OC-' . $oxiid . '{
        width: 100%;
        float: left;
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-row{
        width: 100%;
        float: left;
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-button{
        width: 100%;
        ' . OxiAddonsFontSettings($styledata, 97) . '
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-C-button-link{
        display:inline-block;
        background: ' . $styledata[91] . ';
        text-align:center;
        border: ' . $styledata[103] . 'px ' . $styledata[104] . ' ;
        border-color: ' . $styledata[107] . ' ;
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 111) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . ';
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 143) . ';
        cursor: pointer;
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-C-button-link:hover{
        background: ' . $styledata[95] . ';
        border-color: ' . $styledata[109] . ' ;
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-C-button-icon{
        display: inline-block;
        font-size: ' . $styledata[159] . 'px;
        color: ' . $styledata[163] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 165) . ';
        transition:none;
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-C-button-link:hover .oxi-addons-OC-C-button-icon{
        color: ' . $styledata[93] . ';
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-C-button-text{
        display: inline-block;
        font-size: ' . $styledata[85] . 'px;
        color: ' . $styledata[89] . ';
        
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-C-button-link:hover .oxi-addons-OC-C-button-text{
        color: ' . $styledata[93] . ';  
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-Content{
        position: fixed;
        top: 0;
        ' . $right . ';
        z-index: 99999999;
        width: ' . $styledata[5] . 'px;
        height: 100%;
        overflow-y: auto;
        background: ' . $styledata[3] . ';
        transition: all 0.5s;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
        ' . $margin . ';
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-Content.oxi-active{
        position: fixed;
        top: 0;
        ' . $right . ';
        z-index: 99999999;
        width: ' . $styledata[5] . 'px;
        height: 100%;
        overflow-y: auto;
        background: ' . $styledata[3] . ';
        transition: all 0.5s;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
        ' . $marginler . ';
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-conetent-overlay{
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        z-index: 99999999;
        overflow-y: auto;
        background: ' . $styledata[25] . ';
        display: none;
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-conetent-overlay.oxi-active{
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        z-index: 99999999;
        overflow-y: auto;
        background: ' . $styledata[25] . ';
        display: block;
        cursor: pointer;
    }
    
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-cross-icon{
        width: 100%;
        float: left;
        text-align: ' . $styledata[49] . ';
        color: ' . $styledata[31] . ';
        font-size:  ' . $styledata[27] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . '; 
       
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-cross-icon .oxi-icons{
        cursor: pointer; 
    }
    @media only screen and (min-width : 669px) and (max-width : 993px){
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-C-button-link{
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 112) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 128) . ';
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 144) . ';
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-C-button-icon{
        font-size: ' . $styledata[160] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 166) . ';
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-C-button-text{
        font-size: ' . $styledata[86] . 'px;
        
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-Content{
        width: ' . $styledata[6] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 10) . ';
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-Content.oxi-active{
        width: ' . $styledata[6] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 10) . ';
    }
    
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-cross-icon{
        font-size:  ' . $styledata[28] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 34) . '; 
    }
          
}
    @media only screen and (max-width : 668px){
        .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-C-button-link{
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 113) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 145) . ';
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-C-button-icon{
        font-size: ' . $styledata[161] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 167) . ';
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-C-button-text{
        font-size: ' . $styledata[87] . 'px;
        
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-Content{
        width: ' . $styledata[7] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';
    }
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-Content.oxi-active{
        width: ' . $styledata[7] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';
    }
    
    .oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-cross-icon{
        font-size:  ' . $styledata[29] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . '; 
    }   

}';

        $jquery = 'jQuery(document).ready(function(){
                    jQuery(".oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-C-button-link").click(function(){
                        jQuery(".oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-Content").toggleClass("oxi-active");
                        jQuery(".oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-conetent-overlay").toggleClass("oxi-active");
                    });
                    jQuery(".oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-cross-icon .oxi-icons").click(function(){
                        jQuery(".oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-Content").toggleClass("oxi-active");
                        jQuery(".oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-conetent-overlay").toggleClass("oxi-active");
                    });
                    jQuery(".oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-conetent-overlay").click(function(){
                        jQuery(".oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-Content").toggleClass("oxi-active");
                        jQuery(".oxi-addons-OC-' . $oxiid . ' .oxi-addons-OC-conetent-overlay").toggleClass("oxi-active");
                    });
                });';
        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }
}
