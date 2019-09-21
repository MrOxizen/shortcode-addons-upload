<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Testimonial\Templates;

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

class Style_5 extends Templates {

    public function default_render($style, $child, $admin) {
        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);
            $image = $info = $rating = $name = '';
            if ($this->media_render('sa_testi_profile_picture', $value) != '') {
                $image = '<div class="oxi-testimonials-style-five-image">                               
                                <img src="' . $this->media_render('sa_testi_profile_picture', $value) . '">  
                            </div>';
            }
            if (array_key_exists('sa_testi_profile_description', $value) && $value['sa_testi_profile_description'] != '') {
                $info = '<div class="oxi-testimonials-style-five-info">
                                ' . $this->text_render($value['sa_testi_profile_description']) . '
                            </div>';
            }
            if (array_key_exists('sa_testi_profile_name', $value) && $value['sa_testi_profile_name'] != '') {
                if (array_key_exists('sa_testi_profile_url-url', $value) && $value['sa_testi_profile_url-url'] != '') {
                    $name = '<a ' . $this->url_render('sa_testi_profile_url', $value) . ' class="oxi-testimonials-style-five-name">
                                ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                            </a>';
                } else {
                    $name = '<div  class="oxi-testimonials-style-five-name">
                                ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                            </div>';
                }
            }
            
            if($style['sa-testimonial-profile-body_alignment'] == 'left'){
                 $class = "sa-testimonial-profile-five-body-left";
            }elseif($style['sa-testimonial-profile-body_alignment'] == 'right'){
                $class = "sa-testimonial-profile-five-body-right";
            }else{
                 $class = "sa-testimonial-profile-five-body-center";
            }

