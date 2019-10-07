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

class Style_10 extends Templates {

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


            $heading = $item = $price = $button = '';


            if (array_key_exists('sa_el_insert_food_heading', $data) && $data['sa_el_insert_food_heading'] != '') {
                $heading = '<div class="oxi-addons-grid-item">
                                ' . $this->text_render($data['sa_el_insert_food_heading']) . '
                            </div>';
            }
            if (array_key_exists('sa_el_insert_food_info', $data) && $data['sa_el_insert_food_info'] != '') {
                $item = '<div class="oxi-addons-food-name">
                                ' . $this->text_render($data['sa_el_insert_food_info']) . '
                         </div>';
            }
            if (array_key_exists('sa_el_insert_price', $data) && $data['sa_el_insert_price'] != '') {
                $price = '<div class="oxi-addons-price">
                                $' . $this->text_render($data['sa_el_insert_price']) . '
                          </div>';
            }
            if (array_key_exists('sa_el_insert_food_button', $data) && $data['sa_el_insert_food_button'] != '') {
                $button = '<div class="oxi-addons-button">
                            <div class="oxi-addons-btn"    ' . $this->animation_render('sa-fm-button-animation-temp-10', $style) . '>
                                <a ' . $this->url_render('sa_el_button_link', $data) . ' " class="oxi-addons-button-anchor">' . $this->text_render($data['sa_el_insert_food_button']) . '</a>
                            </div>
                          </div>';
            }


//            echo '<pre>';
//            print_r($class);
//            echo '</pre>';


            echo '<div class=" ' . $this->column_render('sa-ac-column', $style) . '   ' . $admin_class . ' ">';

            echo '  <div class="oxi-addons-box-temp-10 margin-auto  ' . $class . '"  ' . $this->animation_render('sa-fm-box-animation-temp-10', $style) . '>
                        <div class="oxi-addons-box-outer oxi-addons-box-outer-' . $key . '" style="background: url(' . $this->media_render('sa_el_food_box_image', $data) . ');
                        background-size: cover;">
                            <div class="oxi-addons-box-sample">
                                <div class="oxi-addons-box-inner">
                                   <div class="oxi-addons-content">
                                  
                                     ' . $heading . ' 
                                     ' . $item . ' 
                                     ' . $price . ' 
                                     ' . $button . ' 
                                    
                                   </div>
                                </div>
                            </div>                       
                        </div>                       
                    </div>
                </div> ';
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
        $href = '';
        $target = '';
        echo '

    <div class="oxi-addons-container">
                <div class="oxi-addons-row">';

