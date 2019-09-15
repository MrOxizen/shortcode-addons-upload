<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Drop_caps\Templates;

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
 

class Style_4 extends Templates {

   
    public function default_render($style, $child, $admin) {

        echo '<div class="oxi_addons__drop_caps_main">
                <div class="oxi_addons__text">'.$this->text_render($style['sa_drop_caps_text']).'</div>
              </div>';
       
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';
  echo '<div class="oxi-addons-drop-caps-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 35) . '>
                '. $stylefiles[3] .'
         </div>';
    $css .= '
            .oxi-addons-drop-caps-' . $oxiid . '{ 
                background-image: url("'. OxiAddonsUrlConvert($stylefiles[9]).'") ;
                
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                position:relative;

                display: inline-block;
                float: ' . $stylefiles[7] . ';
                display: inline-flex;
                line-height: 1;
                justify-content: center;
                align-items: center;
                color: ' . $styledata[43] . ';
                font-size: ' . $styledata[39] . 'px;
                font-family: ' . oxi_addons_font_familly($styledata[45]) . ' !important;
                font-style: ' . $styledata[49] . ' !important;
                font-weight: ' . $styledata[47] . ' !important;
                border-radius: ' . $styledata[53] . '%;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 55) . ';
                border-style:' . $styledata[72] . '; 
                border-color:' . $styledata[73] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 3) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';
            }
            .oxi-addons-drop-caps-' . $oxiid . ':after {
                position:absolute;
                content:" ";
                background: '.$styledata[79].';
                width: 100%;
                height: 100%;
                top: 0;
                bottom: 0
                display: flex;
                justify-content: center;
                align-items: center;
                
                }
            .oxi-addons-drop-caps-' . $oxiid . '{
                z-index: 1
                overflow: hidden;
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-drop-caps-' . $oxiid . '{ 
                   font-size: ' . $styledata[40] . 'px;
                   border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 56) . ';
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 4) . ';
                   margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 20) . ';
               }  
            }
            @media only screen and (max-width : 668px){
               .oxi-addons-drop-caps-' . $oxiid . '{ 
                   font-size: ' . $styledata[41] . 'px;
                   border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 57) . ';
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';
                   margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . ';
               }  
            }';

         wp_add_inline_style('shortcode-addons-style', $css);
    }

}
