<?php

namespace SHORTCODE_ADDONS_UPLOAD\Image_boxes\Templates;

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
        $datas = (array_key_exists('sa_image_boxes_data_style_3', $style) && is_array($style['sa_image_boxes_data_style_3']) ? $style['sa_image_boxes_data_style_3'] : []);
      
        foreach ($datas as $key => $value) {
            $heading = $content = $links = '';
            if (array_key_exists('sa_image_boxes_heading', $value) && $value['sa_image_boxes_heading'] != '') {
                $heading = '<div class="oxi-addons-image-content-heading">
                                  ' . $this->text_render($value['sa_image_boxes_heading']) . '
                            </div>';
            }
            if (array_key_exists('sa_image_boxes_s_description', $value) &&  $value['sa_image_boxes_s_description'] != '') {
                $content = '<div class="oxi-addons-image-content-body">
                                  ' . $this->text_render($value['sa_image_boxes_s_description']) . '
                            </div> ';
            }
            if (array_key_exists('sa_image_boxes_button', $value) && $value['sa_image_boxes_button'] != '') {
                if (array_key_exists('sa_image_boxes_button_url-url', $value) && $value['sa_image_boxes_button_url-url'] != '') {
                    $links = '<div class="oxi-addons-image-content-button">
                                    <a ' . $this->url_render('sa_image_boxes_button_url', $value) . ' class="oxi-addons-image-content-button-data">
                                        ' . $this->text_render($value['sa_image_boxes_button']) . '
                                    </a>
                                </div>';
                } else {
                    $links = '<div class="oxi-addons-image-content-button">
                                    <div class="oxi-addons-image-content-button-data">
                                        ' . $this->text_render($value['sa_image_boxes_button']) . '
                                    </div>
                                </div>';
                }
            }


            echo '<div class="oxi-addons-image-box-main-area ' . $this->column_render('sa-image-boxes-col', $style) . ' ">
                    <div class="oxi-image-boxes-area-container ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list' : '') . '">
                        <div class="oxi-image-boxes-row">
                            <div class="oxi-addons-image" ' . $this->animation_render('sa-image-boxes-animation', $style) . '>
                                <div class="oxi-addons-image-image "  style="background-image: url(\'' . $this->media_render('sa_image_boxes_media', $value) . '\');" >
                                    <div class="oxi-addons-image-content">
                                        ' . $heading . '
                                        ' . $content . '
                                        ' . $links . '
                                    </div>
                                </div>
                            </div>
                        </div>';
            echo '</div>
               </div>';
        }
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $stylename = $styledata['style_name'];
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $linkstart = $linkends = '';
        $css = '';
        echo ' <div class="oxi-addons-container"> <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            $heading = $content = $link = '';
            if ($data[3] != '') {
                $heading = '
                <div class="oxi-addons-image-content-heading">
                        ' . OxiAddonsTextConvert($data[3]) . '
                </div>
            ';
            }
            if ($data[5] != '') {
                $content = '
                <div class="oxi-addons-image-content-body">
                        ' . OxiAddonsTextConvert($data[5]) . '
                </div>
            ';
            }
            if ($data[9] != '' && $data[7] != '') {
                $link = '
            <a href="' . OxiAddonsUrlConvert($data[9]) . '" target="' . $styledata[97] . '" class="oxi-addons-image-content-button-data">
                    ' . OxiAddonsTextConvert($data[7]) . '
            </a>
            ';
            } elseif ($data[9] != '' && $data[7] == '') {
                $link = '
            <div class="oxi-addons-image-content-button-data">
                    ' . OxiAddonsTextConvert($data[7]) . '
            </div>
            ';
            }

            echo '<div class="' . OxiAddonsItemRows($styledata, 1) . ' ">
               <div class="oxi-image-boxes-' . $oxiid . '-container  oxi-image-boxes-' . $oxiid . '-container' . $value['id'] . '"   ' . OxiAddonsAnimation($styledata, 71) . '>
                <div class="oxi-image-boxes-row">
                    <div class="oxi-addons-image">
                        <div class="oxi-addons-image-image">
                            <div class="oxi-addons-image-content">
                                <div class="oxi-addons-image-content-cell">
                                ' . $heading . '
                                ' . $content . ' 
                                    <div class="oxi-addons-image-content-button">
                                        ' . $link . '
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                </div>';
            echo '</div>
        </div>';
            $css .= '.oxi-image-boxes-' . $oxiid . '-container' . $value['id'] . ' .oxi-addons-image-image {
                        background-image: url(" ' . OxiAddonsUrlConvert($data[1]) . ' ");
                        -moz-background-size: cover;
                       -o-background-size: cover;
                        background-size: cover;
                        background-position: center center;
                    }';
        }
        echo '</div></div>
       ';

        $css .= '.oxi-image-boxes-' . $oxiid . '-container{
                width: 100%;
                max-width: ' . $styledata[7] . 'px;
                margin: 0 auto;
            }
            .oxi-image-boxes-' . $oxiid . '-container .oxi-image-boxes-row{
                width: 100%;
                float: left;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
            }
            .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image{
                width: 100%;
                float: left;
                position: relative;
                overflow: hidden;
                border: ' . $styledata[223] . 'px ' . $styledata[224] . ';
                border-color: ' . $styledata[227] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 229) . '; 
                ' . OxiAddonsBoxShadowSanitize($styledata, 65) . ';
            }
            .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image:after{
                display: block;
                content: "";
                padding-bottom: ' . ($styledata[11] / $styledata[7] * 100) . '%;
            }
            .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-image{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content{
                position: absolute;
                background:  ' . $styledata[31] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
                top: ' . $styledata[49] . 'px;
                bottom: ' . $styledata[53] . 'px;
                left: ' . $styledata[57] . 'px;
                right: ' . $styledata[61] . 'px;
                display: inline-flex;
                align-items: center;
                opacity: 0;
            }
            .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image:hover .oxi-addons-image-content{
                opacity: 1;
            }
            .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content-cell{
                width: 100%;
                float: left;
                opacity: 0;
                transform:  translateY(120%);
            }
            .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image:hover .oxi-addons-image-content-cell{
                transform:  translateY(0%);
                opacity: 1;
            }
           .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content-heading,
           .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content-body,
           .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content-button{
                width: 100%;
                float: left;
            }
           .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content-heading{
                font-size:' . $styledata[75] . 'px;
                color: ' . $styledata[79] . ';
                ' . OxiAddonsFontSettings($styledata, 81) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';
            }
           .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content-body{
                font-size:' . $styledata[103] . 'px;
                color: ' . $styledata[107] . ';
                ' . OxiAddonsFontSettings($styledata, 109) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 115) . ';
            }
           .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content-button{
            ';
        $text = explode(':', $styledata[151]);
        $css .= "text-align: $text[0] ";

        $css .= ' }
           .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content-button-data{
                display: inline-block;
                font-size:' . $styledata[133] . 'px;
                color: ' . $styledata[137] . ';
                background: ' . $styledata[139] . ';
                border: ' . $styledata[141] . 'px ' . $styledata[142] . ';
                border-color: ' . $styledata[145] . ';
                ' . OxiAddonsFontSettings($styledata, 147) . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 153) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 169) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 185) . ';
            }
           .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content-button-data:hover{
                color: ' . $styledata[201] . ';
                background: ' . $styledata[203] . ';
                border-color: ' . $styledata[205] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 207) . ';
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
               .oxi-image-boxes-' . $oxiid . '-container{
                    max-width: ' . $styledata[8] . 'px;
                }
                .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image{ 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 230) . ';  
                }
                .oxi-image-boxes-' . $oxiid . '-container .oxi-image-boxes-row{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
                }
                .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image:after{
                    padding-bottom: ' . ($styledata[12] / $styledata[8] * 100) . '%;
                }
                .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content{
                    top: ' . $styledata[50] . 'px;
                    bottom: ' . $styledata[54] . 'px;
                    left: ' . $styledata[58] . 'px;
                    right: ' . $styledata[62] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 34) . ';
                }
               .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content-heading{
                    font-size:' . $styledata[76] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 88) . ';
                }
               .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content-body{
                    font-size:' . $styledata[104] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 116) . ';
                }
               .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content-button{
                    text-align: ' . $styledata[152] . ';
                }
               .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content-button-data{
                    font-size:' . $styledata[134] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 170) . ';
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 186) . ';
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-image-boxes-' . $oxiid . '-container{
                    max-width: ' . $styledata[9] . 'px;
                }
                .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image{ 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 231) . ';  
                }
                .oxi-image-boxes-' . $oxiid . '-container .oxi-image-boxes-row{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
                }
                .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image:after{
                    padding-bottom: ' . ($styledata[13] / $styledata[9] * 100) . '%;
                }
                .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content{
                    top: ' . $styledata[51] . 'px;
                    bottom: ' . $styledata[55] . 'px;
                    left: ' . $styledata[59] . 'px;
                    right: ' . $styledata[63] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . ';
                }
               .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content-heading{
                    font-size:' . $styledata[77] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 89) . ';
                }
               .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content-body{
                    font-size:' . $styledata[105] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 117) . ';
                }
               .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content-button{
                    text-align: ' . $styledata[153] . ';
                }
               .oxi-image-boxes-' . $oxiid . '-container .oxi-addons-image-content-button-data{
                    font-size:' . $styledata[135] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 171) . ';
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
                }
            }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
