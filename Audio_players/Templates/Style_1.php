<?php

namespace SHORTCODE_ADDONS_UPLOAD\Audio_players\Templates;

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

class Style_1 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $title = $image = $author = $audio = $show_progress_handle = $show_volume_handle = '';
        if (array_key_exists('sa_ap_audio_prog_volu_han', $style) && $style['sa_ap_audio_prog_volu_han'] != '0') :
            $show_volume_handle .= 'sa_show_volume_handle';
        endif;
        if (array_key_exists('sa_ap_audio_prog_time_han', $style) && $style['sa_ap_audio_prog_time_han'] != '0') :
            $show_progress_handle .= 'sa_show_progress_time_handle';
        endif;
        if ($this->media_render('sa_ap_img', $style) != '') :
            $image .= '<div class="sa_addons_ap_img_content">
                            <img class="sa_ap_img" src="' . $this->media_render('sa_ap_img', $style) . '" alt="front image">
                        </div>';
        endif;
        if ($style['sa_ap_title_text'] != '') :
            $title .= '<div class="sa_addons_ap_title">' . $this->text_render($style['sa_ap_title_text']) . '</div>';
        endif;
        if ($style['sa_ap_author_text'] != '') :
            $author .= '<div class="sa_addons_ap_author">' . $this->text_render($style['sa_ap_author_text']) . '</div>';
        endif;
        if ($style['sa_ap_audio_url'] != '') :
            $audio .= '<audio controls id="mediaplayer">
                        <source src="' . $this->text_render($style['sa_ap_audio_url']) . '" />
                    </audio>';
        endif;
        echo '<div class="sa_addons_ap_container_style_1 ' . $show_volume_handle . '  ' . $show_progress_handle . '">
            <div class="sa_addons_ap_main">
                <div class="sa_addons_ap_main_content">
                    ' . $image . '
                    ' . $title . '
                    ' . $author . '
                </div>
                ' . $audio . '
            </div>
        </div>';
        $this->inline_css .= '.' . $this->WRAPPER . ' .sa_addons_ap_container_style_1 .mejs-replay button::after, .' . $this->WRAPPER . ' .sa_addons_ap_container_style_1 .mejs-play button::after {
            content: "\\' . $this->text_render($this->style['sa_ap_audio_ply_icon'] != '' ? $this->style['sa_ap_audio_ply_icon'] : '') . '" !important;
        }
        .' . $this->WRAPPER . ' .sa_addons_ap_container_style_1 .mejs-pause button::after {
            content: "\\' . $this->text_render($this->style['sa_ap_audio_pau_icon'] != '' ? $this->style['sa_ap_audio_pau_icon'] : '') . '" !important;
        }
        .' . $this->WRAPPER . ' .sa_addons_ap_container_style_1 .mejs-unmute button::after {
            content: "\\' . $this->text_render($this->style['sa_ap_audio_s_v_icon'] != '' ? $this->style['sa_ap_audio_s_v_icon'] : '') . '" !important;
        }
        .' . $this->WRAPPER . ' .sa_addons_ap_container_style_1 .mejs-mute button::after {
            content: "\\' . $this->text_render($this->style['sa_ap_audio_p_v_icon'] != '' ? $this->style['sa_ap_audio_p_v_icon'] : '') . '" !important;
        }
        ';
    }
    public function public_jquery()
    {
        echo  wp_enqueue_media();
        $this->JSHANDLE = 'mediaelement-min';
        wp_enqueue_script('mediaelement-min', SA_ADDONS_UPLOAD_URL . '/Audio_players/file/mediaelement-min.js', false, SA_ADDONS_PLUGIN_VERSION);
    }
    public function inline_public_jquery()
    {
        $style = $this->style;
        $jquery = '';
        if ((array_key_exists('sa_ap_audio_play_pause', $style) && $style['sa_ap_audio_play_pause'] != '0') || (array_key_exists('sa_ap_audio_time', $style) && $style['sa_ap_audio_time'] != '0') || (array_key_exists('sa_ap_audio_volume', $style) && $style['sa_ap_audio_volume'] != '0') || (array_key_exists('sa_ap_audio_progress', $style) && $style['sa_ap_audio_progress'] != '0')) {
            $jquery .= '  $(".' . $this->WRAPPER . ' .sa_addons_ap_container_style_1 #mediaplayer").mediaelementplayer({
                    features: [';
            if ($style['sa_ap_audio_play_pause'] == 'yes') {
                $jquery .= '"playpause",';
            }
            if ($style['sa_ap_audio_time'] == 'yes') {
                $jquery .= '"current",';
            }
            if ($style['sa_ap_audio_progress'] == 'yes') {
                $jquery .= '"progress",';
            }
            if ($style['sa_ap_audio_volume'] == 'yes') {
                $jquery .= '"volume"';
            }
            $jquery .= '],
                success: function (mediaElement, domObject) {
                mediaElement.setVolume(0.5);}
            }); 
            ';
        } else {
            $jquery = '.' . $this->WRAPPER . ' .sa_addons_ap_container_style_1 #mediaplayer{display: none}';
        }
        return $jquery;
    }

    public function old_render()
    {

        $styledata = $this->dbdata;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);

        echo  wp_enqueue_media();
        wp_enqueue_script('mediaelement-min', SA_ADDONS_UPLOAD_URL . '/Audio_players/file/mediaelement-min.js', false, SA_ADDONS_PLUGIN_VERSION);
        $title = $image = $author = $audio = '';
        $css = '';
        if ($stylefiles[12] != '') {
            $title = '<div class="oxi-addons-title">
                    ' . OxiAddonsTextConvert($stylefiles[12]) . '
                 </div>';
        }
        if ($stylefiles[16] != '') {
            $image = '<div class="oxi-addons-image">
                    <img class="oxi-img" src="' . OxiAddonsUrlConvert($stylefiles[16]) . '" alt="front image">
                </div>';
        }
        if ($stylefiles[14] != '') {
            $author = '<div class="oxi-addons-author">
                    ' . OxiAddonsTextConvert($stylefiles[14]) . '
                </div>';
        }
        if ($stylefiles[2] != '') {
            $audio = ' <audio controls id="mediaplayer">
                    <source src="' . OxiAddonsUrlConvert($stylefiles[2]) . '" />
                </audio>';
        }


        echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">
            <div class="oxi-addons-wrapper-' . $oxiid . ' ' . OxiAddonsAnimation($styledata, 51) . '">
                <div class="oxi-addons-audio">
                    <div class="oxi-addons-main-content">
                        ' . $image . '
                        ' . $title . '
                        ' . $author . '
                    </div>
                    ' . $audio . '
                    </div>
                </div>
            </div>
        </div>
        ';
        $jquery = '';
        if ($styledata[34] == 'true' || $styledata[36] == 'true' || $styledata[38] == 'true' || $styledata[40] == 'true') {
            $jquery .= '  jQuery(".oxi-addons-wrapper-' . $oxiid . ' #mediaplayer").mediaelementplayer({
                features: [';

            if ($styledata[34] == 'true') {
                $jquery .= '"playpause",';
            }
            if ($styledata[36] == 'true') {
                $jquery .= '"current",';
            }
            if ($styledata[38] == 'true') {
                $jquery .= '"progress",';
            }
            if ($styledata[40] == 'true') {
                $jquery .= '"volume"';
            }
            $jquery .= '],
         success: function (mediaElement, domObject) {
            mediaElement.setVolume(0.5);
        }
    }); ';
        } else {
            $css = '.oxi-addons-container .oxi-addons-wrapper-' . $oxiid . ' #mediaplayer{display: none}';
        }

        if ($styledata[416] == 'false') {
            $show_progress_handle = 'display: none';
        } else {
            $show_progress_handle = 'display: block';
        }
        if ($styledata[418] == 'false') {
            $show_volume_handle = 'display: none';
        } else {
            $show_volume_handle = 'display: block';
        }

        $css .= '
        .oxi-addons-wrapper-' . $oxiid . '{ 
            width: 100%;
            float: left; 
            display: flex;
            justify-content:center; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . '; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-audio{
            max-width: ' . $styledata[7] . 'px;
            width: 100%; 
            ' . OxiAddonsBGImage($styledata, 3) . '; 
            ' . OxiAddonsBoxShadowSanitize($styledata, 472) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 58) . ';  
            overflow: hidden;
        } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-content{
          width: 100%;
          float: left;
          text-align: center;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-image{ 
            width: 100%; 
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 440) . ';  
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-img{ 
            width: 100%;
            max-width: ' . $styledata[408] . 'px;
            height: ' . $styledata[412] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 456) . ';  
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{
            width: 100%;
            float: left;
            font-size: ' . $styledata[478] . 'px;
            ' . OxiAddonsFontSettings($styledata, 482) . ';
            color: ' . $styledata[488] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 490) . ';
           
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-author{
            width: 100%;
            float: left;
            font-size: ' . $styledata[506] . 'px;
            ' . OxiAddonsFontSettings($styledata, 510) . ';
            color: ' . $styledata[516] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 518) . ';
        } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-author span{
            font-weight: bold;
        } 
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-button > button {
            background: none !important;
            top: auto !important; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-container, 
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-controls {
            background: ' . $styledata[32] . ' !important;
            height: ' . $styledata[42] . 'px !important;
            display: flex;
            align-items: center;
        }
        .mejs-container {
            clear: both;
            max-width: 100%;
            width: 100% !important;
        }

        .oxi-addons-wrapper-' . $oxiid . ' .mejs-playpause-button{  
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 96) . ';
            height: ' . ($styledata[74] + 30) . 'px ;
            width: ' . ($styledata[74] + 20) . 'px;
            display: flex; 
            justify-content: center;
            top: auto !important;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-button > button { 
            margin: 0; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-play button::after,
        .oxi-addons-wrapper-' . $oxiid . '  .mejs-replay button::after,
        .oxi-addons-wrapper-' . $oxiid . '  .mejs-pause button::after{ 
            font-family: "Font Awesome\ 5 Free";
            font-size: ' . $styledata[74] . 'px;
            font-weight: 900;
            line-height: 1; 
            content: "\\' . $stylefiles[6] . '";
            position: absolute; 
            left: 0px;
            top: 0px;  
            color: ' . $styledata[78] . ' !important; 
        }
        .oxi-addons-wrapper-' . $oxiid . '  .mejs-replay button::after { 
            content: "\\' . $stylefiles[6] . '";
            font-family: "Font Awesome\ 5 Free";  
            font-weight: 900;
            color: ' . $styledata[78] . ' !important;
            font-size: ' . $styledata[74] . 'px;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-playpause-button > button { 
            height: ' . $styledata[74] . 'px !important; 
            width: ' . $styledata[74] . 'px !important;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-volume-button{
            font-size: 10px;
            height: 40px !important;
            line-height: 10px;
            margin: 0;
            width: 40px;
            padding-left: 5px;
        }
        .oxi-addons-wrapper-' . $oxiid . '  .mejs-pause button::after { 
            content: "\\' . $stylefiles[4] . '";
            font-family: "Font Awesome\ 5 Free";  
            font-weight: 900;
            color: ' . $styledata[116] . ' !important;
            font-size: ' . $styledata[112] . 'px;
            height: ' . $styledata[74] . 'px !important; 
            width: ' . $styledata[74] . 'px !important; 
            display: flex;
            align-items: center;
            justify-content:center;
        }
    
        .oxi-addons-wrapper-' . $oxiid . '  .mejs-time {  
            font-size: ' . $styledata[118] . 'px;  
            ' . OxiAddonsFontSettings($styledata, 124) . ';
            color: ' . $styledata[122] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . '; 
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 146) . '; 
            height: ' . $styledata[118] . 'px; 
        }   

        .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-rail { 
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 180) . '; 
            padding: 0 !important;
        }

        .mejs-button, .mejs-time, .mejs-time-rail { 
            display: flex;
            align-items: center;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-total {
            background: ' . $styledata[162] . ' !important; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-current ,
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-total ,
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-loaded , 
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-buffering {
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 164) . ' !important; 
            height: ' . $styledata[420] . 'px;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-hovered{
            display: none !important;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-float{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 80) . ' !important;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-handle {
            ' . $show_progress_handle . ';
            position: absolute;
            width: ' . $styledata[196] . 'px;
            height: ' . $styledata[200] . 'px;
            left: ' . $styledata[204] . 'px;
            top: ' . $styledata[208] . 'px;
            background: ' . $styledata[212] . ';
            border:  ' . $styledata[214] . 'px ' . $styledata[215] . ';
            border-color: ' . $styledata[218] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 220) . ' !important;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-loaded { 
            background: ' . $styledata[236] . ' !important; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-current { 
            background: ' . $styledata[238] . ' !important; 
        } 
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-float {  
            width: ' . $styledata[264] . 'px;
            height: ' . $styledata[268] . 'px;
            font-size: ' . $styledata[242] . 'px;  
            ' . OxiAddonsFontSettings($styledata, 250) . ';
            color: ' . $styledata[248] . ';
            background: ' . $styledata[246] . '; 
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 272) . '; 
        }
        .oxi-addons-wrapper-' . $oxiid . '  .mejs-time-float-current{
            width: ' . $styledata[264] . 'px;
            height: ' . $styledata[268] . 'px; 
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-float-corner {   
            border-color: ' . $styledata[246] . ' transparent transparent; 
        }  
        .mejs-time-handle-content { 
            display: none !important;
        }

        .oxi-addons-wrapper-' . $oxiid . ' .mejs-mute button,
        .oxi-addons-wrapper-' . $oxiid . '  .mejs-unmute button{   
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 310) . ';
        }

        .oxi-addons-wrapper-' . $oxiid . ' .mejs-mute button::after,
        .oxi-addons-wrapper-' . $oxiid . '  .mejs-unmute button::after{ 
            font-family: "Font Awesome\ 5 Free";
            font-size: ' . $styledata[288] . 'px;
            line-height: 1; 
            font-weight: 900;
            content: "\\' . $stylefiles[8] . '";
            position: absolute; 
            left: 0px;
            top: 0px;  
            color: ' . $styledata[292] . ' !important; 
        }
 
        .oxi-addons-wrapper-' . $oxiid . '  .mejs-mute button::after { 
            content: "\\' . $stylefiles[10] . '"; 
            font-family: "Font Awesome\ 5 Free";  
            font-weight: 900;
            color: ' . $styledata[330] . ' !important;
            font-size: ' . $styledata[326] . 'px;  
        } 
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-horizontal-volume-slider { 
            width: ' . ($styledata[342] + 20) . 'px; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-horizontal-volume-total {
            background: ' . $styledata[332] . ' !important;
            width: ' . $styledata[342] . 'px;
            height: ' . $styledata[346] . 'px; 
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 350) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 424) . ' !important;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .mejs-horizontal-volume-current {
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 424) . ' !important;
            background: ' . $styledata[366] . ' !important;
        }
        .oxi-addons-wrapper-' . $oxiid . '  .mejs-horizontal-volume-handle {
             ' . $show_volume_handle . ';
             position: absolute;
             width: ' . $styledata[368] . 'px;
             height: ' . $styledata[372] . 'px; 
             top: ' . $styledata[380] . 'px;
             background: ' . $styledata[384] . ';
             border:  ' . $styledata[386] . 'px ' . $styledata[387] . ';
             border-color: ' . $styledata[390] . ';
             border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 392) . '; 
        }
        

        @media only screen and (min-width : 669px) and (max-width : 993px){ 
            .oxi-addons-wrapper-' . $oxiid . '{  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 12) . '; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-audio{
                max-width: ' . $styledata[8] . 'px;  
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 58) . ';  
            }  
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-image{  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 441) . ';   
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-img{  
                max-width: ' . $styledata[409] . 'px;
                height: ' . $styledata[413] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 457) . ';  
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{ 
                font-size: ' . $styledata[479] . 'px;  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 491) . '; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-author{ 
                font-size: ' . $styledata[507] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 519) . ';
            }  
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-container,  
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-controls { 
                height: ' . $styledata[43] . 'px !important; 
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-playpause-button{  
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 97) . ';
                height: ' . ($styledata[75] + 20) . 'px ;
                width: ' . ($styledata[75] + 15) . 'px; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-play button::after,
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-replay button::after,
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-pause button::after{  
                font-size: ' . $styledata[75] . 'px; 
            }
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-replay button::after {  
                font-size: ' . $styledata[75] . 'px;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-playpause-button > button { 
                height: ' . $styledata[75] . 'px !important; 
                width: ' . $styledata[75] . 'px !important;
            } 
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-pause button::after {  
                font-size: ' . $styledata[112] . 'px;
                height: ' . $styledata[75] . 'px !important; 
                width: ' . $styledata[75] . 'px !important;  
            }
        
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-time {  
                font-size: ' . $styledata[119] . 'px;   
                height: ' . $styledata[119] . 'px;   
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . '; 
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 147) . '; 
            }   
    
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-rail { 
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 181) . ';  
            }  
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-current ,
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-total ,
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-loaded , 
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-buffering {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 165) . ' !important;
                height: ' . $styledata[421] . 'px; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-float{
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ' !important;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-handle {
                ' . $show_progress_handle . '; 
                width: ' . $styledata[197] . 'px;
                height: ' . $styledata[201] . 'px;
                left: ' . $styledata[205] . 'px;
                top: ' . $styledata[209] . 'px; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 221) . ' !important;
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-float {  
                width: ' . $styledata[265] . 'px;
                height: ' . $styledata[269] . 'px;
                font-size: ' . $styledata[243] . 'px;   
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 273) . '; 
            }
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-time-float-current{
                width: ' . $styledata[265] . 'px;
                height: ' . $styledata[269] . 'px;  
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-mute button,
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-unmute button{  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 295) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 311) . ';
            }
    
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-mute button::after,
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-unmute button::after{  
                font-size: ' . $styledata[289] . 'px; 
            }
     
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-mute button::after {  
                font-size: ' . $styledata[327] . 'px;  
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-horizontal-volume-slider { 
                width: ' . ($styledata[343] + 15) . 'px; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-horizontal-volume-total { 
                width: ' . $styledata[343] . 'px;
                height: ' . $styledata[347] . 'px; 
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 351) . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 425) . ' !important;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-horizontal-volume-current {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 425) . ' !important; 
            }
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-horizontal-volume-handle {
                 width: ' . $styledata[269] . 'px;
                 height: ' . $styledata[373] . 'px; 
                 top: ' . $styledata[381] . 'px; 
                 border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 393) . '; 
            }
             
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-wrapper-' . $oxiid . '{  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ' !important;  
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-audio{
                max-width: ' . $styledata[9] . 'px !important; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 58) . ';  
            }  
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-image{  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 442) . ' !important;   
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-img{  
                max-width: ' . $styledata[410] . 'px !important;
                height: ' . $styledata[414] . 'px !important;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 458) . ' !important;  
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{ 
                font-size: ' . $styledata[480] . 'px !important;  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 492) . ' !important; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-author{ 
                font-size: ' . $styledata[508] . 'px !important; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 520) . ' !important;
            }  
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-container, 
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-controls { 
                height: ' . $styledata[44] . 'px !important; 
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-playpause-button{  
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 98) . ';
                height: ' . ($styledata[76] + 10) . 'px !important;
                width: ' . ($styledata[76] + 6) . 'px !important; 
               
            }
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-play button::after,
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-replay button::after,
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-pause button::after{  
                font-size: ' . $styledata[76] . 'px !important; 
            }
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-replay button::after {  
                font-size: ' . $styledata[76] . 'px;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-playpause-button > button { 
                height: ' . $styledata[76] . 'px !important; 
                width: ' . $styledata[76] . 'px !important;
            } 
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-pause button::after {  
                font-size: ' . $styledata[112] . 'px;
                height: ' . $styledata[76] . 'px !important; 
                width: ' . $styledata[76] . 'px !important;  
            }
        
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-time {  
                font-size: ' . $styledata[120] . 'px;   
                height: ' . $styledata[120] . 'px;   
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 132) . ' !important; 
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 148) . ' !important; 
            }   
    
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-rail { 
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 182) . ';  
            }  
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-current ,
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-total ,
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-loaded , 
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-buffering {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 166) . ' !important;
                height: ' . $styledata[422] . 'px !important; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-float{
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ' !important;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-handle {
                ' . $show_progress_handle . '; 
                width: ' . $styledata[198] . 'px !important;
                height: ' . $styledata[202] . 'px !important;
                left: ' . $styledata[206] . 'px !important;
                top: ' . $styledata[210] . 'px !important; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 222) . ' !important;
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-time-float {  
                width: ' . $styledata[266] . 'px !important;
                height: ' . $styledata[270] . 'px !important;
                font-size: ' . $styledata[244] . 'px !important;   
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 274) . '; 
            }
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-time-float-current{
                width: ' . $styledata[266] . 'px !important;
                height: ' . $styledata[270] . 'px !important;  
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-mute button,
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-unmute button{  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 296) . ' !important;
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 312) . ' !important;
            }
    
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-mute button::after,
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-unmute button::after{  
                font-size: ' . $styledata[290] . 'px !important; 
            }
     
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-mute button::after {  
                font-size: ' . $styledata[328] . 'px !important;  
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-horizontal-volume-slider { 
                width: ' . ($styledata[344] + 5) . 'px !important; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-horizontal-volume-total { 
                width: ' . $styledata[344] . 'px !important;
                height: ' . $styledata[348] . 'px !important; 
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 352) . ' !important;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 426) . ' !important;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .mejs-horizontal-volume-current {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 426) . ' !important; 
            }
            .oxi-addons-wrapper-' . $oxiid . '  .mejs-horizontal-volume-handle {
                 width: ' . $styledata[370] . 'px !important;
                 height: ' . $styledata[374] . 'px !important; 
                 top: ' . $styledata[382] . 'px !important; 
                 border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 394) . ' !important; 
            }
        }';
        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('mediaelement-min', $jquery);
    }
}
