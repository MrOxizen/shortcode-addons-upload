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
            $heading = $details = $button = $image = $light_box = $image_or_btn  = $icon =  '';

            if (array_key_exists('sa_light_box_title', $value) && $value['sa_light_box_title'] != '') {
                $heading = '<' . $style['sa_light_box_tag'] . ' class=\'oxi_addons__heading_light_box\'>' . $this->text_render($value['sa_light_box_title']) . '</' . $style['sa_light_box_tag'] . '>';
            }
            if (array_key_exists('sa_light_box_desc', $value) && $value['sa_light_box_desc'] != '') {
                $details = '<div class=\'oxi_addons__details_light_box\'>' . $this->text_render($value['sa_light_box_desc']) . ' </div>';
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
                <div  class="oxi_addons__image_main" style="background-image: url(\'' . $this->media_render('sa_light_box_image', $value) . '\');" >
                    <div class="oxi_addons__overlay">
                    ' . $this->font_awesome_render($style['sa_light_box_bg_overlay_icon']) . '
                    </div>
                </div>  
            ';
            }
            if ($value['sa_light_box_button_icon']  != '') {
                $icon = '  
                    <div  class="oxi_addons__icon" >
                        <div class="oxi_addons__overlay">
                        ' . $this->font_awesome_render($style['sa_light_box_bg_overlay_icon']) . '
                        </div>
                        ' . $this->font_awesome_render($value['sa_light_box_button_icon']) . '
                    </div>   
            ';
            }

            if (array_key_exists('sa_light_box_clickable', $style) && $style['sa_light_box_clickable'] == 'button') {
                $image_or_btn = $button;
            } elseif (array_key_exists('sa_light_box_clickable', $style) && $style['sa_light_box_clickable'] == 'image') {
                $image_or_btn = $image;
            } else {
                $image_or_btn = $icon;
            }
            if($value['sa_light_box_select_type'] == 'image'){
                if ($this->media_render('sa_light_box_image', $value) != '') {
                    $light_box = '<div class="oxi_addons__light_box_item" ' . ((array_key_exists('sa_light_box_clickable', $style) && $style['sa_light_box_clickable'] == 'image') ? 'style="width: 100%"' : '') . '  data-src="' . $this->media_render('sa_light_box_image', $value) . '" data-sub-html="' . $heading . ' <br> ' . $details . '">  
                          ' . $image_or_btn . '
                    </div>';
                }
            }else{ 
                $light_box = '<a class="oxi_addons__light_box_item"   href="' . $value['sa_light_box_video'] . '" data-sub-html="' . $heading . ' <br> ' . $details . '">  
                    ' . $image_or_btn . '
                </a>';  
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
            addClass: "oxi_addons_light_box_overlay_' . $this->oxiid . '"
        });';

        return $jquery;
    }
}
