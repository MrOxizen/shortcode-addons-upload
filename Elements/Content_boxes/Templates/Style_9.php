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

class Style_9 extends Templates {

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
        
//        echo '<pre>';
//        print_r($style['sa-ac-box-content-area-background']);
//        echo '</pre>';

        foreach ($child as $v) {
            $data = $this->Json_Decode($v['rawdata']);

            $img = $icon = $heading = $content = $button = '';
            
            if ($this->media_render('sa_el_content_box_image_top', $data) != '') {
                $img = '<img src="' . $this->media_render('sa_el_content_box_image_top', $data) . '" alt="images" class="oxi-image-img">';
            }
            if (array_key_exists('sa_el_fa_icon', $data) &&  $data['sa_el_fa_icon'] != '') {
                $icon = '
                    <div class="oxi-conten-icon"  ' . $this->animation_render('sa-cb-icon-animation', $style) . '>
                        <div class="oxi-conten-icon-icon">
                            ' . $this->font_awesome_render($data['sa_el_fa_icon']) . '
                        </div>
                    </div> ';
            }
            if (array_key_exists('sa_el_title', $data) &&  $data['sa_el_title'] != '') {
                $heading .= '<div class="oxi-conten-title">
                                ' . $this->text_render($data['sa_el_title']) . '
                            </div>';
            }
            if (array_key_exists('sa_el_content', $data) &&  $data['sa_el_content'] != '') {
                $content .= '<div class="oxi-conten-description">
                                ' . $this->text_render($data['sa_el_content']) . '
                            </div> ';
            }
            if (array_key_exists('sa_el_btn_text', $data) &&  $data['sa_el_btn_text'] != '') {
                $button .= '<div class="oxi-conten-button"  ' . $this->animation_render('sa-cb-button-animation', $style) . '>
                                <a  class="oxi-conten-button-name" ' . $this->url_render('sa_el_button_link', $data) . '>' . $this->text_render($data['sa_el_btn_text']) . '</a>
                            </div> ';
            }

            echo '<div class="' . $this->column_render('sa-ac-column', $style) . ' ' . $admin_class . '">';    
            echo '    <div class="sa_cb_temp_9 ' . $class . '"  ' . $this->animation_render('sa-cb-box-animation', $style) . '>
                        
                            <div class="oxi-main">
                                <div class="oxi-image">
                                    ' . $img . '
                                </div>
                                <div class="oxi-content-body">
                                    ' . $icon . '
                                    ' . $heading . '
                                    ' . $content . '
                                    ' . $button . ' 
                                </div>
                            </div>
                    </div>';

            if ($admin == 'admin'):
                echo '  <div class="oxi-addons-admin-absulote">
                            <div class="oxi-addons-admin-absulate-edit">
                                <button class="btn btn-primary shortcode-addons-template-item-edit" type="button" value="' . $v['id'] . '">Edit</button>
                            </div>
                            <div class="oxi-addons-admin-absulate-delete">
                               <button class="btn btn-danger shortcode-addons-template-item-delete" type="submit" value="' . $v['id'] . '">Delete</button>
                             </div>
                        </div>';
            endif;
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

        $css = '';
        echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">';

        foreach ($listdata as $value) {
            $listfile = explode('||#||', $value['files']);
            $icon = $content = $heading = $button = '';
            if ($listfile[3] != '') {
                $icon = '
                    <div class="oxi-event1-conten-icon">
                        <div class="oxi-event1-conten-icon-icon"  ' . OxiAddonsAnimation($styledata, 153) . '>
                            ' . oxi_addons_font_awesome($listfile[3]) . '
                        </div>
                    </div> ';
            }
            if ($listfile[5] != '') {
                $heading = '<div class="oxi-event1-conten-title">' . OxiAddonsTextConvert($listfile[5]) . '</div>';
            }
            if ($listfile[7] != '') {
                $content = ' <div class="oxi-event1-conten-description">' . OxiAddonsTextConvert($listfile[7]) . '</div>';
            }
            if ($listfile[9] != '' && $listfile[11] != '') {
                $button = ' <div class="oxi-event1-conten-button"  ' . OxiAddonsAnimation($styledata, 217) . '>
                              <a href="' . OxiAddonsUrlConvert($listfile[11]) . '" target="' . $styledata[213] . '"class="oxi-event1-conten-button-name">' . OxiAddonsTextConvert($listfile[9]) . '</a>
                            </div>';
            } elseif ($listfile[9] != '' && $listfile[11] == '') {
                $button = ' <div class="oxi-event1-conten-button"  ' . OxiAddonsAnimation($styledata, 217) . '>
                              <a href="#" target="' . $styledata[213] . '"class="oxi-event1-conten-button-name">' . OxiAddonsTextConvert($listfile[9]) . '</a>
                            </div>';
            }
            echo '<div class="oxi-event1-class ' . OxiAddonsItemRows($styledata, 3) . ' oxi-event1-id-' . $value['styleid'] . '-' . $value['id'] . ' ">
                    <div class="oxi-event1-' . $oxiid . '">
                        <div class="oxi-event1-id">
                            <div class="oxi-event1-main" ' . OxiAddonsAnimation($styledata, 84) . '>
                                <div class="oxi-event1-image">
                                    <div class="oxi-event1-image-img">
                                    </div>
                                </div>
                                <div class="oxi-event1-content-body">
                                    ' . $icon . '
                                    ' . $heading . '
                                    ' . $content . '
                                    ' . $button . '
                                </div>
                            </div>
                        </div>
                    </div>';
            echo '</div>';
            $css .= '.oxi-event1-id-' . $value['styleid'] . '-' . $value['id'] . ' .oxi-event1-image-img{
                        background: url("' . OxiAddonsUrlConvert($listfile[1]) . '");
                  }';
        }
        echo '</div>
      </div>';
        $css .= '
                .oxi-event1-' . $oxiid . ' {
                  width: 100%;
                  margin: 0 auto;
                  overflow: auto;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                }
                .oxi-event1-' . $oxiid . ' .oxi-event1-id{
                    width: ' . $styledata[7] . 'px;
                    float: left;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 62) . ';
                }
                .oxi-event1-' . $oxiid . ' .oxi-event1-main {
                    width: 100%;
                    float: left;
                    position: relative;
                    overflow: hidden;
                    border-style: ' . $styledata[27] . ';
                    border-color: ' . $styledata[28] . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 30) . ';
                     ' . OxiAddonsBoxShadowSanitize($styledata, 78) . '
                }
                .oxi-event1-' . $oxiid . ' .oxi-event1-image {
                  position: relative;
                  width: 100%;
                  float: left;
                  margin-bottom: -60px;
                }
                .oxi-event1-' . $oxiid . ' .oxi-event1-image::after {
                  display: block;
                  content: "";
                  padding-bottom: ' . $styledata[88] . '%;
                }
                .oxi-event1-' . $oxiid . ' .oxi-event1-image-img {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  background-size: cover;
                }
                .oxi-event1-' . $oxiid . ' .oxi-event1-content-body {
                  width: 100%;
                  float: left;
                  background: ' . $styledata[139] . ';
                  text-align: center;
                  padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 46) . ';
                  position: relative;
                  top: 60px;
                  transition: 0.3s;
                }
                .oxi-event1-' . $oxiid . ' .oxi-event1-main:hover .oxi-event1-content-body {
                  top: 0;
                  transition: 0.3s;
                }
                .oxi-event1-' . $oxiid . ' .oxi-event1-conten-icon {
                  display: inline-block;
                  margin-top: -40px;
                  position: relative;
                }
                .oxi-event1-' . $oxiid . ' .oxi-event1-conten-icon-icon {
                  width: ' . $styledata[98] . 'px;
                  height: ' . $styledata[98] . 'px;
                  font-size: ' . $styledata[92] . 'px;
                  color: ' . $styledata[96] . ';
                  background:' . $styledata[137] . ';
                  border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  border-style: ' . $styledata[118] . ';
                  border-color: ' . $styledata[119] . ';
                  border-width:  ' . OxiAddonsPaddingMarginSanitize($styledata, 121) . ';
                }
                .oxi-event1-' . $oxiid . ' .oxi-event1-conten-title {
                  width: 100%;
                  float: left;
                  font-size: ' . $styledata[157] . 'px;
                  color: ' . $styledata[161] . ';
                      ' . OxiAddonsFontSettings($styledata, 163) . '
                  padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 169) . ';
                }
                .oxi-event1-' . $oxiid . ' .oxi-event1-conten-description {
                  width: 100%;
                  float: left;
                   font-size: ' . $styledata[185] . 'px;
                  color: ' . $styledata[189] . ';
                      ' . OxiAddonsFontSettings($styledata, 191) . '
                  padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 197) . ';
                }
                .oxi-event1-' . $oxiid . ' .oxi-event1-conten-button {
                  display: block;
                  width: 100%;
                  float: left;
                  text-align: ' . $styledata[215] . ';
                  padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 286) . ';
                }
                .oxi-event1-' . $oxiid . ' .oxi-event1-conten-button-name {
                  display: inline-block;
                  font-size: ' . $styledata[221] . 'px;
                  color: ' . $styledata[225] . ';
                  background: ' . $styledata[227] . ';
                  border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 229) . ';
                  border-style: ' . $styledata[245] . ';
                  border-color: ' . $styledata[246] . ';
                  border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 248) . ';
                  ' . OxiAddonsFontSettings($styledata, 264) . '
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 270) . ';
                  text-decoration: none;
                }
                .oxi-event1-' . $oxiid . ' .oxi-event1-conten-button-name:hover {
                  color: ' . $styledata[302] . ';
                  background: ' . $styledata[304] . ';
                  border-style: ' . $styledata[306] . ';
                  border-color: ' . $styledata[307] . ';
                  border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 309) . ';
                   text-decoration: none;
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){
                    .oxi-event1-' . $oxiid . ' {
                       
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . ';
                        
                      }

                      .oxi-event1-' . $oxiid . ' .oxi-event1-main {
                          width: ' . $styledata[8] . 'px;
                          border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 12) . ';
                          border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
                      }
                      
                      .oxi-event1-' . $oxiid . ' .oxi-event1-content-body {
                       
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 47) . ';
                       
                      }
                     
                      .oxi-event1-' . $oxiid . ' .oxi-event1-conten-icon-icon {
                        width: ' . $styledata[99] . 'px;
                        height: ' . $styledata[99] . 'px;
                        font-size: ' . $styledata[93] . 'px;
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
                        border-width:  ' . OxiAddonsPaddingMarginSanitize($styledata, 122) . ';
                      }
                      .oxi-event1-' . $oxiid . ' .oxi-event1-conten-title {
                       font-size: ' . $styledata[158] . 'px;
                       padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 170) . ';
                      }
                      .oxi-event1-' . $oxiid . ' .oxi-event1-conten-description {
                        
                         font-size: ' . $styledata[186] . 'px;
                       padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 198) . ';
                      }
                      .oxi-event1-' . $oxiid . ' .oxi-event1-conten-button {
                      
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 287) . ';
                      }
                      .oxi-event1-' . $oxiid . ' .oxi-event1-conten-button-name {
                       
                        font-size: ' . $styledata[222] . 'px;
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 230) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 249) . ';
                      
                          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 271) . ';
                        }
                      .oxi-event1-' . $oxiid . ' .oxi-event1-conten-button-name:hover {
                       
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 310) . ';
                         }
                     }
               @media only screen and (max-width : 668px){
                      .oxi-event1-' . $oxiid . ' {
                       
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 64) . ';
                        
                      }

                      .oxi-event1-' . $oxiid . ' .oxi-event1-main {
                          width: ' . $styledata[8] . 'px;
                          border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ';
                          border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
                      }
                      
                      .oxi-event1-' . $oxiid . ' .oxi-event1-content-body {
                       
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 48) . ';
                       
                      }
                     
                      .oxi-event1-' . $oxiid . ' .oxi-event1-conten-icon-icon {
                        width: ' . $styledata[100] . 'px;
                        height: ' . $styledata[100] . 'px;
                        font-size: ' . $styledata[94] . 'px;
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 104) . ';
                        border-width:  ' . OxiAddonsPaddingMarginSanitize($styledata, 123) . ';
                      }
                      .oxi-event1-' . $oxiid . ' .oxi-event1-conten-title {
                       font-size: ' . $styledata[159] . 'px;
                       padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 171) . ';
                      }
                      .oxi-event1-' . $oxiid . ' .oxi-event1-conten-description {
                        
                         font-size: ' . $styledata[187] . 'px;
                       padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 199) . ';
                      }
                      .oxi-event1-' . $oxiid . ' .oxi-event1-conten-button {
                      
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 288) . ';
                      }
                      .oxi-event1-' . $oxiid . ' .oxi-event1-conten-button-name {
                       
                        font-size: ' . $styledata[223] . 'px;
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 231) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 250) . ';
                      
                          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 272) . ';
                        }
                      .oxi-event1-' . $oxiid . ' .oxi-event1-conten-button-name:hover {
                       
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 311) . ';
                         }
                    }
                ';

        $jquery = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-addons-content-boxes-' . $oxiid . '-data"));}, 500);';

        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-animation', $jquery);
    }

}
