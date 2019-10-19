<?php

namespace SHORTCODE_ADDONS_UPLOAD\Contact_form_7\Templates;

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
        
        $styledata = $this->style;
        
        echo '<div class="oxi-addons-form-warp-contact-form-7">
                        <div class="oxi-addons-form-full-body"  ' . $this->animation_render('sa_contact_form__animation', $styledata) . '>
                            <div class="oxi-addons-contact-form-7">' . $this->text_render($styledata['sa_contact_form_shortcode']) . '</div>
                        </div>
                    </div>';
    }
     public function inline_public_jquery() {
        $jquery = '';
        $listdata = $this->style;
        $oxiid = $listdata['shortcode-addons-elements-id'];
        
        $oxi_addons_labels = '';

        
        $jquery .= 'jQuery(document).ready(function(){
                jQuery(".oxi-addons-form-warp-contact-form-7 input[type=submit]").parent().addClass("submit-button-active");
                
           })';
       
             
    return $jquery;
    }

    public function old_render() {

        $styledata = $this->dbdata;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $jquery = '';
        $css = '';
        echo '<div class="oxi-addons-container">
                <div class="oxi-addons-row">
                    <div class="oxi-addons-form-warp-' . $oxiid . '">
                        <div class="oxi-addons-form-full-body"  ' . OxiAddonsAnimation($styledata, 63) . '>
                            <div class="oxi-addons-contact-form-7">' . OxiAddonsTextConvert($stylefiles[2]) . '</div>
                        </div>
                    </div>
                </div>
            </div>
            ';
        $css .= '
        p{
            float: left;
            width: 100%;
            text-align: left;
        }
        .oxi-addons-form-warp-' . $oxiid . '{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-full-body{
            width: 100%;
            overflow:auto;
            margin: 0 auto;
            background: ' . $styledata[3] . ';
            max-width: ' . $styledata[409] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 57) . '
        }
        .oxi-addons-form-warp-' . $oxiid . ' label{
           font-size: ' . $styledata[237] . 'px;
           color: ' . $styledata[241] . ';
           ' . OxiAddonsFontSettings($styledata, 243) . '
           padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 249) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' select,
        .oxi-addons-form-warp-' . $oxiid . ' input[type=date],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=datetime-local],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=datetime],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=email],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=month],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=number],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=password],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=search],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=tel],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=text],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=time],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=url]{
            background:' . $styledata[67] . ';
            height: ' . $styledata[69] . 'px;
            width: ' . $styledata[73] . 'px;
            border-width:' . $styledata[77] . 'px;
            border-style:' . $styledata[78] . ';
            border-color:' . $styledata[81] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 115) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 131) . '
            transition: 0.35s;
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type=file]{
            font-size: ' . $styledata[237] . 'px;
            outline: 0;
            width: 100%;
                
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type=file]:focus{
            outline: 0;
                
        }
        .oxi-addons-form-warp-' . $oxiid . ' select:focus,
        .oxi-addons-form-warp-' . $oxiid . ' input[type=date]:focus,
        .oxi-addons-form-warp-' . $oxiid . ' input[type=email]:focus,
        .oxi-addons-form-warp-' . $oxiid . ' input[type=month]:focus,
        .oxi-addons-form-warp-' . $oxiid . ' input[type=number]:focus,
        .oxi-addons-form-warp-' . $oxiid . ' input[type=password]:focus,
        .oxi-addons-form-warp-' . $oxiid . ' input[type=search]:focus,
        .oxi-addons-form-warp-' . $oxiid . ' input[type=tel]:focus,
        .oxi-addons-form-warp-' . $oxiid . ' input[type=text]:focus,
        .oxi-addons-form-warp-' . $oxiid . ' input[type=time]:focus,
        .oxi-addons-form-warp-' . $oxiid . ' input[type=url]:focus,
        .oxi-addons-form-warp-' . $oxiid . ' input[type=week]:focus{
           background:' . $styledata[137] . ';
           border-color:' . $styledata[143] . ';
           ' . OxiAddonsBoxShadowSanitize($styledata, 145) . '
            outline: 0;
            
        }
        .oxi-addons-form-warp-' . $oxiid . ' textarea{
            background:' . $styledata[67] . ';
            height: ' . $styledata[213] . 'px;
            width: ' . $styledata[217] . 'px;
            border-width:' . $styledata[77] . 'px;
            border-style:' . $styledata[78] . ';
            border-color:' . $styledata[81] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 221) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 115) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 131) . '
        }
        .oxi-addons-form-warp-' . $oxiid . ' textarea:focus{
            background:' . $styledata[137] . ';
            border-color:' . $styledata[143] . ';
           ' . OxiAddonsBoxShadowSanitize($styledata, 145) . '
            outline: 0;
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type=submit]{
            font-size: ' . $styledata[151] . 'px;
            color:' . $styledata[155] . ';
            background:' . $styledata[159] . ';
            border-width:' . $styledata[169] . 'px;
            border-style:' . $styledata[170] . ';
            border-color:' . $styledata[173] . ';
            border-radius: ' . $styledata[177] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 181) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 197) . ';
            cursor: pointer;
        }
        .oxi-addons-form-warp-' . $oxiid . ' .submit-button-active{
            ' . OxiAddonsFontSettings($styledata, 163) . '
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type=submit]:hover{
           color:' . $styledata[157] . ';
           background:' . $styledata[161] . ';
           border-color:' . $styledata[175] . ';
           outline: 0; 
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type=submit]:focus{
           outline: 0; 
        }
        
        .oxi-addons-form-warp-' . $oxiid . ' label {
          cursor: pointer;
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="checkbox"]:focus{
           outline: 0 !important;
           box-shadow:0;
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="checkbox"]{
            width:0px;
            height:0px;
            border:0 !important;
            position: relative;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 313) . ' !important;
            outline:0 !important;
            vertical-align: bottom;
            cursor: pointer;
             text-align: left;
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="checkbox"]:before {
            position: absolute;
            border-width:' . $styledata[275] . 'px;
            border-style:' . $styledata[276] . ';
            border-color:' . $styledata[279] . ';
            background:' . $styledata[265] . ';
            content: "\00a0";
            display: inline-block;
            height: ' . $styledata[267] . 'px;
            width: ' . $styledata[271] . 'px;
            top: 50%;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 297) . ';
            vertical-align: top;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 281) . ';
            transform: translateY(-80%);
          
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="checkbox"]:checked:before {
          background:' . $styledata[329] . ';
          color: ' . $styledata[331] . ';
          content: "\2713";
          font-size:' . $styledata[333] . 'px;
          text-align: center;
          margin: 0 !important;
        }
        .oxi-addons-form-warp-' . $oxiid . ' .wpcf7-list-item{
          display: flex;
          align-items: center;
        }
        .oxi-addons-form-warp-' . $oxiid . ' .wpcf7-list-item-label{
           font-size: ' . $styledata[237] . 'px;
           color: ' . $styledata[241] . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' .wpcf7-radio{
            display: flex;
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="radio"]{
            width:0px;
            height:0px;
            border:0 !important;
            position: relative;
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 385) . ' !important;
            outline:0 !important;
            vertical-align: bottom;
            cursor: pointer;
            text-align: left;
        }
        .oxi-addons-form-warp-' . $oxiid . ' .wpcf7-list-item {
            margin-right: 10px;
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="radio"]:before {
            position: absolute;
            border-width:' . $styledata[347] . 'px;
            border-style:' . $styledata[348] . ';
            border-color:' . $styledata[351] . ';
            background:' . $styledata[337] . ';
            content: "\00a0";
            display: inline-block;
            height: ' . $styledata[339] . 'px;
            width: ' . $styledata[343] . 'px;
            top: 50%;
            padding: 0;
            vertical-align: top;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 353) . ';
            transform: translateY(-80%);
          
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="radio"]:checked:before {
            background:' . $styledata[401] . ';
            color: ' . $styledata[403] . ';
            content: "\2022";
            font-size: ' . $styledata[405] . 'px;
            display: flex;
            margin: 0 !important;
            align-items: center;
            justify-content: center;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 369) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' .wpcf7-validation-errors{
            overflow: hidden;
            width: 95%;
        }
        .oxi-addons-form-warp-' . $oxiid . ' .wpcf7-not-valid-tip{
           width: 100%;
           float: left;
           font-size: ' . $styledata[237] . 'px;
        }
        



        @media only screen and (min-width : 669px) and (max-width : 993px){ 
           .oxi-addons-form-warp-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 42) . ';
        }
        .oxi-addons-form-full-body{
            background: ' . $styledata[4] . ';
            max-width: ' . $styledata[410] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 10) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 26) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' label{
           font-size: ' . $styledata[238] . 'px;
           padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 250) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' select,
        .oxi-addons-form-warp-' . $oxiid . ' input[type=date],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=datetime-local],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=datetime],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=email],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=month],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=number],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=password],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=search],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=tel],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=text],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=time],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=url]{
            height: ' . $styledata[70] . 'px;
            width: ' . $styledata[74] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 84) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 100) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 116) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type=file]{
            font-size: ' . $styledata[138] . 'px;
                
        }

        .oxi-addons-form-warp-' . $oxiid . ' textarea{
            height: ' . $styledata[214] . 'px;
            width: ' . $styledata[218] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 222) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 100) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 116) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type=submit]{
            font-size: ' . $styledata[152] . 'px;
            border-radius: ' . $styledata[178] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 182) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 198) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="checkbox"]{
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 314) . ' !important;
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="checkbox"]:before {
            height: ' . $styledata[268] . 'px;
            width: ' . $styledata[272] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 298) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 282) . ';
          
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="checkbox"]:checked:before {
          font-size:' . $styledata[334] . 'px;
        }
        .oxi-addons-form-warp-' . $oxiid . ' .wpcf7-list-item-label{
           font-size: ' . $styledata[238] . 'px;
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="radio"]{
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 314) . ' !important;
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="radio"]:before {
            height: ' . $styledata[340] . 'px;
            width: ' . $styledata[344] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 354) . ';
          
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="radio"]:checked:before {
            font-size: ' . $styledata[406] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 370) . ';
        }
        }
         @media only screen and (max-width : 668px){
           .oxi-addons-form-warp-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 43) . ';
        }
        .oxi-addons-form-full-body{
            background: ' . $styledata[5] . ';
            max-width: ' . $styledata[411] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' label{
           font-size: ' . $styledata[239] . 'px;
           padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 251) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' select,
        .oxi-addons-form-warp-' . $oxiid . ' input[type=date],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=datetime-local],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=datetime],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=email],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=month],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=number],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=password],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=search],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=tel],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=text],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=time],
        .oxi-addons-form-warp-' . $oxiid . ' input[type=url]{
            height: ' . $styledata[71] . 'px;
            width: ' . $styledata[75] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 117) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type=file]{
            font-size: ' . $styledata[139] . 'px;
                
        }

        .oxi-addons-form-warp-' . $oxiid . ' textarea{
            height: ' . $styledata[215] . 'px;
            width: ' . $styledata[219] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 223) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 117) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type=submit]{
            font-size: ' . $styledata[153] . 'px;
            border-radius: ' . $styledata[179] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 183) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 199) . ';
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="checkbox"]{
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 315) . ' !important;
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="checkbox"]:before {
            height: ' . $styledata[269] . 'px;
            width: ' . $styledata[273] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 299) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 283) . ';
          
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="checkbox"]:checked:before {
          font-size:' . $styledata[335] . 'px;
        }
        .oxi-addons-form-warp-' . $oxiid . ' .wpcf7-list-item-label{
           font-size: ' . $styledata[239] . 'px;
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="radio"]{
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 315) . ' !important;
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="radio"]:before {
            height: ' . $styledata[341] . 'px;
            width: ' . $styledata[345] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 355) . ';
          
        }
        .oxi-addons-form-warp-' . $oxiid . ' input[type="radio"]:checked:before {
            font-size: ' . $styledata[407] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 371) . ';
        }
         }

            ';

        $jquery .= ' 
            jQuery(document).ready(function(){
                jQuery(".oxi-addons-form-warp-' . $oxiid . ' input[type=submit]").parent().addClass("submit-button-active");
                
           });';
        wp_add_inline_style('shortcode-addons-style', $css);
         wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }

}
