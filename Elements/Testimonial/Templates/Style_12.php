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

class Style_12 extends Templates {

    public function default_render($style, $child, $admin) {
        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);
            $image = $info = $rating = $name = '';
            if ($this->media_render('sa_testi_profile_picture', $value) != '') {
                $image = '<div class="oxi-testimonials-style-twelve-image-parent">
                            <div class="oxi-testimonials-style-twelve-image">
                                <img src="' . $this->media_render('sa_testi_profile_picture', $value) . '"> 
                            </div>
                        </div>';
            }
            if (array_key_exists('sa_testi_profile_description', $value) && $value['sa_testi_profile_description'] != '') {
                $info = '<div class="oxi-testimonials-style-twelve-info">
                                ' . $this->text_render($value['sa_testi_profile_description']) . '
                            </div>';
            }
            
            if (array_key_exists('sa_testi_profile_name', $value) && $value['sa_testi_profile_name'] != '') {
                if (array_key_exists('sa_testi_profile_url-url', $value) && $value['sa_testi_profile_url-url'] != '') {
                    $name = '<a ' . $this->url_render('sa_testi_profile_url', $value) . ' class="oxi-testimonials-style-twelve-name">
                                ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                            </a>';
                } else {
                    $name = '<div  class="oxi-testimonials-style-twelve-name">
                                ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                            </div>';
                }
            }
            if (array_key_exists('sa_testi_profile_destination', $value) && $value['sa_testi_profile_destination'] != '') {
                $company = '
                 <div class="oxi-testimonials-style-twelve-working">
                    ' . $this->text_render($value['sa_testi_profile_destination']) . '  
                </div>';
            }
            


            if ($style['sa-testimonial-profile-body_alignment'] == 'left') {
                $class = "sa-testimonial-profile-body-twelve-left";
            } elseif ($style['sa-testimonial-profile-body_alignment'] == 'right') {
                $class = "sa-testimonial-profile-body-twelve-right";
            } else {
                $class = "sa-testimonial-profile-body-twelve-center";
            }

