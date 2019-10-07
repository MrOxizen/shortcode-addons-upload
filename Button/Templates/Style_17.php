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

class Style_17 extends Templates {

    public function inline_public_css() {
        $position = '';
        $style = $this->style;
        $distance = $style['sa_btn_icon_distance-size'];
        $hoverdistance = $style['sa_btn_h_icon_distance-size'];
        $all = $distance + $hoverdistance;

        if (array_key_exists('sa_btn_icon_position', $style) && $style['sa_btn_icon_position'] != '0') {
            $position = '.' . $this->WRAPPER . ' .oxi-addons-align-btn17 .sa-left-to-right .s-a-button-text {
                            padding: 0px ' . $hoverdistance . 'px 0px ' .  $distance. 'px ;
                        }
                        .' . $this->WRAPPER . ' .oxi-addons-align-btn17 .sa-left-to-right:hover .s-a-button-text {
                            margin-left: -' . $all . 'px;
                        }';
        } else {
            $position = '.' . $this->WRAPPER . ' .oxi-addons-align-btn17 .sa-right-to-left .s-a-button-text {
                              padding: 0px ' . $distance . 'px 0px ' . $hoverdistance . 'px ;
                        }
                        .' . $this->WRAPPER . ' .oxi-addons-align-btn17 .sa-right-to-left:hover .s-a-button-text {
                            margin-right: -' . $all . 'px;
                            
                        }';
        }
        return $position;
    }

    public function default_render($style, $child, $admin) {
        $html = '';
        $text = '';
        $icon1 = (array_key_exists('sa_btn_icon', $style) && $style['sa_btn_icon'] != '0' ? '<div class="sa-button-icon1">' . $this->font_awesome_render($style['sa_btn_icon_class']) . '</div>' : '');
        $icon2 = (array_key_exists('sa_btn_icon2', $style) && $style['sa_btn_icon2'] != '0' ? '<div class="sa-button-icon2">' . $this->font_awesome_render($style['sa_btn_icon2_class']) . '</div>' :  (array_key_exists('sa_btn_icon', $style) && $style['sa_btn_icon'] != '0' ? '<div class="sa-button-icon2">' . $this->font_awesome_render($style['sa_btn_icon_class']) . '</div>' : '') );
        $icon = $icon1 . $icon2;
        if (array_key_exists('sa_btn_icon_position', $style) && $style['sa_btn_icon_position'] != '0'):
            $text = '<div class="s-a-button-text">' . $icon . $this->text_render($style['sa_btn_text']) . '</div>';
//            $html = $icon . $text ;
        else:
            $text = '<div class="s-a-button-text">' . $this->text_render($style['sa_btn_text']) . $icon . '</div>';
//         
//            $html =  $text . $icon ;
        endif;

        echo '  <div class="oxi-addons-align-btn17">
                    <a ' . $this->animation_render('sa_btn_animation', $style) . ' ' . $this->url_render('sa_btn_link', $style) . ' class="oxi-button-btn17 ' . (array_key_exists('sa_btn_width_choose', $style) && $style['sa_btn_width_choose'] != '0' ? $style['sa_btn_width_choose'] : '') . ' ' . (array_key_exists('sa_btn_icon_position', $style) && $style['sa_btn_icon_position'] != '0' ? 'sa-left-to-right' : 'sa-right-to-left') . '" >' . $text . '</a>
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


        echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">
                <div class="Oxi-addons-btn-' . $oxiid . '" >
                    <div class="Oxi-btn-body">
                        <div class="Oxi-btn-align" ' . OxiAddonsAnimation($styledata, 43) . '>
                            <a ' . $target . ' ' . $href . ' class="Oxi-btn Oxi-btn-style" id="' . $stylefiles[5] . '" > 
                                ' . $text . '
                            </a> 
                      </div>
                    </div>
                </div>
            </div>
          </div>';

        $pdRight = $styledata[187];
        $pdleft = $styledata[183];
        $btnPd = $pdRight + $pdleft;

        $iconWidth = '';
        if ($styledata[191] == 1) {
            $iconWidth = 'bold';
        } else {
            $iconWidth = 'normal';
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
           
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-align:hover .oxi-btn-txt{
                color: ' . $styledata[97] . ';
            }
            
            .Oxi-addons-btn-' . $oxiid . ' .oxi-btn-txt{
                font-size:' . $styledata[47] . 'px;
                ' . OxiAddonsFontSettings($styledata, 51) . ';
                text-align: center;
                color:' . $styledata[57] . ';
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 175) . ';
                position: relative;
                transition-duration: .3s;
            }
            .Oxi-addons-btn-' . $oxiid . ' .oxi-btn-txt:before{
                content: "\\' . $stylefiles[9] . '";
                font-family: "Font Awesome\ 5 Free";
                display: inline-block;
                vertical-align: middle;
                font-weight: ' . $iconWidth . ';
                position: absolute;
                left: -20px;
                transition-duration: .3s;
                font-size: ' . $styledata[103] . 'px;
                color: ' . $styledata[107] . ';
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-align:hover .oxi-btn-txt::before{
                content: "\\' . $stylefiles[11] . '";
                font-family: "Font Awesome\ 5 Free";
                display: inline-block;
                vertical-align: middle;
                font-weight: ' . $iconWidth . ';
                position: absolute;
                left: 100%;
                color: ' . $styledata[147] . ';
            }
            .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-align:hover .oxi-btn-txt{
                display: inline-block;
                margin-left: -' . $btnPd . 'px;
            }
            
            @media only screen and (min-width : 669px) and (max-width : 993px){
                   .Oxi-addons-btn-' . $oxiid . ' {   
                           float: left;
                           width: 100%;
                   }';

        $pdRight = $styledata[188];
        $pdleft = $styledata[184];
        $btnPd = $pdRight + $pdleft;

        $css .= '.Oxi-addons-btn-' . $oxiid . '{ 	
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
                       border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 62) . ';
                       border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
                       display: flex;
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
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 12) . ';
                   }

                   .Oxi-addons-btn-' . $oxiid . ' .oxi-btn-txt{
                       font-size:' . $styledata[48] . 'px;
                       padding:' . OxiAddonsPaddingMarginSanitize($styledata, 176) . ';
                       position: relative;
                       transition-duration: .3s;
                   }
                   .Oxi-addons-btn-' . $oxiid . ' .oxi-btn-txt:before{
                       content: "\\' . $stylefiles[9] . '";
                       font-family: "Font Awesome\ 5 Free";
                       display: inline-block;
                       vertical-align: middle;
                       font-weight: ' . $iconWidth . ';
                       position: absolute;
                       left: -20px;
                       transition-duration: .3s;
                       font-size: ' . $styledata[104] . 'px;
                       display: flex;
                       justify-content: center;
                       align-items: center;
                   }
                   
                   .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-align:hover .oxi-btn-txt{
                       display: inline-block;
                       margin-left: -' . $btnPd . 'px;
                   }
            }
            @media only screen and (max-width : 668px){
                .Oxi-addons-btn-' . $oxiid . ' {   
                           float: left;
                           width: 100%;
                   }';

        $pdRight = $styledata[189];
        $pdleft = $styledata[185];
        $btnPd = $pdRight + $pdleft;

        $css .= '.Oxi-addons-btn-' . $oxiid . '{ 	
                           display: flex;
                           justify-content: center;
                   }
                   .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-body{
                       --width: ' . $styledata[8] . 'px; 	
                       display: flex;
                       justify-content: center;
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 29) . ';
                   }
                   .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-align{
                       border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . ';
                       border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
                       display: flex;
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
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ';
                   }

                   .Oxi-addons-btn-' . $oxiid . ' .oxi-btn-txt{
                       font-size:' . $styledata[49] . 'px;
                       padding:' . OxiAddonsPaddingMarginSanitize($styledata, 177) . ';
                       position: relative;
                       transition-duration: .3s;
                   }
                   .Oxi-addons-btn-' . $oxiid . ' .oxi-btn-txt:before{
                       content: "\\' . $stylefiles[9] . '";
                       font-family: "Font Awesome\ 5 Free";
                       display: inline-block;
                       vertical-align: middle;
                       font-weight: ' . $iconWidth . ';
                       position: absolute;
                       left: -20px;
                       transition-duration: .3s;
                       font-size: ' . $styledata[105] . 'px;
                       display: flex;
                       justify-content: center;
                       align-items: center;
                   }
                   
                   .Oxi-addons-btn-' . $oxiid . ' .Oxi-btn-align:hover .oxi-btn-txt{
                       display: inline-block;
                       margin-left: -' . $btnPd . 'px;
                   }
            }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
