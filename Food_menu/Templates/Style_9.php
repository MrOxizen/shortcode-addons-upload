<?php

namespace SHORTCODE_ADDONS_UPLOAD\Food_menu\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/*
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 * 
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_9 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $class = '';
        if ($style['sa-max-w-condition'] == 'custom') {
            $class = 'sa-max-w-auto';
        } elseif ($style['sa-max-w-condition'] == 'dynamic') {
            $class = '';
        }

        if ($admin == 'admin') {
            $admin_class = 'oxi-addons-admin-edit-list';
        } else {
            $admin_class = '';
        }
        echo ' <div class="oa_fm_style_9">
                    <div class="oxi-addonsFM-row" ' . $this->animation_render('sa-fm-box-animation-temp-6', $style) . '>
                        <div class="oxi-addonsFM-content-body">
                            <div class="oxi-addonsFM-text-body">';

        $all_data = (array_key_exists('sa_icon_effects_data', $style) && is_array($style['sa_icon_effects_data'])) ? $style['sa_icon_effects_data'] : [];

        foreach ($all_data as $key => $data) {
            $heading = $price = '';
            if (array_key_exists('sa_el_insert_food_name', $data) && $data['sa_el_insert_food_name'] != '') {
                $heading = '<div class="oxi-addonsFM-TH-heading">
                                ' . $this->text_render($data['sa_el_insert_food_name']) . '
                            </div>';
            }
            if (array_key_exists('sa_el_insert_price', $data) && $data['sa_el_insert_price'] != '') {
                $price = '<div class="oxi-addonsFM-TH-price">
                               $' . $this->text_render($data['sa_el_insert_price']) . '
                            </div>';
            }
            echo '<div class=" ' . $this->column_render('sa-ac-column', $style) . '   ' . $admin_class . ' ">';
            echo '<a ' . $this->url_render('sa_el_price_link', $data) . '>
                        <div class="oxi-addonsFM-TH-heading-body oxi-addonsFM-TH-heading-body-' . $key . '   ' . $class . ' ">
                            ' . $heading . '
                            ' . $price . '
                        </div>
                    </a> ';
            echo '</div>';
        }
        echo '</div>
            </div>
          </div> 
        </div>';
    }

    public function old_render()
    {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $stylename = $styledata['style_name'];
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        echo '<div class="oxi-addons-container">
          <div class="oxi-addons-row">
                <div class="oxi-addonsFM-wrapper-' . $oxiid . '">
                    <div class="oxi-addonsFM-row" ' . OxiAddonsAnimation($styledata, 61) . '>
                        <div class="oxi-addonsFM-content-body">
                            <div class="oxi-addonsFM-text-body">';
        foreach ($listdata as $value) {
            $listitemdata = explode('||#||', $value['files']);
            $heading = $price = '';
            if ($listitemdata[2] != '') {
                $heading = '<div class="oxi-addonsFM-TH-heading">
                                                       ' . OxiAddonsTextConvert($listitemdata[2]) . '
                                                    </div>';
            }
            if ($listitemdata[4] != '') {
                $price = '<div class="oxi-addonsFM-TH-price">' . OxiAddonsTextConvert($listitemdata[4]) . '</div>';
            }

            echo '<div class="' . OxiAddonsItemRows($styledata, 203) . ' ">
                    <a href="' . OxiAddonsUrlConvert($listitemdata[6]) . '" target="' . $styledata[209] . '">
                        <div class="oxi-addonsFM-TH-heading-body">
                            ' . $heading . '
                            ' . $price . '
                        </div>
                    </a> ';
            echo '</div>';
        }
        echo '</div>
            </div>
          </div> 
        </div>';
        echo ' </div>
    </div>';

        $css = '.oxi-addonsFM-wrapper-' . $oxiid . '{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-row{
            width: 100%;
            max-width: ' . $styledata[149] . 'px;
            margin: 0 auto;
            overflow: auto;
            ' . OxiAddonsBGImage($styledata, 241) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 55) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-content-body{
            width: 100%;
            float: left;
            display: flex;
            border: ' . $styledata[79] . 'px ' . $styledata[80] . ' ' . $styledata[83] . ';
            ' . OxiAddonsBGImage($styledata, 75) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-text-body{
            flex-grow: 10;
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-heading-body{
            width: 100%;
            float: left;
            display: flex;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-price{
            flex-grow: 60;
            font-size: ' . $styledata[117] . 'px;
            color: ' . $styledata[121] . ';
            ' . OxiAddonsFontSettings($styledata, 123) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-price:after{
            content: "";
            width: 100%;
            float: left;
            border-bottom: ' . $styledata[235] . 'px ' . $styledata[236] . ' ' . $styledata[239] . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-heading{
            flex-grow: 1;
            font-size: ' . $styledata[175] . 'px;
            color: ' . $styledata[179] . ';
            ' . OxiAddonsFontSettings($styledata, 181) . ';
        }



    @media only screen and (min-width : 669px) and (max-width : 993px){
        .oxi-addonsFM-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 40) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-row{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-content-body{
            flex-direction: column;
            text-align:center;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-text-body{
           width: 100%;
           float: left;
        }
        .oxi-addonsFM-TH-heading-body{
            flex-direction: column;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 188) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-price{
            width: 100%;
            float: left;
            text-align: center;
            font-size: ' . $styledata[118] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-price:after{
            border:none
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-price:before{
            content: "";
            width: 100%;
            float: left;
            border-bottom: ' . $styledata[235] . 'px ' . $styledata[236] . ' ' . $styledata[239] . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-heading{
            width: 100%;
            float: left;
            font-size: ' . $styledata[176] . 'px;
            text-align: center;
        }
           

         }
         @media only screen and (max-width : 668px){
          .oxi-addonsFM-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-row{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-content-body{
            flex-direction: column;
            text-align:center;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-text-body{
           width: 100%;
           float: left;
        }
        .oxi-addonsFM-TH-heading-body{
            flex-direction: column;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 189) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-price{
            width: 100%;
            float: left;
            text-align: center;
            font-size: ' . $styledata[119] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-price:after{
            border:none
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-price:before{
            content: "";
            width: 100%;
            float: left;
            border-bottom: ' . $styledata[235] . 'px ' . $styledata[236] . ' ' . $styledata[239] . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-heading{
            width: 100%;
            float: left;
            font-size: ' . $styledata[177] . 'px;
            text-align: center;
        }
          

         }';

        $jquery = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-addons-content-boxes-' . $oxiid . '-data"));}, 500);';

        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-animation', $jquery);
    }
}
