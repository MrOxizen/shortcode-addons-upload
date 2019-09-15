<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Logo_showcase\Templates;

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

class Style_6 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        foreach ($child as $v) {
            $value = json_decode($v['rawdata'], true);
            $img = $hover_text = $link = $endlink = '';

            if ($value['sa_logo_showcase_url-url'] != '') {
                $link .= '<a ' . $this->url_render('sa_logo_showcase_url', $value) . ' class="sa_logo_showcase_link">';
                $endlink .= '</a>';
            }
            if ($value['sa_logo_showcase_hover_text'] != '') {
                $hover_text .= '<div class="sa_addons_logo_showcase_hover_text">
                            ' . $this->text_render($value['sa_logo_showcase_hover_text']) . '
                            </div>';
            }
            if ($this->media_render('sa_logo_showcase_img', $value) != '') {
                $img .= '<img src="' . $this->media_render('sa_logo_showcase_img', $value) . '" class="sa_addons_img">';
            }
            echo '<div class="' . $this->column_render('sa_logo_showcase_col', $style) . '  ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '">
                    <div class="sa_addons_logo_showcase_container">';
            echo $link;
            echo '<div class="sa_addons_logo_showcase_style_6">
                        ' . $img . '
                        ' . $hover_text . '
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
        $css = '';

        echo '<div class="oxi-addons-container"> <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            $link = $text = '';
            if ($data[3] != '') {
                if ($data[5] != '') {
                    $text = ' <div class="oxi-addons-logo-showcase-hover-text" >
                        ' . OxiAddonsTextConvert($data[5]) . '
                        </div>';
                }
                $link = '<a href="' . OxiAddonsUrlConvert($data[3]) . '" target="' . $styledata[52] . '" class="oxi-addons-logo-showcase-img-' . $oxiid . '">
                        <img src="' . OxiAddonsUrlConvert($data[1]) . '" class="oxi-addons-img">
                       ' . $text . '
                     </a>';
            } elseif ($data[3] == '') {
                $link = '<div class="oxi-addons-logo-showcase-img-' . $oxiid . '"><img src="' . OxiAddonsUrlConvert($data[1]) . '" class="oxi-addons-img"></div>';
            };

            echo '  <div class="oxi-addons-logo-showcase-row-' . $oxiid . ' ' . OxiAddonsItemRows($styledata, 3) . '" ' . OxiAddonsAnimation($styledata, 47) . '>                       
                            ' . $link . '';

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
                overflow: hidden;
                position: relative;
                ' . OxiAddonsBoxShadowSanitize($styledata, 54) . ';
                background: ' . $styledata[60] . ';
                 border-style: ' . $styledata[86] . ';
                border-color: ' . $styledata[87] . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 70) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 89) . ';
                 transition: all 0.5s;
            }
            .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ':hover{
                background: ' . $styledata[62] . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 64) . ';
                transition: all 0.5s;
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
            .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ' .oxi-addons-logo-showcase-hover-text{
                width: 100%;
                 color: ' . $styledata[109] . ';
                background: ' . $styledata[111] . ';
                ' . OxiAddonsFontSettings($styledata, 113) . '
                font-size: ' . $styledata[105] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 119) . ';
                position: absolute;       
                bottom : -50%;
                opacity: 0;
                transition: all 0.3s;
               }
             .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ':hover .oxi-addons-logo-showcase-hover-text{
               bottom : 0;
                transition: all 0.3s;
                opacity: 1;
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
                .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ' .oxi-addons-logo-showcase-hover-text{
                 font-size: ' . $styledata[106] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 120) . ';
               
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
                .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ' .oxi-addons-logo-showcase-hover-text{
                 font-size: ' . $styledata[107] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 121) . ';
               
               }
        }
           ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
