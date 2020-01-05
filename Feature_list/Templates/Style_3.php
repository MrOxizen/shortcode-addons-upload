<?php

namespace SHORTCODE_ADDONS_UPLOAD\Feature_list\Templates;

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

class Style_3 extends Templates {

    public function default_render($style, $child, $admin) {

        echo ' <div class="oxi_addons_feature_list_style3">
                        <div class="oxi_addons_feature_list_main_body ' . $style['sa_fl_width'] . '">';
        $repeater = (array_key_exists('sa_feature_list_repeater', $style) && is_array($style['sa_feature_list_repeater'])) ? $style['sa_feature_list_repeater'] : [];
        foreach ($repeater as $key => $value) {

            $image = $heading = $textarea = '';

            $connector = (array_key_exists('sa_fl_connetor_on', $style) && $style['sa_fl_connetor_on'] != '0' ? '' : 'connector_off');


            if ($this->media_render('sa_fl_image', $value) != '') {
                $image = '<div class="oxi_addons_feature_list_image ' . $connector . '">
                           <img class="oxi_addons_feature_list_image_image" src="' . $this->media_render('sa_fl_image', $value) . '"/> 
                               
                        </div>';
            }
            if (array_key_exists('sa_fl_text', $value) && $value['sa_fl_text'] != '') {
                $heading .= '<div class="oxi_addons_feature_list_heading">
                                    ' . $this->text_render($value['sa_fl_text']) . '
                            </div>';
            }
            if (array_key_exists('sa_fl_textarea', $value) && $value['sa_fl_textarea'] != '') {
                $textarea .= '<div class="oxi_addons_feature_list_content">
                                    ' . $this->text_render($value['sa_fl_textarea']) . '
                              </div>';
            }






            if ($style['sa_fl_image_position'] == 'left'):
                echo '<div class="oxi_addons_feature_list_section  oxi_addons_feature_list_' . $key . ' icon_left">
                            
                           ' . $image . '
                           <div class="oxi_addons_feature_list_content_body">  
                               ' . $heading . '
                               ' . $textarea . '   
                           </div>
                 </div>';
            else:
                echo '<div class="oxi_addons_feature_list_section oxi_addons_feature_list_' . $key . ' icon_right">
                            
                           <div class="oxi_addons_feature_list_content_body">  
                               ' . $heading . '
                               ' . $textarea . '   
                           </div>
                           ' . $image . '
                 </div>';
            endif;
        }

        echo '  </div>
            </div>';
    }

}
