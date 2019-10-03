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

class Style_2 extends Templates {

    public function default_render($style, $child, $admin) {
        $styledata = $this->style;
        foreach ($styledata['sa_testimonial_data_style_2'] as $key => $value) {
            $image = $info = $rating = $name = $company = '';
            if ($this->media_render('sa_testi_profile_picture', $value) != '') {
                $image = ' <div class="oxi-testimonials-style-testinew-image">                               
                               <img src="' . $this->media_render('sa_testi_profile_picture', $value) . '"> 
                            </div>';
            }
            if (array_key_exists('sa_testi_profile_description', $value) && $value['sa_testi_profile_description'] != '') {
                $info = '<div class="oxi-testimonials-style-testinew-info">
                           ' . $this->text_render($value['sa_testi_profile_description']) . '
                        </div>';
            }
            if (array_key_exists('sa_testi_profile_rating-size', $value) && $value['sa_testi_profile_rating-size'] != '') {
                $rating = '<div class="oxi-testimonials-style-testinew-rating">
                            ' . $this->public_rating_render($value['sa_testi_profile_rating-size']) . '                            
                         </div> ';
            }
            if (array_key_exists('sa_testi_profile_name', $value) && $value['sa_testi_profile_name'] != '') {
                $name = ' <div class="oxi-testimonials-style-testinew-name" >
                                    ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                              </div>';
            }
            if (array_key_exists('sa_testi_profile_company', $value) && $value['sa_testi_profile_company'] || array_key_exists('sa_testi_profile_designation', $value) && $value['sa_testi_profile_designation'] != '') {
                $company = '<div class="oxi-testimonials-style-testmonialnew-working">
                                    ' . $this->text_render($value['sa_testi_profile_designation']) . '  at <a ' . $this->url_render('sa_testi_profile_company_url', $value) . '>' . $this->text_render($value['sa_testi_profile_company']) . '</a>
                                 </div>';
            }
            

            echo ' <div class="oxi-testimonials-testinew-padding ' . $this->column_render('sa-testimonial-body-col', $style) . ' '.($admin == 'admin'? 'oxi-addons-admin-edit-list' : '').' " >
                    <div class="oxi-testimonials-item-testinew">
                        <div class="oxi-testimonials-style-testinew" ' . $this->animation_render('sa-testimonial-body-animation', $style) . '> 
                                ' . $image . '
                                ' . $info . ' 
                                ' . $rating . '  
                                ' . $name . '  
                                ' . $company . '  
                            </div>
                    </div>';
            
            echo '</div>';
        }
    }

