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

class Style_8 extends Templates {

    public function default_render($style, $child, $admin) {
        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);
            $image = $info = $rating = $name = '';
            if ($this->media_render('sa_testi_profile_picture', $value) != '') {
                $image = '<div class="oxi-testimonials-style-eight-image">                               
                                <img src="' . $this->media_render('sa_testi_profile_picture', $value) . '">  
                            </div>';
            }
            if (array_key_exists('sa_testi_profile_description', $value) && $value['sa_testi_profile_description'] != '') {
                $info = '<div class="oxi-testimonials-style-eight-info">
                                ' . $this->text_render($value['sa_testi_profile_description']) . '
                            </div>';
            }
            if (array_key_exists('sa_testi_profile_name', $value) && $value['sa_testi_profile_name'] != '') {
                $name = '<div  class="oxi-testimonials-style-eight-name">
                                ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                            </div>';
            }
            if (array_key_exists('sa_testi_profile_destination', $value) && $value['sa_testi_profile_destination'] != '') {
                $company = '
                 <div class="oxi-testimonials-style-eight-working">
                    ' . $this->text_render($value['sa_testi_profile_destination']) . '  
                </div>';
            }
            if (array_key_exists('sa_testi_profile_icon', $value) && $value['sa_testi_profile_icon'] != '') {
                if (array_key_exists('sa_testi_profile_url-url', $value) && $value['sa_testi_profile_url-url'] != '') {
                $icon = '
                    <div class="oxi-testimonials-style-eight-name-body-right">
                        <a ' . $this->url_render('sa_testi_profile_url', $value) . '>' . $this->font_awesome_render($value['sa_testi_profile_icon']) . '</a>  
                    </div>';
                }else{
                    $icon = '
                    <div class="oxi-testimonials-style-eight-name-body-right">
                        <div>' . $this->font_awesome_render($value['sa_testi_profile_icon']) . '</div>  
                    </div>';
                }
                
            }
            
            
            if ($style['sa-testimonial-profile-body_alignment'] == 'left') {
                $class = "sa-testimonial-profile-body-eight-left";
            } elseif ($style['sa-testimonial-profile-body_alignment'] == 'right') {
                $class = "sa-testimonial-profile-body-eight-right";
            } else {
                $class = "sa-testimonial-profile-body-eight-center";
            }

