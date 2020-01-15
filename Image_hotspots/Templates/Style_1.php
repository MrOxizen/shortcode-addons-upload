<?php

namespace SHORTCODE_ADDONS_UPLOAD\Image_hotspots\Templates;

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

class Style_1 extends Templates {

    public function public_jquery() {
        $this->JSHANDLE = 'tipso.min';
        wp_enqueue_script('tipso.min', SA_ADDONS_UPLOAD_URL . '/Image_hotspots/File/tipso.min.js', true, SA_ADDONS_PLUGIN_VERSION);
    }

    public function default_render($style, $child, $admin) {

        $image = $hostpots = $a = $tooltip = $type = '';

        if ($this->media_render('sa_ih_image', $style) != '') {
            $image = ' 
                <img ' . (array_key_exists('sa_ih_image_switcher', $style) && $style['sa_ih_image_switcher'] != 'yes' ? 'style="width: 100%; max-width: 100%; height: auto;"' : '') . ' src="' . $this->media_render('sa_ih_image', $style) . '" class="oxi_addons_ih_image" alt="front image"/>
             ';
        }

        $repeater = (array_key_exists('sa_ih_repeater', $style) && is_array($style['sa_ih_repeater'])) ? $style['sa_ih_repeater'] : [];
        foreach ($repeater as $key => $value) {

            if ($value['sa_ih_type'] == 'icon' && $value['sa_ih_icon'] != '') {
                $type = $this->font_awesome_render($value['sa_ih_icon']);
            }
            if ($value['sa_ih_type'] == 'text' && $value['sa_ih_text'] != '') {
                $type = '<div class="oxi_text">
                             ' . $this->text_render($value['sa_ih_text']) . '
                           </div>';
            }
            if ($value['sa_ih_type'] == 'blank') {
                $type = '';
            }

            if (array_key_exists('sa_ih_tooltip_on', $value) && $value['sa_ih_tooltip_on'] != '0' && $value['sa_ih_tooltip_text'] != '') {
                $tooltip = '<div class="sa_addons_tooltip_text">
                                ' . $this->text_render($value['sa_ih_tooltip_text']) . '
                           </div>';
            }


            if ($value['sa_ih_link_url-url'] != '') {
                $a = '<a' . $this->url_render('sa_ih_link_url', $value) . ' class="oxi_ih_hotsots">
                            ' . $type . '
                            
                        </a>';
            } else {
                $a = '<div class="oxi_ih_hotsots">
                            ' . $type . '
                        </div>';
            }

            $hostpots .= '<div class="oxi_ih_icon oxi_ih_icon_' . $key . ' ' . $value['sa_ih_tooltip_position'] . '">
                            ' . $a . '
                            ' . $tooltip . '
                         </div>';
        }

        echo '<div class="oxi_addons_image_hotspots_style1">
                <div class="oxi_addons_image_hotspots_main">
                ' . $hostpots . '
                ' . $image . '
                </div>
             </div>';
    }

    public function inline_public_jquery() {
        $jquery = '';

        return $jquery;
    }

}