            echo ' <div class="oxi-testimonials-twelve-padding ' . $this->column_render('sa-testimonial-body-col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list' : '') . '" >
                    <div class="oxi-testimonials-item-twelve">
                        <div class="oxi-testimonials-style-twelve ' . $class . '" ' . $this->animation_render('sa-testimonial-body-animation', $style) . '>
                            ' . $image . '
                            ' . $info . '
                            <div class="oxi-testimonials-style-twelve-name-body">    
                                ' . $name . '  
                                ' . $company . '  
                            </div>
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
        $image = $info  = $name = $company = '';
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
               <a class="oxi-testimonials-style-' . $oxiid . '-name" href="' . $data[9] . '" target="' . $styledata[47] . '"> 
                        ' . OxiAddonsTextConvert($data[3]) . ' 
                </a>
            ';
        }
        if ($data[9] != '') {
            $company = '
                 <div class="oxi-testimonials-style-' . $oxiid . '-working">
                    ' . OxiAddonsTextConvert($data[9]) . '
                </div>
            ';
        } 
        echo ' <div class="oxi-testimonials-' . $oxiid . '-padding ' . OxiAddonsItemRows($styledata, 3) . '" ' . OxiAddonsAnimation($styledata, 49) . ' >
                    <div class="oxi-testimonials-item-' . $oxiid . '">
                            <div class="oxi-testimonials-style-' . $oxiid . ' ' . $styledata[11] . '">
                                '. $image .'
                                '. $info .' 
                                <div class="oxi-testimonials-style-' . $oxiid . '-name-body">        
                                    '. $name .' 
                                    '. $company .'  
                                </div>
                            </div> 
                        </div>';
        
        echo '</div>';
    }
    echo '</div></div>';
    $css .= '  .oxi-addons-container .oxi-testimonials-' . $oxiid . '-padding{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';  
            }
             .oxi-addons-container .oxi-testimonials-item-' . $oxiid . '{
                position: relative;
                max-width: ' . $styledata[7] . 'px;
                width: 100%;
                margin: 0 auto;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '{
                width: 100%;
                float: left;
                position: relative;                
                border-bottom-width:  ' . $styledata[242] . 'px;
                border-bottom-style: solid;
                border-bottom-color: ' . $styledata[244] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';   
                background-color:   ' . $styledata[13] . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 54) . ';
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . ':hover{
                cursor: pointer;
                ' . OxiAddonsBoxShadowSanitize($styledata, 246) . ';
                }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image{
                position: relative;
                display: block;
                margin: ' . $styledata[238] . 'px auto ' . $styledata[238] . 'px 0;
                max-width: ' . $styledata[60] . 'px;               
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 88) . '; 
                border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 68) . '; 
                border-style:' . $styledata[84] . '; 
                border-color:' . $styledata[85] . '; 
            }
             .oxi-addons-container .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-image{
                margin: ' . $styledata[238] . 'px 0 ' . $styledata[238] . 'px  auto;
            }
             .oxi-addons-container .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-image{
                margin: ' . $styledata[238] . 'px auto;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image:after{
                padding-bottom:' . $styledata[64] . 'px;
                content: "";
                display: block;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image img{              
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%; 
                display: block;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 88) . '; 
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name-body{
                width: 100%;
                float: left;                  
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name{
                width: 100%;
                float: left; 
                text-align: left;
                color: ' . $styledata[124] . ';
                font-size: ' . $styledata[120] . 'px;
                ' . OxiAddonsFontSettings($styledata, 126) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 132) . ';                     
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name:hover{
                color:  ' . $styledata[192] . ';
            }
             .oxi-addons-container .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-name{
                text-align: right;
            }  
             .oxi-addons-container .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-name{
                text-align: center;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working{
                width: 100%;
                float: left; 
                text-align: left;
                color: ' . $styledata[214] . ';
                font-size: ' . $styledata[210] . 'px;
                ' . OxiAddonsFontSettings($styledata, 216) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 222) . ';           
            }
             .oxi-addons-container .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-working{
                text-align: right;
            }
             .oxi-addons-container .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-working{
                text-align: center;
            }            
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info{
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 160) . ';
                width: 100%;
                float: left;  
                position: relative;
                font-size: ' . $styledata[148] . 'px;
                ' . OxiAddonsFontSettings($styledata, 154) . ';
                color: ' . $styledata[152] . ';
                text-align: left;
            }
             .oxi-addons-container .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-info{
                text-align: right;
            }
             .oxi-addons-container .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-info{
                text-align: center;
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-container  .oxi-testimonials-' . $oxiid . '-padding{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';  
                }
                .oxi-addons-container  .oxi-testimonials-item-' . $oxiid . '{                  
                    max-width: ' . $styledata[8] . 'px;                   
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '{     
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                    margin: ' . $styledata[239] . 'px auto ' . $styledata[239] . 'px 0;
                    max-width: ' . $styledata[61] . 'px;               
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 89) . '; 
                    border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 69) . ';                    
                }
                .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-image{
                    margin: ' . $styledata[239] . 'px 0 ' . $styledata[239] . 'px  auto;
                }
                .oxi-addons-container  .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-image{
                    margin: ' . $styledata[239] . 'px auto;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image:after{
                    padding-bottom:' . $styledata[65] . 'px;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{ 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 89) . '; 
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name, a .oxi-testimonials-style-' . $oxiid . '-name{
                    font-size: ' . $styledata[121] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 133) . ';                     
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-working{                  
                    font-size: ' . $styledata[211] . 'px;                    
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 223) . ';           
                }         
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 161) . ';                   
                    font-size: ' . $styledata[149] . 'px;
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-container  .oxi-testimonials-' . $oxiid . '-padding{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';  
                }
                .oxi-addons-container  .oxi-testimonials-item-' . $oxiid . '{                  
                    max-width: ' . $styledata[9] . 'px;                   
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '{     
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                    margin: ' . $styledata[240] . 'px auto ' . $styledata[240] . 'px 0;
                    max-width: ' . $styledata[62] . 'px;               
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 90) . '; 
                    border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 70) . ';                    
                }
                .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-image{
                    margin: ' . $styledata[240] . 'px 0 ' . $styledata[240] . 'px  auto;
                }
                .oxi-addons-container  .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-image{
                    margin: ' . $styledata[240] . 'px auto;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image:after{
                    padding-bottom:' . $styledata[66] . 'px;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{ 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 90) . '; 
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name, a .oxi-testimonials-style-' . $oxiid . '-name{
                    font-size: ' . $styledata[122] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 134) . ';                     
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-working{                  
                    font-size: ' . $styledata[212] . 'px;                    
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 224) . ';           
                }         
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 162) . ';                   
                    font-size: ' . $styledata[150] . 'px;
                }
            }
';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
