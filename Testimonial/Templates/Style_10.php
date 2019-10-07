<?php

namespace SHORTCODE_ADDONS_UPLOAD\Testimonial\Templates;

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

class Style_10 extends Templates {

    public function default_render($style, $child, $admin) {
        $styledata = $this->style;
        foreach ($styledata['sa_image_accordion_data_style_10'] as $key => $value) {
            $image = $info = $rating = $name = '';
            if ($this->media_render('sa_testi_profile_picture', $value) != '') {
                $image = '<div class="oxi-testimonials-style-ten-image oxi-testimonials-style-ten-image-'.$key.'">                               
                                <img src="' . $this->media_render('sa_testi_profile_picture', $value) . '">  
                            </div>';
            }
            if (array_key_exists('sa_testi_profile_description', $value) && $value['sa_testi_profile_description'] != '') {
                $info = '<div class="oxi-testimonials-style-ten-info oxi-testimonials-style-ten-info-'.$key.'">
                                ' . $this->text_render($value['sa_testi_profile_description']) . '
                            </div>';
            }
            if (array_key_exists('sa_testi_profile_name', $value) && $value['sa_testi_profile_name'] != '') {
                if (array_key_exists('sa_testi_profile_url-url', $value) && $value['sa_testi_profile_url-url'] != '') {
                    $name = '<a ' . $this->url_render('sa_testi_profile_url', $value) . ' class="oxi-testimonials-style-ten-name oxi-testimonials-style-ten-name-'.$key.'">
                                ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                            </a>';
                } else {
                    $name = '<div  class="oxi-testimonials-style-ten-name oxi-testimonials-style-ten-name-'.$key.'">
                                ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                            </div>';
                }
            }
            if (array_key_exists('sa_testi_profile_destination', $value) && $value['sa_testi_profile_destination'] != '') {
                $company = '
                 <div class="oxi-testimonials-style-ten-working oxi-testimonials-style-ten-working-'.$key.'">
                      ' . $this->text_render($value['sa_testi_profile_destination']) . '
                </div>';
            }
            
            if($style['sa-testimonial-profile-body_alignment'] == 'left'){
                 $class = "sa-testimonial-profile-body-ten-left";
            }elseif($style['sa-testimonial-profile-body_alignment'] == 'right'){
                $class = "sa-testimonial-profile-body-ten-right";
            }else{
                 $class = "sa-testimonial-profile-body-ten-center";
            }

            echo ' <div class="oxi-testimonials-ten-padding ' . $this->column_render('sa-testimonial-body-col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list' : '') . '" >
                    <div class="oxi-testimonials-item-ten">
                        <div class="oxi-testimonials-style-ten '.$class.'" ' . $this->animation_render('sa-testimonial-body-animation', $style) . '>
                            '. $image .'
                            <div class="oxi-testimonials-style-ten-name-body">  
                                '. $name .'
                                '. $company .' 
                            </div>
                               '. $info .'
                        </div>
                    </div>';
            
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
                <a class="oxi-testimonials-style-' . $oxiid . '-name" href="' . $data[7] . '" target="' . $styledata[47] . '"> 
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
                                <div class="oxi-testimonials-style-' . $oxiid . '-name-body">  
                                '. $name .'
                                '. $company .' 
                                </div>
                               '. $info .'
                             </div>
                        </div>';
       
        echo '</div>';
    }
    echo '</div></div>';
    $css .= ' .oxi-addons-container .oxi-testimonials-' . $oxiid . '-padding{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';               
            }
            .oxi-addons-container .oxi-testimonials-item-' . $oxiid . '{
                position: relative;
                max-width: ' . $styledata[7] . 'px;
                width: 100%;
                margin: 0 auto;
            }
            .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';     
                width: 100%;
                float: left;
                position: relative;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 194) . '; 
                border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 238) . '; 
                border-style:' . $styledata[254] . '; 
                border-color:' . $styledata[255] . '; 
                margin-top: ' . $styledata[60] / 2 . 'px; 
                padding-top: ' . $styledata[60] / 2 . 'px; 
                background-color:   ' . $styledata[13] . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 54) . ';
                }
                .oxi-testimonials-style-' . $oxiid . ':hover{              
                ' . OxiAddonsBoxShadowSanitize($styledata, 258) . ';
                }                        
            .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image{
                width: ' . $styledata[60] . 'px;
                height: ' . $styledata[64] . 'px;
                top: -' . $styledata[60] / 2 . 'px;
                position: absolute;
                left: 10px;
                border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 68) . '; 
                border-style:' . $styledata[84] . '; 
                border-color:' . $styledata[85] . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 88) . ';     
            }
            .oxi-addons-container .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-image{
                left: auto;
                right: 10px;
            }
            .oxi-addons-container .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-image{
                left: 50%;
                -webkit-transform: translateX(-50%);
                -moz-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                -o-transform: translateX(-50%);    
                transform: translateX(-50%);
            }
            .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image:after{
                padding-bottom:100%;
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
                border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 88) . ';     
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
                .oxi-addons-container .oxi-testimonials-' . $oxiid . '-padding{
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';               
               }
              .oxi-addons-container  .oxi-testimonials-item-' . $oxiid . '{                
                   max-width: ' . $styledata[8] . 'px;
               }
              .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '{
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';  
                   border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 195) . '; 
                   border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 239) . ';                
                   margin-top: ' . $styledata[61] / 2 . 'px; 
                   padding-top: ' . $styledata[61] / 2 . 'px; 
                           }
              .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                   width: ' . $styledata[61] . 'px;
                   height: ' . $styledata[65] . 'px;
                   top: -' . $styledata[61] / 2 . 'px;               
                   border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 69) . '; 
                   border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 89) . ';     
               }
              .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{              
                   border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 89) . ';     
               }
              .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name{              
                   font-size: ' . $styledata[121] . 'px;
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 133) . ';                
               }
              .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-working{               
                   font-size: ' . $styledata[211] . 'px;                
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 223) . ';                
               }          
              .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{
                   padding:' . OxiAddonsPaddingMarginSanitize($styledata, 161) . ';               
                   font-size: ' . $styledata[148] . 'px;               
               }
            }
            @media only screen and (max-width : 668px){
              .oxi-addons-container   .oxi-testimonials-' . $oxiid . '-padding{
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';               
               }
              .oxi-addons-container  .oxi-testimonials-item-' . $oxiid . '{                
                   max-width: ' . $styledata[9] . 'px;
               }
              .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '{
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';  
                   border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 193) . '; 
                   border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 240) . ';                
                   margin-top: ' . $styledata[62] / 2 . 'px; 
                   padding-top: ' . $styledata[62] / 2 . 'px; 
                           }
              .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                   width: ' . $styledata[62] . 'px;
                   height: ' . $styledata[66] . 'px;
                   top: -' . $styledata[62] / 2 . 'px;               
                   border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 70) . '; 
                   border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 90) . ';     
               }
              .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{              
                   border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 89) . ';     
               }
              .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name{              
                   font-size: ' . $styledata[122] . 'px;
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 134) . ';                
               }
              .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-working{               
                   font-size: ' . $styledata[212] . 'px;                
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 224) . ';                
               }          
              .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{
                   padding:' . OxiAddonsPaddingMarginSanitize($styledata, 162) . ';               
                   font-size: ' . $styledata[149] . 'px;               
               }
            }
';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
