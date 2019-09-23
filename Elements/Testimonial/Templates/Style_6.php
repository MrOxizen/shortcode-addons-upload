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

class Style_6 extends Templates {

    public function default_render($style, $child, $admin) {
        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);
            $image = $info = $rating = $name = $company = '';
            if ($this->media_render('sa_testi_profile_picture', $value) != '') {
                $image = ' <div class="oxi-testimonials-style-six-image">                               
                               <img src="' . $this->media_render('sa_testi_profile_picture', $value) . '"> 
                            </div>';
            }
            if (array_key_exists('sa_testi_profile_description', $value) && $value['sa_testi_profile_description'] != '') {
                $info = '<div class="oxi-testimonials-style-six-info">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                ' . $this->text_render($value['sa_testi_profile_description']) . '
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                           
                        </div>';
            }
            
            if (array_key_exists('sa_testi_profile_name', $value) && $value['sa_testi_profile_name'] != '') {
                $name = ' <div class="oxi-testimonials-style-six-name" >
                                    ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                              </div>';
            }
            if (array_key_exists('sa_testi_profile_company', $value) && $value['sa_testi_profile_company'] || array_key_exists('sa_testi_profile_designation', $value) && $value['sa_testi_profile_designation'] != '') {
                $company = '<div class="oxi-testimonials-style-six-working">
                                    <a ' . $this->url_render('sa_testi_profile_company_url', $value) . '>@ ' . $this->text_render($value['sa_testi_profile_company']) . '</a>
                                 </div>';
            }
            
            if($style['sa-testimonial-profile-body_alignment'] == 'left'){
                 $class = "sa-testimonial-profile-body-six-left";
            }elseif($style['sa-testimonial-profile-body_alignment'] == 'right'){
                $class = "sa-testimonial-profile-body-six-right";
            }else{
                 $class = "sa-testimonial-profile-body-six-center";
            }

            echo ' <div class="oxi-testimonials-six-padding ' . $this->column_render('sa-testimonial-body-col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list' : '') . ' " >
                    <div class="oxi-testimonials-item-six">
                        <div class="oxi-testimonials-style-six '.$class.'" ' . $this->animation_render('sa-testimonial-body-animation', $style) . '> 
                                 ' . $info . '
                                <div class="oxi-testimonials-style-six-image-area">
                                    <div class="oxi-testimonials-style-six-left">
                                    ' . $image . '
                                    </div>
                                    <div class="oxi-testimonials-style-six-right">
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
        $image = $info = $rating = $name = $company =  '';
        if ($data[1] != '') {
            $image = '
                <div class="oxi-testimonials-style-' . $oxiid . '-left">
                    <div class="oxi-testimonials-style-' . $oxiid . '-image">
                        <img src="' . OxiAddonsUrlConvert($data[1]) . '">
                    </div> 
                </div>
            ';
        }
        if ($data[5] != '') {
            $info = '
                  <div class="oxi-testimonials-style-' . $oxiid . '-info">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        ' . OxiAddonsTextConvert($data[5]) . '
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
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
                      <div class="oxi-testimonials-style-' . $oxiid . '-name">
                            ' . OxiAddonsTextConvert($data[3]) . '
                        </div>
            ';
        }
        if ($data[9] != '') {
            $company = '
                   <div class="oxi-testimonials-style-' . $oxiid . '-working">
                        <a href="' . $data[7] . '" target="' . $styledata[31] . '">' . OxiAddonsTextConvert($data[9]) . '</a>
                    </div>
            ';
        }
        echo ' <div class="oxi-testimonials-' . $oxiid . '-padding ' . OxiAddonsItemRows($styledata, 3) . ' ' . OxiAddonsAdminDefine($user) . '" ' . OxiAddonsAnimation($styledata, 33) . ' >
                    <div class="oxi-testimonials-item-' . $oxiid . '">
                            <div class="oxi-testimonials-style-' . $oxiid . ' ' . $styledata[11] . '">                                
                               '. $info .'
                               '. $image .'
                               
                                <div class="oxi-testimonials-style-' . $oxiid . '-right">
                                   '. $name .'
                                   '. $company .' 
                                </div>
                            </div>
                        </div>   ';
        
