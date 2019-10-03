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

class Style_4 extends Templates {

    public function default_render($style, $child, $admin) {
        $styledata = $this->style;
        foreach ($styledata['sa_testimonial_data_style_4'] as $key => $value) {
            $image = $info = $rating = $name = $company = '';
            if ($this->media_render('sa_testi_profile_picture', $value) != '') {
                $image = ' <div class="oxi-testimonials-style-testifournew-image oxi-testimonials-style-testifournew-image-'.$key.'">                               
                               <img src="' . $this->media_render('sa_testi_profile_picture', $value) . '"> 
                            </div>';
            }
            if (array_key_exists('sa_testi_profile_description', $value) && $value['sa_testi_profile_description'] != '') {
                $info = '<div class="oxi-testimonials-style-testifournew-info oxi-testimonials-style-testifournew-info-'.$key.'">
                           ' . $this->text_render($value['sa_testi_profile_description']) . '
                        </div>';
            }
            
            if (array_key_exists('sa_testi_profile_name', $value) && $value['sa_testi_profile_name'] != '') {
                $name = ' <div class="oxi-testimonials-style-testifournew-name oxi-testimonials-style-testifournew-name-'.$key.'" >
                                    ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                              </div>';
            }
            if (array_key_exists('sa_testi_profile_company', $value) && $value['sa_testi_profile_company'] || array_key_exists('sa_testi_profile_designation', $value) && $value['sa_testi_profile_designation'] != '') {
                $company = '<div class="oxi-testimonials-style-testifournew-working oxi-testimonials-style-testifournew-working-'.$key.'">
                                    <a ' . $this->url_render('sa_testi_profile_company_url', $value) . '>@ ' . $this->text_render($value['sa_testi_profile_company']) . '</a>
                                 </div>';
            }

            if ($style['sa-testimonial-profile-body_alignment'] == 'left') {
                $class = "sa-testimonial-profile-body-left";
            } elseif ($style['sa-testimonial-profile-body_alignment'] == 'right') {
                $class = "sa-testimonial-profile-body-right";
            } else {
                $class = "sa-testimonial-profile-body-center";
            }

            echo ' <div class="oxi-testimonials-testifournew-padding ' . $this->column_render('sa-testimonial-body-col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list' : '') . ' " >
                    <div class="oxi-testimonials-item-testifournew">
                        <div class="oxi-testimonials-style-testifournew ' . $class . '" ' . $this->animation_render('sa-testimonial-body-animation', $style) . '> 
                                 ' . $info . '
                                <div class="oxi-testimonials-style-testifournew-image-area">
                                    <div class="oxi-testimonials-style-testifournew-left">
                                    ' . $image . '
                                    </div>
                                    <div class="oxi-testimonials-style-testifournew-right">
                                    ' . $name . ' 
                                    ' . $company . ' 
                                    </div> 
                                </div> 
                            </div>
                    </div>';
            
            echo '</div>';
        }
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $user = $this->admin;
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
                 <div class="oxi-testimonials-style-' . $oxiid . '-name">
                        ' . OxiAddonsTextConvert($data[3]) . '
                    </div>
            ';
            }
            if ($data[11] != '') {
                $company = '
                   <div class="oxi-testimonials-style-' . $oxiid . '-working">
                        <a href="' . $data[7] . '" target="' . $styledata[45] . '">@' . OxiAddonsTextConvert($data[11]) . '</a>
                    </div>
            ';
            }
            echo ' <div class="oxi-testimonials-' . $oxiid . '-padding ' . OxiAddonsItemRows($styledata, 3) . '" ' . OxiAddonsAnimation($styledata, 63) . ' >
                    <div class="oxi-testimonials-item-' . $oxiid . ' ' . $styledata[222] . '">
                            <div class="oxi-testimonials-style-' . $oxiid . '">                                
                                ' . $info . '
                                <div class="oxi-testimonials-style-' . $oxiid . '-left">
                                ' . $image . '
                                </div>
                                <div class="oxi-testimonials-style-' . $oxiid . '-right">
                                ' . $name . ' 
                                ' . $company . ' 
                                </div>
                            </div>
                        </div>';

