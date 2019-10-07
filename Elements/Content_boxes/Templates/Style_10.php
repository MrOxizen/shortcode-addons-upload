<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Content_boxes\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/*
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_10 extends Templates {

    public function default_render($style, $child, $admin) {
        $class = '';
        if ($style['sa-max-width-condition'] == 'dynamic') {
            $class = 'sa-max-w-dynamic';
        } elseif ($style['sa-max-width-condition'] == 'default') {
            $class = '';
        }

        if ($admin == 'admin') {
            $admin_class = 'oxi-addons-admin-edit-list';
        } else {
            $admin_class = '';
        }



            $all_data = (array_key_exists('sa_icon_effects_data', $style) && is_array($style['sa_icon_effects_data'])) ? $style['sa_icon_effects_data'] : [];

        foreach ($all_data as $key => $data) {

//            echo '<pre>';
////            print_r($v);
//            echo '</pre>';

            $icon = $header = $content = $link = '';

            if (array_key_exists('sa_el_fa_icon', $data) &&  $data['sa_el_fa_icon'] != '') {
                $icon = '<div class="oxi-contentbox-icon"  ' . $this->animation_render('sa-c-b-icon-animation', $style) . '>
                        <div class="oxi-contentbox-icon-icon">
                          ' . $this->font_awesome_render($data['sa_el_fa_icon']) . '
                        </div>
                      </div>';
            }
            if (array_key_exists('sa_el_title', $data) &&  $data['sa_el_title'] != '') {
                $header = '<div class="oxi-contentbox-title"  >
                                ' . $this->text_render($data['sa_el_title']) . '
                           </div>';
            }
            if (array_key_exists('sa_el_content', $data) &&  $data['sa_el_content'] != '') {
                $content = ' <div class="oxi-contentbox-description">
                                ' . $this->text_render($data['sa_el_content']) . '
                             </div>';
            }
            if (array_key_exists('sa_el_anchor_link', $data) &&  $data['sa_el_anchor_link'] != '') {
                $link = ' <a ' . $this->url_render('sa_el_anchor_link', $data) . '>';
            } 

            echo '<div class="' . $this->column_render('sa-ac-column', $style) . ' ' . $admin_class . '">';
            echo ' <div class="sa-contentbox-temp-10  sa-contentbox-temp-10-'.$key.'   ' . $class . '">
                        <div class="oxi-contentbox-main"  ' . $this->animation_render('sa-c-b-box-animation', $style) . '>
                           ' . $link . '
                                <div class="oxi-contentbox-body">
                                  ' . $icon . '
                                  ' . $header . '
                                  ' . $content . '
                                 </div>
                                <div class="oxi-contentbox-arrow">
                                  <div class="oxi-contentbox-arrow-arrow">
                                    <div class="oxi-contentbox-arrow-icon">
                                      <i class="fa fa-angle-double-right"></i>
                                    </div>
                                  </div>
                                </div>
                            </a>
                         </div>
                      </div>';
            echo '</div>';
        }
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $stylename = $styledata['style_name'];
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $listfile = explode('||#||', $value['files']);
            $icon = $header = $content = $link = '';
            if ($listfile[3] != '') {
                $icon = '<div class="oxi-contentbox-icon" ' . OxiAddonsAnimation($styledata, 118) . '>
                        <div class="oxi-contentbox-icon-icon">
                          ' . oxi_addons_font_awesome($listfile[3]) . '
                        </div>
                      </div>';
            }
            if ($listfile[5] != '') {
                $header = '<div class="oxi-contentbox-title">' . OxiAddonsTextConvert($listfile[5]) . '</div>';
            }
            if ($listfile[7] != '') {
                $content = ' <div class="oxi-contentbox-description">' . OxiAddonsTextConvert($listfile[7]) . '</div>';
            }
            if ($listfile[1] != '') {
                $link = ' <a href="' . OxiAddonsUrlConvert($listfile[1]) . '">';
            } elseif ($listfile[1] == '') {
                $link = ' <a href="#">';
            }
            echo '  <div class="oxi-contentbox-class ' . OxiAddonsItemRows($styledata, 3) . ' ">
               <div class="oxi-contentbox-' . $oxiid . '">
                <div class="oxi-contentbox-main" ' . OxiAddonsAnimation($styledata, 88) . '>
                   ' . $link . '
                    <div class="oxi-contentbox-body">
                      ' . $icon . '
                      ' . $header . '
                      ' . $content . '
                     </div>
                    <div class="oxi-contentbox-arrow">
                      <div class="oxi-contentbox-arrow-arrow">
                        <div class="oxi-contentbox-arrow-icon">
                          <i class="fa fa-angle-double-right"></i>
                        </div>
                      </div>
                    </div>
                </div>
                </a>
                </div>';
            echo '</div>';
        }

        echo '</div>
      </div>';
        $css = '.oxi-contentbox-' . $oxiid . ' {
                width: 100%;
                margin: 0 auto;
                overflow: auto;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 66) . ';
              }

              .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-main {
                width: ' . $styledata[7] . 'px;
                float: left;
                ' . OxiAddonsBGImage($styledata, 11) . '
                border-style: ' . $styledata[31] . ';
                border-color: ' . $styledata[32] . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 34) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 82) . '
                cursor: pointer;
                overflow: hidden;
                transition: all 0.5s;

              }

              .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-body {
                width: 100%;
                float: left;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 50) . ';
              
              }

              .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-icon {
                width: 100%;
                float: left;
                text-align:  ' . $styledata[100] . ';
              }

              .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-icon-icon {
                position: relative;
                width: 100%;
                float: left;
                font-size:  ' . $styledata[94] . 'px;
                color: ' . $styledata[98] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
              }

              .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-title {
                position: relative;
                width: 100%;
                float: left;
                font-size:  ' . $styledata[122] . 'px;
                color: ' . $styledata[126] . ';
                ' . OxiAddonsFontSettings($styledata, 128) . '  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 134) . ';
              }

              .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-description {
                position: relative;
                width: 100%;
                float: left;
                font-size:  ' . $styledata[150] . 'px;
                color: ' . $styledata[154] . ';
                ' . OxiAddonsFontSettings($styledata, 156) . '  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 162) . ';
              }

              .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-arrow {
                width: 100%;
                text-align: ' . $styledata[182] . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 192) . ';
              }

              .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-arrow-arrow {
                display: inline-block;
                width:  ' . $styledata[188] . 'px;
                height:  ' . $styledata[188] . 'px;
                background:  ' . $styledata[186] . ';
             
              }

              .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-arrow-icon {
                position: relative;
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size:  ' . $styledata[178] . 'px;
                color:  ' . $styledata[184] . ';
              }
              
              .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-main:hover{
                background:  ' . $styledata[92] . ';
                transition: all 0s;
               }
              .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-main:hover .oxi-contentbox-icon-icon {
                -webkit-animation: icon 0.5s;
                animation: icon 0.5s ;
              }

              @-webkit-keyframes icon {
                from { bottom: -50px;opacity: 0;}
                to { bottom: 0;opacity: 1; }
              }

              @keyframes icon {
                from { bottom: -50px; opacity: 0;}
                to {bottom: 0;opacity: 1; }
              }
              .oxi-contentbox-main:hover .oxi-contentbox-title {
                -webkit-animation: title 0.5s;
                animation: title 0.5s;
              }

              @-webkit-keyframes title {
                from { right: -300px;  opacity: 0;}
                to { right: 0;  opacity: 1; }
              }

              @keyframes title {
                from { right: -300px; opacity: 0;}

                to {right: 0;opacity: 1;}
              }

              .oxi-contentbox-main:hover .oxi-contentbox-description {
                -webkit-animation: description 0.5s;
                animation: description 0.5s;
              }

              @-webkit-keyframes description {
                from { left: -300px;opacity: 0; }
                to {left: 0; opacity: 1;}
              }

              @keyframes description {
                from { left: -300px;opacity: 0;}
                to { left: 0; opacity: 1;}
              }
              .oxi-contentbox-main:hover .oxi-contentbox-arrow-icon {
                -webkit-animation: arrow 0.5s;
                animation: arrow 0.5s infinite;
              }

              @-webkit-keyframes arrow {
                from {bottom: -50px; opacity: 0;}
                to {bottom: 0; opacity: 1;}
              }

              @keyframes arrow {
                from {left: -5px; }
                to {left: 0; }
              }
          @media only screen and (min-width : 669px) and (max-width : 993px){
                    .oxi-contentbox-' . $oxiid . ' {
                         padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 67) . ';
                      }

                      .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-main {
                        width: ' . $styledata[8] . 'px;
                        float: left;
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . ';
                       }

                      .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-body {
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 51) . ';

                      }

                      .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-icon-icon {
                        font-size:  ' . $styledata[95] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
                      }

                      .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-title {
                        font-size:  ' . $styledata[123] . 'px;
                        color: ' . $styledata[126] . ';
                         padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 135) . ';
                      }

                      .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-description {
                        font-size:  ' . $styledata[151] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 163) . ';
                      }

                     
                      .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-arrow-arrow {
                        width:  ' . $styledata[189] . 'px;
                        height:  ' . $styledata[189] . 'px;
                      }

                      .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-arrow-icon {
                        font-size:  ' . $styledata[179] . 'px;
                      }
                     }
               @media only screen and (max-width : 668px){
                     .oxi-contentbox-' . $oxiid . ' {
                         padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 68) . ';
                      }

                      .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-main {
                        width: ' . $styledata[9] . 'px;
                        float: left;
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 36) . ';
                       }

                      .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-body {
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 52) . ';

                      }

                      .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-icon-icon {
                        font-size:  ' . $styledata[96] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 104) . ';
                      }

                      .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-title {
                        font-size:  ' . $styledata[124] . 'px;
                        color: ' . $styledata[127] . ';
                         padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 136) . ';
                      }

                      .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-description {
                        font-size:  ' . $styledata[152] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 164) . ';
                      }

                     
                      .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-arrow-arrow {
                        width:  ' . $styledata[190] . 'px;
                        height:  ' . $styledata[190] . 'px;
                      }

                      .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-arrow-icon {
                        font-size:  ' . $styledata[180] . 'px;
                      }
                    }
        ';

        $jquery = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-addons-content-boxes-' . $oxiid . '-data"));}, 500);';

        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-animation', $jquery);
    }

}
