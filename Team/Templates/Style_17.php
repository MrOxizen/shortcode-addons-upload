<?php

namespace SHORTCODE_ADDONS_UPLOAD\Team\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_15
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_17 extends Templates
{
    public function default_render($style, $child, $admin)
    {

        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);

            $name = $desgnation = $image = $link = $divider = '';
            if (array_key_exists('sa_price_table_name', $value) && $value['sa_price_table_name'] != '') {
                $name = '<span><' . $style['sa_team_name_tag'] . ' class="member-name">' . $this->text_render($value['sa_price_table_name']) . '</' . $style['sa_team_name_tag'] . '></span>';
            }
            if (array_key_exists('sa_price_table_desgnation', $value) && $value['sa_price_table_desgnation'] != '') {
                $desgnation = '<span><p class="member-role">' . $this->text_render($value['sa_price_table_desgnation']) . '</p></span>';
            }

            if ($this->media_render('sa_team_front_image', $value) != '') {
                $image = ' 
                    <div class="oxi-team-pic-size">
                        <img  src="' . $this->media_render('sa_team_front_image', $value) . '" class="oxi_addons__image" alt="front image"/>
                    </div>  
                ';
            }
            if (array_key_exists('sa_divider_switter', $style) && $style['sa_divider_switter'] == 'yes') {
                $divider = '<div class="member-divider-main">
                                <div class="member-divider"></div>
                            </div>';
            }
            echo '';
            echo '<div class="oxi-addons-parent-wrapper-style-17 oxi-addons-parent-wrapper-style-17-' . $v['id'] . ' ' . ($admin == "admin" ? 'oxi-addons-admin-edit-list' : '') . ' ' . $this->column_render('sa_team_column', $style) . '">
                    <div class="oxi-team-show-body-style-17" ' . $this->animation_render('sa_team_animation', $style) . ' >
                        <div class="oxi-team-show">
                            <div class="member-photo">
                                <div class="oxi-team-pic-size">
                                    ' . $image . '
                                    <div class="member-info">
                                        ' . $name . '
                                        ' . $divider . '
                                        ' . $desgnation . '
                                    </div>
                                </div>   
                                <div class="member-icons">'; 
                                        $datas = (array_key_exists('sa_team_repeater', $value) && is_array($value['sa_team_repeater']) ? $value['sa_team_repeater'] : []);
                                        foreach ($datas as $key => $data) {
                                            if ($data['sa_social_icons_url-url'] != '') {
                                                $link = $this->url_render('sa_social_icons_url', $data);
                                            }
                                                if ($data['sa_social_icons_icon'] != '') {
                                                $icon = $this->font_awesome_render($data['sa_social_icons_icon']);
                                            }
                                            echo '<a ' . $link . ' class = "member-icon ' . $style['sa_social_icons_border'] . ' member-icon-' . $key . '">' . $icon . '</a>';
                                        }
                                echo  '</div>
                            </div> 
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
    public function inline_public_css()
    {
        $childdata = $this->child;
        $styledata = $this->style;
        $align = '';
        if($styledata['sa_team_main_alignment'] == 'left'){
            $align = 'transform: translateX(-100%);';
        }else{
            $align = 'transform: translateX(100%);';
        }

        $align = '';
        if($styledata['sa_team_main_alignment'] == 'left'){
            $align = 'transform: translateX(-100%);';
        }else{
            $align = 'transform: translateX(100%);';
        }
        
        

        $css = '';
        foreach ($childdata as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);

            $datas = (array_key_exists('sa_team_repeater', $value) && is_array($value['sa_team_repeater']) ? $value['sa_team_repeater'] : []);

            foreach ($datas as $key => $data) {
                $css .= '.' . $this->WRAPPER . ' .oxi-addons-parent-wrapper-style-17.oxi-addons-parent-wrapper-style-17-' . $v['id'] . ' .member-icon.member-icon-' . $key . ' .oxi-icons{
                            ' . (($styledata["sa_social_icons_position"] == "separately") ? 'color: ' . $data['sa_social_icons_color'] . ';' : '' ) . '
                            
                            }
                        .' . $this->WRAPPER . ' .oxi-addons-parent-wrapper-style-17.oxi-addons-parent-wrapper-style-17-' . $v['id'] . ' .member-icon.member-icon-' . $key . '{
                            ' . (($styledata["sa_social_icons_position"] == "separately") ? 'background: ' . $data['sa_social_icons_bg_color'] . ';' : '' ) . '
                            }
                        .' . $this->WRAPPER . ' .oxi-addons-parent-wrapper-style-17.oxi-addons-parent-wrapper-style-17-' . $v['id'] . ' .member-icon.member-icon-' . $key . '{
                            ' . (($styledata["sa_social_icons_position"] == "separately") ? 'border-color: ' . $data['sa_social_icons_border_color'] . ';' : '' ) . '
                            }
                        .' . $this->WRAPPER . ' .oxi-addons-parent-wrapper-style-17.oxi-addons-parent-wrapper-style-17-' . $v['id'] . ' .member-icon.member-icon-' . $key . ':hover .oxi-icons{
                            ' . (($styledata["sa_social_icons_position"] == "separately") ? 'color: ' . $data['sa_social_icons_color_hover'] . ';' : '' ) . '
                           }
                           .' . $this->WRAPPER . ' .oxi-addons-parent-wrapper-style-17.oxi-addons-parent-wrapper-style-17-' . $v['id'] . ' .member-icon.member-icon-' . $key . ':hover{
                            ' . (($styledata["sa_social_icons_position"] == "separately") ? 'background: ' . $data['sa_social_icons_bg_color_hover'] . ';' : '' ) . '
                        }
                        .' . $this->WRAPPER . ' .oxi-addons-parent-wrapper-style-17.oxi-addons-parent-wrapper-style-17-' . $v['id'] . ' .member-icon.member-icon-' . $key . ':hover{
                            ' . (($styledata["sa_social_icons_position"] == "separately") ? 'border-color: ' . $data['sa_social_icons_border_hover_color'] . ';' : '' ) . '
                        }';
            }
        }
        return '.' . $this->WRAPPER . ' .oxi-addons-parent-wrapper-style-17 .oxi-team-show-body-style-17:hover .member-name,
                .' . $this->WRAPPER . ' .oxi-addons-parent-wrapper-style-17 .oxi-team-show-body-style-17:hover .member-role{
                    '.$align.'
             }'.$css;
    }

    public function old_render()
    {
        $listdata = $this->child;
        $styledata = $this->dbdata;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';
        echo '<div class="oxi-addons-container">
                <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $listid = $value['id'];
            $data = explode('||#||', $value['files']);
            $socialdata = '';
            if ($data[7] != '{|}{|}') {
                $socialmodal = explode("{|}||{|}", $data[7]);
                $socialdata .= '<div class="member-icons">';
                foreach ($socialmodal as $SOC) {
                    $rand = rand();
                    if (!empty($SOC)) {
                        $socialalldata = explode("{|}{|}", $SOC);
                        $socialdata .= ' <a href="' . OxiAddonsUrlConvert($socialalldata[1]) . '" class="member-icon member-iconsdd member-icon-' . $rand . '">' . oxi_addons_font_awesome($socialalldata[0]) . '</a>';
                        $socialstyle = explode("{|}||{|}", $stylefiles[1]);
                        foreach ($socialstyle as $socialSS) {
                            $styledatacss = explode("{|}{|}", $socialSS);
                           if (!empty($styledatacss[1]) && $styledatacss[1] == $socialalldata[0]) {
                                $css .= '   .oxi-addons-team-' . $oxiid . ' .member-icon.member-icon-' . $rand . ' .oxi-icons{
                                                color: ' . $styledatacss[2] . ';
                                            }
                                            .oxi-addons-team-' . $oxiid . ' .member-icon.member-icon-' . $rand . '{
                                                background: ' . $styledatacss[3] . ';
                                                border-color: ' . $styledatacss[4] . ' !important;
                                            }
                                            .oxi-addons-team-' . $oxiid . ' .member-icon:hover.member-icon-' . $rand . ' .oxi-icons{
                                                color: ' . $styledatacss[5] . ';
                                            }
                                            .oxi-addons-team-' . $oxiid . ' .member-icon:hover.member-icon-' . $rand . '{
                                                background: ' . $styledatacss[6] . ';
                                                border-color: ' . $styledatacss[7] . ' !important;
                                            }';
                            }
                        }
                    }
                }
                $socialdata .= '</div>';
            }
            echo '<div class="' . OxiAddonsItemRows($styledata, 3) . ' oxi-addons-team-' . $oxiid . '   " ' . OxiAddonsAnimation($styledata, 65) . '>';
            echo '  <div class="oxi-team-show-body">
                        <div class="oxi-team-show  oxi-team-center">
                            <div class="member-photo">
                                <div class="oxi-team-pic-size">
                                    <img src="' . OxiAddonsUrlConvert($data[5]) . '" alt="' . OxiAddonsTextConvert($data[1]) . '">
                                    <div class="member-info ">
                                        <span>
                                        <h3 class="member-name">' . OxiAddonsTextConvert($data[1]) . '</h3>
                                        </span> 
                                        <span>
                                            <div class="member-role">' . OxiAddonsTextConvert($data[3]) . '</div>
                                        </span>       
                                    </div>   
                                </div>
                                ' . $socialdata . ' 
                            </div>
                        </div>
                    </div>'; 
            echo '</div> ';
        }
        echo ' </div>
            </div> ';
        $Bordercolor = strpos($styledata[97], 'Left');
        if ($Bordercolor === FALSE) {
            $css .= '.oxi-addons-team-' . $oxiid . ' .member-icon.member-iconsdd{
                            border-left-color: transparent !important;
                         }';
        }
        $Bordercolor = strpos($styledata[97], 'Right');
        if ($Bordercolor === FALSE) {
            $css .= '.oxi-addons-team-' . $oxiid . ' .member-icon.member-iconsdd{
                            border-right-color: transparent !important;
                         }';
        }
        $Bordercolor = strpos($styledata[97], 'Top');
        if ($Bordercolor === FALSE) {
            $css .= '.oxi-addons-team-' . $oxiid . ' .member-icon.member-iconsdd{
                            border-top-color: transparent !important;
                         }';
        }
        $Bordercolor = strpos($styledata[97], 'Bottom');
        if ($Bordercolor === FALSE) {
            $css .= '.oxi-addons-team-' . $oxiid . ' .member-icon.member-iconsdd{
                            border-bottom-color: transparent !important;
                         }';
        }
        $Bordercolor = strpos($styledata[99], 'Left');
        if ($Bordercolor === FALSE) {
            $css .= '.oxi-addons-team-' . $oxiid . ' .member-icon:hover.member-iconsdd{
                            border-left-color: transparent !important;
                         }';
        }
        $Bordercolor = strpos($styledata[99], 'Right');
        if ($Bordercolor === FALSE) {
            $css .= '.oxi-addons-team-' . $oxiid . ' .member-icon:hover.member-iconsdd{
                            border-right-color: transparent !important;
                         }';
        }
        $Bordercolor = strpos($styledata[99], 'Top');
        if ($Bordercolor === FALSE) {
            $css .= '.oxi-addons-team-' . $oxiid . ' .member-icon:hover.member-iconsdd{
                            border-top-color: transparent !important;
                         }';
        }
        $Bordercolor = strpos($styledata[99], 'Bottom');
        if ($Bordercolor === FALSE) {
            $css .= '.oxi-addons-team-' . $oxiid . ' .member-icon:hover.member-iconsdd{
                            border-bottom-color: transparent !important;
                         }';
        }
    
        if ($styledata[179] == 'right') {
            $css .= '.oxi-addons-team-' . $oxiid . ':hover .member-name,'
                    . ' .oxi-addons-team-' . $oxiid . ':hover .member-role{
                    transform: translateX(200%);
                }';
        } elseif ($styledata[179] == 'center') {
            $css .= '.oxi-addons-team-' . $oxiid . ':hover .member-name, '
                    . '.oxi-addons-team-' . $oxiid . ':hover .member-role{
                    transform: translateY(300%);
                }';
        } else {
            $css .= '.oxi-addons-team-' . $oxiid . ':hover .member-name, '
                    . '.oxi-addons-team-' . $oxiid . ':hover .member-role{
                    transform: translateX(-200%);
                }';
        }
        $css .= '.oxi-addons-team-' . $oxiid . '{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';
                }
                .oxi-addons-team-' . $oxiid . ' .oxi-team-show-body {
                    -webkit-transform: translateY(0px);
                    -ms-transform: translateY(0px) translateX(0px);
                    -moz-transform:translateY(0px) translateX(0px);
                    -o-transform: translateY(0px) translateX(0px);
                    transform: translateY(0px) translateX(0px);
                }
                .oxi-addons-team-' . $oxiid . ' .oxi-team-show-body:hover {
                    -webkit-transform: translateY(' . $styledata[105] . 'px) translateX(' . $styledata[103] . 'px);
                    -ms-transform: translateY(' . $styledata[105] . 'px) translateX(' . $styledata[103] . 'px);
                    -moz-transform: translateY(' . $styledata[105] . 'px) translateX(' . $styledata[103] . 'px);
                    -o-transform: translateY(' . $styledata[105] . 'px) translateX(' . $styledata[103] . 'px);
                    transform: translateY(' . $styledata[105] . 'px) translateX(' . $styledata[103] . 'px);
                }
                 .oxi-addons-team-' . $oxiid . ' .oxi-team-show{
                    width: 100%;
                    float: left;
                    position:relative;                             
                    -webkit-transform: translateY(0) translateX(0); 
                    transform: translateY(0) translateX(0); 
                    -ms-transform: translateY(0) translateX(0); 
                    -o-transform: translateY(0) translateX(0); 
                    -moz-transform: translateY(0) translateX(0); 
                }
                .oxi-addons-team-' . $oxiid . ' .oxi-team-show-body{
                    max-width: ' . $styledata[43] . 'px;
                    width: 100%;
                    margin: 0 auto;
                }
                .oxi-addons-team-' . $oxiid . ' .member-photo {
                    position: relative;
                    width: 100%;
                    float:left;
                    display: flex;
                    align-items: flex-end;
                    border-radius: 50%;
                    padding:' . ($styledata[59] + $styledata[51]) . 'px;
                }
                .oxi-addons-team-' . $oxiid . ' .member-photo:before {
                    content:"";
                    display: block;
                    position: absolute;
                    width: 100%;
                    top: 0;
                    left: 0;
                    height: 100%;
                    transition: all 1.2s ease-in-out;
                    border: ' . $styledata[51] . 'px solid;
                    border-radius: 50%;
                    border-left-color: ' . $styledata[55] . ';
                    border-top-color:  ' . $styledata[55] . ';
                    border-right-color: ' . $styledata[57] . ';
                    border-bottom-color: ' . $styledata[57] . ';
                }
                .oxi-addons-team-' . $oxiid . ':hover .member-photo::before {
                    transform: rotate(180deg);
                }
                .oxi-addons-team-' . $oxiid . ' .oxi-team-pic-size{
                    width: 100%;
                    float: left;
                    position: relative;
                    overflow:hidden;
                }
                .oxi-addons-team-' . $oxiid . ' .oxi-team-pic-size:after{
                    padding-bottom: ' . ($styledata[47] / $styledata[43] * 100) . '%;
                    content: "";
                    display: block;
                }
                .oxi-addons-team-' . $oxiid . ' .oxi-team-pic-size img{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    display: block;
                    border-radius: 50%;
                    z-index: 1;
                }
                .oxi-addons-team-' . $oxiid . ' .member-icons{
                    position: absolute;
                    top: ' . ($styledata[59] + $styledata[51]) . 'px;
                    left: ' . ($styledata[59] + $styledata[51]) . 'px;
                    bottom: ' . ($styledata[59] + $styledata[51]) . 'px;
                    right: ' . ($styledata[59] + $styledata[51]) . 'px;
                    display: flex;
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    justify-content: center;  
                    webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    opacity: 0;
                    border-radius: 50%;
                    background: ' . $styledata[185] . ';
                }
                .oxi-addons-team-' . $oxiid . ':hover .member-icons{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 107) . ';   
                    opacity:1;
                    height:auto;
                    z-index:1;
                }
                .oxi-addons-team-' . $oxiid . ' .member-icon{
                    line-height: ' . $styledata[191] . 'px;               
                    border:' . $styledata[211] . 'px ' . $styledata[101] . ';
                    height:' . $styledata[191] . 'px;
                    width:' . $styledata[187] . 'px;
                    display: flex;
                    align-items:center;
                    justify-content:center;
                    Border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 243) . ';  
                    margin:' . OxiAddonsPaddingMarginSanitize($styledata, 259) . ';  
                }            
                .oxi-addons-team-' . $oxiid . ' .member-icon .oxi-icons {
                    font-size: ' . $styledata[175] . 'px;
                }
                .oxi-addons-team-' . $oxiid . ' .member-info {                
                    width: 100%;
                    float: left;
                    position: absolute;
                    bottom:' . $styledata[151] . 'px;
                    display:flex;
                    flex-direction:column;
                    z-index:+1;
                }
                .oxi-addons-team-' . $oxiid . ' .member-info {
                    width:100%;
                    left:0;
                    text-align:' . $styledata[179] . ';
                }            
                .oxi-addons-team-' . $oxiid . ' .member-info span {
                    width:100%;
                    float:right;
                }
                .oxi-addons-team-' . $oxiid . ' .member-name {
                    font-size: ' . $styledata[69] . 'px;
                    display: inline-block;                
                    background: ' . $styledata[7] . ';     
                    bottom:0;
                    color: ' . $styledata[73] . ';
                    ' . OxiAddonsFontSettings($styledata, 75) . '
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
                    transition: all 0.5s linear ;    
                }
                .oxi-addons-team-' . $oxiid . ' .member-role {
                    font-size: ' . $styledata[123] . 'px;
                    display: inline-block;
                    color: ' . $styledata[127] . ';
                    background: ' . $styledata[9] . ';    
                    ' . OxiAddonsFontSettings($styledata, 129) . '
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 135) . ';  
                    transition: all 0.5s linear ;    
                } 
                @media only screen and (min-width : 669px) and (max-width : 993px){
                        .oxi-addons-team-' . $oxiid . '{
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 28) . ';
                        }
                        .oxi-addons-team-' . $oxiid . ' .oxi-team-show-body{
                            max-width: ' . $styledata[44] . 'px;
                        }
                        .oxi-addons-team-' . $oxiid . ' .member-photo {                        
                            padding:' . ($styledata[60] + $styledata[52]) . 'px;
                        }
                        .oxi-addons-team-' . $oxiid . ' .member-photo:before {
                            border: ' . $styledata[52] . 'px solid;
                        }
                        .oxi-addons-team-' . $oxiid . ' .oxi-team-pic-size:after{
                            padding-bottom: ' . ($styledata[48] / $styledata[44] * 100) . '%;
                        }
                        .oxi-addons-team-' . $oxiid . ' .member-icons{
                           
                            top: ' . ($styledata[60] + $styledata[52]) . 'px;
                            left: ' . ($styledata[60] + $styledata[52]) . 'px;
                            bottom: ' . ($styledata[60] + $styledata[52]) . 'px;
                            right: ' . ($styledata[60] + $styledata[52]) . 'px;
                        }
                        .oxi-addons-team-' . $oxiid . ':hover .member-icons{
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 108) . '; 
                        }
                        .oxi-addons-team-' . $oxiid . ' .member-icon{
                            line-height: ' . $styledata[192] . 'px;               
                            border:' . $styledata[212] . 'px ' . $styledata[101] . ';
                            height:' . $styledata[192] . 'px;
                            width:' . $styledata[188] . 'px;
                            Border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 244) . ';  
                            margin:' . OxiAddonsPaddingMarginSanitize($styledata, 260) . ';  
                        }            
                        .oxi-addons-team-' . $oxiid . ' .member-icon .oxi-icons {
                            font-size: ' . $styledata[176] . 'px;
                        }
                        .oxi-addons-team-' . $oxiid . ' .member-name {
                            font-size: ' . $styledata[70] . 'px;                       
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
                        }
                        .oxi-addons-team-' . $oxiid . ' .member-role {
                            font-size: ' . $styledata[124] . 'px;                        
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 136) . '; 
                        } 
                }
                @media only screen and (max-width : 668px){ 
                    .oxi-addons-team-' . $oxiid . '{
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 29) . ';
                        }
                        .oxi-addons-team-' . $oxiid . ' .oxi-team-show-body{
                            max-width: ' . $styledata[45] . 'px;
                        }
                        .oxi-addons-team-' . $oxiid . ' .member-photo {                        
                            padding:' . ($styledata[61] + $styledata[53]) . 'px;
                        }
                        .oxi-addons-team-' . $oxiid . ' .member-photo:before {
                            border: ' . $styledata[53] . 'px solid;
                        }
                        .oxi-addons-team-' . $oxiid . ' .oxi-team-pic-size:after{
                            padding-bottom: ' . ($styledata[49] / $styledata[45] * 100) . '%;
                        }
                        .oxi-addons-team-' . $oxiid . ' .member-icons{
                            top: ' . ($styledata[61] + $styledata[53]) . 'px;
                            left: ' . ($styledata[61] + $styledata[53]) . 'px;
                            bottom: ' . ($styledata[61] + $styledata[53]) . 'px;
                            right: ' . ($styledata[61] + $styledata[53]) . 'px;
                        }
                        .oxi-addons-team-' . $oxiid . ':hover .member-icons{
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 109) . '; 
                        }
                        .oxi-addons-team-' . $oxiid . ' .member-icon{
                            line-height: ' . $styledata[193] . 'px;               
                            border:' . $styledata[213] . 'px ' . $styledata[101] . ';
                            height:' . $styledata[193] . 'px;
                            width:' . $styledata[189] . 'px;
                            Border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 245) . ';  
                            margin:' . OxiAddonsPaddingMarginSanitize($styledata, 261) . ';  
                        }            
                        .oxi-addons-team-' . $oxiid . ' .member-icon .oxi-icons {
                            font-size: ' . $styledata[177] . 'px;
                        }
                        .oxi-addons-team-' . $oxiid . ' .member-name {
                            font-size: ' . $styledata[71] . 'px;                       
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
                        }
                        .oxi-addons-team-' . $oxiid . ' .member-role {
                            font-size: ' . $styledata[125] . 'px;                        
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 137) . '; 
                        } 
                }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
