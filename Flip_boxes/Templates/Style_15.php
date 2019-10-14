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

class Style_15 extends Templates {

    public function public_css() {
        wp_enqueue_style('jquery_flip_boxes_default_css', SA_ADDONS_UPLOAD_URL . '/Flip_boxes/File/flip-boxes.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function default_render($style, $child, $admin) {

        $styledata = $this->style;
        foreach ($styledata['sa_flip_boxes_data_style_15'] as $key => $value) {
            $front_hadding = $front_info = $back_hadding = $backinfo = $backicon = $button = '';

            if ($value['sa_flip_boxes_heading'] != '') {
                 $front_hadding .= '<div class="oxi-addons-flip-box-front-headding">
                            ' . $this->text_render($value['sa_flip_boxes_heading']) . '
                                <span class="oxi-addons-flip-box-front-headding-border"></span>
                            </div> ';
            }
            if ($value['sa_flip_boxes_font_description'] != '') {
                $front_info .= '<div class="oxi-addons-flip-box-front-info">
                                ' . $this->text_render($value['sa_flip_boxes_font_description']) . '
                            </div> ';
            }
            if ($value['sa_flip_boxes_back_icon'] != '') {
                $backicon .= '<a ' . $this->url_render('sa_flip_boxes_button_link', $value) . ' " class="oxi-addons-flip-box-back-icon">
                        ' . $this->font_awesome_render($value['sa_flip_boxes_back_icon']) . '
                        </a>';
            }
            if ($value['sa_flip_boxes_button_text'] != '') {
                $button .= '<div class="oxi-addons-flip-box-back-button">
                            <a ' . $this->url_render('sa_flip_boxes_button_link', $value) . ' class="oxi-addons-flip-box-back-button-data" >' . $this->text_render($value['sa_flip_boxes_button_text']) . ' </a>
                        </div>';
            }
            echo '  <div class="oxi-flip-box-col-style-15 ' . $this->column_render('sa-flip-boxes-col', $style) . ' ">
                        <div class="oxi-addons-flip-box-style-15">
                            <div class="oxi-addons-flip-boxes-body"  ' . $this->animation_render('sa-flip-boxes-animation', $style) . '>
                                <div class="oxi-addons-flip-boxes-body-data">
                                    <div class="oxi-addons-flip-box-flip ' . $styledata['sa-ac-flip_boxes_flip_direction'] . '">
                                        <div class="oxi-addons-flip-box-flip-data ' . $styledata['sa-ac-flip_boxes_flip_effects'] . '">
                                            <div class="oxi-addons-flip-box-style">
                                                <div class="oxi-addons-flip-box-front">
                                                    <div class="oxi-addons-flip-box-front-section-box">
                                                        <div class="oxi-addons-flip-box-front-section">
                                                            ' . $front_hadding . '
                                                            ' . $front_info . '
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="oxi-addons-flip-box-back">
                                                    <div class="oxi-addons-flip-box-back-section-box">
                                                        <div class="oxi-addons-flip-box-back-section">
                                                            ' . $backicon . '
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
            $icon = $front_hadding = $front_info = $backinfo = $button = '';
            if ($data[1] != '') {
                $front_hadding .= '<div class="oxi-addons-flip-box-front-headding">
                            ' . OxiAddonsTextConvert($data[1]) . '
                                <span class="oxi-addons-flip-box-front-headding-border"></span>
                            </div> ';
            }
            if ($data[3] != '') {
                $front_info .= '<div class="oxi-addons-flip-box-front-info">
            ' . OxiAddonsTextConvert($data[3]) . '
            </div> ';
            }
            if ($data[5] != '') {
                $icon .= '<div class="oxi-addons-flip-box-back-icon">
                    ' . oxi_addons_font_awesome($data[5]) . '
                    </div>';
            }
            if ($data[7] != '') {
                $button .= '<div class="oxi-addons-flip-box-back-button">
                            <a href="' . OxiAddonsUrlConvert($data[9]) . '" class="oxi-addons-flip-box-back-link" >' . OxiAddonsTextConvert($data[7]) . '</a>
                        </div>';
            }

            echo '       <div class="' . OxiAddonsItemRows($styledata, 3) . ' "    ' . OxiAddonsAnimation($styledata, 53) . '>
                        <div class="oxi-addons-flip-box-' . $oxiid . '">
                            <div class="oxi-addons-flip-boxes-body">
                                <div class="oxi-addons-flip-boxes-body-data">
                                    <div class="oxi-addons-flip-box-flip ' . $styledata[7] . '">
                                        <div class="oxi-addons-flip-box-flip-data ' . $styledata[9] . '">
                                            <div class="oxi-addons-flip-box-style">
                                                <div class="oxi-addons-flip-box-front">
                                                    <div class="oxi-addons-flip-box-front-section-box">
                                                        <div class="oxi-addons-flip-box-front-section">
                                                        ' . $front_hadding . '
                                                        ' . $front_info . ' 
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="oxi-addons-flip-box-back">
                                                    <div class="oxi-addons-flip-box-back-section-box">
                                                        <div class="oxi-addons-flip-box-back-section">
                                                            ' . $icon . '
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
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-headding {
            width: 100%;
            position: relative;
            font-size:  ' . $styledata[125] . 'px;
            color:  ' . $styledata[129] . ';
            ' . OxiAddonsFontSettings($styledata, 131) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 137) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-headding-border {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: ' . $styledata[153] . 'px;
            height: ' . $styledata[157] . 'px;
            background: ' . $styledata[161] . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-info {
            width: 100%;
            font-size:  ' . $styledata[163] . 'px;
            color:  ' . $styledata[167] . ';
            ' . OxiAddonsFontSettings($styledata, 169) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 175) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section-box {
            width: 100%;
            height: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 231) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            ' . OxiAddonsBGImage($styledata, 191) . ';
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 195) . '; 
            border-style: ' . $styledata[211] . ';
            border-color: ' . $styledata[212] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 215) . '; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . '; 
            ' . OxiAddonsBoxShadowSanitize($styledata, 63) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon {
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 295) . ';
            text-align: center;
            width: 100%;
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon .oxi-icons {
            font-size:  ' . $styledata[251] . 'px;
            width: ' . $styledata[247] . 'px;
            height: ' . $styledata[247] . 'px;
            color: ' . $styledata[255] . ';
            background: ' . $styledata[257] . ';
            line-height: ' . $styledata[247] . 'px;
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 259) . '; 
            border-style: ' . $styledata[275] . ';
            border-color: ' . $styledata[276] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 279) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button {
            width: 100%;
            float: left;
            text-align: center;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 377) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link {
            display: inline-block;
            font-size:  ' . $styledata[311] . 'px;
            color:  ' . $styledata[315] . ';
            background: ' . $styledata[317] . ';
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 319) . '; 
            border-style: ' . $styledata[335] . ';
            border-color: ' . $styledata[336] . ';
            ' . OxiAddonsFontSettings($styledata, 339) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 345) . '; 
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 361) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link:hover {
            color: ' . $styledata[393] . ';
            background: ' . $styledata[395] . ';
            border-style: ' . $styledata[397] . ';
            border-color: ' . $styledata[398] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 401) . '; 
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
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-headding {
                font-size:  ' . $styledata[126] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 138) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-headding-border {
                width: ' . $styledata[154] . 'px;
                height: ' . $styledata[158] . 'px;
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-info {
                font-size:  ' . $styledata[164] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 176) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section-box {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 232) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 196) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 216) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 22) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 296) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon .oxi-icons {
                font-size:  ' . $styledata[252] . 'px;
                width: ' . $styledata[248] . 'px;
                height: ' . $styledata[248] . 'px;
                line-height: ' . $styledata[248] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 260) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 280) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button {
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 378) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link {
                font-size:  ' . $styledata[312] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 320) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 346) . '; 
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 362) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link:hover {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 402) . '; 
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
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-headding {
                font-size:  ' . $styledata[127] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 139) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-headding-border {
                width: ' . $styledata[155] . 'px;
                height: ' . $styledata[159] . 'px;
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-info {
                font-size:  ' . $styledata[165] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 177) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section-box {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 233) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 197) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 217) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 297) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon .oxi-icons {
                font-size:  ' . $styledata[253] . 'px;
                width: ' . $styledata[249] . 'px;
                height: ' . $styledata[249] . 'px;
                line-height: ' . $styledata[249] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 261) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 281) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button {
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 379) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link {
                font-size:  ' . $styledata[313] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 321) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 347) . '; 
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 363) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link:hover {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 403) . '; 
            }
        }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
