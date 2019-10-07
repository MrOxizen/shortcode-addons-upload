<?php

namespace SHORTCODE_ADDONS_UPLOAD\Opening_hours\Templates;

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

class Style_8 extends Templates {

    public function default_render($style, $child, $admin) {
        $repeater = (array_key_exists('sa_oh_repeater', $style) && is_array($style['sa_oh_repeater'])) ? $style['sa_oh_repeater'] : [];

        echo '<div class="oxi-addonsOH-SX-wrapper-8">
                    <div class="oxi-addonsOH-SX-row" ' . $this->animation_render('sa_oh_animation', $style) . '>';
        foreach ($repeater as $key => $value) {

            $day = $times = $icon = '';
            if (!empty($value['sa_oh_day_text'])) {
                $day = '<div class="oxi-addonsOH-SX-heading">
                                <div class="oxi-addonsOH-SX-heading-text">
                                       ' . $this->text_render($value['sa_oh_day_text']) . '
                                </div>
                            </div>';
            }
            if (!empty($value['sa_oh_time_text'])) {
                $times = '<div class="oxi-addonsOH-SX-date">' . $this->text_render($value['sa_oh_time_text']) . '</div>';
            }
            if (!empty($value['sa_oh_icon_cls'])) {
                $icon = '<div class="oxi-addonsOH-SX-icon">' . $this->font_awesome_render($value['sa_oh_icon_cls']) . '</div>';
            }



            echo '<div class="oxi-addonsOH-SX-child oxi-addonsOH-SX-child-' . $key . '">
                  
                            <div class="oxi-addonsOH-SX-content sa_oh_wrapper_' . $key . '">
                                ' . $icon . '
                                ' . $day . '
                                ' . $times . '
                            </div>
                    </div> ';
        }
        echo '</div>
          </div>';
    }

    public function old_render() {
        $style = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);

        $css = '';
        echo ' <div class="oxi-addons-container">
          <div class="oxi-addons-row">
                <div class="oxi-addonsOH-SX-wrapper-' . $oxiid . ' oxi-addonsOH-SX-wrapper-' . $oxiid . '">
                    <div class="oxi-addonsOH-SX-row" ' . OxiAddonsAnimation($styledata, 85) . '>';
        foreach ($listdata as $value) {
            $listitemdata = explode('||#||', $value['files']);
            $day = $times = $icon = '';
            if ($listitemdata[2] != '') {
                $day = '<div class="oxi-addonsOH-SX-heading">
                                <div class="oxi-addonsOH-SX-heading-text oxi-addonsOH-SX-heading-text-' . $value['id'] . '">
                                       ' . OxiAddonsTextConvert($listitemdata[2]) . '
                                </div>
                            </div>';
            }
            if ($listitemdata[4] != '') {
                $times = '<div class="oxi-addonsOH-SX-date oxi-addonsOH-SX-date-' . $value['id'] . '">' . OxiAddonsTextConvert($listitemdata[4]) . '</div>';
            }



            echo '<div class="oxi-addonsOH-SX-child ' . OxiAddonsItemRows($styledata, 3) . ' ">
                        <div class="oxi-addonsOH-SX-content ">
                            ' . $icon . '
                            ' . $day . '
                            ' . $times . '
                        ';

            echo '</div></div>';
            $css .= '.oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-heading-text-' . $value['id'] . '{
            color: ' . $listitemdata[6] . ';
        }
        .oxi-addonsOH-SX-date-' . $value['id'] . '{
                color: ' . $listitemdata[8] . ';}';
        }
        echo '</div> </div> </div></div>';
        $css .= '.oxi-addonsOH-SX-wrapper-' . $oxiid . '{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-row{
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
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-content{
            width: 100%;
            float: left;
            display: flex;
            border-bottom: ' . $styledata[149] . 'px ' . $styledata[150] . '  ' . $styledata[153] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 155) . ';
            transition: .8s;
            
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-child:last-child .oxi-addonsOH-SX-content{
           border-bottom: 0px; 
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-content:hover{
            padding-left: 14px;
            padding-right: 14px;
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . '  .oxi-addonsOH-SX-heading{
            width: 100%;
            float: left;
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-heading-text{
            width: 100%;
            font-size: ' . $styledata[89] . 'px;
            ' . OxiAddonsFontSettings($styledata, 95) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-date{
            width: 100%;
            float: left;
            font-size: ' . $styledata[117] . 'px;
            ' . OxiAddonsFontSettings($styledata, 123) . ';
             margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';
        }

         @media only screen and (min-width : 669px) and (max-width : 993px){

           .oxi-addonsOH-SX-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 64) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-row{
            max-width: ' . $styledata[146] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 48) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-content{
           padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 156) . ';
            
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-heading-text{
            font-size: ' . $styledata[90] . 'px;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-date{
            font-size: ' . $styledata[118] . 'px;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . ';
        }

         }
         @media only screen and (max-width : 668px){
                 .oxi-addonsOH-SX-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 65) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-row{
            max-width: ' . $styledata[147] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-content{
           padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 157) . ';
            
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-heading-text{
            font-size: ' . $styledata[91] . 'px;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-date{
            font-size: ' . $styledata[119] . 'px;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
        }

         }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
