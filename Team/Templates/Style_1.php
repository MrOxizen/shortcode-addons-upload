<?php

namespace SHORTCODE_ADDONS_UPLOAD\Team\Templates;

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

class Style_1 extends Templates
{
    public function default_render($style, $child, $admin)
    {

        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);

            $name = $desgnation = $image = '';
            if (array_key_exists('sa_price_table_name', $value) && $value['sa_price_table_name'] != '') {
                $name = '<' . $style['sa_team_name_tag'] . ' class="member-name">' . $this->text_render($value['sa_price_table_name']) . '</' . $style['sa_team_name_tag'] . '>';
            }
            if (array_key_exists('sa_price_table_desgnation', $value) && $value['sa_price_table_desgnation'] != '') {
                $desgnation = '<p class="member-role">' . $this->text_render($value['sa_price_table_desgnation']) . '</p>';
            }

            if ($this->media_render('sa_team_front_image', $style) != '') {
                $image = ' 
                    <div  class="oxi-team-pic-size">
                        <img   src="' . $this->media_render('sa_team_front_image', $style) . '" class="oxi_addons__image" alt="front image"/>
                    </div>  
                ';
            }


            echo '<div class="oxi-addons-parent-wrapper-style-1 oxi-addons-parent-wrapper-style-1-'.$v['id'].' ' . ($admin == "admin" ? 'oxi-addons-admin-edit-list' : '') . ' ' . $this->column_render('sa_team_column', $style) . '">
                   <div class="oxi-team-show-body-style-4" ' . $this->animation_render('sa_team_animation', $style) . ' >
                    <div class="oxi-team-show">
                        <div class="member-photo">
                                <div class="oxi-team-pic-size">
                                        ' . $image . '
                                    </div>
                            <div class="member-icons">';
                                    $datas = (array_key_exists('sa_team_repeater', $value) && is_array($value['sa_team_repeater']) ? $value['sa_team_repeater'] : []);
                                        foreach ($datas as $data) {
                                            if ($data['sa_social_icons_url-url'] != '') {
                                                $link = $this->url_render('sa_social_icons_url', $data);
                                            }
                                            if ($data['sa_social_icons_icon'] != '') {
                                                $icon = $this->font_awesome_render($data['sa_social_icons_icon']);
                                            } 
                                            echo '<a ' . $link . ' class = "member-icon member-icon-'.$data['id'].'">' . $icon . '</a>';
                                        }
                            echo  '</div>
                        </div>
                        <div class="member-info">
                            ' . $name . '
                            <div class="member-divider-main">
                                <div class="member-divider"></div>
                            </div>
                            ' . $desgnation . '
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
            $socialoutput = explode("{|}||{|}", $data[7]);
            if ($socialoutput != '{|}{|}') {
                $socialdata .= '<div class="member-icons">';
                foreach ($socialoutput as $SOC) {
                    $rand = rand();
                    if (!empty($SOC)) {
                        $sociallistdata = explode("{|}{|}", $SOC);
                        $socialdata .= ' <a href="' . OxiAddonsUrlConvert($sociallistdata[1]) . '" class="member-icon member-icon-' . $rand . '">' . oxi_addons_font_awesome($sociallistdata[0]) . '</a>';
                        if ($styledata[179] == 'separately') {
                            $css .= '.oxi-addons-team-' . $oxiid . ' .member-icon.member-icon-' . $rand . ' .oxi-icons{
                                    color: ' . $sociallistdata[2] . ';
                                }';
                        }
                        if ($styledata[183] == 'separately') {
                            $css .= '.oxi-addons-team-' . $oxiid . ' .member-icon.member-icon-' . $rand . ' .oxi-icons{
                                     background: ' . $sociallistdata[3] . ';
                                }';
                        }
                        if ($styledata[203] == 'separately') {
                            $css .= '.oxi-addons-team-' . $oxiid . ' .member-icon.member-icon-' . $rand . ' .oxi-icons:hover{
                                    color: ' . $sociallistdata[4] . ';
                                }';
                        }
                        if ($styledata[207] == 'separately') {
                            $css .= '.oxi-addons-team-' . $oxiid . ' .member-icon.member-icon-' . $rand . ' .oxi-icons:hover{
                                    background: ' . $sociallistdata[5] . ';
                                }';
                        }
                    }
                }
                $socialdata .= '</div>';
            }

            echo '<div class="' . OxiAddonsItemRows($styledata, 3) . ' oxi-addons-team-' . $oxiid . ' ' . $styledata[151] . '" ' . OxiAddonsAnimation($styledata, 65) . '>';
            echo '  <div class="oxi-team-show-body">
                        <div class="oxi-team-show  oxi-team-center">
                            <div class="member-photo">
                                <div class="oxi-team-pic-size">
                                    <img src="' . OxiAddonsUrlConvert($data[5]) . '" alt="' . OxiAddonsTextConvert($data[1]) . '">
                                </div>
                                ' . $socialdata . '
                            </div>
                            <div class="member-info ">
                                <h3 class="member-name">' . OxiAddonsTextConvert($data[1]) . '</h3>
                                <div class="member-divider"><div></div></div>
                                <span class="member-role">' . OxiAddonsTextConvert($data[3]) . '</span>
                            </div>
                        </div>
                    </div>';
            echo '</div> ';
        }
        echo ' </div>
            </div> ';

        $css .= '.oxi-addons-team-' . $oxiid . '{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';
                }
                .oxi-addons-team-' . $oxiid . ' .oxi-team-show-body {  
                    -webkit-transform: translateY(0px);
                    -ms-transform: translateY(0px);
                    -moz-transform: translateY(0px);
                    -o-transform: translateY(0px);
                    transform: translateY(0px);
                }
                .oxi-addons-team-' . $oxiid . ' .oxi-team-show-body:hover {
                    -webkit-transform: translateY(-10px);
                    -ms-transform: translateY(-10px);
                    -moz-transform: translateY(-10px);
                    -o-transform: translateY(-10px);
                    transform: translateY(-10px);
                }
                 .oxi-addons-team-' . $oxiid . ' .oxi-team-show{
                    width: 100%;
                    float: left;
                    ' . OxiAddonsBoxShadowSanitize($styledata, 51) . ';
                    -webkit-transform: translateY(0);
                    transform: translateY(0);     
                    -ms-transform: translateY(0);  
                    -o-transform: translateY(0); 
                    -moz-transform: translateY(0); 
                }
                .oxi-addons-team-' . $oxiid . ' .oxi-team-show:hover{
                    ' . OxiAddonsBoxShadowSanitize($styledata, 58) . ';
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
                }
                .oxi-addons-team-' . $oxiid . ' .oxi-team-pic-size{
                    width: 100%;
                    float: left;
                    position: relative;
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
                }
                .oxi-addons-team-' . $oxiid . ' .member-icons{
                    position: absolute;
                    top: 0;
                    z-index: +1;
                    background: ' . $styledata[153] . ';
                    text-align: center;
                    width:' . $styledata[187] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 155) . ';
                    left: -' . $styledata[171] . 'px;
                }
                .oxi-addons-team-' . $oxiid . '.oxi-team-right .member-icons {
                    right: -' . $styledata[171] . 'px;
                    left: auto;
                }
                .oxi-addons-team-' . $oxiid . ' .member-icons:before {
                    content: "";
                    z-index: -1;
                    position: absolute;
                    left: -' . $styledata[171] . 'px;
                    bottom: -' . $styledata[171] . 'px;
                    border: ' . $styledata[171] . 'px solid transparent;
                    border-right-color: ' . $styledata[153] . ';
                }
                .oxi-addons-team-' . $oxiid . '.oxi-team-right .member-icons:before {
                    right: -' . $styledata[171] . 'px;
                    left: auto;
                    border-left-color: ' . $styledata[153] . ';
                    border-right-color: transparent;
                }
                .oxi-addons-team-' . $oxiid . ' .member-icon .oxi-icons {
                    font-size: ' . $styledata[175] . 'px;
                    line-height: ' . $styledata[191] . 'px;
                    color: ' . $styledata[181] . ';
                    background: ' . $styledata[185] . '; 
                    height:' . $styledata[191] . 'px;
                    display: block;
                    width: 100%;
                }
                .oxi-addons-team-' . $oxiid . ' .member-icon .oxi-icons:hover {
                    color: ' . $styledata[205] . ';
                    background: ' . $styledata[209] . '; 
                 }
                .oxi-addons-team-' . $oxiid . ' .member-info {
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';
                    width: 100%;                
                    float:left;
                    display:flex;
                    flex-direction:column;
                    ' . OxiAddonsBGImage($styledata, 7) . '
                }
                .oxi-addons-team-' . $oxiid . ' .member-name {
                    font-size: ' . $styledata[69] . 'px;
                    margin: 0;
                    margin-bottom: 0px;
                    margin-top: 0px;
                    color: ' . $styledata[73] . ';
                    ' . OxiAddonsFontSettings($styledata, 75) . '
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
                }
                .oxi-addons-team-' . $oxiid . ' .member-divider {
                   width: 100%;
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 107) . ';
                   justify-content: ' . $styledata[197] . ';
                   display:flex;
                }
                .oxi-addons-team-' . $oxiid . ' .member-divider  div{
                    width: 100%;
                    max-width: ' . $styledata[97] . 'px;
                    border-top:' . $styledata[101] . 'px ' . $styledata[102] . ' ' . $styledata[105] . ';
                }
                .oxi-addons-team-' . $oxiid . ' span.member-role {
                    font-size: ' . $styledata[123] . 'px;
                    margin: 0;
                    margin-bottom: 0px;
                    margin-top: 0px;
                    color: ' . $styledata[127] . ';
                    ' . OxiAddonsFontSettings($styledata, 129) . '
                     padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 135) . ';    
                } 
                @media only screen and (min-width : 669px) and (max-width : 993px){
                    .oxi-addons-team-' . $oxiid . '{
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 28) . ';
                    }
                    .oxi-addons-team-' . $oxiid . ' .oxi-team-show-body{
                        max-width: ' . $styledata[44] . 'px;
                    }
                    .oxi-addons-team-' . $oxiid . ' .oxi-team-pic-size:after{
                        padding-bottom: ' . ($styledata[48] / $styledata[44] * 100) . '%;
                    }
                    .oxi-addons-team-' . $oxiid . ' .member-icons{
                        width:' . $styledata[188] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 156) . ';
                        left: -' . $styledata[172] . 'px;
                    }
                    .oxi-addons-team-' . $oxiid . '.oxi-team-right .member-icons {
                        right: -' . $styledata[172] . 'px;
                    }
                    .oxi-addons-team-' . $oxiid . ' .member-icons:before {
                        left: -' . $styledata[172] . 'px;
                        bottom: -' . $styledata[172] . 'px;
                        border: ' . $styledata[172] . 'px solid transparent;
                     }
                    .oxi-addons-team-' . $oxiid . '.oxi-team-right .member-icons:before {
                        right: -' . $styledata[172] . 'px;
                    }
                    .oxi-addons-team-' . $oxiid . ' .member-icon .oxi-icons {
                        font-size: ' . $styledata[176] . 'px;
                        line-height: ' . $styledata[192] . 'px;
                         height:' . $styledata[192] . 'px;
                    }
                    .oxi-addons-team-' . $oxiid . ' .member-info {
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 12) . ';
                     }
                    .oxi-addons-team-' . $oxiid . ' .member-name {
                        font-size: ' . $styledata[70] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
                    }
                    .oxi-addons-team-' . $oxiid . ' .member-divider {
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 108) . ';
                    }
                    .oxi-addons-team-' . $oxiid . ' .member-divider  div{
                        max-width: ' . $styledata[98] . 'px;
                        border-top:' . $styledata[102] . 'px ' . $styledata[102] . ' ' . $styledata[105] . ';
                    }
                    .oxi-addons-team-' . $oxiid . ' span.member-role {
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
                    .oxi-addons-team-' . $oxiid . ' .oxi-team-pic-size:after{
                        padding-bottom: ' . ($styledata[49] / $styledata[45] * 100) . '%;
                    }
                    .oxi-addons-team-' . $oxiid . ' .member-icons{
                        width:' . $styledata[189] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 157) . ';
                        left: -' . $styledata[173] . 'px;
                    }
                    .oxi-addons-team-' . $oxiid . '.oxi-team-right .member-icons {
                        right: -' . $styledata[173] . 'px;
                    }
                    .oxi-addons-team-' . $oxiid . ' .member-icons:before {
                        left: -' . $styledata[173] . 'px;
                        bottom: -' . $styledata[173] . 'px;
                        border: ' . $styledata[173] . 'px solid transparent;
                     }
                    .oxi-addons-team-' . $oxiid . '.oxi-team-right .member-icons:before {
                        right: -' . $styledata[173] . 'px;
                    }
                    .oxi-addons-team-' . $oxiid . ' .member-icon .oxi-icons {
                        font-size: ' . $styledata[177] . 'px;
                        line-height: ' . $styledata[193] . 'px;
                         height:' . $styledata[193] . 'px;
                    }
                    .oxi-addons-team-' . $oxiid . ' .member-info {
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ';
                     }
                    .oxi-addons-team-' . $oxiid . ' .member-name {
                        font-size: ' . $styledata[71] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
                    }
                    .oxi-addons-team-' . $oxiid . ' .member-divider {
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 109) . ';
                    }
                    .oxi-addons-team-' . $oxiid . ' .member-divider  div{
                        max-width: ' . $styledata[99] . 'px;
                        border-top:' . $styledata[103] . 'px ' . $styledata[102] . ' ' . $styledata[105] . ';
                    }
                    .oxi-addons-team-' . $oxiid . ' span.member-role {
                        font-size: ' . $styledata[125] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 137) . ';    
                    } 
                }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
