<?php

namespace SHORTCODE_ADDONS_UPLOAD\Count_down\Templates;

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

  public function public_jquery()
  {
    $this->JSHANDLE = 'jquery.countdown.min';
    wp_enqueue_script('jquery.countdown.min', SA_ADDONS_UPLOAD_URL . '/Count_down/file/jquery.countdown.min.js', false, SA_ADDONS_PLUGIN_VERSION);
  }

  public function inline_public_jquery()
  {
    $style = $this->style;
    $time_date = explode('T', $style['sa_cd_date_time']);
    $jquery = 'jQuery(".sa-addons-count-down-content-style-1").countdown("' . $time_date[0] . ' ' . $time_date[1] . '").on("update.countdown", function(event) {
                    var jQuerythis = jQuery(this).html(event.strftime(\'<div class="oxi-addons-lg-col-4 oxi-addons-md-col-2 oxi-addons-xs-col-2"><div class="sa-addons-countdown-section sa-addons-counter-days ' . $this->array_render('sa_cd_d_txt_sps', $style) . '"><div class="sa-addons-countdown-mid"><div class="sa-addons-countdown-amount">%D</div><div class="sa-addons-countdown-period">' . $this->text_render($style['sa_cd_d_txt']) . '</div></div> </div> </div> <div class="oxi-addons-lg-col-4 oxi-addons-md-col-2 oxi-addons-xs-col-2"> <div class="sa-addons-countdown-section sa-addons-counter-hours ' . $this->array_render('sa_cd_hours_txt_sps', $style) . '"><div class="sa-addons-countdown-mid"><div class="sa-addons-countdown-amount"> %H</div> <div class="sa-addons-countdown-period">' . $this->text_render($style['sa_cd_hours_txt']) . '</div></div></div> </div><div class="oxi-addons-lg-col-4 oxi-addons-md-col-2 oxi-addons-xs-col-2"><div class="sa-addons-countdown-section sa-addons-counter-minutes ' . $this->array_render('sa_cd_min_txt_sps', $style) . '"><div class="sa-addons-countdown-mid"> <div class="sa-addons-countdown-amount"> %M </div> <div class="sa-addons-countdown-period">' . $this->text_render($style['sa_cd_min_txt']) . '</div> </div> </div> </div><div class="oxi-addons-lg-col-4 oxi-addons-md-col-2 oxi-addons-xs-col-2"><div class="sa-addons-countdown-section sa-addons-counter-seconds ' . $this->array_render('sa_cd_seco_txt_sps', $style) . '"> <div class="sa-addons-countdown-mid"><div class="sa-addons-countdown-amount"> %S</div> <div class="sa-addons-countdown-period">' . $this->text_render($style['sa_cd_seco_txt']) . ' </div></div></div></div>\'));
                  });';
    return $jquery;;
  }

  public function default_render($style, $child, $admin)
  {
    echo ' <div class="sa-addons-count-down-container">
                  <div class="sa-addons-count-down-content-style-1" '.$this->animation_render('sa_cd_animation', $style).'>
                                      
                  </div>      
                </div>';
  }

  public function old_render()
  {

    $styledata = $this->dbdata;
    $oxiid = $styledata['id'];
    $stylefiles = explode('||#||', $styledata['css']);
    $style = explode('|', $stylefiles[0]);
    $css = '';

    $jquery = 'jQuery(".' . $this->WRAPPER . ' .oxi-addons-counter-' . $oxiid . '").countdown("' . $style[3] . ' ' . $style[5] . '").on("update.countdown", function(event) {
                            var jQuerythis = jQuery(this).html(event.strftime(\'<div class="oxi-addons-lg-col-4 oxi-addons-md-col-2 oxi-addons-xs-col-2"><div class="oxi-countdown-section oxi-addons-counter-days"><div class="oxi-countdown-mid"><div class="oxi-countdown-amount">%D</div><div class="oxi-countdown-period">' . $stylefiles[3] . '</div></div> </div> </div> <div class="oxi-addons-lg-col-4 oxi-addons-md-col-2 oxi-addons-xs-col-2"> <div class="oxi-countdown-section oxi-addons-counter-hours "><div class="oxi-countdown-mid"><div class="oxi-countdown-amount"> %H</div> <div class="oxi-countdown-period">' . $stylefiles[5] . '</div></div></div> </div><div class="oxi-addons-lg-col-4 oxi-addons-md-col-2 oxi-addons-xs-col-2"><div class="oxi-countdown-section oxi-addons-counter-minutes"><div class="oxi-countdown-mid"> <div class="oxi-countdown-amount"> %M </div> <div class="oxi-countdown-period"> ' . $stylefiles[7] . '</div> </div> </div> </div><div class="oxi-addons-lg-col-4 oxi-addons-md-col-2 oxi-addons-xs-col-2"><div class="oxi-countdown-section oxi-addons-counter-seconds"> <div class="oxi-countdown-mid"><div class="oxi-countdown-amount"> %S</div> <div class="oxi-countdown-period">' . $stylefiles[9] . ' </div></div></div></div>\'));
                          });';
    echo '<div class="oxi-addons-container">                      
                      <div class=" oxi-addons-row">
                        <div class=" oxi-addons-counter-' . $oxiid . '" ' . OxiAddonsAnimation($style, 63) . '>
                            
                        </div>
                      </div>
                  </div>';

    $css .= '.oxi-addons-counter-' . $oxiid . ' .oxi-countdown-section{
                        width:100%;
                        float:left;
                        padding: ' . OxiAddonsPaddingMarginSanitize($style, 7) . ';
                      }
                      .oxi-countdown-mid{
                        display:block;
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
      $css .= '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-days .oxi-countdown-amount{
                            color:' . $style[205] . ';    
                          }
                          .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-days .oxi-countdown-period{
                            color:' . $style[207] . ';    
                          }';
    }
    if ($style[249] == 'yes') {
      $css .= '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-hours .oxi-countdown-amount{
                            color:' . $style[251] . ';    
                          }
                          .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-hours .oxi-countdown-period{
                            color:' . $style[253] . ';    
                          }';
    }
    if ($style[295] == 'yes') {
      $css .= '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-minutes .oxi-countdown-amount{
                            color:' . $style[297] . ';    
                          }
                          .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-minutes .oxi-countdown-period{
                            color:' . $style[299] . ';    
                          }';
    }
    if ($style[341] == 'yes') {
      $css .= '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-seconds .oxi-countdown-amount{
                            color:' . $style[343] . ';    
                          }
                          .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-seconds .oxi-countdown-period{
                            color:' . $style[345] . ';    
                          }';
    }
    wp_add_inline_style('shortcode-addons-style', $css);
    wp_enqueue_script('jquery.countdown.min', SA_ADDONS_UPLOAD_URL . '/Count_down/file/jquery.countdown.min.js', false, SA_ADDONS_PLUGIN_VERSION);
    wp_add_inline_script('jquery.countdown.min', $jquery);
  }
}
