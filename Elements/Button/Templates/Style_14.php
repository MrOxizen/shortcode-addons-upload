<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Button\Templates;

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

class Style_14 extends Templates {

    public function public_jquery() {
        wp_enqueue_script('button14', SA_ADDONS_UPLOAD_URL . '/Elements/Button/file/button14.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function default_render($style, $child, $admin) {
        $text = '<div class="sa-button-text">' . $this->text_render($style['sa_btn_text']) . '</div>';
        $icon = (array_key_exists('sa_btn_icon', $style) ? $this->font_awesome_render($style['sa_btn_icon_class']) : '');

        if (array_key_exists('sa_btn_icon_position', $style)):
            $html = $icon . $text;
        else:
            $html = $text . $icon;
        endif;
        echo '  <div class="oxi-addons-align-btn14">
                   <a ' . $this->url_render('sa_btn_link', $style) . ' class="oxi-button-btn14 ' . (array_key_exists('sa_btn_width_choose', $style) ? $style['sa_btn_width_choose'] : '') . ' oxi-material-design" >' . $html . '</a>
                </div>';
    }

    public function old_render() {
        $style = $this->dbdata;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $css = '';
        $styledata = explode('|', $stylefiles[0]);
        $href = '';
        $target = '';
        $jquery = '';
        if ($stylefiles[7] != '') {
            $href = 'href="' . OxiAddonsUrlConvert($stylefiles[7]) . '"';
            if ($styledata[3] != '') {
                $target = 'target="' . $styledata[3] . '"';
            }
        }
        echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">
                <div class="Oxi-addons-btn-' . $oxiid . '">
                    <div class="Oxi-btn-body">
                        <div class="Oxi-btn-align" ' . OxiAddonsAnimation($styledata, 47) . '>
                            <a ' . $target . ' ' . $href . ' class="Oxi-btn Oxi-btn-color-1 oxi-material-design" id="' . $stylefiles[5] . '">' . OxiAddonsTextConvert($stylefiles[3]) . '</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>';
        echo oxi_addons_elements_stylejs('button14', 'button', 'js');


        $textalign = explode(':', $styledata[59]);
        $css .= '.Oxi-addons-btn-' . $oxiid . ' {   
                    float: left;
                    width: 100%;
                    
            }
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-body{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
                text-align: ' . $textalign[0] . ';

            }
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-align{
                display: inline-flex;
                justify-content: center;
                align-items: center;
                }
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn {
                color: ' . $styledata[61] . ';
                overflow: hidden;
                font-size: ' . $styledata[51] . 'px;
                    ' . OxiAddonsFontSettings($styledata, 55) . ';
                text-align: center;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
                width:' . $styledata[7] . 'px;
                max-width:100%;
                height: ' . $styledata[11] . 'px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 65) . ';
                border-style: ' . $styledata[81] . ';
                border-color: ' . $styledata[82] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';
              }
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn:hover {
                color: ' . $styledata[101] . ';
                background: ' . $styledata[103] . ';
                
              }
            .Oxi-addons-btn-' . $oxiid . '  .Oxi-btn-color-1 {
                background: ' . $styledata[63] . ';
              }
             .Oxi-addons-btn-' . $oxiid . ' .oxi-material-design {
                position: relative;
              }
             .Oxi-addons-btn-' . $oxiid . ' .oxi-material-design canvas {
                opacity: 0.25;
                position: absolute;
                top: 0;
                left: 0;
              }

            @media only screen and (min-width : 669px) and (max-width : 993px){
                .Oxi-addons-btn-' . $oxiid . ' {   
                    float: left;
                    width: 100%;
                    display: flex;
                    justify-content: center;
                }
                .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-body{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                }
                
                .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn {
                    overflow: hidden;
                    font-size: ' . $styledata[52] . 'px;
                        ' . OxiAddonsFontSettings($styledata, 56) . ';
                            text-align: center;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
                    width:' . $styledata[8] . 'px;
                    max-width:100%;
                    height: ' . $styledata[12] . 'px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 66) . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 86) . ';
                  }
            }
            @media only screen and (max-width : 668px){
                .Oxi-addons-btn-' . $oxiid . ' {   
                    float: left;
                    width: 100%;
                    display: flex;
                    justify-content: center;
                }
                .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-body{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                }
                
                .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn {
                    overflow: hidden;
                    font-size: ' . $styledata[53] . 'px;
                        ' . OxiAddonsFontSettings($styledata, 57) . '
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
                    width:' . $styledata[9] . 'px;
                    max-width:100%;
                    height: ' . $styledata[13] . 'px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 67) . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';
                  }
            }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
