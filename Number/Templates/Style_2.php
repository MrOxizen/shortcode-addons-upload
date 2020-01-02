<?php

namespace SHORTCODE_ADDONS_UPLOAD\Number\Templates;

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

class Style_2 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $styledata = $this->style;

        $all_data = (array_key_exists('sa_number_data', $styledata) && is_array($styledata['sa_number_data'])) ? $styledata['sa_number_data'] : [];
        foreach ($all_data as $key => $value) {

            $number = $heading = $content = $link = $endlink = '';
            if (array_key_exists('sa_number_icon', $value) && $value['sa_number_icon'] != '') {
                $number .= '<div class="sa_addons_numbers_area">
                                <div class="sa_addons_numbers_icon">
                                    ' . $this->text_render($value['sa_number_icon']) . '
                                </div>
                            </div>';
            }
            if (array_key_exists('sa_number_h_text', $value) && $value['sa_number_h_text'] != '') {
                $heading .= '<div class="sa_addons_numbers_headding">
                            ' . $this->text_render($value['sa_number_h_text']) . '
                        </div>';
            }
            if (array_key_exists('sa_number_content', $value) && $value['sa_number_content'] != '') {
                $content .= '<div class="sa_addons_numbers_content">
                            ' . $this->text_render($value['sa_number_content']) . '
                        </div>';
            }
            if (array_key_exists('sa_number_url_open', $value) && $value['sa_number_url_open'] != '0') {
                if ($value['sa_number_url-url'] != '') {
                    $link .= '<a ' . $this->url_render('sa_number_url', $value) . '>';
                    $endlink .= '</a>';
                }
            }
            echo '<div class="' . $this->column_render('sa_number_col', $style) . ' oxi-addons-admin-edit-list">
                    <div class="sa_addons_numbers_container_style_2">';
            echo $link;
            echo '<div class="sa_addons_numbers_style_2 sa_addons_numbers_style_2_' . $key . '">
                            ' . $number . '
                            ' . $heading . '
                            ' . $content . '
                        </div>';
            echo $endlink;
            echo '</div>';
            echo '</div>';
        }
    }

   
}