        foreach ($listdata as $value) {
            $listfile = explode('||#||', $value['files']);

            if ($listfile[3] != '') {
                $heading = '
                        <div class="oxi-addons-grid-item">
                          ' . OxiAddonsTextConvert($listfile[3]) . '
                        </div>
                     ';
            }
            if ($listfile[5] != '') {
                $item = '
                        <div class="oxi-addons-food-name">
                          ' . OxiAddonsTextConvert($listfile[5]) . '
                        </div>
                     ';
            }
            if ($listfile[7] != '') {
                $price = '
                        <div class="oxi-addons-price">
                          <span>$</span>' . OxiAddonsTextConvert($listfile[7]) . '
                        </div>
                     ';
            }
            if ($listfile[9] != '') {
                $button = '
                        <div class="oxi-addons-button">
                         <div class="oxi-addons-btn"    ' . OxiAddonsAnimation($styledata, 333) . '>
                           <a href=" ' . OxiAddonsTextConvert($listfile[11]) . ' " class="oxi-addons-button-anchor">' . OxiAddonsTextConvert($listfile[9]) . '</a>
                         </div>
                        </div>
                     ';
            }

            echo '  <div class="oxi-box-wrap-' . $oxiid . '   oxi-addons-bg-img-' . $value['styleid'] . '-' . $value['id'] . '       ' . OxiAddonsItemRows($styledata, 337) . '      ' . OxiAddonsAdminDefine($user) . '">
                        <div class="oxi-addons-box "  ' . OxiAddonsAnimation($styledata, 329) . '>
                          <div class="oxi-addons-box-outer">
                            <div class="oxi-addons-box-sample">
                               <div class="oxi-addons-box-inner">
                                  <div class="oxi-addons-content">
                                  
                                    ' . $heading . ' 
                                    ' . $item . ' 
                                    ' . $price . ' 
                                    ' . $button . ' 
                                    
                                  </div>
                               </div>
                            </div>
                          </div>
                        </div> ';

            if ($user == 'admin') {
                echo '  <div class="oxi-addons-admin-absulote">
                        <div class="oxi-addons-admin-absulate-edit">
                            <form method="post"> ' . wp_nonce_field("OxiAddonsListFileEditfood_menudata") . '
                                <input type="hidden" name="oxi-item-id" value="' . $value['id'] . '">
                                <button class="btn btn-primary" type="submit" value="edit" name="OxiAddonsListFileEdit">Edit</button>
                            </form>
                        </div>
                        <div class="oxi-addons-admin-absulate-delete">
                            <form method="post">  ' . wp_nonce_field("OxiAddonsListFileDeletefood_menudata") . '
                                <input type="hidden" name="oxi-item-id" value="' . $value['id'] . '">
                                <button class="btn btn-danger " type="submit" value="delete" name="OxiAddonsListFileDelete">Delete</button>
                            </form>
                        </div>
                    </div>';
            }
            echo '</div>';

            $css .= ' .oxi-addons-bg-img-' . $value['styleid'] . '-' . $value['id'] . '   .oxi-addons-box-outer{
                        background: url("' . OxiAddonsUrlConvert($listfile[1]) . '");
                  }';
        }
        echo '</div>
            </div>
            ';

        $css .= '

 .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box {
            max-width: ' . $styledata[3] . 'px;
            height: ' . $styledata[341] . 'px;
            padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 23)) . ' ;
            margin: 0 auto;
}
.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-outer {
            border-radius: ' . (OxiAddonsPaddingMarginSanitize($styledata, 7)) . ' ;
            border-width: ' . (OxiAddonsPaddingMarginSanitize($styledata, 58)) . ' ;
            border-color: ' . $styledata[56] . ';
            border-style:' . $styledata[55] . ';
            margin: ' . (OxiAddonsPaddingMarginSanitize($styledata, 39)) . ' ;
            ' . OxiAddonsBoxShadowSanitize($styledata, 74) . ';
            background-size: cover;
            background-position: center;
            height: 100%;
            width: 100%;
            position: relative;
}
.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-sample {
            position: absolute;
            height: 100%;
            width: 100%;
}
.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-inner {
            background:' . $styledata[80] . ';
            border-radius: ' . (OxiAddonsPaddingMarginSanitize($styledata, 82)) . ' ;
            border-width: ' . (OxiAddonsPaddingMarginSanitize($styledata, 345)) . ' ;
            border-color: ' . $styledata[99] . ';
            border-style:' . $styledata[98] . ';
            width: 100%;
            height: 100%;
            opacity: 0;
}
.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box:hover .oxi-addons-box-sample {
            padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 105)) . ' ;
}
.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box:hover .oxi-addons-box-inner {
            top: 0px;
            opacity: 1;
}
.oxi-box-wrap-' . $oxiid . ' .oxi-addons-content {
            height: 100%;
            width: 100%;
            display: inline-block;
}
.oxi-box-wrap-' . $oxiid . ' .oxi-addons-grid-item {
	width: auto;
        font-size:' . $styledata[137] . 'px; 
        color:' . $styledata[141] . ';
        ' . OxiAddonsFontSettings($styledata, 143) . '
        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 149)) . ' ;
}
.oxi-box-wrap-' . $oxiid . ' .oxi-addons-food-name {
	width: auto;
        font-size:' . $styledata[165] . 'px;
        color:' . $styledata[169] . ';
        ' . OxiAddonsFontSettings($styledata, 171) . '
        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 177)) . ' ;
}
.oxi-box-wrap-' . $oxiid . ' .oxi-addons-price {
	width: auto;
        font-size:' . $styledata[193] . 'px;
        color:' . $styledata[197] . ';
        ' . OxiAddonsFontSettings($styledata, 199) . '
        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 205)) . ' ;
}
.oxi-box-wrap-' . $oxiid . ' .oxi-addons-btn {
        text-align:' . $styledata[223] . ';
        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 290)) . ' ;
}
.oxi-box-wrap-' . $oxiid . ' .oxi-addons-button-anchor{
        font-size:' . $styledata[225] . 'px; 
        color:' . $styledata[229] . ';
        background:' . $styledata[231] . ';
        ' . OxiAddonsFontSettings($styledata, 268) . '
        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 205)) . ' ;
        border-radius: ' . (OxiAddonsPaddingMarginSanitize($styledata, 252)) . ' ;
        border-width: ' . (OxiAddonsPaddingMarginSanitize($styledata, 233)) . ' ;
        border-color: ' . $styledata[250] . ';
        border-style:' . $styledata[249] . ';
        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 274)) . ' ;
}
.oxi-box-wrap-' . $oxiid . ' .oxi-addons-button-anchor:hover{
        color:' . $styledata[308] . ';
        background:' . $styledata[306] . ';
        border-style:' . $styledata[310] . ';
        border-radius: ' . (OxiAddonsPaddingMarginSanitize($styledata, 313)) . ' ;
        border-color: ' . $styledata[311] . ';
}
    



