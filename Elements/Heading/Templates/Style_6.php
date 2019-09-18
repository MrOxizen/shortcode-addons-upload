<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Heading\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_6
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_6 extends Templates {

    public function default_render($style, $child, $admin) {
//    echo '<pre>';
//    print_r($style);
//    echo '</pre>';
        $heading = $content = '';
        if ($style['sa_head_text'] != '') {
            $heading = '<div class="oxi-addons-img-body">
                            <div class="oxi-addons-heading">
                                <' . $style['sa_head_heading_tag'] . ' class="oxi-addons-heading-text"> 
                                        ' . $this->text_render($style['sa_head_text']) . '
                                </' . $style['sa_head_heading_tag'] . '>
                            </div>
                        </div>';
        }
        if ($style['sa_sub_head_text'] != '') {
            $content = '<div class="oxi-addons-sub-heading">
                            <p class="oxi-addons-sub-heading-text"> 
                                ' . $this->text_render($style['sa_sub_head_text']) . '
                            </p>
                        </div>';
        }

        echo '  <div class="oxi-addons-body-container" '.$this->animation_render('sa_head_animation', $style).'>
                    ' . $content . '
                    ' . $heading . '
                </div>      ';
    }

    public function old_render() {
        $style = $this->dbdata;
        $child = $this->child;
        $oxiid = $style['id'];
            $css = '';
        $stylefiles = explode('||#||', $style['css']);

        $styledata = explode('|', $stylefiles[0]);
        $heading = $content = '';
           if ($stylefiles[3] != '') {
               $heading = '<div class="oxi-addons-img-body-' . $oxiid . '">
                               <div class="oxi-addons-Heading-body-' . $oxiid . '">
                                   <' . $styledata[39] . ' class="oxi-addons-Heading-text"> 
                                           ' . OxiAddonsTextConvert($stylefiles[3]) . '
                                   </' . $styledata[39] . '>
                               </div>
                           </div>';
           }
           if ($stylefiles[5] != '') {
               $content = '<div class="oxi-addons-Content-body-' . $oxiid . '">
                               <p class="oxi-addons-Content-text"> 
                                   ' . OxiAddonsTextConvert($stylefiles[5]) . '
                               </p>
                           </div>';
           }

           echo '  <div class="oxi-addons-container">
                       <div class="oxi-addons-row">
                           <div class="oxi-addons-body-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 95) . '>
                               ' . $content . '
                               ' . $heading . '
                           </div>
                       </div>
                   </div>';




           $css .= '
                   .oxi-addons-body-' . $oxiid . '{
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';
                       width: 100%;
                       float: left;
                   }
                   .oxi-addons-img-body-' . $oxiid . '{
                       width: 100%;
                       float: left;
                       display: block;
                       background: url(\'' . OxiAddonsUrlConvert($stylefiles[7]) . '\');
                       background-repeat: no-repeat;
                       background-size: cover;
                       background-position: center;
                       }
                   .oxi-addons-Heading-body-' . $oxiid . '{
                       width: 100%;
                       float: left;
                   }
                   .oxi-addons-Heading-body-' . $oxiid . ' .oxi-addons-Heading-text{
                       width: 100%;
                       float: left;
                       font-size: ' . $styledata[35] . 'px;
                       ' . OxiAddonsFontSettings($styledata, 43) . '; 
                       color: ' . $styledata[41] . ';
                           margin: 0;
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
                   }
                   .oxi-addons-Content-body-' . $oxiid . '{
                       width: 100%;
                       float: left;
                   }
                   .oxi-addons-Content-body-' . $oxiid . '  .oxi-addons-Content-text{
                       width: 100%;
                       float: left;
                       font-size: ' . $styledata[65] . 'px;
                       ' . OxiAddonsFontSettings($styledata, 73) . '; 
                       color: ' . $styledata[71] . ';
                           margin: 0;
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 79) . ';
                   }
                   @media only screen and (min-width : 669px) and (max-width : 993px){
                       .oxi-addons-body-' . $oxiid . '{
                           padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 100) . ';
                       }
                       .oxi-addons-img-body-' . $oxiid . '{
                           width: 100%;
                           float: left;
                           background-position: center;
                           }
                       .oxi-addons-Heading-body-' . $oxiid . ' .oxi-addons-Heading-text{
                           font-size: ' . $styledata[36] . 'px;
                           margin: 0;
                           padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 50) . ';
                       }
                       .oxi-addons-Content-body-' . $oxiid . '  .oxi-addons-Content-text{
                           font-size: ' . $styledata[66] . 'px;
                           margin: 0;
                           padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 80) . ';
                       }
                   }
                   @media only screen and (max-width : 668px){
                       .oxi-addons-body-' . $oxiid . '{
                           padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
                       }
                       .oxi-addons-img-body-' . $oxiid . '{
                           width: 100%;
                           float: left;
                           background-position: center;
                           }
                       .oxi-addons-Heading-body-' . $oxiid . ' .oxi-addons-Heading-text{
                           font-size: ' . $styledata[37] . 'px;
                           margin: 0;
                           padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 51) . ';
                       }
                       .oxi-addons-Content-body-' . $oxiid . '  .oxi-addons-Content-text{
                           font-size: ' . $styledata[67] . 'px;
                           margin: 0;
                           padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
                       }
                   }
                   ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
