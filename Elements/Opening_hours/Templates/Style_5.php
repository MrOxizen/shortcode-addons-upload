<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Opening_hours\Templates;

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
        $repeater = (array_key_exists('sa_oh_repeater', $style) && is_array($style['sa_oh_repeater'])) ? $style['sa_oh_repeater'] : [];
        foreach ($repeater as $key => $value) {
          
            $day = $times = '';
            if (!empty($value['sa_oh_day_text'])) {
                $day = '<div class="oxi-addonsOH-FI-heading">
                               ' . $this->text_render($value['sa_oh_day_text']) . '
                            </div>';
            }
            if (!empty($value['sa_oh_day_text'])) {
                $times = '<div class="oxi-addonsOH-FI-date">' . $this->text_render($value['sa_oh_time_text']) . '</div>';
            }



            echo '<div class="' . $this->column_render('sa_oh_col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '">
                  <div class="oxi-addonsOH-FI-wrapper-5 oxi-addonsOH-FI-wrapper-5-' . $key . '">
                    <div class="oxi-addonsOH-FI-row" ' . $this->animation_render('sa_oh_animation', $style) . '>
                        <div class="oxi-addonsOH-FI-content">
                            ' . $day . '
                            ' . $times . '
                        </div>
                    </div>
                </div> ';
            
            echo '</div>';
        }
    }

    public function old_render() {
        $style = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);

        $css = '';
        echo ' <div class="oxi-addons-container">
          <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $listitemdata = explode('||#||', $value['files']);
            $day = $times = '';
            if ($listitemdata[2] != '') {
                $day = '<div class="oxi-addonsOH-FI-heading">
                               ' . OxiAddonsTextConvert($listitemdata[2]) . '
                            </div>';
            }
            if ($listitemdata[4] != '') {
                $times = '<div class="oxi-addonsOH-FI-date">' . OxiAddonsTextConvert($listitemdata[4]) . '</div>';
            }



            echo '<div class="' . OxiAddonsItemRows($styledata, 3) . '">
                  <div class="oxi-addonsOH-FI-wrapper-' . $oxiid . ' oxi-addonsOH-FI-wrapper-' . $oxiid . '-' . $value['id'] . '">
                    <div class="oxi-addonsOH-FI-row" ' . OxiAddonsAnimation($styledata, 85) . '>
                        <div class="oxi-addonsOH-FI-content">
                            ' . $day . '
                            ' . $times . '
                        </div>
                    </div>
                </div> ';
            
            echo '</div>';
        }
        echo '  </div> </div>';
        $css .= '.oxi-addonsOH-FI-wrapper-' . $oxiid . '{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . ';
        }
        .oxi-addonsOH-FI-wrapper-' . $oxiid . ' .oxi-addonsOH-FI-row{
            width: 100%;
            margin: 0 auto;
            max-width: ' . $styledata[145] . 'px;
            ' . OxiAddonsBGImage($styledata, 7) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 79) . ';
            overflow: hidden;
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ' ;
            border-style: ' . $styledata[11] . ';
            border-color: ' . $styledata[12] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 47) . ';
            transition: .5s;
        }
        .oxi-addonsOH-FI-wrapper-' . $oxiid . ' .oxi-addonsOH-FI-row:hover{
            ' . OxiAddonsBGImage($styledata, 169) . ';
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 149) . ' ;
            border-style: ' . $styledata[165] . ';
            border-color: ' . $styledata[166] . ';
        }
        .oxi-addonsOH-FI-wrapper-' . $oxiid . ' .oxi-addonsOH-FI-content{
            width: 100%;
            float: left;
            
        }
        .oxi-addonsOH-FI-wrapper-' . $oxiid . '  .oxi-addonsOH-FI-heading{
            width: 100%;
            float: left;
            font-size: ' . $styledata[89] . 'px;
            color: ' . $styledata[93] . ';
            ' . OxiAddonsFontSettings($styledata, 95) . ';
             padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
        }
        .oxi-addonsOH-FI-wrapper-' . $oxiid . ' .oxi-addonsOH-FI-date{
            width: 100%;
            float: left;
            font-size: ' . $styledata[117] . 'px;
            color: ' . $styledata[121] . ';
            ' . OxiAddonsFontSettings($styledata, 123) . ';
             margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';
        }
        .oxi-addonsOH-FI-wrapper-' . $oxiid . ' .oxi-addonsOH-FI-row:hover .oxi-addonsOH-FI-date{
            transform: scale(1.5);
        }




         @media only screen and (min-width : 669px) and (max-width : 993px){

           .oxi-addonsOH-FI-wrapper-' . $oxiid . '{
                 padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 64) . ';
            }
            .oxi-addonsOH-FI-wrapper-' . $oxiid . ' .oxi-addonsOH-FI-row{
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 48) . ';
            }
            .oxi-addonsOH-FI-wrapper-' . $oxiid . '  .oxi-addonsOH-FI-heading{
                font-size: ' . $styledata[90] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
            }
            .oxi-addonsOH-FI-wrapper-' . $oxiid . ' .oxi-addonsOH-FI-date{
                font-size: ' . $styledata[118] . 'px;
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . ';
            }
         }
         @media only screen and (max-width : 668px){
              .oxi-addonsOH-FI-wrapper-' . $oxiid . '{
                 padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 65) . ';
            }
            .oxi-addonsOH-FI-wrapper-' . $oxiid . ' .oxi-addonsOH-FI-row{
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
            }
            .oxi-addonsOH-FI-wrapper-' . $oxiid . '  .oxi-addonsOH-FI-heading{
                font-size: ' . $styledata[91] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
            }
            .oxi-addonsOH-FI-wrapper-' . $oxiid . ' .oxi-addonsOH-FI-date{
                font-size: ' . $styledata[119] . 'px;
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
            }

         }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
