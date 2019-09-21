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

class Style_23 extends Templates {

    public function inline_public_css() {
        $position = '';
        $style = $this->style;

        $iconcls = $style['sa_btn_icon_distance-size'];
        $hovericoncls = $style['sa_btn_h_icon_distance-size'];
        $hmargin = $iconcls - $hovericoncls;
        if (array_key_exists('sa_btn_icon_position', $style) && $style['sa_btn_icon_position'] != '0') {
            $position = '.' . $this->WRAPPER . ' .oxi-addons-align-btn23 .oxi-button-btn23 .oxi-icons {
                            margin-right: ' . $iconcls . 'px;
                        }
                        .' . $this->WRAPPER . ' .oxi-addons-align-btn23 .oxi-button-btn23:hover .oxi-icons {
                            margin-right: ' . $hovericoncls . 'px;
                            margin-left: ' . $hmargin . 'px;
                        }';
        } else {
            $position = '.' . $this->WRAPPER . ' .oxi-addons-align-btn23 .oxi-button-btn23 .oxi-icons {
                            margin-left: ' . $iconcls . 'px;
                          }
                         .' . $this->WRAPPER . ' .oxi-addons-align-btn23 .oxi-button-btn23:hover .oxi-icons {
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

        echo '  <div class="oxi-addons-align-btn23">
                    <a ' . $this->animation_render('sa_btn_animation', $style) . ' ' . $this->url_render('sa_btn_link', $style) . ' class="oxi-button-btn23 ' . (array_key_exists('sa_btn_width_choose', $style) && $style['sa_btn_width_choose'] != '0' ? $style['sa_btn_width_choose'] : '') . ' " >' . $html . '</a>
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
        if ($stylefiles[7] != '') {
            $href = 'href="' . OxiAddonsUrlConvert($stylefiles[7]) . '"';
            if ($styledata[3] != '') {
                $target = 'target="' . $styledata[3] . '"';
            }
        }
        $text = $icon = '';
        if ($stylefiles[3] != '') {
            $text = '<div class="oxi-btn-txt">' . OxiAddonsTextConvert($stylefiles[3]) . '</div>';
        }
        if ($stylefiles[9] != '') {
            $icon = '<div class="oxi-btn-bg-round">
                    <span class="oxi-btn-icon">' . oxi_addons_font_awesome($stylefiles[9]) . ' </span>
                </div>';
        }
        echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">
                <div class="oxi-addons-align-' . $oxiid . '">';
        echo '<a ' . $target . ' ' . $href . '  ' . OxiAddonsAnimation($styledata, 43) . ' class=" oxi-button-' . $oxiid . '" id="' . $stylefiles[5] . '">
                      <div class="oxi-btn-body">   
                            ' . $text . '
                            ' . $icon . '
                      </div> 
                    </a>';
        echo '</div>
            </div>
   </div>';

        $textalign = explode(':', $styledata[59]);
        $css .= '.oxi-addons-align-' . $oxiid . '{
                    float: left;
                    width: 100%;
                    text-align: ' . $textalign[0] . ';
                    display: block;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';
            }
            .oxi-button-' . $oxiid . '{   
                    display: inline-flex;
                    align-items: center;
                    background: ' . $styledata[53] . ';
                    width:' . $styledata[7] . 'px;
                    justify-content: center;
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 61) . ';
                    border-style: ' . $styledata[77] . ';
                    border-color: ' . $styledata[78] . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
                        
            }
            .oxi-button-' . $oxiid . ':hover {
                    background: ' . $styledata[115] . ';
                    border-style: ' . $styledata[117] . ';
                    border-color: ' . $styledata[118] . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 121) . ';
            }
           
            
            .oxi-addons-align-' . $oxiid . ' .oxi-btn-body{
                    position: relative;
                    float: left;
                    width: 100%;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';
            }
            
            .oxi-addons-align-' . $oxiid . ' .oxi-btn-txt{
                    display: inline-flex;
                    align-items: center;
                    flex-direction: column;
                    color:' . $styledata[51] . ';
                    font-size: ' . $styledata[47] . 'px;
                        ' . OxiAddonsFontSettings($styledata, 55) . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 97) . ';
                    position: absolute;
                    left: 10px;
                    top: 50%;
                    transform: translateY(-50%);
                    z-index:3;
            }
             .oxi-button-' . $oxiid . ':hover .oxi-btn-txt{
                    position: absolute;
                    color: ' . $styledata[113] . ';
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-btn-bg-round{
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    
                    background:' . $styledata[139] . ';
                    width: ' . $styledata[209] . 'px;
                    height:' . $styledata[213] . 'px;
                    font-size: ' . $styledata[201] . 'px;
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 141) . ';
                    border-style: ' . $styledata[157] . ';
                    border-color: ' . $styledata[158] . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 161) . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 177) . ';
                    position: absolute;
                    right: 7px;
                    top: 50%;
                    transform: translateY(-50%);
            }
            .oxi-button-' . $oxiid . ':hover .oxi-btn-bg-round{
                    color: ' . $styledata[193] . ';
                    background: none;
                    border-color: none;
                    border-style: none;
                   -moz-border-radius: none;
                   -webkit-border-radius: none;
                    border-radius: none;
                    transition: .3s;
                
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-btn-icon{
                    color:' . $styledata[137] . ';
                    transition: 0.1s;
            }
            .oxi-button-' . $oxiid . ':hover .oxi-btn-icon{
                    color: ' . $styledata[193] . ';
                    transition: 0.0s;
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-btn-icon{
                position: absolute;
                transition-duration: 0.3s;
                }
            .oxi-button-' . $oxiid . ':hover .oxi-btn-icon{
                    padding-left: 20px;
                    background: none;
                    transition-duration: 0.3s;
            }

            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-align-' . $oxiid . '{
                        float: left;
                        width: 100%;
                        text-align: center;
                        display: block;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 28) . ';
                }
                .oxi-button-' . $oxiid . '{   
                        display: inline-flex;
                        align-items: center;
                        width:' . $styledata[8] . 'px;
                        justify-content: center;
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 62) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';

                }
                .oxi-button-' . $oxiid . ':hover {
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 122) . ';
                }


                .oxi-addons-align-' . $oxiid . ' .oxi-btn-body{
                        position: relative;
                        float: left;
                        width: 100%;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 12) . ';
                }

                .oxi-addons-align-' . $oxiid . ' .oxi-btn-txt{
                        display: inline-flex;
                        align-items: center;
                        flex-direction: column;
                        font-size: ' . $styledata[48] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 98) . ';
                        position: absolute;
                        left: 10px;
                        top: 50%;
                        transform: translateY(-50%);
                        z-index:3;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-btn-bg-round{
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        width: ' . $styledata[210] . 'px;
                        height:' . $styledata[214] . 'px;
                        font-size: ' . $styledata[202] . 'px;
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 142) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 162) . ';
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 178) . ';
                        position: absolute;
                        right: 7px;
                        top: 50%;
                        transform: translateY(-50%);
                }
                
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-align-' . $oxiid . '{
                        float: left;
                        width: 100%;
                        text-align: center;
                        display: block;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 29) . ';
                }
                .oxi-button-' . $oxiid . '{   
                        display: inline-flex;
                        align-items: center;
                        width:' . $styledata[9] . 'px;
                        justify-content: center;
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';

                }
                .oxi-button-' . $oxiid . ':hover {
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 123) . ';
                }


                .oxi-addons-align-' . $oxiid . ' .oxi-btn-body{
                        position: relative;
                        float: left;
                        width: 100%;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ';
                }

                .oxi-addons-align-' . $oxiid . ' .oxi-btn-txt{
                        display: inline-flex;
                        align-items: center;
                        flex-direction: column;
                        font-size: ' . $styledata[49] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';
                        position: absolute;
                        left: 10px;
                        top: 50%;
                        transform: translateY(-50%);
                        z-index:3;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-btn-bg-round{
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        width: ' . $styledata[211] . 'px;
                        height:' . $styledata[215] . 'px;
                        font-size: ' . $styledata[203] . 'px;
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 143) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 163) . ';
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 179) . ';
                        position: absolute;
                        right: 7px;
                        top: 50%;
                        transform: translateY(-50%);
                }
            }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
