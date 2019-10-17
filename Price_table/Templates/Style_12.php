<?php

namespace SHORTCODE_ADDONS_UPLOAD\Price_table\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_12
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_12 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);

            $heading   = $price    = $button = $ribbon = $rating ='';

            if (array_key_exists('sa_price_table_title', $value) && $value['sa_price_table_title'] != '') {
                $heading = '<' . $style['sa_price_table_title_tag'] . ' class="oxi-addons-title">' . $this->text_render($value['sa_price_table_title']) . '</' . $style['sa_price_table_title_tag'] . '>';
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
                        $button = '<div class="oxi-addons-button">
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
            if(array_key_exists('sa_testi_profile_rating-size', $value) && $value['sa_testi_profile_rating-size'] != ''){
                $rating = '<div class="oxi-addons-rating-main"><div class="oxi-addons-rating">
                                  ' . $this->public_rating_render($value['sa_testi_profile_rating-size']) . '  
                              </div> </div>';  
              }
            echo '<div class="oxi-addons-parent-wrapper-style-12 ' . ($admin == "admin" ? 'oxi-addons-admin-edit-list' : '') . ' ' . $this->column_render('sa_price_table_column', $style) . '">
                    <div class="oxi-addons-parent">
                    <div class="oxi-addons-heading-main">
                        ' . $heading . '   
                    </div>  
                   <div class="oxi-addons-wrapper-style-12" ' . $this->animation_render('sa_price_table_animation', $style) . ' >
                    ' . $ribbon . ' 
                    <div class="oxi-addons-feature-main">
                        ' . $price . '  
                        <div class="oxi-addons-main">';
                            $datas = (array_key_exists('sa_price_table_repeater', $value) && is_array($value['sa_price_table_repeater']) ? $value['sa_price_table_repeater'] : []);
                            foreach ($datas as $data) {
                                echo '<div class="oxi-addons-main-feature">'; 
                                     echo '<div class="oxi-addons-feature"> 
                                        ' . $this->text_render($data['sa_price_table_feature']) . '
                                        </div>'; 
                                echo '</div>';
                            } 
                    echo  '</div>
                        ' . $button . '
                    </div>
                 </div></div>';
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
            oxiequalHeight($("' . $this->WRAPPER . ' .oxi-addons-wrapper-style-12"));
        }, 500)';
    }
    
 

    public function old_render()
    {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $title = $price_headding = $button = '';
        if ($stylefiles[2] != '') {
            $title .= '<div class="oxi_addons_price_title">' . OxiAddonsTextConvert($stylefiles[2]) . '</div>';
        }
        if ($stylefiles[4] != '') {
        $price_headding .= ' <div class="oxi_addons_price_body_headding">
                                <div class="oxi_addons_price_body_price_month">' . OxiAddonsTextConvert($stylefiles[4]) . '</div>
                            </div>';
        }
        if ($stylefiles[6] != '') {
            $button .= ' <div class="oxi_addons_price_body_button">
                            <a href="' . OxiAddonsUrlConvert($stylefiles[8]) . '" target="' . $styledata[183] . '" class="oxi_addons_price_body_link">' . OxiAddonsTextConvert($stylefiles[6]) . '</a>
                        </div>';
        }
    
        echo '<div class="oxi-addons-container">
                    <div class="oxi-addons-row">
                        <div class="oxi_addons_price_' . $oxiid . '_container">
                            <div class="oxi_addons_price_box"' . OxiAddonsAnimation($styledata, 77) . '>
                                <div class="oxi_addons_price_box_content">
                                    ' . $title . '
                                    <div class="oxi_addons_price_body">
                                        ' . $price_headding . '
                                        <div class="oxi_addons_price_body_content">';
                                    foreach ($listdata as $value) {
                                        $data = explode('||#||', $value['files']);
                                        echo'<div class="oxi_addons_price_feature_list">
                                                <div class="oxi_addons_price_feature">' . OxiAddonsTextConvert($data[1]) . '</div>';
                                        echo'</div>';
                                    }
                                    echo'</div>
                                        ' . $button . '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
        $css = '.oxi_addons_price_' . $oxiid . '_container {
                        width: 100%;
                        float: left;
                    }
                    .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_box {
                        max-width: ' . $styledata[5] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 45) . ';
                        margin: 0 auto; 
                    }
                    .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_box_content {
                        transition: all .3s linear;
                        width: 100%;
                        display: flex;
                        flex-direction: column;
                    }
                    .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_box:hover .oxi_addons_price_box_content {
                        transform: translateY(' . $stylefiles[10] . 'px);
                        transition: all .3s linear;
                    }
                    .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_title {
                        width: 100%;
                        float: left;
                        font-size: ' . $styledata[87] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 289) . ';
                        margin-bottom: 15px;
                        text-transform: uppercase;
                        color: ' . $styledata[91] . ';
                        background: ' . $styledata[93] . ';
                        ' . OxiAddonsFontSettings($styledata, 95) . ';
                        ' . OxiAddonsBoxShadowSanitize($styledata, 117) . ';
                    }
                    .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body {
                        width: 100%;
                        float: left;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 309) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 29) . '; 
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
                        border-style: ' . $styledata[25] . ';
                        border-color: ' . $styledata[26] . ';
                        background: ' . $styledata[3] . ';
                        margin:  ' . OxiAddonsPaddingMarginSanitize($styledata, 61) . ';
                        ' . OxiAddonsBoxShadowSanitize($styledata, 81) . ';
                    }
                    .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_headding {
                        width: 100%;
                        float: left;
                    }
                    .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_price_month {
                        display: block;
                        color: ' . $styledata[127] . ';
                        font-size: ' . $styledata[123] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 137) . ';
                        ' . OxiAddonsFontSettings($styledata, 131) . '
                    }
                    .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_price_month span {
                        font-size: ' . $styledata[305] . 'px;
                        color: ' . $styledata[129] . ';
                    }
                    .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_content {
                        width: 100%;
                        float: left;
                    }
                    .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_content .oxi_addons_price_feature_list {
                        width: 100%;
                        float: left;
                        list-style: none;
                        text-align: center;
                    }
                    .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_content .oxi_addons_price_feature {
                        width: 100%;
                        display: block;
                        font-size: ' . $styledata[153] . 'px;
                        color: ' . $styledata[157] . ';
                        line-height: 1;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 165) . ';
                        ' . OxiAddonsFontSettings($styledata, 159) . '
                    }
                    .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_button {
                        width: 100%;
                        float: left;
                        text-align: ' . $styledata[181] . ';
                        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 201) . ';
                    }
                    .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_link {
                        max-width: 100%;
                        display: inline-block;
                        font-size: ' . $styledata[217] . 'px;
                        color: ' . $styledata[221] . ';
                        background: ' . $styledata[223] . ';
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 229) . ';
                        border-style: ' . $styledata[225] . ';
                        border-color: ' . $styledata[226] . ';
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 185) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 251) . ';
                        ' . OxiAddonsFontSettings($styledata, 245) . '
                    }
                    .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_link:hover {
                        color: ' . $styledata[267] . ';
                        background: ' . $styledata[269] . ';
                        border-color: ' . $styledata[271] . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 273) . ';
                    }
                    
                    @media only screen and (min-width : 669px) and (max-width : 993px){
                        .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_box {
                            max-width: ' . $styledata[6] . 'px;
                            margin: 0 auto;
                        }
                        .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_title {
                            font-size: ' . $styledata[88] . 'px;
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
                        }
                        .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body {
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 310) . ';
                            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 30) . '; 
                            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 10) . ';
                            margin:  ' . OxiAddonsPaddingMarginSanitize($styledata, 62) . ';
                        }
                        .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_price_month {
                            font-size: ' . $styledata[124] . 'px;
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 138) . ';
                        }
                        .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_price_month span {
                            font-size: ' . $styledata[306] . 'px;
                        }
                        .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_content .oxi_addons_price_feature {
                            font-size: ' . $styledata[154] . 'px;
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 166) . ';
                        }
                        .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_button {
                            text-align: ' . $styledata[181] . ';
                            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 202) . ';
                        }
                        .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_link {
                            font-size: ' . $styledata[218] . 'px;
                            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 230) . ';
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 186) . ';
                            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 252) . ';
                        }
                        .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_link:hover {
                            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 274) . ';
                        }
                    
                    }
                    @media only screen and (max-width : 668px){
                        .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_box {
                            max-width: ' . $styledata[7] . 'px;
                            margin: 0 auto;
                        }
                        .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_title {
                            font-size: ' . $styledata[89] . 'px;
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
                        }
                        .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body {
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 311) . ';
                            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . '; 
                            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';
                            margin:  ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . ';
                        }
                        .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_price_month {
                            font-size: ' . $styledata[125] . 'px;
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 139) . ';
                        }
                        .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_price_month span {
                            font-size: ' . $styledata[307] . 'px;
                        }
                        .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_content .oxi_addons_price_feature {
                            font-size: ' . $styledata[155] . 'px;
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 167) . ';
                        }
                        .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_button {
                            text-align: ' . $styledata[181] . ';
                            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 203) . ';
                        }
                        .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_link {
                            font-size: ' . $styledata[219] . 'px;
                            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 231) . ';
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
                            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 253) . ';
                        }
                        .oxi_addons_price_' . $oxiid . '_container .oxi_addons_price_body_link:hover {
                            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 275) . ';
                        }
                    }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
