<?php

namespace SHORTCODE_ADDONS_UPLOAD\Image_magnifier\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of class Style_2 extends Templates

 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_2 extends Templates
{
    public function public_css()
    {
        wp_enqueue_style('zoomple.css', SA_ADDONS_UPLOAD_URL . '/Image_magnifier/File/styles/zoomple.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function public_jquery()
    {
        $this->JSHANDLE = 'zoomple.js';
        wp_enqueue_script('zoomple.js', SA_ADDONS_UPLOAD_URL . '/Image_magnifier/File/zoomple.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery()
    {
        $style = $this->style;
        $jquery = '';
        $width = 'zoomWidth:200,';
        $height = 'zoomHeight:200,';
        $offset = 'offset: {x: -150, y: -150},';
        $rounded = '';
        if (array_key_exists('sa_image_magnifier_magnifi_switcher', $style) && $style['sa_image_magnifier_magnifi_switcher'] == 'yes') {
            $width = '' . ($style['sa_image_magnifier_magnifi_width-size'] != '') ? 'zoomWidth: ' . $style['sa_image_magnifier_magnifi_width-size'] . ',' : 'zoomWidth:200 ' . ',';
            $height = '' . ($style['sa_image_magnifier_magnifi_height-size'] != '') ? 'zoomHeight: ' . $style['sa_image_magnifier_magnifi_height-size'] . ',' : 'zoomHeight:200 ' . ',';
        }
        if (array_key_exists('sa_image_magnifier_magnifi_offset_switcher', $style) && $style['sa_image_magnifier_magnifi_offset_switcher'] == 'yes') {
            $offset = 'offset : {x: ' . ($style['sa_image_magnifier_offset_x-size'] != '' ? $style['sa_image_magnifier_offset_x-size'] : '-100') . ',y: ' . ($style['sa_image_magnifier_offset_y-size'] != '' ? $style['sa_image_magnifier_offset_y-size'] : '-100') . '},';
        }
        if (array_key_exists('sa_image_magnifier_magnifi_router_switcher', $style) && $style['sa_image_magnifier_magnifi_router_switcher'] == 'yes') {
            $rounded = 'roundedCorners :true,';
        }
        $jquery .= ' $(".oxi__image_' . $this->oxiid . '").zoomple({
                blankURL : "' . SA_ADDONS_UPLOAD_URL . '/Image_magnifier/File/images/blank.gif' . '",
                bgColor :"#fff",
                loaderURL : "' . SA_ADDONS_UPLOAD_URL . '/Image_magnifier/File/images/loader.gif' . '",
                showCursor:false,
                ' . $width . '
                ' . $height . '
                ' . $offset . '
                ' . $rounded . '

              });
            ';
        $jquery .= '
        jQuery("#zoomple_previewholder").addClass("oxi_addons_magnifier_' . $this->oxiid . '");
        ';
        return $jquery;
    }

    public function default_render($style, $child, $admin)
    {
        $image = '';

        if ($this->media_render('sa_image_magnifier_image', $style) != '') {
            $image = '<a class="oxi__image_' . $this->oxiid . '" href="' . $this->media_render('sa_image_magnifier_image', $style) . '">
                 <img class="oxi_addons__image' . $style['sa_image_magnifier_image_switcher'] . '  ' . $style['sa_image_magnifier_grayscale_switter'] . '  " src="' . $this->media_render('sa_image_magnifier_image', $style) . '" alt=""/>
            </a>';
        }
        echo '<div class="oxi_addons__image_magnifier_wrapper">
                <div class="oxi_addons__image_magnifier_style_2 ' . $style['sa_image_magnifier_image_switcher'] . '">
                     ' . $image . '
                </div>
         </div>';
    }

}
