<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_6
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_6 extends Templates {

    public function default_render($style, $child, $admin) {
        $heading = $subheading = $details = $subdetails = $headersection = $footersection = '';
        $css = '';
        $all_data = (array_key_exists('sa_event_widgets_data', $style) && is_array($style['sa_event_widgets_data'])) ? $style['sa_event_widgets_data'] : [];

        foreach ($all_data as $key => $listitemdata) {
//            echo '<pre>';
//            print_r($this->url_render('sa_event_t_button_link',$listitemdata));
//            echo '</pre>';

            if ($listitemdata['sa_event_t_name'] != '') {
                $heading = '<div class="oxi-addons-EW-6-H">' . OxiAddonsTextConvert($listitemdata['sa_event_t_name']) . '</div>';
            }
            if ($listitemdata['sa_event_t_info_time'] != '') {
                $subheading = '<div class="oxi-addons-EW-6-SH">' . OxiAddonsTextConvert($listitemdata['sa_event_t_info_time']) . '</div>';
            }
            if ($listitemdata['sa_event_t_date'] != '') {
                $details = '<div class="oxi-addons-EW-6-D">' . OxiAddonsTextConvert($listitemdata['sa_event_t_date']) . '</div>';
            }
            if ($listitemdata['sa_event_t_month'] != '') {
                $subdetails = '  <div class="oxi-addons-EW-6-M">' . OxiAddonsTextConvert($listitemdata['sa_event_t_month']) . '</div>';
            }
            if ($heading != '' || $subheading != '') {
                $headersection = '<div class="oxi-addons-EW-6-content-box">
                                          ' . $heading . '
                                          ' . $subheading . '
                                        </div>';
            }
            if ($details != '' || $subdetails != '') {
                $footersection = '<div class="oxi-addons-EW-6-date-box">
                                          <div class="oxi-addons-EW-6-DM">
                                              ' . $details . '
                                              ' . $subdetails . '
                                          </div>
                                      </div>';
            }
            echo '   <div class="oxi-addons-EW-col ' . $this->column_render('sa_event_widgets_col', $style) . '">
                        <div class="oxi-addons-EW-wrapper-style-6 oxi-addons-EW-wrapper-style-6-' . $key . '" ' . $this->animation_render('sa_event_widgets_animation', $style) . '>
                           <div class="oxi-addons-EW-6-body">
                               ' . $headersection . '
                               ' . $footersection . '
                           </div>
                        </div>
                    </div>';
        }
    }

    public function old_render() {
        $style = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);

        $heading = $subheading = $details = $subdetails = $headersection = $footersection = '';

        echo '<div class="oxi-addons-container">';
        echo '<div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $listitemdata = explode('||#||', $value['files']);
            if ($listitemdata[2] != '') {
                $heading = '<div class="oxi-addons-EW-6-H">' . OxiAddonsTextConvert($listitemdata[2]) . '</div>';
            }
            if ($listitemdata[4] != '') {
                $subheading = '<div class="oxi-addons-EW-6-SH">' . OxiAddonsTextConvert($listitemdata[4]) . '</div>';
            }
            if ($listitemdata[6] != '') {
                $details = '<div class="oxi-addons-EW-6-D">' . OxiAddonsTextConvert($listitemdata[6]) . '</div>';
            }
            if ($listitemdata[8] != '') {
                $subdetails = '  <div class="oxi-addons-EW-6-M">' . OxiAddonsTextConvert($listitemdata[8]) . '</div>';
            }
            if ($heading != '' || $subheading != '') {
                $headersection = '<div class="oxi-addons-EW-6-content-box">
                                          ' . $heading . '
                                          ' . $subheading . '
                                        </div>';
            }
            if ($details != '' || $subdetails != '') {
                $footersection = '<div class="oxi-addons-EW-6-date-box">
                                          <div class="oxi-addons-EW-6-DM">
                                              ' . $details . '
                                              ' . $subdetails . '
                                          </div>
                                      </div>';
            }
            echo'<div class="' . OxiAddonsItemRows($styledata, 177) . ' ">
                        <div class="oxi-addons-EW-6-wrapper-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 59) . '>
                           <div class="oxi-addons-EW-6-body">
                               ' . $headersection . '
                               ' . $footersection . '
                           </div>
                       </div>
                    </div>';
        }
        echo'</div>';
        echo'</div>';

        $css = '.oxi-addons-EW-6-wrapper-' . $oxiid . '{
              width: 100%;
              float: left;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 37) . ';
          }
          .oxi-addons-EW-6-wrapper-' . $oxiid . ' .oxi-addons-EW-6-body{
            width: 100%;
            float: left;
            display: flex;
            background:' . $styledata[91] . ';
            align-items: center;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 53) . '
          }
          .oxi-addons-EW-6-wrapper-' . $oxiid . ' .oxi-addons-EW-6-content-box{
            width: 80%;
            background:' . $styledata[3] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . ';
           
          }
          .oxi-addons-EW-6-wrapper-' . $oxiid . ' .oxi-addons-EW-6-H{
            width: 100%;
            float: left;
            font-size: ' . $styledata[63] . 'px;
            color: ' . $styledata[67] . ';
            ' . OxiAddonsFontSettings($styledata, 69) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 75) . ';
          }
          .oxi-addons-EW-6-wrapper-' . $oxiid . ' .oxi-addons-EW-6-SH{
            width: 100%;
            float: left;
            font-size: ' . $styledata[121] . 'px;
            color: ' . $styledata[125] . ';
            ' . OxiAddonsFontSettings($styledata, 127) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 133) . ';
          }
          .oxi-addons-EW-6-wrapper-' . $oxiid . ' .oxi-addons-EW-6-date-box{
            width: 20%;
            text-align: center;
          }
          .oxi-addons-EW-6-wrapper-' . $oxiid . ' .oxi-addons-EW-6-DM{
            text-align: center;
          }
          .oxi-addons-EW-6-wrapper-' . $oxiid . ' .oxi-addons-EW-6-D{
            font-size: ' . $styledata[93] . 'px;
            color: ' . $styledata[97] . ';
            ' . OxiAddonsFontSettings($styledata, 99) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 105) . ';
          }
          .oxi-addons-EW-6-wrapper-' . $oxiid . ' .oxi-addons-EW-6-M{
            font-size: ' . $styledata[149] . 'px;
            color: ' . $styledata[153] . ';
            ' . OxiAddonsFontSettings($styledata, 155) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 161) . ';
          }

          @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-EW-6-wrapper-' . $oxiid . ' .oxi-addons-EW-6-content-box{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 22) . ';
              margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 38) . ';
            }
            .oxi-addons-EW-6-wrapper-' . $oxiid . ' .oxi-addons-EW-6-H{
              font-size: ' . $styledata[64] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 76) . ';
            }
            .oxi-addons-EW-6-wrapper-' . $oxiid . ' .oxi-addons-EW-6-SH{
              font-size: ' . $styledata[122] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 134) . ';
            }
            .oxi-addons-EW-6-wrapper-' . $oxiid . ' .oxi-addons-EW-6-D{
              font-size: ' . $styledata[94] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 106) . ';
            }
            .oxi-addons-EW-6-wrapper-' . $oxiid . ' .oxi-addons-EW-6-M{
              font-size: ' . $styledata[150] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 162) . ';
            }

          }
          @media only screen and (max-width : 668px){
            .oxi-addons-EW-6-wrapper-' . $oxiid . ' .oxi-addons-EW-6-content-box{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
              margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
            }
            .oxi-addons-EW-6-wrapper-' . $oxiid . ' .oxi-addons-EW-6-H{
              font-size: ' . $styledata[65] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 77) . ';
            }
            .oxi-addons-EW-6-wrapper-' . $oxiid . ' .oxi-addons-EW-6-SH{
              font-size: ' . $styledata[123] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 134) . ';
            }
            .oxi-addons-EW-6-wrapper-' . $oxiid . ' .oxi-addons-EW-6-D{
              font-size: ' . $styledata[95] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 107) . ';
            }
            .oxi-addons-EW-6-wrapper-' . $oxiid . ' .oxi-addons-EW-6-M{
              font-size: ' . $styledata[151] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 163) . ';
            }

          }

          ';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
