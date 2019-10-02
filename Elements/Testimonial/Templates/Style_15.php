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

class Style_15 extends Templates {

    public function default_render($style, $child, $admin) {
        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);
            $icon = $info = $rating = $name = $company = '';
            
            if (array_key_exists('sa_testi_profile_description', $value) && $value['sa_testi_profile_description'] != '') {
                $info = '<div class="oxi-testimonials-style-fifteen-info">
                                ' . $this->text_render($value['sa_testi_profile_description']) . '
                                <div class="oxi-before"> 
                                    ' . $this->font_awesome_render($value['sa_testi_profile_icon']) . '
                                    <div class="oxi-before-before"></div>
                                </div>
                                <div class="oxi-after"> </div>
                            </div> ';
                        }

            if (array_key_exists('sa_testi_profile_name', $value) && $value['sa_testi_profile_name'] != '') {
                if (array_key_exists('sa_testi_profile_company_url-url', $value) && $value['sa_testi_profile_company_url-url'] != '') {
                    $name = '<a ' . $this->url_render('sa_testi_profile_company_url', $value) . ' class="oxi-testimonials-style-fifteen-name">
                                ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                            </a>';
                } else {
                    $name = '<div  class="oxi-testimonials-style-fifteen-name">
                                ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                            </div>';
                }
            }
            if (array_key_exists('sa_testi_profile_company', $value) && $value['sa_testi_profile_company'] != '') {
                $company = '<div class="oxi-testimonials-style-fifteen-working">
                                    ' . $this->text_render($value['sa_testi_profile_company']) . '
                                 </div>';
            }

            if ($style['sa-testimonial-profile-body_alignment'] == 'left') {
                $class = "sa-testimonial-profile-body-fifteen-left";
            } elseif ($style['sa-testimonial-profile-body_alignment'] == 'right') {
                $class = "sa-testimonial-profile-body-fifteen-right";
            } else {
                $class = "sa-testimonial-profile-body-fifteen-center";
            }

