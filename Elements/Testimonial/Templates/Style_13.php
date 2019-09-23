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

class Style_13 extends Templates {

    public function default_render($style, $child, $admin) {
        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);
            $image = $info = $rating = $name = $company = '';
            if ($this->media_render('sa_testi_profile_picture', $value) != '') {
                $image = ' <div class="oxi-testimonials-style-therteen-image">                               
                               <img src="' . $this->media_render('sa_testi_profile_picture', $value) . '"> 
                            </div>';
            }
            if (array_key_exists('sa_testi_profile_description', $value) && $value['sa_testi_profile_description'] != '') {
                $info = '<div class="oxi-testimonials-style-therteen-info">
                           ' . $this->text_render($value['sa_testi_profile_description']) . '
                        </div>';
            }
            if (array_key_exists('sa_testi_profile_rating-size', $value) && $value['sa_testi_profile_rating-size'] != '') {
                $rating = '<div class="oxi-testimonials-style-therteen-rating">
                            ' . $this->public_rating_render($value['sa_testi_profile_rating-size']) . '                            
                         </div> ';
            }
            if (array_key_exists('sa_testi_profile_name', $value) && $value['sa_testi_profile_name'] != '') {
                $name = ' <div class="oxi-testimonials-style-therteen-name" >
                                    ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                              </div>';
            }
            if (array_key_exists('sa_testi_profile_name', $value) && $value['sa_testi_profile_name'] != '') {
                if (array_key_exists('sa_testi_profile_name_url-url', $value) && $value['sa_testi_profile_name_url-url'] != '') {
                    $name = '<a ' . $this->url_render('sa_testi_profile_name_url', $value) . ' class="oxi-testimonials-style-therteen-name">
                                ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                            </a>';
                } else {
                    $name = '<div  class="oxi-testimonials-style-therteen-name">
                                ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                            </div>';
                }
            }
            if (array_key_exists('sa_testi_profile_company', $value) && $value['sa_testi_profile_company'] != '') {
                $company = '<div class="oxi-testimonials-style-therteen-working">
                                    ' . $this->text_render($value['sa_testi_profile_company']) . '
                                 </div>';
            }
            
            if($style['sa-testimonial-profile-body_alignment'] == 'left'){
                 $class = "sa-testimonial-profile-body-left";
            }elseif($style['sa-testimonial-profile-body_alignment'] == 'right'){
                $class = "sa-testimonial-profile-body-right";
            }else{
                 $class = "sa-testimonial-profile-body-center";
            }

