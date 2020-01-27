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

use SHORTCODE_ADDONS_UPLOAD\Team_carousel\File\Swiper_Settings_View;

class Style_2 extends Swiper_Settings_View
{
    public $team_data;
    public function render_team()
    {
        $style = $this->style;
        $child = $this->child;
        $admin = $this->admin;
        ob_start();
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
                };
            }

            if ($this->media_render('sa_team_front_image', $value) != '') {
                $image = ' 
                    <div class="oxi-team-pic-size">
                        <img   src="' . $this->media_render('sa_team_front_image', $value) . '" class="oxi_addons__image" alt="front image"/>
                       <div class="member-icons">' . $icons . '</div>     
                    </div>  
                ';
            }


            echo '<div class="swiper-slide oxi-addons-parent-wrapper-style-2 oxi-addons-parent-wrapper-style-2-' . $v['id'] . ' sa_addons_carousel_item oxi-item ' . ($admin == "admin" ? 'oxi-addons-admin-edit-list' : '') . ' ">
                   <div class="oxi-team-show-body-style-2" >
                    <div class="oxi-team-show">
                                ' . $image . '
                                
                          <div class="member-info">';

            $rearrange = explode(',', $style['sa_team_carousel_rearrange']);
            foreach ($rearrange as $arrange) {
                if ($arrange != '') :
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
        return ob_get_clean();
    }
    public function default_render($style, $child, $admin)
    {
        $this->team_data = $this->render_team();
        $this->slider_default_render('sa_addons_team_carousel_style_2', $this->team_data);
    }

    public function public_css()
    {
        wp_enqueue_style('swiper.min.css', SA_ADDONS_UPLOAD_URL . '/Team_carousel/File/swiper.min.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function public_jquery()
    {
        wp_enqueue_script('swiper.min.js', SA_ADDONS_UPLOAD_URL . '/Team_carousel/File/swiper.min.js', false, SA_ADDONS_PLUGIN_VERSION);
        $this->JSHANDLE = 'swiper.min.js';
    }

    public function inline_public_css()
    {
        $childdata = $this->child;
        $styledata = $this->style;
        $css = '';
        foreach ($childdata as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);

            $datas = (array_key_exists('sa_team_repeater', $value) && is_array($value['sa_team_repeater']) ? $value['sa_team_repeater'] : []);

            foreach ($datas as $key => $data) {
                $css .= '.' . $this->WRAPPER . ' .oxi-addons-parent-wrapper-style-2.oxi-addons-parent-wrapper-style-2-' . $v['id'] . ' .member-icon.member-icon-' . $key . ' .oxi-icons{
                            ' . (($styledata["sa_social_icons_position"] == "separately") ? 'color: ' . $data['sa_social_icons_color'] . ';' : '') . '
                            ' . (($styledata["sa_social_icons_position"] == "separately") ? 'background: ' . $data['sa_social_icons_bg_color'] . ';' : '') . '
                        }
                        .' . $this->WRAPPER . ' .oxi-addons-parent-wrapper-style-2.oxi-addons-parent-wrapper-style-2-' . $v['id'] . ' .member-icon.member-icon-' . $key . ' .oxi-icons:hover{
                            ' . (($styledata["sa_social_icons_position"] == "separately") ? 'color: ' . $data['sa_social_icons_color_hover'] . ';' : '') . '
                            ' . (($styledata["sa_social_icons_position"] == "separately") ? 'background: ' . $data['sa_social_icons_bg_color_hover'] . ';' : '') . '
                        }';
            }
        }
        $css .= '
            .' . $this->WRAPPER . ' .oxi-addons-admin-absulote {
                top: 0px;
            }
        ';
        return $css;
    }
}
