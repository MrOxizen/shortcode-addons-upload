<?php

namespace SHORTCODE_ADDONS_UPLOAD\Team_carousel\Templates;

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

class Style_2 extends Templates {

    public function default_render($style, $child, $admin) {
        $styledata = $this->style;
        $oxiid = $this->oxiid;
        echo '<div class="sa_addons_carousel_style_2 sa_addons_carousel_style_2_' . $oxiid . '  ' . $styledata['sa_carousel_dot_posi'] . '  ' . $styledata['sa_carousel_dot_view'] . '">';

        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);
            $name = $desgnation = $description = $image = $link = $divider = $icons = '';
            if (array_key_exists('sa_price_table_name', $value) && $value['sa_price_table_name'] != '') {
                $name = '<' . $style['sa_team_name_tag'] . ' class="member-name">' . $this->text_render($value['sa_price_table_name']) . '</' . $style['sa_team_name_tag'] . '>';
            }
            if (array_key_exists('sa_team_designation_on', $style) && $style['sa_team_designation_on'] == 'yes') {
                if (array_key_exists('sa_price_table_desgnation', $value) && $value['sa_price_table_desgnation'] != '') {
                    $desgnation = '<p class="member-role">' . $this->text_render($value['sa_price_table_desgnation']) . '</p>';
                }
            }

            if (array_key_exists('sa_team_description_on', $style) && $style['sa_team_description_on'] == 'yes') {
                if (array_key_exists('sa_price_table_description', $value) && $value['sa_price_table_description'] != '') {
                    $description = '<p class="member-descriptin">' . $this->text_render($value['sa_price_table_description']) . '</p>';
                }
            }


            
            if (array_key_exists('sa_divider_switter', $style) && $style['sa_divider_switter'] == 'yes') {
                $divider = '<div class="member-divider-main">
                            <div class="member-divider"></div>
                        </div>';
            }

            if ($style['sa_social_box_switter'] == 'yes') {
                $datas = (array_key_exists('sa_team_repeater', $value) && is_array($value['sa_team_repeater']) ? $value['sa_team_repeater'] : []);
                foreach ($datas as $key => $data) {
                    if ($data['sa_social_icons_url-url'] != '') {
                        $link = $this->url_render('sa_social_icons_url', $data);
                    }
                    if ($data['sa_social_icons_icon'] != '') {
                        $icon = $this->font_awesome_render($data['sa_social_icons_icon']);
                    }

                    $icons .= '<a ' . $link . ' class = "member-icon member-icon-' . $key . '">' . $icon . '</a>';
                }
                ;
            }
            
            if ($this->media_render('sa_team_front_image', $value) != '') {
                $image = ' 
                    <div class="oxi-team-pic-size">
                        <img   src="' . $this->media_render('sa_team_front_image', $value) . '" class="oxi_addons__image" alt="front image"/>
                       <div class="member-icons">' . $icons . '</div>     
                    </div>  
                ';
            }


            echo '<div class="oxi-addons-parent-wrapper-style-2 oxi-addons-parent-wrapper-style-2-' . $v['id'] . ' sa_addons_carousel_item oxi-item ' . ($admin == "admin" ? 'oxi-addons-admin-edit-list' : '') . ' ">
                   <div class="oxi-team-show-body-style-2" >
                    <div class="oxi-team-show">
                                ' . $image . '
                                
