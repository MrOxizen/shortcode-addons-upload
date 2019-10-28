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

class Style_8 extends Templates {

//    public function public_css() {
//        wp_enqueue_style('oxi-addons-main-wrapper-image-comparison-style-1', SA_ADDONS_UPLOAD_URL . '/Image_comparison/File/twentytwenty.css', false, SA_ADDONS_PLUGIN_VERSION);
//    }

    public function default_render($style, $child, $admin) {
        $text1 = $text2 = '';

        $styledata = $this->style;
        $id = $styledata['shortcode-addons-elements-id'];
        if($styledata['sa_animated_text_style_8'] != ''){
        echo '<div class="oxi-addons-wrapper-style-8">
                          <h1 class="oxi-addons-h1" data-text="' . $this->text_render($styledata['sa_animated_text_style_8']) . '">
                            <span class="oxi-addons-glitch1" data-text="' . $this->text_render($styledata['sa_animated_text_style_8']) . '" aria-hidden></span>
                            <span class="oxi-addons-glitch2" data-text="' . $this->text_render($styledata['sa_animated_text_style_8']) . '" aria-hidden></span>
                           ' . $this->text_render($styledata['sa_animated_text_style_8']) . '
                          </h1>
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
                          <h1 class="oxi-addons-h1" data-text="' . OxiAddonsTextConvert($stylefiles[3]) . '">
                            <span class="oxi-addons-glitch1" data-text="' . OxiAddonsTextConvert($stylefiles[3]) . '" aria-hidden></span>
                            <span class="oxi-addons-glitch2" data-text="' . OxiAddonsTextConvert($stylefiles[3]) . '" aria-hidden></span>
                           ' . OxiAddonsTextConvert($stylefiles[3]) . '
                          </h1>
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
          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . '; 
             ' . $aling . '
          overflow: hidden;
      }   
      .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-h1{
          position: relative;
          color: transparent;
          white-space: nowrap;
          transform: skew(-10deg);
          display: inline-block; 
          font-size: ' . $styledata[23] . 'px;
          ' . OxiAddonsFontSettings($styledata, 27) . ';
      }
      .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-h1 .oxi-addons-glitch1,
      .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-h1  .oxi-addons-glitch2 {
        position: absolute;
        top: 0;
        left: 0;
      }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-h1::before,
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-h1::after,
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-h1 .oxi-addons-glitch2::before,
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-h1 .oxi-addons-glitch2::after,
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-h1 .oxi-addons-glitch1::before,
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-h1 .oxi-addons-glitch1::after {
          content: attr(data-text);
          position: absolute;
          top: 0;
          left: 0; 
          color: yellow; 
          z-index: 1;
          pointer-events: none;
          mix-blend-mode: multiply;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-h1 .oxi-addons-glitch2::before { 
          color: ' . $styledata[35] . '; 
          animation: trans4 3.2s infinite;
          z-index: -1;
          clip-path: inset(62% 0 0 0);
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-h1 .oxi-addons-glitch2::after { 
          color: ' . $styledata[37] . '; 
          animation: trans5 3.2s infinite;
          z-index: -1;
          clip-path: inset(62% 0 0 0);
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-h1::before {
          clip-path: inset(0 0 43% 0);
          animation: trans6 3.2s infinite; 
          color: ' . $styledata[39] . '; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-h1::after {
          clip-path: inset(62% 0 0 0);
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-h1 .oxi-addons-glitch1::before {
          clip-path: inset(57% 0 42% 0);
          animation: trans2 .8s steps(1, start) infinite;
          animation-fill-mode: both;
          animation-delay: 0.2s; 
          color:  ' . $styledata[33] . '; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-h1 .oxi-addons-glitch1::after {
          clip-path: inset(58% 0 38% 0);
          animation: trans1 .8s steps(1, start) infinite;
          animation-fill-mode: both;
          
          color: ' . $styledata[41] . '; 
        }

        @keyframes trans1 {
          0% {
            transform: translateX(-1%);
          }
          20% {
            transform: translateX(0.5%);
          }
          40% {
            transform: translateX(-0.2%);
          }
          60% {
            transform: translateX(0.6%);
          }
          90% {
            transform: translateX(0.8%);
          }
          100% {
            transform: translateX(-1%);
          }
        }
        @keyframes trans2 {
          0% {
            transform: translateX(5%);
          }
          20% {
            transform: translateX(2.5%);
          }
          55% {
            transform: translateX(1.8%);
          }
          60% {
            transform: translateX(2.6%);
          }
          80% {
            transform: translateX(2.8%);
          }
          100% {
            transform: translateX(3%);
          }
        }
        @keyframes trans3 {
          0% {
            transform: translateX(1%);
          }
          20% {
            transform: translateX(1.1%);
          }
          45% {
            transform: translateX(1.2%);
          }
          70% {
            transform: translateX(1.4%);
          }
          90% {
            transform: translateX(0.6%);
          }
          100% {
            transform: translateX(1.2%);
          }
        }
        @keyframes trans4 {
          0% {
            transform: translateX(0%);
          }
          60% {
            transform: translateX(0.5%);
          }
          60.001% {
            transform: translateX(0.3%);
          }
          100% {
            transform: translateX(0.2%);
          }
        }
        @keyframes trans5 {
          0% {
            transform: translateX(0%);
          }
          60% {
            transform: translateX(-0.5%);
          }
          60.001% {
            transform: translateX(-0.3%);
          }
          100% {
            transform: translateX(-0.2%);
          }
        }
        @keyframes trans6 {
          0% {
            transform: translateX(0.6%);
          }
          60% {
            transform: translateX(1.1%);
          }
          60.001% {
            transform: translateX(0.9%);
          }
          100% {
            transform: translateX(1.2%);
          }
        }
    @media only screen and (min-width : 669px) and (max-width : 993px){
        .oxi-addons-wrapper-' . $oxiid . '{ 
          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . '; 
      } 
         .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-h1{ 
          font-size: ' . $styledata[24] . 'px; 
      }
    }
    @media only screen and (max-width : 668px){
      .oxi-addons-wrapper-' . $oxiid . '{ 
          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . '; 
      }  
         .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-h1{ 
          font-size: ' . $styledata[25] . 'px; 
      }
    }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
