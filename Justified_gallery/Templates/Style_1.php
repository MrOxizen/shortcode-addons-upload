<?php

namespace SHORTCODE_ADDONS_UPLOAD\Justified_gallery\Templates;

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

    public function public_css() {
        wp_enqueue_style('justifiedGallery.min', SA_ADDONS_UPLOAD_URL . '/Justified_gallery/File/justifiedGallery.min.css', false, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_style('MagnificPopup', SA_ADDONS_UPLOAD_URL . '/Justified_gallery/File/MagnificPopup.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function public_jquery() {
        $this->JSHANDLE = 'jquery.justifiedGallery.min';
        wp_enqueue_script('jquery.justifiedGallery.min', SA_ADDONS_UPLOAD_URL . '/Justified_gallery/File/jquery.justifiedGallery.min.js', false, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_script('MagnificPopup', SA_ADDONS_UPLOAD_URL . '/Justified_gallery/File/MagnificPopup.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery() {
        $style = $this->style;

        $jquery = '';
        $jquery .= '$(".' . $this->WRAPPER . ' .justified-gallery").justifiedGallery({
            rowHeight: ' . $style['sa_jg_image_height'] . ',
            lastRow: "justify",
            margins: ' . $style['sa_jg_image_margin'] . ',
           });';


        $datas = (array_key_exists('sa_jg_reapeter', $style) && is_array($style['sa_jg_reapeter']) ? $style['sa_jg_reapeter'] : []);
        foreach ($datas as $key => $value) {

            $jquery .= 'jQuery(".' . $this->WRAPPER . ' .oxi_addons_justified_gallery_img.sa_img_' . $key . '").OximagnificPopup({
                         items: [
                             {
                                 src: "' . $this->media_render('sa_jg_image', $value) . '",
                             }
                         ],
                         type: "image",
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
        return $jquery;
    }

    public function inline_public_css() {
        $style = $this->style;
        return '.shortcode-addons-wrapper-' . $this->oxiid . '.Oximfp-bg{
                        background: ' . $style['sa_justified_gallery_light_bg_color'] . ';
                        z-index: ' . ($style['sa_justified_gallery_light_z_ind'] - 1) . ';
                      }
                  .shortcode-addons-wrapper-' . $this->oxiid . '.Oximfp-wrap{
                   z-index: ' . $style['sa_justified_gallery_light_z_ind'] . ';
                  }
                  .shortcode-addons-wrapper-' . $this->oxiid . ' .Oximfp-content{
                    z-index: ' . ($style['sa_justified_gallery_light_z_ind'] + 2) . ';
                    }
                  .shortcode-addons-wrapper-' . $this->oxiid . ' .Oximfp-close{
                      z-index: ' . ($style['sa_justified_gallery_light_z_ind'] + 3) . ';
                  }

                 .shortcode-addons-wrapper-' . $this->oxiid . ' .Oximfp-image-holder .Oximfp-close, 
                 .shortcode-addons-wrapper-' . $this->oxiid . ' .Oximfp-iframe-holder .Oximfp-close{
                     color: ' . $style['sa_justified_gallery_light_cls_clr'] . ';
                  }
                 
                  .shortcode-addons-wrapper-' . $this->oxiid . ' .Oximfp-preloader{
                     background: ' . $style['sa_justified_gallery_light_pre_clr'] . ';
                  }';
    }

    public function default_render($style, $child, $admin) {

        echo '<div class="oxi_addons_justified_gallery_style1">
                <div class="justified-gallery">
                ';

        $repeater = (array_key_exists('sa_jg_reapeter', $style) && is_array($style['sa_jg_reapeter'])) ? $style['sa_jg_reapeter'] : [];
        foreach ($repeater as $key => $value) {
            echo '<a href="#" class="oxi_addons_justified_gallery_item">
                        <img class="oxi_addons_justified_gallery_img sa_img_' . $key . '" src="' . $this->media_render('sa_jg_image', $value) . '" alt="' . $this->text_render($value['sa_jg_title']) . '"/>
                 </a>';
        }

        echo '</div></div>';
    }

}
