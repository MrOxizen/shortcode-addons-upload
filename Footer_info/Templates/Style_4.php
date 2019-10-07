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

class Style_4 extends Templates {

    public function default_render($style, $child, $admin) {


        //Logo Section SR

        $logo = $logo_logo = $logo_text = '';
        if (array_key_exists('sa_fi_logo_logo', $style) && $style['sa_fi_logo_logo'] != '0') {
            $logo_logo = ' <div class="oxi_addons_FI_4_logo_logo">
                                <img src="' . $this->media_render('sa_fi_logo_image', $style) . '" alt="front image"/>
                            </div>';
        }
        if (array_key_exists('sa_fi_logo_text', $style) && $style['sa_fi_logo_text'] != '0') {
            $logo_text = ' <div class="oxi_addons_FI_4_logo_text">
                                    ' . $this->text_render($style['sa_fi_logo_text_text']) . '
                                </div>';
        }
        if (array_key_exists('sa_fi_logo', $style) && $style['sa_fi_logo'] != '0') {
            $logo = '<div class="oxi_addons_FI_4_col_1" >
                        <div class="oxi_addons_FI_4_logo_body" >
                            <a ' . $this->url_render('sa_fi_logo_url', $style) . ' >
                                <div class="oxi_addons_FI_4_logo" ' . $this->animation_render('sa_fi_animation', $style) . '>
                                   ' . $logo_logo . '
                                   ' . $logo_text . '
                                </div>
                            </a>
                        </div>
                    </div>';
        }

        //Content Section

        $contact = $details = '';

        if (!empty($style['sa_fi_content_header'])) {
            $details .= '<div class="oxi_addons_FI_4_contact">' . $this->text_render($style['sa_fi_content_header']) . '</div>';
        }
        if (!empty($style['sa_fi_content_address'])) {
            $details .= '<div class="oxi_addons_FI_4_address">' . $this->text_render($style['sa_fi_content_address']) . '</div>';
        }
        if (!empty($style['sa_fi_content_mobile'])) {
            $details .= '<div class="oxi_addons_FI_4_phone">' . $this->text_render($style['sa_fi_content_mobile']) . '</div>';
        }
        if (!empty($style['sa_fi_content_email'])) {
            $details .= ' <div class="oxi_addons_FI_4_email">' . $this->text_render($style['sa_fi_content_email']) . '</div>';
        }


        if (array_key_exists('sa_fi_content', $style) && $style['sa_fi_content'] != '0') {
            $contact = '<div class="oxi_addons_FI_4_col_2">
                            <div class="oxi_addons_FI_4_content" ' . $this->animation_render('sa_fi_animation', $style) . '>
                                ' . $details . '
                            </div>
                         </div>';
        }


        //Icon Section

        $icon = $icon_icon = '';
        $repeater =  (array_key_exists('sa_fi_icon_repeater', $style) && is_array($style['sa_fi_icon_repeater'])) ? $style['sa_fi_icon_repeater'] : [];
        foreach ($repeater as $key => $value) {
            $icon .= ' <a ' . $this->url_render('sa_fi_icon_url', $value) . ' class = "sa_FI_4_icon_repeater_' . $key . '">
                            ' . $this->font_awesome_render($value['sa_fi_icon_icon']) . '
                         </a> ';
        }

        if (array_key_exists('sa_fi_icon', $style) && $style['sa_fi_icon'] != '0') {
            $icon_icon = '<div class="oxi_addons_FI_4_col_3">
                            <div class="oxi_addons_FI_4_icon" ' . $this->animation_render('sa_fi_animation', $style) . '>
                            ' . $icon . '
                            </div>
                        </div>';
        }

        // Main Section
        echo '<div class="oxi_addons_container">
                <div class="oxi_addons_FI_4">
                    <div class="oxi_addons_FI_4_row">
                        ' . $logo . '
                        ' . $contact . '
                        ' . $icon_icon . '
                      </div>
                </div>
            </div>';
    }

