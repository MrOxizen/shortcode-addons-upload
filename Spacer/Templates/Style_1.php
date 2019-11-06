<?php

namespace SHORTCODE_ADDONS_UPLOAD\Spacer\Templates;

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

    public function inline_public_css() {
        $style = $this->style;
        $styleid = $this->oxiid;
        $css = '';
        if (array_key_exists('sa_spacer_size-lap-size', $style) && $style['sa_spacer_size-lap-size'] != ''):
            $css .= '.oxi-spacer-' . $styleid . '{height: ' . $style['sa_spacer_size-lap-size']  . 'px;}';
        endif;
        if (array_key_exists('sa_spacer_size-tab-size', $style) && $style['sa_spacer_size-tab-size'] != ''):
            $css .= '@media only screen and (min-width : 669px) and (max-device-width: 992px){ .oxi-spacer-' . $styleid . '{height: ' . $style['sa_spacer_size-tab-size'] . 'px;}}';
        endif;
        if (array_key_exists('sa_spacer_size-mob-size', $style) && $style['sa_spacer_size-mob-size'] != ''):
            $css .= '@media only screen and (max-device-width: 768px){.oxi-spacer-' . $styleid . '{height: ' . $style['sa_spacer_size-mob-size'] . 'px;}}';
        endif;
        return $css;
    }

    public function default_render($style, $child, $admin) {
        echo '<div class="oxi-spacer oxi-spacer-' .  $this->oxiid . '">
              </div>';
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $styleid = $styledata['id'];
        $style = explode('|', $styledata['css']);
        echo '<div class="oxi-addons-container">'
        . '<div class="oxi-addons-row">'
        . '<div class="oxi-spacer-' . $styleid . '">'
        . '</div>'
        . '</div>'
        . '</div>';

        $css = '.oxi-spacer-' . $styleid . '{ width: 100%; float: left;  height: ' . $style[1] . 'px; position: relative; } '
                . '@media only screen and (min-width : 669px) and (max-device-width: 992px){ .oxi-spacer-' . $styleid . '{ height: ' . $style[2] . 'px; } } '
                . '@media only screen and (max-device-width: 768px){.oxi-spacer-' . $styleid . '{ height: ' . $style[3] . 'px;}}';


        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
