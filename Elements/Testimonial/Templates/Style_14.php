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

class Style_14 extends Templates {

    public function default_render($style, $child, $admin) {
        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);
            $image = $info = $rating = $name = $company = '';
            if ($this->media_render('sa_testi_profile_picture', $value) != '') {
                $image = ' <div class="oxi-testimonials-style-forteen-image">                               
                               <img src="' . $this->media_render('sa_testi_profile_picture', $value) . '"> 
                            </div>';
            }
            if (array_key_exists('sa_testi_profile_description', $value) && $value['sa_testi_profile_description'] != '') {
                $info = '<div class="oxi-testimonials-style-forteen-info">
                                ' . $this->text_render($value['sa_testi_profile_description']) . '
                                <div class="oxi-before"> </div>
                                <div class="oxi-after"> </div>
                           
                        </div>';
            }

            if (array_key_exists('sa_testi_profile_name', $value) && $value['sa_testi_profile_name'] != '') {
                if (array_key_exists('sa_testi_profile_company_url-url', $value) && $value['sa_testi_profile_company_url-url'] != '') {
                    $name = '<a ' . $this->url_render('sa_testi_profile_company_url', $value) . ' class="oxi-testimonials-style-forteen-name">
                                ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                            </a>';
                } else {
                    $name = '<div  class="oxi-testimonials-style-forteen-name">
                                ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                            </div>';
                }
            }
            if (array_key_exists('sa_testi_profile_company', $value) && $value['sa_testi_profile_company'] != '') {
                $company = '<div class="oxi-testimonials-style-forteen-working">
                                    ' . $this->text_render($value['sa_testi_profile_company']) . '
                                 </div>';
            }

            if ($style['sa-testimonial-profile-body_alignment'] == 'left') {
                $class = "sa-testimonial-profile-body-forteen-left";
            } elseif ($style['sa-testimonial-profile-body_alignment'] == 'right') {
                $class = "sa-testimonial-profile-body-forteen-right";
            } else {
                $class = "sa-testimonial-profile-body-forteen-center";
            }

