<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Food_menu\Templates;

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

class Style_3 extends Templates {

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

//        if ($style['sa-fm-body-price-alignment'] == 'left') {
//            $position = "sa-fm-temp-1-left";
//        } elseif ($style['sa-fm-body-price-alignment'] == 'right') {
//            $position = "sa-fm-temp-1-right";
//        } else {
//            $position = "sa-fm-temp-1-center";
//        }


      $all_data = (array_key_exists('sa_icon_effects_data', $style) && is_array($style['sa_icon_effects_data'])) ? $style['sa_icon_effects_data'] : [];

        foreach ($all_data as $key => $data) {

            
            $heading = $price = $category = $info = $image = '';
            
            

            if (array_key_exists('sa_el_insert_food_name', $data) && $data['sa_el_insert_food_name'] != '') {
                $heading = '<div class="oxi-addonsFM-TH-heading">
                                ' . $this->text_render($data['sa_el_insert_food_name']) . '
                            </div>';
            }
            if (array_key_exists('sa_el_insert_price', $data) && $data['sa_el_insert_price'] != '') {
                $price = '<div class="oxi-addonsFM-TH-price">
                               $ ' . $this->text_render($data['sa_el_insert_price']) . '
                            </div>';
            }
            if (array_key_exists('sa_el_insert_category_name', $data) && $data['sa_el_insert_category_name'] != '') {
                $category = '<div class="oxi-addonsFM-TH-category">
                                ' . $this->text_render($data['sa_el_insert_category_name']) . '
                            </div>';
            }
            if (array_key_exists('sa_el_insert_food_info', $data) && $data['sa_el_insert_food_info'] != '') {
                $info = '<div class="oxi-addonsFM-TH-info">
                                ' . $this->text_render($data['sa_el_insert_food_info']) . '
                            </div>';
            }
            if ($this->media_render('sa_el_food_box_image', $data) != '') {
                $image = '<div class="oxi-addonsFM-images">
                                    <img src="' . $this->media_render('sa_el_food_box_image', $data) . '" alt="images" class="oxi-addons-img">
                            </div>';
            }


//            echo '<pre>';
//            print_r($data);
//            echo '</pre>';


            echo '<div class="' . $this->column_render('sa-ac-column', $style) . '  ' . $admin_class . '">';

            echo ' <a ' . $this->url_render('sa_el_price_link', $data) . '>
                  <div class="oa-fm-style-3 " >
                      <div class="oa-fm-3-no-style  oa-fm-3-no-style-'.$key.'    ' . $class . '">
                    <div class="oxi-addonsFM-row"  ' . $this->animation_render('sa-fm-animation-temp-3', $style) . '>
                        <div class="oxi-addonsFM-content-body">
                               ' . $image . '
                                <div class="oxi-addonsFM-text-body">
                                    <div class="oxi-addonsFM-TH-heading-body">
                                        ' . $heading . '
                                        <div class="oxi-addonsFM-CG">
                                            ' . $category . '
                                        </div>
                                        ' . $price . '
                                    </div>
                                    ' . $info . '
                                </div>
                        </div>
                    </div>
                </div>
                </div>
                </a> ';
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

        echo ' <div class="oxi-addons-container">
          <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $listitemdata = explode('||#||', $value['files']);
            $heading = $price = $category = $info = $image = '';
            if ($listitemdata[2] != '') {
                $heading = '<div class="oxi-addonsFM-TH-heading">
                               ' . OxiAddonsTextConvert($listitemdata[2]) . '
                            </div>';
            }
            if ($listitemdata[6] != '') {
                $price = '<div class="oxi-addonsFM-TH-price">' . OxiAddonsTextConvert($listitemdata[6]) . '</div>';
            }
            if ($listitemdata[12] != '') {
                $category = '<div class="oxi-addonsFM-TH-category">' . OxiAddonsTextConvert($listitemdata[12]) . '</div>';
            }
            if ($listitemdata[10] != '') {
                $info = '<div class="oxi-addonsFM-TH-info">' . OxiAddonsTextConvert($listitemdata[10]) . '</div>';
            }
            if ($listitemdata[4] != '') {
                $image = ' <div class="oxi-addonsFM-images">
                                <img class="oxi-addonsFM-img" src="' . OxiAddonsUrlConvert($listitemdata[4]) . '"/>
                            </div>';
            }



            echo '<div class="' . OxiAddonsItemRows($styledata, 203) . '  ">
                <a href="' . OxiAddonsUrlConvert($listitemdata[8]) . '" target="' . $styledata[209] . '">
                  <div class="oxi-addonsFM-wrapper-' . $oxiid . ' oxi-addonsFM-wrapper-' . $oxiid . '-' . $value['id'] . '">
                    <div class="oxi-addonsFM-row" ' . OxiAddonsAnimation($styledata, 61) . '>
                        <div class="oxi-addonsFM-content-body">
                           ' . $image . '
                            <div class="oxi-addonsFM-text-body">
                                <div class="oxi-addonsFM-TH-heading-body">
                                    ' . $heading . '
                                    <div class="oxi-addonsFM-CG">
                                        ' . $category . '
                                    </div>
                                    ' . $price . '
                                </div>
                                ' . $info . '
                            </div>
                        </div>
                       
                    </div>
                </div></a> ';
            echo '</div>';
        }
        echo '  </div></div>';
        $css = '.oxi-addonsFM-wrapper-' . $oxiid . '{
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
            ' . OxiAddonsBoxShadowSanitize($styledata, 55) . ';
            overflow: hidden;
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
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-image{
            flex-grow: 1;
            padding:' . OxiAddonsPaddingMarginSanitize($styledata, 219) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-image .oxi-addonsFM-img{
            width: ' . $styledata[173] . 'px;
            max-width:' . $styledata[173] . 'px;
            height:' . $styledata[173] . 'px;
            border: ' . $styledata[211] . 'px ' . $styledata[212] . ' ' . $styledata[215] . ';
            border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';  
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
            border-bottom: ' . $styledata[289] . 'px ' . $styledata[290] . ' ' . $styledata[293] . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-heading{
            flex-grow: 1;
            font-size: ' . $styledata[175] . 'px;
            color: ' . $styledata[179] . ';
            ' . OxiAddonsFontSettings($styledata, 181) . '
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-CG{
            flex-grow: 1;
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-category{
            display: flex;
            justify-content: center;
            background: ' . $styledata[287] . ';
            font-size: ' . $styledata[235] . 'px;
            color: ' . $styledata[239] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 295) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 241) . ';
            margin-left: 5px;
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-info{
            width: 100%;
            float: left;
            font-size: ' . $styledata[257] . 'px;
            color: ' . $styledata[261] . ';
            ' . OxiAddonsFontSettings($styledata, 263) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 269) . ';
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
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-image{
           width: 100%;
           float: left;
            padding:' . OxiAddonsPaddingMarginSanitize($styledata, 220) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-image .oxi-addonsFM-img{
            border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 86) . ';
           
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
            content: "";
            width: 100%;
            float: left;
            border: none;
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-heading{
            width: 100%;
            float: left;
            font-size: ' . $styledata[176] . 'px;
            text-align: center;
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-CG{
            width: 100%;
            float: left;
            text-align: center;
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-category{
            display: inline-block;
            font-size: ' . $styledata[236] . 'px;;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 296) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 241) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-info{
            font-size: ' . $styledata[258] . 'px;
            color: ' . $styledata[262] . ';
            text-align: center;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 270) . ';
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
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-image{
           width: 100%;
           float: left;
            padding:' . OxiAddonsPaddingMarginSanitize($styledata, 221) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-image .oxi-addonsFM-img{
            border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';
           
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
            content: "";
            width: 100%;
            float: left;
            border: none;
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-heading{
            width: 100%;
            float: left;
            font-size: ' . $styledata[177] . 'px;
            text-align: center;
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-CG{
            width: 100%;
            float: left;
            text-align: center;
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-category{
            display: inline-block;
            font-size: ' . $styledata[237] . 'px;;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 297) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 242) . ';
        }
        .oxi-addonsFM-wrapper-' . $oxiid . ' .oxi-addonsFM-TH-info{
            font-size: ' . $styledata[259] . 'px;
            color: ' . $styledata[263] . ';
            text-align: center;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 271) . ';
        }
          

         }';

        $jquery = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-addons-content-boxes-' . $oxiid . '-data"));}, 500);';

        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-animation', $jquery);
    }

}
