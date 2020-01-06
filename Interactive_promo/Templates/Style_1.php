<?php

namespace SHORTCODE_ADDONS_UPLOAD\Interactive_promo\Templates;

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

        $datas = (array_key_exists('sa_interactive_promo_repeater', $style) && is_array($style['sa_interactive_promo_repeater']) ? $style['sa_interactive_promo_repeater'] : []);
        foreach ($datas as $key => $value) {

            $heading  = $details =  $image =   '';
            if (array_key_exists('sa_interactive_promo_heading', $value) && $value['sa_interactive_promo_heading'] != '') {
                $heading = '<' . $style['sa_interactive_promo_title_tag'] . ' class="oxi-addons-promo" >' . $this->text_render($value['sa_interactive_promo_heading']) . '</' . $style['sa_interactive_promo_title_tag'] . '>';
            }
            if (array_key_exists('sa_interactive_promo_description', $value) && $value['sa_interactive_promo_description'] != '') {
                $details = '<div class="oxi-addons-details" > ' . $this->text_render($value['sa_interactive_promo_description']) . ' </div>';
            }

            if ($this->media_render('sa_interactive_promo_image', $value) != '') {
                $image = '<img src=" ' . $this->media_render('sa_interactive_promo_image', $value) . '" alt="' . $this->text_render($value['sa_interactive_promo_image_alt']) . '" /> ';
            }


            echo '<div class="oxi_addons__interactive_promo_content_style_1 oxi_addons__interactive_promo_content_style_' . $key . ' ' . $this->column_render('sa_addons_interactive_promo_column', $style) . '" > 
                    <div  class="oxi-addons-interactive-promo" ' . $this->animation_render('sa_addons_interactive_promo_animation', $style) . ' ' . (array_key_exists('sa_interactive_promo_image_switcher', $style) && $style['sa_interactive_promo_image_switcher'] != 'yes' ? 'style="height: auto; max-width: 100%"' : '') . '>
                        <figure class="' . $style['sa_interactive_promo_badge_position'] . '" ' . (array_key_exists('sa_interactive_promo_image_switcher', $style) && $style['sa_interactive_promo_image_switcher'] != 'yes' ? 'style="height: auto"' : '') . ' >
                        ' . $image . '
                            <figcaption>
                                    <div>
                                        ' . $heading . '
                                        ' . $details . '
                                    </div>
                                <a href="#" target="_self"></a>
                            </figcaption>
                        </figure> 
                    </div>
                </div>';
        }
    }
}
