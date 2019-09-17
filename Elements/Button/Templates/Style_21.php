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

class Style_21 extends Templates {

    public function default_render($style, $child, $admin) {
        $text = '<div class="sa-button-text">' . $this->text_render($style['sa_btn_text']) . '</div>';
        $icon = (array_key_exists('sa_btn_icon', $style) ? $this->font_awesome_render($style['sa_btn_icon_class']) : '');

        if (array_key_exists('sa_btn_icon_position', $style)):
            $html = $icon . $text;
        else:
            $html = $text . $icon;
        endif;
        echo '  <div class="oxi-addons-align-btn21">
                   <a ' . $this->url_render('sa_btn_link', $style) . ' class="oxi-button-btn21 ' . (array_key_exists('sa_btn_width_choose', $style) ? $style['sa_btn_width_choose'] : '') . ' '.$style['sa_btn_effect_position'].'" >' . $html . '</a>
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
                <div class="Oxi-addons-btn-'.$oxiid.'" >
                    <div class="Oxi-btn-body">
                        <div class="Oxi-btn-align" ' . OxiAddonsAnimation($styledata, 27) . '>
                            <a ' . $target . ' ' . $href . ' class="Oxi-btn Oxi-btn-style" id="' . $stylefiles[5] . '" > 
                                <div class="oxi-btn-txt">  ' . OxiAddonsTextConvert($stylefiles[3]) . '</div>
                                
                            </a>
                      </div>
                    </div>
                </div>
            </div>
          </div>';
    $textalign = explode(':', $styledata[43]);
    $css .='.Oxi-addons-btn-'.$oxiid.' {   
                float: left;
                width: 100%;
        }
        .Oxi-addons-btn-'.$oxiid.' .Oxi-btn-body{
                text-align: '.$textalign[0].';
                padding: '. OxiAddonsPaddingMarginSanitize($styledata, 11).';
            }
            .Oxi-addons-btn-'.$oxiid.' .Oxi-btn-align{
                    display: inline-flex;
                    justify-content: center;
                    align-items: center;
                    overflow: hidden;
            }
            .Oxi-addons-btn-'.$oxiid.' .Oxi-btn{
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                position: relative;
                background: '.$styledata[37].';
                color:'.$styledata[35].';
                font-size:'.$styledata[31].'px;
                z-index: 999;
                border-width: '. OxiAddonsPaddingMarginSanitize($styledata, 77).';
                border-style: '.$styledata[93].';
                border-color: '.$styledata[94].';
                border-radius: '. OxiAddonsPaddingMarginSanitize($styledata, 97).';
                transition: none;
            }
            .Oxi-addons-btn-'.$oxiid.' .oxi-btn-txt{
                width:'.$styledata[7].'px;
                max-width:100%;
                    '. OxiAddonsFontSettings($styledata, 39).';
                padding: '. OxiAddonsPaddingMarginSanitize($styledata, 45).';
                display: flex;
                justify-content: center;
                align-items: center;
            }';
    if($styledata[75] == 1){
            $css .='.Oxi-addons-btn-'.$oxiid.' .Oxi-btn::after{
                    position: absolute;
                    content: "";
                    transform: rotate(25deg);
                    background:'.$styledata[67].' ;
                    overflow: hidden;
                    width: 0;
                    height: 180px;
                    transition: .3s ease;
                    z-index: -1;
                }
                .Oxi-addons-btn-'.$oxiid.' .Oxi-btn:hover::after{
                    width: calc(100% - 40px);
                    
                }';
    }
    else{
        $css .='.Oxi-addons-btn-'.$oxiid.' .Oxi-btn::after{
                    position: absolute;
                    content: "";
                    transform: rotate(-25deg);
                    background:'.$styledata[67].' ;
                    overflow: hidden;
                    width: 0;
                    height: 180px;
                    transition: .3s ease;
                    z-index: -1;
                }
                .Oxi-addons-btn-'.$oxiid.' .Oxi-btn:hover::after{
                    width: calc(100% - 40px);
                    
                }';
    }
        
    $css .=' .Oxi-addons-btn-'.$oxiid.' .Oxi-btn:hover{
                    color: '.$styledata[65].';
                    transition: all .1s;
                }
               
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .Oxi-addons-btn-'.$oxiid.' {   
                    float: left;
                    width: 100%;
                }
                .Oxi-addons-btn-'.$oxiid.'{ 	
                    display: flex;
                    justify-content: center;
                }
                .Oxi-addons-btn-'.$oxiid.' .Oxi-btn-body{
                    display: flex;
                    justify-content: center;
                    padding: '. OxiAddonsPaddingMarginSanitize($styledata, 12).';
                }
                .Oxi-addons-btn-'.$oxiid.' .Oxi-btn-align{
                        display: flex;
                        justify-content: center;
                        align-items: center;
                }
                .Oxi-addons-btn-'.$oxiid.' .Oxi-btn{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    position: relative;
                    font-size:'.$styledata[32].'px;
                    z-index: 999;
                    border-width: '. OxiAddonsPaddingMarginSanitize($styledata, 78).';
                    border-radius: '. OxiAddonsPaddingMarginSanitize($styledata, 98).';
                }
                .Oxi-addons-btn-'.$oxiid.' .oxi-btn-txt{
                    width:'.$styledata[8].'px;
                    max-width:100%;
                    padding: '. OxiAddonsPaddingMarginSanitize($styledata, 46).';
                }
                
            }
            @media only screen and (max-width : 668px){
               .Oxi-addons-btn-'.$oxiid.' {   
                    float: left;
                    width: 100%;
                }
                .Oxi-addons-btn-'.$oxiid.'{ 	
                    display: flex;
                    justify-content: center;
                }
                .Oxi-addons-btn-'.$oxiid.' .Oxi-btn-body{
                    display: flex;
                    justify-content: center;
                    padding: '. OxiAddonsPaddingMarginSanitize($styledata, 13).';
                }
                .Oxi-addons-btn-'.$oxiid.' .Oxi-btn-align{
                        display: flex;
                        justify-content: center;
                        align-items: center;
                }
                .Oxi-addons-btn-'.$oxiid.' .Oxi-btn{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    position: relative;
                    font-size:'.$styledata[33].'px;
                    z-index: 999;
                    border-width: '. OxiAddonsPaddingMarginSanitize($styledata, 79).';
                    border-radius: '. OxiAddonsPaddingMarginSanitize($styledata, 99).';
                }
                .Oxi-addons-btn-'.$oxiid.' .oxi-btn-txt{
                    width:'.$styledata[9].'px;
                    max-width:100%;
                    padding: '. OxiAddonsPaddingMarginSanitize($styledata, 47).';
                }
            }';



        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