            echo ' <div class="oxi-testimonials-five-padding ' . $this->column_render('sa-testimonial-body-col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list' : '') . '" >
                    <div class="oxi-testimonials-item-five">
                        <div class="oxi-testimonials-style-five  '.$class.'" ' . $this->animation_render('sa-testimonial-body-animation', $style) . '>
                            ' . $image . '
                            ' . $name . '
                            ' . $info . '
                        </div>
                    </div>';
            if ($admin == 'admin') :
                echo'<div class="oxi-addons-admin-absulote">
                            <div class="oxi-addons-admin-absulate-edit">
                                <button class="btn btn-primary shortcode-addons-template-item-edit" type="button" value="' . $v['id'] . '">Edit</button>
                            </div>
                            <div class="oxi-addons-admin-absulate-delete">
                                <button class="btn btn-danger shortcode-addons-template-item-delete" type="submit" value="' . $v['id'] . '">Delete</button>
                            </div>
                        </div>';
            endif;
            echo '</div>';
        }
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $stylename = $styledata['style_name'];
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';
        echo '<div class="oxi-addons-container"><div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            $image = $info = $name = '';
            if ($data[1] != '') {
                $image = '
                <div class="oxi-testimonials-style-' . $oxiid . '-image">
                    <img src="' . OxiAddonsUrlConvert($data[1]) . '">
                </div>
            ';
            }
            if ($data[5] != '') {
                $info = '
                <div class="oxi-testimonials-style-' . $oxiid . '-info">
                    ' . OxiAddonsTextConvert($data[5]) . '
                </div>      
            ';
            }
            if ($data[3] != '') {
                $name = '
                <a class="oxi-testimonials-style-' . $oxiid . '-name" href="' . $data[7] . '" target="' . $styledata[47] . '">
                        ' . OxiAddonsTextConvert($data[3]) . ' 
                </a>
            ';
            }
            echo ' <div class="oxi-testimonials-' . $oxiid . '-padding ' . OxiAddonsItemRows($styledata, 3) . ' ' . OxiAddonsAdminDefine($user) . '" ' . OxiAddonsAnimation($styledata, 49) . ' >
                    <div class="oxi-testimonials-item-' . $oxiid . '">
                            <div class="oxi-testimonials-style-' . $oxiid . '  ' . $styledata[11] . '">
                                ' . $image . '
                                ' . $name . '                                              
                                ' . $info . '                                              
                            </div>
                        </div>';
           
            echo '</div>';
        }
        echo '</div></div>';
        $css .= ' .oxi-addons-container  .oxi-testimonials-' . $oxiid . '-padding{
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';                    
            }
            .oxi-addons-container  .oxi-testimonials-item-' . $oxiid . '{
                position: relative;
                max-width: ' . $styledata[7] . 'px;
                width: 100%;
                margin: 0 auto;
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '{
                width: 100%;
                position: relative;
                float: left;
                text-align: left;           
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                width: ' . $styledata[60] . 'px; 
                position: relative;
                display:block;
                vertical-align: middle;
                margin:' . OxiAddonsPaddingMarginSanitize($styledata, 104) . ';     
            }
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-image{
                -webkit-transform: translateX(-50%);
                -moz-transform: translateX(-100%);
                -ms-transform: translateX(-100%);
                -o-transform: translateX(-100%);
                transform: translateX(-100%);
                left: 100%
            }
            .oxi-addons-container  .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-image{ 
                -webkit-transform: translateX(-50%);
                -moz-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                -o-transform: translateX(-50%);
                transform: translateX(-50%);
                left: 50%;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image:after{
                padding-bottom:' . $styledata[64] . 'px;
                content: "";
                display: block;
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{              
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%; 
                display: block;               
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 88) . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 68) . ';
                border-style:' . $styledata[84] . '; 
                border-color:' . $styledata[85] . '; 
            }
           .oxi-addons-container   .oxi-testimonials-style-' . $oxiid . '-name{
                width: 100%;
                float: left; 
                text-align: left;  
                color: ' . $styledata[124] . ';
                font-size: ' . $styledata[120] . 'px;                
                ' . OxiAddonsFontSettings($styledata, 126) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 132) . ';
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name:hover,
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name:active,
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name:focus{               
                color: ' . $styledata[192] . ';
            }
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-name{
                text-align: right;
            }
            .oxi-addons-container  .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-name{
                text-align: center;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info{
                width: 100%;
                float: left;      
                position: relative;
                text-align: left;  
                font-size: ' . $styledata[148] . 'px;
                color: ' . $styledata[152] . ';
                ' . OxiAddonsFontSettings($styledata, 154) . ';            
                line-height: 130%;
                margin:' . OxiAddonsPaddingMarginSanitize($styledata, 176) . ';   
                background: ' . $styledata[13] . ';
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 160) . ';             
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 194) . '; 
                ' . OxiAddonsBoxShadowSanitize($styledata, 54) . ';
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info:after{
                border-bottom: 10px solid  ' . $styledata[13] . ';
                border-left: 10px solid  transparent;
                border-right: 10px solid transparent;
                bottom: 100%;
                content: "";
                display: inline-block;
                height: 0;
                left: ' . $styledata[168] . 'px;
                position: absolute;
                width: 0;
                z-index: 1;
            }
            .oxi-addons-container  .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-info{
                text-align: center;
            }            
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-info{
                text-align: right;
            }
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-info:after{
                left: auto;
                right: ' . $styledata[172] . 'px;
            }            
             .oxi-addons-container .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-info:after{
                left: 50%;
               -webkit-transform: translateX(-50%);
               -moz-transform: translateX(-50%);
               -ms-transform: translateX(-50%);
               -o-transform: translateX(-50%);
                transform: translateX(-50%);
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-container  .oxi-testimonials-' . $oxiid . '-padding{
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';                    
                }
                 .oxi-addons-container .oxi-testimonials-item-' . $oxiid . '{
                    max-width: ' . $styledata[8] . 'px;
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image{
                    width: ' . $styledata[61] . 'px;                    
                    margin:' . OxiAddonsPaddingMarginSanitize($styledata, 105) . ';     
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image:after{
                    padding-bottom:' . $styledata[65] . 'px;                    
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{   
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 89) . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 69) . ';                  
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name{                 
                    font-size: ' . $styledata[121] . 'px;  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 133) . ';
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{                    
                    font-size: ' . $styledata[149] . 'px;
                    margin:' . OxiAddonsPaddingMarginSanitize($styledata, 176) . ';  
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 161) . ';             
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 195) . '; 
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info:after{                    
                    left: ' . $styledata[169] . 'px;
                }
                .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-info:after{                   
                    right: ' . $styledata[173] . 'px;
                } 
            }
            @media only screen and (max-width : 668px){
                 .oxi-addons-container .oxi-testimonials-' . $oxiid . '-padding{
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';                    
                }
                 .oxi-addons-container .oxi-testimonials-item-' . $oxiid . '{
                    max-width: ' . $styledata[9] . 'px;
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image{
                    width: ' . $styledata[62] . 'px;                    
                    margin:' . OxiAddonsPaddingMarginSanitize($styledata, 106) . ';     
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image:after{
                    padding-bottom:' . $styledata[66] . 'px;                    
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image img{   
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 90) . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 70) . ';                  
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name{                 
                    font-size: ' . $styledata[122] . 'px;  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 134) . ';
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info{                    
                    font-size: ' . $styledata[150] . 'px;
                    margin:' . OxiAddonsPaddingMarginSanitize($styledata, 177) . ';  
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 162) . ';             
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 196) . '; 
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info:after{                    
                    left: ' . $styledata[170] . 'px;
                }
                .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-info:after{                   
                    right: ' . $styledata[174] . 'px;
                } 
            }
';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
