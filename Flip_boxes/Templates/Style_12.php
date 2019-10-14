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

class Style_12 extends Templates {

    public function public_css() {
        wp_enqueue_style('jquery_flip_boxes_default_css', SA_ADDONS_UPLOAD_URL . '/Flip_boxes/File/flip-boxes.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function default_render($style, $child, $admin) {

        $styledata = $this->style;
        foreach ($styledata['sa_flip_boxes_data_style_12'] as $key => $value) {
            $icon = $front_hadding = $front_info = $back_hadding = $backinfo = $endlink = $startlink = '';
            if ($value['sa_flip_boxes_icon'] != '') {
                $icon .= '<div class="oxi-addons-flip-box-front-icon">
                            <div class="oxi-addons-flip-box-front-icon-box">
                                ' . $this->font_awesome_render($value['sa_flip_boxes_icon']) . '
                            </div>
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
                                <span class="oxi-addons-flip-box-back-headding-border"></span>
                            </div>';
            }
            if ($value['sa_flip_boxes_back_description'] != '') {
                $backinfo .= '<div class="oxi-addons-flip-box-back-info">
                        ' . $this->text_render($value['sa_flip_boxes_back_description']) . '
                        </div>';
            }
            if ($this->url_render('sa_flip_boxes_button_link', $value) != '') {
                $startlink .= '<a ' . $this->url_render('sa_flip_boxes_button_link', $value) . ' class="oxi-addons-flip-box-back-button-data" >';
                $endlink .= '</a>';
            }
            echo '  <div class="oxi-flip-box-col-style-12 ' . $this->column_render('sa-flip-boxes-col', $style) . ' ">
                        
                        <div class="oxi-addons-flip-box-style-12">
                        '.$startlink.'
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
                                                            '.$front_info.'
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="oxi-addons-flip-box-back">
                                                    <div class="oxi-addons-flip-box-back-section-box">
                                                        <div class="oxi-addons-flip-box-back-section">
                                                            ' . $back_hadding . '
                                                            ' . $backinfo . '
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            '.$endlink.'
                        </div> ';

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
        $icon = $front_hadding =  $front_info = $back_hadding = $backinfo = $button = $fileslinkend ='';
        if ($data[1] != '') {
            $icon .= '<div class="oxi-addons-flip-box-front-icon">
                        <div class="oxi-addons-flip-box-front-icon-box">
                            ' . oxi_addons_font_awesome($data[1]) . '
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
            $back_hadding .= '<div class="oxi-addons-flip-box-back-headding">
                            ' . OxiAddonsTextConvert($data[7]) . '
                                <span class="oxi-addons-flip-box-back-headding-border"></span>
                            </div>';
        }
        if ($data[9] != '') {
            $backinfo .= '<div class="oxi-addons-flip-box-back-info">
                        ' . OxiAddonsTextConvert($data[9]) . '
                        </div>';
        }
        echo '       <div class="' . OxiAddonsItemRows($styledata, 3) . '"    ' . OxiAddonsAnimation($styledata, 53) . '>';

                    if ($data[11] != '') {
                        echo '<a href="' . OxiAddonsUrlConvert($data[11]) . '">';
                        $fileslinkend = '</a>';
                    }
                    echo'<div class="oxi-addons-flip-box-' . $oxiid . '">
                            <div class="oxi-addons-flip-boxes-body">
                                <div class="oxi-addons-flip-boxes-body-data">
                                    <div class="oxi-addons-flip-box-flip ' . $styledata[7] . '">
                                        <div class="oxi-addons-flip-box-flip-data ' . $styledata[9] . '">
                                            <div class="oxi-addons-flip-box-style">
                                                <div class="oxi-addons-flip-box-front">
                                                    <div class="oxi-addons-flip-box-front-section-box">
                                                        <div class="oxi-addons-flip-box-front-section">
                                                            '.$icon.' 
                                                            '.$front_hadding.'
                                                            '.$front_info.'
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="oxi-addons-flip-box-back">
                                                    <div class="oxi-addons-flip-box-back-section-box">
                                                        <div class="oxi-addons-flip-box-back-section">
                                                            '.$back_hadding.'
                                                            '.$backinfo.'
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
        echo $fileslinkend;
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
            justify-content: flex-start;
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
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon .oxi-icons {
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
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 289) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            ' . OxiAddonsBGImage($styledata, 249) . ';
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 253) . '; 
            border-style: ' . $styledata[269] . ';
            border-color: ' . $styledata[270] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . '; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 273) . '; 
            ' . OxiAddonsBoxShadowSanitize($styledata, 63) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-headding {
            width: 100%;
            position: relative;
            font-size:  ' . $styledata[305] . 'px;
            color:  ' . $styledata[309] . ';
            ' . OxiAddonsFontSettings($styledata, 311) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 317) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-headding-border {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: ' . $styledata[333] . 'px;
            height: ' . $styledata[337] . 'px;
            background: ' . $styledata[341] . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-info {
            width: 100%;
            font-size:  ' . $styledata[343] . 'px;
            color:  ' . $styledata[347] . ';
            ' . OxiAddonsFontSettings($styledata, 349) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 355) . '; 
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
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon .oxi-icons {
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
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-headding {
                font-size:  ' . $styledata[306] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 318) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-headding-border {
                width: ' . $styledata[334] . 'px;
                height: ' . $styledata[338] . 'px;
                background: ' . $styledata[342] . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-info {
                font-size:  ' . $styledata[344] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 356) . '; 
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
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon .oxi-icons {
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
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-headding {
                font-size:  ' . $styledata[307] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 319) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-headding-border {
                width: ' . $styledata[335] . 'px;
                height: ' . $styledata[339] . 'px;
                background: ' . $styledata[343] . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-info {
                font-size:  ' . $styledata[345] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 357) . '; 
            }
        }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
