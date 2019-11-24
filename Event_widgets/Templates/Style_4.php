<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_4
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_4 extends Templates
{

    public function inline_public_jquery()
    {
        $a = $this->style['sa_event_widgets_opening'];
        $jquery = ' jQuery(".oxi-addons-EV-style-4 .oxi-addons-EV-info") . slideToggle("slow");
                    jQuery(".oxi-addons-EV-style-4 .oxi-addons-EV-head' . $a . '") . addClass("oxi-active");
                    jQuery(".oxi-addons-EV-style-4 .oxi-addons-EV-info' . $a . '") . slideToggle("slow");
                    jQuery(".oxi-addons-EV-style-4 .oxi-addons-EV-head") . on("click", function () {
                    if (jQuery(this) . hasClass("oxi-active")) {
                        jQuery(this) . removeClass("oxi-active");
                        jQuery(this) . parent() . children(".oxi-addons-EV-info") . slideToggle("slow");
                    } else {
                        jQuery(this) . addClass("oxi-active");
                        jQuery(this) . parent() . children(".oxi-addons-EV-info") . slideToggle("slow");
                    }
                });';
        return $jquery;
    }

    public function default_render($style, $child, $admin)
    {
        $imagepositionleft = $imagepositionright = '';
        $time = '';
        $title = '';
        $author = $info_body = $info_location = '';
        $all_data = (array_key_exists('sa_event_widgets_data', $style) && is_array($style['sa_event_widgets_data'])) ? $style['sa_event_widgets_data'] : [];

        foreach ($all_data as $key => $listitemdata) {
            if ($this->media_render('sa_event_t_media', $listitemdata) != '') {
                $media = $this->media_render('sa_event_t_media', $listitemdata);
            } else {

                $media = 'http://logichunt.net/demo/wordpress/emeet/wp-content/uploads/2018/07/speaker3-150x150.jpg';
            }
            if ($style['sa_event_widgets_img_pos'] == 'left') {
                $imagepositionleft = '<div class="oxi-addons-EV-image">
                                            <img class="oxiimage" src="' . $media . '">
                                        </div>';
            } else {
                $imagepositionright = '<div class="oxi-addons-EV-image">
                                            <img class="oxiimage" src="' . $media . '">
                                        </div>';
            }

            if ($listitemdata['sa_event_t_time'] != '') :
                $time = '<div class="oxi-addons-EV-time">
                                <p class="oxi-addons-EV-time-body">
                                   ' . $this->text_render($listitemdata['sa_event_t_time']) . '
                                </p>
                            </div>';
            endif;
            if ($listitemdata['sa_event_t_title'] != '') :
                $title = '      <h3 class="oxi-addons-EV-title-text">
                                ' . $this->text_render($listitemdata['sa_event_t_title']) . '
                            </h3>';
            endif;
            if ($listitemdata['sa_event_t_Author'] != '') :
                $author = '     <h4 class="oxi-addons-EV-title-author-info">
                                ' . $this->text_render($listitemdata['sa_event_t_Author']) . '
                            </h4>';
            endif;
            if ($listitemdata['sa_event_t_info_text'] != '') :
                $info_body = ' <div class="oxi-addons-EV-info-body">' . $this->text_render($listitemdata['sa_event_t_info_text']) . '</div>';
            endif;
            if ($listitemdata['sa_event_t_location'] != '') :
                $info_location = '  <div class="oxi-addons-EV-info-location">
                                    ' . $this->text_render($listitemdata['sa_event_t_location']) . '
                                 </div>';
            endif;
            echo '<div class="oxi-addons-EV-style-4 .oxi-addons-EW-wrapper-style-4-' . $key . '">
                <div class="oxi-addons-EV-row" ' . $this->animation_render('sa_event_widgets_animation', $style) . '>
                    <div class="oxi-addons-EV-head">
                        ' . $imagepositionleft . '
                        <div class="oxi-addons-EV-title">
                            ' . $time . '
                            ' . $title . '
                            ' . $author . '
                        </div>
                        ' . $imagepositionright . '
                    </div>
                    <div class="oxi-addons-EV-info">
                        ' . $info_body . '
                        ' . $info_location . '
                      
                    </div>
                </div>
            </div>';
        }
    }

    public function old_render()
    {
        $style = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        $imagepositionleft = $imagepositionright = '';
        echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            if ($styledata[277] == 'left') {
                $imagepositionleft = '<div class="oxi-addons-EV-image">
                                    <img class="oxiimage" src="' . OxiAddonsUrlConvert($data[7]) . '">
                                </div>';
            } else {
                $imagepositionright = '<div class="oxi-addons-EV-image">
                                    <img class="oxiimage" src="' . OxiAddonsUrlConvert($data[7]) . '">
                                </div>';
            }
            echo '<div class="oxi-addons-EV-' . $oxiid . '">
                <div class="oxi-addons-EV-row" ' . OxiAddonsAnimation($styledata, 65) . '>
                    <div class="oxi-addons-EV-head">
                        ' . $imagepositionleft . '
                        <div class="oxi-addons-EV-title">
                            <div class="oxi-addons-EV-time">
                                <p class="oxi-addons-EV-time-body">
                                   ' . OxiAddonsTextConvert($data[1]) . '
                                </p>
                            </div>
                            <h3 class="oxi-addons-EV-title-text">
                                ' . OxiAddonsTextConvert($data[3]) . '
                            </h3>
                            <h4 class="oxi-addons-EV-title-author-info">
                                ' . OxiAddonsTextConvert($data[5]) . '
                            </h4>
                        </div>
                        ' . $imagepositionright . '
                    </div>
                    <div class="oxi-addons-EV-info">
                        <div class="oxi-addons-EV-info-body">' . OxiAddonsTextConvert($data[11]) . '</div>
                        <div class="oxi-addons-EV-info-location">
                           ' . OxiAddonsTextConvert($data[9]) . '
                        </div>
                    </div>
                </div>
            </div>';
        }
        echo '</div>
    </div>';
        $css = '.oxi-addons-EV-' . $oxiid . '{
                width: 100%;
                float:left;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-row{
                width: 100%;
                float:left;
                ' . OxiAddonsBGImage($styledata, 3) . '
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 59) . '    
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-head{
                width: 100%;
                float:left;
                ' . OxiAddonsBGImage($styledata, 39) . '
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-head.oxi-active{
                width: 100%;
                float:left;
                background: transparent !important;
            }
            .oxi-addons-EV-' . $oxiid . '.oxi-active .oxi-addons-EV-head{
                background-color: #005177;
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-image{
                width: 20%;
                float:left;
                text-align: center;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 279) . ';
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-image .oxiimage{
                width: ' . $styledata[187] . 'px;
                height: ' . $styledata[187] . 'px;
                margin: 0 auto;
                border-width:' . $styledata[191] . 'px;
                border-style:' . $styledata[192] . ';
                border-color:' . $styledata[195] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 197) . ';
            }
            .oxi-addons-EV-' . $oxiid . '  .oxi-addons-EV-title{
                width: 80%;
                float: left;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 43) . ';
                cursor:pointer;
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-head.oxi-active .oxi-addons-EV-title{
                ' . OxiAddonsBGImage($styledata, 39) . '
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-time{
                width:100%;
                float: left;
                text-align: ' . explode(':', $styledata[275])[0] . ';
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-time-body{
                display: inline-block;
                font-size:' . $styledata[69] . 'px;
                color:' . $styledata[73] . ';
                background: ' . $styledata[75] . ';
                ' . OxiAddonsFontSettings($styledata, 271) . '
                text-align:center;
                border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 97) . ';
                margin:' . OxiAddonsPaddingMarginSanitize($styledata, 113) . ';
            }
            .oxi-addons-EV-' . $oxiid . '  .oxi-addons-EV-title-text{
                width:100%;
                float: left; 
                font-size:' . $styledata[129] . 'px;
                color:' . $styledata[133] . ';
                ' . OxiAddonsFontSettings($styledata, 135) . '
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 141) . ';
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-title-author-info{
                width: 100%;
                float: left;
                font-size:' . $styledata[157] . 'px;
                color:' . $styledata[161] . ';
                ' . OxiAddonsFontSettings($styledata, 165) . '
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 171) . ';
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-title-author-info span{
                font-size:' . $styledata[157] . 'px;
                color:' . $styledata[163] . ';
                ' . OxiAddonsFontSettings($styledata, 165) . '
            }
            .oxi-addons-EV-' . $oxiid . '  .oxi-addons-EV-info{
                width:100%;
                float: left;
                transition: none;
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-info-body{
                width: 100%;
                float: left;
                font-size:' . $styledata[213] . 'px;
                color:' . $styledata[217] . ';
                ' . OxiAddonsFontSettings($styledata, 219) . '
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 225) . ';
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-info-body p{
                font-size:' . $styledata[213] . 'px;
                color:' . $styledata[217] . ';
                ' . OxiAddonsFontSettings($styledata, 219) . '
            }
            .oxi-addons-EV-' . $oxiid . '  .oxi-addons-EV-info-location{
                width: 100%;
                float: left; 
                font-size:' . $styledata[241] . 'px;
                color:' . $styledata[245] . ';
                ' . OxiAddonsFontSettings($styledata, 249) . '
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 255) . ';
           
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-info-location span{
                font-size:' . $styledata[241] . 'px;
                 color:' . $styledata[247] . ';
                ' . OxiAddonsFontSettings($styledata, 249) . '
              
            }
            
            @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-EV-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-row{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';    
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-image{
                float: none;
                width: 100%;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 280) . ';
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-image .oxiimage{
                width: ' . $styledata[188] . 'px;
                height: ' . $styledata[188] . 'px;
                border-width:' . $styledata[192] . 'px;
            }
            .oxi-addons-EV-' . $oxiid . '  .oxi-addons-EV-title{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 44) . ';
                width: 100%;
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-time{
                width: 100%;
                float: none;
                text-align: center;
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-time-body{
                font-size:' . $styledata[70] . 'px;
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 98) . ';
                margin:' . OxiAddonsPaddingMarginSanitize($styledata, 114) . ';
            }
            .oxi-addons-EV-' . $oxiid . '  .oxi-addons-EV-title-text{
                font-size:' . $styledata[130] . 'px;
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 142) . ';
                text-align: center;
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-title-author-info{
                font-size:' . $styledata[158] . 'px;
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 172) . ';
                text-align: center;
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-title-author-info span{
                font-size:' . $styledata[158] . 'px;
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-info-body{
                font-size:' . $styledata[214] . 'px;
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 226) . ';
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-info-body p{
                font-size:' . $styledata[214] . 'px;
            }
            .oxi-addons-EV-' . $oxiid . '  .oxi-addons-EV-info-location{
                font-size:' . $styledata[242] . 'px;
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 256) . '; 
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-info-location span{
                font-size:' . $styledata[242] . 'px;
              
            }
                  
        }

       @media only screen and (max-width : 668px){
            .oxi-addons-EV-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-row{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';    
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-image{
                float: none;
                width: 100%;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 281) . ';
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-image .oxiimage{
                width: ' . $styledata[189] . 'px;
                height: ' . $styledata[189] . 'px;
                border-width:' . $styledata[193] . 'px;
            }
            .oxi-addons-EV-' . $oxiid . '  .oxi-addons-EV-title{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 45) . ';
                width: 100%;
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-time{
                width: 100%;
                float: none;
                text-align: center;
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-time-body{
                font-size:' . $styledata[71] . 'px;
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';
                margin:' . OxiAddonsPaddingMarginSanitize($styledata, 115) . ';
            }
            .oxi-addons-EV-' . $oxiid . '  .oxi-addons-EV-title-text{
                font-size:' . $styledata[131] . 'px;
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 143) . ';
                text-align: center;
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-title-author-info{
                font-size:' . $styledata[159] . 'px;
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 173) . ';
                text-align: center;
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-title-author-info span{
                font-size:' . $styledata[159] . 'px;
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-info-body{
                font-size:' . $styledata[215] . 'px;
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 227) . ';
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-info-body p{
                font-size:' . $styledata[215] . 'px;
            }
            .oxi-addons-EV-' . $oxiid . '  .oxi-addons-EV-info-location{
                font-size:' . $styledata[243] . 'px;
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 257) . ';
           
            }
            .oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-info-location span{
                font-size:' . $styledata[243] . 'px;
              
            }
                }';

        $jquery = ' jQuery(".oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-info").slideToggle("slow");
                jQuery(".oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-head' . $styledata[295] . '").addClass("oxi-active");
                jQuery(".oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-info' . $styledata[295] . '").slideToggle("slow");
                jQuery(".oxi-addons-EV-' . $oxiid . ' .oxi-addons-EV-head").on("click", function () {
                    if (jQuery(this).hasClass("oxi-active")) {
                        jQuery(this).removeClass("oxi-active");
                        jQuery(this).parent().children(".oxi-addons-EV-info").slideToggle("slow");
                    } else {
                        jQuery(this).addClass("oxi-active");
                        jQuery(this).parent().children(".oxi-addons-EV-info").slideToggle("slow");
                    }
                });';
        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }
}
