<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Interactive_cards\Templates;

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

class Style_2 extends Templates {

    public function default_render($style, $child, $admin) {

        $icon = $pos = $loader = $load_part = $jquery = $back_part = '';
        if ($style['sa_interactive_cards_loader_style'] == 'style-1') {
            $loader = '<div class="oxi-addons-loading">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div> ';
        } elseif ($style['sa_interactive_cards_loader_style'] == 'style-2') {
            $loader = '<div class="oxi-addons-fancy-spinner">
                            <div class="oxi-addons-ring"></div>
                            <div class="oxi-addons-ring"></div>
                            <div class="oxi-addons-dot"></div>
                        </div> ';
        } elseif ($style['sa_interactive_cards_loader_style'] == 'style-3') {
            $loader = ' <div class="oxi-addons-multi-ripple">
                            <div></div>
                            <div></div>
                       </div> 
                        ';
        } else {
            $loader = '<div class="oxi-addons-donut oxi-addons-multi"></div>';
        }
        if ($style['sa_interactive_cards_cl_position'] == 'right') {
            $pos = '
                    right: 0;
                    top: 0;';
        } else {
            $pos = '
                    left: 0;
                    top: 0;';
        }
        if (!empty($style['sa_interactive_cards_fp_img-url'])) {
            $oxi_url = '<img class="oxi-addons-img" src="' . $this->media_render('sa_interactive_cards_fp_img', $style) . '" alt="oxi-addons-img">';
        }

        if (!empty($style['sa_interactive_cards_cl_icon'])) {
            $icon = '<span class="oxi-close-icon" style="' . $pos . '" id="oxi-close-icon-' . $this->oxiid . '">' . $this->font_awesome_render($style['sa_interactive_cards_cl_icon']) . '</span>';
        }

        if ($style['sa_interactive_cards_loader'] == 'yes') {
            $load_part = '<div class="oxi-addons-load-content oxi-opacity-0" id="oxi-load-part-' . $this->oxiid . '">'
                    . $loader . '</div>';
        }
        if (!empty($style['sa_interactive_cards_fp_shortcode'])) {
           $front_part = '
                            <div class="oxi-addons-ICfull-content-s2" id="oxi-front-part2-' . $this->oxiid . '">
                                    <div class="oxi-addons-IC-box">
                                            <div class="oxi-addons-IC-body">
                                                    <div class="oxi-addons-back-content-inner">
                                                     ' . $this->text_render($style['sa_interactive_cards_fp_shortcode']) . '
                                                    </div>
                                            </div>
                                    </div>
                            </div>';
         } else {
           $front_part = '
                            <div class="oxi-addons-ICfull-content-s2" id="oxi-front-part2-' . $this->oxiid . '">
                                    <div class="oxi-addons-IC-box">
                                            <div class="oxi-addons-IC-body">
                                                    <div class="oxi-addons-back-content-inner" style="color:red; background : #fff; padding :30px; font-size : 24px; font-weight : 700;">
                                                            *Please Insert a Shortcode or Text Here for Front-Part....
                                                    </div>
                                            </div>
                                    </div>
                            </div>';
         }
        if (!empty($style['sa_interactive_cards_bp_shortcode'])) {
            $back_part = '<div class="oxi-addons-back-content oxi-opacity-0" id="oxi-back-part-' . $this->oxiid . '">
                                ' . $icon . '
                                <div class="oxi-addons-back-content-inner">
                                ' . $this->text_render($style['sa_interactive_cards_bp_shortcode']) . '
                                </div>
                        </div>';
        } else {
            $back_part = '<div class="oxi-addons-back-content oxi-opacity-0" id="oxi-back-part-' . $this->oxiid . '">
                                ' . $icon . '
                                <div class="oxi-addons-back-content-inner" style="color:red; background : #fff; padding :30px; font-size : 24px; font-weight : 700;">
                                    *Please Insert a Shortcode or Text Here....
                                </div>
                            </div>';
        }

        echo ' <div class="oxi-addons-Interactive-card">
                    <div class="oxi-addons-IC"  ' . $this->animation_render('sa_interactive_cards_animation', $style) . '>
                        ' . $front_part . '
                        ' . $load_part . '
                        ' . $back_part . '
                    </div>
                </div>';
    }

