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

class Style_1 extends Templates {
    public function public_css() {
        wp_enqueue_style('jquery_flip_boxes_default_css', SA_ADDONS_UPLOAD_URL . '/Flip_boxes/File/flip-boxes.css', false, SA_ADDONS_PLUGIN_VERSION);
    }
    public function default_render($style, $child, $admin) {
        
        $styledata = $this->style;
        foreach ($styledata['sa_flip_boxes_data_style_1'] as $key => $value) {
            $this->media_render('sa_flip_boxes_media', $value) = '';
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
            echo'<div class="oxi-flip-box-col ' . $this->column_render('sa-flip-boxes-col', $style) . ' " >
                        <div class="oxi-addons-flip-box-style-1">
                        '.$bt.'
                            <div class="oxi-addons-flip-boxes-body" ' . $this->animation_render('sa-flip-boxes-animation', $style) . '>
                                <div class="oxi-addons-flip-boxes-body-data">
                                    <div class="oxi-addons-flip-box-flip ' . $styledata['sa-ac-flip_boxes_flip_direction'] . '">
                                        <div class="oxi-addons-flip-box-flip-data ' . $styledata['sa-ac-flip_boxes_flip_effects'] . '">
                                            <div class="oxi-addons-flip-box-style">
                                                <div class="oxi-addons-flip-box-front">
                                                    <div class="oxi-addons-flip-box-front-style-1">
                                                        <div class="oxi-addons-flip-box-front-section">
                                                            <div class="oxi-addons-flip-box-front-image">
                                                                ' . $image . '
                                                                ' . $icon . '
                                                            </div>
                                                               ' . $heading . '
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="oxi-addons-flip-box-back">
                                                    <div class="oxi-addons-flip-box-back-style-1">
                                                        <div class="oxi-addons-flip-box-back-section">


                                                            <div class="oxi-addons-flip-box-back-file">
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
            $icon = $image = $backinfo = $heading = $button = $img_icon = '';
            if ($data[1] != '') {
                $image = ' <img src="' . OxiAddonsUrlConvert($data[1]) . '">';
            }
            if ($data[3] != '') {
                $icon = '<div class="oxi-addons-flip-box-front-image-icon">
                    ' . oxi_addons_font_awesome($data[3]) . '
                </div>';
            }
            if ($data[5] != '') {
                $heading = ' <div class="oxi-addons-flip-box-front-heading">
                        <div class="oxi-addons-flip-box-front-heading-data">
                        ' . OxiAddonsTextConvert($data[5]) . '
                       </div>
                    </div>';
            }
            if ($data[9] != '') {
                $button = '  <a href="' . OxiAddonsUrlConvert($data[11]) . '" target="">
                        <div class="oxi-addons-flip-box-back-button">
                            <div class="oxi-addons-flip-box-back-button-data">
                                ' . OxiAddonsTextConvert($data[9]) . '  
                            </div>
                        </div>
                    </a> ';
            }
            if ($data[7] != '') {
                $backinfo = '   <div class="oxi-addons-flip-box-back-info">
                            ' . OxiAddonsTextConvert($data[7]) . '   
                       </div>';
            }
            echo'<div class="' . OxiAddonsItemRows($styledata, 3) . '" ' . OxiAddonsAnimation($styledata, 13) . '>
                        <div class="oxi-addons-flip-box-' . $oxiid . '">
                            <div class="oxi-addons-flip-boxes-body">
                                <div class="oxi-addons-flip-boxes-body-data">
                                    <div class="oxi-addons-flip-box-flip ' . $styledata[7] . '">
                                        <div class="oxi-addons-flip-box-flip-data ' . $styledata[9] . '">
                                            <div class="oxi-addons-flip-box-style">
                                                <div class="oxi-addons-flip-box-front">
                                                    <div class="oxi-addons-flip-box-front-' . $oxiid . '">
                                                        <div class="oxi-addons-flip-box-front-section">
                                                            <div class="oxi-addons-flip-box-front-image">
                                                                ' . $image . '
                                                                ' . $icon . '
                                                            </div>
                                                               ' . $heading . '
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="oxi-addons-flip-box-back">
                                                    <div class="oxi-addons-flip-box-back-' . $oxiid . '">
                                                        <div class="oxi-addons-flip-box-back-section">


                                                            <div class="oxi-addons-flip-box-back-file">
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
                            </div>
                        </div>';
            echo '</div>';
        }
        echo'</div>
        </div>';
        $css = '.oxi-addons-container .oxi-addons-flip-box-' . $oxiid . ' *{
            -webkit-transition: all  ' . $styledata[11] . 's ease-in-out;
            -moz-transition: all  ' . $styledata[11] . 's ease-in-out;
            transition: all  ' . $styledata[11] . 's ease-in-out;
            text-decoration: none;    
        }
        .oxi-addons-flip-box-' . $oxiid . '{
            max-width: ' . $styledata[351] . 'px;
            width: 100%;
            margin: 0 auto;
            position: relative;
            padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 379) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-boxes-body:after {    
            padding-bottom: ' . ($styledata[355] / $styledata[351] * 100) . '%;
            content: "";
            display: block;
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-' . $oxiid . ' {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: block;
            ' . OxiAddonsBGImage($styledata, 29) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 359) . '; 
            overflow: hidden;
            ' . OxiAddonsBoxShadowSanitize($styledata, 17) . ';
            padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';

        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-style:hover .oxi-addons-flip-box-front-' . $oxiid . ' {
            ' . OxiAddonsBoxShadowSanitize($styledata, 23) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-section{
            width : 100%;
            height : 100%;
            border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 37) . ';
            border-style: ' . $styledata[53] . ';
            border-color: ' . $styledata[54] . ';
            padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 57) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 359) . '; 
            position : relative;
        }

        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-image{
            max-width: 100%;
            width: 100%;
            position: relative;
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-image:after{
            padding-bottom: ' . $styledata[33] . '%;
            content: "";
            display: block;
        }

        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-image img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: block;
        }

        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-image-icon{
            position: absolute;
            left: 50%;
             color: ' . $styledata[93] . ';
            background: ' . $styledata[95] . ';
            border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 97) . ';
            border-style: ' . $styledata[113] . ';
            border-color: ' . $styledata[114] . ';
            height: ' . $styledata[375] . 'px;
            width: ' . $styledata[375] . 'px;
            top: 100%;		
            transform: translateX(-50%) translateY(-50%);
            text-align: center;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 133) . '; 
            backface-visibility: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-image-icon .oxi-icons{
            font-size: ' . $styledata[89] . 'px;
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-heading{
            width: 100%;
            float: left;
        }

        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-heading-data{
            margin-top: ' . ( $styledata[375] / 2) . 'px;
            color: ' . $styledata[153] . ';
            width: 100%;
            float: left;
            text-align: Center;
            font-size: ' . $styledata[149] . 'px;
                
            ' . OxiAddonsFontSettings($styledata, 155) . ';
            padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 161) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-' . $oxiid . '{
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: block;
            ' . OxiAddonsBGImage($styledata, 177) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 359) . '; 
            overflow: hidden;
            ' . OxiAddonsBoxShadowSanitize($styledata, 17) . ';
            padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 117) . ';
        }
          .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-style:hover .oxi-addons-flip-box-back-' . $oxiid . ' {
            ' . OxiAddonsBoxShadowSanitize($styledata, 23) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section{
            width : 100%;
            height : 100%;
            border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 181) . ';
            border-style: ' . $styledata[197] . ';
            border-color: ' . $styledata[198] . ';
            padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 201) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 359) . '; 
            position : relative;
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-file{
            position: absolute;
            left: 0%;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-file .oxi-addons-flip-box-back-info {
            width: 100%;
            float: left;
            color: ' . $styledata[221] . ';
            font-size: ' . $styledata[217] . 'px;       
            ' . OxiAddonsFontSettings($styledata, 223) . ';
            padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 229) . ';
        }
       .oxi-addons-flip-box-' . $oxiid . '  .oxi-addons-flip-box-back-button{
            width: 100%;
            float: left;
            padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 311) . ';
            text-align : ' . explode(':', $styledata[277])[0] . ';
        }
       .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button .oxi-addons-flip-box-back-button-data{
            display: inline-block;
            color: ' . $styledata[249] . ';
            background : ' . $styledata[251] . ';
            font-size: ' . $styledata[245] . 'px;
            border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 253) . ';
            border-style: ' . $styledata[269] . ';
            border-color: ' . $styledata[270] . ';
            ' . OxiAddonsFontSettings($styledata, 273) . ';
            padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 295) . ';
            border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 279) . ';
        }
       .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button:hover .oxi-addons-flip-box-back-button-data{
            color: ' . $styledata[327] . ';
            background : ' . $styledata[329] . ';
            border-style: ' . $styledata[331] . ';
            border-color: ' . $styledata[332] . ';
            border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 335) . ';
        }
        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-flip-box-' . $oxiid . '{
                max-width: ' . $styledata[352] . 'px;
                padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 380) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-boxes-body:after {    
                padding-bottom: ' . ($styledata[356] / $styledata[352] * 100) . '%;
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-' . $oxiid . ' {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 360) . '; 
                overflow: hidden;
                padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 74) . ';
    
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-section{
                border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 38) . ';
                padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 58) . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 360) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-image:after{
                padding-bottom: ' . $styledata[34] . '%;
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-image-icon{
                border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 98) . ';
                height: ' . $styledata[376] . 'px;
                width: ' . $styledata[376] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 134) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-image-icon .oxi-icons{
                font-size: ' . $styledata[90] . 'px;
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-heading-data{
                margin-top: ' . ( $styledata[376] / 2) . 'px;
                font-size: ' . $styledata[150] . 'px;
                padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 162) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-' . $oxiid . '{
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 360) . '; 
                padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 118) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section{
                border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 182) . ';
                padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 202) . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 360) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-file .oxi-addons-flip-box-back-info {
                font-size: ' . $styledata[218] . 'px;       
                padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 230) . ';
            }
           .oxi-addons-flip-box-' . $oxiid . '  .oxi-addons-flip-box-back-button{
                padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 312) . ';
            }
           .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button .oxi-addons-flip-box-back-button-data{
                font-size: ' . $styledata[246] . 'px;
                border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 254) . ';
                padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 296) . ';
                border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 280) . ';
            }
           .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button:hover .oxi-addons-flip-box-back-button-data{
                border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 336) . ';
            }
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-flip-box-' . $oxiid . '{
                max-width: ' . $styledata[353] . 'px;
                padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 381) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-boxes-body:after {    
                padding-bottom: ' . ($styledata[357] / $styledata[353] * 100) . '%;
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-' . $oxiid . ' {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 361) . '; 
                overflow: hidden;
                padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 75) . ';
    
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-section{
                border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
                padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 59) . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 361) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-image:after{
                padding-bottom: ' . $styledata[35] . '%;
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-image-icon{
                border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';
                height: ' . $styledata[377] . 'px;
                width: ' . $styledata[377] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 135) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-image-icon .oxi-icons{
                font-size: ' . $styledata[91] . 'px;
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-heading-data{
                margin-top: ' . ( $styledata[377] / 2) . 'px;
                font-size: ' . $styledata[151] . 'px;
                padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 163) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-' . $oxiid . '{
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 361) . '; 
                padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 119) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section{
                border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 183) . ';
                padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 203) . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 361) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-file .oxi-addons-flip-box-back-info {
                font-size: ' . $styledata[219] . 'px;       
                padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 231) . ';
            }
           .oxi-addons-flip-box-' . $oxiid . '  .oxi-addons-flip-box-back-button{
                padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 313) . ';
            }
           .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button .oxi-addons-flip-box-back-button-data{
                font-size: ' . $styledata[247] . 'px;
                border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 255) . ';
                padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 297) . ';
                border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 281) . ';
            }
           .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-button:hover .oxi-addons-flip-box-back-button-data{
                border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 337) . ';
            }
        }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
