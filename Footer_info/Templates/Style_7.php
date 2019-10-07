<?php

namespace SHORTCODE_ADDONS_UPLOAD\Footer_info\Templates;

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

class Style_7 extends Templates {

    public function default_render($style, $child, $admin) {
        $icon = $icon_icon = $text = '';


        $repeater = (array_key_exists('sa_fi_icon_repeater', $style) && is_array($style['sa_fi_icon_repeater'])) ? $style['sa_fi_icon_repeater'] : [];
        foreach ($repeater as $key => $value) {
            $icon .= ' <a ' . $this->url_render('sa_fi_icon_url', $value) . ' class = "sa_FI_7_icon_repeater_' . $key . '">
                            ' . $this->font_awesome_render($value['sa_fi_icon_icon']) . '
                         </a> ';
        }

        if (array_key_exists('sa_fi_icon', $style) && $style['sa_fi_icon'] != '0') {
            $icon_icon = ' <div class="oxi_addons_FI_7_icon" ' . $this->animation_render('sa_fi_animation', $style) . '>
                                ' . $icon . '
                            </div>';
        }

        if (array_key_exists('sa_fi_text', $style) && $style['sa_fi_text'] != '0') {
            $text .= '<div class="oxi_addons_FI_7_content" ' . $this->animation_render('sa_fi_animation', $style) . '>
                                ' . $this->text_render($style['sa_fi_footer_text']) . '
                            </div>';
            if (!empty($style['sa_fi_footer_text2'])) {
                $text .= '<div class="oxi_addons_FI_7_under_content" ' . $this->animation_render('sa_fi_animation', $style) . '>
                                    ' . $this->text_render($style['sa_fi_footer_text2']) . '
                                </div>';
            }
        }


        echo '<div class="oxi_addons_FI_7">
                        <div class="oxi_addons_FI_7_row">
                            ' . $text . '
                            ' . $icon_icon . '
                        </div>
                   </div>';
    }

    public function old_render() {
        $style = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        $headertext = $followustext = '';
        if ($stylefiles[2] != '') {
            $headertext = '<div class="oxi-addons-FI-7-header-text">' . OxiAddonsTextConvert($stylefiles[2]) . '</div>';
        }
        if ($stylefiles[4] != '') {
            $followustext = '<div class="oxi-addons-FI-7-follow-us">' . OxiAddonsTextConvert($stylefiles[4]) . '</div>';
        }
        echo '<div class="oxi-addons-container">
        <div class="oxi-addons-FI-7-' . $oxiid . '">
            <div class="oxi-addons-FI-7-row" ' . OxiAddonsAnimation($styledata, 67) . '>
                ' . $headertext . '
                <div class="oxi-addons-FI-7-col-icon">
                      ' . $followustext . '
                       <div class="oxi-addons-FI-7-follow-icon">';
        foreach ($listdata as $value) {
            $listitemdata = explode('||#||', $value['files']);
            echo '<a  href="' . OxiAddonsUrlConvert($listitemdata[4]) . '" target="' . $styledata[155] . '">' . oxi_addons_font_awesome($listitemdata[2]) . '';
            
            echo '</a>';
        }
        echo'</div>
                 </div>
            </div>
        </div>
    </div>';

        $css = '.oxi-addons-FI-7-' . $oxiid . '{
        width: 100%;
        float: left;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 45) . ';
    }
    .oxi-addons-FI-7-' . $oxiid . ' .oxi-addons-FI-7-row{
        width: 100%;
        margin: auto;
        border: ' . $styledata[7] . 'px ' . $styledata[8] . '  ' . $styledata[11] . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ';
        ' . OxiAddonsBoxShadowSanitize($styledata, 61) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 29) . ';
        ' . OxiAddonsBGImage($styledata, 3) . ';
        overflow: auto;
    }
    .oxi-addons-FI-7-' . $oxiid . ' .oxi-addons-FI-7-header-text{
        width: 100%;
        float: left;
        font-size: ' . $styledata[75] . 'px;
        color: ' . $styledata[79] . ';
        ' . OxiAddonsFontSettings($styledata, 81) . '
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';
        
    } 
    .oxi-addons-FI-7-' . $oxiid . ' .oxi-addons-FI-7-follow-us{
        width: 100%;
        float: left;
        font-size: ' . $styledata[103] . 'px;
        color: ' . $styledata[107] . ';
        ' . OxiAddonsFontSettings($styledata, 109) . '
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 115) . ';
    }
    .oxi-addons-FI-7-' . $oxiid . ' .oxi-addons-FI-7-col-icon{
        width: 100%;
        float:left;
        text-align:' . $styledata[157] . ';
    }
    .oxi-addons-FI-7-' . $oxiid . ' .oxi-addons-FI-7-follow-icon .oxi-icons{
        display: inline-flex;
        align-items: center;
        justify-content: center;
        ' . OxiAddonsBGImage($styledata, 71) . ';
        font-size: ' . $styledata[131] . 'px;
        width: ' . $styledata[135] . 'px;
        height: ' . $styledata[135] . 'px;
        color: ' . $styledata[139] . ';
         border: ' . $styledata[143] . 'px ' . $styledata[144] . '  ' . $styledata[147] . ';
        ' . OxiAddonsBoxShadowSanitize($styledata, 149) . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 159) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 175) . ';
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 191) . ';
    }
    .oxi-addons-FI-7-' . $oxiid . ' .oxi-addons-FI-7-follow-icon .oxi-icons:hover{
        color: ' . $styledata[141] . ';
        ' . OxiAddonsBGImage($styledata, 207) . ';
        border-color:' . $styledata[211] . ';
        ' . OxiAddonsBoxShadowSanitize($styledata, 213) . '; 
    } 
    @media only screen and (min-width : 669px) and (max-width : 993px){
    .oxi-addons-FI-7-' . $oxiid . '{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 46) . ';
    }
    .oxi-addons-FI-7-' . $oxiid . ' .oxi-addons-FI-7-row{
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 14) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 30) . ';
    }
    .oxi-addons-FI-7-' . $oxiid . ' .oxi-addons-FI-7-header-text{
        font-size: ' . $styledata[76] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 88) . ';
        
    } 
    .oxi-addons-FI-7-' . $oxiid . ' .oxi-addons-FI-7-follow-us{
        font-size: ' . $styledata[104] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 116) . ';
    }
    .oxi-addons-FI-7-' . $oxiid . ' .oxi-addons-FI-7-follow-icon .oxi-icons{
        font-size: ' . $styledata[132] . 'px;
        width: ' . $styledata[136] . 'px;
        height: ' . $styledata[136] . 'px;
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 160) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 176) . ';
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 192) . ';
    }   
           
        }
    @media only screen and (max-width : 668px){
    .oxi-addons-FI-7-' . $oxiid . '{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 47) . ';
    }
    .oxi-addons-FI-7-' . $oxiid . ' .oxi-addons-FI-7-row{
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
    }
    .oxi-addons-FI-7-' . $oxiid . ' .oxi-addons-FI-7-header-text{
        font-size: ' . $styledata[77] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 89) . ';
        
    } 
    .oxi-addons-FI-7-' . $oxiid . ' .oxi-addons-FI-7-follow-us{
        font-size: ' . $styledata[105] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 117) . ';
    }
    .oxi-addons-FI-7-' . $oxiid . ' .oxi-addons-FI-7-follow-icon .oxi-icons{
        font-size: ' . $styledata[133] . 'px;
        width: ' . $styledata[137] . 'px;
        height: ' . $styledata[137] . 'px;
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 161) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 177) . ';
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 193) . ';
    } 
    }';


        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
