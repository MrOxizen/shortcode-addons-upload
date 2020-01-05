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

class Style_7 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $styledata = $this->style;
        $all_data = (array_key_exists('sa_number_data', $styledata) && is_array($styledata['sa_number_data'])) ? $styledata['sa_number_data'] : [];
        foreach ($all_data as $key => $value) {
            $number = $heading = $content = $link = $endlink = $icon_p = '';
            if ($style['sa_number_icon_position'] == 'left') {
                $icon_p .= 'icon_left';
            }
            if (array_key_exists('sa_number_icon', $value) && $value['sa_number_icon'] != '') {
                $number .= '<div class="sa_addons_numbers_icon">
                            <div class="sa_icons_body">
                                <div class="oxi_numbers">
                                    ' . $this->text_render($value['sa_number_icon']) . '
                                </div>
                            </div>
                        </div>
                ';
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
            echo '<div class="' . $this->column_render('sa_number_col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '">
                    <div class="sa_addons_numbers_container_style_7">';

            echo $link;

            echo '<div class="sa_addons_numbers_style_7 sa_addons_numbers_style_7_' . $key . ' ' . $icon_p . '">
                                <div>
                                    ' . $number . '
                                    ' . $heading . '
                                    ' . $content . '
                                </div>
                        </div>';
            echo $endlink;
            echo '</div>';
            echo '</div>';
        }
    }

}
