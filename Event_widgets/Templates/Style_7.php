<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_7
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_7 extends Templates {

    public function default_render($style, $child, $admin) {
        $heading = $ewicon = $time = $addressicon = $addresstext = $linkicon = $link = $linktext = $timesection = $addressicon = '';
        $css = $media='';
        $all_data = (array_key_exists('sa_event_widgets_data', $style) && is_array($style['sa_event_widgets_data'])) ? $style['sa_event_widgets_data'] : [];

        foreach ($all_data as $key => $listitemdata) {
//            echo '<pre>';
//            print_r($this->url_render('sa_event_t_button_link',$listitemdata));
//            echo '</pre>';
//          
            if ($listitemdata['sa_event_t_heading'] != '') {
                $heading = '<div class="oxi-addons-EW-7-H">' . $this->text_render($listitemdata['sa_event_t_heading']) . '</div>';
            }
            if ($listitemdata['sa_event_t_info_time_icon'] != '') {
                $ewicon = '<div class="oxi-addons-EW-7-icon">' . $this->font_awesome_render($listitemdata['sa_event_t_info_time_icon']) . '</div>';
            }
            if ($listitemdata['sa_event_t_info_time'] != '') {
                $time = '<div class="oxi-addons-EW-7-time-text">' . $this->text_render($listitemdata['sa_event_t_info_time']) . '</div>';
            }
            if ($listitemdata['sa_event_t_address_icon'] != '') {
                $addressicon = '<div class="oxi-addons-EW-7-icon">' . $this->font_awesome_render($listitemdata['sa_event_t_address_icon']) . '</div>';
            }
            if ($listitemdata['sa_event_t_address'] != '') {
                $addresstext = '<div class="oxi-addons-EW-7-text">' . $this->text_render($listitemdata['sa_event_t_address']) . '</div>';
            }
            if ($listitemdata['sa_event_t_btn_icon'] != '') {
                $linkicon = '<div class="oxi-addons-EW-7-icon">' . $this->font_awesome_render($listitemdata['sa_event_t_btn_icon']) . '</div>';
            }
            if ($listitemdata['sa_event_t_btn_text'] != '') {
                $linktext = '<div class="oxi-addons-EW-7-icon-text">' . $this->text_render($listitemdata['sa_event_t_btn_text']) . '</div>';
            }
            if ($listitemdata['sa_event_t_btn_link-url'] != '') {
                $link = '<div class="oxi-addons-EW-7-link" >
                                      <a class="oxi-addons-EW-7-link-C" ' . $this->url_render('sa_event_t_btn_link', $listitemdata) . ' >
                                        ' . $linkicon . '
                                        ' . $linktext . '
                                      </a>
                                 </div>';
            } else {
                $link = '<div class="oxi-addons-EW-7-link" >
                                    ' . $linkicon . '
                                    ' . $linktext . '
                                 </div>';
            }
            if ($ewicon != '' || $time != '') {
                $timesection = '<div class="oxi-addons-EW-7-time">
                                            ' . $ewicon . '
                                            ' . $time . '
                                        </div>';
            }
            if ($addressicon != '' || $addresstext != '' || $link != '') {
                $addresssection = '<div class="oxi-addons-EW-7-address">
                                              ' . $addressicon . '
                                              ' . $addresstext . '
                                              ' . $link . '
                                        </div>';
            }
              if($this->media_render('sa_event_t_media', $style) != ''){
                    $media = $this->media_render('sa_event_t_media', $style);
            }else{
                    $media = 'https://www.oxilab.org/wp-content/uploads/2019/01/fireworks-846063_1920.jpg';
                
            }
            echo '   <div class="oxi-addons-EW-col ' . $this->column_render('sa_event_widgets_col', $style) . '">
                        <div class="oxi-addons-EW-7-wrapper-style-7 oxi-addons-EW-7-wrapper-style-7-' . $key . '" ' . $this->animation_render('sa_event_widgets_animation', $style) . ' '.$this->animation_render('sa_event_widgets_animation', $style).'>
                            <div class="oxi-addons-EW-7-image" style="
                             background: url(\'' .$media. '\');
                            width: 100%;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            position: relative;
                            ">
                                <div class="oxi-addons-EW-7-body">
                                    ' . $heading . '
                                    ' . $timesection . '
                                    ' . $addresssection . '
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
        $heading = $ewicon = $time = $addressicon = $addresstext = $linkicon = $link = $linktext = $timesection = $addressicon = '';
        $css = '';
        echo '<div class="oxi-addons-container">';
        echo '<div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $listitemdata = explode('||#||', $value['files']);
            if ($listitemdata[4] != '') {
                $heading = '<div class="oxi-addons-EW-7-H">' . OxiAddonsTextConvert($listitemdata[4]) . '</div>';
            }
            if ($listitemdata[8] != '') {
                $ewicon = '<div class="oxi-addons-EW-7-icon">' . oxi_addons_font_awesome('' . $listitemdata[8] . '') . '</div>';
            }
            if ($listitemdata[6] != '') {
                $time = '<div class="oxi-addons-EW-7-time-text">' . OxiAddonsTextConvert($listitemdata[6]) . '</div>';
            }
            if ($listitemdata[12] != '') {
                $addressicon = '<div class="oxi-addons-EW-7-icon">' . oxi_addons_font_awesome('' . $listitemdata[12] . '') . '</div>';
            }
            if ($listitemdata[10] != '') {
                $addresstext = '<div class="oxi-addons-EW-7-text">' . OxiAddonsTextConvert($listitemdata[10]) . '</div>';
            }
            if ($listitemdata[18] != '') {
                $linkicon = '<div class="oxi-addons-EW-7-icon">' . oxi_addons_font_awesome('' . $listitemdata[18] . '') . '</div>';
            }
            if ($listitemdata[14] != '') {
                $linktext = '<div class="oxi-addons-EW-7-icon-text">' . OxiAddonsTextConvert($listitemdata[14]) . '</div>';
            }
            if ($listitemdata[16] != '') {
                $link = '<div class="oxi-addons-EW-7-link" >
                                      <a class="oxi-addons-EW-7-link-C" href="' . OxiAddonsUrlConvert($listitemdata[16]) . '" target="' . $styledata[171] . '">
                                        ' . $linkicon . '
                                        ' . $linktext . '
                                      </a>
                                 </div>';
            } else {
                $link = '<div class="oxi-addons-EW-7-link" >
                                    ' . $linkicon . '
                                    ' . $linktext . '
                                 </div>';
            }
            if ($ewicon != '' || $time != '') {
                $timesection = '<div class="oxi-addons-EW-7-time">
                                            ' . $ewicon . '
                                            ' . $time . '
                                        </div>';
            }
            if ($addressicon != '' || $addresstext != '' || $link != '') {
                $addresssection = '<div class="oxi-addons-EW-7-address">
                                              ' . $addressicon . '
                                              ' . $addresstext . '
                                              ' . $link . '
                                        </div>';
            }
          

            echo'<div class="' . OxiAddonsItemRows($styledata, 197) . ' ">
                        <div class="oxi-addons-EW-7-wrapper-' . $oxiid . ' oxi-addons-EW-7-wrapper-' . $oxiid . '-' . $value['id'] . '" ' . OxiAddonsAnimation($styledata, 63) . '>
                            <div class="oxi-addons-EW-7-image">
                                <div class="oxi-addons-EW-7-body">
                                      ' . $heading . '
                                      ' . $timesection . '
                                      ' . $addresssection . '
                                </div>
                            </div>
                    </div>
                </div>';
            $css .= '.oxi-addons-EW-7-wrapper-' . $oxiid . '.oxi-addons-EW-7-wrapper-' . $oxiid . '-' . $value['id'] . ' .oxi-addons-EW-7-image{
                            background: url(\'' . OxiAddonsUrlConvert($listitemdata[2]) . '\');
                            width: 100%;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            position: relative;

                          }';
        }
        echo'</div>';
        echo'</div>';


        $css .= '
          .oxi-addons-EW-7-wrapper-' . $oxiid . '{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';

          }
          .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-image{
                border: ' . $styledata[3] . 'px ' . $styledata[4] . '  ' . $styledata[7] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 57) . ';
            }

          .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-image::after{
            display: inline-block;
            content: "";
            padding: ' . $styledata[67] . '%;
          }
          .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-body{
            width: 100%;
            float: left;
            position: absolute;
            bottom: 0;
            background: ' . $styledata[69] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';
          }
          .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-H{
            width: 100%;
            float: left;
            font-size: ' . $styledata[87] . 'px;
            color: ' . $styledata[91] . ';
            ' . OxiAddonsFontSettings($styledata, 93) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';
          }
          .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-time{
            width: 100%;
            float: left;
            font-size: ' . $styledata[115] . 'px;
            color: ' . $styledata[119] . ';
            ' . OxiAddonsFontSettings($styledata, 121) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . ';
          }
          .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-icon{
            display: inline;
            padding-right: 5px;
          }
          .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-time-text{
            display: inline;
            margin:0;
          }
          .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-address{
            width: 100%;
            float: left;
            font-size: ' . $styledata[143] . 'px;
            color: ' . $styledata[147] . ';
            ' . OxiAddonsFontSettings($styledata, 149) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 155) . ';
          }

          .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-icon{
            display: inline;
          }
          .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-text{
            display: inline;
          }
          .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-link{
            display: inline;
          }
          .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-icon{
            display: inline;
          }
          .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-icon-text{
            display: inline;
          }

          .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-link{
            font-size: ' . $styledata[173] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 181) . ';
          }
          .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-icons{
            transition: none;
          }
          .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-link-C{
            color: ' . $styledata[177] . ';
            transition: none;
          }
          .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-link:hover .oxi-addons-EW-7-link-C{
              color: ' . $styledata[179] . ';
          }

          @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-EW-7-wrapper-' . $oxiid . '{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 42) . ';
            }
            .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-image{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 26) . ';
            }
            .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-body{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 72) . ';
            }
            .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-H{
              font-size: ' . $styledata[88] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 100) . ';
            }
            .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-time{
              font-size: ' . $styledata[116] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 128) . ';
            }
            .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-address{
              font-size: ' . $styledata[144] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 156) . ';
            }

            .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-link{
              font-size: ' . $styledata[174] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 182) . ';
            }
          }
          @media only screen and (max-width : 668px){
            .oxi-addons-EW-7-wrapper-' . $oxiid . '{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 43) . ';
            }
            .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-image{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 44) . ';
            }
            .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-body{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';
            }
            .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-H{
              font-size: ' . $styledata[89] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
            }
            .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-time{
              font-size: ' . $styledata[117] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';
            }
            .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-address{
              font-size: ' . $styledata[145] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 157) . ';
            }

            .oxi-addons-EW-7-wrapper-' . $oxiid . ' .oxi-addons-EW-7-link{
              font-size: ' . $styledata[175] . 'px;
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 183) . ';
            }

          }';



        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
