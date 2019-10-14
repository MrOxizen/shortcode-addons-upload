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

class Style_11 extends Templates {

    public function public_css() {
        wp_enqueue_style('jquery_flip_boxes_default_css', SA_ADDONS_UPLOAD_URL . '/Flip_boxes/File/flip-boxes.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function default_render($style, $child, $admin) {

        $styledata = $this->style;
        foreach ($styledata['sa_flip_boxes_data_style_11'] as $key => $value) {
            $icon = $front_hadding = $front_info = $back_hadding = $backinfo = $backicon = $button = '';
            if ($value['sa_flip_boxes_icon'] != '') {
                $icon .= '<div class="oxi-addons-flip-box-front-icon">
                    ' . $this->font_awesome_render($value['sa_flip_boxes_icon']) . '
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
            if ($value['sa_flip_boxes_back_icon'] != '') {
                $backicon .= '<a ' . $this->url_render('sa_flip_boxes_button_link', $value) . ' " class="oxi-addons-flip-box-back-icon">
                        ' . $this->font_awesome_render($value['sa_flip_boxes_back_icon']) . '
                        </a>';
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
            echo '  <div class="oxi-flip-box-col-style-11 ' . $this->column_render('sa-flip-boxes-col', $style) . ' ">
                        <div class="oxi-addons-flip-box-style-11">
                            <div class="oxi-addons-flip-boxes-body"  ' . $this->animation_render('sa-flip-boxes-animation', $style) . '>
                                <div class="oxi-addons-flip-boxes-body-data">
                                    <div class="oxi-addons-flip-box-flip ' . $styledata['sa-ac-flip_boxes_flip_direction'] . '">
                                        <div class="oxi-addons-flip-box-flip-data ' . $styledata['sa-ac-flip_boxes_flip_effects'] . '">
                                            <div class="oxi-addons-flip-box-style">
                                                <div class="oxi-addons-flip-box-front">
                                                    <div class="oxi-addons-flip-box-front-section-box">
                                                        <div class="oxi-addons-flip-box-front-section">
                                                            ' . $icon . ' 
                                                            ' . $front_hadding . '
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="oxi-addons-flip-box-back">
                                                    <div class="oxi-addons-flip-box-back-section-box">
                                                        <div class="oxi-addons-flip-box-back-section">
                                                            ' . $back_hadding . '
                                                            ' . $backicon . '
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
            $fronticon = $front_hadding = $backhadding = $backicon = $backinfo = $backbutton = '';
            if ($data[1] != '') {
                $fronticon .= '<a href="' . OxiAddonsUrlConvert($data[13]) . '" class="oxi-addons-flip-box-front-icon">
                    ' . oxi_addons_font_awesome($data[1]) . '
                    </a>';
            }
            if ($data[3] != '') {
                $front_hadding .= '<div class="oxi-addons-flip-box-front-headding">
                            ' . OxiAddonsTextConvert($data[3]) . '
                            </div> ';
            }
            if ($data[5] != '') {
                $backhadding .= '<div class="oxi-addons-flip-box-back-headding">
                            ' . OxiAddonsTextConvert($data[5]) . '
                            </div> ';
            }
            if ($data[7] != '') {
                $backicon .= '<a href="' . OxiAddonsUrlConvert($data[13]) . '" class="oxi-addons-flip-box-back-icon">
                        ' . oxi_addons_font_awesome($data[7]) . '
                        </a>';
            }
            if ($data[9] != '') {
                $backinfo .= '<div class="oxi-addons-flip-box-back-info">
                        ' . OxiAddonsTextConvert($data[9]) . '
                        </div>';
            }
            if ($data[11] != '') {
                $backbutton .= '<div class="oxi-addons-flip-box-back-button">
                            <a href="' . OxiAddonsUrlConvert($data[13]) . '" class="oxi-addons-flip-box-back-link" >' . OxiAddonsTextConvert($data[11]) . '</a>
                        </div>';
            }
            echo '       <div class="' . OxiAddonsItemRows($styledata, 3) . '"    ' . OxiAddonsAnimation($styledata, 53) . '>
                        <div class="oxi-addons-flip-box-' . $oxiid . '">
                            <div class="oxi-addons-flip-boxes-body">
                                <div class="oxi-addons-flip-boxes-body-data">
                                    <div class="oxi-addons-flip-box-flip ' . $styledata[7] . '">
                                        <div class="oxi-addons-flip-box-flip-data ' . $styledata[9] . '">
                                            <div class="oxi-addons-flip-box-style">
                                                <div class="oxi-addons-flip-box-front">
                                                    <div class="oxi-addons-flip-box-front-section-box">
                                                        <div class="oxi-addons-flip-box-front-section">
                                                            ' . $fronticon . ' 
                                                            ' . $front_hadding . '
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="oxi-addons-flip-box-back">
                                                    <div class="oxi-addons-flip-box-back-section-box">
                                                        <div class="oxi-addons-flip-box-back-section">
                                                            ' . $backhadding . '
                                                            ' . $backicon . '
                                                            ' . $backinfo . '
                                                            ' . $backbutton . '
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
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon {
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 173) . ';
            text-align: center;
            width: 100%;
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon .oxi-icons {
            font-size:  ' . $styledata[129] . 'px;
            width: ' . $styledata[125] . 'px;
            height: ' . $styledata[125] . 'px;
            color: ' . $styledata[133] . ';
            background: ' . $styledata[135] . ';
            line-height: ' . $styledata[125] . 'px;
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 137) . '; 
            border-style: ' . $styledata[153] . ';
            border-color: ' . $styledata[154] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 157) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-headding {
            width: 100%;
            font-size:  ' . $styledata[189] . 'px;
            color:  ' . $styledata[193] . ';
            ' . OxiAddonsFontSettings($styledata, 195) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 201) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section-box {
            width: 100%;
            height: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 257) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            ' . OxiAddonsBGImage($styledata, 217) . ';
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 221) . '; 
            border-style: ' . $styledata[237] . ';
            border-color: ' . $styledata[238] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 241) . '; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . '; 
            ' . OxiAddonsBoxShadowSanitize($styledata, 63) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-headding {
            width: 100%;
            font-size:  ' . $styledata[273] . 'px;
            color:  ' . $styledata[277] . ';
            ' . OxiAddonsFontSettings($styledata, 279) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 285) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon {
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 349) . ';
            text-align: center;
            width: 100%;
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon .oxi-icons {
            font-size:  ' . $styledata[305] . 'px;
            width: ' . $styledata[301] . 'px;
            height: ' . $styledata[301] . 'px;
            color: ' . $styledata[309] . ';
            background: ' . $styledata[311] . ';
            line-height: ' . $styledata[301] . 'px;
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 313) . '; 
            border-style: ' . $styledata[329] . ';
            border-color: ' . $styledata[330] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 333) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-info {
            width: 100%;
            font-size:  ' . $styledata[365] . 'px;
            color:  ' . $styledata[369] . ';
            ' . OxiAddonsFontSettings($styledata, 371) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 377) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button {
            width: 100%;
            float: left;
            text-align: center;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 459) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link {
            display: inline-block;
            font-size:  ' . $styledata[393] . 'px;
            color:  ' . $styledata[397] . ';
            background: ' . $styledata[399] . ';
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 401) . '; 
            border-style: ' . $styledata[417] . ';
            border-color: ' . $styledata[418] . ';
            ' . OxiAddonsFontSettings($styledata, 421) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 427) . '; 
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 443) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link:hover {
            color: ' . $styledata[475] . ';
            background: ' . $styledata[477] . ';
            border-style: ' . $styledata[479] . ';
            border-color: ' . $styledata[480] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 483) . '; 
        }
        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-flip-box-' . $oxiid . '{
                max-width: ' . $styledata[14] . 'px;
                height: ' . $styledata[18] . 'px;
                padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 38) . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 22) . '; 
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
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 174) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon .oxi-icons {
                font-size:  ' . $styledata[130] . 'px;
                width: ' . $styledata[126] . 'px;
                height: ' . $styledata[126] . 'px;
                line-height: ' . $styledata[126] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 138) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 158) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-headding {
                font-size:  ' . $styledata[190] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 202) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section-box {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 258) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 222) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 242) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 22) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-headding {
                font-size:  ' . $styledata[274] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 286) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 350) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon .oxi-icons {
                font-size:  ' . $styledata[306] . 'px;
                width: ' . $styledata[302] . 'px;
                height: ' . $styledata[302] . 'px;
                line-height: ' . $styledata[302] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 314) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 334) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-info {
                font-size:  ' . $styledata[366] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 378) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button {
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 460) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link {
                font-size:  ' . $styledata[394] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 402) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 428) . '; 
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 444) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link:hover {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 484) . '; 
            }
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-flip-box-' . $oxiid . '{
                max-width: ' . $styledata[15] . 'px;
                height: ' . $styledata[19] . 'px;
                padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . '; 
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
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 175) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon .oxi-icons {
                font-size:  ' . $styledata[131] . 'px;
                width: ' . $styledata[127] . 'px;
                height: ' . $styledata[127] . 'px;
                line-height: ' . $styledata[127] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 139) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 159) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-headding {
                font-size:  ' . $styledata[191] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 203) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section-box {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 259) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 223) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 243) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-headding {
                font-size:  ' . $styledata[275] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 287) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 351) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon .oxi-icons {
                font-size:  ' . $styledata[307] . 'px;
                width: ' . $styledata[303] . 'px;
                height: ' . $styledata[303] . 'px;
                line-height: ' . $styledata[303] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 315) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 335) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-info {
                font-size:  ' . $styledata[367] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 379) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button {
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 461) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link {
                font-size:  ' . $styledata[395] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 403) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 429) . '; 
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 445) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link:hover {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 485) . '; 
            }
        }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
