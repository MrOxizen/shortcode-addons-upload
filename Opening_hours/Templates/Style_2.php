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

class Style_2 extends Templates {

    public function default_render($style, $child, $admin) {
        $repeater = (array_key_exists('sa_oh_repeater', $style) && is_array($style['sa_oh_repeater'])) ? $style['sa_oh_repeater'] : [];
        foreach ($repeater as $key => $value) {
            
            $day = $times = $icon = '';
            if (!empty($value['sa_oh_day_text'])) {
                $day = '<div class="oxi-addonsOH-T-heading">
                                <div class="oxi-addonsOH-T-heading-text">
                                       ' . $this->text_render($value['sa_oh_day_text']) . '
                                </div>
                            </div>';
            }
            if (!empty($value['sa_oh_time_text'])) {
                $times = '<div class="oxi-addonsOH-T-date">' . $this->text_render($value['sa_oh_time_text']) . '</div>';
            }
            if (!empty($value['sa_oh_icon_cls'])) {
                $icon = '<div class="oxi-addonsOH-T-icon">' . $this->font_awesome_render($value['sa_oh_icon_cls']) . '</div>';
            }



            echo '<div class="' . $this->column_render('sa_oh_col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '">
                  <div class="oxi-addonsOH-T-wrapper-2 oxi-addonsOH-T-wrapper-2-' . $key . '">
                    <div class="oxi-addonsOH-T-row" ' . $this->animation_render('sa_oh_animation', $style) . '>
                        <div class="oxi-addonsOH-T-content">
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

        $css = '';
        echo ' <div class="oxi-addons-container">
          <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $listitemdata = explode('||#||', $value['files']);
            $day = $times = $icon = '';
            if ($listitemdata[2] != '') {
                $day = '<div class="oxi-addonsOH-T-heading">
                                <div class="oxi-addonsOH-T-heading-text">
                                       ' . OxiAddonsTextConvert($listitemdata[2]) . '
                                </div>
                            </div>';
            }
            if ($listitemdata[4] != '') {
                $times = '<div class="oxi-addonsOH-T-date">' . OxiAddonsTextConvert($listitemdata[4]) . '</div>';
            }
            if ($listitemdata[6] != '') {
                $icon = '<div class="oxi-addonsOH-T-icon">' . oxi_addons_font_awesome($listitemdata[6]) . '</div>';
            }



            echo '<div class="' . OxiAddonsItemRows($styledata, 3) . '">
                  <div class="oxi-addonsOH-T-wrapper-' . $oxiid . ' oxi-addonsOH-T-wrapper-' . $oxiid . '-' . $value['id'] . '">
                    <div class="oxi-addonsOH-T-row" ' . OxiAddonsAnimation($styledata, 85) . '>
                        <div class="oxi-addonsOH-T-content">
                            ' . $icon . '
                            ' . $day . '
                            ' . $times . '
                        </div>
                    </div>
                </div> ';
            
            echo '</div>';
        }
        echo '  </div></div>';
        $css .= '.oxi-addonsOH-T-wrapper-' . $oxiid . '{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . ';
        }
        .oxi-addonsOH-T-wrapper-' . $oxiid . ' .oxi-addonsOH-T-row{
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
        .oxi-addonsOH-T-wrapper-' . $oxiid . ' .oxi-addonsOH-T-content{
            width: 100%;
            float: left;
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 149) . ' ;
            border-style: ' . $styledata[165] . ';
            border-color: ' . $styledata[166] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 169) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 185) . ';
            
        }
        .oxi-addonsOH-T-wrapper-' . $oxiid . ' .oxi-addonsOH-T-icon{
            display: flex;
            width: 100%;
            justify-content: center;
        }
        .oxi-addonsOH-T-wrapper-' . $oxiid . ' .oxi-addonsOH-T-icon .oxi-icons{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: ' . $styledata[203] . 'px;
            height: ' . $styledata[207] . 'px;
            font-size: ' . $styledata[211] . 'px;
            background: ' . $styledata[201] . ';
            color: ' . $styledata[215] . ';
            margin:  ' . OxiAddonsPaddingMarginSanitize($styledata, 217) . ';
        }
        .oxi-addonsOH-T-wrapper-' . $oxiid . '  .oxi-addonsOH-T-heading{
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .oxi-addonsOH-T-wrapper-' . $oxiid . ' .oxi-addonsOH-T-heading-text{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: ' . $styledata[235] . 'px;
            height: ' . $styledata[239] . 'px;
            background: ' . $styledata[233] . ';
            font-size: ' . $styledata[89] . 'px;
            color: ' . $styledata[93] . ';
            ' . OxiAddonsFontSettings($styledata, 95) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
        }
        .oxi-addonsOH-T-wrapper-' . $oxiid . ' .oxi-addonsOH-T-date{
            width: 100%;
            float: left;
            font-size: ' . $styledata[117] . 'px;
            color: ' . $styledata[121] . ';
            ' . OxiAddonsFontSettings($styledata, 123) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';
        }

         @media only screen and (min-width : 669px) and (max-width : 993px){

           .oxi-addonsOH-T-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 64) . ';
        }
        .oxi-addonsOH-T-wrapper-' . $oxiid . ' .oxi-addonsOH-T-row{
            max-width: ' . $styledata[146] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 48) . ';
        }
        .oxi-addonsOH-T-wrapper-' . $oxiid . ' .oxi-addonsOH-T-content{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 170) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 186) . ';
            
        }
        .oxi-addonsOH-T-wrapper-' . $oxiid . ' .oxi-addonsOH-T-icon .oxi-icons{
            max-width: ' . $styledata[204] . 'px;
            height: ' . $styledata[208] . 'px;
            font-size: ' . $styledata[212] . 'px;
            margin:  ' . OxiAddonsPaddingMarginSanitize($styledata, 218) . ';
        }
        .oxi-addonsOH-T-wrapper-' . $oxiid . ' .oxi-addonsOH-T-heading-text{
            max-width: ' . $styledata[236] . 'px;
            height: ' . $styledata[240] . 'px;
            font-size: ' . $styledata[90] . 'px;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
        }
        .oxi-addonsOH-T-wrapper-' . $oxiid . ' .oxi-addonsOH-T-date{
             font-size: ' . $styledata[118] . 'px;
             margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . ';
        }
         }
         @media only screen and (max-width : 668px){
                .oxi-addonsOH-T-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 65) . ';
        }
        .oxi-addonsOH-T-wrapper-' . $oxiid . ' .oxi-addonsOH-T-row{
            max-width: ' . $styledata[147] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
        }
        .oxi-addonsOH-T-wrapper-' . $oxiid . ' .oxi-addonsOH-T-content{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 171) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
            
        }
        .oxi-addonsOH-T-wrapper-' . $oxiid . ' .oxi-addonsOH-T-icon .oxi-icons{
            max-width: ' . $styledata[205] . 'px;
            height: ' . $styledata[209] . 'px;
            font-size: ' . $styledata[213] . 'px;
            margin:  ' . OxiAddonsPaddingMarginSanitize($styledata, 219) . ';
        }
        .oxi-addonsOH-T-wrapper-' . $oxiid . ' .oxi-addonsOH-T-heading-text{
            max-width: ' . $styledata[237] . 'px;
            height: ' . $styledata[241] . 'px;
            font-size: ' . $styledata[91] . 'px;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
        }
        .oxi-addonsOH-T-wrapper-' . $oxiid . ' .oxi-addonsOH-T-date{
             font-size: ' . $styledata[119] . 'px;
             margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
        }

         }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
