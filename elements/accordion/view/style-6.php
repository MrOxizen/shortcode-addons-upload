<?php

if (!defined('ABSPATH'))
    exit;

function oxi_accordion_style_6_shortcode($styledata = FALSE, $listdata = FALSE, $user = 'user') {
    $oxiid = $styledata['id'];
    $stylefiles = explode('||#||', $styledata['css']);
    $styledata = explode('|', $stylefiles[0]);

    echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">
            <div class="oxi-addons-AC-SX-row">';
    foreach ($listdata as $value) {
        $data = explode('||#||', $value['files']);
        $aticon = $atdicon = $atheding = $atdetails = '';
        if ($stylefiles[2] != '') {
            $aticon = '<div class="oxi-addonsAC-SX-active">' . oxi_addons_font_awesome($stylefiles[2]) . '</div>';
        }
        if ($stylefiles[4] != '') {
            $atdicon = '<div class="oxi-addonsAC-SX-deactive">' . oxi_addons_font_awesome($stylefiles[4]) . '</div>';
        }
        if ($data[2] != '') {
            $atheding = '<div class="oxi-addonsAC-SX-heading">' . OxiAddonsTextConvert($data[2]) . '</div>';
        }
        if ($data[4] != '') {
            $atdetails = '<div class="oxi-addonsAC-SX-C-' . $oxiid . '" id="oxi-addonsAC-SX-H-' . $oxiid . '-id-' . $value['id'] . '">
                            <div class="oxi-addonsAC-SX-C-' . $oxiid . '-b">
                                ' . OxiAddonsTextConvert($data[4]) . '
                            </div>
                        </div>';
        }
        echo '<div class="oxi-addons-AC-SX-' . $oxiid . ' ' . OxiAddonsAdminDefine($user) . '" ' . OxiAddonsAnimation($styledata, 69) . '>
                        <div class="oxi-addonsAC-SX-H-' . $oxiid . '" ref="#oxi-addonsAC-SX-H-' . $oxiid . '-id-' . $value['id'] . '">
                            '.$aticon.'
                            '.$atdicon.'
                            '.$atheding.'
                            
                        </div>
                        '.$atdetails.'';
        if ($user == 'admin') {
            echo '  <div class="oxi-addons-admin-absulote">
                            <div class="oxi-addons-admin-absulate-edit">
                                <form method="post"> ' . wp_nonce_field("OxiAddonsListFileEditaccordiondata") . '
                                    <input type="hidden" name="oxi-item-id" value="' . $value['id'] . '">
                                    <button class="btn btn-primary" type="submit" value="edit" name="OxiAddonsListFileEdit">Edit</button>
                                </form>
                            </div>
                            <div class="oxi-addons-admin-absulate-delete">
                                <form method="post">  ' . wp_nonce_field("OxiAddonsListFileDeleteaccordiondata") . '
                                    <input type="hidden" name="oxi-item-id" value="' . $value['id'] . '">
                                    <button class="btn btn-danger " type="submit" value="delete" name="OxiAddonsListFileDelete">Delete</button>
                                </form>
                            </div>
                        </div>';
        }
        echo '</div>';
    }
        echo '</div>
        </div>
    </div>';

    $iconposition = $styledata[279] == 'right' ? "order: -1" : "order: 1";
    $css = '.oxi-addons-AC-SX-row{
            width: 100%;
            float: left;
            border-bottom: ' . $styledata[9] . 'px ' . $styledata[10] . '  ' . $styledata[13] . ';
            transition:none;
        }
        .oxi-addons-AC-SX-' . $oxiid . '{
            width: 100%;
            float:left;
            border-top: ' . $styledata[9] . 'px ' . $styledata[10] . '  ' . $styledata[13] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 47) . ';
            transition:none;
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '{
            width: 100%;
            float: left;
            cursor: pointer;
            display: flex;
            align-items: center;
            ' . OxiAddonsBGImage($styledata, 5) . '
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 63) . ';
            transition:none;
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . ' .oxi-addonsAC-SX-heading{
            width: calc(100% - 40px);
            float: left;
            ' . $iconposition . ';
            font-size: ' . $styledata[73] . 'px;
            color: ' . $styledata[77] . ';
            ' . OxiAddonsFontSettings($styledata, 79) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';
            transition:none;
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '.active .oxi-addonsAC-SX-heading, .oxi-addonsAC-SX-H-' . $oxiid . ':hover  .oxi-addonsAC-SX-heading{
            color: ' . $styledata[101] . ';
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '.active .oxi-addonsAC-SX-active{
            display: flex;
            float: left;
            align-items: center;
            justify-content: center;
            background: ' . $styledata[157] . ';
            font-size: ' . $styledata[161] . 'px;
            width: 100%;
            max-width: ' . $styledata[165] . 'px;
            height: ' . $styledata[165] . 'px;
            color: ' . $styledata[169] . ';
            border: ' . $styledata[173] . 'px ' . $styledata[174] . '  ' . $styledata[177] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 179) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 195) . ';
            transition:none;
            
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . ' .oxi-addonsAC-SX-deactive{
            display: flex;
            float: left;
            align-items: center;
            justify-content: center;
            background: ' . $styledata[103] . ';
            font-size: ' . $styledata[107] . 'px;
            width:100%;
            max-width: ' . $styledata[111] . 'px;
            height: ' . $styledata[111] . 'px;
            color: ' . $styledata[115] . ';
            border: ' . $styledata[119] . 'px ' . $styledata[120] . '  ' . $styledata[123] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 125) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 141) . ';
            transition:none;
            
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . ':hover .oxi-addonsAC-SX-deactive{
            color: ' . $styledata[117] . ';
            border-color: ' . $styledata[159] . ';
            background: ' . $styledata[105] . '; 
            transition:none;
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . ' .oxi-addonsAC-SX-active{
            display: none;
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '.active .oxi-addonsAC-SX-deactive{
            display: none;
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '{
            display: none;
            width: 100%;
            float: left;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 263) . ';
            transition:none;
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '-b{
            width: 100%;
            float: left;
            background: ' . $styledata[211] . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 225) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 231) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 247) . ';
            transition:none;
            
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '-b,
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '-b p{
            font-size: ' . $styledata[213] . 'px;
            color: ' . $styledata[217] . ';
            ' . OxiAddonsFontSettings($styledata, 219) . '
            transition:none;
            
        }
    @media only screen and (min-width : 669px) and (max-width : 993px){
        .oxi-addons-AC-SX-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 48) . ';
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . ' .oxi-addonsAC-SX-heading{
            font-size: ' . $styledata[74] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 86) . ';
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '.active .oxi-addonsAC-SX-active{
            font-size: ' . $styledata[162] . 'px;
            width: 100%;
            max-width: ' . $styledata[166] . 'px;
            height: ' . $styledata[166] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 180) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 196) . ';
            
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . ' .oxi-addonsAC-SX-deactive{
            font-size: ' . $styledata[108] . 'px;
            width: 100%;
            max-width: ' . $styledata[112] . 'px;
            height: ' . $styledata[112] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 126) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 142) . ';
            
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '{
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 264) . ';
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '-b{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 232) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 248) . ';
            
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '-b,
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '-b p{
            font-size: ' . $styledata[214] . 'px;
            
        }
           
    }
    @media only screen and (max-width : 668px){
        .oxi-addons-AC-SX-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . ' .oxi-addonsAC-SX-heading{
            font-size: ' . $styledata[75] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '.active .oxi-addonsAC-SX-active{
            font-size: ' . $styledata[163] . 'px;
            width: 100%;
            max-width: ' . $styledata[167] . 'px;
            height: ' . $styledata[167] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 181) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 197) . ';
            
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . ' .oxi-addonsAC-SX-deactive{
            font-size: ' . $styledata[109] . 'px;
            width: 100%;
            max-width: ' . $styledata[113] . 'px;
            height: ' . $styledata[113] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 143) . ';
            
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '{
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 165) . ';
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '-b{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 233) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 249) . ';
            
        }
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '-b,
        .oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-C-' . $oxiid . '-b p{
            font-size: ' . $styledata[215] . 'px;
            
        }
    }';

    $jquery = ' jQuery(document).ready(function () {
                    jQuery(".oxi-addonsAC-SX-H-' . $oxiid . '' . $styledata[3] . '").addClass("active");
                    jQuery(".oxi-addonsAC-SX-H-' . $oxiid . '' . $styledata[3] . '").next().slideDown();
                   ';
    if ($styledata[281] == 'randomly') {
        $jquery .= 'jQuery(".oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '").click(function () {
                        if(jQuery(this).hasClass("active")){
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideUp();
                            jQuery(this).removeClass("active");
                        }else{
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(this).addClass("active");
                        }
                    });';
    } else {
        $jquery .= 'jQuery(".oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '").click(function () {
                        if(jQuery(this).hasClass("active")){
                            return false;
                        }else{
                            jQuery(".oxi-addonsAC-SX-C-' . $oxiid . '").slideUp();
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(".oxi-addons-AC-SX-' . $oxiid . ' .oxi-addonsAC-SX-H-' . $oxiid . '").removeClass("active");
                            jQuery(this).addClass("active");
                            
                        }
                    });';
    }

    $jquery .= '});';


  echo OxiAddonsInlineCSSData($css);
  echo OxiAddonsInlineCSSData($jquery,'js');
}
