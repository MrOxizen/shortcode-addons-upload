<?php

namespace SHORTCODE_ADDONS_UPLOAD\Step_flow\Templates;

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

    public function default_render($style, $child, $admin) {

        $repeater = (array_key_exists('sa_step_flow_repeater', $style) && is_array($style['sa_step_flow_repeater'])) ? $style['sa_step_flow_repeater'] : [];
        foreach ($repeater as $key => $value) {
            $icon = $heading = $textarea = '';


            if ($value['sa_sf_icon_text'] == 'sa_icon' && $value['sa_sf_icon'] != '') {
                $icon = '<div class="oxi_addons_step_flow_icon_body">
                            <div class="oxi_addons_step_flow_icon_icon">
                                ' . $this->font_awesome_render($value['sa_sf_icon']) . '
                             </div>
                        </div>';
            }
            if ($value['sa_sf_icon_text'] == 'sa_text' && $value['sa_sf_icontext'] != '') {
                $icon = '<div class="oxi_addons_step_flow_icon_body">
                            <div class="oxi_addons_step_flow_icon_icon">
                                <div class="oxi_addons_step_icon_text">
                                    ' . $this->text_render($value['sa_sf_icontext']) . '
                                </div>
                             </div>
                        </div>';
            }
            if (array_key_exists('sa_sf_text', $value) && $value['sa_sf_text'] != '') {
                $heading .= '<div class="oxi_addons_step_flow_heading">
                                    ' . $this->text_render($value['sa_sf_text']) . '
                            </div>';
            }
            if (array_key_exists('sa_sf_textarea', $value) && $value['sa_sf_textarea'] != '') {
                $textarea .= '<div class="oxi_addons_step_flow_content">
                                    ' . $this->text_render($value['sa_sf_textarea']) . '
                              </div>';
            }



            $direction = (array_key_exists('sa_sf_direction', $value) && $value['sa_sf_direction'] != '0' ? '' : 'line_off');

            echo '<div class="oxi_addons_step_flow_coloum_style1 ' . $this->column_render('sa_step_flow_coloum', $style) . '">
                   
                        <div class="oxi_addons_step_flow_style1" ' . $this->animation_render('sa_sf_animation', $style) . '>
                            <div class="oxi_addons_step_flow_body oxi_addons_step_flow_' . $key . '">  
                                       <div class="oxi_addons_step_flow_icon ' . $direction . '">' . $icon . '</div>
                                       ' . $heading . '
                                       ' . $textarea . '   
                            </div>
                        </div>
                
                 </div>';
        }
    }

}