    public function inline_public_jquery() {
        $style = $this->style;
        $oxiid= $this->oxiid;
        $jquery = '';
        if (array_key_exists('sa_interactive_cards_loader', $style) && $style['sa_interactive_cards_loader'] != '0') {
            $dur = $style['sa_interactive_cards_loader_dur'];
               $jquery .= "jQuery(function () {

                               jQuery('#oxi-front-part2-$oxiid').on('click', function () {

                                   jQuery('#oxi-load-part-$oxiid').removeClass('oxi-opacity-0');
                                   jQuery('#oxi-front-part2-$oxiid').addClass('oxi-opacity-0');
                                   setTimeout(function() {
                                           jQuery('#oxi-back-part-$oxiid').removeClass('oxi-opacity-0');
                                           jQuery('#oxi-load-part-$oxiid').addClass('oxi-opacity-0');
                                   }, $dur);
                               });
                               jQuery('#oxi-close-icon-$oxiid').on('click', function () {
                                  jQuery('#oxi-back-part-$oxiid').addClass('oxi-opacity-0');
                                   jQuery('#oxi-load-part-$oxiid').removeClass('oxi-opacity-0');
                                   setTimeout(function() {
                                           jQuery('#oxi-front-part2-$oxiid').removeClass('oxi-opacity-0');
                                           jQuery('#oxi-load-part-$oxiid').addClass('oxi-opacity-0');
                                   }, $dur);
                               });
                           });";
        } else {
             $jquery .= " jQuery(function () {

                               jQuery('#oxi-front-part2-$oxiid').on('click', function () {

                                   jQuery('#oxi-back-part-$oxiid').removeClass('oxi-opacity-0');
                                   jQuery('#oxi-front-part2-$oxiid').addClass('oxi-opacity-0');

                               });
                               jQuery('#oxi-close-icon-$oxiid').on('click', function () {
                                  jQuery('#oxi-back-part-$oxiid').addClass('oxi-opacity-0');
                                   jQuery('#oxi-front-part2-$oxiid').removeClass('oxi-opacity-0');

                               });
                           });";
        }
        return $jquery;
    }

    public function inline_public_css() {
        $style = $this->style;
        $css  = '';
        if ($style['sa_interactive_cards_loader_style'] == 'style-1') {

            $css .= '       .oxi-addons-container .oxi-addons-Interactive-card .oxi-addons-loading {
                                display: flex;
                                justify-content: center;
                              }
                               .oxi-addons-container .oxi-addons-Interactive-card .oxi-addons-loading div {
                                width: 1rem;
                                height: 1rem;
                                margin: 2rem 0.3rem;
                                background: ' . $style['sa_interactive_cards_loader_color'] . ';
                                border-radius: 50%;
                                -webkit-animation: 0.9s oxi_bounce infinite alternate;
                                        animation: 0.9s oxi_bounce infinite alternate;
                              }
                               .oxi-addons-container .oxi-addons-Interactive-card .oxi-addons-loading div:nth-child(2) {
                                -webkit-animation-delay: 0.3s;
                                        animation-delay: 0.3s;
                              }
                               .oxi-addons-container .oxi-addons-Interactive-card .oxi-addons-loading div:nth-child(3) {
                                -webkit-animation-delay: 0.6s;
                                        animation-delay: 0.6s;
                              }

                              @-webkit-keyframes oxi_bounce {
                                to {
                                  opacity: 0.3;
                                  -webkit-transform: translate3d(0, -1rem, 0);
                                          transform: translate3d(0, -1rem, 0);
                                }
                              }

                              @keyframes oxi_bounce {
                                to {
                                  opacity: 0.3;
                                  -webkit-transform: translate3d(0, -1rem, 0);
                                          transform: translate3d(0, -1rem, 0);
                                }
                              }';
        } elseif ($style['sa_interactive_cards_loader_style'] == 'style-2') {

            $css .= '.oxi-addons-container .oxi-addons-Interactive-card .oxi-addons-fancy-spinner {
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        width: 5rem;
                                        height: 5rem;
                                    }
                                    .oxi-addons-container .oxi-addons-Interactive-card .oxi-addons-fancy-spinner div {
                                        position: absolute;
                                        width: 4rem;
                                        height: 4rem;
                                        border-radius: 50%;
                                    }
                                    .oxi-addons-container .oxi-addons-Interactive-card .oxi-addons-fancy-spinner div.oxi-addons-ring {
                                        border-width: 0.5rem;
                                        border-style: solid;
                                        border-color: transparent;
                                        -webkit-animation: 2s oxi_fancy infinite alternate;
                                        animation: 2s oxi_fancy infinite alternate;
                                    }
                                    .oxi-addons-container .oxi-addons-Interactive-card .oxi-addons-fancy-spinner div.oxi-addons-ring:nth-child(1) {
                                        border-left-color: ' . $style['sa_interactive_cards_loader_color'] . ';
                                        border-right-color: ' . $style['sa_interactive_cards_loader_color'] . ';
                                    }
                                    .oxi-addons-container .oxi-addons-Interactive-card .oxi-addons-fancy-spinner div.oxi-addons-ring:nth-child(2) {
                                        border-top-color: ' . $style['sa_interactive_cards_loader_color'] . ';
                                        border-bottom-color: ' . $style['sa_interactive_cards_loader_color'] . ';
                                        -webkit-animation-delay: 1s;
                                        animation-delay: 1s;
                                    }
                                    .oxi-addons-container .oxi-addons-Interactive-card .oxi-addons-fancy-spinner div.oxi-addons-dot {
                                        width: 1rem;
                                        height: 1rem;
                                        background: ' . $style['sa_interactive_cards_loader_color'] . ';
                                    }

                                    @-webkit-keyframes oxi_fancy {
                                        to {
                                            -webkit-transform: rotate(360deg) scale(0.5);
                                            transform: rotate(360deg) scale(0.5);
                                        }
                                    }

                                    @keyframes oxi_fancy {
                                        to {
                                            -webkit-transform: rotate(360deg) scale(0.5);
                                            transform: rotate(360deg) scale(0.5);
                                        }
                                    }';
        } elseif ($style['sa_interactive_cards_loader_style'] == 'style-3') {


            $css .= '
                                    .oxi-addons-container .oxi-addons-Interactive-card  .oxi-addons-multi-ripple {
                                         width: 5.6rem;
                                         height: 5.6rem;
                                         margin: 5rem;
                                       }
                                    .oxi-addons-container .oxi-addons-Interactive-card  .oxi-addons-multi-ripple div {
                                         position: absolute;
                                         width: 5rem;
                                         height: 5rem;
                                         border-radius: 50%;
                                         border: 0.3rem solid ' . $style['sa_interactive_cards_loader_color'] . ';
                                         -webkit-animation: 1.5s oxi_ripple infinite;
                                                 animation: 1.5s oxi_ripple infinite;
                                       }
                                    .oxi-addons-container .oxi-addons-Interactive-card  .oxi-addons-multi-ripple div:nth-child(2) {
                                         -webkit-animation-delay: 0.5s;
                                                 animation-delay: 0.5s;
                                       }

                                     @-webkit-keyframes oxi_ripple {
                                       from {
                                         -webkit-transform: scale(0);
                                                 transform: scale(0);
                                         opacity: 1;
                                       }
                                       to {
                                         -webkit-transform: scale(1);
                                                 transform: scale(1);
                                         opacity: 0;
                                       }
                                     }

                                     @keyframes oxi_ripple {
                                       from {
                                         -webkit-transform: scale(0);
                                                 transform: scale(0);
                                         opacity: 1;
                                       }
                                       to {
                                         -webkit-transform: scale(1);
                                                 transform: scale(1);
                                         opacity: 0;
                                       }
                                     }';
        } else {
            $css .= '
                                    .oxi-addons-container .oxi-addons-Interactive-card .oxi-addons-donut {
                                     width: 5rem;
                                     height: 5rem;
                                     margin: 5rem;
                                     border-radius: 50%;
                                     border: 0.3rem solid rgba(151, 159, 208, 0.3);
                                     border-top-color: ' . $style['sa_interactive_cards_loader_color'] . ';
                                     -webkit-animation: 1.5s oxi_spin infinite linear;
                                             animation: 1.5s oxi_spin infinite linear;
                                   }
                                    .oxi-addons-container .oxi-addons-Interactive-card .oxi-addons-donut.oxi-addons-multi {
                                     border-bottom-color: ' . $style['sa_interactive_cards_loader_color'] . ';
                                   }

                                   @-webkit-keyframes oxi_spin {
                                     to {
                                       -webkit-transform: rotate(360deg);
                                               transform: rotate(360deg);
                                     }
                                   }

                                   @keyframes oxi_spin {
                                     to {
                                       -webkit-transform: rotate(360deg);
                                               transform: rotate(360deg);
                                     }
                                   }

                                    ';
        }
        return $css;
    }

    public function old_render() {
        $style = $this->dbdata;
        $child = $this->child;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        $pos = $oxi_url = $icon = $front_part = $back_part = '';
        $css = $loader = $load_part = $jquery = '';
         if ($styledata[59] == 'top_right') {
           $pos = '
                               right: 0;
                               top: 0;';
         } else {
           $pos = '
                               left: 0;
                               top: 0;';
         }


         if (!empty($stylefiles[4])) {
           $icon = '<span class="oxi-close-icon" id="oxi-close-icon-' . $oxiid . '">' . oxi_addons_font_awesome($stylefiles[4]) . '</span>';
         }

         if (!empty($stylefiles[8])) {
           $front_part = '
                                               <div class="oxi-addons-ICfull-content-s2" id="oxi-front-part2-' . $oxiid . '">
                                                       <div class="oxi-addons-IC-box">
                                                               <div class="oxi-addons-IC-body">
                                                                       <div class="oxi-addons-back-content-inner">
                                                                       ' . OxiAddonsTextConvert($stylefiles[8]) . '
                                                                       </div>
                                                               </div>
                                                       </div>
                                               </div>';
         } else {
           $front_part = '
                                       <div class="oxi-addons-ICfull-content-s2" id="oxi-front-part2-' . $oxiid . '">
                                               <div class="oxi-addons-IC-box">
                                                       <div class="oxi-addons-IC-body">
                                                               <div class="oxi-addons-back-content-inner" style="color:red; background : #fff; padding :30px; font-size : 24px; font-weight : 700;">
                                                                       *Please Insert a Shortcode or Text Here for Front-Part....
                                                               </div>
                                                       </div>
                                               </div>
                                       </div>';
         }
 if (!empty($stylefiles[6])) {
           $back_part = '<div class="oxi-addons-back-content oxi-opacity-0" id="oxi-back-part-' . $oxiid . '">
                                               ' . $icon . '
                                               <div class="oxi-addons-back-content-inner">
                                               ' . OxiAddonsTextConvert($stylefiles[6]) . '
                                               </div>
                                       </div>';
         } else {
           $back_part = '<div class="oxi-addons-back-content oxi-opacity-0" id="oxi-back-part-' . $oxiid . '">
                                               ' . $icon . '
                                           <div class="oxi-addons-back-content-inner" style="color:red; background : #fff; padding :30px; font-size : 24px; font-weight : 700;">
                                                   *Please Insert a Shortcode or Text Here for Back-Part....
                                           </div>
                                       </div>';
         }

         if ($styledata[111] == 'style-1') {
           $loader = '<div class="oxi-addons-loading">
                                   <div></div>
                                   <div></div>
                                   <div></div>
                       </div> ';
           $css .= ' .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-loading {
                                   display: flex;
                                   justify-content: center;
                                 }
                                  .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-loading div {
                                   width: 1rem;
                                   height: 1rem;
                                   margin: 2rem 0.3rem;
                                   background: ' . $styledata[113] . ';
                                   border-radius: 50%;
                                   -webkit-animation: 0.9s oxi_bounce infinite alternate;
                                           animation: 0.9s oxi_bounce infinite alternate;
                                 }
                                  .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-loading div:nth-child(2) {
                                   -webkit-animation-delay: 0.3s;
                                           animation-delay: 0.3s;
                                 }
                                  .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-loading div:nth-child(3) {
                                   -webkit-animation-delay: 0.6s;
                                           animation-delay: 0.6s;
                                 }

                                 @-webkit-keyframes oxi_bounce {
                                   to {
                                     opacity: 0.3;
                                     -webkit-transform: translate3d(0, -1rem, 0);
                                             transform: translate3d(0, -1rem, 0);
                                   }
                                 }

                                 @keyframes oxi_bounce {
                                   to {
                                     opacity: 0.3;
                                     -webkit-transform: translate3d(0, -1rem, 0);
                                             transform: translate3d(0, -1rem, 0);
                                   }
                                 }';
         } elseif ($styledata[111] == 'style-2') {
           $loader = '<div class="oxi-addons-fancy-spinner">
                                       <div class="oxi-addons-ring"></div>
                                       <div class="oxi-addons-ring"></div>
                                       <div class="oxi-addons-dot"></div>
                                   </div> ';
           $css .= '.oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-fancy-spinner {
                                           display: flex;
                                           justify-content: center;
                                           align-items: center;
                                           width: 5rem;
                                           height: 5rem;
                                       }
                                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-fancy-spinner div {
                                           position: absolute;
                                           width: 4rem;
                                           height: 4rem;
                                           border-radius: 50%;
                                       }
                                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-fancy-spinner div.oxi-addons-ring {
                                           border-width: 0.5rem;
                                           border-style: solid;
                                           border-color: transparent;
                                           -webkit-animation: 2s oxi_fancy infinite alternate;
                                           animation: 2s oxi_fancy infinite alternate;
                                       }
                                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-fancy-spinner div.oxi-addons-ring:nth-child(1) {
                                           border-left-color: ' . $styledata[113] . ';
                                           border-right-color: ' . $styledata[113] . ';
                                       }
                                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-fancy-spinner div.oxi-addons-ring:nth-child(2) {
                                           border-top-color: ' . $styledata[113] . ';
                                           border-bottom-color: ' . $styledata[113] . ';
                                           -webkit-animation-delay: 1s;
                                           animation-delay: 1s;
                                       }
                                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-fancy-spinner div.oxi-addons-dot {
                                           width: 1rem;
                                           height: 1rem;
                                           background: ' . $styledata[113] . ';
                                       }

                                       @-webkit-keyframes oxi_fancy {
                                           to {
                                               -webkit-transform: rotate(360deg) scale(0.5);
                                               transform: rotate(360deg) scale(0.5);
                                           }
                                       }

                                       @keyframes oxi_fancy {
                                           to {
                                               -webkit-transform: rotate(360deg) scale(0.5);
                                               transform: rotate(360deg) scale(0.5);
                                           }
                                       }';
         } elseif ($styledata[111] == 'style-3') {

           $loader = ' <div class="oxi-addons-multi-ripple">
                                           <div></div>
                                           <div></div>
                                      </div> 
                                       ';
           $css .= '
                                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . '  .oxi-addons-multi-ripple {
                                            width: 5.6rem;
                                            height: 5.6rem;
                                            margin: 5rem;
                                          }
                                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . '  .oxi-addons-multi-ripple div {
                                            position: absolute;
                                            width: 5rem;
                                            height: 5rem;
                                            border-radius: 50%;
                                            border: 0.3rem solid ' . $styledata[113] . ';
                                            -webkit-animation: 1.5s oxi_ripple infinite;
                                                    animation: 1.5s oxi_ripple infinite;
                                          }
                                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . '  .oxi-addons-multi-ripple div:nth-child(2) {
                                            -webkit-animation-delay: 0.5s;
                                                    animation-delay: 0.5s;
                                          }

                                        @-webkit-keyframes oxi_ripple {
                                          from {
                                            -webkit-transform: scale(0);
                                                    transform: scale(0);
                                            opacity: 1;
                                          }
                                          to {
                                            -webkit-transform: scale(1);
                                                    transform: scale(1);
                                            opacity: 0;
                                          }
                                        }

                                        @keyframes oxi_ripple {
                                          from {
                                            -webkit-transform: scale(0);
                                                    transform: scale(0);
                                            opacity: 1;
                                          }
                                          to {
                                            -webkit-transform: scale(1);
                                                    transform: scale(1);
                                            opacity: 0;
                                          }
                                        }';
         } else {
           $loader = '<div class="oxi-addons-donut oxi-addons-multi"></div>';
           $css .= '
                                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-donut {
                                        width: 3rem;
                                        height: 3rem;
                                        margin: 3rem;
                                        border-radius: 50%;
                                        border: 0.3rem solid rgba(151, 159, 208, 0.3);
                                        border-top-color: ' . $styledata[113] . ';
                                        -webkit-animation: 1.5s oxi_spin infinite linear;
                                                animation: 1.5s oxi_spin infinite linear;
                                      }
                                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-donut.oxi-addons-multi {
                                        border-bottom-color: ' . $styledata[113] . ';
                                      }

                                      @-webkit-keyframes oxi_spin {
                                        to {
                                          -webkit-transform: rotate(360deg);
                                                  transform: rotate(360deg);
                                        }
                                      }

                                      @keyframes oxi_spin {
                                        to {
                                          -webkit-transform: rotate(360deg);
                                                  transform: rotate(360deg);
                                        }
                                      }

                                       ';
         }

         if ($styledata[109] == 'on') {
           $load_part = '<div class="oxi-addons-load-content oxi-opacity-0" id="oxi-load-part-' . $oxiid . '">'
             . $loader . '</div>';
         }
        

         echo '<div class="oxi-addons-container">
                   <div class="oxi-addons-row">
                       <div class="oxi-addons-Interactive-card-' . $oxiid . '">
                           <div class="oxi-addons-IC"  ' . OxiAddonsAnimation($styledata, 29) . '>
                                   ' . $front_part . '
                                   ' . $load_part . '
                                   ' . $back_part . '
                           </div>
                       </div>
                   </div>
                </div>';

         $css .= '
                       .oxi-addons-Interactive-card-' . $oxiid . '{
                               width:100%;
                               max-width: ' . $styledata[3] . 'px;
                               margin: 0 auto;
                               overflow: hidden;
                               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
                       }

                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-IC{
                               width:100%;
                               float:left;
                               ' . OxiAddonsBoxShadowSanitize($styledata, 23) . '; 
                               position: relative;
                       }
                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-IC .oxi-addons-ICfull-content-s2 {
                               width: 100%;
                               float:left;
                               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 43) . ';
                               background: ' . $styledata[33] . ';
                               position: relative;
                       }

                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-opacity-0 {
                               opacity: 0;
                               z-index: -1;
                               width: 100%;
                               position: absolute;
                       }
                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-IC .oxi-addons-IC-box {
                               width: 100%;
                               float:left;
                       }
                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-IC .oxi-addons-IC-box .oxi-addons-IC-body {

                               width: 100%;
                               float: left;

                       }
                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-load-content{
                           width : 100%;
                           display :flex; 
                           justify-content : center;
                           align-items : center;
                           background :  ' . $styledata[33] . ';
                           position :absolute;
                           top :0;
                           bottom :0;
                           right :0;
                           left :0;
                       }
                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-back-content{
                           position: absolute;
                           top: 0;
                           left: 0;
                           bottom: 0;
                           right: 0;
                           overflow-y: auto;
                       }
                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-addons-back-content-inner{
                           display: flex;
                           align-items: center;
                           flex-direction: column;
                       }

                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-close-icon{
                           position: absolute;
                           ' . $pos . '
                           z-index: 100;
                           font-size : ' . $styledata[73] . 'px;
                           color : ' . $styledata[69] . ';
                           background: ' . $styledata[71] . ';
                           width: ' . $styledata[61] . 'px;
                           height: ' . $styledata[65] . 'px;
                           border-radius :  ' . OxiAddonsPaddingMarginSanitize($styledata, 77) . ';
                           display: flex;
                           justify-content: center;
                           align-items: center;
                           margin :' . OxiAddonsPaddingMarginSanitize($styledata, 93) . ';
                       }
                       .oxi-addons-container .oxi-addons-Interactive-card-' . $oxiid . ' .oxi-close-icon:hover{
                           cursor : pointer;
                       }
                       ';


         if ($styledata[109] == 'on') {

           $jquery .= "jQuery(function () {

                               jQuery('#oxi-front-part2-$oxiid').on('click', function () {

                                   jQuery('#oxi-load-part-$oxiid').removeClass('oxi-opacity-0');
                                   jQuery('#oxi-front-part2-$oxiid').addClass('oxi-opacity-0');
                                   setTimeout(function() {
                                           jQuery('#oxi-back-part-$oxiid').removeClass('oxi-opacity-0');
                                           jQuery('#oxi-load-part-$oxiid').addClass('oxi-opacity-0');
                                   }, $styledata[115]);
                               });
                               jQuery('#oxi-close-icon-$oxiid').on('click', function () {
                                  jQuery('#oxi-back-part-$oxiid').addClass('oxi-opacity-0');
                                   jQuery('#oxi-load-part-$oxiid').removeClass('oxi-opacity-0');
                                   setTimeout(function() {
                                           jQuery('#oxi-front-part2-$oxiid').removeClass('oxi-opacity-0');
                                           jQuery('#oxi-load-part-$oxiid').addClass('oxi-opacity-0');
                                   }, $styledata[115]);
                               });
                           });";
         } else {
           $jquery .= " jQuery(function () {

                               jQuery('#oxi-front-part2-$oxiid').on('click', function () {

                                   jQuery('#oxi-back-part-$oxiid').removeClass('oxi-opacity-0');
                                   jQuery('#oxi-front-part2-$oxiid').addClass('oxi-opacity-0');

                               });
                               jQuery('#oxi-close-icon-$oxiid').on('click', function () {
                                  jQuery('#oxi-back-part-$oxiid').addClass('oxi-opacity-0');
                                   jQuery('#oxi-front-part2-$oxiid').removeClass('oxi-opacity-0');

                               });
                           });";
         }

        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }

}
