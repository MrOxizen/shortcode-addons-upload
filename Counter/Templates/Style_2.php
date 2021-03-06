<?php

namespace SHORTCODE_ADDONS_UPLOAD\Counter\Templates;

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

class Style_2 extends Templates {

    public function public_jquery() {
        wp_enqueue_script('waypoints.min', SA_ADDONS_URL . '/assets/front/js/waypoints.min.js', false, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_script('jquery-counterup-min', SA_ADDONS_UPLOAD_URL . '/Counter/file/jquery-counterup-min.js', false, SA_ADDONS_PLUGIN_VERSION);
        $this->JSHANDLE = 'jquery-counterup-min';
    }

    public function inline_public_jquery() {
        $style = $this->style;
        $jquery = '$(".oxi-addons-counter-style2-' . $this->WRAPPER . ' .oxi-addons-counter-number").counterUp({
                    delay: ' . $style['sa_counter_delay-size'] . ',
                    time: ' . $style['sa_counter_duration-size'] . '
                })';
        return $jquery;
        ;
    }

    public function default_render($style, $child, $admin) {

        $repeater = (array_key_exists('sa_counter_repeater', $style) && is_array($style['sa_counter_repeater'])) ? $style['sa_counter_repeater'] : [];
        foreach ($repeater as $key => $value) {
            $title = $icon = $divider = $number = '';
            if (array_key_exists('sa_counter_text_on', $style) && $style['sa_counter_text_on'] != '0') {
                $title = '<div class="oxi-addons-counter-body-data">
                                <div class="oxi-addons-counter-title oxi-addons-counter-title-' . $key . '">
                                    ' . $this->text_render($value['sa_counter_title_text']) . '
                                </div>
                         </div>';
            }

            if (array_key_exists('sa_counter_divider_on', $style) && $style['sa_counter_divider_on'] != '0') {
                $divider = '<div class="oxi-addons-counter-body-data"> 
                                <div class="oxi-addons-counter-divider">
                                    <div class="oxi-divider-left">
                                        <div class="oxi-divider"></div>
                                    </div>
                                </div>
                            </div>';
            }
            if (array_key_exists('sa_counter_number_on', $style) && $style['sa_counter_number_on'] != '0') {
                $number = '<div class="oxi-addons-counter-body-data">
                                <div class="oxi-addons-counter-number oxi-addons-counter-icon-' . $key . '">
                                    ' . $this->text_render($value['sa_counter_number']) . '
                                </div>
                            </div>';
            }

            if (array_key_exists('sa_counter_icon', $style) && $style['sa_counter_icon'] != '0') {
                $icon = '<div class="oxi-addons-counter-body">
                            <div class="oxi-addons-counter-body-data oxi-addons-counter-icons"> 
                                <div class="oxi-addons-counter-icon oxi-addons-counter-number-' . $key . '">
                                    ' . $this->font_awesome_render($value['sa_counter_icon_class']) . '
                                </div>
                            </div>
                        </div>';
            }

            echo '<div class = "' . $this->column_render('sa_counter_col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '" ' . $this->animation_render('sa_counter_animation', $style) . '>
                    <div class="oxi-addons-counter-style2 oxi-addons-counter-style2-' . $this->WRAPPER . ' ' . $style['sa_counter_align'] . '"> ';
            if ($style['sa_counter_align'] == 'left') {
                echo $icon;
            }

            echo '<div class="oxi-addons-counter-body">';

            $rearrange = explode(',', $style['sa_counter_rearrange']);
            foreach ($rearrange as $arrange) {
                if ($arrange != ''):
                    if (isset($$arrange)) {
                        echo $$arrange;
                    }
                endif;
            }

            echo '</div>';
            if ($style['sa_counter_align'] == 'right') {
                echo $icon;
            }
            echo '</div></div>';
        }
    }

    public function old_render() {
        wp_enqueue_script('waypoints.min', SA_ADDONS_URL . '/assets/front/js/waypoints.min.js', false, SA_ADDONS_PLUGIN_VERSION);
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $stylename = $styledata['style_name'];
        $datatype = $styledata['type'] . 'data';
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';
        $title = $divider = $icon = $number = '';
        echo '<div class="oxi-addons-container ">'
        . '<div class="oxi-addons-row oxi-addons-center">';
        foreach ($listdata as $value) {
            $listfiles = explode('||#||', $value['files']);
            if (!empty($listfiles[3])) {
                $title = '<div class="oxi-addons-counter-body-data"> <div class="oxi-addons-counter-title">' . OxiAddonsTextConvert($listfiles[3]) . '</div></div>';
            }
            if (!empty($styledata[187])) {
                $divider = '<div class="oxi-addons-counter-body-data oxi-addons-counter-body-data-divider"> <div class="oxi-addons-counter-divider"><div class="oxi-divider-left"><div class="oxi-divider"></div></div></div></div>';
            }
            if (!empty($listfiles[1])) {
                $number = '<div class="oxi-addons-counter-body-data"> <div class="oxi-addons-counter-number">' . OxiAddonsTextConvert($listfiles[1]) . '</div></div>';
            }
            if (!empty($listfiles[5])) {
                $icon = '<div class="oxi-addons-counter-body"><div class="oxi-addons-counter-body-data oxi-addons-counter-icons"> <div class="oxi-addons-counter-icon">' . oxi_addons_font_awesome($listfiles[5]) . '</div></div></div>';
            }

            echo '<div class = "' . OxiAddonsItemRows($styledata, 17) . ' " ' . OxiAddonsAnimation($styledata, 11) . '>
                    <div class="oxi-addons-counter-' . $oxiid . '">';
            if ($styledata[15] == 'left') {
                echo $icon;
            }
            echo '<div class="oxi-addons-counter-body">';
            $rearrange = explode(',', $styledata[3]);
            foreach ($rearrange as $arrange) {
                echo $$arrange;
            }
            echo '</div>';
            if ($styledata[15] == 'right') {
                echo $icon;
            }
            echo '</div>';

            echo '</div>';
        }
        echo '</div></div>';
        if ($styledata[15] == 'left') {
            $iconalign = 'justify-content: flex-end;';
            $divideralign = 'margin-right:auto;';
        } else {
            $iconalign = 'justify-content: flex-start;';
            $divideralign = 'margin-left:auto;';
        }
        $css .= '.oxi-addons-counter-' . $oxiid . '{
                    width:100%;
                    float:left;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . ';
                }
                .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-body{
                    width:50%;
                    float:left;
                }
                .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-body-data{
                    width:100%;
                    float:left;
                    text-align: ' . $styledata[15] . ' !important;
                }
                .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-body-data.oxi-addons-counter-icons{
                    width:100%;
                    float:left;
                    display: inline-flex;
                    ' . $iconalign . '
                }
                .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-title{
                    float:left;
                    width:100%;
                    font-size: ' . $styledata[37] . 'px;
                    color:' . $styledata[41] . ';
                    ' . OxiAddonsFontSettings($styledata, 43) . '
                    padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
                }
                .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-number{
                    float:left;
                    width:100%;
                    font-size: ' . $styledata[65] . 'px;
                    color:' . $styledata[69] . ';
                    ' . OxiAddonsFontSettings($styledata, 71) . '
                    padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 77) . ';
                }
                 .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-icon{
                    width: ' . $styledata[97] . 'px;
                    height:' . $styledata[97] . 'px;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    ' . OxiAddonsBGImage($styledata, 103) . '
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 107) . ';
                    border-color:' . $styledata[124] . ';
                    border-style: ' . $styledata[123] . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . ';
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 143) . ';
                }
                .oxi-addons-counter-' . $oxiid . ' .oxi-icons{
                    font-size: ' . $styledata[93] . 'px;
                    color:' . $styledata[101] . ';
                }
                .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-body-data-divider{
                     padding:' . OxiAddonsPaddingMarginSanitize($styledata, 171) . ';
                }
                .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-divider{
                    position: relative;
                    display: table;
                    width: 100%;
                    max-width:' . $styledata[159] . 'px;
                    ' . $divideralign . '
                }
               .oxi-addons-counter-' . $oxiid . ' .oxi-divider-left{
                    display: table-cell;
                    width: 100%;
                    vertical-align: middle;
                }
               .oxi-addons-counter-' . $oxiid . ' .oxi-divider-left .oxi-divider {
                    border-top-style: ' . $styledata[167] . ';
                    border-top-color: ' . $styledata[168] . ';
                    border-top-width: ' . $styledata[163] . 'px;
                    margin-top: 1px;
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){
                  .oxi-addons-counter-' . $oxiid . '{
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 22) . ';
                    }
                    .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-title{
                        font-size: ' . $styledata[38] . 'px;
                        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 50) . ';
                    }
                    .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-number{
                        font-size: ' . $styledata[66] . 'px;
                        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 78) . ';
                    }
                     .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-icon{
                        width: ' . $styledata[98] . 'px;
                        height:' . $styledata[98] . 'px;
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 108) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 128) . ';
                        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 144) . ';
                    }
                    .oxi-addons-counter-' . $oxiid . ' .oxi-icons{
                        font-size: ' . $styledata[94] . 'px;
                    }
                     .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-body-data-divider{
                     padding:' . OxiAddonsPaddingMarginSanitize($styledata, 12) . ';
                }
                    .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-divider{
                        max-width:' . $styledata[160] . 'px;
                    }
                   .oxi-addons-counter-' . $oxiid . ' .oxi-divider-left .oxi-divider {
                        border-top-width: ' . $styledata[164] . 'px;
                    }
                }
                @media only screen and (max-width : 668px){
                   .oxi-addons-counter-' . $oxiid . '{
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
                    }
                    .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-title{
                        font-size: ' . $styledata[39] . 'px;
                        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 51) . ';
                    }
                    .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-number{
                        font-size: ' . $styledata[67] . 'px;
                        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 79) . ';
                    }
                     .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-icon{
                        width: ' . $styledata[99] . 'px;
                        height:' . $styledata[99] . 'px;
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 109) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';
                        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 145) . ';
                    }
                    .oxi-addons-counter-' . $oxiid . ' .oxi-icons{
                        font-size: ' . $styledata[95] . 'px;
                    }
                     .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-body-data-divider{
                     padding:' . OxiAddonsPaddingMarginSanitize($styledata, 173) . ';
                    }
                    .oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-divider{
                        max-width:' . $styledata[161] . 'px;
                    }
                   .oxi-addons-counter-' . $oxiid . ' .oxi-divider-left .oxi-divider {
                        border-top-width: ' . $styledata[165] . 'px;
                    }
                }
                ';
        $jquery = 'jQuery(".oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-number").counterUp({
                        delay: ' . ($styledata[191] * 1000) . ',
                        time: ' . ($styledata[189] * 1000) . '
                    })';
        wp_add_inline_style('shortcode-addons-style', $css);
        wp_enqueue_script('jquery-counterup-min', SA_ADDONS_UPLOAD_URL . '/Counter/file/jquery-counterup-min.js', false, SA_ADDONS_PLUGIN_VERSION);
        wp_add_inline_script('jquery.countdown.min', $jquery);
    }

}
