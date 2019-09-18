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

class Style_24 extends Templates {

    

    public function default_render($style, $child, $admin) {
        $html = '';
        $text = '<div class="sa-button-text">' . $this->text_render($style['sa_btn_text']) . '</div>';
        $icon = (array_key_exists('sa_btn_icon', $style) && $style['sa_btn_icon'] != '0' ? $this->font_awesome_render($style['sa_btn_icon_class']) : '');

        if (array_key_exists('sa_btn_icon_position', $style) && $style['sa_btn_icon_position'] != '0'):
            $html = $icon . $text;
        else:
            $html = $text . $icon;
        endif;

        echo '  <div class="oxi-addons-align-btn24">
                    <a ' . $this->animation_render('sa_btn_animation', $style) . ' ' . $this->url_render('sa_btn_link', $style) . ' class="oxi-button-btn24 ' . (array_key_exists('sa_btn_width_choose', $style) && $style['sa_btn_width_choose'] != '0' ? $style['sa_btn_width_choose'] : '') . ' ' . (array_key_exists('sa_btn_icon_position', $style) && $style['sa_btn_icon_position'] != '0' ? 'sa-left-to-right' : 'sa-right-to-left') . ' '.$style['sa_btn_animation_view'].'" >
                           '. $html . '
                      
                    </a>
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
    if($stylefiles[3] != ''){
        $text = '<div class="oxi-btn-txt">' . OxiAddonsTextConvert($stylefiles[3]) . '</div>';
    }
    if($stylefiles[9] != ''){
        $icon = '<div class="oxi-btn-bg-round">
                    <span class="oxi-btn-icon' . $oxiid . '">' . oxi_addons_font_awesome($stylefiles[9]) . ' </span>
                </div>';
    }
    echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">
                <div class="oxi-addons-align-' . $oxiid . '">';
            echo '<a ' . $target . ' ' . $href . '  ' . OxiAddonsAnimation($styledata, 43) . ' class=" oxi-button-' . $oxiid . '" id="' . $stylefiles[5] . '">
                      <div class="oxi-btn-body">   
                            '.$text.'
                            '.$icon.'
                      </div> 
                 </a>';
    echo '</div>
            </div>
   </div>';

    $textalign = explode(':', $styledata[59]);
    $css .= '.oxi-addons-align-' . $oxiid . '{
                    float: left;
                    width: 100%;
                    text-align: '.$textalign[0].';
                    display: block;
                    padding: '. OxiAddonsPaddingMarginSanitize($styledata, 27).';
            }
            .oxi-button-' . $oxiid . '{   
                    display: inline-flex;
                    align-items: center;
                    background: '.$styledata[53].';
                    width:'.$styledata[7].'px;
                    justify-content: center;
                    border-width: '. OxiAddonsPaddingMarginSanitize($styledata, 61).';
                    border-style: '.$styledata[77].';
                    border-color: '.$styledata[78].';
                    border-radius: '. OxiAddonsPaddingMarginSanitize($styledata, 81).';
                        
            }
            .oxi-button-' . $oxiid . ':hover {
                    background: '.$styledata[115].';
                    border-style: '.$styledata[117].';
                    border-color: '.$styledata[118].';
                    border-radius: '. OxiAddonsPaddingMarginSanitize($styledata, 121).';
            }
           
