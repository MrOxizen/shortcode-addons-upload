<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_3
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_3 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $price = $heading = $details = $bodytitle = $bodytime = $button = $imageoverlay = ''; 

        $all_data = (array_key_exists('sa_event_widgets_data', $style) && is_array($style['sa_event_widgets_data'])) ? $style['sa_event_widgets_data'] : [];
        foreach ($all_data as $key => $listitemdata) {
            if ($listitemdata['sa_event_t_price'] != '') {
                $price = '<div class="oxi-addons-EW-image-overlay-price-main ' . $style['sa_event_widgets_tp_rib_pos'] . '">
                                <div class="oxi-addons-EW-image-overlay-price">' . $this->text_render($listitemdata['sa_event_t_price']) . '</div>
                            </div>';
            }
            if ($listitemdata['sa_event_t_image_heading'] != '') {
                $heading = '<div class="oxi-addons-EW-image-overlay-heading">' . $this->text_render($listitemdata['sa_event_t_image_heading']) . '</div>';
            }
            if ($listitemdata['sa_event_t_info_text'] != '') {
                $details = '<div class="oxi-addons-EW-image-overlay-details">' . $this->text_render($listitemdata['sa_event_t_info_text']) . '</div>';
            }
            if ($listitemdata['sa_event_t_location_address'] != '') {
                $bodytitle = '<div class="oxi-addons-EW-body-title"> ' . $this->text_render($listitemdata['sa_event_t_location_address']) . ' </div>';
            }
            if ($listitemdata['sa_event_t_location_time'] != '') {
                $bodytime = '<div class="oxi-addons-EW-body-time">  ' . $this->text_render($listitemdata['sa_event_t_location_time']) . '</div>';
            }


            if ($listitemdata['sa_event_t_button_link-url'] != '' && $listitemdata['sa_event_t_button'] != '') {
                $button = '<div class="oxi-addons-EW-body-button">
                              <a ' . $this->url_render('sa_event_t_button_link', $listitemdata) . ' class="oxi-addons-EW-body-button-link">' . $this->text_render($listitemdata['sa_event_t_button']) . '</a>
                          </div>';
            } elseif ($listitemdata['sa_event_t_button_link-url'] == '' && $listitemdata['sa_event_t_button'] != '') {
                $button = '<div class="oxi-addons-EW-body-button">
                              <div class="oxi-addons-EW-body-button-link">' . $this->text_render($listitemdata['sa_event_t_button']) . '</div>
                          </div>';
            }
            if ($heading != '' || $details != '') {
                $imageoverlay = '<div class="oxi-addons-EW-image-overlay-main">
                                        ' . $heading . '
                                        ' . $details . '
                                    </div>';
            }
            if ($this->media_render('sa_event_t_media', $listitemdata) != '') {
                $media = $this->media_render('sa_event_t_media', $listitemdata);
            } else {
                $media = 'https://www.oxilab.org/wp-content/uploads/2018/12/violinist-in-the-autumn-forest.png';
            }
            echo '<div class="oxi-addons-EW-col  ' . $this->column_render('sa_event_widgets_col', $style) . '">
                <div class="oxi-addons-EW-wrapper-style-3 oxi-addons-EW-wrapper-style-3-' . $key . '">
                    <div class="oxi-addons-EW-row" ' . $this->animation_render('sa_event_widgets_animation', $style) . '>
                        <div class="oxi-addons-EW-image"style="
                                 background: url(\'' . $media . '\');
                                -moz-background-size: cover;
                                -o-background-size: cover;
                                background-size: cover;
                                overflow: hidden;
                            ">
                            <div class="oxi-addons-EW-image-overlay">
                                ' . $price . '
                                ' . $imageoverlay . '
                            </div>
                        </div>
                        <div class="oxi-addons-EW-body">
                            ' . $bodytitle . '
                            ' . $bodytime . '
                            ' . $button . '
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
        $price = $heading = $details = $bodytitle = $bodytime = $button = $imageoverlay = '';
        $css = '';
        echo '<div class="oxi-addons-container">';
        echo '<div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $listitemdata = explode('||#||', $value['files']);
            if ($listitemdata[2] != '') {
                $price = '<div class="oxi-addons-EW-image-overlay-price-main">
                          <div class="oxi-addons-EW-image-overlay-price">' . OxiAddonsTextConvert($listitemdata[2]) . '</div>
                      </div>';
            }
            if ($listitemdata[4] != '') {
                $heading = '<div class="oxi-addons-EW-image-overlay-heading">' . OxiAddonsTextConvert($listitemdata[4]) . '</div>';
            }
            if ($listitemdata[6] != '') {
                $details = '<div class="oxi-addons-EW-image-overlay-details">' . OxiAddonsTextConvert($listitemdata[6]) . '</div>';
            }
            if ($listitemdata[10] != '') {
                $bodytitle = '<div class="oxi-addons-EW-body-title"> ' . OxiAddonsTextConvert($listitemdata[10]) . ' </div>';
            }
            if ($listitemdata[12] != '') {
                $bodytime = '<div class="oxi-addons-EW-body-time">  ' . OxiAddonsTextConvert($listitemdata[12]) . '</div>';
            }
            if ($listitemdata[16] != '' && $listitemdata[14] != '') {
                $button = '<div class="oxi-addons-EW-body-button">
                              <a href="' . OxiAddonsUrlConvert($listitemdata[16]) . '" target="' . $styledata[195] . '" class="oxi-addons-EW-body-button-link">' . OxiAddonsTextConvert($listitemdata[14]) . '</a>
                          </div>';
            } elseif ($listitemdata[16] == '' && $listitemdata[14] != '') {
                $button = '<div class="oxi-addons-EW-body-button">
                              <div class="oxi-addons-EW-body-button-link">' . OxiAddonsTextConvert($listitemdata[14]) . '</div>
                          </div>';
            }
            if ($heading != '' || $details != '') {
                $imageoverlay = '<div class="oxi-addons-EW-image-overlay-main">
                                        ' . $heading . '
                                        ' . $details . '
                                    </div>';
            }
            echo '<div class="' . OxiAddonsItemRows($styledata, 276) . '">
                <div class="oxi-addons-EW-wrapper-' . $oxiid . ' oxi-addons-EW-wrapper-' . $oxiid . '-' . $value['id'] . '">
                    <div class="oxi-addons-EW-row" ' . OxiAddonsAnimation($styledata, 271) . '>
                        <div class="oxi-addons-EW-image">
                            <div class="oxi-addons-EW-image-overlay">
                                ' . $price . '
                                ' . $imageoverlay . '
                            </div>
                        </div>
                        <div class="oxi-addons-EW-body">
                            ' . $bodytitle . '
                            ' . $bodytime . '
                            ' . $button . '
                        </div>
                    </div>
                </div>
            </div>';
            $css .= '.oxi-addons-EW-wrapper-' . $oxiid . '.oxi-addons-EW-wrapper-' . $oxiid . '-' . $value['id'] . ' .oxi-addons-EW-image-overlay{
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        top: 0;
                        left: 0;
                        background-color: red;
                        background: url(\'' . OxiAddonsUrlConvert($listitemdata[8]) . '\');
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        background-size: cover;
                        overflow: hidden;
                    }';
        }
        echo '</div>';
        echo '</div>';

        $transform = $styledata[269] == 'right' ? "rotate(45deg)" : "rotate(-45deg)";
        $leftRight = $styledata[269] == 'right' ? "right: -60px;" : "left: -60px;";
        $css .= '
        .oxi-addons-EW-wrapper-' . $oxiid . '{
            width: 100%;
            max-width: ' . $styledata[5] . 'px;
            margin: auto;
            overflow: hidden;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-row{
            width: 100%;
            float: left;
            overflow: hidden;
            ' . OxiAddonsBoxShadowSanitize($styledata, 39) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image{
            position: relative;
            width: 100%;
            float: left;
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image::after{
            display: block;
            content: "";
            padding-bottom: ' . $styledata[137] . '%;
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image-overlay-price-main{
            position: absolute;
            ' . $leftRight . '
            top: -60px;
            background-color: ' . $styledata[45] . ';
            width: 120px;
            height: 120px;
            display: flex;
            justify-content: center;
            transform:  ' . $transform . ';

        }
        .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-image-overlay-price{
            color: #fff;
            display: flex;
            align-items: flex-end;
            font-size: ' . $styledata[65] . 'px;
            ' . OxiAddonsFontSettings($styledata, 69) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
            color: ' . $styledata[47] . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image-overlay-main {
            position: absolute;
            left: 0;
            bottom: 0;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-image-overlay-heading{
            width: 100%;
            float: left;
            font-size: 18px;
            ' . OxiAddonsFontSettings($styledata, 81) . ';
            color: ' . $styledata[87] . ';
            font-size: ' . $styledata[89] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image-overlay-details{
            font-size: 18px;
            ' . OxiAddonsFontSettings($styledata, 115) . ';
            color: ' . $styledata[109] . ';
            font-size: ' . $styledata[111] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 121) . ';
        }

        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-body{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
            background: ' . $styledata[280] . ';
            display: block;
            overflow: hidden;
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-body-title{
            font-size: ' . $styledata[141] . 'px;
            ' . OxiAddonsFontSettings($styledata, 145) . ';
            color: ' . $styledata[139] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 151) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-body-time{
            font-size: ' . $styledata[169] . 'px;
            ' . OxiAddonsFontSettings($styledata, 173) . ';
            color: ' . $styledata[167] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 179) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-body-button{
            padding: 15px 0 0 0;
            ' . OxiAddonsFontSettings($styledata, 201) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-body-button-link{
            display: inline-block;
            text-decoration: none;
            background:' . $styledata[207] . ';
            font-size: ' . $styledata[197] . 'px;
            color: ' . $styledata[209] . ';
            border: ' . $styledata[215] . 'px ' . $styledata[216] . ' ;
            border-color: ' . $styledata[219] . ' ;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 253) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 221) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 237) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-body-button-link:hover,
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-body-button-link:focus,
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-body-button-link:active
        {
            background-color:' . $styledata[211] . ' !important;
            color: ' . $styledata[213] . ' !important;
        }

        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-EW-wrapper-' . $oxiid . '{
                 padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-image-overlay-price-main{
                top: -60px;
                width: 120px;
                height: 120px;
            }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image-overlay-price{
                font-size: ' . $styledata[66] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 50) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image-overlay-main {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-image-overlay-heading{
                font-size: ' . $styledata[90] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 94) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image-overlay-details{
                font-size: ' . $styledata[112] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 122) . ';
            } 
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-body{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
             }
            .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-body-title{
                font-size: ' . $styledata[142] . 'px;
                 padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 152) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-body-time{
                font-size: ' . $styledata[170] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 180) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-body-button-link{
                font-size: ' . $styledata[198] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 222) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 254) . ';
            }
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-EW-wrapper-' . $oxiid . '{
                 padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image-overlay-price-main{
                top: -60px;
                width: 120px;
                height: 120px;
            }
            .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-image-overlay-price{
                font-size: ' . $styledata[67] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 51) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image-overlay-main {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image-overlay-heading{
                font-size: ' . $styledata[91] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 95) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image-overlay-details{
                font-size: ' . $styledata[113] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 123) . ';
            } 
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-body{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
             }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-body-title{
                font-size: ' . $styledata[143] . 'px;
                 padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 153) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-body-time{
                font-size: ' . $styledata[171] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 181) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-body-button-link{
                font-size: ' . $styledata[199] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 223) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 255) . ';
            }
        }
    ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
