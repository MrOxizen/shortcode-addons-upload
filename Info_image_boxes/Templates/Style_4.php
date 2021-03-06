<?php

namespace SHORTCODE_ADDONS_UPLOAD\Info_image_boxes\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_4
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_4 extends Templates {

    public function default_render($style, $child, $admin) {

         $all_data = (array_key_exists('sa_Info_image_boxes_data', $style) && is_array($style['sa_Info_image_boxes_data'])) ? $style['sa_Info_image_boxes_data'] : [];
        foreach ($all_data as $key => $value) {
//            echo '<pre>';
//            print_r($value);
//            echo '</pre>';
            $heading = $details = $button = $img_center = $img_ver_position = $images = $content = '';

            if ($this->media_render('sa_info_image_img_src', $value) != '') {
                $images = '<div class="oxi-addons-image-main">'
                        . '<img src="' . $this->media_render('sa_info_image_img_src', $value) . '" alt="images" class="oxi-addons-img"></div>';
            }
            if (array_key_exists('sa_info_image_h_text', $value)) {
                if ($value['sa_info_image_h_text'] != '') {
                    $heading = '  <div class="oxi-addons-heading">
                ' . $this->text_render($value['sa_info_image_h_text']) . '
                </div>';
                }
            }
            if (array_key_exists('sa_info_image_content_text', $value)) {
                if ($value['sa_info_image_content_text'] != '') {
                    $details = '<div class="oxi-addons-details">
                ' . $this->text_render($value['sa_info_image_content_text']) . '
                </div>';
                }
            }
            if ($style['sa_info_image_img_v_pos'] == 'sa_info_image_img_alignment_left') {
                $img_ver_position .= ' 
                    ' . $images . '  
                    <div class="oxi-addons-main-content">
                        ' . $heading . ' 
                        ' . $details . '  
                    </div>
                ';
            } else {
                $img_ver_position .= '  
                <div class="oxi-addons-main-content">
                    ' . $heading . ' 
                    ' . $details . '  
                </div>
                ' . $images . '  
            ';
            }
            $content = '<div class="oxi-addons-main-wrapper-style-4 oxi-addons-main-wrapper-style-4-'.$key.' " >
                          
                            ' . $img_ver_position . '
                        </div>';
            echo '<div class=" oxi-addons-info-image-parent-wrapper-style-4 ' . $this->column_render('sa_info_image_column', $style) . '">
                      <div class="sa_addons_icon_boxes_container ">';
            if (array_key_exists('sa_info_image_url-url', $value)) {
                if ($value['sa_info_image_url-url'] != '') {
                    echo '<a ' . $this->url_render('sa_info_image_url', $value) . '  >
                                        ' . $content . '
                                   </a>';
                } else {
                    echo $content;
                }
            }
           
            echo '</div>';
            echo '</div>';
        }
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';

        echo '<div class="oxi-addons-container"> <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            $heading = $details = $button = $img_center = $img_ver_position = $images = $content = '';

            if ($data[1] != '') {
                $images = '
                      <div class="oxi-addons-image-main">
                          <img src="' . OxiAddonsUrlConvert($data[1]) . '" alt="images" class="oxi-addons-img">
                      </div> 
                      ';
            }
            if ($data[3] != '') {
                $heading = '  <div class="oxi-addons-heading">
                  ' . OxiAddonsTextConvert($data[3]) . '
                  </div>';
            }
            if ($data[5] != '') {
                $details = '<div class="oxi-addons-details">
                  ' . OxiAddonsTextConvert($data[5]) . '
                  </div>';
            }
            if ($styledata[204] == 'left') {
                $img_ver_position = ' 
                          ' . $images . '  
                          <div class="oxi-addons-main-content">
                              ' . $heading . ' 
                              ' . $details . '  
                          </div>
                      ';
            } else {
                $img_ver_position = '  
                      <div class="oxi-addons-main-content">
                          ' . $heading . ' 
                          ' . $details . '  
                      </div>
                      ' . $images . '  
                  ';
            }
            $content = '
                  <div ' . OxiAddonsAnimation($styledata, 63) . '>
                      <div class="oxi-addons-main-wrapper-' . $oxiid . ' oxi-addons-main-wrapper-' . $oxiid . '-' . $value['id'] . '"  >
                         ' . $img_ver_position . ' 
                      </div>
                  </div>
                  ';
            echo '<div class="oxi-addons-parent-wrapper-' . $oxiid . ' ' . OxiAddonsItemRows($styledata, 3) . ' ">';
            if ($data[7] != '') {
                echo '<a  href="' . OxiAddonsUrlConvert($data[7]) . '" target="' . $styledata[9] . '" >
                               ' . $content . '
                          </a>';
            } else {
                echo $content;
            }


            echo '</div>';
        }
        echo '</div></div>';
        if ($styledata[82] == 'top') {
            $img_center = 'align-items: start;';
        } elseif ($styledata[82] == 'middle') {
            $img_center = 'align-items: center;';
        } else {
            $img_center = 'align-items: end;';
        }

        $css .= '
          .oxi-addons-parent-wrapper-' . $oxiid . '{
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 47) . '; 
          }

          .oxi-addons-main-wrapper-' . $oxiid . '{   
              position: relative;
              display: flex; 
              width: 100%;
              float: left; 
              overflow: hidden;  
              background: ' . $styledata[7] . '; 
              border:  ' . $styledata[9] . 'px ' . $styledata[10] . ';
              border-color: ' . $styledata[13] . ';
              border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';  
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . '; 
              ' . OxiAddonsBoxShadowSanitize($styledata, 68) . ';  
          }
          .oxi-addons-main-wrapper-' . $oxiid . ':hover{    
              background: ' . $styledata[206] . '; 
              ' . OxiAddonsBoxShadowSanitize($styledata, 198) . ';  
          }
          .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-main{
              width: auto; 
              display: flex; 
              ' . $img_center . '  
          }
          .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-main .oxi-addons-img{ 
              display: flex; 
              align-items: center; 
              justify-content: center;
              width: ' . $styledata[74] . 'px;
              height: ' . $styledata[78] . 'px;     
              background: ' . $styledata[84] . ';
              border:  ' . $styledata[86] . 'px ' . $styledata[87] . ';
              border-color: ' . $styledata[90] . ';
              border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 92) . ';
              ' . OxiAddonsBoxShadowSanitize($styledata, 124) . '
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 108) . ';    
          } 
          .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content{
              width: 100%;
              float: left;    
          }
          .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-heading{
              font-size: ' . $styledata[130] . 'px;
              ' . OxiAddonsFontSettings($styledata, 136) . ';
              color: ' . $styledata[134] . ';
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 142) . '; 
              width: 100%;
              float: left;
          } 
          .oxi-addons-main-wrapper-' . $oxiid . ':hover .oxi-addons-main-content .oxi-addons-heading{ 
              color: ' . $styledata[208] . '; 
          }  
          .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-details{
              font-size: ' . $styledata[170] . 'px;
              ' . OxiAddonsFontSettings($styledata, 176) . ';
              color: ' . $styledata[174] . ';
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 182) . ';
              width: 100%;
              float: left; 
          }
          .oxi-addons-main-wrapper-' . $oxiid . ':hover .oxi-addons-main-content .oxi-addons-details{ 
              color: ' . $styledata[210] . '; 
          }

          @media only screen and (min-width : 669px) and (max-width : 993px){

              .oxi-addons-parent-wrapper-' . $oxiid . '{
                  padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 48) . '; 
              }
              .oxi-addons-main-wrapper-' . $oxiid . '{    
                  border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';  
                  padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';  
              } 
              .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-main .oxi-addons-img{  
                  width: ' . $styledata[75] . 'px;
                  height: ' . $styledata[79] . 'px;      
                  border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . '; 
                  padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 109) . ';    
              }  
              .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-heading{
                  font-size: ' . $styledata[131] . 'px;  
                  padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 143) . ';  
              } 
              .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-heading span{
                  font-size: ' . $styledata[159] . 'px; 
              } 
              .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-details{
                  font-size: ' . $styledata[171] . 'px; 
                  padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 183) . '; 
              }
          }
          @media only screen and (max-width : 668px){
              .oxi-addons-parent-wrapper-' . $oxiid . '{
                  padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . '; 
              }
              .oxi-addons-main-wrapper-' . $oxiid . '{    
                  border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';  
                  padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';  
              } 
              .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-main .oxi-addons-img{  
                  width: ' . $styledata[76] . 'px;
                  height: ' . $styledata[80] . 'px;      
                  border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 94) . '; 
                  padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 110) . ';    
              }  
              .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-heading{
                  font-size: ' . $styledata[132] . 'px;  
                  padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 144) . ';  
              } 
              .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-heading span{
                  font-size: ' . $styledata[160] . 'px; 
              } 
              .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-main-content .oxi-addons-details{
                  font-size: ' . $styledata[172] . 'px; 
                  padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 184) . '; 
              }

          }
      ';
        $js = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-addons-main-wrapper-' . $oxiid . '"));}, 500);';
        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-jquery', $js);
    }

}
