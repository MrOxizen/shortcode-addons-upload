<?php

namespace SHORTCODE_ADDONS_UPLOAD\Flip_boxes\Templates;

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

class Style_8 extends Templates {

    public function public_css() {
        wp_enqueue_style('jquery_flip_boxes_default_css', SA_ADDONS_UPLOAD_URL . '/Flip_boxes/File/flip-boxes.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function default_render($style, $child, $admin) {

        $styledata = $this->style;
        foreach ($styledata['sa_flip_boxes_data_style_7'] as $key => $value) {
            $fronticon = $backicon = $startlink = $endlink= '';
            if ($value['sa_flip_boxes_icon'] != '') {
                $fronticon .= '<div class="oxi-addons-flip-box-front-icon">
                    ' . $this->font_awesome_render($value['sa_flip_boxes_icon']) . '
                    </div>';
            }
            if ($value['sa_flip_back_boxes_icon'] != '') {
                $backicon .= '<div class="oxi-addons-flip-box-back-icon">
                            ' . $this->font_awesome_render($value['sa_flip_back_boxes_icon']) . '
                        </div>';
            }
            
            if ($this->url_render('sa_flip_boxes_body_link', $value) != '') {
                $startlink .= '<a ' . $this->url_render('sa_flip_boxes_body_link', $value) . '>';
                $endlink = '</a>';
            }
            echo ' '.$startlink.' <div class="oxi-flip-box-col-style-8 ' . $this->column_render('sa-flip-boxes-col', $style) . ' ">
                        <div class="oxi-addons-flip-box-style-8">
                            <div class="oxi-addons-flip-boxes-body"  ' . $this->animation_render('sa-flip-boxes-animation', $style) . '>
                                <div class="oxi-addons-flip-boxes-body-data">
                                    <div class="oxi-addons-flip-box-flip ' . $styledata['sa-ac-flip_boxes_flip_direction'] . '">
                                        <div class="oxi-addons-flip-box-flip-data ' . $styledata['sa-ac-flip_boxes_flip_effects'] . '">
                                            <div class="oxi-addons-flip-box-style">
                                                <div class="oxi-addons-flip-box-front">
                                                    <div class="oxi-addons-flip-box-front-section-box">
                                                        <div class="oxi-addons-flip-box-front-section">                                             
                                                            ' . $fronticon . '
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="oxi-addons-flip-box-back">
                                                    <div class="oxi-addons-flip-box-back-section-box">
                                                        <div class="oxi-addons-flip-box-back-section">
                                                            ' . $backicon  . '
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>'.$endlink.'';
        }
    }

    public function old_render() {

        wp_enqueue_style('jquery_flip_boxes_css', SA_ADDONS_UPLOAD_URL . '/Flip_boxes/File/flip-boxes.css', false, SA_ADDONS_PLUGIN_VERSION);

        $styledata = $this->dbdata;
        $listdata = $this->child;
        $stylename = $styledata['style_name'];
        $oxiid = $styledata['id'];
        $css = '';
         $stylefiles = explode('||#||', $styledata['css']);
    $styledata = explode('|', $stylefiles[0]);
    echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">';
    foreach ($listdata as $value) {
        $data = explode('||#||', $value['files']);
        $fronticon = $backicon = $fileslinkend = '';

        if ($data[1] != '') {
            $fronticon .= '<div class="oxi-addons-flip-box-front-icon">
                            ' . oxi_addons_font_awesome($data[1]) . '
                        </div>';
        }
        if ($data[3] != '') {
            $backicon .= '<div class="oxi-addons-flip-box-back-icon">
                            ' . oxi_addons_font_awesome($data[3]) . '
                        </div>';
        }
        echo '       <div class="' . OxiAddonsItemRows($styledata, 3) . '"    ' . OxiAddonsAnimation($styledata, 53) . '>';
        if ($data[5] != '') {
            echo '<a href="' . OxiAddonsUrlConvert($data[5]) . '">';
            $fileslinkend = '</a>';
        }
                    echo'<div class="oxi-addons-flip-box-' . $oxiid . '">
                            <div class="oxi-addons-flip-boxes-body">
                                <div class="oxi-addons-flip-boxes-body-data">
                                    <div class="oxi-addons-flip-box-flip ' . $styledata[7] . '">
                                        <div class="oxi-addons-flip-box-flip-data ' . $styledata[9] . '">
                                            <div class="oxi-addons-flip-box-style">
                                                <div class="oxi-addons-flip-box-front">
                                                    <div class="oxi-addons-flip-box-front-section-box">
                                                        <div class="oxi-addons-flip-box-front-section">
                                                        '.$fronticon.'
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="oxi-addons-flip-box-back">
                                                    <div class="oxi-addons-flip-box-back-section-box">
                                                        <div class="oxi-addons-flip-box-back-section">
                                                            '.$backicon.'
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
       
        echo $fileslinkend;
        echo '</div>';
    }
    echo '</div>
        </div>';
    $css = '
        .oxi-addons-container .oxi-addons-flip-box-' . $oxiid . ' *{
            -webkit-transition: all  ' . $styledata[11] . 's ease-in-out;
            -moz-transition: all  ' . $styledata[11] . 's ease-in-out;
            transition: all  ' . $styledata[11] . 's ease-in-out;
            text-decoration: none;    
        }
        .oxi-addons-flip-box-' . $oxiid . '{
            max-width: ' . $styledata[13] . 'px;
            height: ' . $styledata[17] . 'px;
            width: 100%;
            margin: 0 auto;
            position: relative;
            padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 37) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . '; 
            overflow: hidden;
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-boxes-body:after {    
            padding-bottom: ' . ($styledata[17] / $styledata[13] * 100) . '%;
            content: "";
            display: block;
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-section-box {
            width: 100%;
            height: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 109) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-section {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . '; 
            border-style: ' . $styledata[89] . ';
            border-color: ' . $styledata[90] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . '; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . '; 
            ' . OxiAddonsBGImage($styledata, 69) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 57) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon {
            width: 100%;
            text-align: center;
            display: inline-block;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 173) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon .oxi-icons {
            display: inline-block;
            font-size:  ' . $styledata[129] . 'px;
            width: ' . $styledata[125] . 'px;
            height: ' . $styledata[125] . 'px;
            color: ' . $styledata[133] . ';
            background: ' . $styledata[135] . ';
            line-height: ' . $styledata[125] . 'px;
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 137) . '; 
            border-style: ' . $styledata[153] . ';
            border-color: ' . $styledata[154] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 157) . '; 
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section-box {
            width: 100%;
            height: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 229) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 193) . '; 
            border-style: ' . $styledata[209] . ';
            border-color: ' . $styledata[210] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . '; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 213) . '; 
            ' . OxiAddonsBGImage($styledata, 189) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 63) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon {
            width: 100%;
            text-align: center;
            display: inline-block;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 293) . ';
        }
        .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon .oxi-icons {
            display: inline-block;
            font-size:  ' . $styledata[249] . 'px;
            width: ' . $styledata[245] . 'px;
            height: ' . $styledata[245] . 'px;
            color: ' . $styledata[253] . ';
            background: ' . $styledata[255] . ';
            line-height: ' . $styledata[245] . 'px;
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 257) . '; 
            border-style: ' . $styledata[273] . ';
            border-color: ' . $styledata[274] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 277) . '; 
        }
        
        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-flip-box-' . $oxiid . '{
                max-width: ' . $styledata[14] . 'px;
                height: ' . $styledata[18] . 'px;
                padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 38) . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 22) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-boxes-body:after {    
                padding-bottom: ' . ($styledata[18] / $styledata[14] * 100) . '%;
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-section-box {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 110) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-section {
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 74) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 22) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 94) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 174) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon .oxi-icons {
                font-size:  ' . $styledata[130] . 'px;
                width: ' . $styledata[126] . 'px;
                height: ' . $styledata[126] . 'px;
                line-height: ' . $styledata[126] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 138) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 158) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section-box {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 230) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 194) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 22) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 214) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 294) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon .oxi-icons {
                font-size:  ' . $styledata[250] . 'px;
                width: ' . $styledata[246] . 'px;
                height: ' . $styledata[246] . 'px;
                line-height: ' . $styledata[246] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 258) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 278) . '; 
            }
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-flip-box-' . $oxiid . '{
                max-width: ' . $styledata[15] . 'px;
                height: ' . $styledata[19] . 'px;
                padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-boxes-body:after {    
                padding-bottom: ' . ($styledata[19] / $styledata[15] * 100) . '%;
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-section-box {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 111) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-section {
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 75) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 95) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 175) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-front-icon .oxi-icons {
                font-size:  ' . $styledata[131] . 'px;
                width: ' . $styledata[127] . 'px;
                height: ' . $styledata[127] . 'px;
                line-height: ' . $styledata[127] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 139) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 159) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section-box {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 231) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-section {
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 195) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 215) . '; 
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 295) . ';
            }
            .oxi-addons-flip-box-' . $oxiid . ' .oxi-addons-flip-box-back-icon .oxi-icons {
                font-size:  ' . $styledata[251] . 'px;
                width: ' . $styledata[247] . 'px;
                height: ' . $styledata[247] . 'px;
                line-height: ' . $styledata[247] . 'px;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 259) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 279) . '; 
            }
        }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
