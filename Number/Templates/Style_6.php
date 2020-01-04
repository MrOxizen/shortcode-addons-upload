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

class Style_6 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $styledata = $this->style;
        $all_data = (array_key_exists('sa_number_data', $styledata) && is_array($styledata['sa_number_data'])) ? $styledata['sa_number_data'] : [];
        foreach ($all_data as $key => $value) {
            $number = $heading = $link = $endlink = '';
            if (array_key_exists('sa_number_icon', $value) && $value['sa_number_icon'] != '') {
                $number .= '<div class="sa_addons_numbers_icon">
                                <div class="oxi_numbers">
                                    ' . $this->text_render($value['sa_number_icon']) . '
                                </div>
                        </div>';
            }
            if (array_key_exists('sa_number_h_text', $value) && $value['sa_number_h_text'] != '') {
                $heading .= '<div class="sa_addons_numbers_headding">
                            ' . $this->text_render($value['sa_number_h_text']) . '
                        </div>';
            }
            if (array_key_exists('sa_number_url_open', $value) && $value['sa_number_url_open'] != '0') {
                if ($value['sa_number_url-url'] != '') {
                    $link .= '<a ' . $this->url_render('sa_number_url', $value) . '>';
                    $endlink .= '</a>';
                }
            }
            echo '<div class="' . $this->column_render('sa_number_col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '">';
            echo $link;
            echo '<div class="sa_addons_numbers_container_style_6">
                        <div class="sa_addons_numbers_style_6 sa_addons_numbers_style_6_' . $key . '">
                            ' . ($style['sa_number_icon_position'] == 'top' ? $number . $heading : $heading . $number) . '
                        </div>';
            echo '</div>';
            echo $endlink;
            echo '</div>';
        }
    }

   
}
