<?php

namespace SHORTCODE_ADDONS_UPLOAD\QR_code\Templates;

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

    public function default_render($style, $child, $admin) {
        $image = '';
//        <# if ('image' === settings.label_type && image_url) { #>
//        <img src = "{{image_url}}" class = "sa-el-hidden sa-el-qrcode-image" alt = "">
//        <# } #>
        echo '<div class="oxi_addons_qrcode_style1">
                    <div class="oxi_addons_qrcode_main">
                    adsfasdflkjsdflkjsad
                    </div>
                    ' . $image . '
              </div>';
    }

}
