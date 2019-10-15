<?php

namespace SHORTCODE_ADDONS_UPLOAD\Icon_effects\Templates;

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
   
        $all_data = (array_key_exists('sa_icon_effects_data', $styledata) && is_array($styledata['sa_icon_effects_data'])) ? $styledata['sa_icon_effects_data'] : [];
        foreach ($all_data  as $key => $value) {
            $icon = $link = $endlink = '';
            if (array_key_exists('sa_icon_effects_icon', $value) && $value['sa_icon_effects_icon'] != '') {
                $icon .= $this->font_awesome_render($value['sa_icon_effects_icon']);
            }
            if (array_key_exists('sa_icon_effects_url_open', $value) && $value['sa_icon_effects_url_open'] != '0') {
                if ($value['sa_icon_effects_url-url'] != '') {
                    $link .= '<a ' . $this->url_render('sa_icon_effects_url', $value) . ' class="sa_icon_effects_link">';
                    $endlink .= '</a>';
                }
            }
            echo '<div class="sa_addons_icon_effects_colum ' . $this->column_render('sa_icon_effects_col', $style) . '">';
            echo $link;
            echo '<div class="sa_addons_icon_effects_container" ' . $this->animation_render('sa_icon_effects_animation', $styledata) . '>
                    <div class="sa_addons_icon_effects_style_1 sa_icon_effects_unique_' . $key . ' ' . $value['sa_icon_effects_type'] . ' ">
                        ' . $icon . '
                    </div>
                </div>
                ';
            echo $endlink;

            echo '</div>';
        }
    }
}