            echo ' <div class="oxi-testimonials-fifteen-padding ' . $this->column_render('sa-testimonial-body-col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list' : '') . ' " >
                    <div class="oxi-testimonials-item-fifteen">
                        <div class="oxi-testimonials-style-fifteen ' . $class . '" ' . $this->animation_render('sa-testimonial-body-animation', $style) . '> 
                               '. $info .'
                                <div class="oxi-testimonials-style-fifteen-name-body">    
                                    '. $name .'
                                    '. $company .'
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
        $info  = $name = $company = ''; 
        if ($data[5] != '') {
            $info = '
               <div class="oxi-testimonials-style-' . $oxiid . '-info">
                    ' . OxiAddonsTextConvert($data[5]) . '
                    <div class="oxi-before"> 
                        ' . oxi_addons_font_awesome($data[1]) . '
                        <div class="oxi-before-before"></div>
                    </div>
                    <div class="oxi-after"> </div>
                </div> 
            ';
        }
        if ($data[3] != '') {
            $name = '
                <a  class="oxi-testimonials-style-' . $oxiid . '-name" href="' . $data[9] . '" target="' . $styledata[31] . '"> 
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
        echo ' <div class="oxi-testimonials-' . $oxiid . '-padding ' . OxiAddonsItemRows($styledata, 3) . ' ' . OxiAddonsAdminDefine($user) . '" ' . OxiAddonsAnimation($styledata, 33) . ' >
                    <div class="oxi-testimonials-item-' . $oxiid . '">
                            <div class="oxi-testimonials-style-' . $oxiid . ' ' . $styledata[13] . '"> 
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
    $css .= ' .oxi-addons-container  .oxi-testimonials-' . $oxiid . '-padding{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';  
            }
            .oxi-addons-container  .oxi-testimonials-item-' . $oxiid . '{
                position: relative;
                max-width: ' . $styledata[7] . 'px;
                width: 100%;
                margin: 0 auto;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '{
                width: 100%;
                float: left; 
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info{
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 86) . ';  
                width: 100%;
                float: left; 
                padding-left:' . $styledata[134] . 'px;
                font-size: ' . $styledata[74] . 'px;
                ' . OxiAddonsFontSettings($styledata, 80) . ';
                color: ' . $styledata[78] . ';
                background-color:  ' . $styledata[11] . ';
                position: relative;                
                text-align: left;
                ' . OxiAddonsBoxShadowSanitize($styledata, 38) . ';
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info .oxi-before{
                position: absolute;
                left: -' . $styledata[146] . 'px; 
                width: ' . $styledata[134] . 'px;
                height: ' . $styledata[134] . 'px;
                line-height: ' . $styledata[134] . 'px;
                text-align: center;
                background-color:  ' . $styledata[144] . ';
                top: 50%;
                -webkit-transform: translateX(-50%);
                -moz-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                -o-transform: translateX(-50%);
                transform: translateY(-50%);
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info .oxi-before .oxi-before-before{
                position: absolute;
                left: 0;
                top:-' . $styledata[146] . 'px;
                width: 0;
                height: 0;
                border-bottom: ' . $styledata[146] . 'px solid ' . $styledata[144] . ';
                border-left: ' . $styledata[146] . 'px solid transparent;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info .oxi-before{
                color:  ' . $styledata[142] . ';
                font-size: ' . $styledata[138] . 'px;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info .oxi-after{
                position: absolute;
                left: ' . ($styledata[94] + $styledata[134] - $styledata[146]) . 'px;
                bottom: -' . $styledata[102] . 'px; /* ekhane info r left padding asbe */
                width: 0;
                height: 0;
                border-left: ' . $styledata[102] . 'px solid transparent;
                border-right: ' . $styledata[102] . 'px solid transparent;
                border-top: ' . $styledata[102] . 'px solid ' . $styledata[104] . ';
            }
             .oxi-addons-container .oxi-testimonials-center .oxi-testimonials-style-' . $oxiid . '-info .oxi-after{
                left: 50%;
                -webkit-transform: translateX(-50%);
                -moz-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                -o-transform: translateX(-50%);
                transform: translateX(-50%);
            }
             .oxi-addons-container .oxi-testimonials-right .oxi-testimonials-style-' . $oxiid . '-info .oxi-after{
                left: auto;
                right: ' . $styledata[98] . 'px; /* ekhane padding right asbe */
            }
             .oxi-addons-container .oxi-testimonials-right .oxi-testimonials-style-' . $oxiid . '-info{
                text-align: right;
            }
             .oxi-addons-container .oxi-testimonials-center .oxi-testimonials-style-' . $oxiid . '-info{
                text-align: center;
            }             
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name-body{                
                float: left;    
                width: 100%;             
            }
             .oxi-addons-container .oxi-testimonials-center .oxi-testimonials-style-' . $oxiid . '-name-body{               
                text-align: center;
            }
             .oxi-addons-container .oxi-testimonials-right .oxi-testimonials-style-' . $oxiid . '-name-body{              
                text-align: right;
            }            
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name{
                width: 100%;
                float: left; 
                color: ' . $styledata[48] . ';
                font-size: ' . $styledata[44] . 'px;
                ' . OxiAddonsFontSettings($styledata, 52) . '; 
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 58) . ';             
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name:hover{
                color: ' . $styledata[50] . ';
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working{
                width: 100%;
                float: left; 
                color: ' . $styledata[110] . ';
                font-size: ' . $styledata[106] . 'px;
                ' . OxiAddonsFontSettings($styledata, 112) . ';         
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 118) . ';                      
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
                 .oxi-addons-container .oxi-testimonials-' . $oxiid . '-padding{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';  
                }
                 .oxi-addons-container .oxi-testimonials-item-' . $oxiid . '{
                    max-width: ' . $styledata[8] . 'px;                   
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info{
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';                     
                    padding-left:' . $styledata[135] . 'px;
                    font-size: ' . $styledata[75] . 'px;                    
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info .oxi-before{                   
                    width: ' . $styledata[135] . 'px;
                    height: ' . $styledata[135] . 'px;
                    line-height: ' . $styledata[135] . 'px;
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info .oxi-before{                   
                    font-size: ' . $styledata[139] . 'px;
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info .oxi-after{                  
                    left: ' . ($styledata[94] + $styledata[135] - $styledata[146]) . 'px;                  
                }
                 .oxi-addons-container .oxi-testimonials-right .oxi-testimonials-style-' . $oxiid . '-info .oxi-after{                 
                    right: ' . $styledata[99] . 'px; 
                }
                 .oxi-addons-container .oxi-testimonials-style-1-name{                   
                    font-size: ' . $styledata[45] . 'px;
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 59) . ';             
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working{                    
                    font-size: ' . $styledata[107] . 'px;                   
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 119) . ';                      
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-testimonials-' . $oxiid . '-padding{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';  
                }
                 .oxi-addons-container .oxi-testimonials-item-' . $oxiid . '{
                    max-width: ' . $styledata[9] . 'px;                   
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info{
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 88) . ';                     
                    padding-left:' . $styledata[136] . 'px;
                    font-size: ' . $styledata[76] . 'px;                    
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info .oxi-before{                   
                    width: ' . $styledata[136] . 'px;
                    height: ' . $styledata[136] . 'px;
                    line-height: ' . $styledata[136] . 'px;
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info .oxi-before{                   
                    font-size: ' . $styledata[140] . 'px;
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info .oxi-after{                  
                    left: ' . ($styledata[94] + $styledata[136] - $styledata[146]) . 'px;                  
                }
                 .oxi-addons-container .oxi-testimonials-right .oxi-testimonials-style-' . $oxiid . '-info .oxi-after{                 
                    right: ' . $styledata[100] . 'px; 
                }
                 .oxi-addons-container .oxi-testimonials-style-1-name{                   
                    font-size: ' . $styledata[46] . 'px;
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 60) . ';             
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working{                    
                    font-size: ' . $styledata[108] . 'px;                   
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 120) . ';                      
                }
            }
';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}