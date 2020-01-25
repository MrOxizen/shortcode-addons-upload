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
        $position = $width = $height =   '';
        if (array_key_exists('sa_image_magnifier_magnifi_position', $style) && $style['sa_image_magnifier_magnifi_position'] == 'top') {
            $position = '' . ($style['sa_image_magnifier_magnifi_position_top-size'] != '') ? 'top: ' . $style['sa_image_magnifier_magnifi_position_top-size'] . ',' : 'top:10,' . '';
        } elseif (array_key_exists('sa_image_magnifier_magnifi_position', $style) && $style['sa_image_magnifier_magnifi_position'] == 'right') {
            $position = '' . ($style['sa_image_magnifier_magnifi_position_right-size'] != '') ? 'right: ' . $style['sa_image_magnifier_magnifi_position_right-size'] . ',' : 'right:10,' . '';
        } elseif (array_key_exists('sa_image_magnifier_magnifi_position', $style) && $style['sa_image_magnifier_magnifi_position'] == 'bottom') {
            $position = '' . ($style['sa_image_magnifier_magnifi_position_bottom-size'] != '') ? 'bottom: ' . $style['sa_image_magnifier_magnifi_position_bottom-size'] . ',' : 'bottom:10,' . '';
        } elseif (array_key_exists('sa_image_magnifier_magnifi_position', $style) && $style['sa_image_magnifier_magnifi_position'] == 'left') {
            $position = '' . ($style['sa_image_magnifier_magnifi_position_left-size'] != '') ? 'left: ' . $style['sa_image_magnifier_magnifi_position_left-size'] . ',' : 'left:10,' . '';
        }

        if (array_key_exists('sa_image_magnifier_magnifi_switcher', $style) && $style['sa_image_magnifier_magnifi_switcher'] == 'yes') {
            $width = '' . ($style['sa_image_magnifier_magnifi_width-size'] != '') ? 'width: ' . $style['sa_image_magnifier_magnifi_width-size'] . ',' : '' . '';
            $height = '' . ($style['sa_image_magnifier_magnifi_height-size'] != '') ? 'height: ' . $style['sa_image_magnifier_magnifi_height-size'] . ',' : '' . '';
        } 
       
        $zoom = (array_key_exists('sa_image_magnifier_magnifi_zoom-size', $style) && $style['sa_image_magnifier_magnifi_zoom-size'] != '') ? 'maxZoom: ' . $style['sa_image_magnifier_magnifi_zoom-size'] . '' : 'maxZoom: 2,';
        $jquery = '
            new ImageZoom(".oxi__image_' . $this->oxiid . '", {
                deadarea: 0.25,
                target: {
                    ' . $position . ' 
                    ' . $width . ' 
                    ' . $height . ' 
                },
                ' . $zoom . '
                }); '; 
                if (array_key_exists('sa_image_magnifier_magnifi_position', $style) && $style['sa_image_magnifier_magnifi_position'] == 'left') {
                    $jquery .= 'jQuery(".zoomable").addClass("oxi_addons__magnifier_left");'; 
                }
                if (array_key_exists('sa_image_magnifier_magnifi_position', $style) && $style['sa_image_magnifier_magnifi_position'] == 'right') {
                    $jquery .= 'jQuery(".zoomable").addClass("oxi_addons__magnifier_right");'; 
                }

        return $jquery;

    }

    public function default_render($style, $child, $admin)
    {
        $image = '';

        if ($this->media_render('sa_image_magnifier_image', $style) != '') {
            $image = '<img class="oxi_addons__image   oxi__image_' . $this->oxiid . ' ' . $style['sa_image_magnifier_image_switcher'] . '  ' . $style['sa_image_magnifier_grayscale_switter'] . '  " src="' . $this->media_render('sa_image_magnifier_image', $style) . '" alt="slider image"/>';
        }
        echo '<div class="oxi_addons__image_magnifier_wrapper">
                <div class="oxi_addons__image_magnifier_style_1 ' . $style['sa_image_magnifier_image_switcher'] . '">
                    ' . $image . '
                </div>
         </div>';
    }

}
