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
        $devicetype = $style['sa_devices_type'];
        $skin = $style['sa_device_skin'];
        $style['sa-el-device-orientation-landscape'] = '';
        
        echo '<div class="oxi-addons-wrapper-device">
                 <div id="wheel">
                    <ul>
                        <li data-flip-title="Red">
                            <img src="img/text1.gif">
                        </li>
                        <li data-flip-title="Razzmatazz" data-flip-category="Purples">
                            <img src="img/text2.gif">
                         </li>
                        <li data-flip-title="Deep Lilac" data-flip-category="Purples">
                            <img src="img/text3.gif">
                        </li>
                        <li data-flip-title="Daisy Bush" data-flip-category="Purples">
                            <img src="img/text4.gif">
                        </li>
                        <li data-flip-title="Cerulean Blue" data-flip-category="Blues">
                            <img src="img/text5.gif">
                        </li>
                        <li data-flip-title="Dodger Blue" data-flip-category="Blues">
                            <img src="img/text6.gif">
                        </li>
                        <li data-flip-title="Cyan" data-flip-category="Blues">
                            <img src="img/text7.gif">
                        </li>
                        
                    </ul>
                </div>   
              </div>';
    }
  

    public function inline_public_jquery() {
        $arraykey = $this->style;
        $jquery = '';
        $jquery .= ' var wheel = $("#wheel").flipster({
                        style: "flat",
                        spacing: -0.25,
                        buttons: true,
                        autoplay: true,
                    });
                ';
        
        return $jquery;
    }

}
