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

class Style_3 extends Templates {

    public function default_render($style, $child, $admin) {
        $repeater = (array_key_exists('sa_oh_repeater', $style) && is_array($style['sa_oh_repeater'])) ? $style['sa_oh_repeater'] : [];
        foreach ($repeater as $key => $value) {
            
            $day = $times = $icon = '';
            if (!empty($value['sa_oh_day_text'])) {
                $day = '<div class="oxi-addonsOH-TH-heading">
                                <div class="oxi-addonsOH-TH-heading-text">
                                       ' . $this->text_render($value['sa_oh_day_text']) . '
                                </div>
                            </div>';
            }
            if (!empty($value['sa_oh_time_text'])) {
                $times = '<div class="oxi-addonsOH-TH-date">' . $this->text_render($value['sa_oh_time_text']) . '</div>';
            }
            if (!empty($value['sa_oh_icon_cls'])) {
                $icon = '<div class="oxi-addonsOH-TH-icon">' . $this->font_awesome_render($value['sa_oh_icon_cls']) . '</div>';
            }



            echo '<div class="' . $this->column_render('sa_oh_col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '">
                  <div class="oxi-addonsOH-TH-wrapper-3 oxi-addonsOH-TH-wrapper-3-' . $key . '">
                    <div class="oxi-addonsOH-TH-row" ' . $this->animation_render('sa_oh_animation', $style) . '>
                        <div class="oxi-addonsOH-TH-content">
                            ' . $icon . '
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

        echo ' <div class="oxi-addons-container">
          <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $listitemdata = explode('||#||', $value['files']);
            $day = $times = $icon = '';
            if ($listitemdata[2] != '') {
                $day = '<div class="oxi-addonsOH-TH-heading">
                                <div class="oxi-addonsOH-TH-heading-text">
                                       ' . OxiAddonsTextConvert($listitemdata[2]) . '
                                </div>
                            </div>';
            }
            if ($listitemdata[4] != '') {
                $times = '<div class="oxi-addonsOH-TH-date">' . OxiAddonsTextConvert($listitemdata[4]) . '</div>';
            }
            if ($stylefiles[2] != '') {
                $icon = '<div class="oxi-addonsOH-TH-icon">' . oxi_addons_font_awesome($stylefiles[2]) . '</div>';
            }



            echo '<div class="' . OxiAddonsItemRows($styledata, 3) . '">
                  <div class="oxi-addonsOH-TH-wrapper-' . $oxiid . ' oxi-addonsOH-TH-wrapper-' . $oxiid . '-' . $value['id'] . '">
                    <div class="oxi-addonsOH-TH-row" ' . OxiAddonsAnimation($styledata, 85) . '>
                        <div class="oxi-addonsOH-TH-content">
                            ' . $icon . '
                            ' . $day . '
                            ' . $times . '
                        </div>
                    </div>
                </div> ';

            echo '</div>';
        }
        echo '  </div></div>';
        $css = '.oxi-addonsOH-TH-wrapper-' . $oxiid . '{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . ';
        }
        .oxi-addonsOH-TH-wrapper-' . $oxiid . ' .oxi-addonsOH-TH-row{
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
        .oxi-addonsOH-TH-wrapper-' . $oxiid . ' .oxi-addonsOH-TH-content{
            width: 100%;
            float: left;
            display: flex;
            
        }
        .oxi-addonsOH-TH-wrapper-' . $oxiid . ' .oxi-addonsOH-TH-icon{
            display: flex;
            justify-content: center;
        }
        .oxi-addonsOH-TH-wrapper-' . $oxiid . ' .oxi-addonsOH-TH-icon .oxi-icons{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: ' . $styledata[149] . 'px;
            color: ' . $styledata[153] . ';
            margin:  ' . OxiAddonsPaddingMarginSanitize($styledata, 155) . ';
        }
        .oxi-addonsOH-TH-wrapper-' . $oxiid . '  .oxi-addonsOH-TH-heading{
            width: 100%;
            float: left;
        }
        .oxi-addonsOH-TH-wrapper-' . $oxiid . ' .oxi-addonsOH-TH-heading-text{
            width: 100%;
            font-size: ' . $styledata[89] . 'px;
            color: ' . $styledata[93] . ';
            ' . OxiAddonsFontSettings($styledata, 95) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
        }
        .oxi-addonsOH-TH-wrapper-' . $oxiid . ' .oxi-addonsOH-TH-date{
            width: 100%;
            float: left;
            font-size: ' . $styledata[117] . 'px;
            color: ' . $styledata[121] . ';
            ' . OxiAddonsFontSettings($styledata, 123) . '
             margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';
        }

         @media only screen and (min-width : 669px) and (max-width : 993px){

        .oxi-addonsOH-TH-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 64) . ';
        }
        .oxi-addonsOH-TH-wrapper-' . $oxiid . ' .oxi-addonsOH-TH-row{
            max-width: ' . $styledata[146] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 48) . ';
        }
        .oxi-addonsOH-TH-wrapper-' . $oxiid . ' .oxi-addonsOH-TH-icon .oxi-icons{
            font-size: ' . $styledata[150] . 'px;
            margin:  ' . OxiAddonsPaddingMarginSanitize($styledata, 156) . ';
        }
        .oxi-addonsOH-TH-wrapper-' . $oxiid . ' .oxi-addonsOH-TH-heading-text{
            font-size: ' . $styledata[90] . 'px;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
        }
        .oxi-addonsOH-TH-wrapper-' . $oxiid . ' .oxi-addonsOH-TH-date{
            font-size: ' . $styledata[118] . 'px;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . ';
        }

         }
         @media only screen and (max-width : 668px){
            .oxi-addonsOH-TH-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 65) . ';
        }
        .oxi-addonsOH-TH-wrapper-' . $oxiid . ' .oxi-addonsOH-TH-row{
            max-width: ' . $styledata[147] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
        }
        .oxi-addonsOH-TH-wrapper-' . $oxiid . ' .oxi-addonsOH-TH-icon .oxi-icons{
            font-size: ' . $styledata[151] . 'px;
            margin:  ' . OxiAddonsPaddingMarginSanitize($styledata, 157) . ';
        }
        .oxi-addonsOH-TH-wrapper-' . $oxiid . ' .oxi-addonsOH-TH-heading-text{
            font-size: ' . $styledata[91] . 'px;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
        }
        .oxi-addonsOH-TH-wrapper-' . $oxiid . ' .oxi-addonsOH-TH-date{
            font-size: ' . $styledata[119] . 'px;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
        }

         }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
