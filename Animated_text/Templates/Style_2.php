<?php

namespace SHORTCODE_ADDONS_UPLOAD\Animated_text\Templates;

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

class Style_2 extends Templates {

//    public function public_css() {
//        wp_enqueue_style('oxi-addons-main-wrapper-image-comparison-style-1', SA_ADDONS_UPLOAD_URL . '/Image_comparison/File/twentytwenty.css', false, SA_ADDONS_PLUGIN_VERSION);
//    }

    public function default_render($style, $child, $admin) {

        $styledata = $this->style;
        $oxiid = $styledata['shortcode-addons-elements-id'];
        echo '<div class="oxi-addons-AT-style-2 oxi-addons-AT-style-2-'.$oxiid.'">
                    <span class="oxi-animated-style-2 oxi-animated-style-2-'.$oxiid.'">' . $this->text_render($style['sa_animated_text']) . '</span>
            </div>';
    }

    public function public_jquery() {
        $this->JSHANDLE = 'jquery-dsaanimatedtext-js-2 jquery-dsaanimatedtext-js-2';
        wp_enqueue_script('jquery-dsaanimatedtext-js-2', SA_ADDONS_UPLOAD_URL . '/Animated_text/File/shuffletext-jquery.js', true, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery() {
        $jquery = '';
        $styledata = $this->style;
        $oxiid = $styledata['shortcode-addons-elements-id'];
        $txtdata = '';
        foreach ($styledata['sa_animated_text_data_2'] as $key => $values) {
            foreach ($values as $value) {
                if (!empty($value)) {
                    $txtdata .= "'$value',";
                }
            }
        }
        $id = $this->WRAPPER;
        $id = str_replace('-', "_", $id);
        $jquery .= 'jQuery(".oxi-animated-style-2-'.$oxiid.'").ShuffleText(
                     [ ' . $txtdata . '],
                    {loop: true, delay: ' . $styledata['sa-animated_text_delay-size'] . ', shuffleSpeed:' . $styledata['sa-animated_text_letter_suffle-size'] . ',})';
        return $jquery;
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $textdata = explode('||#||', $stylefiles[1]);
        echo '<div class="oxi-addons-container">'
        . '<div class="oxi-addons-row">'
        . '<div class="oxi-addons-AT-' . $oxiid . '">'
        . '<span class="oxi-animated-' . $oxiid . '">' . OxiAddonsTextConvert($stylefiles[3]) . '</span>'
        . '</div>'
        . '</div>'
        . '</div>';
        wp_enqueue_script('jquery-saanimatedtext-js-2', SA_ADDONS_UPLOAD_URL . '/Animated_text/File/shuffletext-jquery.js', true, SA_ADDONS_PLUGIN_VERSION);
        $txtdata = '';
        foreach ($textdata as $value) {
            if (!empty($value)) {
                $txtdata .= "'$value',";
            }
        }
        $jquery = 'jQuery(".oxi-animated-' . $oxiid . '").ShuffleText(
                     [ ' . $txtdata . '],
                    {loop: true, delay: ' . $styledata[15] . ', shuffleSpeed:' . $styledata[17] . ',});';
        $css = '.oxi-addons-AT-' . $oxiid . '{
                width: 100%;
                float: left;
                ' . OxiAddonsFontSettings($styledata, 9) . ';
            }
            .oxi-animated-' . $oxiid . '{
                display:inline-block;
                vertical-align: text-top;
                color:' . $styledata[7] . ';
               
            }';
        if ($styledata[19] == 'Indovisual') {
            $css .= '.oxi-animated-' . $oxiid . '{
                     font-size:' . $styledata[3] . 'px;
                  }
                  @media only screen and (min-width : 669px) and (max-width : 993px){
                    .oxi-animated-' . $oxiid . '{
                       font-size:' . $styledata[4] . 'px;
                    }
                  } 
                  @media only screen and (max-width : 668px){
                    .oxi-animated-' . $oxiid . '{
                        font-size:' . $styledata[5] . 'px;
                     }
                  } ';
        }
        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('jquery-saanimatedtext-js-2', $jquery);
    }

}
