<?php

namespace SHORTCODE_ADDONS_UPLOAD\Social_share\Templates;

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

class Style_3 extends Templates {

    public function public_jquery() {
        wp_enqueue_script('jquery-kyco-easyshare-min', SA_ADDONS_UPLOAD_URL . '/Social_share/file/jquery-kyco-easyshare-min.js', true, SA_ADDONS_PLUGIN_VERSION);
        $this->JSHANDLE = 'jquery-kyco-easyshare-min';
    }

    public function default_render($style, $child, $admin) {
        $icons = '';

        $all_data = (array_key_exists('sa_ss_repeater', $style) && is_array($style['sa_ss_repeater'])) ? $style['sa_ss_repeater'] : [];
        foreach ($all_data as $key => $value) {
            $icons .= '
                <div class="oxi-soical-share-' . $key . '" ' . $this->animation_render('sa_ss_animation', $style) . '>
                    <div class="oxi-addons-social" >
                        <div class="oxi-addons-main-share-circle oxi-addons-'.$value['sa_ss_social_media'].'" data-easyshare-button="'.$value['sa_ss_social_media'].'">
                            <div class="oxi-addons-main-icon-'.$value['sa_ss_social_media'].'">
                            ' . $this->font_awesome_render($value['sa_ss_icon_icon']) . '
                            </div>
                        </div> 
                    </div> 
                </div> ';
        }
        global $wp;
        echo '<div class="oxi-addons-wrapper-ss3">
                        <div class="oxi-addons-wrapper-main-social" data-easyshare data-easyshare-url="' . home_url($wp->request) . '">
                            <div class="oxi-addons-main-social"> 
                                ' . $icons . ' 
                            </div>
                        </div> 
                </div>';
    }