            echo '</div>';
        }
        echo '</div></div>';
        $css .= '  .oxi-addons-container .oxi-testimonials-' . $oxiid . '-padding{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 29) . ';          
            }
             .oxi-addons-container .oxi-testimonials-item-' . $oxiid . '{
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
                background: ' . $styledata[11] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ';
                border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 47) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 68) . ';
               }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-left{
                width: ' . $styledata[74] . 'px;
                float: left;
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-right{    
                width: calc(100% - ' . $styledata[74] . 'px);
                padding-left: ' . $styledata[224] . 'px;
                float: left;
            }
            .oxi-addons-container  .oxi-addonsdata-right  .oxi-testimonials-style-' . $oxiid . '-left, 
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-right{
                float: right;
                text-align: right;
            }
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-right{
                float: right;
                text-align: right;
                padding-left: 0px;
                padding-right: ' . $styledata[224] . 'px;
            }
            .oxi-addons-container  .oxi-addonsdata-center  .oxi-testimonials-style-' . $oxiid . '-left, 
            .oxi-addons-container  .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-right{
                float: left;
                text-align: center;
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                max-width: ' . $styledata[74] . 'px;              
                width: 100%;
                position: relative;
                float: left;               
            }

            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image:after{
                padding-bottom:' . $styledata[78] . 'px;
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
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
                border-style:' . $styledata[98] . '; 
                border-color:' . $styledata[99] . '; 
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{
                width: 100%;
                float: left;       
                text-align: left;
                font-size: ' . $styledata[134] . 'px;
                color: ' . $styledata[138] . ';
                ' . OxiAddonsFontSettings($styledata, 140) . ';
                line-height: 130%; 
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 146) . ';  
            }
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-info{
                text-align: right;
            }
           .oxi-addons-container   .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-info{
                text-align: center;
            }            
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name{
                width: 100%;
                float: left; 
                text-align: left;
                font-size: ' . $styledata[162] . 'px;
                color: ' . $styledata[166] . ';
                ' . OxiAddonsFontSettings($styledata, 168) . ';
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 174) . ';                     
            }
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-name{
                text-align: right;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working{
                width: 100%;
                float: left; 
                text-align: left;
                font-size: ' . $styledata[190] . 'px;
                ' . OxiAddonsFontSettings($styledata, 200) . ';
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 206) . ';                  
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-working a{
                color: ' . $styledata[194] . ';
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working a:hover,
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working a:active,
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-working a:focus{               
                color: ' . $styledata[198] . ';
                text-decoration:none;
            }
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-working{
                text-align: right;
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-container  .oxi-testimonials-' . $oxiid . '-padding{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 30) . ';          
                }
                .oxi-addons-container  .oxi-testimonials-item-' . $oxiid . '{
                    max-width: ' . $styledata[8] . 'px;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '{                   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ';
                    border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 48) . ';
                   }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-left{
                    width: ' . $styledata[75] . 'px;                    
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-right{    
                    width: calc(100% - ' . $styledata[75] . 'px);
                    padding-left: ' . $styledata[225] . 'px;                   
                }
                .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-right{                  
                    padding-right: ' . $styledata[225] . 'px;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                    max-width: ' . $styledata[75] . 'px;  
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image:after{
                    padding-bottom:' . $styledata[79] . 'px;                    
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';                   
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{                   
                    font-size: ' . $styledata[135] . 'px;
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 147) . ';  
                }          
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name{
                    font-size: ' . $styledata[163] . 'px;                   
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 175) . ';                     
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-working{                  
                    font-size: ' . $styledata[191] . 'px;
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 207) . ';                  
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-container  .oxi-testimonials-' . $oxiid . '-padding{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';          
                }
                .oxi-addons-container  .oxi-testimonials-item-' . $oxiid . '{
                    max-width: ' . $styledata[9] . 'px;
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '{                   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 14) . ';
                    border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
                   }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-left{
                    width: ' . $styledata[76] . 'px;                    
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-right{    
                    width: calc(100% - ' . $styledata[76] . 'px);
                    padding-left: ' . $styledata[226] . 'px;                   
                }
                .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-right{                  
                    padding-right: ' . $styledata[226] . 'px;
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image{
                    max-width: ' . $styledata[76] . 'px;  
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image:after{
                    padding-bottom:' . $styledata[80] . 'px;                    
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 104) . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 84) . ';                   
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{                   
                    font-size: ' . $styledata[136] . 'px;
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 148) . ';  
                }          
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name{
                    font-size: ' . $styledata[164] . 'px;                   
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 176) . ';                     
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working{                  
                    font-size: ' . $styledata[192] . 'px;
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 208) . ';                  
                }
            }
';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
