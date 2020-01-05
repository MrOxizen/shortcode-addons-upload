<?php

namespace SHORTCODE_ADDONS_UPLOAD\Card\Templates;

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

        $datas = (array_key_exists('sa_card_repeater', $style) && is_array($style['sa_card_repeater']) ? $style['sa_card_repeater'] : []);
        foreach ($datas as $key => $value) {

            $heading  = $details =  $button = $icon = $image = $badge =  '';
            if (array_key_exists('sa_card_title', $value) && $value['sa_card_title'] != '') {
                $heading = '<' . $style['sa_card_title_tag'] . ' class="oxi_addons__heading" >' . $this->text_render($value['sa_card_title']) . '</' . $style['sa_card_title_tag'] . '>';
            }
            if (array_key_exists('sa_card_desc', $value) && $value['sa_card_desc'] != '') {
                $details = '<div class="oxi_addons__details" > ' . $this->text_render($value['sa_card_desc']) . ' </div>';
            }
            if ($value['sa_card_icon']) {
                $icon = $this->font_awesome_render($value['sa_card_icon']);
            }
            if (array_key_exists('sa_card_button_text', $value) && $value['sa_card_button_text'] != '') {
                if (array_key_exists('sa_card_button_link-url', $value) && $value['sa_card_button_link-url'] != '') {
                    $button = '<div class="oxi_addons__button_main">
                                                <a ' . $this->url_render('sa_card_button_link', $value) . ' class="oxi_addons__button">
                                                 ' . $this->text_render($value['sa_card_button_text']) . '
                                                 ' . $icon . '
                                                </a>
                                        </div>';
                } else {
                    $button = '<div class="oxi_addons__button_main">
                                    <p class="oxi_addons__button">
                                        ' . $this->text_render($value['sa_card_button_text']) . '
                                        ' . $icon . '
                                    </p>
                                </div>';
                }
            }
            if (array_key_exists('sa_card_badge_text', $value) && $value['sa_card_badge_text'] != '') {
                $badge = '<div class="oxi_addons__badge_main"><div class="oxi_addons__badge oxi_addons__badge_' . $style['sa_card_badge_position'] . '">' . $value['sa_card_badge_text'] . '</div></div>';
            }
            if ($this->media_render('sa_card_image', $value) != '') {
                $image = ' <div class="oxi_addons__image_main"> 
                ' . $badge . '
                    <div class="oxi_addons__image"> 
                       <img src=" ' . $this->media_render('sa_card_image', $value) . '" alt="Image Text: ' . $this->text_render($value['sa_card_title']) . '" />
                    </div>
                </div>';
            }


            echo '<div class="oxi_addons__card_content_style_1 oxi_addons__card_content_style_' . $key . ' ' . $this->column_render('sa_addons_card_column', $style) . '" >
                            <div class="oxi_addons__content_main_wrapper" ' . $this->animation_render('sa_addons_card_animation', $style) . '>
                            ' . $image . '
                                <div class="oxi_addons__content_main"> 
                                    ' . $heading . '
                                    ' . $details . '
                                    ' . $button . '
                                </div>
                            </div>
                        </div>
                    ';
        }
    }
}
