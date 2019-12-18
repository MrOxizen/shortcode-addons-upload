<?php

namespace SHORTCODE_ADDONS_UPLOAD\Light_box\Templates;

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

    public function public_jquery()
    {
        $this->JSHANDLE = 'MagnificPopup';
        wp_enqueue_script('MagnificPopup', SA_ADDONS_UPLOAD_URL . '/Light_box/File/MagnificPopup.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function public_css()
    {
        wp_enqueue_style('MagnificPopup', SA_ADDONS_UPLOAD_URL . '/Light_box/File/MagnificPopup.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery()
    {
        $style = $this->style;
        $js = '';
        $datas = (array_key_exists('sa_light_box_repeater', $style) && is_array($style['sa_light_box_repeater']) ? $style['sa_light_box_repeater'] : []);
        foreach ($datas as $key => $value) {

            $image_video = '';
            if ($value['sa_light_box_select_type'] == 'image') {
                $image_video = 'items: [
                    {
                        src: "' . $this->media_render('sa_light_box_image', $value) . '",
                    }
                ],
                type: "image",';
            } else {
                $image_video = 'items: [
                    {
                        src: "'.$value['sa_light_box_video'].'",
                    }
                ],
                type: "iframe",';
            }


            $js  .=  'jQuery(".' . $this->WRAPPER . ' .lightbox_key_' . $key . '").OximagnificPopup({
                        ' . $image_video    . '
                        mainClass: "' . $this->WRAPPER . '",
                        callbacks: {
                                    beforeChange: function() {
                                     this.items[0].src = this.items[0].src + "?=" + Math.random(); 
                                    }
                        },  
                        closeBtnInside: true,
                        closeOnContentClick: true,
                        tLoading: "",
                    });';
        }
        return $js;
    }

    public function default_render($style, $child, $admin)
    {
        $datas = (array_key_exists('sa_light_box_repeater', $style) && is_array($style['sa_light_box_repeater']) ? $style['sa_light_box_repeater'] : []);
        foreach ($datas as $key => $value) {
            $button = $image = $light_box = $image_or_btn  = $icon =  ''; 
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
            if ($this->media_render('sa_light_box_image', $value) != '') {
                $light_box = '<div class="oxi_addons__light_box_item  lightbox_key_' . $key . '" ' . ((array_key_exists('sa_light_box_clickable', $style) && $style['sa_light_box_clickable'] == 'image') ? 'style="width: 100%"' : '') . '  >  
                          ' . $image_or_btn . '
                    </div>';
            }

            echo '<div class="oxi_addons__light_box_style_2 ' . $this->column_render('sa_info_boxes_column', $style) . ' "> 
                    <div class="oxi_addons__light_box_parent"> 
                        ' . $light_box . '
                    </div>
                </div>';
        }
    }
    public function inline_public_css()
    {
        $style = $this->style;
        return '.shortcode-addons-wrapper-' . $this->oxiid . '.Oximfp-bg{
                        background: ' . $style['sa_s_image_light_bg_color'] . ';
                        z-index: ' . ($style['sa_s_image_light_z_ind'] - 1) . ';
                      }
                  .shortcode-addons-wrapper-' . $this->oxiid . '.Oximfp-wrap{
                   z-index: ' . $style['sa_s_image_light_z_ind'] . ';
                  }
                  .shortcode-addons-wrapper-' . $this->oxiid . ' .Oximfp-content{
                    z-index: ' . ($style['sa_s_image_light_z_ind'] + 2) . ';
                    }
                  .shortcode-addons-wrapper-' . $this->oxiid . ' .Oximfp-close{
                      z-index: ' . ($style['sa_s_image_light_z_ind'] + 3) . ';
                  }

                 .shortcode-addons-wrapper-' . $this->oxiid . ' .Oximfp-image-holder .Oximfp-close, 
                 .shortcode-addons-wrapper-' . $this->oxiid . ' .Oximfp-iframe-holder .Oximfp-close{
                     color: ' . $style['sa_s_image_light_cls_clr'] . ';
                  }
                 
                  .shortcode-addons-wrapper-' . $this->oxiid . ' .Oximfp-preloader{
                     background: ' . $style['sa_s_image_light_pre_clr'] . ';
                  }';
    }
}
