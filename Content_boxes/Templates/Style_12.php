<?php

namespace SHORTCODE_ADDONS_UPLOAD\Content_boxes\Templates;

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

class Style_12 extends Templates {

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
//            print_r($v);
//            echo '</pre>';

            $icon = $heading = $descriptions = $arrow_icon = $img = '';


            if ($this->media_render('sa_el_content_box_image_bg', $data) != '') {
                $img = '  <div class="oxi-addons-img-div" style="background: url(' . $this->media_render('sa_el_content_box_image_bg', $data) . ');
                            background-size: cover;">
                          </div>';
            }
            if (array_key_exists('sa_el_cb_fa_icon', $data) && $data['sa_el_cb_fa_icon'] != '') {
                $icon = '<div class="oxi-addons-box-icon"  ' . $this->animation_render('sa-c-b-icon-animation', $style) . '>                        
                          ' . $this->font_awesome_render($data['sa_el_cb_fa_icon']) . '
                        </div>';
            }
            if (array_key_exists('sa_el_cb_title', $data) && $data['sa_el_cb_title'] != '') {
                $heading = '<div class="oxi-addons-box-name">
                                ' . $this->text_render($data['sa_el_cb_title']) . '
                            </div>';
            }
            if (array_key_exists('sa_el_cb_content', $data) && $data['sa_el_cb_content'] != '') {
                $descriptions = '<div class="oxi-addons-box-desc">
                                    ' . $this->text_render($data['sa_el_cb_content']) . '
                                </div>';
            }
            if (array_key_exists('sa_el_cb_fa_arrow_icon', $data) && $data['sa_el_cb_fa_arrow_icon'] != '') {
                $arrow_icon = '<div class="oxi-addons-box-arrow"    ' . $this->animation_render('sa-c-b-arrow-animation', $style) . '>
                                    <a ' . $this->url_render('sa_el_arrow_icon_link', $data) . '>' . $this->font_awesome_render($data['sa_el_cb_fa_arrow_icon']) . '</a>
                               </div>';
            }



            echo '<div class="' . $this->column_render('sa-ac-column', $style) . ' ' . $admin_class . '">';
            echo '  <div class="oxi_cb_temp_12    oxi_cb_temp_12_'.$key.'     ' . $class . '">
                        <div class="oxi-addons-box" ' . $this->animation_render('sa-c-b-box-animation', $style) . '>
                          <div class="oxi-addons-box-outer">
                                ' . $img . '
                            <div class="oxi-addons-box-inner">
                                    ' . $icon . '
                                    ' . $heading . '
                                    ' . $descriptions . '
                                    ' . $arrow_icon . '
                              </div>
                          </div>
                        </div>';
            echo '  </div>';
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
            $icon = $header = $content = '';

