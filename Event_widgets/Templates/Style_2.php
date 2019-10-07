<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Event_widgets\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_2
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_2 extends Templates {

    public function default_render($style, $child, $admin) {
        $date = $month = $datemonthsection = $heading = $content = $locationicon = $locationtext = $locationsection = $button = $media = '';
        $css = '';
        $all_data = (array_key_exists('sa_event_widgets_data', $style) && is_array($style['sa_event_widgets_data'])) ? $style['sa_event_widgets_data'] : [];
        if ($style['sa_event-widgets_date_and_month_pos'] == 'left') {
            $pos = '   left : 0;';
        } elseif ($style['sa_event-widgets_date_and_month_pos'] == 'right') {
            $pos = 'right: 0;';
        } else {

            $pos = '  right: 50%; transform: translateX(50%);';
        }
        foreach ($all_data as $key => $listitemdata) {
//            echo '<pre>';
//            print_r($this->url_render('sa_event_t_button_link',$listitemdata));
//            echo '</pre>';
            if ($listitemdata['sa_event_t_date'] != '') {
                $date = '<div class="oxi-addons-EW-2-date">' . $this->text_render($listitemdata['sa_event_t_date']) . '</div>';
            }
            if ($listitemdata['sa_event_t_month'] != '') {
                $month = '<div class="oxi-addons-EW-2-month">' . $this->text_render($listitemdata['sa_event_t_month']) . '</div>';
            }
            if ($date != '' || $month != '') {
                $datemonthsection = '<div class="oxi-addons-EW-2-date-month" style="'.$pos.'">
                                      <div class="oxi-addons-EW-2-date-month-table-cell">
                                          ' . $date . '
                                          ' . $month . '
                                      </div>
                                </div>';
            }
            if ($listitemdata['sa_event_t_head'] != '') {
                $heading = '<div class="oxi-addons-EW-2-H">
                               ' . $this->text_render($listitemdata['sa_event_t_head']) . '
                            </div>';
            }
            if ($listitemdata['sa_event_t_info_text'] != '') {
                $content = '<div class="oxi-addon-EW-2-Adress">
                               ' . $this->text_render($listitemdata['sa_event_t_info_text']) . '
                            </div>';
            }
            if ($listitemdata['sa_event_t_location_icon'] != '') {
                $locationicon = '<div class="oxi-addon-EW-2-location-I">' . $this->font_awesome_render($listitemdata['sa_event_t_location_icon']) . '</div>';
            }
            if ($listitemdata['sa_event_t_location_text'] != '') {
                $locationtext = '<div class="oxi-addons-EW-2-C-LO">' . $this->text_render($listitemdata['sa_event_t_location_text']) . '</div>';
            }
            if ($locationicon != '' || $locationtext != '') {
                $locationsection = '<div class="oxi-addon-EW-2-location">
                                    ' . $locationicon . '
                                    ' . $locationtext . '
                                </div>';
            }
            if ($listitemdata['sa_event_t_button_link-url'] != '' && $listitemdata['sa_event_t_button'] != '') {
                $button = '<div class="oxi-addons-EW-2-button">
                          <a href="' . $this->url_render('sa_event_t_button_link-url', $listitemdata) . '"  class="oxi-addons-EW-2-button-link">' . $this->text_render($listitemdata['sa_event_t_button']) . '</a>
                      </div>';
            } elseif ($listitemdata['sa_event_t_button_link-url'] == '' && $listitemdata['sa_event_t_button'] != '') {
                $button = ' <div class="oxi-addons-EW-2-button">
                              <div class="oxi-addons-EW-2-button-link">' . $this->text_render($listitemdata['sa_event_t_button']) . '</div>
                          </div>';
            }

            if ($this->media_render('sa_event_t_media', $listitemdata) != '') {
                $media = $this->media_render('sa_event_t_media', $listitemdata);
            } else {
                $media = 'https://www.oxilab.org/wp-content/uploads/2019/01/pexels-photo-756248.jpeg';
            }
            echo '<div class="oxi-addons-EW-col ' . $this->column_render('sa_event_widgets_col', $style) . '">
                    <div class="oxi-addons-EW-wrapper-style-2 oxi-addons-EW-wrapper-style-2-' . $key . '">
                        <div class="oxi-addons-EW-2-wrapper-row" ' . $this->animation_render('sa_event_widgets_animation', $style) . '>
                            <div class="oxi-addons-EW-2-image">
                                <div class="oxi-addons-EW-2-img-body" style="
                                background: url(\'' . $media . '\');
                                position: absolute;
                                width: 100%;
                                height: 100%;
                                top: 0;
                                left: 0;
                                -moz-background-size: cover;
                                -o-background-size: cover;
                                background-size: cover;
                                overflow: hidden;
                    ">
                                  ' . $datemonthsection . '
                                </div>
                            </div>
                            <div class="oxi-addons-EW-2-C">
                                  <div class="oxi-addons-EW-2-C-body">
                                    ' . $heading . '
                                    ' . $content . '
                                    ' . $locationsection . '
                                    ' . $button . '
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
        $date = $month = $datemonthsection = $heading = $address = $locationicon = $locationtext = $locationsection = $button = '';
        $css = '';
        echo '<div class="oxi-addons-container">';
        echo '<div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $listitemdata = explode('||#||', $value['files']);
            if ($listitemdata[2] != '') {
                $date = '<div class="oxi-addons-EW-2-date">' . OxiAddonsTextConvert($listitemdata[2]) . '</div>';
            }
            if ($listitemdata[4] != '') {
                $month = '  <div class="oxi-addons-EW-2-month">' . OxiAddonsTextConvert($listitemdata[4]) . '</div>';
            }
            if ($date != '' || $month != '') {
                $datemonthsection = '<div class="oxi-addons-EW-2-date-month">
                                      <div class="oxi-addons-EW-2-date-month-table-cell">
                                          ' . $date . '
                                          ' . $month . '
                                      </div>
                                </div>';
            }
            if ($listitemdata[8] != '') {
                $heading = '<div class="oxi-addons-EW-2-H">' . OxiAddonsTextConvert($listitemdata[8]) . '</div>';
            }
            if ($listitemdata[10] != '') {
                $address = '<div class="oxi-addon-EW-2-Adress">' . OxiAddonsTextConvert($listitemdata[10]) . '</div>';
            }
            if ($listitemdata[14] != '') {
                $locationicon = '<div class="oxi-addon-EW-2-location-I">' . oxi_addons_font_awesome('' . OxiAddonsTextConvert($listitemdata[14]) . '') . '</div>';
            }
            if ($listitemdata[12] != '') {
                $locationtext = '<div class="oxi-addons-EW-2-C-LO">' . OxiAddonsTextConvert($listitemdata[12]) . '</div>';
            }
            if ($locationicon != '' || $locationtext != '') {
                $locationsection = '<div class="oxi-addon-EW-2-location">
                                    ' . $locationicon . '
                                    ' . $locationtext . '
                                </div>';
            }
            if ($listitemdata[18] != '' && $listitemdata[16] != '') {
                $button = '<div class="oxi-addons-EW-2-button">
                          <a href="' . OxiAddonsUrlConvert($listitemdata[18]) . '" target="' . $styledata[269] . '" class="oxi-addons-EW-2-button-link">' . OxiAddonsTextConvert($listitemdata[16]) . '</a>
                      </div>';
            } elseif ($listitemdata[18] == '' && $listitemdata[16] != '') {
                $button = ' <div class="oxi-addons-EW-2-button">
                              <div class="oxi-addons-EW-2-button-link">' . OxiAddonsTextConvert($listitemdata[16]) . '</div>
                          </div>';
            }
            echo'<div class="' . OxiAddonsItemRows($styledata, 357) . '">
                <div class="oxi-addons-EW-2-wrapper-' . $oxiid . ' oxi-addons-EW-2-wrapper-' . $oxiid . '-' . $value['id'] . '">
                    <div class="oxi-addons-EW-2-wrapper-row" ' . OxiAddonsAnimation($styledata, 71) . '>
                        <div class="oxi-addons-EW-2-image">
                            <div class="oxi-addons-EW-2-img-body">
                              ' . $datemonthsection . '
                            </div>
                        </div>
                        <div class="oxi-addons-EW-2-C">
                              <div class="oxi-addons-EW-2-C-body">
                                ' . $heading . '
                                ' . $address . '
                                ' . $locationsection . '
                                ' . $button . '
                              </div>
                        </div>
                    </div>
                </div>';

            echo'</div>';
            $css .= '.oxi-addons-EW-2-wrapper-' . $oxiid . '.oxi-addons-EW-2-wrapper-' . $oxiid . '-' . $value['id'] . ' .oxi-addons-EW-2-img-body{
            background: url(\'' . OxiAddonsUrlConvert($listitemdata[6]) . '\');
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            overflow: hidden;
          }';
        }
        echo'</div>';
        echo'</div>';

        $css .= '.oxi-addons-EW-2-wrapper-' . $oxiid . '{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 43) . ';
          }
          .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-wrapper-row{
            width: 100%;
            margin: auto;
            ' . OxiAddonsBoxShadowSanitize($styledata, 65) . ';
            max-width: ' . $styledata[7] . 'px;
            border: ' . $styledata[59] . 'px ' . $styledata[60] . '  ' . $styledata[63] . ';
            ' . OxiAddonsBGImage($styledata, 3) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';
            overflow: hidden;
          }
          .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-image{
            width: 100%;
            position: relative;
          }
          .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-image::after{
            display: inline-block;
            content: "";
            padding: ' . $styledata[183] . '%;
          }
          .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-date-month{
            display: table;
            position: absolute;
            width: ' . $styledata[77] . 'px;
            height:  ' . $styledata[81] . 'px;
            top: 0;
            ' . $styledata[75] . ': 0;
            ' . OxiAddonsBGImage($styledata, 85) . '
            border: ' . $styledata[89] . 'px ' . $styledata[90] . ' ' . $styledata[93] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 95) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 111) . ';
          }
          .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-date-month-table-cell{
            display: table-cell;
            vertical-align: middle;
            text-align: center;
          }
          .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-date{
            width: 100%;
            float: left;
            font-size: ' . $styledata[127] . 'px;
            color: ' . $styledata[131] . ';
            ' . OxiAddonsFontSettings($styledata, 133) . '
            text-align: center;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 139) . ';
            line-height: 1;
          }
          .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-month{
            width: 100%;
            float: left;
            font-size:  ' . $styledata[155] . 'px;
            color:  ' . $styledata[159] . ';
            ' . OxiAddonsFontSettings($styledata, 161) . '
            text-align: center;
            padding:' . OxiAddonsPaddingMarginSanitize($styledata, 167) . ';
            line-height: 1;
          }
          .oxi-addons-EW-2-C{
            width: 100%;
            float: left;
          }
          .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-C-body{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';
            background:  ' . $styledata[3] . ';
            text-align: center;
          }
          .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-H{
            width: 100%;
            float: left;
            font-size: ' . $styledata[185] . 'px;
            color: ' . $styledata[189] . ';
            ' . OxiAddonsFontSettings($styledata, 191) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 197) . ';
          }
          .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addon-EW-2-Adress{
            width: 100%;
            float: left;
            font-size: ' . $styledata[213] . 'px;
            color: ' . $styledata[217] . ';
            ' . OxiAddonsFontSettings($styledata, 219) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 225) . ';

          }
          .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addon-EW-2-location{
            width: 100%;
            float: left;
            font-size: ' . $styledata[241] . 'px;
            color: ' . $styledata[245] . ';
            ' . OxiAddonsFontSettings($styledata, 247) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 253) . ';
            text-align:' . $styledata[353] . ';
          }
          .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addon-EW-2-location-I{
            display: inline;
            color: ' . $styledata[351] . ';
            font-size: ' . $styledata[241] . 'px;
          }
          .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-C-LO{
            display: inline;
          }
          .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-button{
            width: 100%;
            float: left;
            margin-top: 10px;
            text-align:' . $styledata[345] . ';
          }
          .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-button-link{
            display: inline-block;
            font-size: ' . $styledata[271] . 'px;
            color:  ' . $styledata[275] . ';
            background: ' . $styledata[277] . ';
            ' . OxiAddonsFontSettings($styledata, 283) . '
            border: ' . $styledata[289] . 'px ' . $styledata[290] . '  ' . $styledata[293] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 297) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 313) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 329) . ';

          }
          .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-button-link:hover{
            color:  ' . $styledata[279] . ';
            background: ' . $styledata[281] . ';
            border-Color: ' . $styledata[295] . ';
          }
          @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-EW-2-wrapper-' . $oxiid . '{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 44) . ';
            }
            .oxi-addons-EW-2-wrapper-row{
              max-width: ' . $styledata[8] . 'px;
              border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 12) . ';
            }
            .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-date-month{
              width: ' . $styledata[78] . 'px;
              height:  ' . $styledata[82] . 'px;
              border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 96) . ';
              margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 112) . ';
            }
            .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-date{
              font-size: ' . $styledata[128] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 140) . ';
            }
            .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-month{
              font-size:  ' . $styledata[156] . 'px;
              padding:' . OxiAddonsPaddingMarginSanitize($styledata, 168) . ';
            }
            .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-C-body{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 28) . ';
            }
            .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-H{
              font-size: ' . $styledata[186] . 'px;
              padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 198) . ';
            }
            .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addon-EW-2-Adress{
              font-size: ' . $styledata[214] . 'px;
              padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 226) . ';
            }
            .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addon-EW-2-location{
              font-size: ' . $styledata[242] . 'px;
              padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 254) . ';
            }
            .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-button-link{
              font-size: ' . $styledata[272] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 314) . ';
              margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 330) . ';
            }

          }
          @media only screen and (max-width : 668px){
            .oxi-addons-EW-2-wrapper-' . $oxiid . '{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 45) . ';
            }
            .oxi-addons-EW-2-wrapper-row{
              max-width: ' . $styledata[9] . 'px;
              border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 12) . ';
            }
            .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-date-month{
              width: ' . $styledata[79] . 'px;
              height:  ' . $styledata[83] . 'px;
              border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 97) . ';
              margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 113) . ';
            }
            .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-date{
              font-size: ' . $styledata[129] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 141) . ';
            }
            .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-month{
              font-size:  ' . $styledata[157] . 'px;
              padding:' . OxiAddonsPaddingMarginSanitize($styledata, 169) . ';
            }
            .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-C-body{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 29) . ';
            }
            .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-H{
              font-size: ' . $styledata[187] . 'px;
              padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 199) . ';
            }
            .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addon-EW-2-Adress{
              font-size: ' . $styledata[215] . 'px;
              padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 227) . ';
            }
            .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addon-EW-2-location{
              font-size: ' . $styledata[243] . 'px;
              padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 255) . ';
            }
            .oxi-addons-EW-2-wrapper-' . $oxiid . ' .oxi-addons-EW-2-button-link{
              font-size: ' . $styledata[273] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 315) . ';
              margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 331) . ';
            }

          }
          ';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
