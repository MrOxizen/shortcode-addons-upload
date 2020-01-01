<?php

namespace SHORTCODE_ADDONS_UPLOAD\Content_boxes\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/*
 * Description of Style_13
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_13 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $class = '';
        if ($style['sa-max-width-condition'] == 'dynamic') {
            $class = 'sa-max-w-dynamic';
        } elseif ($style['sa-max-width-condition'] == 'default') {
            $class = '';
        }
        if ($admin == 'admin') {
            $admin_class = 'oxi-addons-admin-edit-list';
        } else {
            $admin_class = '';
        }
        $all_data = (array_key_exists('sa_icon_effects_data', $style) && is_array($style['sa_icon_effects_data'])) ? $style['sa_icon_effects_data'] : [];

        foreach ($all_data as $key => $data) {
            $icon = $heading = $content = $sub_heading = $button = $ribbon = '';

            if (array_key_exists('sa_el_content_box_fa_icon', $data) &&  $data['sa_el_content_box_fa_icon'] != '') {
                $icon .= '
                <div class="oxi-addons-content-boxes-icon">
                    <div class="oxi-addons-content-icon-boxes-data">
                        ' . $this->font_awesome_render($data['sa_el_content_box_fa_icon']) . '
                    </div>
                </div>
                 ';
            }
            if (array_key_exists('sa_el_content_box_heading', $data) &&  $data['sa_el_content_box_heading'] != '') {
                $heading .= '
                    <div class="oxi-addons-content-boxes-heading">
                        ' . $this->text_render($data['sa_el_content_box_heading']) . '
                    </div>
                            ';
            }
            if (array_key_exists('sa_el_content_box_sub_heading', $data) &&  $data['sa_el_content_box_sub_heading'] != '') {
                $sub_heading .= '
                    <div class="oxi-addons-content-boxes-sub-heading">
                        ' . $this->text_render($data['sa_el_content_box_sub_heading']) . '
                    </div>
                            ';
            }
            if (array_key_exists('sa_el_content_box_content', $data) &&  $data['sa_el_content_box_content'] != '') {
                $content .= '
                    <div class="oxi-addons-content-boxes-content">
                        ' . $this->text_render($data['sa_el_content_box_content']) . '
                    </div> 
                    ';
            }
            if (array_key_exists('sa_el_content_box_content_button_text', $data) && $data['sa_el_content_box_content_button_text'] != '') {
                if (array_key_exists('sa_el_content_box_content_button_link-url', $data) && $data['sa_el_content_box_content_button_link-url'] != '') {
                    $button = '<div class="oxi_addons__button_main">
                                                <a ' . $this->url_render('sa_el_content_box_content_button_link', $data) . ' class="oxi_addons__button">
                                                ' . $data['sa_el_content_box_content_button_text'] . '
                                                </a>
                                        </div>';
                } else {
                    $button = '<div class="oxi_addons__button_main">
                                                <p class="oxi_addons__button">
                                                ' . $data['sa_el_content_box_content_button_text'] . '
                                                </p>
                                        </div>';
                }
            }
            if (array_key_exists('sa_price_table_ribbon_switter', $data) && $data['sa_price_table_ribbon_switter'] == 'yes') {
                if (array_key_exists('sa_price_table_ribbon_text', $data) && $data['sa_price_table_ribbon_text'] != '') {
                    $ribbon = '<div class="oxi-addons-ribon ' . $style['sa_price_table_ribbon_position_left_right'] . '">' . $this->text_render($data['sa_price_table_ribbon_text']) . '</div>';
                }
            }

            echo '<div class="' . $this->column_render('sa-ac-column', $style) . ' ' . $admin_class . '">';
            echo '<div class="oxi_cb_tem_13    oxi_cb_tem_' . $this->oxiid . '_' . $key . '   ' . $class . '" ' . $this->animation_render('sa-ac-content-box-box-animation', $style) . '>
                    <div class="oxi-addons-content-boxes-data '.$data['sa_price_table_ribbon_switter_hover_active'].' '.$data['sa_content_box_overlay_direction'].'"> 
                    ' . $ribbon . '
                        <div class="oxi-addons-content-boxes-content-outside">
                            ' . $icon . '
                            ' . $heading . '
                            ' . $sub_heading . '
                            ' . $content . ' 
                        </div>  
                        ' . $button . '  
                    </div>';
            echo '</div>';
            echo '</div>';
        }
    }
}
