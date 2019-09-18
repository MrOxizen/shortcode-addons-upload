<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Single_image\Templates;

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
//        echo '<pre>';
//        print_r($style['sa_s_image_ribbon_pos']);
//        echo '</pre>';
        $deg = '';
        if ( array_key_exists('sa_s_image_ribbon', $style) && $style['sa_s_image_ribbon'] != '0' && $style['sa_s_image_ribbon_pos'] != '') {
            if ($style['sa_s_image_ribbon_pos'] == 'sa_info_image_img_alignment_left') {
                $deg = 'transform: rotate(-45deg); left : ' . $style['sa_s_image_ribbon_left'] . 'px; ';
            } else {
                $deg = 'transform: rotate(45deg);right : ' . $style['sa_s_image_ribbon_right'] . 'px; ';
            }
        }
        $ribbon = '';
        if (array_key_exists('sa_s_image_ribbon', $style) && $style['sa_s_image_ribbon'] != '0') {
            $ribbon .= '<div class="oxi-addons-single-image-ribbon" style="' . $deg . '">
                            <div class="oxi-addons-single-image-ribbon-position">
                                <div class="oxi-addons-single-image-ribbon-content">' . $this->text_render($style['sa_s_image_ribbon_text']) . '</div>
                            </div>
                        </div>';
        }
        if ($this->media_render('sa_s_image_img', $style) != '') {
            echo ' <div class="oxi-addons-single-image-container" id="' . $style['sa_s_image_ID'] . '">
                            <div class="oxi-addons-single-image-row">
                                <div class="oxi-addons-single-image">
                                    <img src="' . $this->media_render('sa_s_image_img', $style) . '">
                                </div>
                                ' . $ribbon . '
                            </div>
                        </div>';
        } else {
            echo '<div style="color : red;">Please Upload an Image !</div>';
        }
    }

    public function old_render() {
        $style = $this->dbdata;
        $child = $this->child;
        $oxiid = $style['id'];
        $css = '';
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);

        echo '  <div class="oxi-addons-container">
                    <div class="oxi-addons-row">
                        <div class="oxi-addons-single-image-container-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 159) . ' id="' . $stylefiles[3] . '">
                            <div class="oxi-addons-single-image-row">
                                <div class="oxi-addons-single-image">
                                    <img src="' . OxiAddonsUrlConvert($stylefiles[5]) . '">
                                </div>
                                <div class="oxi-addons-single-image-ribbon">
                                    <div class="oxi-addons-single-image-ribbon-position">
                                        <div class="oxi-addons-single-image-ribbon-content">' . $stylefiles[7] . '</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
        if ($styledata[165] == 'left') {
            $ribbonpo = '-';
        } else {
            $ribbonpo = '';
        }
        $css .= '.oxi-addons-single-image-container-' . $oxiid . '{
                    display: inline-block;
                    overflow: hidden;
                    vertical-align: middle;
                    max-width: 100%;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';   
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-row{
                    display: block;
                    overflow: hidden;
                    vertical-align: middle;
                    max-width: 100%;
                    position: relative;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 3) . ';
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image{
                    display: block;
                    width: 100%;
                    position: relative;
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
                    border-style:' . $styledata[57] . '; 
                    border-color:' . $styledata[58] . ';
                    ' . OxiAddonsBoxShadowSanitize($styledata, 35) . '
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 61) . ';
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image img{
                    display: block;
                    width: 100%;
                    height: auto;
                    -webkit-filter: grayscale(' . $styledata[153] . '%);
                    filter: grayscale(' . $styledata[153] . '%);
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 61) . ';
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image::before{
                    position: absolute;
                    z-index: 2;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    display: block;
                    content: "";
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                    -webkit-transition: inherit;
                    transition: inherit;
                    background: ' . $styledata[163] . ';
                    box-shadow: inset 0px 0px 0px ' . $styledata[79] . 'px ' . $styledata[77] . ';
                }
                 .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image:hover{
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
                    border-style:' . $styledata[97] . '; 
                    border-color:' . $styledata[98] . ';
                    background:' . $styledata[98] . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
                    over-flow:hidden;
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image:hover img{
                    -webkit-filter: grayscale(' . $styledata[155] . '%);
                    filter: grayscale(' . $styledata[155] . '%);
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image:hover::before{
                    box-shadow: inset 0px 0px 0px ' . $styledata[119] . 'px ' . $styledata[117] . ';
                    background: ' . $styledata[157] . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-ribbon{
                    position: absolute;
                    white-space: nowrap;
                    z-index: 999;
                    width: ' . $styledata[167] . 'px;
                    margin: 0;
                    ' . $styledata[165] . ': ' . $styledata[171] . 'px;
                    top: ' . $styledata[169] . 'px;
                    transform: rotate(' . $ribbonpo . '45deg);
                    display:' . $styledata[121] . ';
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-ribbon:before{
                    display: block;
                    position: absolute;
                    content: "";
                    width: 0;
                    height: 0;
                    border-style: solid;
                    border-color: ' . $styledata[129] . ';
                    left: 0;
                    border-width: 15px 15px 0 0;
                    border-left-color: transparent !important;
                    border-right-color: transparent !important;
                    border-bottom-color: transparent !important;
                    bottom: -14px;
                    z-index: -1;    
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-ribbon:after{
                    display: block;
                    position: absolute;
                    content: "";
                    width: 0;
                    height: 0;
                    border-style: solid;
                    border-color: ' . $styledata[129] . ';
                    right: 0;
                    border-width: 15px 0 0 15px;
                    border-left-color: transparent !important;
                    border-right-color: transparent !important;
                    border-bottom-color: transparent !important;
                    bottom: -14px;
                    z-index: -1;
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-ribbon-position{
                    display: table;
                    width: 100%;
                    height: 100%;
                    z-index: 2;
                    position: relative;
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-ribbon-content{  
                    display: table-cell;
                    width: 100%;
                    height: 100%;
                    font-size:' . $styledata[123] . 'px;
                    color:' . $styledata[127] . ';    
                    background: ' . $styledata[129] . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 137) . ';
                    overflow: hidden;
                    vertical-align: middle;                    
                    ' . OxiAddonsFontSettings($styledata, 131) . '
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){
                    .oxi-addons-single-image-container-' . $oxiid . '{
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 20) . ';   
                   }
                   .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-row{
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 4) . ';
                   }
                   .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image{
                       border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 42) . ';
                       border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 62) . ';
                   }
                   .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image img{
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 62) . ';
                   }
                    .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image:hover{
                       border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
                       border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
                   }
                   .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-ribbon-content{  
                       font-size:' . $styledata[124] . 'px;
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 138) . '; 
                   }
                }
                @media only screen and (max-width : 668px){
                     .oxi-addons-single-image-container-' . $oxiid . '{
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . ';   
                   }
                   .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-row{
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';
                   }
                   .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image{
                       border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 43) . ';
                       border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . ';
                   }
                   .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image img{
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . ';
                   }
                    .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image:hover{
                       border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
                       border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
                   }
                   .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-ribbon-content{  
                       font-size:' . $styledata[125] . 'px;
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 139) . '; 
                   }
                }
                ';


        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
