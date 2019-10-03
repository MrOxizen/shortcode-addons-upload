<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Alert_box\Templates;

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




        $firsticon = $heading = $details = $contentsection = $lasticon = $clickicon = $clicktext = '';
        if (array_key_exists('sa_ab_icon', $style) && $style['sa_ab_icon'] != '0') {
            $firsticon = '<div class="oxi-addonsAL-FI-col-one">
                                        <div class="oxi-addonsAL-FI-F-icon">
                                            ' . $this->font_awesome_render($style['sa_ab_icon_class']) . '
                                        </div>
                                    </div>';
        }
        if ($style['sa_ab_content_header'] != '') {
            $heading = '<div class="oxi-addonsAL-FI-H">
                                          ' . $this->text_render($style['sa_ab_content_header']) . '
                                        </div>';
        }
        if ($style['sa_ab_content_description'] != '') {
            $details = '<div class="oxi-addonsAL-FI-DC">
                                            ' . $this->text_render($style['sa_ab_content_description']) . '
                                        </div>';
        }
        if (array_key_exists('sa_ab_text', $style) && $style['sa_ab_text'] != '0') {
            $contentsection = '<div class="oxi-addonsAL-FI-col-two">
                                    ' . $heading . '
                                    ' . $details . '
                                </div>';
        }
        if (array_key_exists('sa_ab_ci', $style) && $style['sa_ab_ci'] != '0') {
            $lasticon = '<div class="oxi-addonsAL-FI-col-three">
                                <div class="oxi-addonsAL-FI-L-icon">
                                     ' . $this->font_awesome_render($style['sa_ab_ci_class']) . '
                                </div>
                            </div>';
        }
        if (array_key_exists('sa_ab_main_icon', $style) && $style['sa_ab_main_icon'] != '0') {
            $clickicon = '<div class="oxi-addonsAL-FI-click-icon">
                                     ' . $this->font_awesome_render($style['sa_ab_main_icon_class']) . '
                                </div>';
        }
        if ($style['sa_ab_main_text'] != '') {
            $clicktext = '<div class="oxi-addonsAL-FI-click-text">
                                    ' . $this->text_render($style['sa_ab_main_text']) . '
                                </div>';
        }
        echo ' <div class="oxi-addons-AL-FI-5">
                        <div class="oxi-addonsAL-FI-click-box">
                            <div class="oxi-addonsAL-FI-A-C">
                                ' . $clickicon . '
                                ' . $clicktext . '
                            </div>
                        </div>
                        <div class="oxi-addonsAL-FI-FI-DN">
                            <div class="oxi-addonsAL-FI-row" ' . $this->animation_render('sa_ab_animation', $style) . '>
                                ' . $firsticon . '
                                ' . $contentsection . '
                                ' . $lasticon . '
                            </div>
                        </div>
                     </div>';
    }

    public function inline_public_jquery() {

        $jquery = 'jQuery(document).ready(function(){
                jQuery(".oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-box").click(function(){
                    jQuery(".oxi-addons-AL-FI-5 .oxi-addonsAL-FI-FI-DN").show();
                });
                jQuery(".oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-box").click(function(){
                    jQuery(".oxi-addons-AL-FI-5 .oxi-addonsAL-FI-click-box").hide();
                });
                jQuery(".oxi-addons-AL-FI-5 .oxi-addonsAL-FI-col-three").click(function(){
                    jQuery(".oxi-addons-AL-FI-5 .oxi-addonsAL-FI-FI-DN").hide();
                });
           
            });';
        return $jquery;
    }

    public function old_render() {
        $style = $this->dbdata;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        $firsticon = $heading = $details = $contentsection = $lasticon = $clickicon = $clicktext = '';
        if ($stylefiles[2] != '') {
            $firsticon = '<div class="oxi-addonsAL-FI-col-one">
                                        <div class="oxi-addonsAL-FI-F-icon">
                                            ' . oxi_addons_font_awesome('' . $stylefiles[2] . '') . '
                                        </div>
                                    </div>';
        }
        if ($stylefiles[4] != '') {
            $heading = '<div class="oxi-addonsAL-FI-H">
                                           ' . OxiAddonsTextConvert($stylefiles[4]) . '
                                        </div>';
        }
        if ($stylefiles[6] != '') {
            $details = '<div class="oxi-addonsAL-FI-DC">
                                            ' . OxiAddonsTextConvert($stylefiles[6]) . '
                                        </div>';
        }
        if ($heading != '' || $details != '') {
            $contentsection = '<div class="oxi-addonsAL-FI-col-two">
                                    ' . $heading . '
                                    ' . $details . '
                                </div>';
        }
        if ($stylefiles[8] != '') {
            $lasticon = '<div class="oxi-addonsAL-FI-col-three">
                                <div class="oxi-addonsAL-FI-L-icon">
                                    ' . oxi_addons_font_awesome('' . $stylefiles[8] . '') . '
                                </div>
                            </div>';
        }
        if ($stylefiles[10] != '') {
            $clickicon = '<div class="oxi-addonsAL-FI-click-icon">
                                    ' . oxi_addons_font_awesome('' . $stylefiles[10] . '') . '
                                </div>';
        }
        if ($stylefiles[10] != '') {
            $clicktext = '<div class="oxi-addonsAL-FI-click-text">
                                    ' . OxiAddonsTextConvert($stylefiles[12]) . '
                                </div>';
        }
        echo '<div class="oxi-addons-container">
                 <div class="oxi-addons-row">
                    <div class="oxi-addons-AL-FI-' . $oxiid . '">
                        <div class="oxi-addonsAL-FI-click-box">
                            <div class="oxi-addonsAL-FI-A-C">
                                ' . $clickicon . '
                                ' . $clicktext . '
                            </div>
                        </div>
                        <div class="oxi-addonsAL-FI-FI-DN">
                            <div class="oxi-addonsAL-FI-row" ' . OxiAddonsAnimation($styledata, 59) . '>
                                ' . $firsticon . '
                                ' . $contentsection . '
                                ' . $lasticon . '
                            </div>
                        </div>
                     </div>
                </div>
              </div>';

        $css = '.oxi-addons-AL-FI-' . $oxiid . '{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 37) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-click-box{
            width: 100%;
            display: flex;
            justify-content: center;
            text-align: center;
            cursor: pointer;
            margin: auto;
            max-width: ' . $styledata[279] . 'px;
            border: ' . $styledata[169] . 'px ' . $styledata[170] . ' ' . $styledata[173] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 175) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 191) . ';
            background: ' . $styledata[167] . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 223) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-A-C{
            width: 100%;
            float: left;
            text-align: ' . $styledata[283] . ';
           }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-click-icon{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 235) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-click-icon .oxi-icons{
            font-size: ' . $styledata[229] . 'px;
            color: ' . $styledata[233] . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-click-text{
            width: 100%;
            float: left;
            font-size: ' . $styledata[251] . 'px;
            color: ' . $styledata[255] . ';
            ' . OxiAddonsFontSettings($styledata, 257) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 263) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-FI-DN{
            display: none;
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-row{
            display: flex;
            width: 100%;
            margin: 0 auto;
            overflow: auto;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';
            background: ' . $styledata[3] . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 53) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-col-one{
            justify-content: center;
            display: flex;
            align-items: center;
            flex-grow: 2;
            background: ' . $styledata[63] . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-F-icon{
            text-align: center;
            font-size: ' . $styledata[65] . 'px;
            color: ' . $styledata[69] . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-col-two{
            flex-grow: 8;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . ';
            
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-H{
            width: 100%;
            float: left;
            font-size: ' . $styledata[87] . 'px;
            color: ' . $styledata[91] . ';
            ' . OxiAddonsFontSettings($styledata, 93) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-DC{
            width: 100%;
            float: left;
            font-size: ' . $styledata[115] . 'px;
            color: ' . $styledata[119] . ';
            ' . OxiAddonsFontSettings($styledata, 121) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . ';
          }
           .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-col-three{
            justify-content: center;
            display: flex;
            align-items: center;
            cursor: pointer;
            flex-grow: 2;
           }
           .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-col-three:hover{
            background: ' . $styledata[143] . ';
           }
           .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-L-icon{
            text-align: center;
            font-size: ' . $styledata[145] . 'px;
            color: ' . $styledata[149] . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 151) . ';
          }

          @media only screen and (min-width : 669px) and (max-width : 993px){
          
          .oxi-addons-AL-FI-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 38) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-click-box{
            max-width: ' . $styledata[280] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 176) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 192) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-click-icon{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 236) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-click-icon .oxi-icons{
            font-size: ' . $styledata[230] . 'px;
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-click-text{
            font-size: ' . $styledata[252] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 264) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-row{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 6) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-F-icon{
            font-size: ' . $styledata[66] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 72) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-col-two{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 22) . ';
            
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-H{
            font-size: ' . $styledata[88] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 100) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-DC{
            font-size: ' . $styledata[116] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 128) . ';
          }

           .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-L-icon{
            font-size: ' . $styledata[146] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 152) . ';
          }

          }
          @media only screen and (max-width : 668px){
            .oxi-addons-AL-FI-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-click-box{
            max-width: ' . $styledata[281] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 177) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 193) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-click-icon{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 237) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-click-icon .oxi-icons{
            font-size: ' . $styledata[231] . 'px;
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-click-text{
            font-size: ' . $styledata[253] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 265) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-row{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-F-icon{
            font-size: ' . $styledata[67] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-col-two{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
            
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-H{
            font-size: ' . $styledata[89] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
          }
          .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-DC{
            font-size: ' . $styledata[117] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';
          }

           .oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-L-icon{
            font-size: ' . $styledata[147] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 153) . ';
          }
            
          }
';
        $jquery = 'jQuery(document).ready(function(){
                jQuery(".oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-click-box").click(function(){
                    jQuery(".oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-FI-DN").show();
                });
                jQuery(".oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-click-box").click(function(){
                    jQuery(".oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-click-box").hide();
                });
                jQuery(".oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-col-three").click(function(){
                    jQuery(".oxi-addons-AL-FI-' . $oxiid . ' .oxi-addonsAL-FI-FI-DN").hide();
                });
           
            });';


        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }

}
