<?php

if (!defined('ABSPATH'))
    exit;

function oxi_info_boxes_style_4_shortcode($styledata = FALSE, $listdata = FALSE, $user = 'user') {
    $stylename = $styledata['style_name'];
    $oxiid = $styledata['id'];
    $stylefiles = explode('||#||', $styledata['css']);
    $styledata = explode('|', $stylefiles[0]);
    $css = '';
    $image = '';
    echo '  <div class="oxi-addons-container" > 
                <div class="oxi-addons-row">
                    <div class="oxi-addons-row oxi-add-info-box' . $oxiid . '">';
    foreach ($listdata as $value) {
        $icons = $title = $content =  '';
        $files = explode('||#||', $value['files']);
        if ($files[5] != '') {
            $icons = '  <div class="oxi-info-icon">
                            <div class="oxi-info-icon-icons">
                                ' . oxi_addons_font_awesome($files[5]) . '
                             </div>
                        </div>';
        }
        if($files[1] != ''){
            $title = '  <div class="oxi-info-title" id="title">
                            ' . OxiAddonsTextConvert($files[1]) . '
                        </div>';
        }
        if($files[3]){
            $content =  '<div class="oxi-info-contetn">
                            ' . OxiAddonsTextConvert($files[3]) . '
                        </div>';
        }
        echo '      <div class="oxi-add-info-box-' . $oxiid . '-padding ' . OxiAddonsItemRows($styledata, 1) . '' . OxiAddonsAdminDefine($user) . '" ' . OxiAddonsAnimation($styledata, 159) . ' >
                                        <div class="oxi-info-body">
                                            ' . $icons . '
                                            ' . $title . '
                                            ' . $content . '
                                        </div>';

        if ($user == 'admin') {
            echo '  <div class="oxi-addons-admin-absulote">
                                        <div class="oxi-addons-admin-absulate-edit">
                                            <form method="post"> ' . wp_nonce_field("OxiAddonsListFileEditinfo_boxesdata") . '
                                                <input type="hidden" name="oxi-item-id" value="' . $value['id'] . '">
                                                <button class="btn btn-primary" type="submit" value="edit" name="OxiAddonsListFileEditdata">Edit</button>
                                            </form>
                                        </div>
                                        <div class="oxi-addons-admin-absulate-delete">
                                            <form method="post">  ' . wp_nonce_field("OxiAddonsListFileDeleteinfo_boxesdata") . '
                                                <input type="hidden" name="oxi-item-id" value="' . $value['id'] . '">
                                                <button class="btn btn-danger " type="submit" value="delete" name="OxiAddonsListFileDelete">Delete</button>
                                            </form>
                                        </div>
                                    </div>';
        }
        echo '</div>';
    }
    echo'   </div>
                </div>
            </div>';


    $justify = '';
    if ($styledata[97] == 'left') {
        $justify = 'justify-content: start;';
    } elseif ($styledata[97] == 'right') {
        $justify = 'justify-content: end;';
    } else {
        $justify = 'justify-content: center;';
    }

    $css .= ' 
            .oxi-add-info-box' . $oxiid . '{
                width: 100%;
            }
            .oxi-add-info-box-' . $oxiid . '-padding{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';                
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body{
                background: ' . $styledata[163] . ';
               ' . OxiAddonsBoxShadowSanitize($styledata, 249) . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 169) . ' ;
                border-style: ' . $styledata[165] . ';
                border-color: ' . $styledata[166] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 185) . ';
                display: flex;
                flex-direction: column;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . ';
           }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover{
                background: ' . $styledata[223] . ';
               ' . OxiAddonsBoxShadowSanitize($styledata, 201) . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 229) . ' ;
                border-style: ' . $styledata[225] . ';
                border-color: ' . $styledata[226] . ';

           }         
           .oxi-add-info-box' . $oxiid . ' .oxi-info-icon{
                font-size: ' . $styledata[37] . 'px;
                display: flex;
                justify-content: ' . $styledata[75] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 207) . ';

           }

            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon-icons{
                background:' . $styledata[57] . ';
                border-width: ' . $styledata[51] . 'px;
                border-style: ' . $styledata[52] . ';
                border-color: ' . $styledata[55] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 59) . ';
                color: ' . $styledata[41] . ';
            }
            
            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons {
                height: ' . $styledata[43] . 'px ;
                width: ' . $styledata[43] . 'px ;
                align-items: center;
                display: flex;
                justify-content: center;
                transition: none !important;
            }
            
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-icon-icons{
               background: ' . $styledata[97] . ';
               color: ' . $styledata[77] . ';
               border-color: ' . $styledata[95] . ';
               border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 79) . ';
           }
           
           .oxi-add-info-box' . $oxiid . ' .oxi-info-title{
               width: 100%;
               float: left;
               color: ' . $styledata[113] . ';
               font-size: ' . $styledata[103] . 'px;
               ' . OxiAddonsFontSettings($styledata, 107) . ';
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 115) . ';
           }
            .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-title{
                color:' . $styledata[245] . ';
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-contetn{
               font-size: ' . $styledata[133] . 'px;
               color: ' . $styledata[135] . ';
               ' . OxiAddonsFontSettings($styledata, 137) . '; 
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 143) . ';
           }
            .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-contetn{
                color:' . $styledata[247] . ';
            }
        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-add-info-box-' . $oxiid . '-padding{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 6) . ';                
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body{
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 170) . ' ;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 186) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 22) . ';
           }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover{
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 230) . ' ;
           }         
           .oxi-add-info-box' . $oxiid . ' .oxi-info-icon{
                font-size: ' . $styledata[38] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 208) . ';

           }
            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon-icons{
                border-width: ' . $styledata[52] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 60) . ';
            }
            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons {
                height: ' . $styledata[44] . 'px ;
                width: ' . $styledata[44] . 'px ;
            }
            
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-icon-icons{
               border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 80) . ';
           }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-title{
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 116) . ';
           }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-contetn{
               font-size: ' . $styledata[134] . 'px;
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 144) . ';
           }
 
        }
        @media only screen and (max-width : 668px){
        
            .oxi-add-info-box-' . $oxiid . '-padding{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';                
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body{
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 171) . ' ;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
           }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover{
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 231) . ' ;
           }         
           .oxi-add-info-box' . $oxiid . ' .oxi-info-icon{
                font-size: ' . $styledata[39] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 209) . ';
               display: flex;
               justify-content: center;

           }
            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon-icons{
                border-width: ' . $styledata[53] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 61) . ';
            }
            
            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons {
                height: ' . $styledata[45] . 'px ;
                width: ' . $styledata[45] . 'px ;
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-icon-icons{
               border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
           }
           
           .oxi-add-info-box' . $oxiid . ' .oxi-info-title{
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 117) . ';
               display: flex;
               justify-content: center;
           }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-contetn{
               font-size: ' . $styledata[135] . 'px;
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 145) . ';
               display: flex;
               justify-content: center;
           } 
        }
        ';
    $js = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-add-info-box' . $oxiid . ' .oxi-info-contetn"));}, 500);';
    echo OxiAddonsInlineCSSData($js, 'js','oxi-addons-animation');
    echo OxiAddonsInlineCSSData($css);
}
