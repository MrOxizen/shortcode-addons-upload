<?php

if (!defined('ABSPATH'))
    exit;

function oxi_accordion_style_5_shortcode($styledata = FALSE, $listdata = FALSE, $user = 'user') {
    $oxiid = $styledata['id'];
    $stylefiles = explode('||#||', $styledata['css']);
    $styledata = explode('|', $stylefiles[0]);
    
    echo '<div class="oxi-addons-container">';
    echo '<div class="oxi-addons-row">';
    foreach ($listdata as $value) {
        $data = explode('||#||', $value['files']);
        $title = $details = '';
        if ($data[2] != '') {
            $title = '<div class="oxi-addonsAC-FI-title">
                                        ' . OxiAddonsTextConvert($data[2]) . '
                                    </div>';
        }
        if ($data[4] != '') {
            $details = ' <div class="oxi-addonsAC-FI-Content-details">
                                        <div class="oxi-addonsAC-FI-absulote-' . $oxiid . '">
                                        </div>
                                        ' . OxiAddonsTextConvert($data[4]) . '
                                    </div>';
        }
        echo '<div class="' . OxiAddonsAdminDefine($user) . '"  ' . OxiAddonsAnimation($styledata, 61) . '>
                            <div class="oxi-addonsAC-FI-' . $oxiid . '">
                                <div class="oxi-addonsAC-FI-Content-details' . $oxiid . '" ref="#oxi-addonsAC-FI-Content-details' . $oxiid . '-d-' . $value['id'] . '">
                                   '.$title.' 
                                </div>
                                <div class="oxi-addonsAC-Fi-content-' . $oxiid . '" id="oxi-addonsAC-FI-Content-details' . $oxiid . '-d-' . $value['id'] . '">
                                   '.$details.'
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
    echo'</div>';
    echo'</div>';

    $css = '.oxi-addons-wrapper{
        width: 100%;
        float: left;
    }
    .oxi-addonsAC-FI-' . $oxiid . '{
        width: 100%;
        margin: auto;
        overflow: auto;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-absulote-' . $oxiid . '{
        position: absolute;
        top: -10px;
        left: 50px;
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 10px solid ' . $styledata[99] . ';
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details' . $oxiid . '{
        width: 100%;
        float: left;
        display: flex;
        cursor: pointer;
        border: ' . $styledata[119] . 'px ' . $styledata[120] . '  ' . $styledata[123] . ';
        background: ' . $styledata[65] . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
        ' . OxiAddonsBoxShadowSanitize($styledata, 55) . ';
        
        
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-title{
        width: 100%;
        float: left;
        color: ' . $styledata[69] . ';
        font-size: ' . $styledata[71] . 'px;
        ' . OxiAddonsFontSettings($styledata, 77) . '
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
    }
    
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-Fi-content-' . $oxiid . '{
        display: none;
        width: 100%;
        float: left;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 157) . ';
        transition:none;
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details{
        position: relative;
        background: ' . $styledata[99] . ';
        border-radius:  ' . OxiAddonsPaddingMarginSanitize($styledata, 125) . ';
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 141) . ';
        ' . OxiAddonsBoxShadowSanitize($styledata, 113) . ';
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details, 
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details p{
        font-size: ' . $styledata[101] . 'px;
        color: ' . $styledata[105] . ';
        ' . OxiAddonsFontSettings($styledata, 107) . '
    }
@media only screen and (min-width : 669px) and (max-width : 993px){
    .oxi-addonsAC-FI-' . $oxiid . '{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 40) . ';
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details' . $oxiid . '{
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
  
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-title{
        font-size: ' . $styledata[72] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 84) . ';
    }
    
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-Fi-content-' . $oxiid . '{
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 158) . ';
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details{
        border-radius:  ' . OxiAddonsPaddingMarginSanitize($styledata, 126) . ';
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 142) . ';
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details, 
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details p{
        font-size: ' . $styledata[102] . 'px;
    }
}
@media only screen and (max-width : 668px){
      .oxi-addonsAC-FI-' . $oxiid . '{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details' . $oxiid . '{
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
  
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-title{
        font-size: ' . $styledata[73] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';
    }
    
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-Fi-content-' . $oxiid . '{
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 159) . ';
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details{
        border-radius:  ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . ';
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 143) . ';
    }
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details, 
    .oxi-addonsAC-FI-' . $oxiid . ' .oxi-addonsAC-FI-Content-details p{
        font-size: ' . $styledata[103] . 'px;
    }
    
}';

    $jquery = ' jQuery(document).ready(function () {
                    jQuery(".oxi-addonsAC-FI-Content-details' . $oxiid . '' . $styledata[3] . '").addClass("oxi-active");
                    jQuery(".oxi-addonsAC-FI-Content-details' . $oxiid . '' . $styledata[3] . '").next().slideDown();
                   ';
    if ($styledata[5] == 'randomly') {
        $jquery .= 'jQuery(".oxi-addonsAC-FI-Content-details' . $oxiid . '").click(function () {
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
        $jquery .= 'jQuery(".oxi-addonsAC-FI-Content-details' . $oxiid . '").click(function () {
                        if(jQuery(this).hasClass("oxi-active")){
                            return false;
                        }else{
                            jQuery(".oxi-addonsAC-Fi-content-' . $oxiid . '").slideUp();
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(".oxi-addonsAC-FI-Content-details' . $oxiid . '").removeClass("oxi-active");
                            jQuery(this).addClass("oxi-active");
                            
                        }
                    });
                    ';
    }

    $jquery .= '});';

     echo OxiAddonsInlineCSSData($css);
     echo OxiAddonsInlineCSSData($jquery,'js');
}
