<?php

namespace SHORTCODE_ADDONS_UPLOAD\Divider\Templates;

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

class Style_5 extends Templates {

    public function default_render($style, $child, $admin) {

        echo '<div class="oxi-divider-style5 ' . $style['sa_divider_align'] . '" id="' . $style['sa_divider_id'] . '"  ' . $this->animation_render('sa_divider_animation', $style) . '>
                    <div class="oxi-divider-left"><div class="oxi-divider"></div></div>
                    <div class="oxi-divider-content"><div class="oxi-text">' . $this->text_render($style['sa_divider_text']) . '</div></div>
                    <div class="oxi-divider-right"><div class="oxi-divider"></div></div>
              </div>';
    }

    public function old_render() {
        $style = $this->dbdata;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);

        $css = '';

        if ($style[11] == 'left') {
            $cssmargin = 'margin: 0 auto 0 0 !important;';
        } elseif ($style[11] == 'center') {
            $cssmargin = 'margin: 0 auto !important;';
        } else {
            $cssmargin = 'margin: 0 0 0 auto !important;';
        }
        echo '  <div class="oxi-addons-container">
                <div class="oxi-addons-row">
                    <div ' . OxiAddonsAnimation($style, 13) . '>
                        <div class="oxi-divider-' . $oxiid . '" id="' . $stylefiles[2] . '">
                            <div class="oxi-divider-left"><div class="oxi-divider"></div></div>
                            <div class="oxi-divider-content"><div class="oxi-text">' . oxi_addons_html_decode($stylefiles[5]) . '</div></div>
                            <div class="oxi-divider-right"><div class="oxi-divider"></div></div>
                        </div>
                    </div>
                </div>
            </div>';
        $css .= '.oxi-divider-' . $oxiid . '{
                    position: relative;
                    display: table;
                    width: 100%;
                    max-width:' . $style[7] . 'px;
                    padding:' . $style[17] . 'px ' . $style[29] . 'px ' . $style[21] . 'px ' . $style[25] . 'px;
                    ' . $cssmargin . '    
                }
               .oxi-divider-' . $oxiid . ' .oxi-divider-left,
               .oxi-divider-' . $oxiid . ' .oxi-divider-right{
                    display: table-cell;
                    width: 50%;
                    vertical-align: middle;
                }
                .oxi-divider-' . $oxiid . ' .oxi-divider-left{
                    width: ' . $style[39] . '%;
                }
                .oxi-divider-' . $oxiid . ' .oxi-divider-right{
                    width: ' . (100 - $style[39]) . '%;
                }
                .oxi-divider-' . $oxiid . ' .oxi-divider-content{
                    display: table-cell;
                }
                .oxi-divider-' . $oxiid . ' .oxi-text{
                    display: block;
                    font-size: ' . $style[33] . 'px;
                    color: ' . $style[37] . ';
                    ' . OxiAddonsFontSettings($style, 65) . '
                    padding: ' . $style[43] . 'px ' . $style[55] . 'px ' . $style[47] . 'px ' . $style[51] . 'px;
                    white-space: nowrap;
                    border: ' . $style[59] . 'px ' . $style[60] . ' ;
                    border-color:' . $style[61] . ';
                    border-radius: ' . $style[63] . 'px;
                }
               .oxi-divider-' . $oxiid . ' .oxi-divider-left .oxi-divider {
                    border-top-style: ' . $style[4] . ';
                    border-top-color: ' . $style[5] . ';
                    border-top-width: ' . $style[3] . 'px;
                    margin-top: 1px;
                }
                .oxi-divider-' . $oxiid . ' .oxi-divider-right .oxi-divider {
                    border-top-style: ' . $style[4] . ';
                    border-top-color: ' . $style[5] . ';
                    border-top-width: ' . $style[3] . 'px;
                    margin-top: 1px;
                }
               @media only screen and (min-width : 669px) and (max-width : 993px){
                   .oxi-divider-' . $oxiid . '{
                        max-width:' . $style[8] . 'px;
                        padding:' . $style[18] . 'px ' . $style[30] . 'px ' . $style[22] . 'px ' . $style[26] . 'px;
                     }
                     .oxi-divider-' . $oxiid . ' .oxi-divider-left{
                        width: ' . $style[40] . '%;
                    }
                    .oxi-divider-' . $oxiid . ' .oxi-divider-right{
                        width: ' . (100 - $style[40]) . '%;
                    }
                    .oxi-divider-' . $oxiid . ' .oxi-text{
                        font-size: ' . $style[34] . 'px;
                        padding: ' . $style[44] . 'px ' . $style[56] . 'px ' . $style[48] . 'px ' . $style[52] . 'px;
                     }
                }
                @media only screen and (max-width : 668px){
                    .oxi-divider-' . $oxiid . '{
                        max-width:' . $style[9] . 'px;
                        padding:' . $style[19] . 'px ' . $style[31] . 'px ' . $style[23] . 'px ' . $style[27] . 'px;
                        margin: 0 auto !important;
                     }
                     .oxi-divider-' . $oxiid . ' .oxi-divider-left{
                        width: ' . $style[41] . '%;
                    }
                    .oxi-divider-' . $oxiid . ' .oxi-divider-right{
                        width: ' . (100 - $style[41]) . '%;
                    }
                    .oxi-divider-' . $oxiid . ' .oxi-text{
                        font-size: ' . $style[35] . 'px;
                        padding: ' . $style[45] . 'px ' . $style[57] . 'px ' . $style[49] . 'px ' . $style[53] . 'px;
                     }
                }
                ';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
