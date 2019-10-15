<?php

namespace SHORTCODE_ADDONS_UPLOAD\Social_icons\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_13
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_13 extends Templates {

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

            echo '<div class = "oxi-addons-social-style-13  oxi-addons-social-style-13-' . $key . '"  ' . $this->animation_render('sa_social_icons_animation', $style) . '>
                        <a ' . $link . ' class = "oxi-icon-style-13 oxi-icon-item">' . $icon . '</a>
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
            echo '<div class = "oxi-addons-social-' . $oxiid . ' " ' . OxiAddonsAnimation($styledata, 29) . '>
                        <a href="' . OxiAddonsUrlConvert($listfiles[3]) . '" target="' . $styledata[45] . '" class = "oxi-icon-' . $oxiid . ' oxi-icon-item-' . $value['id'] . '">' . oxi_addons_font_awesome($listfiles[1]) . '</a>
                    ';
           
            echo '</div>';
            if ($styledata[37] == '') {
                $css .= '.oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . '.oxi-icon-item-' . $value['id'] . ' .oxi-icons{   color:' . $listfiles[5] . ';}';
            }
            if ($styledata[41] == '') {
                $css .= '.oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . '.oxi-icon-item-' . $value['id'] . ':hover .oxi-icons{   color:' . $listfiles[7] . ';}';
            }
            if ($styledata[47] == '') {
                $css .= '.oxi-addons-container .oxi-icon-item-' . $value['id'] . '.oxi-icon-' . $oxiid . ':after{
                        background: ' . $listfiles[9] . ';
                    }
                    .oxi-addons-social-' . $oxiid . ' .oxi-icon-item-' . $value['id'] . '.oxi-icon-' . $oxiid . '{
                        box-shadow: 0 0 0 0px ' . $listfiles[9] . ';
                    }';
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
        echo '</div></div>';
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
                    box-shadow: 0 0 0 0px ' . $styledata[49] . ';
                }
                .oxi-addons-container .oxi-icon-' . $oxiid . ':after{
                    pointer-events: none;
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    border-radius:' . $styledata[75] . 'px;
                    content: "";
                    z-index: 1;
                    -webkit-box-sizing: content-box;
                    -moz-box-sizing: content-box;
                    box-sizing: content-box;   
                    top: -' . $styledata[67] . 'px;
                    left: -' . $styledata[67] . 'px;
                    padding: ' . $styledata[67] . 'px;
                    background: ' . $styledata[49] . ';
                    -webkit-transition: all 0.2s;
                    -moz-transition: all 0.2s;
                    transition: all 0.2s;
                } 
                .oxi-addons-container .oxi-icon-' . $oxiid . ':hover:after{
                     -webkit-transform: scale(0);
                    -moz-transform: scale(0);
                    -ms-transform: scale(0);
                    transform: scale(0);
                    padding: 0px;
                }
                .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ' .oxi-icons{
                  z-index: 2;
                }
                .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ':hover{
                   box-shadow: 0 0 0 ' . $styledata[67] . 'px ' . $styledata[72] . ';
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

                    .oxi-addons-container .oxi-icon-' . $oxiid . ':after{
                        border-radius:' . $styledata[76] . 'px;
                        top: -' . $styledata[68] . 'px;
                        left: -' . $styledata[68] . 'px;
                        padding: ' . $styledata[68] . 'px;
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
                    .oxi-addons-container .oxi-icon-' . $oxiid . ':after{
                        border-radius:' . $styledata[77] . 'px;
                        top: -' . $styledata[69] . 'px;
                        left: -' . $styledata[69] . 'px;
                        padding: ' . $styledata[69] . 'px;
                    } 
                    .oxi-addons-social-' . $oxiid . ' .oxi-icon-' . $oxiid . ':hover{
                       box-shadow: 0 0 0 ' . $styledata[69] . 'px ' . $styledata[72] . ';
                    }
                }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
