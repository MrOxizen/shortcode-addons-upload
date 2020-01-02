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

class Style_1 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $styledata = $this->style;

        $all_data = (array_key_exists('sa_numbers_data', $styledata) && is_array($styledata['sa_numbers_data'])) ? $styledata['sa_numbers_data'] : [];
        foreach ($all_data as $key => $value) {
            $number = $heading = $content = $link = $endlink = '';
            if (array_key_exists('sa_numbers_icon', $value) && $value['sa_numbers_icon'] != '') {
                $number .= '<div class="sa_addons_number_icon">
                            ' . $this->text_render($value['sa_numbers_icon']) . '
                        </div>';
            }
            if (array_key_exists('sa_numbers_h_text', $value) && $value['sa_numbers_h_text'] != '') {
                $heading .= '<div class="sa_addons_number_headding">
                            ' . $this->text_render($value['sa_numbers_h_text']) . '
                        </div>';
            }
            if (array_key_exists('sa_numbers_content', $value) && $value['sa_numbers_content'] != '') {
                $content .= '<div class="sa_addons_number_content">
                            ' . $this->text_render($value['sa_numbers_content']) . '
                        </div>';
            }
            if (array_key_exists('sa_numbers_url_open', $value) && $value['sa_numbers_url_open'] != '0') {
                if ($value['sa_numbers_url-url'] != '') {
                    $link .= '<a ' . $this->url_render('sa_numbers_url', $value) . '>';
                    $endlink .= '</a>';
                }
            }
            echo '<div class="' . $this->column_render('sa_numbers_col', $style) . ' oxi-addons-admin-edit-list">
                    <div class="sa_addons_number_container_style_1">';
            echo $link;
            echo '<div class="sa_addons_number_style_1 sa_addons_number_style_1_' . $key . '" ' . $this->animation_render('sa_numbers_animation', $style) . '>
                            ' . $number . '
                            ' . $heading . '
                            ' . $content . '
                        </div>';
            echo $endlink;
            echo '</div>
            </div>';
        }
    }

}
