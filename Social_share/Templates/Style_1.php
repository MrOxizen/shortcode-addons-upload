<?php

namespace SHORTCODE_ADDONS_UPLOAD\Social_share\Templates;

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

    public function public_jquery() {
        wp_enqueue_script('jquery-kyco-easyshare-min', SA_ADDONS_UPLOAD_URL . '/Social_share/file/jquery-kyco-easyshare-min.js', true, SA_ADDONS_PLUGIN_VERSION);
        $this->JSHANDLE = 'jquery-kyco-easyshare-min';
    }

    public function inline_public_css() {
        $rt = '';
        $style = $this->style;
        $all_data = (array_key_exists('sa_ss_repeater', $style) && is_array($style['sa_ss_repeater'])) ? $style['sa_ss_repeater'] : [];
        foreach ($all_data as $key => $value) {

            $rt .= '
                   .' . $this->WRAPPER . ' .oxi-addons-wrapper-ss1 .oxi-addons-' . $value['sa_ss_social_media'] . '-ss1 .oxi-addons-social-icon { 
                        color: ' . $value['sa_ss_icon_color'] . ';   
                    }
                    .' . $this->WRAPPER . ' .oxi-addons-wrapper-ss1 .oxi-addons-' . $value['sa_ss_social_media'] . '-ss1 .oxi-circle-' . $value['sa_ss_social_media'] . '-ss1{
                        fill: ' . $value['sa_ss_repeater_bg'] . ';
                        stroke: ' . $value['sa_ss_icon_color'] . ';
                        -webkit-animation: outWaveOut' . $value['sa_ss_social_media'] . '_ss1 1s cubic-bezier(0.42, 0, 0.58, 1) forwards;
                        animation: outWaveOut' . $value['sa_ss_social_media'] . '_ss1 1s cubic-bezier(0.42, 0, 0.58, 1) forwards;
                        transition: all .5s ease-in-out !important;
                    }
                    .' . $this->WRAPPER . ' .oxi-addons-wrapper-ss1  .oxi-addons-' . $value['sa_ss_social_media'] . '-ss1:hover .oxi-circle-' . $value['sa_ss_social_media'] . '-ss1{
                        fill: ' . $value['sa_ss_repeater_bg_hover'] . ';
                        fill-opacity: 1;

                        -webkit-animation: outWaveIn' . $value['sa_ss_social_media'] . '_ss1 1s cubic-bezier(0.42, 0, 0.58, 1) forwards, color' . $value['sa_ss_social_media'] . '_ss1 1s linear forwards;
                        animation: outWaveIn' . $value['sa_ss_social_media'] . '_ss1 1s cubic-bezier(0.42, 0, 0.58, 1) forwards, color' . $value['sa_ss_social_media'] . '_ss1 1s linear forwards; 
                    }
                    .' . $this->WRAPPER . ' .oxi-addons-wrapper-ss1 .oxi-addons-' . $value['sa_ss_social_media'] . '-ss1:hover .oxi-addons-' . $value['sa_ss_social_media'] . '-icon{
                        color: ' . $value['sa_ss_icon_color_hover'] . '; 
                    } 
                    @-webkit-keyframes color' . $value['sa_ss_social_media'] . '_ss1{
                        from {
                            stroke: ' . $value['sa_ss_icon_circle_color'] . ';
                        }
                        to {
                            stroke: ' . $value['sa_ss_icon_circle_hover_color'] . ';
                        }
                    }  
                    @-webkit-keyframes outWaveIn' . $value['sa_ss_social_media'] . '_ss1 {
                        to {
                            stroke-width: ' . $style['sa_ss_hover_stroke_width-size'] . 'px;
                            stroke-dasharray: 800;
                        }
                    } 
                    @-webkit-keyframes outWaveOut' . $value['sa_ss_social_media'] . '_ss1 {
                        from {
                            stroke-width: ' . $style['sa_ss_hover_stroke_width-size'] . 'px;
                            stroke-dasharray: 800;
                        }
                        to {
                            stroke: ' . $value['sa_ss_icon_circle_color'] . ';
                            stroke-width: ' . $style['sa_ss_stroke_width-size'] . 'px;
                            stroke-dasharray: 60;
                        }
                    }  
            ';
        }
        return $rt;
    }

    public function default_render($style, $child, $admin) {
        $icons = '';

        $all_data = (array_key_exists('sa_ss_repeater', $style) && is_array($style['sa_ss_repeater'])) ? $style['sa_ss_repeater'] : [];
        foreach ($all_data as $key => $value) {
            $icons .= '
                <div class="oxi-soical-share-' . $key . '" ' . $this->animation_render('sa_ss_animation', $style) . '>
                    <div class="oxi-addons-soical"  >
                        <div class="oxi-addons-main-share-circle oxi-addons-' . $value['sa_ss_social_media'] . '-ss1" data-easyshare-button="' . $value['sa_ss_social_media'] . '">
                            <svg  preserveAspectRatio="xMinYMin meet" viewBox="0 0 200 200" class="oxi-addons-circle oxi-circle-' . $value['sa_ss_social_media'] . '-ss1">  
                                <circle cx="100" cy="100" r="80"/>
                            </svg>
                            <div class="oxi-addons-social-icon oxi-addons-' . $value['sa_ss_social_media'] . '-icon">
                                ' . $this->font_awesome_render($value['sa_ss_icon_icon']) . ' 
                            </div>
                        </div>  
                    </div> 
                </div> ';
        }

        global $wp;
        echo '<div class="oxi-addons-wrapper-ss1">
                        <div class="oxi-addons-wrapper-main-social" data-easyshare data-easyshare-url="' . home_url($wp->request) . '">
                            <div class="oxi-addons-main-social"> 
                                ' . $icons . ' 
                            </div>
                        </div> 
                </div>';
    }

    public function old_render() {
        $style = $this->dbdata;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = $jquery = $facebook = $twitter = $pinterest = $linkedin = $google = '';

        echo oxi_addons_elements_stylejs('jquery-kyco-easyshare-min', 'social_share', 'js');
        if ($styledata[41] == 'true') {
            $facebook = '
            <div class="oxi-addons-soical" >
                <div class="oxi-addons-main-share-circle oxi-addons-facebook-' . $oxiid . '" data-easyshare-button="facebook">
                    <svg  preserveAspectRatio="xMinYMin meet" viewBox="0 0 200 200" class="oxi-addons-circle oxi-circle-facebook-' . $oxiid . '">  
                        <circle cx="100" cy="100" r="80"/>
                    </svg>
                    <div class="oxi-addons-social-icon oxi-addons-facebook-icon">
                        ' . oxi_addons_font_awesome('' . $stylefiles[2] . '') . ' 
                    </div>
                </div> 
            </div> 
        ';
        }
        if ($styledata[51] == 'true') {
            $twitter = '
            <div class="oxi-addons-soical" >
                <div class="oxi-addons-main-share-circle oxi-addons-twitter-' . $oxiid . '" data-easyshare-button="twitter">
                    <svg  preserveAspectRatio="xMinYMin meet" viewBox="0 0 200 200" class="oxi-addons-circle oxi-circle-twitter-' . $oxiid . '">  
                        <circle cx="100" cy="100" r="80"/>
                    </svg>
                    <div class="oxi-addons-social-icon oxi-addons-twitter-icon">
                        ' . oxi_addons_font_awesome('' . $stylefiles[4] . '') . ' 
                    </div>
                </div> 
            </div> 
        ';
        }
        if ($styledata[61] == 'true') {
            $google = '
         <div class="oxi-addons-soical" >
            <div class="oxi-addons-main-share-circle oxi-addons-google-' . $oxiid . '" data-easyshare-button="google">
                <svg  preserveAspectRatio="xMinYMin meet" viewBox="0 0 200 200" class="oxi-addons-circle oxi-circle-google-' . $oxiid . '">  
                    <circle cx="100" cy="100" r="80"/>
                </svg>
                <div class="oxi-addons-social-icon oxi-addons-google-icon">
                    ' . oxi_addons_font_awesome('' . $stylefiles[6] . '') . ' 
                </div>
            </div> 
        </div> 
        ';
        }
        if ($styledata[71] == 'true') {
            $linkedin = '
        <div class="oxi-addons-soical" >
            <div class="oxi-addons-main-share-circle oxi-addons-linkedin-' . $oxiid . '" data-easyshare-button="linkedin">
                <svg  preserveAspectRatio="xMinYMin meet" viewBox="0 0 200 200" class="oxi-addons-circle oxi-circle-linkedin-' . $oxiid . '">  
                    <circle cx="100" cy="100" r="80"/>
                </svg>
                <div class="oxi-addons-social-icon oxi-addons-linkedin-icon">
                    ' . oxi_addons_font_awesome('' . $stylefiles[8] . '') . ' 
                </div>
            </div> 
        </div> 
        ';
        }
        if ($styledata[81] == 'true') {
            $pinterest = '
            <div class="oxi-addons-soical" >
                <div class="oxi-addons-main-share-circle oxi-addons-pinterest-' . $oxiid . '" data-easyshare-button="pinterest">
                    <svg  preserveAspectRatio="xMinYMin meet" viewBox="0 0 200 200" class="oxi-addons-circle oxi-circle-pinterest-' . $oxiid . '">  
                        <circle cx="100" cy="100" r="80"/>
                    </svg>
                    <div class="oxi-addons-social-icon oxi-addons-pinterest-icon">
                        ' . oxi_addons_font_awesome('' . $stylefiles[10] . '') . ' 
                    </div>
                </div> 
            </div> 
        ';
        }

        global $wp;
        echo '  <div class="oxi-addons-container">
                <div class="oxi-addons-row">
                    <div class="oxi-addons-wrapper-' . $oxiid . '">
                        <div class="oxi-addons-wrapper-main-social" data-easyshare data-easyshare-url="' . home_url($wp->request) . '">
                            <div class="oxi-addons-main-social"> 
                                 ' . $facebook . '
                                 ' . $twitter . '
                                 ' . $linkedin . '
                                 ' . $google . '
                                 ' . $pinterest . '
                            </div>
                        </div> 
                    </div>
                </div> 
            </div> 
    ';
        $aling = '';
        if ($styledata[3] === 'center') {
            $aling = 'justify-content: center;';
        } elseif ($styledata[3] === 'left') {
            $aling = 'justify-content: flex-start;';
        } elseif ($styledata[3] === 'right') {
            $aling = 'justify-content: flex-end;';
        }
        $css .= '
         .oxi-addons-container *{
            transition: none !important; 
        }
        .oxi-addons-wrapper-' . $oxiid . '{
           width: 100%;
          display: flex;   
          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . '; 
         ' . $aling . '
          overflow: hidden;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-main-social{
            display: flex;
        }
         .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-social { 
            display: flex;     
            flex-wrap: wrap;
            justify-content: center;
            align-items: center; 
        } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-soical {
             display: flex;
             align-items: center;
             
        } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-text {
            margin-left: 5px;
        }  
       .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-share-circle {
            position: relative;
            display: inline-block; 
            max-width: 100%; 
            line-height: 0;
            text-align: center;
            margin: 0 auto;
            transition: all 0.5s ease-in-out !important;
        }
       .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-share-circle .oxi-addons-circle { 
            stroke-width:  ' . $styledata[33] . 'px;
            stroke-dasharray: 60;
            transition: all 0.2s ease-in-out; 
            width: ' . $styledata[25] . 'px;
            height: ' . $styledata[29] . 'px; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-share-circle .oxi-addons-social-icon {  
            font-size:' . $styledata[21] . 'px; 
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%; 
        }
       .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-main-share-circle .oxi-addons-social-icon .oxi-icons{ 
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%); 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-share-circle:hover {
            cursor: pointer;
        } 
       .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-facebook-' . $oxiid . ' .oxi-addons-social-icon { 
            color: ' . $styledata[43] . ';   
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-facebook-' . $oxiid . ' .oxi-circle-facebook-' . $oxiid . '{
            fill: ' . $styledata[45] . ';
            stroke: ' . $styledata[43] . ';
            -webkit-animation: outWaveOutFacebook_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards;
            animation: outWaveOutFacebook_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards;
            transition: all .5s ease-in-out !important;
        }
       .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-facebook-' . $oxiid . ':hover .oxi-circle-facebook-' . $oxiid . '{
            fill: ' . $styledata[49] . ';
                fill-opacity: 1;
                
                -webkit-animation: outWaveInFacebook_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards, colorFacebook_' . $oxiid . ' 1s linear forwards;
                animation: outWaveInFacebook_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards, colorFacebook_' . $oxiid . ' 1s linear forwards; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-facebook-' . $oxiid . ':hover .oxi-addons-facebook-icon{
            color: ' . $styledata[47] . '; 
        } 
        @-webkit-keyframes colorFacebook_' . $oxiid . '{
            from {
                stroke: ' . $styledata[43] . ';
            }
            to {
                stroke: ' . $styledata[47] . ';
            }
        }  
        @-webkit-keyframes outWaveInFacebook_' . $oxiid . ' {
            to {
                stroke-width: ' . $styledata[37] . 'px;
                stroke-dasharray: 800;
            }
        } 
        @-webkit-keyframes outWaveOutFacebook_' . $oxiid . ' {
            from {
                stroke-width: ' . $styledata[37] . 'px;
                stroke-dasharray: 800;
            }
            to {
                stroke: ' . $styledata[43] . ';
                stroke-width: ' . $styledata[33] . 'px;
                stroke-dasharray: 60;
            }
        }  

       .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-twitter-' . $oxiid . ' .oxi-addons-social-icon { 
            color: ' . $styledata[53] . '; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-twitter-' . $oxiid . ' .oxi-circle-twitter-' . $oxiid . '{
            fill: ' . $styledata[55] . ';
            stroke: ' . $styledata[53] . ';
            -webkit-animation: outWaveOutTwitter_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards;
            animation: outWaveOutTwitter_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards;
             transition: all .5s ease-in-out !important;
        }
       .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-twitter-' . $oxiid . ':hover .oxi-circle-twitter-' . $oxiid . '{
            fill: ' . $styledata[59] . ';
                fill-opacity: 1;
                -webkit-animation: outWaveInTwitter_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards, colorTwitter_' . $oxiid . ' 1s linear forwards;
                animation: outWaveInTwitter_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards, colorTwitter_' . $oxiid . ' 1s linear forwards; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-twitter-' . $oxiid . ':hover .oxi-addons-twitter-icon{
            color: ' . $styledata[57] . '; 
        } 
        @-webkit-keyframes colorTwitter_' . $oxiid . '{
            from {
                stroke: ' . $styledata[53] . ';
            }
            to {
                stroke: ' . $styledata[57] . ';
            }
        }  
        @-webkit-keyframes outWaveInTwitter_' . $oxiid . ' {
            to {
                stroke-width: ' . $styledata[37] . 'px;
                stroke-dasharray: 800;
            }
        } 
        @-webkit-keyframes outWaveOutTwitter_' . $oxiid . ' {
            from {
                stroke-width: ' . $styledata[37] . 'px;
                stroke-dasharray: 800;
            }
            to {
                stroke: ' . $styledata[53] . ';
                stroke-width: ' . $styledata[33] . 'px;
                stroke-dasharray: 60;
            }
        }  
             
       .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-google-' . $oxiid . ' .oxi-addons-social-icon { 
            color: ' . $styledata[63] . '; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-google-' . $oxiid . ' .oxi-circle-google-' . $oxiid . '{
            fill: ' . $styledata[65] . ';
            stroke: ' . $styledata[63] . ';
            -webkit-animation: outWaveOutGoogle_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards;
            animation: outWaveOutGoogle_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards;
             transition: all .5s ease-in-out !important;
        }
       .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-google-' . $oxiid . ':hover .oxi-circle-google-' . $oxiid . '{
            fill: ' . $styledata[69] . ';
                fill-opacity: 1;
                -webkit-animation: outWaveInGoogle_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards, colorGoogle_' . $oxiid . ' 1s linear forwards;
                animation: outWaveInGoogle_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards, colorGoogle_' . $oxiid . ' 1s linear forwards; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-google-' . $oxiid . ':hover .oxi-addons-google-icon{
            color: ' . $styledata[67] . '; 
        } 
        @-webkit-keyframes colorGoogle_' . $oxiid . '{
            from {
                stroke: ' . $styledata[63] . ';
            }
            to {
                stroke: ' . $styledata[67] . ';
            }
        }  
        @-webkit-keyframes outWaveInGoogle_' . $oxiid . ' {
            to {
                stroke-width: ' . $styledata[37] . 'px;
                stroke-dasharray: 800;
            }
        } 
        @-webkit-keyframes outWaveOutGoogle_' . $oxiid . ' {
            from {
                stroke-width: ' . $styledata[37] . 'px;
                stroke-dasharray: 800;
            }
            to {
                stroke: ' . $styledata[63] . ';
                stroke-width: ' . $styledata[33] . 'px;
                stroke-dasharray: 60;
            }
        }  


       .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-linkedin-' . $oxiid . ' .oxi-addons-social-icon { 
            color: ' . $styledata[73] . '; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-linkedin-' . $oxiid . ' .oxi-circle-linkedin-' . $oxiid . '{
            fill: ' . $styledata[75] . ';
            stroke: ' . $styledata[73] . ';
            -webkit-animation: outWaveOutLinkedin_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards;
            animation: outWaveOutLinkedin_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards;
             transition: all .5s ease-in-out !important;
        }
       .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-linkedin-' . $oxiid . ':hover .oxi-circle-linkedin-' . $oxiid . '{
            fill: ' . $styledata[79] . ';
                fill-opacity: 1;
                -webkit-animation: outWaveInLinkedin_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards, colorLinkedin_' . $oxiid . ' 1s linear forwards;
                animation: outWaveInLinkedin_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards, colorLinkedin_' . $oxiid . ' 1s linear forwards; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-linkedin-' . $oxiid . ':hover .oxi-addons-linkedin-icon{
            color: ' . $styledata[77] . '; 
        } 
        @-webkit-keyframes colorLinkedin_' . $oxiid . '{
            from {
                stroke: ' . $styledata[73] . ';
            }
            to {
                stroke: ' . $styledata[77] . ';
            }
        }  
        @-webkit-keyframes outWaveInLinkedin_' . $oxiid . ' {
            to {
                stroke-width: ' . $styledata[37] . 'px;
                stroke-dasharray: 800;
            }
        } 
        @-webkit-keyframes outWaveOutLinkedin_' . $oxiid . ' {
            from {
                stroke-width: ' . $styledata[37] . 'px;
                stroke-dasharray: 800;
            }
            to {
                stroke: ' . $styledata[73] . ';
                stroke-width: ' . $styledata[33] . 'px;
                stroke-dasharray: 60;
            }
        }  
             


       .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-pinterest-' . $oxiid . ' .oxi-addons-social-icon { 
            color: ' . $styledata[83] . '; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-pinterest-' . $oxiid . ' .oxi-circle-pinterest-' . $oxiid . '{
            fill: ' . $styledata[75] . ';
            stroke: ' . $styledata[83] . ';
            -webkit-animation: outWaveOutPinterest_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards;
            animation: outWaveOutPinterest_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards;
             transition: all .5s ease-in-out !important;
        }
       .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-pinterest-' . $oxiid . ':hover .oxi-circle-pinterest-' . $oxiid . '{
            fill: ' . $styledata[89] . ';
                fill-opacity: 1;
                -webkit-animation: outWaveInPinterest_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards, colorPinterest_' . $oxiid . ' 1s linear forwards;
                animation: outWaveInPinterest_' . $oxiid . ' 1s cubic-bezier(0.42, 0, 0.58, 1) forwards, colorPinterest_' . $oxiid . ' 1s linear forwards; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-pinterest-' . $oxiid . ':hover .oxi-addons-pinterest-icon{
            color: ' . $styledata[87] . '; 
        } 
        @-webkit-keyframes colorPinterest_' . $oxiid . '{
            from {
                stroke: ' . $styledata[83] . ';
            }
            to {
                stroke: ' . $styledata[87] . ';
            }
        }  
        @-webkit-keyframes outWaveInPinterest_' . $oxiid . ' {
            to {
                stroke-width: ' . $styledata[37] . 'px;
                stroke-dasharray: 800;
            }
        } 
        @-webkit-keyframes outWaveOutPinterest_' . $oxiid . ' {
            from {
                stroke-width: ' . $styledata[37] . 'px;
                stroke-dasharray: 800;
            }
            to {
                stroke: ' . $styledata[83] . ';
                stroke-width: ' . $styledata[33] . 'px;
                stroke-dasharray: 60;
            }
        }  
             
        


        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-wrapper-' . $oxiid . '{ 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 6) . '; 
            } 
            .oxi-addons-main-share-circle .oxi-addons-circle-' . $oxiid . ' { 
                stroke-width:  ' . $styledata[34] . 'px !important; 
                width: ' . $styledata[26] . 'px !important;
                height: ' . $styledata[30] . 'px !important;
            }
            .oxi-addons-main-share-circle .oxi-addons-social-icon {  
                font-size:' . $styledata[22] . 'px !important;  
            }  
             @-webkit-keyframes outWaveInFacebook_' . $oxiid . ' {
                    to {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                } 
                @-webkit-keyframes outWaveOutFacebook_' . $oxiid . ' {
                    from {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                    to {
                        stroke: ' . $styledata[43] . ';
                        stroke-width: ' . $styledata[34] . 'px !important;
                        stroke-dasharray: 60;
                    }
                }  
             @-webkit-keyframes outWaveInTwitter_' . $oxiid . ' {
                    to {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                } 
                @-webkit-keyframes outWaveOutTwitter_' . $oxiid . ' {
                    from {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                    to {
                        stroke: ' . $styledata[43] . ';
                        stroke-width: ' . $styledata[34] . 'px !important;
                        stroke-dasharray: 60;
                    }
                }  
             @-webkit-keyframes outWaveInGoogle_' . $oxiid . ' {
                    to {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                } 
                @-webkit-keyframes outWaveOutGoogle_' . $oxiid . ' {
                    from {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                    to {
                        stroke: ' . $styledata[43] . ';
                        stroke-width: ' . $styledata[34] . 'px !important;
                        stroke-dasharray: 60;
                    }
                }  
             @-webkit-keyframes outWaveInLinkedin_' . $oxiid . ' {
                    to {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                } 
                @-webkit-keyframes outWaveOutLinkedin_' . $oxiid . ' {
                    from {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                    to {
                        stroke: ' . $styledata[43] . ';
                        stroke-width: ' . $styledata[34] . 'px !important;
                        stroke-dasharray: 60;
                    }
                }  
             @-webkit-keyframes outWaveInPinterest_' . $oxiid . ' {
                    to {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                } 
                @-webkit-keyframes outWaveOutPinterest_' . $oxiid . ' {
                    from {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                    to {
                        stroke: ' . $styledata[43] . ';
                        stroke-width: ' . $styledata[34] . 'px !important;
                        stroke-dasharray: 60;
                    }
                }  
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-wrapper-' . $oxiid . '{ 
             padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . '; 
            }  
            .oxi-addons-main-share-circle .oxi-addons-circle-' . $oxiid . ' { 
                stroke-width:  ' . $styledata[35] . 'px !important; 
                width: ' . $styledata[27] . 'px !important;
                height: ' . $styledata[31] . 'px !important;
            }
            .oxi-addons-main-share-circle .oxi-addons-social-icon {  
                font-size:' . $styledata[23] . 'px !important;  
            }  
             @-webkit-keyframes outWaveInFacebook_' . $oxiid . '{
                    to {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                } 
                @-webkit-keyframes outWaveOutFacebook_' . $oxiid . ' {
                    from {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                    to {
                        stroke: ' . $styledata[43] . ';
                        stroke-width: ' . $styledata[34] . 'px !important;
                        stroke-dasharray: 60;
                    }
                }  
             @-webkit-keyframes outWaveInTwitter_' . $oxiid . ' {
                    to {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                } 
                @-webkit-keyframes outWaveOutTwitter_' . $oxiid . ' {
                    from {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                    to {
                        stroke: ' . $styledata[43] . ';
                        stroke-width: ' . $styledata[34] . 'px !important;
                        stroke-dasharray: 60;
                    }
                }  
             @-webkit-keyframes outWaveInGoogle_' . $oxiid . ' {
                    to {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                } 
                @-webkit-keyframes outWaveOutGoogle_' . $oxiid . ' {
                    from {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                    to {
                        stroke: ' . $styledata[43] . ';
                        stroke-width: ' . $styledata[34] . 'px !important;
                        stroke-dasharray: 60;
                    }
                }  
             @-webkit-keyframes outWaveInLinkedin_' . $oxiid . ' {
                    to {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                } 
                @-webkit-keyframes outWaveOutLinkedin_' . $oxiid . ' {
                    from {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                    to {
                        stroke: ' . $styledata[43] . ';
                        stroke-width: ' . $styledata[34] . 'px !important;
                        stroke-dasharray: 60;
                    }
                }  
             @-webkit-keyframes outWaveInPinterest_' . $oxiid . ' {
                    to {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                } 
                @-webkit-keyframes outWaveOutPinterest_' . $oxiid . ' {
                    from {
                        stroke-width: ' . $styledata[38] . 'px !important;
                        stroke-dasharray: 800;
                    }
                    to {
                        stroke: ' . $styledata[43] . ';
                        stroke-width: ' . $styledata[34] . 'px !important;
                        stroke-dasharray: 60;
                    }
                }  
        }
        
    ';


        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