    public function old_render() {
        $style = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        $logo = $contact = '';
        if ($stylefiles[4] != '' && $stylefiles[2] != '') {
            $logo = '<div class="oxi-addons-FI-4-col-1" >
                        <a href="' . OxiAddonsUrlConvert($stylefiles[4]) . '" target="' . $styledata[67] . '"><div class="oxi-addons-FI-4-logo" ' . OxiAddonsAnimation($styledata, 47) . '>' . OxiAddonsTextConvert($stylefiles[2]) . '</div></a>
                    </div>';
        } elseif ($stylefiles[4] == '' && $stylefiles[2] != '') {
            $logo = '<div class="oxi-addons-FI-4-col-1" >
                        <div class="oxi-addons-FI-4-logo" ' . OxiAddonsAnimation($styledata, 47) . '>' . OxiAddonsTextConvert($stylefiles[2]) . '</div>
                    </div>';
        }
        if ($stylefiles[6] != '') {
            $contact = '<div class="oxi-addons-FI-4-col-2">
                    <div class="oxi-addons-FI-4-Address" ' . OxiAddonsAnimation($styledata, 47) . '>
                        ' . OxiAddonsTextConvert($stylefiles[6]) . '
                    </div>
                </div>';
        }
        echo '<div class="oxi-addons-container">
            <div class="oxi-addons-FI-4-' . $oxiid . '">
                <div class="oxi-addons-FI-4-row">
                    ' . $logo . '
                    ' . $contact . '
                    <div class="oxi-addons-FI-4-col-3">
                        <div class="oxi-addons-FI-4-icon" ' . OxiAddonsAnimation($styledata, 47) . '>';
        foreach ($listdata as $value) {
            $listitemdata = explode('||#||', $value['files']);
            echo '<a class="oxi-icons" href="' . OxiAddonsUrlConvert($listitemdata[4]) . '" target="' . $styledata[67] . '">' . oxi_addons_font_awesome($listitemdata[2]) . '';

            echo '</a>';
        }
        echo'    
                    </div>
                </div>
            </div>
        </div>
    </div>';
        $css = '.oxi-addons-FI-4-' . $oxiid . '{
                width: 100%;
                float: left;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
            }
            .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-row{
                width: 100%;
                align-items: initial;
                display: flex;
                overflow: hidden;
                border: ' . $styledata[3] . 'px ' . $styledata[4] . '  ' . $styledata[7] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 41) . ';
            }
            .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-col-1,.oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-col-2, .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-col-3{
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 173) . ';
            }
            .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-col-1{
                ' . OxiAddonsBGImage($styledata, 51) . ';
                border: ' . $styledata[55] . 'px ' . $styledata[56] . '  ' . $styledata[59] . ';

            }
            .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-col-2{
                ' . OxiAddonsBGImage($styledata, 97) . ';
                border: ' . $styledata[101] . 'px ' . $styledata[102] . '  ' . $styledata[105] . ';
            }
            .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-col-3{
                ' . OxiAddonsBGImage($styledata, 135) . ';
                border: ' . $styledata[139] . 'px ' . $styledata[140] . '  ' . $styledata[143] . ';
            }
            .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-logo{
                font-size: ' . $styledata[61] . 'px;
                color: ' . $styledata[65] . ';
                border: ' . $styledata[69] . 'px ' . $styledata[70] . '  ' . $styledata[73] . ';
                ' . OxiAddonsFontSettings($styledata, 75) . '
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
            }
            .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-Address{
                width: 100%;
                float: left;
                font-size: ' . $styledata[107] . 'px;
                color: ' . $styledata[111] . ';
                ' . OxiAddonsFontSettings($styledata, 113) . '
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 119) . ';
            }
            .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-icon{
                width: 100%;
                float: left;
                text-align:' . $styledata[155] . ';
            }
            .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-icon .oxi-icons{
                font-size: ' . $styledata[145] . 'px;
                color: ' . $styledata[149] . ';
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 157) . ';
            }
            .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-icon .oxi-icons:hover{
                color: ' . $styledata[151] . ';
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-FI-4-' . $oxiid . '{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 26) . ';
                }
                .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-row{
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 10) . ';
                }
                .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-col-1,.oxi-addons-FI-4-col-2, .oxi-addons-FI-4-col-3{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 174) . ';
                }
                .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-logo{
                    font-size: ' . $styledata[62] . 'px;
                    padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
                }
                .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-Address{
                    font-size: ' . $styledata[108] . 'px;
                    padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 120) . ';
                }
                .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-icon .oxi-icons{
                    font-size: ' . $styledata[146] . 'px;
                    padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 158) . ';
                }

            }
             @media only screen and (max-width : 668px){
                    .oxi-addons-FI-4-' . $oxiid . '{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';
                }
                .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-row{
                    flex-direction: column;
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';
                }
                .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-col-1,.oxi-addons-FI-4-col-2, .oxi-addons-FI-4-col-3{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 175) . ';
                }
                .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-logo{
                    font-size: ' . $styledata[63] . 'px;
                    padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
                }
                .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-Address{
                    font-size: ' . $styledata[109] . 'px;
                    padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 121) . ';
                }
                .oxi-addons-FI-4-' . $oxiid . ' .oxi-addons-FI-4-icon .oxi-icons{
                    font-size: ' . $styledata[147] . 'px;
                    padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 159) . ';
                }
            }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
