<?php

namespace SHORTCODE_ADDONS_UPLOAD\Contact_form\Templates;

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
        
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);

        $jquery = '';
        $css = '';
        $successfuldata = '';
        if ($styledata[49] == 'style-1') {
            $coldata = 'oxi-addons-lg-col-1 oxi-addons-md-col-1 oxi-addons-xs-col-1';
        } else {
            $coldata = 'oxi-addons-lg-col-2 oxi-addons-md-col-2 oxi-addons-xs-col-1';
        }
        if (!empty($_REQUEST['_wpnonce'])) {
            $nonce = $_REQUEST['_wpnonce'];

            if (wp_verify_nonce($nonce, 'OxiAddons-Form-Submit')) {
                $name = oxi_addons_html_decode(sanitize_text_field($_POST['oxi-addons-form-input-data-name']));
                $email = sanitize_text_field($_POST['oxi-addons-form-input-data-email']);
                $massage = oxi_addons_html_decode(sanitize_text_field($_POST['oxi-addons-form-input-data-massage']));
                $fromemail = get_option('admin_email');
                if (!empty($stylefiles[23])) {
                    $receive = $stylefiles[23];
                } else {
                    $receive = get_option('admin_email');
                }
                $msg = "<table width=100% border=1 cellspacing=0 cellpadding=5><tr><td>&nbsp;"
                        . esc_html__('Name', 'OxiAddons') . "</td><td>&nbsp;$name</td></tr><tr><td>&nbsp;"
                        . esc_html__('Email', 'OxiAddons') . "</td><td>&nbsp;$email</td></tr><tr><td>&nbsp;"
                        . esc_html__('Message', 'OxiAddons') . "</td><td>&nbsp;$massage</td></tr></table>";


                if (!empty($name) && !empty($email) && !empty($massage)) {
                    $subject = $name . ' Sent You a Contact Massage';
                    $headers = "From: $name <$fromemail>" . "\r\n" .
                            "Content-type: text/html; charset=iso-8859-1\r\n" .
                            "Reply-To: $email" . "\r\n" .
                            "X-Mailer: PHP/" . phpversion();

                    if (wp_mail($receive, $subject, $msg, $headers)) {
                        $successfuldata = '<div class="oxi-addons-form-success">
                                        <div class="oxi-addons-form-success-data">
                                            ' . oxi_addons_html_decode($stylefiles[15]) . '
                                        </div>
                                    </div>';
                    } else {
                        $successfuldata = '';
                    }
                } else {
                    $successfuldata = '';
                }
            }
        }
        if (!empty($stylefiles[17])) {
            $contacttitle = '<div class="oxi-addons-form-title">
                                    ' . oxi_addons_html_decode($stylefiles[17]) . '
                            </div>';
        } else {
            $contacttitle = '';
        }
        if (!empty($stylefiles[19])) {
            $contactinfo = '<div class="oxi-addons-form-content">
                                     ' . oxi_addons_html_decode($stylefiles[19]) . '
                            </div>';
        } else {
            $contactinfo = '';
        }
        if ($styledata[201] == 'left') {
            $left = '.oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-title{
                    margin: 0 auto 0 0;
                }';
        } elseif ($styledata[201] == 'right') {
            $left = '.oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-title{
                    margin: 0 0 0 auto;
                }';
        } else {
            $left = '.oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-title{
                    margin: 0 auto;
                }';
        }
        if ($styledata[233] == 'left') {
            $Cleft = '.oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-content{
                    margin: 0 auto 0 0;
                }';
        } elseif ($styledata[233] == 'right') {
            $Cleft = '.oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-content{
                    margin: 0 0 0 auto;
                }';
        } else {
            $Cleft = '.oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-content{
                    margin: 0 auto;
                }';
        }
        echo '<div class="oxi-addons-container">
                <div class="oxi-addons-row">
                    <div class="oxi-addons-form-warp-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 67) . '>
                        <form  method="post" class="oxi-addons-form">
                                ' . $contacttitle . ' ' . $contactinfo . '' . $successfuldata . '
                                <div class="oxi-addons-form-input-' . $oxiid . ' oxi-addons-form-input-validate ' . $coldata . '" oxi-validate=" ' . $stylefiles[5] . '">
                                        <input class="oxi-addons-form-input-data-' . $oxiid . ' oxi-addons-form-input-data-name" type="text" name="oxi-addons-form-input-data-name">
                                        <span class="oxi-focus-input-' . $oxiid . '" oxi-data-placeholder="' . $stylefiles[3] . '"></span>
                                </div>
                                <div class="oxi-addons-form-input-' . $oxiid . ' oxi-addons-form-input-validate  ' . $coldata . '" oxi-validate = " ' . $stylefiles[9] . '">
                                        <input class="oxi-addons-form-input-data-' . $oxiid . ' oxi-addons-form-input-data-email" type="text" name="oxi-addons-form-input-data-email">
                                        <span class="oxi-focus-input-' . $oxiid . '" oxi-data-placeholder="' . $stylefiles[7] . '"></span>
                                </div>
                                <div class="oxi-addons-form-input-' . $oxiid . ' oxi-addons-form-input-validate oxi-addons-lg-col-1" oxi-validate = " ' . $stylefiles[13] . '">
                                        <textarea class="oxi-addons-form-input-data-' . $oxiid . ' oxi-addons-form-input-data-massage" name="oxi-addons-form-input-data-massage"></textarea>
                                        <span class="oxi-focus-input-' . $oxiid . '" oxi-data-placeholder="' . $stylefiles[11] . '"></span>
                                </div>
                                <div class="oxi-addons-form-btn oxi-addons-lg-col-1">
                                        <div class="oxi-addons-form-btn-warp">
                                                <button class="oxi-addons-btn">
                                                        ' . $stylefiles[21] . '
                                                </button>
                                        </div>
                                </div>
                               ' . wp_nonce_field("OxiAddons-Form-Submit") . '
                        </form>
                    </div>
                </div>
            </div>
            ';
        $css .= '   
                   .oxi-addons-form-warp-' . $oxiid . ' input[type="text"]:focus::-webkit-input-placeholder { color:transparent; }
                   .oxi-addons-form-warp-' . $oxiid . ' input[type="text"]:focus:-moz-placeholder { color:transparent; }
                   .oxi-addons-form-warp-' . $oxiid . ' input[type="text"]:focus::-moz-placeholder { color:transparent; }
                   .oxi-addons-form-warp-' . $oxiid . ' input[type="text"]:focus:-ms-input-placeholder { color:transparent; }
                   .oxi-addons-form-warp-' . $oxiid . ' textarea:focus::-webkit-input-placeholder { color:transparent; }
                   .oxi-addons-form-warp-' . $oxiid . '  textarea:focus:-moz-placeholder { color:transparent; }
                   .oxi-addons-form-warp-' . $oxiid . ' textarea:focus::-moz-placeholder { color:transparent; }
                   .oxi-addons-form-warp-' . $oxiid . ' textarea:focus:-ms-input-placeholder { color:transparent; }
                   .oxi-addons-form-warp-' . $oxiid . ' input[type="text"]::-webkit-input-placeholder { color: #999999; }
                   .oxi-addons-form-warp-' . $oxiid . ' input[type="text"]:-moz-placeholder { color: #999999; }
                   .oxi-addons-form-warp-' . $oxiid . ' input[type="text"]::-moz-placeholder { color: #999999; }
                   .oxi-addons-form-warp-' . $oxiid . ' input[type="text"]:-ms-input-placeholder { color: #999999; }
                   .oxi-addons-form-warp-' . $oxiid . ' textarea::-webkit-input-placeholder { color: #999999; }
                   .oxi-addons-form-warp-' . $oxiid . ' textarea:-moz-placeholder { color: #999999; }
                   .oxi-addons-form-warp-' . $oxiid . ' textarea::-moz-placeholder { color: #999999; }
                   .oxi-addons-form-warp-' . $oxiid . ' textarea:-ms-input-placeholder { color: #999999; }
                   .oxi-addons-form-warp-' . $oxiid . ' textarea,
                   .oxi-addons-form-warp-' . $oxiid . ' textarea:focus,
                   .oxi-addons-form-warp-' . $oxiid . ' textarea:hover{
                        min-height: 250px;
                    }
                   .oxi-addons-form-warp-' . $oxiid . '{
                        width:100%;
                        position: relative;
                        float:left;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 51) . ';  
                    }
                    .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-title{
                        display: block;
                        Width:100%;
                        max-width: ' . $styledata[191] . 'px;   
                        margin:0 auto;                        
                        font-size: ' . $styledata[187] . 'px;  
                        color:  ' . $styledata[195] . ';
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 203) . ';  
                        ' . OxiAddonsFontSettings($styledata, 197) . '                           
                    }
                    ' . $left . '
                    .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-content{
                        display: block;
                        Width:100%;
                        max-width: ' . $styledata[223] . 'px;   
                        margin:0 auto;
                        font-size: ' . $styledata[219] . 'px;  
                        color:  ' . $styledata[227] . ';
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 235) . ';  
                        ' . OxiAddonsFontSettings($styledata, 229) . '
                    }
                    ' . $Cleft . '
                    .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-input-' . $oxiid . '{
                        margin:0 0 0 0;
                        position: relative;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
                    }
                    .oxi-addons-form-warp-' . $oxiid . ' input[type="text"],
                    .oxi-addons-form-warp-' . $oxiid . ' input[type="text"]:focus,
                    .oxi-addons-form-warp-' . $oxiid . ' input[type="text"]:hover,
                    .oxi-addons-form-warp-' . $oxiid . ' textarea,
                    .oxi-addons-form-warp-' . $oxiid . ' textarea:focus,
                    .oxi-addons-form-warp-' . $oxiid . ' textarea:hover{
                        outline: none;
                        border: none;
                        box-shadow:none;
                        padding: 0;
                        margin: 0;
                        background: transparent;
                        position: relative;
                        display: block;
                        width: 100%;
                        height:auto;
                        font-family: Poppins-Regular;
                        font-size: ' . $styledata[83] . 'px;
                        color: ' . $styledata[5] . ';
                        line-height: 1.2;
                        ' . OxiAddonsFontSettings($styledata, 87) . '
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
                        border-bottom: ' . $styledata[7] . 'px ' . $styledata[9] . ';
                        border-color:' . $styledata[11] . ';
                    }
                    .oxi-addons-form-warp-' . $oxiid . ' .oxi-focus-input-' . $oxiid . '{
                        position: absolute;
                        display: block;
                        width: calc(100% - ' . ($styledata[41] + $styledata[45]) . 'px);
                        height: calc(100% - ' . ($styledata[33] + $styledata[37]) . 'px);
                        top: 0;
                        left: 0;
                        pointer-events: none;
                        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
                    }
                    .oxi-addons-form-warp-' . $oxiid . ' .oxi-focus-input-' . $oxiid . '::after {
                        content: attr(oxi-data-placeholder);
                        display: block;
                        width: 100%;
                        position: absolute;
                        top: 50%;
                        transform:translateY(-50%);
                        left: 0;
                        font-family: Poppins-Regular;
                        font-size: ' . $styledata[83] . 'px;
                        color: ' . $styledata[3] . ';
                        line-height: 1.4;
                        ' . OxiAddonsFontSettings($styledata, 87) . '
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
                        -webkit-transition: all 0.4s;
                        -o-transition: all 0.4s;
                        -moz-transition: all 0.4s;
                        transition: all 0.4s;
                      }
                       .oxi-addons-form-input-data-' . $oxiid . ':focus +  .oxi-focus-input-' . $oxiid . '::after,
                       .oxi-is-val.oxi-addons-form-input-data-' . $oxiid . ' + .oxi-focus-input-' . $oxiid . '::after {
                        top: 0%;
                        transform:translateY(-70%);
                      }
                    .oxi-addons-form-warp-' . $oxiid . ' .oxi-focus-input-' . $oxiid . '::before {
                        content: "";
                        display: block;
                        position: absolute;
                        bottom: 0px;
                        left: 0;
                        width: 0;
                        height: ' . $styledata[7] . 'px;
                        -webkit-transition: all 0.4s;
                        -o-transition: all 0.4s;
                        -moz-transition: all 0.4s;
                        transition: all 0.4s;
                        background: ' . $styledata[13] . ';
                            
                      }
                    .oxi-addons-form-input-data-' . $oxiid . ':focus + .oxi-focus-input-' . $oxiid . '::before,
                    .oxi-is-val.oxi-addons-form-input-data-' . $oxiid . ' + .oxi-focus-input-' . $oxiid . '::before{
                         width: 100%;
                     }
                     .oxi-alert-validate{
                         position: relative;
                      }
                     .oxi-addons-form-warp-' . $oxiid . ' .oxi-alert-validate::before {
                      content: attr(oxi-validate);
                      position: absolute;
                      max-width: 70%;
                      background-color: white;
                      border: 1px solid ' . $styledata[15] . ';
                      border-radius: 2px;
                      padding: 4px 25px 4px 10px;
                      top: 50%;
                      -webkit-transform: translateY(-50%);
                      -moz-transform: translateY(-50%);
                      -ms-transform: translateY(-50%);
                      -o-transform: translateY(-50%);
                      transform: translateY(-50%);
                      right: 0px;
                      pointer-events: none;
                      ' . OxiAddonsFontSettings($styledata, 87) . '
                      color: ' . $styledata[15] . ';
                      font-size: 13px;
                      line-height: 1.4;
                      visibility: hidden;
                      opacity: 0;
                      -webkit-transition: opacity 0.4s;
                      -o-transition: opacity 0.4s;
                      -moz-transition: opacity 0.4s;
                      transition: opacity 0.4s;
                    }
                    .oxi-addons-form-warp-' . $oxiid . ' .oxi-alert-validate::after {
                        content: "\f12a";
                        font-family: FontAwesome;
                        display: block;
                        position: absolute;
                        color: ' . $styledata[15] . ';
                        font-size: 16px;
                        top: 50%;
                        -webkit-transform: translateY(-50%);
                        -moz-transform: translateY(-50%);
                        -ms-transform: translateY(-50%);
                        -o-transform: translateY(-50%);
                        transform: translateY(-50%);
                        right: 8px;
                      }
                    .oxi-addons-form-warp-' . $oxiid . ' .oxi-alert-validate:hover:before {
                      visibility: visible;
                      opacity: 1;
                    }
                    .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-btn, .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-btn-warp{
                        width:100%;
                        float: left;
                        text-align:' . explode(':', $styledata[267])[0] . ';
                    }
                    .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-btn{
                        display: inline-block;
                        font-size:' . $styledata[251] . 'px;
                        ' . OxiAddonsFontSettings($styledata, 263) . '    
                        padding:' . OxiAddonsPaddingMarginSanitize($styledata, 279) . ';
                        margin:' . OxiAddonsPaddingMarginSanitize($styledata, 295) . ';
                        color:' . $styledata[255] . ';
                        background:' . $styledata[259] . ';
                        border-radius: ' . $styledata[275] . 'px;
                        border-width: ' . $styledata[269] . 'px;
                        border-style:' . $styledata[271] . '; 
                        border-color:' . $styledata[273] . ';
                        text-align:center;
                        cursor:pointer;
                    }
                    .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-btn:hover,
                    .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-btn:focus{
                        color:' . $styledata[257] . ';
                        background:' . $styledata[261] . ';
                        border-color:' . $styledata[311] . ';
                    }
                    .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-success{
                        width:100%;
                        float: left;
                        padding:' . OxiAddonsPaddingMarginSanitize($styledata, 155) . ';
                    }
                    .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-success-data{
                        width:100%;
                        float: left;
                        font-size:' . $styledata[115] . 'px;
                        ' . OxiAddonsFontSettings($styledata, 123) . '    
                        color:' . $styledata[119] . ';
                        background:' . $styledata[121] . ';
                        border-radius: ' . $styledata[135] . 'px;
                        border-width: ' . $styledata[129] . ';
                        border-style:' . $styledata[131] . '; 
                        border-color:' . $styledata[133] . ';
                        padding:' . OxiAddonsPaddingMarginSanitize($styledata, 139) . ';
                    }
                    @media only screen and (min-width : 669px) and (max-width : 993px){
                        .oxi-addons-form-warp-' . $oxiid . '{
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 52) . ';  
                        }
                        .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-title{
                            max-width: ' . $styledata[192] . 'px;   
                            font-size: ' . $styledata[188] . 'px;  
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 204) . ';  
                        }
                        .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-content{
                            max-width: ' . $styledata[224] . 'px;   
                            font-size: ' . $styledata[220] . 'px;  
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 236) . '; 
                        }
                        .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-input-' . $oxiid . '{
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 34) . ';
                        }
                        .oxi-addons-form-warp-' . $oxiid . ' input[type="text"],
                        .oxi-addons-form-warp-' . $oxiid . ' input[type="text"]:focus,
                        .oxi-addons-form-warp-' . $oxiid . ' input[type="text"]:hover,
                        .oxi-addons-form-warp-' . $oxiid . ' textarea,
                        .oxi-addons-form-warp-' . $oxiid . ' textarea:focus,
                        .oxi-addons-form-warp-' . $oxiid . ' textarea:hover{
                            font-size: ' . $styledata[84] . 'px;
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 18) . ';
                        }
                        .oxi-addons-form-warp-' . $oxiid . ' .oxi-focus-input-' . $oxiid . '{
                            width: calc(100% - ' . ($styledata[42] + $styledata[46]) . 'px);
                            height: calc(100% - ' . ($styledata[34] + $styledata[38]) . 'px);
                            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 34) . ';
                        }
                        .oxi-addons-form-warp-' . $oxiid . ' .oxi-focus-input-' . $oxiid . '::after {
                            font-size: ' . $styledata[84] . 'px;
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 18) . ';
                        }
                        .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-btn{
                           font-size:' . $styledata[252] . 'px;
                            padding:' . OxiAddonsPaddingMarginSanitize($styledata, 280) . ';
                            margin:' . OxiAddonsPaddingMarginSanitize($styledata, 296) . ';
                            border-radius: ' . $styledata[276] . 'px;
                        }
                        .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-success{
                            padding:' . OxiAddonsPaddingMarginSanitize($styledata, 156) . ';
                        }
                        .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-success-data{
                            font-size:' . $styledata[116] . 'px;
                            border-radius: ' . $styledata[136] . 'px;
                            padding:' . OxiAddonsPaddingMarginSanitize($styledata, 140) . ';
                        }
                    }
                    @media only screen and (max-width : 668px){
                        .oxi-addons-form-warp-' . $oxiid . '{
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 53) . ';  
                        }
                        .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-title{
                            max-width: ' . $styledata[193] . 'px;   
                            font-size: ' . $styledata[189] . 'px;  
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 205) . ';  
                        }
                        .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-content{
                            max-width: ' . $styledata[225] . 'px;   
                            font-size: ' . $styledata[221] . 'px;  
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 237) . '; 
                        }
                        .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-input-' . $oxiid . '{
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . ';
                        }
                        .oxi-addons-form-warp-' . $oxiid . ' input[type="text"],
                        .oxi-addons-form-warp-' . $oxiid . ' input[type="text"]:focus,
                        .oxi-addons-form-warp-' . $oxiid . ' input[type="text"]:hover,
                        .oxi-addons-form-warp-' . $oxiid . ' textarea,
                        .oxi-addons-form-warp-' . $oxiid . ' textarea:focus,
                        .oxi-addons-form-warp-' . $oxiid . ' textarea:hover{
                            font-size: ' . $styledata[85] . 'px;
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';
                        }
                        .oxi-addons-form-warp-' . $oxiid . ' .oxi-focus-input-' . $oxiid . '{
                            width: calc(100% - ' . ($styledata[43] + $styledata[47]) . 'px);
                            height: calc(100% - ' . ($styledata[35] + $styledata[39]) . 'px);
                            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . ';
                        }
                        .oxi-addons-form-warp-' . $oxiid . ' .oxi-focus-input-' . $oxiid . '::after {
                            font-size: ' . $styledata[85] . 'px;
                            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';
                        }
                        .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-btn{
                           font-size:' . $styledata[253] . 'px;
                            padding:' . OxiAddonsPaddingMarginSanitize($styledata, 281) . ';
                            margin:' . OxiAddonsPaddingMarginSanitize($styledata, 297) . ';
                            border-radius: ' . $styledata[277] . 'px;
                        }
                        .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-success{
                            padding:' . OxiAddonsPaddingMarginSanitize($styledata, 157) . ';
                        }
                        .oxi-addons-form-warp-' . $oxiid . ' .oxi-addons-form-success-data{
                            font-size:' . $styledata[117] . 'px;
                            border-radius: ' . $styledata[137] . 'px;
                            padding:' . OxiAddonsPaddingMarginSanitize($styledata, 141) . ';
                        }
                    }
                    ';

        $jquery .= ' jQuery(".oxi-addons-form-input-data-' . $oxiid . '").each(function(){
                        jQuery(this).on("blur", function(){
                            if(jQuery(this).val().trim() != "") {
                                jQuery(this).addClass("oxi-is-val");
                            }
                            else {
                                jQuery(this).removeClass("oxi-is-val");
                            }
                        })    
                    })
                    var oxiname = jQuery(".oxi-addons-form-input-data-name");
                    var oxiemail = jQuery(".oxi-addons-form-input-data-email");
                    var oximessage = jQuery(".oxi-addons-form-input-data-massage");
                    jQuery(".oxi-addons-form").on("submit",function(){
                        var check=true;
                        if(jQuery(oxiname).val().trim() == ""){
                            var thisAlert = jQuery(oxiname).parent();
                            jQuery(thisAlert).addClass("oxi-alert-validate");
                            check=false;
                        }
                        if(jQuery(oxiemail).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                            var thisAlert = jQuery(oxiemail).parent();
                            jQuery(thisAlert).addClass("oxi-alert-validate");
                            check=false;
                        }
                        if(jQuery(oximessage).val().trim() == ""){
                            var thisAlert = jQuery(oximessage).parent();
                            jQuery(thisAlert).addClass("oxi-alert-validate");
                            check=false;
                        }
                        return check;
                    });
                    jQuery(".oxi-addons-form .oxi-addons-form-input-data-' . $oxiid . '").each(function(){
                        jQuery(this).focus(function(){
                          var thisAlert = jQuery(this).parent();
                         jQuery(thisAlert).removeClass("oxi-alert-validate");
                       });
                    });';
        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }

}