            .oxi-addons-align-' . $oxiid . ' .oxi-btn-body{
                    position: relative;
                    float: left;
                    width: 100%;
                    padding: '. OxiAddonsPaddingMarginSanitize($styledata, 11).';
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-btn-bg-round{
                display: inline-flex;
                align-items: center;
                justify-content: center;
                background:'.$styledata[139].';
                width: '.$styledata[209].'px;
                height:'.$styledata[213].'px;
                font-size: '.$styledata[201].'px;
                border-width: '. OxiAddonsPaddingMarginSanitize($styledata, 141).';
                border-style: '.$styledata[157].';
                border-color: '.$styledata[158].';
                border-radius: '. OxiAddonsPaddingMarginSanitize($styledata, 161).';
                padding: '. OxiAddonsPaddingMarginSanitize($styledata, 177).';
                position: absolute;
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-btn-txt{
                display: inline-flex;
                align-items: center;
                flex-direction: column;
                color:'.$styledata[51].';
                font-size: '.$styledata[47].'px;
                    '. OxiAddonsFontSettings($styledata, 55).';
                padding: '. OxiAddonsPaddingMarginSanitize($styledata, 97).';
                position: absolute;
            }
            ';
    if($styledata[195] == 1){
        $css .= '.oxi-addons-align-' . $oxiid . ' .oxi-btn-bg-round{
                    right: 0px;
                    top: 50%;
                    transform: translateY(-50%);
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-btn-txt{
                
                left: 10px;
                top: 50%;
                transform: translateY(-50%);
                z-index:3;
            }
            ';
    }
    else {
        $css .= '.oxi-addons-align-' . $oxiid . ' .oxi-btn-bg-round{
                    left: 0px;
                    top: 50%;
                    transform: translateY(-50%);
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-btn-txt{
                
                right: 10px;
                top: 50%;
                transform: translateY(-50%);
                z-index:3;
            }
            ';
    }

    $css .='.oxi-button-' . $oxiid . ':hover .oxi-btn-bg-round{
                color: '.$styledata[193].';
                
               -moz-border-radius: none;
               -webkit-border-radius: none;
                border-radius: none;
                transition: .3s;
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-btn-icon' . $oxiid . '{
                color:'.$styledata[137].';
                transition: 0.1s;
            }
            .oxi-button-' . $oxiid . ':hover .oxi-btn-icon' . $oxiid . '{
                color: '.$styledata[193].';
                transition: 0.0s;
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-btn-icon' . $oxiid . '{
                position: absolute;
                transition-duration: 0.3s;
            }';
    
        if($styledata[5] == 1){
        $css .= '.oxi-button-' . $oxiid . ':hover .oxi-btn-icon' . $oxiid . '{
                    
                    background: none;
                    -webkit-animation: topToBottom 0.3s alternate ease infinite;
                    animation: topToBottom 0.3s alternate ease infinite;
                }

                @-webkit-keyframes topToBottom {
                  from {
                    -webkit-transform: translateY(0);
                  }
                  to {
                    -webkit-transform: translateY(5px);
                  }
                }
                @keyframes topToBottom {
                  from {
                    -webkit-transform: translateY(0);
                  }
                  to {
                    -webkit-transform: translateY(5px);
                  }
                }
                ';
        }
        elseif($styledata[5] == 2){
        $css .= '.oxi-button-' . $oxiid . ':hover .oxi-btn-icon' . $oxiid . '{
                    background: none;
                    -webkit-animation: leftToRight 0.3s alternate ease infinite;
                    animation: leftToRight 0.3s alternate ease infinite;
                }

                @-webkit-keyframes leftToRight {
                  from {
                    -webkit-transform: translateX(0);
                  }
                  to {
                    -webkit-transform: translateX(5px);
                  }
                }
                @keyframes leftToRight {
                  from {
                    -webkit-transform: translateX(0);
                  }
                  to {
                    -webkit-transform: translateX(5px);
                  }
                }
                ';
        }
        elseif($styledata[5] == 3) {
            $css .= '.oxi-button-' . $oxiid . ':hover .oxi-btn-icon' . $oxiid . '{
                    padding-left: 10px;
                    background: none;
                    -webkit-animation: bounceright 0.03s alternate ease infinite;
                    animation: bounceright 0.03s alternate ease infinite;
                }

                @-webkit-keyframes bounceright {
                    from {
                      -webkit-transform: rotate(0deg);
                    }
                    to {
                      -webkit-transform: rotate(30deg);
                    }
                }
                @keyframes bounceright {
                    from {
                      -webkit-transform: rotate(0deg);
                    }
                    to {
                      -webkit-transform: rotate(30deg);
                    }
                }
                ';
        }
        elseif ($styledata[5] == 4){
            $css .= '.oxi-button-' . $oxiid . ':hover .oxi-btn-icon' . $oxiid . '{
                          -webkit-animation: none;
                            -webkit-transform: scale(1.4);
                            animation: none;
                            transform: scale(1.4);
                            transition-duration: 0.3s;
                    }
                
