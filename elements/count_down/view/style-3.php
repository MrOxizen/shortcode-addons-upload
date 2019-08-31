<?php

if (!defined('ABSPATH'))
    exit;

function oxi_count_down_style_3_shortcode($styledata = FALSE, $listdata = FALSE, $user = 'user') {
    $stylename = $styledata['style_name'];
    $oxiid = $styledata['id'];
    $stylefiles = explode('||#||', $styledata['css']);
    $style = explode('|', $stylefiles[0]);
    $css = '';
    $jquery = 'jQuery(".oxi-addons-counter-' . $oxiid . '").countdown("' . $style[3] . ' ' . $style[5] . '").on("update.countdown", function(event) {
                        var jQuerythis = jQuery(this).html(event.strftime(\'<div class="oxi-addons-lg-col-4 oxi-addons-md-col-2 oxi-addons-xs-col-2"><div class="oxi-countdown-section oxi-addons-counter-days"><div class="oxi-countdown-mid"><div class="oxi-countdown-amount">%D</div><div class="oxi-countdown-period">' . $stylefiles[3] . '</div></div> </div> </div> <div class="oxi-addons-lg-col-4 oxi-addons-md-col-2 oxi-addons-xs-col-2"> <div class="oxi-countdown-section oxi-addons-counter-hours"><div class="oxi-countdown-mid"><div class="oxi-countdown-amount"> %H</div> <div class="oxi-countdown-period">' . $stylefiles[5] . '</div></div></div> </div><div class="oxi-addons-lg-col-4 oxi-addons-md-col-2 oxi-addons-xs-col-2"><div class="oxi-countdown-section oxi-addons-counter-minutes"><div class="oxi-countdown-mid"> <div class="oxi-countdown-amount"> %M </div> <div class="oxi-countdown-period"> ' . $stylefiles[7] . '</div> </div> </div> </div><div class="oxi-addons-lg-col-4 oxi-addons-md-col-2 oxi-addons-xs-col-2"><div class="oxi-countdown-section oxi-addons-counter-seconds"> <div class="oxi-countdown-mid"><div class="oxi-countdown-amount"> %S</div> <div class="oxi-countdown-period">' . $stylefiles[9] . ' </div></div></div></div>\'));
                      });';
    echo '<div class="oxi-addons-container">
              <div class="oxi-addons-row">
                    <div class="oxi-addons-counter-' . $oxiid . '" ' . OxiAddonsAnimation($style, 63) . '>
                        
                    </div>
              </div>
    </div>';

    $css .= '.oxi-addons-counter-' . $oxiid . ' .oxi-countdown-section{
                    width:100%;
                    float:left;
                    padding: ' . OxiAddonsPaddingMarginSanitize($style, 7) . ';
                    margin: ' . OxiAddonsPaddingMarginSanitize($style, 23) . ';
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-countdown-mid{
                    width:100%;
                    margin: 0 auto;
                    display:block;
                    width: ' . $style[95] . 'px;
                    height: ' . $style[95] . 'px;
                    ' . OxiAddonsBGImage($style, 103) . ' 
                    border-radius: ' . $style[99] . 'px;
                    border-width: ' . OxiAddonsPaddingMarginSanitize($style, 107) . ';
                    border-style:' . $style[123] . '; 
                    border-color:' . $style[124] . ';
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-countdown-amount{
                    display: block;
                    font-size:' . $style[67] . 'px;
                    color:' . $style[71] . '; 
                    ' . OxiAddonsFontSettings($style, 73) . '
                    padding: ' . OxiAddonsPaddingMarginSanitize($style, 79) . ';
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-countdown-period{
                    display: block;
                    font-size:' . $style[135] . 'px;
                    color:' . $style[139] . ';        
                    ' . OxiAddonsFontSettings($style, 141) . '
                    padding: ' . OxiAddonsPaddingMarginSanitize($style, 147) . ';
                  }
                  @media only screen and (min-width : 669px) and (max-width : 993px){
                  .oxi-addons-counter-' . $oxiid . ' .oxi-countdown-section{                   
                    padding: ' . OxiAddonsPaddingMarginSanitize($style, 8) . ';
                    margin: ' . OxiAddonsPaddingMarginSanitize($style, 24) . ';
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-countdown-mid{                    
                    width: ' . $style[96] . 'px;
                    height: ' . $style[96] . 'px;
                    border-radius: ' . $style[100] . 'px;
                    border-width: ' . OxiAddonsPaddingMarginSanitize($style, 108) . ';                  
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-countdown-amount{                    
                    font-size:' . $style[68] . 'px;                   
                    padding: ' . OxiAddonsPaddingMarginSanitize($style, 80) . ';
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-countdown-period{                   
                    font-size:' . $style[136] . 'px;                   
                    padding: ' . OxiAddonsPaddingMarginSanitize($style, 148) . ';
                  }
                }
                @media only screen and (max-width : 668px){
                  .oxi-addons-counter-' . $oxiid . ' .oxi-countdown-section{                   
                    padding: ' . OxiAddonsPaddingMarginSanitize($style, 9) . ';
                    margin: ' . OxiAddonsPaddingMarginSanitize($style, 25) . ';
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-countdown-mid{                    
                    width: ' . $style[97] . 'px;
                    height: ' . $style[97] . 'px;
                    border-radius: ' . $style[101] . 'px;
                    border-width: ' . OxiAddonsPaddingMarginSanitize($style, 109) . ';                  
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-countdown-amount{                    
                    font-size:' . $style[69] . 'px;                   
                    padding: ' . OxiAddonsPaddingMarginSanitize($style, 81) . ';
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-countdown-period{                   
                    font-size:' . $style[137] . 'px;                   
                    padding: ' . OxiAddonsPaddingMarginSanitize($style, 149) . ';
                  }
                }
                ';
    if ($style[203] == 'yes') {
        $css .= '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-days .oxi-countdown-mid{
                         ' . OxiAddonsBGImage($style, 209) . '
                        border-style:' . $style[213] . '; 
                        border-color:' . $style[214] . ';
                      }
                    .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-days .oxi-countdown-amount{
                        color:' . $style[205] . ';   
                      }
                      .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-days .oxi-countdown-period{
                        color:' . $style[207] . ';    
                      }';
    }
    if ($style[249] == 'yes') {
        $css .= '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-hours .oxi-countdown-mid{
                        ' . OxiAddonsBGImage($style, 255) . '
                        border-style:' . $style[259] . '; 
                        border-color:' . $style[260] . ';
                      }
                      .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-hours .oxi-countdown-amount{
                        color:' . $style[251] . ';   
                      }
                      .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-hours .oxi-countdown-period{
                        color:' . $style[253] . ';    
                      }';
    }
    if ($style[295] == 'yes') {
        $css .= '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-minutes .oxi-countdown-mid{
                        ' . OxiAddonsBGImage($style, 301) . '
                        border-style:' . $style[305] . '; 
                        border-color:' . $style[306] . ';
                      }
                      .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-minutes .oxi-countdown-amount{
                        color:' . $style[297] . ';
                      }
                      .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-minutes .oxi-countdown-period{
                        color:' . $style[299] . ';    
                      }';
    }
    if ($style[341] == 'yes') {
        $css .= '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-seconds .oxi-countdown-mid{
                        ' . OxiAddonsBGImage($style, 347) . '
                        border-style:' . $style[351] . '; 
                        border-color:' . $style[352] . ';
                      }
                      .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-seconds .oxi-countdown-amount{
                        color:' . $style[343] . ';  
                      }
                      .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-seconds .oxi-countdown-period{
                        color:' . $style[345] . ';    
                      }';
    }
    echo OxiAddonsInlineCSSData($css);
    echo oxi_addons_elements_stylejs('jquery.countdown.min', 'count_down', 'js');
    echo OxiAddonsInlineCSSData($jquery, 'js', 'oxi-addons-jquery.countdown.min');
}
