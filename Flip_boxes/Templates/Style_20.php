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

class Style_20 extends Templates {
    public function public_css() {
        wp_enqueue_style('jquery_flip_boxes_default_css', SA_ADDONS_UPLOAD_URL . '/Flip_boxes/File/flip-boxes.css', false, SA_ADDONS_PLUGIN_VERSION);
    }
    public function default_render($style, $child, $admin) {
        
        $styledata = $this->style;
        foreach ($styledata['sa_flip_boxes_data_style_1'] as $key => $value) {
            $icon = $image = $backinfo = $heading = $button = $img_icon = $bt = $bc = '';
            if ($this->media_render('sa_flip_boxes_media', $value) != '') {
                $image = ' <img src="' . $this->media_render('sa_flip_boxes_media', $value) . '">';
            }
            if ($value['sa_flip_boxes_icon'] != '') {
                $icon = '<div class="oxi-addons-flip-box-front-image-icon">
                    ' . $this->font_awesome_render($value['sa_flip_boxes_icon']) . '
                </div>';
            }
            if ($value['sa_flip_boxes_heading'] != '') {
                $heading = ' <div class="oxi-addons-flip-box-front-heading">
                        <div class="oxi-addons-flip-box-front-heading-data">
                        ' . $this->text_render($value['sa_flip_boxes_heading']) . '
                       </div>
                    </div>';
            }
            if ($value['sa_flip_boxes_button_text'] != '') {
                $button = '<div class="oxi-addons-flip-box-back-button">
                                <a '.$this->url_render('sa_flip_boxes_button_link', $value).'">
                                   <div class="oxi-addons-flip-box-back-button-data">
                                       ' . $this->text_render($value['sa_flip_boxes_button_text']) . '  
                                   </div>
                                </a>
                            </div>';
            }elseif($value['sa_flip_boxes_button_text'] == '' && $this->url_render('sa_flip_boxes_button_link', $value) != ''){
                $bt = '<a '.$this->url_render('sa_flip_boxes_button_link', $value).'">';
                $bc = '</a>';
            }
            if ($value['sa_flip_boxes_description'] != '') {
                $backinfo = '   <div class="oxi-addons-flip-box-back-info">
                            ' . $this->text_render($value['sa_flip_boxes_description']) . '   
                       </div>';
            }
            echo'<div class="oxi-flip-box-col-20 ' . $this->column_render('sa-flip-boxes-col', $style) . ' " >
                        <div class="oxi-addons-flip-box-style-20 oxi-addons-flip-box-style-20-'.$key.'">
                        '.$bt.'
                            <div class="oxi-addons-flip-boxes-body" ' . $this->animation_render('sa-flip-boxes-animation', $style) . '>
                                <div class="oxi-addons-flip-boxes-body-data">
                                    <div class="oxi-addons-flip-box-flip ' . $styledata['sa-ac-flip_boxes_flip_direction'] . '">
                                        <div class="oxi-addons-flip-box-flip-data ' . $styledata['sa-ac-flip_boxes_flip_effects'] . '">
                                            <div class="oxi-addons-flip-box-style">
                                                <div class="oxi-addons-flip-box-front">
                                                    <div class="oxi-addons-flip-box-front-section-box">
                                                        <div class="oxi-addons-flip-box-front-section">
                                                            '.$icon.' 
                                                            '.$heading.'
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="oxi-addons-flip-box-back">
                                                    <div class="oxi-addons-flip-box-back-section-box">
                                                        <div class="oxi-addons-flip-box-back-section">
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
                        '.$bc.'
                        </div>
                    </div>';
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
        $icon = $front_hadding = $backinfo = $button = '';
        if ($data[1] != '') {
            $icon .= '<div class="oxi-addons-flip-box-front-icon">
                    ' . oxi_addons_font_awesome($data[1]) . '
                    </div>';
        }
        if ($data[3] != '') {
            $front_hadding .= '<div class="oxi-addons-flip-box-front-headding">
                            ' . OxiAddonsTextConvert($data[3]) . '
                            </div> ';
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
                                                            '.$icon.' 
                                                            '.$front_hadding.'
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="oxi-addons-flip-box-back">
                                                    <div class="oxi-addons-flip-box-back-section-box">
                                                        <div class="oxi-addons-flip-box-back-section">
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
            justify-content: flex-end;
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
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 391) . ';
            text-align: center;
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
            font-size:  ' . $styledata[173] . 'px;
            color:  ' . $styledata[177] . ';
            ' . OxiAddonsFontSettings($styledata, 179) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 185) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section-box {
            width: 100%;
            height: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 269) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            ' . OxiAddonsBGImage($styledata, 201) . ';
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 205) . '; 
            border-style: ' . $styledata[221] . ';
            border-color: ' . $styledata[222] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 225) . '; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . '; 
            ' . OxiAddonsBoxShadowSanitize($styledata, 63) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-info {
            width: 100%;
            font-size:  ' . $styledata[257] . 'px;
            color:  ' . $styledata[261] . ';
            ' . OxiAddonsFontSettings($styledata, 263) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 269) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button {
            width: 100%;
            float: left;
            text-align: center;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 351) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link {
            display: inline-block;
            font-size:  ' . $styledata[285] . 'px;
            color:  ' . $styledata[289] . ';
            background: ' . $styledata[291] . ';
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 293) . '; 
            border-style: ' . $styledata[309] . ';
            border-color: ' . $styledata[310] . ';
            ' . OxiAddonsFontSettings($styledata, 313) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 319) . '; 
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 335) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link:hover {
            color: ' . $styledata[367] . ';
            background: ' . $styledata[369] . ';
            border-style: ' . $styledata[371] . ';
            border-color: ' . $styledata[372] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 375) . '; 
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
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 392) . ';
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
                font-size:  ' . $styledata[174] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 186) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section-box {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 270) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 206) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 226) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 22) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-info {
                font-size:  ' . $styledata[258] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 270) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button {
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 352) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link {
                font-size:  ' . $styledata[286] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 294) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 320) . '; 
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 336) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link:hover {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 376) . '; 
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
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 393) . ';
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
                font-size:  ' . $styledata[175] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section-box {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 271) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 207) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 227) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-info {
                font-size:  ' . $styledata[259] . 'px;
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 271) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button {
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 353) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link {
                font-size:  ' . $styledata[287] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 295) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 321) . '; 
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 337) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-link:hover {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 377) . '; 
            }
        }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
