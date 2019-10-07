<?php

namespace SHORTCODE_ADDONS_UPLOAD\Logo_showcase\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_2
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_2 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $styledata = $this->style;
        $all_data = (array_key_exists('sa_logo_showcase_data', $styledata) && is_array($styledata['sa_logo_showcase_data'])) ? $styledata['sa_logo_showcase_data'] : [];
        foreach ($all_data as $value) {
            $img = $link = $endlink = '';

            if (array_key_exists('sa_logo_showcase_url_open', $value) && $value['sa_logo_showcase_url_open'] != '0') {
                if ($value['sa_logo_showcase_url-url'] != '') {
                    $link .= '<a ' . $this->url_render('sa_logo_showcase_url', $value) . ' class="logo_showcase_link">';
                    $endlink .= '</a>';
                }
            }
            if ($this->media_render('sa_logo_showcase_img', $value) != '') {
                $img .= '<img src="' . $this->media_render('sa_logo_showcase_img', $value) . '" class="sa_addons_img">';
            }
            echo '<div class="' . $this->column_render('sa_logo_showcase_col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '">
                    <div class="sa_addons_logo_showcase_container">';
            echo $link;
            echo '<div class="sa_addons_logo_showcase_style_2" ' . $this->animation_render('sa_logo_showcase_animation', $style) . '>
                            ' . $img . '
                        </div>';
            echo $endlink;
            echo '</div>';
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
            $link = '';
            if ($data[3] != '') {
                $link = '<a href="' . OxiAddonsUrlConvert($data[3]) . '" target="' . $styledata[52] . '" class="oxi-addons-logo-showcase-img-' . $oxiid . '">
                        <img src="' . OxiAddonsUrlConvert($data[1]) . '" class="oxi-addons-img">
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
                position: relative;                
                ' . OxiAddonsBoxShadowSanitize($styledata, 54) . ';
                
            }
            .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ':after{
                display:block;
                content: "";  
                width:100%;
                padding-bottom:' . ($styledata[11] / $styledata[7]) * 100 . '%;
            }
            .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ' .oxi-addons-img{
                position:absolute;                
                top:0;
                left:0;
                width:100%;
                height:100%;  
                filter: grayscale(' . $styledata[60] . '%);
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';        
            }
            .oxi-addons-container .oxi-addons-logo-showcase-img-' . $oxiid . ':hover .oxi-addons-img{
                filter: grayscale(' . $styledata[62] . '%);
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
        }
           ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
