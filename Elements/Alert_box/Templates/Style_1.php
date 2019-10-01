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

class Style_1 extends Templates {

    public function default_render($style, $child, $admin) {
        
    }
    
    
      public function inline_public_jquery() {
        
         $jquery = 'jQuery(document).ready(function(){
                jQuery(".oxi-addons-AB-1 .oxi-addonsAL-col-three").click(function(){
                    jQuery(".oxi-addons-AB-1").hide();
                });
           
            });';
        return $jquery;
    }
    public function old_render() {
        $style = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        $firsticon = $heading = $details = $contentsection = $lasticon = '';
        if ($stylefiles[2] != '') {
            $firsticon = '<div class="oxi-addonsAL-col-one">
                                        <div class="oxi-addonsAL-F-icon">
                                            ' . oxi_addons_font_awesome('' . $stylefiles[2] . '') . '
                                        </div>
                                    </div>';
        }
        if ($stylefiles[4] != '') {
            $heading = '<div class="oxi-addonsAL-H">
                                ' . OxiAddonsTextConvert($stylefiles[4]) . '
                            </div>';
        }
        if ($stylefiles[6] != '') {
            $details = '<div class="oxi-addonsAL-DC">
                                            ' . OxiAddonsTextConvert($stylefiles[6]) . '
                                        </div>';
        }
        if ($heading != '' || $details != '') {
            $contentsection = '<div class="oxi-addonsAL-col-two">
                                    ' . $heading . '
                                    ' . $details . '
                                </div>';
        }
        if ($stylefiles[8] != '') {
            $lasticon = '<div class="oxi-addonsAL-col-three">
                                <div class="oxi-addonsAL-L-icon">
                                    ' . oxi_addons_font_awesome('' . $stylefiles[8] . '') . '
                                </div>
                            </div>';
        }
        echo '<div class="oxi-addons-container">
                 <div class="oxi-addons-row">
                    <div class="oxi-addons-AL-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 59) . '>
                        <div class="oxi-addonsAL-row">
                            ' . $firsticon . '
                            ' . $contentsection . '
                            ' . $lasticon . '
                        </div>
                     </div>
                </div>
              </div>';

        $css = '.oxi-addons-AL-' . $oxiid . '{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 37) . ';
          }
          .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-row{
            display: flex;
            width: 100%;
            margin: 0 auto;
            overflow: auto;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';
            background: ' . $styledata[3] . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 53) . ';
          }
          .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-col-one{
            justify-content: center;
            display: flex;
            align-items: center;
            flex-grow: 2;
            background: ' . $styledata[63] . ';
          }
          .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-F-icon{
            text-align: center;
            font-size: ' . $styledata[65] . 'px;
            color: ' . $styledata[69] . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';
          }
          .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-col-two{
            flex-grow: 8;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . ';
            
          }
          .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-H{
            width: 100%;
            float: left;
            font-size: ' . $styledata[87] . 'px;
            color: ' . $styledata[91] . ';
            ' . OxiAddonsFontSettings($styledata, 93) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';
          }
          .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-DC{
            width: 100%;
            float: left;
            font-size: ' . $styledata[115] . 'px;
            color: ' . $styledata[119] . ';
            ' . OxiAddonsFontSettings($styledata, 121) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . ';
          }
           .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-col-three{
            justify-content: center;
            display: flex;
            align-items: center;
            cursor: pointer;
            flex-grow: 2;
           }
           .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-col-three:hover{
            background: ' . $styledata[143] . ';
           }
           .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-L-icon{
            text-align: center;
            font-size: ' . $styledata[145] . 'px;
            color: ' . $styledata[149] . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 151) . ';
          }

          @media only screen and (min-width : 669px) and (max-width : 993px){
          .oxi-addons-AL-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 38) . ';
          }
          .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-row{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 6) . ';
          }
          .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-F-icon{
            font-size: ' . $styledata[66] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 72) . ';
          }
          .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-col-two{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 22) . ';
            
          }
          .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-H{
            font-size: ' . $styledata[88] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 100) . ';
          }
          .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-DC{
            font-size: ' . $styledata[116] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 128) . ';
          }

           .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-L-icon{
            font-size: ' . $styledata[146] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 152) . ';
          }

          }
          @media only screen and (max-width : 668px){
            .oxi-addons-AL-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
          }
          .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-row{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
          }
          .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-F-icon{
            font-size: ' . $styledata[67] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';
          }
          .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-col-two{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
            
          }
          .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-H{
            font-size: ' . $styledata[89] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
          }
          .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-DC{
            font-size: ' . $styledata[117] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';
          }

           .oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-L-icon{
            font-size: ' . $styledata[147] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 153) . ';
          }
            
          }
';
        $jquery = 'jQuery(document).ready(function(){
                jQuery(".oxi-addons-AL-' . $oxiid . ' .oxi-addonsAL-col-three").click(function(){
                    jQuery(".oxi-addons-AL-' . $oxiid . '").hide();
                });
           
            });';




        wp_add_inline_style('shortcode-addons-style', $css);
         wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }

}
