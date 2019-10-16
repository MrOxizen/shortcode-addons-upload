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

class Style_3 extends Templates {

    public function default_render($style, $child, $admin) {

        echo '<div class="oxi-divider-style3 ' . $style['sa_divider_align'] . '" id="' . $style['sa_divider_id'] . '"  ' . $this->animation_render('sa_divider_animation', $style) . '>
                    <div class="oxi-divider-left"><div class="oxi-divider"></div></div>
                    <div class="oxi-divider-content">' . $this->font_awesome_render($style['sa_divider_icon']) . '</div>
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
                        <div class="oxi-divider-' . $oxiid . '" id="' . $stylefiles[2] . '" ' . OxiAddonsAnimation($style, 13) . '>
                            <div class="oxi-divider-left"><div class="oxi-divider"></div></div>
                            <div class="oxi-divider-content">' . oxi_addons_font_awesome($stylefiles[5]) . '</div>
                            <div class="oxi-divider-right"><div class="oxi-divider"></div></div>
                        </div>
                </div>
            </div>';
        wp_add_inline_script('oxi-addons-animation', 'function OxiAddonsEqualHeightWidth(data) {
                                                            var cw = jQuery(data).outerWidth();
                                                            var ch = jQuery(data).outerHeight();
                                                            if (cw > ch) {
                                                                jQuery(data).css({"height": cw + "px"});
                                                                jQuery(data).css({"width": cw + "px"});
                                                            } else {
                                                                jQuery(data).css({"height": ch + "px"});
                                                                jQuery(data).css({"width": ch + "px"});
                                                            }
                                                           
                                                        };
                                                       setTimeout(function () { OxiAddonsEqualHeightWidth(".oxi-divider-' . $oxiid . ' .oxi-icons");}, 500)');

        $css .= '.oxi-divider-' . $oxiid . '{
                    position: relative;
                    display: table;
                    width: 100%;
                    max-width:' . $style[7] . 'px;
                    padding:' . OxiAddonsPaddingMarginSanitize($style, 17) . ';
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
                .oxi-divider-' . $oxiid . ' .oxi-icons{
                    justify-content: center;
                    align-items: center;
                    display: flex;
                    font-size: ' . $style[33] . 'px;
                    color: ' . $style[37] . ';
                    border: ' . $style[59] . 'px ' . $style[60] . ';
                    border-color:' . $style[61] . ';
                    border-radius: ' . $style[63] . '%;
                    padding: ' . $style[43] . 'px ' . $style[55] . 'px ' . $style[47] . 'px ' . $style[51] . 'px;
                    white-space: nowrap;
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
                        padding:' . OxiAddonsPaddingMarginSanitize($style, 18) . ';
                     }
                     .oxi-divider-' . $oxiid . ' .oxi-divider-left{
                        width: ' . $style[40] . '%;
                    }
                    .oxi-divider-' . $oxiid . ' .oxi-divider-right{
                        width: ' . (100 - $style[40]) . '%;
                    }
                    .oxi-divider-' . $oxiid . ' .oxi-icons{
                        font-size: ' . $style[34] . 'px;
                        padding: ' . $style[44] . 'px ' . $style[56] . 'px ' . $style[48] . 'px ' . $style[52] . 'px;
                     }
                }
                @media only screen and (max-width : 668px){
                    .oxi-divider-' . $oxiid . '{
                        max-width:' . $style[9] . 'px;
                        padding:' . OxiAddonsPaddingMarginSanitize($style, 19) . ';
                        margin: 0 auto !important;
                     }
                     .oxi-divider-' . $oxiid . ' .oxi-divider-left{
                        width: ' . $style[41] . '%;
                    }
                    .oxi-divider-' . $oxiid . ' .oxi-divider-right{
                        width: ' . (100 - $style[41]) . '%;
                    }
                    .oxi-divider-' . $oxiid . ' .oxi-icons{
                        font-size: ' . $style[35] . 'px;
                        padding: ' . $style[45] . 'px ' . $style[57] . 'px ' . $style[49] . 'px ' . $style[53] . 'px;
                     }
                }
                ';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
