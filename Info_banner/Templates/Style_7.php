<?php

namespace SHORTCODE_ADDONS_UPLOAD\Info_banner\Templates;

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

class Style_7 extends Templates {

    public function default_render($style, $child, $admin) {
        $datas = (array_key_exists('sa_info_banner_repeater', $style) && is_array($style['sa_info_banner_repeater']) ? $style['sa_info_banner_repeater'] : []);

        $iconboxfirst = $iconboxlast = $icon = $heading = $content = '';
        $i = 0;
        foreach ($datas as $key => $value) {
            $data = $datas[$key];
            if (array_key_exists('sa_info_banner_icon', $data) && $data['sa_info_banner_icon'] != '') {
                $icon = '<div class="oxi-addons-content-boxes-icon">
                                ' . $this->font_awesome_render($data['sa_info_banner_icon']) . '
                                </div>';
            }
            if (array_key_exists('sa_info_banner_title', $data) && $data['sa_info_banner_title'] != '') {
                $heading = '<' . $style['sa_info_banner_title_tag'] . ' class="oxi_addons__heading title-' . $key . '" >' . $this->text_render($data['sa_info_banner_title']) . '</' . $style['sa_info_banner_title_tag'] . '>';
            }
            if (array_key_exists('sa_info_banner_short_details', $data) && $data['sa_info_banner_short_details'] != '') {
                $content = '<p class="oxi_addons__details details-' . $key . '">' . $this->text_render($data['sa_info_banner_short_details']) . '</p>';
            }
            if ($i % 2 == 0) :
                $iconboxfirst .= '<div class="oxi-info-banner-style-7-static">
                                    <div class="oxi-addons-content-boxes_style_7">
                                         <div class="oxi-addons-content-boxes-main">                        
                                            <div class="oxi-addons-box">
                                                ' . (($style['sa_info_banner_image_position'] == 'center' || $style['sa_info_banner_icon_position'] == 'icon_right') ? '<div class="oxi-addons-header-content">' . $heading . '' . $content . ' </div>' . $icon . '' : $icon . '<div class="oxi-addons-header-content">' . $heading . '' . $content . '</div>') . '
                                            </div>
                                        </div>
                                    </div>
                                 </div>';
            else :
                $iconboxlast .= '<div class="oxi-info-banner-style-7-static">
                                    <div class="oxi-addons-content-boxes_style_7">
                                         <div class="oxi-addons-content-boxes-main">                        
                                            <div class="oxi-addons-box">
                                                ' . (($style['sa_info_banner_image_position'] == 'center' || $style['sa_info_banner_icon_position'] == 'icon_left') ? $icon . '<div class="oxi-addons-header-content">' . $heading . '' . $content . '</div>' : '<div class="oxi-addons-header-content">' . $heading . '' . $content . '</div>' . $icon) . '
                                            </div>
                                        </div>
                                    </div>
                                 </div>';
            endif;
            $i++;
        }
        $iconboxfirst = '<div class="oxi-bt-col-lg-4 oxi-bt-col-md-12 oxi-icon-first">' . $iconboxfirst . '</div>';
        $iconboxlast = '<div class="oxi-bt-col-lg-4 oxi-bt-col-md-12 oxi-icon-last">' . $iconboxlast . '</div>';
        $image = '';

        if ($this->media_render('sa_info_banner_front_image', $style) != '') {
            $image = '  <div ' . $this->animation_render('sa_info_banner_front_image_animation', $style) . ' class="oxi_addons__image_main"  >
                            <img ' . (array_key_exists('sa_info_banner_image_switcher', $style) && $style['sa_info_banner_image_switcher'] != 'yes' ? 'style="width: 100%; max-width: 100%; height: auto"' : '') . ' src="' . $this->media_render('sa_info_banner_front_image', $style) . '" class="oxi-addons-img" alt="front image"/>
                        </div>';
        }
        $imagebody = '<div class="oxi-bt-col-lg-4 oxi-bt-col-md-12">
                            <div class="oxi-addons-image-body">
                                ' . $image . '
                            </div>
                      </div>';

        echo '<div class="oxi-addons-main-wrapper_style_7 ' . $style['sa_info_banner_image_position'] . ' ' . $style['sa_info_banner_icon_position'] . '">';
        if ($style['sa_info_banner_image_position'] == 'left') {
            echo $imagebody;
            echo $iconboxfirst;
            echo $iconboxlast;
        } elseif ($style['sa_info_banner_image_position'] == 'center') {
            echo $iconboxfirst;
            echo $imagebody;
            echo $iconboxlast;
        } else {
            echo $iconboxfirst;
            echo $iconboxlast;
            echo $imagebody;
        }
        echo '</div>';
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';

        $iconboxfirst = $iconboxlast = '';
        $datacount = count($listdata);
        sort($listdata);
        $iconboxfirst = '<div class="oxi-bt-col-lg-4 oxi-bt-col-md-12 oxi-icon-first"> ';
        for ($i = 0; $i <= ($datacount - 1); $i += 2) {
            $data = explode('||#||', $listdata[$i]['files']);
            $icon = $heading = $content = '';
            if ($data[5] != '') {
                $icon = '
                        <div class="oxi-addons-content-boxes-icon">
                        ' . oxi_addons_font_awesome($data[5]) . '
                        </div>  
                    ';
            }
            if ($data[1] != '') {
                $heading = '
                        <div class="oxi-addons-content-boxes-heading">
                            ' . OxiAddonsTextConvert($data[1]) . '
                        </div>
                    ';
            }
            if ($data[3] != '') {
                $content = '
                        <div class="oxi-addons-content-boxes-content">
                        ' . OxiAddonsTextConvert($data[3]) . '
                        </div>  
                    ';
            }

            $iconboxfirst .= '<div class="oxi-info-banner-style-7-static">';
            $iconboxfirst .= '<div class="oxi-addons-content-boxes-' . $oxiid . ' " ' . OxiAddonsAnimation($styledata, 115) . '>
                        <div class="oxi-addons-content-boxes-main">                        
                           <div class="oxi-addons-box">';
            if ($styledata[3] == 'center' || $styledata[147] == 'right') {
                $iconboxfirst .= ' <div class="oxi-addons-header-content">
                                    ' . $heading . '
                                    ' . $content . '     
                                </div> 
                               ' . $icon . '';
            } else {
                $iconboxfirst .= '
                            ' . $icon . '
                            <div class="oxi-addons-header-content">
                                ' . $heading . '
                                ' . $content . '     
                            </div>';
            }
            $iconboxfirst .= '</div>
                        </div>
                 </div>';
            $iconboxfirst .= '</div>';
        }
        $iconboxfirst .= ' </div>';
        $iconboxlast = '<div class="oxi-bt-col-lg-4 oxi-bt-col-md-12 oxi-icon-last"> ';
        for ($i = 1; $i <= ($datacount - 1); $i += 2) {
            $data = explode('||#||', $listdata[$i]['files']);
            $icon = $heading = $content = '';
            if ($data[5] != '') {
                $icon = '
                    <div class="oxi-addons-content-boxes-icon">
                    ' . oxi_addons_font_awesome($data[5]) . '
                    </div>  
                ';
            }
            if ($data[1] != '') {
                $heading = '
                        <div class="oxi-addons-content-boxes-heading">
                            ' . OxiAddonsTextConvert($data[1]) . '
                        </div>
                    ';
            }
            if ($data[3] != '') {
                $content = '
                        <div class="oxi-addons-content-boxes-content">
                        ' . OxiAddonsTextConvert($data[3]) . '
                        </div>  
                    ';
            }

            $iconboxlast .= '<div class="' . OxiAddonsItemRows($styledata, 49) . ' oxi-info-banner-style-7-static">';
            $iconboxlast .= '<div class="oxi-addons-content-boxes-' . $oxiid . ' " ' . OxiAddonsAnimation($styledata, 115) . '>
                        <div class="oxi-addons-content-boxes-main">                        
                           <div class="oxi-addons-box">';
            if ($styledata[3] == 'center' || $styledata[147] == 'left') {
                $iconboxlast .= ' ' . $icon . '<div class="oxi-addons-header-content">
                                    ' . $heading . '
                                    ' . $content . '     
                                </div> 
                               ';
            } else {
                $iconboxlast .= '<div class="oxi-addons-header-content">
                                    ' . $heading . '
                                    ' . $content . '     
                                </div>' . $icon . '';
            }
            $iconboxlast .= '         </div>
                        </div>
                 </div>';
            $iconboxlast .= '</div>';
        }
        $iconboxlast .= ' </div>';
        $image = '';
        if ($styledata[25] != '') {
            $image = ' <img src="' . OxiAddonsUrlConvert($styledata[25]) . '" alt="front images" class="oxi-addons-img">';
        }
        $imagebody = '<div class="oxi-bt-col-lg-4 oxi-bt-col-md-12">
                            <div class="oxi-addons-image-body">
                                ' . $image . '
                            </div>
                      </div>';

        echo '<div class="oxi-addons-container">
              <div class="oxi-addons-row">
                <div class="oxi-addons-main-wrapper-' . $oxiid . ' ">';
        if ($styledata[3] == 'left') {
            echo $imagebody;
            echo $iconboxfirst;
            echo $iconboxlast;
        } elseif ($styledata[3] == 'center') {
            echo $iconboxfirst;
            echo $imagebody;
            echo $iconboxlast;
        } else {
            echo $iconboxfirst;
            echo $iconboxlast;
            echo $imagebody;
        }
        echo ''
        . '</div>'
        . '</div></div>';
        $css .= ' 
            .oxi-info-banner-style-7-static{
                overflow:hidden;
            }
            .oxi-addons-main-wrapper-' . $oxiid . '{
                width: 100%;
                float: left;
                ' . OxiAddonsBGImage($styledata, 5) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
                overflow: hidden;
                display: flex;
                align-items: center;
                background-size: cover;
            }
            .oxi-addons-box{
                display: flex;
                position: relative;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-body{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . '; 
                text-align: center;
            }
          
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-body .oxi-addons-img{
                width: auto;
                max-width: 100%;
                height: auto;
            }  
            .oxi-addons-content-boxes-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . ';
                display: inline-block;
                width:100%;
                float:left;
            }
            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-main{
                width: 100%;
                float:left; 
                background: ' . $styledata[53] . ';
                border:  ' . $styledata[55] . 'px ' . $styledata[56] . ';
                border-color: ' . $styledata[59] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 61) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 109) . '
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 77) . ';  
            } 
            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-right-side{
                width: 100%;
                float:left;  
            }  
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header-content{
                width: 100%;
                float:left; 
                flex: 4;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-heading{
                width: 100%;
                float:left;
                font-size: ' . $styledata[187] . 'px;
                color: ' . $styledata[191] . ';
                ' . OxiAddonsFontSettings($styledata, 193) . ';    
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 199) . ';   
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-content{
                width: 100%;
                float:left;
                font-size: ' . $styledata[215] . 'px;
                color: ' . $styledata[219] . ';
                ' . OxiAddonsFontSettings($styledata, 221) . ';    
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 227) . ';    
            }
     
            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon{ 
                width: 100%;
                float:left;  
                position:relative;
                display: flex;  
                justify-content:center;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 165) . ';  
                flex: 1;
            } 
            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon:before{
                position: absolute;
                content:"";
                left: 50%;
                transform:translateX(-50%)translateY(-100%);
                top: 25%;
                width: 2px;
                border-left: 2px solid; 
                height: 100%;
                display: block;
                z-index: 1;
                 border-color: ' . $styledata[251] . ';
            }
            .oxi-bt-col-lg-4 .oxi-info-banner-style-7-static:first-child .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon:before{
                display: none;
            }
            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon:after{
                position: absolute;
                content:"";
                left: 50%;
                transform:translateX(-50%)translateY(25%);
                top: 25%;
                width: 2px;
                border-left: 2px solid; 
                height: 100%;
                display: block;
                z-index: 1;
                 border-color: ' . $styledata[251] . ';
            }
            .oxi-bt-col-lg-4 .oxi-info-banner-style-7-static:last-child .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon:after{
                display: none;
            }
            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon .oxi-icons{
                display: flex; 
                align-items: center; 
                justify-content: center;
                font-size: ' . $styledata[119] . 'px; 
                line-height:1;
                color: ' . $styledata[127] . ';
                background: ' . $styledata[129] . ';
                border:  ' . $styledata[247] . 'px ' . $styledata[248] . ';
                border-color: ' . $styledata[251] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 181) . '
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 149) . ';   
                width: ' . $styledata[123] . 'px;
                height: ' . $styledata[243] . 'px;   
                z-index: 3;
                overflow: hidden;
            } 
            .oxi-addons-content-boxes-' . $oxiid . ':hover .oxi-addons-content-boxes-icon .oxi-icons{ 
                color: ' . $styledata[253] . ';
                background: ' . $styledata[255] . '; 
                border-color: ' . $styledata[257] . '; 
                ' . OxiAddonsBoxShadowSanitize($styledata, 259) . ' 
            }
            .oxi-addons-admin-absulote{
                top:0px;
            }
         
                    
            @media only screen and (min-width : 669px) and (max-width : 993px){ 
                .oxi-addons-main-wrapper-' . $oxiid . '{ 
                    display: block; 
                }
                .oxi-addons-main-wrapper-' . $oxiid . '{  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 10) . '; 
                } 
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-body{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 34) . ';  
                } 
                .oxi-addons-content-boxes-' . $oxiid . '{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 94) . '; 
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-main{  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 62) . '; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 78) . ';  
                }  
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-heading{ 
                    font-size: ' . $styledata[188] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 200) . ';   
                }
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-content{ 
                    font-size: ' . $styledata[216] . 'px;    
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 228) . ';    
                } 
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon{  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 166) . ';  
                }  
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon .oxi-icons{ 
                    font-size: ' . $styledata[120] . 'px;  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 132) . '; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 150) . ';   
                    width: ' . $styledata[124] . 'px;
                    height: ' . $styledata[244] . 'px;    
                }   
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-main-wrapper-' . $oxiid . '{ 
                    display: block; 
                }
                .oxi-addons-main-wrapper-' . $oxiid . '{  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . '; 
                } 
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-body{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . ';  
                } 
                .oxi-addons-content-boxes-' . $oxiid . '{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 95) . '; 
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-main{  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . '; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 79) . ';  
                }  
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-heading{ 
                    font-size: ' . $styledata[189] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 201) . ';   
                }
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-content{ 
                    font-size: ' . $styledata[216] . 'px;    
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 228) . ';    
                }
         
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon{  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 167) . ';  
                }  
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon .oxi-icons{ 
                    font-size: ' . $styledata[121] . 'px;  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 133) . '; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 151) . ';   
                    width: ' . $styledata[125] . 'px;
                    height: ' . $styledata[245] . 'px;    
                }   
            }
            ';

        if ($styledata[3] == 'center') {
            $css .= '.oxi-addons-main-wrapper-' . $oxiid . ' .oxi-icon-first .oxi-addons-content-boxes-heading,
                        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-icon-first .oxi-addons-content-boxes-content{
                           text-align:right;
                           
                        }
                        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-icon-last .oxi-addons-content-boxes-heading,
                        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-icon-last .oxi-addons-content-boxes-content{
                           text-align:left;
                           
                        }';
        }
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