                          <div class="member-info">';
//            $name
//            $divider
//            $desgnation
//            $description
            $rearrange = explode(',', $style['sa_team_carousel_rearrange']);
            foreach ($rearrange as $arrange) {
                if ($arrange != ''):
                    if (isset($$arrange)) {
                        echo $$arrange;
                    }
                endif;
            }
            echo '      </div>
                    </div>
                 </div>';
            if ($admin == 'admin') :
                echo '  <div class="oxi-addons-admin-absulote">
                                <div class="oxi-addons-admin-absulate-edit">
                                    <button class="btn btn-primary shortcode-addons-template-item-edit" type="button" value="' . $v['id'] . '">Edit</button>
                                </div>
                                <div class="oxi-addons-admin-absulate-delete">
                                <button class="btn btn-danger shortcode-addons-template-item-delete" type="submit" value="' . $v['id'] . '">Delete</button>
                                </div>
                            </div>';
            endif;
            echo ' </div>';
        }
        echo ' </div>';
    }

    public function public_css() {
        wp_enqueue_style('owl.carousel', SA_ADDONS_UPLOAD_URL . '/Team_carousel/File/owl.carousel.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function public_jquery() {
        $this->JSHANDLE = 'owl.carousel';
        wp_enqueue_script('owl.carousel', SA_ADDONS_UPLOAD_URL . '/Team_carousel/File/owl.carousel.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_css() {
        $childdata = $this->child;
        $styledata = $this->style;

//        echo '<pre>';
//        print()
//        echo '</pre>';
        $css = '';
        foreach ($childdata as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);

            $datas = (array_key_exists('sa_team_repeater', $value) && is_array($value['sa_team_repeater']) ? $value['sa_team_repeater'] : []);

            foreach ($datas as $key => $data) {
                $css .= '.' . $this->WRAPPER . ' .oxi-addons-parent-wrapper-style-2.oxi-addons-parent-wrapper-style-2-' . $v['id'] . ' .member-icon.member-icon-' . $key . ' .oxi-icons{
                            ' . (($styledata["sa_social_icons_position"] == "separately") ? 'color: ' . $data['sa_social_icons_color'] . ';' : '' ) . '
                            ' . (($styledata["sa_social_icons_position"] == "separately") ? 'background: ' . $data['sa_social_icons_bg_color'] . ';' : '' ) . '
                        }
                        .' . $this->WRAPPER . ' .oxi-addons-parent-wrapper-style-2.oxi-addons-parent-wrapper-style-2-' . $v['id'] . ' .member-icon.member-icon-' . $key . ' .oxi-icons:hover{
                            ' . (($styledata["sa_social_icons_position"] == "separately") ? 'color: ' . $data['sa_social_icons_color_hover'] . ';' : '' ) . '
                            ' . (($styledata["sa_social_icons_position"] == "separately") ? 'background: ' . $data['sa_social_icons_bg_color_hover'] . ';' : '' ) . '
                        }';
            }
        }
        return $css;
    }

    public function inline_public_jquery() {
        $jquery = $navtext = '';
        $styledata = $this->style;
        $oxiid = $this->oxiid;
        $navtext .= '[\'' . $this->font_awesome_render($styledata['sa_carousel_nav_left'] != '' ? $styledata['sa_carousel_nav_left'] : '') . '\', \'' . $this->font_awesome_render($styledata['sa_carousel_nav_right'] != '' ? $styledata['sa_carousel_nav_right'] : '') . '\' ]';
        $jquery = 'jQuery(".sa_addons_carousel_style_2_' . $oxiid . '").OxiAddowlCarousel({
            loop: ' . $styledata['sa_carousel_infin_loop_on_off'] . ',
            margin:0,
            autoplay:' . $styledata['sa_carousel_a_p_on_off'] . ',
            autoplayTimeout: ' . ($styledata['sa_carousel_a_p_dur'] * 1000) . ',
            center: ' . $styledata['sa_carousel_cen_mod_on_off'] . ',
            autoplayHoverPause:' . $styledata['sa_carousel_pau_hov_on_off'] . ',
            mouseDrag:' . $styledata['sa_carousel_mou_dragg_on_off'] . ',
            rtl:' . $styledata['sa_carousel_rig_left_on_off'] . ',
            stagePadding: ' . $styledata['sa_carousel_stage_p'] . ',
            merge:' . $styledata['sa_carousel_mar_on_off'] . ',
            autoHeight: ' . $styledata['sa_carousel_au_hei_on_off'] . ',
            autoHeightClass: "oxi-owl-height",
            nav: ' . $styledata['sa_carousel_nav_on_off'] . ',
            navText: ' . $navtext . ',
            dots: ' . $styledata['sa_carousel_dot_on_off'] . ',
            responsive: {
                0: {
                    merge:false,
                    items: ' . $this->saAddonsCarouselItemCol($styledata['sa_carousel_col-mob']) . ',
                },
                668: {
                    merge:false,
                    items: ' . $this->saAddonsCarouselItemCol($styledata['sa_carousel_col-tab']) . ',
                },
                1000: {
                    merge:' . $styledata['sa_carousel_mar_on_off'] . ',
                    items: ' . $this->saAddonsCarouselItemCol($styledata['sa_carousel_col-lap']) . ',
                },
            },
        });';
        return $jquery;
    }

    public function saAddonsCarouselItemCol($data) {
        if ($data == 'sa_carousel_show_1') {
            $datareturn = '1';
        } elseif ($data == 'sa_carousel_show_2') {
            $datareturn = '2';
        } elseif ($data == 'sa_carousel_show_3') {
            $datareturn = '3';
        } elseif ($data == 'sa_carousel_show_4') {
            $datareturn = '4';
        } elseif ($data == 'sa_carousel_show_5') {
            $datareturn = '5';
        } elseif ($data == 'sa_carousel_show_6') {
            $datareturn = '6';
        } elseif ($data == 'sa_carousel_show_7') {
            $datareturn = '7';
        } elseif ($data == 'sa_carousel_show_8') {
            $datareturn = '8';
        } elseif ($data == 'sa_carousel_show_9') {
            $datareturn = '9';
        } elseif ($data == 'sa_carousel_show_10') {
            $datareturn = '10';
        }
        return $datareturn;
    }

}
