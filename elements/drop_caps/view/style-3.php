<?php

if (!defined('ABSPATH'))
    exit;

function oxi_drop_caps_style_3_shortcode($styledata = FALSE, $listdata = FALSE, $user = 'user') {
    $stylename = $styledata['style_name'];
    $oxiid = $styledata['id'];
    $stylefiles = explode('||#||', $styledata['css']);
    $css = '';

    $styledata = explode('|', $stylefiles[0]);
    echo '<div class="oxi-addons-drop-caps-' . $oxiid . '"  ' . OxiAddonsAnimation($styledata, 35) . '>' . $stylefiles[3] . '</div>';
    $css .= '
            .oxi-addons-drop-caps-' . $oxiid . '{ 
                display: inline-block;
                float: ' . $stylefiles[7] . ';
                display: inline-flex;
                line-height: 1;
                justify-content: center;
                align-items: center;
                color: ' . $styledata[43] . ';
                font-size: ' . $styledata[39] . 'px;
                font-family: ' . oxi_addons_font_familly($styledata[45]) . ' !important;
                font-style: ' . $styledata[49] . ' !important;
                font-weight: ' . $styledata[47] . ' !important;
                border-radius: ' . $styledata[53] . '%;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 55) . ';
                border-style:' . $styledata[72] . '; 
                border-color:' . $styledata[73] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 3) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-drop-caps-' . $oxiid . '{ 
                   font-size: ' . $styledata[40] . 'px;
                   border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 56) . ';
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 4) . ';
                   margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 20) . ';
               }  
            }
            @media only screen and (max-width : 668px){
               .oxi-addons-drop-caps-' . $oxiid . '{ 
                   font-size: ' . $styledata[41] . 'px;
                   border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 57) . ';
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';
                   margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . ';
               }  
            }';

          echo OxiAddonsInlineCSSData($css);
    echo OxiAddonsInlineCSSData('setTimeout(function () { OxiAddonsEqualHeightWidth(".oxi-addons-drop-caps-' . $oxiid . '");}, 500)','js');

}
