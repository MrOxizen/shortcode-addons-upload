<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Footer_info\Templates;

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

class Style_1 extends Templates {

    public function inline_public_css() {
        $rt = '';
        foreach ($this->child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);
            $rt .= $this->background_render('sa_fi_header_bg', $value, '.' . $this->WRAPPER . ' .oxi_addons_FI_1 .sa_bg_color-' . $v['id']);
        }
        return $rt;
    }

    public function default_render($style, $child, $admin) {
        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);

            $icon = $text = $headersection = $phone = $email = $contentsection = '';
            if (!empty($value['sa_fi_icon_class'])) {
                $icon = (array_key_exists('sa_fi_icon', $value) && $value['sa_fi_icon'] != '0' ? '<div class="oxi_addons_FI_1_icon">' . $this->font_awesome_render($value['sa_fi_icon_class']) . '</div>' : '');
            }
            if (!empty($value['sa_fi_header_text'])) {
                $text = '<div class="oxi_addons_FI_1_T">' . $this->text_render($value['sa_fi_header_text']) . '</div>';
            }
            if ($icon != '' || $text != '') {
                $headersection = '<div class="oxi_addons-FI_1_header_body sa_bg_color-' . $v['id'] . '">
                                            <div class="oxi_addons_FI_1_header">
                                                ' . $icon . '
                                                ' . $text . '
                                            </div>
                                        </div>';
            }
            if (!empty($value['sa_fi_conten_text'])) {
                $phone = '<div class="oxi_addons_FI_1_phone">' . $this->text_render($value['sa_fi_conten_text']) . '</div>';
            }
            if (!empty($value['sa_fi_content_text2'])) {
                $email = '<div class="oxi_addons_FI_1_email">' . $this->text_render($value['sa_fi_content_text2']) . '</div>';
            }
            if ($phone != '' || $email != '') {
                $contentsection = '<div class="oxi_addons-FI_1_footer_body">
                                    ' . $phone . '
                                    ' . $email . '
                                </div>';
            }
            echo '<div class="' . $this->column_render('sa_fi_col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '">
            <div class="oxi_addons_FI_1 ">
                    <div class="oxi_addons_FI_1_row " ' . $this->animation_render('sa_fi_animation', $style) . '>
                        ' . $headersection . '
                        ' . $contentsection . ' 
                    </div>
                 </div>';
            if ($admin == 'admin') :
                echo'<div class="oxi-addons-admin-absulote">
                            <div class="oxi-addons-admin-absulate-edit">
                                <button class="btn btn-primary shortcode-addons-template-item-edit" type="button" value="' . $v['id'] . '">Edit</button>
                            </div>
                            <div class="oxi-addons-admin-absulate-delete">
                                <button class="btn btn-danger shortcode-addons-template-item-delete" type="submit" value="' . $v['id'] . '">Delete</button>
                            </div>
                        </div>';
            endif;
            echo '</div>';
        }
    }

    public function old_render() {
        $style = $this->dbdata;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);

        $icon = $text = $headersection = $phone = $email = $contentsection = '';
        if ($stylefiles[2] != '') {
            $icon = '<div class="oxi_addons_FI_1_icon">' . oxi_addons_font_awesome('' . OxiAddonsTextConvert($stylefiles[2]) . '') . '</div>';
        }
        if ($stylefiles[4] != '') {
            $text = '<div class="oxi_addons_FI_1_T">' . OxiAddonsTextConvert($stylefiles[4]) . '</div>';
        }
        if ($icon != '' || $text != '') {
            $headersection = '<div class="oxi_addons-FI_1_header_body">
                                    <div class="oxi_addons_FI_1_header">
                                        ' . $icon . '
                                        ' . $text . '
                                    </div>
                                </div>';
        }
        if ($stylefiles[6] != '') {
            $phone = '<div class="oxi_addons_FI_1_phone">' . OxiAddonsTextConvert($stylefiles[6]) . '</div>';
        }
        if ($stylefiles[8] != '') {
            $email = '<div class="oxi_addons_FI_1_email">' . OxiAddonsTextConvert($stylefiles[8]) . '</div>';
        }
        if ($phone != '' || $email != '') {
            $contentsection = '<div class="oxi_addons-FI_1_footer_body">
                            ' . $phone . '
                            ' . $email . '
                        </div>';
        }
        echo '<div class="oxi-addons-container">
        <div class="oxi_addons_FI_1_' . $oxiid . '">
            <div class="oxi_addons_FI_1_row" ' . OxiAddonsAnimation($styledata, 35) . '>
                ' . $headersection . '
                ' . $contentsection . ' 
            </div>
        </div>
    </div>';
        $css = '.oxi_addons_FI_1_' . $oxiid . '{
        width: 100%;
        float: left;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ';
    }
    .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons_FI_1_row{
        width: 100%;
        max-width: ' . $styledata[3] . 'px;
        margin: auto;
        border: ' . $styledata[7] . 'px ' . $styledata[8] . '  ' . $styledata[11] . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 191) . ';
        ' . OxiAddonsBoxShadowSanitize($styledata, 29) . ';
        overflow: auto;
    }
    .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons-FI_1_header_body{
        width: 100%;
        float: left;
        ' . OxiAddonsBGImage($styledata, 39) . ';
        text-align:' . $styledata[43] . ';
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 45) . ';
    }
    .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons_FI_1_header{
        width: 100%;
        float: left;
    }
    .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons_FI_1_icon{
        width: 100%;
        float: left;
    }
    .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons_FI_1_icon .oxi-icons{
        font-size: ' . $styledata[63] . 'px;
        color: ' . $styledata[61] . ';
        text-align:' . $styledata[67] . ';
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 69) . ';
    }
    .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons_FI_1_T{
        width: 100%;
        float: left;
        font-size: ' . $styledata[85] . 'px;
        color: ' . $styledata[89] . ';
        ' . OxiAddonsFontSettings($styledata, 91) . '
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 97) . ';
    }
    .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons-FI_1_footer_body{
        width: 100%;
        float: left;
         ' . OxiAddonsBGImage($styledata, 113) . ';
        text-align:' . $styledata[117] . ';
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 119) . ';
    }
    .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons_FI_1_phone{
        width: 100%;
        float: left;
        font-size: ' . $styledata[135] . 'px;
        color: ' . $styledata[139] . ';
        ' . OxiAddonsFontSettings($styledata, 141) . '
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 147) . ';
    }
    .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons_FI_1_email{
        width: 100%;
        float: left;
        font-size: ' . $styledata[163] . 'px;
        color: ' . $styledata[167] . ';
        ' . OxiAddonsFontSettings($styledata, 169) . '
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 175) . ';
    }
    @media only screen and (min-width : 669px) and (max-width : 993px){
        .oxi_addons_FI_1_' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 14) . ';
        }
        .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons_FI_1_row{
            max-width: ' . $styledata[4] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 192) . ';
        }
        .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons-FI_1_header_body{
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 46) . ';
        }
        .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons_FI_1_icon .oxi-icons{
            font-size: ' . $styledata[64] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 70) . ';
        }
        .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons_FI_1_T{
            font-size: ' . $styledata[86] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 98) . ';
        }
        .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons-FI_1_footer_body{
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 120) . ';
        }
        .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons_FI_1_phone{
            font-size: ' . $styledata[136] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 148) . ';
        }
        .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons_FI_1_email{
            font-size: ' . $styledata[164] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 176) . ';
        } 
    }
    @media only screen and (max-width : 668px){
            .oxi_addons_FI_1_' . $oxiid . '{
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
           }
           .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons_FI_1_row{
               max-width: ' . $styledata[5] . 'px;
               border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 193) . ';
           }
           .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons-FI_1_header_body{
               padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 47) . ';
           }
           .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons_FI_1_icon .oxi-icons{
               font-size: ' . $styledata[65] . 'px;
               padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';
           }
           .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons_FI_1_T{
               font-size: ' . $styledata[87] . 'px;
               padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';
           }
           .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons-FI_1_footer_body{
               padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 121) . ';
           }
           .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons_FI_1_phone{
               font-size: ' . $styledata[137] . 'px;
               padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 149) . ';
           }
           .oxi_addons_FI_1_' . $oxiid . ' .oxi_addons_FI_1_email{
               font-size: ' . $styledata[165] . 'px;
               padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 177) . ';
           }
        }




';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
