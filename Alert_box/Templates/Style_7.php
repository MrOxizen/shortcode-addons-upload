<?php

namespace SHORTCODE_ADDONS_UPLOAD\Alert_box\Templates;

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

        $firsticon = $heading = $details = $contentsection = $lasticon = '';
        
        if (array_key_exists('sa_ab_icon', $style) && $style['sa_ab_icon'] != '0') {
            $firsticon = '<div class="oxi-addonsAL-SE-col-one">
                                        <div class="oxi-addonsAL-SE-F-icon">
                                            ' . $this->font_awesome_render($style['sa_ab_icon_class']) . '
                                        </div>
                                    </div>';
        }
        if ($style['sa_ab_content_header'] != '') {
            $heading = '<div class="oxi-addonsAL-SE-H">
                                           ' . $this->text_render($style['sa_ab_content_header']) . '
                                        </div>';
        }
        if ($style['sa_ab_content_description'] != '') {
            $details = '<div class="oxi-addonsAL-SE-DC">
                                           ' . $this->text_render($style['sa_ab_content_description']) . '
                                        </div>';
        }
        if (array_key_exists('sa_ab_text', $style) && $style['sa_ab_text'] != '0') {
            $contentsection = '<div class="oxi-addonsAL-SE-col-two">
                                    ' . $heading . '
                                    ' . $details . '
                                </div>';
        }
        if (array_key_exists('sa_ab_ci', $style) && $style['sa_ab_ci'] != '0') {
            $lasticon = '<div class="oxi-addonsAL-SE-col-three">
                                <div class="oxi-addonsAL-SE-L-icon">
                                     ' . $this->font_awesome_render($style['sa_ab_ci_class']) . '
                                </div>
                            </div>';
        }
        echo '<div class="oxi-addons-AL-SE-7 oxi-addons-AL-SE-7-' . $this->oxiid . '" ' . $this->animation_render('sa_ab_animation', $style) . '>
                        <div class="oxi-addonsAL-SE-row">
                            ' . $firsticon . '
                            ' . $contentsection . '
                            ' . $lasticon . '
                        </div>
                 </div>';
    }

    public function inline_public_jquery() {

        $jquery = 'jQuery(document).ready(function(){
                jQuery(".oxi-addons-AL-SE-7-' . $this->oxiid . ' .oxi-addonsAL-SE-col-three").click(function(){
                    jQuery(".oxi-addons-AL-SE-7-' . $this->oxiid . '").hide();
                });
           
            });';
        return $jquery;
    }

    public function old_render() {
        $style = $this->dbdata;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        $firsticon = $heading = $details = $contentsection = $lasticon = '';
        if ($stylefiles[2] != '') {
            $firsticon = '<div class="oxi-addonsAL-SE-col-one">
                                        <div class="oxi-addonsAL-SE-F-icon">
                                            ' . oxi_addons_font_awesome('' . $stylefiles[2] . '') . '
                                        </div>
                                    </div>';
        }
        if ($stylefiles[4] != '') {
            $heading = '<div class="oxi-addonsAL-SE-H">
                                           ' . OxiAddonsTextConvert($stylefiles[4]) . '
                                        </div>';
        }
        if ($stylefiles[6] != '') {
            $details = '<div class="oxi-addonsAL-SE-DC">
                                            ' . OxiAddonsTextConvert($stylefiles[6]) . '
                                        </div>';
        }
        if ($heading != '' || $details != '') {
            $contentsection = '<div class="oxi-addonsAL-SE-col-two">
                                    ' . $heading . '
                                    ' . $details . '
                                </div>';
        }
        if ($stylefiles[8] != '') {
            $lasticon = '<div class="oxi-addonsAL-SE-col-three">
                                <div class="oxi-addonsAL-SE-L-icon">
                                    ' . oxi_addons_font_awesome('' . $stylefiles[8] . '') . '
                                </div>
                            </div>';
        }
        echo '<div class="oxi-addons-container">
                 <div class="oxi-addons-row">
                    <div class="oxi-addons-AL-SE-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 59) . '>
                        <div class="oxi-addonsAL-SE-row">
                            ' . $firsticon . '
                            ' . $contentsection . '
                            ' . $lasticon . '
                        </div>
                     </div>
                </div>
              </div>';

        $css = '.oxi-addons-AL-SE-' . $oxiid . '{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 37) . ';
          }
          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-row{
            display: flex;
            width: 100%;
            margin: 0 auto;
            overflow: auto;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';
            background: ' . $styledata[3] . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 53) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . ';
          }
          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-col-one{
            justify-content: center;
            display: flex;
            align-items: center;
            flex-grow: 1;
            background: ' . $styledata[63] . ';
            border-right: ' . $styledata[167] . 'px ' . $styledata[168] . '  ' . $styledata[171] . ';
          }
          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-F-icon{
            text-align: center;
            font-size: ' . $styledata[65] . 'px;
            color: ' . $styledata[69] . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';
          }
            
          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-col-two{
            flex-grow: 10;
            border-left: ' . $styledata[173] . 'px ' . $styledata[174] . '  ' . $styledata[177] . ';
            
          }
          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-H{
            width: 100%;
            float: left;
            font-size: ' . $styledata[87] . 'px;
            color: ' . $styledata[91] . ';
            ' . OxiAddonsFontSettings($styledata, 93) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';
          }
          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-DC{
            width: 100%;
            float: left;
            font-size: ' . $styledata[115] . 'px;
            color: ' . $styledata[119] . ';
            ' . OxiAddonsFontSettings($styledata, 121) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . ';
          }
          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-L-icon .oxi-icons{
            display: flex;
            justify-content: center;
            align-items: center; 
            cursor:pointer;
            font-size: ' . $styledata[145] . 'px;
            background: ' . $styledata[143] . ';
            color: ' . $styledata[149] . ';
            width: ' . $styledata[179] . 'px;
            height: ' . $styledata[183] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 151) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 203) . ';
            ' . OxiAddonsTextShadowSettings($styledata, 209) . ';
            }

          @media only screen and (min-width : 669px) and (max-width : 993px){
          .oxi-addons-AL-SE-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 38) . ';
          }
          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-row{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 6) . ';
          }
          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-F-icon{
            font-size: ' . $styledata[66] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 72) . ';
          }
          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-col-two{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 22) . ';
            
          }
          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-H{
            font-size: ' . $styledata[88] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 100) . ';
          }
          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-DC{
            font-size: ' . $styledata[116] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 128) . ';
          }

          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-L-icon .oxi-icons{          
            font-size: ' . $styledata[146] . 'px;
            width: ' . $styledata[180] . 'px;
            height: ' . $styledata[184] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 188) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 152) . ';
            }

          }
          @media only screen and (max-width : 668px){
            .oxi-addons-AL-SE-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
          }
          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-row{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
          }
          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-F-icon{
            font-size: ' . $styledata[67] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';
          }
          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-col-two{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
            
          }
          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-H{
            font-size: ' . $styledata[89] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
          }
          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-DC{
            font-size: ' . $styledata[117] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';
          }

          .oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-L-icon .oxi-icons{          
            font-size: ' . $styledata[147] . 'px;
            width: ' . $styledata[181] . 'px;
            height: ' . $styledata[185] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 189) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 153) . ';
            }

            
          }
';
        $jquery = 'jQuery(document).ready(function(){
                jQuery(".oxi-addons-AL-SE-' . $oxiid . ' .oxi-addonsAL-SE-col-three").click(function(){
                    jQuery(".oxi-addons-AL-SE-' . $oxiid . '").hide();
                });
           
            });';



        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }

}
