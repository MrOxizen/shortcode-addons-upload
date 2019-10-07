<?php

namespace SHORTCODE_ADDONS_UPLOAD\Icon\Templates;

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

class Style_1 extends Templates
{


    public function default_render($style, $child, $admin)
    {

        $datas = (array_key_exists('sa_icon_repeater', $style) && is_array($style['sa_icon_repeater']) ? $style['sa_icon_repeater'] : []);
        foreach ($datas as $key => $value) {
            $icon = '';
            if (array_key_exists('sa_icon_icon_link-url', $value) && $value['sa_icon_icon_link-url'] != '') {
                $icon = '<a ' . $this->url_render('sa_icon_icon_link', $value) . ' class="oxi_addons__icon"  ' . ($value['sa_icon_icon_id'] != '' ? 'id="' . $value['sa_icon_icon_id'] . '"' : '') . '>
                ' . $this->font_awesome_render($value['sa_icon_icon']) . '
            </a>';
            } else {
                $icon = '<div class="oxi_addons__icon" ' . ($value['sa_icon_icon_id'] != '' ? 'id="' . $value['sa_icon_icon_id'] . '"' : '') . '>
                ' . $this->font_awesome_render($value['sa_icon_icon']) . '
            </div>';
            }


            echo '  <div class="oxi_addons__icon_main_wrapper ' . $this->column_render('sa_icon_column', $style) . '">
                            <div class="oxi_addons__icon_main_style_1 oxi_addons__icon_main-' . $key . '">
                                ' . $icon . '
                            </div>
                        ';
            echo ' </div>';
        }
    }

    public function old_render()
    {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);

        echo '<div class="oxi-addons-container">
    <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $listfiles = explode('||#||', $value['files']);
            echo '<div class="' . OxiAddonsItemRows($styledata, 31) . ' oxi-addons-center" ' . OxiAddonsAnimation($styledata, 23) . '>';
            if ($listfiles[7] != '') {
                $hreffirst = '<a href="' . OxiAddonsUrlConvert($listfiles[7]) . '" target = "' . $styledata[1] . '"  class="oxi-icon oxi-icon-' . $oxiid . '" id="' . $listfiles[5] . '">';
                $hreflast = '</a>';
            } else {
                $hreffirst = '<div  class="oxi-icon oxi-icon-' . $oxiid . '" id="' . $listfiles[5] . '">';
                $hreflast = '</div>';
            }
            echo $hreffirst;
            echo '' . oxi_addons_font_awesome($listfiles[3]) . '';
            echo $hreflast;

            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
        $css = '.oxi-addons-container .oxi-icon-' . $oxiid . '{
                    max-width: ' . $styledata[15] . 'px;
                    width: 100%;
                    height: ' . $styledata[15] . 'px;
                    margin: ' . $styledata[7] . 'px ' . $styledata[11] . 'px;
                    background:' . $styledata[21] . ';
                    border-radius:' . $styledata[27] . 'px;
            }
                .oxi-addons-container .oxi-icon-' . $oxiid . ':hover,
                .oxi-addons-container .oxi-icon-' . $oxiid . ':focus,
                .oxi-addons-container .oxi-icon-' . $oxiid . ':active{
                    max-width: ' . $styledata[15] . 'px;
                    width: 100%;
                    height: ' . $styledata[15] . 'px;
                    margin: ' . $styledata[7] . 'px ' . $styledata[11] . 'px;
                    animation-duration: ' . $styledata[25] . 's;
                    background:' . $styledata[21] . ';
                    border-radius:' . $styledata[27] . 'px;
                }
                .oxi-addons-container .oxi-icon-' . $oxiid . ' .oxi-icons {
                    font-size: ' . $styledata[3] . 'px;
                    color:' . $styledata[19] . ';
                    line-height: ' . $styledata[15] . 'px;
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){
                    .oxi-addons-container .oxi-icon-' . $oxiid . '{
                        max-width: ' . $styledata[16] . 'px;
                        height: ' . $styledata[16] . 'px;
                        margin: ' . $styledata[8] . 'px ' . $styledata[12] . 'px;
                    }
                    .oxi-addons-container .oxi-icon-' . $oxiid . ' .oxi-icons {
                        line-height: ' . $styledata[16] . 'px;
                    }
                }
                @media only screen and (max-width : 668px){
                    .oxi-addons-container .oxi-icon-' . $oxiid . '{
                        max-width: ' . $styledata[17] . 'px;
                        height: ' . $styledata[17] . 'px;
                        margin: ' . $styledata[9] . 'px ' . $styledata[13] . 'px;
                    }
                    .oxi-addons-container .oxi-icon-' . $oxiid . ' .oxi-icons {
                        line-height: ' . $styledata[17] . 'px;
                    }
                }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
