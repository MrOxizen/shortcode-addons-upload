<?php

namespace SHORTCODE_ADDONS_UPLOAD\WeForms\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/*
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_1 extends Templates {

    public function public_css() {
        if (class_exists('WeForms')) {
            wp_enqueue_style(
                    'oxi_weform_style1', plugins_url('/weforms/assets/wpuf/css/frontend-forms.css', 'weforms'), null, SA_ADDONS_PLUGIN_VERSION
            );
        }
    }

    public function default_render($style, $child, $admin) {


        $shortcode = '';
        if (class_exists('WeForms')) {
            $shortcode = do_shortcode('[weforms id="' . $style['sa_weforms_select_form'] . '"]');
        } else {
            $shortcode = '<div style="color : red;    font-size: 20px;
                            text-align: center;
                            font-weight: 700;">Please Insert Your Shortcode First.</div>';
        }


        echo '<div class="oxi_weform_style1 sa_weform_align_' . $style['sa_animated_text_typo_alignment'] . '">
                <div class="oxi_weform_main" ' . ($style['sa-max-w-condition'] == 'default' ? 'style="width: 100%; max-width: 100%;"' : '') . '>
                    ' . $shortcode . '
                </div>
                </div>';
    }

}
