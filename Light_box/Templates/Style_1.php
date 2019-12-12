<?php

namespace SHORTCODE_ADDONS_UPLOAD\Light_box\Templates;

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

    public function public_jquery()
    {
        $this->JSHANDLE = 'oxi_addons__light_box_style_1';
        wp_enqueue_script('oxi_addons__light_box_style_1', SA_ADDONS_UPLOAD_URL . 'Light_box/File/picturefill.min.js', false, SA_ADDONS_PLUGIN_VERSION);
        $this->JSHANDLE = 'oxi_addons__light_box_style_2';
        wp_enqueue_script('oxi_addons__light_box_style_2', SA_ADDONS_UPLOAD_URL . 'Light_box/File/lightgallery_all.min.js', false, SA_ADDONS_PLUGIN_VERSION);
        $this->JSHANDLE = 'oxi_addons__light_box_style_3';
        wp_enqueue_script('oxi_addons__light_box_style_3', SA_ADDONS_UPLOAD_URL . 'Light_box/File/jquery.mousewheel.min.js', false, SA_ADDONS_PLUGIN_VERSION);
    }
    public function public_css()
    {
        wp_enqueue_style('oxi_addons__light_box_style_1', SA_ADDONS_UPLOAD_URL . 'Light_box/File/lightgallery.min.css', false, SA_ADDONS_PLUGIN_VERSION);
    }


    public function default_render($style, $child, $admin)
    {
        $datas = (array_key_exists('sa_light_box_repeater', $style) && is_array($style['sa_light_box_repeater']) ? $style['sa_light_box_repeater'] : []);
        foreach ($datas as $key => $value) {
            $heading = $details = $button = $image = $light_box = $image_or_btn =  '';

            if (array_key_exists('sa_light_box_title', $value) && $value['sa_light_box_title'] != '') {
                $heading = '<' . $style['sa_light_box_tag'] . ' class=\'oxi_addons__heading\'>' . $this->text_render($value['sa_light_box_title']) . '</' . $style['sa_light_box_tag'] . '>';
            }
            if (array_key_exists('sa_light_box_desc', $value) && $value['sa_light_box_desc'] != '') {
                $details = '<div class=\'oxi_addons__details\'>' . $this->text_render($value['sa_light_box_desc']) . ' </div>';
            }

            if (array_key_exists('sa_light_box_button_text', $value) && $value['sa_light_box_button_text'] != '') {
                $button = '<div class="oxi_addons__button_main">
                                    <button class="oxi_addons__button">
                                        ' . $this->text_render($value['sa_light_box_button_text']) . ' 
                                    </button>
                                </div>';
            }

            if ($this->media_render('sa_light_box_image', $value) != '') {
                $image = ' 
                <div  class="oxi_addons_image_main" >
                    <img  ' . (array_key_exists('sa_light_box_image_switcher', $style) && $style['sa_light_box_image_switcher'] != 'yes' ? 'style="width: 100%; max-width: 100%"' : '') . ' src="' . $this->media_render('sa_light_box_image', $value) . '" class="oxi_addons__image" alt="front image"/>
                </div>  
            ';
            }

            if (array_key_exists('sa_light_box_clickable', $style) && $style['sa_light_box_clickable'] == 'button') {
                $image_or_btn = $button;
            } else {
                $image_or_btn = $image;
            }
            if ($this->media_render('sa_light_box_image', $value) != '') {
                $light_box = ' 
                <div class="oxi_addons__light_box_item"  data-src="' . $this->media_render('sa_light_box_image', $value) . '" data-sub-html="' . $heading . ' <br> ' . $details . '">  
                      ' . $image_or_btn . '
                </div> 
            ';
            }


            echo '<div class="oxi_addons__light_box_style_1 ' . $this->column_render('sa_info_boxes_column', $style) . ' "> 
                <div class="oxi_addons__light_box_parent"> 
                ' . $light_box . '
                </div>
         </div>';
        }
    }

    public function inline_public_jquery()
    {
        $jquery = '';
        $jquery .= 'jQuery(".oxi_addons__light_box_parent").lightGallery({
            share: false,
        });';
        return $jquery;
    }
}
