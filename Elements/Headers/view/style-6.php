<?php

if (!defined('ABSPATH')) {
    exit;
}

function oxi_headers_style_6_shortcode($styledata = false, $listdata = false, $user = 'user')
{
    $oxiid = $styledata['id'];
    $stylefiles = explode('||#||', $styledata['css']);
    $styledata = explode('|', $stylefiles[0]);
   $icon = '';
   $css = '';
   if ($stylefiles[2] != '' && $stylefiles[6] != '') {
    $icon = '
        <div class="oxi-addons-main-icon"> 
            <a href="' . OxiAddonsUrlConvert($stylefiles[6]) . '" id="' . OxiAddonsTextConvert($stylefiles[4]) . '"  class="oxi-addons-link"  target="' . $styledata[21] . '" ' . OxiAddonsAnimation($styledata, 103) . '>
                ' . oxi_addons_font_awesome('' . $stylefiles[2] . '') . '
            </a> 
        </div>
    ';
} elseif ($stylefiles[2] != '' && $stylefiles[6] == '') {
    $icon = '
        <div class="oxi-addons-main-icon" id="' . OxiAddonsTextConvert($stylefiles[4]) . '"> 
               ' . oxi_addons_font_awesome('' . $stylefiles[2] . '') . '
        </div>
    ';
}
    echo '<div class="oxi-addons-container">
			<div class="oxi-addons-row">
				<div class="oxi-addons-wrapper-' . $oxiid . '"> 
						' . $icon . ' 
				</div>
			</div>
        </div>
        ';
 
 
    $css = '
        .oxi-addons-wrapper-' . $oxiid . '{ 
            width: 100%;
            float: left; 
            overflow: hidden;  
            ' . OxiAddonsBGImage($styledata, 7) . ';  
            position: relative;
            display: flex;
            cursor: pointer;  
        } 
        .oxi-addons-wrapper-' . $oxiid . '::after{ 
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
           background: transparent;  
           transition: all .5s;
           z-index: 10;
        }
         
        .oxi-addons-wrapper-' . $oxiid . ':hover::after{  
           background: '.$styledata[11].';  
        }
         
        .oxi-addons-wrapper-' . $oxiid . '::before{
            content: "";
            display: block;
            padding-bottom: '.$styledata[3].'%;
        } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-icon{
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative; 
            width: 100%;
            float: left;  
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 53) . ';   
            z-index: 11;
        }
        .oxi-addons-wrapper-' . $oxiid . '  .oxi-icons{
            display: flex; 
            align-items: center; 
            justify-content: center;
            font-size: ' . $styledata[23] . 'px;  
            color: ' . $styledata[27] . ';
            background: ' . $styledata[29] . ';
            border:  ' . $styledata[31] . 'px ' . $styledata[32] . ';
            border-color: ' . $styledata[35] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 69) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 85) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 37) . ';   
            width: ' . $styledata[13] . 'px;
            height: ' . $styledata[17] . 'px;   
            z-index: 3;
            overflow: hidden;
        }

        .oxi-addons-wrapper-' . $oxiid . '  .oxi-icons:hover{ 
            color: ' . $styledata[91] . ';
            background: ' . $styledata[93] . '; 
            border-color: ' . $styledata[95] . '; 
            ' . OxiAddonsBoxShadowSanitize($styledata, 97) . ' 
        } 
        
       
         
        

        @media only screen and (min-width : 669px) and (max-width : 993px){ 
            .oxi-addons-wrapper-' . $oxiid . '::before{ 
                padding-bottom: '.$styledata[4].'%;
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-icon{ 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 54) . ';   
            }
            .oxi-addons-wrapper-' . $oxiid . '  .oxi-icons{ 
                font-size: ' . $styledata[24] . 'px;  
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 70) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 86) . '
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 38) . ';    
            }
    
          
        }
        @media only screen and (max-width : 668px){
           
            .oxi-addons-wrapper-' . $oxiid . '::before{ 
                padding-bottom: '.$styledata[5].'%;
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-icon{ 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 55) . ';   
            }
            .oxi-addons-wrapper-' . $oxiid . '  .oxi-icons{ 
                font-size: ' . $styledata[25] . 'px;  
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 87) . '
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';    
            }
    
        }
    ';
    echo OxiAddonsInlineCSSData($css);
};