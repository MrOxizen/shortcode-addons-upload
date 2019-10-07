<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Tooltip\Templates;

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
        $styledata = $this->style;
        $all_data = (array_key_exists('sa_tooltip_data', $styledata) && is_array($styledata['sa_tooltip_data'])) ? $styledata['sa_tooltip_data'] : [];
        foreach ($all_data as $key => $value) {
            $icon = $tooltip = $link = $endlink = '';
            if (array_key_exists('sa_tooltip_icon', $value) && $value['sa_tooltip_icon'] != '') {
                $icon .= $this->font_awesome_render($value['sa_tooltip_icon']);
            }
            if (array_key_exists('sa_tooltip_text', $value) && $value['sa_tooltip_text'] != '') {
                $tooltip .= '<div class="sa_addons_tooltip_text">' . $this->text_render($value['sa_tooltip_text']) . '</div>';
            }
            if (array_key_exists('sa_tooltip_url_open', $value) && $value['sa_tooltip_url_open'] != '0') {
                if ($value['sa_tooltip_url-url'] != '') {
                    $link .= '<a ' . $this->url_render('sa_tooltip_url', $value) . ' class="sa_tooltip_link">';
                    $endlink .= '</a>';
                }
            }
            echo '<div class="sa_addons_tooltip_colum ' . $this->column_render('sa_tooltip_col', $styledata) . '">';
            echo $link;
            echo '<div class="sa_addons_tooltip_container_style_1">
                        <div class="sa_addons_tooltip_style_1 sa_tooltip_unique_' . $key . ' ' . $value['sa_tooltip_posi'] . '">
                            ' . $icon . '
                            ' . $tooltip . '
                        </div>
                    </div>';
            echo $endlink;
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
        if ($styledata[113] == 'top') {
            $pos = 'top: 0%;
                   left: 50%;
                   transform : translate(-50%,-100%);';
            $afterpos = 'top: 100%;
                       left: 50%;
                       border-color: ' . $styledata[143] . ' transparent transparent transparent;
                       transform : translateX(-50%);';
        }
        if ($styledata[113] == 'right') {
            $pos = 'top: 50%;
                   left: 100%;
                   transform : translateY(-50%);';
            $afterpos = 'top: 50%;
                       left: 0%;
                       border-color: transparent ' . $styledata[143] . '  transparent transparent;
                       transform: translateY(-50%) translateX(-100%);';
        }
        if ($styledata[113] == 'left') {
            $pos = 'top: 50%;
                   left: 0%;
                   transform : translate(-100%,-50%);';
            $afterpos = 'top: 50%;
                       left: 100%;
                       border-color: transparent   transparent transparent  ' . $styledata[143] . ' ;
                       transform: translateY(-50%) translateX(0%);';
        }
        if ($styledata[113] == 'bottom') {
            $pos = 'top: 100%;
                   left: 50%; 
                   transform : translateX(-50%);';
            $afterpos = 'top: 0%;
                       left:50%;
                       border-color: transparent   transparent ' . $styledata[143] . ' transparent;
                       transform: translateY(-100%) translateX(-50%);';
        }
        echo '
       <div class="oxi-addons-container "> 
           <div class="oxi-addons-row">
               <div class="oxi-addons-vr-tooltip-section ">  
                   <div class="oxi-addons-vr-tooltip-full-content oxi-addons-vr-' . $oxiid . '">';
        foreach ($listdata as $one_item) {
            $icon = $tooltiptext = '';
            $listfiles = explode('||#||', $one_item['files']);
            if (!empty($listfiles[1])) {
                $icon = '' . oxi_addons_font_awesome($listfiles[1]) . '';
            }
            if (!empty($listfiles[3])) {
                $tooltiptext = '<span class="oxi-addons-vr-tooltiptext">' . OxiAddonsTextConvert($listfiles[3]) . '</span>';
            }
            echo '
                           <div class="' . OxiAddonsItemRows($styledata, 161) . 'oxi-addons-tt-' . $oxiid . '-' . $one_item['id'] . ' ">				
                                   <div class="oxi-tt-center"> 
                                   <a href="' . OxiAddonsUrlConvert($listfiles[5]) . '" target="' . $styledata[181] . '">
                                           <div class="oxi-addons-vr-tooltip">
                                           ' . $icon . '
                                           ' . $tooltiptext . '
                                           </div>
                                   </a>	';

            echo '</div>';
            echo '</div>';
        }
        echo '</div>        
               </div>    
           </div>    
       </div>';
        $css .= '
       .oxi-addons-vr-' . $oxiid . '{
           width :100%;
           float : left ;
       }
       .oxi-tt-center{
           width :100%;
           float : left ;
           text-align : center;
       }
       .oxi-addons-vr-' . $oxiid . '  .oxi-addons-vr-tooltip-section{
           width: 100%;
           float:left;
           padding : 0;
       }
       .oxi-addons-vr-' . $oxiid . ' .oxi-addons-vr-tooltip-full-content{
           width: 100%;
           float:left;
           text-align: center;
           }
       .oxi-addons-vr-' . $oxiid . ' .oxi-addons-vr-tooltip {
           display :inline-block;
           position: relative;
           background : ' . $styledata[63] . ';
           border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 3) . ';
           border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';
           border-style: ' . $styledata[35] . ';
           border-color: ' . $styledata[36] . ';
           ' . OxiAddonsBoxShadowSanitize($styledata, 55) . ';
           margin :' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
       }
       .oxi-addons-vr-' . $oxiid . ' .oxi-addons-vr-tooltip .oxi-icons{
           font-size : ' . $styledata[65] . 'px;
           padding :' . OxiAddonsPaddingMarginSanitize($styledata, 69) . ';
           margin :' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';
           color :	 ' . $styledata[61] . ';
           height :' . $styledata[109] . 'px;
           width:' . $styledata[105] . 'px;
           display: flex;
           align-items: center;
           justify-content: center;
         }
       .oxi-addons-vr-' . $oxiid . ' .oxi-addons-vr-tooltip:hover {
           background:	 ' . $styledata[103] . ';
       }
       .oxi-addons-vr-' . $oxiid . ' .oxi-addons-vr-tooltip:hover .oxi-icons{
           color :	 ' . $styledata[101] . '; 
       }
        .oxi-addons-vr-' . $oxiid . '  .oxi-addons-vr-tooltip span.oxi-addons-vr-tooltiptext {
           visibility: hidden;
           width : 100%;
           color:' . $styledata[115] . ';
           background:' . $styledata[143] . ';
           text-align: center;
           border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 145) . ';
           padding :' . OxiAddonsPaddingMarginSanitize($styledata, 117) . ';
           margin :' . OxiAddonsPaddingMarginSanitize($styledata, 165) . ';
           position: absolute;
           z-index: 1;
           ' . $pos . '
           ' . OxiAddonsFontSettings($styledata, 140) . '
           font-size : ' . $styledata[133] . 'px;
           border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 145) . ';
       } 
        .oxi-addons-vr-' . $oxiid . '  .oxi-addons-vr-tooltip .oxi-addons-vr-tooltiptext::after {
           content: "";
           position: absolute;
           ' . $afterpos . '
           border-width: 5px;
           border-style: solid;
       } 
       .oxi-addons-vr-' . $oxiid . '  .oxi-addons-vr-tooltip:hover .oxi-addons-vr-tooltiptext {
           visibility: visible;
       }
       @media only screen and (min-width : 669px) and (max-width : 993px){ 
               .oxi-addons-vr-' . $oxiid . ' .oxi-addons-vr-tooltip { 
                   border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 4) . ';
                   border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 20) . '; 
                   margin :' . OxiAddonsPaddingMarginSanitize($styledata, 40) . ';
               }
               .oxi-addons-vr-' . $oxiid . ' .oxi-addons-vr-tooltip .oxi-icons{
                   font-size : ' . $styledata[66] . 'px;
                   padding :' . OxiAddonsPaddingMarginSanitize($styledata, 70) . ';
                   margin :' . OxiAddonsPaddingMarginSanitize($styledata, 86) . '; 
                   height :' . $styledata[110] . 'px;
                   width:' . $styledata[106] . 'px; 
               } 
               .oxi-addons-vr-' . $oxiid . '  .oxi-addons-vr-tooltip span.oxi-addons-vr-tooltiptext { 
                   border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 146) . ';
                   padding :' . OxiAddonsPaddingMarginSanitize($styledata, 118) . ';
                   margin :' . OxiAddonsPaddingMarginSanitize($styledata, 166) . '; 
                   font-size : ' . $styledata[134] . 'px;
                   border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 146) . ';
               }  
       }
       @media only screen and (max-width : 668px){
               .oxi-addons-vr-' . $oxiid . ' .oxi-addons-vr-tooltip { 
                   border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';
                   border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . '; 
                   margin :' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
               }
               .oxi-addons-vr-' . $oxiid . ' .oxi-addons-vr-tooltip .oxi-icons{
                   font-size : ' . $styledata[67] . 'px;
                   padding :' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';
                   margin :' . OxiAddonsPaddingMarginSanitize($styledata, 87) . '; 
                   height :' . $styledata[111] . 'px;
                   width:' . $styledata[107] . 'px; 
               } 
               .oxi-addons-vr-' . $oxiid . '  .oxi-addons-vr-tooltip span.oxi-addons-vr-tooltiptext { 
                   border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 147) . ';
                   padding :' . OxiAddonsPaddingMarginSanitize($styledata, 119) . ';
                   margin :' . OxiAddonsPaddingMarginSanitize($styledata, 167) . '; 
                   font-size : ' . $styledata[135] . 'px;
                   border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 147) . ';
               }
       }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
