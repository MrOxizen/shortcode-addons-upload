<?php

namespace SHORTCODE_ADDONS_UPLOAD\Flip_boxes\Templates;

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

class Style_28 extends Templates {

    public function public_css() {
        wp_enqueue_style('jquery_flip_boxes_default_css', SA_ADDONS_UPLOAD_URL . '/Flip_boxes/File/flip-boxes.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function default_render($style, $child, $admin) {

        $styledata = $this->style;
        foreach ($styledata['sa_flip_boxes_data_style_18'] as $key => $value) {
            $img = $front_hadding = $front_info = $back_hadding = $backinfo = $button = '';
            if ($this->media_render('sa_flip_boxes_media', $value) != '') {
                $img .= '<div class="oxi-addons-flip-box-front-img">
                            <img src="' . $this->media_render('sa_flip_boxes_media', $value) . '" alt="" class="oxi-image">
                        </div>';
            }
            if ($value['sa_flip_boxes_heading'] != '') {
                $front_hadding .= '<div class="oxi-addons-flip-box-front-headding">
                            ' . $this->text_render($value['sa_flip_boxes_heading']) . '
                            </div> ';
            }
            if ($value['sa_flip_back_boxes_heading'] != '') {
                $back_hadding .= '<div class="oxi-addons-flip-box-back-headding">
                            ' . $this->text_render($value['sa_flip_back_boxes_heading']) . '
                            </div>';
            }
            if ($value['sa_flip_boxes_back_description'] != '') {
                $backinfo .= '<div class="oxi-addons-flip-box-back-info">
                        ' . $this->text_render($value['sa_flip_boxes_back_description']) . '
                        </div>';
            }
            if ($value['sa_flip_boxes_button_text'] != '') {
                $button .= '<div class="oxi-addons-flip-box-back-button">
                            <a ' . $this->url_render('sa_flip_boxes_button_link', $value) . ' class="oxi-addons-flip-box-back-button-data" >' . $this->text_render($value['sa_flip_boxes_button_text']) . ' </a>
                        </div>';
            }
            echo '  <div class="oxi-flip-box-col-style-28 ' . $this->column_render('sa-flip-boxes-col', $style) . ' ">
                        <div class="oxi-addons-flip-box-style-28">
                            <div class="oxi-addons-flip-boxes-body"  ' . $this->animation_render('sa-flip-boxes-animation', $style) . '>
                                <div class="oxi-addons-flip-boxes-body-data">
                                    <div class="oxi-addons-flip-box-flip ' . $styledata['sa-ac-flip_boxes_flip_direction'] . '">
                                        <div class="oxi-addons-flip-box-flip-data ' . $styledata['sa-ac-flip_boxes_flip_effects'] . '">
                                            <div class="oxi-addons-flip-box-style">
                                                <div class="oxi-addons-flip-box-front">
                                                    <div class="oxi-addons-flip-box-front-section-box">
                                                        <div class="oxi-addons-flip-box-front-section">
                                                            <div class="oxi-addons-flip-box-front-section-image">
                                                                ' . $img . ' 
                                                            </div> 
                                                            ' . $front_hadding . '
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="oxi-addons-flip-box-back">
                                                    <div class="oxi-addons-flip-box-back-section-box">
                                                        <div class="oxi-addons-flip-box-back-section">
                                                            ' . $back_hadding . '
                                                            ' . $backinfo . '
                                                            ' . $button . '
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';

            echo '</div>';
        }
    }

    public function old_render() {

        wp_enqueue_style('jquery_flip_boxes_css', SA_ADDONS_UPLOAD_URL . '/Flip_boxes/File/flip-boxes.css', false, SA_ADDONS_PLUGIN_VERSION);

        $styledata = $this->dbdata;
        $listdata = $this->child;
        $stylename = $styledata['style_name'];
        $oxiid = $styledata['id'];
        $css = '';
        $stylefiles = explode('||#||', $styledata['css']);
    $styledata = explode('|', $stylefiles[0]);
    echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">';
    foreach ($listdata as $value) {
        $data = explode('||#||', $value['files']);
        $front_hadding = $back_hadding = $backinfo = $button = '';
        if ($data[1] != '') {
            $front_hadding .= '<div class="oxi-addons-flip-box-front-headding">
                            ' . OxiAddonsTextConvert($data[1]) . '
                            </div> ';
        }
        if ($data[3] != '') {
            $back_hadding .= '<div class="oxi-addons-flip-box-back-headding">
                            ' . OxiAddonsTextConvert($data[3]) . '
                            </div>';
        }
        if ($data[5] != '') {
            $backinfo .= '<div class="oxi-addons-flip-box-back-info">
                        ' . OxiAddonsTextConvert($data[5]) . '
                        </div>';
        }
        if ($data[7] != '') {
            $button .= '<div class="oxi-addons-flip-box-back-button">
                            <a href="' . OxiAddonsUrlConvert($data[9]) . '" class="oxi-addons-flip-box-back-link" >' . OxiAddonsTextConvert($data[7]) . '</a>
                        </div>';
        }
        echo '      <div class="' . OxiAddonsItemRows($styledata, 3) . ' "    ' . OxiAddonsAnimation($styledata, 53) . '>
                        <div class="oxi-addons-flip-box-' . $oxiid . '">
                            <div class="oxi-addons-flip-boxes-body">
                                <div class="oxi-addons-flip-boxes-body-data">
                                    <div class="oxi-addons-flip-box-flip ' . $styledata[7] . '">
                                        <div class="oxi-addons-flip-box-flip-data ' . $styledata[9] . '">
                                            <div class="oxi-addons-flip-box-style">
                                                <div class="oxi-addons-flip-box-front">
                                                    <div class="oxi-addons-flip-box-front-section-box">
                                                        <div class="oxi-addons-flip-box-front-section">
                                                            <div class="oxi-addons-flip-box-front-headding-box">
                                                                 '.$front_hadding.'
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="oxi-addons-flip-box-back">
                                                    <div class="oxi-addons-flip-box-back-section-box">
                                                        <div class="oxi-addons-flip-box-back-section">
                                                            '.$back_hadding.'
                                                            '.$backinfo.'
                                                            '.$button.'
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';

        echo '</div>';
    }
    echo '</div>
        </div>';
    $css = '
        .oxi-addons-container .oxi-addons-flip-box-' . $oxiid . ' *{
            -webkit-transition: all  ' . $styledata[11] . 's ease-in-out;
            -moz-transition: all  ' . $styledata[11] . 's ease-in-out;
            transition: all  ' . $styledata[11] . 's ease-in-out;
            text-decoration: none;    
        }
        .oxi-addons-flip-box-' . $oxiid . '{
            max-width: ' . $styledata[13] . 'px;
            height: ' . $styledata[17] . 'px;
            width: 100%;
            margin: 0 auto;
            position: relative;
            padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 37) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . '; 
            overflow: hidden;
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-boxes-body:after {    
            padding-bottom: ' . ($styledata[17] / $styledata[13] * 100) . '%;
            content: "";
            display: block;
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-section-box {
            width: 100%;
            height: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 109) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-section {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . '; 
            border-style: ' . $styledata[89] . ';
            border-color: ' . $styledata[90] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . '; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . '; 
            ' . OxiAddonsBGImage($styledata, 69) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 57) . ';
            overflow: hidden;
            position: relative;
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-headding-box {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 377) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-headding {
            width: 100%;
            font-size:  ' . $styledata[129] . 'px;
            color:  ' . $styledata[133] . ';
            background:  ' . $styledata[375] . ';
            ' . OxiAddonsFontSettings($styledata, 135) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 141) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section-box {
            width: 100%;
            height: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 197) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            ' . OxiAddonsBGImage($styledata, 157) . ';
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 161) . '; 
            border-style: ' . $styledata[177] . ';
            border-color: ' . $styledata[178] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 181) . '; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . '; 
            ' . OxiAddonsBoxShadowSanitize($styledata, 63) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-headding {
            width: 100%;
            font-size:  ' . $styledata[213] . 'px;
            color:  ' . $styledata[217] . ';
            ' . OxiAddonsFontSettings($styledata, 219) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 225) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-info {
            width: 100%;
            font-size:  ' . $styledata[241] . 'px;
            color:  ' . $styledata[245] . ';
            ' . OxiAddonsFontSettings($styledata, 247) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 253) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button {
            width: 100%;
            float: left;
            text-align: center;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 335) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link {
            display: inline-block;
            font-size:  ' . $styledata[269] . 'px;
            color:  ' . $styledata[273] . ';
            background: ' . $styledata[275] . ';
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 277) . '; 
            border-style: ' . $styledata[293] . ';
            border-color: ' . $styledata[294] . ';
            ' . OxiAddonsFontSettings($styledata, 297) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 303) . '; 
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 319) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link:hover {
            color: ' . $styledata[351] . ';
            background: ' . $styledata[353] . ';
            border-style: ' . $styledata[355] . ';
            border-color: ' . $styledata[356] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 359) . '; 
        }
        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-flip-box-' . $oxiid . '{
                max-width: ' . $styledata[14] . 'px;
                height: ' . $styledata[18] . 'px;
                padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 38) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-boxes-body:after {    
                padding-bottom: ' . ($styledata[18] / $styledata[14] * 100) . '%;
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-section-box {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 110) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-section {
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 74) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 22) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 94) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-headding-box {
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 378) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-headding {
                font-size:  ' . $styledata[130] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 142) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section-box {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 198) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 162) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 182) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 22) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-headding {
                font-size:  ' . $styledata[214] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 226) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-info {
                font-size:  ' . $styledata[242] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 254) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button {
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 336) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link {
                font-size:  ' . $styledata[270] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 278) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 304) . '; 
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 320) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link:hover {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 360) . '; 
            }
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-flip-box-' . $oxiid . '{
                max-width: ' . $styledata[15] . 'px;
                height: ' . $styledata[19] . 'px;
                padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-boxes-body:after {    
                padding-bottom: ' . ($styledata[19] / $styledata[15] * 100) . '%;
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-section-box {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 111) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-section {
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 75) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 95) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-headding-box {
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 379) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-headding {
                font-size:  ' . $styledata[131] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 143) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section-box {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 199) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 163) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 183) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-headding {
                font-size:  ' . $styledata[215] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 227) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-info {
                font-size:  ' . $styledata[243] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 255) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button {
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 337) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link {
                font-size:  ' . $styledata[271] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 279) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 305) . '; 
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 321) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link:hover {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 361) . '; 
            }
        }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
