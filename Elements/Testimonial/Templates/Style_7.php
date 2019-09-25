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

class Style_7 extends Templates {

    public function default_render($style, $child, $admin) {
        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);
            $image = $info = $rating = $name = '';
            if ($this->media_render('sa_testi_profile_picture', $value) != '') {
                $image = '<div class="oxi-testimonials-style-seven-image">                               
                                <img src="' . $this->media_render('sa_testi_profile_picture', $value) . '">  
                            </div>';
            }
            if (array_key_exists('sa_testi_profile_description', $value) && $value['sa_testi_profile_description'] != '') {
                $info = '<div class="oxi-testimonials-style-seven-info">
                                ' . $this->text_render($value['sa_testi_profile_description']) . '
                            </div>';
            }
            if (array_key_exists('sa_testi_profile_name', $value) && $value['sa_testi_profile_name'] != '') {
                $name = '<div  class="oxi-testimonials-style-seven-name">
                                ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                            </div>';
            }
            if (array_key_exists('sa_testi_profile_destination', $value) && $value['sa_testi_profile_destination'] || array_key_exists('sa_testi_profile_company', $value) && $value['sa_testi_profile_company'] != '') {
                $company = '
                 <div class="oxi-testimonials-style-seven-working">
                    ' . $this->text_render($value['sa_testi_profile_destination']) . '  at <a ' . $this->url_render('sa_testi_profile_company_url', $value) . '">' . $this->text_render($value['sa_testi_profile_company']) . ' </a>
                </div>';
            }
            

