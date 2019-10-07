<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Opening_hours\Templates;

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

class Style_9 extends Templates {

    public function default_render($style, $child, $admin) {
        $header = $subheader = '';
        if (!empty($style['sa_oh_header'])) {
            $header = '<div class="oxi-addonsOH-SX-header">' . $this->text_render($style['sa_oh_header']) . '</div>';
        }
        if (!empty($style['sa_oh_subheader'])) {
            $subheader = '<div class="oxi-addonsOH-SX-subheader">' . $this->text_render($style['sa_oh_subheader']) . '</div>';
        }
        echo '<div class="oxi-addonsOH-SX-wrapper-9">
                    <div class="oxi-addonsOH-SX-row" ' . $this->animation_render('sa_oh_animation', $style) . '>
                            ' . $header . '
                            ' . $subheader . '
                            <div class="oxi-addonsOH-SX-rowpadding">        
             ';

        $repeater = (array_key_exists('sa_oh_repeater', $style) && is_array($style['sa_oh_repeater'])) ? $style['sa_oh_repeater'] : [];
        foreach ($repeater as $key => $value) {

            $day = $times = '';
            if (!empty($value['sa_oh_day_text'])) {
                $day = '<div class="oxi-addonsOH-SX-heading">
                                <div class="oxi-addonsOH-SX-heading-text">
                                       ' . $this->text_render($value['sa_oh_day_text']) . '
                                </div>
                            </div>';
            }
            if (!empty($value['sa_oh_time_text'])) {
                $times = '<div class="oxi-addonsOH-SX-date">' . $this->text_render($value['sa_oh_time_text']) . '</div>';
            }

            echo '<div class="oxi-addonsOH-SX-child ' . $this->column_render('sa_oh_col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '">
                  
                            <div class="oxi-addonsOH-SX-content sa_oh_wrapper_' . $key . '">
                                ' . $day . '
                                ' . $times . '
                            </div>
                    </div> ';
        }

        $footer = $button = '';
        if (!empty($style['sa_oh_fotter'])) {
            $footer = '<div class="oxi-addonsOH-SX-footertext">' . $this->text_render($style['sa_oh_fotter']) . '</div>';
        }
        if (!empty($style['sa_oh_button'])) {
            $button = '<div class="oxi-addonsOH-SX-button">
                        <a  class="oxi-addonsOH-SX-button-link">' . $this->text_render($style['sa_oh_button']) . '</a>
                    </div>';
        }
        echo '</div>
                    ' . $footer . '
                    ' . $button . '
                    
                </div> 
            </div>';
    }

    public function old_render() {
        $style = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);

        $css = '';
        echo ' <div class="oxi-addons-container">
          <div class="oxi-addons-row">
                <div class="oxi-addonsOH-SX-wrapper-' . $oxiid . ' oxi-addonsOH-SX-wrapper-' . $oxiid . '">
                    <div class="oxi-addonsOH-SX-row" ' . OxiAddonsAnimation($styledata, 85) . '>
                        <div class="oxi-addonsOH-SX-header">' . OxiAddonsTextConvert($stylefiles[2]) . '</div>
                        <div class="oxi-addonsOH-SX-subheader">' . OxiAddonsTextConvert($stylefiles[4]) . '</div>
                            <div class="oxi-addonsOH-SX-rowpadding">
                        ';
        foreach ($listdata as $value) {
            $listitemdata = explode('||#||', $value['files']);
            $day = $times = $icon = '';
            if ($listitemdata[2] != '') {
                $day = '<div class="oxi-addonsOH-SX-heading">
                                <div class="oxi-addonsOH-SX-heading-text oxi-addonsOH-SX-heading-text-' . $value['id'] . '">
                                       ' . OxiAddonsTextConvert($listitemdata[2]) . '
                                </div>
                            </div>';
            }
            if ($listitemdata[4] != '') {
                $times = '<div class="oxi-addonsOH-SX-date oxi-addonsOH-SX-date-' . $value['id'] . '">' . OxiAddonsTextConvert($listitemdata[4]) . '</div>';
            }



            echo '<div class="oxi-addonsOH-SX-child ' . OxiAddonsItemRows($styledata, 3) . ' ">
                        <div class="oxi-addonsOH-SX-content ">
                            ' . $icon . '
                            ' . $day . '
                            ' . $times . '
                        ';

            echo '</div></div>';
            $css .= '.oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-heading-text-' . $value['id'] . '{
            color: ' . $listitemdata[6] . ';
        }
        .oxi-addonsOH-SX-date-' . $value['id'] . '{
                color: ' . $listitemdata[8] . ';}';
        }
        echo '
                    </div>
                    <div class="oxi-addonsOH-SX-footertext">' . OxiAddonsTextConvert($stylefiles[6]) . '</div>
                    <div class="oxi-addonsOH-SX-button">
                        <a href="' . OxiAddonsUrlConvert($stylefiles[10]) . '" target="' . $styledata[257] . '"  class="oxi-addonsOH-SX-button-link">' . OxiAddonsTextConvert($stylefiles[8]) . '</a>
                    </div>
                </div> 
            </div>
        </div>
    </div>';
        $css .= '.oxi-addonsOH-SX-wrapper-' . $oxiid . '{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-row{
            width: 100%;
            margin: 0 auto;
            max-width: ' . $styledata[145] . 'px;
            ' . OxiAddonsBGImage($styledata, 7) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 79) . ';
            overflow: hidden;
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ' ;
            border-style: ' . $styledata[11] . ';
            border-color: ' . $styledata[12] . ';
            
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-rowpadding{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 47) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-header{
            width: 100%;
            float: left;
            background: ' . $styledata[171] . ';
            font-size: ' . $styledata[173] . 'px;
            color: ' . $styledata[177] . ';
            ' . OxiAddonsFontSettings($styledata, 179) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 185) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-subheader{
            width: 100%;
            float: left;
            font-size: ' . $styledata[201] . 'px;
            color: ' . $styledata[205] . ';
            ' . OxiAddonsFontSettings($styledata, 207) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 213) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-footertext{
            width: 100%;
            float: left;
            font-size: ' . $styledata[229] . 'px;
            color: ' . $styledata[233] . ';
            ' . OxiAddonsFontSettings($styledata, 235) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 241) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-content{
            width: 100%;
            float: left;
            display: flex;
            border-bottom: ' . $styledata[149] . 'px ' . $styledata[150] . '  ' . $styledata[153] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 155) . ';
            transition: .8s;
            
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-child:last-child .oxi-addonsOH-SX-content{
           border-bottom: 0px; 
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-content:hover{
            padding-left: 14px;
            padding-right: 14px;
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . '  .oxi-addonsOH-SX-heading{
            width: 100%;
            float: left;
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-heading-text{
            width: 100%;
            font-size: ' . $styledata[89] . 'px;
            ' . OxiAddonsFontSettings($styledata, 95) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-date{
            width: 100%;
            float: left;
            font-size: ' . $styledata[117] . 'px;
            ' . OxiAddonsFontSettings($styledata, 123) . ';
             margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . '  .oxi-addonsOH-SX-button{
            width: 100%;
            float:left;
            ' . OxiAddonsFontSettings($styledata, 267) . '
            text-align: ' . explode(':', $styledata[249])[0] . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . '  .oxi-addonsOH-SX-button-link{
            display:inline-block;
            font-size: ' . $styledata[259] . 'px;
            color: ' . $styledata[263] . ';
            background: ' . $styledata[265] . ';
            text-align:center;
            border: ' . $styledata[273] . 'px ' . $styledata[274] . ' ;
            border-color: ' . $styledata[277] . ' ;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 279) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 295) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 311) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . '  .oxi-addonsOH-SX-button-link:hover,
        .oxi-addonsOH-SX-wrapper-' . $oxiid . '  .oxi-addonsOH-SX-button-link:focus,
        .oxi-addonsOH-SX-wrapper-' . $oxiid . '  .oxi-addonsOH-SX-button-link:active{
            color: ' . $styledata[327] . ';
            background: ' . $styledata[329] . ';
            border-color: ' . $styledata[331] . ' ;
         }

         @media only screen and (min-width : 669px) and (max-width : 993px){

           .oxi-addonsOH-SX-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 64) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-row{
            max-width: ' . $styledata[146] . 'px; 
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-rowpadding{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 48) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-header{
            font-size: ' . $styledata[174] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 186) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-subheader{
             font-size: ' . $styledata[202] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 214) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-footertext{
             font-size: ' . $styledata[230] . 'px;
             padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 242) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-content{
             padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 156) . ';
        }
       .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-heading-text{
            font-size: ' . $styledata[90] . 'px;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-date{
           font-size: ' . $styledata[118] . 'px;
           margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . '  .oxi-addonsOH-SX-button-link{
            font-size: ' . $styledata[260] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 296) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 312) . ';
        }
    }
         @media only screen and (max-width : 668px){
          
           .oxi-addonsOH-SX-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 65) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-row{
            max-width: ' . $styledata[147] . 'px; 
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-rowpadding{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-header{
            font-size: ' . $styledata[175] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-subheader{
             font-size: ' . $styledata[203] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 215) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-footertext{
             font-size: ' . $styledata[231] . 'px;
             padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 243) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-content{
             padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 157) . ';
        }
       .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-heading-text{
            font-size: ' . $styledata[91] . 'px;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . ' .oxi-addonsOH-SX-date{
           font-size: ' . $styledata[119] . 'px;
           margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
        }
        .oxi-addonsOH-SX-wrapper-' . $oxiid . '  .oxi-addonsOH-SX-button-link{
            font-size: ' . $styledata[261] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 297) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 313) . ';
        }
         }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