            echo ' <div class="oxi-testimonials-eight-padding ' . $this->column_render('sa-testimonial-body-col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list' : '') . '" >
                    <div class="oxi-testimonials-item-eight">
                        <div class="oxi-testimonials-style-eight ' . $class . '" ' . $this->animation_render('sa-testimonial-body-animation', $style) . '>
                            ' . $image . '
                            ' . $info . ' 
                            <div class="oxi-testimonials-style-eight-name-body">
                                <div class="oxi-testimonials-style-eight-name-body-left">
                                       ' . $name . '
                                       ' . $company . '
                                </div>
                                ' . $icon . '
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
            $image = $info = $name = $company = $icon = '';
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
                        ' . OxiAddonsTextConvert($data[11]) . '
                    </div>
            ';
            }
            if ($data[5] != '') {
                $icon = '
                    <div class="oxi-testimonials-style-' . $oxiid . '-name-body-right">
                        <a href="' . $data[9] . '" target="' . $styledata[45] . '">' . oxi_addons_font_awesome($data[5]) . '</a>  
                    </div>
            ';
            }
            echo ' <div class="oxi-testimonials-' . $oxiid . '-padding ' . OxiAddonsItemRows($styledata, 3) . ' ' . OxiAddonsAdminDefine($user) . '" ' . OxiAddonsAnimation($styledata, 63) . ' >
                    <div class="oxi-testimonials-item-' . $oxiid . '">
                            <div class="oxi-testimonials-style-' . $oxiid . ' ' . $styledata[206] . '">
                                ' . $image . '
                                ' . $info . ' 
                                <div class="oxi-testimonials-style-' . $oxiid . '-name-body">
                                    <div class="oxi-testimonials-style-' . $oxiid . '-name-body-left">
                                       ' . $name . '
                                       ' . $company . '
                                    </div>
                                  ' . $icon . '
                                </div>
                            </div>  
                        </div>';
            
            echo '</div>';
        }
        echo '</div></div>';
        $css .= ' .oxi-addons-container .oxi-testimonials-' . $oxiid . '-padding{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 29) . ';               
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
                text-align: left;
                background-color: ' . $styledata[11] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . '; 
                border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 47) . '; 
                ' . OxiAddonsBoxShadowSanitize($styledata, 68) . ';
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . ':hover{                
                ' . OxiAddonsBoxShadowSanitize($styledata, 234) . ';
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image{
                max-width: ' . $styledata[74] . 'px;
                margin: 0 auto ' . $styledata[222] . 'px 0;
                position: relative;
                display: block;
                width: 100%;                
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . '; 
                vertical-align: middle;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
                border-style:' . $styledata[98] . '; 
                border-color:' . $styledata[99] . '; 
            }
             .oxi-addons-container .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-image{
                margin: 0 0 ' . $styledata[222] . 'px auto;
            }
             .oxi-addons-container .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-image{
                margin: 0 auto ' . $styledata[222] . 'px auto;
            }
            
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image:after{
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
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . ';
                width: 100%;
                float: left;  
                position: relative;
                font-size: ' . $styledata[118] . 'px;
                color: ' . $styledata[122] . ';
                ' . OxiAddonsFontSettings($styledata, 124) . ';              
                text-align: left;
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info:before, .oxi-testimonials-style-' . $oxiid . '-info:after{             
                font-size: ' . $styledata[208] . 'px;
                color:   ' . $styledata[212] . ';
                font-family: FontAwesome;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info:before{
                position: absolute;
                top:-' . $styledata[226] . 'px; 
                right: 0;
                font-family: "Font Awesome 5 Free";
                font-weight: 900;
                content: "\f10e";               
            }
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-info:before,
            .oxi-addons-container  .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-info:before{
                left:0;
                right:auto;
                font-family: "Font Awesome 5 Free";
                font-weight: 900;
                content: "\f10d";                
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info:after{
                position: absolute;
                bottom: -' . $styledata[230] . 'px;
                left: 0;
                font-family: "Font Awesome 5 Free";
                font-weight: 900;
                content: "\f10d";   
            }
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-info:after,
            .oxi-addons-container  .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-info:after{
                left:auto;
                right:0;
                font-family: "Font Awesome 5 Free";
                font-weight: 900;
                content: "\f10e";
            }
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-info{
                text-align: right;
            }            
            .oxi-addons-container  .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-info{
                text-align: center;
            }      
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name-body{
                width: 100%;
                float: left;  
                display: flex;
                align-items: center;
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name-body-left{
                width: calc(100% - ' . ($styledata[214] + 10) . 'px);
                float: left;
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name-body-right{
                width: ' . ($styledata[214] + 10) . 'px;
                float: left;
                text-align: center;
            }        
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name-body-right i{
                color: ' . $styledata[218] . ';
                font-size: ' . $styledata[214] . 'px;
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name-body-right i:hover{
                color:   ' . $styledata[220] . ';
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name{
                width: 100%;
                float: left; 
                text-align: left;
                position: relative;
                color: ' . $styledata[150] . ';
                font-size: ' . $styledata[146] . 'px;
                ' . OxiAddonsFontSettings($styledata, 152) . ';              
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 158) . ';             
            }
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-name{
                text-align: right;
            }  
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-working{
                width: 100%;
                float: left; 
                text-align: left;
                color: ' . $styledata[178] . ';
                font-size: ' . $styledata[174] . 'px;
                ' . OxiAddonsFontSettings($styledata, 184) . ';              
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 190) . ';               
            }
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-working{
                text-align: right;
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
              .oxi-addons-container    .oxi-testimonials-' . $oxiid . '-padding{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 30) . ';               
                }
              .oxi-addons-container    .oxi-testimonials-item-' . $oxiid . '{
                    max-width: ' . $styledata[8] . 'px;
                }
              .oxi-addons-container    .oxi-testimonials-style-' . $oxiid . '{                   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 14) . '; 
                    border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 48) . ';                    
                }
              .oxi-addons-container    .oxi-testimonials-style-' . $oxiid . '-image{
                    max-width: ' . $styledata[75] . 'px;
                    margin: 0 auto ' . $styledata[223] . 'px 0;                          
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';                    
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
                }
               .oxi-addons-container   .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-image{
                    margin: 0 0 ' . $styledata[223] . 'px auto;
                }
                .oxi-addons-container  .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-image{
                    margin: 0 auto ' . $styledata[223] . 'px auto;
                }

                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image:after{
                    padding-bottom:' . $styledata[79] . 'px;                   
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{ 
                    border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 103) . '; 
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';                   
                    font-size: ' . $styledata[119] . 'px;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info:before, .oxi-testimonials-style-' . $oxiid . '-info:after{             
                    font-size: ' . $styledata[209] . 'px;                    
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info:before{
                    top:-' . $styledata[227] . 'px;                              
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info:after{                 
                    bottom: -' . $styledata[231] . 'px;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name-body-left{
                    width: calc(100% - ' . ($styledata[215] + 10) . 'px);                    
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name-body-right{
                    width: ' . ($styledata[215] + 10) . 'px;                    
                }        
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name-body-right i{                   
                    font-size: ' . $styledata[215] . 'px;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name{                   
                    font-size: ' . $styledata[147] . 'px;             
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 159) . ';             
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-working{                   
                    font-size: ' . $styledata[175] . 'px;            
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 191) . ';               
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
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . '; 
                    border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';                    
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                    max-width: ' . $styledata[76] . 'px;
                    margin: 0 auto ' . $styledata[224] . 'px 0;                          
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 104) . ';                    
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 84) . ';
                }
                .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-image{
                    margin: 0 0 ' . $styledata[224] . 'px auto;
                }
                .oxi-addons-container  .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-image{
                    margin: 0 auto ' . $styledata[224] . 'px auto;
                }

                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image:after{
                    padding-bottom:' . $styledata[80] . 'px;                   
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{ 
                    border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 104) . '; 
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 132) . ';                   
                    font-size: ' . $styledata[120] . 'px;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info:before, .oxi-testimonials-style-' . $oxiid . '-info:after{             
                    font-size: ' . $styledata[210] . 'px;                    
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info:before{
                    top:-' . $styledata[228] . 'px;                              
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info:after{                 
                    bottom: -' . $styledata[232] . 'px;
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name-body-left{
                    width: calc(100% - ' . ($styledata[216] + 10) . 'px);                    
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name-body-right{
                    width: ' . ($styledata[216] + 10) . 'px;                    
                }        
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name-body-right i{                   
                    font-size: ' . $styledata[216] . 'px;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name{                   
                    font-size: ' . $styledata[148] . 'px;             
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 160) . ';             
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-working{                   
                    font-size: ' . $styledata[176] . 'px;            
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 192) . ';               
                }
            }
';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
