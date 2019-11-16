<?php

namespace SHORTCODE_ADDONS_UPLOAD\Counter\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_4
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_4 extends Templates {

    public function public_jquery() {
        wp_enqueue_script('waypoints.min', SA_ADDONS_URL . '/assets/front/js/waypoints.min.js', false, SA_ADDONS_PLUGIN_VERSION);
        $this->JSHANDLE = 'jquery-counterup-min';
        wp_enqueue_script('jquery-counterup-min', SA_ADDONS_UPLOAD_URL . '/Counter/file/jquery-counterup-min', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery() {
        $style = $this->style;
        $jquery = '$(".oxi-number-style4-' . $this->WRAPPER . '").counterUp({
                    delay: ' . $style['sa_counter_delay-size'] . ',
                    time: ' . $style['sa_counter_duration-size'] . '
                })';
        return $jquery;
        ;
    }

    public function default_render($style, $child, $admin) {
        
        $repeater = (array_key_exists('sa_counter_repeater', $style) && is_array($style['sa_counter_repeater'])) ? $style['sa_counter_repeater'] : [];
        foreach ($repeater as $key => $value) {

            $title = $number = '';

            if (array_key_exists('sa_counter_text_on', $style) && $style['sa_counter_text_on'] != '0') {
                $title = '<div class="oxi-addons-title oxi-addons-counter-title-' . $key . '">' . $this->text_render($value['sa_counter_title_text']) . '</div>';
            }
            if (array_key_exists('sa_counter_number_on', $style) && $style['sa_counter_number_on'] != '0') {
                $number = '<div class="oxi-addons-number oxi-addons-counter-number-' . $key . '"> <span class="oxi-number-style4 oxi-number-style4-' . $this->WRAPPER . '">' . $this->text_render($value['sa_counter_number']) . '</span> + </div>
                                  ';
            }

            echo '<div class = "' . $this->column_render('sa_counter_col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '" ' . $this->animation_render('sa_counter_animation', $style) . '>
                            <div class="oxi-addons-counter-style4">
                                <div class="oxi-addons-counter ">';

            $rearrange = explode(',', $style['sa_counter_rearrange']);
               foreach ($rearrange as $arrange) {
                    if ($arrange != ''):
                        if (isset($$arrange)) {
                            echo $$arrange;
                        }
                    endif;
                }
            echo '</div> ';
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
        echo '<div class="oxi-addons-row">
            <div class="oxi-addons-wrapper-' . $oxiid . '">';
        foreach ($listdata as $value) {
            $listfiles = explode('||#||', $value['files']);
            $title = $number = '';
            echo '<div class = "' . OxiAddonsItemRows($styledata, 3) . ' ">
                            <div class="oxi-addons-counter-' . $oxiid . '">
                                <div class="oxi-addons-counter ">';
            if (!empty($listfiles[1])) {
                $number = '<div class="oxi-addons-number "> <span class="oxi-number-' . $oxiid . '">' . OxiAddonsTextConvert($listfiles[1]) . '</span> + </div>
                                  ';
            }
            if (!empty($listfiles[3])) {
                $title = '<div class="oxi-addons-title">' . OxiAddonsTextConvert($listfiles[3]) . '</div>';
            }

            $rearrange = explode(',', $styledata[109]);
            foreach ($rearrange as $arrange) {
                echo $$arrange;
            }
            echo '</div> ';

            echo '</div>
                </div>';
        }
        echo '</div>
        </div>';
        $css .= '  
        .oxi-addons-wrapper-' . $oxiid . '{
            width: 100%;
            float: left; 
            overflow: hidden;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-admin-absulote{
            top: 0;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-counter-' . $oxiid . '{
            width: 100%;
            float: left;  
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-counter {
            width: 100%;
            float: left;  
            ' . OxiAddonsBGImage($styledata, 7) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';
             ' . OxiAddonsBoxShadowSanitize($styledata, 43) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-number{
            float:left;
            width:100%;
            font-size: ' . $styledata[53] . 'px;
            color:' . $styledata[63] . ';
            ' . OxiAddonsFontSettings($styledata, 57) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 65) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{
            float:left;
            width:100%;
            font-size: ' . $styledata[81] . 'px;
            color:' . $styledata[91] . ';
            ' . OxiAddonsFontSettings($styledata, 85) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . ';
        }
        @media only screen and (min-width : 669px) and (max-width : 993px){ 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-counter-' . $oxiid . '{ 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 28) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-counter { 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 12) . '; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-number{ 
                font-size: ' . $styledata[54] . 'px; 
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 66) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{ 
                font-size: ' . $styledata[82] . 'px; 
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 94) . ';
            }  
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-counter-' . $oxiid . '{ 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 29) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-counter { 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . '; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-number{ 
                font-size: ' . $styledata[55] . 'px; 
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 67) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{ 
                font-size: ' . $styledata[83] . 'px; 
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 95) . ';
            }  
        }';
        $jquery = 'jQuery(".oxi-number-' . $oxiid . '").counterUp({
                        delay: ' . ($styledata[51] * 1000) . ',
                        time: ' . ($styledata[49] * 1000) . '
                })';
        wp_add_inline_style('shortcode-addons-style', $css);
        wp_enqueue_script('jquery-counterup-min', SA_ADDONS_UPLOAD_URL . '/Counter/file/jquery-counterup-min', false, SA_ADDONS_PLUGIN_VERSION);
        wp_add_inline_script('jquery.countdown.min', $jquery);
    }

}
