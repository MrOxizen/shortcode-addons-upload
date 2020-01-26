<?php

namespace SHORTCODE_ADDONS_UPLOAD\Image_magnifier\Templates;

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
    public function public_css()
    {
        wp_enqueue_style('image_zoom.css', SA_ADDONS_UPLOAD_URL . '/Image_magnifier/File/image_zoom.min.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function public_jquery()
    {
        $this->JSHANDLE = 'image_zoom.js';
        wp_enqueue_script('image_zoom.js', SA_ADDONS_UPLOAD_URL . '/Image_magnifier/File/image_zoom.min.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery()
    {
        $style = $this->style;
        $width = $height =   '';
        $jquery = '';
        if (array_key_exists('sa_image_magnifier_magnifi_switcher', $style) && $style['sa_image_magnifier_magnifi_switcher'] == 'yes') {
            $width = '' . ($style['sa_image_magnifier_magnifi_width-size'] != '') ? 'width: ' . $style['sa_image_magnifier_magnifi_width-size'] . ',' : '' . '';
            $height = '' . ($style['sa_image_magnifier_magnifi_height-size'] != '') ? 'height: ' . $style['sa_image_magnifier_magnifi_height-size'] . ',' : '' . '';
        } 
       
        $zoom = (array_key_exists('sa_image_magnifier_magnifi_zoom-size', $style) && $style['sa_image_magnifier_magnifi_zoom-size'] != '') ? 'maxZoom: ' . $style['sa_image_magnifier_magnifi_zoom-size'] . '' : 'maxZoom: 2,';
 
        $datas = (array_key_exists('sa_addons_image_magnifier_repeater', $style) && is_array($style['sa_addons_image_magnifier_repeater'])) ? $style['sa_addons_image_magnifier_repeater'] : [];
 
        foreach ($datas as $key => $data) {
             $position = ''; 
             if (array_key_exists('sa_image_magnifier_magnifi_position', $data) && $data['sa_image_magnifier_magnifi_position'] == 'top') {
                $position = '' . ($data['sa_image_magnifier_magnifi_position_top-size'] != '') ? 'top: ' . $data['sa_image_magnifier_magnifi_position_top-size'] . ',' : 'top:10,' . '';
            } elseif (array_key_exists('sa_image_magnifier_magnifi_position', $data) && $data['sa_image_magnifier_magnifi_position'] == 'right') {
                $position = '' . ($data['sa_image_magnifier_magnifi_position_right-size'] != '') ? 'right: ' . $data['sa_image_magnifier_magnifi_position_right-size'] . ',' : 'right:10,' . '';
            } elseif (array_key_exists('sa_image_magnifier_magnifi_position', $data) && $data['sa_image_magnifier_magnifi_position'] == 'bottom') {
                $position = '' . ($data['sa_image_magnifier_magnifi_position_bottom-size'] != '') ? 'bottom: ' . $data['sa_image_magnifier_magnifi_position_bottom-size'] . ',' : 'bottom:10,' . '';
            } elseif (array_key_exists('sa_image_magnifier_magnifi_position', $data) && $data['sa_image_magnifier_magnifi_position'] == 'left') {
                $position = '' . ($data['sa_image_magnifier_magnifi_position_left-size'] != '') ? 'left: ' . $data['sa_image_magnifier_magnifi_position_left-size'] . ',' : 'left:10,' . '';
            }
            $jquery .= '
            var $width  = jQuery(window).width();
            if ($width > 767){ 
                new ImageZoom(".oxi__image_' . $this->oxiid . '_'.$key.'", {
                deadarea: 0.25,
                    target: {
                        ' . $position . ' 
                        ' . $width . ' 
                        ' . $height . ' 
                    },
                    ' . $zoom . '
                });  
            }
                jQuery(window).on("resize", function(){
                    var $width  = jQuery(window).width();
                    if ($width  > 767){ 
                        new ImageZoom(".oxi__image_' . $this->oxiid . '_'.$key.'", {
                            deadarea: 0.25,
                            target: { 
                                ' . $width . ' 
                                ' . $height . ' 
                            },
                            ' . $zoom . '
                        }); 
                    }else{
                        new ImageZoom(".oxi__image_' . $this->oxiid . '_'.$key.'", {
                            deadarea: 0.25,
                            target: {
                                ' . $position . ' 
                                ' . $width . ' 
                                ' . $height . ' 
                            },
                            ' . $zoom . '
                        });
                   }
                });
                ';  
        } 
        return $jquery;

    }

    public function default_render($style, $child, $admin)
    {
        
        echo '<div class="oxi_addons__image_magnifier_wrapper">';
            $datas = (array_key_exists('sa_addons_image_magnifier_repeater', $style) && is_array($style['sa_addons_image_magnifier_repeater'])) ? $style['sa_addons_image_magnifier_repeater'] : [];
            foreach ($datas as $key => $data) {
                $image = ''; 
                if ($this->media_render('sa_addons_image_magnifier_img', $data) != '') {
                    $image = '<img class="oxi_addons__image   oxi__image_' . $this->oxiid . '_'.$key.' ' . $style['sa_image_magnifier_image_switcher'] . '  ' . $style['sa_image_magnifier_grayscale_switter'] . '  " src="' . $this->media_render('sa_addons_image_magnifier_img', $data) . '" alt="slider image"/>';
                }
                echo ' <div class="oxi_addons__image_magnifier_column ' . $this->column_render('sa_addons_image_magnifier_column', $style) . '" > 
                     <div class="oxi_addons__image_magnifier_style_1 ' . $style['sa_image_magnifier_image_switcher'] . ' " >
                        ' . $image . '
                    </div>
                </div>';
            }
         echo '</div>';
    }

}
