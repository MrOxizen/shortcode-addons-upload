<?php

namespace SHORTCODE_ADDONS_UPLOAD\Price_table\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_9
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_9 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);

            $heading = $subheading   = $price    = $button = $ribbon = '';

            if (array_key_exists('sa_price_table_title', $value) && $value['sa_price_table_title'] != '') {
                $heading = '<' . $style['sa_price_table_title_tag'] . ' class="oxi-addons-title">' . $this->text_render($value['sa_price_table_title']) . '</' . $style['sa_price_table_title_tag'] . '>';
            }  
            if (array_key_exists('sa_price_table_subtitle', $value) && $value['sa_price_table_subtitle'] != '') {
                $subheading = '<' . $style['sa_price_table_subtitle_tag'] . ' class="oxi-addons-subtitle">' . $this->text_render($value['sa_price_table_subtitle']) . '</' . $style['sa_price_table_subtitle_tag'] . '>';
            }  

            if (array_key_exists('sa_price_table_price', $value) && $value['sa_price_table_price'] != '') {
                $price = ' <div class="oxi-addons-price">
                            ' . $this->text_render($value['sa_price_table_price']) . ' 
                        </div>';
            }

            if (array_key_exists('sa_price_table_ribbon_switter', $style) && $style['sa_price_table_ribbon_switter'] == 'yes') {
                if (array_key_exists('sa_price_table_ribbon_text', $value) && $value['sa_price_table_ribbon_text'] != '') {
                    $ribbon = '<div class="oxi-addons-ribon ' . $style['sa_price_table_ribbon_position_left_right'] . '">' . $this->text_render($value['sa_price_table_ribbon_text']) . '</div>';
                }
            }

            if (array_key_exists('sa_price_table_button_switter', $style) && $style['sa_price_table_button_switter'] == 'yes') {
                if (array_key_exists('sa_price_table_button_text', $value) && $value['sa_price_table_button_text'] != '') {
                    if (array_key_exists('sa_price_table_button_link-url', $value) && $value['sa_price_table_button_link-url'] != '') {
                        $button = '<div class="oxi-addons-main-button">
                                            <a ' . $this->url_render('sa_price_table_button_link', $value) . ' class="oxi-addons-link">
                                            ' . $this->text_render($value['sa_price_table_button_text']) . ' 
                                            </a>
                                        </div>';
                    } else {
                        $button = '<div class="oxi-addons-button" ' . $this->animation_render('sa_banner_button_left_animation', $style) . '>
                                            <button class="oxi-addons-link">
                                                ' . $this->text_render($value['sa_price_table_button_text']) . ' 
                                            </button>
                                        </div>';
                    }
                }
            } 
            echo '<div class="oxi-addons-parent-wrapper-style-9 ' . ($admin == "admin" ? 'oxi-addons-admin-edit-list' : '') . ' ' . $this->column_render('sa_price_table_column', $style) . '">
                   <div class="oxi-addons-wrapper-style-9" ' . $this->animation_render('sa_price_table_animation', $style) . ' >
                    ' . $ribbon . '
                    <div class="oxi_addons_heading_main oxi_addons__heading_'.$v['id'].'">
                        ' . $heading . '  
                        ' . $subheading . '   
                    </div>  
                    <div class="oxi-addons-feature-main">
                        ' . $price . '  
                        <div class="oxi-addons-main">';
                            $datas = (array_key_exists('sa_price_table_repeater', $value) && is_array($value['sa_price_table_repeater']) ? $value['sa_price_table_repeater'] : []);
                            foreach ($datas as $data) {
                                echo '<div class="oxi-addons-main-feature"  > 
                                     ' . $this->font_awesome_render($data['sa_price_table_icon']) . '
                                        <div class="oxi-addons-feature"> 
                                        ' . $this->text_render($data['sa_price_table_feature']) . '
                                        </div>'; 
                                echo '</div>';
                            }
                    echo  '</div>
                        ' . $button . '
                    </div>
                 </div>';
            if ($admin == 'admin') :
                echo '  <div class="oxi-addons-admin-absulote">
                                <div class="oxi-addons-admin-absulate-edit">
                                    <button class="btn btn-primary shortcode-addons-template-item-edit" type="button" value="' . $v['id'] . '">Edit</button>
                                </div>
                                <div class="oxi-addons-admin-absulate-delete">
                                <button class="btn btn-danger shortcode-addons-template-item-delete" type="submit" value="' . $v['id'] . '">Delete</button>
                                </div>
                            </div>';
            endif;
            echo ' </div>';
        }
    }
    public function inline_public_jquery()
    {
        return 'setTimeout(function () {
            oxiequalHeight($("' . $this->WRAPPER . ' .oxi-addons-wrapper-style-9"));
        }, 500)';
    }