            echo ' <div class="oxi-testimonials-seven-padding ' . $this->column_render('sa-testimonial-body-col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list' : '') . '" >
                    <div class="oxi-testimonials-item-seven">
                        <div class="oxi-testimonials-style-seven '.$style['sa-testimonial-profile-body_alignment'].'" ' . $this->animation_render('sa-testimonial-body-animation', $style) . '>
                            ' . $image . '
                            ' . $info . '
                            ' . $name . '
                            ' . $company . '
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
            if ($data[13] != '') {
                $company = '
                 <div class="oxi-testimonials-style-' . $oxiid . '-working">
                    ' . OxiAddonsTextConvert($data[11]) . ' at <a href="' . $data[9] . '" target="' . $styledata[45] . '">' . OxiAddonsTextConvert($data[13]) . '</a>
                </div>
            ';
            }
            echo ' <div class="oxi-testimonials-' . $oxiid . '-padding ' . OxiAddonsItemRows($styledata, 3) . ' ' . OxiAddonsAdminDefine($user) . '" ' . OxiAddonsAnimation($styledata, 63) . ' >
                    <div class="oxi-testimonials-item-' . $oxiid . '">
                            <div class="oxi-testimonials-style-' . $oxiid . ' ' . $styledata[206] . '">
                                 ' . $image . '
                                 ' . $info . '
                                 ' . $name . '
                                 ' . $company . '
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
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '{
                width: 100%;
                position: relative;
                float: left;
                text-align: left;
                background-color: ' . $styledata[11] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ';          
                border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 47) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 68) . ';
            }
           .oxi-addons-container   .oxi-testimonials-style-' . $oxiid . ':hover{
                ' . OxiAddonsBoxShadowSanitize($styledata, 224) . ';
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                max-width: ' . $styledata[74] . 'px;
                position: absolute;
                top: 0;
                left: ' . $styledata[33] . 'px;
                margin-top:  -' . $styledata[74] / 2 . 'px;
                width: 100%;               
                vertical-align: middle;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
                border-style:' . $styledata[98] . '; 
                border-color:' . $styledata[99] . '; 
            }
            .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-image{
                left: auto;
                right: ' . $styledata[29] . 'px;
            }
            .oxi-addons-container  .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-image{
                right: auto;
                -webkit-transform: translateX(-50%);
                -moz-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                -o-transform: translateX(-50%);
                transform: translateX(-50%);
                left: 50%;
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
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info{
                margin-top: ' . $styledata[74] / 2 . 'px;
                margin-bottom:' . $styledata[134] . 'px;    
                width: 100%;
                float: left;  
                position: relative;
                font-size: ' . $styledata[118] . 'px;
                color: ' . $styledata[122] . ';
                ' . OxiAddonsFontSettings($styledata, 124) . ';   
                text-align: left;
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 130) . ';                 
            }
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info::before,'
                . '  .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info::after{             
                font-size: ' . $styledata[208] . 'px;
                color:   ' . $styledata[212] . ';                 
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info::before{
                position: absolute;
                top: 0;
                left: 0;
                font-family: "Font Awesome 5 Free";
                font-weight: 900;
                content: "\f10d";
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info::after{
                position: absolute;
                bottom:  0;
                right: 0;
                font-family: "Font Awesome 5 Free";
                font-weight: 900;
                content: "\f10e";
            }
             .oxi-addons-container .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-info{
                text-align: right;
            }            
             .oxi-addons-container .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-info{
                text-align: center;
            }            
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name{
                width: 100%;
                float: left; 
                text-align: left;
                position: relative;
                color: ' . $styledata[150] . ';
                font-size: ' . $styledata[146] . 'px;
                ' . OxiAddonsFontSettings($styledata, 152) . ';   
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 158) . ';                         
            }
             .oxi-addons-container .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-name{
                text-align: right;
            }
             .oxi-addons-container .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-name{
                text-align: center;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name:after{
                position: absolute;
                top: 0;
                content: "";
                background: ' . $styledata[222] . ';
                width: ' . $styledata[214] . 'px;
                height: ' . $styledata[218] . 'px;
                left: 0;
            }
             .oxi-addons-container .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-name:after{
                left: 50%;
                -webkit-transform: translateX(-50%);
                -moz-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                -o-transform: translateX(-50%);
                transform: translateX(-50%);

            }
             .oxi-addons-container .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-name:after{
                left: auto;
                right: 0;
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working{
                width: 100%;
                float: left; 
                text-align: left;
                color: ' . $styledata[178] . ';
                font-size: ' . $styledata[174] . 'px;
                ' . OxiAddonsFontSettings($styledata, 184) . ';   
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 190) . ';          
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working a{
                color: ' . $styledata[180] . ';                
            }
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working a:hover,
            .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-working a:active,
             .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working a:focus{
                color: ' . $styledata[182] . ';
                text-decoration: none;
            }
             .oxi-addons-container .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-working{
                text-align: right;
            }
             .oxi-addons-container .oxi-addonsdata-center .oxi-testimonials-style-' . $oxiid . '-working{
                text-align: center;
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
               .oxi-addons-container   .oxi-testimonials-' . $oxiid . '-padding{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 30) . '; 
                }
                 .oxi-addons-container .oxi-testimonials-item-' . $oxiid . '{
                    max-width: ' . $styledata[8] . 'px;
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '{                   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 14) . ';          
                    border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 48) . ';                    
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image{
                    max-width: ' . $styledata[75] . 'px;                   
                    left: ' . $styledata[34] . 'px;
                    margin-top:  -' . $styledata[75] / 2 . 'px;
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
                    }
                .oxi-addons-container  .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-image{                   
                    right: ' . $styledata[30] . 'px;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image:after{
                    padding-bottom:' . $styledata[79] . 'px;                  
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info{
                    margin-top: ' . $styledata[75] / 2 . 'px;
                    margin-bottom:' . $styledata[135] . 'px; 
                    font-size: ' . $styledata[119] . 'px;
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';                 
                }
               .oxi-addons-container   .oxi-testimonials-style-' . $oxiid . '-info::before,
               .oxi-addons-container   .oxi-testimonials-style-' . $oxiid . '-info::after{             
                    font-size: ' . $styledata[209] . 'px;
                }         
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name{
                    font-size: ' . $styledata[147] . 'px;
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 159) . ';                         
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name:after{                   
                    width: ' . $styledata[215] . 'px;
                    height: ' . $styledata[219] . 'px;
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-working{
                    font-size: ' . $styledata[175] . 'px;
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 191) . ';          
                }
            }
            @media only screen and (max-width : 668px){
               .oxi-addons-container   .oxi-testimonials-' . $oxiid . '-padding{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . '; 
                }
                .oxi-addons-container  .oxi-testimonials-item-' . $oxiid . '{
                    max-width: ' . $styledata[9] . 'px;
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '{                   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';          
                    border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';                    
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image{
                    max-width: ' . $styledata[76] . 'px;                   
                    left: ' . $styledata[35] . 'px;
                    margin-top:  -' . $styledata[75] / 2 . 'px;
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 104) . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 84) . ';
                    }
                 .oxi-addons-container .oxi-addonsdata-right .oxi-testimonials-style-' . $oxiid . '-image{                   
                    right: ' . $styledata[31] . 'px;
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-image:after{
                    padding-bottom:' . $styledata[80] . 'px;                  
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-image img{
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 104) . ';
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info{
                    margin-top: ' . $styledata[76] / 2 . 'px;
                    margin-bottom:' . $styledata[136] . 'px; 
                    font-size: ' . $styledata[120] . 'px;
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 132) . ';                 
                }
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-info::before,
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-info::after{             
                    font-size: ' . $styledata[210] . 'px;
                }         
                 .oxi-addons-container .oxi-testimonials-style-' . $oxiid . '-name{
                    font-size: ' . $styledata[148] . 'px;
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 160) . ';                         
                }
                .oxi-addons-container  .oxi-testimonials-style-' . $oxiid . '-name:after{                   
                    width: ' . $styledata[216] . 'px;
                    height: ' . $styledata[220] . 'px;
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
