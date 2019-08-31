<?php

if (!defined('ABSPATH')) {
    exit;
}

function oxi_content_boxes_style_12_shortcode($style = false, $listdata = false, $user = 'user') {
    $oxiid = $style['id'];
    $stylefiles = explode('||#||', $style['css']);
    $styledata = explode('|', $stylefiles[0]);
    $css = '';
    foreach ($listdata as $value) {
        $listfile = explode('||#||', $value['files']);
        $icon = $name = $desc = $arrow_icon = $full_content = '';
        if ($listfile[3] != '') {
            $icon = '<div class="oxi-addons-box-icon">
                        ' . oxi_addons_font_awesome($listfile[3]) . '
                     </div>';
        }
        if ($listfile[5] != '') {
            $name = '<div class="oxi-addons-box-name">
                        ' . OxiAddonsTextConvert($listfile[5]) . '
                    </div>';
        }
        if ($listfile[7] != '') {
            $desc = '<div class="oxi-addons-box-desc">
                        ' . OxiAddonsTextConvert($listfile[7]) . '
                    </div>';
        }
        if ($listfile[9] != '') {
            $arrow_icon = '<div class="oxi-addons-box-arrow"    ' . OxiAddonsAnimation($styledata, 207) . '>
                            ' . oxi_addons_font_awesome($listfile[9]) . '
                          </div>';
        }
        if ($icon != '' && $name != '' && $desc != '' && $arrow_icon != '') {
            $full_content = '<div class="oxi-addons-box-inner">
                                ' . $icon . '
                                ' . $name . '
                                ' . $desc . '
                                ' . $arrow_icon . '
                              </div>
                        
                   ';
        }
        echo '  <div class="oxi-box-wrap-' . $oxiid . '  oxi-addons-bg-img-' . $value['styleid'] . '-' . $value['id'] . '  ' . OxiAddonsItemRows($styledata, 197) . '   ' . OxiAddonsAdminDefine($user) . ' ">
                        <div class="oxi-addons-box" ' . OxiAddonsAnimation($styledata, 203) . '>
                          <div class="oxi-addons-box-outer">
                         ' . $full_content . '
                          </div>
                        </div>
                          ';


        if ($user == 'admin') {
            echo '  <div class="oxi-addons-admin-absulote">
                        <div class="oxi-addons-admin-absulate-edit">
                            <form method="post"> ' . wp_nonce_field("OxiAddonsListFileEditcontent_boxesdata") . '
                                <input type="hidden" name="oxi-item-id" value="' . $value['id'] . '">
                                <button class="btn btn-primary" type="submit" value="edit" name="OxiAddonsListFileEdit">Edit</button>
                            </form>
                        </div>
                        <div class="oxi-addons-admin-absulate-delete">
                            <form method="post">  ' . wp_nonce_field("OxiAddonsListFileDeletecontent_boxesdata") . '
                                <input type="hidden" name="oxi-item-id" value="' . $value['id'] . '">
                                <button class="btn btn-danger " type="submit" value="delete" name="OxiAddonsListFileDelete">Delete</button>
                            </form>
                        </div>
                    </div>';
        }
        echo '</div>';

        $css .= '.oxi-addons-bg-img-' . $value['styleid'] . '-' . $value['id'] . ' .oxi-addons-box-outer{
                        background: url("' . OxiAddonsUrlConvert($listfile[1]) . '");
                         background-size: cover;
                  }';
    }
   

    $css .= '

                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box{
                        max-width: ' . $styledata[3] . 'px;
                        height: ' . $styledata[211] . 'px;
                        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 7)) . ' ;
                        margin: 0 auto;
                        transition: 0.3s;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-outer{
                        margin: ' . (OxiAddonsPaddingMarginSanitize($styledata, 23)) . ' ;
                        ' . OxiAddonsBoxShadowSanitize($styledata, 55) . ';
                        border-radius: ' . (OxiAddonsPaddingMarginSanitize($styledata, 39)) . ' ;
                        overflow: hidden;
                        height: 100%;
                        width: 100%;
                        position: relative;
                }
                .oxi-addons-bg-img-' . $value['styleid'] . '-' . $value['id'] . ' .oxi-addons-box-outer{        
                        width:100%;
                        repeat: no-repeat;
                }
                .oxi-addons-box-outer::after{
                        content: "";
                        display: inline-block;
                        padding-bottom: 100%;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-inner {
                        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 7)) . ' ;
                        background:' . $styledata[201] . ';
                        border-radius: ' . (OxiAddonsPaddingMarginSanitize($styledata, 39)) . ' ;
                        width: 100%;
                        position: absolute;
                        left: 0px;
                        top: 0px;
                        height: 100%;
                        transform: scale(0);
                        cursor: pointer;
                        transition:0.5s;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-outer:hover .oxi-addons-box-inner{
                        transform: scale(1);
                        transform-origin: bottom;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-icon {
                        font-size:' . $styledata[61] . 'px;
                        color:' . $styledata[65] . ';
                        text-align: ' . $styledata[67] . ';
                        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 69)) . ' ;
                        margin: ' . (OxiAddonsPaddingMarginSanitize($styledata, 85)) . ' ;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-name {
                        font-size:' . $styledata[101] . 'px;
                        color:' . $styledata[105] . ';
                        ' . OxiAddonsFontSettings($styledata, 107) . '
                        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 113)) . ' ;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-desc {
                        font-size:' . $styledata[129] . 'px;
                        color:' . $styledata[133] . ';
                        ' . OxiAddonsFontSettings($styledata, 135) . '
                        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 141)) . ' ;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-arrow {
                        font-size:' . $styledata[157] . 'px;
                        color:' . $styledata[161] . ';
                        text-align: ' . $styledata[163] . ';
                        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 165)) . ' ;
                        margin: ' . (OxiAddonsPaddingMarginSanitize($styledata, 181)) . ' ;
                }




            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box{
                        max-width: ' . $styledata[4] . 'px;
                        height: ' . $styledata[212] . 'px;
                        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 8)) . ' ;
                        border-radius: ' . (OxiAddonsPaddingMarginSanitize($styledata, 40)) . ' ;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-outer{
                        margin: ' . (OxiAddonsPaddingMarginSanitize($styledata, 24)) . ' ;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-inner {
                        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 8)) . ' ;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-icon {
                        font-size:' . $styledata[62] . 'px;
                        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 70)) . ' ;
                        margin: ' . (OxiAddonsPaddingMarginSanitize($styledata, 86)) . ' ;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-name {
                        font-size:' . $styledata[102] . 'px;
                        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 114)) . ' ;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-desc {
                        font-size:' . $styledata[130] . 'px;
                        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 142)) . ' ;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-arrow {
                        font-size:' . $styledata[158] . 'px;
                        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 166)) . ' ;
                        margin: ' . (OxiAddonsPaddingMarginSanitize($styledata, 182)) . ' ;
                }
            }


            @media only screen and (max-width : 668px){
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box{
                        max-width: ' . $styledata[5] . 'px;
                        height: ' . $styledata[213] . 'px;
                        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 9)) . ' ;
                        border-radius: ' . (OxiAddonsPaddingMarginSanitize($styledata, 41)) . ' ;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-outer{
                        margin: ' . (OxiAddonsPaddingMarginSanitize($styledata, 25)) . ' ;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-inner {
                        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 9)) . ' ;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-icon {
                        font-size:' . $styledata[63] . 'px;
                        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 71)) . ' ;
                        margin: ' . (OxiAddonsPaddingMarginSanitize($styledata, 87)) . ' ;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-name {
                        font-size:' . $styledata[103] . 'px;
                        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 115)) . ' ;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-desc {
                        font-size:' . $styledata[131] . 'px;
                        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 143)) . ' ;
                }
                .oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-arrow {
                        font-size:' . $styledata[159] . 'px;
                        padding: ' . (OxiAddonsPaddingMarginSanitize($styledata, 167)) . ' ;
                        margin: ' . (OxiAddonsPaddingMarginSanitize($styledata, 183)) . ' ;
                }
            }



            ';
    echo OxiAddonsInlineCSSData($css);
}
