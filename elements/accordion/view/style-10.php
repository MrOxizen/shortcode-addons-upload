<?php

if (!defined('ABSPATH'))
    exit;

function oxi_accordion_style_10_shortcode($styledata = FALSE, $listdata = FALSE, $user = 'user') {
    $oxiid = $styledata['id'];
    $stylefiles = explode('||#||', $styledata['css']);
    $styledata = explode('|', $stylefiles[0]);
    echo '<div class="oxi-addons-container">';
    echo '<div class="oxi-addons-row">';
    foreach ($listdata as $value) {
        $data = explode('||#||', $value['files']);
        echo '<div class="oxi-addons-AC-N-' . $oxiid . ' ' . OxiAddonsAdminDefine($user) . '" ' . OxiAddonsAnimation($styledata, 69) . '>
                    <div class="oxi-addons-AC-T-row">
                        <div class="oxi-addons-AC-N-H-' . $oxiid . '" ref="#oxi-addons-AC-N-H-' . $oxiid . '-id-' . $value['id'] . '">
                            <div class="oxi-addons-AC-number">' . oxi_addons_font_awesome($data[6]) . '</div>
                            <div class="oxi-addons-AC-number-d">' . oxi_addons_font_awesome($data[6]) . '</div>
                            <div class="oxi-addons-AC-N-heading-data">' . OxiAddonsTextConvert($data[2]) . '</div>
                            <div class="oxi-addons-AC-N-active">' . oxi_addons_font_awesome($stylefiles[2]) . '</div>
                            <div class="oxi-addons-AC-N-deactive">' . oxi_addons_font_awesome($stylefiles[4]) . '</div>
                        </div>
                        <div class="oxi-addons-AC-N-C-' . $oxiid . '" id="oxi-addons-AC-N-H-' . $oxiid . '-id-' . $value['id'] . '">
                            <div class="oxi-addons-AC-N-C-' . $oxiid . '-b">
                                ' . OxiAddonsTextConvert($data[4]) . '
                            </div>
                        </div>
                    </div>';
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
    echo '</div>';
    echo '</div>';


    $css = '.oxi-addons-AC-N-' . $oxiid . '{
            width: 100%;
            float:left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 47) . ';
        }
        .oxi-addons-AC-T-row{
            width: 100%;
            float:left;
            ' . OxiAddonsBoxShadowSanitize($styledata, 63) . ';
        }
        
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . '{
            width: 100%;
            float: left;
            cursor: pointer;
            display: flex;
            align-items: center;
            ' . OxiAddonsBGImage($styledata, 5) . '
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
            transition:none;
            
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . ':hover{
            background: ' . $styledata[331] . '; 
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . '.active{
            width: 100%;
            float: left;
            cursor: pointer;
            display: flex;
            align-items: center;
            background: ' . $styledata[331] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
            transition:none;
            
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . '.active .oxi-addons-AC-number{
            display: flex;
            align-items: center;
            justify-content: center;
            width: ' . $styledata[327] . 'px;
            background: ' . $styledata[283] . ';
            font-size: ' . $styledata[285] . 'px;
            color: ' . $styledata[289] . ';
            border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 291) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 307) . ';
            transition:none;
            
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . ' .oxi-addons-AC-number-d{
            display: flex;
            align-items: center;
            justify-content: center;
            width: ' . $styledata[327] . 'px;
            background: ' . $styledata[323] . ';
            font-size: ' . $styledata[285] . 'px;
            color: ' . $styledata[325] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 307) . ';
            transition:none;
            
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . ':hover .oxi-addons-AC-number-d{
            background: ' . $styledata[283] . ';
            color: ' . $styledata[289] . ';
            transition:none;
         }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . ' .oxi-addons-AC-number{
            display: none;
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . '.active .oxi-addons-AC-number-d{
            display: none;
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . ' .oxi-addons-AC-N-heading-data{
            width: calc(100% - 40px);
            float: left;
            font-size: ' . $styledata[73] . 'px;
            color: ' . $styledata[77] . ';
            ' . OxiAddonsFontSettings($styledata, 79) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';
            transition:none;
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . '.active .oxi-addons-AC-N-heading-data, .oxi-addons-AC-N-H-' . $oxiid . ':hover  .oxi-addons-AC-N-heading-data{
            color: ' . $styledata[101] . ';
            transition:none;
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . '.active .oxi-addons-AC-N-active{
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
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . ' .oxi-addons-AC-N-deactive{
            display: flex;
            float: left;
            align-items: center;
            justify-content: center;
            background: ' . $styledata[103] . ';
            font-size: ' . $styledata[107] . 'px;
            width: 100%;
            max-width: ' . $styledata[111] . 'px;
            height: ' . $styledata[111] . 'px;
            color: ' . $styledata[115] . ';
            border: ' . $styledata[119] . 'px ' . $styledata[120] . '  ' . $styledata[123] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 125) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 141) . ';
            transition:none;
            
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . ' .oxi-addons-AC-N-active{
            display: none;
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . '.active .oxi-addons-AC-N-deactive{
            display: none;
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . ':hover .oxi-addons-AC-N-deactive{
            color: ' . $styledata[117] . ';
            border-color: ' . $styledata[159] . ';
            background: ' . $styledata[105] . ';
            transition:none;
        }
        
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-C-' . $oxiid . '{
            display: none;
            width: 100%;
            float: left;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 263) . ';
            transition:none;
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-C-' . $oxiid . '-b{
            width: 100%;
            float: left;
            border-top: ' . $styledata[9] . 'px ' . $styledata[10] . '  ' . $styledata[13] . ';
            background: ' . $styledata[211] . ';
            font-size: ' . $styledata[213] . 'px;
            color: ' . $styledata[217] . ';
            ' . OxiAddonsFontSettings($styledata, 219) . '
            ' . OxiAddonsBoxShadowSanitize($styledata, 225) . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 231) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 247) . ';
            
        }
    @media only screen and (min-width : 669px) and (max-width : 993px){
        .oxi-addons-AC-N-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 48) . ';
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . '{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . '.active .oxi-addons-AC-number{
            width: ' . $styledata[328] . 'px;
            font-size: ' . $styledata[286] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 308) . ';
            
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . ' .oxi-addons-AC-number-d{
            width: ' . $styledata[328] . 'px;
            font-size: ' . $styledata[286] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 308) . ';
            
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . ' .oxi-addons-AC-N-heading-data{
            font-size: ' . $styledata[74] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 86) . ';
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . '.active .oxi-addons-AC-N-active{
            font-size: ' . $styledata[162] . 'px;
            width: 100%;
            max-width: ' . $styledata[166] . 'px;
            height: ' . $styledata[166] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 180) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 196) . ';
            
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . ' .oxi-addons-AC-N-deactive{
            font-size: ' . $styledata[108] . 'px;
            width: 100%;
            max-width: ' . $styledata[112] . 'px;
            height: ' . $styledata[112] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 126) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 142) . ';
            
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-C-' . $oxiid . '{
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 264) . ';
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-C-' . $oxiid . '-b{
            font-size: ' . $styledata[214] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 232) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 248) . ';
            
        }
           
    }
    @media only screen and (max-width : 668px){
        .oxi-addons-AC-N-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . '{
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . '.active .oxi-addons-AC-number{
            width: ' . $styledata[329] . 'px;
            font-size: ' . $styledata[287] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 309) . ';
            
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . ' .oxi-addons-AC-number-d{
            width: ' . $styledata[329] . 'px;
            font-size: ' . $styledata[287] . 'px;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 309) . ';
            
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . ' .oxi-addons-AC-N-heading-data{
            font-size: ' . $styledata[75] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . '.active .oxi-addons-AC-N-active{
            font-size: ' . $styledata[163] . 'px;
            width: 100%;
            max-width: ' . $styledata[167] . 'px;
            height: ' . $styledata[167] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 181) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 197) . ';
            
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . ' .oxi-addons-AC-N-deactive{
            font-size: ' . $styledata[109] . 'px;
            width: 100%;
            max-width: ' . $styledata[113] . 'px;
            height: ' . $styledata[113] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 143) . ';
            
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-C-' . $oxiid . '{
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 165) . ';
        }
        .oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-C-' . $oxiid . '-b{
            font-size: ' . $styledata[215] . 'px;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 233) . ';
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 249) . ';
            
        }
    }';

    $jquery = ' jQuery(document).ready(function () {
                    jQuery(".oxi-addons-AC-N-H-' . $oxiid . '' . $styledata[3] . '").addClass("active");
                    jQuery(".oxi-addons-AC-N-H-' . $oxiid . '' . $styledata[3] . '").next().slideDown();
                   ';
    if ($styledata[281] == 'randomly') {
        $jquery .= 'jQuery(".oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . '").click(function () {
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
    }else{
         $jquery .= 'jQuery(".oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . '").click(function () {
                        if(jQuery(this).hasClass("active")){
                            return false;
                        }else{
                            jQuery(".oxi-addons-AC-N-C-' . $oxiid . '").slideUp();
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(".oxi-addons-AC-N-' . $oxiid . ' .oxi-addons-AC-N-H-' . $oxiid . '").removeClass("active");
                            jQuery(this).addClass("active");
                            
                        }
                    });';
    }

    $jquery .= '});';


    echo OxiAddonsInlineCSSData($css);
    echo OxiAddonsInlineCSSData($jquery,'js');
}
