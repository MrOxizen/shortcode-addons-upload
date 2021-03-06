<?php

namespace SHORTCODE_ADDONS_UPLOAD\Icon_boxes\Templates;

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

class Style_7 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $styledata = $this->style;
        $all_data = (array_key_exists('sa_icon_box_data', $styledata) && is_array($styledata['sa_icon_box_data'])) ? $styledata['sa_icon_box_data'] : [];
        foreach ($all_data as $key => $value) {
            $icon = $heading = $content = $link = $endlink = $icon_p = '';
            if ($style['sa_icon_box_icon_position'] == 'left') {
                $icon_p .= 'icon_left';
            }
            if (array_key_exists('sa_icon_box_icon', $value) && $value['sa_icon_box_icon'] != '') {
                $icon .= '<div class="sa_addons_icon_boxes_icon">
                            <div class="sa_icons_body">
                                ' . $this->font_awesome_render($value['sa_icon_box_icon']) . '
                            </div>
                        </div>
                ';
            }
            if (array_key_exists('sa_icon_box_h_text', $value) && $value['sa_icon_box_h_text'] != '') {
                $heading .= '<div class="sa_addons_icon_boxes_headding">
                            ' . $this->text_render($value['sa_icon_box_h_text']) . '
                        </div>';
            }
            if (array_key_exists('sa_icon_box_content', $value) && $value['sa_icon_box_content'] != '') {
                $content .= '<div class="sa_addons_icon_boxes_content">
                            ' . $this->text_render($value['sa_icon_box_content']) . '
                        </div>';
            }
            if (array_key_exists('sa_icon_box_url_open', $value) && $value['sa_icon_box_url_open'] != '0') {
                if ($value['sa_icon_box_url-url'] != '') {
                    $link .= '<a ' . $this->url_render('sa_icon_box_url', $value) . '>';
                    $endlink .= '</a>';
                }
            }
            echo '<div class="' . $this->column_render('sa_icon_box_col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '">
                    <div class="sa_addons_icon_boxes_container_style_7">';

            echo $link;

            echo '<div class="sa_addons_icon_boxes_style_7 sa_addons_icon_boxes_style_7_' . $key . ' ' . $icon_p . '">
                                <div>
                                    ' . $icon . '
                                    ' . $heading . '
                                    ' . $content . '
                                </div>
                        </div>';
            echo $endlink;
            echo '</div>';
            echo '</div>';
        }
    }

    public function old_render()
    {

        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';
        echo '<div class="oxi-addons-container">';
        echo '<div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $price = $heading = $details = $bodytitle = $bodytime = $button = $imageoverlay = '';
            $listitemdata = explode('||#||', $value['files']);
            if ($listitemdata[2] != '') {
                $price = '<div class="oxi-addons-EW-image-overlay-price-main">
                      <div class="oxi-addons-EW-image-overlay-price">' . oxi_addons_font_awesome($listitemdata[2]) . '</div>
                  </div>';
            }
            if ($listitemdata[4] != '') {
                $heading = '<div class="oxi-addons-EW-image-overlay-heading">' . OxiAddonsTextConvert($listitemdata[4]) . '</div>';
            }
            if ($listitemdata[6] != '') {
                $details = '<div class="oxi-addons-EW-image-overlay-details">' . OxiAddonsTextConvert($listitemdata[6]) . '</div>';
            }

            if ($heading != '' || $details != '') {
                $imageoverlay = '<div class="oxi-addons-EW-image-overlay-main">
                                    ' . $heading . '
                                    ' . $details . '
                                </div>';
            }
            echo '<div class="' . OxiAddonsItemRows($styledata, 144) . '">
            <div class="oxi-addons-EW-wrapper-' . $oxiid . ' oxi-addons-EW-wrapper-' . $oxiid . '-' . $value['id'] . '" ' . OxiAddonsAnimation($styledata, 139) . '>
                <div class="oxi-addons-EW-row">
                    <div class="oxi-addons-EW-image">
                        <div class="oxi-addons-EW-image-overlay">
                                ' . $price . '
                                ' . $imageoverlay . '
                        </div>
                    </div>
                </div>
            </div>';

            echo '</div>';
        }
        echo '</div>';
        echo '</div>';

        $transform = $styledata[137] == 'right' ? "rotate(45deg)" : "rotate(-45deg)";
        $leftRight = $styledata[137] == 'right' ? "right: -60px;" : "left: -60px;";
        $css .= '
    .oxi-addons-EW-wrapper-' . $oxiid . '{
        width: 100%;
        max-width: ' . $styledata[5] . 'px;
        margin: auto;
        overflow: hidden;
        position: relative;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
    }
    .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-row{
        width: 100%;
        float: left;
        ' . OxiAddonsBoxShadowSanitize($styledata, 39) . ';
         padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
        background: ' . $styledata[148] . ';
    }
    .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image .oxi-addons-EW-image-overlay .oxi-addons-EW-image-overlay-price-main{
        position: absolute;
        ' . $leftRight . '
        top: -60px;
        background: ' . $styledata[45] . ';
        width: 120px;
        height: 120px;
        display: flex;
        justify-content: center;
        transform:  ' . $transform . ';

    }
    .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image .oxi-addons-EW-image-overlay .oxi-addons-EW-image-overlay-price-main .oxi-addons-EW-image-overlay-price{
        color: #fff;
        display: flex;
        align-items: flex-end;
        font-size: ' . $styledata[65] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
        color: ' . $styledata[47] . ';
        transform: rotate(' . $styledata[153] . 'deg);
    }
    .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image .oxi-addons-EW-image-overlay .oxi-addons-EW-image-overlay-main .oxi-addons-EW-image-overlay-heading{
        width: 100%;
        float: left;
        font-size: 18px;
        ' . OxiAddonsFontSettings($styledata, 81) . ';
        color: ' . $styledata[87] . ';
        font-size: ' . $styledata[89] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . ';
    }
    .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image .oxi-addons-EW-image-overlay .oxi-addons-EW-image-overlay-main .oxi-addons-EW-image-overlay-details{
        ' . OxiAddonsFontSettings($styledata, 115) . ';
        color: ' . $styledata[109] . ';
        font-size: ' . $styledata[111] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 121) . ';
    }
    @media only screen and (min-width : 669px) and (max-width : 993px){
        .oxi-addons-EW-wrapper-' . $oxiid . '{
            max-width: ' . $styledata[6] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-row{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image .oxi-addons-EW-image-overlay .oxi-addons-EW-image-overlay-price-main .oxi-addons-EW-image-overlay-price{
            font-size: ' . $styledata[66] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 50) . ';
            transform: rotate(' . $styledata[154] . 'deg);
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image .oxi-addons-EW-image-overlay .oxi-addons-EW-image-overlay-main .oxi-addons-EW-image-overlay-heading{
            font-size: ' . $styledata[90] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 94) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image .oxi-addons-EW-image-overlay .oxi-addons-EW-image-overlay-main .oxi-addons-EW-image-overlay-details{
            font-size: ' . $styledata[112] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 122) . ';
        }
    }
    @media only screen and (max-width : 668px){
         .oxi-addons-EW-wrapper-' . $oxiid . '{
            max-width: ' . $styledata[7] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-row{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image .oxi-addons-EW-image-overlay .oxi-addons-EW-image-overlay-price-main .oxi-addons-EW-image-overlay-price{
            font-size: ' . $styledata[67] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 51) . ';
            transform: rotate(' . $styledata[155] . 'deg);
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image .oxi-addons-EW-image-overlay .oxi-addons-EW-image-overlay-main .oxi-addons-EW-image-overlay-heading{
            font-size: ' . $styledata[91] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 95) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image .oxi-addons-EW-image-overlay .oxi-addons-EW-image-overlay-main .oxi-addons-EW-image-overlay-details{
            font-size: ' . $styledata[113] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 123) . ';
        }
    }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
