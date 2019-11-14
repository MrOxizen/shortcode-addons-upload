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

class Style_17 extends Templates {

    public function default_render($style, $child, $admin) {
        $styledata = $this->style;
        foreach ($styledata['sa_image_accordion_data_style_17'] as $key => $value) {
            $image = $info = $rating = $name = $company = '';
            if ($this->media_render('sa_testi_profile_picture', $value) != '') {
                $image = ' <div class="oxi_addons_testimonial_top_left oxi_addons_testimonial_top_left-'.$key.'">
                                    <img src="' . $this->media_render('sa_testi_profile_picture', $value) . '" alt="" class="oxi-img">
                                </div>';
            }
            if (array_key_exists('sa_testi_profile_description', $value) && $value['sa_testi_profile_description'] != '') {
                $info = '<div class="oxi_addons_testimonial_bottom_content">
                            <div class="oxi_addons_testimonial_bottom_details oxi_addons_testimonial_bottom_details-'.$key.'">
                                ' . $this->text_render($value['sa_testi_profile_description']) . '
                            </div>
                        </div>';
            }
            if (array_key_exists('sa_testi_profile_rating-size', $value) && $value['sa_testi_profile_rating-size'] != '') {
                $rating = '<div class="oxi_addons_testimonial_rating oxi_addons_testimonial_rating-'.$key.'">
                            Review: ' . $this->public_rating_render($value['sa_testi_profile_rating-size']) . '                            
                         </div> ';
            }
            if (array_key_exists('sa_testi_profile_name', $value) && $value['sa_testi_profile_name'] != '') {
                $name = ' <div class="oxi_addons_testimonial_name oxi_addons_testimonial_name-'.$key.'" >
                                    ' . $this->text_render($value['sa_testi_profile_name']) . ' 
                              </div>';
            }
            if (array_key_exists('sa_testi_profile_company', $value) && $value['sa_testi_profile_company'] || array_key_exists('sa_testi_profile_designation', $value) && $value['sa_testi_profile_designation'] != '') {
                $company = '<div class="oxi_addons_testimonial_working oxi_addons_testimonial_working-'.$key.'">
                                    ' . $this->text_render($value['sa_testi_profile_designation']) . ' <a ' . $this->url_render('sa_testi_profile_company_url', $value) . '>' . $this->text_render($value['sa_testi_profile_company']) . '</a>
                                 </div>';
            }


            echo ' <div class="oxi_addons_testimonial_container ' . $this->column_render('sa-testimonial-body-col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list' : '') . ' ">
                        <div class="oxi_addons_testimonial_eighteen_box"  ' . $this->animation_render('sa-testimonial-body-animation', $style) . '>
                            <div class="oxi_addons_testimonial_content">
                                <div class="oxi_addons_testimonial_top_content">
                                    ' . $image . '
                                    <div class="oxi_addons_testimonial_top_right">
                                        ' . $name . ' 
                                        ' . $company . ' 
                                        ' . $rating . '  
                                    </div>
                                </div>
                                ' . $info . '
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
        echo'<div class="oxi-addons-container">
                <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            $image = $button = $name = $company = $rating = '';
            if ($data[1] != '') {
                $image = '
                                <div class="oxi_addons_testimonial_top_left">
                                    <img src="' . OxiAddonsUrlConvert($data[1]) . '" alt="" class="oxi-img">
                                </div>
                            ';
            }
            if ($data[11] != '') {
                $button = '
                              <div class="oxi_addons_testimonial_bottom_content">
                                    <div class="oxi_addons_testimonial_bottom_details">
                                    ' . OxiAddonsTextConvert($data[11]) . '
                                    </div>
                                </div>
                            ';
            }
            if ($data[3] != '') {
                $name = '
                                <div class="oxi_addons_testimonial_name">' . OxiAddonsTextConvert($data[3]) . '</div>
                            ';
            }
            if ($data[7] != '') {
                $company = '
                                <div class="oxi_addons_testimonial_working">' . OxiAddonsTextConvert($data[5]) . ' <a href="' . OxiAddonsUrlConvert($data[13]) . '">' . OxiAddonsTextConvert($data[7]) . '</a></div>
                            ';
            }
            if ($data[9] != '') {
                $rating = '
                                <div class="oxi_addons_testimonial_rating">Review: ' . OxiAddonsPublicRate($data[9]) . ' </div>
                            ';
            }
            echo'
                    <div class="oxi_addons_testimonial_container ' . OxiAddonsItemRows($styledata, 3) . '">
                        <div class="oxi_addons_testimonial_' . $oxiid . '_box"  ' . OxiAddonsAnimation($styledata, 97) . '>
                            <div class="oxi_addons_testimonial_content">
                                <div class="oxi_addons_testimonial_top_content">
                                    ' . $image . '
                                    <div class="oxi_addons_testimonial_top_right">
                                        ' . $name . ' 
                                        ' . $company . ' 
                                        ' . $rating . '  
                                    </div>
                                </div>
                                ' . $button . '
                            </div>
                        </div>';

            echo'</div>';
        }
        echo '
                </div>
            </div>';
        $css = '
            .oxi_addons_testimonial_container {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
            }
            .oxi_addons_testimonial_' . $oxiid . '_box {
                max-width: ' . $styledata[7] . 'px;
                margin: 0 auto;
                background: ' . $styledata[11] . ';
                border-width: ' . $styledata[13] . 'px; 
                border-style:  ' . $styledata[29] . ';
                border-color:  ' . $styledata[30] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 101) . ';
                transition: all .3s linear;
                overflow: hidden;
            }
            .oxi_addons_testimonial_' . $oxiid . '_box:hover {
                background: ' . $styledata[67] . ';
                border-style:  ' . $styledata[69] . ';
                border-color:  ' . $styledata[70] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 107) . ';
                transition: all .3s linear;
            }
            .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_content {
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
            .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_top_content{
                width: 100%;
                display: flex;
                justify-content: flex-start;
            }
            .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_top_left{
                width: ' . $styledata[89] . 'px;
                height: ' . $styledata[93] . 'px;
                position: relative;
                left: 0;
                top: 0;
            }
            .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_top_left::after{
                content: "";
                display: block;
                padding-bottom:  ' . $styledata[93] . 'px;;
            }
            .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_top_left .oxi-img{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_top_right{
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                text-align: left;
                padding: 10px 20px;
            }
            .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_name{
                width: 100%;
                font-size: ' . $styledata[141] . 'px;
                color: ' . $styledata[145] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 155) . ';
                ' . OxiAddonsFontSettings($styledata, 149) . ';
            }
            .oxi_addons_testimonial_' . $oxiid . '_box:hover .oxi_addons_testimonial_name{
                color: ' . $styledata[147] . ';
            }
            .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_working{
                width: 100%;
                font-size: ' . $styledata[171] . 'px;
                color: ' . $styledata[175] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
                ' . OxiAddonsFontSettings($styledata, 181) . ';
            }
            .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_working a{
                color: ' . $styledata[177] . ';
            }
            .oxi_addons_testimonial_' . $oxiid . '_box:hover .oxi_addons_testimonial_working a{
                color: ' . $styledata[179] . ';
            }
            .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_rating{
                font-size: ' . $styledata[203] . 'px;
                color: ' . $styledata[207] . ';
            }
            .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_rating i{
                color: ' . $styledata[225] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 209) . ';
            }
            .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_bottom_content{
                width: 100%;
            }
            .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_bottom_details{
                font-size: ' . $styledata[113] . 'px;
                color: ' . $styledata[117] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 125) . ';
                ' . OxiAddonsFontSettings($styledata, 119) . ';
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi_addons_testimonial_container {
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 50) . ';
                }
                .oxi_addons_testimonial_' . $oxiid . '_box {
                    max-width: ' . $styledata[8] . 'px;
                    border-width: ' . $styledata[14] . 'px; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 34) . ';
                }
                .oxi_addons_testimonial_' . $oxiid . '_box:hover {
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 74) . ';
                }
                .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_top_left{
                    width: ' . $styledata[90] . 'px;
                    height: ' . $styledata[94] . 'px;
                }
                .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_top_left::after{
                    padding-bottom:  ' . $styledata[94] . 'px;;
                }
                .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_name{
                    font-size: ' . $styledata[142] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 156) . ';
                }
                .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_working{
                    font-size: ' . $styledata[172] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 188) . ';
                }
                .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_rating{
                    font-size: ' . $styledata[204] . 'px;
                }
                .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_bottom_details{
                    font-size: ' . $styledata[114] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 126) . ';
                }
           }
           @media only screen and (max-width : 668px){
                .oxi_addons_testimonial_container {
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 51) . ';
                }
                .oxi_addons_testimonial_' . $oxiid . '_box {
                    max-width: ' . $styledata[9] . 'px;
                    border-width: ' . $styledata[15] . 'px; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . ';
                }
                .oxi_addons_testimonial_' . $oxiid . '_box:hover {
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 75) . ';
                }
                .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_top_left{
                    width: ' . $styledata[91] . 'px;
                    height: ' . $styledata[95] . 'px;
                }
                .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_top_left::after{
                    padding-bottom:  ' . $styledata[95] . 'px;;
                }
                .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_name{
                    font-size: ' . $styledata[143] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 157) . ';
                }
                .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_working{
                    font-size: ' . $styledata[173] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 189) . ';
                }
                .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_rating{
                    font-size: ' . $styledata[205] . 'px;
                }
                .oxi_addons_testimonial_' . $oxiid . '_box .oxi_addons_testimonial_bottom_details{
                    font-size: ' . $styledata[115] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . ';
                }
            }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