        echo '</div>';
    }
    echo '</div></div>';
    $css .= '  .oxi-addons-container .oxi-testimonials-' . $oxiid . '-padding{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . '; 
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
                text-align: left;
            }            
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 124) . ';
                width: 100%;
                float: left;                
                font-size: ' . $styledata[96] . 'px;                
                text-align: left;
                background-color: ' . $styledata[13] . ';
                color: ' . $styledata[100] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 108) . ';               
                ' . OxiAddonsBoxShadowSanitize($styledata, 38) . ';
                }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info .fa{
                font-size: ' . $styledata[156] . 'px;
                color:  ' . $styledata[160] . ';
                display: block;
                margin: 0 -' . ($styledata[132] + $styledata[136]) / 4 . 'px
            }            
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-info{
                text-align: right;
            }
            .oxi-addons-container  .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-info{
                text-align: center;
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info .fa-quote-left{
                text-align: left;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info .fa-quote-right{
                text-align: right;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-left{
                width: ' . $styledata[44] . 'px; 
                float: left;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-right{    
                width: calc(100% - ' . $styledata[44] . 'px);
                padding: 0 ' . $styledata[88] . 'px;    
                float: left;
            }
            .oxi-addons-container  .oxi-addonsdata-right  .oxi-testimonials-style-' . $oxiid . '-left, 
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-right{
                float: right;
                text-align: right;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image{
                margin-top: ' . $styledata[92] . 'px;
                max-width: ' . $styledata[44] . 'px;          
                width: 100%;
                position: relative;
                float: left;                
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 72) . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 52) . ';
                border-style:' . $styledata[68] . '; 
                border-color:' . $styledata[69] . '; 
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image:after{
                padding-bottom:' . $styledata[48] . 'px;
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
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 72) . ';
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name{
                width: 100%;
                float: left; 
                text-align: left;
                color: ' . $styledata[166] . ';
                font-size: ' . $styledata[162] . 'px;
                ' . OxiAddonsFontSettings($styledata, 168) . ';        
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 174) . ';
            }
             .oxi-addons-container .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-name{
                text-align: right;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working{
                width: 100%;
                float: left; 
                text-align: left;
                color: ' . $styledata[194] . ';
                font-size: ' . $styledata[190] . 'px;
                ' . OxiAddonsFontSettings($styledata, 198) . ';        
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 204) . ';              
            }            
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-working a:hover,
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working a:active,
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working a:focus{               
                color: ' . $styledata[196] . ';
                text-decoration:none;
            }
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-working{
                text-align: right;
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-container  .oxi-testimonials-' . $oxiid . '-padding{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . '; 
                }
                .oxi-addons-container  .oxi-testimonials-item-' . $oxiid . '{
                    max-width: ' . $styledata[8] . 'px;                    
                }           
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 125) . ';                   
                    font-size: ' . $styledata[97] . 'px;   
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 109) . ';
                    }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info .fa{
                    font-size: ' . $styledata[157] . 'px;                   
                    margin: 0 -' . ($styledata[133] + $styledata[137]) / 4 . 'px
                } 
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-left{
                    width: ' . $styledata[45] . 'px;                    
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-right{    
                    width: calc(100% - ' . $styledata[45] . 'px);
                    padding: 0 ' . $styledata[89] . 'px;  
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                    margin-top: ' . $styledata[93] . 'px;
                    max-width: ' . $styledata[45] . 'px;  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 53) . ';                   
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image:after{
                    padding-bottom:' . $styledata[49] . 'px;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{ 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name{                 
                    font-size: ' . $styledata[163] . 'px;                   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 175) . ';
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-working{  
                    font-size: ' . $styledata[191] . 'px;                   
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 205) . ';              
                }  
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-container  .oxi-testimonials-' . $oxiid . '-padding{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . '; 
                }
                .oxi-addons-container  .oxi-testimonials-item-' . $oxiid . '{
                    max-width: ' . $styledata[9] . 'px;                    
                }           
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 126) . ';                   
                    font-size: ' . $styledata[98] . 'px;   
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 110) . ';
                    }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info .fa{
                    font-size: ' . $styledata[158] . 'px;                   
                    margin: 0 -' . ($styledata[134] + $styledata[138]) / 4 . 'px
                } 
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-left{
                    width: ' . $styledata[46] . 'px;                    
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-right{    
                    width: calc(100% - ' . $styledata[46] . 'px);
                    padding: 0 ' . $styledata[90] . 'px;  
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                    margin-top: ' . $styledata[94] . 'px;
                    max-width: ' . $styledata[46] . 'px;  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 74) . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 54) . ';                   
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image:after{
                    padding-bottom:' . $styledata[50] . 'px;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{ 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 74) . ';
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name{                 
                    font-size: ' . $styledata[164] . 'px;                   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 176) . ';
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-working{  
                    font-size: ' . $styledata[192] . 'px;                   
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 206) . ';              
                }  
            }
';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
