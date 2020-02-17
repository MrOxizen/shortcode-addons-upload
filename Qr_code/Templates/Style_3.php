<?php

namespace SHORTCODE_ADDONS_UPLOAD\Qr_code\Templates;

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

class Style_3 extends Templates {

    public function public_jquery() {
        $this->JSHANDLE = 'jquery-qrcode.min';
        wp_enqueue_script('jquery-qrcode.min', SA_ADDONS_UPLOAD_URL . '/Qr_code/File/jquery-qrcode.min.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery() {
        $js = '
        var $qrcode = $(".' . $this->WRAPPER . ' .oxi_addons_qrcode_style3 .oxi_addons_qrcode_main");
        var imagediv = $(".' . $this->WRAPPER . ' .oxi_addons_qrcode_style3 .sa_qrcode_image");
        if (!$qrcode.length) {
            return;
           }
           var settings = $qrcode.data("settings");
            settings.image = imagediv[0];
            $($qrcode).qrcode(settings);
           
        ';
        return $js;
    }

    public function default_render($style, $child, $admin) {


        if (array_key_exists('sa_qr_code_text_option', $style) && $style['sa_qr_code_text_option'] != '0') {
           
            $mode = '';
            if ($style['sa_qr_code_select'] == 'image') {
                $mode = ($style['sa_qr_code_mode'] == 'box' ? 4 : 3);
            } else {
                $mode = ($style['sa_qr_code_mode'] == 'box' ? 2 : 1);
            }
            
            $data = wp_json_encode(array_filter([
                "render" => "canvas",
                "ecLevel" => $style['sa_qr_code_ecl'],
                "minVersion" => $style['sa_qr_code_mv-size'],
                "fill" => $style['sa_qr_code_color'],
                "text" => $this->text_render($style['sa_qr_code_content']),
                "size" => $style['sa_qr_code_size-size'],
                "radius" => $style['sa_qr_code_redius-size'] * 0.01,
                "mode" => $mode,
                "mSize" => $style['sa_qr_code_label_size-size'] * 0.01,
                "mPosX" => $style['sa_qr_code_lx-size'] * 0.01,
                "mPosY" => $style['sa_qr_code_ly-size'] * 0.01,
                "label" => $this->text_render($style['sa_qr_code_label_text']),
                "fontcolor" => $style['sa_qr_code_color_label'],
            ]));
        } else {
            $data = wp_json_encode(array_filter([
                "render" => "canvas",
                "ecLevel" => $style['sa_qr_code_ecl'],
                "minVersion" => $style['sa_qr_code_mv-size'],
                "fill" => $style['sa_qr_code_color'],
                "text" => $this->text_render($style['sa_qr_code_content']),
                "size" => $style['sa_qr_code_size-size'],
                "radius" => $style['sa_qr_code_redius-size'] * 0.01,
                "mode" => 0,
                "mSize" => 0.14,
                "mPosX" => 0.5,
                "mPosY" => 0.5,
                "label" => "",
                "fontcolor" => "",
            ]));
        }
        if ($style['sa_qr_code_select'] == 'image') {
            $image = '<img src="' . $this->media_render('sa_qr_code_img', $style) . '" class="sa_qrcode_hidden sa_qrcode_image" alt="">';
        }
        echo '<div class = "oxi_addons_qrcode_style3">
                    <div class="oxi_addons_qrcode_style3_main" > 
                        <span class="sa_qrcoder_line1" > </span>
                        <span class="sa_qrcoder_line2" > </span>
                            <div class = "oxi_addons_qrcode_main" data-settings = \'' . $data . '\'>
                            </div>
                            ' . $image . '
                        <span class="sa_qrcoder_line3" > </span>
                        <span class="sa_qrcoder_line4" > </span>
                    </div>
              </div>';
    }

}
