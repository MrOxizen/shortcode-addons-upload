<?php

namespace SHORTCODE_ADDONS_UPLOAD\Social_icons\Templates;

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

//    public function inline_public_css() {
//        $style = $this->style;
//        $css = $ncolor = $hcolor = '';
//        $all_data = (array_key_exists('sa_social_icons_data', $style) && is_array($style['sa_social_icons_data'])) ? $style['sa_social_icons_data'] : [];
//        foreach ($all_data as $key => $listitemdata) {
//            if ($listitemdata['sa_social_icons_color'] != '') {
//                $ncolor = $listitemdata['sa_social_icons_color'];
//                $css .= '.oxi-addons-social-style-1.oxi-addons-social-style-1-' . $key . ' .oxi-icon-style-1 .oxi-icons{
//                                color : ' . $ncolor . ';
//                            }';
//            }
//            if ($listitemdata['sa_social_icons_color_hover'] != '') {
//                $hcolor = $listitemdata['sa_social_icons_color_hover'];
//                  $css .= '.oxi-addons-social-style-1.oxi-addons-social-style-1-' . $key . ' .oxi-icon-style-1:hover .oxi-icons{
//                                color : ' . $hcolor . ';
//                            }';
//            }
//        }
//        return $css;
//    }

    public function default_render($style, $child, $admin) {
        $link = $icon = $ncolor = $hcolor = '';
        $all_data = (array_key_exists('sa_social_icons_data', $style) && is_array($style['sa_social_icons_data'])) ? $style['sa_social_icons_data'] : [];
       echo '<div class="oxi-addons-center">';
        foreach ($all_data as $key => $listitemdata) {

            if ($listitemdata['sa_social_icons_url-url'] != '') {
                $link = $this->url_render('sa_social_icons_url', $listitemdata);
            }
            if ($listitemdata['sa_social_icons_icon'] != '') {
                $icon = $this->font_awesome_render($listitemdata['sa_social_icons_icon']);
            }

            echo '<div class = "oxi-addons-social-style-1  oxi-addons-social-style-1-' . $key . '"  ' . $this->animation_render('sa_social_icons_animation', $style) . '>
                        <a ' . $link . ' class = "oxi-icon-style-1 oxi-icon-item">' . $icon . '</a>
                    </div>';
        }
        echo '</div>';
    }

    public function old_render() {
        $style = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $style['id'];
        $css = '';
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        echo '<div class="oxi-addons-container">
                <div class="oxi-addons-row oxi-addons-center">';
        foreach ($listdata as $value) {
            $listfiles = explode('||#||', $value['files']);

            echo '<div class = "oxi-addons-social-' . $oxiid . ' "  ' . OxiAddonsAnimation($styledata, 29) . '>
                    <a href="' . OxiAddonsUrlConvert($listfiles[3]) . '" target="' . $styledata[45] . '" class = "oxi-icon-' . $oxiid . ' oxi-icon-item-' . $value['id'] . '">' . oxi_addons_font_awesome($listfiles[1]) . '</a>';
            echo '</div>';

            if ($styledata[37] == '') {
                $css .= '.oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . '.oxi-icon-item-' . $value['id'] . ' .oxi-icons{   color:' . $listfiles[5] . ';}';
            }
            if ($styledata[41] == '') {
                $css .= '.oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . '.oxi-icon-item-' . $value['id'] . ':hover .oxi-icons{   color:' . $listfiles[7] . ';}';
            }
        }
        echo '</div>'
        . '</div>';
        $css .= '.oxi-addons-social-' . $oxiid . '{
                    position:relative;
                    margin:0 auto;
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ';
                    display: inline-block;
                }
                .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . '{
                    width:' . $styledata[7] . 'px;
                    height:' . $styledata[7] . 'px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ' .oxi-icons{
                    font-size:' . $styledata[33] . 'px;
                    color:' . $styledata[39] . ';
                }
                .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ':hover .oxi-icons{
                    color:' . $styledata[43] . ';
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){
                    .oxi-addons-social-' . $oxiid . '{
                         padding:' . OxiAddonsPaddingMarginSanitize($styledata, 14) . ';
                    }
                    .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . '{
                        width:' . $styledata[8] . 'px;
                        height:' . $styledata[8] . 'px;
                     }
                    .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ' .oxi-icons{
                        font-size:' . $styledata[34] . 'px;
                     }
                }
                @media only screen and (max-width : 668px){ 
                    .oxi-addons-social-' . $oxiid . '{
                         padding:' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
                    }
                    .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . '{
                        width:' . $styledata[9] . 'px;
                        height:' . $styledata[9] . 'px;
                     }
                    .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ' .oxi-icons{
                        font-size:' . $styledata[35] . 'px;
                     }
                }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
