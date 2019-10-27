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

class Style_9 extends Templates {

//    public function public_css() {
//        wp_enqueue_style('oxi-addons-main-wrapper-image-comparison-style-1', SA_ADDONS_UPLOAD_URL . '/Image_comparison/File/twentytwenty.css', false, SA_ADDONS_PLUGIN_VERSION);
//    }

    public function default_render($style, $child, $admin) {
        $text1 = $text2 = '';

        $styledata = $this->style;
        $id = $styledata['shortcode-addons-elements-id'];
        if ($styledata['sa_animated_text_style_9'] != '') {
            echo '<div class="oxi-addons-wrapper-style-9 oxi-addons-wrapper-' . $id . '">
                    <p class="oxi-addons-para" aria-label="oxi-addons">';
                        $texts = $this->text_render($styledata['sa_animated_text_style_9']);
                        $split_text = str_split($texts);
                        foreach ($split_text as $key => $value) {
                            echo '<span class="oxi-addons-span" data-text="' . $value . '">' . $value . '</span>';
                        }
                        echo '
                    </p>
                </div>';
        }
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';

        echo '  <div class="oxi-addons-container">
                    <div class="oxi-addons-row">
                        <div class="oxi-addons-wrapper-' . $oxiid . '">
                            <p class="oxi-addons-para" aria-label="oxi-addons">';
                                $texts = $stylefiles[3];
                                $split_text = str_split($texts);
                                foreach ($split_text as $key => $value) {
                                    echo '<span class="oxi-addons-span" data-text="' . $value . '">' . $value . '</span>';
                                }
                                echo '
                            </p>
                        </div>
                    </div>
                </div>';
        $aling = '';
        $ex = explode(':', $styledata[31]);
        if ($ex[0] === 'center') {
            $aling = 'justify-content: center;';
        } elseif ($ex[0] === 'left') {
            $aling = 'justify-content: flex-start;';
        } elseif ($ex[0] === 'right') {
            $aling = 'justify-content: flex-end;';
        }
        $css .= ' 

      .oxi-addons-wrapper-' . $oxiid . '{
          width: 100%;
          display: flex;  
          ' . OxiAddonsBGImage($styledata, 3) . '
          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . '; 
             ' . $aling . '
          overflow: hidden;
      }   
      .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-para {
            margin: 0;
            padding: 0;
            width: 100%;
            float: left;
            font-size: ' . $styledata[23] . 'px;
          ' . OxiAddonsFontSettings($styledata, 27) . ';
             color: ' . $styledata[33] . ';
      }
      .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-para .oxi-addons-span {
        display: inline-block;
        position: relative;
        -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
        -webkit-perspective: 500;
                perspective: 500;
        -webkit-font-smoothing: antialiased;
           margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 37) . '; 
      }
      .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-para .oxi-addons-span::before,
      .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-para .oxi-addons-span::after {
        display: none;
        position: absolute;
        top: 0;
        left: -1px;
        -webkit-transform-origin: left top;
                transform-origin: left top;
        transition: all ease-out 0.3s;
        content: attr(data-text);
      }
      .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-para .oxi-addons-span::before {
        z-index: 1;
        color: rgba(0,0,0,0.2);
        -webkit-transform: scale(1.1, 1) skew(0deg, 20deg);
                transform: scale(1.1, 1) skew(0deg, 20deg);
      }
      .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-para .oxi-addons-span::after {
        z-index: 2;
        color: ' . $styledata[35] . ';
        text-shadow: -1px 0 1px ' . $styledata[35] . ', 1px 0 1px ' . $styledata[35] . ';
        -webkit-transform: rotateY(-40deg);
                transform: rotateY(-40deg);
      }
      .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-para .oxi-addons-span:hover::before {
        -webkit-transform: scale(1.1, 1) skew(0deg, 5deg);
                transform: scale(1.1, 1) skew(0deg, 5deg);
      }
      .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-para .oxi-addons-span:hover::after {
        -webkit-transform: rotateY(-10deg);
                transform: rotateY(-10deg);
      } 
      .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-para .oxi-addons-span::before,
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-para .oxi-addons-span::after {
          display: block;
        } 
    @media only screen and (min-width : 669px) and (max-width : 993px){
      .oxi-addons-wrapper-' . $oxiid . '{ 
          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . '; 
      } 
      .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-para{ 
          font-size: ' . $styledata[24] . 'px; 
      }
    }
    @media only screen and (max-width : 668px){
      .oxi-addons-wrapper-' . $oxiid . '{ 
          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . '; 
      }  
      .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-para{ 
          font-size: ' . $styledata[25] . 'px; 
      }
    }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
