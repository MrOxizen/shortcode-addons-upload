<?php

if (!defined('ABSPATH'))
    exit;

function oxi_count_down_style_4_shortcode($styledata = FALSE, $listdata = FALSE, $user = 'user') {
 
    $stylename = $styledata['style_name'];
    $oxiid = $styledata['id'];
    $stylefiles = explode('||#||', $styledata['css']);
    $style = explode('|', $stylefiles[0]);
    echo oxi_addons_elements_stylejs( 'mb-comingsoon-min', 'count_down', 'css');
    echo oxi_addons_elements_stylejs( 'jquery-mb-comingsoon-min', 'count_down', 'js');
    $css = ''; 
  echo '<div class="oxi-addons-container">
              <div class="oxi-addons-row">
                    <div class="oxi-addons-counter-' . $oxiid . '">
                        
                    </div>
              </div>
    </div>';
      $hour = explode('-', $style[3]);
      $days_marge = implode(',', $hour);
      $time = explode(':', $style[5]);
      $trim = ltrim($time[0], '0');   
      $times = array($trim, $time[1]); 
      $times = implode(',',$times); 
    $jquery = ' 
          jQuery(".oxi-addons-counter-' . $oxiid . '").mbComingsoon({
                  expiryDate  : new Date('. $days_marge.','. $times. '),
                  localization: {
                      days   : "Days",
                      hours  : "Hours",
                      minutes: "Minutes",
                      seconds: "Seconds"
                  },
                  speed     : 200
              });
              setTimeout(function () {
                  jQuery(window).resize();
              }, 200);  

              jQuery(".counter-group").addClass("oxi-addons-counter-group");
              jQuery(".counter-block").addClass("oxi-addons-counter-block");
              jQuery(".counter-caption").addClass("oxi-addons-counter-caption");
              jQuery(".counter .number").addClass("oxi-addons-number"); 
              jQuery(".oxi-addons-counter-block .counter").addClass("oxi-addons-main-counter");
      ';
    $css .= ' .oxi-addons-counter-' . $oxiid . ' {
                    width:100%;
                    float:left; 
                    display: flex;
                    justify-content:center;
                    align-items: center;
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-group{
                      width: 100%;
                      float: left;
                      margin: 0;
                      display: flex;
                       justify-content:center;
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-block .oxi-addons-counter-caption{
                      width: 100%;
                      float: left; 
                      display: flex;
                      justify-content:center; 
                      font-size: ' . $style[111] . 'px;
                      color:' . $style[115] . '; 
                      ' . OxiAddonsFontSettings($style, 117) . '  
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-block{
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-direction: column;
                    width: ' . $style[7] . 'px;
                    height: ' . $style[7] . 'px;   
                    ' . OxiAddonsBGImage($style, 11) . '; 
                    border-radius: ' . $style[35] . 'px;
                    border-width: ' . OxiAddonsPaddingMarginSanitize($style, 15) . ';
                    border-style:' . $style[31] . '; 
                    border-color:' . $style[32] . ';
                    margin: ' . OxiAddonsPaddingMarginSanitize($style, 67) . ';
                     ' . OxiAddonsBoxShadowSanitize( $style, 123) . ';
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-block .oxi-addons-main-counter {
                    width: ' . ($style[83] + 20) . 'px !important;
                    height: ' . ($style[83] + 10) . 'px !important;   
                  }
                  .oxi-addons-counter-' . $oxiid . '  .oxi-addons-counter-block .oxi-addons-main-counter  .oxi-addons-number{
                      background-color: transparent ;
                       font-size:' . $style[83] . 'px;
                      color:' . $style[87] . '; 
                      ' . OxiAddonsFontSettings($style, 89) . ' 
                      width: auto;
                      height: auto; 
                      display: block;
                  }   
                @media only screen and (min-width : 669px) and (max-width : 993px){
                  .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-group{ 
                      flex-wrap: wrap;
                      align-items: center;
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-block .oxi-addons-counter-caption{
                       font-size: ' . $style[112] . 'px;   
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-block{ 
                    width: ' . $style[8] . 'px;
                    height: ' . $style[8] . 'px;    
                    border-width: ' . OxiAddonsPaddingMarginSanitize($style, 16) . '; 
                    margin: ' . OxiAddonsPaddingMarginSanitize($style, 68) . '; 
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-block .oxi-addons-main-counter{
                    width: ' . ($style[84] + 18) . 'px ;
                    height: ' . ($style[84] + 9) . 'px ;   
                  }
                  .oxi-addons-counter-' . $oxiid . '  .oxi-addons-counter-block .oxi-addons-main-counter  .oxi-addons-number{
                      font-size:' . $style[84] . 'px; 
                  }   
                }
                @media only screen and (max-width : 668px){
                  .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-group{ 
                      flex-wrap: wrap;
                      align-items: center;
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-block .oxi-addons-counter-caption{
                       font-size: ' . $style[113] . 'px;   
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-block{ 
                    width: ' . $style[9] . 'px;
                    height: ' . $style[9] . 'px;    
                    border-width: ' . OxiAddonsPaddingMarginSanitize($style, 17) . '; 
                    margin: ' . OxiAddonsPaddingMarginSanitize($style, 69) . '; 
                  }
                  .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-block .oxi-addons-main-counter{
                    width: ' . ($style[85] + 17) . 'px ;
                    height: ' . ($style[85] + 8) . 'px ;   
                  }
                  .oxi-addons-counter-' . $oxiid . '  .oxi-addons-counter-block .oxi-addons-main-counter  .oxi-addons-number{
                      font-size:' . $style[85] . 'px; 
                  }  
                }';
    
      echo OxiAddonsInlineCSSData($css);
      echo OxiAddonsInlineCSSData($jquery, 'js', 'oxi-addons-jquery-mb-comingsoon-min');
}
