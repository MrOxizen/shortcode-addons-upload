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

class Style_15 extends Templates {

    public function default_render($style, $child, $admin) {
        $text = '<div class="sa-button-text">' . $this->text_render($style['sa_btn_text']) . '</div>';
        $icon = (array_key_exists('sa_btn_icon', $style) && $style['sa_btn_icon'] != '0' ? $this->font_awesome_render($style['sa_btn_icon_class']) : '');

        if (array_key_exists('sa_btn_icon_position', $style) && $style['sa_btn_icon_position'] != '0'):
            $html = $icon . $text;
        else:
            $html = $text . $icon;
        endif;
        echo '  <div class="oxi-addons-align-btn15">
                   <a ' . $this->animation_render('sa_btn_animation', $style) . ' ' . $this->url_render('sa_btn_link', $style) . ' class="oxi-button-btn15 ' . (array_key_exists('sa_btn_width_choose', $style) && $style['sa_btn_width_choose'] != '0' ? $style['sa_btn_width_choose'] : '') . '" >' . $html . '</a>
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
                <div class="Oxi-addons-btn-' . $oxiid . '" >
                    <div class="Oxi-btn-body">
                        <div class="Oxi-btn-align" ' . OxiAddonsAnimation($styledata, 43) . '>
                            <a ' . $target . ' ' . $href . ' class="Oxi-btn Oxi-btn-style" id="' . $stylefiles[5] . '" > ' . OxiAddonsTextConvert($stylefiles[3]) . ' </a>
                        </div>
                    </div>
                </div>
            </div>
          </div>';

        $textalign = explode(':', $styledata[55]);
        $css .= '.Oxi-addons-btn-' . $oxiid . ' {   
                    float: left;
                    width: 100%;
            }
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-body{
                    --width: ' . $styledata[7] . 'px; 	
                    --height: ' . $styledata[71] . 'px; 	
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';
                    text-align: ' . $textalign[0] . ';
                    
            }
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn{
                    position: relative;
                    border: none;
                    background: ' . $styledata[59] . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';
                    width: var(--width);
                    max-width: 100%;
                    display: inline-flex;
                    justify-content: center;
                    align-items: center
            }
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn:hover{
                    border: none;
                    color: ' . $styledata[65] . ';
                    background: ' . $styledata[67] . ';
            }
            
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn::before{
                content: "";
                width: var(--width);
                height: var(--height);
                position: absolute;
                background: ' . $styledata[63] . ';
                bottom: 0;
                right: 0;
                transition: all 0.8s ease-in-out;
                transition-delay: 0.5s;
            }
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn:hover::before{
                content: "";
                width: 0;
                height: var(--height);
                position: absolute;
                background: ' . $styledata[63] . ';
                bottom: 0;
                right: 0;
                transition: all 0.5s ease-in-out;
            }
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn::after{
                content: "";
                width: 0px;
                height: var(--height);
                position: absolute;
                background: ' . $styledata[69] . ';
                bottom: 0;
                left: 0;
                transition: all 0.5s ease-in-out;
                transition-delay: 0s;
            }
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn:hover::after{
                content: "";
                width: var(--width);
                height: var(--height);
                position: absolute;
                background: ' . $styledata[69] . ';
                bottom: 0;
                left: 0;
                transition: all 0.8s ease-in-out;
                transition-delay: 0.5s;
            }

            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-style{
                color:' . $styledata[57] . ';
                font-size:' . $styledata[47] . 'px;
                    ' . OxiAddonsFontSettings($styledata, 51) . '
            }
            
             

            
            @media only screen and (min-width : 669px) and (max-width : 993px){
              .Oxi-addons-btn-' . $oxiid . ' {   
                    float: left;
                    width: 100%;
                }
                .Oxi-addons-btn-' . $oxiid . '{ 	
                    display: flex;
                    justify-content: center;
                }
                .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-body{
                        --width: ' . $styledata[8] . 'px; 	
                        --height: ' . $styledata[72] . 'px; 	
                        display: flex;
                        justify-content: center;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 28) . ';

                }
                .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn{
                        position: relative;
                        border: none;
                        
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 12) . ';
                        width: var(--width);
                        max-width: 100%;
                        display: inline-flex;
                        justify-content: center;
                        align-items: center
                }
                .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn::before{
                    content: "";
                    width: var(--width);
                    height: var(--height);
                    position: absolute;
                    bottom: 0;
                    right: 0;
                    transition: all 0.8s ease-in-out;
                    transition-delay: 0.5s;
                }
                .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn:hover::before{
                    content: "";
                    width: 0;
                    height: var(--height);
                    position: absolute;
                    bottom: 0;
                    right: 0;
                    transition: all 0.5s ease-in-out;
                }
                .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn::after{
                    content: "";
                    width: 0px;
                    height: var(--height);
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    transition: all 0.5s ease-in-out;
                    transition-delay: 0s;
                }
                .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn:hover::after{
                    content: "";
                    width: var(--width);
                    height: var(--height);
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    transition: all 0.8s ease-in-out;
                    transition-delay: 0.5s;
                }

                .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-style{
                    font-size:' . $styledata[48] . 'px;
                }

            }
            @media only screen and (max-width : 668px){
                .Oxi-addons-btn-' . $oxiid . ' {   
                    float: left;
                    width: 100%;
                }
                .Oxi-addons-btn-' . $oxiid . '{ 	
                    display: flex;
                    justify-content: center;
                }
                .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-body{
                    --width: ' . $styledata[9] . 'px; 	
                    --height: ' . $styledata[73] . 'px; 	
                    display: flex;
                    justify-content: center;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 29) . ';

                }
                .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn{
                    position: relative;
                    border: none;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ';
                    width: var(--width);
                    max-width: 100%;
                    display: inline-flex;
                    justify-content: center;
                    align-items: center
                }
                .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn::before{
                    content: "";
                    width: var(--width);
                    height: var(--height);
                    position: absolute;
                    bottom: 0;
                    right: 0;
                    transition: all 0.8s ease-in-out;
                    transition-delay: 0.5s;
                }
                .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn:hover::before{
                    content: "";
                    width: 0;
                    height: var(--height);
                    position: absolute;
                    bottom: 0;
                    right: 0;
                    transition: all 0.4s ease-in-out;
                }
                .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn::after{
                    content: "";
                    width: 0px;
                    height: var(--height);
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    transition: all 0.4s ease-in-out;
                    transition-delay: 0s;
                }
                .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn:hover::after{
                    content: "";
                    width: var(--width);
                    height: var(--height);
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    transition: all 0.8s ease-in-out;
                    transition-delay: 0.5s;
                }

                .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-style{
                    font-size:' . $styledata[49] . 'px;
                }
            }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
