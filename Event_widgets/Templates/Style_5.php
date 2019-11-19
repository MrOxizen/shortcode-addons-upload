<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets\Templates;

if (!defined('ABSPATH')) {
  exit;
}

/**
 * Description of Style_5
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_5 extends Templates
{

  public function default_render($style, $child, $admin)
  {
    $heading =  '';
    $heading = $subheading = $details = $subdetails = $headingsection = $detailssection = '';

    $all_data = (array_key_exists('sa_event_widgets_data', $style) && is_array($style['sa_event_widgets_data'])) ? $style['sa_event_widgets_data'] : [];

    foreach ($all_data as $key => $listitemdata) {
      if ($listitemdata['sa_event_t_date'] != '') {
        $heading = '<div class="oxi-addons-EW-5-H">' . $this->text_render($listitemdata['sa_event_t_date']) . '</div>';
      }
      if ($listitemdata['sa_event_t_time'] != '') {
        $subheading = '<div class="oxi-addons-EW-5-SH">' . $this->text_render($listitemdata['sa_event_t_time']) . '</div>';
      }
      if ($listitemdata['sa_event_t_name'] != '') {
        $details = '<div class="oxi-addons-EW-5-D">' . $this->text_render($listitemdata['sa_event_t_name']) . '</div>';
      }
      if ($listitemdata['sa_event_t_address'] != '') {
        $subdetails = '  <div class="oxi-addons-EW-5-SD">' . $this->text_render($listitemdata['sa_event_t_address']) . '</div>';
      }
      if ($heading != '' || $subheading != '') {
        $headingsection = '<div class="oxi-addons-EW-5-Heading">
                                            ' . $heading . '
                                            ' . $subheading . '
                                        </div>';
      }
      if ($details != '' || $subdetails != '') {
        $detailssection = '<div class="oxi-addons-EW-5-details">
                                          ' . $details . '
                                          ' . $subdetails . '
                                        </div>';
      }

      echo '<div class="oxi-addons-EW-col ' . $this->column_render('sa_event_widgets_col', $style) . ' ">
                    <div class="oxi-addons-EW-5-wrapper-style-5 oxi-addons-EW-5-wrapper-style-5-' . $key . '" ' . $this->animation_render('sa_event_widgets_animation', $style) . '>
                        <div class="oxi-addons-EW-5-row">
                            <div class="oxi-addons-EW-5-content">
                              ' . $headingsection . '
                              ' . $detailssection . '
                            </div>
                        </div>
                    </div>
                </div>';
    }
  }

  public function old_render()
  {
    $style = $this->dbdata;
    $listdata = $this->child;
    $oxiid = $style['id'];
    $stylefiles = explode('||#||', $style['css']);
    $styledata = explode('|', $stylefiles[0]);
    $heading = $subheading = $details = $subdetails = $headingsection = $detailssection = '';
    echo '<div class="oxi-addons-container">';
    echo '<div class="oxi-addons-row">';
    foreach ($listdata as $value) {
      $listitemdata = explode('||#||', $value['files']);
      if ($listitemdata[2] != '') {
        $heading = '<div class="oxi-addons-EW-5-H">' . OxiAddonsTextConvert($listitemdata[2]) . '</div>';
      }
      if ($listitemdata[4] != '') {
        $subheading = '<div class="oxi-addons-EW-5-SH">' . OxiAddonsTextConvert($listitemdata[4]) . '</div>';
      }
      if ($listitemdata[6] != '') {
        $details = '<div class="oxi-addons-EW-5-D">' . OxiAddonsTextConvert($listitemdata[6]) . '</div>';
      }
      if ($listitemdata[8] != '') {
        $subdetails = '  <div class="oxi-addons-EW-5-SD">' . OxiAddonsTextConvert($listitemdata[8]) . '</div>';
      }
      if ($heading != '' || $subheading != '') {
        $headingsection = '<div class="oxi-addons-EW-5-Heading">
                                            ' . $heading . '
                                            ' . $subheading . '
                                        </div>';
      }
      if ($details != '' || $subdetails != '') {
        $detailssection = '<div class="oxi-addons-EW-5-details">
                                          ' . $details . '
                                          ' . $subdetails . '
                                        </div>';
      }

      echo '<div class="' . OxiAddonsItemRows($styledata, 123) . ' ">
                    <div class="oxi-addons-EW-5-wrapper-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 61) . '>
                        <div class="oxi-addons-EW-5-row">
                            <div class="oxi-addons-EW-5-content">
                              ' . $headingsection . '
                              ' . $detailssection . '
                            </div>
                        </div>
                    </div>
                </div>';
    }
    echo '</div>';
    echo '</div>';

    $css = '.oxi-addons-EW-5-wrapper-' . $oxiid . '{
            width:100%;
            margin: 0 auto;
            max-width: ' . $styledata[121] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
            overflow: auto; 
          }
          .oxi-addons-EW-5-wrapper-' . $oxiid . ' .oxi-addons-EW-5-row{
            width: 100%;
            float: left;
            ' . OxiAddonsBGImage($styledata, 3) . '
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 55) . '
          }
          .oxi-addons-EW-5-wrapper-' . $oxiid . ' .oxi-addons-EW-5-Heading{
            width: 100%;
            float: left;
            font-size: ' . $styledata[65] . 'px;
            color: ' . $styledata[69] . ';
            ' . OxiAddonsFontSettings($styledata, 71) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 77) . ';
          }
          .oxi-addons-EW-5-wrapper-' . $oxiid . ' .oxi-addons-EW-5-details{
            width: 100%;
            float: left;
            font-size: ' . $styledata[93] . 'px;
            color: ' . $styledata[97] . ';
            ' . OxiAddonsFontSettings($styledata, 99) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 105) . ';
          }
          .oxi-addons-EW-5-H{
            width: 100%;
            float: left;
          }
          .oxi-addons-EW-5-SH{
            width: 100%;
            float: left;
          }
          .oxi-addons-EW-5-D{
            width: 100%;
            float: left;
          }
          .oxi-addons-EW-5-SD{
            width: 100%;
            float: left;
          }


          @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-EW-5-wrapper-' . $oxiid . '{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 40) . ';
            }
            .oxi-addons-EW-5-row{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
            }
            .oxi-addons-EW-5-wrapper-' . $oxiid . ' .oxi-addons-EW-5-Heading{
              font-size: ' . $styledata[66] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 78) . ';
            }
            .oxi-addons-EW-5-wrapper-' . $oxiid . ' .oxi-addons-EW-5-details{
              font-size: ' . $styledata[94] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 106) . ';
            }

          }
          @media only screen and (max-width : 668px){
            .oxi-addons-EW-5-wrapper-' . $oxiid . '{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
            }
            .oxi-addons-EW-5-row{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
            }
            .oxi-addons-EW-5-wrapper-' . $oxiid . ' .oxi-addons-EW-5-Heading{
              font-size: ' . $styledata[67] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 79) . ';
            }
            .oxi-addons-EW-5-wrapper-' . $oxiid . ' .oxi-addons-EW-5-details{
              font-size: ' . $styledata[95] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 107) . ';
            }

          }';

    wp_add_inline_style('shortcode-addons-style', $css);
  }
}
