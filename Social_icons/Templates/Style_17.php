<?php

namespace SHORTCODE_ADDONS_UPLOAD\Social_icons\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_17
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_17 extends Templates {

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

            echo '<div class = "oxi-addons-social-style-17  oxi-addons-social-style-17-' . $key . '"  ' . $this->animation_render('sa_social_icons_animation', $style) . '>
                        <a ' . $link . ' class = "oxi-icon-style-17 oxi-icon-item">' . $icon . '</a>
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
            echo '<div class = "oxi-addons-social-' . $oxiid . '  " ' . OxiAddonsAnimation($styledata, 29) . '>
                        <a href="' . OxiAddonsUrlConvert($listfiles[3]) . '" target="' . $styledata[45] . '" class = "oxi-icon-' . $oxiid . ' oxi-icon-item-' . $value['id'] . '">' . oxi_addons_font_awesome($listfiles[1]) . '</a>
                    ';

            echo '</div>';
            if ($styledata[37] == '') {
                $css .= '.oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . '.oxi-icon-item-' . $value['id'] . ' .oxi-icons{   color:' . $listfiles[5] . ';}';
            }
            if ($styledata[41] == '') {
                $css .= '.oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . '.oxi-icon-item-' . $value['id'] . ':hover .oxi-icons{   color:' . $listfiles[7] . ';}';
            }
            if ($styledata[63] == '') {
                $css .= ' .oxi-addons-social-' . $oxiid . ' .oxi-icon-item-' . $value['id'] . '.oxi-icon-' . $oxiid . ':hover{
                            background: ' . $listfiles[11] . ';   
                          }';
            }
            if ($styledata[79] == '') {
                $css .= '.oxi-addons-container .oxi-icon-item-' . $value['id'] . '.oxi-icon-' . $oxiid . '{
                        box-shadow: 0 0 0 ' . $styledata[51] . 'px ' . $listfiles[13] . ';
                    }
                    @media only screen and (min-width : 669px) and (max-width : 993px){
                        .oxi-addons-container .oxi-icon-item-' . $value['id'] . '.oxi-icon-' . $oxiid . '{
                            box-shadow: 0 0 0 ' . $styledata[52] . 'px ' . $listfiles[13] . ';
                        }
                    }
                    @media only screen and (max-width : 668px){ 
                        .oxi-addons-container .oxi-icon-item-' . $value['id'] . '.oxi-icon-' . $oxiid . '{
                            box-shadow: 0 0 0 ' . $styledata[53] . 'px ' . $listfiles[13] . ';
                        }
                    }
                    .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ':hover{
                      background: ' . $styledata[65] . ';'
                        . '}';
            }
            if ($styledata[81] == '') {
                $css .= '.oxi-addons-social-' . $oxiid . ' .oxi-icon-item-' . $value['id'] . '.oxi-icon-' . $oxiid . ':hover{
                        box-shadow: 0 0 0 ' . $styledata[67] . 'px ' . $listfiles[15] . ';
                    }
                    @media only screen and (min-width : 669px) and (max-width : 993px){
                        .oxi-addons-social-' . $oxiid . ' .oxi-icon-item-' . $value['id'] . '.oxi-icon-' . $oxiid . ':hover{
                            box-shadow: 0 0 0 ' . $styledata[68] . 'px ' . $listfiles[15] . ';
                        }
                    }
                    @media only screen and (max-width : 668px){ 
                        .oxi-addons-social-' . $oxiid . ' .oxi-icon-item-' . $value['id'] . '.oxi-icon-' . $oxiid . ':hover{
                            box-shadow: 0 0 0 ' . $styledata[69] . 'px ' . $listfiles[15] . ';
                        }
                    }';
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
                    position: relative;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    border-radius:' . $styledata[59] . 'px;
                }
                .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ':hover{
                    border-radius:' . $styledata[75] . 'px;
                }
                .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ' .oxi-icons{
                    font-size:' . $styledata[33] . 'px;
                    color:' . $styledata[39] . ';
                }
                .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ':hover .oxi-icons{
                    color:' . $styledata[43] . ';
                }
                .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . '{
                    box-shadow: 0 0 0 ' . $styledata[51] . 'px ' . $styledata[56] . ';
                     -webkit-transition: all 0.4s;
                     -moz-transition: all 0.4s;
                     transition: all 0.4s;
                }
                .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ':hover{
                      background: ' . $styledata[65] . ';
                      box-shadow: 0 0 0 ' . $styledata[67] . 'px ' . $styledata[72] . ';
                }
                .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ':hover .oxi-icons{
                    -webkit-animation: toRightFromLeft 0.3s forwards;
                     -moz-animation: toRightFromLeft 0.3s forwards;
                     animation: toRightFromLeft 0.3s forwards;
                }
                @-webkit-keyframes toRightFromLeft {
                    49% {
                        -webkit-transform: translate(100%);
                    }
                    50% {
                        opacity: 0;
                        -webkit-transform: translate(-100%);
                    }
                    51% {
                        opacity: 1;
                    }
                }
                @-moz-keyframes toRightFromLeft {
                    49% {
                        -moz-transform: translate(100%);
                    }
                    50% {
                        opacity: 0;
                        -moz-transform: translate(-100%);
                    }
                    51% {
                        opacity: 1;
                    }
                }
                @keyframes toRightFromLeft {
                    49% {
                        transform: translate(100%);
                    }
                    50% {
                        opacity: 0;
                        transform: translate(-100%);
                    }
                    51% {
                        opacity: 1;
                    }
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){
                        .oxi-addons-social-' . $oxiid . '{
                             padding:' . OxiAddonsPaddingMarginSanitize($styledata, 14) . ';
                        }
                        .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . '{
                            width:' . $styledata[8] . 'px;
                            height:' . $styledata[8] . 'px;
                            border-radius:' . $styledata[60] . 'px;
                        }
                        .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ':hover{
                            border-radius:' . $styledata[76] . 'px;
                        }
                        .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ' .oxi-icons{
                            font-size:' . $styledata[34] . 'px;
                        }
                        .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . '{
                            box-shadow: 0 0 0 ' . $styledata[52] . 'px ' . $styledata[56] . ';
                              }
                        .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ':hover{
                              box-shadow: 0 0 0 ' . $styledata[68] . 'px ' . $styledata[72] . ';
                        }
                }
                @media only screen and (max-width : 668px){ 
                         .oxi-addons-social-' . $oxiid . '{
                             padding:' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
                        }
                        .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . '{
                            width:' . $styledata[9] . 'px;
                            height:' . $styledata[9] . 'px;
                            border-radius:' . $styledata[61] . 'px;
                        }
                        .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ':hover{
                            border-radius:' . $styledata[77] . 'px;
                        }
                        .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ' .oxi-icons{
                            font-size:' . $styledata[35] . 'px;
                        }
                        .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . '{
                            box-shadow: 0 0 0 ' . $styledata[53] . 'px ' . $styledata[56] . ';
                        }
                        .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ':hover{
                              box-shadow: 0 0 0 ' . $styledata[69] . 'px ' . $styledata[72] . ';
                        }
                }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
