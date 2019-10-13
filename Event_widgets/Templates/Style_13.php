<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_13
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_13 extends Templates {

    public function default_render($style, $child, $admin) {
        $css = $media = '';
        $all_data = (array_key_exists('sa_event_widgets_data', $style) && is_array($style['sa_event_widgets_data'])) ? $style['sa_event_widgets_data'] : [];
        $image = $details = $css = $title = $time = $location = $month = $day = $timeicon = $locicon = '';
        foreach ($all_data as $key => $listitemdata) {
//       
            if ($this->media_render('sa_event_t_media', $style) != '') {
                $image = ' <div class="oxi-addons-image">
                                <img class="oxi-image" src="' . $this->media_render('sa_event_t_media', $style) . '">
                            </div>';
            }
            if ($listitemdata['sa_event_t_title_link-url'] != '' && $listitemdata['sa_event_t_title'] != '') {
                $title = '<div class="oxi-addons-title">
                                <a class="oxi-link" ' . $this->url_render('sa_event_t_title_link', $listitemdata) . '  > ' . $this->text_render($listitemdata['sa_event_t_title']) . '</a>
                            </div>';
            }if ($listitemdata['sa_event_t_title_link-url'] == '' && $listitemdata['sa_event_t_title'] != '') {
                $title = '<div class="oxi-addons-title">
                                ' . $this->text_render($listitemdata['sa_event_t_title']) . '
                           </div>';
            }
            if ($listitemdata['sa_event_t_sd'] != '') {
                $details = '<div class="oxi-addons-details">
                                ' . $this->text_render($listitemdata['sa_event_t_sd']) . '
                          </div>';
            }
            if ($listitemdata['sa_event_t_info_time_icon'] != '') {
                $timeicon = $this->font_awesome_render($listitemdata['sa_event_t_info_time_icon']);
            }

            if ($listitemdata['sa_event_t_info_time'] != '') {
                $time = '<div class="oxi-addons-time">
                                ' . $timeicon . '
                            <span class="oxi-time-text"> ' . $this->text_render($listitemdata['sa_event_t_info_time']) . '</span>
                        </div>';
            }
            if ($listitemdata['sa_event_t_address_icon'] != '') {
                $locicon = $this->font_awesome_render($listitemdata['sa_event_t_address_icon']);
            }
            if ($listitemdata['sa_event_t_address'] != '') {
                $location = ' <div class="oxi-addons-location"> 
                                        ' . $locicon . '
                                        <span class="oxi-location-text">  ' . $this->text_render($listitemdata['sa_event_t_address']) . '</span>
                                     </div>';
            }
            if ($listitemdata['sa_event_t_month'] != '') {
                $month = '<span class="oxi-addons-month"> 
                                          ' . $this->text_render($listitemdata['sa_event_t_month']) . '
                                    </span>';
            }
            if ($listitemdata['sa_event_t_day'] != '') {
                $day = '  <span class="oxi-addons-day">
                            ' . $this->text_render($listitemdata['sa_event_t_day']) . '
                          </span> ';
            }
            echo '      <div class="oxi-addons-wrapper-style-13 oxi-addons-wrapper-style-13-' . $key . '" >
                          <div class="oxi-addons-parent-wrapper" ' . $this->animation_render('sa_event_widgets_animation', $style) . ' >
                            <div class="oxi-addons-event-main  oxi-events-' . $key . '">
                             <div class="oxi-addons-events" >
                                <div class="oxi-addons-day-month">
                                  <div class="oxi-addons-main-day-month">
                                    ' . $day . '
                                    ' . $month . '
                                  </div>
                                </div>
                                <div class="oxi-addons-content-main">
                                    ' . $title . '
                                    <div class="oxi-addons-time-location">
                                        ' . $time . '
                                        ' . $location . '
                                    </div>
                                   ' . $details . '
                                </div>
                               ' . $image . '
                            </div>
                        
                    </div>';
        }
    }

    public function old_render() {
        $style = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        $image = $details = $css = $title = $time = $location = $month = $day = '';
        echo '<div class="oxi-addons-row">
            <div class="oxi-addons-wrapper-' . $oxiid . '">';
        foreach ($listdata as $key => $value) {
            $data = explode('||#||', $value['files']);
            if ($data[7] != '') {
                $image = ' <div class="oxi-addons-image">
                                        <img class="oxi-image" src="' . OxiAddonsUrlConvert($data[7]) . '">
                                    </div>';
            }
            if ($data[17] != '') {
                $title = '<div class="oxi-addons-title">
                                        <a class="oxi-link" href="' . OxiAddonsUrlConvert($data[17]) . '" target="_blank" > ' . OxiAddonsTextConvert($data[5]) . '</a>
                                    </div>';
            }
            if ($data[11] != '') {
                $details = '<div class="oxi-addons-details">
                                          ' . OxiAddonsTextConvert($data[11]) . '
                                    </div>';
            }
            if ($data[3] != '') {
                $time = '<div class="oxi-addons-time">
                                        ' . oxi_addons_font_awesome('' . $stylefiles[2] . '') . '
                                    <span class="oxi-time-text"> ' . OxiAddonsTextConvert($data[3]) . '</span>
                                </div>';
            }
            if ($data[9] != '') {
                $location = ' <div class="oxi-addons-location"> 
                                        ' . oxi_addons_font_awesome('' . $stylefiles[4] . '') . '
                                        <span class="oxi-location-text">  ' . OxiAddonsTextConvert($data[9]) . '</span>
                                     </div>';
            }
            if ($data[13] != '') {
                $month = '<span class="oxi-addons-month"> 
                                          ' . OxiAddonsTextConvert($data[13]) . '
                                    </span>';
            }
            if ($data[15] != '') {
                $day = '  <span class="oxi-addons-day">
                                      ' . OxiAddonsTextConvert($data[15]) . '
                                    </span> ';
            }

            echo '<div class="oxi-addons-parent-wrapper">
                            <div class="oxi-addons-event-main  oxi-events-' . $key . '">
                             <div class="oxi-addons-events" ' . OxiAddonsAnimation($styledata, 40) . '>
                                <div class="oxi-addons-day-month">
                                  <div class="oxi-addons-main-day-month">
                                    ' . $day . '
                                    ' . $month . '
                                  </div>
                                </div>
                                <div class="oxi-addons-content-main">
                                    ' . $title . '
                                    <div class="oxi-addons-time-location">
                                        ' . $time . '
                                        ' . $location . '
                                    </div>
                                   ' . $details . '
                                </div>
                               ' . $image . '
                            </div>';

            $css .= '
                    .oxi-addons-wrapper-' . $oxiid . ' .oxi-events-' . $key . '{
                            background: ' . $data[1] . ';
                    } 
                    ';
            echo '</div>
                    </div>';
        }
        echo '</div>
    </div>';
        $css .= '
            .oxi-addons-wrapper-' . $oxiid . '{
                width: 100%;
                float: left;  
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-parent-wrapper{ 
                width: 100%;
                float: left;  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';  
                border-top-style: ' . $styledata[3] . ';
                border-top-color: ' . $styledata[4] . ';
                border-top-width: ' . $styledata[6] . 'px;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-parent-wrapper:first-child{
                border-top: 0px solid;
             }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-event-main{
                width: 100%;
                float: left;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';  
                background: ' . $styledata[234] . '; 
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-events{
                display: flex;
                justify-content: space-between;
                width: 100%; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-day-month{
                width: 100%;
                float: left;
                 flex: 2; 
                position: relative;
            }
              .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-day-month::after{
                content: "";
                position: absolute;
                top: ' . $styledata[232] . 'px;
                right: 0;
                background: ' . $styledata[164] . ';
                width: ' . $styledata[156] . 'px;
                height: ' . $styledata[160] . 'px;
            }
              .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-day-month{
                    width: 100%;
                    display: flex;
                    flex-direction: column; 
                }

            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-day{ 
                color: ' . $styledata[76] . ';
                font-size: ' . $styledata[72] . 'px;  
                ' . OxiAddonsFontSettings($styledata, 78) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 84) . '; 
            }  
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-month{ 
                color: ' . $styledata[48] . ';
                font-size: ' . $styledata[44] . 'px;  
                ' . OxiAddonsFontSettings($styledata, 50) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 56) . '; 
            }  
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-main{
                width: 100%;
                float: left;
                flex: 8;
                padding-left: 10px;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-time-location{
                width: 100%;
                display: flex;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-time{ 
                display: flex;
                justify-content: center;
                align-items: center;
                color: ' . $styledata[104] . ';
                font-size: ' . $styledata[100] . 'px;   
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 112) . '; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-time-text{ 
                ' . OxiAddonsFontSettings($styledata, 106) . ';  
                padding-left: 5px; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-location{ 
                 display: flex; 
                 justify-content: center;
                align-items: center;
                color: ' . $styledata[132] . ';
                font-size: ' . $styledata[128] . 'px;   
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 140) . '; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-location-text{
                ' . OxiAddonsFontSettings($styledata, 134) . ';   
                padding-left: 5px;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{
                width: 100%;
                float: left;  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 178) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title .oxi-link{
                 width: 100%;
                float: left;  
                color: ' . $styledata[170] . ';
                font-size: ' . $styledata[166] . 'px;   
                ' . OxiAddonsFontSettings($styledata, 172) . ';    
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title .oxi-link:hover{ 
                color: ' . $styledata[194] . '; 
                   text-decoration: none;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-details{
                width: 100%;
                float: left;
                color: ' . $styledata[200] . ';
                font-size: ' . $styledata[196] . 'px;   
                ' . OxiAddonsFontSettings($styledata, 202) . ';   
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 208) . '; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-image{
                width: 100%;
                float: left;
                 flex: 2;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-image{
                width: ' . $styledata[224] . 'px;
                height: ' . $styledata[228] . 'px;
            }
           
            
            @media only screen and (min-width : 669px) and (max-width : 993px){  
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-event-main{ 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';  
                }
                  .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-parent-wrapper{ 
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';  
                    }
               
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-day-month::after{ 
                    width: ' . $styledata[157] . 'px;
                    height: ' . $styledata[161] . 'px;
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-day{  
                    font-size: ' . $styledata[73] . 'px;   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 85) . '; 
                }  
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-month{  
                    font-size: ' . $styledata[45] . 'px;   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 57) . '; 
                }   
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-time{  
                    font-size: ' . $styledata[101] . 'px;   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 113) . '; 
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-time-location{
                   width: 100%; 
                    float: left; 
                    display: flex; 
                    flex-direction: column; 
                    align-items: flex-start;
                }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-location{  
                    font-size: ' . $styledata[129] . 'px;   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 141) . '; 
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{
                     padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 179) . ';
                }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title .oxi-link{ 
                    font-size: ' . $styledata[167] . 'px;     
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-details{ 
                    font-size: ' . $styledata[197] . 'px;      
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 209) . '; 
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-image{
                    width: ' . $styledata[225] . 'px;
                    height: ' . $styledata[229] . 'px;
                }  
            } 
            @media only screen and (max-width : 668px){
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-events{
                    display: block; 
                }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-day-month{
                    width: 100%;
                }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-main{
                    padding-left: 0;
                }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-event-main{ 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 10) . ';  
                }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-parent-wrapper{ 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 26) . ';  
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-day-month::after{ 
                    width: ' . $styledata[158] . 'px;
                    height: ' . $styledata[162] . 'px;
                    display: none;
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-day{  
                    font-size: ' . $styledata[74] . 'px;   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 86) . '; 
                }  
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-month{  
                    font-size: ' . $styledata[46] . 'px;   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 58) . '; 
                }   
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-time{  
                    font-size: ' . $styledata[102] . 'px;   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 114) . '; 
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-location{  
                    font-size: ' . $styledata[130] . 'px;   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 142) . '; 
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{
                    text-align: center; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 180) . ';
                }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-time-location{
                      justify-content: center;
                }
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title .oxi-link{ 
                    font-size: ' . $styledata[168] . 'px;    
                    text-align: center;
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-details{ 
                    font-size: ' . $styledata[198] . 'px;      
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 210) . '; 
                     text-align: center;
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-image{
                    width: 100%; 
                    float: left; 
                    display: flex; 
                    justify-content: center;
                }  
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-image{
                    max-width: 100%;
                    width: ' . $styledata[226] . 'px;
                    height: ' . $styledata[230] . 'px;
                }  
            }
            
              @media only screen and (max-width : 390px){  
                
                .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-time-location{
                   width: 100%; 
                    float: left; 
                    display: flex; 
                    flex-direction: column; 
                    align-items: center;
                }
              
            } 
            ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
