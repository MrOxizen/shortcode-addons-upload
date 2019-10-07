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

class Style_1 extends Templates {

    public function default_render($style, $child, $admin) {
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

        if ($style['sa-fm-body-price-alignment'] == 'left') {
            $position = "sa-fm-temp-1-left";
        } elseif ($style['sa-fm-body-price-alignment'] == 'right') {
            $position = "sa-fm-temp-1-right";
        } else {
            $position = "sa-fm-temp-1-center";
        }


        $all_data = (array_key_exists('sa_icon_effects_data', $style) && is_array($style['sa_icon_effects_data'])) ? $style['sa_icon_effects_data'] : [];

        foreach ($all_data as $key => $data) {
            
            
            

            $heading = $price = $img = '';


            if (array_key_exists('sa_el_insert_price', $data) && $data['sa_el_insert_price'] != '') {
                $price = '<div class="oxi-addonsFM-date ">
                                $ ' . $this->text_render($data['sa_el_insert_price']) . '
                            </div> ';
            }
            if (array_key_exists('sa_el_insert_food_name', $data) && $data['sa_el_insert_food_name'] != '') {
                $heading = '<div class="oxi-addonsFM-heading">
                                ' . $this->text_render($data['sa_el_insert_food_name']) . '
                            </div>';
            }
            if ($this->media_render('sa_el_food_box_image', $data) != '') {
                $img = '<div class="oxi-addonsFM-image"  style="background: url(' . $this->media_render('sa_el_food_box_image', $data) . '); background-size: cover;">
                            <div class="oxi-addonsFM-image-body" >
                                <div class="oxi-addonsFM-image-outer">
                                    <div class="oxi-addonsFM-image-price  ' . $position . '">
                                        <div class="oxi-addonsFM-image-price-table-cell">
                                            ' . $price . '
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
            }

            echo '<div class="' . $this->column_render('sa-ac-column', $style) . ' ' . $admin_class . '">';


            echo '<a ' . $this->url_render('sa_el_price_link', $data) . '>
                  <div class="sa-fm-temp-1 oxi-addonsFM-wrapper  ">
                  <div class="oxi-addons-fm-box-outer   oxi-addons-fm-box-outer-'.$key.'   ' . $class . '">
                    <div class="oxi-addonsFM-row "  ' . $this->animation_render('sa-fm-animation-temp-1', $style) . '>
                        <div class="oxi-addons-fm-box-inner">
                            <div class="oxi-addonsFM-content">
                                ' . $heading . '
                            </div>
                            <div class="sa-image-pb">
                                ' . $img . '
                            </div>
                        </div>
                    </div>
                    </div>
                  </div>
                  </a>';
            echo '</div>';
        }
    }

    public function old_render() {
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
            $heading = $date = '';
            if ($listitemdata[2] != '') {
                $heading = '<div class="oxi-addonsFM-heading">
                               ' . OxiAddonsTextConvert($listitemdata[2]) . '
                            </div>';
            }
            if ($listitemdata[6] != '') {
                $date = '<div class="oxi-addonsFM-date">' . OxiAddonsTextConvert($listitemdata[6]) . '</div>';
            }



            echo '<div class="' . OxiAddonsItemRows($styledata, 203) . '  ">
                <a href="' . OxiAddonsUrlConvert($listitemdata[8]) . '" target="' . $styledata[209] . '">
                  <div class="oxi-addonsFM-wrapper-' . $oxiid . ' oxi-addonsFM-wrapper-' . $oxiid . '-' . $value['id'] . '">
                    <div class="oxi-addonsFM-row" ' . OxiAddonsAnimation($styledata, 61) . '>
                        <div class="oxi-addonsFM-content">
                            ' . $heading . '
                        </div>
                        <div class="oxi-addonsFM-image">
                            <div class="oxi-addonsFM-image-body">
                                <div class="oxi-addonsFM-image-price">
                                    <div class="oxi-addonsFM-image-price-table-cell">
                                        ' . $date . '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </a> ';
            echo '</div>';
            $css .= '.oxi-addonsFM-wrapper-' . $oxiid . '.oxi-addonsFM-wrapper-' . $oxiid . '-' . $value['id'] . ' .oxi-addonsFM-image-body{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: url(\'' . OxiAddonsUrlConvert($listitemdata[4]) . '\');
                    -moz-background-size: 100% 100%;
                    -o-background-size: 100% 100%;
                    background-size: 100% 100%;
                }';
        }
        echo '  </div></div>';
        $css .= '.oxi-addonsFM-wrapper-' . $oxiid . '{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-row{
            width: 100%;
            max-width: ' . $styledata[149] . 'px;
            margin: 0 auto;
            Background: ' . $styledata[207] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 55) . '
            overflow: hidden;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-image{
            width: 100%;
            float: left;
            position: relative;
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-image:after{
            display: block;
            content: "";
            padding-bottom:' . $styledata[173] . '%;
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-image-price{
            position: absolute;
            display:table;
            bottom: 0;
            ' . $styledata[65] . ': 0;
            width: ' . $styledata[67] . 'px;
            height: ' . $styledata[71] . 'px;
            ' . OxiAddonsBGImage($styledata, 75) . '
            border: ' . $styledata[79] . 'px ' . $styledata[80] . ' ' . $styledata[83] . ';
            border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-image-price-table-cell{
            display:table-cell;
            vertical-align: middle;
            text-align:center;
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-date{
            font-size: ' . $styledata[117] . 'px;
            color: ' . $styledata[121] . ';
            ' . OxiAddonsFontSettings($styledata, 123) . '
             margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';
             line-height: 1;
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-content{
            width: 100%;
            float: left;
            ' . OxiAddonsBGImage($styledata, 3) . '
        }
        .oxi-addonsFM-wrapper-' . $oxiid . '  .oxi-addonsFM-heading{
            width: 100%;
            float: left;
            font-size: ' . $styledata[175] . 'px;
            color: ' . $styledata[179] . ';
            ' . OxiAddonsFontSettings($styledata, 181) . '
             padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
        }



         @media only screen and (min-width : 669px) and (max-width : 993px){

           .oxi-addonsFM-wrapper-' . $oxiid . '{
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 40) . ';
               }
               .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-row{
                   border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
               }
               .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-image-price{
                   width: ' . $styledata[68] . 'px;
                   height: ' . $styledata[72] . 'px;
                   border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 86) . ';
                   margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
               }
               .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-date{
                   font-size: ' . $styledata[118] . 'px;
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . ';
               }
               .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-content{
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
               }
               .oxi-addonsFM-wrapper-' . $oxiid . '  .oxi-addonsFM-heading{
                   font-size: ' . $styledata[176] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 188) . ';
               }

         }
         @media only screen and (max-width : 668px){
           .oxi-addonsFM-wrapper-' . $oxiid . '{
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
               }
               .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-row{
                   border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
               }
               .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-image-price{
                   width: ' . $styledata[69] . 'px;
                   height: ' . $styledata[73] . 'px;
                   border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';
                   margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
               }
               .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-date{
                   font-size: ' . $styledata[119] . 'px;
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
               }
               .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-content{
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
               }
               .oxi-addonsFM-wrapper-' . $oxiid . '  .oxi-addonsFM-heading{
                   font-size: ' . $styledata[177] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 189) . ';
               }

         }';

        $jquery = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-addons-content-boxes-' . $oxiid . '-data"));}, 500);';

        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-animation', $jquery);
    }

}
