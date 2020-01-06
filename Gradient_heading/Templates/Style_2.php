<?php

namespace SHORTCODE_ADDONS_UPLOAD\Gradient_heading\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_2
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_2 extends Templates
{

    public function default_render($style, $child, $admin)
    {


        $heading = $content =  $line = '';
        if (array_key_exists('sa_gradient_header_text', $style) && $style['sa_gradient_header_text'] != '') {
            if (array_key_exists('sa_gradient_header_link-url', $style) && $style['sa_gradient_header_link-url'] != '') {
                $heading = '   <a ' . $this->url_render('sa_gradient_header_link', $style) . ' class="oxi-addons-gradient-heading-main">
                                    <' . $style['sa_gradient_header_heading_tag'] . ' class="oxi-addons-gradient-heading" ' . $this->animation_render('sa_head_animation', $style) . '> 
                                            ' . $this->text_render($style['sa_gradient_header_text']) . '
                                    </' . $style['sa_gradient_header_heading_tag'] . '>
                                </a>';
            } else {
                $heading = '<div class="oxi-addons-gradient-heading-main" ' . $this->animation_render('sa_head_animation', $style) . '>
                            <' . $style['sa_gradient_header_heading_tag'] . ' class="oxi-addons-gradient-heading" >' . $this->text_render($style['sa_gradient_header_text']) . '</' . $style['sa_gradient_header_heading_tag'] . '>
                         </div>';
            }
        }
        if (array_key_exists('sa_gradient_heading_line_switcher', $style) && $style['sa_gradient_heading_line_switcher'] == 'yes') {
            $line = '<div class="oxi_addons__line_main" ' . $this->animation_render('sa_gradient_heading_line_animation', $style) . '><div class="oxi_addons__line" ></div></div>';
        }
        if ($style['sa_sub_gradient_header_text']) {
            $content = '<div class="oxi-addons-sub-gradient-heading" ' . $this->animation_render('sa_desc_animation', $style) . '> 
                            ' . $this->text_render($style['sa_sub_gradient_header_text']) . '
                        </div>';
        }

        echo '  <div class="oxi-addons-gradient-heading-container-style-2">
                     ' . $heading . '
                     ' . $line . '
                     ' . $content . '
                </div>';
    }
}