    public function public_rating_render($value = '') {
        $ratefull = 'fas fa-star';
        $ratehalf = 'fas fa-star-half-alt';
        $rateO = 'far fa-star';

        if ($value > 4.75) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull);
        } elseif ($value <= 4.75 && $value > 4.25) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratehalf);
        } elseif ($value <= 4.25 && $value > 3.75) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($rateO);
        } elseif ($value <= 3.75 && $value > 3.25) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratehalf) . $this->font_awesome_render($rateO);
        } elseif ($value <= 3.25 && $value > 2.75) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
        } elseif ($value <= 2.75 && $value > 2.25) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratehalf) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
        } elseif ($value <= 2.25 && $value > 1.75) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
        } elseif ($value <= 1.75 && $value > 1.25) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratehalf) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
        } elseif ($value <= 1.25) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
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
            $image = $info = $rating = $name = $company = '';
            if ($data[1] != '') {
                $image = '
                    <div class="oxi-testimonials-style-' . $oxiid . '-image">                               
                        <img src="' . OxiAddonsUrlConvert($data[1]) . '">  
                    </div>
            ';
            }
            if ($data[7] != '') {
                $info = '
                    <div class="oxi-testimonials-style-' . $oxiid . '-info">
                        ' . OxiAddonsTextConvert($data[7]) . '
                    </div>
            ';
            }
            if ($data[5] != '') {
                $rating = '
                    <div class="oxi-testimonials-style-' . $oxiid . '-rating">
                        ' . OxiAddonsPublicRate($data[5]) . '                                
                     </div>
            ';
            }
            if ($data[3] != '') {
                $name = '
                      <div class="oxi-testimonials-style-' . $oxiid . '-name" >
                            ' . OxiAddonsTextConvert($data[3]) . ' 
                      </div>
            ';
            }
            if ($data[11] != '') {
                $company = '
                   <div class="oxi-testimonials-style-' . $oxiid . '-working">
                        ' . OxiAddonsTextConvert($data[11]) . ' at <a href="' . $data[9] . '" target="' . $styledata[45] . '">' . OxiAddonsTextConvert($data[13]) . '</a>
                    </div>
            ';
            }
            echo ' <div class="oxi-testimonials-' . $oxiid . '-padding ' . OxiAddonsItemRows($styledata, 3) . ' ' . OxiAddonsAdminDefine($user) . '" ' . OxiAddonsAnimation($styledata, 63) . ' >
                    <div class="oxi-testimonials-item-' . $oxiid . '">
                        <div class="oxi-testimonials-style-' . $oxiid . ' ' . $styledata[270] . '"> 
                                ' . $image . '
                                ' . $info . ' 
                                ' . $rating . '  
                                ' . $name . '  
                                ' . $company . '  
                            </div>
                    </div>';
            echo '</div>';
        }
        echo '</div></div>';
        $css .= ' .oxi-addons-container  .oxi-testimonials-' . $oxiid . '-padding{
                 padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 29) . ';       
            }
             .oxi-addons-container .oxi-testimonials-item-' . $oxiid . '{
                position: relative;
                max-width: ' . $styledata[7] . 'px;
                width: 100%;
                margin: 0 auto;
                display:flex;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '{
                width: 100%;
                position: relative;
                float: left;
                text-align: left;                
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
                border-style:' . $styledata[98] . '; 
                border-color:' . $styledata[99] . ';    
                background: ' . $styledata[11] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ';
                border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 47) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 68) . ';
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                width: ' . $styledata[74] . 'px;
                position: absolute;
                top: 100%;
                right: ' . $styledata[41] . 'px;
                transform:translateY(-50%);
                vertical-align: middle;                
            }
            .oxi-addons-container .oxi-testimonials-right .oxi-testimonials-style-' . $oxiid . '-image{
                right: auto;
                left: ' . $styledata[37] . 'px
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image:after{
                padding-bottom:' . $styledata[78] . 'px;
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
                border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
                border-style:' . $styledata[98] . '; 
                border-color:' . $styledata[99] . ';   
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{
                width: 100%;
                float: left;                
                font-size: ' . $styledata[134] . 'px;
                color: ' . $styledata[138] . ';     
                ' . OxiAddonsFontSettings($styledata, 140) . '; 
                line-height: 130%;                
                margin:' . OxiAddonsPaddingMarginSanitize($styledata, 146) . ';
            }
            .oxi-addons-container  .oxi-testimonials-right .oxi-testimonials-style-' . $oxiid . '-info{
                text-align: right;
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-rating{
                width: 100%;
                float: left; 
                text-align: left;
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 218) . ';
            }          
           .oxi-addons-container  .oxi-testimonials-right .oxi-testimonials-style-' . $oxiid . '-rating{
                text-align: right;
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-rating i{
                font-size: ' . $styledata[212] . 'px;
                color:  ' . $styledata[216] . ';
                padding: 0 2px;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name{
                width: 100%;
                float: left; 
                color: ' . $styledata[166] . ';
                font-size: ' . $styledata[162] . 'px;
                ' . OxiAddonsFontSettings($styledata, 168) . ';     
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 196) . ';         
            } 
             .oxi-addons-container .oxi-testimonials-right .oxi-testimonials-style-' . $oxiid . '-name{
                text-align: right;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working{
                width: 100%;
                float: left; 
                color: ' . $styledata[242] . ';
                font-size: ' . $styledata[238] . 'px;
                ' . OxiAddonsFontSettings($styledata, 248) . ';     
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 254) . ';                 
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working a{
                color: ' . $styledata[244] . ';
                text-decoration:none;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working a:hover,
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working a:focus,
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working a:active{
               color: ' . $styledata[246] . ';
               text-decoration: none;
            }
            .oxi-addons-container .oxi-testimonials-right .oxi-testimonials-style-' . $oxiid . '-working{
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
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';                 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 14) . ';
                    border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 48) . ';                   
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                    width: ' . $styledata[75] . 'px;                   
                    right: ' . $styledata[42] . 'px;       
                }
               .oxi-addons-container  .oxi-testimonials-right .oxi-testimonials-style-' . $oxiid . '-image{                   
                    left: ' . $styledata[38] . 'px
                }
               .oxi-addons-container   .oxi-testimonials-style-' . $oxiid . '-image:after{
                    padding-bottom:' . $styledata[79] . 'px;                    
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{
                    border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';                    
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{                                   
                    font-size: ' . $styledata[135] . 'px;                   
                    margin:' . OxiAddonsPaddingMarginSanitize($styledata, 147) . ';
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-rating{                 
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 219) . ';
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-rating i{
                    font-size: ' . $styledata[213] . 'px;                   
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name{                   
                    font-size: ' . $styledata[163] . 'px;                    
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 197) . ';         
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-working{                  
                    font-size: ' . $styledata[239] . 'px;                      
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 255) . ';                 
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-container  .oxi-testimonials-' . $oxiid . '-padding{
                     padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';       
                }
                .oxi-addons-container  .oxi-testimonials-item-' . $oxiid . '{
                    max-width: ' . $styledata[9] . 'px;                   
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '{                               
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 84) . ';                 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
                    border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';                   
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                    width: ' . $styledata[76] . 'px;                   
                    right: ' . $styledata[43] . 'px;       
                }
               .oxi-addons-container  .oxi-testimonials-right .oxi-testimonials-style-' . $oxiid . '-image{                   
                    left: ' . $styledata[39] . 'px
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image:after{
                    padding-bottom:' . $styledata[80] . 'px;                    
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{
                    border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 104) . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 84) . ';                    
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{                                   
                    font-size: ' . $styledata[136] . 'px;                   
                    margin:' . OxiAddonsPaddingMarginSanitize($styledata, 148) . ';
                }
               .oxi-addons-container   .oxi-testimonials-style-' . $oxiid . '-rating{                 
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 220) . ';
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-rating i{
                    font-size: ' . $styledata[214] . 'px;                   
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name{                   
                    font-size: ' . $styledata[164] . 'px;                    
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 197) . ';         
                }
               .oxi-addons-container   .oxi-testimonials-style-' . $oxiid . '-working{                  
                    font-size: ' . $styledata[240] . 'px;                      
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 256) . ';                 
                }
            }
';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
