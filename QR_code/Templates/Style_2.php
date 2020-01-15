<?php

namespace SHORTCODE_ADDONS_UPLOAD\QR_code\Templates;

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

class Style_2 extends Templates {

    public function public_jquery() {
        $this->JSHANDLE = 'jquery-qrcode.min';
        wp_enqueue_script('jquery-qrcode.min', SA_ADDONS_UPLOAD_URL . '/QR_code/File/jquery-qrcode.min.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery() {
        $js = '
        var $qrcode = $(".oxi_addons_qrcode_style2 .oxi_addons_qrcode_main"),
        image = $qrcode.find(".oxi_addons_qrcode_style2 .sa_qrcode_image");
        if (!$qrcode.length) {
            return;
           }
           var settings = $qrcode.data("settings");
            settings.image = image[0];
            $($qrcode).qrcode(settings);
        ';
        return $js;
    }

    public function default_render($style, $child, $admin) {




        $sdfsf = wp_json_encode(array_filter([
            "render" => "canvas",
            "ecLevel" => $style['sa_qr_code_ecl'],
            "minVersion" => $style['sa_qr_code_mv-size'],
            "fill" => $style['sa_qr_code_color'],
            "text" => $this->text_render($style['sa_qr_code_content']),
            "size" => $style['sa_qr_code_size-size'],
            "radius" => $style['sa_qr_code_redius-size'] * 0.01,
            "mode" => ($style['sa_qr_code_mode'] == 'box' ? 2 : 1),
            "mSize" => $style['sa_qr_code_label_size-size'] * 0.01,
            "mPosX" => $style['sa_qr_code_lx-size'] * 0.01,
            "mPosY" => $style['sa_qr_code_ly-size'] * 0.01,
            "label" => $this->text_render($style['sa_qr_code_label_text']),
            "fontcolor" => $style['sa_qr_code_color_label'],
        ]));

        echo '<div class = "oxi_addons_qrcode_style2">
                    <div class = "oxi_addons_qrcode_main" data-settings = \'' . $sdfsf . '\'>
                    </div>
              </div>';
    }

}