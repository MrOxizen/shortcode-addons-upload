<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_10
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_10 extends Templates {

    public function default_render($style, $child, $admin) {

        $css = $media = '';
        $all_data = (array_key_exists('sa_event_widgets_data', $style) && is_array($style['sa_event_widgets_data'])) ? $style['sa_event_widgets_data'] : [];
        $icon = $heading = $image = $content = $headersection = $bodysection = '';
        if ($style['sa_event_widgets_overly_positon'] == 'left') {
            $pos = ' 
                         left: 0;';
        } elseif ($style['sa_event_widgets_overly_positon'] == 'right') {
            $pos = '
                         right: 0;';
        }
        foreach ($all_data as $key => $listitemdata) {

            if ($this->media_render('sa_event_t_media', $listitemdata) != '') {
                $media = $this->media_render('sa_event_t_media', $listitemdata);
            } else {
                $media = 'https://www.oxilab.org/wp-content/uploads/2019/01/pexels-photo-167589.jpeg';
            }
            if ($listitemdata['sa_event_t_day'] != '') {
                $date = '<div class="oxi-addons-EW-10-D">' . $this->text_render($listitemdata['sa_event_t_day']) . '</div>';
            }
            if ($listitemdata['sa_event_t_month'] != '') {
                $month = '<div class="oxi-addons-EW-10-M">' . $this->text_render($listitemdata['sa_event_t_month']) . '</div>';
            }
            if ($date != '' || $month != '') {
                $datemonthsection = '<div class="oxi-addons-EW-10-DM">
                                            ' . $date . '
                                            ' . $month . '
                                       </div>';
            }
            if ($listitemdata['sa_event_t_heading_link-url'] != '' && $listitemdata['sa_event_t_heading'] != '') {
                $headinglink = '<div class="oxi-addons-EW-10-heading">
                                    <a ' . $this->url_render('sa_event_t_heading_link', $listitemdata) . '> <div class="oxi-addons-EW-10-H">' . $this->text_render($listitemdata['sa_event_t_heading']) . '</div></a>
                                  </div>';
            } elseif ($listitemdata['sa_event_t_heading_link-url'] == '' && $listitemdata['sa_event_t_heading'] != '') {
                $headinglink = '<div class="oxi-addons-EW-10-heading">
                                        <div class="oxi-addons-EW-10-H">' . $this->text_render($listitemdata['sa_event_t_heading']) . '</div>
                                  </div>';
            }
            if ($listitemdata['sa_event_t_btn_link_url-url'] != '' && $listitemdata['sa_event_t_link_text'] != '') {
                $link = '<div class="oxi-addons-EW-10-lan">
                                  <a ' . $this->url_render('sa_event_t_btn_link_url', $listitemdata) . ' > <div class="oxi-addons-EW-10-link">' . $this->text_render($listitemdata['sa_event_t_link_text']) . '</div></a>
                               </div>';
            } elseif ($listitemdata['sa_event_t_btn_link_url-url'] == '' && $listitemdata['sa_event_t_link_text'] != '') {
                $link = '<div class="oxi-addons-EW-10-lan">
                                  <div class="oxi-addons-EW-10-link">' . $this->text_render($listitemdata['sa_event_t_link_text']) . '</div>
                             </div>';
            }
            if ($listitemdata['sa_event_t_info_time_icon'] != '') {
                $timeicon = '  <div class="oxi-addons-EW-10-F-T-I">' . $this->font_awesome_render($listitemdata['sa_event_t_info_time_icon']) . '</div>';
            }
            if ($listitemdata['sa_event_t_info_time'] != '') {
                $timetext = '<div class="oxi-addons-EW-10-F-T-T">' . $this->text_render($listitemdata['sa_event_t_info_time']) . '</div>';
            }
            if ($timeicon != '' || $timetext != '') {
                $footertimesection = '<div class="oxi-addons-EW-10-F-T">
                                                ' . $timeicon . '
                                                ' . $timetext . '
                                            </div>';
            }
            if ($listitemdata['sa_event_t_address_icon'] != '') {
                $addressicon = '<div class="oxi-addons-EW-10-F-L-I">' . $this->font_awesome_render($listitemdata['sa_event_t_address_icon']) . '</div>';
            }
            if ($listitemdata['sa_event_t_address'] != '') {
                $addresstext = '<div class="oxi-addons-EW-10-F-L-T">' . $this->text_render($listitemdata['sa_event_t_address']) . '</div>';
            }
            if ($timeicon != '' || $timetext != '') {
                $footertextsection = '<div class="oxi-addons-EW-10-F-location">
                                                ' . $addressicon . '
                                                ' . $addresstext . '
                                            </div>';
            }
            echo '   <div class="oxi-addons-EW-col ' . $this->column_render('sa_event_widgets_col', $style) . '">
                        <div class="oxi-addons-EW-10-wrapper-style-10 oxi-addons-EW-10-wrapper-style-10-' . $key . '" ' . $this->animation_render('sa_event_widgets_animation', $style) . '>
                           <div class="oxi-addons-EW-10-row" ' . $this->animation_render('sa_event_widgets_animation', $style) . '>
                                <div class="oxi-addons-EW-10-imagebody">
                                    <div class="oxi-addons-EW-10-BG" style="
                                          background: url(\'' . $media . '\');
                                            width: 100%;
                                            height: 100%;
                                            -moz-background-size: cover;
                                            -o-background-size: cover;
                                            background-size: cover;
                                            position: relative;
                                            ">
                                        <div class="oxi-addons-EW-10-IM-O" style="' . $pos . '">
                                          <div class="oxi-addons-EW-10-O-body">
                                                <div class="oxi-addons-EW-10-O-body-position">
                                                      ' . $datemonthsection . '
                                                      ' . $headinglink . '
                                                      ' . $link . '
                                                </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="oxi-addons-EW-10-F-TL">
                                  ' . $footertimesection . '
                                  ' . $footertextsection . '
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
        $date = $month = $datemonthsection = $headinglink = $link = $timeicon = $timetext = $footertimesection = $addressicon = $addresstext = $footertextsection = '';
        $css = '';
        echo '<div class="oxi-addons-container">';
        echo '<div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $listitemdata = explode('||#||', $value['files']);
            if ($listitemdata[4] != '') {
                $date = '<div class="oxi-addons-EW-10-D">' . OxiAddonsTextConvert($listitemdata[4]) . '</div>';
            }
            if ($listitemdata[4] != '') {
                $month = '<div class="oxi-addons-EW-10-M">' . OxiAddonsTextConvert($listitemdata[6]) . '</div>';
            }
            if ($date != '' || $month != '') {
                $datemonthsection = '<div class="oxi-addons-EW-10-DM">
                                            ' . $date . '
                                            ' . $month . '
                                        </div>';
            }
            if ($listitemdata[10] != '' && $listitemdata[8] != '') {
                $headinglink = '<div class="oxi-addons-EW-10-heading">
                                            <a href="' . OxiAddonsUrlConvert($listitemdata[10]) . '" target="' . $styledata[197] . '"> <div class="oxi-addons-EW-10-H">' . OxiAddonsTextConvert($listitemdata[8]) . '</div></a>
                                      </div>';
            } elseif ($listitemdata[10] == '' && $listitemdata[8] != '') {
                $headinglink = '<div class="oxi-addons-EW-10-heading">
                                            <div class="oxi-addons-EW-10-H">' . OxiAddonsTextConvert($listitemdata[8]) . '</div>
                                      </div>';
            }
            if ($listitemdata[14] != '' && $listitemdata[12] != '') {
                $link = '<div class="oxi-addons-EW-10-lan">
                                  <a href="' . OxiAddonsUrlConvert($listitemdata[14]) . '" target="' . $styledata[199] . '"> <div class="oxi-addons-EW-10-link">' . OxiAddonsTextConvert($listitemdata[12]) . '</div></a>
                               </div>';
            } elseif ($listitemdata[14] == '' && $listitemdata[12] != '') {
                $link = '<div class="oxi-addons-EW-10-lan">
                                  <div class="oxi-addons-EW-10-link">' . OxiAddonsTextConvert($listitemdata[12]) . '</div>
                             </div>';
            }
            if ($listitemdata[18] != '') {
                $timeicon = '  <div class="oxi-addons-EW-10-F-T-I">' . oxi_addons_font_awesome('' . $listitemdata[18] . '') . '</div>';
            }
            if ($listitemdata[16] != '') {
                $timetext = '<div class="oxi-addons-EW-10-F-T-T">' . OxiAddonsTextConvert($listitemdata[16]) . '</div>';
            }
            if ($timeicon != '' || $timetext != '') {
                $footertimesection = '<div class="oxi-addons-EW-10-F-T">
                                                ' . $timeicon . '
                                                ' . $timetext . '
                                            </div>';
            }
            if ($listitemdata[22] != '') {
                $addressicon = '<div class="oxi-addons-EW-10-F-L-I">' . oxi_addons_font_awesome('' . $listitemdata[22] . '') . '</div>';
            }
            if ($listitemdata[20] != '') {
                $addresstext = '<div class="oxi-addons-EW-10-F-L-T">' . OxiAddonsTextConvert($listitemdata[20]) . '</div>';
            }
            if ($timeicon != '' || $timetext != '') {
                $footertextsection = '<div class="oxi-addons-EW-10-F-location">
                                                ' . $addressicon . '
                                                ' . $addresstext . '
                                            </div>';
            }
            echo '<div class="' . OxiAddonsItemRows($styledata, 203) . '">
                        <div class="oxi-addons-EW-10-wrapper-' . $oxiid . ' oxi-addons-EW-10-wrapper-' . $oxiid . '-' . $value['id'] . '">
                            <div class="oxi-addons-EW-10-row" ' . OxiAddonsAnimation($styledata, 223) . '>
                                <div class="oxi-addons-EW-10-imagebody">
                                    <div class="oxi-addons-EW-10-BG">
                                        <div class="oxi-addons-EW-10-IM-O">
                                          <div class="oxi-addons-EW-10-O-body">
                                                <div class="oxi-addons-EW-10-O-body-position">
                                                      ' . $datemonthsection . '
                                                      ' . $headinglink . '
                                                      ' . $link . '
                                                </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="oxi-addons-EW-10-F-TL">
                                  ' . $footertimesection . '
                                  ' . $footertextsection . '
                            </div>
                            </div>
                        </div>
                    </div>';
            $css .= '.oxi-addons-EW-10-wrapper-' . $oxiid . '.oxi-addons-EW-10-wrapper-' . $oxiid . '-' . $value['id'] . ' .oxi-addons-EW-10-BG{
                        background: url(\'' . OxiAddonsUrlConvert($listitemdata[2]) . '\');
                        width: 100%;
                        height: 100%;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        background-size: cover;
                        position: relative;
                      }';
        }
        echo '</div>';
        echo '</div>';

        $overposition = $styledata[201] == 'right' ? "right:0" : "left:0";
        $borderposition = $styledata[201] == 'right' ? "border-right" : "border-left";
        $order = $styledata[201] == 'right' ? "order: -1" : "order: 1";

        $css .= '
        .oxi-addons-EW-10-wrapper-' . $oxiid . '{
          width: 100%;
          max-width: ' . $styledata[7] . 'px;
          margin: 0 auto;
          padding:  ' . $styledata[219] . 'px;
          overflow: auto;
        }
        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-BG{
          ' . $borderposition . ': ' . $styledata[11] . 'px ' . $styledata[12] . '  ' . $styledata[15] . ';
        }

        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-imagebody{
            background-color: ' . $styledata[3] . ';
            height: 100%;
        }

        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-BG::after{
          content: "";
          display: inline-block;
          padding-bottom: ' . $styledata[5] . '%;
        }
        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-IM-O{
          background: ' . $styledata[9] . ';
          min-width:  ' . $styledata[17] . '%;
          height: 100%;
          ' . $overposition . ';
          position: absolute;
          overflow: hidden;
        }
        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-O-body-position{
          position: relative;
          display: inline-block;
        }
        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-O-body{
          position: absolute;
          bottom: 5%;
          left: 10%;
        }
        .oxi-addons-EW-10-DM{
            float: left;
         }
        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-D{
            display: inline;
            font-size: ' . $styledata[19] . 'px;
            color: ' . $styledata[23] . ';
            ' . OxiAddonsFontSettings($styledata, 25) . '
        }
        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-M{
            display: inline;
            font-size: ' . $styledata[31] . 'px;
            color: ' . $styledata[35] . ';
            ' . OxiAddonsFontSettings($styledata, 37) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 43) . ';
        }
        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-H{
            width: 100%;
            float: left;
            font-size: ' . $styledata[59] . 'px;
            color: ' . $styledata[63] . ';
            ' . OxiAddonsFontSettings($styledata, 65) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';
        }
        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-H:hover{
            color: ' . $styledata[193] . ';
        }

        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-link{
            width: 100%;
            float: left;
            font-size: ' . $styledata[87] . 'px;
            color: ' . $styledata[91] . ';
            ' . OxiAddonsFontSettings($styledata, 93) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';
        }
        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-link:hover{
            color: ' . $styledata[195] . ';
        }
        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-F-TL{
          width: 100%;
          float: left;
          display: flex;
          background: ' . $styledata[115] . ';
          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 117) . ';
        }
        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-F-T{
          flex-grow: 1;

        }
        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-F-location{
          flex-grow: 1;
          ' . $order . ';
        }
        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-F-T-I{
          display: inline;
          font-size: ' . $styledata[133] . 'px;
          color: ' . $styledata[139] . ';
        }
        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-F-T-T{
          display: inline;
          font-size: ' . $styledata[133] . 'px;
          color: ' . $styledata[137] . ';
          ' . OxiAddonsFontSettings($styledata, 141) . '
          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 147) . ';
        }
        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-F-L-I{
          display: inline;
          font-size: ' . $styledata[163] . 'px;
          color: ' . $styledata[169] . ';
        }
        .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-F-L-T{
          display: inline;
          font-size: ' . $styledata[163] . 'px;
          color: ' . $styledata[167] . ';
          ' . OxiAddonsFontSettings($styledata, 171) . '
          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 177) . ';
        }

        @media only screen and (min-width : 669px) and (max-width : 993px){

          .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-D{
              font-size: ' . $styledata[20] . 'px;
          }
          .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-M{
              font-size: ' . $styledata[32] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 44) . ';
          }
          .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-H{
              font-size: ' . $styledata[60] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 72) . ';
          }
          .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-link{
              font-size: ' . $styledata[87] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 100) . ';
          }
          .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-F-TL{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 118) . ';
          }

          .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-F-T-I{
            font-size: ' . $styledata[134] . 'px;
          }
          .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-F-T-T{
            font-size: ' . $styledata[134] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 148) . ';
          }
          .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-F-L-I{
            font-size: ' . $styledata[164] . 'px;
          }
          .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-F-L-T{
            font-size: ' . $styledata[164] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 178) . ';
          }

        }

        @media only screen and (max-width : 668px){
          .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-D{
              font-size: ' . $styledata[21] . 'px;
          }
          .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-M{
              font-size: ' . $styledata[33] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 45) . ';
          }
          .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-H{
              font-size: ' . $styledata[61] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';
          }
          .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-link{
              font-size: ' . $styledata[89] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
          }
          .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-F-TL{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 119) . ';
          }
          .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-F-T-I{
            font-size: ' . $styledata[135] . 'px;
          }
          .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-F-T-T{
            font-size: ' . $styledata[135] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 149) . ';
          }
          .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-F-L-I{
            font-size: ' . $styledata[165] . 'px;
          }
          .oxi-addons-EW-10-wrapper-' . $oxiid . ' .oxi-addons-EW-10-F-L-T{
            font-size: ' . $styledata[165] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 179) . ';
          }
        }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
