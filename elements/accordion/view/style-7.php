<?php

if (!defined('ABSPATH'))
    exit;

function oxi_accordion_style_7_shortcode($styledata = FALSE, $listdata = FALSE, $user = 'user') {
    $oxiid = $styledata['id'];
    $stylefiles = explode('||#||', $styledata['css']);
    $styledata = explode('|', $stylefiles[0]);

    
    echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">
            <div class="oxi-addons-AC-SV-row">';
                foreach ($listdata as $value) {
                  $data = explode('||#||', $value['files']);
                  $aticon = $otitle =  $details = ''; 
                if ($data[6] != '') {
                        $aticon = '<div class="oxi-addons-AC-SV-icon">' . oxi_addons_font_awesome($data[6]) . '</div>';
                    }
                if ($data[2] != '') {
                        $otitle = '<div class="oxi-addons-AC-SV-header">' . OxiAddonsTextConvert($data[2]) . '</div>';
                    }
                if ($data[4] != '') {
                        $details = '<div class="oxi-addons-AC-SV-details" id="oxi-addons-AC-SV-' . $oxiid . '-' . $value['id'] . '">
                                 ' . OxiAddonsTextConvert($data[4]) . '
                            </div>';
                    }
                    echo '<div class="oxi-addons-AC-SV-' . $oxiid . ' ' . OxiAddonsAdminDefine($user) . '" ref="#oxi-addons-AC-SV-' . $oxiid . '-' . $value['id'] . '" ' . OxiAddonsAnimation($styledata, 61) . '>
                        <div class="oxi-addons-AC-SV-panel" >
                            '.$aticon.'
                            '.$otitle.'
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
                   echo'</div>';
                }
       echo '</div>
          </div>
        </div>';
    
   $css= '.oxi-addons-AC-SV-row{
        width: 100%;
        float: left;
    }
    .oxi-addons-AC-SV-' . $oxiid . '{
        width: 100%;
        float: left;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-panel{
      width: 100%;
      float:left;
      position: relative;
      ' . OxiAddonsBGImage($styledata, 65) . '
      border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
      padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
      box-shadow: 0px 5px 0px 0px ' . $styledata[161] . ', 0px 10px 5px ' . $styledata[163] . ';
      transition:none; 
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-panel:active {
      top: 3px;
      box-shadow: 0px 2px 0px 0px ' . $styledata[161] . ', 0px 5px 3px ' . $styledata[163] . ';
    }

    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-panel:active .oxi-addons-AC-SV-icon{
      top: -3px;
      transition:none; 
      box-shadow: 0px 5px 0px 0px ' . $styledata[143] . ', 1px 1px 0px 0px ' . $styledata[143] . ', 2px 2px 0px 0px ' . $styledata[143] . ', 2px 5px 0px 0px ' . $styledata[143] . ', 6px 4px 2px ' . $styledata[143] . ', 0px 10px 5px ' . $styledata[163] . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-icon {
      display: flex;
      justify-content:center;
      align-items: center;
      cursor: pointer;
      position: absolute;
      height: 100%;
      width: 100%;
      max-width: ' . $styledata[133] . 'px;
      max-height: ' . $styledata[133] . 'px;
      left: -'. $styledata[133]. 'px;
      background: ' . $styledata[127] . ';
      top: 0px;
      font-size: ' . $styledata[129] . 'px;
      color: ' . $styledata[137] . ';
      border-right: 1px solid ' . $styledata[143] . ';
      border-radius: 5px 0px 0px 5px;
      text-shadow: 1px 1px 0px ' . $styledata[143] . ';
      box-shadow: inset 0px 1px 0px ' . $styledata[143] . ', 0px 5px 0px 0px ' . $styledata[143] . ', 0px 10px 5px ' . $styledata[163] . ';
      transition:none; 
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-header {
      width: 100%;
      float: left;
      cursor: pointer;
      font-size: ' . $styledata[71] . 'px;
      color: ' . $styledata[69] . ';
      ' . OxiAddonsFontSettings($styledata, 77) . '
      padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
      transition:none; 
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-details {
      display: none;
      width: 100%;
      float: left;
      font-size: ' . $styledata[99] . 'px;
      color: ' . $styledata[103] . ';
      ' . OxiAddonsFontSettings($styledata, 105) . '
      padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 111) . ';
      transition:none;    
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-active .oxi-addons-AC-SV-details {
      display: block;
      width: 100%;
      float: left;
      font-size: ' . $styledata[99] . 'px;
      color: ' . $styledata[103] . ';
      ' . OxiAddonsFontSettings($styledata, 105) . '
      padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 111) . ';
      transition:none; 
    }
    @media only screen and (min-width : 669px) and (max-width : 993px){
    .oxi-addons-AC-SV-' . $oxiid . '{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 40) . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-panel {
      border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
      padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-icon {
      max-width: ' . $styledata[134] . 'px;
      max-height: ' . $styledata[134] . 'px;
      left: -'. $styledata[134]. 'px;
      font-size: ' . $styledata[130] . 'px;
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-header {
      font-size: ' . $styledata[72] . 'px;
      padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 84) . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-details {
      font-size: ' . $styledata[100] . 'px;
      padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 112) . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-active .oxi-addons-AC-SV-details {
      font-size: ' . $styledata[100] . 'px;
      padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 112) . ';
    }
           
    }
    @media only screen and (max-width : 668px){
      .oxi-addons-AC-SV-' . $oxiid . '{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-panel {
      border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
      padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-icon {
      max-width: ' . $styledata[135] . 'px;
      max-height: ' . $styledata[135] . 'px;
      left: -'. $styledata[135]. 'px;
      font-size: ' . $styledata[131] . 'px;
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-header {
      font-size: ' . $styledata[73] . 'px;
      padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-details {
      font-size: ' . $styledata[101] . 'px;
      padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 113) . ';
    }
    .oxi-addons-AC-SV-' . $oxiid . ' .oxi-active .oxi-addons-AC-SV-details {
      font-size: ' . $styledata[101] . 'px;
      padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 113) . ';
    }  
            
    }
'; 

 $jquery = ' jQuery(document).ready(function () {
                    jQuery(".oxi-addons-AC-SV-' . $oxiid . ':first").addClass("oxi-active");
                    jQuery(".oxi-addons-AC-SV-header:first").next().slideDown();
                   ';
    if ($styledata[5] == 'randomly') {
        $jquery .= 'jQuery(".oxi-addons-AC-SV-' . $oxiid . '").click(function () {
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
        $jquery .= 'jQuery(".oxi-addons-AC-SV-' . $oxiid . '").click(function () {
                        if(jQuery(this).hasClass("oxi-active")){
                            return false;
                        }else{
                            jQuery(".oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-details").slideUp();
                            var activeTab = jQuery(this).attr("ref");
                            jQuery(activeTab).slideDown();
                            jQuery(".oxi-addons-AC-SV-' . $oxiid . '").removeClass("oxi-active");
                            jQuery(this).addClass("oxi-active");
                            
                        }
                    });';
    }

    $jquery .= '});';
    echo OxiAddonsInlineCSSData($css);
    echo OxiAddonsInlineCSSData($jquery,'js');
}
