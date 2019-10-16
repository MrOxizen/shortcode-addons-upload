<?php

namespace SHORTCODE_ADDONS_UPLOAD\Category\Templates;

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

class Style_1 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $styledata = $this->style;
        $oxiid = $this->oxiid;
        $all_cat_data = (array_key_exists('sa_category_add_data', $styledata) && is_array($styledata['sa_category_add_data'])) ? $styledata['sa_category_add_data'] : [];
        $all_data = (array_key_exists('sa_category_data', $styledata) && is_array($styledata['sa_category_data'])) ? $styledata['sa_category_data'] : [];
        $active_default = '';
        if (array_key_exists('sa_category_parent_cat', $styledata) && $styledata['sa_category_parent_cat'] != '') :
            $active_default = $styledata['sa_category_parent_cat'];
        endif;
        echo '<div class="sa_addons_category_container_style_1 ">
           <div class="sa_addons_category_menu sa_addons_category_menu_' . $oxiid . ' ">';
        foreach ($all_cat_data as $value) :
            if ($active_default == $value['sa_category_item_text']) :
                $cat = '*';
                $class = 'sa_active';
            else :
                $class = '';
                $cat = '.' . $this->CatStringToClassReplacce($value['sa_category_item_text'], $oxiid) . '';
            endif;
            echo '<div class="sa_addons_category_menu_item ' . $styledata['sa_category_menu_w_type'] . '  ' . $class . ' " sa_ref="' . $cat . '">
                    ' . $value['sa_category_item_text'] . '
                </div>
        ';
        endforeach;
        echo '</div>';
        echo '<div class="sa_addons_category_style_1  sa_addons_category_' . $oxiid . '">
                <div class="sa_addons_category_data_style_1  sa_addons_category_data_' . $oxiid . '">';

        foreach ($all_data as $value) :
            $shortcode = $image = $text = '';
            if ($value['sa_category_type'] == 'sa_category_shortcode') {
                if ($value['sa_category_item_shortcode'] != '') {
                    $shortcode .= $this->text_render($value['sa_category_item_shortcode']);
                }
            } elseif ($value['sa_category_type'] == 'sa_category_img') {
                if ($this->media_render('sa_category_item_img', $value) != '') {
                    $image .= '<img class="sa_addons_category_img" src="' . $this->media_render('sa_category_item_img', $value) . '" >';
                }
            } else {
                $text .= '<div class="sa_addons_category_item_text">
                            ' . $this->text_render($value['sa_category_item_text']) . '
                        </div>';
            }
            $select_cat_data = (array_key_exists('sa_category_select', $value) && is_array($value['sa_category_select'])) ? $value['sa_category_select'] : [];
            $item_cat_list = '';
            foreach ($select_cat_data as $item) :
                $item_cat_list .= $this->CatStringToClassReplacce($item, $oxiid) . ' ';
            endforeach;
            echo '<div class="sa_addons_category_item_show  ' . $item_cat_list . '  ' . $this->column_render('sa_category_col', $styledata) . '">
                        <div class="sa_addons_category_files">
                            ' . $shortcode . '
                            ' . $image . '
                            ' . $text . '
                        </div>
                    </div>
                    ';
        endforeach;
        echo '
            </div>
        </div>';
    }

    public function public_jquery()
    {
        $this->JSHANDLE = 'jquery.isotope.v3.0.2';
        wp_enqueue_script('imagesloaded.pkgd.min', SA_ADDONS_UPLOAD_URL . '/Category/file/imagesloaded.pkgd.min.js', false, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_script('jquery.isotope.v3.0.2', SA_ADDONS_UPLOAD_URL . '/Category/file/jquery.isotope.v3.0.2.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery()
    {
        $jquery = '';
        $oxiid = $this->oxiid;
        $jquery = ' $(".sa_addons_category_data_' . $oxiid . '").imagesLoaded(function(){
                        $(".sa_addons_category_data_' . $oxiid . '").isotope({
                            filter: "*",
                            animationOptions: {
                                duration: 750,
                                easing: "linear",
                                queue: false
                            },
                            layoutMode: "masonry",
                        });
                    });
                    $(".sa_addons_category_menu_' . $oxiid . ' .sa_addons_category_menu_item").on("click", function () {
                        if(!$(this).hasClass("sa_active")){
                            $(".sa_addons_category_menu_' . $oxiid . ' .sa_addons_category_menu_item").removeClass("sa_active");
                            $(this).addClass("sa_active");
                            var selector = jQuery(this).attr("sa_ref");
                            $(".sa_addons_category_data_' . $oxiid . '").isotope({
                                filter: selector, 
                                animationOptions: {
                                    duration: 750, 
                                    easing: "linear",
                                    queue: false
                                }
                            });
                            return false;
                        }
                    });';

        return $jquery;
    }

    public function old_render()
    {
        wp_enqueue_script('jquery.isotope.v3.0.2', SA_ADDONS_UPLOAD_URL . '/Category/file/jquery.isotope.v3.0.2.js', false, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_script('imagesloaded.pkgd.min', SA_ADDONS_UPLOAD_URL . '/Category/file/imagesloaded.pkgd.min.js', false, SA_ADDONS_PLUGIN_VERSION);
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $catdata = explode('{{}}', $stylefiles[2]);
        $css = $listcatdata = '';
        echo '<div class="oxi-addons-container">
                 <div class="oxi-addons-row">';

        echo '<div class="oxi-addons-category-menu-' . $oxiid . '">';
        foreach ($catdata as $value) {
            if ($styledata[7] == $value) {
                $cat = '*';
                $class = 'oxi-active';
            } else {
                $class = '';
                $cat = '.' . OxiStringToClassReplacce($value, $oxiid) . '';
            }
            echo '<div class="oxi-cat-menu ' . $class . '" oxi-ref="' . $cat . '">';
            echo OxiAddonsTextConvert($value);
            echo '</div>';
        }
        echo '</div>';

        echo '<div class="oxi-addons-category-' . $oxiid . '">';
        echo '<div class="oxi-addons-category-data-' . $oxiid . '">';
        foreach ($listdata as $value) {
            $listfiles = explode("||#||", $value['files']);
            $listcat = explode('{{}}', $listfiles[3]);
            $listcatdata = '';
            foreach ($listcat as $data) {
                $listcatdata .= OxiStringToClassReplacce($data, $oxiid) . ' ';
            }
            echo '<div class="oxi-single-item ' . OxiAddonsItemRows($styledata, 3) . '  ' . $listcatdata . ' ">';
            echo '<div class="oxi-addons-category-files">';
            echo OxiAddonsTextConvert($listfiles[1]);
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
        echo '   </div>
              </div>';

        $jquery = '$(".oxi-addons-category-data-' . $oxiid . '").imagesLoaded(function(){
                        $(".oxi-addons-category-data-' . $oxiid . '").isotope({
                            filter: "*",
                            animationOptions: {
                                duration: 750,
                                easing: "linear",
                                queue: false
                            },
                            layoutMode: "masonry",
                        });
                    });
                    $(".oxi-addons-category-menu-' . $oxiid . ' .oxi-cat-menu").on("click", function () {
                        if(!$(this).hasClass("oxi-active")){
                            $(".oxi-addons-category-menu-' . $oxiid . ' .oxi-cat-menu").removeClass("oxi-active");
                            $(this).addClass("oxi-active");
                            var selector = $(this).attr("oxi-ref");
                            $(".oxi-addons-category-data-' . $oxiid . '").isotope({
                                filter: selector, 
                                animationOptions: {
                                    duration: 750, 
                                    easing: "linear",
                                    queue: false
                                }
                            });
                            return false;
                        }
                    });';



        if ($styledata[45] == '') {
            $width = 'width: ' . $styledata[47] . 'px;';
            $widthtab = 'width: ' . $styledata[47] . 'px;';
            $widthmobile = 'width: ' . $styledata[47] . 'px;';
        } else {
            $width = $widthtab = $widthmobile = '';
        }
        $css .= '.oxi-addons-category-menu-' . $oxiid . '{
                    width:100%;
                    float:left;
                    text-align: ' . (explode(':', $styledata[79])[0]) . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . '
                 }
                 .oxi-addons-category-menu-' . $oxiid . ' .oxi-cat-menu{
                     display:inline-block;
                     cursor:pointer;
                     ' . $width . '
                     font-size: ' . $styledata[41] . 'px;
                     color:' . $styledata[51] . ';
                     background: ' . $styledata[53] . ';
                     border-color:' . $styledata[72] . ';
                     border-style:' . $styledata[71] . ';
                     border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 55) . ';
                     ' . OxiAddonsFontSettings($styledata, 75) . '
                     text-align:center;
                     border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
                     padding:' . OxiAddonsPaddingMarginSanitize($styledata, 97) . ';
                     margin:' . OxiAddonsPaddingMarginSanitize($styledata, 113) . ';
                     ' . OxiAddonsBoxShadowSanitize($styledata, 129) . '
                 }
                 .oxi-addons-category-menu-' . $oxiid . ' .oxi-cat-menu:hover,
                 .oxi-addons-category-menu-' . $oxiid . ' .oxi-cat-menu.oxi-active{
                     color:' . $styledata[135] . ';
                     background: ' . $styledata[137] . ';
                     border-color:' . $styledata[156] . ';
                     border-style:' . $styledata[155] . ';
                     border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 139) . ';
                     border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 159) . ';
                     ' . OxiAddonsBoxShadowSanitize($styledata, 175) . '
                 }
                 .oxi-addons-category-' . $oxiid . '{
                    width:100%;
                    float:left;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . '
                 }
                 .oxi-addons-category-files ' . $listcatdata . ',.oxi-addons-category-data-' . $oxiid . '{
                    width:100%;
                    float:left;
                 }
                 @media only screen and (min-width : 669px) and (max-width : 993px){
                    .oxi-addons-category-menu-' . $oxiid . '{
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 10) . '
                     }
                     .oxi-addons-category-menu-' . $oxiid . ' .oxi-cat-menu{
                         ' . $widthtab . '
                        font-size: ' . $styledata[42] . 'px;
                        border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 56) . ';
                         border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
                         padding:' . OxiAddonsPaddingMarginSanitize($styledata, 98) . ';
                         margin:' . OxiAddonsPaddingMarginSanitize($styledata, 114) . ';
                     }
                     .oxi-addons-category-menu-' . $oxiid . ' .oxi-cat-menu:hover,
                     .oxi-addons-category-menu-' . $oxiid . ' .oxi-cat-menu.oxi-active{
                         border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 140) . ';
                         border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 160) . ';
                     }
                     .oxi-addons-category-' . $oxiid . '{
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 26) . '
                     }
                }
                @media only screen and (max-width : 668px){
                    .oxi-addons-category-menu-' . $oxiid . '{
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . '
                     }
                     .oxi-addons-category-menu-' . $oxiid . ' .oxi-cat-menu{
                         ' . $widthmobile . '
                        font-size: ' . $styledata[43] . 'px;
                        border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 57) . ';
                         border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
                         padding:' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';
                         margin:' . OxiAddonsPaddingMarginSanitize($styledata, 115) . ';
                     }
                     .oxi-addons-category-menu-' . $oxiid . ' .oxi-cat-menu:hover,
                     .oxi-addons-category-menu-' . $oxiid . ' .oxi-cat-menu.oxi-active{
                         border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 141) . ';
                         border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 161) . ';
                     }
                     .oxi-addons-category-' . $oxiid . '{
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . '
                     }
                }';

        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('jquery.isotope.v3.0.2', $jquery);
    }
}
