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

class Style_1 extends Templates {

//    public function public_css() {
//        wp_enqueue_style('oxi-addons-main-wrapper-image-comparison-style-1', SA_ADDONS_UPLOAD_URL . '/Image_comparison/File/twentytwenty.css', false, SA_ADDONS_PLUGIN_VERSION);
//    }

    public function default_render($style, $child, $admin) {
        
        $styledata = $this->style;
        $oxiid = $styledata['shortcode-addons-elements-id'];
        echo '<div class="oxi-addons-AT-P-style-1 oxi-addons-AT-P-style-1-'.$oxiid.'">
                    <span class="oxi-animated-style-1 oxi-animated-style-1-'.$oxiid.'">' . $this->text_render($style['sa_animated_text']) . '</span>
            </div>';
        
    }

    public function public_jquery() {
        $this->JSHANDLE = 'jquery-saanimatedtext-js';
        wp_enqueue_script('jquery-saanimatedtext-js', SA_ADDONS_UPLOAD_URL . '/Animated_text/File/jquery.bubble.text.js', true, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery() {
        $jquery = '';
        $styledata = $this->style;
        $oxiid = $styledata['shortcode-addons-elements-id'];
         $txtdata = '';
        foreach ($styledata['sa_animated_text_data'] as $key => $values) {  
            foreach($values as $value){ 
                if (!empty($value)) {
                    $txtdata .= "'$value',";
                }
            }
           
        } 
        $id = $this->WRAPPER;
        $id = str_replace('-', "_", $id);
        $jquery .= 'var phrases_'.$id.' = [
                ' . $txtdata . '
              ];
            var len_'.$id.' = phrases_'.$id.'.length;
            var index = 0;

            var ctrl = bubbleText({
                element: jQuery(".oxi-animated-style-1-'.$oxiid.'"),
                newText: phrases_'.$id.'[index++],
                letterSpeed: ' . $styledata['sa-animated_text_speed-size'] . ',
                repeat: Infinity,
                timeBetweenRepeat: ' . $styledata['sa-animated_text_letter_speed-size'] . ',
                callback: function() {
                    this.newText = phrases_'.$id.'[index++ % len_'.$id.'];
                },
            });';
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
        . '<div class="oxi-addons-AT-P-' . $oxiid . '">'
        . '<span class="oxi-animated-' . $oxiid . '">' . OxiAddonsTextConvert($stylefiles[3]) . '</span>'
        . '</div>'
        . '</div>'
        . '</div>';
        wp_enqueue_script('jquery-asanimated-js', SA_ADDONS_UPLOAD_URL . '/Animated_text/File/jquery.bubble.text.js', true, SA_ADDONS_PLUGIN_VERSION);
        $txtdata = '';
        foreach ($textdata as $value) {
            if (!empty($value)) {
                $txtdata .= "'$value',";
            }
        }
        $jquery = "var phrases$oxiid = [
                $txtdata
              ];
            var len$oxiid = phrases$oxiid.length;
            var index = 0;

            var ctrl = bubbleText({
                element: jQuery('.oxi-animated-$oxiid'),
                newText: phrases" . $oxiid . "[index++],
                letterSpeed: ' . $styledata[17] . ',
                repeat: Infinity,
                timeBetweenRepeat: ' . $styledata[15] . ',
                callback: function() {
                    this.newText = phrases" . $oxiid . "[index++ % len$oxiid];
                },
            });";
        $css = '.oxi-addons-AT-P-' . $oxiid . '{
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
        wp_add_inline_script('jquery-asanimated-js', $jquery);
    }

}
