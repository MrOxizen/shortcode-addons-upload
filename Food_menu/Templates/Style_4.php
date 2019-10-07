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

class Style_4 extends Templates {

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
        
//            echo '<pre>';
//            print_r($style);
//            echo '</pre>';
        

//        if ($style['sa-fm-body-price-alignment'] == 'left') {
//            $position = "sa-fm-temp-1-left";
//        } elseif ($style['sa-fm-body-price-alignment'] == 'right') {
//            $position = "sa-fm-temp-1-right";
//        } else {
//            $position = "sa-fm-temp-1-center";
//        }


         $all_data = (array_key_exists('sa_icon_effects_data', $style) && is_array($style['sa_icon_effects_data'])) ? $style['sa_icon_effects_data'] : [];

        foreach ($all_data as $key => $data) {


            
            $heading = $image = $price = $rating = $info = '';



            if (array_key_exists('sa_el_insert_food_name', $data) && $data['sa_el_insert_food_name'] != '') {
                $heading = '<div class="oxi-addonsFM-FO-heading">
                                ' . $this->text_render($data['sa_el_insert_food_name']) . '
                            </div>';
            }
            if (array_key_exists('sa_el_insert_price', $data) && $data['sa_el_insert_price'] != '') {
                $price = '<div class="oxi-addonsFM-FO-price">
                               $ ' . $this->text_render($data['sa_el_insert_price']) . '
                            </div>';
            }
            if (array_key_exists('sa_el_insert_rating_name-size', $data) && $data['sa_el_insert_rating_name-size'] != '') {
                $rating = '<div class="oxi-addonsFM-FO-rating">
                                ' . $this->public_rating_render($data['sa_el_insert_rating_name-size']) . '  
                            </div>';
            }
            if (array_key_exists('sa_el_insert_food_info', $data) && $data['sa_el_insert_food_info'] != '') {
                $info = '<div class="oxi-addonsFM-FO-info">
                                ' . $this->text_render($data['sa_el_insert_food_info']) . '
                            </div>';
            }
            if ($this->media_render('sa_el_food_box_image', $data) != '') {
                $image = '<div class="oxi-addonsFM-FO-image">
                                    <img src="' . $this->media_render('sa_el_food_box_image', $data) . '" alt="images" class="oxi-addons-img">
                            </div>';
            }


//            echo '<pre>';
//            print_r($data);
//            echo '</pre>';


            echo '<div class="' . $this->column_render('sa-ac-column', $style) . '   ' . $admin_class . '">';
            
            echo '<a ' . $this->url_render('sa_el_price_link', $data) . '>
                  <div class="oa-fm-content-4 ">
                      <div class="oa-fm-inner-side-div   oa-fm-inner-side-div-'.$key.'    ' . $class . '">
                    <div class="oxi-addonsFM-FO-row"  ' . $this->animation_render('sa-fm-animation-temp-3', $style) . '>
                        <div class="oxi-addonsFM-FO-content-body">
                            ' . $image . '
                            <div class="oxi-addonsFM-FO-text-body">
                                <div class="oxi-addonsFM-FO-heading-body">
                                    ' . $heading . '
                                    ' . $price . '
                                </div>
                                ' . $rating . '
                                ' . $info . '
                            </div>
                        </div>
                        </div>
                    </div>
                </div></a> ';
            echo '</div>';
        }
    }
        
        
        public function public_rating_render($data = '') {
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
            $heading = $imagebody = $price = $category = $info = '';
            if ($listitemdata[2] != '') {
                $heading = '<div class="oxi-addonsFM-FO-heading">
                               ' . OxiAddonsTextConvert($listitemdata[2]) . '
                            </div>';
            }
            if ($listitemdata[4] != '') {
                $imagebody = '<div class="oxi-addonsFM-FO-image">
                                <img src="' . OxiAddonsUrlConvert($listitemdata[4]) . '"/>
                            </div>';
            }
            if ($listitemdata[6] != '') {
                $price = '<div class="oxi-addonsFM-FO-price">' . OxiAddonsTextConvert($listitemdata[6]) . '</div>';
            }
            if ($listitemdata[12] != '') {
                $category = '<div class="oxi-addonsFM-FO-category">' . OxiAddonsPublicRate($listitemdata[12]) . '</div>';
            }
            if ($listitemdata[10] != '') {
                $info = '<div class="oxi-addonsFM-FO-info">' . OxiAddonsTextConvert($listitemdata[10]) . '</div>';
            }



            echo '<div class="' . OxiAddonsItemRows($styledata, 203) . '  ">
                <a href="' . OxiAddonsUrlConvert($listitemdata[8]) . '" target="' . $styledata[209] . '">
                  <div class="oxi-addonsFM-wrapper-FO-' . $oxiid . ' oxi-addonsFM-wrapper-FO-' . $oxiid . '-' . $value['id'] . '">
                    <div class="oxi-addonsFM-FO-row" ' . OxiAddonsAnimation($styledata, 61) . '>
                        <div class="oxi-addonsFM-FO-content-body">
                            ' . $imagebody . '
                            <div class="oxi-addonsFM-FO-text-body">
                                <div class="oxi-addonsFM-FO-heading-body">
                                    ' . $heading . '
                                    ' . $price . '
                                </div>
                                ' . $category . '
                                ' . $info . '
                            </div>
                        </div>
                    </div>
                </div></a> ';
            echo '</div>';
        }
        echo '  </div></div>';
        $css = '.oxi-addonsFM-wrapper-FO-' . $oxiid . '{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-row{
            width: 100%;
            max-width: ' . $styledata[149] . 'px;
            margin: 0 auto;
            Background: ' . $styledata[207] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 55) . '
            overflow: auto;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-content-body{
            width: 100%;
            float: left;
            display: flex;
        }
        .oxi-addonsFM-FO-text-body{
            flex-grow: 10;
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-image{
            flex-grow: 1;
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-image img{
            width:' . $styledata[173] . 'px;
            max-width:' . $styledata[173] . 'px;
            height:' . $styledata[173] . 'px;
            border: ' . $styledata[211] . 'px ' . $styledata[212] . ' ' . $styledata[215] . ';
            border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';
            margin:' . OxiAddonsPaddingMarginSanitize($styledata, 219) . ';
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-heading-body{
            width: 100%;
            float: left;
            display: flex;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-price{
            flex-grow: 60;
            font-size: ' . $styledata[117] . 'px;
            color: ' . $styledata[121] . ';
            ' . OxiAddonsFontSettings($styledata, 123) . '
             margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-heading{
            flex-grow: 1;
            font-size: ' . $styledata[175] . 'px;
            color: ' . $styledata[179] . ';
            ' . OxiAddonsFontSettings($styledata, 181) . '
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-category{
            width: 100%;
            float: left;
            font-size: ' . $styledata[235] . 'px;
            color: ' . $styledata[239] . ';
            text-align: ' . $styledata[285] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 241) . ';
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-info{
            width: 100%;
            float: left;
            font-size: ' . $styledata[257] . 'px;
            color: ' . $styledata[261] . ';
            ' . OxiAddonsFontSettings($styledata, 263) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 269) . ';
        }



         @media only screen and (min-width : 669px) and (max-width : 993px){
         .oxi-addonsFM-wrapper-FO-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 40) . ';
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-row{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-content-body{
            flex-direction:column;
            width:100%
            float:left;
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-image{
            text-align: center;
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-image img{
            text-align:center;
            border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 86) . ';
            margin:' . OxiAddonsPaddingMarginSanitize($styledata, 220) . ';
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-heading-body{
            flex-direction: column;
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 188) . ';
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-price{
            font-size: ' . $styledata[118] . 'px;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . ';
            text-align:center;
            width: 100%;
            float: left;
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-heading{
            font-size: ' . $styledata[176] . 'px;
            text-align:center;
            width: 100%;
            float: left;
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-category{
            text-align:center;
            width: 100%;
            float: left;
            font-size: ' . $styledata[236] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 242) . ';
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-info{
            text-align:center;
            width: 100%;
            float: left;
            font-size: ' . $styledata[258] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 270) . ';
        }

           

         }
         @media only screen and (max-width : 668px){
            .oxi-addonsFM-wrapper-FO-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-row{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-content-body{
            flex-direction:column;
            width:100%
            float:left;
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-image{
            text-align: center;
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-image img{
            text-align:center;
            border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';
            margin:' . OxiAddonsPaddingMarginSanitize($styledata, 221) . ';
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-heading-body{
            flex-direction: column;
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 189) . ';
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-price{
            font-size: ' . $styledata[119] . 'px;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
            text-align:center;
            width: 100%;
            float: left;
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-heading{
            font-size: ' . $styledata[177] . 'px;
            text-align:center;
            width: 100%;
            float: left;
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-category{
            text-align:center;
            width: 100%;
            float: left;
            font-size: ' . $styledata[237] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 243) . ';
        }
        .oxi-addonsFM-wrapper-FO-' . $oxiid . ' .oxi-addonsFM-FO-info{
            text-align:center;
            width: 100%;
            float: left;
            font-size: ' . $styledata[259] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 271) . ';
        }
        }';

        $jquery = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-addons-content-boxes-' . $oxiid . '-data"));}, 500);';

        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-animation', $jquery);
    }

}
