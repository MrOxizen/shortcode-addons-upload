<?php

namespace SHORTCODE_ADDONS_UPLOAD\Flip_carousel\Templates;

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
    
    public function public_jquery() {
        wp_enqueue_script('flipster-min', SA_ADDONS_UPLOAD_URL . '/Flip_carousel/File/jquery.flipster.min.js', false, SA_ADDONS_PLUGIN_VERSION);
        $this->JSHANDLE = 'flipster-min';
    }
    
    public function public_css() {
         wp_enqueue_style('flipster-min-css', SA_ADDONS_UPLOAD_URL . '/Flip_carousel/File/jquery.flipster.min.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function default_render($style, $child, $admin) {
         $styledata = $this->style;
        echo '<div class="oxi-addons-wrapper-device">
                <article id="demo-carousel" class="demo">
                    <div id="carousel">
                       <ul>';
                           foreach ($styledata['oxi_addons_flipbox_style_1'] as $key => $value) {
                               $image = '';
                                if ($this->media_render('oxi_addons_slider_image', $value) != '') {
                                    $image = '<img src="'.$this->media_render('oxi_addons_slider_image', $value).'">';
                                }
                            echo '<li data-flip-title="Razzmatazz">
                                       '.$image.'
                                  </li>';
                           }   
                echo '</ul>
                   </div> 
                </article>
              </div>';
    }
  

    public function inline_public_jquery() {
        $arraykey = $this->style;
        if($arraykey['oxi_addons_slider_start_from'] == 'center'){
            $startform = $arraykey['oxi_addons_slider_start_from'];
            $start = 'start: "'.$startform.'"';
        }else{
            $startform = $arraykey['oxi_addons_slider_str_number'];
            $start = "start:".$startform;
        }
        if($arraykey['oxi_addons_slider_autoplay'] == true){
            $autopaly = ($arraykey['oxi_addons_slider_autoplay'].",". $arraykey['oxi_addons_slider_timeout']);
        }else{
            $autopaly = ('false'.",". 0);
        }
        $jquery = '';
        $jquery .= 'var carousel = $("#carousel").flipster({
                        style: "carousel",
                        fadeIn: '.$arraykey['oxi_addons_slider_fade_in'].',
                        '.$start .',
                        loop: '.$arraykey['oxi_addons_slider_loop'].',
                        autoplay: ('.$autopaly.'),
                        pauseOnHover: '.$arraykey['oxi_addons_slider_puse_hover'].',
                        click: '.$arraykey['oxi_addons_slider_cl_play'].',
                        scrollwheel: '.$arraykey['oxi_addons_slider_on_scroll'].',
                        touch: '.$arraykey['oxi_addons_slider_on_touch'].',
                        nav: '.$arraykey['oxi_addons_slider_cas_navi'].',
                        spacing: '.$arraykey['oxi_addons_slider_spacing-size'].',
                        buttons:   true,
                        
                    });
                    
                   oxiequalHeight($(".' . $this->WRAPPER . ' #carousel ul li img"));
                   oxiequalWidth($(".' . $this->WRAPPER . ' #carousel ul li img"));
                ';
        
        return $jquery;
    }

}
