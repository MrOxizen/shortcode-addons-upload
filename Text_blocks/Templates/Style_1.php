<?php

namespace SHORTCODE_ADDONS_UPLOAD\Text_blocks\Templates;

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

        $text_1 = $text_2 = $text_3 = '';
        if ($style['sa_t_b_1st_text'] != '') {
            $text_1 = '
            <div class="oxi-addons-text-blocks-1st-body">' . $this->text_render($style['sa_t_b_1st_text']) . '</div>
        ';
        }
        if ($style['sa_t_b_2n_text'] != '') {
            $text_2 = '
        <div class="oxi-addons-text-blocks-2nd-body">' . $this->text_render($style['sa_t_b_2n_text']) . '</div>
        ';
        }
        if ($style['sa_t_b_3rd_text'] != '') {
            $text_3 = '
        <div class="oxi-addons-text-blocks-3rd-body">' . $this->text_render($style['sa_t_b_3rd_text']) . '</div>
        ';
        }

  
            echo ' <div class="oxi-addons-text-blocks-style-1" '.$this->animation_render('sa_t_b_animation', $style).'>
                        ' . $text_1 . '
                        ' . $text_2 . '
                        ' . $text_3 . ' 
                    </div>';
     
    }

    public function old_render() {
        $style = $this->dbdata;
        $child = $this->child;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $css = '';
//        echo '<pre>';
//        print_r($stylefiles);
//        echo '</pre>';
        $styledata = explode('|', $stylefiles[0]);
        $text_1 = $text_2 = $text_3 = '';
        if ($stylefiles[3] != '') {
            $text_1 = '
            <div class="oxi-addons-text-blocks-1st-body-' . $oxiid . '">' . OxiAddonsTextConvert($stylefiles[3]) . '</div>
        ';
        }
        if ($stylefiles[5] != '') {
            $text_2 = '
        <div class="oxi-addons-text-blocks-2nd-body-' . $oxiid . '">' . OxiAddonsTextConvert($stylefiles[5]) . '</div>
        ';
        }
        if ($stylefiles[7] != '') {
            $text_3 = '
        <div class="oxi-addons-text-blocks-3rd-body-' . $oxiid . '">' . OxiAddonsTextConvert($stylefiles[7]) . '</div>
        ';
        }

        echo '<div class="oxi-addons-container" > 
                    <div class="oxi-addons-row">
                        <div class="oxi-addons-text-blocks-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 19) . '>
                            ' . $text_1 . '
                            ' . $text_2 . '
                            ' . $text_3 . ' 
                        </div>
                    </div>
              </div>';
        $css .= '.oxi-addons-text-blocks-' . $oxiid . '{
                    width:100%;
                    float:left;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 3) . ';
                }
                .oxi-addons-text-blocks-1st-body-' . $oxiid . '{
                    width:100%;
                    float:left;
                    
                    font-size:' . $styledata[23] . 'px;
                    color: ' . $styledata[27] . ';
                    ' . OxiAddonsFontSettings($styledata, 29) . '
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . ';
                }
                .oxi-addons-text-blocks-2nd-body-' . $oxiid . '{
                    width:100%;
                    float:left;
                    
                    font-size:' . $styledata[51] . 'px;
                    color: ' . $styledata[55] . ';
                    ' . OxiAddonsFontSettings($styledata, 57) . '
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . ';
                }
                .oxi-addons-text-blocks-3rd-body-' . $oxiid . '{
                    width:100%;
                    float:left;
                    
                    font-size:' . $styledata[79] . 'px;
                    color: ' . $styledata[83] . ';
                    ' . OxiAddonsFontSettings($styledata, 85) . '
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 91) . ';
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){
                   .oxi-addons-text-blocks-' . $oxiid . '{
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 4) . ';
                    }
                    .oxi-addons-text-blocks-1st-body-' . $oxiid . '{
                        font-size:' . $styledata[24] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 36) . ';
                    }
                    .oxi-addons-text-blocks-2nd-body-' . $oxiid . '{
                        font-size:' . $styledata[52] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 64) . ';
                    }
                    .oxi-addons-text-blocks-3rd-body-' . $oxiid . '{
                        font-size:' . $styledata[80] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 92) . ';
                    } 
                }
                @media only screen and (max-width : 668px){
                     .oxi-addons-text-blocks-' . $oxiid . '{
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';
                    }
                    .oxi-addons-text-blocks-1st-body-' . $oxiid . '{
                        font-size:' . $styledata[25] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 37) . ';
                    }
                    .oxi-addons-text-blocks-2nd-body-' . $oxiid . '{
                        font-size:' . $styledata[53] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 65) . ';
                    }
                    .oxi-addons-text-blocks-3rd-body-' . $oxiid . '{
                        font-size:' . $styledata[81] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . ';
                    } 
                }
                 ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