@media only screen and (min-width : 669px) and (max-width : 993px){
                    .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box {
                                max-width: ' . $styledata[4] . 'px;
                                height: ' . $styledata[342] . 'px;
                    }
                    .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-outer {
                                border-width: ' . (OxiAddonsPaddingMarginSanitize($styledata, 59)) . ' ;
                    }
                    .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-inner {
                                border-width: ' . (OxiAddonsPaddingMarginSanitize($styledata, 346)) . ' ;
                    }
                    .oxi-box-wrap-' . $oxiid . ' .oxi-addons-grid-item {
                                font-size:' . $styledata[138] . 'px; 
                    }
                    .oxi-box-wrap-' . $oxiid . ' .oxi-addons-food-name {
                                font-size:' . $styledata[166] . 'px;
                    }
                    .oxi-box-wrap-' . $oxiid . ' .oxi-addons-price {
                                font-size:' . $styledata[194] . 'px;
                    }
                    .oxi-box-wrap-' . $oxiid . ' .oxi-addons-button-anchor{
                                font-size:' . $styledata[226] . 'px; 
                    }
}

@media only screen and (max-width : 668px){
                    .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box {
                                max-width: ' . $styledata[5] . 'px;
                                height: ' . $styledata[343] . 'px;
                    }
                    .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-outer {
                                border-width: ' . (OxiAddonsPaddingMarginSanitize($styledata, 60)) . ' ;
                    }
                    .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-inner {
                                border-width: ' . (OxiAddonsPaddingMarginSanitize($styledata, 347)) . ' ;
                    }
                    .oxi-box-wrap-' . $oxiid . ' .oxi-addons-grid-item {
                                font-size:' . $styledata[139] . 'px; 
                    }
                    .oxi-box-wrap-' . $oxiid . ' .oxi-addons-food-name {
                                font-size:' . $styledata[167] . 'px;
                    }
                    .oxi-box-wrap-' . $oxiid . ' .oxi-addons-price {
                                font-size:' . $styledata[195] . 'px;
                    }
                    .oxi-box-wrap-' . $oxiid . ' .oxi-addons-button-anchor{
                                font-size:' . $styledata[227] . 'px; 
                    }
}


            ';

        $jquery = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-addons-content-boxes-' . $oxiid . '-data"));}, 500);';

        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-animation', $jquery);
    }

}
