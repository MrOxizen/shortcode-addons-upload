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

class Style_2 extends Templates {

    public function default_render($style, $child, $admin) {
        $datas = (array_key_exists('sa_image_boxes_data_style_2', $style) && is_array($style['sa_image_boxes_data_style_2']) ? $style['sa_image_boxes_data_style_2'] : []);
      
        foreach ($datas as $key => $value) {
            $heading = $content = $links = '';
            if (array_key_exists('sa_image_boxes_heading', $value) && $value['sa_image_boxes_heading'] != '') {
                $heading = '<div class="oxi-addons-image-content-heading">
                                  ' . $this->text_render($value['sa_image_boxes_heading']) . '
                                </div>';
            }
            if (array_key_exists('sa_image_boxes_s_description', $value) && $value['sa_image_boxes_s_description'] != '') {
                $content = '<div class="oxi-addons-image-content-body">
                                  ' . $this->text_render($value['sa_image_boxes_s_description']) . '
                                </div> ';
            }
            if (array_key_exists('sa_image_boxes_button', $value) && $value['sa_image_boxes_button'] != '') {
                
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
                    <div class="oxi-addons-image-box-area ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list' : '') . '">
                        <div class="oxi-addons-image-image oxi-addons-image "  style="background-image: url(\'' . $this->media_render('sa_image_boxes_media', $value) . '\');" ' . $this->animation_render('sa-image-boxes-animation', $style) . '>
                            <div class="oxi-addons-image-content">
                                ' . $heading . '
                                ' . $content . '
                                ' . $links . '
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
        echo ' <div class="oxi-addons-container">  <div class="oxi-addons-row">';

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
            } elseif ($data[9] == '' && $data[7] == '') {
                $link = '
            <div class="oxi-addons-image-content-button-data">
                    ' . OxiAddonsTextConvert($data[7]) . '
            </div>
            ';
            }
            echo '<div class="' . OxiAddonsItemRows($styledata, 1) . '">
            <div class="oxi-addons-image-box-' . $oxiid . ' oxi-addons-image-box-' . $oxiid . '-' . $value['id'] . '" ' . OxiAddonsAnimation($styledata, 37) . '>
                <div class="oxi-addons-image-image">
                    <div class="oxi-addons-image-content">
                      ' . $heading . '
                      ' . $content . ' 
                        <div class="oxi-addons-image-content-button">
                            ' . $link . '
                        </div>
                    </div>
                </div>';

            echo '</div>
        ';
            $css .= '.oxi-addons-image-box-' . $oxiid . '-' . $value['id'] . ' .oxi-addons-image-image{
                    background-image: url(" ' . OxiAddonsUrlConvert($data[1]) . ' ");
                    -moz-background-size: 100% 100%;
                    -o-background-size: 100% 100%;
                    background-size: 100% 100%;; 
                }';
            echo '</div>';
        }

        echo '</div>
    </div>';
        $css .= '.oxi-addons-image-box-' . $oxiid . '{
            width: 100%;
            max-width: ' . $styledata[5] . 'px;
            margin: 0 auto;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 221) . ';
        }
        .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-image{
            position: relative;
            width: 100%;
            float: left;
            overflow: hidden; 
            border: ' . $styledata[239] . 'px ' . $styledata[240] . ';
            border-color: ' . $styledata[243] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 245) . '; 
            ' . OxiAddonsBoxShadowSanitize($styledata, 31) . ' 
        }
        .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-image::after{
            content: "";
            width: 100%;
            padding-bottom: ' . ($styledata[9] / $styledata[5] * 100) . '%;
            display: block;
        }
        .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-content{
            position: absolute;
            left: 0px;
            right: 0px;
            bottom: 0px;
            background:  ' . $styledata[13] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 189) . '; 
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 205) . ';
        }
        .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-content-heading{
            font-size:' . $styledata[41] . 'px;
            color: ' . $styledata[45] . ';
            ' . OxiAddonsFontSettings($styledata, 47) . ';
            line-height:1;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 53) . ';
        }
        .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-content-body{
            font-size:' . $styledata[69] . 'px;
            color: ' . $styledata[73] . ';
            ' . OxiAddonsFontSettings($styledata, 75) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
        }
        .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-content-button{
        ';
        $text = explode(':', $styledata[117]);
        $css .= "text-align: $text[0] ";

        $css .= '    }
        .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-content-button-data{
            display: inline-block;
            font-size:' . $styledata[99] . 'px;
            color: ' . $styledata[103] . ';
            background: ' . $styledata[105] . ';
            border: ' . $styledata[107] . 'px ' . $styledata[108] . ';
            border-color: ' . $styledata[111] . ';
            ' . OxiAddonsFontSettings($styledata, 113) . ';
            line-height:1;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 119) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 135) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 151) . ';
        }
        .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-content-button-data:hover{ 
            color: ' . $styledata[167] . ';
            background: ' . $styledata[169] . ';
            border-color: ' . $styledata[171] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 173) . ';
        }
        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-image-box-' . $oxiid . '{
                max-width: ' . $styledata[6] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 222) . ';
            } 
            .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-image{ 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 246) . ';  
            }
            .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-image::after{
                padding-bottom: ' . ($styledata[10] / $styledata[6] * 100) . '%;
            }
            .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-content{
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 190) . ';
            }
            .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-content-heading{
                font-size:' . $styledata[42] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 54) . ';
            }
            .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-content-body{
                font-size:' . $styledata[70] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
            }
            .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-content-button-data{
                font-size:' . $styledata[100] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 136) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 152) . ';
            }
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-image-box-' . $oxiid . '{
                max-width: ' . $styledata[7] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 223) . ';
            } 
            .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-image{ 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 247) . ';  
            }
            .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-image::after{
                padding-bottom: ' . ($styledata[11] / $styledata[7] * 100) . '%;
            }
            .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-content{
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 191) . ';
            }
            .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-content-heading{
                font-size:' . $styledata[43] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 55) . ';
            }
            .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-content-body{
                font-size:' . $styledata[71] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
            }
            .oxi-addons-image-box-' . $oxiid . ' .oxi-addons-image-content-button-data{
                font-size:' . $styledata[101] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 137) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 153) . ';
            }
        }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
