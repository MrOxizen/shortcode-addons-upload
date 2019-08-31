<?php

if (!defined('ABSPATH'))
    exit;

function oxi_info_boxes_style_7_shortcode($styledata = FALSE, $listdata = FALSE, $user = 'user') {
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
        $icons = $title = $content = $buttonText = '';
        $files = explode('||#||', $value['files']);
        if($files[5] != ''){
            $icons = '  
                            <div class="oxi-info-icon">
                                <div class="oxi-info-icon-icons">
                                    <img src="'. OxiAddonsUrlConvert($files[5]) .'">
                                </div> 
                            </div>';
        }
        if($files[1] != ''){
            $title = '  <div class="oxi-info-title" id="title">
                            ' . OxiAddonsTextConvert($files[1]) . '
                        </div>';
        }
        if($files[3] != ''){
            $content = ' <div class="oxi-info-contetn">
                            ' . OxiAddonsTextConvert($files[3]) . '
                         </div>';
        }//$buttonText
        if($files[7] != '' && $files[9] != ''){
            $buttonText = ' <div class="oxi-info-link">
                                <a href="'. OxiAddonsUrlConvert($files[7]). '" target="'.$styledata[253].'" > <span class="oxi-info-link-text">'.OxiAddonsTextConvert($files[9]).'</span></a>
                            </div>';
        }
        echo '      <div class="oxi-add-info-box-' . $oxiid . '-padding ' . OxiAddonsItemRows($styledata, 1) . '' . OxiAddonsAdminDefine($user) . ' oxi-addons-main-'.$value['id'].'" ' . OxiAddonsAnimation($styledata, 153) . ' >
                                        <div class="oxi-info-body">
                                            ' . $icons . '
                                            ' . $title . '
                                            ' . $content . '
                                            ' . $buttonText . '
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
        $css .= '.oxi-addons-main-'.$value['id'].' .oxi-info-body:hover::before{
               
               opacity: 1;
               background:linear-gradient('.$styledata[313].','.$styledata[313].'), url("'. OxiAddonsUrlConvert($files[5]) .'");
               background-repeat: no-repeat;
               background-size:cover;
            }';
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
                  position: relative;

                width: 100%;
            }
            .oxi-add-info-box-' . $oxiid . '-padding{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';                
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body{
                background: ' . $styledata[5] . ';
                    ' . OxiAddonsBoxShadowSanitize($styledata, 159) . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 169) . ' ;
                border-style: ' . $styledata[165] . ';
                border-color: ' . $styledata[166] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 185) . ';
                position: relative;
                display: flex;
                flex-direction: column;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
               
           }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body::before{
               content: "";
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                width: 100%; 
                transition: .5s ease; 
                z-index:11; 
           }
          
               
           .oxi-add-info-box' . $oxiid . ' .oxi-info-icon{
                font-size: ' . $styledata[39] . 'px;
                display: flex;
                justify-content: ' . $styledata[73] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 75) . ';
           }

            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon-icons{
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 271) . ' ;
                border-style: ' . $styledata[287] . ';
                border-color: ' . $styledata[288] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 57) . ';
                color: ' . $styledata[43] . ';
                background: ' . $styledata[157] . ';
            }
            
            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons {
                align-items: center;
                display: flex;
                justify-content: center;
                transition: none !important;
            }  
           .oxi-info-icon-icons img{
                width: ' . $styledata[45] . 'px ;
                max-width: 340px;
                max-height: 250px;
                opacity: 1;
           } 
            
           .oxi-add-info-box' . $oxiid . ' .oxi-info-title{
               width: 100%;
               float: left;
               color: ' . $styledata[95] . ';
               font-size: ' . $styledata[91] . 'px;
               ' . OxiAddonsFontSettings($styledata, 97) . ';
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
               z-index: 999;

           }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-title{
               color: ' . $styledata[353] . ';
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-contetn{
               font-size: ' . $styledata[119] . 'px;
               color: ' . $styledata[123] . ';
               ' . OxiAddonsFontSettings($styledata, 125) . '; 
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
               z-index: 999;
           }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-contetn{
               color: ' . $styledata[355] . ';
               transition: none !important;
            }
               
           .oxi-add-info-box' . $oxiid . ' .oxi-info-link{
               width: 100%;
               float: right;
               text-align: ' . $styledata[381] . ';
               padding:' . OxiAddonsPaddingMarginSanitize($styledata, 383) . ';
               z-index: 999;
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-link-text{
            ' . OxiAddonsFontSettings($styledata, 209) . '; 
                font-size: '.$styledata[203].';
                background: '.$styledata[215].';
                border-width: ' . $styledata[221] . 'px;
                border-style: ' . $styledata[217] . ';
                border-color: ' . $styledata[218] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 237) . ';
                color: '.$styledata[207].';
                padding: '.OxiAddonsPaddingMarginSanitize($styledata, 255) . ';
           }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-link a:hover .oxi-info-link-text{
                background: '.$styledata[359].';
                border-style: ' . $styledata[361] . ';
                border-color: ' . $styledata[362] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 365) . ';
                color: '.$styledata[357].';
            }
        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-add-info-box' . $oxiid . '{
                width: 100%;
            }
            .oxi-add-info-box-' . $oxiid . '-padding{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';                
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body{
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 170) . ' ;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 186) . ';
                display: flex;
                flex-direction: column;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
           }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover{
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 298) . ';
           }         
           .oxi-add-info-box' . $oxiid . ' .oxi-info-icon{
                font-size: ' . $styledata[40] . 'px;
                display: flex;
                justify-content: ' . $styledata[74] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 76) . ';
           }
            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon-icons{
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 272) . ' ;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 58) . ';
            }
            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons {
                height: ' . $styledata[46] . 'px ;
                width: ' . $styledata[46] . 'px ;
                align-items: center;
                display: flex;
                justify-content: center;
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-icon-icons{
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 338) . ' ;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 322) . ';
           }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-title{
               width: 100%;
               float: left;
               font-size: ' . $styledata[92] . 'px;
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 104) . ';
           }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-contetn{
               font-size: ' . $styledata[120] . 'px;
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 132) . ';
           }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-link{
               display: flex;
               justify-content: center;
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-link-text{
                font-size: '.$styledata[204].';
                border-width: ' . $styledata[222] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 238) . ';
                padding: '.OxiAddonsPaddingMarginSanitize($styledata, 256) . ';
           }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-link a:hover .oxi-info-link-text{
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 366) . ';
            } 
        }
        @media only screen and (max-width : 668px){
            .oxi-add-info-box' . $oxiid . '{
                width: 100%;
            }
            .oxi-add-info-box-' . $oxiid . '-padding{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';                
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body{
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 171) . ' ;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
                display: flex;
                flex-direction: column;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
           }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover{
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 299) . ';
           }         
           .oxi-add-info-box' . $oxiid . ' .oxi-info-icon{
                font-size: ' . $styledata[41] . 'px;
                display: flex;
                justify-content: ' . $styledata[75] . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 77) . ';
           }

            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon-icons{
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 273) . ' ;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 59) . ';
            }
            .oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons {
                height: ' . $styledata[47] . 'px ;
                width: ' . $styledata[47] . 'px ;
                align-items: center;
                display: flex;
                justify-content: center;
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-icon-icons{
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 339) . ' ;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 323) . ';
           }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-title{
               width: 100%;
               float: left;
               font-size: ' . $styledata[93] . 'px;
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 105) . ';
           }

           .oxi-add-info-box' . $oxiid . ' .oxi-info-contetn{
               font-size: ' . $styledata[121] . 'px;
               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 133) . ';
           }
  
           .oxi-add-info-box' . $oxiid . ' .oxi-info-link{
               display: flex;
               justify-content: center;
            }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-link-text{
                font-size: '.$styledata[205].';
                border-width: ' . $styledata[223] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 239) . ';
                padding: '.OxiAddonsPaddingMarginSanitize($styledata, 257) . ';
           }
           .oxi-add-info-box' . $oxiid . ' .oxi-info-link a:hover .oxi-info-link-text{
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 367) . ';
            }
           
        }
        ';
    $js = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-add-info-box' . $oxiid . ' .oxi-info-contetn"));}, 500);';
    echo OxiAddonsInlineCSSData($js, 'js','oxi-addons-animation');
    echo OxiAddonsInlineCSSData($css);                                                                                          
}