    public function old_render() {
        $style = $this->dbdata;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = $jquery = $facebook = $twitter = $pinterest = $linkedin = $google = '';

        echo oxi_addons_elements_stylejs('jquery-kyco-easyshare-min', 'social_share', 'js');
        if ($styledata[141] == 'true') {
            $facebook = '
                 <div class="oxi-addons-social" >
                    <div class="oxi-addons-main-share-circle oxi-addons-facebook" data-easyshare-button="facebook" ' . OxiAddonsAnimation($styledata, 33) . '>
                        <div class="oxi-addons-main-icon-facebook">
                        ' . oxi_addons_font_awesome('' . $stylefiles[4] . '') . ' 
                        </div>
                    </div> 
                </div> 
        ';
        }
        if ($styledata[155] == 'true') {
            $twitter = '
        <div class="oxi-addons-social" >
            <div class="oxi-addons-main-share-circle oxi-addons-twitter" data-easyshare-button="twitter"  ' . OxiAddonsAnimation($styledata, 33) . '>
                <div class="oxi-addons-main-icon-twitter">
                ' . oxi_addons_font_awesome('' . $stylefiles[8] . '') . ' 
                </div>
            </div> 
        </div> 
        ';
        }
        if ($styledata[169] == 'true') {
            $linkedin = '
                    <div class="oxi-addons-social" >
                        <div class="oxi-addons-main-share-circle oxi-addons-linkedin" data-easyshare-button="linkedin"  ' . OxiAddonsAnimation($styledata, 33) . '>
                            <div class="oxi-addons-main-icon-linkedin">
                            ' . oxi_addons_font_awesome('' . $stylefiles[12] . '') . ' 
                            </div>
                        </div> 
                    </div> 
        ';
        }
        if ($styledata[183] == 'true') {
            $google = '
             <div class="oxi-addons-social" >
                <div class="oxi-addons-main-share-circle oxi-addons-google" data-easyshare-button="google"  ' . OxiAddonsAnimation($styledata, 33) . '>
                    <div class="oxi-addons-main-icon-google">
                    ' . oxi_addons_font_awesome('' . $stylefiles[16] . '') . ' 
                    </div>
                </div> 
            </div> 
        ';
        }
        if ($styledata[197] == 'true') {
            $pinterest = '
            <div class="oxi-addons-social" >
                <div class="oxi-addons-main-share-circle oxi-addons-pinterest" data-easyshare-button="pinterest"  ' . OxiAddonsAnimation($styledata, 33) . '>
                    <div class="oxi-addons-main-icon-pinterest">
                    ' . oxi_addons_font_awesome('' . $stylefiles[20] . '') . ' 
                    </div>
                </div> 
            </div> 
        ';
        }
        global $wp;
        echo '  <div class="oxi-addons-container">
                <div class="oxi-addons-row">
                    <div class="oxi-addons-wrapper-' . $oxiid . '">
                        <div class="oxi-addons-wrapper-main-social" data-easyshare data-easyshare-url="' . home_url($wp->request) . '">
                            <div class="oxi-addons-main-social"> 
                                ' . $facebook . '
                                ' . $twitter . '
                                ' . $linkedin . '
                                ' . $google . '
                                ' . $pinterest . '
                            </div>
                        </div> 
                    </div>
                </div> 
            </div> 
    ';
        $aling = '';
        if ($styledata[3] === 'center') {
            $aling = 'justify-content: center;';
        } elseif ($styledata[3] === 'left') {
            $aling = 'justify-content: flex-start;';
        } elseif ($styledata[3] === 'right') {
            $aling = 'justify-content: flex-end;';
        }
        $css .= '.oxi-addons-container *{
                transition: none !important; 
            }
            .oxi-addons-wrapper-' . $oxiid . '{
              width: 100%;
              display: flex;   
              padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . '; 
             ' . $aling . '
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-main-social{
                  display: flex;     
                  flex-wrap: wrap;
                  justify-content:center;
                  align-items: center;
            }
             .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-social { 
                display: flex;   
                flex-wrap: wrap;   
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-social {
                display: flex;
                align-items: center;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 89) . '; 
                cursor: pointer;
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-share-circle {
                display: inline-flex;  
                width: ' . $styledata[43] . 'px;
                height: ' . $styledata[43] . 'px;
                align-items: center;
                max-width: 100%;
                justify-content: center;
                -webkit-transition: all 0.5s ease-in-out !important; 
                transition: all 0.5s ease-in-out  !important;
                border: ' . $styledata[53] . 'px ' . $styledata[54] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 57) . '; 
                ' . OxiAddonsBoxShadowSanitize($styledata, 21) . ';  
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-share-circle:hover {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 105) . '; 
                ' . OxiAddonsBoxShadowSanitize($styledata, 27) . ';  
            } 
            .oxi-addons-wrapper-' . $oxiid . '  .oxi-icons{
                font-size:' . $styledata[121] . 'px; 
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-facebook {
                color: ' . $styledata[143] . ';
                Background: ' . $styledata[145] . ';
                border-color: ' . $styledata[147] . ';
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-facebook:hover {
                color: ' . $styledata[149] . ';
                Background: ' . $styledata[151] . '; 
                border-color: ' . $styledata[153] . '; 
            } 

            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-twitter {
                color: ' . $styledata[157] . ';
                Background: ' . $styledata[159] . ';
                border-color: ' . $styledata[161] . '; 
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-twitter:hover {
                color: ' . $styledata[163] . ';
                Background: ' . $styledata[165] . '; 
                border-color: ' . $styledata[167] . '; 
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-linkedin {
                color: ' . $styledata[171] . ';
                Background: ' . $styledata[173] . ';
                border-color: ' . $styledata[175] . '; 
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-linkedin:hover {
                color: ' . $styledata[177] . ';
                Background: ' . $styledata[179] . '; 
                border-color: ' . $styledata[181] . '; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-google {
                color: ' . $styledata[185] . ';
                Background: ' . $styledata[187] . ';
                border-color: ' . $styledata[189] . '; 
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-google:hover {
                color: ' . $styledata[191] . ';
                Background: ' . $styledata[193] . '; 
                border-color: ' . $styledata[195] . '; 
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-pinterest {
                color: ' . $styledata[199] . ';
                Background: ' . $styledata[201] . ';
                border-color: ' . $styledata[203] . '; 
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-pinterest:hover {
                color: ' . $styledata[205] . ';
                Background: ' . $styledata[207] . '; 
                border-color: ' . $styledata[209] . '; 
            } 
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-wrapper-' . $oxiid . '{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 6) . '; 
                 }
                  .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-social {
                      padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 90) . '; 
                  } 
                  .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-share-circle {
                      width: ' . $styledata[44] . 'px;
                      height: ' . $styledata[44] . 'px;
                      border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 58) . '; 
                   } 
                  .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-share-circle:hover {
                      border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 106) . '; 
                   } 
                  .oxi-addons-wrapper-' . $oxiid . '  .oxi-icons{
                      font-size:' . $styledata[122] . 'px; 
                  } 
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-wrapper-' . $oxiid . '{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . '; 
                 }
                  .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-social {
                      padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 91) . '; 
                  } 
                  .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-share-circle {
                      width: ' . $styledata[45] . 'px;
                      height: ' . $styledata[45] . 'px;
                      border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 59) . '; 
                   } 
                  .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-share-circle:hover {
                      border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 107) . '; 
                   } 
                  .oxi-addons-wrapper-' . $oxiid . '  .oxi-icons{
                      font-size:' . $styledata[123] . 'px; 
                  } 
            }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
