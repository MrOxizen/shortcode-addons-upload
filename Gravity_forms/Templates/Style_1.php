<?php

namespace SHORTCODE_ADDONS_UPLOAD\Gravity_forms\Templates;

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

    public function default_render($style, $child, $admin) {

       $gfShortcode = '';
        if (!empty($style['sa_gf_id'])) {
            $gfShortcode .= '[gravityform id=' . $this->text_render($style['sa_gf_id']) . ' title=' . $style['sa_gf_title'] . ' description=' . $style['sa_gf_description'] . ' ajax=' . $style['sa_gf_ajax'] . ']';
        } else {
            $gfShortcode .= '<div style="color : red;    font-size: 20px;
        text-align: center;
        font-weight: 700;">Please Set your Gravity ID Key.</div>';
        }
        echo '
        <div class="oxi-addons-container">
            <div class="oxi-addons-row">
                <div class="oxi-addons-gr-form-sagf">
                    <div class="oxi-addons-gravity-form" >' . $gfShortcode . '</div>
                </div>
            </div>
        </div>
    ';
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $jquery = '';
        $css = '';
        $align_btn = explode(':', $styledata[595]);
        $btn_width = '';
       if ($styledata[661] == 'full') {
            $btn_width = 'width : 100%;';
        }
        $gfShortcode = '';
        if (!empty($stylefiles[2])) {
            $gfShortcode .= OxiAddonsTextConvert('[gravityform id=' . $stylefiles[2] . ' title=' . $stylefiles[4] . ' description=' . $stylefiles[6] . ' ajax=' . $stylefiles[8] . ']');
        } else {
            $gfShortcode .= '<div style="color : red;    font-size: 20px;
        text-align: center;
        font-weight: 700;">Please Set your Gravity ID Key.</div>';
        }
        echo '
        <div class="oxi-addons-container">
            <div class="oxi-addons-row">
                <div class="oxi-addons-gr-form-' . $oxiid . '">
                    <div class="oxi-addons-gravity-form">' . $gfShortcode . '</div>
                </div>
            </div>
        </div>
    ';
        $css .= '
        .oxi-addons-gr-form-' . $oxiid . '{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
        }
        .oxi-addons-gr-form-' . $oxiid . ' .oxi-addons-gravity-form{
            width: 100%;
            margin : 0 auto;
            max-width : ' . $styledata[3] . 'px;
            background : ' . $styledata[7] . ';
            border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
        }
            .oxi-addons-gr-form-' . $oxiid . ' input[type=checkbox], 
        .oxi-addons-gr-form-' . $oxiid . '  input[type=color],
        .oxi-addons-gr-form-' . $oxiid . '  input[type=date], 
        .oxi-addons-gr-form-' . $oxiid . '  input[type=datetime-local],
        .oxi-addons-gr-form-' . $oxiid . '  input[type=datetime], 
        .oxi-addons-gr-form-' . $oxiid . '  input[type=email], 
        .oxi-addons-gr-form-' . $oxiid . '  input[type=month], 
        .oxi-addons-gr-form-' . $oxiid . '  input[type=number], 
        .oxi-addons-gr-form-' . $oxiid . '  input[type=password],
        .oxi-addons-gr-form-' . $oxiid . '  input[type=radio],
        .oxi-addons-gr-form-' . $oxiid . '  input[type=search],
        .oxi-addons-gr-form-' . $oxiid . '  input[type=tel],
        .oxi-addons-gr-form-' . $oxiid . '   input[type=text],
        .oxi-addons-gr-form-' . $oxiid . '   input[type=time], input[type=url], input[type=week],
        .oxi-addons-gr-form-' . $oxiid . '   select,
        .oxi-addons-gr-form-' . $oxiid . '   textarea{
            border : 0;
            box-shadow : none;
        }
        .oxi-addons-gr-form-' . $oxiid . ' .oxi-addons-gravity-form .gform_wrapper .top_label div.ginput_container{
            margin : 0;
        }
        .oxi-addons-gr-form-' . $oxiid . ' .oxi-addons-gravity-form * label{
            margin : 0;
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .top_label .gfield_label, .gform_wrapper legend.gfield_label{
            font-size : ' . $styledata[57] . 'px;
            color : ' . $styledata[61] . ';
            ' . OxiAddonsFontSettings($styledata, 67) . ';	
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .field_sublabel_below .ginput_complex.ginput_container label,
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .field_sublabel_below div[class*=gfield_time_].ginput_container label,
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .field_description_below .gfield_description{
           font-size : ' . $styledata[667] . 'px;
                color : ' . $styledata[671] . ';
            ' . OxiAddonsFontSettings($styledata, 673) . ';	
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 679) . ';
        }
        .oxi-addons-gr-form-' . $oxiid . ' .oxi-addons-gravity-form .gform_title{
            width : 100%;
            color : ' . $styledata[347] . ';
            font-size : ' . $styledata[343] . 'px;
            ' . OxiAddonsFontSettings($styledata, 349) . ';	

            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 355) . ';
            margin : 0;
        }
        .oxi-addons-gr-form-' . $oxiid . ' .oxi-addons-gravity-form .gform_wrapper span.gform_description{
            color : ' . $styledata[375] . ';
            font-size : ' . $styledata[371] . 'px;
            ' . OxiAddonsFontSettings($styledata, 377) . ';	
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 383) . ';
            margin : 0;
            width : 100%;
        }
        .oxi-addons-gr-form-' . $oxiid . ' .oxi-addons-gravity-form * select{
            height : auto;
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .field_sublabel_hidden_label .ginput_complex.ginput_container input[type=text],
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .field_sublabel_hidden_label .ginput_complex.ginput_container select{
            margin : 0;
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper li.gfield_error input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), .gform_wrapper li.gfield_error textarea{
            border-color : ' . $styledata[169] . ';
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper textarea.medium{
            height : ' . $styledata[133] . 'px;
            resize : auto;
        }
        .oxi-addons-gr-form-' . $oxiid . '  .gform_wrapper textarea{
            
           
            color : ' . $styledata[137] . ';
            background : ' . $styledata[141] . ';

            border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 149) . ';;
            border-style: ' . $styledata[165] . ';
            border-color: ' . $styledata[166] . ';
            ' . OxiAddonsFontSettings($styledata, 143) . ';	
            border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 171) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper ul.gform_fields li.gfield{
            padding : 0;
        }
       

        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gfield_required{
            color : ' . $styledata[63] . ';
        }
        
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]){

            font-size : ' . $styledata[129] . 'px;
            color : ' . $styledata[137] . ';
            background : ' . $styledata[141] . ';
            ' . OxiAddonsFontSettings($styledata, 143) . ';	
            border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 149) . ';;
            border-style: ' . $styledata[165] . ';
            border-color: ' . $styledata[166] . ';
            border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 171) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
            width: 100%;
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):focus , 
            .oxi-addons-gr-form-' . $oxiid . '  .gform_wrapper textarea:focus{
            border-color : ' . $styledata[203] . ';  
            ' . OxiAddonsBoxShadowSanitize($styledata, 205) . ';
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])::placeholder,
            .oxi-addons-gr-form-' . $oxiid . '  .gform_wrapper textarea:placeholder{
            color : ' . $styledata[139] . ';
            font-weight : 300;
        }
        
    
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gfield_checkbox li, .oxi-addons-gr-form-' . $oxiid . '  .gform_wrapper .gfield_radio li{
            margin : 0;
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gfield_checkbox li label,
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gfield_radio li label{
            color :  ' . $styledata[287] . ';
            font-size : ' . $styledata[277] . 'px;
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_body .ginput_container_checkbox .gfield_checkbox input[type=checkbox], 
        .oxi-addons-gr-form-' . $oxiid . ' .gform_body .ginput_container_radio .gfield_radio input[type=radio]{
            display: none;
        }   
        .oxi-addons-gr-form-' . $oxiid . ' .ginput_container_radio .gfield_radio input[type=radio]:checked + label:before{
            background: ' . $styledata[293] . ';
            box-shadow: inset 0px 0px 0px ' . $styledata[655] . 'px ' . $styledata[285] . ';
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gfield_radio li label:before{
            content: "";
            background: ' . $styledata[285] . ';
            border: ' . $styledata[295] . 'px ' . $styledata[297] . ' ' . $styledata[299] . ';
            display: inline-block;
            vertical-align: middle;
            width: ' . $styledata[281] . 'px;
            height: ' . $styledata[281] . 'px;
            ' . OxiAddonsFontSettings($styledata, 301) . '
            border-radius : ' . $styledata[307] . 'px;
            text-align: center;
            margin : ' . OxiAddonsPaddingMarginSanitize($styledata, 327) . ';

        }

        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper ul.gfield_radio{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 311) . ';
        }
       
        .oxi-addons-gr-form-' . $oxiid . ' .ginput_container_consent input[type=checkbox]{
            display : none;
        }

        .oxi-addons-gr-form-' . $oxiid . ' input[type=checkbox]:checked:before{
            margin: 0;
        }
        .oxi-addons-gr-form-' . $oxiid . ' input[type="checkbox"]  {
            width : 0px !important;
            height: 0px !important;
            margin-bottom : 10px ;
            min-width: 16px;    
            -webkit-appearance: checkbox;
            vertical-align : unset;


        }
        .oxi-addons-gr-form-' . $oxiid . ' .ginput_container_consent {
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 245) . ';
        }
        .oxi-addons-gr-form-' . $oxiid . ' .ginput_container_checkbox input[type=checkbox]:checked + label:before,
        .oxi-addons-gr-form-' . $oxiid . ' .ginput_container_consent input[type=checkbox]:checked + label:before{
            font-size : ' . $styledata[223] . 'px;
            color: ' . $styledata[227] . ';
            content: "\2714";
            display: inline-flex;
            justify-content: center;
            align-items: center;
        }

        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gfield_checkbox li label,
        .oxi-addons-gr-form-' . $oxiid . ' .ginput_container_consent .gfield_consent_label{

            font-size : ' . $styledata[211] . 'px;
            color : ' . $styledata[221] . ';
            ' . OxiAddonsFontSettings($styledata, 235) . ';	
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gfield_checkbox li label:before,
        .oxi-addons-gr-form-' . $oxiid . ' .ginput_container_consent .gfield_consent_label:before{
            content: "\00a0";
            display: inline-block;
            border: ' . $styledata[229] . 'px ' . $styledata[231] . ' ' . $styledata[233] . ';
            height: ' . $styledata[215] . 'px;
            width: ' . $styledata[215] . 'px;
            background: ' . $styledata[219] . ';
            vertical-align: unset;
            border-radius: ' . $styledata[241] . 'px;
            margin :  ' . OxiAddonsPaddingMarginSanitize($styledata, 261) . ';
        }


        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_footer{
            margin : 0;
            padding : 0;
            text-align : ' . $align_btn[0] . ';
            padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 637) . ';
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_footer input.button,
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_footer input[type=submit], 
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_page_footer input.button, 
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_page_footer input[type=submit]{

            color : ' . $styledata[583] . ';
            background : ' . $styledata[587] . ';
            ' . OxiAddonsFontSettings($styledata, 591) . ';	
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 621) . ';
            border : ' . $styledata[657] . 'px ' . $styledata[659] . ' ' . $styledata[613] . ';
            margin : 0;
            font-size : ' . $styledata[577] . 'px;
            border-radius : ' . $styledata[617] . 'px;
                ' . $btn_width . '
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_footer input.button:hover,
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_footer input[type=submit]:hover, 
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_page_footer input.button:hover, 
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_page_footer input[type=submit]:hover{
            border-color : ' . $styledata[615] . ';
            color : ' . $styledata[585] . ';
            background : ' . $styledata[589] . ';
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield div.ginput_complex span.ginput_left select, 
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield div.ginput_complex span.ginput_right select, 
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield input[type=radio], 
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield select{

            margin : 0;
            width: 100%;
            border: ' . $styledata[101] . 'px ' . $styledata[103] . ' ' . $styledata[105] . ';
            box-shadow: none;
            font-size : ' . $styledata[89] . 'px;
            color : ' . $styledata[93] . ';
            background : ' . $styledata[95] . ';
            ' . OxiAddonsFontSettings($styledata, 107) . ';	
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 113) . ';

        }
        .oxi-addons-gr-form-' . $oxiid . ' .button,'
                . ' .oxi-addons-gr-form-' . $oxiid . ' .button-primary,  '
                . ' .oxi-addons-gr-form-' . $oxiid . ' .button-secondary{
            height : auto;
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper select option{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 113) . ';
            display: block;
            color: ' . $styledata[97] . ';
            background: ' . $styledata[99] . ';
        }

        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper li.gfield.gfield_error, 
        .oxi-addons-gr-form-' . $oxiid . '  .gform_wrapper li.gfield.gfield_error.gfield_contains_required.gfield_creditcard_warning{

            margin: 0;
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper li.gfield.gfield_error, 
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper li.gfield.gfield_error.gfield_contains_required.gfield_creditcard_warning{


        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper div.validation_error{
            margin : 0;
            font-size : ' . $styledata[399] . 'px;
            color : ' . $styledata[403] . ';
            background : ' . $styledata[405] . ';
            ' . OxiAddonsFontSettings($styledata, 407) . ';	
            border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 413) . ';
            border-style: ' . $styledata[429] . ';
            border-color: ' . $styledata[430] . ';
            border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 433) . ';
            padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 449) . ';
            margin : ' . OxiAddonsPaddingMarginSanitize($styledata, 465) . ';
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .validation_message{
            margin : 0;
            font-size : ' . $styledata[481] . 'px;
            color : ' . $styledata[487] . ';
            ' . OxiAddonsFontSettings($styledata, 489) . ';	
            padding : 10px 0;

        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_confirmation_wrapper{
            font-size : ' . $styledata[511] . 'px;
            color : ' . $styledata[515] . ';  
            background : ' . $styledata[517] . ';
            border : ' . $styledata[519] . 'px ' . $styledata[521] . ' ' . $styledata[653] . ';
            ' . OxiAddonsFontSettings($styledata, 523) . ';	
            border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 529) . ';
            padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 545) . ';
        }

        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gfield_error .gfield_label{
            color : ' . $styledata[485] . ';
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper li.gfield.gfield_error.gfield_contains_required div.ginput_container,
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper li.gfield.gfield_error.gfield_contains_required label.gfield_label{
            margin : 0;
        }
        .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper ul.gfield_checkbox{
            padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 245) . ';
        }
        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-gr-form-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 42) . ';
            }
            .oxi-addons-gr-form-' . $oxiid . ' .oxi-addons-gravity-form{
               
                max-width : ' . $styledata[4] . 'px;
                border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 10) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 26) . ';
            }
         
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .top_label .gfield_label, .gform_wrapper legend.gfield_label{
                font-size : ' . $styledata[58] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 74) . ';
            }
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .field_sublabel_below .ginput_complex.ginput_container label,
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .field_sublabel_below div[class*=gfield_time_].ginput_container label,
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .field_description_below .gfield_description{   
                font-size : ' . $styledata[668] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 680) . ';
            }

            .oxi-addons-gr-form-' . $oxiid . ' .oxi-addons-gravity-form .gform_title{
                font-size : ' . $styledata[344] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 356) . ';
            
            }
            .oxi-addons-gr-form-' . $oxiid . ' .oxi-addons-gravity-form .gform_wrapper span.gform_description{
               
                font-size : ' . $styledata[372] . 'px;
             
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 384) . ';
            
            }
          
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper textarea.medium{
                height : ' . $styledata[134] . 'px;
                
            }
            .oxi-addons-gr-form-' . $oxiid . '  .gform_wrapper textarea{
                border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 150) . ';;
                border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 172) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 188) . ';
              
            }
          
                       
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]){

                font-size : ' . $styledata[130] . 'px;
               
                border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 150) . ';;
                border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 172) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 188) . ';
            }
           
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gfield_radio li label{
                

                font-size : ' . $styledata[278] . 'px;
            }
            
             
          
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gfield_radio li label:before{
              
                width: ' . $styledata[282] . 'px;
                height: ' . $styledata[282] . 'px;
                ' . OxiAddonsFontSettings($styledata, 302) . '
                border-radius : ' . $styledata[308] . 'px;
               
                margin : ' . OxiAddonsPaddingMarginSanitize($styledata, 328) . ';

            }

            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper ul.gfield_radio{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 312) . ';
            }
         
            .oxi-addons-gr-form-' . $oxiid . ' .ginput_container_consent {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 246) . ';
            }

            .oxi-addons-gr-form-' . $oxiid . ' .ginput_container_checkbox input[type=checkbox]:checked + label:before,
            .oxi-addons-gr-form-' . $oxiid . ' .ginput_container_consent input[type=checkbox]:checked + label:before{
                font-size : ' . $styledata[224] . 'px;
               
            }

            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gfield_checkbox li label,
            .oxi-addons-gr-form-' . $oxiid . ' .ginput_container_consent .gfield_consent_label{

                font-size : ' . $styledata[212] . 'px;
               
            }
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gfield_checkbox li label:before,
            .oxi-addons-gr-form-' . $oxiid . ' .ginput_container_consent .gfield_consent_label:before{
              
                height: ' . $styledata[216] . 'px;
                width: ' . $styledata[216] . 'px;
               
                border-radius: ' . $styledata[242] . 'px;
                margin :  ' . OxiAddonsPaddingMarginSanitize($styledata, 262) . ';
            }
           

            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_footer{
              
                padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 638) . ';
            }
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_footer input.button,
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_footer input[type=submit], 
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_page_footer input.button, 
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_page_footer input[type=submit]{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 622) . ';
                font-size : ' . $styledata[578] . 'px;
                border-radius : ' . $styledata[618] . 'px;
            }
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield div.ginput_complex span.ginput_left select, 
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield div.ginput_complex span.ginput_right select, 
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield input[type=radio], 
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield select{
                font-size : ' . $styledata[90] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 114) . ';
            }
           
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper select option{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 114) . ';
                font-size : ' . $styledata[90] . 'px;
            }
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper div.validation_error{
                font-size : ' . $styledata[400] . 'px;
                border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 414) . ';
                border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 434) . ';
                padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 450) . ';
                margin : ' . OxiAddonsPaddingMarginSanitize($styledata, 466) . ';
            }
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .validation_message{
                font-size : ' . $styledata[482] . 'px;
                padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 496) . ';
            }
            .oxi-addons-gr-form-' . $oxiid . ' .gform_confirmation_wrapper{
                font-size : ' . $styledata[512] . 'px;
                ' . OxiAddonsFontSettings($styledata, 524) . ';	
                border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 530) . ';
                padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 546) . ';
            }
             .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper ul.gfield_checkbox{
                
                padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 246) . ';
            }
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-gr-form-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 43) . ';
            }
            .oxi-addons-gr-form-' . $oxiid . ' .oxi-addons-gravity-form{
                max-width : ' . $styledata[5] . 'px;
                border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';
            }
           
         
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .top_label .gfield_label, .gform_wrapper legend.gfield_label{
                font-size : ' . $styledata[59] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 75) . ';
            }
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .field_sublabel_below .ginput_complex.ginput_container label,
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .field_sublabel_below div[class*=gfield_time_].ginput_container label,
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .field_description_below .gfield_description{ 
               font-size : ' . $styledata[669] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 681) . ';
            }
            .oxi-addons-gr-form-' . $oxiid . ' .oxi-addons-gravity-form .gform_title{
               
                font-size : ' . $styledata[345] . 'px;

                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 357) . ';
            
            }
            .oxi-addons-gr-form-' . $oxiid . ' .oxi-addons-gravity-form .gform_wrapper span.gform_description{
               
                font-size : ' . $styledata[373] . 'px;
             
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 385) . ';
            
            }
          
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper textarea.medium{
                height : ' . $styledata[135] . 'px;
                
            }
            .oxi-addons-gr-form-' . $oxiid . '  .gform_wrapper textarea{
                border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 151) . ';;
               border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 173) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 189) . ';
            }
          
                       
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]){

                font-size : ' . $styledata[131] . 'px;
               
                border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 151) . ';;
                border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 173) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 189) . ';
            }
           
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gfield_checkbox li label,
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gfield_radio li label{
                

                font-size : ' . $styledata[279] . 'px;
            }
             
          
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gfield_radio li label:before{
              
                width: ' . $styledata[283] . 'px;
                height: ' . $styledata[283] . 'px;
                ' . OxiAddonsFontSettings($styledata, 303) . '
                border-radius : ' . $styledata[309] . 'px;
               
                margin : ' . OxiAddonsPaddingMarginSanitize($styledata, 329) . ';

            }
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper ul.gfield_radio{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 313) . ';
            }
            .oxi-addons-gr-form-' . $oxiid . ' .ginput_container_consent {
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 247) . ';
            }
            .oxi-addons-gr-form-' . $oxiid . ' .ginput_container_checkbox input[type=checkbox]:checked + label:before,
            .oxi-addons-gr-form-' . $oxiid . ' .ginput_container_consent input[type=checkbox]:checked + label:before{
                font-size : ' . $styledata[225] . 'px;
            }
             .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gfield_checkbox li label,
            .oxi-addons-gr-form-' . $oxiid . ' .ginput_container_consent .gfield_consent_label{

                font-size : ' . $styledata[213] . 'px;
               
            }
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gfield_checkbox li label:before,
            .oxi-addons-gr-form-' . $oxiid . ' .ginput_container_consent .gfield_consent_label:before{
              
                height: ' . $styledata[217] . 'px;
                width: ' . $styledata[217] . 'px;
               
                border-radius: ' . $styledata[243] . 'px;
                margin :  ' . OxiAddonsPaddingMarginSanitize($styledata, 263) . ';
            }


            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_footer{
              
                padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 639) . ';
            }
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_footer input.button,
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_footer input[type=submit], 
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_page_footer input.button, 
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .gform_page_footer input[type=submit]{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 623) . ';
                font-size : ' . $styledata[579] . 'px;
                border-radius : ' . $styledata[619] . 'px;
            }
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield div.ginput_complex span.ginput_left select, 
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield div.ginput_complex span.ginput_right select, 
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield input[type=radio], 
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield select{
                font-size : ' . $styledata[91] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 115) . ';
            }
           
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper select option{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 115) . ';
                font-size : ' . $styledata[91] . 'px;
            }
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper div.validation_error{
                font-size : ' . $styledata[401] . 'px;
                border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 415) . ';
                border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 435) . ';
                padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 451) . ';
                margin : ' . OxiAddonsPaddingMarginSanitize($styledata, 467) . ';
            }
            .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper .validation_message{
                font-size : ' . $styledata[483] . 'px;
                padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 497) . ';
            }
            .oxi-addons-gr-form-' . $oxiid . ' .gform_confirmation_wrapper{
                font-size : ' . $styledata[513] . 'px;
                ' . OxiAddonsFontSettings($styledata, 525) . ';	
                border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 531) . ';
                padding : ' . OxiAddonsPaddingMarginSanitize($styledata, 547) . ';
            }
             .oxi-addons-gr-form-' . $oxiid . ' .gform_wrapper ul.gfield_checkbox{
                
                padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 247) . ';
            }
        }
     ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
