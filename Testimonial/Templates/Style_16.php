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

class Style_16 extends Templates {

    public function default_render($style, $child, $admin) {
        $styledata = $this->style;
        foreach ($styledata['sa_image_accordion_data_style_16'] as $key => $value) {
            $image = $info = $rating = $name = $company = '';
            if ($this->media_render('sa_testi_profile_picture', $value) != '') {
                $image = '<div class="oxi-testimonials-style-sixteen-image-parent">
                                <div class="oxi-testimonials-style-sixteen-image oxi-testimonials-style-sixteen-image-'.$key.'">
                                   <img src="' . $this->media_render('sa_testi_profile_picture', $value) . '"> 
                                </div>
                            </div>';
            }
            if (array_key_exists('sa_testi_profile_description', $value) && $value['sa_testi_profile_description'] != '') {
                $info = '<div class="oxi-testimonials-style-sixteen-info oxi-testimonials-style-sixteen-info-'.$key.'">
                           ' . $this->text_render($value['sa_testi_profile_description']) . '
                        </div>';
            }
            if (array_key_exists('sa_testi_profile_name', $value) && $value['sa_testi_profile_name'] != '') {
                if (array_key_exists('sa_testi_profile_name_url-url', $value) && $value['sa_testi_profile_name_url-url'] != '') {
                    $name = '<a ' . $this->url_render('sa_testi_profile_name_url', $value) . ' class="oxi-testimonials-style-sixteen-name oxi-testimonials-style-sixteen-name-'.$key.'">
                                ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                            </a>';
                } else {
                    $name = '<div  class="oxi-testimonials-style-sixteen-name oxi-testimonials-style-sixteen-name-'.$key.'">
                                ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                            </div>';
                }
            }
            if (array_key_exists('sa_testi_profile_company', $value) && $value['sa_testi_profile_company'] != '') {
                $company = '<div class="oxi-testimonials-style-sixteen-working oxi-testimonials-style-sixteen-working-'.$key.'">
                                    ' . $this->text_render($value['sa_testi_profile_company']) . '
                                 </div>';
            }
            
           

            echo ' <div class="oxi-testimonials-sixteen-padding ' . $this->column_render('sa-testimonial-body-col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list' : '') . ' " >
                    <div class="oxi-testimonials-item-sixteen">
                        <div class="oxi-testimonials-style-sixteen" ' . $this->animation_render('sa-testimonial-body-animation', $style) . '> 
                               '.$image.'
                                <div class="oxi-testimonials-style-' . $key . '-name-body-parent">
                                    '.$info.'
                                    <div class="oxi-testimonials-style-' . $key . '-name-body">    
                                        '.$name.'
                                        '.$company.'
                                    </div>
                                </div>  
                                <div class="oxi-before">
                                </div>
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
                </div> 
            ';
        }
        if ($data[3] != '') {
            $name = '
                 <a  class="oxi-testimonials-style-' . $oxiid . '-name" href="' . $data[9] . '" target="' . $styledata[29] . '"> 
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
        echo ' <div class="oxi-testimonials-' . $oxiid . '-padding ' . OxiAddonsItemRows($styledata, 3) . '" ' . OxiAddonsAnimation($styledata, 31) . ' >
                    <div class="oxi-testimonials-item-' . $oxiid . '">
                        <div class="oxi-testimonials-style-' . $oxiid . ' ' . $styledata[149] . '">                                  
                            '.$image.'
                            <div class="oxi-testimonials-style-' . $oxiid . '-name-body-parent">
                                '.$info.'
                                <div class="oxi-testimonials-style-' . $oxiid . '-name-body">    
                                    '.$name.'
                                    '.$company.'
                                </div>
                            </div>  
                            <div class="oxi-before">
                            </div>
                        </div>
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
                position: relative;
                float: left; 
                display: flex;
                align-items: ' . $styledata[168] . ';
                background-color:  ' . $styledata[11] . ';
                border-left: ' . $styledata[150] . 'px solid ' . $styledata[152] . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 162) . ';
                }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . ':hover{                
                ' . OxiAddonsBoxShadowSanitize($styledata, 170) . ';
                }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . ':hover{
                border-left: ' . $styledata[150] . 'px solid  ' . $styledata[156] . ';
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . ' .oxi-before{
                position: absolute;
                right: 0;
                bottom: 0;
                width: 0;
                height: 0;
                border-bottom: ' . $styledata[154] . 'px solid ' . $styledata[152] . ';
                border-left: ' . $styledata[154] . 'px solid transparent;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . ':hover .oxi-before{
                border-bottom: ' . $styledata[154] . 'px solid ' . $styledata[156] . ';
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image-parent{
                max-width: ' . ($styledata[36] + $styledata[158] * 2) . 'px; /*ekhane image size + padding left right asbe */
                width: 100%;
                float: left;  
                padding: ' . $styledata[146] . 'px ' . $styledata[158] . 'px;
                text-align: left;
            }
             .oxi-addons-container .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-image-parent{
                max-width: ' . ($styledata[36] + $styledata[158] * 2) . 'px; /*ekhane image size + padding left right asbe */
                width: 100%;
                margin-left: auto;
                order: 2;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image{
                max-width: ' . $styledata[36] . 'px;                
                position: relative;
                display: inline-block;
                width: 100%;               
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 44) . ';
            }           
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image:after{
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
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name-body-parent{
                width: calc(100% - ' . ($styledata[36] + $styledata[158] * 2) . 'px); /* ekhane 90px hocce image parrent width*/ 
                float: left;                 
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info{                
                width: 100%;
                float: left;  
                font-size: ' . $styledata[88] . 'px;
                ' . OxiAddonsFontSettings($styledata, 94) . ';
                color: ' . $styledata[92] . ';
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 100) . ';
                position: relative;                
                text-align: left;
            }           
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-info{
                text-align: right;
            }          
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name-body{                
                float: left;    
                width: 100%;            
            }
             .oxi-addons-container .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-name-body{
                width: 100%;
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
            @media only screen and (min-width : 669px) and (max-width : 993px){
                 .oxi-addons-container .oxi-testimonials-' . $oxiid . '-padding{
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 14) . ';                 
                }
                .oxi-addons-container  .oxi-testimonials-item-' . $oxiid . '{
                    max-width: ' . $styledata[8] . 'px;
                }   
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image-parent{
                    max-width: ' . ($styledata[37] + $styledata[159] * 2) . 'px; /*ekhane image size + padding left right asbe */
                    padding: ' . $styledata[147] . 'px ' . $styledata[159] . 'px;
                 }
                .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-image-parent{
                    max-width: ' . ($styledata[37] + $styledata[159] * 2) . 'px; /*ekhane image size + padding left right asbe */
                  }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                    max-width: ' . $styledata[37] . 'px;   
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 45) . ';
                }           
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image:after{
                    padding-bottom:' . $styledata[41] . 'px;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{   
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 45) . ';
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name-body-parent{
                    width: calc(100% - ' . ($styledata[37] + $styledata[159] * 2) . 'px);
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{ 
                    font-size: ' . $styledata[89] . 'px;
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
                } 
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name{                   
                    font-size: ' . $styledata[61] . 'px;                    
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';                      
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working{                  
                    font-size: ' . $styledata[119] . 'px;                 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';             
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-container  .oxi-testimonials-' . $oxiid . '-padding{
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';                 
                }
                .oxi-addons-container  .oxi-testimonials-item-' . $oxiid . '{
                    max-width: ' . $styledata[9] . 'px;
                }   
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image-parent{
                    max-width: ' . ($styledata[38] + $styledata[160] * 2) . 'px; /*ekhane image size + padding left right asbe */
                    padding: ' . $styledata[148] . 'px ' . $styledata[160] . 'px;
                 }
                .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-image-parent{
                    max-width: ' . ($styledata[38] + $styledata[160] * 2) . 'px; /*ekhane image size + padding left right asbe */
                  }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                    max-width: ' . $styledata[38] . 'px;   
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 46) . ';
                }           
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image:after{
                    padding-bottom:' . $styledata[42] . 'px;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{   
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 46) . ';
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name-body-parent{
                    width: calc(100% - ' . ($styledata[38] + $styledata[160] * 2) . 'px);
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{ 
                    font-size: ' . $styledata[89] . 'px;
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
                } 
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name, a .oxi-testimonials-style-' . $oxiid . '-name{                   
                    font-size: ' . $styledata[62] . 'px;                    
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 74) . ';                      
                }
               .oxi-addons-container   .oxi-testimonials-style-' . $oxiid . '-working{                  
                    font-size: ' . $styledata[120] . 'px;                 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 132) . ';             
                }
            }
';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