                ';
        }
        else{
            $css .= '.oxi-button-' . $oxiid . ':hover .oxi-btn-icon' . $oxiid . '{
                        -webkit-animation: none;
                        -webkit-transform: skew(-20deg);
                        animation: none;
                        transform: skew(-20deg);
                        text-indent: 0.1em;
                    }
                
                ';
        }
    $css .='.oxi-button-' . $oxiid . ':hover .oxi-btn-txt{
                position: absolute;
                color: '.$styledata[113].';
            }
            
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-align-' . $oxiid . '{
                    float: left;
                    width: 100%;
                    text-align: center;
                    display: block;
                    padding: '. OxiAddonsPaddingMarginSanitize($styledata, 28).';
                }
                .oxi-button-' . $oxiid . '{   
                    display: inline-flex;
                    align-items: center;
                    width:'.$styledata[8].'px;
                    justify-content: center;
                    border-width: '. OxiAddonsPaddingMarginSanitize($styledata, 62).';
                    border-radius: '. OxiAddonsPaddingMarginSanitize($styledata, 82).';
                }
                .oxi-button-' . $oxiid . ':hover {
                    border-radius: '. OxiAddonsPaddingMarginSanitize($styledata, 122).';
                }

                .oxi-addons-align-' . $oxiid . ' .oxi-btn-body{
                        position: relative;
                        float: left;
                        width: 100%;
                        padding: '. OxiAddonsPaddingMarginSanitize($styledata, 12).';
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-btn-bg-round{
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    width: '.$styledata[210].'px;
                    height:'.$styledata[214].'px;
                    font-size: '.$styledata[202].'px;
                    border-width: '. OxiAddonsPaddingMarginSanitize($styledata, 142).';
                    border-radius: '. OxiAddonsPaddingMarginSanitize($styledata, 162).';
                    padding: '. OxiAddonsPaddingMarginSanitize($styledata, 178).';
                    position: absolute;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-btn-txt{
                    display: inline-flex;
                    align-items: center;
                    flex-direction: column;
                    font-size: '.$styledata[48].'px;
                    padding: '. OxiAddonsPaddingMarginSanitize($styledata, 98).';
                    position: absolute;
                }
                ';
        $css .='.oxi-button-' . $oxiid . ':hover .oxi-btn-bg-round{
                    
                   -moz-border-radius: none;
                   -webkit-border-radius: none;
                    border-radius: none;
                    transition: .3s;
                }
                
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-align-' . $oxiid . '{
                    float: left;
                    width: 100%;
                    text-align: center;
                    display: block;
                    padding: '. OxiAddonsPaddingMarginSanitize($styledata, 29).';
                }
                .oxi-button-' . $oxiid . '{   
                    display: inline-flex;
                    align-items: center;
                    width:'.$styledata[8].'px;
                    justify-content: center;
                    border-width: '. OxiAddonsPaddingMarginSanitize($styledata, 63).';
                    border-radius: '. OxiAddonsPaddingMarginSanitize($styledata, 83).';
                }
                .oxi-button-' . $oxiid . ':hover {
                    border-radius: '. OxiAddonsPaddingMarginSanitize($styledata, 123).';
                }

                .oxi-addons-align-' . $oxiid . ' .oxi-btn-body{
                        position: relative;
                        float: left;
                        width: 100%;
                        padding: '. OxiAddonsPaddingMarginSanitize($styledata, 13).';
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-btn-bg-round{
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    width: '.$styledata[211].'px;
                    height:'.$styledata[215].'px;
                    font-size: '.$styledata[203].'px;
                    border-width: '. OxiAddonsPaddingMarginSanitize($styledata, 143).';
                    border-radius: '. OxiAddonsPaddingMarginSanitize($styledata, 163).';
                    padding: '. OxiAddonsPaddingMarginSanitize($styledata, 179).';
                    position: absolute;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-btn-txt{
                    display: inline-flex;
                    align-items: center;
                    flex-direction: column;
                    font-size: '.$styledata[49].'px;
                    padding: '. OxiAddonsPaddingMarginSanitize($styledata, 99).';
                    position: absolute;
                }
                ';
        $css .='.oxi-button-' . $oxiid . ':hover .oxi-btn-bg-round{
                    
                   -moz-border-radius: none;
                   -webkit-border-radius: none;
                    border-radius: none;
                    transition: .3s;
                }
                
            }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