public function inline_public_css() {
        $rt = '';
        foreach ($this->child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);
            $rt .= $this->background_render('sa_price_table_heading_bg_color', $value, '.' . $this->WRAPPER . ' .oxi-addons-parent-wrapper-style-9 .oxi_addons_heading_main.oxi_addons__heading_'.$v['id'].'');
        }
        return $rt;
    }


    public function old_render()
    {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = $price = $title = $details = '';

        if ($stylefiles[6] != '') {
            $title = '
               <div class="oxi-addons-price-title">' . OxiAddonsTextConvert($stylefiles[6]) . '</div>
            ';
        }
        if ($stylefiles[8] != '') {
            $details = '
              <div class="oxi-addons-price-details">' . OxiAddonsTextConvert($stylefiles[8]) . '</div>
            ';
        }
        if ($stylefiles[2] != '') {
            $price = '
              <div class="oxi-addons-price">' . OxiAddonsTextConvert($stylefiles[2]) . '</div>
            ';
        }
        echo '<div class="oxi-addons-container">
                <div class="oxi-addons-row">
                    <div class="oxi-addons-main-wrapper-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 63) . '>
                        <div class="oxi-addons-price-main">
                            <div class="oxi-addons-price-heading-details">
                                <div class="oxi-addons-header-main"> 
                                    ' . $title . '
                                    ' . $details . '
                                </div>
                            </div>
                            <div class="oxi-addons-price-main-body">
                                    ' . $price  . '
                                <ul class="oxi-addons-ul">';
                                    foreach($listdata as $value){
                                        $data = explode('||#||', $value['files']);
                                        $feature = '';
                                        if ($data[2] != '') {
                                            $feature = '
                                                    <div class="oxi-addons-feature">' . OxiAddonsTextConvert($data[2]) . '</div>
                                                ';
                                        }   
                                        echo '<li class="oxi-addons-li">
                                                   ' . oxi_addons_font_awesome('' . $stylefiles[4] . '') . '
                                                       '.$feature.'';  
                                               echo '</li>';
                                    }
                           echo '</ul>
                                <div class="oxi-addons-button">
                                    <a href="' . OxiAddonsUrlConvert($stylefiles[12]) . '" class="oxi-addons-link" target="' . $styledata[222] . '">' . OxiAddonsTextConvert($stylefiles[10]) . '</a>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>	 
              </div>';
    
    
        $css .= ' 
            .oxi-addons-container *{
                transition: none;
            }
            .oxi-addons-main-wrapper-' . $oxiid . '{
                position: relative;
                width: 100%;
                float: left;  
                overflow: hidden;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';  
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price-main{
                width: 100%;
                float: left;   
                background: '.$styledata[7].'; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';  
                ' . OxiAddonsBoxShadowSanitize($styledata, 57) . ';  
                max-width: '.$styledata[3].'px;
                overflow: hidden;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price-heading-details{ 
                width: 100%;
                float: left; 
                position: relative;
                 ' . OxiAddonsBGImage($styledata, 128) . ';
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header-main{
                width: 100%;
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price-heading-details:before{
                content: "";
                display: inline-block;
                padding-bottom: '.$styledata[312].'%; 
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price-title{
                width: 100%;
                float: left;
                font-size: ' . $styledata[132] . 'px;
                ' . OxiAddonsFontSettings($styledata, 138) . ';
                color: ' . $styledata[136] . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 144) . '; 
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price-details{
                width: 100%;
                float: left;
                font-size: ' . $styledata[160] . 'px;
                ' . OxiAddonsFontSettings($styledata, 166) . ';
                color: ' . $styledata[164] . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 172) . '; 
            }
                    
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price-main-body{
                width: 100%;
                float: left;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . '; 
               
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price{
                width: 100%;
                float: left;
                font-size: ' . $styledata[188] . 'px;
                color: ' . $styledata[192] . '; 
                ' . OxiAddonsFontSettings($styledata, 194) . '; 
                 padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 200) . '; 
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price > span{ 
                font-size: ' . $styledata[216] . 'px; 
                color: ' . $styledata[220] . '; 
            }   
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-ul{
                margin: 0;
                padding: 0;
                width: 100%;
                float: left;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-li{
               border: '.$styledata[76].' '.$styledata[77].';
               border-width: 0;
               border-top-width: '.$styledata[80].'px; 
               display: flex; 
               align-items: center;
               margin: 0;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-li:last-child{
               border-bottom-width: '.$styledata[82].'px;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-li .oxi-icons{
                font-size: ' . $styledata[106] . 'px;
                color: ' . $styledata[110] . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 112) . ';
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-feature{
                width: 100%;
                float: left;
                font-size: ' . $styledata[68] . 'px;
                color: ' . $styledata[72] . '; 
                ' . OxiAddonsFontSettings($styledata, 84) . ';  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 90) . '; 
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-feature span{ 
                color: ' . $styledata[74] . ';  
                font-weight: bold;
            }
                    
            .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-button{  
                width: 100%;
                float: left;
                z-index: 999;
                text-align: '.$styledata[256].';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 240) . ';
                -webkit-transition: all 0.2s ease;
                -moz-transition: all 0.2s ease;
                transition: all 0.35s ease;
            }
    
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button .oxi-addons-link{  
                font-size: ' . $styledata[258] . 'px;
                color: ' . $styledata[262] . ';
                background: ' . $styledata[264] . ';
                border:  ' . $styledata[266] . 'px ' . $styledata[267] . ';
                border-color: ' . $styledata[270] . ';
                display: block;
                ' . OxiAddonsFontSettings($styledata, 272) . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 278) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 224) . '; 
                ' . OxiAddonsBoxShadowSanitize($styledata, 294) . ';
                -webkit-transition: all 0.2s ease;
                -moz-transition: all 0.2s ease;
                transition: all 0.35s ease;
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button .oxi-addons-link:hover{  
                color: ' . $styledata[300] . ';
                background: ' . $styledata[302] . ';
                border-color: ' . $styledata[304] . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 306) . '; 
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button:hover{  
                transform: translateY(-3px);
            }
       
    
    
            @media only screen and (min-width : 669px) and (max-width : 993px){ 
                .oxi-addons-main-wrapper-' . $oxiid . '{ 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 42) . ';  
                }
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price-main{ 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 10) . ';  
                    max-width: '.$styledata[4].'px; 
                }   
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price-title{ 
                    font-size: ' . $styledata[133] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 145) . '; 
                }
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price-details{ 
                    font-size: ' . $styledata[161] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 173) . '; 
                } 
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price-main-body{ 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 26) . '; 
                }
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price{ 
                    font-size: ' . $styledata[189] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 201) . '; 
                }
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price > span{ 
                    font-size: ' . $styledata[217] . 'px; 
                }
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-li .oxi-icons{
                    font-size: ' . $styledata[107] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 113) . ';
                }
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-feature{
                    font-size: ' . $styledata[69] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 91) . '; 
                }
                .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-button{ 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 241) . ';
                }
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button .oxi-addons-link{  
                    font-size: ' . $styledata[259] . 'px;
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 279) . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 225) . '; 
                }  
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-main-wrapper-' . $oxiid . '{ 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 43) . ';  
                }
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price-main{ 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';  
                    max-width: '.$styledata[5].'px; 
                }   
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price-title{ 
                    font-size: ' . $styledata[134] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 146) . '; 
                }
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price-details{ 
                    font-size: ' . $styledata[162] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 174) . '; 
                } 
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price-main-body{ 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . '; 
                }
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price{ 
                    font-size: ' . $styledata[189] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 202) . '; 
                }
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-price > span{ 
                    font-size: ' . $styledata[218] . 'px; 
                }
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-li .oxi-icons{
                    font-size: ' . $styledata[108] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 114) . ';
                }
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-feature{
                    font-size: ' . $styledata[70] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 92) . '; 
                }
                .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-button{ 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 242) . ';
                }
                .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-button .oxi-addons-link{  
                    font-size: ' . $styledata[260] . 'px;
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 280) . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 226) . '; 
                }     
            }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
