<?php

namespace SHORTCODE_ADDONS_UPLOAD\Wp_forms\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/*
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_1 extends Templates {

    public function default_render($style, $child, $admin) {
        $shortcode = '';
        $styledata = $this->style;
        
        
//        echo '<pre>';
//        print_r($style);
//        echo '</pre>';
        
        
        
        if ($this->text_render($styledata['sa_wp_forms_textarea']) != '') {
            $shortcode .= $this->text_render($styledata['sa_wp_forms_textarea']);
        } else {
            $shortcode .= '<div style="color : red;    font-size: 20px;
                            text-align: center;
                            font-weight: 700;">Please Insert Your Shortcode First.</div>';
        }
        $wp_forms_css = plugins_url("wpforms-lite/assets/css/wpforms-full.css");
        echo '<link rel="stylesheet" href="' . $wp_forms_css . '">';

        echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">
            <div>
                <div class="oxi-addons-contact-wp-form-outer">
                    <div class="oxi-addons-contact-wp-form-inner" >' . $shortcode . '</div>
                </div>
                </div>
            </div>
            </div>
            ';
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $buttton_w = '';
        if ($styledata[575] === 'full') {
            $buttton_w .= 'width: 100%;';
        }
        $button_posi = '';
        $button_posi .= explode(':', $styledata[541])[0];
        $jquery = '';
        $css = '';
        $shortcode = '';
        if (!empty($stylefiles[2])) {
            $shortcode .= OxiAddonsTextConvert($stylefiles[2]);
        } else {
            $shortcode .= '<div style="color : red;    font-size: 20px;
    text-align: center;
    font-weight: 700;">Please Insert Your Shortcode First.</div>';
        }
        $wp_forms_css = plugins_url("wpforms-lite/assets/css/wpforms-full.css");
        echo '<link rel="stylesheet" href="' . $wp_forms_css . '">';

        echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">
                <div class="oxi-addons-form-warp-' . $oxiid . '">
                    <div class="oxi-addons-contact-wp-form" >' . $shortcode . '</div>
                </div>
            </div>
            </div>
            ';
        $css .= '
    .oxi-addons-form-warp-' . $oxiid . '{
        max-width: ' . $styledata[3] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 61) . '; 
        margin: 0 auto;
    }
    .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-contact-wp-form {
        background: ' . $styledata[7] . ';
        border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 9) . '; 
        border-style: ' . $styledata[25] . '; 
        border-color: ' . $styledata[26] . '; 
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 29) . '; 
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 45) . '; 
        ' . OxiAddonsBoxShadowSanitize($styledata, 77) . ';
    }
    
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field-label {
        display: block;
        font-size: ' . $styledata[83] . 'px;
        color: ' . $styledata[91] . '; 
        text-transform: uppercase;
        ' . OxiAddonsFontSettings($styledata, 95) . ';
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field-label span.wpforms-required-label{
        font-size: ' . $styledata[87] . 'px;
        color: ' . $styledata[93] . '; 
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field:not(.wpforms-field-checkbox):not(.wpforms-field-select):not(.wpforms-field-radio):not(.wpforms-field-name) .wpforms-field-label {
        position: absolute;
        top: 35%;
        left: 0;
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field:not(.wpforms-field-checkbox):not(.wpforms-field-select):not(.wpforms-field-radio):not(.wpforms-field-name) .wpforms-field-label.oxi_focus {
        top: -10px;
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field {
        padding: 0;
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 165) . ';
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field:not(.wpforms-field-checkbox):not(.wpforms-field-select):not(.wpforms-field-radio):not(.wpforms-field-name) {
        position: relative;
        margin: 0 auto;
        border-bottom: ' . $styledata[139] . 'px ' . $styledata[141] . ';
        border-color:' . $styledata[143] . ';
        padding: 0;
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 165) . ';
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field:not(.wpforms-field-checkbox):not(.wpforms-field-select):not(.wpforms-field-radio):not(.wpforms-field-name).oxi_focus::after {
        width: 100%; 
        transition: all .3s linear;
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field:not(.wpforms-field-checkbox):not(.wpforms-field-select):not(.wpforms-field-radio):not(.wpforms-field-name)::after {
        content: "";
        position: absolute;
        left: 0;
        width: 0;
        height: ' . $styledata[139] . 'px;
        background: ' . $styledata[145] . ';
        transition: all .3s linear;
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-has-error:not(.wpforms-field-checkbox):not(.wpforms-field-select):not(.wpforms-field-radio):not(.wpforms-field-name)::after {
        width: 100%;
        background: ' . $styledata[147] . ';
    }
    div.wpforms-container-full .wpforms-form .wpforms-field input.wpforms-error,
    div.wpforms-container-full .wpforms-form .wpforms-field textarea.wpforms-error,
    div.wpforms-container-full .wpforms-form .wpforms-field select.wpforms-error {
        border: none;
        outline: none;
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input,
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form textarea {
        border: none;
        outline: none;
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=date],
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=datetime],
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=datetime-local],
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=email],
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=month],
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=number],
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=password],
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=range],
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=search],
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=tel],
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=text],
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=time],
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=url],
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=week],
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form textarea {
        font-size: ' . $styledata[101] . 'px;
        color: ' . $styledata[105] . ';
        background: ' . $styledata[107] . ';
        ' . OxiAddonsFontSettings($styledata, 109) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 149) . ';
    }
    
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=checkbox],
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=radio] {
        display: none;
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio li {
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 215) . ' !important;
        margin: 0 !important;
        text-align: left;
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio .wpforms-field-label-inline {
        font-size: ' . $styledata[181] . 'px;
        color: ' . $styledata[197] . ';
        ' . OxiAddonsFontSettings($styledata, 199) . ';
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio .wpforms-field-label-inline:before {
        content: "\00a0";
        display: inline-block;
        width: ' . $styledata[189] . 'px;
        height: ' . $styledata[189] . 'px;
        background: ' . $styledata[193] . ';
        border-radius: ' . $styledata[211] . '%; 
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 231) . ';
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio input[type=radio]:checked + .wpforms-field-label-inline:before {
        box-shadow: inset 0px 0px 0px ' . $styledata[185] . 'px ' . $styledata[193] . ';
        background: ' . $styledata[195] . ';
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox .wpforms-field-label-inline {
        font-size: ' . $styledata[247] . 'px;
        color: ' . $styledata[263] . ';
        ' . OxiAddonsFontSettings($styledata, 265) . ';
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox li {
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 281) . ' !important;
        margin: 0 !important;
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox .wpforms-field-label-inline:before {
        content: "\00a0";
        display: inline-block;
        font: ' . $styledata[251] . 'px/1em sans-serif;
        width: ' . $styledata[255] . 'px;
        height: ' . $styledata[255] . 'px;
        background: ' . $styledata[261] . ';
        border: ' . $styledata[271] . 'px ' . $styledata[273] . ';
        border-color: ' . $styledata[275] . '; 
        border-radius: ' . $styledata[277] . 'px; 
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 297) . ';
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox input[type=checkbox]:checked + .wpforms-field-label-inline:before {
        color: ' . $styledata[259] . ';
        content: "\2713";
        text-align: center;
    } 
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form select {
        font-size: ' . $styledata[313] . 'px;
        color: ' . $styledata[317] . ';
        background: ' . $styledata[319] . ';
        border: ' . $styledata[325] . 'px ' . $styledata[327] . ';
        border-color: ' . $styledata[329] . ';
        height: auto;
        ' . OxiAddonsFontSettings($styledata, 331) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 337) . ';
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 353) . ';
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form select option {
        color: ' . $styledata[321] . ';
        background: ' . $styledata[323] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 337) . ';
    }
    
    .oxi-addons-form-warp-' . $oxiid . ' .wpforms-title {
        font-size: ' . $styledata[369] . 'px !important;
        color: ' . $styledata[373] . '; 
        background: ' . $styledata[375] . ' !important; 
        ' . OxiAddonsFontSettings($styledata, 377) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 383) . ' !important; 
        margin: 0 !important;
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form label.wpforms-error {
        position: absolute;
        top: 105%;
        font-size: ' . $styledata[399] . 'px;
        color: ' . $styledata[403] . '; 
        ' . OxiAddonsFontSettings($styledata, 405) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 411) . '; 
    }
    .oxi-addons-form-warp-' . $oxiid . ' .wpforms-submit-container {
        text-align: ' . $button_posi . ';
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=submit],
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form button[type=submit],
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-page-button {
        font-size: ' . $styledata[485] . 'px;
        color: ' . $styledata[489] . ';
        background: ' . $styledata[493] . ';
        ' . $buttton_w . '
        max-width: 100%;
        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 497) . ';
        border-style: ' . $styledata[513] . ';
        border-color: ' . $styledata[514] . ';
        border-radius:  ' . $styledata[521] . 'px;
        ' . OxiAddonsFontSettings($styledata, 537) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 543) . ';
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 559) . ';
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=submit]:hover,
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form button[type=submit]:hover,
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-page-button:hover {
        color: ' . $styledata[491] . ';
        background: ' . $styledata[495] . ';
        border-color: ' . $styledata[519] . ';
    }
    .wpforms-confirmation-container-full {
        margin: 0;
        padding: 0;
        border: 0;
    }
    .wpforms-confirmation-container-full p {
        font-size: ' . $styledata[427] . 'px;
        color: ' . $styledata[431] . ';
        background: ' . $styledata[433] . ';
        border: ' . $styledata[435] . 'px ' . $styledata[437] . ';
        border-color: ' . $styledata[439] . ';
        border-radius:  ' . $styledata[441] . 'px;
        ' . OxiAddonsFontSettings($styledata, 445) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 451) . ';
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 467) . ';
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field-description {
        position: absolute;
        left: 0;
        top: 100%;
    }
    .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full {
        margin-bottom: 0;
    }
    @media only screen and (min-width : 669px) and (max-width : 993px){
        .oxi-addons-form-warp-' . $oxiid . '{
            max-width: ' . $styledata[4] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 62) . '; 
        }
        .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-contact-wp-form {
            border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 10) . '; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 30) . '; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 46) . '; 
        }
        
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field-label {
            font-size: ' . $styledata[84] . 'px;
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field-label span.wpforms-required-label{
            font-size: ' . $styledata[88] . 'px;
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field {
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 166) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field:not(.wpforms-field-checkbox):not(.wpforms-field-select):not(.wpforms-field-radio):not(.wpforms-field-name) {
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 166) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=date],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=datetime],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=datetime-local],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=email],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=month],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=number],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=password],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=range],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=search],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=tel],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=text],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=time],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=url],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=week],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form textarea {
            font-size: ' . $styledata[102] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 150) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio li {
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 216) . ' !important;
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio .wpforms-field-label-inline {
            font-size: ' . $styledata[182] . 'px;
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio .wpforms-field-label-inline:before {
            width: ' . $styledata[190] . 'px;
            height: ' . $styledata[190] . 'px;
            border-radius: ' . $styledata[212] . '%; 
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 232) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio input[type=radio]:checked + .wpforms-field-label-inline:before {
            box-shadow: inset 0px 0px 0px ' . $styledata[186] . 'px ' . $styledata[193] . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox .wpforms-field-label-inline {
            font-size: ' . $styledata[248] . 'px;
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox li {
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 282) . ' !important;
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox .wpforms-field-label-inline:before {
            font: ' . $styledata[252] . 'px/1em sans-serif;
            font-width: 700;
            width: ' . $styledata[256] . 'px;
            height: ' . $styledata[256] . 'px;
            border-radius: ' . $styledata[278] . 'px; 
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 298) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form select {
            font-size: ' . $styledata[314] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 338) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 354) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form select option {
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 338) . ';
        }
        
        .oxi-addons-form-warp-' . $oxiid . ' .wpforms-title {
            font-size: ' . $styledata[370] . 'px !important;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 384) . ' !important; 
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form label.wpforms-error {
            font-size: ' . $styledata[400] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 412) . '; 
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=submit],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form button[type=submit],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-page-button {
            font-size: ' . $styledata[486] . 'px;
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 498) . ';
            border-radius:  ' . $styledata[522] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 544) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 560) . ';
        }
        .wpforms-confirmation-container-full {
            font-size: ' . $styledata[428] . 'px;
            border-radius:  ' . $styledata[442] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 452) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 468) . ';
        }
    }
    @media only screen and (max-width : 668px){
        .oxi-addons-form-warp-' . $oxiid . '{
            max-width: ' . $styledata[5] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . '; 
        }
        .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-contact-wp-form {
            border-width:' . OxiAddonsPaddingMarginSanitize($styledata, 11) . '; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . '; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 47) . '; 
        }
        
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field-label {
            font-size: ' . $styledata[85] . 'px;
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field-label span.wpforms-required-label{
            font-size: ' . $styledata[89] . 'px;
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field {
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 167) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field:not(.wpforms-field-checkbox):not(.wpforms-field-select):not(.wpforms-field-radio):not(.wpforms-field-name) {
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 167) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=date],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=datetime],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=datetime-local],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=email],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=month],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=number],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=password],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=range],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=search],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=tel],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=text],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=time],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=url],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=week],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form textarea {
            font-size: ' . $styledata[103] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 151) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio li {
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 217) . ' !important;
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio .wpforms-field-label-inline {
            font-size: ' . $styledata[183] . 'px;
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio .wpforms-field-label-inline:before {
            width: ' . $styledata[191] . 'px;
            height: ' . $styledata[191] . 'px;
            border-radius: ' . $styledata[213] . '%; 
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 233) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-radio input[type=radio]:checked + .wpforms-field-label-inline:before {
            box-shadow: inset 0px 0px 0px ' . $styledata[187] . 'px ' . $styledata[193] . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox .wpforms-field-label-inline {
            font-size: ' . $styledata[249] . 'px;
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox li {
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 283) . ' !important;
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-field.wpforms-field-checkbox .wpforms-field-label-inline:before {
            font: ' . $styledata[253] . 'px/1em sans-serif;
            width: ' . $styledata[257] . 'px;
            height: ' . $styledata[257] . 'px;
            border-radius: ' . $styledata[279] . 'px; 
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 299) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form select {
            font-size: ' . $styledata[315] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 339) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 355) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form select option {
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 339) . ';
        }
        
        .oxi-addons-form-warp-' . $oxiid . ' .wpforms-title {
            font-size: ' . $styledata[371] . 'px !important;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 385) . ' !important; 
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form label.wpforms-error {
            font-size: ' . $styledata[401] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 413) . '; 
        }
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form input[type=submit],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form button[type=submit],
        .oxi-addons-form-warp-' . $oxiid . ' div.wpforms-container-full .wpforms-form .wpforms-page-button {
            font-size: ' . $styledata[487] . 'px;
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 499) . ';
            border-radius:  ' . $styledata[523] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 545) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 561) . ';
        }
        .wpforms-confirmation-container-full {
            font-size: ' . $styledata[429] . 'px;
            border-radius:  ' . $styledata[443] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 453) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 469) . ';
        }
    }
    ';

        $jquery .= '
        var allField = jQuery("div.wpforms-container-full .wpforms-form input, div.wpforms-container-full .wpforms-form textarea");
        allField.focusin(function () {
            jQuery(this).prev().addClass("oxi_focus");
            jQuery(this).parent(".wpforms-field").addClass("oxi_focus");
        });
        allField.blur(function () {
            if (jQuery(this).val() === "") {
                jQuery(this).prev().removeClass("oxi_focus");
                jQuery(this).parent(".wpforms-field").removeClass("oxi_focus");
            } else {
                jQuery(this).prev().addClass("oxi_focus");
                jQuery(this).parent(".wpforms-field").addClass("oxi_focus");
            }
        })';

        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }

}
