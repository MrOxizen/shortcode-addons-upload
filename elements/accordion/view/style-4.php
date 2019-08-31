<?php
if (!defined('ABSPATH'))
    exit;

function oxi_accordion_style_4_shortcode($styledata = FALSE, $listdata = FALSE, $user = 'user') {
    $oxiid = $styledata['id'];
    $stylefiles = explode('||#||', $styledata['css']);
    $styledata = explode('|', $stylefiles[0]);

    echo '<div class="oxi-addons-container">
    <div class="oxi-addons-row">';
    foreach ($listdata as $value) {
        $data = explode('||#||', $value['files']);
        $aticon = $atitle = $details = '';
        if ($data[2] != '') {
            $aticon = ' <div class="oxi-addonsAC-F-icon">
                            ' . oxi_addons_font_awesome($data[2]) . '
                        </div>';
        }
        if ($data[4] != '') {
            $atitle = '  <div class="oxi-addonsAC-F-title">
                                        ' . OxiAddonsTextConvert($data[4]) . '
                                    </div>';
        }
        if ($data[6] != '') {
            $details = '<div class="oxi-addonsAC-F-content-' . $oxiid . '" id="oxi-addonsAC-F-heading-' . $oxiid . '-d-' . $value['id'] . '">
                                    <div class="oxi-addonsAC-F-Content-details">
                                        ' . OxiAddonsTextConvert($data[6]) . '
                                    </div>
                                </div>';
        }
        echo '<div class="' . OxiAddonsAdminDefine($user) . '" ' . OxiAddonsAnimation($styledata, 61) . '>
                            <div class="oxi-addonsAC-F-' . $oxiid . '" >
                                <div class="oxi-addonsAC-F-heading-' . $oxiid . '" ref="#oxi-addonsAC-F-heading-' . $oxiid . '-d-' . $value['id'] . '">
                                    <div class="oxi-addonsAC-F-heading-icon">
                                       '.$aticon.'
                                        <div class="oxi-addonsAC-F-absulote-' . $oxiid . '">
                                        </div>
                                    </div>
                                    '.$atitle.'
                                </div>
                                '.$details.'
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
    echo'</div>';
    echo'</div>';

    $css = '.oxi-addonsAC-F-' . $oxiid . '{
        width: 100%;
        margin: auto;
        overflow: auto;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
    }
   
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-heading-icon{
        float: left;
        width: 100%;
        max-width: ' . $styledata[215] . 'px;
        height: ' . $styledata[215] . 'px;
        color: ' . $styledata[81] . ';
        background: ' . $styledata[213] . ';
        display: flex;
        align-items: center;
        position: relative;
        justify-content: center;
        font-size: ' . $styledata[89] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . ';
        transition:none;
    }
    .oxi-icons{
    transition:none;
    }
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-active .oxi-addonsAC-F-heading-icon{
        background: ' . $styledata[211] . ';
        color: ' . $styledata[69] . ';
        transition:none;
    }
    
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-absulote-' . $oxiid . '{
        position: absolute;
        bottom: 0;
        right: calc(-'. $styledata[215]. 'px/2);
        width: 0;
        height: 0;
        border-left: calc('. $styledata[215]. 'px/2) solid ' . $styledata[213] . ';
        border-bottom: calc('. $styledata[215]. 'px/2) solid transparent;
        border-top: calc('. $styledata[215]. 'px/2) solid transparent;
        transition:none;
    }
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-active .oxi-addonsAC-F-absulote-' . $oxiid . '{
        position: absolute;
        bottom: 0;
        right: calc(-'. $styledata[215]. 'px/2);
        width: 0;
        height: 0;
        border-left: calc('. $styledata[215]. 'px/2) solid ' . $styledata[211] . ';
        border-bottom: calc('. $styledata[215]. 'px/2) solid transparent;
        border-top: calc('. $styledata[215]. 'px/2) solid transparent;
        transition:none;
    }
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-heading-' . $oxiid . '{
        width: 100%;
        float: left;
        display: flex;
        align-items: center;
        cursor: pointer;
        overflow: auto;
        background: ' . $styledata[77] . ';
        color: ' . $styledata[81] . ';
        border-top: ' . $styledata[83] . 'px ' . $styledata[84] . '  ' . $styledata[87] . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
        ' . OxiAddonsBoxShadowSanitize($styledata, 55) . ';
        transition:none;
        
        
    }
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-heading-' . $oxiid . '.oxi-active{
        width: 100%;
        float: left;
        display: flex;
        position: relative;
        cursor: pointer;
        background: ' . $styledata[65] . ';
        color: ' . $styledata[69] . ';
        border: ' . $styledata[71] . 'px ' . $styledata[72] . '  ' . $styledata[75] . ';
        transition:none;
    }
    
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-title{
        width: 100%;
        float: left;
        display: flex;
        align-items: center;
        font-size: ' . $styledata[109] . 'px;
        ' . OxiAddonsFontSettings($styledata, 115) . '
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 121) . ';
        transition:none;
    }
    
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-content-' . $oxiid . '{
        display: none;
        width: 100%;
        float: left;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 195) . ';
        transition:none;
    }
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-Content-details{
        background: ' . $styledata[137] . ';
        border: ' . $styledata[157] . 'px ' . $styledata[158] . '  ' . $styledata[161] . ';
        border-radius:  ' . OxiAddonsPaddingMarginSanitize($styledata, 163) . ';
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 179) . ';
        ' . OxiAddonsBoxShadowSanitize($styledata, 151) . ';
        transition:none;
    }
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-Content-details,
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-Content-details p{
    font-size: ' . $styledata[139] . 'px;
    color: ' . $styledata[143] . ';
    ' . OxiAddonsFontSettings($styledata, 145) . '
    transition:none;
    }
