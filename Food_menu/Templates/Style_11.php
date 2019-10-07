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

class Style_11 extends Templates {

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

        if ($style['oa_sa_fm_price_text_align'] == 'left') {
            $position = "sa-fm-temp-1-left";
        } elseif ($style['oa_sa_fm_price_text_align'] == 'right') {
            $position = "sa-fm-temp-1-right";
        } else {
            $position = "sa-fm-temp-1-center";
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
            
            
            
            
            $heading = $descriptions = $price = $img = '';


            if (array_key_exists('sa_el_insert_food_heading', $data) && $data['sa_el_insert_food_heading'] != '') {
                $heading = '<div class="oxi-addons-box-food-heading">
                                ' . $this->text_render($data['sa_el_insert_food_heading']) . '
                            </div>';
            }
            if (array_key_exists('sa_el_insert_food_descriptions', $data) && $data['sa_el_insert_food_descriptions'] != '') {
                $descriptions = '<div class="oxi-addons-box-food-desc">
                                ' . $this->text_render($data['sa_el_insert_food_descriptions']) . '
                         </div>';
            }
            if (array_key_exists('sa_el_insert_food_price', $data) && $data['sa_el_insert_food_price'] != '') {
                $price = '<div class="sa-foodmenu-price-outer">
                            <div class="oxi-addons-foodMenu-price ' . $position . '">
                                $' . $this->text_render($data['sa_el_insert_food_price']) . '
                            </div>
                          </div>';
            }
            if ($this->media_render('sa_el_food_box_image', $data) != '') {
                $img = '<div class="oxi-addons-box-food-img-area-outer">
                            <div class="oxi-addons-box-food-img-area"  style="background: url(' . $this->media_render('sa_el_food_box_image', $data) . ');
                            background-size: cover;">
                                ' . $price . '
                            </div>
                        </div>';
            }



            echo '<div class=" ' . $this->column_render('sa-ac-column', $style) . ' ">';

            echo ' <div class="sa_fm_template_11  ' . $class . '" ' . $this->animation_render('sa-fm-box-animation-temp-10', $style) . '>
                            <div class="sa_fm_box_outer sa_fm_box_outer_' . $key . ' ">
                                <div class="oxi-addons-box-main">
                                    <div class="oxi-addons-box-food-content-area">
                                        ' . $heading . '
                                        ' . $descriptions . '
                                    </div>
                                        ' . $img . '
                                </div>
                            </div>
                        </div>';



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
        echo '

    <div class="oxi-addons-container">
                <div class="oxi-addons-row">';

        foreach ($listdata as $value) {
            $listfile = explode('||#||', $value['files']);

            if ($listfile[3] != '') {
                $heading = '
                        <div class="oxi-addons-box-food-heading">
                            ' . OxiAddonsTextConvert($listfile[3]) . '
                        </div>
                     ';
            }
            if ($listfile[5] != '') {
                $descriptions = '
                        <div class="oxi-addons-box-food-desc">
                            ' . OxiAddonsTextConvert($listfile[5]) . '
                        </div>
                     ';
            }
            if ($listfile[1] != '') {
                $img = '
                        <div class="oxi-addons-box-food-img-area-outer">
                            <div class="oxi-addons-box-food-img-area">
                                    
                            </div>
                        </div>
                     ';
            }



            echo '  <div class="oxi-box-wrap-' . $oxiid . '   oxi-addons-bg-img-' . $value['styleid'] . '-' . $value['id'] . '    ' . OxiAddonsItemRows($styledata, 3) . '     ">
                        <div class="oxi-addons-food-box-outer"   ' . OxiAddonsAnimation($styledata, 199) . '>
                            <div class="oxi-addons-box-main">
                                <div class="oxi-addons-box-food-content-area">
                                    ' . $heading . '
                                    ' . $descriptions . '
                                </div>
                                    ' . $img . '
                            </div>
                        </div>';

            echo '</div>';

            $css .= ' .oxi-addons-bg-img-' . $value['styleid'] . '-' . $value['id'] . '   .oxi-addons-box-food-img-area{
                        background: url("' . OxiAddonsUrlConvert($listfile[1]) . '");
                  }';
        }
        echo '</div>
            </div>
            ';

        $css .= '
.oxi-box-wrap-' . $oxiid . ' .oxi-addons-food-box-outer{
            padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 66)) . ' ;
}
.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-main {
            max-width: ' . $styledata[7] . 'px;
            ' . OxiAddonsBGImage($styledata, 203) . '
            border-width: ' . (OxiAddonsPaddingMarginSanitize($styledata, 15)) . ' ;
            border-radius: ' . (OxiAddonsPaddingMarginSanitize($styledata, 31)) . ' ;
            border-style:' . $styledata[47] . ';
            border-color:' . $styledata[48] . ';
            padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 50)) . ' ;
            ' . OxiAddonsBoxShadowSanitize($styledata, 82) . ';
            margin: 0 auto;
            height: auto;
}
.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-food-heading {
            ' . OxiAddonsFontSettings($styledata, 94) . '
            padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 100)) . ' ;
            color:' . $styledata[92] . ';
            font-size:' . $styledata[88] . 'px; 
}
.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-food-desc {
            ' . OxiAddonsFontSettings($styledata, 122) . '
            padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 128)) . ' ;
            color:' . $styledata[120] . ';
            font-size:' . $styledata[116] . 'px; 
}
.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-food-img-area-outer{
            padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 144)) . ' ;
            height: auto;
            width: 100%;
}
.oxi-box-wrap-' . $oxiid . '  .oxi-addons-box-food-img-area{
            height: ' . $styledata[195] . 'px;
            border-width: ' . (OxiAddonsPaddingMarginSanitize($styledata, 160)) . ' ;
            border-radius: ' . (OxiAddonsPaddingMarginSanitize($styledata, 176)) . ' ;
            border-style:' . $styledata[192] . ';
            background-size: cover;
            background-position: center;
            width: 100%;
}

@media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-main {
                        max-width: ' . $styledata[8] . 'px;
            }
            .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-food-heading {
                        font-size:' . $styledata[89] . 'px; 
            }
            .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-food-desc {
                        font-size:' . $styledata[117] . 'px; 
            }
            .oxi-box-wrap-' . $oxiid . '  .oxi-addons-box-food-img-area{
                        height: ' . $styledata[196] . 'px;
            }
}

@media only screen and (max-width : 668px){
            .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-main {
                        max-width: ' . $styledata[9] . 'px;
            }
            .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-food-heading {
                        font-size:' . $styledata[90] . 'px; 
            }
            .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-food-desc {
                        font-size:' . $styledata[118] . 'px; 
            }
            .oxi-box-wrap-' . $oxiid . '  .oxi-addons-box-food-img-area{
                        height: ' . $styledata[197] . 'px;
            }
}

            ';

        $jquery = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-addons-content-boxes-' . $oxiid . '-data"));}, 500);';

        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-animation', $jquery);
    }

}
