<?php

namespace SHORTCODE_ADDONS_UPLOAD\Dual_button\Templates;

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

class Style_2 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $href = '';
        $target = '';
        $middle_text = $href_left = $left_btn_text = $icon_left = $icon_text = $href_right = $target_right = $right_btn_text = $pos = $icon_right = $middle_text = '';
        if ($style['sa_dual_btn_left_link-url'] != '') {
            $href_left = $this->url_render('sa_dual_btn_left_link', $style);
        }
        if ($style['sa_dual_btn_left_text'] != '') {
            $left_btn_text = '<span class="oxi-text">' . $this->text_render($style['sa_dual_btn_left_text']) . '</span>';
        }
        if ($this->font_awesome_render($style['ssa_dual_btn_left_icon']) != '') {
            $icon_left = $this->font_awesome_render($style['ssa_dual_btn_left_icon']);
        }
        if ($style['sa_dual_btn_left_position'] == 'left') {
            $icon_text = $icon_left . $left_btn_text;
        } else {
            $icon_text = $left_btn_text . $icon_left;
        }

        //right
        if ($style['sa_dual_btn_right_link-url'] != '') {
            $href_right = $this->url_render('sa_dual_btn_right_link', $style);
        }

        if ($style['sa_dual_btn_right_text'] != '') {
            $right_btn_text = '<span class="oxi-text">' . $this->text_render($style['sa_dual_btn_right_text']) . '</span>';
        }

        if ($this->font_awesome_render($style['ssa_dual_btn_right_icon']) != '') {
            $icon_right = $this->font_awesome_render($style['ssa_dual_btn_right_icon']);
        }
        if ($style['sa_dual_btn_mid_icon'] != '' || $style['sa_dual_btn_mid_text'] != '') {
            if ($style['sa_dual_btn_mid_text_icon'] == 'text') {
                $middle_text = $this->text_render($style['sa_dual_btn_mid_text']);
            } else {
                $middle_text = $this->font_awesome_render($style['sa_dual_btn_mid_icon']);
            }
            $middle_text = '<div class="oxi-addons-btn-group-before" > ' . $middle_text . '</div>';
        }
        if ($style['sa_dual_btn_right_position'] == 'left') {
            $icon_text_right = $icon_right . $right_btn_text;
        } else {
            $icon_text_right = $right_btn_text . $icon_right;
        }
        echo '<div class="oxi-dual-button-style-2" ' . $this->animation_render('sa_s_image_animation', $style) . '>
                         <div class="oxi-addons-dual-button-align">
                            <div class="oxi-addons-btn-group " >
                                    <a ' . $href_left . '   id="' . $style['sa_dual_btn_left_id'] . '"><div class="oxi-left-icon">' . $icon_text . '</div> 
                                            ' . $middle_text . '</a>
                                    <a ' . $target_right . ' ' . $href_right . '  id="' . $style['sa_dual_btn_right_id'] . '">' . $icon_text_right . ' </a>
                             </div>
                        </div>
                    </div>';
    }
}
