<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets\Templates;

if (!defined('ABSPATH')) {
  exit;
}

/**
 * Description of Style_9
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_9 extends Templates
{

  public function default_render($style, $child, $admin)
  { 
    $all_data = (array_key_exists('sa_event_widgets_data', $style) && is_array($style['sa_event_widgets_data'])) ? $style['sa_event_widgets_data'] : [];
    $icon = $heading = $image = $content = $headersection = $bodysection = '';

    foreach ($all_data as $key => $listitemdata) {
      if ($listitemdata['sa_event_t_heading_icon'] != '') {
        $icon = '<div class="oxi-addons-EW-9-H-icon">' .  $this->font_awesome_render('' . $listitemdata['sa_event_t_heading_icon'] . '') . '</div>';
      }
      if ($listitemdata['sa_event_t_heading'] != '') {
        $heading = '<div class="oxi-addons-EW-9-H-text">' . $this->text_render($listitemdata['sa_event_t_heading']) . '</div>';
      }
      if ($this->media_render('sa_event_t_media', $listitemdata) != '') {
        $image = '<div class="oxi-addons-EW-9-calendar-body">
                                    <img src="' . $this->media_render('sa_event_t_media', $listitemdata) . '">
                                </div>';
      } else {
        $image = 'https://www.oxilab.org/wp-content/uploads/2019/01/pexels-photo-167589.jpeg';
      }

      if ($listitemdata['sa_event_t_sub_description'] != '') {
        $content = '<div class="oxi-addons-EW-9-content-text">' . $this->text_render($listitemdata['sa_event_t_sub_description']) . '</div>';
      }
      if ($icon != '' || $heading != '') {
        $headersection = '<div class="oxi-addons-EW-9-header">
                                          <div class="oxi-addons-EW-9-HI">
                                            ' . $icon . '
                                            ' . $heading . '
                                          </div>
                                      </div>';
      }
      if ($image != '' || $content != '') {
        $bodysection = '<div class="oxi-addons-EW-9-content-body">
                                          ' . $image . '
                                          ' . $content . '
                                      </div>';
      }
      echo '   <div class="oxi-addons-EW-col ' . $this->column_render('sa_event_widgets_col', $style) . '">
                        <div class="oxi-addons-EW-9-wrapper-style-9 oxi-addons-EW-9-wrapper-style-9-' . $key . '" ' . $this->animation_render('sa_event_widgets_animation', $style) . '>
                            <div class="oxi-addons-EW-9-body">
                            ' . $headersection . '
                            ' . $bodysection . '
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
    $icon = $heading = $image = $content = $headersection = $bodysection = '';

    echo '<div class="oxi-addons-container">';
    echo '<div class="oxi-addons-row">';
    foreach ($listdata as $value) {
      $listitemdata = explode('||#||', $value['files']);
      if ($listitemdata[6] != '') {
        $icon = '<div class="oxi-addons-EW-9-H-icon">' . oxi_addons_font_awesome('' . $listitemdata[6] . '') . '</div>';
      }
      if ($listitemdata[4] != '') {
        $heading = '<div class="oxi-addons-EW-9-H-text">' . OxiAddonsTextConvert($listitemdata[4]) . '</div>';
      }
      if ($listitemdata[2] != '') {
        $image = '<div class="oxi-addons-EW-9-calendar-body">
                                    <img src="' . OxiAddonsUrlConvert($listitemdata[2]) . '">
                                </div>';
      }
      if ($listitemdata[8] != '') {
        $content = '<div class="oxi-addons-EW-9-content-text">' . OxiAddonsTextConvert($listitemdata[8]) . '</div>';
      }
      if ($icon != '' || $heading != '') {
        $headersection = '<div class="oxi-addons-EW-9-header">
                                          <div class="oxi-addons-EW-9-HI">
                                            ' . $icon . '
                                            ' . $heading . '
                                          </div>
                                      </div>';
      }
      if ($image != '' || $content != '') {
        $bodysection = '<div class="oxi-addons-EW-9-content-body">
                                          ' . $image . '
                                          ' . $content . '
                                      </div>';
      }
      echo '<div class="' . OxiAddonsItemRows($styledata, 145) . '">
                    <div class="oxi-addons-EW-9-wrapper-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 59) . '>
                        <div class="oxi-addons-EW-9-body">
                            ' . $headersection . '
                            ' . $bodysection . '
                        </div>
                    </div>
                </div>';
    }
    echo '</div>';
    echo '</div>';


    $css = '
        .oxi-addons-EW-9-wrapper-' . $oxiid . '{
          width: 100%;
          max-width:' . $styledata[3] . 'px;
          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 37) . ';
          margin: 0 auto;
        }
        .oxi-addons-EW-9-wrapper-' . $oxiid . ' .oxi-addons-EW-9-body{
          overflow: hidden;
          border: ' . $styledata[137] . 'px ' . $styledata[138] . '  ' . $styledata[141] . ';
          border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';
          ' . OxiAddonsBoxShadowSanitize($styledata, 53) . '; 
        }
        .oxi-addons-EW-9-wrapper-' . $oxiid . ' .oxi-addons-EW-9-header{
          width: 100%;
          float: left;
          background: ' . $styledata[63] . ';
          padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 65) . ';
        }
        .oxi-addons-EW-9-wrapper-' . $oxiid . ' .oxi-addons-EW-9-HI{
          font-size: ' . $styledata[81] . 'px;
          color: ' . $styledata[85] . ';
          ' . OxiAddonsFontSettings($styledata, 87) . '
          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . ';
        }
        .oxi-addons-EW-9-wrapper-' . $oxiid . ' .oxi-addons-EW-9-H-icon{
          display: inline;
        }
        .oxi-addons-EW-9-wrapper-' . $oxiid . ' .oxi-addons-EW-9-H-text{
          display: inline;
        }
        .oxi-addons-EW-9-wrapper-' . $oxiid . ' .oxi-addons-EW-9-content-body{
          width: 100%;
          float: left;
          background: ' . $styledata[143] . ';
          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . ';
        }
        .oxi-addons-EW-9-wrapper-' . $oxiid . ' .oxi-addons-EW-9-calendar-body img{
          width: 100%;
        }
        .oxi-addons-EW-9-wrapper-' . $oxiid . ' .oxi-addons-EW-9-calendar-body{
          text-align: center;
        }
        .oxi-addons-EW-9-wrapper-' . $oxiid . ' .oxi-addons-EW-9-content-text{
          width: 100%;
          float: left;
          font-size: ' . $styledata[109] . 'px;
          color: ' . $styledata[113] . ';
          ' . OxiAddonsFontSettings($styledata, 115) . '
          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 121) . ';
        }

        @media only screen and (min-width : 669px) and (max-width : 993px){
          .oxi-addons-EW-9-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 38) . ';
          }
          .oxi-addons-EW-9-wrapper-' . $oxiid . ' .oxi-addons-EW-9-header{
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 66) . ';
          }
          .oxi-addons-EW-9-wrapper-' . $oxiid . ' .oxi-addons-EW-9-HI{
            font-size: ' . $styledata[82] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 94) . ';
          }
          .oxi-addons-EW-9-wrapper-' . $oxiid . ' .oxi-addons-EW-9-content-body{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 22) . ';
          }
          .oxi-addons-EW-9-wrapper-' . $oxiid . ' .oxi-addons-EW-9-content-text{
            font-size: ' . $styledata[110] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 122) . ';
          }

        }
        @media only screen and (max-width : 668px){
          .oxi-addons-EW-9-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
          }
          .oxi-addons-EW-9-wrapper-' . $oxiid . ' .oxi-addons-EW-9-header{
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 67) . ';
          }
          .oxi-addons-EW-9-wrapper-' . $oxiid . ' .oxi-addons-EW-9-HI{
            font-size: ' . $styledata[83] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 95) . ';
          }
          .oxi-addons-EW-9-wrapper-' . $oxiid . ' .oxi-addons-EW-9-content-body{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
          }
          .oxi-addons-EW-9-wrapper-' . $oxiid . ' .oxi-addons-EW-9-content-text{
            font-size: ' . $styledata[111] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 123) . ';
          }

        }

        ';
    wp_add_inline_style('shortcode-addons-style', $css);
  }
}
