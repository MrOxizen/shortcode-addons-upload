<?php

namespace SHORTCODE_ADDONS_UPLOAD\Help_desk\Templates;

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

        if ($style['sa_head_text'] != '') {
            echo ' <div class="oxi-addons-heading-container-style-1" > 
                    <' . $style['sa_head_heading_tag'] . ' class="oxi-addons-heading" ' . $this->animation_render('sa_head_animation', $style) . '>' . $this->text_render($style['sa_head_text']) . '</' . $style['sa_head_heading_tag'] . '>
               </div> ';
        }
    }

}