            if ($listfile[3] != '') {
                $header = '<div class="oxi-cb11-title">' . OxiAddonsTextConvert($listfile[3]) . '</div>';
            }
            if ($listfile[5] != '') {
                $content = '<div class="oxi-cb11-description">' . OxiAddonsTextConvert($listfile[5]) . '</div>';
            }
            echo '   <div class="oxi-cb11 ' . OxiAddonsItemRows($styledata, 3) . ' ">
                    <div class="oxi-cb11-main-' . $oxiid . '">
                      <div class="oxi-cb11-body">
                        <div class="oxi-cb11-icon">
                           <div class="oxi-cb11-icon-icon">
                            ' . oxi_addons_font_awesome($listfile[1]) . '
                          </div>
                        </div>
                        <div class="oxi-cb11-hrbox">
                          <div class="oxi-cb11-hrbox-box">
                          </div>
                        </div>
                        ' . $header . '
                        ' . $content . '
                      </div>
                   </div>';
            echo '</div>';
        }

        echo '</div>
      </div>';
        $css = '.oxi-cb11-main-' . $oxiid . ' {
                width: 100%;
                margin: 0 auto;
                overflow: auto;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 66) . ';
              }

              .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-body {
                width: ' . $styledata[7] . 'px;
                float: left;
               ' . OxiAddonsBGImage($styledata, 11) . '
                border-style: ' . $styledata[31] . ';
                border-color: ' . $styledata[32] . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 34) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 82) . '
                overflow: hidden;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 50) . ';
              }

              .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-icon {
                width: 100%;
                float: left;
                text-align: ' . $styledata[100] . ';
              }

              .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-icon-icon {
                font-size: ' . $styledata[94] . 'px;
                color: ' . $styledata[98] . ';
                display: inline-flex;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
                margin-top: 40px;
                transition: all 0.5s;
              }

              .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-hrbox {
                width: 100%;
                float: left;
                text-align: ' . $styledata[120] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . ';
              }

              .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-hrbox-box {
                display: inline-block;
                width: ' . $styledata[122] . '%;
                height: ' . $styledata[126] . 'px;
                background: ' . $styledata[118] . ';
                transition: all 0.5s;
              }

              .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-title {
                width: 100%;
                float: left;
                font-size: ' . $styledata[146] . 'px;
                color: ' . $styledata[150] . ';
                ' . OxiAddonsFontSettings($styledata, 152) . '  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 158) . ';
                transition: all 0.5s;

              }
              .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-description {
                width: 100%;
                float: left;
                font-size: ' . $styledata[174] . 'px;
                color: ' . $styledata[178] . ';
                ' . OxiAddonsFontSettings($styledata, 180) . '  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 186) . ';
                opacity: 0;
                transform: translateY(-40px);
                transition: all 0.5s;
              }
              .oxi-cb11-body:hover {
                background: ' . $styledata[92] . ';
                transition: all 0s;
              }
              .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-body:hover .oxi-cb11-icon-icon{
                transform: translateY(-40px);
                transition: all 0.5s;
              }
              .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-body:hover .oxi-cb11-hrbox-box {
                transform: translateY(10px);
                transition: all 0.5s;
              }
              .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-body:hover .oxi-cb11-title {
                transform: translateY(-60px);
                transition: all 0.5s;
              }
              .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-body:hover .oxi-cb11-description {
                transform: translateY(-20px);
                transition: all 0.5s;
                opacity: 1;
              }

          @media only screen and (min-width : 669px) and (max-width : 993px){
                  .oxi-cb11-main-' . $oxiid . ' {
                    
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 67) . ';
                  }

                  .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-body {
                    width: ' . $styledata[8] . 'px;
                   border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . ';
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 51) . ';
                  }
                  .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-icon-icon {
                    font-size: ' . $styledata[95] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
                   }

                  .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-hrbox {
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
                  }

                  .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-hrbox-box {
                    width: ' . $styledata[123] . '%;
                    height: ' . $styledata[127] . 'px;
                   }

                  .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-title {
                   font-size: ' . $styledata[147] . 'px;
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 159) . ';
                   }
                  .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-description {
                   font-size: ' . $styledata[176] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
                   } 
            }
          @media only screen and (max-width : 668px){
                    .oxi-cb11-main-' . $oxiid . ' {
                    
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 68) . ';
                    }

                  .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-body {
                    width: ' . $styledata[8] . 'px;
                   border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 36) . ';
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 52) . ';
                  }
                  .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-icon-icon {
                    font-size: ' . $styledata[95] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 104) . ';
                   }

                  .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-hrbox {
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 132) . ';
                  }

                  .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-hrbox-box {
                    width: ' . $styledata[124] . '%;
                    height: ' . $styledata[128] . 'px;
                   }

                  .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-title {
                   font-size: ' . $styledata[148] . 'px;
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 160) . ';
                   }
                  .oxi-cb11-main-' . $oxiid . ' .oxi-cb11-description {
                   font-size: ' . $styledata[177] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 188) . ';
                   }   
            }
        ';

        $jquery = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-addons-content-boxes-' . $oxiid . '-data"));}, 500);';

        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-animation', $jquery);
    }

}
