<?php

if (!defined('ABSPATH'))
    exit;

function oxi_info_boxes_style_1_shortcode($styledata = FALSE, $listdata = FALSE, $user = 'user') {
    $stylename = $styledata['style_name'];
    $oxiid = $styledata['id'];
    $stylefiles = explode('||#||', $styledata['css']);
    $styledata = explode('|', $stylefiles[0]);
    $css = $image ='';
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
        echo '      <div class="oxi-add-info-box-' . $oxiid . '-padding ' . OxiAddonsItemRows($styledata, 1) . '' . OxiAddonsAdminDefine($user) . '" ' . OxiAddonsAnimation($styledata, 125) . ' >
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
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';                
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body{
                background: ' . $styledata[5] . ';
                display: flex;
                flex-direction: column;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
           }
                   
           .oxi-add-info-box' . $oxiid . ' .oxi-info-icon{
                font-size: ' . $styledata[39] . 'px;
                display: flex;
                justify-content: ' . $styledata[51] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 53) . ';

           }

            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon-icons{
                color: ' . $styledata[43] . ';
            }
            
            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons {
                height: ' . $styledata[47] . 'px ;
                width: ' . $styledata[47] . 'px ;
                align-items: center;
                display: flex;
                justify-content: center;
                transition: none !important;
            }
            
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-icon-icons{
               color: ' . $styledata[45] . ';
           }
           
           .oxi-add-info-box' . $oxiid . ' .oxi-info-title{
               width: 100%;
               float: left;
               color: ' . $styledata[73] . ';
               font-size: ' . $styledata[69] . 'px;
               ' . OxiAddonsFontSettings($styledata, 75) . ';
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
           }
            
           .oxi-add-info-box' . $oxiid . ' .oxi-info-contetn{
               font-size: ' . $styledata[97] . 'px;
               color: ' . $styledata[101] . ';
               ' . OxiAddonsFontSettings($styledata, 103) . '; 
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 109) . ';
           }
        @media only screen and (min-width : 669px) and (max-width : 993px){

            .oxi-add-info-box-' . $oxiid . '-padding{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';                
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
           }
                   
           .oxi-add-info-box' . $oxiid . ' .oxi-info-icon{
                font-size: ' . $styledata[40] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 54) . ';
                display: flex;
               justify-content: center;
           }

            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons {
                height: ' . $styledata[48] . 'px ;
                width: ' . $styledata[48] . 'px ;
            }

           .oxi-add-info-box' . $oxiid . ' .oxi-info-title{
               font-size: ' . $styledata[70] . 'px;
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
               display: flex;
               justify-content: center;
           }
            
           .oxi-add-info-box' . $oxiid . ' .oxi-info-contetn{
               font-size: ' . $styledata[98] . 'px;
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 110) . ';
               display: flex;
               justify-content: center;
           }
 
        }
        @media only screen and (max-width : 668px){
            .oxi-add-info-box-' . $oxiid . '-padding{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';                
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
           }
                   
           .oxi-add-info-box' . $oxiid . ' .oxi-info-icon{
                font-size: ' . $styledata[41] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 55) . ';
                display: flex;
               justify-content: center;
           }

            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons {
                height: ' . $styledata[49] . 'px ;
                width: ' . $styledata[49] . 'px ;
            }

           .oxi-add-info-box' . $oxiid . ' .oxi-info-title{
               font-size: ' . $styledata[71] . 'px;
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
               display: flex;
               justify-content: center;
           }
            
           .oxi-add-info-box' . $oxiid . ' .oxi-info-contetn{
               font-size: ' . $styledata[99] . 'px;
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 111) . ';
               display: flex;
               justify-content: center;
           }

        }
        ';
    $js = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-add-info-box' . $oxiid . ' .oxi-info-contetn"));}, 500);';
    echo OxiAddonsInlineCSSData($js, 'js','oxi-addons-animation');
    echo OxiAddonsInlineCSSData($css);
}
