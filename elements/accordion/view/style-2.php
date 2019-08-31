<?php

if (!defined('ABSPATH'))
    exit;

function oxi_accordion_style_2_shortcode($styledata = FALSE, $listdata = FALSE, $user = 'user') {
    $oxiid = $styledata['id'];
    $stylefiles = explode('||#||', $styledata['css']);
    $styledata = explode('|', $stylefiles[0]);
    

    echo '<div class="oxi-addons-container">
        <div class="oxi-addons-row">';
            foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            $icon = $heading = $details = '';
            if ($stylefiles[2] != '') {
                $icon = '<div class="oxi-addonsAC-2-icon">' . oxi_addons_font_awesome($stylefiles[2]) . '</div>';
            }
            if ($data[2] != '') {
                $heading = ' <div class="oxi-addonsAC-2-heading-data" > ' . OxiAddonsTextConvert($data[2]) . '</div>';
            }
            if ($data[4] != '') {
                $details = '<div class="oxi-addonsAC-' . $oxiid . '-details" id="oxi-addonsAC-' . $oxiid . '-d-' . $value['id'] . '">
                               ' . OxiAddonsTextConvert($data[4]) . '
                            </div>';
            }
            echo '<div class="oxi-addonsAC-wrapper-' . $oxiid . ' ' . OxiAddonsAdminDefine($user) . '" ' . OxiAddonsAnimation($styledata, 69) . '>
                    <div class="oxi-addonsAC-' . $oxiid . '" ref="#oxi-addonsAC-' . $oxiid . '-d-' . $value['id'] . '">
                            '.$icon.'
                        <div class="oxi-addonsAC-2-content">
                           '.$heading.'
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
    echo '</div>
    </div>';

    $css = '.oxi-addonsAC-wrapper-' . $oxiid . '{
       width: 100%;
       float: left;
       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 47) . ';
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '{
        width: 100%;
        float: left;
        cursor: pointer;
        display: flex;
        align-items: stretch;
        border: ' . $styledata[9] . 'px ' . $styledata[10] . '  ' . $styledata[13] . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
        ' . OxiAddonsBoxShadowSanitize($styledata, 63) . ';
        transition:none;
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-2-icon{
        display: flex;
        float: left;
        align-items: center;
        justify-content: center;
        background: ' . $styledata[125] . ';
        font-size: ' . $styledata[129] . 'px;
        color: ' . $styledata[137] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 161) . ';
        transition:none;
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '.oxi-active .oxi-addonsAC-2-icon{
        background: ' . $styledata[101] . ';
        font-size: ' . $styledata[103] . 'px;
        color: ' . $styledata[107] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 109) . ';
        transition:none;
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-2-content{
        width: 100%;
        float: left;
        ' . OxiAddonsBGImage($styledata, 5) . ';
        transition:none;
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-2-heading-data{
        font-size: ' . $styledata[73] . 'px;
        color: ' . $styledata[77] . ';
        ' . OxiAddonsFontSettings($styledata, 79) . '
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';
        transition:none;
        
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '-details,
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '-details p{
        font-size: ' . $styledata[179] . 'px;
        color: ' . $styledata[183] . ';
        ' . OxiAddonsFontSettings($styledata, 185) . ';
        transition:none;
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '-details{
        display: none;
        background: ' . $styledata[177] . ';
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 191) . ';
        transition:none;
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '.oxi-active  .oxi-addonsAC-' . $oxiid . '-details{
        display: block;
        transition:none;
    }
@media only screen and (min-width : 669px) and (max-width : 993px){
    .oxi-addonsAC-wrapper-' . $oxiid . '{
       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 48) . ';
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '{
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-2-icon{
        font-size: ' . $styledata[130] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 162) . ';
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '.oxi-active .oxi-addonsAC-2-icon{
        font-size: ' . $styledata[104] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 110) . ';
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-2-content{
        ' . OxiAddonsBGImage($styledata, 6) . '
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-2-heading-data{
        font-size: ' . $styledata[74] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 86) . ';
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '-details,
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '-details p{
        font-size: ' . $styledata[180] . 'px; 
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '-details{
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 192) . ';
    }
}
@media only screen and (max-width : 668px){
    .oxi-addonsAC-wrapper-' . $oxiid . '{
       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '{
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-2-icon{
        font-size: ' . $styledata[131] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 163) . ';
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '.oxi-active .oxi-addonsAC-2-icon{
        font-size: ' . $styledata[105] . 'px;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 111) . ';
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-2-content{
        ' . OxiAddonsBGImage($styledata, 7) . '
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-2-heading-data{
        font-size: ' . $styledata[75] . 'px;
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '-details,
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '-details p{
        font-size: ' . $styledata[181] . 'px; 
    }
    .oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '-details{
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 193) . ';
    }   
}';
    
    $jquery = '
        jQuery(document).ready(function(){
            jQuery(".oxi-addonsAC-' . $oxiid . '' . $styledata[3] . '").addClass("oxi-active");
                    ';
            if ($styledata[207] == 'randomly') {
                    $jquery .= 'jQuery(".oxi-addonsAC-' . $oxiid . '").click(function () {
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
                }else{
                     $jquery .= 'jQuery(".oxi-addonsAC-' . $oxiid . '").click(function () {
                                    if(jQuery(this).hasClass("oxi-active")){
                                       return false;
                                    }else{
                                        jQuery(".oxi-addonsAC-' . $oxiid . '-details").slideUp();
                                        var activeTab = jQuery(this).attr("ref");
                                        jQuery(activeTab).slideDown();
                                        jQuery(".oxi-addonsAC-' . $oxiid . '").removeClass("oxi-active");
                                        jQuery(this).addClass("oxi-active");
                                    }
                                });';
                }        
          $jquery .= '});';
          
  echo OxiAddonsInlineCSSData($css);
  echo OxiAddonsInlineCSSData($jquery,'js');
}
