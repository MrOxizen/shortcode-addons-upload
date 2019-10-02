<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Logo_showcase\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_5
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_5 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        foreach ($child as $v) {
            $img = $tooltip = $link = $endlink = '';
            $value = $v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : [];
            if (array_key_exists('sa_logo_showcase_url_open', $value) && $value['sa_logo_showcase_url_open'] != '0') {
                if ($value['sa_logo_showcase_url-url'] != '') {
                    $link .= '<a ' . $this->url_render('sa_logo_showcase_url', $value) . ' class="logo_showcase_link">';
                    $endlink .= '</a>';
                }
            }
            if ($value['sa_logo_showcase_tooltip'] != '') {
                $tooltip .= '<div class="sa_addons_logo_showcase_tooltip">
                            ' . $this->text_render($value['sa_logo_showcase_tooltip']) . '
                            </div>';
            }
            if ($this->media_render('sa_logo_showcase_img', $value) != '') {
                $img .= '<img src="' . $this->media_render('sa_logo_showcase_img', $value) . '" class="sa_addons_img">';
            }
            echo '<div class="' . $this->column_render('sa_logo_showcase_col', $style) . '  ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '">
                    <div class="sa_addons_logo_showcase_container">';
            echo $link;
            echo '<div class="sa_addons_logo_showcase_style_5 ' . $this->array_render('sa_logo_showcase_tooltip_posi', $style) . '" ' . $this->animation_render('sa_logo_showcase_animation', $style) . '>
                            ' . $img . '
                            ' . $tooltip . '
                        </div>';
            echo $endlink;
            echo '</div>';
            if ($admin == 'admin') :
                echo '<div class="oxi-addons-admin-absulote">
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

    public function old_render()
    {

        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = $pos = $afterpos = '';
        if ($styledata[70] == 'top') {
            $pos = 'top: 0%;
				left: 50%;
				transform : translate(-50%,-100%);';
            $afterpos = 'top: 100%;
					left: 50%;
					border-color: ' . $styledata[74] . ' transparent transparent transparent;
					transform : translateX(-50%);';
        }
        if ($styledata[70] == 'right') {
            $pos = 'top: 50%;
				left: 100%;
				transform : translateY(-50%);';
            $afterpos = 'top: 50%;
					left: 0%;
					border-color: transparent ' . $styledata[74] . '  transparent transparent;
					transform: translateY(-50%) translateX(-100%);';
        }
        if ($styledata[70] == 'left') {
            $pos = 'top: 50%;
				left: 0%;
				transform : translate(-100%,-50%);';
            $afterpos = 'top: 50%;
					left: 100%;
					border-color: transparent   transparent transparent  ' . $styledata[74] . ' ;
					transform: translateY(-50%) translateX(0%);';
        }
        if ($styledata[70] == 'bottom') {
            $pos = 'top: 100%;
				left: 50%; 
				transform : translateX(-50%);';
            $afterpos = 'top: 0%;
					left:50%;
					border-color: transparent   transparent ' . $styledata[74] . ' transparent;
					transform: translateY(-100%) translateX(-50%);';
        }
        echo '<div class="oxi-addons-container"> <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            $link = $tooltip = '';
            if ($data[3] != '') {
                if ($data[5] != '') {
                    $tooltip = '<span class="oxi-addons-logoshowcase-tooltiptext">' . OxiAddonsTextConvert($data[5]) . '</span>
                     ';
                }
                $link = '<a href="' . OxiAddonsUrlConvert($data[3]) . '" target="' . $styledata[52] . '" class="oxi-addons-logo-showcase-img-' . $oxiid . '">
                        <img src="' . OxiAddonsUrlConvert($data[1]) . '" class="oxi-addons-img">
                            ' . $tooltip . '
                     </a>';
            } elseif ($data[3] == '') {
                $link = '<div class="oxi-addons-logo-showcase-img-' . $oxiid . '"><img src="' . OxiAddonsUrlConvert($data[1]) . '" class="oxi-addons-img"></div>';
            };

            echo '  <div class="oxi-addons-logo-showcase-row-' . $oxiid . ' ' . OxiAddonsItemRows($styledata, 3) . '" ' . OxiAddonsAnimation($styledata, 47) . '>                       
                            ' . $link . '
                                
                                ';


            echo '</div>';
        }
        echo '</div></div>';
        $css .= '.oxi-addons-container .oxi-addons-logo-showcase-row-' . $oxiid . '{
                position:relative;                
                display: flex;
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';       
            } 
            .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . '{
                max-width: ' . $styledata[7] . 'px;
                width:100%;
                margin: 0 auto;
                float: left;
                position: relative;
                ' . OxiAddonsBoxShadowSanitize($styledata, 54) . ';
                background: ' . $styledata[60] . ';
                  border-style: ' . $styledata[150] . ';
                border-color: ' . $styledata[151] . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 134) . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 153) . ';
                }
            .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ':hover{
                background: ' . $styledata[62] . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 64) . ';
             }
            .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ':after{
                display:block;
                content: "";  
                width:100%;
                padding-bottom:' . $styledata[11] . '%;
            }
            .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ' .oxi-addons-img{
                position:absolute;                
                top:0;
                left:0;
                width:100%;
                height:100%;  
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';        
            }
            .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ' .oxi-addons-logoshowcase-tooltiptext{
            position : absolute;
            color: ' . $styledata[72] . ';
            background : ' . $styledata[74] . ';
            z-index : 99;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 76) . ';        
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 92) . '; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 108) . '; 
            font-size:  ' . $styledata[124] . 'px;
            ' . OxiAddonsFontSettings($styledata, 128) . '
            ' . $pos . '
            display: none;
            } 
            .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ':hover .oxi-addons-logoshowcase-tooltiptext{
               display: block;
             }
            .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ' .oxi-addons-logoshowcase-tooltiptext:after{
            content :"";
            position : absolute;
            border-width : 5px ;
            border-style : solid;
            ' . $afterpos . '
           }
        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-container .oxi-addons-logo-showcase-row-' . $oxiid . '{             
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';       
                } 
                .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . '{
                    max-width: ' . $styledata[8] . 'px;              
                }
                .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ':after{              
                    padding-bottom:' . ($styledata[12] / $styledata[8]) * 100 . '%;
                }
                .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ' .oxi-addons-img{                
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';        
                }
                 .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ' .oxi-addons-logoshowcase-tooltiptext{
                  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 77) . ';        
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . '; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 109) . '; 
                    font-size:  ' . $styledata[125] . 'px;
                    
                    } 
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-container .oxi-addons-logo-showcase-row-' . $oxiid . '{             
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';       
                } 
                .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . '{
                    max-width: ' . $styledata[9] . 'px;              
                }
                .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ':after{              
                    padding-bottom:' . ($styledata[13] / $styledata[9]) * 100 . '%;
                }
                .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ' .oxi-addons-img{                
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';        
                }
                 .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ' .oxi-addons-logoshowcase-tooltiptext{
                  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 78) . ';        
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 94) . '; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 110) . '; 
                    font-size:  ' . $styledata[126] . 'px;
                    
                    } 
        }
           ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
