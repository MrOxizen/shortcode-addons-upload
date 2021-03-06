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

class Style_7 extends Templates
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

        $bg_color = $style['sa-fm-box-bag-outside-color'];
        $all_data = (array_key_exists('sa_icon_effects_data', $style) && is_array($style['sa_icon_effects_data'])) ? $style['sa_icon_effects_data'] : [];

        foreach ($all_data as $key => $data) {

            $heading = $price = $rating = $info = $styleselect = '';

            if (array_key_exists('sa_el_insert_food_name', $data) && $data['sa_el_insert_food_name'] != '') {
                $heading = '<div class="oxi-addonsFM-SV-heading">
                                ' . $this->text_render($data['sa_el_insert_food_name']) . '
                            </div>';
            }
            if (array_key_exists('sa_el_insert_price', $data) && $data['sa_el_insert_price'] != '') {
                $price = '<div class="oxi-addonsFM-SV-price">
                            $' . $this->text_render($data['sa_el_insert_price']) . '
                          </div>';
            }
            if (array_key_exists('sa_el_insert_rating_name-size', $data) && $data['sa_el_insert_rating_name-size'] != '') {
                $rating = '<div class="oxi-addonsFM-SV-rating">
                                ' . $this->public_rating_render($data['sa_el_insert_rating_name-size']) . '  
                           </div>';
            }
            if (array_key_exists('sa_el_insert_food_info', $data) && $data['sa_el_insert_food_info'] != '') {
                $info = '<div class="oxi-addonsFM-SV-info">
                                ' . $this->text_render($data['sa_el_insert_food_info']) . '
                         </div>';
            }
            if ($this->media_render('sa_el_food_box_image', $data) != '') {
                $image = '<div class="oxi-addonsFM-SV-image"  style="background: url(' . $this->media_render('sa_el_food_box_image', $data) . ');
                        background-size: cover;">
                          </div>';
            }
            if ($style['sa-fm-tem-7-background-condition'] == 'manual') {
                $styleselect = '<div class="oxi-addonsFM-SV-content-body">
                                <div class="oxi-addonsFM-SV-C-sape" >
                                    ' . $heading . '
                                    ' . $price . '
                                    ' . $rating . '
                                    ' . $info . '
                                </div>
                                <style>
                                    .oxi-addonsFM-SV-C-sape:after{
                                        background: red;
                                    }
                                </style>
                            </div>';
            } elseif ($style['sa-fm-tem-7-background-condition'] == 'auto') {
                $styleselect = '<div class="oxi-addonsFM-SV-content-body">
                                <div class="oxi-addonsFM-SV-B-T-I"></div>
                                    ' . $heading . '
                                    ' . $price . '
                                    ' . $rating . '
                                    ' . $info . '
                                </div>';
            }
            echo '<div class=" ' . $this->column_render('sa-ac-column', $style) . '   ' . $admin_class . ' ">';

            echo '<a ' . $this->url_render('sa_el_price_link', $data) . '>
                  <div class="oxiAddons_foodMenu_temPlate_7  oxiAddons_foodMenu_temPlate_7_' . $key . '    oxi-addonsFM-SV-wrapper "  ' . $this->animation_render('sa-fm-animation-temp-3', $style) . '>
                        ' . $image . '
                    <div class="oxi-addonsFM-SV-row">
                        ' . $styleselect . '
                    </div>
                </div>
                </a> ';
            echo '</div>';
        }
    }

    public function public_rating_render($data = '')
    {
        $ratefull = 'fas fa-star';
        $ratehalf = 'fas fa-star-half-alt';
        $rateO = 'far fa-star';

        if ($data > 4.5) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull);
        } elseif ($data <= 4.5 && $data > 4) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratehalf);
        } elseif ($data <= 4 && $data > 3.5) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($rateO);
        } elseif ($data <= 3.5 && $data > 3) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratehalf) . $this->font_awesome_render($rateO);
        } elseif ($data <= 3 && $data > 2.5) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
        } elseif ($data <= 2.5 && $data > 2) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratehalf) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
        } elseif ($data <= 2 && $data > 1.5) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
        } elseif ($data <= 1.5 && $data > 1) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratehalf) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
        } elseif ($data <= 1) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
        }
    }

    public function old_render()
    {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $stylename = $styledata['style_name'];
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);

        $css = '';
        echo ' <div class="oxi-addons-container">
          <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $listitemdata = explode('||#||', $value['files']);
            $heading = $price = $rating = $info = $styleselect = '';
            if ($listitemdata[2] != '') {
                $heading = '<div class="oxi-addonsFM-SV-heading">
                               ' . OxiAddonsTextConvert($listitemdata[2]) . '
                            </div>';
            }
            if ($listitemdata[6] != '') {
                $price = '<div class="oxi-addonsFM-SV-price">' . OxiAddonsTextConvert($listitemdata[6]) . '</div>';
            }
            if ($listitemdata[12] != '') {
                $rating = '<div class="oxi-addonsFM-SV-rating">' . OxiAddonsPublicRate($listitemdata[12]) . '</div>';
            }
            if ($listitemdata[10] != '') {
                $info = '<div class="oxi-addonsFM-SV-info">' . OxiAddonsTextConvert($listitemdata[10]) . '</div>';
            }
            if ($styledata[215] == 'styleone') {
                $styleselect = '<div class="oxi-addonsFM-SV-content-body">
                                <div class="oxi-addonsFM-SV-C-sape">
                                    ' . $heading . '
                                    ' . $price . '
                                    ' . $rating . '
                                    ' . $info . '
                                </div>
                            </div>';
            }
            if ($styledata[215] == 'styletwo') {
                $styleselect = '<div class="oxi-addonsFM-SV-content-body">
                                <div class="oxi-addonsFM-SV-B-T-I"></div>
                                ' . $heading . '
                                ' . $price . '
                                ' . $rating . '
                                ' . $info . '
                            </div>';
            }


            echo '<div class="' . OxiAddonsItemRows($styledata, 203) . '  ">
                <a href="' . OxiAddonsUrlConvert($listitemdata[8]) . '" target="' . $styledata[209] . '">
                  <div class="oxi-addonsFM-SV-wrapper-' . $oxiid . ' oxi-addonsFM-SV-wrapper-' . $oxiid . '-' . $value['id'] . ' "  ' . OxiAddonsAnimation($styledata, 61) . '>
                        <div class="oxi-addonsFM-SV-image">
                        </div>
                    <div class="oxi-addonsFM-SV-row">
                        ' . $styleselect . '
                    </div>
                </div>
                </a> ';
            echo '</div>';
            $css .= '.oxi-addonsFM-SV-wrapper-' . $oxiid . '.oxi-addonsFM-SV-wrapper-' . $oxiid . '-' . $value['id'] . '  .oxi-addonsFM-SV-image{
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: url(\'' . OxiAddonsUrlConvert($listitemdata[4]) . '\');
                    -moz-background-size: 100% 100%;
                    -o-background-size: 100% 100%;
                    background-size: 100% 100%;
                    ' . OxiAddonsBoxShadowSanitize($styledata, 303) . ';
                }';
        }
        echo '  </div></div>';
        if ($styledata[215] == 'styleone') {
            $backgroundcol = OxiAddonsBGImage($styledata, 65);
        }
        if ($styledata[215] == 'styletwo') {
            $backgroundcol = 'background:#fff';
        }
        $css .= '.oxi-addonsFM-SV-wrapper-' . $oxiid . '{
            width: 100%;
            max-width: ' . $styledata[149] . 'px;
            margin: 0 auto;
            overflow: auto;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-row{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-image:after{
            display: block;
            content: "";
            padding-bottom:' . $styledata[173] . '%;
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-content-body{
            width: 100%;
            float: left;
            position: relative;
            border: ' . $styledata[79] . 'px ' . $styledata[80] . ' ' . $styledata[83] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 55) . '
            ' . $backgroundcol . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 287) . '; 
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-C-sape:before,.oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-C-sape:after{
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: -60px;
            height: 50px;
            background: radial-gradient(closest-side,' . $styledata[65] . ',' . $styledata[65] . ' 50%,transparent 50%);
            background-size: 40px 50px;
            background-position: 30px 24px;
            background-repeat: repeat-x;
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-C-sape:after{
            background: radial-gradient(closest-side,transparent,transparent 50%, ' . $styledata[65] . ' 50%);
            background-size: 40px 50px;
            background-position: 10px -25px;
            top: -13px;
            background-repeat: repeat-x;
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-B-T-I{
            position: absolute;
            background: url(https://www.oxilab.org/wp-content/uploads/2019/02/arrow.png) repeat;
            width: 100%;
            height: 12px;
            top: -10px;
            left: 0;
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-price{
            width: 100%;
            float: left;
            font-size: ' . $styledata[117] . 'px;
            color: ' . $styledata[121] . ';
            ' . OxiAddonsFontSettings($styledata, 123) . '
             margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';
             line-height: 1;
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-heading{
            width: 100%;
            float: left;
            font-size: ' . $styledata[175] . 'px;
            color: ' . $styledata[179] . ';
            ' . OxiAddonsFontSettings($styledata, 181) . '
             padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-rating{
            width: 100%;
            float: left;
            font-size: ' . $styledata[235] . 'px;
            color: ' . $styledata[239] . ';
            text-align: ' . $styledata[285] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 241) . ';
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-info{
            width: 100%;
            float: left;
            font-size: ' . $styledata[257] . 'px;
            color: ' . $styledata[261] . ';
            ' . OxiAddonsFontSettings($styledata, 263) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 269) . ';
        }



         @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addonsFM-SV-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 40) . ';
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-row{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-content-body{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-price{
            font-size: ' . $styledata[118] . 'px;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . ';
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-heading{
            font-size: ' . $styledata[176] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 188) . ';
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-rating{
            font-size: ' . $styledata[236] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 242) . ';
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-info{
            font-size: ' . $styledata[258] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 270) . ';
        }

           

         }
         @media only screen and (max-width : 668px){
          .oxi-addonsFM-SV-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-row{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-content-body{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-price{
            font-size: ' . $styledata[119] . 'px;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-heading{
            font-size: ' . $styledata[177] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 189) . ';
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-rating{
            font-size: ' . $styledata[237] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 243) . ';
        }
        .oxi-addonsFM-SV-wrapper-' . $oxiid . ' .oxi-addonsFM-SV-info{
            font-size: ' . $styledata[259] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 271) . ';
        }

         }';

        $jquery = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-addons-content-boxes-' . $oxiid . '-data"));}, 500);';

        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-animation', $jquery);
    }
}
