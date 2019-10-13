<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_12
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_12 extends Templates {

    public function default_render($style, $child, $admin) {
        $css = $media = '';
        $all_data = (array_key_exists('sa_event_widgets_data', $style) && is_array($style['sa_event_widgets_data'])) ? $style['sa_event_widgets_data'] : [];
        $icon = $heading = $image = $content = $headersection = $bodysection = '';

        foreach ($all_data as $key => $listitemdata) {

            if ($listitemdata['sa_event_t_day'] != '') {
                $date = '<div class="oxi-addons-EW-12-D">' . $this->text_render($listitemdata['sa_event_t_day']) . '</div>';
            }
            if ($listitemdata['sa_event_t_month'] != '') {
                $month = '<div class="oxi-addons-EW-12-M">' . $this->text_render($listitemdata['sa_event_t_month']) . '</div>';
            }
            if ($date != '' || $month != '') {
                $datemonthsection = '<div class="oxi-addons-EW-12-col-2">
                                                  <div class="oxi-addons-EW-12-col-position">
                                                      ' . $date . '
                                                      ' . $month . '
                                                  </div>
                                              </div>';
            }
            if ($listitemdata['sa_event_t_heading'] != '') {
                $heading = '<div class="oxi-addons-EW-12-heading">
                                      ' . $this->text_render($listitemdata['sa_event_t_heading']) . '
                                  </div>';
            }
            if ($listitemdata['sa_event_t_info_time_icon'] != '') {
                $locationicon = '<div class="oxi-addons-EW-12-LI">' . $this->font_awesome_render($listitemdata['sa_event_t_info_time_icon']) . '</div>';
            }
            if ($listitemdata['sa_event_t_name'] != '') {
                $locationtext = '<div class="oxi-addons-EW-12-LT">' . $this->text_render($listitemdata['sa_event_t_name']) . '</div>';
            }
            if ($locationicon != '' || $locationtext != '') {
                $locationsection = '<div class="oxi-addons-EW-12-L">
                                                  ' . $locationicon . '
                                                  ' . $locationtext . '
                                            </div>';
            }
            if ($listitemdata['sa_event_t_info_time_icon'] != '') {
                $timeicon = '<div class="oxi-addons-EW-12-TI">' . $this->font_awesome_render($listitemdata['sa_event_t_info_time_icon']) . '</div>';
            }
            if ($listitemdata['sa_event_t_info_time'] != '') {
                $timetext = '<div class="oxi-addons-EW-12-TT">' . $this->text_render($listitemdata['sa_event_t_info_time']) . '</div>';
            }
            if ($locationicon != '' || $locationtext != '') {
                $timesection = '<div class="oxi-addons-EW-12-T">
                                                  ' . $timeicon . '
                                                  ' . $timetext . '
                                            </div>';
            }
            echo '   <div class="oxi-addons-EW-col ' . $this->column_render('sa_event_widgets_col', $style) . '">
                        <div class="oxi-addons-EW-12-wrapper-style-12 oxi-addons-EW-12-wrapper-style-12-' . $key . '" ' . $this->animation_render('sa_event_widgets_animation', $style) . '>
                          <div class="oxi-addons-EW-12-row">
                                    ' . $datemonthsection . '
                                <div class="oxi-addons-EW-12-col-10">
                                    <div class="oxi-addons-EW-12-heading-position">
                                          ' . $heading . '
                                        <div class="oxi-addons-EW-12-locationtime">
                                            ' . $locationsection . '
                                            ' . $timesection . '
                                        </div>
                                    </div>
                                </div>
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
        $date = $month = $datemonthsection = $heading = $locationicon = $locationtext = $locationsection = $timeicon = $timetext = $timesection = '';


        echo '<div class="oxi-addons-container">';
        echo '<div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $listitemdata = explode('||#||', $value['files']);
            if ($listitemdata[2] != '') {
                $date = '<div class="oxi-addons-EW-12-D">' . OxiAddonsTextConvert($listitemdata[2]) . '</div>';
            }
            if ($listitemdata[4] != '') {
                $month = '<div class="oxi-addons-EW-12-M">' . OxiAddonsTextConvert($listitemdata[4]) . '</div>';
            }
            if ($date != '' || $month != '') {
                $datemonthsection = '<div class="oxi-addons-EW-12-col-2">
                                                  <div class="oxi-addons-EW-12-col-position">
                                                      ' . $date . '
                                                      ' . $month . '
                                                  </div>
                                              </div>';
            }
            if ($listitemdata[6] != '') {
                $heading = '<div class="oxi-addons-EW-12-heading">
                                      ' . OxiAddonsTextConvert($listitemdata[6]) . '
                                  </div>';
            }
            if ($listitemdata[10] != '') {
                $locationicon = '<div class="oxi-addons-EW-12-LI">' . oxi_addons_font_awesome('' . $listitemdata[10] . '') . '</div>';
            }
            if ($listitemdata[10] != '') {
                $locationtext = '<div class="oxi-addons-EW-12-LT">' . OxiAddonsTextConvert($listitemdata[8]) . '</div>';
            }
            if ($locationicon != '' || $locationtext != '') {
                $locationsection = '<div class="oxi-addons-EW-12-L">
                                                  ' . $locationicon . '
                                                  ' . $locationtext . '
                                            </div>';
            }
            if ($listitemdata[14] != '') {
                $timeicon = '<div class="oxi-addons-EW-12-TI">' . oxi_addons_font_awesome('' . $listitemdata[14] . '') . '</div>';
            }
            if ($listitemdata[12] != '') {
                $timetext = '<div class="oxi-addons-EW-12-TT">' . OxiAddonsTextConvert($listitemdata[12]) . '</div>';
            }
            if ($locationicon != '' || $locationtext != '') {
                $timesection = '<div class="oxi-addons-EW-12-T">
                                                  ' . $timeicon . '
                                                  ' . $timetext . '
                                            </div>';
            }
            echo '<div class="' . OxiAddonsItemRows($styledata, 213) . ' ">
                        <div class="oxi-addons-EW-12-wrapper-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 65) . '>
                            <div class="oxi-addons-EW-12-row">
                                    ' . $datemonthsection . '
                                <div class="oxi-addons-EW-12-col-10">
                                    <div class="oxi-addons-EW-12-heading-position">
                                          ' . $heading . '
                                        <div class="oxi-addons-EW-12-locationtime">
                                            ' . $locationsection . '
                                            ' . $timesection . '
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';

            echo '</div>';
        }
        echo '</div>';
        echo '</div>';

        $css = '.oxi-addons-EW-12-wrapper-' . $oxiid . '{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 43) . ';
          }
          .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-row{
            display: flex;
            width: 100%;
            max-width: ' . $styledata[7] . 'px;
            margin: 0 auto;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';
            ' . OxiAddonsBGImage($styledata, 3) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 59) . ';
          }
          .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-col-2{
            justify-content: center;
            display: flex;
            align-items: center;
            width: 20%;
          }
          .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-col-position{
            text-align: center;
          }
          .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-col-10{
            display: flex;
            width: 80%;
            align-items: center;
          }
          .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-D{
            font-size: ' . $styledata[69] . 'px;
            color: ' . $styledata[73] . ';
            ' . OxiAddonsFontSettings($styledata, 75) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
            line-height: 1;
          }
          .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-M{
            font-size: ' . $styledata[97] . 'px;
            color: ' . $styledata[101] . ';
            ' . OxiAddonsFontSettings($styledata, 103) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 109) . ';
            line-height: 1;
          }
          .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-heading{
            width: 100%;
            float: left;
            font-size: ' . $styledata[125] . 'px;
            color: ' . $styledata[129] . ';
            ' . OxiAddonsFontSettings($styledata, 131) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 137) . ';
          }
          .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-locationtime{
            width: 100%;
            float: left;
            display: flex;
            justify-content: flex-start;
          }
          .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-L{
            display: inline;
            padding-right: 15px;
          }
          .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-T{
            display: inline;
          }
          .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-LI{
            display: inline;
            padding-right: 5px;
            font-size: ' . $styledata[153] . 'px;
            color: ' . $styledata[159] . ';
          }
          .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-LT{
            display: inline;
            font-size: ' . $styledata[153] . 'px;
            color: ' . $styledata[157] . ';
            ' . OxiAddonsFontSettings($styledata, 161) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 167) . ';
          }
          .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-TI{
            display: inline;
            padding-right: 5px;
            font-size: ' . $styledata[183] . 'px;
            color: ' . $styledata[189] . ';
            ' . OxiAddonsFontSettings($styledata, 191) . '
          }
          .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-TT{
            display: inline;
            font-size: ' . $styledata[183] . 'px;
            color: ' . $styledata[187] . ';
            ' . OxiAddonsFontSettings($styledata, 191) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 197) . ';
          } 
          @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-EW-12-wrapper-' . $oxiid . '{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 44) . ';
            }
            .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-row{
              max-width: ' . $styledata[8] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 28) . ';
            }
            .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-D{
              font-size: ' . $styledata[70] . 'px;
              padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
            }
            .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-M{
              font-size: ' . $styledata[98] . 'px;
              padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 110) . ';
            }
            .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-heading{
              font-size: ' . $styledata[126] . 'px;
              padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 138) . ';
            }
            .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-LI{
              font-size: ' . $styledata[154] . 'px;
            }
            .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-LT{
              font-size: ' . $styledata[154] . 'px;
              padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 168) . ';
            }
            .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-TI{
              font-size: ' . $styledata[184] . 'px;
            }
            .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-TT{
              font-size: ' . $styledata[184] . 'px;
              padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 198) . ';
            } 
          }
          @media only screen and (max-width : 668px){ 
            .oxi-addons-EW-12-wrapper-' . $oxiid . '{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 45) . ';
            }
            .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-row{
              max-width: ' . $styledata[9] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 29) . ';
            }
            .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-D{
              font-size: ' . $styledata[71] . 'px;
              padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
            }
            .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-M{
              font-size: ' . $styledata[99] . 'px;
              padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 111) . ';
            }
            .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-heading{
              font-size: ' . $styledata[127] . 'px;
              padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 139) . ';
            }
            .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-LI{
              font-size: ' . $styledata[155] . 'px;
            }
            .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-LT{
              font-size: ' . $styledata[155] . 'px;
              padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 169) . ';
            }
            .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-TI{
              font-size: ' . $styledata[185] . 'px;
            }
            .oxi-addons-EW-12-wrapper-' . $oxiid . ' .oxi-addons-EW-12-TT{
              font-size: ' . $styledata[185] . 'px;
              padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 199) . ';
            }
          }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