            echo ' <div class="oxi-testimonials-therteen-padding ' . $this->column_render('sa-testimonial-body-col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list' : '') . ' " >
                    <div class="oxi-testimonials-item-therteen">
                        <div class="oxi-testimonials-style-therteen '.$class.'" ' . $this->animation_render('sa-testimonial-body-animation', $style) . '> 
                                 ' . $info . '
                                <div class="oxi-testimonials-style-therteen-image-area">
                                    <div class="oxi-testimonials-style-therteen-left">
                                    ' . $image . '
                                    </div>
                                    <div class="oxi-testimonials-style-therteen-right">
                                    ' . $name . ' 
                                    ' . $company . ' 
                                    </div> 
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
                <a  class="oxi-testimonials-style-' . $oxiid . '-name" href="' . $data[9] . '" target="' . $styledata[47] . '"> 
                        ' . OxiAddonsTextConvert($data[3]) . ' 
                </a>
            ';
        }
        if ($data[9] != '') {
            $company = '
                  <div class="oxi-testimonials-style-' . $oxiid . '-designation">
                        ' . OxiAddonsTextConvert($data[9]) . '
                    </div>
            ';
        } 
        echo ' <div class="oxi-testimonials-' . $oxiid . '-padding ' . OxiAddonsItemRows($styledata, 3) . ' ' . OxiAddonsAdminDefine($user) . '" ' . OxiAddonsAnimation($styledata, 49) . ' >
                    <div class="oxi-testimonials-item-' . $oxiid . '">
                        <div class="oxi-testimonials-style-' . $oxiid . '">
                            ' . $info . '
                            <div class="oxi-testimonials-style-' . $oxiid . '-image-body-parent">
                                    ' . $image . '
                                <div class="oxi-testimonials-style-' . $oxiid . '-body-parent">
                                    ' . $name . '
                                    ' . $company . ' 
                                </div>
                            </div>
                        </div> 
                    </div>';
                    if ($user == 'admin') {
                        echo '  <div class="oxi-addons-admin-absulote">
                                    <div class="oxi-addons-admin-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("OxiAddonsListFileEdittestimonialdata") . '
                                            <input type="hidden" name="oxi-item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="OxiAddonsListFileEdit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="oxi-addons-admin-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("OxiAddonsListFileDeletetestimonialdata") . '
                                            <input type="hidden" name="oxi-item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="OxiAddonsListFileDelete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
                    }
            echo '</div>';
        }
        echo '</div></div>';
    $css .= '.oxi-addons-container .oxi-testimonials-' . $oxiid . '-padding{
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';  
            }
             .oxi-addons-container .oxi-testimonials-item-' . $oxiid . '{
                max-width: ' . $styledata[7] . 'px;
                width: 100%;
                margin: 0 auto;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '{
                width: 100%;   
                background-color:   ' . $styledata[13] . ';
                float: left;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info{
                width: 100%;
                float: left;
                font-size: ' . $styledata[148] . 'px;
                ' . OxiAddonsFontSettings($styledata, 154) . ';
                color: ' . $styledata[152] . ';
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 160) . ';
            }            
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image-body-parent{
                width: 100%;
                float: left;
                align-items: center;
                display: flex;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image-parent{
                width: 50%;
                float: left;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . '; 
            }            
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image{
                max-width: ' . $styledata[60] . 'px;               
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 88) . '; 
                border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 68) . '; 
                border-style:' . $styledata[84] . '; 
                border-color:' . $styledata[85] . '; 
                position: relative;
                width: 100%;
                display: inline-block;
                float: right;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image:after{
                content: "";
                padding-bottom: ' . $styledata[64] . 'px;
                display:block;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image img{
                position: absolute;
                top:0;
                bottom: 0;
                width: 100%;
                height: 100%;
                display: block;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 88) . '; 
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-body-parent{
                width: 50%;
                float: left;     
            }
             .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name{
                width: 100%;
                float: left;
                color: ' . $styledata[124] . ';
                font-size: ' . $styledata[120] . 'px;
                ' . OxiAddonsFontSettings($styledata, 126) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 132) . ';      
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-body-parent:hover, a .oxi-testimonials-style-' . $oxiid . '-name:hover{
                color: ' . $styledata[192] . ';
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-body-parent .oxi-testimonials-style-' . $oxiid . '-designation{
                width: 100%;
                float: left; 
                color: ' . $styledata[214] . ';
                font-size: ' . $styledata[210] . 'px;
                ' . OxiAddonsFontSettings($styledata, 216) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 222) . ';      
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-container  .oxi-testimonials-' . $oxiid . '-padding{
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';  
                }
                .oxi-addons-container  .oxi-testimonials-item-' . $oxiid . '{
                    max-width: ' . $styledata[8] . 'px;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{                  
                    font-size: ' . $styledata[149] . 'px;
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 161) . ';
                } 
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image-parent{                  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . '; 
                }            
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                    max-width: ' . $styledata[61] . 'px;               
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 89) . '; 
                    border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 69) . ';                     
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image:after{                   
                    padding-bottom: ' . $styledata[65] . 'px;                    
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{                  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 89) . '; 
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name{                   
                    font-size: ' . $styledata[121] . 'px;                   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 133) . ';      
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-body-parent .oxi-testimonials-style-' . $oxiid . '-designation{
                    font-size: ' . $styledata[210] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 222) . ';      
                }
            }
            @media only screen and (max-width : 668px){
               .oxi-addons-container   .oxi-testimonials-' . $oxiid . '-padding{
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';  
                }
                .oxi-addons-container  .oxi-testimonials-item-' . $oxiid . '{
                    max-width: ' . $styledata[9] . 'px;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{                  
                    font-size: ' . $styledata[150] . 'px;
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 162) . ';
                } 
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image-parent{                  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . '; 
                }            
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                    max-width: ' . $styledata[62] . 'px;               
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 90) . '; 
                    border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 70) . ';                     
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image:after{                   
                    padding-bottom: ' . $styledata[66] . 'px;                    
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{                  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 90) . '; 
                }
                .oxi-addons-container  a .oxi-testimonials-style-' . $oxiid . '-name{                   
                    font-size: ' . $styledata[122] . 'px;                   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 134) . ';      
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-body-parent .oxi-testimonials-style-' . $oxiid . '-designation{
                    font-size: ' . $styledata[211] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 223) . ';      
                }
            }
';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
