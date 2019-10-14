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

class Style_14 extends Templates {

    public function public_css() {
        wp_enqueue_style('jquery_flip_boxes_default_css', SA_ADDONS_UPLOAD_URL . '/Flip_boxes/File/flip-boxes.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function default_render($style, $child, $admin) {

        $styledata = $this->style;
        foreach ($styledata['sa_flip_boxes_data_style_13'] as $key => $value) {
            $icon = $front_hadding = $front_info = $back_hadding = $backinfo = $button = '';
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
            if ($value['sa_flip_boxes_font_description'] != '') {
                $front_info .= '<div class="oxi-addons-flip-box-front-info">
                            ' . $this->text_render($value['sa_flip_boxes_font_description']) . '
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
            echo '  <div class="oxi-flip-box-col-style-13 ' . $this->column_render('sa-flip-boxes-col', $style) . ' ">
                        <div class="oxi-addons-flip-box-style-13">
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
                                                            ' . $front_info . '
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
        $fronticon = $front_hadding =  $front_info = $back_icon = $back_hadding = $backinfo = $button ='';
        if ($data[1] != '') {
            $fronticon .= '<div class="oxi-addons-flip-box-front-icon">
                            <div class="oxi-addons-flip-box-front-icon-box">
                                <div class="oxi-number"> 
                                    ' . OxiAddonsTextConvert($data[1]) . '
                                </div>
                            </div>
                        </div>';
        }
        
        if ($data[3] != '') {
            $front_hadding .= '<div class="oxi-addons-flip-box-front-headding">
                            ' . OxiAddonsTextConvert($data[3]) . '
                            </div> ';
        }
        if ($data[5] != '') {
            $front_info .= '<div class="oxi-addons-flip-box-front-info">
                            ' . OxiAddonsTextConvert($data[5]) . '
                            </div> ';
        }
        if ($data[7] != '') {
            $back_icon .= '<div class="oxi-addons-flip-box-back-icon">
                            <div class="oxi-addons-flip-box-back-icon-box">
                                ' . oxi_addons_font_awesome($data[7]) . '
                            </div>
                        </div>';
        }
        if ($data[9] != '') {
            $back_hadding .= '<div class="oxi-addons-flip-box-back-headding">
                            ' . OxiAddonsTextConvert($data[9]) . '
                            </div>';
        }
        if ($data[11] != '') {
            $backinfo .= '<div class="oxi-addons-flip-box-back-info">
                        ' . OxiAddonsTextConvert($data[11]) . '
                        </div>';
        }
        if ($data[13] != '') {
            $button .= '<div class="oxi-addons-flip-box-back-button">
                            <a href="' . OxiAddonsUrlConvert($data[15]) . '" class="oxi-addons-flip-box-back-link" >' . OxiAddonsTextConvert($data[13]) . '</a>
                        </div>';
        }
        echo '       <div class="' . OxiAddonsItemRows($styledata, 3) . ' "    ' . OxiAddonsAnimation($styledata, 53) . '>';
                    echo'<div class="oxi-addons-flip-box-' . $oxiid . '">
                            <div class="oxi-addons-flip-boxes-body">
                                <div class="oxi-addons-flip-boxes-body-data">
                                    <div class="oxi-addons-flip-box-flip ' . $styledata[7] . '">
                                        <div class="oxi-addons-flip-box-flip-data ' . $styledata[9] . '">
                                            <div class="oxi-addons-flip-box-style">
                                                <div class="oxi-addons-flip-box-front">
                                                    <div class="oxi-addons-flip-box-front-section-box">
                                                        <div class="oxi-addons-flip-box-front-section">
                                                            '.$fronticon.' 
                                                            '.$front_hadding.'
                                                            '.$front_info.'
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="oxi-addons-flip-box-back">
                                                    <div class="oxi-addons-flip-box-back-section-box">
                                                        <div class="oxi-addons-flip-box-back-section">
                                                            '.$back_icon.'
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
            ' . OxiAddonsBGImage($styledata, 69) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . '; 
            ' . OxiAddonsBoxShadowSanitize($styledata, 57) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-section {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . '; 
            border-style: ' . $styledata[89] . ';
            border-color: ' . $styledata[90] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . '; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon {
            text-align: center;
            width: 100%;
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon-box {
            width: ' . $styledata[125] . 'px;
            height: ' . $styledata[129] . 'px;
            background: ' . $styledata[139] . ';
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 141) . '; 
            border-style: ' . $styledata[157] . ';
            border-color: ' . $styledata[158] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 161) . '; 
            position: relative;
            top: 0;
            margin: 0 auto;
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon .oxi-number {
            font-size:  ' . $styledata[133] . 'px;
            color: ' . $styledata[137] . ';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 177) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-headding {
            width: 100%;
            font-size:  ' . $styledata[193] . 'px;
            color:  ' . $styledata[197] . ';
            ' . OxiAddonsFontSettings($styledata, 199) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 205) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-info {
            width: 100%;
            font-size:  ' . $styledata[221] . 'px;
            color:  ' . $styledata[225] . ';
            ' . OxiAddonsFontSettings($styledata, 227) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 233) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section-box {
            width: 100%;
            height: 100%;
            float: left;
            ' . OxiAddonsBGImage($styledata, 249) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 289) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . '; 
            ' . OxiAddonsBoxShadowSanitize($styledata, 63) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 253) . '; 
            border-style: ' . $styledata[269] . ';
            border-color: ' . $styledata[270] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . '; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 273) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon {
            text-align: center;
            width: 100%;
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon-box {
            width: ' . $styledata[305] . 'px;
            height: ' . $styledata[309] . 'px;
            background: ' . $styledata[319] . ';
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 321) . '; 
            border-style: ' . $styledata[337] . ';
            border-color: ' . $styledata[338] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 341) . '; 
            position: relative;
            top: 0;
            margin: 0 auto;
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon .oxi-icons {
            font-size:  ' . $styledata[313] . 'px;
            color: ' . $styledata[317] . ';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 357) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-headding {
            width: 100%;
            font-size:  ' . $styledata[373] . 'px;
            color:  ' . $styledata[377] . ';
            ' . OxiAddonsFontSettings($styledata, 379) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 385) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-info {
            width: 100%;
            font-size:  ' . $styledata[401] . 'px;
            color:  ' . $styledata[405] . ';
            ' . OxiAddonsFontSettings($styledata, 407) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 413) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button {
            width: 100%;
            float: left;
            text-align: center;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 495) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link {
            display: inline-block;
            font-size:  ' . $styledata[429] . 'px;
            color:  ' . $styledata[433] . ';
            background: ' . $styledata[435] . ';
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 437) . '; 
            border-style: ' . $styledata[453] . ';
            border-color: ' . $styledata[454] . ';
            ' . OxiAddonsFontSettings($styledata, 457) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 463) . '; 
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 479) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link:hover {
            color: ' . $styledata[511] . ';
            background: ' . $styledata[513] . ';
            border-style: ' . $styledata[515] . ';
            border-color: ' . $styledata[516] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 519) . '; 
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
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon-box {
                width: ' . $styledata[126] . 'px;
                height: ' . $styledata[130] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 142) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 162) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon .oxi-number {
                font-size:  ' . $styledata[138] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 178) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-headding {
                font-size:  ' . $styledata[194] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 206) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-info {
                font-size:  ' . $styledata[222] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 234) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section-box {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 290) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 254) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 22) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 274) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon-box {
                width: ' . $styledata[306] . 'px;
                height: ' . $styledata[310] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 322) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 342) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon .oxi-icons {
                font-size:  ' . $styledata[314] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 358) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-headding {
                font-size:  ' . $styledata[374] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 386) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-info {
                font-size:  ' . $styledata[402] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 414) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button {
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 496) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link {
                font-size:  ' . $styledata[430] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 438) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 464) . '; 
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 480) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link:hover {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 520) . '; 
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
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon-box {
                width: ' . $styledata[127] . 'px;
                height: ' . $styledata[131] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 143) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 163) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon .oxi-number {
                font-size:  ' . $styledata[139] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 179) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-headding {
                font-size:  ' . $styledata[195] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 207) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-info {
                font-size:  ' . $styledata[223] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 235) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section-box {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 291) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 255) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 275) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon-box {
                width: ' . $styledata[307] . 'px;
                height: ' . $styledata[311] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 323) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 343) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon .oxi-icons {
                font-size:  ' . $styledata[315] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 359) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-headding {
                font-size:  ' . $styledata[375] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 387) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-info {
                font-size:  ' . $styledata[403] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 415) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button {
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 497) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link {
                font-size:  ' . $styledata[431] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 439) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 465) . '; 
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 481) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link:hover {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 521) . '; 
            }
        }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
