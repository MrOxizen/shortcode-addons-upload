<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Button\Templates;

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

class Style_16 extends Templates {

    public function inline_public_css() {
        $position = '';
        $style = $this->style;

        $iconcls = $style['sa_btn_icon_distance-size'];
        $hovericoncls = $style['sa_btn_h_icon_distance-size'];
        $hmargin = $iconcls - $hovericoncls;
        if (array_key_exists('sa_btn_icon_position', $style) && $style['sa_btn_icon_position'] != '0') {
            $position = '.' . $this->WRAPPER . ' .oxi-addons-align-btn16 .oxi-button-btn16 .oxi-icons {
                            margin-right: ' . $iconcls . 'px;
                        }
                        .' . $this->WRAPPER . ' .oxi-addons-align-btn16 .oxi-button-btn16:hover .oxi-icons {
                            margin-right: ' . $hovericoncls . 'px;
                            margin-left: ' . $hmargin . 'px;
                        }';
        } else {
            $position = '.' . $this->WRAPPER . ' .oxi-addons-align-btn16 .oxi-button-btn16 .oxi-icons {
                            margin-left: ' . $iconcls . 'px;
                          }
                         .' . $this->WRAPPER . ' .oxi-addons-align-btn16 .oxi-button-btn16:hover .oxi-icons {
                            margin-left: ' . $hovericoncls . 'px;
                            margin-right: ' . $hmargin . 'px;    
                        }';
        }
        $position;
        return $position;
    }

    public function default_render($style, $child, $admin) {
        $html = '';
        $text = '<div class="sa-button-text">' . $this->text_render($style['sa_btn_text']) . '</div>';
        $icon = (array_key_exists('sa_btn_icon', $style) && $style['sa_btn_icon'] != '0' ? $this->font_awesome_render($style['sa_btn_icon_class']) : '');

        if (array_key_exists('sa_btn_icon_position', $style) && $style['sa_btn_icon_position'] != '0'):
            $html = $icon . $text;
        else:
            $html = $text . $icon;
        endif;

        echo '  <div class="oxi-addons-align-btn16">
                    <a ' . $this->animation_render('sa_btn_animation', $style) . ' ' . $this->url_render('sa_btn_link', $style) . ' class="oxi-button-btn16 ' . (array_key_exists('sa_btn_width_choose', $style) && $style['sa_btn_width_choose'] != '0' ? $style['sa_btn_width_choose'] : '') . ' " >' . $html . '</a>
                </div>
                ';
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
        $icon = '';
        $text = '';
        if ($stylefiles[9] != '') {
            $icon = '<div class="oxi-btn-icon-body">   
                    <div class="oxi-btn-icon">  ' . oxi_addons_font_awesome($stylefiles[9]) . ' </div>
                </div>';
        }
        if ($stylefiles[3] != '') {
            $text = '<div class="oxi-btn-txt">  ' . OxiAddonsTextConvert($stylefiles[3]) . '</div>';
        }

        $position = '';
        if ($styledata[191] == 1) {
            $position = '<a ' . $target . ' ' . $href . ' class="Oxi-btn Oxi-btn-style" id="' . $stylefiles[5] . '" > 
                        ' . $icon . '
                        ' . $text . '
                    </a>';
        } else {
            $position = '<a ' . $target . ' ' . $href . ' class="Oxi-btn Oxi-btn-style" id="' . $stylefiles[5] . '" > 
                        ' . $text . '
                        ' . $icon . '
                    </a>';
        }
        echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">
                <div class="Oxi-addons-btn-' . $oxiid . '" >
                    <div class="Oxi-btn-body">
                        <div class="Oxi-btn-align" ' . OxiAddonsAnimation($styledata, 43) . '>
                          ' . $position . '  
                      </div>
                    </div>
                </div>
            </div>
          </div>';
        if ($styledata[191] == 1) {
            $pdLeft = $styledata[167];
            $pdRight = $styledata[171] / 2;
            $pdLeft = $pdLeft + $pdRight;
        } else {
            $pdLeft = $styledata[167] / 2;
            $pdRight = $styledata[171];
            $pdRight = $pdLeft + $pdRight;
        }

        $textalign = explode(':', $styledata[55]);
        $css .= '.Oxi-addons-btn-' . $oxiid . ' {   
                    float: left;
                    width: 100%;
            }
            
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-body{
                --width: ' . $styledata[7] . 'px; 	
                text-align: ' . $textalign[0] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';
                    
            }
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-align{
                background: ' . $styledata[59] . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 61) . ';
                border-style: ' . $styledata[77] . ';
                border-color: ' . $styledata[78] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
                
                display: inline-flex;
                justify-content: center;
                align-items: center;
            }
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn{
                position: relative;
                border: none;
                width: var(--width);
                max-width: 100%;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';
            }
            .Oxi-addons-btn-' . $oxiid . ' .oxi-btn-icon-body{
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 159) . ';
                
            }
            .Oxi-addons-btn-' . $oxiid . ' .oxi-btn-icon{
                font-size: ' . $styledata[103] . 'px;
                color: ' . $styledata[107] . ';
                background: ' . $styledata[109] . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 111) . ';
                border-style: ' . $styledata[127] . ';
                border-color: ' . $styledata[128] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
                width: ' . $styledata[151] . 'px;
                height: ' . $styledata[155] . 'px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-align:hover .oxi-btn-icon-body{
                border: none;
                padding-right: ' . $pdRight . 'px;
                padding-left: ' . $pdLeft . 'px;
            }
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-align:hover .oxi-btn-icon{
                color: ' . $styledata[147] . ';
                background: ' . $styledata[149] . ';
                border-color: ' . $styledata[101] . ';
                transition: none;
            }
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-align:hover .oxi-btn-txt{
                color: ' . $styledata[97] . ';
            }
            
            .Oxi-addons-btn-' . $oxiid . ' .oxi-btn-txt{
                font-size:' . $styledata[47] . 'px;
                ' . OxiAddonsFontSettings($styledata, 51) . '
                text-align: center;
                color:' . $styledata[57] . ';
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 175) . ';
            }
            
            @media only screen and (min-width : 669px) and (max-width : 993px){
                  
                  .Oxi-addons-btn-' . $oxiid . '{ 	
                          display: flex;
                          justify-content: center;
                  }
                  .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-body{
                      --width: ' . $styledata[8] . 'px; 	
                      display: flex;
                      justify-content: center;
                      padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 28) . ';

                  }
                  .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-align{
                      padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 12) . ';
                      border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 62) . ';
                      border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
                      width: var(--width);
                      max-width: 100%;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                  }
                  
                  .Oxi-addons-btn-' . $oxiid . ' .oxi-btn-icon-body{
                      padding:' . OxiAddonsPaddingMarginSanitize($styledata, 160) . ';

                  }
                  .Oxi-addons-btn-' . $oxiid . ' .oxi-btn-icon{
                      font-size: ' . $styledata[104] . 'px;
                      border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 112) . ';
                      border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 132) . ';
                      width: ' . $styledata[152] . 'px;
                      height: ' . $styledata[156] . 'px;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                  }

                  .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-align:hover .oxi-btn-icon-body{
                      border: none;
                      padding-right: ' . $pdRight . 'px;
                      padding-left: ' . $pdLeft . 'px;
                  }
                  .Oxi-addons-btn-' . $oxiid . ' .oxi-btn-txt{
                      font-size:' . $styledata[48] . 'px;
                      padding:' . OxiAddonsPaddingMarginSanitize($styledata, 176) . ';
                  }

            }
            @media only screen and (max-width : 668px){
                .Oxi-addons-btn-' . $oxiid . '{ 	
                          display: flex;
                          justify-content: center;
                  }
                  .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-body{
                      --width: ' . $styledata[9] . 'px; 	
                      display: flex;
                      justify-content: center;
                      padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 29) . ';

                  }
                  .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-align{
                      padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ';
                      border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . ';
                      border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
                      width: var(--width);
                      max-width: 100%;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                  }
                  
                  .Oxi-addons-btn-' . $oxiid . ' .oxi-btn-icon-body{
                      padding:' . OxiAddonsPaddingMarginSanitize($styledata, 161) . ';

                  }
                  .Oxi-addons-btn-' . $oxiid . ' .oxi-btn-icon{
                      font-size: ' . $styledata[105] . 'px;
                      border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 113) . ';
                      border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 133) . ';
                      width: ' . $styledata[153] . 'px;
                      height: ' . $styledata[157] . 'px;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                  }

                  .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-align:hover .oxi-btn-icon-body{
                      border: none;
                      padding-right: ' . $pdRight . 'px;
                      padding-left: ' . $pdLeft . 'px;
                  }
                  .Oxi-addons-btn-' . $oxiid . ' .oxi-btn-txt{
                      font-size:' . $styledata[49] . 'px;
                      padding:' . OxiAddonsPaddingMarginSanitize($styledata, 177) . ';
                  }
            }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
