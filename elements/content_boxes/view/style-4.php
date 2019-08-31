<?php

if (!defined('ABSPATH'))
    exit;

function oxi_content_boxes_style_4_shortcode($styledata = FALSE, $listdata = FALSE, $user = 'user') {
    $stylename = $styledata['style_name'];
    $oxiid = $styledata['id'];
    $stylefiles = explode('||#||', $styledata['css']);
    $styledata = explode('|', $stylefiles[0]);
    $css = '';
    echo '<div class="oxi-addons-container">';
    echo '<div class="oxi-addons-row">';
    foreach ($listdata as $value) {
        $data = explode('||#||', $value['files']);
        $heading = $content = $img = '';
        if ($data[3] != '') {
            $heading = '
                    <div class="oxi-addons-content-boxes-heading">
                        ' . OxiAddonsTextConvert($data[3]) . '
                    </div>
                ';
        }
        if ($data[5] != '') {
            $content = '
                    <div class="oxi-addons-content-boxes-content">
                    ' . OxiAddonsTextConvert($data[5]) . '
                </div>  
                ';
        }
        if ($data[1] != '') {
            $img = '
                    <div class="oxi-addons-content-boxes-images  oxi-addons-content-boxes-images-' . $value['id'] . '">
                       
                    </div>
                ';
            $css .= '.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-images-' . $value['id'] . '{
                            background: linear-gradient(rgba(255, 255, 255, 0.00), rgba(255, 255, 255, 0.00)), url("' . OxiAddonsUrlConvert($data[1]) . '");
                            -moz-background-size: 100% 100%;
                            -o-background-size: 100% 100%;
                            background-size: 100% 100%;
                        }';
        }
        echo '<div class="' . OxiAddonsItemRows($styledata, 127) . '  ' . OxiAddonsAdminDefine($user) . '">';
        echo ' 
                <div class="oxi-addons-content-boxes-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 53) . '>
                    <div class="oxi-addons-content-boxes-' . $oxiid . '-data">  
                      ' . $img . ' 
                        <div class="oxi-addons-content-boxes-' . $oxiid . '-content">
                          ' . $heading . '
                          ' . $content . ' 
                        </div>    
                    </div>
                </div>';
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
    }
    echo '</div>';
    echo '</div>';
    $css .= '.oxi-addons-content-boxes-' . $oxiid . '{
                    width: 100%;
                    position: relative;
                    max-width: ' . $styledata[3] . 'px;
                    margin: 0 auto;
                }
                .oxi-addons-content-boxes-' . $oxiid . '-data{
                    width: 100%;
                    float:left;
                    background:' . $styledata[121] . ';                   
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
                    ' . OxiAddonsBoxShadowSanitize($styledata, 47) . '
                }              
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-images{
                    width:100%; 
                    height:' . $styledata[117] . 'px; 
                    float:left;
                } 
                
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-' . $oxiid . '-content{
                    width:100%;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
                    float:left;
                } 
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-heading{
                   width: 100%;
                   float:left;
                   color: ' . $styledata[63] . ';
                   font-size: ' . $styledata[59] . 'px;
                   ' . OxiAddonsFontSettings($styledata, 65) . '    
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';   
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-content{
                   width: 100%;
                   float:left;
                   color: ' . $styledata[91] . ';
                   font-size: ' . $styledata[87] . 'px;
                   ' . OxiAddonsFontSettings($styledata, 93) . ';    
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';   
                }   
                .oxi-addons-content-boxes-' . $oxiid . ':hover .oxi-addons-content-boxes-content{
                    color:' . $styledata[115] . ';
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){
                        .oxi-addons-content-boxes-' . $oxiid . '{
                           max-width: ' . $styledata[4] . 'px;
                       }
                       .oxi-addons-content-boxes-' . $oxiid . '-data{             
                           margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
                       }  
                       .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-images{ 
                            height:' . $styledata[118] . 'px;  
                        } 
                       .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-' . $oxiid . '-content{
                           padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
                       } 
                       .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-heading{
                          font-size: ' . $styledata[60] . 'px;    
                          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 72) . ';   
                       }
                       .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-content{
                          font-size: ' . $styledata[88] . 'px;
                          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 100) . ';   
                       } 
                     }
                @media only screen and (max-width : 668px){
                    .oxi-addons-content-boxes-' . $oxiid . '{
                         max-width: ' . $styledata[5] . 'px;
                     }
                     .oxi-addons-content-boxes-' . $oxiid . '-data{            
                         margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
                     }   
                     .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-images{ 
                        height:' . $styledata[119] . 'px;  
                    } 
                     .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-' . $oxiid . '-content{
                         padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
                     } 
                     .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-heading{
                        font-size: ' . $styledata[61] . 'px;    
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 3) . ';   
                     }
                     .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-content{
                        font-size: ' . $styledata[89] . 'px;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';   
                     }  
                }
                ';

    $jquery = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-addons-content-boxes-' . $oxiid . '-data"));}, 500);';
    echo OxiAddonsInlineCSSData($css);
    echo OxiAddonsInlineCSSData($jquery,'js');
}