@media only screen and (min-width : 669px) and (max-width : 993px){
    .oxi-addonsAC-F-' . $oxiid . '{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 40) . ';
    }
   
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-heading-icon{
        width: 100%;
        max-width: ' . $styledata[216] . 'px;
        height: ' . $styledata[216] . 'px;
        font-size: ' . $styledata[90] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 94) . ';
    }
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-heading-' . $oxiid . '{
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
    }
    
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-title{
        font-size: ' . $styledata[110] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 122) . ';
    }
    
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-content-' . $oxiid . '{
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 196) . ';
    }
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-Content-details{
        border-radius:  ' . OxiAddonsPaddingMarginSanitize($styledata, 164) . ';
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 180) . ';
    }
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-Content-details,
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-Content-details p{
        font-size: ' . $styledata[140] . 'px;
    }
}
@media only screen and (max-width : 668px){
     .oxi-addonsAC-F-' . $oxiid . '{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
    }
   
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-heading-icon{
        width: 100%;
        max-width: ' . $styledata[217] . 'px;
        height: ' . $styledata[217] . 'px;
        font-size: ' . $styledata[91] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 95) . ';
    }
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-heading-' . $oxiid . '{
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
    }
    
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-title{
        font-size: ' . $styledata[111] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 123) . ';
    }
    
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-content-' . $oxiid . '{
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 197) . ';
    }
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-Content-details{
        border-radius:  ' . OxiAddonsPaddingMarginSanitize($styledata, 165) . ';
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 181) . ';
    }
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-Content-details,
    .oxi-addonsAC-F-' . $oxiid . ' .oxi-addonsAC-F-Content-details p{
        font-size: ' . $styledata[141] . 'px;
    }
}';

    $jquery = ' jQuery(document).ready(function () {
                    jQuery(".oxi-addonsAC-F-heading-' . $oxiid . '' . $styledata[3] . '").addClass("oxi-active");
                    jQuery(".oxi-addonsAC-F-heading-' . $oxiid . '' . $styledata[3] . '").next().slideDown();
                   ';
    if ($styledata[5] == 'randomly') {
        $jquery .= 'jQuery(".oxi-addonsAC-F-heading-' . $oxiid . '").click(function () {
                        if(jQuery(this).hasClass("oxi-active")){
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideUp();
                            jQuery(this).removeClass("oxi-active");
                        }else{
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(this).addClass("oxi-active");
                        }
                    });';
    } else {
        $jquery .= 'jQuery(".oxi-addonsAC-F-heading-' . $oxiid . '").click(function () {
                        if(jQuery(this).hasClass("oxi-active")){
                            return false;
                        }else{
                            jQuery(".oxi-addonsAC-F-content-' . $oxiid . '").slideUp();
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(".oxi-addonsAC-F-heading-' . $oxiid . '").removeClass("oxi-active");
                            jQuery(this).addClass("oxi-active");
                            
                        }
                    });
                    ';
    }

    $jquery .= '});';
    
  echo OxiAddonsInlineCSSData($css);
  echo OxiAddonsInlineCSSData($jquery,'js');
}
