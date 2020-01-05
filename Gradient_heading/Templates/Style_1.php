<?php

namespace SHORTCODE_ADDONS_UPLOAD\Gradient_heading\Templates;

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
        $link = '';

        if (array_key_exists('sa_head_text', $style) && $style['sa_head_text'] != '') {
            if (array_key_exists('sa_gradient_header_link-url', $style) && $style['sa_gradient_header_link-url'] != '') {
                $link = '   <a ' . $this->url_render('sa_gradient_header_link', $style) . ' class="oxi-addons-gradient-heading-main" ' . $this->animation_render('sa_head_animation', $style) . '>
                                <' . $style['sa_head_gradient_heading_tag'] . ' class="oxi-addons-gradient-heading" >' . $this->text_render($style['sa_head_text']) . '</' . $style['sa_head_gradient_heading_tag'] . '>
                            </a>';
            } else {
                $link = '<div class="oxi-addons-gradient-heading-main" ' . $this->animation_render('sa_head_animation', $style) . '>
                            <' . $style['sa_head_gradient_heading_tag'] . ' class="oxi-addons-gradient-heading" >' . $this->text_render($style['sa_head_text']) . '</' . $style['sa_head_gradient_heading_tag'] . '>
                         </div>';
            }
        }

        echo ' <div class="oxi-addons-gradient-heading-container-style-1" > 
                    ' . $link . '
               </div> ';
    }
}