            echo ' <div class="oxi-testimonials-forteen-padding ' . $this->column_render('sa-testimonial-body-col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list' : '') . ' " >
                    <div class="oxi-testimonials-item-forteen">
                        <div class="oxi-testimonials-style-forteen ' . $class . '" ' . $this->animation_render('sa-testimonial-body-animation', $style) . '> 
                                <div class="oxi-testimonials-style-forteen-image-area">
                                    <div class="oxi-testimonials-style-forteen-left">
                                    ' . $image . '
                                    </div>
                                    <div class="oxi-testimonials-style-forteen-right">
                                    ' . $name . ' 
                                    ' . $company . ' 
                                    </div> 
                                </div>
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
            $image = $info = $name = $company = '';
            if ($data[1] != '') {
                $image = '
                <div class="oxi-testimonials-style-' . $oxiid . '-image-parent">
                    <div class="oxi-testimonials-style-' . $oxiid . '-image">
                        <img src="' . OxiAddonsUrlConvert($data[1]) . '">
                    </div>
                </div> 
            ';
            }
            if ($data[5] != '') {
                $info = '
                 <div class="oxi-testimonials-style-' . $oxiid . '-info">
                    ' . OxiAddonsTextConvert($data[5]) . '
                    <div class="oxi-before"> </div>
                    <div class="oxi-after"> </div>
                </div>
            ';
            }
            if ($data[3] != '') {
                $name = '
               <a class="oxi-testimonials-style-' . $oxiid . '-name" href="' . $data[9] . '" target="' . $styledata[29] . '"> 
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
            echo ' <div class="oxi-testimonials-' . $oxiid . '-padding ' . OxiAddonsItemRows($styledata, 3) . ' " ' . OxiAddonsAnimation($styledata, 31) . ' >
                    <div class="oxi-testimonials-item-' . $oxiid . '">
                            <div class="oxi-testimonials-style-' . $oxiid . ' ' . $styledata[11] . '">                                
                                <div class="oxi-testimonials-style-' . $oxiid . '-name-body-parent">
                                    ' . $image . '
                                    <div class="oxi-testimonials-style-' . $oxiid . '-name-body">    
                                        ' . $name . '
                                        ' . $company . ' 
                                    </div>
                                </div>                               
                            </div>
                            ' . $info . '
                    </div>';
           
            echo '</div>';
        }
        echo '</div></div>';
        $css .= '  .oxi-addons-container .oxi-testimonials-' . $oxiid . '-padding{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ';  
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
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name-body-parent{
                width: 100%;
                float: left; 
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image-parent{
                max-width: ' . $styledata[36] . 'px;
                width: 100%;
                float: left;  
                text-align: left;
                padding-bottom:' . $styledata[146] . 'px;
            }   
             .oxi-addons-container .oxi-testimonials-center .oxi-testimonials-style-' . $oxiid . '-image-parent{
                width: 100%;
                max-width: 50%;
                text-align: right;
            }
             .oxi-addons-container .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-image-parent{
                max-width: ' . $styledata[36] . 'px;
                width: 100%;
                float: right;  
                text-align: left;
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                max-width: ' . $styledata[36] . 'px;
                position: relative;
                display: inline-block;
                width: 100%;                
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 44) . '; 
            }           
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image:after{
                padding-bottom:' . $styledata[40] . 'px;
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
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 44) . '; 
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name-body{                
                float: left;    
                width: calc(100% - ' . $styledata[36] . 'px);          
            }
             .oxi-addons-container .oxi-testimonials-center .oxi-testimonials-style-' . $oxiid . '-name-body{
                width: 100%;
                max-width: 50%;
                text-align: left;
            }
             .oxi-addons-container .oxi-testimonials-right .oxi-testimonials-style-' . $oxiid . '-name-body{
                width: calc(100% - ' . $styledata[36] . 'px);
                float: left;  
                text-align: right;
            }            
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name{
                width: 100%;
                float: left; 
                color: ' . $styledata[64] . ';
                font-size: ' . $styledata[60] . 'px;
                ' . OxiAddonsFontSettings($styledata, 66) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 72) . ';             
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name:hover{
                color: ' . $styledata[116] . ';
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-working{
                width: 100%;
                float: left; 
                color: ' . $styledata[122] . ';
                font-size: ' . $styledata[118] . 'px;
                ' . OxiAddonsFontSettings($styledata, 124) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . ';                
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info{
                width: 100%;
                float: left;  
                font-size: ' . $styledata[88] . 'px;
                ' . OxiAddonsFontSettings($styledata, 94) . ';
                color: ' . $styledata[92] . ';
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 100) . ';
                background-color:  ' . $styledata[11] . ';
                position: relative;                
                text-align: left;
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info .oxi-before{
                position: absolute;
                left: 0;
                bottom: -' . $styledata[150] . 'px;
                width: 0;
                height: 0;
                border-top: ' . $styledata[150] . 'px solid ' . $styledata[152] . ';
                border-right: ' . $styledata[150] . 'px solid transparent;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info .oxi-after{
                position: absolute;
                right: 0;
                bottom: -' . $styledata[150] . 'px;
                width: 0;
                height: 0;
                border-top: ' . $styledata[150] . 'px solid ' . $styledata[152] . ';
                border-left: ' . $styledata[150] . 'px solid transparent;
            }
             .oxi-addons-container .oxi-testimonials-right .oxi-testimonials-style-' . $oxiid . '-info{
                text-align: right;
            }
             .oxi-addons-container .oxi-testimonials-center .oxi-testimonials-style-' . $oxiid . '-info{
                text-align: center;
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-container  .oxi-testimonials-' . $oxiid . '-padding{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 14) . ';  
                }
                 .oxi-addons-container .oxi-testimonials-item-' . $oxiid . '{                    
                    max-width: ' . $styledata[8] . 'px;                  
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image-parent{
                    max-width: ' . $styledata[37] . 'px;                    
                    padding-bottom:' . $styledata[147] . 'px;
                }  
                
                 .oxi-addons-container .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-image-parent{
                    max-width: ' . $styledata[37] . 'px;                    
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image{
                    max-width: ' . $styledata[37] . 'px;                      
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 45) . '; 
                }           
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image:after{
                    padding-bottom:' . $styledata[41] . 'px;
                                   }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{ 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 45) . '; 
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name-body{  
                    width: calc(100% - ' . $styledata[37] . 'px);          
                }
                .oxi-addons-container  .oxi-testimonials-right .oxi-testimonials-style-' . $oxiid . '-name-body{
                    width: calc(100% - ' . $styledata[37] . 'px);
                }            
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name{               
                    font-size: ' . $styledata[61] . 'px;                  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';             
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-working{                 
                    font-size: ' . $styledata[119] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';                
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info{                
                    font-size: ' . $styledata[89] . 'px;                   
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-container  .oxi-testimonials-' . $oxiid . '-padding{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';  
                }
                .oxi-addons-container  .oxi-testimonials-item-' . $oxiid . '{                    
                    max-width: ' . $styledata[9] . 'px;                  
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image-parent{
                    max-width: ' . $styledata[38] . 'px;                    
                    padding-bottom:' . $styledata[148] . 'px;
                }  
                
                 .oxi-addons-container .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-image-parent{
                    max-width: ' . $styledata[38] . 'px;                    
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image{
                    max-width: ' . $styledata[38] . 'px;                      
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 46) . '; 
                }           
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image:after{
                    padding-bottom:' . $styledata[42] . 'px;
                                   }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image img{ 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 46) . '; 
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name-body{  
                    width: calc(100% - ' . $styledata[38] . 'px);          
                }
                 .oxi-addons-container .oxi-testimonials-right .oxi-testimonials-style-' . $oxiid . '-name-body{
                    width: calc(100% - ' . $styledata[38] . 'px);
                }            
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name{               
                    font-size: ' . $styledata[62] . 'px;                  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 74) . ';             
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working{                 
                    font-size: ' . $styledata[120] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 132) . ';                
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info{                
                    font-size: ' . $styledata[90] . 'px;                   
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
                }
            }
';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
